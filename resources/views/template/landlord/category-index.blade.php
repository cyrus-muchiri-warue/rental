@extends("template.app")
@section('navbar')
<li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('category.create')}}" class="nav-link">Create new category</a>
</li>
@endsection

@section('sidebar')
<x-landlord.side-bar></x-landlord.side-bar>
@endsection
@section('main-section')

<div class="card mt-8">
             
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>s.no</th>
                    <th>name</th>
                    <th>slug</th>
                    <th>Edit</th>
                    <th>delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($categorys as $category)
                  <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$category->category}}</td>
                    <td>Not defined</td>
                    <td><a href="{{route('category.edit',$category->id)}}"><i class="fas fa-edit"></i></a></td>
                    <td>
                      <form id="delete-form-{{$category->id}}" action="{{route('category.destroy',$category->id)}}" style="display:none" method="post">
                       @csrf
                       @method('DELETE')
                      </form>
                      
                    
                    <a href=""   onClick="if(confirm('Are you sure you want to delete this category?'))
                    {event.preventDefault();document.getElementById('delete-form-{{$category->id}}').submit();}else{
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


