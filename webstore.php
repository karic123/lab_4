<html>
<body>
<link rel='stylesheet' type='text/css' href='webstore.css'/>

<p class="backend"> Your Order:<br><br>
<!-- <br> -->
Username:
<?php
$un = $_POST["un"];
echo $un;
?>
<br>
Password:
<?php
$pw = $_POST["pw"];
echo $pw;
?>
<br>
Number of Swimsuits:
<?php
$swim = $_POST["swim"];
echo $swim;
?>
<br>
Pairs of Sunglasses:
<?php
$glasses = $_POST["glasses"];
echo $glasses;
?>
<br>
Number of Surfboards:
<?php
$surf = $_POST["surf"];
echo $surf;
?>
<br>
<?php $shipping = $_POST["shipping"]; ?>
You chose <?php echo $shipping; ?> shipping.
<br>

<?php
if ($shipping == "Overnight")
{ $total = ($surf*100)+($swim*50)+($glasses*20)+50;}
else if ($shipping == "3-Day")
{$total = ($surf*100)+($swim*50)+($glasses*20)+5;}
else {$total = ($surf*100)+($swim*50)+($glasses*20);}
 ?>
Your total comes to: $<?php echo $total ?>
</p>
</body>
</html>
