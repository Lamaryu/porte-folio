<html>
    <head>
        <meta charset="UTF-8">
        <title>book de David Watine</title>
        <link rel="stylesheet" href="projet_book_css.css">
    </head>
    <body>
    <header class="bg-primary border-bottom border-2 border-dark">
        <div class="titre">
            <h1 class="vitemonvol"><a href="index.php" id="retour">V<span class="logo">ite</span>M<span class="logo">on</span>V<span class="logo">ol</span></a></h1>
        </div><br>
        <div class="paraphrase">
            <p class="petit">Le site référence en terme de circuit</p>
        </div>
        <nav>
            <ul class="navigation">
            <?php if (isset($_SESSION['id'])) : ?>
                <?php if ($_SESSION['is_admin'] == 1) : ?>
                    <li class="onglet"><a href="admin.php" class="lien">Gestion du site</a></li>
                    <?php else : ?>
                    <li class="onglet"><a href="..." class="lien"></a></li>
                    <?php endif ?>
            <?php else : ?>
                    <li class="onglet"><a href="..." class="lien"></a></li>
            <?php endif ?>

            <li class="onglet"><a href="liste circuit.php" class="lien">Circuit</a></li>


                <li class="onglet"><a href="connexion.php" class="lien">Connexion</a></li>
            </ul>
        </nav>
    </header>
        <table>
            <tr>
                <th><a href="mecontacter.html" class="E-mail">Me Contacter</a></th> 
                <th><a href="experienceprofessionnelle.html" class="expro">Experience Professionelle</a></th> 
                <th><a href="competence.html" class="comp"> Competence & hobbies</a></th>
                <th><a href="projet.html" class="proj"> Mes projet</a></th>
                <th><a href="CV de David Watine.html" class="cv">CV</a></th>
            </tr><br>
        </table>
        <br><br><br>
        <h1>Book de David Watine</h1><br><br> 
        <div><img  src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR0RCi5NKFeyWHdY1-vF6oZOULmtvFzkYv0tw&usqp=CAU" > </div>
        <h2>Bonjour, Enchanté </h2><br>
        <p id="nom">je m'appelle David Watine,</p> 
        <p id="age">née en 2002 a Vendome en France,</p><br>
        <p class="text">j'ai commencer ma vie avec pour intension de travaller dans les sciences physique qui me passionne, j'ai donc obetenu un bac scientifique pour aller en prepa. <br> Mais suite a une remise en question je me suis poser cette questions :  Est-ce-que travailler dans ce domaine te rendra heureux ? <br> <br> <br>
           suite a cela j'ai decidé de suivre la voie de l'informatique, intérressé par se monde depuis mon plus jeune age cela m'a paru comme une évidence. <br> Cependant je ne voulais plus avoir des cours comme a l'école et l'alternance m'a paru remplir ce point là, j'ai donc rejoint l'ecole IT qui répondais à mes exigence. </p>
        </body>
</html>