<!DOCTYPE html>
<HTML>
<head>
    <title>Sumar numeros en php</title>
</head>
<body>

<?php
$resultado='';
if(!empty($_POST['num1']) && !empty($_POST['num2'])){

     $resultado = $_POST['num1'] + $_POST['num2'];


}
?>
<form action="" method="post">
<h4>Digite el primer numero</h4>
<input type="number" required name="num1"

<h4>Digite el segundo numero</h4>
<input type="number" required name="num2"

<br><br>
<button>Sumar</button>
</form>

<br><br>
<?php
if($resultado!=''){
    echo "LA SUMA ES: ".$resultado;
}
?>
</body>

</html>
