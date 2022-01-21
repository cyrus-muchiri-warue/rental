<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <div class="row"> 
   <div class="col-md-12">
     
<form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">
 @csrf
  <div class="row">
       <div class="col-md-6"> <div class="card card-primary ">
          <div class="card-body ">
                    <h4>House Profile</h4>
                    <div class="form-group">
                    <label for="exampleSelectBorderWidth2">Enter Building name</label>
                      <input type="text" class="form-control form-control-border" id="exampleInputBorder" name="houseName"placeholder="Building Name">
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
     <div class="m-2">
     <input type="submit"class="btn btn-md btn-outline-info" value="submit">
      <a href="{{route('posts.index')}}"class="btn btn-md btn-outline-info">Cancel</a> 
     </div>  
   </form>
   </div>

  </div>      
     
 
</div>