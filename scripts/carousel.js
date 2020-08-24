// When the document is ready
$(document).ready(function() {
  // List of images
  var images = [
    "images/gallery_1.jpg",
    "images/gallery_2.jpg",
    "images/gallery_3.jpg",
    "images/gallery_4.jpg",
    "images/gallery_5.jpg",
    "images/gallery_6.jpg",
    "images/gallery_7.jpg",
    "images/gallery_8.jpg",
    "images/gallery_9.jpg",
    "images/gallery_10.jpg",
    "images/gallery_11.jpg",
    "images/gallery_12.jpg",
    "images/gallery_13.jpg",
    "images/gallery_14.jpg",
  ];

  // IMAGE CREDITS
  // Photo 1: taken by Xiaohan Gao
  // Photo 2: taken by Marie (client)
  // Photo 3: taken by Xiaohan Gao
  // Photo 4: taken by Marie (client)
  // Photo 5: taken by Marie (client)
  // Photo 6: taken by Marie (client)
  // Photo 7: taken by Abigail Zhong
  // Photo 8: taken by Xiaohan Gao
  // Photo 9: taken by Xiaohan Gao
  // Photo 10: taken by Xiaohan Gao
  // Photo 11: taken by Xiaohan Gao
  // Photo 12: taken by Marie (client)
  // Photo 13: taken by Xiaohan Gao
  // Photo 14: taken by Marie (client)


  // The index of the image that is currently displayed
  var currentIndex = 0;

  //The current image
  var currentImage = null;

  // When the forward button is clicked
  $("#slideshowNext").click(function () {
    if (currentIndex == 13) {
      currentIndex = 0;
    } else {
      currentIndex = currentIndex + 1;
    }
    currentImage = images[currentIndex];
    $("#slideshow").attr("src", currentImage);
  });

  // When the back button is clicked
  $("#slideshowBack").click(function () {
    if (currentIndex == 0) {
      currentIndex = 13;
    } else {
      currentIndex = currentIndex - 1;
    }
    currentImage = images[currentIndex];
    $("#slideshow").attr("src", currentImage);
  });

  $("#slideshowBack2").click(function () {
    if (currentIndex == 0) {
      currentIndex = 13;
    } else {
      currentIndex = currentIndex - 1;
    }
    currentImage = images[currentIndex];
    $("#slideshow").attr("src", currentImage);
  });
});
