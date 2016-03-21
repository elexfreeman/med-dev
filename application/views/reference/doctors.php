<div class="w-container">
    <h1 class="body-h1"><?php echo $text_h1;?> <span class="body-h1-span">(<?php echo $text_description;?>)</span>
    </h1>
</div>


<div class="w-container body-container">

    <div class="w-row tableth">
        <div class="w-col w-col-2"><div class="tablerowhead">Номер</div></div>
        <div class="w-col w-col-2"><div class="tablerowhead">Фамилия</div></div>
        <div class="w-col w-col-2"><div class="tablerowhead">Имя</div></div>
        <div class="w-col w-col-2"><div class="tablerowhead">Отчество</div></div>
        <div class="w-col w-col-2"><div class="tablerowhead">Логин</div></div>
        <div class="w-col w-col-2"><div class="tablerowhead">-</div></div>

        <?php foreach ($doctors as $doctor): ?>

            <div class="w-row tabletr">

                <div class="w-col w-col-2"><div><?=$doctor['DRCODE']?></div></div>
                <div class="w-col w-col-2"><div><?=$doctor['SURNAME']?></div></div>
                <div class="w-col w-col-2"><div><?=$doctor['NAME']?></div></div>
                <div class="w-col w-col-2"><div><?=$doctor['SECNAME']?></div></div>
                <div class="w-col w-col-2"><div><?=$doctor['SECNAME']?></div></div>
                <div class="w-col w-col-2"><div></div></div>
            </div>
        <?php endforeach; ?>
    </div>


</div>