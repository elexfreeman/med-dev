<div class="boxed">

    <!--CONTENT CONTAINER-->
    <!--===================================================-->
    <div id="content-container">

        <!--Page Title-->
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <div id="page-title">
            <h1 class="page-header text-overflow">Пациент</h1>

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
            <li><a href="/patients/add">Добавить</a></li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->


        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <?php echo form_open('patients/add', ['class' => '', 'id' => 'patient_add']); ?>
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel">
                        <div class="panel-heading bg-primary">
                            <h3 class="panel-title">Пациент:</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group <?php if (form_error('surname') != '') echo 'has-error'; ?>">
                                        <label class="control-label">Фамилия</label>
                                        <input type="text" name="surname" value="<?php echo set_value('surname'); ?>"
                                               class="form-control"
                                               name="surname">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group <?php if (form_error('name') != '') echo 'has-error'; ?>">
                                        <label class="control-label">Имя</label>
                                        <input type="text" value="<?php echo set_value('name'); ?>"
                                               class="form-control"
                                               name="name">


                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group <?php if (form_error('secname') != '') echo 'has-error'; ?>">
                                        <label class="control-label">Отчество</label>
                                        <input type="text" value="<?php echo set_value('secname'); ?>"
                                               class="form-control"
                                               name="secname">


                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group date">
                                        <label class="control-label">Дата рождения</label>
                                        <input type="text" class="form-control" name="birthday">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <!-- Inline radio buttons -->
                                        <label class="form-radio form-normal form-text"><input type="radio" checked
                                                                                               name="sex">
                                            Мужчина</label>
                                        <label class="form-radio form-normal form-text"><input type="radio" name="sex">
                                            Женщина</label>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel">
                        <div class="panel-heading bg-success">
                            <h3 class="panel-title">Полный адрес:</h3>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Почтовый индекс</label>
                                        <input type="text" name="POST_INDEX" value="<?php echo set_value('surname'); ?>"
                                               class="form-control <?php if (form_error('surname') != '') echo 'has-error'; ?>"
                                               name="surname">

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Регион</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Область</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Город</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Улица</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">Корпус</label>
                                        <input type="text" name="POST_INDEX" value="<?php echo set_value('surname'); ?>"
                                               class="form-control <?php if (form_error('surname') != '') echo 'has-error'; ?>"
                                               name="surname">

                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">Дом</label>
                                        <input type="text" name="POST_INDEX" value="<?php echo set_value('surname'); ?>"
                                               class="form-control <?php if (form_error('surname') != '') echo 'has-error'; ?>"
                                               name="surname">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6">
                    <div class="panel">
                        <div class="panel-heading bg-gray-dark">
                            <h3 class="panel-title">Документ:</h3>
                        </div>

                        <!--Block Styled Form -->
                        <!--===================================================-->

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Тип документа</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Серия</label>
                                        <input type="text" name="doc_series"
                                               value="<?php echo set_value('doc_series'); ?>"
                                               class="form-control <?php if (form_error('surname') != '') echo 'has-error'; ?>">
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Номер</label>
                                        <input type="text" name="doc_number"
                                               value="<?php echo set_value('doc_number'); ?>"
                                               class="form-control <?php if (form_error('doc_number') != '') echo 'has-error'; ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group date">
                                        <label class="control-label">Дата выдачи</label>
                                        <input type="text" value="<?php echo set_value('doc_date'); ?>"
                                               class="form-control <?php if (form_error('doc_date') != '') echo 'has-error'; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group date">
                                        <label class="control-label">Место выдачи</label>
                                        <input type="text" class="form-control" name="doc_source"
                                               value="<?php echo set_value('doc_source'); ?>">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Гражданство</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select name="citizenship" data-placeholder="Выберите из списка" tabindex="2"
                                                class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--===================================================-->
                        <!--End Block Styled Form -->

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel">
                        <div class="panel-heading bg-pink">
                            <h3 class="panel-title">Страхование:</h3>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">tfoms_code</label>
                                        <input type="text" name="tfoms_code" value="<?php echo set_value('tfoms_code'); ?>"
                                               class="form-control <?php if (form_error('tfoms_code') != '') echo 'has-error'; ?>">

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">insurer_type</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select name="insurer_type" data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">polis_type</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select name="polis_type" data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Город</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Улица</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">Корпус</label>
                                        <input type="text" name="POST_INDEX" value="<?php echo set_value('surname'); ?>"
                                               class="form-control <?php if (form_error('surname') != '') echo 'has-error'; ?>"
                                               name="surname">

                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">Дом</label>
                                        <input type="text" name="POST_INDEX" value="<?php echo set_value('surname'); ?>"
                                               class="form-control <?php if (form_error('surname') != '') echo 'has-error'; ?>"
                                               name="surname">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="panel">
                        <div class="panel-heading bg-mint">
                            <h3 class="panel-title">Статус:</h3>
                        </div>

                        <!--Block Styled Form -->
                        <!--===================================================-->

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Тип документа</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Серия</label>
                                        <input type="text" name="doc_series"
                                               value="<?php echo set_value('doc_series'); ?>"
                                               class="form-control <?php if (form_error('surname') != '') echo 'has-error'; ?>">
                                    </div>
                                </div>


                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Номер</label>
                                        <input type="text" name="doc_number"
                                               value="<?php echo set_value('doc_number'); ?>"
                                               class="form-control <?php if (form_error('doc_number') != '') echo 'has-error'; ?>">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group date">
                                        <label class="control-label">Дата выдачи</label>
                                        <input type="text" value="<?php echo set_value('doc_date'); ?>"
                                               class="form-control <?php if (form_error('doc_date') != '') echo 'has-error'; ?>">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group date">
                                        <label class="control-label">Место выдачи</label>
                                        <input type="text" class="form-control" name="doc_source"
                                               value="<?php echo set_value('doc_source'); ?>">
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Гражданство</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select name="citizenship" data-placeholder="Выберите из списка" tabindex="2"
                                                class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!--===================================================-->
                        <!--End Block Styled Form -->

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="panel">
                        <div class="panel-heading bg-purple">
                            <h3 class="panel-title">Работа:</h3>
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Почтовый индекс</label>
                                        <input type="text" name="POST_INDEX" value="<?php echo set_value('surname'); ?>"
                                               class="form-control <?php if (form_error('surname') != '') echo 'has-error'; ?>"
                                               name="surname">

                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Регион</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Область</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Город</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">Улица</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select data-placeholder="Выберите из списка" tabindex="2" class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">Корпус</label>
                                        <input type="text" name="POST_INDEX" value="<?php echo set_value('surname'); ?>"
                                               class="form-control <?php if (form_error('surname') != '') echo 'has-error'; ?>"
                                               name="surname">

                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label class="control-label">Дом</label>
                                        <input type="text" name="POST_INDEX" value="<?php echo set_value('surname'); ?>"
                                               class="form-control <?php if (form_error('surname') != '') echo 'has-error'; ?>"
                                               name="surname">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel">
                    <div class="panel-body  text-right">


                        <button class="btn btn-primary" type="submit">Добавить</button>
                    </div>
            </div>

            </form>
        </div>

    </div>
</div>

