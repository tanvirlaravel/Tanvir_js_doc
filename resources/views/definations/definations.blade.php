@extends('inc.layout')

@section('content')


<div class="row">

    <div class="col">

    @include('definations._nav_definations')

        <div class="tab-content" id="myTabContent">
 
            @include('definations._d')
            @include('definations._g')




    </div>
</div>
@endsection