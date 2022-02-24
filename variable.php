<?php
// Write your code below:
$var1 = "Bob";
echo $var1;
// var1 holds the value "Bob"


$var1 = "John";
echo $var1;
// var1 now holds the value "John"

$favorite_food = "Red curry with eggplant, green beans, and peanuts";
echo $favorite_food;

// Prints: Red curry with eggplant, green beans, and peanuts

//calculations
$dog_name = "Tadpole";
echo "My dog is named " . $dog_name;

// Prints: My dog is named Tadpole

$dog_name = "Tadpole";
$favorite_food = "salmon";
$color = "brown";


echo "I have a " . $color . " dog named " . $dog_name . " and her favorite food is " . $favorite_food . ".";
// Prints: I have a brown dog named Tadpole and her favorite food is salmon.


$noun = "programmer";
$adjective = "serious";
$verb = "lern";

echo "The world's most beloved  $noun was very $adjective and loved to $verb every single day.";

$toy = "frisbee";
echo "Alex likes playing with $toys";

// Fill in the blanks in the code below:
$noun = "helicopter";
$adjective = "powerful";
$verb = "scream";

echo "The world's most beloved $noun was very $adjective and loved to $verb every single day.";


//Fix the code below and uncomment it:

echo "\nI have always been obsessed with ${noun}s. I'm ${adjective}ish. I'm always ${verb}ing.";


// reassignement of a variable
$favorite_food = "Red curry with eggplant";
echo $favorite_food; // Prints: Red curry with eggplant


// $favorite_food = "Red curry with eggplant";
echo $favorite_food; // Prints: Red curry with eggplant


// Reassign the value of $favorite_food to a new string
$favorite_food = "Pizza";

echo $favorite_food; // Prints: Pizza

$movie = "The Matrix";
$old_favorite = $movie;

echo "I'm a fickle person, my favorite movie used to be $movie.";

// Add a statement here:
$movie = "Dunkirk";

echo "\nBut now my favorite is $movie.";

// Add a statement below:
echo "\nBut I'll always have a special place in my heart for $old_favorite.";


/* Imagine a lot of code here */  
  $very_bad_unclear_name = "15 chicken wings";

// Write your code here:
  $order =& $very_bad_unclear_name; 

  $order .= ", 1 cheeseburger";

  $order .= ", 3 side salads";
    
  // Don't change the line below
  echo "\nYour order is: $very_bad_unclear_name.";

