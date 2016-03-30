<?php
/**
 * Created by PhpStorm.
 * User: cod_llo
 * Date: 11.03.16
 * Time: 18:11
 * Главная страница
 */

?>
<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Рабочий стол</h1>

            <!--Searchbox-->
            <div class="searchbox">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Поиск..">
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

        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->




        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
        <div class="row">
            <div class="col-md-6 col-lg-3">

                <!--Registered User-->

                <a href="/f89">
                    <div class="panel media pad-all">
                        <div class="media-left">
									<span class="icon-wrap icon-wrap-sm icon-circle bg-success">
									<i class="fa fa-th fa-2x"></i>
									</span>
                        </div>
                        <div class="media-body">
                            <p class="text-2x mar-no text-thin">Форма 89</p>

                            <p class="text-muted mar-no">Описание</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-md-6 col-lg-3">

                <a href="/f30">
                <div class="panel media pad-all">
                    <div class="media-left">
									<span class="icon-wrap icon-wrap-sm icon-circle bg-info">
									<i class="fa fa-th fa-2x"></i>
									</span>
                    </div>

                    <div class="media-body">
                        <p class="text-2x mar-no text-thin">Форма 30</p>

                        <p class="text-muted mar-no">Описание</p>
                    </div>
                </div>
                <a/>

            </div>
            <div class="col-md-6 col-lg-3">

                <a href="/patients">
                <div class="panel media pad-all">
                    <div class="media-left">
									<span class="icon-wrap icon-wrap-sm icon-circle bg-warning">
									<i class="fa fa-wheelchair fa-2x"></i>
									</span>
                    </div>

                    <div class="media-body">
                        <p class="text-2x mar-no text-thin">Пациенты</p>

                        <p class="text-muted mar-no">Список пациентов</p>
                    </div>
                </div>
                </a>

            </div>
            <div class="col-md-6 col-lg-3">

                <a href="/consults">
                <div class="panel media pad-all">
                    <div class="media-left">
									<span class="icon-wrap icon-wrap-sm icon-circle bg-danger">
									<i class="fa fa-heartbeat fa-2x"></i>
									</span>
                    </div>

                    <div class="media-body">
                        <p class="text-2x mar-no text-thin">Обращения</p>

                        <p class="text-muted mar-no">Описание</p>
                    </div>
                </div>
                </a>
            </div>
        </div>
        </div>
    </div>
</div>


