<?php include 'make-order-mail.php';?>

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
    <title>Flower store</title>
</head>

<body>
    <nav class="nav">
        <div class="container">
            <div class="row navbar-items">
                <div class="col-lg-1 col-md-2 col-sm-3">
                    <a class="nav__brand" href="index.html">Flos</a>
                </div>
                <div class="col-lg-11 col-md-10 col-sm-9">
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

    <section class="order-form-section">
        <div class="container">
            <?php
                $productName = $_GET['productName'];
                echo $productName;
            ?>
            <form action="mix-bouq.php?productName=<?php echo $productName?>" method="post" class="order-form">
            <?php
               echo "<input name='productName' type='text' value=\"$productName\" hidden>"
            ?>
                <div class="row margin-b-sm">
                    <div class="col-md-6">
                        <input class="order-form__field mb-4 mb-md-0" name="name" type="text" placeholder="Your Name" required>
                    </div>
                    <div class="col-md-6">
                        <input class="order-form__field" name="address" type="text" placeholder="Address" required>
                    </div>
                </div>
                <div class="row margin-b-sm">
                    <div class="col-md-6">
                        <input class="order-form__field mb-4 mb-md-0" name="phone" type="tel" placeholder="Your phone number" required>
                    </div>
                    <div class="col-md-6">
                        <input class="order-form__field" name="date" type="date" part="Suply date" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <textarea class="order-form__text" name="message" rows="5" placeholder="Message"></textarea>
                    </div>
                </div>
                <div class="my-3">
                    <?php
                        echo $alert;
                    ?>
                </div>
                <button type="submit" name ="submit" class="btn btn_main order-form__btn" onclick="sendEmail()">Make order</button>
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <span>Created by Kamił & Serhii © 2022</span>
        </div>
    </footer>
</body>


</html>