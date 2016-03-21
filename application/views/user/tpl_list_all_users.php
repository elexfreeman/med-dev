<ul>

    <?php foreach ($users as $user): ?>

        <li><?=$user['email']?> - <?=$user['password']?></li>

    <?php endforeach; ?>

</ul>

<ul>

    <?php foreach ($settings as $s): ?>

        <li><?=$s['s_key']?> - <?=$s['s_value']?></li>

    <?php endforeach; ?>

</ul>
<?php print_r($lang);?>
