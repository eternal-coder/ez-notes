<?php
require_once './header.php';

if (isset($_POST['new_note']) && trim($_POST['new_note']) !== "") {
    $db->insert("notes", array(
        "text" => $_POST['new_note']
    ));
    header("Location: " . $_SERVER['REQUEST_URI']);
    exit();
}
?>

<body>
    <!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <?php
    $user = new User($db);
    require_once './menu.php';
    ?>

    <div class="container main-container">
        <?php
        if ($user->isLogged()) {
            require_once 'pages/home.php';
        } else {
            require_once 'pages/signin.php';
        }
        ?>

    </div> <!-- /container -->        
    <?php
    require_once './footer.php';
    ?>
</body>
</html>
