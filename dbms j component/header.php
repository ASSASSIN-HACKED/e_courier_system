<?php
//session_start();
?>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
  <tbody>
    <tr>
      <td>
        <style type="text/css">

        </style>

        <table border="0" cellpadding="0" cellspacing="0" width="900">
          <tbody>
            <tr bgcolor="99ccff">
              <td height="30" width="110">
                <div align="center"><span class="headtext13 style2 h6"><strong>SHIPMENT:</strong></span></div>
              </td>
              <td height="30" width="43">
                <div class="lowerstyle" align="center"> <a href="add-courier.php">Add courier</a></div>
              </td>

              <td height="30" width="43">
                <div class="lowerstyle" align="center"><a href="add-customer.php">Add customer </a></div>
              </td>
              <td height="30" width="43">
                <div class="lowerstyle" align="center"><a href="add-shipment.php">Add shipment </a></div>
              </td>


              <td width="89">
                <div class="lowerstyle" align="center">
                  <div align="center"><a href="shipmentupdate.php">Search &amp; Update </a></div>
                </div>
              </td>
              <td width="3">
                <div align="left">|</div>
              </td>
              <td height="30" width="96">
                <div align="center"><span class="headtext13 style2 h6"><strong>REPORTS : </strong></span><span class="heading"></span></div>
              </td>
              <td height="30" width="43">
                <div class="lowerstyle" align="center"><a href="courier-list.php">Courier list </a> </div>
              </td>
              <td height="30" width="43">
                <div class="lowerstyle" align="center"><a href="customer-list.php">Customer list </a> </div>
              </td>
              <td width="71">
                <div class="lowerstyle" align="center"><a href="http://tracking4web.com/admin/report_statuswise.php?status=all"></a> </div>
              </td>
              <td width="3"></td>
              <td height="30" width="80">

              </td>
            </tr>

          </tbody>
        </table>

        <?php
        if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 'admin-role') {
          ?>
          <table border="0" cellpadding="0" cellspacing="0" width="900">
            <tbody>
              <tr style="height:25px;">
                <td bgcolor="#E2E2E2" width="4">&nbsp;</td>
                <td bgcolor="#E2E2E2" width="240">&nbsp;<b>Admin Menu</b></td>
                <td bgcolor="#E2E2E2" width="130">
                  <div align="center"><a href="offices-list.php" class="headtext13">Office Details</a></div>
                </td>
                <td bgcolor="#E2E2E2" width="10">|</td>


              </tr>
            </tbody>
          </table>
        <?php
        }
        ?>
        <table border="0" cellpadding="0" cellspacing="0" width="900">
          <tbody>
            <tr style="height:25px;">
              <td bgcolor="#99CCFF" width="4">&nbsp;</td>
              <td bgcolor="#99CCFF" width="350">&nbsp;</td>
              <td bgcolor="#99CCFF" width="130">
                <div align="center"><a href="admin.php" class="headtext13"></a></div>
              </td>
              <td bgcolor="#99CCFF" width="10"></td>
              <td bgcolor="#99CCFF" width="162">
                <div align="center"><a href="admin.php" class="headtext13">Home</a> </div>
              </td>
              <td bgcolor="#99CCFF" width="7">|</td>
              <td bgcolor="#99CCFF" width="125">
                <div align="center"><a href="process.php?action=logOut" class="headtext13">Logout</a></div>
              </td>
            </tr>
          </tbody>
        </table>
