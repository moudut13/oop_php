<?php include_once "include/header.php";?>

<?php
    $user = new User;
    $student = new Student;
    if (isset($_GET['user_view'])){
        $id = $_GET['user_view'];
        $data = $user->SingleDataView($id);
        $row = $data->fetch_object();
        $file = "user";
    }
    if (isset($_GET['student_id'])){
        $id = $_GET['student_id'];
        $data = $student->SingleDataView($id);
        $row = $data->fetch_object();
        $file = "student";

    }
?>

    <div class="wrap-table col-md-4 shadow">
        <div class="card">
            <div class="card-header">
                <img src="assets/media/<?php echo $file;?>/<?php echo $row->photo;?>" style="width: 300px;height: 250px; display: block;margin: auto; border: none;border-radius: 60%;">
            </div>
            <div class="card-body">
                <h2 class="text-capitalize"><?php echo $row->name;?></h2>
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td class="text-capitalize"><?php echo $row->name;?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><?php echo $row->email;?></td>
                    </tr>
                    <tr>
                        <td>cell</td>
                        <td><?php echo $row->cell;?></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><?php echo $row->username;?></td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="index.php">back</a>
            </div>
        </div>
    </div>

<?php include_once "include/footer.php";?>