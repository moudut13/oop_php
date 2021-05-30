<?php

/*
 * Student Control Class
*/

class Student extends database{
    /*
     * Insert Student
     *
     */
    public function InsertStudent($name,$email,$uname,$cell,$photo_name){
        $sql = "INSERT INTO student (name,email,cell,username,photo) VALUES ('$name','$email','$cell','$uname','$photo_name')";
        parent::create($sql);
    }

    /*
     * All Data Show
     */
    public function AllDataShow(){
        return parent::all('student');
    }

    /*
     * Single Data Delete
     */
    public function DataDelete($id,$photo_id){
        unlink('assets/media/student/'.$photo_id);
        parent::delete('student',$id);
        header('location:student.php');
    }

    /*
     * Single Data View
     *
     */
    public function SingleDataView($id){
        return parent::SingleData('student',$id);
    }


    /*
     * sSingle Data Edit
     * 
     */
    public function SingleDataEdit($name,$email,$cell,$uname,$id){
        parent::update($name,$email,$cell,$uname,$id,'student');
        header('location:student.php');
    }

    /*
     *
     */
    public function Search($search){
        return parent:: Like($search,'student');
    }



}

