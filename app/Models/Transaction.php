<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Transaction extends Model
{
    use HasFactory;
    protected $table = 'transactions';

    // protected $guarded = ['id'];
    protected $fillable = [
        'id',
        'name',
        'amount',
        'contact_id',
    ];
    public function contacts(): BelongsToMany
    {
        return $this->belongsToMany(Contact::class);
    }
}
