<?php include('../inc_components/head.php'); ?>

<body>
    <div id="top"></div>

    <!-- Header -->
    <?php include('../inc_components/header.php') ?>

    <!--Contenu-->
    <main>
        <div class="contenu">
            <?php
            if (isset($_GET["article"])) {
                if ($_GET["article"] == "presentation") {
                    include("./presentation.php");
                }
                if ($_GET["article"] == "training") {
                    include("./training.php");
                }
                if ($_GET["article"] == "skills") {
                    include("./skills.php");
                }
                if ($_GET["article"] == "projects") {
                    include("./projects.php");
                }
                if ($_GET["article"] == "contact") {
                    include("./contact.php");
                }
                if ($_GET["article"] == "private") {
                    include("./private-access.php");
                }
            } else {
                include("./presentation.php");
            }
            ?>
        </div>
    </main>

    <!--separation-->
    <div class="separation"></div>

    <!-- footer -->
    <?php include('../inc_components/footer.php') ?>

    <!--Scroll up-->
    <div id="scroll_to_top">
        <a href="#top"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
            </svg></a>
    </div>
</body>

</html>