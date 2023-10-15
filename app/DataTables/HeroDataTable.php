<?php

namespace App\DataTables;

use Yajra\DataTables\Services\DataTable;
use App\Models\Hero; // Import your Hero model
use Yajra\DataTables\Html\Button;

class HeroDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables($query)
            ->addColumn('action', 'hero.action') // Assuming there's an action view for your buttons
            ->rawColumns(['action']);
    }

    public function query(Hero $model)
    {
        return $model->select([
            'id',
            'title',
            'judul',
            'deskripsi',
            'foto',
            'urut',
        ]); // Select the specific columns you need
    }

    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['title' => 'Action'])
            ->parameters([
                'dom' => 'Bfrtip',
                'buttons' => [
                    'export',
                    Button::make('excel'),
                    Button::make('csv'),
                ],
            ]);
    }

    protected function getColumns()
    {
        return [
            // Define your columns here
            'id' => ['title' => 'ID'],
            'title',
            'judul',
            'deskripsi',
            'foto',
            'urut',
        ];
    }

    protected function filename()
    {
        return 'Hero_' . time();
    }
}
