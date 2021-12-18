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
@endsection
<x-tenant.side-bar></x-tenant.side-bar>

@section("main-section")

<div class="invoice p-3 mb-3 ">
              <!-- title row -->
              <div class="row" class="mt-8">
                <div class="col-12">
                  <h4>
                   RentalApp, Inc.
                    <small class="float-right">Date: 2/10/2014</small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>{{$landlord[0]->name}}</strong><br>
                  
                    Email: {{$landlord[0]->email}}
                  </address>
                </div>
                <!-- /.col -->
                <div class="col-sm-4 invoice-col">
                  To
                  <address>
                    <strong>{{Auth::user()->name}}</strong><br>
                   
                    Email: {{Auth::user()->email}}
                  </address>
                </div>
              
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>No.</th>
                      <th>Product</th>
                      <th>Serial #</th>
                      <th>Description</th>
                      <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>1</td>
                      <td>{{$post[0]->category}}</td>
                      <td>455-981-221</td>
                      <td>El snort testosterone trophy driving gloves handsome</td>
                      <td>Kshs.{{$post[0]->price}}/=</td>
                    </tr>
                    
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods:</p>
                  <div class="flex">
                  <img src="{{asset('admin/dist/img/credit/visa.png')}}" alt="Visa">
                  <img src="{{asset('admin/dist/img/credit/mastercard.png')}}" alt="Mastercard">
                  <img src="{{asset('admin/dist/img/credit/american-express.png')}}" alt="American Express">
                  <img src="{{asset('admin/dist/img/credit/paypal2.png')}}" alt="Paypal">
                  </div>
                 

                  <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                  </p>
                </div>
              
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class="col-12">
                  <a href="{{Url(route('checkout.show',$post[0]->id))}}" rel="noopener" id="print"target="_blank" class="btn btn-default pull-left"><i class="fas fa-print"></i> Print</a>
                  
                 
                </div>
              </div>
            </div>
@endsection
@section("js")
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script src="{{asset('admin/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script>
   $(document).ready(function() {
    $('#print').on('click', function () {
      window.print()
    })
  })
 // window.addEventListener("click", window.print());
</script>
@endsection