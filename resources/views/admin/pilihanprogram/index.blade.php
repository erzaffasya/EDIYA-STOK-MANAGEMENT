<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Pilihan Program /</span> Manajemen Pilihan Program
        </h4>
        <a href="{{ route('pilihanprogram.create') }}" class="btn btn-primary mb-4">
            Tambah Pilihan Program
        </a>
        <!-- /product list -->
        <div class="card">
            <div class="card-body">

                <!-- /Filter -->
                <div class="table-responsive">
                    <table class="table  datanew">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Paket</th>
                                <th>Harga</th>
                                <th>Benefit 1</th>
                                <th>Benefit 2</th>
                                <th>Benefit 3</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($PilihanProgam as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->namapaket }}</td>
                                    <td>{{ $item->harga }}</td>
                                    <td>{{ $item->benefit1 }}</td>
                                    <td>{{ $item->benefit2 }}</td>
                                    <td>{{ $item->benefit3 }}</td>
                                    <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('pilihanprogram.edit', $item->id) }}">
                                                <i class="mdi mdi-pencil-outline me-1"></i> Edit
                                            </a>
                                            <form method="POST" action="{{ route('pilihanprogram.destroy', $item->id) }}">
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
