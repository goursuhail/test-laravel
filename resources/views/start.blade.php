@extends('layout/master')

@section('part')

    <?php $you = "not defined data" ?>

@if($black == "hello")   <!-- this is the pattern of if and else condition in laravel -->
    {{ $black }}
    @elseif($black == "hii")
    {{ $black }}
    @else
    {{ $you }}
    @endif



    @endsection


