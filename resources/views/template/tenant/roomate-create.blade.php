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
@section('sidebar')
<x-tenant.side-bar></x-tenant.side-bar>
@endsection

@section("main-section")

   <div class="row"> 
   <div class="col-md-12">
     
<form action="{{route('roomates.store')}}" method="POST" enctype="multipart/form-data">
 @csrf
  <div class="row">
       <div class="col-md-6"> <div class="card card-primary ">
          <div class="card-body ">
                    <h4 class="mb-2 text-bold">Roomate offer profile</h4>
                    <div class="form-group">
                    <label for="exampleSelectBorderWidth2">topic</label>
                      <input type="text" class="form-control form-control-border" id="exampleInputBorder" name="topic"placeholder="Enter your topic here">
                    </div>
                    <div class="form-group">
                    <label for="exampleSelectBorderWidth2">Enter Category</label>
                      <select class="custom-select form-control-border" id="exampleSelectBorder" name="category">
                        <option class="hidden"> </option>
                        @foreach($categorys as $category)
                        <option value="{{$category->category}}">{{$category->category}}</option>
                        @endforeach
                       
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectBorderWidth2">Select Location</label>
                      <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="location" >
                      <option class="hidden"></option>
                     
                        @foreach($locations as $location)
                        <option value="{{$location->location}}">{{$location->location}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleSelectBorderWidth2">Enter price</label>
                      <input type="number" class="form-control form-control-border" name="price" id="exampleInputBorder" placeholder=" Price in kshs">
                    </div>
                  
                  </div>
                  <!-- /.card-body -->
          </div>
                <!-- /.card -->  
      </div>
         <!--col-1-->    
         <div class="col-md-6"> <div class="card card-primary ">
          <div class="card-body ">
                    <h4>Upload Image</h4>
                   <input type="file" name="img" id="image" value="picture path">
                  
                  </div>
                  <!-- /.card-body -->
          </div>
                <!-- /.card -->  
      </div>
         <!--col-1--> 
      </div>
      <!--row-1-->        
  <div class="row">
        <div class="col-md-12">
          <div class="card card-outline card-info">
            <div class="card-header">
              <h3 class="card-title">
                Description Section
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <textarea id="summernote" name="description">
                Place    <em>House</em> <u>description</u> <strong>here</strong>
              </textarea>
            </div>
            <div class="card-footer">
              
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row-2 -->
      <input type="submit" value="submit">
      <a href="{{route('roomates.index')}}">Cancel</a>   
   </form>
   </div>

  </div>      
     
 
  
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