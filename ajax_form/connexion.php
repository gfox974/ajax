<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
</head>
<body>
<!-- On va afficher le formulaire que lorsqu'on est pas log, sinon on affiche "admin" -->
<!-- Si action vide, le submit se fait vers le fichier source -->
<!-- On veut obtenir le meme resultat que ce code de base, mais sans que la page ai a se recharger : via ajax -->

<div id="resultat">

</div>

<?php
$logged = false;
if (!$logged) {
?>
    <form method="post"> 
        <label for="login">Login</label><br>
        <input type="text" name="login">
        <br>
        <label for="password">Mot de passe</label><br>
        <input type="password" name="password">
        <br>
        <input type="submit" name="submit" value="Se connecter">
    </form>
<?php
} else {
?>
    <h2>Hello admin !</h2>
<?php
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script>
$(function(){
    $('form').on("submit", function(event) {
        console.log($(this).serialize());
        event.preventDefault(); // desactive le comportement de base de la page html en cas d'evenement declenché (pas de reload)
        $.ajax({ // ajax est asynchrone
            url: "traitement.php",
            method: "POST",
            data: $(this).serialize()
            //dataType: "html",
        })
        .done(function (data) {
            console.log("query done:", data); // ici data va devenir le retour de la requete
            if (data == "LOG GRANTED"){
                $("#resultat").html("<h2> logging OK !</h2>");
                $("form").remove();
            } else {
                $("#resultat").html("<h2> logging NOK !</h2>");
            }
        })            
    });
})
</script>    

</body>
</html>