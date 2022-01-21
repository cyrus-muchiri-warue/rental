<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $user=User::find(auth()->user()->id);
        if ($user->hasRole('landlord')) {
            $categorys=Category::all();
    
        return view("template.landlord.category-index",compact("categorys"));
           
        } else {
            $categorys=Category::all();
    
            return view("template.tenant.category-index",compact("categorys"));
        }
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user=User::find(auth()->user()->id);
        if ($user->hasRole('landlord')) {
            return view('template.landlord.category-create');
        } else {
            return view('template.tenant.category-create');
        }
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      
        
        $category=new Category($request->all());
        $category->save();
        
       
        return redirect()->back();
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
        $user=User::find(auth()->user()->id);
        if ($user->hasRole('landlord')) {
            return view('template.landlord.category-show');
        } else {
            return view('template.landlord.category-show');
        }
       
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::find(auth()->user()->id);
        if ($user->hasRole('landlord')) {
            # code...
            $category=Category::where("id",$id)->get();
            return view('template.landlord.category-edit',compact('category'));
        } else {
            $category=Category::where("id",$id)->get();
        
        
            return view('template.tenant.category-edit',compact('category'));
        }
        
       
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
        //
        //return $request->all();
        $category=Category::find($id);
        $category->category=$request->category;
        $category->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
        Category::find($id)->delete();
        return redirect(route('category.index'));
    }
}
