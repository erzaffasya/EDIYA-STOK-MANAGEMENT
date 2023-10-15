<?php

namespace App\DataTables;

use Yajra\DataTables\Services\DataTable;
use App\Models\Layanan;

class LayananDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('action', 'layanan.action') // Assuming there's an action view for your buttons
            ->rawColumns(['action']);
    }

    public function query(Layanan $model)
    {
        return $model->select([
            'id',
            'nama_layanan',
            'deskripsi_layanan',
            'icon_layanan',
            'action'
        ]);
    }

    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['title' => 'Action'])
            ->parameters([

            ]);
    }

    protected function getColumns()
    {
        return [
            // Define your columns here
            'id' => ['title' => 'ID'],
            'nama_layanan',
            'deskripsi_layanan',
            'icon_layanan',
            'action'
        ];
    }

    protected function filename()
    {
        return 'Layanan_' . time();
    }
}
