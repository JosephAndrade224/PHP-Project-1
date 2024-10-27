<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 4 | Use of Math Functions</title>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="..\CSS\mathFunctions.css">
</head>

<body>
    <header>
        <div class="svg-container">
            <svg class="svg-wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#1d1918" fill-opacity="1" d="M0,288L40,288C80,288,160,288,240,277.3C320,267,400,245,480,213.3C560,181,640,139,720,117.3C800,96,880,96,960,122.7C1040,149,1120,203,1200,234.7C1280,267,1360,277,1400,282.7L1440,288L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
                <foreignObject x="0" y="0" width="100%" height="100">
                    <div xmlns="http://www.w3.org/1999/xhtml">
                        <div class="header-content">
                            <h1>Math Functions</h1>
                        </div>
                        <div class="nav-links">
                            <a href="..\PHP\main.php"><i class="fas fa-home"></i></a>
                        </div>
                    </div>
                </foreignObject>
            </svg>
        </div>
    </header>

    <section class="content-container">
        <?php
        $float1 = -3.5;
        $float2 = 8.3;
        $float3 = 15.6;
        $float4 = 23.9;
        $float5 = 42.1;

        $whole1 = 3;
        $whole2 = 7;
        $whole3 = 12;
        $whole4 = 25;
        $whole5 = 50;

        $mathFunctions = [
            "Absolute value of -3.5 <br> abs(): Returns the absolute (positive) value of a number." => abs($float1),
            "Ceiling value of 8.3 <br> ceil(): Rounds a number up to the nearest integer." => ceil($float2),
            "Floor value of 15.6 <br> floor(): Rounds a number down to the nearest integer." => floor($float3),
            "Rounded value of 23.9 <br> round(): Rounds a floating-point number to the nearest integer." => round($float4),
            "Square root of 42.1 <br> sqrt(): Returns the square root of a number." => sqrt($float5),
            "7 raised to power of 3 <br> pow(): Raises a number to the power of another number." => pow($whole2, $whole1),
            "Maximum of Whole numbers: 3 - 7 - 12 - 25 - 50 <br> max(): Finds the maximum value among given numbers." => max($whole1, $whole2, $whole3, $whole4, $whole5),
            "Minimum of Whole numbers: 3 - 7 - 12 - 25 - 50 <br> min(): Finds the minimum value among given numbers." => min($whole1, $whole2, $whole3, $whole4, $whole5),
            "Random number between 3 - 50 <br> rand(): Generates a random integer." => rand($whole1, $whole5),
            "Natural log of 15.6 <br> log(): Returns the natural logarithm (base e) of a number." => log($float3),
            "Base-10 log of 50 <br> log10(): Returns the base-10 logarithm of a number." => log10($whole5),
            "Sine of 7 (in radians) <br> sin(): Calculates the sine of a number (in radians)." => sin($whole2),
            "Cosine of 12 (in radians) <br> cos(): Calculates the cosine of a number (in radians)." => cos($whole3),
            "Exponential of 8.3 <br> exp(): Calculates the exponent of e." => exp($float2),
            "Hypotenuse of 25 and 50 <br> hypot(): Calculates the length of the hypotenuse of a right-angled triangle." => hypot($whole4, $whole5)
        ];

        foreach ($mathFunctions as $title => $result) {
            echo "<div class='card'>";
            echo "<h2>$title</h2>";
            echo "<br>";
            echo "<p>Result: $result</p>";
            echo "</div>";
        }
        ?>
    </section>
    <footer>
        <p>
            Developed by:
            <a href="https://www.facebook.com/jseph.andrade">Joseph Andrade</a>
        </p>
        <p>Date created: October 23, 2024</p>
    </footer>
</body>

</html>