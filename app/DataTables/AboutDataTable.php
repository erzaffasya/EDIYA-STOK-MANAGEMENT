<?php

namespace App\DataTables;

use Yajra\DataTables\Services\DataTable;
use App\Models\About; // Import your About model
use Yajra\DataTables\Html\Button;

class AboutDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('action', 'about.action') // Assuming there's an action view for your buttons
            ->rawColumns(['action']);
    }

    public function query(About $model)
    {
        return $model->select([
            'id',
            'judul',
            'deskripsi',
            'action'
        ]); // Select the specific columns you need
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
            'judul',
            'deskripsi',
            'action'
        ];
    }

    protected function filename()
    {
        return 'About_' . time();
    }
}
