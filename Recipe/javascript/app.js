
var ingredients = [];
 // preventing the cors message
jQuery.ajaxPrefilter(function(options) {
   if (options.crossDomain && jQuery.support.cors) {
       options.url = 'https://cors-anywhere.herokuapp.com/' + options.url;
   }
});

$(document).ready(function(){
   $('.modal').modal();
});
  
 
//searching for recipe with the vegan api parameters attached.
function displayRecipes() {
    var checks=["chicken","lamb","fish"]
    for(var c = 0 ; c <ingredients.length;c++){
        if(ingredients[c]==checks){
            alert("You are not vegan, we go Bananas over here. we don't GO HAM!")
            return false ;
        }
    }

    $.ajax({
       url: 'https://api.edamam.com/search?q=' + ingredients + '&app_id=7dd554c1&app_key=683c69acac45bb61851b55f28768d0fd&health=vegan'
   }).then(function(response) {

       var intCalories = (response.hits[0].recipe.calories)/(response.hits[0].recipe.yield);
       var calories = (Math.floor(intCalories));
       var results = response.hits;


// displaying the recipes
       $('#recipeDisplay').html('');

       for (i = 0; i < results.length; i++) {
           var intCalories = (results[i].recipe.calories)/(results[i].recipe.yield);
           var calories = (Math.floor(intCalories));
           var recipeDiv = $('<div>'); // construct a div tag
           var recipeImage = $('<img>'); // construct a image tag
           var recipeCaption = $('<div>');
           var recipeBtnDiv = $('<div>');
           var caloriesP = $('<p>');
           recipeCaption.addClass('caption');
           recipeCaption.append($('<div>').text(results[i].recipe.label).addClass('recipeName'));
           recipeCaption.addClass('text-center');
           caloriesP.text(calories + ' calories per serving');
           recipeCaption.append(caloriesP)
           recipeBtnDiv.append($('<a>').append($('<button>').addClass('btn recipeBtn').text('Go to recipe')).attr('href',results[i].recipe.url).attr('target','_blank'));
          
           recipeCaption.append(recipeBtnDiv);
           recipeImage.attr('src', results[i].recipe.image);
           recipeDiv.addClass('thumbnail col-md-4 recipe');
           recipeDiv.append(recipeImage);
           recipeDiv.append(recipeCaption);
           $('#recipeDisplay').prepend(recipeDiv);

          
       };
   });
};

////searching the ingredients button and resetting the search bar
$('#ingredientsSearchBtn').on('click', function(event){
   event.preventDefault();
   var ingredient = $('#ingredientsSearchBar').val().trim();
   var ingredientStr = String(ingredient);

   ingredients.push(ingredient);
   $('#ingredientsSearchBar').val('');
   $('#ingredients-list').empty();
   displayRecipes();
   console.log(ingredients);
});
