<?php
header("Content-type:text/xml");
header("Access-Control-Allow-Origin: *");

// Connect to db and query student table items.
// $dbconn = mysqli_connect("localhost", "root", "", "testxml");
// mysqli_select_db($dbconn, "testxml");
// $query = mysqli_query($dbconn, "select * from student");

// // Create SimpleXMLElement instance.
// $xml = new SimpleXMLElement('<list/>');
// while ($row = mysqli_fetch_assoc($query)) {
//     $student = $xml->addChild("student");
//     $student->addChild("name", $row["name"]);
//     $student->addChild("matric_no", $row["matric_no"]);
    
//     $marks = $student->addChild("marks");
//     $marks->addChild("cw", $row["cw"]);
//     $marks->addChild("fe", $row["fe"]);
// }

$dbconn = mysqli_connect("localhost", "root", "", "exercise3");
mysqli_select_db($dbconn, "exercise3");
$query = mysqli_query($dbconn, "select * from cosmeticproduct");

// Create SimpleXMLElement instance.
$xml = new SimpleXMLElement('<list/>');
while ($row = mysqli_fetch_assoc($query)) {
     $product = $xml->addChild("product");
     $product->addChild("pId", $row["pId"]);
     $product->addChild("pName", htmlspecialchars($row["pName"]));
     $product->addChild("pDesc", htmlspecialchars($row["pDesc"]));
     $product->addChild("pImgPath", htmlspecialchars($row["pImgPath"]));
     $product->addChild("pPrice", $row["pPrice"]);
     $product->addChild("pDiscount", $row["pDiscount"]);
}

mysqli_close($dbconn);
echo $xml->asXML();
?>
