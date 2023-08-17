<?php

namespace App\Http\Livewire\Admin\FaqCategory;

use App\Models\FAQCategory;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {   
        
            $categories = FAQCategory::orderBy('id','DESC')->paginate(10);        
        return view('livewire.admin.faq-category.index', ['categories' => $categories]);
    }
}
