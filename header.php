
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
        <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Department</a>
        <div class="dropdown-menu" aria-labelledby="dropdown02">
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
