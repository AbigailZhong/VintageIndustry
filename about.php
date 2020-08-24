<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About | The Vintage Industry</title>
  <link rel="stylesheet" href="styles/all.css" type="text/css">
  <script src="scripts/jquery-3.3.1.min.js" type="text/javascript"></script>
  <script src="scripts/about.js" type="text/javascript"></script>
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
      <h1>Our Story</h1>
      <p>learn more about our business</p>
    </div>
    <img class="right" src="images/headerDecor.png" alt=""/>
  </header>

  <div class="aboutrow">
    <div class="aboutcolumn">
      <!-- Photo taken by Xiaohan Gao -->
      <img class="aboutimages" src="images/about1.png" alt="The Vintage Industry storefront" />
      <h2 class="aboutheadings"><a href="#aboutstoreclick">About the Vintage Industry</a></h2>
      <p id="aboutstoreclick">The Vintage Industry specializes in a wide variety of antiques, vintage items, collectibles, and garments. The store's specific areas of interest include: 20th century design, mid century and modern furniture, folk art, porcelain and glassware, vintage taxidermy, vintage photo and audio equipment, antique and vintage lighting fixtures, costume jewelry, vintage clothing, and any other odd or eye-catching items found during the curation of the store. The Vintage Industry is a small and selective shop located in downtown Ithaca, NY. Items can also be found on the online <a>Etsy shop</a> and at select regional Vintage and Antique shows.</p>
      <button id="showstore" class="aboutbuttons">Origins of the Store</button>
      <div id="storeorigins" class="abouthidden">
        <p id="showstoreclick">The Vintage Industry is owned by local vintage and antiques collector Marie Sirakos. The store sprung from the roots of a previous antiques store at the same location, Blue Bird Antiques. Blue Bird was founded by Jenny McGuire who curated the store with the help of Marie from 2007 to 2013.</p>
        <!-- Photo taken by Marie Sirakos (client) and given to us to use on the website -->
        <img src="images/aboutstore.jpg" alt="Photo of the inside of the store" title="Inside the storefront of the Vintage Industry" />
      </div>
    </div>
    <div class="aboutcolumn">
      <!-- Photo taken by Marie Sirakos (client) and given to us to use on the website -->
      <img class="aboutimages" src="images/about2.png" alt="The Vintage Industry storefront" />
      <h2 class="aboutheadings"><a href="#aboutmarieclick">About Marie Sirakos</a></h2>
      <p id="aboutmarieclick">Marie has enjoyed buying and selling antiques since she was nine years old. Influenced by her mother's hobbyist antiques business, as well as her family's general penchant for picking and treasure finding, she gets a great deal of satisfaction from finding good homes for the items she collects. Marie is deeply interested in the design and historical context of antiques and is passionate about sharing her knowledge with her clients and the general public because, "Everything has a story. That's what makes this business so fascinating." </p>
      <button id="showmarie" class="aboutbuttons">Her Mission</button>
      <div id="mariemission" class="abouthidden">
        <p id="showmarieclick">Marie wants to impart her knowledge of vintage and antique items on her customers, but she is also focused on the sustainability of this way of shopping. She has recently expanded her collection of vintage garments because they are higher quality and more sustainable than those available in the fast fashion industry.</p>
        <!-- Photo taken by Xiaohan Gao -->
        <img src="images/aboutgarments.jpg" alt="Some of the garments available at The Vintage Industry" title="A stack of vintage garments at The Vintage Industry" />
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
