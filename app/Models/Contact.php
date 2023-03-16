<?php

namespace App\Models;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Mail;

class Contact extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    

     public static function boot() {
  
        parent::boot();
  
        static::created(function ($item) {
                
            $adminEmail = "ubalarabe.cs@buk.edu.ng";
            Mail::to($adminEmail)->send(new ContactMail($item));
        });
    }
}
