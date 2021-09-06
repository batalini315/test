<?php
    require_once 'system/mysql.php';
    class Users  extends Mysql {
        function getUsers() {
            $arr = $this->sql_query('SELECT * FROM users ORDER BY name DESC LIMIT 50');
        return $arr;
    }
    public function IsMail($mail)
    {
        return $this->IsRow("users", "email", $mail);    
    }

    public function InsertUser($arrayData)
    {
        $table = 'users';
        $cols = 'email, name, address, phone, comment,otdel';
        $vals ='"'. $arrayData['email'].'","'.$arrayData['name'].'","'.$arrayData['address'].'","'.$arrayData['phone'].'","'.$arrayData['comment'].'",'.$arrayData['otdel'];
        $this->Insert($table, $cols, $vals);

    }
    public function GetUserForId($id)
    {
        return $this->GetItemForId($id, 'users');
    }

    public function DeleteUser($id)
    {
        $this->DeleteItem($id,'users');
    }
}
    

?>