<?php

namespace App\Controllers;
use App\Queries\GetDateTimeQuery;

class ApiController extends \MainController
{
    private $responce = ['jsonrpc'=>'2.0'];
    public function index() {
        $postData = file_get_contents('php://input');
        $data = json_decode($postData, true);

        if($data['method'] == 'datetime'){
            $this->responce['result'] = GetDateTimeQuery::get($data['params']);;
            $this->responce['id'] = $data['id'];
            echo json_encode($this->responce);
        }
    }

}