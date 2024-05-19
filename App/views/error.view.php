<?php 

loadPartial('head');
loadPartial('navbar');
?>
<body>
    <div class="error">
        <p><?= 'Error '.$status. ' '. $message ?></p>
    </div>
</body>
<?= loadPartial('footer')?>