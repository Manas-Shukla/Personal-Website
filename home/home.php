<!DOCTYPE html>
<html>

<head>
    <!-- title and icon -->
    <title>Home</title>
    <link rel="icon" href="../global/images/home-icon.png">

    <!-- meta data  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="../global/headerStyle.css">
    <link rel="stylesheet" href="../global/footerStyle.css">

    <!-- javascript code -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>

    
    <!-- Fixed Navigation Bar -->
    <nav class="menu">

        <input id="menu__toggle" type="checkbox" class='menu__toggle' />
        <label for="menu__toggle" class="menu__toggle-label">
            <svg preserveAspectRatio='xMinYMin' viewBox='0 0 24 24'>
                <path d='M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z' />
            </svg>
            <svg preserveAspectRatio='xMinYMin' viewBox='0 0 24 24'>
                <path
                    d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
            </svg>
        </label>

        <ol class='menu__content'>
            <li class="menu-item"><a class="active" href="../home/home.php">Home</a></li>
            <li class="menu-item"><a href="../about/about.html">About</a></li>
            <li class="menu-item"><a href="../projects/projects.html">Projects</a></li>
            <li class="menu-item"><a href="../feedbacks/feedbacks.php">Feedbacks</a></li>
            <li class="menu-item"><a href="../contact/contact.php">Contact</a></li>
        </ol>


    </nav>

    <!-- Fixed Header  with scroll progress bar -->
    <div class="container">
        <div class="row">
            <div class="header">
                <h2>Home</h2>
                <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div>
            </div>
        </div>

    </div>


    <div class="container">

        <!-- Welcome Message -->
        <div class="row">
            <div class="center">
                <p id="text">
                    Hi There
                    I am Manas Shukla.This is my online Website.
                    I'm currently pursuing my BTECH in Computer Science from IIT Bombay.
                </p>

            </div>
        </div>

        <!-- page hit counter  -->
        <div class="row">
            <div class='col-sm-4 offset-sm-8 ' id='counter'>
                <?php   
                    $handle = fopen("../global/pageHits.txt", "r");
                    if (!$handle) {
                            echo "could not open the file";
                    } else {
                            $counter = (int) fread($handle, 20);
                            fclose($handle);
                            // temorary fix
                            echo '' . $counter . 'Visits';
                            $handle = fopen("../global/pageHits.txt", "w");
                            $counter++;
                            fwrite($handle, $counter);
                            fclose($handle);
                    }
                ?>

            </div>
        </div>


    </div>

    <!-- Hints Footer -->
    <div class="item-hints">
        <div class="hint" data-position="4">
            <!-- is-hint -->
            <span class="hint-radius"></span>
            <span class="hint-dot"></span>
            <div class="hint-content do--split-children">
                <p>Click on Burger</p>
            </div>
        </div>
    </div>



</body>

<!-- javascript code -->
<script src="home.js"></script>
<script src="../global/scrollBar.js"></script>


</html>