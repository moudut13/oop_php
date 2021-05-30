<?php

/*
 * Database Control Class
*/

abstract class Database{
    //
    private $host = "localhost";
    private $username = "root";
    private $password = '';
    private $db = "opp1";
    private $connection;

    //method

    //database Config

    private function connect(): mysqli
    {
        return $this->connection = new mysqli($this->host,$this->username,$this->password,$this->db);
    }

    /*
     * create function
     */
    protected function create($sql){
        $this->connect()->query($sql);
    }

    /*
     * find function
     */
    protected function find(){

    }

    /*
     * all function
     */
    protected function all($table,$order = 'DESC'){
       return $this->connect()->query("SELECT * FROM $table ORDER BY id $order");
    }

    /*
     * Single Data function
     */
    protected function SingleData($table,$id){
        return $this->connect()->query("SELECT * FROM $table WHERE id = $id");
    }

    /*
     * delete function
     */
    protected function delete($table,$delete){
        $this->connect()->query("DELETE FROM $table WHERE id=$delete");
    }

    /*
     * Update function
     */
    protected function update($name,$email,$cell,$uname,$id,$table){
        $this->connect()->query("UPDATE $table SET name='$name',email='$email',cell='$cell',username='$uname' WHERE id=$id");
    }

    /*
     * where function
     */
    protected function where(){

    }

    /*
     * or where function
     */
    protected function orWhere(){

    }

    /*
     * Like Function
     */
    protected function Like($search,$table){
        return $this->connect()->query("SELECT * FROM $table WHERE name LIKE '%$search%' OR username LIKE '%$search%' OR email LIKE '%$search%'");
    }
    

}
