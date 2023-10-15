<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-body">
                <h4 class="py-3 mb-4">
                    <span class="text-muted fw-light">Forms /</span> Manajemen Data Layanan & Dukungan
                </h4>
                <div class="dt-action-buttons text-end pt-3 pt-md-0">
                    <div class="dt-buttons">
                        <a href="{{ route('layanan.create') }}" class="btn btn-primary dt-button">
                            <span><i class="mdi mdi-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Tambah Layanan</span>
                        </a>
                    </div>
                </div>

                <!-- Striped Rows -->
                <div class="table-responsive">
                    <table class="table table-bordered" id="layanan-table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Layanan</th>
                                <th>Deskripsi Layanan</th>
                                <th>Icon Layanan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <!--/ Striped Rows -->
            </div>
        </div>
    </div>
</x-app-layout>

<script>
    $(function() {
        $('#layanan-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('layanan.data') !!}',
            columns: [
                {
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;
                    },
                },
                { data: 'nama_layanan' },
                { data: 'deskripsi_layanan' },
                { data: 'icon_layanan' },
                {
                    data: 'id',
                    render: function(data, type, row) {
                        var editUrl = "/admin/layanan/" + data + "/edit";
                        var deleteUrl = "/admin/layanan/" + data;

                        return `
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="mdi mdi-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="${editUrl}">
                                        <i class="mdi mdi-pencil-outline me-1"></i> Edit
                                    </a>
                                    <form method="POST" action="${deleteUrl}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="dropdown-item">
                                            <i class="mdi mdi-trash-can-outline me-1"></i> Delete
                                        </button>
                                    </form>
                                </div>
                            </div>`;
                    },
                    orderable: false,
                    searchable: false
                }
            ]
        });
    });
</script>
