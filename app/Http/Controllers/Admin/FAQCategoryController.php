<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use app\Models\FAQCategory ;
use app\Models\FAQ; 

class FAQCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('admin.FAQCategory.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FAQCategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       FAQCategory::create($this->validateFAQCategory());

        return redirect(route('admin.FAQCategories.index'));
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\FAQCategory  $fAQCategory
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(FAQCategory $FAQCategory)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FAQCategory  $fAQCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(FAQCategory $FAQCategory)
    {
        return view('FAQCategory.edit', compact('FAQCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FAQCategory  $fAQCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FAQCategory $FAQCategory)
    {
        $FAQCategory->update($this->validateFAQCategory());

        return redirect(route('admin.FAQCategories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FAQCategory  $fAQCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(FAQCategory $FAQCategory)
    {
        $FAQCategory->delete();
        return redirect(route('admin.FAQCategories.index'));
    }

    protected function validateFAQCategory(){
        return request()->validate([
            'category_name' => 'required',
        ]);
    }
}
