<?php include('dbcon.php'); ?>
<?php  include('session.php'); ?>
<?php include 'new_header.php'; ?>

<body class="layout-default">

<?php include 'new_navbar.php'; ?>

    
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">


                    <div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h1 class="mb-0">Branch</h1>
                        </div>
                    </div>





                    <div class="container-fluid page__container">


                <div class="row">
                    <div class="col-6 border">
                        <h2>Add Branch</h2>
                        <form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" id="focusedInput" name="d" type="text" placeholder = "Deparment">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" id="focusedInput" name="pi" type="text" placeholder = "Person Incharge">
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
$pi = $_POST['pi'];
$d = $_POST['d'];


$query = mysqli_query($conn,"select * from department where department_name = '$d' and dean = '$pi' ")or die(mysqli_error());
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Data Already Exist');
</script>
<?php
}else{
mysqli_query($conn,"insert into department (department_name,dean) values('$d','$pi')")or die(mysqli_error());
?>
<script>
window.location = "new_branch.php";
</script>
<?php
}
}
?>
                    </div>
                    <div class="col-6 border">
                        <h2>Branch List</h2>
                        <form action="delete_department.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#department_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										  <tr>
												<th></th>
												<th>Department</th>
												<th>Person In-charge</th>
											
												<th></th>
										   </tr>
										</thead>
										<tbody>
													<?php
													$user_query = mysqli_query($conn,"select * from department")or die(mysqli_error());
													while($row = mysqli_fetch_array($user_query)){
													$id = $row['department_id'];
													?>
									
													<tr>
														<td width="30">
														<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
														</td>
														<td><?php echo $row['department_name']; ?></td>
														<td><?php echo $row['dean']; ?></td>
												
														<td width="30"><a href="edit_department.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i></a></td>

                               
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