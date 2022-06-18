<?php
    include('connect.php');

    if(isset($_POST['btnregister']))
    {
        $producttypename = $_POST['txtproducttype'];
        $company = $_POST['txtcompany'];

        $select = "SELECT * FROM producttype where ProductTypeName = '$producttypename'";

        $query = mysqli_query($connect, $select);

        $count = mysqli_num_rows($query);
        if($count > 0)
        {
            echo "<script>alert('Product Type Registration Unsuccessful')</script>";
        }
        else
        {
            $insert = "INSERT INTO producttype(ProductTypeName, Company)
            values('$producttypename', '$company')";

            $query = mysqli_query($connect, $insert);

            if($query)
            {
                echo "<script>alert('Product Type Registered Successfully')</script>";
                echo "<script>window.location('ProductTypeRegistrationForm.php')</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Type Registration Form</title>
</head>
<body>
    <form action="producttyperegistration.php" method="POST" enctype="multipart/form-data">
        <table border="1" align="center" width="500px">
            <tr>
                <td colspan="2" align="center"><h2>Product Type Registration</h2></td>
            </tr>
            <tr>
                <td>Product Type</td>
                <td>
                    <input type="text" name="txtproducttype" required placeholder="Enter Product Type">
                </td>
            </tr>
            <tr>
                <td>Company</td>
                <td>
                    <input type="text" name="txtcompany" required placeholder="Enter Company">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnregister" value="Register">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>