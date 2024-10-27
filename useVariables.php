<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        href="https://fonts.googleapis.com/css2?family=Alex+Brush&display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;700&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="..\CSS\useVariables.css" />
    <title>Page 2 | Use of Variables</title>
</head>

<body>
    <div class="flex-container">
        <nav class="flex-items header">
            <h1>Use of Variables</h1>
            <div class="navs">
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="..\PHP\main.php">Home</a></li>
                </ul>
            </div>
        </nav>

        <div class="flex-items container">
            <div class="image-container">
                <img src="..\images\sari-store.webp" alt="Example Image" />
            </div>
            <div class="blurry-bg"></div>
            <div class="content">
                <h1>Jessica's Sari-Sari Store</h1>
                <p>"everything will fall into places"</p>
                <button class="buy-now">
                    <a href="#products">SHOP NOW -></a>
                </button>
            </div>
        </div>
    </div>

    <div class="flex-items product-items" id="products">
        <div class="php container2">
            <?php
            // Declare five whole numbers
            $item_quantity1 = 10;
            $item_quantity2 = 25;
            $item_quantity3 = 15;
            $item_quantity4 = 5;
            $item_quantity5 = 30;

            // Declare five floating point numbers
            $item_price1 = 9.99;
            $item_price2 = 10.49;
            $item_price3 = 10.75;
            $item_price4 = 13.99;
            $item_price5 = 34.50;

            // Declare five strings
            $item_name1 = "Fudgee Bar";
            $item_name2 = "Cracklings";
            $item_name3 = "Choco Mucho";
            $item_name4 = "Pampers";
            $item_name5 = "Holiday Beefloaf";

            // Declare five characters
            $item_rating1 = 'A';
            $item_rating2 = 'B';
            $item_rating3 = 'C';
            $item_rating4 = 'B';
            $item_rating5 = 'A';

            // Display the variables with corresponding messages
            echo "<h1>Products</h1>";
            ?>

            <div class="large-box">
                <?php
                echo '<img src="..\images\fudgee-barr-chocolate.jpg" alt="Image 1">';
                echo "<p><strong>$item_name1</strong> <br> Quantity: $item_quantity1 <br> Price: &#8369;$item_price1 <br> Rating: $item_rating1</p>";
                ?>
            </div>

            <div class="row">
                <div class="small-box">
                    <?php
                    echo "<p><strong>$item_name2</strong> <br> Quantity: $item_quantity2 <br> Price: &#8369;$item_price2 <br> Rating: $item_rating2</p>";
                    ?>
                </div>
                <div class="small-box">
                    <?php
                    echo "<p><strong>$item_name3</strong> <br> Quantity: $item_quantity3 <br> Price: &#8369;$item_price3 <br> Rating: $item_rating3</p>";
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="small-box">
                    <?php
                    echo "<p><strong>$item_name4</strong> <br> Quantity: $item_quantity4 <br> Price: &#8369;$item_price4 <br> Rating: $item_rating4</p>";
                    ?>
                </div>
                <div class="small-box">
                    <?php
                    echo "<p><strong>$item_name5</strong> <br> Quantity: $item_quantity5 <br> Price: &#8369;$item_price5 <br> Rating: $item_rating5</p>";
                    ?>
                </div>
            </div>

        </div>
    </div>
    <section class="about-us" id="about">
        <div class="content2">
            <h1>About Us</h1>
            <br>
            <p>Welcome to <span>Jessica's Sari-Sari Store!</span> <br><br>
                Our sari-sari store is your friendly neighborhood shop located in the heart of Marigondon, Lapu-Lapu City.
                We are dedicated to providing essential household products, snacks, and other daily necessities to our community
                with convenience and care. Our mission is to be the go-to place for every small need, where every customer feels like family.
            </p>
        </div>
    </section>
    <footer>
        <p>
            Developed by:
            <a href="https://www.facebook.com/jseph.andrade">Joseph Andrade</a>
        </p>
        <p>Date created: October 22, 2024</p>
    </footer>
</body>

</html>