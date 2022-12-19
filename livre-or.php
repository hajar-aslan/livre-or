<?php 
  
  require ('config.php');
  require ('auth.php');

  $sql = "
    SELECT `commentaire`, `login`, `date` FROM `commentaires`
    INNER JOIN `utilisateurs`
    ON commentaires.id_utilisateur = utilisateurs.id
    ORDER BY `date` DESC";

  $result = mysqli_query($connexion, $sql);
  $commentaires = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // var_dump($commentaires);

  //mysqli_close($connexion); // fermer la connexion


?>

<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title> Profil </title>
    </head>

    <body>

        <?php $_GET['page'] = "livreor"; include('header.php'); ?>

        
        <main>
            <h2 class="titre"> Livre d'Or </h2>
            
            <?php if ($userConnected) : ?>
                <a href="commentaire.php">ajouter un commentaire</a>
            <?php endif; ?>

            <table>
                <thead>
                    <tr>
                        <td>Posté le:</td>
                        <td>Par utilisateur:</td>
                        <td>Commentaires:</td>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($commentaires as $com) : ?>

                    <tr>
                        <td><?= $com['date'] ?></td>
                        <td><?= $com['login'] ?></td>
                        <td><?= $com['commentaire'] ?></td>
                    </tr>

                    <?php endforeach; ?>
                </tbody>
            </table>

        </main>    
    
        <?php include('footer.php') ?>


    </body>
</html>