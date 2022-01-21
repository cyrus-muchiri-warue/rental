@extends("template.app")
@section("title")
<title>Tenant|Dashboard</title>
@endsection
@section('stylesheet')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection
@section('add-btn')
<li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">New Entry</a>
</li>
@endsection

@section('sidebar')
<x-tenant.side-bar></x-tenant.side-bar>
@endsection
@section('main-section')
<div class="card">
              <div class="card-header">
                <h3 class="card-title">project orders</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>s.no</th>
                    <th>bidder's name</th>
                    <th>Bid Amount (Kshs.)</th>
                    <th>offer category</th>
                    <th>image</th>
                    
                    <th>Edit</th>
                    <th>delete</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($bids as $bid)
                    
              @can('view',$bid)
              
           <tr>
              <td>{{$loop->index+1}}</td><!--no.-->
              <td> 
              <a href="{{route('bids.show',$bid->id)}}" target="_blank" rel="noopener noreferrer" class="btn-link text-secondary">
                {{$bid->user->name}}</a>
                </td><!--order id.-->
                <td>{{$bid->amount}}/=</td>
              <td>{{$bid->roomate->category}}</td>
              <td>
              <img src="{{Storage::url($bid->roomate->image)}}" class="rounded-full h-24 w-24 object-cover overflow-hidden" alt="image here" srcset="">
              </td>
              
               
              
              <td><i class="fas fa-edit"></i>
                  <a href="{{route('bids.edit',$bid->id)}}">
                    edit
                </a>
            </td>
             <td>
               <form id="delete-form-{{$bid->id}}" action="{{route('bids.destroy',$bid->id)}}" style="display:none" method="post">
                @csrf
                @method('DELETE')
               </form>
               
             
             <a href=""   onClick="if(confirm('Are you sure you want to delete this bid?'))
             {event.preventDefault();document.getElementById('delete-form-{{$bid->id}}').submit();}else{
               event.preventDefault();
             }"><i class="fas fa-trash"></i></a>
           </td>
           </tr>
                
              @endcan
                       
                  
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>s.no</th>
                    <th>bidder's name</th>
                    <th>Bid Amount (Kshs.)</th>
                    <th>offer category</th>
                    <th>image</th>
                    
                    <th>Edit</th>
                    <th>delete</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection
@section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection