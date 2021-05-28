<?php include_once "include/header.php"?>
	
    <?php

        $user = new User;

        if (isset($_POST['add'])){
            $name =  ucwords(strtolower($_POST['name']));
            $email = strtolower($_POST['email']);
            $cell = $_POST['cell'];
            $uname = strtolower($_POST['username']);
            $user->Insert($name,$email,$cell,$uname);
        }

    ?>
	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2 class="float-left">Sign Up</h2>
                <a class="float-right btn btn-primary" href="user.php">All user</a>
                <div class="clearfix"></div>
				<form action="" method="POST">
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" name="name" type="text">
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" name="email" type="email">
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input class="form-control" name="cell" type="text">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input class="form-control" name="username" type="text">
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" name="add" value="Sign Up">
					</div>
				</form>
                <div>
                    <a class="btn btn-primary" href="student.php">Student</a>
                    <a class="btn btn-primary" href="teacher.php">Teacher</a>
                    <a class="btn btn-primary" href="staff.php">Staff</a>
                </div>
			</div>
		</div>
	</div>
	

<?php include_once "include/footer.php"?>





