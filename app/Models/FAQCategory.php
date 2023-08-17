<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FAQCategory extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'faqs_categories';
    protected $fillable = [
        'category_name',
    ];
    public function questions(){
        return $this->belongsToMany(\App\Models\FAQ::class, 'faqs_faqs_categories', 'faq_category_id', 'faq_id');
    }

}
