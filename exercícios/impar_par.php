<h1>Par ou Impar</h1>
<form method="POST">
    <input type="text" name="n" required>
    <button>Verfificar</button>
</form>
<?php
$n = $_POST["n"]??'';
if($n % 2 == 0) {
    echo "$n é par";
} 
else {
    echo "$n é impar";
}
?>