<?php

namespace App\Http\Livewire\Admin\Faq;

use App\Models\FAQ;
use App\Models\FAQCategory;
use Livewire\Component;

class Index extends Component
{
    public function render()
    
        {
            $categories = FAQCategory::all();
            if (request('categories')){
                $questions = FAQ::whereIn('id', function ($query){
                    $query->select('faq_id')->from('faq_faqcategories')->where('faq_category_id', (int) request('categories'));
                })->simplepaginate(10);
            } else {
                $questions = FAQ::simplepaginate(10);
            }

            // $faqs = FAQ::orderBy('id','DESC')->paginate(10);
            return view('livewire.admin.faq.index', ["categories" => $categories, "questions" => $questions]);
        
    }
}
