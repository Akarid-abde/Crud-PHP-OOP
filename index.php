<!DOCTYPE html>
<html>
<head>
	<title>Crud Using PHP-OOP & Bootstrap & Ajax </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.css"/>

 

</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">
  	<i class="fas fa-wolf-pack-battalion"></i>&nbsp;Crud
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Bog</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h4 class="text-center mt-2 front-weight-normal text-danger"> Crud usisng PHP-OOP Bootstrap-DataTables & SweetAlert2 and Ajax and MySql </h4>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-6">
		<h4 class="mt-2 text-primary" >All Users In DataBase!:</h4>
	</div>
	<div class="col-lg-6">
			<button type="button" class="btn btn-primary ml-1 float-right">
			<i class="fas fa-user-plus fa-lg"></i>&nbsp;Add new User</button>
			<a href="#" class="btn btn-success m-1 float-right">Export to Excel</a>
	</div>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!--Get your code at fontawesome.com-->
<script src="https://kit.fontawesome.com/yourcode.js"></script>
<!--Get DATATABLES-->
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.22/datatables.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>