
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12">
            <b-btn v-b-modal.staff-modal class="btn btn-gradient-primary"><i class="mdi mdi-plus"></i> New Offering</b-btn>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-12">
            <table class="table table-hover mb-2">
                <thead>
                    <tr>
                        <th>Unit Code</th>
                        <th>Unit Name</th>
                        <th>Period</th>
                        <th>Location</th>
                        <th>Mode</th>
                        <th>Pattern</th>
                        <th>Total Workload</th>
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