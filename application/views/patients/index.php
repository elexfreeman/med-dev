<div class="w-container">
    <h1 class="body-h1"><?php echo $text_h1;?> <span class="body-h1-span">(<?php echo $text_description;?>)</span>
    </h1>
</div>

<div class="w-container body-container">
    <table class="table">
        <tr class="table-head">
            <th>ID</th>
            <th>Пол</th>
            <th>ФИО</th>

            <th>Дата рождения</th>

            <th colspan="2">
                <a href="/patients/add">
                 Добавить<img src="/images/icons/document-add-w.png" class="table-icon">
                </a>
            </th>
        </tr>
        <?php
        foreach($patients as $patient)
        {
          ?>
            <tr>
                <td><?=$patient['id']?></td>
                <td>
                    <img src="/images/icons/<?php if($patient['sex']==1)
                        echo 'human-512.png'; else echo 'woman-512.png';
                    ?>" class="table-icon">
                </td>
                <td><a class="tabletdlink" href="/patients/edit/<?=$patient['id']?>"><?=$patient['surname']?> <?=$patient['name']?> <?=$patient['secname']?></a></td>

                <td><?php echo date( 'm.d.Y', strtotime($patient['birthday']) );?></td>
                <td>
                    <a class="tabletdlink" href="/patients/edit/<?=$patient['id']?>">
                        Изменить<img src="/images/icons/document-edit.png" class="table-icon">
                    </a>
                </td>
                <td>Удалить<img src="/images/icons/trash-can.png" class="table-icon"></td>
            </tr>
            <?php
        }
        ?>

    </table>

</div>