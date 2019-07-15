<!DOCTYPE html>
<html>

<head>
    <!-- title and icon -->
    <title>Contact</title>
    <link rel="icon" href="../global/images/contact-icon.png">

    <!-- meta data  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../global/headerStyle.css">
    <link rel="stylesheet" href="../global/footerStyle.css">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- javascript code -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../global/scrollBar.js"></script>

</head>

<body>

    <?php 
        session_start();
    ?>
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
            <li class="menu-item"><a href="../home/home.php">Home</a></li>
            <li class="menu-item"><a href="../about/about.html">About</a></li>
            <li class="menu-item"><a href="../projects/projects.html">Projects</a></li>
            <li class="menu-item"><a href="../feedbacks/feedbacks.php">Feedbacks</a></li>
            <li class="menu-item"><a class="active" href="../contact/contact.php">Contact</a></li>
        </ol>

    </nav>
   
    <!-- Fixed Header  with scroll progress bar -->
    <div class="container">
        <div class="row">
            <div class="header">
                <h2>Contact</h2>
                <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <!-- contact form wrapper -->
    <div class="background">
        <div class="container">
            <div class="screen w3-animate-zoom">
                <div class="screen-body">
                    <div class="screen-body-item left">
                        <div class="app-title">
                            <span>Don't be a Stranger</span>
                            <span>just say hello</span>
                        </div>
                        <br>
                        <p>
                        <br><br>
                        You can contact me via these links too!
                        <div class="social">
                            <ul class="list-inline list-unstyled">
                                <li class="list-inline-item">
                                <a href="https://www.facebook.com/manas.shukla.5011" target="_blank"><i class="fa fa-facebook-square fa-2x" style="color:darkblue"></i></a>
                                </li>
                                <li class="list-inline-item">
                                <a href="https://plus.google.com/u/0/113505956238839213512" target="_blank"><i class="fa fa-google-plus-square fa-2x" style="color:darkgreen"></i></a>
                                </li>
                                <li class="list-inline-item">
                                <a href="https://www.quora.com/profile/Manas-Shukla-42" target="_blank"><i class="fa fa-quora fa-2x" style="color:darkred"></i></a>
                                </li>
                            </ul>
                        </div>
                        </p>
                        
                        
                    </div>
                    <div class="screen-body-item">
                        <form action="./contact_controller.php" method="POST">
                            <div class="app-form">
                                <div class="app-form-group">
                                    <input class="app-form-control" placeholder="Name" name="name" required>
                                </div>
                                <div class="app-form-group">
                                    <input class="app-form-control" type="email" placeholder="Email" name="email" required>
                                </div>
                                <div class="app-form-group message">
                                    <textarea class="app-form-control" rows="3" name="message" placeholder="Your message"></textarea>
                                </div>
                                <div class="app-form-group buttons">
                                    <button class="app-form-button" type="reset">Reset</button>
                                    <button class="app-form-button" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="credits" id="msg">
                <script>var x = 
                        <?php 
                            if(isset($_SESSION['msg'])){
                                echo $_SESSION['msg'];
                                session_unset();
                            }else{
                                echo "'Send Me Your Message'";
                            }
                        ?>;
                        
                </script>
                <script src="./contact.js"></script>
            </div>
        </div>
    </div>

    <br><br>

    <!-- Hints Footer -->
    <div class="item-hints">
        <div class="hint" data-position="4">
            <!-- is-hint -->
            <span class="hint-radius"></span>
            <span class="hint-dot"></span>
            <div class="hint-content do--split-children">
                <p>
                    See your message status at<br> the bottom of form.
                </p>
            </div>
        </div>
    </div>
    



</body>


</html>