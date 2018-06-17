<div class="tab-pane fade show active" id="uploader" role="tabpanel">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <h1 class="text-center">Uploader</h1>
            </div>  
        </div>
        <div class="row mt-5">
            <div class="col-md-12 text-center">
                <a href="{{ URL::to('downloadExcel/xls') }}"><button class="btn btn-gradient-primary">Download Staff Template</button></a>
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
                        <button class="btn btn-gradient-primary" class="form-control">Import File</button>
                    </div>

                </form>
            </div>
        </div>

    </div>
</div>