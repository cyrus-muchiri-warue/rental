@extends("template.app")
@section("title")
<title>LandLord|Dashboard</title>
@endsection

@section("stylesheet")
 <!-- Select2 -->
 <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
 <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
@section('sidebar')
<x-tenant.side-bar></x-tenant.side-bar>
@endsection


@section("main-section")
<div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary mt-8">
         
              <!-- form start -->
              <form action="{{route('locations.update',$location->id)}}" method="post">
              @csrf
              @method('put')
            
              
                <div class="row">
                <div class="col-md-12">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="categotyName">name</label>
                    <input name="location" type="text" class="form-control" id="locationName" placeholder="update location" value="{{$location->location}}">
                  </div>
                 
                  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                  <a href="{{route('category.index')}}" class="btn btn-primary btn-sm">Cancel</a>
                </div>
                  
                  
              </form>
            </div>
            <!-- /.card -->

            
        </div>
        <!-- /.row -->
     

 
  
@endsection
@section("js")
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(function () {
    $('#summernote').summernote()
  })
</script>
@endsection