<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Progress Check 1</title>
    <?php include("class.php"); ?>
  </head>
  <body style="text-align: center;">

  </body>
  <?php
  ///////////////AUTOLOAD///////////////
  spl_autoload_register(function($class_name){
    include $class_name . '.php';
  });

  $foo = new foo;
  $bar = new bar;

  // $bar->firstSin();
  ///YOU CAN'T EXTEND A FINAL FUNCTION
  //UNCOMMENT $bar->sayHello(); & LINES 3-5 ON BAR.PHP TO GET AN ERROR
  //HI MR. CLAWSON!
  ///////////////AUTOLOAD///////////////

//you can't instatiate an abstract class
$man = new people();
$woman = new people();

$man->setType("Adam");
$woman->setType("Eve");

echo "This person is " . $man->getType() . '.' . '<br />';
echo "This person is " . $woman->getType() . '.' . '<br />';

echo '<hr />';///

$lion = new animals("lion");
echo "There are " . $lion->getType() . 's ' . 'and' . '<br />';

$wolf = new animals("wolve");
echo $wolf->getType() . 's ' . 'and' . '<br />';

$bear = new animals("bear");
echo $bear->getType() . 's ' . 'and' . '<br />';

$bird = new animals("bird");
echo $bird->getType() . 's' . '.' . '<br />';

echo '<hr />';///

$tree = new plants("tree");
echo "There are " . $tree->getType() . 's ' . 'and' . '<br />';

$flower = new animals("flower");
echo $wolf->getType() . 's ' . 'and' . '<br />';

$bear = new animals("bushe");
echo $bear->getType() . 's ' . 'and' . '<br />';

$bird = new animals("mos");
echo $bird->getType() . 's'  . '.' . '<br />' ;

echo '<hr />';///

echo "And they all live in this " . $earth . '<br />';

   ?>
</html>
