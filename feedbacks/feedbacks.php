<!DOCTYPE html>
<html>

<head>
    <!-- title and icon -->
    <title>Feedbacks</title>
    <link rel="icon" href="../global/images/feeback-icon.png">

    <!-- meta data  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css stylesheets -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="feedbacks.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="../global/headerStyle.css">
    <link rel="stylesheet" href="../global/footerStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- javascript code -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../global/scrollBar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>
    

    <!-- test -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/css/star-rating.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-star-rating/4.0.2/js/star-rating.min.js"></script>

</head>

<body>

    <!-- php script to read the json array file -->
    <?php
        $dataJson = file_get_contents("../global/feedbacks.json");
        // Convert to array 
        $array = json_decode($dataJson, true);
        $feedback_json = json_encode($array);
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
            <li class="menu-item"><a class="active" href="../feedbacks/feedbacks.php">Feedbacks</a></li>
            <li class="menu-item"><a href="../contact/contact.php">Contact</a></li>
        </ol>

    </nav>

    <!-- Fixed Header  with scroll progress bar -->
    <div class="container">
        <div class="row">
            <div class="header">
                <h2>Feedbacks</h2>
                <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br>
    <!-- search input -->
    <input id="searchbox"type="text" oninput="onSearch(this.value)" value="" placeholder="Search . . ." name="search">
    <!-- feedback list -->
    <div class='wrapper' id="root_wrapper">
        <!-- <h1 class='text-center'>
            Top Reviews
        </h1>
         -->
        <!-- <div class='speechbubble'>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span> 
            <p>
                So I created this thread to see if anyone wants to work on creating an N Wheeled class vehicle with me,
                as opposed to a bunch of people banging their heads against the wall seperately.
                <span class='username'>Feuern_D</span>
            </p>
        </div> -->
        
    </div>
    <!-- pagination -->
    <div class="btn-wrapper">
        <button class="btn btn-link" onclick="prev()">&lt;&lt; prev</button>
        <button class="btn btn-link" onclick="next()">next &gt;&gt;</button>
        <br>
    </div>
    <!-- feedback button -->
    <img 
        type="image" 
        src="../global/images/pencil.png" 
        class="rounded-circle feedback_button" 
        width="50" 
        height="50" 
        alt="Give Feedback"
        data-toggle="modal" data-target="#myModal"
        >

    <!-- Modal for form -->
    <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content w3-animate-zoom">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Feedback Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="./feedback_controller.php" method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" name="comment" rows="3" id="comment" required></textarea>
            </div>
            <div class="form-group">
                <label for="input-1" class="control-label">Rating:</label>
                <input id="input-1" name="rating" class="rating rating-loading form-control" value="0" data-min="0" data-max="5" data-step="1" data-size="xs">
            </div>
            <button type='reset' class='btn btn-info'> Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
        </div>
        
        
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
                <p>
                    Click on pencil icon<br> to give feedback
                </p>
            </div>
        </div>
    </div>

<script>
    var feedbackJson = <?php echo $feedback_json; ?>; // Pass in json from PHP
</script>    
<script src="./feedbacks.js">
</script>
     

</body>

</html>