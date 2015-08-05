<?php 
require_once 'rectangle.php';

$shape1 = new Rectangle(10, 13);
echo "shape 1" . PHP_EOL;
echo 'Height = ' . $shape1->getHeight() . PHP_EOL;
echo 'Width = ' . $shape1->getWidth() . PHP_EOL;
echo "Perimeter = " . $shape1->perimeter() . PHP_EOL;
echo "Area = " . $shape1->area() . PHP_EOL;
// echo $shape1->isSquare() . PHP_EOL;
echo "===========================================" . PHP_EOL;

$shape2 = new Square(32);
echo "shape 2" . PHP_EOL;
echo 'Height = ' . $shape2->getHeight() . PHP_EOL;
echo 'Width = ' . $shape2->getWidth() . PHP_EOL;
echo "Perimeter = " . $shape2->perimeter() . PHP_EOL;
echo 'Area = ' . $shape2->area() . PHP_EOL;
// echo $shape2->isSquare() . PHP_EOL;
echo "===========================================" . PHP_EOL;


$shape3 = new Rectangle(7, 24);
echo "shape 3" . PHP_EOL;
echo 'Height = ' . $shape3->getHeight() . PHP_EOL;
echo 'Width = ' . $shape3->getWidth() . PHP_EOL;
echo "Perimeter = " . $shape3->perimeter() . PHP_EOL;
echo "Area = " . $shape3->area() . PHP_EOL;
// echo $shape3->isSquare() . PHP_EOL;
echo "===========================================" . PHP_EOL;


$shape4 = new Square(34);
echo "shape 4" . PHP_EOL;
echo 'Height = ' . $shape4->getHeight() . PHP_EOL;
echo 'Width = ' . $shape4->getWidth(). PHP_EOL;
echo "Perimeter = " . $shape4->perimeter() . PHP_EOL;
echo 'Area = ' . $shape4->area() . PHP_EOL;

// echo $shape4->isSquare() . PHP_EOL;
echo "===========================================" . PHP_EOL;
