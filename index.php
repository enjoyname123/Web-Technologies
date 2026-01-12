<?php
/* =====================================================
   PHP COMPLETE COVERAGE – ECET ORIENTED
===================================================== */

/* =====================================================
   1. PHP VARIABLES
===================================================== */

/*
PHP is a dynamically typed language.
Data type is decided at runtime based on value.
*/

$a = 10;            // integer
$b = 10.5;          // float
$c = "PHP";         // string
$d = true;          // boolean

echo "<h2>1. Variables</h2>";
echo "Integer: $a <br>";
echo "Float: $b <br>";
echo "String: $c <br>";
echo "Boolean: $d <br>";

/* =====================================================
   2. STATIC vs DYNAMIC DATA TYPES
===================================================== */

/*
Dynamic typing:
Variable type changes automatically based on value
*/

$x = 10;
echo "<br>Dynamic type (int): $x <br>";
$x = "Ten";
echo "Dynamic type (string): $x <br>";

/*
Static variable:
Retains value between function calls
*/

function staticDemo() {
    static $count = 0;
    $count++;
    echo "Static count: $count <br>";
}

echo "<h2>2. Static Variable</h2>";
staticDemo();
staticDemo();
staticDemo();

/* =====================================================
   3. GLOBAL VARIABLE & ISSUE
===================================================== */

/*
Global variables are not accessible inside functions
unless declared using 'global' keyword
*/

$g = 100;

function globalIssue() {
    // echo $g;  // ERROR: undefined variable
}

function globalFix() {
    global $g;
    echo "Global variable inside function: $g <br>";
}

echo "<h2>3. Global Variable Issue</h2>";
globalFix();

/* =====================================================
   4. ARRAYS (ALL 3 TYPES)
===================================================== */

echo "<h2>4. Arrays</h2>";

/* 1. Indexed Array */
$indexed = array(10, 20, 30);

/* 2. Associative Array */
$assoc = array(
    "name" => "Sathya",
    "course" => "AI & ML"
);

/* 3. Multidimensional Array */
$multi = array(
    array(1, 2),
    array(3, 4)
);

echo "<b>Indexed Array:</b><br>";
foreach ($indexed as $v) {
    echo "$v ";
}
echo "<br>";

echo "<b>Associative Array:</b><br>";
echo $assoc["name"] . "<br>";
echo $assoc["course"] . "<br>";

echo "<b>Multidimensional Array:</b><br>";
echo $multi[0][1] . "<br>";

/* =====================================================
   5. ARRAY PREDEFINED FUNCTIONS
===================================================== */

echo "<h2>Array Predefined Functions</h2>";

$arr = array(30, 10, 20);

/*
count():
Returns total number of elements present in array
*/
echo "count(): " . count($arr) . "<br>";

/*
sort():
Arranges array elements in increasing order
*/
sort($arr);
echo "sort(): ";
print_r($arr);
echo "<br>";

/*
rsort():
Arranges array elements in decreasing order
*/
rsort($arr);
echo "rsort(): ";
print_r($arr);
echo "<br>";

/*
asort():
Arranges array in ascending order without changing keys
*/
$assoc = array("a"=>30, "b"=>10, "c"=>20);
asort($assoc);
echo "asort(): ";
print_r($assoc);
echo "<br>";

/*
ksort():
Arranges array using keys in ascending order
*/
ksort($assoc);
echo "ksort(): ";
print_r($assoc);
echo "<br>";

/*
array_push():
Adds elements to the end of the array
*/
array_push($arr, 40);
echo "array_push(): ";
print_r($arr);
echo "<br>";

/*
array_pop():
Removes the last element from array
*/
array_pop($arr);
echo "array_pop(): ";
print_r($arr);
echo "<br>";

/*
in_array():
Returns true if element is present, else false
*/
echo "in_array(20): ";
echo in_array(20, $arr) ? "True" : "False";
echo "<br>";

/*
array_merge():
Joins two or more arrays into one
*/
$arr2 = array(50, 60);
$merged = array_merge($arr, $arr2);
echo "array_merge(): ";
print_r($merged);
echo "<br>";

/* =====================================================
   6. FUNCTIONS
===================================================== */

echo "<h2>6. Functions</h2>";

/* Normal function */
function add($a, $b) {
    return $a + $b;
}

/* Function with default argument */
function greet($name = "User") {
    return "Hello $name";
}

echo "Add(5,3): " . add(5,3) . "<br>";
echo greet() . "<br>";
echo greet("Sathya") . "<br>";

/* =====================================================
   6. STRING PREDEFINED FUNCTIONS
===================================================== */

echo "<h2>String Predefined Functions</h2>";

$str = " php programming ";

/*
strlen():
Returns length of the string
*/
echo "strlen(): " . strlen($str) . "<br>";

/*
strtoupper():
Converts complete string to uppercase
*/
echo "strtoupper(): " . strtoupper($str) . "<br>";

/*
strtolower():
Converts complete string to lowercase
*/
echo "strtolower(): " . strtolower($str) . "<br>";

/*
ucfirst():
Converts first character to uppercase
*/
echo "ucfirst(): " . ucfirst($str) . "<br>";

/*
strrev():
Reverses the string and returns it
*/
echo "strrev(): " . strrev($str) . "<br>";

/*
strpos():
Finds position of an element in string
*/
echo "strpos('program'): " . strpos($str, "program") . "<br>";

/*
str_replace():
Replaces a string with another string
*/
echo "str_replace(): " . str_replace("php", "web", $str) . "<br>";

/*
trim():
Removes spaces from beginning and end
*/
echo "trim(): '" . trim($str) . "'<br>";

/*
substr():
Extracts a part of a string
*/
echo "substr(): " . substr($str, 1, 5) . "<br>";

/*
NOTE:
Except trim(), all above functions
just return the value.
Original string is not modified.
*/

/* =====================================================
   IMPORTANT NOTE (EXAM POINT)
===================================================== */

/*
PHP cannot be embedded into HTML
without PHP tags.
It must be written inside:
<?php  ?>
*/

/* =====================================================
   8. TYPE CHECKING FUNCTIONS
===================================================== */

echo "<h2>8. Type Checking</h2>";

echo "is_int(\$a): " . is_int($a) . "<br>";
echo "is_string(\$c): " . is_string($c) . "<br>";
echo "gettype(\$b): " . gettype($b) . "<br>";

/* =====================================================
   END OF PROGRAM
===================================================== */
?>
