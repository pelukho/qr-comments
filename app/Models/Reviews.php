<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reviews extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'review_groups_id',
        'review_content',
        'review_author',
        'review_author_email',
        'review_author_phone',
        'review_rating',
        'review_status',
    ];

    /**
     * @param int $id
     * @return string
     */
    public function getCategoryName(int $id)
    {
        return ReviewGroup::query()->find($id)->name;
    }
}
