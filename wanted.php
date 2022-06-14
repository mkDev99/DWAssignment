<?php
    include('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="wanted.php" method="POST">
        <input type="text" name="txtSearch" placeholder="Search Here">
        <a href="wanted.php"><button name="btnSearchs"></button></a>
    </form>

    <?php
        if (isset($_POST['btnSearch']))
        {
            $vname = $_POST['txtSearch'];
            $query = "SELECT * FROM product p, producttype pt
                      WHERE p.ProductTypeID = pt.ProductTypeID
                      AND pt.ProductType = 'secondhand'
                      AND p.ProductName LIKE '%$vname%'";
            
            $result = mysqli_query($connect, $query);
            $count = mysqli_num_rows($result);

            if($count > 0)
            {
                for ($i = 0; $i < $count; $i += 5)
                {
                    $query1 = "SELECT * FROM product p, producttype pt
                               WHERE p.ProductTypeID = pt.ProductTypeID
                               AND pt.ProductType = 'secondhand'
                               AND ProductName LIKE '%$vname%' LIMIT $i,5";
                    $result1 = mysqli_query($connect, $query1);
                    $count1 = mysqli_num_rows($result1);
                    ?>

                    <h3>Second Hand Equipment</h3>

                    <div>
                        <?php
                            for ($j = 0; $j < $count1; $j++)
                            {
                                $data = mysqli_fetch_array($result1);
                                $productID = $data['ProductID'];
                                $productID = $data['ProductID'];
                                $productID = $data['ProductID'];
                                $productID = $data['ProductID'];
                        ?>

                        <div>
                            <div>
                                <div>
                                    <div>
                                        <div>
                                            <a href="sdetail.php?PID=<?php echo $productID ?>&qty=1">
                                            <img src="<? $data['ProductImage'] ?>" alt=""></a>
                                        </div>
                                        <div>Sale Products</div>
                                    </div>
                                    <div>
                                        <h3>
                                            <a href="sdetail.php?PID=<?php echo $productID ?>$qty=1">
                                            <?php echo $productname ?></a>
                                        </h3>

                                        <div></div>
                                        <div class="decription"><?php echo $data['Description'] ?></div>
                                        <div class="price"> $ <?php echo $data['Price'] ?></div>
                                    </div>

                                    <div>
                                        <div>
                                            <ul>
                                                <li>
                                                    <button><i><a href="ProductCartList.php?PID=<?php echo $productID ?> &qty=1">Add to Cart</a></i></button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            }
                        ?>
                    </div>
                <?php
                }
                echo "</div>";
                
            }
        }
        }
    ?>
</body>
</html>