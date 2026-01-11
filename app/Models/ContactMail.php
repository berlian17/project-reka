<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMail extends Model
{
    protected $table = 'contact_mails';

    protected $fillable = [
        'full_name',
        'company_name',
        'email',
        'topic',
        'subject',
        'message',
        'ip_address',
        'user_agent',
        'status',
        'read_at',
    ];

    protected $casts = [
        'read_at'       => 'datetime',
        'created_at'    => 'datetime',
        'updated_at'    => 'datetime',
    ];
}
