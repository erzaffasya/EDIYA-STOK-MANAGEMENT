<x-app-layout>
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="card-datatable table-responsive pt-0">
                <div class="card-header flex-column flex-md-row">
                    <div class="dt-action-buttons text-end pt-3 pt-md-0">
                        <div class="dt-buttons">
                            <a href="{{ route('about.create') }}" class="btn btn-primary">
                                <span><i class="mdi mdi-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Add New About</span>
                            </a>
                        </div>
                    </div>
                </div>
                <table class="datatables-hero table table-bordered" id="about-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            $('#about-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('about.data') !!}',
                columns: [
                    {
                        render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                    },
                    { data: 'judul'},
                    { data: 'deskripsi' },
                    {
                        data: null,
                        render: function(data, type, row) {
                        var editUrl = "/admin/about/" + data.id + "/edit";
                        var deleteUrl = "/admin/about/" + data.id;

                        return `
                        <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="mdi mdi-dots-vertical"></i>
                            </button>
                            <div class="dropdown-menu">
                                <button class="dropdown-item" onclick="window.location.href='${editUrl}'">
                                    <i class="mdi mdi-pencil-outline me-1"></i> Edit
                                </button>
                                <form method="POST" action="${deleteUrl}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="dropdown-item">
                                        <i class="mdi mdi-trash-can-outline me-1"></i> Delete
                                    </button>
                                </form>
                        </div>`;

                    },
                    orderable: false,
                    searchable: false
                }
                ]
            });
        });
    </script>
</x-app-layout>
