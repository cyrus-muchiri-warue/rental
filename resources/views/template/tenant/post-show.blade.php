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
<x-tenant.post-show :post="$post"></x-tenant.post-show>
  
@endsection
@section("js")
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>
<script>
  $(document).ready(function(){
    $('#submit').click(function(e){
      if(confirm('are you sure you wan to submit order?'))
      {
        e.preventDefault();
        //var token= $('input[name="_token"]').attr('value');
   
        $.ajaxSetup(
         {
           headers:{
           
             'X-CSRF-TOKEN':$('input[name="_token"]').attr('value'),
           }
         }
       );
       

       $.ajax({
         url:"{{route('orders.store')}}",
         method:'POST',
         data:{
           userId:"{{auth()->user()->id}}",
           postId:"{{$post[0]->id}}",
         },
         success:function($result){
           //$('#status').removeAttr('hidden').html($result.status);
               console.log($result.data);
               alert($result.data.message);
         }
       });

      }else{
        e.preventDefault();
        console.log(' order cancelled');
      }

    });
  });
</script>
@endsection