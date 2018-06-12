@extends('welcome') 
@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-worker"></i>              
                </span> Workload Allocator
        </h3>
    </div>
    <div class="row">
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('PurpleAdmin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Non-Allocated 
                        <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">12 Offerings </h2>
                    <h6 class="card-text">Non-Allocated: 8%</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('PurpleAdmin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Hours Remaining to Allocate
                        <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">36 Hours</h2>
                    <h6 class="card-text">Decreased by 10%</h6>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <img src="{{asset('PurpleAdmin/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Number of Staff Available
                        <i class="mdi mdi-diamond mdi-24px float-right"></i>
                    </h4>
                    <h2 class="mb-5">10</h2>
                    <h6 class="card-text">Increased by 5%</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Non-Allocated Offering</h4>
                    <p class="card-description">
                        Add class <code>.table-hover</code>
                    </p>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Unit Code</th>
                                <th>Unit Name</th>
                                <th>Teaching Period</th>
                                <th>Location</th>
                                <th>Mode</th>
                                <th>Teaching Pattern</th>
                                <th>Coordinator Staff</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>FDN107</td>
                                <td>Next Life</td>
                                <td>S1</td>
                                <td>Murdoch</td>
                                <td>D</td>
                                <td>FDN1</td>
                                <td>
                                    <select name="" id="" class="form-control">
                                        <option value="">Mr. X</option>
                                        <option value="">Ms. Y</option>
                                        <option value="">Mr. Z</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>FDN107</td>
                                <td>Next Life</td>
                                <td>S1</td>
                                <td>Murdoch</td>
                                <td>D</td>
                                <td>FDN1</td>
                                <td>
                                    <select name="" id="" class="form-control">
                                        <option value="">Mr. X</option>
                                        <option value="">Ms. Y</option>
                                        <option value="">Mr. Z</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>FDN107</td>
                                <td>Next Life</td>
                                <td>S1</td>
                                <td>Murdoch</td>
                                <td>D</td>
                                <td>FDN1</td>
                                <td>
                                    <select name="" id="" class="form-control">
                                        <option value="">Mr. X</option>
                                        <option value="">Ms. Y</option>
                                        <option value="">Mr. Z</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>FDN107</td>
                                <td>Next Life</td>
                                <td>S1</td>
                                <td>Murdoch</td>
                                <td>D</td>
                                <td>FDN1</td>
                                <td>
                                    <select name="" id="" class="form-control">
                                        <option value="">Mr. X</option>
                                        <option value="">Ms. Y</option>
                                        <option value="">Mr. Z</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection