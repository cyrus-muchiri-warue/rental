<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->
 <div class="row"> 
   <div class="col-md-12">
        <form>
            <div class="card card-solid">
                 <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">LOWA  Renegade GTX Mid Hiking House Review</h3>
                        <div class="col-12">
                            <img src="{{Storage::url($post[0]->image)}}" class="product-image" alt="Product Image">
                        </div>
                        
                        </div>
                        <div class="col-12 col-sm-6">
                        <h3 class="my-3">{{$post[0]->Building_name}}</h3>
                        <p>{{$post[0]->description}}</p>
                        <hr>
                        <p>{{$post[0]->location}}</p>
                        <div class="bg-gray py-2 px-3 mt-4">
                            <h2 class="mb-0">
                            Kshs. {{$post[0]->price}}/= 
                            </h2>
                            <h4 class="mt-0">
                            <h5>Inclusive of water Bills </h5>
                            <h5>Exclusive of Electricity Bills </h5>
                            </h4>
                        </div>

                        <div class="mt-4">
                            <a href="{{route('posts.edit',$post[0]->id)}}" class="btn btn-primary btn-lg btn-flat">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg><span><h2 class="inline-block">Edit</h2></span>
                            </a>

                        
                        </div>
                     </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
               
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus. </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
              
            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
   </form>
   </div>

  </div>      
     
 
  
</div>