<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\ContactMail as ModelsContactMail;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function sendMail(Request $request)
    {
        $appSetting = Setting::first();

        $key = 'contact-form:' . $request->ip() . '|' . sha1($request->userAgent());
        if (RateLimiter::tooManyAttempts($key, 3)) {
            $seconds = RateLimiter::availableIn($key);
            
            return back()->with('error', 'Too many attempts. Please try again in ' . ceil($seconds / 60) . ' minutes.');
        }

        if ($request->filled('website')) {
            Log::warning('Bot detected on contact form', [
                'ip' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);
            
            // Pretend success untuk bot
            return back()->with('success', 'Thank you! Your message has been sent.');
        }

        $validated = $request->validate([
            'fullName'          => 'required|string|max:100|regex:/^[\pL\s\-]+$/u',
            'companyName'       => 'required|string|max:100',
            'email'             => 'required|email:rfc|max:255',
            'topic'             => 'required|in:quotation,technical,partnership',
            'subject'           => 'required|string|max:200',
            'message'           => 'required|string|min:10|max:2000',
        ], [
            'fullName.regex'    => 'Full name can only contain letters, spaces, and hyphens.',
            'email.email'       => 'Please provide a valid email address.',
        ]);

        DB::beginTransaction();

        try {
            $contactMail = ModelsContactMail::create([
                'full_name'    => strip_tags($validated['fullName']),
                'company_name' => strip_tags($validated['companyName']),
                'email'        => strip_tags($validated['email']),
                'topic'        => $validated['topic'],
                'subject'      => strip_tags($validated['subject']),
                'message'      => strip_tags($validated['message']),
                'ip_address'   => $request->ip(),
                'user_agent'   => Str::limit($request->userAgent(), 255),
                'status'       => 'unread',
            ]);

            DB::commit();

            $mailDestination = $appSetting->email ?? config('mail.from.address');
            Mail::to($mailDestination)
                ->send(new ContactMail($appSetting, $contactMail));

            RateLimiter::hit($key, 600); // 10 minutes

            Log::info('Contact form submitted', [
                'id'    => $contactMail->id,
                'email' => $contactMail->email,
                'ip'    => $request->ip(),
            ]);

            return back()->with('success', 'Thank you for contacting us! We will get back to you soon.');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Contact form error', [
                'error' => $e->getMessage(),
                'ip'    => $request->ip(),
            ]);

            return back()
                ->withInput()
                ->with('error', 'An error occurred. Please try again later.');
        }
    }
}
