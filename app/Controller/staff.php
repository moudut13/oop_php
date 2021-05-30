<?php

/*
 * Staff Control Class
*/

class Staff extends database{

    /*
     * Inser Staff Data
     *
     */
    public function InsertStaff($name,$email,$uname,$cell,$photo_name){
        $sql = "INSERT INTO staff (name,email,username,cell,photo) VALUES ('$name','$email','$uname','$cell','$photo_name')";
        parent::create($sql);
    }


    public function AllDataShow(){
        return parent::all('staff');
    }

    public function DataDelete($id,$photo_id){
        unlink('assets/media/staff/'.$photo_id);
        parent::delete('staff',$id);
        header('location:staff.php');
    }

    public function SingleDataView($id){
        return parent::SingleData('staff',$id);
    }

    public function SingleDataEdit($name,$email,$cell,$uname,$id){
        parent::update($name,$email,$cell,$uname,$id,'staff');
        header('location:staff.php');
    }

    /*
     * Mini Search Box
     */
    public function Search($search){
        return parent:: Like($search,'staff');
    }





}

