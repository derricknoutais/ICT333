
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12">
            <b-btn v-b-modal.staff-modal class="btn btn-gradient-primary"><i class="mdi mdi-plus"></i> New Staff</b-btn>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <table class="table table-hover mb-2">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Fraction</th>
                        <th>Total Load</th>
                        <th>Number Of Offerings</th>
                        <th>Target</th>
                        {{--
                        <th>Unit Teaching</th>
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
                       
<b-modal id="staff-modal" hide-footer="true" title="Create a New Staff">
    <create-staff></create-staff>
</b-modal>