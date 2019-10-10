<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "rec_off";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

if($conn){
      if(isset($_POST['save']))
      {
         $value1 = $_POST['value1'];
         $value2 = $_POST['value2'];
         $value3 = $_POST['value3'];
         $value4 = $_POST['value4'];
         $value5 = $_POST['value5'];
         $value6 = $_POST['value6'];
         $value7 = $_POST['value7'];
         $value8 = $_POST['value8'];
         $value9 = $_POST['value9'];
         $value10 = $_POST['value10'];
         $value11 = $_POST['value11'];
         $value12 = $_POST['value12'];
         $value13 = $_POST['value13'];
         $value14 = $_POST['value14'];
         $value15 = $_POST['value15'];
         $value16 = $_POST['value16'];
         $value17 = $_POST['value17'];
         $value18 = $_POST['value18'];
         $value19 = $_POST['value19'];
         $value20 = $_POST['value20'];
         $comments = $_POST['comments'];
         $fullname = $_POST['fullname'];

         $sql = "UPDATE recon_off_bsc SET save_cost=$value1 WHERE id=1";
         $sql2 = "UPDATE recon_off_bsc SET hourly_recon=$value2 WHERE id=1";
         $sql3 = "UPDATE recon_off_bsc SET trans_input=$value3 WHERE id=1";
         $sql4 = "UPDATE recon_off_bsc SET comp_revers=$value4 WHERE id=1";
         $sql5 = "UPDATE recon_off_bsc SET comp_retries=$value5 WHERE id=1";
         $sql6 = "UPDATE recon_off_bsc SET approve_sla=$value6 WHERE id=1";
         $sql7 = "UPDATE recon_off_bsc SET ensure_acounts=$value7 WHERE id=1";
         $sql8 = "UPDATE recon_off_bsc SET ensure_wallets=$value8 WHERE id=1";
         $sql9 = "UPDATE recon_off_bsc SET ensure_system=$value9 WHERE id=1";
         $sql10 = "UPDATE recon_off_bsc SET achieve_service=$value10 WHERE id=1";
         $sql11 = "UPDATE recon_off_bsc SET intro_methods=$value11 WHERE id=1";
         $sql12 = "UPDATE recon_off_bsc SET provide_daily=$value12 WHERE id=1";
         $sql13 = "UPDATE recon_off_bsc SET offjob_training=$value13 WHERE id=1";
         $sql14 = "UPDATE recon_off_bsc SET onjob_training=$value14 WHERE id=1";
         $sql15 = "UPDATE recon_off_bsc SET staff_briefs=$value15 WHERE id=1";
         $sql16 = "UPDATE recon_off_bsc SET staff_cert=$value16 WHERE id=1";
         $sql17 = "UPDATE recon_off_bsc SET int_serv =$value17 WHERE id=1";
         $sql18 = "UPDATE recon_off_bsc SET employ_sat=$value18 WHERE id=1";
         $sql19 = "UPDATE recon_off_bsc SET retention=$value19 WHERE id=1";
         $sql20 = "UPDATE recon_off_bsc SET embed_CV=$value20 WHERE id=1";
         $sql21 = "UPDATE recon_off_bsc SET comments= '$comments' WHERE id=1";
         $sql22 = "UPDATE recon_off_bsc SET user_name='$fullname' WHERE id=1";

         if(isset($_POST['save'])) {
            mysqli_query($conn, $sql);
           mysqli_query($conn, $sql2);
           mysqli_query($conn, $sql3);
           mysqli_query($conn, $sql4);
           mysqli_query($conn, $sql5);
           mysqli_query($conn, $sql6);
           mysqli_query($conn, $sql7);
           mysqli_query($conn, $sql8);
           mysqli_query($conn, $sql9);
           mysqli_query($conn, $sql10);
           mysqli_query($conn, $sql11);
           mysqli_query($conn, $sql12);
           mysqli_query($conn, $sql13);
           mysqli_query($conn, $sql14);
           mysqli_query($conn, $sql15);
           mysqli_query($conn, $sql16);
           mysqli_query($conn, $sql17);
           mysqli_query($conn, $sql18);
           mysqli_query($conn, $sql19);
           mysqli_query($conn, $sql20);
           mysqli_query($conn, $sql21);
           mysqli_query($conn, $sql22);
         }

           else {
            echo "Error: " . $sql . " " . mysqli_error($conn);
           }

         // $sql = "UPDATE recon_off_bsc SET save_cost = $value1, hourly_recon = $value2, trans_input = $value3, comp_reverse = $value4, comp_retries = $value5, approve_sla = $value6, ensure_accounts = $value7, ensure_wallets = $value8, ensure_system = $value9, achieve_service = $value10, intro_methods = $value11, provide_daily = $value12, offjob_training = $value13, onjob_training = $value14, staff_briefs = $value15, staff_cert = $value16, int_serv = $value17, employ_sat = $value18 , retention = $value19 , embed_CV = $value20 WHERE id=1";

         mysqli_query($conn, $sql);

      }
}
 else {
   echo "Error number 2".mysqli_error($conn);
 }

  $sql_q1 = "SELECT * FROM recon_off_bsc WHERE id=1";
  $sql_view1 = mysqli_query($conn,$sql_q1);
  $row1 = mysqli_fetch_array($sql_view1);



  mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">


    <title>BSC</title>
	</head>
  <body style="font-family:'Poppins', sans-serif;">
    <?php include 'header.php'; ?>
		<div class="container mt-5 text-right">
			<div class="row">
			  <div class="col-12 mt-3 mb-2">
          <h1>
            Your Records have been updated
          </h1>

          <input type="button" name="" value="edit" class="btn btn-warning mr-2" onclick="window.location.href='create_rec_recon_off_0119.php';"><input type="button" name="" value="sumbit &amp; send"class="btn btn-success">
			  </div>
			</div>

		</div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ">
          <form method="POST" action="view_recon_off_0219.php">
          <table class="table table-striped table-bordered">
              <thead class="thead table-success">
                <tr>
                  <th scope="col"></th>
                  <th scope="col">OBJECTIVES</th>
                  <th scope="col">MEASURE</th>
                  <th scope="col">METRIC</th>
                  <th scope="col">ACTUAL</th>
                  <th scope="col">BUDGET</th>
                </tr>
              </thead>
              <thead class="thead-dark">
                <tr>
                  <th scope="col" colspan="6">FINANCIAL (10%)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td><b>Cost Matrix - Reduce Costs</b></td>
                  <td>Save on cost, by reducing Unit usuage of consumables by 20% monthly</td>
                  <td>Monthly savings against budget</td>
                  <td class="text-center"><?php echo "".$row1[1]; ?></td>
                  <td>10%</td>
                </tr>

                <!-- Customer Franchise -->
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" colspan="6">CUSTOMER FRANCHISE (10%)</th>
                  </tr>
                </thead>
                <tr>
                  <th scope="row">2</th>
                  <td><b>Extend Customer Reach</b></td>
                  <td>Perform hourly recon and sign off </td>
                  <td>Daily </td>
                  <td class="text-center"><?php echo "".$row1[2]; ?></td>
                  <td>3.3%</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td colspan="1">Ensure all transactions are inputed into core bank/XERO </td>
                  <td >Daily</td>
                  <td class="text-center"><?php echo "".$row1[3]; ?></td>
                  <td>3.3%</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td></td>
                  <td colspan="1">Complete reversals and log into system  </td>
                  <td >Daily</td>
                  <td class="text-center"><?php echo "".$row1[4]; ?></td>
                  <td>3.3%</td>
                </tr>

                <!-- PROCESS -->
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" colspan="6">PROCESS (60%)</th>
                  </tr>
                </thead>
                <tr>
                  <th scope="row">5</th>
                  <td></td>
                  <td>Complete retries within one off request </td>
                  <td></td>
                  <td class="text-center"><?php echo "".$row1[5]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td></td>
                  <td>Ensure that approved SLAs are implemented and tracked with monthly performance report </td>
                  <td>100% implementation & reporting</td>
                  <td class="text-center"><?php echo "".$row1[6]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td></td>
                  <td colspan="1">Ensure all accounts are reconciled daily  </td>
                  <td >100% Perfomance</td>
                  <td class="text-center"><?php echo "".$row1[7]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td></td>
                  <td colspan="1">Ensure all wallets/trxn are reconcilled  daily for all MTOs </td>
                  <td >95% achievement evidenced with mails</td>
                  <td class="text-center"><?php echo "".$row1[8]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td></td>
                  <td colspan="1">Ensure all system wallets to ova are reconciled and signed off  </td>
                  <td >100% achievement, evidenced by monthly reports</td>
                  <td class="text-center"><?php echo "".$row1[9]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td></td>
                  <td colspan="1">Achieve an acceptable Service Quality ranking  </td>
                  <td >Minimum of 90%</td>
                  <td class="text-center"><?php echo "".$row1[10]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">11</th>
                  <td><b>Renovate/Innovate</b></td>
                  <td colspan="1">Introduction of Improved Methods(Ideas/processes/procedures)</td>
                  <td >1 per month</td>
                  <td class="text-center"><?php echo "".$row1[11]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">12</th>
                  <td></td>
                  <td colspan="1">Provide daily reports on operations to MNGMNT  </td>
                  <td >Daily</td>
                  <td class="text-center"><?php echo "".$row1[12]; ?></td>
                  <td>7.5%</td>
                </tr>


                <!-- PEOPLE -->
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" colspan="6">PEOPLE (20%)</th>
                  </tr>
                </thead>
                <tr>
                  <th scope="row">14</th>
                  <td><b>Train and Develop Employees</b></td>
                  <td>Off-the-Job Training (Classroom based, eLearning, etc…)</td>
                  <td>Number of people who have completed all 3 parts of transfer of learning (ToL) plus the assessment (technical training)</td>
                  <td class="text-center"><?php echo "".$row1[13]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">15</th>
                  <td></td>
                  <td>On-the-Job training (manager/supervisor facilitated learning)</td>
                  <td>Full Completion of ToL Log(Part1-3)</td>
                  <td class="text-center"><?php echo "".$row1[14]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">16</th>
                  <td></td>
                  <td colspan="1">Staff breifings on developments withing the bank and the strategy </td>
                  <td >Copies of Cirtificates</td>
                  <td class="text-center"><?php echo "".$row1[15]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">17</th>
                  <td><b>Increase Employee Engagement</b></td>
                  <td colspan="1">Internal service quality </td>
                  <td >Team briefings conducted in the review period (at least once a month)</td>
                  <td class="text-center"><?php echo "".$row1[16]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">18</th>
                  <td></td>
                  <td colspan="1">Employee satisfaction index.  </td>
                  <td >Possible to narrow</td>
                  <td class="text-center"><?php echo "".$row1[17]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">19</th>
                  <td></td>
                  <td colspan="1">Achieve an acceptable Service Quality ranking  </td>
                  <td >Minimum of 90%</td>
                  <td class="text-center"><?php echo "".$row1[18]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">20</th>
                  <td></td>
                  <td colspan="1">Retention</td>
                  <td >Rate of attrition should be less than 5% in the review period.</td>
                  <td class="text-center"><?php echo "".$row1[19]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">21</th>
                  <td></td>
                  <td colspan="1">Embed Corporate Values(CV)[Demonstrate practical application of CV (re internal customer)] </td>
                  <td >Evidence Of CV Presentations at Departmental meetings</td>
                  <td class="text-center"><?php echo "".$row1[20]; ?></td>
                  <td>2.5%</td>
                </tr>
              </tbody>
          </table>

        </div>
          <div class="col-lg-12 text-right mb-2">
            <input type="button" name="" value="edit" class="btn btn-warning mr-2" onclick="window.location.href='recon_off_0119.php';"><input type="button" name="" value="sumbit &amp; send"class="btn btn-success mr-2">
          </div>
          </form>

        </div>

      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
