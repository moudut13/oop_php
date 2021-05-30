<?php include_once "include/header.php"?>

<?php
    $user = new User;
    if (isset($_GET['delete'])){
       $delete = $_GET['delete'];
       $user->dataDelete($delete);
    }
?>

	<div class="wrap-table shadow">
		<div class="card">
			<div class="card-body">
				<h2 class="float-left">User Data</h2>
                <!--Start Search Box-->
                    <form class="form-inline float-right" action="" method="GET">
                        <div class="form-group mx-sm-3">
                            <input type="search" class="form-control" name="search" placeholder="Search" value="<?php if (isset($_GET['search'])){echo $_GET['search'];}?>">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Search" name="submit">
                        </div>
                    </form>
                    <div class="clearfix"></div>
                <!--End Search Box-->
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
                           $data = $user->AllDataShow();
                            if (isset($_GET['submit'])){
                                $search = $_GET['search'];
                                $data = $user->Search($search);
                            }
                           $num = 1;
                           while ($row = $data->fetch_object()):
                        ?>
						<tr>
							<td><?php echo $num;$num++;?></td>
							<td><?php echo $row->name;?></td>
							<td><?php echo $row->email;?></td>
							<td><?php echo $row->cell;?></td>
							<td><img src="assets/media/user/1.jpg" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="view.php?user_view=<?php echo $row->id;?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php?user_edit=<?php echo $row->id;?>">Edit</a>
								<a class="btn btn-sm btn-danger" href="?delete=<?php echo $row->id;?>">Delete</a>
							</td>
						</tr>
                           <?php endwhile;?>
					</tbody>
				</table>
                <a class="btn bg-primary" href="index.php">back</a>
			</div>
		</div>
	</div>



<?php include_once "include/footer.php"?>