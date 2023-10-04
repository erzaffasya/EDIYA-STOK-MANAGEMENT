<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Forms/</span>
            Ubah Data Layanan & Dukungan
        </h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="post" action="{{ route('layanan.update', $Layanan->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Nama Layanan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-company2" class="input-group-text"
                                ><i class="mdi mdi-subtitles-outline"></i
                              ></span>
                              <input
                                type="text"
                                id="basic-icon-default-company"
                                class="form-control"
                                placeholder="Masukan Nama Layanan"
                                name="nama_layanan"
                                aria-label="Masukan Nama Layanan"
                                aria-describedby="basic-icon-default-company2"
                                value="{{$Layanan->nama_layanan}}" />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-message">Deskripsi Layanan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-message2" class="input-group-text"
                                ><i class="mdi mdi-message-outline"></i
                              ></span>
                              <input
                                id="basic-icon-default-message"
                                class="form-control"
                                name="deskripsi_layanan"
                                placeholder="Masukan Deskripsi Layanan"
                                aria-label="Masukan Deskripsi Layanan"
                                aria-describedby="basic-icon-default-message2"
                                value="{{$Layanan->deskripsi_layanan}}"
                                />
                            </div>
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 form-label" for="basic-icon-default-message">Icon Layanan</label>
                          <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-message2" class="input-group-text"
                                ><i class="mdi mdi-image-frame"></i
                              ></span>
                              <input
                                id="basic-icon-default-message"
                                class="form-control"
                                name="icon_layanan"
                                placeholder="ex: fa-bar-chart"
                                aria-label="Masukan Icon Layanan"
                                aria-describedby="basic-icon-default-message2"
                                value="{{$Layanan->icon_layanan}}"
                                />
                            </div>
                          </div>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-sm-10">
                            <button type="submit" class="btn btn-submit me-2">Submit</button>
                            <a href="{{ route('layanan.index') }}" class="btn btn-cancel">Cancel</a>
                          </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
