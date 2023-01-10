<?php
include('dbcon.php');

if(isset($_POST["save"])){


        
               $un = $_POST['un'];
               $fn = $_POST['fn'];
               $ln = $_POST['ln'];
               $email = $_POST['email'];
               $mobileno = $_POST['mobileno'];
               $altno = $_POST['altno'];
               $education = $_POST['education'];
               $address = $_POST['address'];
               
               $total_fees = $_POST['total_fees'];
               $class_id = $_POST['class_id'];

               $run = mysqli_query($conn,"insert into student (username,firstname,lastname,location,class_id,status,mobileno,altno,education,email,address,fees)
		values ('$un','$fn','$ln','uploads/NO-IMAGE-AVAILABLE.jpg','$class_id','Unregistered','$mobileno','$altno','$education','$email','$address','$total_fees')                                    
		") or die(mysqli_error()); 

        if($run){
            header("Location: new_view_student.php");
        }

};

?>