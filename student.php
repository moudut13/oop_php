<?php include_once "include/header.php"?>
<?php
    $student = new Student;
    if (isset($_POST['submit'])){
         $name = $_POST['name'];
         $email = $_POST['email'];
         $uname = $_POST['uname'];
         $cell = $_POST['cell'];
         $photo = $_FILES['photo'];

        /*
        * How To use Move Function
        * 1st argument is photo file name
        * 2nd argument is Photo move File directory name
        * move($photo,$file)
        * unique Photo Name
        * Move File
        */

         $photo_name = move($photo,'student');
         $student->InsertStudent($name,$email,$uname,$cell,$photo_name);

    }
    if (isset($_GET['student_id'])){
        $id = $_GET['student_id'];
        $photo_id=$_GET['photo'];
        $student->DataDelete($id,$photo_id);
    }


?>


	<div class="wrap-table shadow">
		<div class="card">
			<div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-left">
                            <h2>Student Data</h2>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary d-inline" data-toggle="modal" href="#add_model">Add Student</a>
                        </div>
                        <span class="clearfix"></span>
                    </div>
                    <div class="col-md-12">
                        <form class="form-inline float-right" action="" method="GET">
                            <div class="form-group mx-sm-3">
                                <input type="search" class="form-control" name="search" placeholder="Search" value="<?php if (isset($_GET['search'])){echo $_GET['search'];}?>">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Search" name="submit">
                            </div>
                        </form>
                        <div class="clearfix"></div>
                        <br>
                    </div>
                </div>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
                        <?php
                            $data = $student->AllDataShow();
                            if (isset($_GET['submit'])){
                                $search = $_GET['search'];
                                $data = $student->Search($search);
                            }
                            $num = 1;
                            while ($row = $data->fetch_object()):
                        ?>
						<tr>
							<td><?php echo $num;$num++;?></td>
							<td><?php echo $row->name;?></td>
							<td><?php echo $row->email;?></td>
							<td><?php echo $row->cell;?></td>
							<td><img src="assets/media/student/<?php echo $row->photo;?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="view.php?student_id=<?php echo $row->id?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php?student_id=<?php echo $row->id;?>">Edit</a>
								<a class="btn btn-sm btn-danger" href="?student_id=<?php echo $row->id;?>&&photo=<?php echo $row->photo?>">Delete</a>
							</td>
						</tr>
                            <?php endwhile;?>
					</tbody>
				</table>
                <a class="btn bg-primary" href="index.php">back</a>
			</div>
		</div>
	</div>


    <div id="add_model" class="modal fade">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <h2>Add User</h2>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control" name="name" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" name="email" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Username</label>
                            <input class="form-control" name="uname" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Cell</label>
                            <input class="form-control" name="cell" type="text">
                        </div>
                        <div class="form-group">
                            <label for="">Photo</label>
                            <input class="form-control" name="photo" type="file">
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="submit" value="Sign Up">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include_once "include/footer.php"?>