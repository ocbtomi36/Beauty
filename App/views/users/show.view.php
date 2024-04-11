<?php
echo 'show.view.php';
loadPartial('head');
loadPartial('navbar');
?>
<main>
<div class="outer_one_user_detail">
    <div class="one_user_detail">
    <h1>User in detiail</h1>
    <h3>First Name</h3>
    <p><?=$user['first_name']?></p>
    <?php if (!empty($user['first_name2nd'])):?>
        <h3>First Name 2nd</h3>
        <p><?=$user['first_name2nd']?></p>
    <?php else:?>
    <?php endif?>

    <h3>Last Name</h3>
    <p><?=$user['last_name']?></p>

    <?php if (!empty($user['last_name2nd'])):?>
        <h3>Last Name 2nd</h3>
        <p><?=$user['last_name2nd']?></p>
    <?php else:?>
    <?php endif?>
    <h3>Id Card Number</h3>
    <p><?=$user['id_card_number']?></p>
    <h3>Gender</h3>
    <p><?=$user['gender']?></p>
    <h3>Date of Birth</h3>
    <p><?=substr($user['date_of_birth'],0,11);?></p>

    <?php if (!empty($user['username'])):?>
        <h3>Username</h3>
        <p><?=$result['username']?></p>
    <?php else:?>
    <?php endif?>
    <?php if (!empty($user['phone_number'])):?>
        <h3>Phone Number</h3>
        <p><?=$user['phone_number']?></p>
    <?php else:?>
    <?php endif?>
    <?php if (!empty($user['password'])):?>
        <h3>Password</h3>
        <p><?=$user['password']?></p>
    <?php else:?>
    <?php endif?>


    <h3>User Role</h3>
    <p><?=$user['user_role']?></p>
    </div>
</div>
<div class="spacing">
</div>
