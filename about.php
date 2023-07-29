<?php

include 'config.php';

session_start();

$user_id =  $_SESSION['user_id'];

if(!isset($user_id)){
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php include 'header.php'?>

<div class="heading">
    <h3>about us</h3>
    <p><a href="home.php">home</a> / about</p>
</div>
<section class="about">
    <div class="flex">
        <div class="image">
            <img src="images/about.jpg" alt="">
        </div>
        <div class="content">
            <h3>why choose us</h3>
            <p>Dear readers,
We offer a huge collection of books from diverse categories of Fiction, Non-fiction, Biographies, History, Religion, Self-Help, etc. We also offer a collection of Investments and Management books.</p>
            <p>We strive for customer satisfaction by offering a user-friendly search engine, efficient payment options and seamless delivery systems. Apart from all this, we also provide great deals and discounts on our products.
All the Publishers, Distributors and Authors around the country are welcome to partner with us and grow the Bookshelf-online family. We would like to thank our customers for shopping with us. You can write to us on our e-mail id to share any suggestions or feedback you might have regarding our website or services.</p>
            <a href="contact.php" class="btn">contact us</a>
        </div>
    </div>
</section>
<section class="reviews">
    <h1 class="title">Client's Review</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/user-1.jpg" alt="">
            <p>Always a great experience shopping from 'bookshelf-online' Books arrive quickly and customer care are fab (fast, caring and very helpful) if you ever need to contact them. I feel much happier knowing that books are doing from independent book sellers.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <h3>Becky Lee</h3>
        </div>

        <div class="box">
            <img src="images/user-2.jpg" alt="">
            <p>It was easy to use 'bookshelf-online'. I had 2 books from different sources and 'bookshelf-online' billed them together making payment easier. Delivery was prompt and well packaged so the books were in excellent condition (both books were presents)</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Marina Young</h3>
        </div>

        <div class="box">
            <img src="images/user-3.jpg" alt="">
            <p>amazingly quick delivery! book arrived in perfect condition, i.e. fit into the box well enough not to have had any corners squashed in transit - wonderful as i'm gifting it!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Caroline Johnson</h3>
        </div>

        <div class="box">
            <img src="images/user-4.jpg" alt="">
            <p>I have had cumbersome experiences with having a tax-exempt account set up in the past, but 'bookshelf-online' made it simple and was accomplished within 24 hours with a friendly, professional response to let me know it was taken care of. Bravo!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Thomas</h3>
        </div>
        <div class="box">
            <img src="images/user-5.jpg" alt="">
            <p>This was my second time ordering from the 'bookshelf-online' by the Sea and it was again an excellent experience! Competitive prices and fast delivery! Highly recommended and will order from you again :)</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Nikki</h3>
        </div>

        <div class="box">
            <img src="images/user-6.jpg" alt="">
            <p>Four books delivered promptly; two more are set to be delivered in a couple of weeks. I have always found 'bookshelf-online' extremely satisfactory!</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Mike</h3>
        </div>
    </div>
</section>

<section class="home-contact">
    <div class="content">
    <h3>have any question ?</h3>
    <a href="contact.php" class="white-btn">Contact Us</a>
    </div>
</section>

<section class="authors">
    <h1 class="title">Great Author</h1>
    <div class="box-container">
        <div class="box">
            <img src="images/author-1.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>V. R. Cardoso</h3>
        </div>

        <div class="box">
            <img src="images/author-2.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Amitav Ghosh</h3>
        </div>

        <div class="box">
            <img src="images/author-3.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Amish Tripathi</h3>
        </div>

        <div class="box">
            <img src="images/author-4.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Meg Waite Clayton</h3>
        </div>

        <div class="box">
            <img src="images/author-5.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Chetan Bhagat</h3>
        </div>

        <div class="box">
            <img src="images/author-6.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Ajinkya Bhasme</h3>
        </div>

        <div class="box">
            <img src="images/author-7.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Carlos Ruiz Zafón</h3>
        </div>

        <div class="box">
            <img src="images/author-8.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Blake Crouch</h3>
        </div>

        <div class="box">
            <img src="images/author-9.jpg" alt="">
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
            <h3>Liane Moriarty</h3>
        </div>
    </div>
</section>






<?php include 'footer.php';?>

<script src="script.js"></script>
</body>
</html>