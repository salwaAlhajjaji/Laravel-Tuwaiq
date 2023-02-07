@extends('layouts.app')
@section('content')
<div class="container p-3">
    <div class="row my-5 mx-auto justify-content-center">
             @foreach($phoneList as $phone)
            <div  class="card col-3 pb-0 m-2 my-3 mx-4 "> 
                <img class='mx-auto card-img-top rounded' height="200px" width="150px" src="https://img.freepik.com/premium-photo/3d-render-illustration-hand-holding-white-smartphone-with-full-screen-modern-frame-less-desi_200485-24.jpg?w=2000" width="auto" height="auto" />
                <div class="card-body text-center mx-auto">
                    <h5 class="card-title text-dark font-weight-bold">{{$phone->name}}</h5>
                    <p class="card-text text-secondary">{{$phone->price}}</p> 
                    
                </div>
              <div class="card-footer bg-transparent pb-1 mb-3 mx-auto">
                <a class="btn text-light bg-dark" href="{{ route('checkout',[$phone->id]) }}">Buy</a>
            </div>
            </div>
            @endforeach
    </div>
</div>

@endsection
