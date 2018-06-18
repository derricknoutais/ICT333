@extends('welcome')

@section('content')

@include('partials.errors')
<div class="content-wrapper">
    <!-- Icon & Title -->
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-creation"></i>             
                </span> Offering
        </h3>
    </div>

    <!-- nav tabs -->
    @include('pattern.partials.nav-tabs')


    
</div>

@endsection