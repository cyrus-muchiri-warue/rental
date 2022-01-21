@extends("template.app")
@section('navbar')
<li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('locations.create')}}" class="nav-link">Create new location</a>
</li>
@endsection
@section('sidebar')
<x-tenant.side-bar></x-tenant.side-bar>
@endsection
@section('main-section')

<div class="card mt-8">
             
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>s.no</th>
                    <th>location</th>
                    <th>slug</th>
                    <th>Edit</th>
                    <th>delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($locations as $location)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$location->location}}</td>
                    <td>Not defined</td>
                    <td><a href="{{route('locations.edit',$location->id)}}"><i class="fas fa-edit"></i></a></td>
                    <td>
                      <form id="delete-form-{{$location->id}}" action="{{route('locations.destroy',$location->id)}}" style="display:none" method="post">
                       @csrf
                       @method('DELETE')
                      </form>
                      
                    
                    <a href=""   onClick="if(confirm('Are you sure you want to delete this location?'))
                    {event.preventDefault();document.getElementById('delete-form-{{$location->id}}').submit();}else{
                      event.preventDefault();
                    }"><i class="fas fa-trash"></i></a>
                  </td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>s.no</th>
                    <th>name</th>
                    <th>slug</th>
                    <th>Edit</th>
                    <th>delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
    
@endsection

