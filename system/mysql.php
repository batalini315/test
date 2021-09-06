<?php
require_once 'config/databaza.php';
class Mysql   extends Databasa {

    /* Подключение к серверу MySQL */
    // private 

 function sql_query($var)
    {       
    $link = mysqli_connect(
        $this->server, $this->username ,$this->password ,$this->base);        
        if (!$link) {
    printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
    exit;
    }
        if ($result = mysqli_query($link, $var)) {
        $arr = [];

        /* Выборка результатов запроса */
        while( $row = mysqli_fetch_assoc($result) ){
            $arr[]=$row;
        }
        /* Освобождаем используемую память */
        mysqli_free_result($result);
        }
        mysqli_close($link);
        return $arr;
    }
    public function GetItemForId($id, $table)
    {
        return $this->sql_query('SELECT * FROM '.$table.' WHERE id = '. $id);
    }

    public function IsRow($table, $argum, $where)
    {
        $mysqli = new mysqli($this->server, $this->username ,$this->password ,$this->base);

        /* проверка соединения */
        if (mysqli_connect_errno()) {
            printf("Соединение не удалось: %s\n", mysqli_connect_error());
            exit();
        }
        $query = "SELECT * FROM ".$table." WHERE ". $argum. " = '". 
        $where."'";
        if ($result = $mysqli->query($query)) {
            /* определение числа рядов в выборке */
            $row_cnt = $result->num_rows;
            $result->close();
            $mysqli->close();
            return $row_cnt;

        }
        else {
            // $result->close();
            $mysqli->close();
            return " error  ";}


    }
    // "INSERT INTO test(id, label) VALUES (1, 'a')"
    public function Insert($table, $cols, $vals)
    {
        $mysqli = new mysqli($this->server, $this->username ,$this->password ,$this->base);

        /* проверка соединения */
        if (mysqli_connect_errno()) {
            printf("Соединение не удалось: %s\n", mysqli_connect_error());
            exit();
        }
        $query = 'INSERT INTO '.$table.' ('.$cols.') VALUES ('.$vals.')';
        // "INSERT INTO test(id, label) VALUES (1, 'a')"
        $result = $mysqli->query($query );
            $mysqli->close();
    }
    public function DeleteItem($id, $table)
        {
            // Create connection
    $conn = new mysqli($this->server, $this->username ,$this->password ,$this->base);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    // sql to delete a record
    $sql = "DELETE FROM ".$table." WHERE id=".$id;

    if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
    } else {
    echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
        }

    
    public function UpdateItem($table,$id, $cols_vars)
    {
    // Create connection
    $conn = new mysqli($this->server, $this->username ,$this->password ,$this->base);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE ".$table." SET ".$cols_vars." WHERE id=".$id;
print_r($sql);
    if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $conn->error;
    }

    $conn->close();
    }

    
}
?>