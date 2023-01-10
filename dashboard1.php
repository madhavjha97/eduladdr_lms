<?php include('dbcon.php'); ?>
<?php  include('session.php'); ?>
<?php include 'new_header.php'; ?>

<body class="layout-default">

<?php include 'new_navbar.php'; ?>

    
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">


                    <div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h1 class="mb-0">Overview</h1>
                        </div>
                    </div>





                    <div class="container-fluid page__container">

                    <?php 
								$query_reg_teacher = mysqli_query($conn,"select * from teacher where teacher_status = 'Registered' ")or die(mysqli_error());
								$count_reg_teacher = mysqli_num_rows($query_reg_teacher);
								?>

                        <div class="card-group">
                            <div class="card card-body text-center">

                                <div class="d-flex flex-row align-items-center">
                                    <div class="card-header__title m-0"> <i class="material-icons icon-muted icon-30pt">assessment</i>Total Trainer</div>
                                    <div class="text-amount ml-auto"><?php echo $count_reg_teacher; ?></div>
                                </div>
                            </div>
                            <div class="card card-body text-center">
                            <?php 
								$query_student = mysqli_query($conn,"select * from student")or die(mysqli_error());
								$count_student = mysqli_num_rows($query_student);
								?>
                                <div class="d-flex flex-row align-items-center">
                                    <div class="card-header__title m-0"><i class="material-icons icon-muted icon-30pt">assessment</i>Total Student</div>
                                    <div class="text-amount ml-auto"><?php echo $count_student ?></div>
                                </div>
                            </div>
                            <div class="card card-body text-center">
                                <div class="d-flex flex-row align-items-center">
                                <?php 
								$query_class = mysqli_query($conn,"select * from class")or die(mysqli_error());
								$count_class = mysqli_num_rows($query_class);
								?>
                                    <div class="card-header__title m-0"><i class="material-icons  icon-muted icon-30pt">assessment</i>Total Batch</div>
                                    <div class="text-amount ml-auto"><?php echo $count_class; ?></div>
                                </div>
                            </div>
                        </div>


                         <!-- <div class="card-group">
                            <div class="card card-body text-center">

                                <div class="d-flex flex-row align-items-center">
                                    <div class="card-header__title m-0"> <i class="material-icons icon-muted icon-30pt">assessment</i> Visits</div>
                                    <div class="text-amount ml-auto">3,642</div>
                                </div>
                            </div>
                            <div class="card card-body text-center">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="card-header__title m-0"><i class="material-icons icon-muted icon-30pt">shopping_basket</i> Earnings</div>
                                    <div class="text-amount ml-auto">&dollar;12,311</div>
                                </div>
                            </div>
                            <div class="card card-body text-center">
                                <div class="d-flex flex-row align-items-center">
                                    <div class="card-header__title m-0"><i class="material-icons  icon-muted icon-30pt">perm_identity</i> Students</div>
                                    <div class="text-amount ml-auto">78</div>
                                </div>
                            </div>
                        </div>
 -->

            


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