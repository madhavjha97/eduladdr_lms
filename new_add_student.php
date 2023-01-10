<?php include('dbcon.php'); ?>
<?php  include('session.php'); ?>
<?php include 'new_header.php'; ?>

<body class="layout-default">

<?php include 'new_navbar.php'; ?>

    
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">


                    <div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h1 class="mb-0">Student</h1>
                        </div>
                    </div>





                    <div class="container-fluid page__container">


                <div class="row">
                    <div class="col-12 border" style="margin: 2px; padding:15px">
                        <h2>Add Student</h2>
                      	<form id="add_student" action="save_student.php" method="post" >
								
								        <div class="control-group" >
                                   
                                          <div class="controls">
                                            <select  name="class_id" class="form-control" required>
                                             	<option readonly>Batch</option>
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
                                            <input name="un" class="form-control focused" id="focusedInput" type="text" placeholder = "ID Number" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input name="fn" class="form-control focused" id="focusedInput" type="text" placeholder = "Firstname" required>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input  name="ln" class="form-control focused" id="focusedInput" type="text" placeholder = "Lastname" required>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <div class="controls">
                                            <input  name="email" class="form-control focused" id="focusedInput" type="text" placeholder = "Email" required>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <div class="controls">
                                            <input  name="mobileno" class="form-control focused" id="focusedInput" type="text" placeholder = "Mobile No" required>
                                          </div>
                                        </div>

                                        <div class="control-group">
                                          <div class="controls">
                                            <input  name="altno" class="form-control focused" id="focusedInput" type="text" placeholder = "Alternative Mobile No" required>
                                          </div>
                                        </div>


                                        <div class="control-group">
                                          <div class="controls">
                                            <input  name="education" class="form-control focused" id="focusedInput" type="text" placeholder = "Education" required>
                                          </div>
                                        </div>


                                        <div class="control-group">
                                          <div class="controls">
                                            <input  name="address" class="form-control focused" id="focusedInput" type="text" placeholder = "Address" required>
                                          </div>
                                        </div>



										<div class="control-group">
                                          <div class="controls">
                                            <input  name="total_fees" class="form-control focused" id="focusedInput" type="text" placeholder = "Total Fees" required>
                                          </div>
                                        </div>
								
										
											<div class="control-group">
                                          <div class="controls">
												<button name="save" class="btn btn-info"><i class="icon-plus-sign icon-large"></i></button>

                                          </div>
                                        </div>
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