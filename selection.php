<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Selection Statements</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="..\CSS\selection.css">
</head>

<body>
    <div class="header">
        <div class="title">
            <h1>Selection Statements</h1>
        </div>
        <div class="oval"></div>
        <div class="home-icon">
            <a href="..\PHP\main.php"><i class="fas fa-home"></i></a>
        </div>
    </div>
    <div class="content">
        <div class="content-box">
            <div class="first-content">
                <h3>Strings in Ascending Order</h3>
            </div>
            <div class="second-content">
                <h3>
                    <?php
                    $strings = ["Divine", "Rhea", "Helen", "Joseph", "Arianne"];

                    function sortStringsAsc(&$arr)
                    {
                        for ($i = 0; $i < count($arr) - 1; $i++) {
                            for ($j = 0; $j < count($arr) - $i - 1; $j++) {
                                if ($arr[$j] > $arr[$j + 1]) {
                                    $temp = $arr[$j];
                                    $arr[$j] = $arr[$j + 1];
                                    $arr[$j + 1] = $temp;
                                }
                            }
                        }
                    }

                    sortStringsAsc($strings);
                    foreach ($strings as $string) {
                        echo $string . "<br>";
                    }
                    ?>
                </h3>
            </div>
        </div>

        <div class="content-box">
            <div class="first-content">
                <h3>Strings in Descending Order</h3>
            </div>
            <div class="second-content">
                <h3>
                    <?php
                    function sortStringsDesc(&$arr)
                    {
                        for ($i = 0; $i < count($arr) - 1; $i++) {
                            for ($j = 0; $j < count($arr) - $i - 1; $j++) {
                                if ($arr[$j] < $arr[$j + 1]) {
                                    $temp = $arr[$j];
                                    $arr[$j] = $arr[$j + 1];
                                    $arr[$j + 1] = $temp;
                                }
                            }
                        }
                    }

                    sortStringsDesc($strings);
                    foreach ($strings as $string) {
                        echo $string . "<br>";
                    }
                    ?>
                </h3>
            </div>
        </div>

        <div class="content-box">
            <div class="first-content">
                <h3>
                    <?php
                    $numbers = [24, 30, 17, 11, 6];

                    function sortNumbersAsc(&$arr)
                    {
                        for ($i = 0; $i < count($arr) - 1; $i++) {
                            for ($j = 0; $j < count($arr) - $i - 1; $j++) {
                                if ($arr[$j] > $arr[$j + 1]) {
                                    $temp = $arr[$j];
                                    $arr[$j] = $arr[$j + 1];
                                    $arr[$j + 1] = $temp;
                                }
                            }
                        }
                    }

                    if ($numbers[0] % $numbers[4] === 0) {
                        echo "Sum, Product, Average";
                    } else {
                        echo "Numbers in Ascending Order";
                    }
                    ?>
                </h3>
            </div>
            <div class="second-content">
                <h3>
                    <?php
                    if ($numbers[0] % $numbers[4] === 0) {
                        $sum = 0;
                        $product = 1;
                        foreach ($numbers as $num) {
                            $sum += $num;
                            $product *= $num;
                        }
                        $average = $sum / count($numbers);

                        echo "Sum: $sum<br>Product: $product<br>Average: $average";
                    } else {
                        sortNumbersAsc($numbers);
                        foreach ($numbers as $number) {
                            echo $number . "<br>";
                        }
                    }
                    ?>
                </h3>
            </div>
        </div>
    </div>
    <footer>
        <p>Developed by: <a href="https://www.facebook.com/jseph.andrade">Joseph Andrade</a></p>
        <p>Date created: October 23, 2024</p>
    </footer>
</body>

</html>