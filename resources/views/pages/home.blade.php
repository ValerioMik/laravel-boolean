@extends('layouts.main-layout')
@section('content')

    <a class="btn btn-primary my-4" href="{{route('postcard.create')}}">CREA UNA NUOVA POST CARD</a>
    <postcards-comp></postcards-comp>


    
@endsection