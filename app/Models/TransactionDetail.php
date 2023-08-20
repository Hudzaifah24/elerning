<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaction_details';

    protected $fillable = [
        'video_id',
        'transaction_id',
    ];

    protected function videos() {
        return $this->belongsTo(Video::class);
    }

    protected function transaction() {
        return $this->belongsTo(Transaction::class);
    }
}
