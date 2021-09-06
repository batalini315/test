<?php
    require_once 'system/mysql.php';
    class Divisions  extends Mysql {
    function getDivisions() {
            $arr = $this->sql_query('SELECT * FROM otdel ORDER BY name_otdel DESC LIMIT 50');
        return $arr;
    }
    public function IsDivision($name)
    {
        return $this->IsRow("otdel", "name_otdel", $name);    
    }

    public function InsertDivision($name)
    {
        $table = 'otdel';
        $cols = 'name_otdel';
        $vals ='"'. $name.'"';
        $this->Insert($table, $cols, $vals);

    }
    public function DeleteDivision($id)
    {
        $this->DeleteItem($id, 'otdel');
    }
}