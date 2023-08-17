<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ; 
use App\Models\FAQCategory;

class FAQController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = FAQCategory::all();
    
        if (request('categories')){
            $questions = FAQ::whereIn('id', function ($query){
                $query->select('faq_id')->from('faq_faqcategories')->where('faq_category_id', (int) request('categories'));
            })->simplepaginate(10);
        } else {
            $questions = FAQ::simplepaginate(10);
        }
    
        return view("admin.FAQ.index", ["categories" => $categories, "questions" => $questions]);
    }

    public function indexAdmin()
    {

        return view('admin.FAQ.indexAdmin', ["FAQS" => FAQ::simplepaginate(20)]);
    }
    
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FAQ.create', ['categories' => FAQCategory::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $FAQ = FAQ::create($this->validateFAQ());
        $FAQ->categories()->attach(request('categories'));
     
        return redirect(route('admin.FAQ.index'));
        
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\FAQ  $fAQ
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(FAQ $FAQ)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQ $FAQ)
    {
        return view('FAQ.edit', compact("FAQ"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQ $FAQ)
    {
        $FAQ->update($this->validateFAQ());

        return redirect(route('admin.FAQ.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQ  $fAQ
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQ $FAQ)
    {
        $FAQ->delete();
        return redirect(route('admin.FAQ.index'));
    }

    protected function validateFAQ(){
        return request()->validate([
            'question_name' => 'required',
            'question_answer' => 'required',
        ]);
    }
}