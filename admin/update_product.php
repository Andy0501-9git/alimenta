 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="add_product.css">
</head>
<body>


<div class="container">


<div class="admin-product-form-container centered">

  
   
   <form action="" method="post" enctype="multipart/form-data">
      <h3 class="title">update food item</h3>
      <input type="text" class="box" name="product_name" value="" placeholder="enter the product name">
      <input type="number" min="0" class="box" name="product_price" value="" placeholder="enter the product price">
      <input type="file" class="box" name="product_image"  accept="image/png, image/jpeg, image/jpg">
      <input type="submit" value="update product" name="update_product" class="btn">
      <a href="add_products.php" class="btn">go back!</a>
   </form>
   


</div>

</div>

</body>
</html>