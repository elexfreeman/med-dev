<div class="w-container">
    <h1 class="body-h1"><?php echo $text_h1;?> <span class="body-h1-span">(<?php echo $text_description;?>)</span>
    </h1>
</div>

<div class="w-container body-container">
    <div class="w-row tableth">
        <div class="w-col w-col-6"><div class="tablerowhead">№</div></div>
        <div class="w-col w-col-6"><div class="tablerowhead">Значение</div></div>

    </div>

    <?php foreach ($reference as $row): ?>

        <div class="w-row tabletr">
            <div class="w-col w-col-6"><div><?=$row->id;?></div></div>
            <div class="w-col w-col-6"><div><?=$row->caption;?></div></div>
        </div>
    <?php endforeach; ?>

</div>

