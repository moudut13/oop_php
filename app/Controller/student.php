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

    public function AllDataShow(){
        return parent::all('student');
    }

    public function DataDelete($id,$photo_id){
        unlink('assets/media/student/'.$photo_id);
        parent::delete('student',$id);
        header('location:student.php');
    }

    public function SingleDataView($id){
        return parent::SingleData('student',$id);
    }

    public function SingleDataEdit($name,$email,$cell,$uname,$id){
        parent::update($name,$email,$cell,$uname,$id,'student');
        header('location:student.php');
    }




}

