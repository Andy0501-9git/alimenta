<?php
@include 'config.php';

if (isset($_POST['add_product'])) {

    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_FILES['product_image']['name'];
    $product_image_tmp_name = $_FILES['product_image']['tmp_name'];

    $product_image_folder = '../uploaded_img/' . $product_image;

    if (empty($product_name) || empty($product_price) || empty($product_image)) {
        $message[] = 'please fill out all fields';
    } else {
        $insert = "INSERT INTO food_item (Name, price, image) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insert);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sss", $product_name, $product_price, $product_image);
            if (mysqli_stmt_execute($stmt)) {
                move_uploaded_file($product_image_tmp_name, $product_image_folder);
                $message[] = 'New product added successfully';
            } else {
                $message[] = 'Could not add the product' . mysqli_error($conn); // Add error message 
            }
            mysqli_stmt_close($stmt);
        } else {
            $message[] = 'Statement preparation failed: ' . mysqli_error($conn); // Add error message for debugging
        }
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM food_item WHERE id = $id");
    header('location:admin_page.php');
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>admin page</title>

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="add_product.css">
    </head>
    <body>

        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<span class="message">' . $message . '</span>';
            }
        }
        ?>

        <div class="container">

            <div class="admin-product-form-container">

                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
                    <h3>add a new product</h3>
                    <input type="text" placeholder="enter product name" name="product_name" class="box">
                    <input type="number" placeholder="enter product price" name="product_price" class="box">
                    <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
                    <input type="submit" class="btn" name="add_product" value="add product">
                </form>

            </div>

            <?php
            $select = mysqli_query($conn, "SELECT * FROM  food_item");
            ?>
            <div class="product-display">
                <table class="product-display-table">
                    <thead>
                        <tr>
                            <th>product image</th>
                            <th>product name</th>
                            <th>product price</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <?php while ($row = mysqli_fetch_assoc($select)) { ?>
                        <tr>
                            <td><img src="uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td>$<?php echo $row['price']; ?>/-</td>
                            <td>
                                <a href="update_product.php?id=<?php echo $row['FoodItem_id']; ?>" class="btn"> <i class="fas fa-edit"></i> edit </a>
                                <a href="admin_page.php?id=<?php echo $row['FoodItem_id']; ?>" class="btn"> <i class="fas fa-trash"></i> delete </a>
                            </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

        </div>


    </body>

</html>