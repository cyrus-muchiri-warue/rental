<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    
<div class="row"> 
<div class="col-md-12">
<form action="{{route('posts.update',$post->id)}}" method="POST" enctype="multipart/form-data">
 @csrf
 @method("PUT")
  <div class="row">
       <div class="col-md-6"> <div class="card card-primary ">
          <div class="card-body ">
                    <h4>House Profile</h4>
                    <div class="form-group">
                    <label for="exampleSelectBorderWidth2">Enter Building name</label>
                      <input type="text" class="form-control form-control-border" id="exampleInputBorder" name="houseName"placeholder="Building Name" value="{{$post->Building_name}}">
                    </div>
                    <div class="form-group">
                    <label for="exampleSelectBorderWidth2">Enter Category</label>
                      <select class="custom-select form-control-border" id="exampleSelectBorder" name="category" value="{{$post->category}}">
                        <option>single Room</option>
                        <option>Bedsitter</option>
                        <option>1 bedroom</option>
                        <option>2 bedroom</option>
                        <option>3 bedroom</option>
                        <option>4 bedroom</option>
                        <option>5 bedroom</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleSelectBorderWidth2">Select Location</label>
                      <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2" name="location" value="{{$post->location}}">
                      <option>maskan</option>
                        <option>kianjai</option>
                        <option>califonia</option>
                        <option>mukaria</option>
                        <option>ebony</option>
                        <option>kiaja</option>
                      </select>
                    </div>
                    <div class="form-group">
                    <label for="exampleSelectBorderWidth2">Enter price</label>
                      <input type="number" class="form-control form-control-border" name="price" id="exampleInputBorder" placeholder=" Price in kshs"value="{{$post->price}}">
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
                   <input type="file" name="img" id="image" value="{{$post->image}}" >
                  
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
               {{$post->description}}
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
      <input type="submit" class="btn btn-md btn-outline-info" value="Submit">
      <a  class="btn btn-md btn-outline-info" href="{{route('posts.index')}}">Cancel</a>
      </div>   
   </form>
   </div>

  </div>      
     
 
</aside>
</div>