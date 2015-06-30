<?php

namespace App;
use DB;
use App\Quotation;
use Illuminate\Database\Eloquent\Model;

class Login extends Model {

    public static function getUserlist() {



        $result = DB::table('users as t')
                  ->select('t.id', 't.firstname', 't.lastname','email')->get();   
        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

}
