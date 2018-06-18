<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12">
            <b-btn href="/pattern-builder" class="btn btn-gradient-primary"><i class="mdi mdi-plus"></i> New Pattern</b-btn>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <table class="table table-hover mb-2">
                <thead>
                    <tr>
                        <th>Pattern Code</th>
                        <th>Base Hours</th>
                        <th>Per Tut Hours</th>
                        <th>Per Student Hours</th>
                        <th>Def. Nº of Students</th>
                        <th>Tut Per Group Hours / Week</th>
                        <th>Tut Per Group Hours / Period</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<b-modal id="staff-modal" hide-footer="true" title="Create a New Staff">
    <create-offering></create-offering>
</b-modal>