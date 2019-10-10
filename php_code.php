<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "rec_off";
$conn=mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

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
	 $value21 = $_POST['value21'];
	 $sql = "UPDATE yr2019 SET value=$value1 WHERE id=1";
	 $sql2 = "UPDATE yr2019 SET value=$value2 WHERE id=2";
	 $sql3 = "UPDATE yr2019 SET value=$value3 WHERE id=3";
	 $sql4 = "UPDATE yr2019 SET value=$value4 WHERE id=4";
	 $sql5 = "UPDATE yr2019 SET value=$value5 WHERE id=5";
	 $sql6 = "UPDATE yr2019 SET value=$value6 WHERE id=6";
	 $sql7 = "UPDATE yr2019 SET value=$value7 WHERE id=7";
	 $sql8 = "UPDATE yr2019 SET value=$value8 WHERE id=8";
	 $sql9 = "UPDATE yr2019 SET value=$value9 WHERE id=9";
	 $sql10 = "UPDATE yr2019 SET value=$value10 WHERE id=10";
	 $sql11 = "UPDATE yr2019 SET value=$value11 WHERE id=11";
	 $sql12 = "UPDATE yr2019 SET value=$value12 WHERE id=12";
	 $sql13 = "UPDATE yr2019 SET value=$value13 WHERE id=13";
	 $sql14 = "UPDATE yr2019 SET value=$value14 WHERE id=14";
	 $sql15 = "UPDATE yr2019 SET value=$value15 WHERE id=15";
	 $sql16 = "UPDATE yr2019 SET value=$value16 WHERE id=16";
	 $sql17 = "UPDATE yr2019 SET value=$value17 WHERE id=17";
	 $sql18 = "UPDATE yr2019 SET value=$value18 WHERE id=18";
	 $sql19 = "UPDATE yr2019 SET value=$value19 WHERE id=19";
	 $sql20 = "UPDATE yr2019 SET value=$value20 WHERE id=20";
	 $sql21 = "UPDATE yr2019 SET value=$value21 WHERE id=21";


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

	 }

   else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }
	 //mysqli_close($conn);
}

  $sql_q1 = "SELECT value FROM yr2019 WHERE id=1";
  $sql_view1 = mysqli_query($conn,$sql_q1);
  $row1 = mysqli_fetch_array($sql_view1);

  $sql_q2 = "SELECT value FROM yr2019 WHERE id=2";
  $sql_view2 = mysqli_query($conn,$sql_q2);
  $row2 = mysqli_fetch_array($sql_view2);

  $sql_q3 = "SELECT value FROM yr2019 WHERE id=3";
  $sql_view3 = mysqli_query($conn,$sql_q3);
  $row3 = mysqli_fetch_array($sql_view3);

  $sql_q4 = "SELECT value FROM yr2019 WHERE id=4";
  $sql_view4 = mysqli_query($conn,$sql_q4);
  $row4 = mysqli_fetch_array($sql_view4);

  $sql_q5 = "SELECT value FROM yr2019 WHERE id=5";
  $sql_view5 = mysqli_query($conn,$sql_q5);
  $row5 = mysqli_fetch_array($sql_view5);

  $sql_q6 = "SELECT value FROM yr2019 WHERE id=6";
  $sql_view6 = mysqli_query($conn,$sql_q6);
  $row6 = mysqli_fetch_array($sql_view6);

  $sql_q7 = "SELECT value FROM yr2019 WHERE id=7";
  $sql_view7 = mysqli_query($conn,$sql_q7);
  $row7 = mysqli_fetch_array($sql_view7);

  $sql_q8 = "SELECT value FROM yr2019 WHERE id=8";
  $sql_view8 = mysqli_query($conn,$sql_q8);
  $row8 = mysqli_fetch_array($sql_view8);

  $sql_q9 = "SELECT value FROM yr2019 WHERE id=9";
  $sql_view9 = mysqli_query($conn,$sql_q9);
  $row9 = mysqli_fetch_array($sql_view9);

  $sql_q10 = "SELECT value FROM yr2019 WHERE id=10";
  $sql_view10 = mysqli_query($conn,$sql_q10);
  $row10 = mysqli_fetch_array($sql_view10);

  $sql_q11 = "SELECT value FROM yr2019 WHERE id=11";
  $sql_view11 = mysqli_query($conn,$sql_q11);
  $row11 = mysqli_fetch_array($sql_view11);

  $sql_q12 = "SELECT value FROM yr2019 WHERE id=12";
  $sql_view12 = mysqli_query($conn,$sql_q12);
  $row12 = mysqli_fetch_array($sql_view12);

  $sql_q13 = "SELECT value FROM yr2019 WHERE id=13";
  $sql_view13 = mysqli_query($conn,$sql_q13);
  $row13 = mysqli_fetch_array($sql_view13);

  $sql_q14 = "SELECT value FROM yr2019 WHERE id=14";
  $sql_view14 = mysqli_query($conn,$sql_q14);
  $row14 = mysqli_fetch_array($sql_view14);

  $sql_q15 = "SELECT value FROM yr2019 WHERE id=15";
  $sql_view15 = mysqli_query($conn,$sql_q15);
  $row15 = mysqli_fetch_array($sql_view15);

  $sql_q16 = "SELECT value FROM yr2019 WHERE id=16";
  $sql_view16 = mysqli_query($conn,$sql_q16);
  $row16 = mysqli_fetch_array($sql_view16);

  $sql_q17 = "SELECT value FROM yr2019 WHERE id=17";
  $sql_view17 = mysqli_query($conn,$sql_q17);
  $row17 = mysqli_fetch_array($sql_view17);

  $sql_q18 = "SELECT value FROM yr2019 WHERE id=18";
  $sql_view18 = mysqli_query($conn,$sql_q18);
  $row18 = mysqli_fetch_array($sql_view18);

  $sql_q19 = "SELECT value FROM yr2019 WHERE id=19";
  $sql_view19 = mysqli_query($conn,$sql_q19);
  $row19 = mysqli_fetch_array($sql_view19);

  $sql_q20 = "SELECT value FROM yr2019 WHERE id=20";
  $sql_view20 = mysqli_query($conn,$sql_q20);
  $row20 = mysqli_fetch_array($sql_view20);

  $sql_q21 = "SELECT value FROM yr2019 WHERE id=21";
  $sql_view21 = mysqli_query($conn,$sql_q21);
  $row21 = mysqli_fetch_array($sql_view21);

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

          <input type="button" name="" value="edit" class="btn btn-warning mr-2" onclick="window.location.href='index.php';"><input type="button" name="" value="sumbit &amp; send"class="btn btn-success">
			  </div>
			</div>

		</div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 ">
          <form method="POST" action="php_code.php">
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
                  <td class="text-center"><?php echo "".$row1[0]; ?></td>
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
                  <td class="text-center"><?php echo "".$row2[0]; ?></td>
                  <td>3.3%</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td></td>
                  <td colspan="1">Ensure all transactions are inputed into core bank/XERO </td>
                  <td >Daily</td>
                  <td class="text-center"><?php echo "".$row3[0]; ?></td>
                  <td>3.3%</td>
                </tr>
                <tr>
                  <th scope="row">4</th>
                  <td></td>
                  <td colspan="1">Ensure all transactions are inputed into core bank/XERO </td>
                  <td >Daily</td>
                  <td class="text-center"><?php echo "".$row4[0]; ?></td>
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
                  <td class="text-center"><?php echo "".$row5[0]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">6</th>
                  <td></td>
                  <td>Ensure that approved SLAs are implemented and tracked with monthly performance report </td>
                  <td>100% implementation & reporting</td>
                  <td class="text-center"><?php echo "".$row6[0]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">7</th>
                  <td></td>
                  <td colspan="1">Ensure all accounts are reconciled daily  </td>
                  <td >100% Perfomance</td>
                  <td class="text-center"><?php echo "".$row7[0]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">8</th>
                  <td></td>
                  <td colspan="1">Ensure all wallets/trxn are reconcilled  daily for all MTOs </td>
                  <td >95% achievement evidenced with mails</td>
                  <td class="text-center"><?php echo "".$row8[0]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">9</th>
                  <td></td>
                  <td colspan="1">Ensure all system wallets to ova are reconciled and signed off  </td>
                  <td >100% achievement, evidenced by monthly reports</td>
                  <td class="text-center"><?php echo "".$row9[0]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">10</th>
                  <td></td>
                  <td colspan="1">Achieve an acceptable Service Quality ranking  </td>
                  <td >Minimum of 90%</td>
                  <td class="text-center"><?php echo "".$row10[0]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">11</th>
                  <td><b>Renovate/Innovate</b></td>
                  <td colspan="1">Introduction of Improved Methods(Ideas/processes/procedures)</td>
                  <td >1 per month</td>
                  <td class="text-center"><?php echo "".$row11[0]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">12</th>
                  <td></td>
                  <td colspan="1">Provide daily reports on operations to MNGMNT  </td>
                  <td >Daily</td>
                  <td class="text-center"><?php echo "".$row12[0]; ?></td>
                  <td>7.5%</td>
                </tr>
                <tr>
                  <th scope="row">13</th>
                  <td></td>
                  <td colspan="1">Ensure all wallets/trxn are reconcilled  daily for all MTOs </td>
                  <td >Daily</td>
                  <td class="text-center"><?php echo "".$row13[0]; ?></td>
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
                  <td class="text-center"><?php echo "".$row14[0]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">15</th>
                  <td></td>
                  <td>On-the-Job training (manager/supervisor facilitated learning)</td>
                  <td>Full Completion of ToL Log(Part1-3)</td>
                  <td class="text-center"><?php echo "".$row15[0]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">16</th>
                  <td></td>
                  <td colspan="1">Staff breifings on developments withing the bank and the strategy </td>
                  <td >Copies of Cirtificates</td>
                  <td class="text-center"><?php echo "".$row16[0]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">17</th>
                  <td><b>Increase Employee Engagement</b></td>
                  <td colspan="1">Internal service quality </td>
                  <td >Team briefings conducted in the review period (at least once a month)</td>
                  <td class="text-center"><?php echo "".$row17[0]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">18</th>
                  <td></td>
                  <td colspan="1">Employee satisfaction index.  </td>
                  <td >Possible to narrow</td>
                  <td class="text-center"><?php echo "".$row18[0]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">19</th>
                  <td></td>
                  <td colspan="1">Achieve an acceptable Service Quality ranking  </td>
                  <td >Minimum of 90%</td>
                  <td class="text-center"><?php echo "".$row19[0]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">20</th>
                  <td></td>
                  <td colspan="1">Retention</td>
                  <td >Rate of attrition should be less than 5% in the review period.</td>
                  <td class="text-center"><?php echo "".$row20[0]; ?></td>
                  <td>2.5%</td>
                </tr>
                <tr>
                  <th scope="row">21</th>
                  <td></td>
                  <td colspan="1">Embed Corporate Values(CV)[Demonstrate practical application of CV (re internal customer)] </td>
                  <td >Evidence Of CV Presentations at Departmental meetings</td>
                  <td class="text-center"><?php echo "".$row21[0]; ?></td>
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
