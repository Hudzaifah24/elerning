<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'status',
        'no_invoice',
        'user_id',
    ];

    protected function user() {
        return $this->belongsTo(User::class);
    }
}
