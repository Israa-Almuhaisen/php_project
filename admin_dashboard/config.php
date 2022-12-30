<?php 
$server="localhost";
$userName="root";
$password="";
$dbName="projectphp5";

$conn= mysqli_connect($server,$userName,$password,$dbName);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}else{
    echo "you are connected."."<br>";
}
?>

<?php

/////// INSERT
// $sql = "INSERT INTO categories (category_name,) VALUES ('Sport',)";

// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

$sql = "UPDATE categories SET category_last_updated_at = 'new_value' WHERE column2 = 'value'";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$sql = "SELECT * FROM categories";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
    // Process the row data here
    
    echo $row['category_id']. " " . $row['category_name']."<br>";
}
mysqli_close($conn);
?>

