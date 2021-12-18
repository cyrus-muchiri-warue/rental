<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RoomateController;
use App\Models\Order;
use App\Models\Post;
use App\Models\Roomate;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::prefix('tenant')->group(function () {
    Route::get('posts', function()
        {
            $posts=Post::orderBy('id', 'DESC')->Paginate(9);
            return view('template.tenant.post-index',compact('posts'));
        })->name("tenant.index");
        
    Route::get('posts/{id}', function($id)
        { 
            $post=Post::where("id",$id)->get();
            return view('template.tenant.post-show',compact('post'));
        })->name('tenant.show');
    Route::get('orders',function(){
           
        $orders=Order::all();
        return view('template.tenant.order-index',compact('orders'));

    })->name('tenant.orders.index');
    
   
    Route::get('check-out/{id}', function($id)
        { 
            $post=Post::where("id",$id)->get();
            $landlord=User::where("id",$post[0]->user_id)->get();
            return view('template.tenant.check-out',compact('post','landlord'));
        })->name('checkout.show');
    Route::get('/My-Post', [RoomateController::class, 'ownPost'])->name('ownpost');
    Route::resource('/roomates',RoomateController::class);
});