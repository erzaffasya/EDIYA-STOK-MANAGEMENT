<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Forms/</span>
            Ubah Data Testimonial
        </h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="post" action="{{ route('testimonial.update', $Testimonial->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Isi</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                                class="mdi mdi-comment"></i></span>
                                        <input type="text" class="form-control" id="basic-icon-default-fullname"
                                            placeholder="Masukan Isi" name="isi" value="{{ $Testimonial->isi }}"
                                            aria-label="Masukan Isi"
                                            aria-describedby="basic-icon-default-fullname2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Foto</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-company2" class="input-group-text"><i
                                                class="mdi mdi-image"></i></span>
                                        <input type="file" id="basic-icon-default-company" class="form-control"
                                            name="foto" placeholder="Ubah Foto" aria-label="Ubah Foto"
                                            aria-describedby="basic-icon-default-company2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Nama</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="mdi mdi-account"></i></span>
                                        <input type="text" id="basic-icon-default-email" class="form-control"
                                            name="nama" placeholder="Masukan Nama" value="{{ $Testimonial->nama }}"
                                            aria-label="Masukan Nama"
                                            aria-describedby="basic-icon-default-email2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="basic-icon-default-phone">Jabatan</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-phone2" class="input-group-text"><i
                                                class="mdi mdi-briefcase"></i></span>
                                        <input type="text" id="basic-icon-default-phone" class="form-control"
                                            name="jabatan" placeholder="Masukan Jabatan"
                                            value="{{ $Testimonial->jabatan }}" aria-label="Masukan Jabatan"
                                            aria-describedby="basic-icon-default-phone2" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="basic-icon-default-message">Urut</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-message2" class="input-group-text"><i
                                                class="mdi mdi-sort"></i></span>
                                        <input id="basic-icon-default-message" class="form-control" name="urut"
                                            placeholder="Masukan Urut" value="{{ $Testimonial->urut }}"
                                            aria-label="Masukan Urut"
                                            aria-describedby="basic-icon-default-message2"></input>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-submit me-2">Submit</button>
                                    <a href="{{ route('testimonial.index') }}" class="btn btn-cancel">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
