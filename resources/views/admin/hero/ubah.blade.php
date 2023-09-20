<x-app-layout>
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Hero</h4>
                <h6>Ubah Data Hero</h6>
            </div>
        </div>
        <!-- /add -->
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ route('hero.update', $Hero->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Title</label>
                                <input name="title" value="{{$Hero->title}}" type="text">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Judul</label>
                                <input name="judul" value="{{$Hero->judul}}" type="text">
                            </div>
                        </div>

                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Urut</label>
                                <input name="urut" value="{{$Hero->urut}}" type="number">
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Foto</label>
                                <input name="foto" type="file">
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12 col-12">
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input name="deskripsi" value="{{$Hero->deskripsi}}" type="text">
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="{{ route('hero.index') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /add -->
    </div>
</x-app-layout>
