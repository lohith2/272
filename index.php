<!DOCTYPE html>
<html lang="en">
<head>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
</head>
<body>
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64"><b>Freakstore</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">About</a> 
    <a href="#products" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Products</a> 
    <a href="#news" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">News</a> 
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>
  </div>
</nav>
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Welcome to freakstore</b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Crazy collections</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <div class="w3-container">
        <h3>One Stop destination for all fashion products</h3>
      </div>
  </div>

  
  <div class="w3-container" id="about" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>About</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <div class="w3-container">
        <h3>Here we have all kinds of clothing categorized into different sections. All the trendy designs are available at great offers.</h3>
      </div>

    <p>
    </p>
  </div>
  
  <div class="w3-container" id="products" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Products</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <div class="w3-row-padding">
        <div class="w3-half">
          <img src="https://asset2.cxnmarksandspencer.com/is/image/mands/20220615_LF_MW_Autograph-summer_BSLH-9430_EW_01?$editorial_780x780$" style="width:100%" alt="Summer collection">
        <div><h2>Summer collection</h2></div>
          <img src="https://www.angeljackets.com/guides/wp-content/uploads/2020/01/Travel-Outfit-for-winter.jpg" style="width:100%" alt="Winter Collection">
          <div><h2>Winter Collection</h2></div>
          <img src="https://asset1.cxnmarksandspencer.com/is/image/mands/Tailored-Fit-Pure-Wool-Birdseye-2-Piece-Suit-2/DS_772427eaa1b9d9ae783adb1499f86b2e_1?$PDP_MAIN_CAR_LG$" style="width:100%" alt="Premium Clothing">
          <div><h2>Premium Clothing</h2></div>
        </div>
      </div>
    
  </div>

  <div class="w3-container" id="news" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>News</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <h2>Latest news</h2>
    <a href="https://www.fibre2fashion.com/news/textile-news/italy-s-textile-industry-projected-to-make-full-recovery-in-2022-283468-newsdetails.htm">Textile industry projected to make full recovery</a><br></br>
    <a href="https://news.ncsu.edu/2022/09/textile-bowl-in-national-spotlight/">Textile bowl in nation spotlight</a>

  </div>
  <div class="w3-container" id="news" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Contact</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round"></div>
    <?php echo file_get_contents('location.txt'); ?>
  </div>

</div>

</body>
</html>
