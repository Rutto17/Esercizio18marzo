<form action="/Esercizio18Marzo/index.php"method="post">
<input type="submit" value = "Aggiungi cliente">
</form>


<?php

foreach ($_GET as $appoggio)
{
    echo $appoggio . '<br>';
}

?>