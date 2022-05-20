<?php 
	// session_start();
  include('header.php');
  include('config.php');
	if ($_SESSION['log']==1) {

		$email=$_SESSION['email'];
	}
  else{
    header("location: login.php");
  }
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
 	
<center><h1 style="color:teal;">ADD YOUR PRODUCT</h1><h2 style="color:lightgray;"><?php echo "$email";?></h2>
</center>
<form method="POST" enctype="multipart/form-data">
<div class="input-group mb-3">
  <span class="input-group-text">$</span>
  <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="price">
  <span class="input-group-text">.00</span>
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Product Title" aria-label="Username" name="product">
  <span class="input-group-text">@</span>
  <input type="file" class="form-control" placeholder="select product image" aria-label="Server" name="prodimg">
</div>

<div class="input-group">
  <span class="input-group-text">Detail about product</span>
  <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
</div>
<input type="submit" name="addproduct" value="addproduct">
</form>


<?php 
  if (isset($_POST['addproduct'])) {
      $id=$_SESSION['id'];
      
      $qry= "INSERT INTO `product` (`id`, `name`, `price`, `admin_id_fk`) VALUES (NULL, '".$_POST['product']."', '".$_POST['price']."', '".$id."');";

      if ($con->query($qry)) {
        $itemId = $con->insert_id;
        move_uploaded_file($_FILES['prodimg']['tmp_name'], "items/".$itemId.".jpg");
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