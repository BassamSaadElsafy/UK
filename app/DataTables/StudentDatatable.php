<?php

namespace App\DataTables;

use App\Student;
use Yajra\DataTables\Html\Builder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Html\Editor\Editor;

class StudentDatatable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('checkbox', 'admin.students.btn.checkbox')
            ->addColumn('edit', 'admin.students.btn.edit')
            ->addColumn('delete', 'admin.students.btn.delete')
            ->rawColumns([
                'edit',
                'delete',
                'checkbox',
            ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\AdminDatatable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        // return $model->newQuery();
        return Student::query();
    }

    // datatables languages
    public static function lang()
    {
        $langJson = [
            'sProcessing'         => trans('admin.sProcessing'),
            'sLengthMenu'         => trans('admin.sLengthMenu'),
            'sZeroRecords'        => trans('admin.sZeroRecords'),
            'sEmptyTable'         => trans('admin.sEmptyTable'),
            'sInfo'               => trans('admin.sInfo'),
            'sInfoEmpty'          => trans('admin.sInfoEmpty'),
            'sInfoFiltered'       => trans('admin.sInfoFiltered'),
            'sInfoPostFix'        => trans('admin.sInfoPostFix'),
            'sSearch'             => trans('admin.sSearch'),
            'sUrl'                => trans('admin.sUrl'),
            'sInfoThousands'      => trans('admin.sInfoThousands'),
            'sLoadingRecords'     => trans('admin.sLoadingRecords'),
            'oPaginate'           => [
                'sFirst'                => trans('admin.sFirst'),
                'sLast'                 => trans('admin.sLast'),
                'sNext'                 => trans('admin.sNext'),
                'sPrevious'             => trans('admin.sPrevious'),
            ],

                'oAria'               => [
                'sSortAscending'        => trans('admin.sProcessing'),
                'sSortDescending'       => trans('admin.sProcessing'),
            ],

        ];
        return $langJson;
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('admindatatable-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->lengthMenu([[10,25,50,100],[10,25,50,trans('admin.all_record')]])
                    ->buttons(
                        Button::make('create')->className('btn btn-default')->text('<i class="fa fa-plus"></i> ' .'create new Student'),     
                        Button::make('reload' )->className('btn btn-default')->text('<i class="fa fa-refresh"></i> '),
                        Button::make()->className('btn btn-danger delBtn')->text('<i class="fa fa-trash"></i>'),
                    )
                    ->orderBy(1)
                    ->initComplete("function () {
                        this.api().columns([1,2]).every(function () {
                            var column = this;
                            var input = document.createElement(\"input\");
                            $(input).appendTo($(column.footer()).empty())
                            .on('keyup', function () {
                                column.search($(this).val(), false, false, true).draw();
                            });
                        });
                       }")
                    ->language(self::lang());
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [

            // Column::make('id')          ->name('id')          ->data('id')          ->title('#')          ->width('10'),
            Column::make('name')                 ->name('name')        ->data('name')        ->title('name')       ->width('20'),
            Column::make('course_name')          ->name('course_name') ->data('course_name') ->title('course')->width('20'),
            Column::make('completed')            ->name('completed')   ->data('completed')   ->title('completed')  ->width('20'),
            Column::make('status')               ->name('status')      ->data('status')      ->title('status')     ->width('20'),
            Column::make('certificate_id')       ->name('certificate_id')      ->data('certificate_id')   ->title('cert_id')->width('20'),
            Column::make('certificate_link')     ->name('certificate_link')     ->data('certificate_link')->title('certificate_link')->width('20'),
            Column::make('created_at')           ->name('created_at')->data('created_at')->title('Date'),
            // Column::make('updated_at')->name('updated_at')->data('updated_at')->title(trans('admin.updated_at')),
            Column::computed('edit')             ->name('edit')      ->data('edit')      ->title(trans('admin.edit'))
            ->exportable(false)
            ->printable(false)
            ->orderable(false)
            ->searchable(false)
            ->width(20)
            ->addClass('text-center'),
            Column::computed('delete')->name('delete')->data('delete')->title(trans('admin.delete'))
            ->exportable(false)
            ->printable(false)
            ->orderable(false)
            ->searchable(false)
            ->width(60)
            ->addClass('text-center'),
            Column::computed('checkbox')->name('checkbox')->data('checkbox')->title('<input type="checkbox" class="check_all" onclick="check_all()"/>')
            ->exportable(false)
            ->printable(false)
            ->orderable(false)
            ->searchable(false)
            ->width(60)
            ->addClass('text-center'),

        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'students_' . date('YmdHis');
    }
}
