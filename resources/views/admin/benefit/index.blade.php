<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">Tables /</span> Benefit
        </h4>
        <a href="{{ route('benefit.create') }}" class="btn btn-primary mb-4">Tambah Benefit</a>

        <!-- Striped Rows -->
        <div class="card">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Benefit</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($Benefit as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->benefit }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                            <i class="mdi mdi-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('benefit.edit', $item->id) }}">
                                                <i class="mdi mdi-pencil-outline me-1"></i> Edit
                                            </a>
                                            <form method="POST" action="{{ route('benefit.destroy', $item->id) }}">
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
