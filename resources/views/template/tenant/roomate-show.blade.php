@extends("template.app")
@section("stylesheet")
 <!-- Select2 -->
 <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
 <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
@section("title")
<title>Tenant|Dashboard</title>
@endsection
@section("sidebar")
<x-tenant.side-bar></x-tenant.side-bar>
@endsection

@section("main-section")

<div class="row"> 
<div class="col-md-12">
   <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA  Renegade GTX Mid Hiking House Review</h3>
              <div class="col-12">
                <img src="{{Storage::url($roomate[0]->image)}}" class="product-image" alt="Product Image">
              </div>
              <div class="col-12 product-image-thumbs">
                <div class="product-image-thumb active"><img src="{{asset('admin/img/house-1.jpg')}}" alt="Product Image"></div>
                <div class="product-image-thumb"><img src="{{asset('admin/img/house-2.jpg')}}" alt="Product Image"></div>
                <div class="product-image-thumb"><img src="{{asset('admin/img/house-3.jpg')}}" alt="Product Image"></div>
                <div class="product-image-thumb"><img src="{{asset('admin/img/house-4.jpg')}}" alt="Product Image"></div>
                <div class="product-image-thumb"><img src="{{asset('admin/img/house-5.jpg')}}" alt="Product Image"></div>
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{$roomate[0]->Building_name}}</h3>
              <p>{{$roomate[0]->description}}</p>
              
              <hr>
              <p>{{$roomate[0]->location}}</p>
              

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                Kshs. {{$roomate[0]->price}}/= 
                </h2>
                <h4 class="mt-0">
                  <h5>Inclusive of water Bills </h5>
                  <h5>Exclusive of Electricity Bills </h5>
                </h4>
              </div>
              @cannot('view',$roomate[0])
                
              <hr class="mt-2">
              <div class="form-group">
                    <label for="exampleInputEmail1">Enter  Bid Amount</label>
                    <input type="number" name="amount" class="form-control" id="exampleInputEmail1" placeholder="Enter amount e.g 2000">
              </div>
              <div class="mt-4">
              <a href="#" id="submit" class="btn btn-primary btn-lg btn-flat">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
              </svg><span><h2 class="inline-block">Place BID</h2></span>
                </a>               
              </div>
              @endcannot

            

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
   
      
      <!--END-FORM-->
   </div>

  </div>      
     
<!--form-->
<form action="" method="post">
  @csrf
</form>
<!--endform-->
  
@endsection
@section("js")
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
$(document).ready(function(){
    var amount=$('input[name="amount"]').val();
     //click event //
$('#submit').click(function(e){
  //if
            if (confirm('Are you sure you want to place this bid?')) {
              e.preventDefault();
              var amount=$('input[name="amount"]').val();
              //console.log(amount);
              var token=$('input[name="_token"]').attr('value');
              console.log('token'+token);
              var url="{{route('bids.store')}}";
              console.log('url   '+url);
              if (amount!=0 || amount!='') {
                //ajax setup
                $.ajaxSetup({
                  headers:{

                    'X-CSRF-TOKEN':token,
                  }
                });
              $.ajax({
                url:url,
                method:'POST',
                data:{
                  amount:amount,
                  userId:"{{auth()->user()->id}}",
                  roomateId:"{{$roomate[0]->id}}",
                },
                success:function($result){
                  //console.log('success status  '+ $result.statusText);
                  console.log($result.data.amount);
                },
                error:function($result){
                  //console.log('error status  '+ $result.error);
                  console.log($result.statusText);
                },
                complete:function($jxhr,$status){

                }
              });

                
              } else {
                alert('zero amount or amount filled is empty');
              }
             
              
            } else {
              e.preventDefault();
            }
    
          });
//endif
          

     //end click event //
    
  });
</script>
@endsection