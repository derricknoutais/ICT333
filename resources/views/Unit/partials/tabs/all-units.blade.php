<div class="tab-pane fade" id="all-staff" role="tabpanel" aria-labelledby="contact-tab">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-12">
                <a href="#" class="btn btn-gradient-primary" data-toggle="modal" data-target="#staff-modal">+ New Staff</a></li>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">

                <table class="table table-hover mb-2">
                    <thead>
                        <tr>
                            <th>Code</th>
                            <th>Unit Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($units as $unit)
                        <tr>
                            <td><a href="/unit/{{$unit->code}}">{{$unit->code}}</td>
                            <td class="text-danger">{{$unit->name}}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="staff-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="mdi mdi-school text-info mr-2"></i>Create New Unit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <form class="forms-sample" action="/data/units" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Unit Code</label>
                                <input type="text" class="form-control" placeholder="Unit Code" name="code">
                            </div>
                            <div class="form-group">
                                <label>Unit Name</label>
                                <input type="text" class="form-control" placeholder="Unit Name" name="name">
                            </div>
                            
                            
                            <button type="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>