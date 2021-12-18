<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $bids=Bid::all();
        return view('template.tenant.bid-index',compact('bids'));
    }
    public function notification()
    {
        //
        
        $bids=Bid::all();
        return view('template.tenant.notifications-index',compact('bids'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $bid=new Bid();
        $bid->user_id=$request->userId;
        $bid->roomate_id=$request->roomateId;
        $bid->amount=$request->amount;
        $bid->save();
        return response()->json(['status'=>'success','data'=>$request->all()]);
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function show(Bid $bid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function edit(Bid $bid)
    {
        //
        $bid=Bid::find($bid->id);
        return view('template.tenant.bid-edit',compact('bid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bid $bid)
    {
        //
        $bid=Bid::find($bid->id);
        $bid->status=$request->status;
        $bid->update();
        return redirect()->back()->with('status','bid was successfully updated');
        

    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bid  $bid
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bid $bid)
    {
        //
        $bid=Bid::find($bid->id)->delete();
        
         //$delete!=null? return redirect()->back()->with('status','Bid was deleted succesfully'): return 'model not found';
        return redirect()->back()->with('status','Bid was deleted succesfully') ;
    }
}
