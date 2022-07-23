<?php
    session_start();
    include('Connect.php');
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
</head>
<body>
<form action="wanted.php" method="POST">
<h1>Search Here Second Hand Product</h1>
<input type="text" name="txtSearch" placeholder="Search Here ..."/>
<button name="btnSearch"> Search</button>
</form>



<?php
if(isset($_POST['btnSearch']))
{
$second=$_POST['txtSearch'];
$query="SELECT * FROM product
WHERE ProductCondition='Used'
AND ProductName LIKE '%$second%'";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);



if($count>0)
{
for ($i=0; $i < $count; $i+=5)
{
$query1="SELECT * FROM product
WHERE ProductCondition='Used'
AND ProductName LIKE '%$second%' LIMIT $i,5";
$result1=mysqli_query($connect,$query1);
$count1=mysqli_num_rows($result1);



?>




<h2>Seond Hand Products</h2>
<div>

<?php



for ($j=0; $j < $count1; $j++)



{
$data=mysqli_fetch_array($result1);
$ProductID=$data['ProductID'];



$name=$data['ProductName'];
$price=$data['Price'];
$des=$data['Description'];
$image=$data['ProductImage1'];




?>



<div>

<a href="seconddetail.php?PID=<?php echo $productcode ?>&qty=1">
<img src="<?php echo $image ?>" width='200px' height='200px'>



</a>
</div>



<div><span>Sale Products</span></div>




<div>

<h3>
<a href="seconddetail.php?PID=<?php echo $productcode ?>&qty=1"> <?php echo $name?></a></h3>



<div></div>
<div></div>
<div class="description"><?php echo $des ?></div>
<div class="price"><?php echo $price ?></div>
</div>



<div>

<div>

<button><i><a href="ProductCartList.php?pid=<?php echo $productcode ?>&qty=1">Add To Cart</a></i></button>

</div>
</div>



<?php



}

echo "</div>";



}
}




else
{
echo "<h1><b>Search Record Not Found</b></h1>";
}



}



else
{
$query="SELECT * from product WHERE ProductCondition='Used'
ORDER BY ProductName";
$result=mysqli_query($connect,$query);
$count=mysqli_num_rows($result);



if($count>0)
{



for ($i=0; $i <$count ; $i+=7)



{
$query1="SELECT * from product WHERE ProductCondition='Used'
ORDER BY ProductName LIMIT $i,7";
$result1=mysqli_query($connect,$query1);
$count1=mysqli_num_rows($result1);



?>
<section>
<h3>Second Hand Products</h3>
<div>



<?php




for ($j=0; $j <$count1 ; $j++)
{
$data=mysqli_fetch_array($result1);
$ProductID=$data['ProductID'];



$name=$data['ProductName'];
$price=$data['Price'];
$des=$data['Description'];
$image=$data['ProductImage1'];



?>



<div>




<div>
<div>
<div>
<div>

<a href="seconddetail.php?PID=<?php echo $productcode ?>&qty=1"> <?php echo $name?>
<img src="<?php echo $image ?>">
</a>



</div>



<div><span>Sale</span></div>
</div>



<div>
<h3>
<a href="seconddetail.php?PID=<?php echo $productcode ?>&qty=1"> <?php echo $name?></a>
</h3>
<div class="description"><?php echo $des ?></div>
<div class="price">$<?php echo $price ?></div>




</div>
</div>
</div>
</div>



<?php
}




echo "</div> </section>";



}





}
}
?>








</body>
</html>