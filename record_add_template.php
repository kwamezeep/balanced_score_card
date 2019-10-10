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
		<title></title>
	</head>
	<body>
		<div class="container">
			<div class="row">
			  <div class="col-12" style="font-size:24px;">
			    "Reconciliation officer scores recorded !"
			  </div>
			</div>

		</div>
	</body>
</html>
