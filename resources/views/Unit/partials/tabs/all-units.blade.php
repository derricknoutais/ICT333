
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-12">
            <b-btn v-b-modal.unit-modal class="btn btn-gradient-primary"><i class="mdi mdi-plus"></i> New Unit</b-btn>
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


<b-modal id="unit-modal" hide-footer>
    <create-unit></create-unit>
</b-modal>
