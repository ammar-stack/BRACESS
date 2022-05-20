<?php 
	include('config.php');
	include('header.php');
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 </head>
 <body>
 	
<form class="row g-3" method="GET">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label" name="firstname">firstname</label>
    <input type="text" class="form-control" name="fname" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">lastname</label>
    <input type="text" name="lname" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="addr">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Medicare no</label>
    <input type="text" class="form-control" id="inputAddress2" name="medicare" placeholder="4085 73846738 123">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">DOB</label>
    <input type="DATE" name="date" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" name="zip" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" name="AddToCart" class="btn btn-primary">AddToCart</button>
  </div>
</form>


<?php 
      if (isset($_GET['AddToCart'])) {
      // $id=$_SESSION['id'];
      
      // $qry= "INSERT INTO `product` (`id`, `name`, `price`, `admin_id_fk`) VALUES (NULL, '".$_POST['product']."', '".$_POST['price']."', '".$id."');";
        $qry = "INSERT INTO `customer` (`id`, `fname`, `lname`, `address`, `medicareno`, `dob`, `zip`) VALUES (NULL, '".$_GET['fname']."', '".$_GET['lname']."', '".$_GET['addr']."', '".$_GET['medicare']."', '".$_GET['date']."', '".$_GET['zip']."');";

      if ($con->query($qry)) {
       echo 'item placed succesfully';
        // echo 'posted';
      }
      else {
        echo 'try again';
      }
  }

  else{
    echo 'random error';
  }
 ?>

 </body>
 </html>