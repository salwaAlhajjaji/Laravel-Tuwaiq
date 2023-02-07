@extends('layouts.app')
@section('content')


@foreach($phoneList as $phone)
<div class="row shadow w-75 m-auto mt-5 border border-info py-5">
<div class="col-4  text-center">
        <h3>Phone name: {{$phone->name}}</h3>
        </div>
        <div class="col-4 border border-info text-center">
        <h3>Price: {{$phone->price}}</h3>
        </div>
        <div class="col-4 border border-info text-center">
        <h3>QTY: {{$phone->QTY}}</h3>
        </div>
</div>
</div>
@endforeach
@endsection('content')