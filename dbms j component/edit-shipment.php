<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();
$shipment_id = (int) $_GET['shipment_id'];

$sql = "SELECT *
		FROM shipment
		WHERE shipment_id = $shipment_id";
$result = dbQuery($sql);
while ($data = dbFetchAssoc($result)) {
  extract($data);
  ?>
  <!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
  <html>

  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <title>Admin</title>
    <link href="css/mystyle.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="new.css" rel="stylesheet">

    <style type="text/css">
      .style1 {
        color: #FF0000
      }

      .style3 {
        font-family: verdana, tohama, arial
      }
    </style>
  </head>

  <body>


    <!-- Navigation -->
    <nav class="navbar navbar-expand-md sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/dbms%20j%20component/"><img src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/dbms%20j%20component/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Admin Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <table border="0" cellpadding="0" cellspacing="0" align="center" width="900">

      <tbody>
        <tr>

          <td width="900">
            <?php include("header.php"); ?>

          </td>

        </tr>



        <tr>

          <td bgcolor="#FFFFFF">

            <style type="text/css">
              .ds_box {
                background-color: #FFF;
                border: 1px solid #000;
                position: absolute;
                z-index: 32767;
              }

              .ds_tbl {
                background-color: #FFF;
              }

              .ds_head {
                background-color: #333;

                color: #FFF;

                font-family: Arial, Helvetica, sans-serif;

                font-size: 13px;

                font-weight: bold;

                text-align: center;

                letter-spacing: 2px;

              }

              .ds_subhead {
                background-color: #CCC;
                color: #000;
                font-size: 12px;
                font-weight: bold;
                text-align: center;
                font-family: Arial, Helvetica, sans-serif;
                width: 32px;
              }

              .ds_cell {
                background-color: #EEE;
                color: #000;
                font-size: 13px;

                text-align: center;

                font-family: Arial, Helvetica, sans-serif;

                padding: 5px;

                cursor: pointer;

              }

              .ds_cell:hover {
                background-color: #F3F3F3;
              }

              /* This hover code won't work for IE */
            </style>
            <style type="text/css">
              <!--
              body {

                margin-left: 0px;

                margin-top: 0px;

                margin-right: 0px;

                margin-bottom: 0px;

              }
              -->

            </style>





            <table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0">

              <tbody>
                <tr>

                  <td id="ds_calclass"> </td>

                </tr>

              </tbody>
            </table>



            <br>

            <table border="0" align="center" width="98%">

              <tbody>
                <tr>

                  <td class="Partext1" bgcolor="F9F5F5" align="center"><strong class="h4">Edit Shipment </strong></td>

                </tr>

              </tbody>
            </table>



            <br>

            <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">



              <tbody>
                <tr>

                  <td class="Partext1" bgcolor="#FFFFFF" align="right">
                    <div align="center">

                      <table border="0" cellpadding="1" cellspacing="1" width="80%">

                        <tbody>
                          <tr>

                            <td width="55%">
                              <div align="left" class="style3">Ship id: </div>
                            </td>

                            <td width="45%">
                              <div align="left" class="style3">

                                <?php echo $shipment_id; ?>
                              </div>
                            </td>

                          </tr>

                          <tr>

                            <td>
                              <div align="left" class="style3">Time of booking : </div>
                            </td>

                            <td>
                              <div align="left" class="style3">

                                <?php echo $time_of_booking; ?>
                              </div>
                            </td>
                          </tr>

                          <tr>

                            <td>
                              <div align="left" class="style3">Group number : </div>
                            </td>

                            <td>
                              <div align="left" class="style3">
                                <?php echo $group_no; ?>
                              </div>
                            </td>
                          </tr>
                          <tr>

                            <td>
                              <div align="left" class="style3">Present city : </div>
                            </td>

                            <td>
                              <div align="left" class="style3">
                                <?php echo $present_city; ?>
                              </div>
                            </td>
                          </tr>
                          <tr>

                            <td>
                              <div align="left" class="style3">Status : </div>
                            </td>

                            <td>
                              <div align="left" class="style3">
                                <?php echo $status; ?>
                              </div>
                            </td>
                          </tr>
                          <tr>

                            <td>
                              <div align="left" class="style3">Group number : </div>
                            </td>

                            <td>
                              <div align="left" class="style3">
                                <?php echo $comments; ?>
                              </div>
                            </td>
                          </tr>

                        </tbody>
                      </table>

                    </div>
                  </td>


                </tr>
              </tbody>
            </table>

            <span class="Partext1"><br>
            </span><span class="Partext1"><br>

              <br>

            </span>

            <form action="process.php?action=update-status" method="post" name="frmShipment" id="frmShipment">

              <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

                <tbody>
                  <tr>

                    <td colspan="3" bgcolor="#FFFFFF" align="right">
                      <div class="Partext1" align="center"><strong class="h4">UPDATE STATUS </strong>

                      </div>
                    </td>

                  </tr>

                  <tr>

                    <td colspan="3" bgcolor="#FFFFFF" align="right"></td>
                  </tr>



                  <tr>

                    <td class="Partext1 h6" bgcolor="#FFFFFF" align="right">New Status: </td>

                    <td class="Partext1" bgcolor="#FFFFFF" width="26%">







                      <select name="status" class="form-control">

                        <option value="In Transit">In Transit</option>

                        <option value="landed">landed</option>

                        <option value="delayed">delayed</option>

                        <option value="delivered">delivered</option>
                        <option value="Onhold">Onhold</option>
                      </select>

                      <br></td>

                    <td class="Partext1" bgcolor="#FFFFFF" width="58%">
                      <div align="center">
                      </span></a><span class="style1"></span></div>
                    </td>
                  </tr>


                  <tr>

                    <td bgcolor="#FFFFFF" align="right"><span class="Partext1 h6">Comments:</span></td>

                    <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
                      <textarea name="comments" cols="40" rows="3" id="comments" class="form-control"></textarea></td>
                  </tr>


                  <tr>

                    <td bgcolor="#FFFFFF" align="right"><span class="Partext1 h6">Confirm ID once again</span></td>

                    <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
                      <textarea name="shipment_id" cols="40" rows="3" id="shipment_id" class="form-control"></textarea></td>
                  </tr>
                  <tr>

                    <td bgcolor="#FFFFFF" align="right">&nbsp;</td>

                    <td colspan="2" class="Partext1" bgcolor="#FFFFFF">


                      <input name="submit" value="Submit" type="submit" class="btn btn-info">

                      </td>
                  </tr>

                  <tr>

                    <td colspan="3" bgcolor="#FFFFFF" align="right">
                      <div align="center">


                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>

              <br>

            </form>
          </td>

        </tr>

        <tr>

          <td>
            <table border="0" cellpadding="0" cellspacing="0" align="center" width="900">
              <tbody>
                <tr>
                  <td bgcolor="" height="40" width="476">&nbsp;</td>
                  <td bgcolor="" width="304">
                    <div align="right"></div>
                  </td>
                </tr>
              </tbody>
            </table>
          </td>

        </tr>

      </tbody>
    </table>


    <!--- Connect -->
    <footer id="connect">
      <div class="container-fluid padding">
        <div class="row text-center">
          <div class="col-md-4">
            <a class="navbar-brand" href="#"><img src="images/logo.png"></a>
            <hr class="light">
            <p>999-999-9999</p>
            <p>email@gmail.com</p>
            <p>Dtreet name</p>
            <p>City, State, 00000</p>
          </div>
          <div class="col-md-4">
            <hr class="light">
            <h5>Our hours</h5>
            <hr class="light">
            <p>Monday: 9am to 5pm</p>
            <p>Saturday: 10am to 6pm</p>
            <p>Sunday closed</p>
          </div>
          <div class="col-md-4">
            <hr class="light">
            <h5>Service Area</h5>
            <hr class="light">
            <p>City, State, 00000</p>
            <p>City, State, 00000</p>
            <p>City, State, 00000</p>
            <p>City, State, 00000</p>
          </div>
        </div>
      </div>
    </footer>


  </body>

  </html>
<?php }
?>
