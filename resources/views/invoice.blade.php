@extends('layouts.app')
@section('content')

<div class="card">
  <div class="card-body">
    <div class="container mb-5 mt-3">
     
      <div class="container">
        <div class="col-md-12">
          <div class="text-center">
            <i class="far fa-building fa-4x ms-0" style="color:#8f8061 ;"></i>
            <p style="color: #7e8d9f;font-size: 25px;">Thank you for purchasing .. </strong></p>
          </div>
        </div>
        <div class="row mt-5 mx-1 justify-content-center">
          <div class="col-md-2 mb-4 mb-md-0">
            <div class="bg-image
                        ripple
                        rounded-5
                        mb-4
                        overflow-hidden
                        d-block
                        " data-ripple-color="light">
                        <img class='mx-auto card-img-top rounded' class="w-100" height="150px" src="https://img.freepik.com/premium-photo/3d-render-illustration-hand-holding-white-smartphone-with-full-screen-modern-frame-less-desi_200485-24.jpg?w=2000" width="auto" height="auto" />
              <a href="#!">
                <div class="hover-overlay">
                  <div class="mask" style="background-color: hsla(0, 0%, 98.4%, 0.2)"></div>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-7 mb-4 mb-md-0 ">
            <p class="fw-bold my-auto">{{$invoice['product_name']}}</p>
            
          </div>
          <div class="col-md-3 mb-4 mb-md-0">
            <h5 class="mb-2">
              <span class="align-middle">{{$invoice['price']}} SR</span>
            </h5>
            <p class="text-secondary"><small>{{$invoice['vat']}} SR</small></p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-xl-8">
          <div class="col-xl-4">
            <p class="text" style="color:#8f8061; font-weight:bold; font-size:18px">Shipping Information</p>
            <ul class="list-unstyled">
              <li class="text-muted">To: <span style="color:#8f8061 ;">{{$invoice['fullname']}}</span></li>
              <li class="text-muted">Address: <span style="color:#8f8061 ;">{{$invoice['address']}}</span></li>
              <li class="text-muted">Email: <span style="color:#8f8061 ;">{{$invoice['email']}}</span></li>
            </ul>
            
          </div>          </div>
          <div class="col-xl-3">
            <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
                style="font-size: 25px;">{{$invoice['total']}} SR</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection