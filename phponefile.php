<?php
// PHP Essentials in One File

// 1. Basic Syntax
// Variables
$name = "PHP";
$age = 25;
$isDeveloper = true;

// Data Types
$str = "Hello";      // String
$num = 123;          // Integer
$flt = 123.45;       // Float
$arr = array(1, 2, 3);  // Array
$obj = (object) ["name" => "John", "age" => 30]; // Object

// Operators
$sum = $num + $age;       // Arithmetic Operators
$isEqual = ($num === 123);  // Comparison Operators
$isAdult = ($age >= 18) && $isDeveloper;  // Logical Operators

// 2. Control Structures
// Conditionals
if ($age > 18) {
    echo "Adult";
} elseif ($age === 18) {
    echo "Just became an adult";
} else {
    echo "Not an adult";
}

// Switch case
$grade = "A";
switch ($grade) {
    case "A":
        echo "Excellent";
        break;
    case "B":
        echo "Good";
        break;
    default:
        echo "Needs Improvement";
}

// Loops
for ($i = 0; $i < 5; $i++) {
    echo $i;
}
$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}

// 3. Functions
// Function Declaration
function greet($name) {
    return "Hello, $name";
}
echo greet("PHP");

// Anonymous Functions
$square = function($x) {
    return $x * $x;
};
echo $square(4);

// Closures
function counter() {
    $count = 0;
    return function() use (&$count) {
        return ++$count;
    };
}

$myCounter = counter();
echo $myCounter(); // 1
echo $myCounter(); // 2

// 4. Classes and Objects
// Class Definition and Instantiation
class Animal {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function speak() {
        echo "{$this->name} makes a noise";
    }
}

class Dog extends Animal {
    public function speak() {
        echo "{$this->name} barks";
    }
}
$dog = new Dog("Rex");
$dog->speak();

// 5. Error Handling
try {
    throw new Exception("An error occurred");
} catch (Exception $e) {
    echo $e->getMessage();
}

// 6. File Handling
$file = fopen("example.txt", "w");
fwrite($file, "Hello, PHP File Handling!");
fclose($file);

// 7. Additional PHP Features
// Associative Arrays
$person = [
    "name" => "Alice",
    "age" => 25,
    "isDeveloper" => true
];

// Foreach Loop
foreach ($person as $key => $value) {
    echo "$key: $value\\n";
}

// Functions for Array Manipulation
$mergedArray = array_merge($arr, [4, 5]);
print_r($mergedArray);

// Superglobal Variables and Forms
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    echo "Welcome, $username!";
}
?>

