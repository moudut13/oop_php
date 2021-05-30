<?php

/*
 * teacher Control Class
*/

class Teacher extends database{

    /*
     * Teacher Single Data Insert
     *
     */
    public function Insert($name,$email,$uname,$cell,$photo_name){
        $sql = "INSERT INTO teacher (name,email,cell,username,photo) VALUES ('$name','$email','$cell','$uname','$photo_name')";
        parent::create($sql);
    }
    /*
     * Teacher Show All Data
     */
    public function AllDataShow(){
        return parent::all('teacher');
    }

    /*
     * Teacher Single dDelete Data
     */
    public function DataDelete($id,$photo_id){
        unlink('assets/media/teacher/'.$photo_id);
        parent::delete('teacher',$id);
        header('location:teacher.php');
    }

    /*
     * Teacher Single data View
     */
    public function SingleDataView($id){
        return parent::SingleData('teacher',$id);
    }

    /*
     * Teacher Single Edit Data
     */
    public function SingleDataEdit($name,$email,$cell,$uname,$id){
        parent::update($name,$email,$cell,$uname,$id,'teacher');
        header('location:teacher.php');
    }

    /*
     * Mini Search Box
     */
    public function Search($search){
        return parent:: Like($search,'teacher');
    }


}

