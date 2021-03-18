<?php
  include 'logic.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Corona Tracker App</title>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/5aa8e0bc47.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Thambi+2:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="containner-fluid bg-light p-5 text-center my-3">
  	<h1>Covid-19 Tracker</h1>
  	<h5>The Number of COVID-19 cases around the world</h5>
  </div>

  <div class="containner my-5">
  	<div class="row text-center">
  		<div class="col-4 text-warning">
  			<h5>Confirmed</h5>
  			<?php echo $total_confirmed; ?>
  		</div>
  		<div class="col-4 text-success">
  			<h5>Recovered</h5>
  			<?php echo $total_recovered; ?>
  		</div>
  		<div class="col-4 text-danger">
  			<h5>Deceased</h5>
  			<?php echo $total_deaths; ?>
  		</div>
  	</div>
  </div>

   <div class="container bg-light p-3 my-5 text-center">
        <h5 class="text-info">"Prevention is the Cure."</h5>
        <p class="text-muted">Stay Home.</p>
    </div>


  <div class="containner-fluid">
  	<div class="table-responsive">
  		<table class="table">
  		<thead class="thead-dark">
  			<tr>
  				<td scope="col">Countries</td>
  				<td scope="col">Confirm</td>
  				<td scope="col">Recovered</td>
  				<td scope="col">Deceased</td>
  			</tr>
  		</thead>
  		<tbody>
  			<?php
  			   foreach ($data as $key => $value) {
  			   	$increase = $value[$days_count]['confirmed'] - $value[$days_count_prev]['confirmed'];
  			   	# code...
  			   	 
  			   ?>
  			   		<tr>
  			   			<th><?php echo $key?></th>
  			   			<td>
  			   				<?php echo $value[$days_count]['confirmed'];?>
  			   				<?php if($increase != 0){ ?>
                                    <small class="text-danger pl-3"><i class="fas fa-arrow-up"></i><?php echo $increase;?></small>  
                                <?php } ?>
  			   			</td>
  			   			<td>
  			   				<?php echo $value[$days_count]['recovered'];?>
  			   			</td>
  			   			<td>
  			   				<?php echo $value[$days_count]['deaths'];?>
  			   			</td>
  			   		</tr>

  			   <?php
  			   } 
  			    ?>
  		</tbody>
  	</table>
  	</div>
</body>
</html>