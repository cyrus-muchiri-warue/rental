<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
<div class="row">
  <div class="col-md-12">
  <div class="grid grid-cols-3 grid-flow-row">
      @foreach($posts as $post)
          
       
          <!--begin card-->
          <div class=" bg-white m-2 overflow-hidden rounded shadow-md relative hover:shadow-2xl "> 
                
                          <img src="{{Storage::url($post->image) }}" alt="image here" class="w-full h-48 sm:48 object-cover">
                          <!--end card body-->
                          <div class="content m-4">
                            <h1 class="text-lg font-semibold text-red-500 uppercase inline-block">{{$post->Building_name}}
                                
                            </h1>
                            <small class="text-gray-700 text-sm inline-block "> created at : {{\Carbon\Carbon::parse($post->updated_at)->format('d M Y')}} </small>
                              <h1 class="font-bold ">{{$post->category}} for rent in {{$post->location}}, meru, Kenya</h1>
                              <h1 class="text-sm">KES {{$post->price}} / month</h1>
                              <!--show and delete section-->
                              <div class="flex justify-between">
                                      <a href="{{route('posts.show',$post->id)}}">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg><span>Read more...</span>
                                      </a>
                                      
                                      <a href=""onclick="if(confirm('Are you sure you want to delete this post'))
                                              {
                                                event.preventDefault()
                                          document.getElementById('delete-post-{{$post->id}}').submit();
                                        }else
                                        {
                                          event.preventDefault();
                                        }
                                        "> 
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg><span>Delete</span>
                                     </a>
                                    
                                        <!--delete-form-->
                                        <form id="delete-post-{{$post->id}}"action="{{route('posts.destroy',$post->id)}}" method="post">
                                                      @csrf
                                                      @method('DELETE')
                                        </form>
                                      <!--end-delete-form-->
                              </div>
                                <!--end-show and delete section-->
                              </div>
                            <!--end card body-->
                      <!--time-->                
                  <div class="bg-gray-600 text-white text-xs rounded-full lowercase p-2 absolute top-0 mt-2 ml-2" >
                      <svg class="w-5  inline-block" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                      <span>    {{$post->updated_at->diffForHumans()}}</span>
                  </div>
                        <!--endtime-->    
             </div>
        <!--end card-->
      
        
  @endforeach
          </div>
      </div>    
  </div>
  <!--end row 1-->
          <div class="row">
              <div class="col-md-12">
              {{ $posts->links() }}
                </div>
          </div>
          
</div>