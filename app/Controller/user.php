<?php
/*
 * User Control Class
 * developer by Shuvo Ahmed
*/

class User extends database{

    /*
     *  Insert Data
     *
     */
    public function Insert($name,$email,$cell,$uname){
        parent::create("INSERT INTO user (name,email,cell,username) VALUES ('$name','$email','$cell','$uname')");
    }

    /*
     * Show All Data
     *
     */
    public function AllDataShow(){
       return parent::all('user');
    }

    /*
     * delete Single Data
     *
     */
    public function dataDelete($delete){
        parent::delete("user",$delete);
        header('location:user.php');
    }

    /*
     * View Single Data
     *
     */
    public function SingleDataView($id){
       return parent::SingleData('user',$id);
    }

    /*
     * Update data
     *
     */
    public function SingleDataEdit($name,$email,$cell,$uname,$id){
        parent::update($name,$email,$cell,$uname,$id,'user');
        header('location:user.php');
    }

    /*
     * Mini Search Box
     */
    public function Search($search){
       return parent:: Like($search,'user');
    }







}

