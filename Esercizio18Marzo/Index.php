<?php
/*$arr2 = $_GET['appoggio'];
$url.= $_SERVER['REQUEST_URI']; 
echo $url;*/
?>
<html>
<html>
<body>


<form action="/Esercizio18Marzo/index.php" method="POST">
Mittente: <input type="text" name="mittente"><br>

<input type = "radio"  name = "spedizione" value = "express">Express<br>
<input type = "radio"  name = "spedizione" value = "normale">Normale<br>
<input type = "radio"  name = "spedizione" value = "poste">Poste Italiane<br>

<br>
<label for = "pagamenti">Seleziona un metodo di pagamento:</label>
<select name = "pagamenti" id = "pagamenti">
<option value = "carta">Carta</option>
<option value = "poste">PostePay</option>
<option value = "cash">Cash</option>
<option value = "furto">Furto</option>
</select>
</br>

<input type = "checkbox" id = "interesse1" name = "interessi[]" value = "sport">
<label for = "interesse1"> Sport </label><br>
<input type = "checkbox" id = "interesse2" name = "interessi[]" value = "danza">
<label for = "interesse2"> Danza </label><br>
<input type = "checkbox" id = "interesse3" name = "interessi[]" value = "cucina">
<label for = "interesse3"> Cucina </label><br>
<input type = "checkbox" id = "interesse4" name = "interessi[]" value = "yoga">
<label for = "interesse4"> Yoga </label><br>

<input type="submit" value = "Invia">

</form>

<form method="POST" action="/Esercizio18Marzo/stampa.php">

<input type="submit" value = "Stampa">

</form>


</html>
</body>
</html>

<?php

$arr = array();
$arrone = array();
$nome = $_POST["mittente"];
$spedizione = $_POST["spedizione"];
$pagamenti = $_POST["pagamenti"];
$interessi = $_POST["interessi"];
$tuttInteressi = implode("," , $interessi);
array_push($arr,$nome,$spedizione,$pagamenti,$tuttInteressi);
if(isset($arr2))
{
    $arrone = array_merge($arr2,$arr);
}
foreach ($arrone as $appoggio)
{
    echo $appoggio . '<br>';
}/*
echo "<br>";
    $stringa = "";
    foreach($arr as $appoggino)
    {
        $stringa .= 'appoggio[]=' . $appoggino . '&';
    }

    $newstring = rtrim($stringa, "& ");
    header("Location: index.php?". $url . $newstring);*/
    
?>

