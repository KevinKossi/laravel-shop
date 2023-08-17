<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQ extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'faqs';
    protected $fillable = [
        'question_name',
        'question_answer',
    ];

    public function categories(){
        return $this->belongsToMany(\App\Models\FAQCategory::class, 'faq_faqcategories', 'faq_id', 'faq_category_id');
    }
}