<?php

namespace Modules\Reviews\DataTables;

use App\Models\Test;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Modules\Reviews\Models\Review;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ReviewsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))

        ->addColumn('action', function ($model) {
            $html = '<div class="d-flex inline-flex">';
            $html .= '<a class="btn btn-sm btn-primary me-2" href="' . route('reviews.edit', ['review' => $model->id]) . '">
                          <i class="bi bi-pencil"></i>
                      </a>';
            $html .= '<form action="' . route('reviews.destroy', ['review' => $model->id]) . '" method="POST" style="display:inline-block;">
                          ' . csrf_field() . '
                          ' . method_field('DELETE') . '
                          <button class="btn btn-sm btn-danger" type="submit">
                              <i class="bi bi-trash"></i>
                          </button>
                      </form>';
            $html .= '</div>';

            return $html;
        })



            // ->editColumn('name', function ($model) {

            //     $html = '<a href=' . route('reviews.show', ['review' => $model->id]) . '>' .  $model->name . '</a>';
            //     return $html;
            // })

            ->addColumn('reviewable_type', function ($model) {
                return $model->reviewable_type ;
            })

            ->addColumn('reviewable_id', function ($model) {
                return $model->reviewable_id ;
            })

            ->editColumn('created_at', function ($model) {
                return $model->created_at->format('Y-m-d H:i:s');
            })

            ->editColumn('updated_at', function ($model) {
                return  $model->created_at ? $model->created_at->format('Y-m-d H:i:s'): '';
            })


            //->rawColumns(['action', 'name'])
            ->rawColumns(['action'])
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Review $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('test-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [

            Column::make('id'),
            Column::make('reviewable_type'),
            Column::make('reviewable_id'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Test_' . date('YmdHis');
    }
}
