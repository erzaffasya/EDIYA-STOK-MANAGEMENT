<x-app-layout>
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>About</h4>
                <h6>Tambah Data About</h6>
            </div>
        </div>
        <!-- /add -->
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('about.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Judul</label>
                                <input name="judul" type="text">
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input name="deskripsi" type="text">
                            </div>
                        </div>



                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="{{ route('about.index') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /add -->
    </div>

</x-app-layout>
