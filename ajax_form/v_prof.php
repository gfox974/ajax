<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Connexion</title>
</head>
<body>
    <form method="post" id="main">
        <input type="text" name="login"><br>
        <input type="password" name="password">
        <input type="submit" name="submit" value="Se connecter">
    </form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('form').on('submit', function(event) {
                // console.log($(this).serialize());
                event.preventDefault();
                $.ajax({
                method: 'POST',
                url: 'traitement.php',
                data: $(this).serialize()
            }).done(function(data) {
                // console.log(data === 'OK');
                if(data === 'OK') {
                    $("#main").html("<h2>Bienvenue</h2>");
                }
            })
            })
            
        })
    </script>
</body>
</html>

<?php
    if (isset($_POST['login'])) {

        if ($_POST['login'] == 'admin' && $_POST['password'] == '123') {
            echo "OK";
        } else {
            echo "NOK";
        }
    } else {
        echo "NOK";
    }
?>