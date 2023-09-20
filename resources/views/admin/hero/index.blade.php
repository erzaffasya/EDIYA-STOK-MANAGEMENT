<x-app-layout>
    <div class="content">
        <div class="page-header">
            <div class="page-title">
                <h4>Data Hero</h4>
                <h6>Manajemen Data Hero</h6>
            </div>
            <div class="page-btn">
                <a href="{{ route('hero.create') }}" class="btn btn-added"><img src="{{asset('tadmin/assets/img/icons/plus.svg')}}"
                        alt="img">Tambah Hero</a>
            </div>
        </div>
        <!-- /product list -->
        <div class="card">
            <div class="card-body">
                <div class="table-top">
                    <div class="search-set">
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="{{asset('tadmin/assets/img/icons/search-white.svg')}}"
                                    alt="img"></a>
                        </div>
                    </div>
                </div>
                <!-- /Filter -->
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Title</th>
                                <th>Judul</th>
                                <th>Urut</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Hero as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->urut }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>
                                        <a href="javascript:void(0);" class="product-img">
                                            <img src="{{ asset($item->foto) }}" alt="product">
                                        </a>
                                    </td>
                                    <td>

                                        <a class="me-3" href="{{ route('hero.edit', $item->id) }}">
                                            <img src="{{asset('tadmin/assets/img/icons/edit.svg')}}" alt="img">
                                        </a>
                                        <a class='confirm-text' href='javascript:void(0);' data-bs-toggle='modal'
                                            data-bs-target='#deleteModal' data-id='{{ $item->id }}'
                                            data-action='{{ route('hero.destroy', $item->id) }}'
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
