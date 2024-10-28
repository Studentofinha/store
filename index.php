<?php require "php/functions.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name='description' content="we hava a collection of servers , laptops and personal computers">
    <meta name='keywords' content="phones , books, servers, pc, personal computers">
    <link rel="stylesheet" href="css/styles.css">
    <title>Our store</title>
    <style>
        footer {
            position: fixed;
            bottom: 0;
        }
    </style>
</head>

<body id="index ">


    <?php include "includes/nav.php" ?>

    <?php include "includes/header.php" ?>

    <main>
        <div class="left">
            <div class="section-title">
                Product categories
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
            <div class="section-title">Home page</div>
            <?php
            $products = getHomePageProducts(4)

                ?>


            <div class="product">

                <?php
                foreach ($products as $product) {
                    ?>

                    <div class="product-left">
                        <img src="<?php echo "products/{$product['image']}" ?>" alt="">
                    </div>
                    <div class="product-right">
                        <p class="title">
                            <a href="product.php?title=<?php echo urlencode($product['title']) ?>">
                                <?php echo $product['title'] ?>
                            </a>
                        </p>
                        <p class="description">
                            <?php echo $products['description'] ?>
                        </p>
                        <p class="price">
                            <?php echo $product['price'] ?>$
                        </p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </main>

    <?php include "includes/footer.php" ?>



    <script src="javascript/script.js"></script>

</body>

</html>