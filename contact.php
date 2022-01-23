<?php include 'mail.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/normalize.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <title>Flower store</title>
</head>

<body>
    <nav class="nav">
        <div class="container">
            <div class="row navbar-items">
                <div class="col-1">
                    <a class="nav__brand" href="index.html">Flos</a>
                </div>
                <div class="col-11">
                    <ul class="nav__list clear-list">
                        <li class="nav__item">
                            <a class="nav__link" href="index.html">Home</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="makeorder.html">Make order</a>
                        </li>
                        <li class="nav__item">
                            <a class="nav__link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <section id="contact" class="contact-section">
        <div class="container">

            <div class="row justify-content-center" data-aos="fade-up">

                <div class="col-lg-10">

                    <div class="info-wrap">
                        <div class="row">
                            <div class="col-lg-4 info">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p> Example Street <br>Example City</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>info@example.com<br>contact@example.com</p>
                            </div>

                            <div class="col-lg-4 info mt-4 mt-lg-0">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+1 111 111 111<br>+1 111 111 111</p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <div class="row mt-5 justify-content-center" data-aos="fade-up">
                <div class="col-lg-10">
                    <form action="contact.php" method="POST" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                                
                        </div>
                        <div class="my-3">
                            <?php
                                    echo $alert;
                                ?>
                        </div>
                        <div class="text-center"><button type="submit" name = "submit" onclick="sendEmail()">Send Message</button></div>
                    </form>
                </div>

            </div>

        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <span>Created by Kamił & Serhii © 2022</span>
        </div>
    </footer>
</body>

</html>