@extends('layout/master')   <!-- include help in laravel -->

@section('part')  <!-- include help in laravel -->
<?php print_r($mycar); ?><br>
<?php print_r($myprice); ?><br>
<?php print_r($myschool); ?>

<h1>

    {{ $myclass }}; <br>  <!-- this  is alternative method in laravel for printing msg -->
                            <!-- it will not run the script-->
                            <!-- it print simple contents only such as array or para.. -->


    {!! $myworld !!} <!-- it will work like core php -->

    @{{ $myworld }} <!-- to tell the laravel that this not part of the laravael -->


    <!-- blade concept

    {{ $myclass }}

    {!! $myclass !!}

    ->with(['key']=> $value)
    ->withmyfans($cars)->withmyclass($fans)

    -->


</h1>
    @endsection  <!-- include help in laravel -->
