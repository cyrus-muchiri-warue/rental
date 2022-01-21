<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;

class LocationController extends Controller
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
          # code...

          $locations=Location::all();
          return view('template.landlord.location-index',compact('locations'));
      } else {
          # code...
          $locations=Location::all();
        return view('template.tenant.location-index',compact('locations'));
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
            $locations=Location::all();
           return view('template.landlord.location-create',compact('locations'));
        } else {
            $locations=Location::all();
        return view('template.tenant.location-create',compact('locations'));
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
       
        $location=new Location();
        $location->location=$request->location;
        $location->save();
        return redirect()->back()->with('status','new location was create successfully');
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
            $location=Location::find($id);
        return view('template.landlord.location-edit',compact('location'));
        } else {
            $location=Location::find($id);
            return view('template.tenant.location-edit',compact('location'));
        }
        
        //return view('template.landlord.location-index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
      
        
        $user=User::find(auth()->user()->id);
        if ($user->hasRole('landlord')) {
            $location=Location::find($id);
        return view('template.landlord.location-edit',compact('location'));
        } else {
            $location=Location::find($id);
            return view('template.tenant.location-edit',compact('location'));
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
       $location=Location::find($id);
       $location->location=$request->location;
       $location->save();
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
        Location::find($id)->delete();
        return redirect(route('locations.index'));
    }
}
