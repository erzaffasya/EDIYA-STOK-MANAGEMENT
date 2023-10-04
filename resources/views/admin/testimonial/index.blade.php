<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Testimonial</h4>
        <a href="{{ route('testimonial.create') }}" class="btn btn-primary mb-4">Tambah Testimonial</a>

        <!-- Striped Rows -->
        <div class="card">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jabatan</th>
                            <th>Isi</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($Testimonial as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->jabatan }}</td>
                                <td>{{ $item->isi }}</td>
                                <td>
                                    <a href="javascript:void(0);" class="product-img">
                                        <img src="{{ asset($item->foto) }}" alt="product" style="width: 200px;">
                                    </a>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('testimonial.edit', $item->id) }}">
                                                <i class="mdi mdi-pencil-outline me-1"></i> Edit
                                            </a>
                                            <form method="POST" action="{{ route('testimonial.destroy', $item->id) }}">
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
        <!--/ Striped Rows -->
    </div>
</x-app-layout>
