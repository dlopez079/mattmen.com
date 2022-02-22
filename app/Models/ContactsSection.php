<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsSection extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass asignable.
     * 
     */
    protected $fillable = [
        'first_name',
        'last_name', 
        'email',
        'phone',
        'county',
        'message'
    ];
}
