<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\subcategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\subcategorystorerequest;
use App\Http\Requests\subcategoryupdaterequest;

class subcategorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $subcategories = subcategory::get(['id', 'name','category_id','created_at']);
      return view('subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=category::get(['id','name','created_at']);
      return view('subcategory.create' , compact( 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(subcategorystorerequest $request)
    {
        subcategory::create([
      'category_id'=>$request->category_id,
      'name'=>$request->subcategory_name,
      'slug'=>Str::slug($request->subcategory_name),
      'is_active'=>$request->filled('is_active'),
    //   'created_at'=$request->created_at
        ]);

        Session::flash('status','subcategory created successfully');
return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categories=category::get(['id','name','created_at']);
        $subcategory=subcategory::find($id);
      return view('subcategory.edit' , compact( 'categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(subcategoryupdaterequest $request, $id)
    {
        $subcategory=subcategory::find($id);
        $subcategory->update([
            'category_id'=>$request->category_id,
            'name'=>$request->subcategory_name,
            'slug'=>Str::slug($request->subcategory_name),
            'is_active'=>$request->filled('is_active'),
          //   'created_at'=$request->created_at
              ]);

            //   Session::flash('status','subcategory updated successfully');
            Toastr::success('category updated successfully');
      return redirect()->route('subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       subcategory::find($id)->delete();
       Session::flash('status','subcategory deleted successfully');
       return redirect()->route('subcategory.index');
    }
}
