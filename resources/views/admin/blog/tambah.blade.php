<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Forms /</span> Tambah Data Blog
        </h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="post" action="{{ route('blog.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Judul</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text">
                                            <i class="mdi mdi-format-title"></i>
                                        </span>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="basic-icon-default-fullname"
                                            placeholder="Masukan Judul"
                                            name="judul"
                                            aria-label="Masukan Judul"
                                            aria-describedby="basic-icon-default-fullname2"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Isi</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-company2" class="input-group-text">
                                            <i class="mdi mdi-subtitles-outline"></i>
                                        </span>
                                        <input
                                            type="text"
                                            id="basic-icon-default-company"
                                            class="form-control"
                                            placeholder="Masukan Isi"
                                            name="isi"
                                            aria-label="Masukan Isi"
                                            aria-describedby="basic-icon-default-company2"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="basic-icon-default-phone">Gambar</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-phone2" class="input-group-text">
                                            <i class="mdi mdi-image-check-outline"></i>
                                        </span>
                                        <input
                                            type="file"
                                            id="basic-icon-default-phone"
                                            class="form-control phone-mask"
                                            name="gambar"
                                            placeholder="Masukan Gambar"
                                            aria-label="Masukan Gambar"
                                            aria-describedby="basic-icon-default-phone2"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                                    <a href="{{ route('blog.index') }}" class="btn btn-cancel">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
