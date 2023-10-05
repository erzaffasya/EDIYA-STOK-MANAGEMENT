<x-app-layout>

    <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span>  Hero</h4>
              <a href="{{ route('hero.create') }}" class="btn btn-primary mb-4">Tambah Hero</a>

              <!-- Striped Rows -->
              <div class="card">
                <div class="table-responsive">
                  <table class="table table-striped">
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
                    <tbody class="table-border-bottom-0">
                            @foreach ($Hero as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{{ $item->judul }}</td>
                                    <td>{{ $item->urut }}</td>
                                    <td>{{ $item->deskripsi }}</td>
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
                                            <a class="dropdown-item" href="{{ route('hero.edit', $item->id) }}"
                                                ><i class="mdi mdi-pencil-outline me-1"></i> Edit</a
                                            >
                                            <form method="POST" action="{{ route('hero.destroy', $item->id) }}">
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
</x-app-layout>
