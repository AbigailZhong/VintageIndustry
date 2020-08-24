<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact | The Vintage Industry</title>
  <link rel="stylesheet" href="styles/all.css" type="text/css">
  <script src="scripts/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="scripts/validation.js" type="text/javascript"></script>
  <link rel="icon" type="image/png" href="images/gear_gray.png">
  <!-- Credit: Gear made by Lia Cernauskas -->
</head>

<body>
  <nav>
    <a class="logo" href="index.php"><img src="images/logo_square1.png" alt="logo"/></a>
    <!-- Credit: Logo made by Brian Dudla, purchased by Marie Sirakos (client), and given to us to use on the website. Recolored by Abigail Zhong.-->
    <input type="checkbox" id="menu-toggle">
    <label for="menu-toggle"></label>
    <div class="top line"><label for="menu-toggle" class="div-fill"></label></div>
    <div class="middle line"><label for="menu-toggle" class="div-fill"></label></div>
    <div class="bottom line"><label for="menu-toggle" class="div-fill"></label></div>
    <ul class="left">
      <li><a href="contact.php">CONTACT</a></li>
      <li><a href="about.php">OUR STORY</a></li>
      <li><a href="index.php">HOME</a></li>
    </ul>
    <ul class="right">
      <li><a class="shop" href="https://www.etsy.com/shop/VintageIndustryShop">SHOP</a></li>
      <li><a href="events.php">EVENTS</a></li>
      <li><a class="active" href="gallery.php">GALLERY</a></li>
    </ul>
  </nav>

  <header>
    <!-- Header decoration by Xiaohan Gao -->
    <img class="left" src="images/headerDecor.png" alt=""/>
    <div class="middle">
      <h1>Contact</h1>
      <p>reaching out to us</p>
    </div>
    <img class="right" src="images/headerDecor.png" alt=""/>
  </header>

  <div class="contactrow">

    <div class="email_map">

      <div class="form">

        <h2 class="contactheadings">Reach out with any questions!</h2>
        <!-- Uses third party php emailer from https://formspree.io/ -->

        <form id="contactForm" method="post" action="https://formspree.io/marie@thevintageindustry.com" novalidate>
          <div>
            <label for="userName">Name: </label>
            <input type="text" id="userName" name="userName" placeholder="Name" required/>
            <p><span class="warning hidden" id="userNameError">Please enter your first and last name with letters only.</span></p>
          </div>
          <div>
            <label for="userEmail">Email: </label>
            <input type="email" id="userEmail" name="userEmail" placeholder="Email" required/>
            <p><span class="warning hidden" id="emailError">Please enter your email using an @sign and domain name.</span></p>
          </div>
          <div>
            <label for="userPhone">Phone Number: </label>
            <input type="tel" id="userPhone" name="userPhone" placeholder="(xxx)xxx-xxxx" size="10" required/>
            <p><span class="warning hidden" id="phoneError">Please enter a 10 digit phone number.</span></p>
          </div>
          <div>
            <label for="question">Question: </label>
            <textarea id="question" name="question" required></textarea>
            <p><span class="warning hidden" id="questionError">Please enter a brief description of your question.</span></p>
          </div>
          <div class="submitbutton">
            <input type="submit" class="submit" value="Submit" name="submit"/>
          </div>

        </form>

      </div>

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8726.963030054165!2d-76.50593660918075!3d42.440244760629525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d0819c55a806ef%3A0x8511479b110b22af!2sThe+Vintage+Industry!5e0!3m2!1sen!2sus!4v1542679044360" width="500" height="450" style="border:0" allowfullscreen></iframe>

    </div>

    <div class="contactcolumn">

      <div class="info">

        <h2 class="contactheadings">Contact Information</h2>

        <p>Telephone Number: 607-280-2727</p>
        <p>Email: marie@thevintageindustry.com</p>
      </div>
      <div class="hours">
        <h2 class="contactheadings">Store Hours</h2>
        <p>Monday-Saturday: 11:00am-7:00pm</p>
        <p>Sunday: 11:00am-5:00pm</p>
      </div>
      <div class="address">
        <h2 class="contactheadings">Address</h2>
        <p>State Theatre Building</p>
        <p>113 West State St. (Martin Luther King Jr. St.)</p>
        <p>Ithaca, NY 14850</p>
      </div>
    </div>
  </div>


  <footer>
    <!-- Provided by Facebook: https://en.facebookbrand.com/ -->
    <a href="https://www.facebook.com/TheVintageIndustry/?hc_ref=SEARCH"><img src="images/facebookIcon.png" alt="Facebook"/></a>
    <!-- Provided by Instagram: https://en.instagram-brand.com/assets/glyph-icon -->
    <a href="https://www.instagram.com/thevintageindustry/"><img src="images/instaBadge.png" alt="Instagram"/></a>
    <!-- Provided by Pinterest: https://business.pinterest.com/en/pinterest-brand-guidelines -->
    <a href="https://www.pinterest.com/IthacaVintage/"><img src="images/pinterestBadgeWhite.png" alt="Pinterest"/></a>
  </footer>
</body>

</html>
