<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="nav-left">
            <img src="./asset/logo.png" alt="logo">
        </div>
        <div class="nav-right">
            <ul>
                <li><a href="#home-page" data-page="#home-page">Home</a></li>
                <li><a href="#home-page" data-page="#home-page">Concert</a></li>
                <li><a href="#home-page" data-page="#home-page">Seat</a></li>
                <li><a href="#home-page" data-page="#home-page">Ticket</a></li>
                <li><a href="#home-page" data-page="#home-page">Merch</a></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <?php include './pages/home.php' ; ?>
        <div class="content">
            <?php include './pages/concert.php' ; ?>
            <?php include './pages/seat.php' ; ?>
            <?php include './pages/ticket.php' ; ?>
            <?php include './pages/merch.php' ; ?>
            <?php include './pages/galery.php' ; ?>
        </div>
    </div>
    <footer>
        <div class="footer-top">
        <div class="de-grandeur">
            <h2>De Grandeur</h2>
        </div>
        <div class="contact">
            <h2>Contact</h2>
            <p>Reach out to us for inquiries or support. <br>
            +123-456-7890 <br>
            info@degrandeur.com <br>
            123 Main Street, <br>
            Cityville, ST 12345, <br>
            Country</p>
        </div>
        <div class="about">
            <h2>About Us</h2>
            <p>We are a leading company in luxury goods, committed to providing top-quality products and services. Our mission is to enhance the lives of our customers with elegance and sophistication.</p>
        </div>
        <div class="partnership">
            <h2>Partnership</h2>
            <p>Interested in partnering with us? We offer a range of collaboration opportunities including co-branding, joint ventures, and more. Contact us to explore how we can work together.</p>
        </div>
        <div class="archive">
            <h2>Archive</h2>
            <p>Browse through our past articles, newsletters, and updates to get more insights into our company's journey and achievements.</p>
        </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-icon">
                <div class="social-icon">
                    <img src="./asset/youtube.jpg" alt="yt">
                </div>
                <div class="social-icon">
                    <img src="./asset/twitter.jpg" alt="x">
                </div>
                <div class="social-icon">
                    <img src="./asset/facebook.jpg" alt="fb">
                </div>
                <div class="social-icon">
                    <img src="./asset/instagram.jpg" alt="ig">
                </div>
            </div>
        </div>
        <p class="footer-copyright">&copy , 2024 Vortex all reversed</p>
    </footer>
</body>
</html>