<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactTransaction extends Model
{
    use HasFactory;

    protected $table = 'contact_transaction';

    protected $fillable = [
        'contact_id',
        'transaction_id',
    ];
}