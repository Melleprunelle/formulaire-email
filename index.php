<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta author="Lise">
    <title>Envois d'e-mail</title>
</head>
<link rel="icon" type="image/png" href="img/envelope.png" />
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<body>
<div class="container">

    <h2 class="col-md-offset-4">Nouveau message</h2>
    
    <div class="col-md-offset-1 col-md-3">
                <img class="" src="img/envelope.svg" alt="Enveloppe Image">
            </div>
    
    <form class="" action="email.php" method="post">
            
           <div class="form-group col-md-7">
                <label for="usr">Nom Prénom :</label>
                <input type="text" class="form-control" id="usr" placeholder="Nom et prénom">
            </div>

            <div class="form-group col-md-7">
                <label for="email">E-mail :</label>
                <input type="email" class="form-control" id="email" placeholder="E-mail">
            </div>

            <div class="form-group col-md-7">
                <label for="objet">Objet :</label>
                <input type="text" class="form-control" id="objet" placeholder="Objet">
            </div>

            <div class="form-group col-md-7">
                <label for="message">Message :</label>
                <textarea class="form-control" name="message" id="comment" cols="30" rows="8" placeholder="Message"></textarea>
            </div>

            <div class="form-group col-md-offset-4 col-md-7">
                <input id="input-repl-2" type="file" class="file-loading" accept="image/*">
            </div>

            <div class="form-group col-md-offset-4  col-md-7">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
    </form>

</div>
</body>
</html>