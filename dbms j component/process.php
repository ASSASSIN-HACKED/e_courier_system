<?php
//start session
session_start();

require_once('database.php');

$action = $_GET['action'];

switch($action) {
	case 'add-courier':
		add_courier();
	break;
  case 'add-customer':
    add_customer();
  break;
  case 'add-shipment':
    add_shipment();
  break;

	case 'delivered':
		markDelivered();
	break;

	case 'add-office':
		addNewOffice();
	break;

	case 'add-manager':
		addManager();
	break;

	case 'update-status':
		updateStatus();
	break;

	case 'change-pass':
		changePass();
	break;

	case 'logOut':
		logOut();
	break;

}//switch

function add_courier(){

	$customerid = $_POST['customerid'];
	$item_id = $_POST['itemid'];
	$Street = $_POST['Street'];
	$address = $_POST['receiveraddress'];
	$Quantity = $_POST['Quantity'];
	$Weight = $_POST['weight'];
	$Bookingmode = $_POST['Bookingmode'];
	$Shipment_type = $_POST['Shipment-type'];

  require_once('database.php');
  $query = dbQuery("SELECT item_id
      FROM courier where item_id='".$_POST['itemid']."'");
            $numrows= mysqli_num_rows($query);
            if ($numrows == 0) {
	$sql = "INSERT INTO courier	VALUES('$item_id', '$customerid', '$address','$Street', '$Quantity','$Weight', '$Shipment_type','$Bookingmode')";
	//echo $sql;
	dbQuery($sql);
	header('Location: courier-add-success.php');
}
else {
  header('Location: invalid-courier.php');
  // code...
}
	//echo $Ship;
}//addCons

function add_customer(){

	$customerid = $_POST['customerid'];
	$pin = $_POST['pin'];
	$Street = $_POST['Street'];
	$phno = $_POST['phno'];
	$name = $_POST['name'];
	$staff_id = $_POST['staffid'];


  require_once('database.php');
  $query = dbQuery("SELECT custid
      FROM customer where custid='".$_POST['customerid']."'");
            $numrows= mysqli_num_rows($query);
            if ($numrows == 0) {

	$sql = "INSERT INTO customer	VALUES('$customerid', '$pin','$Street', '$name','$phno', '$staff_id')";
	//echo $sql;
	dbQuery($sql);

	header('Location: customer-add-success.php');
}
else
{
  header('Location: invalid-customer.php');
}
	//echo $Ship;
}//addCons

function add_shipment(){

	$shipmentid = $_POST['shipmentid'];
	$timeofbooking = $_POST['date'];
	$groupno = $_POST['groupno'];
	$presentcity = $_POST['Presentcity'];
	$status = $_POST['status'];
	$comments = $_POST['Comments'];
  //$shipmentid1=$shipmentid;
  //require_once('database.php');
  $query = dbQuery("SELECT shipment_id
      FROM shipment where shipment_id='".$_POST['shipmentid']."'");
            $numrows= mysqli_num_rows($query);
            if ($numrows == 0) {


	$sql = "INSERT INTO shipment	VALUES('$shipmentid', '$timeofbooking','$groupno', '$presentcity','$status', '$comments')";
	//echo $sql;
	dbQuery($sql);
	header('Location: courier-add-success.php');
}
else {
  header('Location: invalid-shipment.php');
}
	//echo $Ship;
}//addCons



function markDelivered() {
	$cid = (int)$_GET['cid'];
	$sql = "UPDATE tbl_courier
			SET status = 'Delivered'
			WHERE cid= $cid";
	dbQuery($sql);
	header('Location: delivered-success.php');

}//markDelivered();

function addNewOffice() {

	$OfficeName = $_POST['OfficeName'];
	$OfficeAddress = $_POST['OfficeAddress'];
	$City = $_POST['City'];
	$PhoneNo = $_POST['PhoneNo'];
	$OfficeTiming = $_POST['OfficeTiming'];
	$ContactPerson = $_POST['ContactPerson'];

	$sql = "INSERT INTO tbl_offices (off_name, address, city, ph_no, office_time, contact_person)
			VALUES ('$OfficeName', '$OfficeAddress', '$City', '$PhoneNo', '$OfficeTiming', '$ContactPerson')";
	dbQuery($sql);
	header('Location: office-add-success.php');
}//addNewOffice

function addManager() {

	$ManagerName = $_POST['ManagerName'];
	$Password = $_POST['Password'];
	$Address = $_POST['Address'];
	$Email = $_POST['Email'];
	$PhoneNo = $_POST['PhoneNo'];
	$OfficeName = $_POST['OfficeName'];

	$sql = "INSERT INTO tbl_courier_officers (officer_name, off_pwd, address, email, ph_no, office, reg_date)
			VALUES ('$ManagerName', '$Password', '$Address', '$Email', '$PhoneNo', '$OfficeName', NOW())";
	dbQuery($sql);
	header('Location: manager-add-success.php');

}//addNewOffice

function updateStatus() {

	$shipmentid = $_POST['shipment_id'];
	//$timeofbooking = $_POST['tob'];
	//$groupno = $_POST['gn'];
	//$presentcity = $_POST['pc'];
	$status = $_POST['status'];
	$comments = $_POST['comments'];


	//$sql = "INSERT INTO shipment VALUES('$shipmentid', $time_of_booking,'$group_no', '$present_city','$status', '$comments')";
	//echo $sql;
	//dbQuery($sql);
	require_once('database.php');


	$status = $_POST['status'];
	$comments = $_POST['comments'];
	$sql_1 = "UPDATE shipment
			SET status = '$status'
			WHERE shipment_id = $shipmentid ";
	$sql_2 = "UPDATE shipment
					SET comments = '$comments'
					WHERE shipment_id = $shipmentid ";


		//$presentcity = $_POST['pc'];
dbQuery($sql_1);
dbQuery($sql_2);

	header('Location: courier-add-success.php');
}//addNewOffice



function logOut(){
	if(isset($_SESSION['user_name'])){
		unset($_SESSION['user_name']);
	}
	if(isset($_SESSION['user_type'])){
		unset($_SESSION['user_type']);
	}
	session_destroy();
	header('Location: login.php');
}//logOut

?>
