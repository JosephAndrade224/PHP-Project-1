<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Main Page</title>
    <link rel="stylesheet" href="../CSS/main.css" />
</head>

<body>
    <header>
        <img src="../images/CTU_new_logo-removebg-preview.png" alt="CTU LOGO" />
        <h1>PROJECT NO. 1</h1>
        <img src="../images/image-removebg-preview (1).png" alt="CCICT LOGO" />
    </header>

    <div id="main">
        <article>
            <img src="..\images\me.jpg" alt="ako" />
        </article>
        <nav>
            <form action="#" class="sign-up">
                <label for="fullname">Your name: </label>
                <input type="text" id="_fullname" autocomplete="off" required />
                <label for="cysection">Course/Yr/Section: </label>
                <input type="text" id="_cysection" autocomplete="off" required />
                <button type="submit" id="submit">Submit</button>
                <button type="reset" id="reset">Clear</button>
            </form>
            <div class="contents">
                <ol>
                    <li><a href="..\HTML\CV.html">Curriculum Vitae</a></li>
                    <li><a href="..\PHP\useVariables.php">The Use of Variables</a></li>
                    <li><a href="#">Manipulating Numbers</a></li>
                    <li><a href="..\PHP\mathFunctions.php">Using Math Functions</a></li>
                    <li><a href="..\PHP\useConstants.php">Using Constants</a></li>
                    <li><a href="..\PHP\selection.php">Selection Statements</a></li>
                    <li><a href="..\PHP\loops.php">Loop Statements</a></li>
                    <li><a href="#">User-defined Functions</a></li>
                    <li><a href="#">Single-dimensional Array</a></li>
                    <li><a href="#">Two-dimensional Array</a></li>
                </ol>
            </div>
        </nav>
    </div>

    <footer>
        <p>
            Developed by:
            <a href="https://www.facebook.com/jseph.andrade" id="me">Joseph Andrade</a>
        </p>
        <p>Date created: <span>October 14, 2024</span></p>
    </footer>
</body>

</html>