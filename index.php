<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="index.css" />
   <script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
   <script src='index.js'></script>

   <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenLite.min.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSPlugin.min.js"></script>
   <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/plugins/CSSRulePlugin.min.js"></script>

	<title>Gallery</title>
</head>
<body>
   <h1><center>Stuff</center></h1>

   <div id="slideout">
      <img src="imgs/small_menu.png" /> 
      <div id="slideout_inner">
         <li><a onclick='alert("about")'>About</a></li>
         <li><a onclick='alert("shop")'>Shop</a></li>
         <li><a onclick='alert("contact")'>Contact</a></li>
      </div>
   </div>

   </br></br></br>
	<!-- <div style='width:30%; height:30%' id=galleryDiv></div> -->
	<div id='galleryDiv'></div>

   <div id='desc'>
      <img id='biggestWaffle'>
      </br>
      This amazing item is only $470.47
   </div>

   <div id='waffleHolder'>
   </div>

   <div id='waffleDisplayBG'>
   </div>



	<!-- 
	###############################################################
	just include this script tag and change the kitchen attribute 
	to the name of the div where the waffle gallery should be
	############################################################### 
	-->
   <script>
      var image_names = [];
 
      <?php
         $imgDirectory = 'gallery/imgs/thumb/';
         $entries = scandir($imgDirectory);

         //skip first 2 (. and ..)
         for ($i = 2; $i < count($entries); ++$i) {
            $filepath = $imgDirectory . $entries[$i];
            echo 'image_names.push("' . $filepath . '");';
         }
      ?>
   </script>

	<script src="gallery/FrozenWaffles.js" kitchen="galleryDiv"></script>


</body>
</html>
