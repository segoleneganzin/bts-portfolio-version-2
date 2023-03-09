<?php
    session_start();//Démarrage session

	// echo "<pre>";
	// print_r($_REQUEST);
	// die;


    $_SESSION["valide"] = true;	//Session set comme "valide"
    if (isset($_POST["pseudo"]) && isset($_POST["mot_de_passe"])){ //Si qqch de renseigné dans "pseudo et "mot-de-passe" dans le formulaire
        $_SESSION["mdp"] = $_POST["mot_de_passe"];//On stocke ce qui a été renseigné dans les variables
        $_SESSION["pseudo"] = $_POST["pseudo"];//mdp et pseudo, qui sont des variables de session
		//Donc restent actives toute la durée de la navigation, à l'inverse des variables POST, qui ne restent
		//actives que sur la page suivant le formulaire 
    }

    // head
    include('../inc_components/head.php');
?>

<body>
    <div id="top"></div>

    <!-- Header -->
    <?php include ('../inc_components/header.php') ?>

    <!--separation-->
    <div class="separation"></div>

    <!--menu-->
    <nav class="menu">
        <!--Présentation-->
        <a class="item-menu" href="../index.php">Présentation</a>
    </nav>

    <!--separation-->
    <div class="separation under-menu"></div>
    
    <!--Contenu-->
    <main>
        <?php

            //-----------------------------------------TABLEAUX/CONFIG---------------------------------------------
            require("../connection-config.php");//Require = include ; insert un bout de code PHP directement 


            //-----------------------------------------Conditions de connexion-------------------------------

            if(isset ($_SESSION["pseudo"]) and in_array($_SESSION['pseudo'], $logins)) 
            //Si la variable "pseudo" de type SESSION existe, et... 
            //Si la valeur entrée au sein de cette variable existe dans l'array "logins" contenu dans la page config.php
            //et importé par require()
            {

                $pseudo = $_SESSION["pseudo"];//On stocke la variable de session dans une nouvellle variable pseudo pour l'affichage 

                $key = array_search($_SESSION['pseudo'], $logins); 
                //On utilise array_search pour récupérer l'index de la valeur contenue dans ($_SESSION['pseudo']
                //Et on attribue cet index à $key

                if(isset ($_SESSION["mdp"]) and $passwords[$key]==$_SESSION['mdp']) 
                //$Key est un index, donc un int ; par exemple 3. 
                //Si passwords[3]==$_SESSION['mdp'] ; si $_SESSION['mdp'] est bien stocké à l'index 3 
                //de l'array passwords...
                {



            //-----------------------------------Affichage page HTML si mdp/login corrects-----------------------------------------
        ?>
                    <p>
                        Vous êtes connecté avec le pseudo : <strong style="color:green;"> <?php echo("$pseudo")?> </strong>
                    </p>
        <?php
            //---------------------------------Si MDP incorrect-----------------------------------------
                } else 
                    {

        ?>
                        <div class="corps">
                            <div class="contenu">
                                <strong style="color:red;">Mot de passe incorrect</strong>
                                <p>
                                <a href="../index.php?article=private">Recommencer</a>
                                </p>
                            </div>
                        </div>

        <?php
                    }
            //---------------------------------Si LOGIN incorrect-----------------------------------------
            }else {
                ?>
                <div class="corps">
                    <div class="contenu">
                        <strong style="color:red;">Login incorrect</strong>
                        <p>
                        <a href="../index.php?article=private">Recommencer</a>
                        </p>
                    </div>
                </div>

                <?php
                }
                ?>

    </main>
            <!--separation-->
            <div class="separation"></div>

            <!-- footer -->
            <?php include ('../inc_components/footer.php') ?>

            <!--Scroll up-->
            <div id="scroll_to_top">
                <a href="#top"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z"/>
                </svg></a>
            </div>
</body>

