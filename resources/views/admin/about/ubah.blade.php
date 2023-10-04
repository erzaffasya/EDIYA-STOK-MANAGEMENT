<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Forms/</span>
            Ubah Data About
        </h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="post" action="{{ route('about.update', $About->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Judul</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text">
                                            <i class="mdi mdi-subtitles-outline"></i>
                                        </span>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="basic-icon-default-fullname"
                                            placeholder="Masukan Judul"
                                            name="judul"
                                            aria-label="Masukan Judul"
                                            aria-describedby="basic-icon-default-fullname2"
                                            value="{{$About->judul}}"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="basic-icon-default-message">Deskripsi</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-message2" class="input-group-text">
                                            <i class="mdi mdi-message-outline"></i>
                                        </span>
                                        <input
                                            id="basic-icon-default-message"
                                            class="form-control"
                                            name="deskripsi"
                                            placeholder="Masukan Deskripsi"
                                            aria-label="Masukan Deskripsi"
                                            aria-describedby="basic-icon-default-message2"
                                            value="{{$About->deskripsi}}"
                                        ></input>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                                    <a href="{{ route('about.index') }}" class="btn btn-cancel">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
