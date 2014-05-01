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
    require_once './menu.php';
    ?>

    <div class="container main-container">
        <?php
        $notes = $db->select("notes", "*");
        foreach ($notes as $note) {
            ?>    
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <?php echo $note['time']; ?>
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                </div>
                <div class="panel-body"><?php echo htmlspecialchars($note['text']); ?>
                </div>
            </div>
        <?php } ?>

        <form  role="form" method="post">
            <div class="form-group">
                <textarea class="form-control" name="new_note"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default pull-right" value="Submit"/>
            </div>
        </form>

    </div> <!-- /container -->        
    <?php
    require_once './footer.php';
    ?>
</body>
</html>
