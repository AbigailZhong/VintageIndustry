<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery | The Vintage Industry</title>
  <link rel="stylesheet" href="styles/all.css" type="text/css">
  <script src="scripts/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="scripts/carousel.js" type="text/javascript"></script>
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
      <h1>Gallery</h1>
      <p>snapshots of our shop</p>
    </div>
    <img class="right" src="images/headerDecor.png" alt=""/>
  </header>


  <div class="slideshow_row">
    <div class="button_holder back1" >
      <img src="images/Back_Button1.png" alt="backward button" class="slide_btn back1" id="slideshowBack">
      <!-- Credit: Back button made by Abigail Zhong -->
    </div>

    <div class="slideshowImage">
      <img id="slideshow" src="images/gallery_1.jpg" alt="Slideshow of the Vintage Industry store and items"/>
      <!-- Credit: Photo taken by Xiaohan Gao. Other photos are credited in the carousel Script. -->

      <img src="images/vintage_frame.png" alt="a vintage picture frame" class="frame">
      <!-- Credit: NathL on Deviantart. Unrestricted stock, allowed to use in commercial projects. source = https://www.deviantart.com/nathl-fr/art/Vintage-frame-precut-PNG-384608259 ONSCREEN CREDIT IN FOOTER-->
    </div>

    <div class="button_holder">
      <img src="images/Back_Button1.png" alt="backward button" class="slide_btn back2" id="slideshowBack2">
      <!-- Credit: Back button made by Abigail Zhong -->
      <img src="images/Next_Button1.png" class="slide_btn" alt="forward button" id="slideshowNext">
      <!-- Credit: Back button made by Abigail Zhong -->
    </div>
  </div>

  <div class="cr_space">
    <h2>Our Customers</h2>

    <div class="review_wrapper">
      <div class="review_box">
        <h3>Hannah the Hatchet</h3>

        <img src="images/customer1.jpg" alt="Hannah" class="customer_img"/>
        <!-- Credit: Image provided by Marie (client) with permission from Hannah.
        Frame by Madame M; unrestricted stock, allowed to use in commercial projects. source = https://www.deviantart.com/madamem-stock/art/Antique-Frame-Pack-I-square-63213252 ONCREEN CREDIT IN FOOTER -->

        <blockquote>"The Vintage Industry is my first stop when looking for new costume pieces or just a fun faux fur! Marie has an eye for beautiful vintage finds! I love having a local store where I can find all of the most fabulously glam goodies-like this amazing Edwardian robe! "</blockquote>

        <div class=logo_holder>
          <!-- Provided by Facebook: https://en.facebookbrand.com/ -->
          <a href="https://www.facebook.com/hannahthehatchet/"><img src="images/facebookIconblack.png" alt="Hannah's Facebook"/></a>
          <!-- Provided by Instagram: https://en.instagram-brand.com/assets/glyph-icon -->
          <a href="https://www.instagram.com/hannahthehatchet/?hl=en"><img src="images/instaBadgeblack.png" alt="Hannah's Instagram"/></a>
        </div>

      </div>

      <div class="review_box">
        <h3>Jim Garmhausen</h3>

        <img src="images/customer2.jpg" alt="Jim" class="customer_img"/>
        <!-- Credit: Image provided by Marie (client) with permission from Jim.
        Frame by Madame M; unrestricted stock, allowed to use in commercial projects. source = https://www.deviantart.com/madamem-stock/art/Antique-Frame-Pack-I-square-63213252 ONCREEN CREDIT IN FOOTER -->

        <blockquote>"Vintage Industry is my one-stop-knick-knack-shop for all the odd, lovely old things I incorporate into my sculptural work. Sometimes I'll stop in just to find something to be inspired by. It's never a wasted trip. Such a great store to visit, so many amazing, beautiful things, carefully selected and compiled. Marie [has] created something wonderful, approachable, and fun. She's been a great friend to me as an artist, emailing me with possible items she's found, or offering to look for things for me when she's out on her hunts. Highly recommend the shop and the person."</blockquote>

        <div class=logo_holder>
        </div>

      </div>

      <div class="review_box">
        <h3>Monika</h3>
        <img src="images/customer3.jpg" alt="A collection of items from the store." class="customer_img"/>
        <!-- Credit: Photo taken by Xiaohan Gao.
        Frame by Madame M; unrestricted stock, allowed to use in commercial projects. source = https://www.deviantart.com/madamem-stock/art/Antique-Frame-Pack-I-square-63213252 ONCREEN CREDIT IN FOOTER -->

        <blockquote>"If you're in Ithaca, this is the first place to go. Maybe the only place, if you spend as much time there as I do. It's an unassuming little store nestled in the State Theater building, and a rare window into the soul of the Upstate aesthetic - a kaleidoscope of freemason ritual vestments, victorian silk, scandinavian silver, WWI-era militarywear, 70s pottery, outsider art, the occasional 1stDibs-hip mid-century console. And, of course, there's Marie herself, who is a curator in the old school sense of the word: a storyteller through artifacts, with the kind of magnetic eye that seems to draw VALUABLES (some collectible, some intangible) out of the shyest, strangest corners of the North East."</blockquote>
      </div>
    </div>
  </div>

  <footer class="gallery_foot">
    <div class= "social_media">
      <!-- Provided by Facebook: https://en.facebookbrand.com/ -->
      <a href="https://www.facebook.com/TheVintageIndustry/?hc_ref=SEARCH"><img src="images/facebookIcon.png" alt="Facebook"/></a>
      <!-- Provided by Instagram: https://en.instagram-brand.com/assets/glyph-icon -->
      <a href="https://www.instagram.com/thevintageindustry/"><img src="images/instaBadge.png" alt="Instagram"/></a>
      <!-- Provided by Pinterest: https://business.pinterest.com/en/pinterest-brand-guidelines -->
      <a href="https://www.pinterest.com/IthacaVintage/"><img src="images/pinterestBadgeWhite.png" alt="Pinterest"/></a>
    </div>

    <div class="gallery_creds">
      <!-- These are onscreen credits for the frames used on this page. -->
      <a href="https://www.deviantart.com/nathl-fr/art/Vintage-frame-precut-PNG-384608259"><p class="creds">Gallery Frame Source</p></a>
      <a href="https://www.deviantart.com/madamem-stock/art/Antique-Frame-Pack-I-square-63213252"><p class="creds">Customer Frame Source</p></a>
    </div>
  </footer>
</body>
</html>
