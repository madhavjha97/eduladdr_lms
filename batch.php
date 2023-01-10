<?php include('dbcon.php'); ?>
<?php  include('session.php'); ?>
<?php include 'new_header.php'; ?>

<body class="layout-default">

<?php include 'new_navbar.php'; ?>

    
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">


                    <div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h1 class="mb-0">Batch</h1>
                        </div>
                    </div>





                    <div class="container-fluid page__container">


                <div class="row">
                    <div class="col-6 border">
                        <h2>Add Batch</h2>
                        <form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input name="class_name" class="form-control focused" id="focusedInput" type="text" placeholder = "Batch Name" required>
                                          </div>
                                        </div>
										
									
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i>Add Batch</button>

                                          </div>
                                        </div>
                                </form>
                                <?php
if (isset($_POST['save'])){
$class_name = $_POST['class_name'];


$query = mysqli_query($conn,"select * from class where class_name  =  '$class_name' ")or die(mysqli_error());
$count = mysqli_num_rows($query);

if ($count > 0){ ?>
<script>
alert('Date Already Exist');
</script>
<?php
}else{
mysqli_query($conn,"insert into class (class_name) values('$class_name')")or die(mysqli_error());
?>
<script>
window.location = "batch.php";
</script>
<?php
}
}
?>
                    </div>
                    <div class="col-6 border">
                        <h2>Batch</h2>
                        <form action="delete_class.php" method="post">
  									<table  class="table">
										<a data-toggle="modal" href="#class_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
													<?php include('modal_delete.php'); ?>
									<thead>
										  <tr>
													<th></th>
													<th>Batch List</th>
													<th></th>
										   </tr>
										</thead>
										<tbody>
										<?php
										$class_query = mysqli_query($conn,"select * from class")or die(mysqli_error());
										while($class_row = mysqli_fetch_array($class_query)){
										$id = $class_row['class_id'];
										?>
												
										<tr>
											<td width="30">
											<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
											</td>
											<td><?php echo $class_row['class_name']; ?></td>
											<td width="40"><a href="edit_class.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil icon-large"></i> </a></td>
                                     
                               
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