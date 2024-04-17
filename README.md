# PBL Project
 <?php
  $First_Name = $_POST['First_Name'];
  $Last_Name = $_POST['Last_Name'];
  $Email = $_POST['Email'];
  $Subject = $_POST['Subject'];
  $Message = $_POST['Message'];

  // Database Conncection
	$conn = new mysqli('localhost','root','','contact');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into Contact_us(First_Name, Last_Name, Email, Subject, Messsage) values(?, ?, ?, ?, ?)");
	$stmt->bind_param("sssss", $First_Name, $Last_Name, $Email, $Subject, $Message);
	$stmt->execute();
	echo "Registration successfully...";
	$stmt->close();
	$conn->close();
}
?>
