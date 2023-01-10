<?php include('dbcon.php'); ?>
<?php  include('session.php'); ?>
<?php include 'new_header.php'; ?>

<body class="layout-default">

<?php include 'new_navbar.php'; ?>

    
                <!-- Header Layout Content -->
                <div class="mdk-header-layout__content mdk-header-layout__content--fullbleed mdk-header-layout__content--scrollable page" style="padding-top: 60px;">


                    <div class="page__heading border-bottom">
                        <div class="container-fluid page__container d-flex align-items-center">
                            <h1 class="mb-0">Fees</h1>
                        </div>
                    </div>





                    <div class="container-fluid page__container">


                <div class="row">
                    
                    <div class="col-12 border">
                        <h2>Student Fees List</h2>
                        <form action="delete_department.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#department_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
                  <thead>
		<tr>
					<th></th>
          <th>Batch</th>
          <th>Name</th>
					<th>Mobile No</th>
					<th>Total Fees</th>
          <th>Installment 1</th>
          <th>Installment 2</th>
          <th>Installment 3</th>
          <th>Inst 4</th>
          <th>Inst 5</th>
          <th>Inst 6</th>
          <th>Inst 7</th>

					
					<th></th>
		</tr>
		</thead><tbody>
			
      <?php
    $query = mysqli_query($conn,"select * from student LEFT JOIN class ON student.class_id = class.class_id ORDER BY student.student_id DESC") or die(mysqli_error());
    while ($row = mysqli_fetch_array($query)) {
      $id = $row['student_id'];
      ?>
    
      <tr>
        
      <td width="30">
      <input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
      </td>
      <td width="100"><?php echo $row['class_name']; ?></td> 
      <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
      <td><?php echo $row['mobileno']; ?></td>
      <td><?php echo $row['fees']; ?></td>
      <td><?php echo $row['inst1']; ?></td>
      <td><?php echo $row['inst2']; ?></td>
      <td><?php echo $row['inst3']; ?></td>
      <td><?php echo $row['inst4']; ?></td> 
      <td><?php echo $row['inst5']; ?></td> 
      <td><?php echo $row['inst6']; ?></td> 
      <td><?php echo $row['inst7']; ?></td> 
      <td width="30"><a href="update_fees_student.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i> </a></td>
    
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