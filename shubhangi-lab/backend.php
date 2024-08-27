<?php
$con=mysqli_connect('localhost','root')
$insert=false;
if(isset($_POST['name'])){
    
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server,$username,$password);
    
    if(!$con){
        die("connection to this database failed due to".mysqli_connect_error());
    }
    //echo"success connecting to db";

    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $selected test=$_POST['selected test'];
    $mobile number=$_POST['mobile number'];
    $email=$_POST['email'];
    $appointment date=$_POST['appointment date'];
    $other information=$_POST['other information'];
    



    $sql=INSERT INTO `scpl`.`scpl` ( `name`, `age`, `gender`, `selected test`, `mobile number`, `email`, `appointment date`, `other information`) VALUES ( '$name', '$age', '$gender', '$selected test', '$mobile number', '$email', current_timestamp(), '$other');
    <!-- echo $squl; -->

    if($con->query($squl)== true){
       <!-- echo "Successfully inserted"; -->
       $insert=true;
    }
    else{
        echo "ERROR: $squl <br> $con->error";
    }
    $con->close();

}
?>