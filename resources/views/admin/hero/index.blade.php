<x-app-layout>
<div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h4 class="py-3 mb-4"><span class="text-muted fw-light">DataTables /</span> Basic</h4> -->
              <div class="card">
                <div class="card-datatable table-responsive pt-0">
                    <div class="card-header flex-column flex-md-row">
                        <!-- <div class="head-label text-center">
                            <h5 class="card-title mb-0">DataTables Hero</h5>
                        </div> -->
                        <div class="dt-action-buttons text-end pt-3 pt-md-0">
                            <div class="dt-buttons">
                            <button class="dt-button buttons-collection dropdown-toggle btn btn-label-primary me-2" tabindex="0" aria-controls="DataTables_Table_0" type="button" aria-haspopup="dialog" aria-expanded="false"><span><i class="mdi mdi-export-variant me-sm-1"></i> <span class="d-none d-sm-inline-block">Export</span></span><span class="dt-down-arrow">▼</span></button>
                            <a href="{{ route('hero.create') }}" class="btn btn-primary">
    <span><i class="mdi mdi-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">Add New Hero</span>
</a>
                        </div>
                        </div>
                    </div>
                  <table class="datatables-hero table table-bordered" id="users-table">
        <!-- <a href="{{route('hero.export.excel') }}" class="btn btn-success">Export to Excel</a>
        <a href="{{route('hero.export.pdf') }}" class="btn btn-danger">Export to PDF</a>
        <a href="{{route('hero.create') }}" class="btn btn-primary">Tambah Hero</a> -->
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th>Foto</th>
                    <th>Urut</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <!-- <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->
    <script>
        $(function() {
            $('#users-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('hero.data') !!}',
                columns: [
                        {
                            render: function (data, type, row, meta) {
                            return meta.row + meta.settings._iDisplayStart + 1;
                        },
                        },
                        {
                        data: 'title'
                        },
                        {
                        data: 'judul'
                        },
                        {
                        data: 'deskripsi'
                        },
                        {
                            render: function(data, type, row) {
                                var imageSource = '{{ asset('') }}' + row.foto;
                                return '<img src="' + imageSource + '" width="100" height="100" />';
                            },
                            orderable: false,
                            searchable: false
                        },
                        {
                        data: 'urut'
                        },

                ],
                // dom: 'Bfrtip',
            //     buttons: [
            //     'copy', 'csv', 'excel', 'pdf', 'print'
            // ]
            });
        });
    </script>
</x-app-layout>
