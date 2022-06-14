<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Attendancedb extends Model

{
    use HasFactory;
    use Notifiable;

    protected $fillable = ['name', 'email', 'password',];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
