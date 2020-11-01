@extends('layouts.head')
@section('content')
<div class="mt-5 ml-5">
    <h1 class="d-flex justify-content-center">Naše Služby</h1>
   <div class="">
    @if (count($services) > 0 )
        @foreach ($services as $service)
            <div class="">
            <h4><li><a href="/Sluzba/{{$service->id}}">{{$service->title}}</a></li> </h4>
            <br/>
            </div>
        @endforeach
    @else
        <p>žádné sluby nenalezeny</p>
    @endif
    </div>
   </div>
@endsection
   
