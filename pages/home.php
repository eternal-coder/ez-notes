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