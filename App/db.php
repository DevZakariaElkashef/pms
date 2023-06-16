<?php

// const DB_HOST = "localhost";
// const DB_USER = "root";
// const DB_PASS = "";
// const DB_NAME = "pms";


// $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// if (!$conn) {
//     die('connection error'. mysqli_connect_error($conn));
// }

class Database
{
    private const DB_HOST = "localhost";
    private const DB_USER = "root";
    private const DB_PASS = "";
    private const DB_NAME = "pms";

    public $message = '';

    public static function conn() {
        $conn = mysqli_connect(static::DB_HOST, static::DB_USER, static::DB_PASS, static::DB_NAME);

        return $conn;
    }


    public static function insert($table, $keys, $values) {


        // convert array to string for table coloums
        $keysString = '';
        $countKeys = count($keys) -1;

        foreach($keys as $index => $key) {
            if ($index == $countKeys) {
                $keysString .= "`{$key}`";
                break;
            }
            $keysString .= "`{$key}`, ";
        }
        
        // convert array to string for table values
        $valuesString = '';
        $countvalues = count($values) -1;

        foreach($values as $index => $value) {
            if ($index == $countvalues) {
                $valuesString .= "'{$value}'";
                break;
            }
            $valuesString .= "'{$value}', ";
        }

        $query = "INSERT INTO `{$table}` ({$keysString}) VALUES ({$valuesString})";

        $result = mysqli_query(static::conn(), $query);

        return $result;
    }


    public static function fetchAll($table) {
        $query = "SELECT * FROM `{$table}`";

        $result = mysqli_query(static::conn(), $query);

        return $result;
    }


    public static function join($table1, $table2, $foreignKey, $primaryKey, $coloums) {
        $query = "SELECT {$coloums} From {$table1} INNER JOIN {$table2} ON {$foreignKey} = {$primaryKey}";

        // die($query);
        
        $result = mysqli_query(static::conn(), $query);
        return $result;
    }

    public static function fetchOne($table, $id) {
        $query = "SELECT * FROM `{$table}` WHERE `id` = $id";

        $result = mysqli_query(static::conn(), $query);

        $data = mysqli_fetch_assoc($result);

        return $data;
    }


    public static function update ($table, $id, $key, $value) 
    {
        $query = "UPDATE `{$table}` SET `{$key}` = '{$value}' WHERE `id` = $id";

        $result = mysqli_query(static::conn(), $query);

        return $result;   
    }



    public static function delete($table, $id) {
        $query = "DELETE FROM `{$table}` WHERE `id` = $id";

        $result = mysqli_query(static::conn(), $query);

        return $result;
    }

}


// Database::insert('categories', ['NAME'], ['test name']);
// Database::fetchAll('categories');
// Database::delete('categories', 13);

