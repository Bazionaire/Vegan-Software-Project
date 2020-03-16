<?php
session_start();
?>
<!HEADER BEGINS>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vegan Application</title>
  
    <link rel="stylesheet" type="text/css" href="gallery.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
</head>
<body>
    <header>
        <?php include ("Header.php"); ?>

    </header>
    <main>
      <section class="banner">
        <div class="slider">
          <div id="slider" class="carousel slide carousel-fade" data-ride="carousel">
              <div class="carousel-inner" style="height: 700px">
                <div class="carousel-item active">
                  <img src="Images/644455-POO5SL-571.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption w3-display-middle" style="color: white">
                       <h1>VEGAN APPLICATION</h1>
                       <h2>Veganism is not a sacrifice</h2>
                       <p> "I have no doubt that it is a part of the destiny of the human race, in its gradual improvement, to leave off eating animals, as surely as the savage tribes have left off eating each other when they came in contact with the more civilized."

                          Henry David Thoreau </p>
                  </div>
                </div>
                <div class="carousel-item" style="height: 700px">
                  <img src="Images/4884.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption w3-display-middle" >
                      <h1>THIS APP WAS CREATED BY GROUP G</h1>
                      <h2>Animals are not products</h2>
                      <p>  "A man can live and be healthy without killing animals for food; therefore, if he eats meat, he participates in taking animal life merely for the sake of his appetite. And to act so is immoral."

                          Leo Tolstoy  </p>
                 </div>
                </div>
                <div class="carousel-item" style="height: 700px">
                  <img src="Images/person-holding-white-ceramic-bowl-with-red-liquid-3832338.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption w3-display-middle" style="color: black" >
                      <h1>VEGANISM IS A WAY OF LIFE</h1>
                      <h2>All life deserves respect, dignity, and compassion</h2>
                      <p>  “I personally chose to go vegan because I educated myself on factory farming and cruelty to animals, and I suddenly realized that what was on my plate were living things, with feelings. And I just couldn’t disconnect myself from it any longer.” <br>

                          Ellen DeGeneres </p>
                 </div>
                </div>
                <div class="carousel-item " style="height: 700px;">
                  <img src="Images/close-up-photo-of-cakes-near-glass-window-2773606.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption w3-display-middle " style="color: black" >
                      <h1>VEGANISM IS A WAY OF LIFE</h1>
                      <h2>All life deserves respect, dignity, and compassion</h2>
                      <p>  “I personally chose to go vegan because I educated myself on factory farming and cruelty to animals, and I suddenly realized that what was on my plate were living things, with feelings. And I just couldn’t disconnect myself from it any longer.” <br>

                          Ellen DeGeneres </p>
                 </div>
                </div>
                <ol class="carousel-indicators">
                  <li data-target="#slider" data-slide-to="0" class="active"></li>
                  <li data-target="#slider" data-slide-to="1"></li>
                  <li data-target="#slider" data-slide-to="2"></li>
                  <li data-target="#slider" data-slide-to="3"></li>
               </ol>
              </div>
        </div>
    </section>




    <section class="about-us">
         <div class="container">
               <div class="info">
                 <div class="vegan-description padding-right animate-left">
                    <div class="global-headline">
                        <h2 class="sub-headline">Why Vegan?</h2>
                        <h1 class="headline">Vegetarians vs Vegan</h1>
                    </div>
                    <p class="about-text">
                     <p id="info">

                         I was vegetarian for five years before that. The difference between vegetarians and vegans is that vegetarians
                         don’t eat any animal flesh (beef, chicken, fish, etc.), but vegans go further, and also don’t consume or
                         use anything that comes from an animal (egg, dairy, leather, fur, etc.
                         <br><br>
                         There are different varieties of vegan diets. The most common include:
                         Whole-food vegan diet: A diet based on a wide variety of whole plant foods such as fruits, vegetables,
                         whole grains, legumes, nuts and seeds.
                         Raw-food vegan diet: A vegan diet based on raw fruits, vegetables, nuts, seeds or plant foods cooked at
                         temperatures below 118°F (48°C) (1Trusted Source).
                         80/10/10: The 80/10/10 diet is a raw-food vegan diet that limits fat-rich plants such as nuts and
                         avocados and relies mainly on raw fruits and soft greens instead. Also referred to as the low-fat,
                         raw-food vegan diet or fruitarian diet.
                         <br><br>
                         The starch solution: A low-fat, high-carb vegan diet similar to the 80/10/10 but that focuses on cooked
                         starches like potatoes, rice and corn instead of fruit.
                         Raw till 4: A low-fat vegan diet inspired by the 80/10/10 and starch solution. Raw foods are consumed
                         until 4 p.m., with the option of a cooked plant-based meal for dinner.
                         The thrive diet: The thrive diet is a raw-food vegan diet. Followers eat plant-based, whole foods that
                         are raw or minimally cooked at low temperatures.
                         Junk-food vegan diet: A vegan diet lacking in whole plant foods that relies heavily on mock meats and
                         cheeses, fries, vegan desserts and other heavily processed vegan foods.
                         Although several variations of the vegan diet exist, most scientific research rarely differentiates
                         between different types of vegan diets.

                     </p>
                    </p>
                    <a href="about.php" class="btn body-btn"> <strong>About us</strong></a>
                 </div >
                    <div class="about-pic" style="margin-left: 50px">
                      <img src="Images/CHQ_vegan2.gif">
                    </div>
               </div>

         </div>

    </section>
    <section style="margin-bottom: 15px">
      <div class="album-sec" >
         <div class="container">
            <div class="row">
              <div class="col-md-12">
                   <div class="header text-center">
                        <h2>Our Team</h2>
                       <a href="about.php">Meet the brains behind the vegan app</a>
                   </div>
                </div>

            </div>

         </div>


    </div>
    </section>

    </main>
<footer>
    <?php include("Footer.php");?>
</footer>

</body>
</html>


