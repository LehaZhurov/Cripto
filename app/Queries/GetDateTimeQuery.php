<?php

namespace App\Queries;


class GetDateTimeQuery
{

    public static function get(array $param): array
    {
        $dataArray = [];
        if ($param['sql_datetime'] == true) {
            $dataArray['sql_datetime'] = date("Y-m-d H:i:s");
        }
        if ($param['unix_datetime'] == true) {
            $dataArray['unix_datetime'] = time();
        }
        return $dataArray;
    }
}
