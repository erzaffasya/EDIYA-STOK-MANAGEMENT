<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Pilihan Program /</span> Ubah Data Pilihan Program
        </h4>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">
                        <form method="post" action="{{ route('pilihanprogram.update', $PilihanProgram->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
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
                                            placeholder="Masukan Nama Paket"
                                            name="namapaket"
                                            aria-label="Masukan Nama Paket"
                                            aria-describedby="basic-icon-default-fullname2"
                                            value="{{$PilihanProgram->namapaket}}"
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
                                            placeholder="Masukan Harga"
                                            name="harga"
                                            aria-label="Masukan Harga"
                                            aria-describedby="basic-icon-default-company2"
                                            value="{{$PilihanProgram->harga}}"
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
                                            placeholder="Masukan Benefit 1"
                                            aria-label="Masukan Benefit 1"
                                            aria-describedby="basic-icon-default-email2"
                                            value="{{$PilihanProgram->benefit1}}"
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
                                            placeholder="Masukan Benefit 2"
                                            aria-label="Masukan Benefit 2"
                                            aria-describedby="basic-icon-default-phone2"
                                            value="{{$PilihanProgram->benefit2}}"
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
                                            id="basic-icon-default-message"
                                            class="form-control"
                                            name="benefit3"
                                            placeholder="Masukan Benefit 3"
                                            aria-label="Masukan Benefit 3"
                                            aria-describedby="basic-icon-default-message2"
                                            value="{{$PilihanProgram->benefit3}}"
                                        ></input>
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
