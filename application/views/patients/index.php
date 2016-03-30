div class="boxed">

<!--CONTENT CONTAINER-->
<!--===================================================-->
<div id="content-container">

    <!--Page Title-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <div id="page-title">
        <h1 class="page-header text-overflow">Пациенты</h1>

        <!--Searchbox-->
        <div class="searchbox">
            <div class="input-group custom-search-form">
                <input type="text" class="form-control" placeholder="Search..">
							<span class="input-group-btn">
								<button class="text-muted" type="button"><i class="fa fa-search"></i></button>
							</span>
            </div>
        </div>
    </div>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End page title-->


    <!--Breadcrumb-->
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <ol class="breadcrumb">
        <li><a href="/">Рабочий стол</a></li>
        <li><a href="/patients">Пациенты</a></li>

    </ol>
    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
    <!--End breadcrumb-->




    <!--Page content-->
    <!--===================================================-->
    <div id="page-content">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Список пациентов</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Пол</th>
                            <th>ФИО</th>

                            <th>Дата рождения</th>

                            <th colspan="2">
                                <div class="toolbar">
                                    <div id="demo-custom-toolbar" class="table-toolbar-left">
                                        <a href="/patients/add"
                                           class="btn btn-success  btn-labeled fa fa-plus">Добавить</a>
                                    </div>
                                </div>

                            </th>
                        </tr>
                        <?php
                        foreach($patients as $patient)
                        {
                            ?>
                            <tr>
                                <td><?=$patient['id']?></td>
                                <td>
                                    <span class="icon-wrap icon-circle bg-<?php if($patient['sex']==1) echo 'primary'; else echo 'pink'; ?>">
                                        <i class="fa fa-<?php if($patient['sex']==1) echo 'male'; else echo 'female'; ?>"></i>
                                    </span>

                                </td>
                                <td><a class="tabletdlink" href="/patients/edit/<?=$patient['id']?>"><?=$patient['surname']?> <?=$patient['name']?> <?=$patient['secname']?></a></td>

                                <td><?php echo date( 'm.d.Y', strtotime($patient['birthday']) );?></td>
                                <td>
                                    <div class="toolbar">
                                        <div id="demo-custom-toolbar" class="table-toolbar-left">
                                            <a href="/patients/edit/<?=$patient['id']?>"
                                               class="btn btn-primary  btn-labeled fa fa-edit">Изменить</a>
                                        </div>
                                    </div>

                                </td>
                                <td>
                                    <div class="toolbar">
                                        <div id="demo-custom-toolbar" class="table-toolbar-left">
                                            <a id="demo-dt-delete-btn" class="btn btn-danger btn-labeled fa fa-times">Удалить</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>

                    </table>
                </div>
            </div>


        </div>
    </div>
</div>
