<?php

header("Content-Type: application/json; charset=UTF-8");
// Create connection
$conn = new mysqli("localhost","root", "","oceanstars");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully";

$obj = $_GET["x"];
$patra=json_decode($obj);
$result = mysqli_query($conn, "SELECT * FROM `".$patra->table."`");
if ($result==false) {
	echo "error query";
}
if (mysqli_num_rows($result) > 0) {
    // output data of each row
     //echo "<h1>the rows=".mysqli_num_rows($result)."</h1>";
    // echo "<img class='card-img-top img-fluid' src='images/istanbul.jpg' alt='Card image cap' /> ";
    $row = mysqli_fetch_assoc($result);
    echo "<div class='carousel-item col-md-4 active'>"
    	."<div class='card' >"
    	."<img class='card-img-top img-fluid' src=".$row["image"]." alt='Card image cap' />" 
    	. '<div class="card-body">'
    	.'<h4 class="card-title">'.$row["name"].'</h4>'
    	.'<div class="city"><span class="data-field">City:'.$row["City"].'</span></div>'
    	.'<div class="country"><span class="data-field">Country:'.$row["Country"].'</span></div>'
    	.'<div class="price"><span class="data-field">Price:'.$row["cost"].'</span></div>'
    	.'<div class="date"><span class="data-field">Date:'.$row["tourDate"].'</span></div>'
    	.'<div class="days"><span class="data-field">Number of days:'.$row["dayNo"].'</span></div>'
    	.'<div class="rate"><span class="data-field">Rating:'.$row["rate"].'</span></div>'
    	.'<br>'
    	.'<button>BOOK NOW</button>'
    	.'</div>'
    	.'</div>'
    	.'</div>';
    while($row = mysqli_fetch_assoc($result)) {
    echo "<div class='carousel-item col-md-4 '>"
    	."<div class='card' >"
    	."<img class='card-img-top img-fluid' src=".$row["image"]." alt='Card image cap' />" 
    	. '<div class="card-body">'
    	.'<h4 class="card-title">'.$row["name"].'</h4>'
    	.'<div class="city"><span class="data-field">City:'.$row["City"].'</span></div>'
    	.'<div class="country"><span class="data-field">Country:'.$row["Country"].'</span></div>'
    	.'<div class="price"><span class="data-field">Price:'.$row["cost"].'</span></div>'
    	.'<div class="date"><span class="data-field">Date:'.$row["tourDate"].'</span></div>'
    	.'<div class="days"><span class="data-field">Number of days:'.$row["dayNo"].'</span></div>'
    	.'<div class="rate"><span class="data-field">Rating:'.$row["rate"].'</span></div>'
    	.'<br>'
    	.'<button>BOOK NOW</button>'
    	.'</div>'
    	.'</div>'
    	.'</div>';
          }
} else {
    echo "0 results";
}

//echo json_encode($outp);
?>

