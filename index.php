<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/main.css">

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

    <title>TrashMaster</title>

    <link href="https://fonts.googleapis.com/css2?family=Volkhov&display=swap" rel="stylesheet">

  </head>

  <body>
  
  <?php 
   require_once 'process.php';
  ?>

    <?php if(isset($_SESSION['success_message'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo $_SESSION["success_message"];
          // remove all session variables
          session_unset();

          // destroy the session
          session_destroy();
        ?>
        </div> 
    <?php endif; ?>
    <!-- Landing Page -->
    <header>
      <div class="container">
        <nav class="navbar navbar-light ">
          <a class="navbar-brand" href="#">
            <img src="./assets/images/logo.svg" alt="" loading="lazy">
          </a>
        </nav>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="hero">
              <h1>Do you want to recover your lost file?</h1>
              <p>With trashmaster you will never get to lose a file on your mobile phone again. Enter your email below to get notified when we launch.</p>
              <form method="POST"  action="process.php">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address required">
                <button type="submit" name="emailsaver">Send</button>
              </form>
            </div>
          </div>
          <div class="col-md-6">
            <div class="phone-hero animate__animated animate__slideInRight animate__fast animate__delay-2s">
              <img class="img-fluid " src="assets/images/phone-hero-png (1).png" alt="phone">
            </div>
          </div>
        </div>
      </div>
    </header>

    <main>

    <section>
      <img src="./assets/images/pink ballon.png" alt="pink ballon" class="banner-one__shape-1">
      <img src="./assets/images/blue ballon.png" alt="blue ballon" class="banner-one__shape-2">
      <img src="./assets/images/green ballon.png" alt="green ballon" class="banner-one__shape-3">
    </section>

    <section class="about">
      <div>
        <hr>
        <h1>How Trashmaster works?</h1>
        <p>Trashmaster is a mobile application that helps to temporary store files that has been deleted on your phone. This gives your files a layer of protection from complete deletion. </p>
      </div>
      <div class="container">
      <div class="row">
        <div class="col-md-6 details-box">
          <i class="num-box sm-show">01</i>
          <h3><i class="num-box sm-hide">01</i> Download and install Trashmaster on playstore or apple store</h3>
        </div><br>
        <div class="col-md-6 details-box">
          <span class="num-box sm-show">02</span>
          <h3><span class="num-box sm-hide">02</span> Download and install Trashmaster on your mobile device</h3>
        </div><br>
      </div>
      <div class="row">
        <div class="col-md-6 details-box">
          <span class="num-box sm-show">03</span>
          <h3><span class="num-box sm-hide">03</span> Click on any of the categories to view, delete or restore your deleted items</h3>
        </div><br>
        <div class="col-md-6 details-box">
          <span class="num-box sm-show">04</span>
          <h3><span class="num-box sm-hide">04</span> Deep scan to recover previously deleted files.</h3>
        </div>
      </div>
    </div>
    </section>

    <section class="features">
      <div>
        <hr>
        <h1>Core Features</h1>
        <p>Here are the following awesome features that would make you enjoy Trashmaster</p>
      </div>
      <div class="container ">
          <div class="feature-container">
          <div class="row d-flex  justify-content-between feature-box">
            <div class="col-md-6 ">
              <div class="feature-image">
                <img id="myImg" src="./assets/images/features-mockup-1.svg" alt="phone feature mockup">
              <!-- The Modal -->
              <div id="myModal" class="modal">

                    <!-- The Close Button -->
                    <span class="close">&times;</span>

                    <!-- Modal Content (The Image) -->
                    <img class="modal-content" id="img01">

                    <!-- Modal Caption (Image Text) -->
                    <div id="caption"></div>
              </div>
              </div>
            </div>
            <div class="col-md-6">
               
              <div class="feature-text">
                <h2><img class="tick-icon" src="./assets/images/tick.png" alt="tick icon"> Instant Push Notification</h2>
                <p>Trashmaster sends a push notification to your phone immediately an item is deleted. This feature can be switched off or on in the app settings.</p>
              </div>
            </div>
          </div>
          
          <div class="row d-flex flex-row-reverse justify-content-between feature-box">
            <div class="col-md-6 ">
              <div class="feature-image">
                <img id="myImg1" src="./assets/images/features-mockup-2.svg" alt="phone feature mockup">
                <!-- The Modal -->
                <div id="myModal1" class="modal">

                <!-- The Close Button -->
                <span class="close">&times;</span>
              
                <!-- Modal Content (The Image) -->
                <img class="modal-content" id="img011">
              
                <!-- Modal Caption (Image Text) -->
                <div id="caption"></div>
                    </div>
              </div>
            </div>
            <div class="col-md-6 ">
              <div class="feature-text">
                <h2><img class="tick-icon" src="./assets/images/tick.png" alt="tick icon"> Files Category for Easy Navigation</h2>
                <p>All deleted items are categorized to their respective file for easy and quick navigation so as to make your experience easier</p>
              </div>
            </div>
            
          </div>
          
          <div class="row justify-content-between feature-box">
            <div class="col-md-6">
              <div class="feature-image">
                <img id="myImg2" src="./assets/images/features-mockup-3.svg" alt="phone feature mockup">
                  <div id="myModal2" class="modal">

                  <!-- The Close Button -->
                  <span class="close">&times;</span>
                
                  <!-- Modal Content (The Image) -->
                  <img class="modal-content" id="img012">
                
                  <!-- Modal Caption (Image Text) -->
                  <div id="caption"></div>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-text">
                <h2> <img class="tick-icon"  src="./assets/images/tick.png" alt="tick icon"> Deleted Items view</h2>
                <p>When a particular category is picked, the deleted files under that category will appear making it easy for user. You can also search for a file if need be.</p>
              </div>
            </div>
          </div>
          
          <div class="row d-flex flex-row-reverse justify-content-center feature-box">
            <div class="col-md-6">
              <div class="feature-image">
                <img id="myImg3" src="./assets/images/features-mockup-4.svg" alt="phone feature mockup">
                  <div id="myModal3" class="modal">

                  <!-- The Close Button -->
                  <span class="close">&times;</span>
                
                  <!-- Modal Content (The Image) -->
                  <img class="modal-content" id="img013">
                
                  <!-- Modal Caption (Image Text) -->
                  <div id="caption"></div>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-text">
                <h2><img class="tick-icon" src="./assets/images/tick.png" alt="tick icon"> Search bar for Quick Discovery of Items</h2>
                <p>On the click on the search icon, you can easily search for the item, saving you stress of scrolling for the item want to either delete or restore.</p>
              </div>
            </div>
            
          </div>
          <div class="row d-flex justify-content-center feature-box">
            <div class="col-md-6">
              <div class="feature-image">
                <img id="myImg4" src="./assets/images/features-mockup-5.svg" alt="phone feature mockup">
                  <div id="myModal4" class="modal">

                  <!-- The Close Button -->
                  <span class="close">&times;</span>
                
                  <!-- Modal Content (The Image) -->
                  <img class="modal-content" id="img014">
                
                  <!-- Modal Caption (Image Text) -->
                  <div id="caption"></div>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-text">
                <h2><img class="tick-icon" src="./assets/images/tick.png" alt="tick icon"> Delete, Restore or Backup your File</h2>
                <p>Once a particular item is selected. You can then delete, restore or backup this item. You can also check the size and previous location before it was deleted.</p>
              </div>
            </div>
          
          </div>
          
          <div class="row flex-row-reverse justify-content-center feature-box">
            <div class="col-md-6">
              <div class="feature-image">
                <img id="myImg5" src="./assets/images/features-mockup-6.svg" alt="phone feature mockup">
                <div id="myModal5" class="modal">

                  <!-- The Close Button -->
                  <span class="close">&times;</span>
                
                  <!-- Modal Content (The Image) -->
                  <img class="modal-content" id="img015">
                
                  <!-- Modal Caption (Image Text) -->
                  <div id="caption"></div>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="feature-text">
                <h2><img class="tick-icon" src="./assets/images/tick.png" alt="tick icon"> Deep Scan</h2>
                <p>Trashmaster scans your phone storage to recover maximum invaluable files even if you didnt make a backup earlier before installing the application.</p>
              </div>
            </div>
          </div>
          
        </div> 
      </div>
    </section>

    <section class="banner animate__animated animate__jackInTheBox">
      <div class="banner-box d-flex justify-content-center">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="row">
                <div class="col-md-6">
                  <h3 class="text1">Be the first to get notified when Trashmaster is launched online.</h3>
                </div>
                <div class="col-md-6">
                  <h3 class="text2">We are currently working on trashmaster. Please input your email below for notification when lunched online.</h3>
                  <form method="POST"  action="process.php">
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                    <button type="submit" name="emailsaver">Send</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </main>

    <footer>
      <div>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img src="assets/images/white-logo.png" alt="logo">
            </div>
            <div class="col-md-6 ml">
              <h3>
                Designed by <a href="https://twitter.com/Thereal_adenike" target="_blank" rel="noopener noreferrer">@Adesanoye Adenike</a>, Coded by <a href="https://twitter.com/emmaglorypraise" target="_blank" rel="noopener noreferrer">@Glory Praise</a>
              </h3>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./assets/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
