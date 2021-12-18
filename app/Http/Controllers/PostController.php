<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Location;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\directoryExists;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::where('user_id','=',Auth::user()->id)->orderBy('id', 'DESC')->paginate(9);
        return view("template.landlord.post-index",compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locations=Location::all();

        $categorys=Category::all();
        return view("template.landlord.post-create",compact('categorys','locations'));
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
            $post=new Post();
            $post->user_id=Auth::user()->id;
            $post->Building_name=$request->houseName;  
            $post->category=$request->category;  
            $post->location=$request->location;  
            $post->description=$request->description;  
            $post->price=$request->price; 
            $post->image=$imgName; 
            $post->save(); 
            return redirect()->back()->with('status','the post  was created successfully');

        }else{
            
            dd('no img tag');
        }
       
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
        $post=Post::where("id","=",$id)->get();
        return view("template.landlord.post-show",compact('post'));
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
        $post=Post::find($id);

        return view("template.landlord.post-edit",compact('post'));
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

        
        if($request->hasFile("img"))
        {
            $file=$request->file('img');
            $imgName=$file->getClientOriginalName();
            $file->storeAs('public',$imgName);

        }else{
            
        }
        $post=Post::where('id',$id)->first();
        //$post->user_id=Auth::user()->id;
        $post->Building_name=$request->houseName;  
        $post->category=$request->category;  
        $post->location=$request->location;  
        $post->description=$request->description;  
        $post->price=$request->price; 
        $post->image=$imgName; 
        $post->save();
        return redirect("/landlord/posts/".$id);
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       Post::where("id",$id)->delete();
        
        return redirect()->back();
    }
}
