<?php

namespace App\DataTables;
use App\User;
use Yajra\Datatables\Services\DataTable;

class AdminDataTable extends DataTable
{
    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'path.to.action.view')
            ->make(true);
    }

    /**
     * Get the query object to be processed by dataTables.
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Query\Builder|\Illuminate\Support\Collection
     */
    public function query()
    {
        return User::query();
       // $query=User::query();
        //return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->ajax('');
                    //->addAction(['width' => '80px'])
                   // ->parameters($this->getBuilderParameters());
                   /* ->parameters([
                        'dom' =>'Blfrtip',
                        'lengthMenu' =>[[10,25,50,100,-1],[10,25,50,'All Records']],
                        'buttons' =>[
                                    ['text' =>' <i class="fa fa-plus"></i> add ',
                                        'className' => 'btn  btn-info'
                                    ],
                                    [
                                         'print',
                                       
                                    ],
                                   /* [
                                        'extend' => 'Csv',
                                        'className' => 'btn btn-info',
                                        'text' =>' <i class="fa fa-file"></i> file '
                                    ],
                                    [
                                        'extend' => 'excel',
                                        'className' => 'btn btn-success',
                                        'text' =>' <i class="fa fa-file"></i> excel '
                                    ],
                                    [
                                        'extend' => 'reload',
                                        'className' => 'btn btn-default',
                                        'text' =>' <i class="fa fa-refresh"></i> '
                                    ]*/

                           /* ],
                        ]
                        );*/
                    
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            // add your columns
            'name',
            'email',
            'created_at',
            'updated_at',
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'admins_' . time();
    }
}
