<?php

namespace App\Helper;

class Tamacrud
{

    public static function savedb($dbs, $request)
    {
       
        foreach ($request as $key => $row) {
            if (is_array($row)) {
                $dbs->$key = implode('; ', $row); //for checkbox
            } else {
                $dbs->$key = $row;
            }
        }
        if ($dbs->save())
            return json_encode(array('status' => 'ok;', 'text' => ''));
        else
            return json_encode(array('status' => 'error;', 'text' => 'Gagal Menyimpan Data'));
    }
}
