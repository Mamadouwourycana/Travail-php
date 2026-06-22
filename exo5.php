<?php

$prenoms = [];

if (isset($_POST["prenom"]) && !empty($_POST["prenom"])) {
    $prenoms[] = $_POST["prenom"];
}

?>

<form method="post">
    <input type="text" name="prenom">
    <button>Envoyer</button>
</form>

<?php

foreach ($prenoms as $prenom) {
    echo $prenom . "<br>";
}

?>