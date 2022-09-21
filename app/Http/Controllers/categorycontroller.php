<?php

namespace App\Http\Controllers;


use App\Models\category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\categorystorerequest;

class categorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $categories = category::get(['id','name','slug',]);
        // return $categories;
        $categories = category::get(['id', 'name','created_at']);
      return view('category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categorystorerequest $request)
    {

    //    dd($request->all());

category::create([
    'name' => $request->category_name,
    'slug' => str::slug($request->category_name),
    'is_active' => $request->filled('is_active')
]);
// Session::flash('status','category created successfully');
Toastr::success('category created successfully');
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
        // dd($id);
        $categories=category::get(['id','name','created_at']);
        $categories = category::find($id);
        return view('category.edit', compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categories=category::find($id);
        $categories->update([
            'categories'=>$request->category_id,
            'name'=>$request->category_name,
            'is_active'=>$request->filled('is_active'),
          //   'created_at'=$request->created_at
              ]);

            //   Session::flash('status','subcategory updated successfully');
            Toastr::success('category updated successfully');
      return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        category::find($id)->delete();
        Session::flash('status','category deleted successfully');
        return redirect()->route('category.index');
     }


    }

