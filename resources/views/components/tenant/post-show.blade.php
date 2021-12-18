<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    
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
              
               
              <a href="" id='submit' class="btn btn-primary btn-lg btn-flat">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
              </svg>
                    <span>
                      <h2 class="inline-block">Place Order</h2>
                    </span>
                </a>               
              </div>
             <p  id="status" hidden ></p>
           <form id='submit-order'action="{{route('orders.store')}}" method="post">
             @csrf
             <input type="hidden" name="userId" value="{{auth()->user()->id}}"id="user-id">
             <input type="hidden" name="postId" value=""id="post-id">
             <input hidden type="submit" >
           </form>
           

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">

                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
               
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
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

