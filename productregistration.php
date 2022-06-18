<?php
    include('connect.php');

    if(isset($_POST['btnSave']))
    {
        $productname = $_POST['txtproductname'];
        $price = $_POST['txtprice'];
        $year = $_POST['dateproduct'];
        $quantity = $_POST['numberquantity'];
        $description = $_POST['txtdescription'];
        $cboType = $_POST['cboType'];

        $image1 = $_FILES['productimage1']['name'];
        $folder = "images/";
        $filename1 = $folder.'_'.$image1;
        $copy = copy($_FILES['productimage1']['tmp_name'], $filename1);

        if(!$copy)
        {
            echo "<p>Cannot Upload Product Image</p>";
            exit;
        }

        $image2 = $_FILES['productimage2']['name'];
        $folder = "images/";
        $filename2 = $folder.'_'.$image2;
        $copy = copy($_FILES['productimage2']['tmp_name'], $filename2);

        if(!$copy)
        {
            echo "<p>Cannot Upload Product Image</p>";
            exit();
        }

        $select = "SELECT * FROM product where ProductName = '$productname'";
        $query = mysqli_query($connect, $select);
        $count = mysqli_num_rows($query);
        if($count > 0)
        {
            echo "<scritp>alert('Product Registration Unsuccessful')</script>";
            echo "<script>window.location='ProductEntry.php'</script>";
            exit();
        }
        else
        {
            $insert = "INSERT INTO product(ProductName, Price, Year, Quantity, ProductImage1, ProductImage2, Description, ProductTypeID)
            values('$productname', '$price', '$year', '$quantity', '$filename1', '$filename2', '$description', '$cboType')";

            $query = mysqli_query($connect, $insert);

            if ($query)
            {
                echo "<script>alert('Product Registration Successful')</script>";
                echo "<script>window.location='productregistration.php'</script>";
            }
            else
            {
                echo "<p> Error in product entry in".mysqli_error($connect)."</p>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Entry Form</title>
</head>
<body>
    <form method="POST" action="productregistration.php" enctype="multipart/form-data">
        <fieldset>
            <legend>Product Registration</legend>
            <table>
                <tr>
                    <td>Product Name</td>
                    <td>
                        <input type="text" name="txtproductname" placeholder="Enter the Product Name" required>
                    </td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td>
                        <input type="text" name="txtprice" placeholder="Enter the price" required>
                    </td>
                </tr>
                <tr>
                    <td>Year</td>
                    <td>
                        <input type="month" name="dateproduct" placeholder="Enter the Product Year" required>
                    </td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td>
                        <input type="number" name="numberquantity" required>
                    </td>
                </tr>
                <tr>
                    <td>Product Image 1</td>
                    <td>
                        <input type="file" name="productimage1" required>
                    </td>
                </tr>
                <tr>
                    <td>Product Image 2</td>
                    <td>
                        <input type="file" name="productimage2" required>
                    </td>
                </tr>
                <tr>
                    <td>Product Description</td>
                    <td>
                        <textarea name="txtdescription" id="" cols="30" rows="10"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Product Type</td>
                    <td>
                        <select name="cboType">
                            <option value="">Choose Product Type</option>
                            <?php
                                $query = "SELECT * FROM producttype";
                                $ret = mysqli_query($connect, $query);
                                $count = mysqli_num_rows($ret);
                                for ($i = 0; $i < $count; $i++)
                                {
                                    $row = mysqli_fetch_array($ret);
                                    $producttypeid = $row['ProductTypeID'];
                                    $producttypename = $row['ProductTypeName'];
                                    $productcategory = $row['ProductCategory'];

                                    echo "<option value='$producttypeid'>$producttypeid - $producttypename - $productcategory</option>";
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" name="btnSave" value="Save">
                        <input type="reset" name="btnReset" value="Clear">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>