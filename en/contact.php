<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Squada+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Balthazar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    
    <link href="../dist/app.css" rel="stylesheet">
    
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/style_contact.css" rel="stylesheet" type="text/css">

    <title>Contact - Unis-son (EN)</title>
    <meta name="description" content="Contact Unis-son for any request for quotation or questions." />
</head>

<body>
    <header>/!\ Unofficial site /!\</header>
    <nav class="row mr-0">
        <a class="col-xl-4 col-lg-5 col-md-7 col-sm-9 col-13 text-center pr-0" href="#">
            <img src="../images/logo/logo.svg" width="75" height="75" alt="logo" class="logo">
        </a>
        <div class="navbar navbar-expand-lg bg-primary col-xl-46 col-lg-45 col-md-43 col-sm-41 col-37">
            <div></div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sonorisation.html">Events sonorisation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="recording.html">Recordings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="arrangement_postproduction.html">Arrangements / Postproduction</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="acoustic_studies.html">Acoustic studies / sound design</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="formations.html">Formations</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Galleries
                        </a>
                        <div class="dropdown-menu bg-primary" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="videos_photos_gallery.html">Photos / Videos</a>
                            <a class="dropdown-item" href="sounds_gallery.html">Sounds</a>
                        </div>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

    <main class="main">
        <section class="text-center">
            <div class="container pt-5">
                <div class="row">
                    <div>
                        <h1>CONTACT</h1>
                        <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id feugiat turpis, sit amet mattis justo. Phasellus nec nulla id nibh tristique elementum sit amet ac nunc. Cras lacinia mollis odio quis rhoncus. </p>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="container">
            <div class="row d-flex justify-content-around pt-5 bg-logoNB">
                <div class="order-1 order-sm-1 order-md-2 col-35 col-sm-35 col-md-22 col-lg-18 col-xl-16 pb-5">
                    <h4>Send an e-mail</h4>
                    <form method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required>
                            <small id="emailHelp" class="form-text">We will never share your email with a third party.</small>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select class="form-control" name="subject" id="subject" required>
                                <option>Ask for a quotation</option>
                                <option>Question about the event sound system</option>
                                <option>Question about recordings</option>
                                <option>Question on arrangement/postproduction</option>
                                <option>Question about acoustic studies / sound design</option>
                                <option>Question on post-production</option>
                                <option>Question sur la postproduction</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group mb-4">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="3" required></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey=""></div>
                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                        <button type="submit" class="btn btn-light btn-lg shadow-lg rounded-pill mt-3">Envoyer</button>
                        <div class="message-php mt-2 ml-3"><?php
                            require_once "../ReCaptcha/autoload.php";
                            if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"])){
                                    $recaptcha = new \ReCaptcha\ReCaptcha("");
                                    $resp = $recaptcha->verify($_POST["g-recaptcha-response"]);
                                if ($resp->isSuccess()) {
                                    $headers = 'From: ' . $_POST["email"] . "\r\n";
                                    mail("", $_POST["subject"], $_POST["message"], $headers);
                                    echo "Message sent! Thank you for your visit.";
                                } else {
                                    echo "Invalid Captcha";
                                }
                            }
                        ?></div>
                    </form>
                </div>
                <div class="order-2 order-sm-2 order-md-1 col-35 col-sm-40 col-md-25 col-lg-18 col-xl-16 mb-5 bg-white" id="contact-info-block">
                    <h5 class="pt-5 text-center">ADRESS</h5>
                    <p class="pt-4">..............................</p>
                    <div class="row d-flex justify-content-center pt-5">
                        <img src="../tools/ligne_noir.png" alt="séparateur noir" class="div-bar">
                    </div>
                    <h5 class="pt-5 text-center">E-MAIL</h5>
                    <p class="pt-4 pb-info-contact text-center">Contact can only be made by email using the form on this page.</p>
                </div>
            </div>
        </div>
    </main>
    
    <footer>
        <div class="container text-left">
            <div class="row justify-content-around">
                <div class="col-sm mb-1">
                    <h3 class="mt-4">Services</h3>
                    <ul>
                        <li><a href="sonorisation.html">Sonorisation</a></li>
                        <li><a href="recording.html">Recordings</a></li>
                        <li><a href="arrangement_postproduction.html">Arrangements / Postproduction</a></li>
                        <li><a href="acoustic_studies.html">Acoustic studies / sound design</a></li>
                        <li><a href="formations.html">Formations</a></li>
                    </ul>
                </div>
                <div class="col-sm mb-1">
                    <h3 class="mt-4">Galleries</h3>
                    <ul>
                        <li><a href="videos_photos_gallery.html">Photos / videos</a></li>
                        <li><a href="sounds_gallery.html">Sounds</a></li>
                    </ul>
                </div>
                <div class="col-sm mb-1">
                    <h3 class="mt-4">Contact</h3>
                    <ul>
                        <li><a href="#">Form</a></li>
                    </ul>
                </div>
                <div class="col-sm mb-1">
                    <h3 class="mt-4">Useful</h3>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="website_map.html">Website map</a></li>
                        <li><a href="legal_disclaimer.html">Legal disclaimer</a></li>
                    </ul>
                </div>
                <div class="row col-sm mb-4 align-items-center">
                    <a class="languageChoiceText ml-2 pt-2" href="../fr/contact.php"><img src="../images/fr_flag.png" width="40" height="40" alt=" " class="mr-2">Version française</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>