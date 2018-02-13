<?php

//set page headers
$page_title = "Read One Product";
include_once "layout_header.php";

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: MISSING ID');

//Include objects

include_once 'config/database.php';
include_once 'objects/product.php';
include_once 'objects/category.php';

//get database connection

$database = new Database();
$db = $database->getConnection();

//prepare objects

$product = new Product($db);
$category = new Category($db);

//set ID property od product to be read
$product->id = $id;

//read one product
$product->readOne();

// HTML table for displaying a product details
echo "<table class='table table-hover table-responsive table-bordered'>";

echo "<tr>";
echo "<td>Name</td>";
echo "<td>{$product->name}</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Price</td>";
echo "<td>&#36;{$product->price}</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Description</td>";
echo "<td>{$product->description}</td>";
echo "</tr>";

echo "<tr>";
echo "<td>Category</td>";
echo "<td>";
// display category name
$category->id = $product->category_id;
$category->readName();
echo $category->name;
echo "</td>";
echo "</tr>";

echo "</table>";


//read product button
echo "<div class='right-button-margin'>";
echo "<a href='index.php' class='btn btn-primary pull-right'>";
echo "<span class='glyphicon glyphicon-list'></span>Read products";
echo "</a>";
echo "</div>";

//set footer
include_once "layout_footer.php";

?>




