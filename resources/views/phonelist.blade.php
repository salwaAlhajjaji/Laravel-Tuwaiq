@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Bootstab => Scripts -->
 @vite(['resources/sass/app.scss', 'resources/js/app.js'])    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        @foreach($phonelist as $item)
        <div class="row shadow ">
        @if($item['price'] <= 2500)
        <div class="col-4 border border-info text-center">
        <h3>Phone Type: {{$item['type']}}</h3>
        </div>
        <div class="col-4 border border-info text-center">
        <h3>Color: {{$item['color']}}</h3>
        </div>
        <div class="col-4 border border-info text-center">
        <h3>Price: {{$item['price']}}</h3>
        </div>
        @else
        <div class="col-4 border border-danger text-center">
        <h3>Phone Type: {{$item['type']}}</h3>
        </div>
        <div class="col-4 border border-danger text-center">
        <h3>Color: {{$item['color']}}</h3>
        </div>
        <div class="col-4 border border-danger text-center">
        <h3>Price: {{$item['price']}}</h3>
        </div>
        
        @endif
        </div>
        @endforeach
    </div>
</body>
</html>
@endsection



