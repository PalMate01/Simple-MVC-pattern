<?php /* 11. (end) station */ include "View/Header.php"; ?>

<br><br><br>

<table>
<h2>List of Users</h2>
<tr><th>Name</th></tr>
    <tr>
        <?php foreach ($users as $user) {?> 
            <tr>
            <td><?php echo $user->name;?></td> <!-- [P] That's all! -->
            </tr>
        <?php }?>
    </tr>
</table>

<br><br><br><br><br>
<?php include "View/Footer.php"; ?>