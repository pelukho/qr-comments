<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReviewGroup extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name'];

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'users_review_groups');
    }
}
