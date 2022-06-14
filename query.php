<?php
    include ('connect.php');

    // $create = "CREATE TABLE customer
    // (
    //     CustomerID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //     CustomerName varchar(30),
    //     EmailAddress varchar(50),
    //     Password varchar(30),
    //     PhoneNumber varchar(30),
    //     Address varchar(50),
    //     Profile text,
    //     ViewCount int
    // )";

    // $create = "CREATE TABLE contact_us
    // (
    //     MessageID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    //     FirstName varchar(30),
    //     LastName varchar(30),
    //     EmailAddress varchar(50),
    //     PhoneNumber varchar(30),
    //     Message varchar(1000)
    // )";

    $create = "CREATE TABLE producttype
    (
        ProductTypeID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
        ProductTypeName varchar(30),
        ProductCategory varchar(30),
        Company varchar(30)
    )";

    $query = mysqli_query($connect, $create);
        
    if($query)
    {
        echo "<p>Product Type Table Query Successful</p>";
    }
?>
