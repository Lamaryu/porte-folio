<html>

    <head>
        <meta charset="UTF-8">
        <title>book de David Watine</title>
        <link rel="stylesheet" href="../public/CSS/adresse.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>

    <body>
    <header class="border-bottom border-2 border-dark sticky-top">
        <div class="paraphrase">
            <h4 class="text-center petit" style="padding-top: 30px; padding-bottom: 20px"><strong>Le porte-folio de David Watine</strong></h4>
        </div>
        <nav>
            <ul class="navigation">
                <li class="onglet"><a href="index.php" class="lien">Présentation</a></li>
                <li class="onglet"><a href="competence.php" class="lien"> Competence & hobbies</a></li>
                <li class="onglet"><a href="ex_pro.php" class="lien">Experience Professionelle</a></li>
                <li class="onglet"><a href="projet.php" class="lien"> Mes projet</a></li>
                <li class="onglet"><a href="adresse.php" class="lien">Me Contacter</a></li>
                <li class="onglet"><a href="CV.php" class="lien">CV</a></li>
            </ul>
        </nav>
</header>
    <?php if (isset($_GET['co'])) :
        if ($_GET['co'] == 'success') : ?>
            <div class="alert alert-success" role="alert" style="margin: 0%;" id="alert">
                <h5><strong>Merci beaucoup, je vous contacterais sous peu</strong>
                <a href="adresse.php" type="button" class="btn-close float-end close" aria-label="Close"></a></h5>
            </div>
            
    <?php endif;
    endif?>

    <h1 class="text-center titre">Mes coordonnées</h1>
        <ul class="contac">
            <li class="text-center info"><h2 class="soustitre">Adresse :</h2><p>3 allée des ... ,  Orleans ,  45000</h2></li>
            <li class="text-center info"><h2 class="soustitre">E-Mail :</h2><p>david.watine@gmail.com</h2></li>
            <li class="text-center info"><h2 class="soustitre">Téléphone :</h2><p class="bordure">07.83.40.84.56</h2></li>
        </ul>
        <form action="../admin/traitement.php" method="POST" class="form shadow-lg p-3 mb-5 bg-body rounded">
            <h3 class="text-center from-titre">Merci de laisser vos coordonnées</h3>
            <div class="form-group">
                <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="prenom" class="form-control" placeholder="Prénom" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="tel" name="telephone" class="form-control" placeholder="téléphone" required="required" autocomplete="off">
            </div>
            <div class="form-group">
                <input type="text" name="entreprise" class="form-control" placeholder="entreprise" required="required" autocomplete="off">
            </div>
            <div class="text-center form-button">
                <button type="submit" class="btn btn-outline-primary btn-block">Envoyé</button>
            </div>
        </form>
    </body>
</html>