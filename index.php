<?php 
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


<?php 
  $qry="SELECT * FROM `product` WHERE 1 ORDER BY id DESC;";


  $result = $con->query($qry);

  while($row = $result->fetch_assoc())
  {
    echo '<div class="card" style="width: 18rem;">';
            $item_fetch_id=$row['id'];
  echo '<img src="items/'.$item_fetch_id.'.jpg" class="card-img-top" alt="...">';
  echo '<div class="card-body">';
            // $name=$row['name'];
    echo '<h5 class="card-title">'.$row['name'].'</h5>';
            // $price=$row['price'];
    echo '<h5 class="" style="float:right;margin-top:-12%;color:gray;">'.$row['price'].'</h5>';
    echo '<p class="card-text" style="clear:both;">'.$row['description'].'</p>';
    echo '<a href="buy.php" class="btn btn-primary">BUY</a>';
  echo '</div>';
echo '</div>';
  }
 ?>


 </body>
 </html>