<?php include('header.php');
?>
<h2><u>Inscrivez vos enfants à la crèche</u></h2>
<!--page d'inscription-->
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire enfant</title>
    <style>
        body {
            background-color: #eaf6fc;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px #bbb;
            width: 400px;
            margin: 0 auto;
            font-family: Arial, sans-serif;
            color: #333;
        }

        h1 {
            text-align: center;
            font-size: 30px;
            color: #0072c6;
            margin-top: 0;
        }

        label {
            display: block;
            font-size: 20px;
            margin-bottom: 10px;
            color: #0072c6;
        }

        input[type=text] {
            padding: 5px;
            font-size: 18px;
            border-radius: 5px;
            border: none;
            box-shadow: 0 0 5px #bbb;
            width: 100%;
            margin-bottom: 20px;
        }

        textarea {
            padding: 5px;
            font-size: 18px;
            border-radius: 5px;
            border: none;
            box-shadow: 0 0 5px #bbb;
            width: 100%;
            height: 100px;
            margin-bottom: 20px;
        }

        input[type=submit] {
            background-color: #0072c6;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #005ea8;
        }
    </style>
</head>
<body>
<!--formulaire d'inscritpion d'enfant-->
<form action="sub-kid_back_end.php" method="POST">
    <h1>Formulaire enfant</h1>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom" required>

    <label for="comportement">Comportement :</label>
    <textarea id="comportement" name="comportement" required></textarea>
    <label for="DateActivite">Date :</label>
    <input type="date" class="form-control" id="DateActivite" name="DateActivite" placeholder="Saisissez la date..." required/>
    <label for="id_compte_p">id du compte parent :</label>
    <input type="number" id="id_compte_p" name="id_compte_p" required>


    <a href="principale.php"><input type="submit" value='Envoyer' ></a>
</form>
</body>
</html>


