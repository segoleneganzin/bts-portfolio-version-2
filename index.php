<?php include('./inc_components/head.php'); ?>

<body>

    <!--separation-->
    <div class="separation under-menu"></div>

    <!--Contenu-->
    <main>
        <div class="accueil">
            <div class="accueil-name">
                <h1><span class="highlight-word">Bonjour</span>, je m'appelle </h1>
                <p class="typewriter-name" id="typewriterName"></p>
                <div class="accueil-resume">
                    <p>Etudiante en BTS Services Informatiques aux Organisations,<br /> option Solutions Logicielles et Applications Métiers</p>
                </div>
            </div>
            <button onclick="window.location.href='pages/principal.php';" class="accueil-button">
                &#139; entrer &#155;
            </button>
        </div>
    </main>


    <script>
        let i = 0;
        let txt = "Ségolène Ganzin"; /* The text */
        let speed = 100; /* The speed/duration of the effect in milliseconds */

        function typeWriter() {
            if (i < txt.length) {
                document.getElementById("typewriterName").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
        }
        if (document.readyState === "complete") {
            typeWriter();
        } else {
            document.addEventListener("DOMContentLoaded", function() {
                typeWriter();
            });
        }
    </script>


</body>

</html>