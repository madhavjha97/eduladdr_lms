<?php include('dbcon.php'); ?>
<?php  include('session.php'); ?>
<?php include 'new_header.php'; ?>
<?php $get_id = $_GET['id']; ?>

<body class="layout-default">

<?php include 'new_navbar.php'; ?>

    
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">


                    <div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h1 class="mb-0">Update Fees</h1>
                        </div>
                    </div>





                    <div class="container-fluid page__container">


                <div class="row">
                    <div class="col-12 border" style="margin: 2px; padding:15px">
                        <h2>Add Fees Student</h2>
                    
                        <?php
							$query = mysqli_query($conn,"select * from student LEFT JOIN class ON class.class_id = student.class_id where student_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                                <div class="span12">
								<form method="post">
								
								        <div class="control-group">
                                   
                                          <div class="controls">
                                            <select  name="cys" class="form-control" disabled>
                                             	<option value="<?php echo $row['class_id']; ?>"><?php echo $row['class_name']; ?></option>
											<?php
											$cys_query = mysqli_query($conn,"select * from class order by class_name");
											while($cys_row = mysqli_fetch_array($cys_query)){
											
											?>
											<option value="<?php echo $cys_row['class_id']; ?>"><?php echo $cys_row['class_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
								
										<div class="control-group">
                                          <div class="controls">
                                            <input name="un" value="<?php echo $row['firstname'] . " " . $row['lastname']; ?>" class="form-control focused" id="focusedInput" type="text" placeholder = "ID Number" disabled>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fn"  value="<?php echo $row['mobileno']; ?>"  class="form-control focused" id="focusedInput" type="text" placeholder = "Firstname" disabled>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln"  value="<?php echo $row['fees']; ?>" class="form-control focused" id="focusedInput" type="text" placeholder = "Lastname" disabled>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <div class="controls">
                                            <label>Installment 1</label>
                                            <input  name="inst1"  value="<?php echo $row['inst1']; ?>" class="form-control focused" id="focusedInput" type="text" placeholder = "Installment">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <div class="controls">
                                            <label>Installment 2</label>
                                            <input  name="inst2"  value="<?php echo $row['inst2']; ?>" class="form-control focused" id="focusedInput" type="text" placeholder = "Installment">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <div class="controls">
                                            <label>Installment 3</label>
                                            <input  name="inst3"  value="<?php echo $row['inst3']; ?>" class="form-control focused" id="focusedInput" type="text" placeholder = "Installment">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <div class="controls">
                                            <label>Installment 4</label>
                                            <input  name="inst4"  value="<?php echo $row['inst4']; ?>" class="form-control focused" id="focusedInput" type="text" placeholder = "Installment">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <div class="controls">
                                            <label>Installment 5</label>
                                            <input  name="inst5"  value="<?php echo $row['inst5']; ?>" class="form-control focused" id="focusedInput" type="text" placeholder = "Installment">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <div class="controls">
                                            <label>Installment 6</label>
                                            <input  name="inst6"  value="<?php echo $row['inst6']; ?>" class="form-control focused" id="focusedInput" type="text" placeholder = "Installment">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <div class="controls">
                                            <label>Installment 7</label>
                                            <input  name="inst7"  value="<?php echo $row['inst7']; ?>" class="form-control focused" id="focusedInput" type="text" placeholder = "Installment">
                                          </div>
                                        </div>

                                        
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                             
                        
	      <?php
                            if (isset($_POST['update'])) {
                               
                                $inst1 = $_POST['inst1'];
                                $inst2 = $_POST['inst2'];
                                $inst3 = $_POST['inst3'];
                                $inst4 = $_POST['inst4'];
                                $inst5 = $_POST['inst5'];
                                $inst6 = $_POST['inst6'];
                                $inst7 = $_POST['inst7'];
                      

								mysqli_query($conn,"update student set inst1 = '$inst1' , inst2 ='$inst2' , inst3 = '$inst3' , inst4 = '$inst4', inst5 = '$inst5', inst6 = '$inst6', inst7 = '$inst7' where student_id = '$get_id' ")or die(mysqli_error());

								?>
 
								<script>
								window.location = "new_fees_student.php"; 
								</script>

                       <?php     }  ?>
    
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