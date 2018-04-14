<?php
namespace App\Model;

use \App\Model\DB;
use  PDO;
class Test{

    public function getAll($table){
        $dbh = DB::instance();
        $sql = "select * from {$table} ";
        $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute();
        return $sth->fetchAll();
    }
}