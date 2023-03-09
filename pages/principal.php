<?php include('../inc_components/head.php'); ?>

<body>
    <div id="top"></div>

    <!-- Header -->
    <?php include('../inc_components/header.php') ?>

    <!--separation-->
    <!-- <div class="separation"></div> -->

    <!--separation-->
    <!-- <div class="separation under-menu"></div> -->

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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>