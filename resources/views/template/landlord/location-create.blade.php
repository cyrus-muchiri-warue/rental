@extends("template.app")
@section("title")
<title>LandLord|Dashboard</title>
@endsection

@section("stylesheet")

 <!-- Select2 -->
 <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">

  <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection

@section('sidebar')
<x-landlord.side-bar></x-landlord.side-bar>
@endsection
@section("main-section")

     <div class="row">
       <!-- left column -->
       <div class="col-md-6">
         <!-- general form elements -->
         <div class="card card-primary mt-8">
        
           <!-- form start -->
           <form action="{{route('locations.store')}}" method="post">
           @csrf
          
           @if (session('status'))
           <div id="toastsContainerTopRight" class="toasts-top-right fixed">
             <div class="toast bg-warning fade show" role="alert" aria-live="assertive" aria-atomic="true">
              
                  <div class="toast-body">{{session('status')}} </div>
                </div>
              </div>
            @endif
             <div class="row">
             <div class="col-md-12">
             <div class="card-body">
               
               <div class="form-group">
                 <label for="location">name</label>
                 <input name="location" type="text" class="form-control" id="location" placeholder="Enter location name">
               </div>
               
               <button type="submit" class="btn btn-primary btn-sm ">Submit</button>
               <a href="{{route('category.index')}}" class="btn btn-primary btn-sm ">Cancel</a>
             </div>
               
               
           </form>
         </div>
         <!-- /.card -->

         
     </div>
     <!-- /.row -->
  



@endsection
@section("js")
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>

<script>
  $(function () {
    $('#toastsContainerTopRight').animate({
    opacity: 0.25,
    
    hidden: "toggle"
  }, 5000, function() {
    // Animation complete.
  });
    
  })
</script>
@endsection