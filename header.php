<html>
<head>
    <meta charset="utf-8">
    <!-- importer le fichier de style -->
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
</head>
<body style='background:#fff;'>
<!DOCTYPE html>
<html>
<head>
    <style>
        #wrap {
            width: 100%;
            height: 50px;
            margin: 0;
            z-index: 99;
            display: flex;
            justify-content: center;
            justify-items: center;
            position: relative;
            background-color: #005ea8;
        }
        .navbar {
            height: 50px;
            padding: 0;
            margin: 0;
            justify-content: center;
            justify-items: center;
            position: absolute;
        }
        .navbar li {
            height: auto;
            width: 135.8px;
            float: left;
            text-align: center;
            list-style: none;
            font: normal bold 13px/1em Arial, Verdana, Helvetica;
            padding: 0;
            margin: 0;
            background-color: #005ea8;
        }
        .navbar a {
            padding: 18px 0;
            border-left: 1px solid #ccc9c9;
            text-decoration: none;
            color: white;
            display: block;
        }
        .navbar li:hover,
        a:hover {
            background-color: #444444;
        }
        .navbar li ul {
            display: none;
            height: auto;
            margin: 0;
            padding: 0;
        }
        .navbar li:hover ul {
            display: block;
        }
        .navbar li ul li {
            background-color: #005ea8;
        }
        .navbar li ul li a {
            border-left: 1px solid #005ea8;
            border-right: 1px solid #005ea8;
            border-top: 1px solid #c9d4d8;
            border-bottom: 1px solid #005ea8;
        }
        .navbar li ul li a:hover {
            background-color: #a3a1a1;
        }
    </style>
</head>
<body>
<div id="wrap">
    <ul class="navbar">
        <li>
            <a href="principale.php">Acceuil</a>
        </li>
        <li>
            <a href="#">Les Crèches</a>
            <ul>
                <li><a href="crecheP.php">Crèche de Paris</a></li>
                <li><a href="crecheM.php">Crèche de Marseille</a></li>
                <li><a href="creche3.php">Crèche de Saint-Remy-en-Bouzemont-Saint-Genest-et-Isson</a></li>
            </ul>
        </li>
        </li>
        <li>
            <a href="sub-kid.php">Inscrivez l'enfant</a>
        </li>
        <li>
            <a href="#">🐯</a>
            <ul>
                <a href='principale.php?deconnexion=true'><span>Déconnexion</span></a>

                <!-- tester si l'utilisateur est connecté -->
                <?php
                session_start();
                if(isset($_GET['deconnexion']))
                {
                    if($_GET['deconnexion']==true)
                    {
                        session_unset();
                        header("location:login.php");
                    }
                }
                else if($_SESSION['username'] !== ""){
                    $user = $_SESSION['username'];
                    // afficher un message
                }
                ?>

            </ul>

        </li>
    </ul>
</div>