<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "rec_off";
$conn=mysqli_connect($servername,$username,$password,$dbname);

// $categories = select * from $categories;
//
// foreach ($categories as $key => $value) {
//   echo $value;
//   // code...
//   if ($key > 0) {
//
//   }
//   foreach ($objectives as $key => $value) {
//     // code...
//   }
// }

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
           $comments = trim($_POST['comments']);
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
           $sql21 = "UPDATE recon_off_bsc SET comments= $comments WHERE id=1";
           $sql22 = "UPDATE recon_off_bsc SET user_name=$fullname WHERE id=1";

           $sql33="INSERT INTO recon_off_bsc (comments) VALUES (''.$comments.'')";

           if(isset($_POST['save']))
           {
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
             mysqli_real_escape_string($conn, $fullname);
           }

             else {
          		echo "Error: " . $sql . " " . mysqli_error($conn);
          	 }

        	 // $sql = "UPDATE recon_off_bsc SET save_cost = $value1, hourly_recon = $value2, trans_input = $value3, comp_reverse = $value4, comp_retries = $value5, approve_sla = $value6, ensure_accounts = $value7, ensure_wallets = $value8, ensure_system = $value9, achieve_service = $value10, intro_methods = $value11, provide_daily = $value12, offjob_training = $value13, onjob_training = $value14, staff_briefs = $value15, staff_cert = $value16, int_serv = $value17, employ_sat = $value18 , retention = $value19 , embed_CV = $value20 WHERE id=1";


        }
} else {echo "Error number 2".mysqli_error($conn);}
?>
