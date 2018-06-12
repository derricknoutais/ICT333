@extends('welcome') 

@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-creation"></i>             
                </span> Data
        </h3>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title m-3"></h4>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#uploader" role="tab" aria-controls="home" aria-selected="true">Uploader</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#business-rules" role="tab" aria-controls="business-rules" aria-selected="false">Business Rules</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#school" role="tab" aria-controls="school" aria-selected="false">School</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#staff" role="tab" aria-controls="contact" aria-selected="false">Staff</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="home-tab" data-toggle="tab" href="#uploader" role="tab" aria-controls="home" aria-selected="true">Unit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Teaching Patterns</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="uploader" role="tabpanel">

                            <div class="container">
                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <h1 class="text-center">Uploader</h1>
                                    </div>  
                                </div>
                                <div class="row mt-5">
                                    <div class="col-md-3">
                                        <a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-success">Download Staff Template</button></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Offerings Template</button></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download Units Template</button></a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download T.Pattern Template</button></a>
                                    </div>
                                </div>
                                <div class="border-bottom mt-5"></div>
                                <div class="row mt-5">
                                    <div class="col-md-12">
                                        <form action="{{ URL::to('importExcel') }}" method="post" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                              <input type="file" class="form-control" name="import_file" id="">
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-danger" class="form-control">Import File</button>
                                            </div>

                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="business-rules" role="tabpanel" aria-labelledby="profile-tab" >
                            <div class="col-md-6">
                                <form action="">
                                    <div class="form-group ">
                                      <label for="">TRS Ratio</label>
                                      <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                    <div class="form-group">
                                      <label for=""></label>
                                      <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="school" role="tabpanel" aria-labelledby="contact-tab">
                            <table class="table table-hover m-5">
                                <thead>
                                    <tr>
                                        <th>School Name</th>
                                        <th>Dean of School</th>
                                        <th>Total Hours of School</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#school-modal">Computer Science</a>
                                        </td>
                                        <td>Mr. John Lenon</td>
                                        <td>8490 Hours</td>
                                        <td><i class="mdi mdi-pencil text-primary"></i></td>
                                        <td><i class="mdi mdi-delete-forever text-danger"></i></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#school-modal">Computer Science</a>
                                        </td>
                                        <td>Mr. Boris Tchalla</td>
                                        <td>937 Hours</td>
                                        <td><i class="mdi mdi-pencil text-info"></i></td>
                                        <td><i class="mdi mdi-delete-forever text-primary"></i></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="staff" role="tabpanel" aria-labelledby="contact-tab">
                            <table class="table table-hover m-5">
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
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#staff-modal">Mr. John Lenon</a>
                                        </td>
                                        <td>0.3</td>
                                        <td>3200 Hours</td>
                                        <td>4</td>
                                        <td>4200</td>
                                        <td><i class="mdi mdi-pencil text-info"></i></td>
                                        <td><i class="mdi mdi-delete-forever text-primary"></i></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#staff-modal">Mr. Bernard Lenon</a>
                                        </td>
                                        <td>0.3</td>
                                        <td>3200 Hours</td>
                                        <td>4</td>
                                        <td>4200</td>
                                        <td><i class="mdi mdi-pencil text-info"></i></td>
                                        <td><i class="mdi mdi-delete-forever text-primary"></i></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a href="" data-toggle="modal" data-target="#staff-modal">Mr. Bernard Lenon</a>
                                        </td>
                                        <td>0.3</td>
                                        <td>3200 Hours</td>
                                        <td>4</td>
                                        <td>4200</td>
                                        <td><i class="mdi mdi-pencil text-info"></i></td>
                                        <td><i class="mdi mdi-delete-forever text-primary"></i></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="school-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle"><i class="mdi mdi-school text-info mr-2"></i>School of Computer Science</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="row d-flex justify-content-center">
                            <i class="mdi mdi-account-multiple text-danger"></i>
                        </div>
                        <div class="row d-flex justify-content-center">25 Coordinators</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row d-flex justify-content-center">
                            <i class="mdi mdi-clock text-success"></i>
                        </div>
                        <div class="row d-flex justify-content-center">3600 Hours</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row d-flex justify-content-center">
                            <i class="mdi mdi-chair-school text-primary"></i>
                        </div>
                        <div class="row d-flex justify-content-center">20 Students</div>
                    </div>
                </div>
                <div class="row border-top d-flex justify-content-center">
                    <div class="col-md-12">
                        <table class="table table-striped table-hover mt-3">
                            <tbody>
                                <tr>
                                    <td scope="row">Dean of School:</td>
                                    <td>Mr. John Lenon</td>
                                </tr>
                                <tr>
                                    <td scope="row">Number of Offerings:</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td scope="row">Total Workload for Coordinators:</td>
                                    <td>3300</td>
                                </tr>
                                <tr>
                                    <td scope="row">Total Workload for Casuals:</td>
                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td scope="row">Average Unit Teaching Per Staff:</td>
                                    <td>150</td>
                                </tr>
                                <tr>
                                    <td scope="row">Estimated Budget:</td>
                                    <td>$ 25,000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-info">Edit School</button>
              <button type="button" class="btn btn-primary">Delete School</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="staff-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="mdi mdi-school text-info mr-2"></i>Mr. John Lenon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="row d-flex justify-content-center">
                            <i class="mdi mdi-account-multiple text-danger"></i>
                        </div>
                        <div class="row d-flex justify-content-center">2 Offerings</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row d-flex justify-content-center">
                            <i class="mdi mdi-clock text-success"></i>
                        </div>
                        <div class="row d-flex justify-content-center">3200 Hours</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row d-flex justify-content-center">
                            <i class="mdi mdi-chair-school text-primary"></i>
                        </div>
                        <div class="row d-flex justify-content-center">60 Students</div>
                    </div>
                </div>
                <div class="row border-top d-flex justify-content-center">
                    <div class="col-md-12">
                        <table class="table table-striped table-hover mt-3">
                            <tbody>
                                {{-- <th>Unit Teaching</th>
                                <th>Other Teaching</th>
                                <th>Research Supervision</th>
                                <th>Baseline Research</th>
                                <th>Other Research</th>
                                <th>Baseline Service</th>
                                <th>Research Supervision</th>
                                <th>Research Supervision</th>
                                <th>Research Supervision</th> --}}
                                <tr>
                                    <td scope="row">Unit Teaching:</td>
                                    <td>Mr. John Lenon</td>
                                </tr>
                                <tr>
                                    <td scope="row">Other Teaching:</td>
                                    <td>25</td>
                                </tr>
                                <tr>
                                    <td scope="row">Research Supervision:</td>
                                    <td>3300</td>
                                </tr>
                                <tr>
                                    <td scope="row">Baseline Research:</td>
                                    <td>300</td>
                                </tr>
                                <tr>
                                    <td scope="row">Other Research:</td>
                                    <td>150</td>
                                </tr>
                                <tr>
                                    <td scope="row">Baseline Service:</td>
                                    <td>25,000 Hours</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info">Edit School</button>
                <button type="button" class="btn btn-primary">Delete School</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


@endsection
