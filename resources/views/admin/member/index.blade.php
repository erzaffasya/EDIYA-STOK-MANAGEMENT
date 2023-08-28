<x-app-layout>
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Data Member</h4>
                <h6>Manajemen Data Member</h6>
            </div>
            <div class="page-btn">
                <a href="{{ route('member.create') }}" class="btn btn-added"><img
                        src="{{ asset('tadmin/assets/img/icons/plus.svg') }}" alt="img">Tambah Member</a>
            </div>
        </div>
        <!-- /product list -->
        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-input">
                            <a class="btn btn-searchset"><img
                                    src="{{ asset('tadmin/assets/img/icons/search-white.svg') }}" alt="img"></a>
                        </div>
                    </div>
                </div>
                <!-- /Filter -->
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Foto</th>
                                <th>Urut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Member as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jabatan }}</td>
                                    <td>
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="{{ asset($item->foto) }}" alt="product">
                                        </a>
                                    </td>
                                    <td>{{ $item->urut }}</td>
                                    <td>

                                        <a class="me-3" href="{{ route('member.edit', $item->id) }}">
                                            <img src="{{ asset('tadmin/assets/img/icons/edit.svg') }}" alt="img">
                                        </a>
                                        <a class='confirm-text' href='javascript:void(0);' data-bs-toggle='modal'
                                            data-bs-target='#deleteModal' data-id='{{ $item->id }}'
                                            data-action='{{ route('member.destroy', $item->id) }}'
                                            data-message='{{ $item->name }}'>
                                            <img src="{{ asset('tadmin/assets/img/icons/delete.svg') }}"
                                                alt="img">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /product list -->
    </div>
</x-app-layout>
