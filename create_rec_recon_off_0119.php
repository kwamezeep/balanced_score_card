<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] !== true){
    header("location: login1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&display=swap" rel="stylesheet">

    <title>BSC</title>
  </head>
  <body style="font-family:'Poppins', sans-serif;">
    <nav class="navbar navbar-expand-md navbar-dark bg-info fixed-top ">
      <a class="navbar-brand" href="#">Balanced Score Card</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <!-- <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li> -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">Finance</a>
              <a class="dropdown-item" href="#">Sales</a>
              <a class="dropdown-item" href="#">Audit</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" action="logout.php">
          <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
          <input type="submit" class="btn btn-danger my-2 my-sm-0" value="Logout">
        </form>
      </div>
    </nav>

    <div class="container mt-5">
      <div class="row mt-6">


        <div class="col-12">
          <h1 class="mt-5 text-center">RECONCILIATION OFFICER</h1>
        </div>
      </div>
    </div>
    <blockquote class="blockquote text-center">
      <p class="mb-0">Jan 2019</p>
      <footer class="blockquote-footer">DEPARTMENT <cite title="Source Title">Reconciliation</cite></footer>
    </blockquote>



    <div class="container">
      <div class="row">
        <div class="col-12">
          <span><p  class="text-right">Supervisor: CEO</p></span>
        </div>
      </div>
    </div><!-- /.container -->


    <div class="container">
      <div class="row">
        <div class="col-lg-12 ">
          <form method="POST" action="view_recon_off_0119.php">
            <span><input type=text name="fullname" placeholder="Full name" class="form-control col-lg-4 mb-2"></span>
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
      <td><input type="text" class="form-control" name="value1" aria-describedby="basic-addon1"></td>
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
      <td><input type="text" class="form-control" placeholder="" name="value2" aria-describedby="basic-addon1"></td>
      <td>3.3%</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td></td>
      <td colspan="1">Ensure all transactions are inputed into core bank/XERO </td>
      <td >Daily</td>
      <td><input type="text" class="form-control" placeholder="" name="value3" aria-describedby="basic-addon1"></td>
      <td>3.3%</td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td></td>
      <td colspan="1">Complete reversals and log into system</td>
      <td >Daily</td>
      <td><input type="text" class="form-control" placeholder="" name="value4" aria-describedby="basic-addon1"></td>
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
      <td><input type="text" class="form-control" placeholder="" name="value5" aria-describedby="basic-addon1"></td>
      <td>7.5%</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td></td>
      <td>Ensure that approved SLAs are implemented and tracked with monthly performance report </td>
      <td>100% implementation & reporting</td>
      <td><input type="text" class="form-control" placeholder="" name="value6" aria-describedby="basic-addon1"></td>
      <td>7.5%</td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td></td>
      <td colspan="1">Ensure all accounts are reconciled daily  </td>
      <td >100% Perfomance</td>
      <td><input type="text" class="form-control" placeholder="" name="value7" aria-describedby="basic-addon1"></td>
      <td>7.5%</td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td></td>
      <td colspan="1">Ensure all wallets/trxn are reconcilled  daily for all MTOs </td>
      <td >95% achievement evidenced with mails</td>
      <td><input type="text" class="form-control" placeholder="" name="value8" aria-describedby="basic-addon1"></td>
      <td>7.5%</td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td></td>
      <td colspan="1">Ensure all system wallets to ova are reconciled and signed off  </td>
      <td >100% achievement, evidenced by monthly reports</td>
      <td><input type="text" class="form-control" placeholder="" name="value9" aria-describedby="basic-addon1"></td>
      <td>7.5%</td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td></td>
      <td colspan="1">Achieve an acceptable Service Quality ranking  </td>
      <td >Minimum of 90%</td>
      <td><input type="text" class="form-control" placeholder="" name="value10" aria-describedby="basic-addon1"></td>
      <td>7.5%</td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td><b>Renovate/Innovate</b></td>
      <td colspan="1">Introduction of Improved Methods(Ideas/processes/procedures)</td>
      <td >1 per month</td>
      <td><input type="text" class="form-control" placeholder="" name="value11" aria-describedby="basic-addon1"></td>
      <td>7.5%</td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td></td>
      <td colspan="1">Provide daily reports on operations to MNGMNT  </td>
      <td >Daily</td>
      <td><input type="text" class="form-control" placeholder="" name="value12" aria-describedby="basic-addon1"></td>
      <td>7.5%</td>
    </tr>


    <!-- PEOPLE -->
    <thead class="thead-dark">
      <tr>
        <th scope="col" colspan="6">PEOPLE (20%)</th>
      </tr>
    </thead>
    <tr>
      <th scope="row">13</th>
      <td><b>Train and Develop Employees</b></td>
      <td>Off-the-Job Training (Classroom based, eLearning, etc…)</td>
      <td>Number of people who have completed all 3 parts of transfer of learning (ToL) plus the assessment (technical training)</td>
      <td><input type="text" class="form-control" placeholder="" name="value13" aria-describedby="basic-addon1"></td>
      <td>2.5%</td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td></td>
      <td>On-the-Job training (manager/supervisor facilitated learning)</td>
      <td>Full Completion of ToL Log(Part1-3)</td>
      <td><input type="text" class="form-control" placeholder="" name="value14" aria-describedby="basic-addon1"></td>
      <td>2.5%</td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td></td>
      <td colspan="1">Staff breifings on developments withing the bank and the strategy </td>
      <td >Copies of Cirtificates</td>
      <td><input type="text" class="form-control" placeholder="" name="value15" aria-describedby="basic-addon1"></td>
      <td>2.5%</td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td><b>Increase Employee Engagement</b></td>
      <td colspan="1">Internal service quality </td>
      <td >Team briefings conducted in the review period (at least once a month)</td>
      <td><input type="text" class="form-control" placeholder="" name="value16" aria-describedby="basic-addon1"></td>
      <td>2.5%</td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td></td>
      <td colspan="1">Employee satisfaction index.  </td>
      <td >Possible to narrow</td>
      <td><input type="text" class="form-control" placeholder="" name="value17" aria-describedby="basic-addon1"></td>
      <td>2.5%</td>
    </tr>
    <tr>
      <th scope="row">18</th>
      <td></td>
      <td colspan="1">Achieve an acceptable Service Quality ranking  </td>
      <td >Minimum of 90%</td>
      <td><input type="text" class="form-control" placeholder="" name="value18" aria-describedby="basic-addon1"></td>
      <td>2.5%</td>
    </tr>
    <tr>
      <th scope="row">19</th>
      <td></td>
      <td colspan="1">Retention</td>
      <td >Rate of attrition should be less than 5% in the review period.</td>
      <td><input type="text" class="form-control" placeholder="" name="value19" aria-describedby="basic-addon1"></td>
      <td>2.5%</td>
    </tr>
    <tr>
      <th scope="row">20</th>
      <td></td>
      <td colspan="1">Embed Corporate Values(CV)[Demonstrate pratical application of CV (re internal customer)] </td>
      <td >Evidence Of CV Presentations at Departmental meetings</td>
      <td><input type="text" class="form-control" placeholder="" name="value20" aria-describedby="basic-addon1"></td>
      <td>2.5%</td>
    </tr>
  </tbody>
</table>

        </div>
        <div class="col-lg-6 text-left align-items-baseline">
          <div class="">
            <!-- <span>Approval Status: <span class="text-success">Approved</span></span> -->
          </div><br><br>
        </div>
          <div class="col-lg-6 text-right">
            <div class="" style="float:right">
              <span> <textarea class="form-control mb-2" type="text" rows="4" cols="50" name="comments"  placeholder="comments"></textarea></span>
            </div>
          </div>
          <div class="col-lg text-right">
              <button type="submit" name="save" class="btn btn-primary">Save</button><br><br>
          </div>
          </form>

        </div>

      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
