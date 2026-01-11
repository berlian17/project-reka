@php
    $topicConfig = match($contactMail->topic) {
        'quotation' => [
            'title'     => 'Quotation Request',
            'subtitle'  => 'New project quotation inquiry',
            'alert'     => 'A quotation request has been received. Please prepare a professional and detailed proposal.',
        ],
        'technical' => [
            'title'     => 'Technical Support Request',
            'subtitle'  => 'Engineering assistance required',
            'alert'     => 'Immediate technical review is required for this request.',
        ],
        'partnership' => [
            'title'     => 'Partnership Inquiry',
            'subtitle'  => 'Strategic collaboration opportunity',
            'alert'     => 'A potential partnership opportunity has been submitted.',
        ],
    };

    $replySubject = rawurlencode(
        'Re: ' . $topicConfig['title'] . ' - ' . $contactMail->subject
    );
@endphp

<!DOCTYPE html>
<html>
<body style="margin: 0;padding: 0;background: #eef3f8;font-family: Arial,Helvetica,sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" style="padding: 20px 0;">
        <tr>
            <td align="center">

                {{-- WRAPPER --}}
                <table width="680" cellpadding="0" cellspacing="0" style="background: #ffffff;">
                
                    {{-- HEADER --}}
                    <tr>
                        <td style="background:#003A63;padding:28px;border-bottom:4px solid #CE2919;">
                            <table width="100%">
                                <tr>
                                    <td>
                                        <h1 style="margin:0;color:#ffffff;font-size:22px;">
                                            {{ $topicConfig['title'] }}
                                        </h1>
                                        <p style="margin:6px 0 0;color:#e0e7ff;font-size:14px;">
                                            {{ $topicConfig['subtitle'] }}
                                        </p>
                                    </td>
                                    <td align="right">
                                        @if(!empty($appSetting->logo2))
                                            <img src="{{ config('app.cms_url') . $appSetting->logo2 }}" alt="REKA"
                                                height="30" style="display: block;">
                                        @endif
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    {{-- CONTENT --}}
                    <tr>
                        <td style="padding:32px;">

                            {{-- ALERT --}}
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom: 24px;">
                                <tr>
                                    <td style="background: #F4F9FF;border-radius: 10px;padding: 16px;font-size: 14px;line-height: 1.6;color: #1e293b;">
                                        {{ $topicConfig['alert'] }}
                                    </td>
                                </tr>
                            </table>

                            {{-- CONTACT INFO --}}
                            <h3 style="margin: 0 0 12px;font-size: 16px;color: #003A63;border-bottom: 2px solid #CE2919;padding-bottom: 6px;">
                                Contact Information
                            </h3>

                            <table width="100%" cellpadding="0" cellspacing="0" style="font-size: 14px;">
                                @foreach([
                                    'Name'      => $contactMail->full_name,
                                    'Company'   => $contactMail->company_name,
                                    'Email'     => $contactMail->email,
                                    'Subject'   => $contactMail->subject,
                                ] as $label => $value)
                                    <tr>
                                        <td style="background: #F4F9FF;padding: 12px;font-weight: bold;font-size: 12px;text-transform: uppercase;color: #003A63; border-left: 4px solid #003A63; width: 35%;">
                                            {{ $label }}
                                        </td>
                                        <td style="background:#F4F9FF;padding:12px;">
                                            @if($label === 'Email')
                                                <a href="mailto:{{ $value }}" style="color:#003A63;text-decoration:none;">
                                                    {{ $value }}
                                                </a>
                                            @else
                                                {{ $value }}
                                            @endif
                                        </td>
                                    </tr>
                                    <tr><td colspan="2" height="8"></td></tr>
                                @endforeach
                            </table>

                            {{-- MESSAGE --}}
                            <h3 style="margin: 24px 0 12px;font-size: 16px;color: #003A63;border-bottom: 2px solid #CE2919;padding-bottom: 6px;">
                                Message
                            </h3>

                            <div style="background: #F4F9FF;border-radius: 10px;padding: 16px;font-size: 14px;line-height: 1.7;color: #1e293b;">
                                {!! nl2br(e($contactMail->message)) !!}
                            </div>

                            {{-- BUTTON --}}
                            <table align="center" cellpadding="0" cellspacing="0" style="margin: 32px auto;">
                                <tr>
                                    <td style="background: #003A63;padding: 12px 26px;border-radius: 10px;">
                                        <a href="mailto:{{ $contactMail->email }}?subject={{ $replySubject }}"
                                            style="color: #ffffff;text-decoration: none;font-weight: bold;font-size: 13px;">
                                            Reply via Email
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            {{-- META --}}
                            <div style="background: #f8fafc;border-left: 4px solid #CE2919;padding: 14px;font-size: 12px;color: #475569;line-height: 1.6;">
                                <strong>Submitted:</strong> {{ $contactMail->created_at->format('d F Y, H:i') }} WIB<br>
                                <strong>IP Address:</strong> {{ $contactMail->ip_address }}
                            </div>
                        </td>
                    </tr>

                    {{-- FOOTER --}}
                    <tr>
                        <td style="background: #1e293b;padding: 22px;text-align: center;color: #ffffff;font-size: 12px;">
                            This email is generated automatically. Please do not reply to this message.<br>
                            <span style="opacity: .7;">
                                © {{ date('Y') }} {{ $appSetting->app_name }}
                            </span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
