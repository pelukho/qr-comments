<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'user_id',
        'review_id'
    ];

    public function review()
    {
        return $this->belongsTo(Reviews::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
