<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Forms /</span> Manajemen Data Layanan & Dukungan
        </h4>
        <a href="{{ route('layanan.create') }}" class="btn btn-primary mb-4">
            Tambah Layanan</a>
        <!-- /product list -->
        <div class="card">
            <div class="card-body">

                <!-- /Filter -->
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Layanan</th>
                                <th>Deskripsi Layanan</th>
                                <th>Icon Layanan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Layanan as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_layanan }}</td>
                                    <td>{{ $item->deskripsi_layanan }}</td>
                                    <td>{{ $item->icon_layanan }}</td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="mdi mdi-dots-vertical"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('layanan.edit', $item->id) }}"
                                                ><i class="mdi mdi-pencil-outline me-1"></i> Edit</a
                                            >
                                            <form method="POST" action="{{ route('layanan.destroy', $item->id) }}">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="dropdown-item">
                                                    <i class="mdi mdi-trash-can-outline me-1"></i> Delete
                                                </button>
                                            </form>
                                            </div>
                                        </div>
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
