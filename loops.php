<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\CSS\loops.css">
    <title>Page 7 | Loops Statements</title>
</head>

<body>
    <header>
        <h1>USING LOOPS</h1>
        <nav>
            <ul>
                <li><a href="#multiplication">Multiplication</a></li>
                <li><a href="#fibonacci">Fibonacci</a></li>
                <li><a href="#factorial">Factorial & Summation</a></li>
                <li><a href="..\PHP\main.php">Home</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <section class="section multiplication" id="multiplication">
            <div class="section-header">MULTIPLICATION TABLE</div>
            <div class="table-container">
                <?php
                $n = 7;
                $m = 9;

                echo "<table>";
                for ($i = 1; $i <= $n; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= $m; $j++) {
                        echo "<td>" . ($i * $j) . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                ?>
            </div>
        </section>

        <section id="fibonacci" class="section fibonacci">
            <div class="section-header">FIBONACCI SERIES</div>
            <div class="fibonacci-container">
                <?php
                function fibonacci($count)
                {
                    $first = 0;
                    $second = 1;
                    $fib = [];
                    $i = 0;

                    while ($i < $count) {
                        $fib[] = $first;
                        $next = $first + $second;
                        $first = $second;
                        $second = $next;
                        $i++;
                    }

                    return $fib;
                }

                echo "<div class='fibonacci-box'><h3>Series of $n</h3>";
                echo "<p>" . implode(", ", fibonacci($n)) . "</p></div>";

                echo "<div class='fibonacci-box'><h3>Series of $m</h3>";
                echo "<p>" . implode(", ", fibonacci($m)) . "</p></div>";
                ?>
            </div>
        </section>

        <section id="factorial" class="section factorial">
            <div class="section-header">FACTORIAL & SUMMATION</div>
            <div class="factorial-summation">
                <?php
                $factorial = 1;
                $i = 1;

                do {
                    $factorial *= $i;
                    $i++;
                } while ($i <= $n);

                echo "<div class='result-box'><h3>Factorial of $n</h3>";
                echo "<p>$factorial</p></div>";

                $summation = 0;
                $j = 1;

                do {
                    $summation += $j;
                    $j++;
                } while ($j <= $m);

                echo "<div class='result-box'><h3>Summation of $m</h3>";
                echo "<p>$summation</p></div>";
                ?>
            </div>
        </section>
    </div>
    <footer>
        <p>
            Developed by:
            <a href="https://www.facebook.com/jseph.andrade">Joseph Andrade</a>
        </p>
        <p>Date created: October 22, 2024</p>
    </footer>
</body>

</html>