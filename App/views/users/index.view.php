<?php 

/** List all user */
echo 'List all user</br>';
echo 'index.view.php';

loadPartial('head');
loadPartial('navbar');
?>
<div class="list_all_users">
    <h2>List of Users</h2>

    <?php if($users === NULL || empty($users)):?>

    <p>There is nothing in DB.</p>
    <?php else: ?>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>First Name</th>
                <th>First Name 2nd</th>
                <th>Last Name</th>
                <th>Last Name 2nd</th>
                <th>Id Card Number</th>
                <th>Date of Birth</th>
                <th>User Role</th>
                <td>Operations</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $row):?>
                <tr>
                    <td><?=$row['iduser']?></td>
                    <td><?=$row['first_name']?></td>
                    <td><?=$row['first_name2nd']?></td>
                    <td><?=$row['last_name']?></td>
                    <td><?=$row['last_name2nd']?></td>
                    <td><?=$row['id_card_number']?></td>
                    <td><?=$row['date_of_birth']?></td>
                    <td><?=$row['user_role']?></td>
                    <td><a href="<?='http://localhost:8000/user/'.$row['iduser']?>">Details</a></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</div>
<div class="spacing">
</div>
<?php endif;?>
<?php loadPartial('footer');?>