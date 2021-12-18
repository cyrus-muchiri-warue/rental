@extends("template.app")
@section("stylesheet")
 <!-- Select2 -->
 <link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
 <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endsection
@section("title")
<title>LandLord|Dashboard</title>
@endsection
@section('sidebar')
<x-landlord.side-bar></x-landlord.side-bar>
@endsection
@section("main-section")
<x-landlord.post-edit :post="$post"></x-landlord.post-edit>
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