<?php 
     $NAME = $_POST['NAME'];
     $YEAR = $_POST['YEAR'];
     $ROLLNO = $_POST['ROLL_NO'];
     $DIVISION = $_POST['DIVISION'];

     //Database connection

     $conn = new mysqli('localhost','root','','acefee');
     if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into paid student(NAME,YEAR,ROLL_NO,DIVISION) values(?, ?, ?, ?)");
		$stmt->bind_param("ssis", $NAME,$YEAR,$ROLLNO,$DIVISION);
		$execval = $stmt->execute();
		echo $execval;
		echo "REDIRECTING...";
		$stmt->close();
		$conn->close();
	}
?>