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
        <div class="row">
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr class="table-head ">
                            <th>ID</th>
                            <th>Пол</th>
                            <th>ФИО</th>

                            <th>Дата рождения</th>

                            <th colspan="2">
                                <a href="/patients/add">
                                    <i class="fa fa-plus"></i>Добавить
                                </a>
                            </th>
                        </tr>
                        <?php
                        foreach($patients as $patient)
                        {
                            ?>
                            <tr>
                                <td><?=$patient['id']?></td>
                                <td><?php if($patient['sex']==1)
                                        echo '<i class="fa fa-male"></i>'; else echo '<i class="fa fa-female"></i>';
                                    ?></td>
                                <td><a class="tabletdlink" href="/patients/edit/<?=$patient['id']?>"><?=$patient['surname']?> <?=$patient['name']?> <?=$patient['secname']?></a></td>

                                <td><?php echo date( 'm.d.Y', strtotime($patient['birthday']) );?></td>
                                <td>
                                    <a class="tabletdlink" href="/patients/edit/<?=$patient['id']?>">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                </td>
                                <td><div class="toolbar">
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
