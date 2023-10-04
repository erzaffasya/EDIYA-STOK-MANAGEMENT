<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Data Video Promo/</span>
            Manajemen Data Video Promo
        </h4>
        <a href="{{ route('videopromo.create') }}" class="btn btn-primary mb-4">Tambah Video Promo</a>
        <div class="row">
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-body">

                        <!-- /Filter -->
                        <div class="table-responsive">
                            <table class="table datanew">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <th>Sub Judul</th>
                                        <th>Deskripsi</th>
                                        <th>Video</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($VideoPromo as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->subjudul }}</td>
                                            <td>{{ $item->deskripsi }}</td>
                                            <td>{{ $item->video }}</td>
                                            <td>
                                            <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('videopromo.edit', $item->id) }}">
                                                <i class="mdi mdi-pencil-outline me-1"></i> Edit
                                            </a>
                                            <form method="POST" action="{{ route('videopromo.destroy', $item->id) }}">
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
            </div>
        </div>
    </div>
</x-app-layout>
