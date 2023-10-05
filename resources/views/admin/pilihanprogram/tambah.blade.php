<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Pilihan Program /</span> Tambah Data Pilihan Program
        </h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="post" action="{{ route('pilihanprogram.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Paket</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-fullname2" class="input-group-text">
                                            <i class="mdi mdi-package-variant-closed"></i>
                                        </span>
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="basic-icon-default-fullname"
                                            placeholder="Masukkan Nama Paket"
                                            name="namapaket"
                                            aria-label="Masukkan Nama Paket"
                                            aria-describedby="basic-icon-default-fullname2"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Harga</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-company2" class="input-group-text">
                                            <i class="mdi mdi-currency-usd"></i>
                                        </span>
                                        <input
                                            type="text"
                                            id="basic-icon-default-company"
                                            class="form-control"
                                            placeholder="Masukkan Harga"
                                            name="harga"
                                            aria-label="Masukkan Harga"
                                            aria-describedby="basic-icon-default-company2"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Benefit 1</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span class="input-group-text"><i class="mdi mdi-check"></i></span>
                                        <input
                                            type="text"
                                            id="basic-icon-default-email"
                                            class="form-control"
                                            name="benefit1"
                                            placeholder="Masukkan Benefit 1"
                                            aria-label="Masukkan Benefit 1"
                                            aria-describedby="basic-icon-default-email2"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="basic-icon-default-phone">Benefit 2</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-phone2" class="input-group-text">
                                            <i class="mdi mdi-check-all"></i>
                                        </span>
                                        <input
                                            type="text"
                                            id="basic-icon-default-phone"
                                            class="form-control phone-mask"
                                            name="benefit2"
                                            placeholder="Masukkan Benefit 2"
                                            aria-label="Masukkan Benefit 2"
                                            aria-describedby="basic-icon-default-phone2"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-2 form-label" for="basic-icon-default-message">Benefit 3</label>
                                <div class="col-sm-10">
                                    <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-message2" class="input-group-text">
                                            <i class="mdi mdi-check-circle-outline"></i>
                                        </span>
                                        <input
                                            type="text"
                                            id="basic-icon-default-message"
                                            class="form-control"
                                            name="benefit3"
                                            placeholder="Masukkan Benefit 3"
                                            aria-label="Masukkan Benefit 3"
                                            aria-describedby="basic-icon-default-message2"
                                        />
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-end">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                                    <a href="{{ route('pilihanprogram.index') }}" class="btn btn-cancel">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /add -->
    </div>
</x-app-layout>
