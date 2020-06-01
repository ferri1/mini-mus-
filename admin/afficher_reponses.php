<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/mes_styles.css">
</head>
<body>


<div class="showme">
    <div class="title">
        Afficher les réponses POST
    </div>

    <div class="content">
        <table>
            <tr>
                <td>Email</td>
                <td><?php echo $_POST["email"]?></td>
            </tr>

            <tr>
                <td>Mot de passe</td>
                <td><?php echo $_POST["password"]?></td>
            </tr>

        </table>
    </div>

</div>



</body>
</html>
