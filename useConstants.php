<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAGE 5 | Using Constants</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="..\CSS\useConstants.css">
</head>

<body>
    <header>
        <h1>© Using Constants</h1>
        <a href="..\PHP\main.php"><i class="fas fa-home home-icon"></i></a>
    </header>

    <div class="content">
        <div class="card-container">
            <?php
            // Defining constants
            define("PI", 3.14159);
            define("GRAVITY", 9.8);
            define("SPEED_OF_LIGHT", 299792458);
            define("AVOGADROS_NUMBER", 6.02214076e23);
            define("PLANCK_CONSTANT", 6.62607015e-34);
            define("BOLTZMANN_CONSTANT", 1.380649e-23);
            define("EULER_NUMBER", 2.71828);
            define("GOLDEN_RATIO", 1.61803);
            define("ELECTRON_MASS", 9.10938356e-31);
            define("PROTON_MASS", 1.6726219e-27);

            // Creating an array for easier iteration
            $constants = [
                ["Used in calculating the area of a circle.", "π (Pi)", PI],
                ["Used in calculating the force of gravity.", "g (Gravitational Constant)", GRAVITY],
                ["It's used in the calculation of distances in astronomy (like determining the distance between stars).", "c (Speed of Light)", SPEED_OF_LIGHT],
                ["Used in chemistry to denote the number of atoms in a mole.", "NA (Avogadro's Number)", AVOGADROS_NUMBER],
                ["It's used in defining fundamental units of measurement in physics.", "h (Planck's Constant)", PLANCK_CONSTANT],
                ["Used in statistical mechanics and thermodynamics.", "k (Boltzmann Constant)", BOLTZMANN_CONSTANT],
                ["Used in exponential growth calculations.", "e (Euler's Number)", EULER_NUMBER],
                ["It's often used to design aesthetically pleasing structures and artworks.", "φ (Golden Ratio)", GOLDEN_RATIO],
                ["Used in calculating the energy levels of electrons in atoms, influencing how atoms absorb and emit light.", "me (Electron Mass)", ELECTRON_MASS],
                ["Used in high-energy experiments to understand fundamental forces and particles' behavior.", "mp (Proton Mass)", PROTON_MASS]
            ];

            // Loop through the constants array to display each card
            foreach ($constants as $constant) {
                echo '<label class="card">
                <input type="checkbox" class="card-checkbox">
                <div class="card-inner">
                  <div class="card-front">
                    <p>' . $constant[0] . '</p>
                  </div>
                  <div class="card-back">
                    <p>' . $constant[1] . ': ' . $constant[2] . '</p>
                  </div>
                </div>
              </label>';
            }
            ?>
        </div>
    </div>
    <div class="note">
        <h5 class="with-emoji">Flip the card!</h5>
    </div>
    <footer>
        <p>Developed by: <a href="https://www.facebook.com/jseph.andrade">Joseph Andrade</a></p>
        <p>Date created: October 23, 2024</p>
    </footer>
</body>

</html>