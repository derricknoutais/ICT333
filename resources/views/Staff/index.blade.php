@extends('welcome')

@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-creation"></i>             
                </span> Staff
        </h3>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title m-3">Staff</h4>
                    <a name="" id="" class="btn btn-success" href="#" role="button">+ New Staff</a>

                    <table class="table table-hover mb-2">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Fraction</th>
                                <th>Total Load</th>
                                <th>Number Of Offerings</th>
                                <th>Target</th>
                                {{-- <th>Unit Teaching</th>
                                <th>Other Teaching</th>
                                <th>Research Supervision</th>
                                <th>Baseline Research</th>
                                <th>Other Research</th>
                                <th>Baseline Service</th>
                                <th>Research Supervision</th>
                                <th>Research Supervision</th>
                                <th>Research Supervision</th> --}}
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staff as $person)
                            <tr>
                                <td><a href="/staff/{{$person->id}}">{{$person->first_name}} {{$person->last_name}}</td>
                                <td class="text-danger"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection