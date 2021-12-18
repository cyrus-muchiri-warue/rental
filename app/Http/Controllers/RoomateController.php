<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Location;
use App\Models\Roomate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        //
        $roomates=Roomate::paginate(15);
        return view('template.tenant.roomate-index',compact('roomates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys=Category::all();
        $locations=Location::all();
        return view('template.tenant.roomate-create',compact('categorys','locations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile("img"))
        {
            $file=$request->file('img');
            $imgName=$file->getClientOriginalName();
            $file->storeAs('public',$imgName);

        }else{
            
        }
        $roomate=new Roomate();
        $roomate->user_id=Auth::user()->id;
        $roomate->topic=$request->topic;  
        $roomate->category=$request->category;  
        $roomate->location=$request->location;  
        $roomate->description=$request->description;  
        $roomate->price=$request->price; 
        $roomate->image=$imgName; 
        $roomate->save(); 


        return redirect(route('roomates.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Roomate  $roomate
     * @return \Illuminate\Http\Response
     */
    public function show(Roomate $roomate)
    {
        $roomate=Roomate::where('id',$roomate->id)->get();
        return view('template.tenant.roomate-show',compact('roomate'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Roomate  $roomate
     * @return \Illuminate\Http\Response
     */
    public function edit(Roomate $roomate)
    {
        //
        return view('template.tenant.roomate-edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Roomate  $roomate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Roomate $roomate)
    {
        //
        return redirect(route('Roomates.show'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Roomate  $roomate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomate $roomate)
    {
        //
        Roomate::find($roomate->id)->delete();
        return redirect(route('roomates.index'));
    }
    public function ownPost()
    {
        $roomates=Roomate::paginate(15);
       return view('template.tenant.roomate-owner-index',compact('roomates'));
    }
}
