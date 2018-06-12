@extends('welcome') 
@section('content')

<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                    <i class="mdi mdi-creation"></i>             
                </span> Pattern Builder
        </h3>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Create a New Pattern</h4>
                    <p class="card-description text-danger">
                        Patterns must be built only when in need. Otherwise we encourage to use existing patterns
                    </p>

                    <div class="mb-3">
                        <form class="form-inline">
                            <label class="sr-only" for="inlineFormInputName2">Name</label>
                            <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Pattern Code">

                            <label class="sr-only" for="inlineFormInputGroupUsername2">Username</label>
                            <textarea name="" id="" cols="30" rows="1" placeholder="Short Description" class="form-control mb-2 mr-sm-2"></textarea>
                            <button type="submit" class="btn btn-gradient-primary mb-2">Submit</button>
                        </form>
                    </div>
                         
                    <table class="table table-hover mb-2">
                        <thead>
                            <tr>
                                <th>Flat Rate Activities</th>
                                <th>Default Hours</th>
                                <th>Confirm</th>
                                <th>Resulting Hour</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($flatRates as $flatRate)
                            <tr>
                                <td style="width: 30%">{{$flatRate->name}}</td>
                                <td class="text-danger">{{$flatRate->default_hour}}</td>
                                <td>
                                    <input type="checkbox" class="form-control" name="" id="" value="checkedValue">
                                </td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td><strong>Total Base Load</strong></td>
                                <td></td>
                                <td></td>
                                <td><strong>45</strong></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-hover mb-2">
                        <thead>
                            <tr>
                                <th>Per Tutoriel/Group Activities</th>
                                <th>Default Hours</th>
                                <th>Confirm</th>
                                <th>Resulting Hour</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($perTutorials as $perTutorial)
                            <tr>
                                <td style="width: 30%">{{$perTutorial->name}}</td>
                                <td class="text-danger">{{$perTutorial->default_hour}}</td>
                                <td>
                                    <input type="checkbox" class="form-control" name="" id="" value="checkedValue">
                                </td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td><strong>Total for per tutorial/group</strong></td>
                                <td></td>
                                <td></td>
                                <td><strong>45</strong></td>
                            </tr>
                        </tbody>
                    </table>

                    <table class="table table-hover mb-2">
                        <thead>
                            <tr>
                                <th>Per Student Activities</th>
                                <th>Default Hours</th>
                                <th>Confirm</th>
                                <th>Resulting Hour</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($perStudents as $perStudent)
                            <tr>
                                <td style="width: 30%">{{$perStudent->name}}</td>
                                <td class="text-danger">{{$perStudent->default_hour}}</td>
                                <td>
                                    <input type="checkbox" class="form-control" name="" id="" value="checkedValue">
                                </td>
                                <td>
                                </td>
                            </tr>
                            @endforeach
                            <tr>
                                <td><strong>Total for per Student</strong></td>
                                <td></td>
                                <td></td>
                                <td><strong>45</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection