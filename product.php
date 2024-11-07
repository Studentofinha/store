<?php require "php/functions.php" ?>

<?php 
   if(isset($_GET['title'])){
      $title = urldecode($_GET['title']);
   }else{
      header("Location: index.php");
      exit();
   }
?>
<?php $product = getProductBytitle($title) ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='description' content="<?php echo $product[0]['meta_description'] ?>">
    <meta name='keywords' content="<?php echo $product[0]['meta_keywords'] ?>">
    <link rel="stylesheet" href="css/styles.css">
    <title><?php echo $title ?></title>
    <style>
      
    </style>
</head>

<body>


    <?php include "includes/nav.php" ?>

    <?php include "includes/header.php" ?>

    <main>
        <div class="left">
            <div class="section-title">
                Product Categories
            </div>
            <?php $categories = getCategories() ?>
            <?php
            foreach ($categories as $category) {
                ?>
                <a href="category.php?category=<?php echo urlencode($category['category']); ?>">
                    <?php echo ucfirst($category['category']) ?>

                </a>
                <?php
            }

            ?>
        </div>
        <div class="right">
            <div class="section-title"> Product details</div>
            <div class="product">

                <div class="product-left">
                    <img src="<?php echo "products/{$product[0]['image']}" ?>" alt="">
                </div>
                <div class="product-right">
                    <p class="title">
                           <?php echo $product[0]['title'] ?>
                    </p>
                    <p class="description">
                        <?php echo $product[0]['description'] ?>
                    </p>
                    <p class="price">
                        <?php echo $product[0]['price'] ?>
                    </p>
                </div>
            </div>
        </div>
    </main>

    <?php include "includes/footer.php" ?>



    <script src="javascript/script.js"></script>

</body>

</html>