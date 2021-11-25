<?php

// esenio shecvale shen bazas ro moergos !!!!!!!!
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password , $dbname);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

// velebis saxelebic scorad gamouitane
// daakvirdi tables saxeli scorad iyos

//aedan !!!!!!!!!!!!!

// $sql = "SELECT * FROM products";

// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     echo "id: " . $row['id']." title: " . $row['title']." image: " . $row['image']." description: " . $row['description']. " price: " . $row['price'];
//     echo "<br>";

//   }
// } else {
//   echo "0 results";
// }

//aqamde  !!!!!!!!!!!!!



// ============================================================= davaleba 1 =============================================================
// gamoitane mxolod iseti titlebi romlebic ar aris carieli
// $sql = "SELECT * FROM products";

// $result = mysqli_query($conn, $sql);


// if (mysqli_num_rows($result) > 0) {
//   // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
//     // echo "title: " . $row['title'];
//     // echo "<br>";

//     if ($row['title']){
//         echo " title:  " . $row['title'];
//         echo "<br>";
//     }
//   }
// } else {
//   echo "0 results";
// }


// ============================================================= davaleba 2 =============================================================
// gamoitane mxolod iseti titlebi
// romlebic ar aris carieli DA magis image DA description AR ARIS carieli



// ============================================================= davaleba 3 =============================================================
// gamoitane mxolod iseti titlebi
// romlebic ar aris carieli DA magis image DA description AR ARIS carieli
// daitvale ramdeni row gamova eseti da dabechde ekranze.
// magalitadn jamurad gamovida 7 cali
//




// ============================================================= examples  =============================================================


// if ($a == 1 && $b == 1) {
// true
// } else {
// false
// }
