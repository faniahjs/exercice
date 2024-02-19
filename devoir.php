-<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style>
         body {
            background-color: #f4f4f4;
        }
        
        .misyAzyJiab {
            width: 300px;
            margin: 50px auto;
            text-align: center;
        }

        .gestedreoRoa {
            margin-bottom: 20px;
        }

        label {
            display: inline-block;
            width: 80px;
            text-align: left;
        }

        input[type="text"] {
            width: 200px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button {
            background-color: red;
            border-radius: 3 px#;
        }
       
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: none;
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: bleu;
        }

        tr:hover {
            background-color: #ddd;
        }

        a {
            color: #007bff;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <form method="post" class="misyAzyJiab">
       
            <div class="gestedreoRoa">
                <label>Nom :</label>
                <input type="text" name="nom" placeholder="Votre nom">
            </div>
            <div class="gestedreoRoa">
                <label>Prénom :</label>
                <input type="text" name="prenom" placeholder="Votre prénom">
            </div>
       <button type="submit" name="btn" > valider</button>
    </form>
    <?php

    include("pdo.php");
    if (isset($_POST["btn"])) {
        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];

        if($nom !="" && $prenom!=""){
            $insert = $connection -> prepare ("INSERT INTO information(nom, prenom) VALUES (?,?)");
            $insert -> execute ([$nom, $prenom]); 

        }
        else {
            echo "Veillez remplir les deux champs";
        }
    } else {
        echo "NON";
    }
    ?>
    <table>
        <thead>
            <tr>
                <th>Numéro</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>amelio</td>
                <td>bogosy</td>
                <td><a href="#">Modifier</a> | <a href="#">Supprimer</a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>amelio</td>
                <td>bogosy2</td>
                <td><a href="#">Modifier</a> | <a href="#">Supprimer</a></td>
            </tr>
            <tr>
                <td>3</td>
                <td>amelio</td>
                <td>bogosy3</td>
                <td><a href="#">Modifier</a> | <a href="#">Supprimer</a></td>
            </tr>
            <tr>
                <td>4</td>
                <td>amelio</td>
                <td>bogosy4</td>
                <td><a href="#">Modifier</a> | <a href="#">Supprimer</a></td>
            </tr>
        </tbody>
    </table>
  
</body>
</html>
