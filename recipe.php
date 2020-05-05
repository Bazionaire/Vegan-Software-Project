<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">

   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
<!--    problem-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   <link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="Recipe/css/style.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link rel="shortcut icon" href="dist/img/VEGAN%20PROJECT%20LOGO.png" type="image/x-icon">
</head>


<body>
<header>
<?php include ("Header.php"); ?>
</header>

   <div class="row" align="Center">
       <div class="col-md-12">
               <div class="panel panel-default">
                   <div class="panel-heading">
                       <h3>Search for Recipe</h3>
                   </div>
                   <div class="panel-body">
                       <form>
                           <div class="form-group " align="Center">
                               <input type="search" class="form-control" id="ingredientsSearchBar" placeholder="Type a ingredient you have" >
                               <button type="submit" class="btn btn-default" id="ingredientsSearchBtn">Search</button>
                           </div>
                       </form>
                   </div>
               </div>
       </div>
   </div>
       <div class ="row"> <!--// for displaying recipes-->
       <div class="col-md-12">
           <div id="recipeDisplay" class="col-md-12">

           </div>
       </div>
   </div>
   </div>
</div>



<script src="Recipe/javascript/app.js"></script>
   <?php include("Footer.php") ?>
</body>
</html>
