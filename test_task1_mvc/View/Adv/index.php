<?php include "View/Header.php"; ?>

<br><br><br>


<table>
<h2>List of Advertisements</h2>
<tr><th>Advertiser</th><th>Advertisements</th></tr>
    <tr>
        <?php foreach ($advs as $adv) {?>          
            <tr>
                <td><?php echo $adv->name; ?></td>
                <td><?php echo $adv->title; ?></td>
            </tr>
        <?php }?>
    </tr>
</table>

<br><br><br><br><br>
<?php include "View/Footer.php"; ?>