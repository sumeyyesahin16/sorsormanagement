<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getDataTable($table,$model,$input){

        if(isset($input['order'])){
            foreach ($input['order'] as $order){
                $columns = $input['columns'];
                $model->orderBy($columns[$order['column']]['data'], $order['dir']);
            }
        }
        return $table->collection($model->get());
    }



}
