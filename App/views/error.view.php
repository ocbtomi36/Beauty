<?php 

loadPartial('head');
loadPartial('navbar');
?>
<body>
    <div class="error">
        <p><?php 'Error '.$status. ' '. $message ?></p>
    </div>
</body>
<?= loadPartial('footer')?>