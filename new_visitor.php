<?php include('dbcon.php'); ?>
<?php  include('session.php'); ?>
<?php include 'new_header.php'; ?>

<body class="layout-default">

<?php include 'new_navbar.php'; ?>

    
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">


                    <div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h1 class="mb-0">Enquiry </h1>
                        </div>
                    </div>





                    <div class="container-fluid page__container">


                <div class="row">
                    <div class="col-6 border">
                        <h2>Add Enquiry </h2>
                        <form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="form-control focused" name="firstname" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="form-control focused" name="lastname" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
                                            <input class="form-control focused" name="username" id="focusedInput" type="text" placeholder = "Username" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="form-control focused" name="password" id="focusedInput" type="text" placeholder = "Password" required>
                                          </div>
                                        </div>
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
                                <?php
if (isset($_POST['save'])){
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$password = $_POST['password'];


$query = mysqli_query($conn,"select * from users where username = '$username' and password = '$password' and firstname = '$firstname' and password = '$password' ")or die(mysqli_error());
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysqli_query($conn,"insert into users (username,password,firstname,lastname) values('$username','$password','$firstname','$lastname')")or die(mysqli_error());

mysqli_query($conn,"insert into activity_log (date,username,action) values(NOW(),'$user_username','Add User $username')")or die(mysqli_error());
?>
<script>
window.location = "new_admin_user.php";
</script>
<?php
}
}
?>
                    </div>
                    <div class="col-6 border">
                        <h2>Enquiry  List</h2>
                        <form action="delete_users.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#user_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>Name</th>
												<th>Username</th>
											
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"select * from users")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['user_id'];
													?>
									
												<tr>
												<td width="30">
												<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
												</td>
												<td><?php echo $row['firstname']; ?> <?php echo $row['lastname']; ?></td>
	
												<td><?php echo $row['username']; ?></td>
											
												<td width="40">
												<a href="edit_user.php<?php echo '?id='.$id; ?>"  data-toggle="modal" class="btn btn-success"><i class="icon-pencil icon-large"></i></a>
												</td>
		
									
												</tr>
												<?php } ?>
										</tbody>
									</table>
									</form>
                    </div>
                </div>






                    </div>


                </div>
                <!-- // END header-layout__content -->

                

            </div>
            <!-- // END header-layout -->

        </div>
        <!-- // END drawer-layout__content -->

      <?php include'new_siderbar.php'; ?>

   
        </div>
    </div>

    <?php include('script.php'); ?>
    

    <!-- jQuery -->
    <script src="assets/vendor/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/vendor/popper.min.js"></script>
    <script src="assets/vendor/bootstrap.min.js"></script>

    <!-- Perfect Scrollbar -->
    <script src="assets/vendor/perfect-scrollbar.min.js"></script>

    <!-- DOM Factory -->
    <script src="assets/vendor/dom-factory.js"></script>

    <!-- MDK -->
    <script src="assets/vendor/material-design-kit.js"></script>

    <!-- Range Slider -->
    <script src="assets/vendor/ion.rangeSlider.min.js"></script>
    <script src="assets/js/ion-rangeslider.js"></script>

    <!-- App -->
    <script src="assets/js/toggle-check-all.js"></script>
    <script src="assets/js/check-selected-row.js"></script>
    <script src="assets/js/dropdown.js"></script>
    <script src="assets/js/sidebar-mini.js"></script>
    <script src="assets/js/app.js"></script>

 




</body>

</html>