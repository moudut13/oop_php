<?php include_once "include/header.php";?>

<?php
    $user = new User;
    $student = new Student;
    if (isset($_GET['user_edit'])){
        $id = $_GET['user_edit'];
        $data = $user->SingleDataView($id);
        $row = $data->fetch_object();

        if (isset($_POST['update'])){
            $name =  ucwords(strtolower($_POST['name']));
            $email = strtolower($_POST['email']);
            $cell = $_POST['cell'];
            $uname = strtolower($_POST['username']);
            $user->SingleDataEdit($name,$email,$cell,$uname,$id);
        }
    }

    if (isset($_GET['student_id'])){
        $id = $_GET['student_id'];
        $data = $student->SingleDataView($id);
        $row = $data->fetch_object();

        if (isset($_POST['update'])){
            $name =  ucwords(strtolower($_POST['name']));
            $email = strtolower($_POST['email']);
            $cell = $_POST['cell'];
            $uname = strtolower($_POST['username']);
            $student->SingleDataEdit($name,$email,$cell,$uname,$id);
        }
    }
?>

    <div class="wrap-table col-md-4 shadow">
        <div class="card">
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input class="form-control" name="name" type="text" value="<?php echo $row->name;?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input class="form-control" name="email" type="email" value="<?php echo $row->email;?>">
                    </div>
                    <div class="form-group">
                        <label for="">Cell</label>
                        <input class="form-control" name="cell" type="text" value="<?php echo $row->cell;?>">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input class="form-control" name="username" type="text" value="<?php echo $row->username;?>">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-primary" type="submit" name="update" value="Update Data">
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="index.php">back</a>
            </div>
        </div>
    </div>

<?php include_once "include/footer.php";?>