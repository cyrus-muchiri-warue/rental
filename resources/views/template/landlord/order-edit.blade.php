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
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary mt-8">
         
              <!-- form start -->
           <form action="{{route('orders.update',$order->id)}}" method="post">
              @csrf
              @method('put')
            
              
                <div class="row">
                <div class="col-md-12">
                <div class="card-body">
                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="approved" name="status">
                    <label class="form-check-label">Approve</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" value="rejected"name="status" >
                    <label class="form-check-label">Reject</label>
                  </div> 
                  <div class="form-check">
                    <input class="form-check-input" type="radio" disabled value="rejected"name="status" checked="">
                    <label class="form-check-label">In progress (default)</label>
                  </div> 
               </div>
                  
              <input type="submit" value=" submit" class="btn btn-success btn-sm">
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
    
  })
</script>
@endsection