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
				<h2>User Data</h2>
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