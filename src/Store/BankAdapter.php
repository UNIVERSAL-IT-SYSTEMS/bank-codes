<?php

namespace Jnaxo\BankCodes\Store;

use DB;
/**
 * This is the bank adapter class. Manage connection to database
 *
 * @author J. Igancio Fuentes <jfuentes@zeek.cl>
 */

class BankAdapter{

    public static function country($id){}

    public static function getById($id){
      return $bank = DB::table('banks')->where('id',$id)->get();
    }

    public static function getByCountryId($country_id){
      return $bank = DB::table('banks')->where('country_id',$country_id)->get();
    }

    public static function getByName($name){}

    public static function getByCode($code){}
}
