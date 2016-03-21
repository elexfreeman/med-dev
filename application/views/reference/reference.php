<div class="w-container">
    <h1 class="body-h1"><?php echo $text_h1;?> <span class="body-h1-span">(<?php echo $text_description;?>)</span>
    </h1>
</div>

<div class="w-container body-container">
    <div class="w-row tableth">
        <div class="w-col w-col-6"><div class="tablerowhead">Название справочника</div></div>
        <div class="w-col w-col-6"><div class="tablerowhead">Таблица справочника</div></div>

    </div>

    <?php foreach ($reference_list as $reference): ?>

        <div class="w-row tabletr">
            <div class="w-col w-col-6"><a href="/reference/reference/info/<?=$reference['Name']?>" class="tabletdlink"><?=$reference['Comment']?></a></div>
            <div class="w-col w-col-6"><div><?=$reference['Name']?></div></div>
        </div>
    <?php endforeach; ?>

</div>

