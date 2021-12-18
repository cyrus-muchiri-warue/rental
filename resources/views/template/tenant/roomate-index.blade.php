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
@section('navbar')
<li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('roomates.create')}}" class="nav-link">create roomate offer</a>
</li>
<li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('ownpost')}}" class="nav-link">Available roomate offer</a>
</li>
@endsection
@section("sidebar")
<x-tenant.side-bar></x-tenant.side-bar>
@endsection

@section("main-section")

<main class=" md:col-span-5">       
    <!--begin main-section-->
    <div class="main-section ">
        <div class="card-section mt-8 ">
            <!--card-wrapper-->
            <div class="grid  grid-cols-3">
             @foreach($roomates as $roomate)
                @can('view',$roomate)
              <!--begin card-->
              <div class=" bg-white m-2 overflow-hidden rounded shadow-md relative hover:shadow-2xl "> 
                    <img src="{{Storage::url($roomate->image)}}" alt="image here" class="w-full h-48 sm:48 object-cover">
                    <div class="content m-2">
                        <h1 class="font-bold">{{ $roomate->topic}} in {{$roomate->location}}
                            meru, Kenya</h1>
                        <h1 class="text-sm">{{$roomate->price}} Kshs/ month</h1>
                        <div class="flex justify-between">
                        <a href="{{route('roomates.show',$roomate->id)}}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg><span>Read more...</span>
                        </a>
                        <a href=""onclick="if(confirm('Are you sure you want to delete this roomate'))
                                {
                                  event.preventDefault()
                                  document.getElementById('delete-roomate-{{$roomate->id}}').submit();
                                }else
                                {
                                  event.preventDefault();
                                }
                                "> 
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 inline-block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg><span>Delete</span>
                    </a>
   <!--delete-form-->
  <form id="delete-roomate-{{$roomate->id}}"action="{{route('roomates.destroy',$roomate->id)}}" method="post">
                @csrf
                @method('DELETE')
  </form>
 <!--end-delete-form-->
                        </div>
                    </div>
                    <div class="bg-gray-600 text-white text-xs rounded-full lowercase p-2 absolute top-0 mt-2 ml-2" >
                        <svg class="w-5  inline-block" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                        <span>{{$roomate->updated_at->diffForHumans()}}</span>
                    </div>
                   
                </div>
                @endcan
            
            <!--end card-->
                @endforeach
                         
                  </div>     
             </div>
        <!--end card-section-->
        
        </div>
    <!--end main-section-->
    <div class="m-2"> {{ $roomates->links() }}</div>
    
</main>
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