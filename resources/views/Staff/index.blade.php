@extends('welcome')

@section('content')

@include('partials.errors')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-creation"></i>             
                </span> Staff
        </h3>
    </div>
    @include('staff.partials.nav-tabs')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                
                <div class="card-body">
                    <!-- NAV TABS PARTIAL -->
                    @include('staff.partials.tab-content')

                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection