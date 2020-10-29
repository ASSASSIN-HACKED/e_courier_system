<?php
session_start();
require_once('database.php');
require_once('library.php');

isUser();

$sql = "SELECT *
		FROM office";
$result = dbQuery($sql);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="new.css" rel="stylesheet">

<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style2 {color: #FFFFFF}
-->
</style>
</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-expand-md sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/dbms%20j%20component"><img src="images/logo.png"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="http://localhost/dbms%20j%20component">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Admin Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td width="900">

<?php include("header.php"); ?>
	</td>
  </tr>

  <tr>
    <td bgcolor="#FFFFFF">
	<script language="JavaScript">
var checkflag = "false";

function check(field) {
if (checkflag == "false")
 {
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=true;
	}
	}
	checkflag = "true";
}
else
{
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll")
	{
	field[i].checked=false;
	}
	}
	checkflag = "false";
}

}
function confirmDel(field,msg)
{
	count=0;
	for (i = 0; i < field.length; i++) {
	if(field[i].type=="checkbox" && field[i].name!="chkAll" && field[i].checked==true)
	{
	count++;
	}
	}

	if(count == 0)
	{
		alert("Select any one record to delete!");
		return false;
	}
	else
	{
		return confirm(msg);
	}
}
</script>
<table border="0" align="center" width="80%">
    <tbody><tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left">&nbsp;</td>
    </tr>
    <tr>
      <td class="LargeBlue" bgcolor="#FFFFFF" align="left"><div class="Partext1" align="center"><strong>View All Office Details </strong></div></td>
    </tr>
  </tbody></table>


  <table border="0" cellpadding="1" cellspacing="1" align="center" width="95%">
    <tbody>
	<tr>
    <td>
	</td>
    </tr>
  </tbody></table>
  <table class="blackbox" border="0" cellpadding="4" cellspacing="4" align="center" width="95%">
    <tbody><tr class="BoldRED" bgcolor="#FFFFFF" style="height:20px;">
      <td class="newtext" bgcolor="#EDEDED" width="20%">Office Name </td>
      <td class="newtext" bgcolor="#EDEDED" width="20%">Phone number</td>
	  <td class="newtext" bgcolor="#EDEDED" width="10%">Address</td>
      <td class="newtext" bgcolor="#EDEDED" width="15%">Street</td>
      <td class="newtext" bgcolor="#EDEDED" width="20%">Office Representative</td>
      <td class="newtext" bgcolor="#EDEDED" width="15%">Timing</td>
    </tr>
	<?php

	while($data = dbFetchAssoc($result)){
	extract($data);
	?>
      <tr onMouseOver="this.bgColor='gold';" onMouseOut="this.bgColor='#FFFFFF';" bgcolor="#FFFFFF" style="height:20px;">

      <td class="gentxt"><?php echo $oname; ?></td>
      <td class="gentxt"><?php echo $phno; ?></td>
      <td class="gentxt"><?php echo $address; ?></td>
      <td class="gentxt"><?php echo $street; ?></td>
      <td class="gentxt"><?php echo $O_R; ?></td>
	  <td class="gentxt"><?php echo $timing; ?></td>
    </tr>
    <?php
	}//while
	?>
	  </tbody></table>
  <br>

    </td>
  </tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody><tr>
    <td bgcolor="#2284d5" height="40" width="476">&nbsp;</td>
    <td bgcolor="#2284d5" width="304"><div align="right"></div></td>
  </tr>
</tbody></table>
</td>
  </tr>
</tbody></table>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody>


    <tr>
      <td bgcolor="#FFFFFF">
        <table border="0" cellpadding="1" cellspacing="1" align="center" width="98%">
          <tbody>
            <tr>
              <td class="Partext1">&nbsp;</td>
            </tr>

            <tr>
              <td class="Partext1">
                <div align="center">
                  <table cellpadding="4" cellspacing="0" align="center" width="70%">
                    <script language="javascript">
                      function validate() {
                        if (form.Consignment.value == "") {
                          alert("Consignment No is required.");
                          form.track.focus();
                          return false;
                        }
                      }
                    </script>

                    <tbody>
                      <tr>
                        <td class="TrackTitle" valign="top">
                          <div class="newtext" align="center"></div>
                        </td>
                      </tr>
                      <tr>
                        <td class="bottom" valign="middle">&nbsp;</td>
                      </tr>
                      <tr bgcolor="EFEFEF">
                        <td valign="top" class="alert alert-primary">                         Please go <a href="admin.php">back.<br />
                        </td>
                      </tr>
                      <tr bgcolor="EFEFEF">
                        <td class="TrackNormalBlue" bgcolor="#FFFFFF" valign="top">&nbsp;</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </td>
            </tr>
            <tr>
              <td class="Partext1">&nbsp;</td>
            </tr>


            <tr>
              <td>&nbsp;</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
    <tr>
      <td>
        <table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
          <tbody>
            <tr>
              <td bgcolor="" height="40" width="476">&nbsp;</td>
              <td bgcolor="" width="304">&nbsp;</td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>


</body></html>
