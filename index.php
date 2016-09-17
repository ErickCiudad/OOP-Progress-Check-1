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

$man = new Nature();
$woman = new Nature();

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

   ?>
</html>
