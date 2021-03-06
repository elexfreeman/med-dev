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
                    <input type="text" class="form-control" placeholder="Поиск..">
							<span class="input-group-btn">
								<button class="text-muted" type="button">
                                    <i class="fa fa-search"></i></button>
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
            <li><a href="/patients/add">Редактировать</a></li>
        </ol>
        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
        <!--End breadcrumb-->


        <!--Page content-->
        <!--===================================================-->
        <div id="page-content">
            <?php echo form_open('patients/edit/'.$patient->id,['class' => '', 'id' => 'patient_edit']); ?>
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
                                        <input type="text" name="surname" value="<?php echo $surname; ?>"

                                               class="form-control"
                                               name="surname">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group <?php if (form_error('name') != '') echo 'has-error'; ?>">
                                        <label class="control-label">Имя</label>
                                        <input type="text"  value="<?php echo $name; ?>"
                                               class="form-control"
                                               name="name">


                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group <?php if (form_error('secname') != '') echo 'has-error'; ?>">
                                        <label class="control-label">Отчество</label>
                                        <input type="text" value="<?php echo $secname; ?>"
                                               class="form-control"
                                               name="secname">


                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group date" id="birthday">
                                        <label class="control-label">Дата рождения</label>
                                        <input value="<?php echo $patient->birthday; ?>" type="text" class=" hasDatepicker form-control" name="birthday">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="radio">
                                        <!-- Inline radio buttons -->
                                        <label class="form-radio form-normal form-text">
                                            <input type="radio" checked name="sex" value="1">
                                            Мужчина</label>
                                        <label class="form-radio form-normal form-text">
                                            <input type="radio" name="sex" value="2">
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
                                        <label class="control-label">id_f002</label>
                                        <input type="text" name="id_f002" value="<?php echo set_value('id_f002'); ?>"
                                               class="form-control <?php if (form_error('id_f002') != '') echo 'has-error'; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
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

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">polis_seriece</label>
                                        <input type="text" name="polis_seriece" value="<?php echo set_value('polis_seriece'); ?>"
                                               class="form-control <?php if (form_error('polis_seriece') != '') echo 'has-error'; ?>" >

                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">polis_number</label>
                                        <input type="text" name="polis_number" value="<?php echo set_value('polis_number'); ?>"
                                               class="form-control <?php if (form_error('polis_number') != '') echo 'has-error'; ?>">
                                    </div>
                                </div>

                            </div>

                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">date_begin</label>
                                        <input type="text" name="date_begin"
                                               value="<?php echo set_value('date_begin'); ?>"
                                               class="form-control <?php if (form_error('date_begin') != '') echo 'has-error'; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">date_end</label>
                                        <input type="text" name="date_end" value="<?php echo set_value('date_end'); ?>"
                                               class="form-control <?php if (form_error('date_end') != '') echo 'has-error'; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">mo_attache</label>
                                        <input type="text" name="mo_attache"
                                               value="<?php echo set_value('mo_attache'); ?>"
                                               class="form-control <?php if (form_error('mo_attache') != '') echo 'has-error'; ?>">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="control-label">mo_date_attache</label>
                                        <input type="text" name="mo_date_attache"
                                               value="<?php echo set_value('mo_date_attache'); ?>"
                                               class="form-control <?php if (form_error('mo_date_attache') != '') echo 'has-error'; ?>">
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
                                        <label class="control-label">family_status</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select name="family_status" data-placeholder="Выберите из списка" tabindex="2"
                                                class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">small_status</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select name="small_status" data-placeholder="Выберите из списка" tabindex="2"
                                                class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">social_status</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select name="social_status" data-placeholder="Выберите из списка" tabindex="2"
                                                class="form-control">
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
                                        <label class="control-label">is_goverment</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <label class="form-checkbox form-normal form-primary form-text">
                                            <input name="is_goverment" value="1" type="checkbox"> Да
                                        </label>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">citizen_status</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select name="citizen_status" data-placeholder="Выберите из списка" tabindex="2"
                                                class="form-control">
                                            <option value="">Выберите из списка...</option>
                                            <option value="First">First Choice</option>
                                            <option value="Second">Second Choice</option>
                                            <option value="Third">Third Choice</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="control-label">citizen_category</label>
                                        <!-- Default choosen -->
                                        <!--===================================================-->
                                        <select name="citizen_category" data-placeholder="Выберите из списка" tabindex="2"
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

<div class="w-container">
    <h1 class="body-h1">Пациент&nbsp;<span class="body-h1-span">(редактирование)</span></h1>
</div>
<pre style="display: none">
    <?php /*Тут вся инфо об пациенте*/print_r($patient);?>
</pre>
<div class="w-container patient-container">
    <div class="w-form">

        <?php echo form_open('patients/edit/'.$patient->id,['class' => '', 'id' => 'patient_edit']); ?>
        <input type="hidden" name="patient_doc_id" value="<?php echo $patient->patient_doc->id; ?>" >
        <div class="w-row">
            <div class="w-col w-col-3 from-patient-sex">
                <img src="<?php if($patient->sex==1) echo $this->config->item('man_img');else  echo $this->config->item('wooman_img'); ?>" class="patient-edit-sex">
                <div class="w-radio form-radio-line">
                    <input id="man" type="radio" name="sex"  value="1"
                        <?php if($patient->sex==1) echo 'checked'; ?>
                        <?php echo set_checkbox('sex', '1',$patient->sex==1); ?>
                           data-name="sex" class="w-radio-input">
                    <label for="man" class="w-form-label">Мужчина</label>
                </div>
                <div class="w-radio form-radio-line">
                    <input id="wooman" type="radio" name="sex" value="2"
                        <?php if($patient->sex==2) echo 'checked'; ?>
                           data-name="sex" class="w-radio-input">
                    <label for="wooman" class="w-form-label">Женщина</label>
                </div>
            </div>
            <div class="w-col w-col-9">
                <div class="w-row">
                    <div class="w-col w-col-3 parient-col-p">
                        <label for="surname" class="form-label">фамилия:</label>

                        <input id="surname" type="text"
                               value="<?php echo $surname; ?>"
                               placeholder="Фамилия" name="surname"
                               class="w-input form-text-field <?php if(form_error('surname')!='') echo 'form-error-input'; ?>">
                    </div>
                    <div class="w-col w-col-3">
                        <label for="name" class="form-label">имя:</label>

                        <input id="name" type="text"
                               value="<?php echo $name; ?>"
                               placeholder="Имя" name="name"  data-name="Name 2"
                               class="w-input form-text-field <?php if(form_error('name')!='') echo 'form-error-input'; ?>">
                    </div>
                    <div class="w-col w-col-3">
                        <label for="secname" class="form-label">отчество:</label>
                        <input id="secname" type="text"
                               value="<?php echo $secname; ?>"
                               placeholder="Отчество" name="secname"  data-name="secname"
                               class="w-input form-text-field <?php if(form_error('secname')!='') echo 'form-error-input'; ?>">
                    </div>
                    <div class="w-col w-col-3">
                        <label for="birthday" class="form-label">Дата рождения:</label>
                        <input id="birthday" type="text" placeholder="00.00.0000" name="birthday"
                               value="<?php echo $patient->birthday; ?>"
                               data-name="birthday" class="hasDatepicker w-input form-text-field">
                    </div>
                </div>
                <div class="w-row">
                    <div class="w-col w-col-4">
                        <label for="snils" class="form-label">СНИЛС:</label>
                        <input id="snils" type="text" placeholder="0000000000" name="snils"  data-name="snils" class="w-input form-text-field">
                    </div>
                    <div class="w-col w-col-4">
                        <label for="enp" class="form-label">ЕНП:</label>
                        <input id="enp" type="text" placeholder="00.00.0000" name="enp"  data-name="enp" class="w-input form-text-field">
                    </div>
                    <div class="w-col w-col-4">
                        <label for="mpi" class="form-label">МПИ:</label>
                        <input id="mpi" type="text" placeholder="00.00.0000" name="mpi"  data-name="mpi" class="w-input form-text-field">
                    </div>
                </div>
            </div>
        </div>
        <div class="from-tab">
            <div class="w-clearfix"><strong>Полный адрес:</strong> 612961, Самара ул. Садовая д. 78, кв 4 <span class="form-plus">+</span>
            </div>
        </div>
        <div class="from-tab-content">
            <div class="w-row">
                <div class="w-col w-col-3">
                    <label for="POST_INDEX" class="form-label">Почтовый индекс:</label>
                    <input id="POST_INDEX" type="text" name="POST_INDEX"  data-name="POST_INDEX" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-3">
                    <label for="REGION" class="form-label">регион:</label>
                    <select id="REGION" name="REGION" data-name="REGION" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-3">
                    <label for="AREA-4" class="form-label">область:</label>
                    <select id="AREA-4" name="AREA" data-name="AREA" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-3">
                    <label for="CITY-3" class="form-label">город:</label>
                    <select id="CITY-3" name="CITY" data-name="CITY" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
            </div>
            <div class="w-row">
                <div class="w-col w-col-3">
                    <label for="street-4" class="form-label">улица:</label>
                    <select id="street-4" name="street" data-name="street" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-1">
                    <label for="CORPUS" class="form-label">корпус:</label>
                    <input id="CORPUS" type="text" name="CORPUS"  data-name="CORPUS" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-2">
                    <label for="house-5" class="form-label">дом:</label>
                    <input id="house-5" type="text" name="house"  data-name="house" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-2">
                    <label for="HOUSELITER-2" class="form-label">ДОМ буква:</label>
                    <input id="HOUSELITER-2" type="text" name="HOUSELITER-2"  data-name="Houseliter 2" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-2">
                    <label for="FLAT-2" class="form-label">КВ:</label>
                    <input id="FLAT-2" type="text" name="FLAT-2"  data-name="Flat 2" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-2">
                    <label for="FLATLITER-2" class="form-label">КВ буква:</label>
                    <input id="FLATLITER-2" type="text" name="FLATLITER-2"  data-name="Flatliter 2" class="w-input form-text-field">
                </div>
            </div>
            <div class="w-row">
                <div class="w-col w-col-3">
                    <label for="area-5" class="form-label">AREA:</label>
                    <select id="area-5" name="area-5" data-name="Area 5" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-3">
                    <label for="city-4" class="form-label">CITY</label>
                    <select id="city-4" name="city-4" data-name="City 4" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-3">
                    <label for="street-3" class="form-label">STREET:</label>
                    <select id="street-3" name="street-3" data-name="Street 3" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-3">
                    <label for="house-3" class="form-label">HOUSE:</label>
                    <input id="house-3" type="text" name="house-3"  data-name="House 3" class="w-input form-text-field">
                </div>
            </div>
        </div>

        <div class="from-tab">
            <div class="w-clearfix"><strong>Документ: </strong><?php echo $patient->patient_doc->doc_type_caption; ?>
                <?php echo $patient->patient_doc->doc_series; ?> <?php echo $patient->patient_doc->doc_number; ?><span class="form-plus">+</span>
            </div>
        </div>
        <div class="from-tab-content">
            <div class="w-row">
                <div class="w-col w-col-3">
                    <label for="doc_type" class="form-label">Тип документа:</label>
                    <select id="doc_type" name="doc_type" data-name="doc_type" class="w-select">
                        <?php
                        foreach($patient->doc_type as $doc_type)
                        {
                        ?>
                            <option value="<?php echo $doc_type->id; ?>" <?php if($doc_type->doc) echo " selected "; ?>><?php echo $doc_type->caption; ?></option>
                        <?php
                        }
                        ?>

                    </select>
                </div>
                <div class="w-col w-col-3">
                    <label for="doc_series" class="form-label">серия:</label>
                    <input id="doc_series" type="text" placeholder="0000"
                           value="<?php echo $patient->patient_doc->doc_series; ?>"
                           name="doc_series"  data-name="doc_series" class="w-input form-text-field">


                </div>
                <div class="w-col w-col-3">
                    <label for="AREA-4" class="form-label">Номер:</label>
                    <input id="doc_number" type="text" placeholder="0000"
                           value="<?php echo $patient->patient_doc->doc_number; ?>"
                           name="doc_number"  data-name="doc_number" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-3">
                    <label for="doc_date" class="form-label">Дата выдачи:</label>
                    <input id="doc_date" type="text"
                           value="<?php echo $patient->patient_doc->doc_date; ?>"
                           name="doc_date"  data-name="doc_date" class="w-input form-text-field hasDatepicker <?php if(form_error('doc_date')!='') echo 'form-error-input'; ?>"">
                </div>
            </div>
            <div class="w-row">
                <div class="w-col w-col-6">
                    <label for="doc_source" class="form-label">Место выдачи:</label>
                    <input id="doc_source" type="text"
                           value="<?php echo $patient->patient_doc->doc_source; ?>"
                           name="doc_source"  data-name="doc_source" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-6">
                    <label for="citizenship" class="form-label">Гражданство</label>
                    <input id="citizenship" type="text"
                           value="<?php echo $patient->patient_doc->citizenship; ?>"
                           name="citizenship"  data-name="citizenship" class="w-input form-text-field">
                </div>
            </div>
        </div>

        <div class="from-tab">
            <div class="w-clearfix"><strong>Страхование:</strong>&nbsp;<span class="form-plus">+</span>
            </div>
        </div>
        <div class="from-tab-content ">
            <div class="w-row">
                <div class="w-col w-col-3">
                    <label for="tfoms_code" class="form-label">Код Тфомс:</label>
                    <input id="tfoms_code" type="text" name="tfoms_code"  data-name="tfoms_code" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-3">
                    <label for="insurer_type" class="form-label">insurer_type</label>
                    <select id="insurer_type" name="insurer_type" data-name="insurer_type" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-3">
                    <label for="polis_type" class="form-label">polis_type</label>
                    <select id="polis_type" name="polis_type" data-name="polis_type" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-3">
                    <label for="polis_number" class="form-label">polis_number</label>
                    <input id="polis_number" type="text" name="polis_number"  data-name="polis_number" class="w-input form-text-field">
                </div>
            </div>
            <div class="w-row">
                <div class="w-col w-col-3">
                    <label for="polis_seriece" class="form-label">polis_seriece</label>
                    <input id="polis_seriece" type="text" name="polis_seriece"  data-name="polis_seriece" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-3">
                    <label for="mo_attache" class="form-label">mo_attache</label>
                    <input id="mo_attache" type="text" name="mo_attache"  data-name="mo_attache" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-3">
                    <label for="mo_date_attache" class="form-label">mo_date_attache</label>
                    <input id="mo_date_attache" type="text" name="mo_date_attache"  data-name="mo_date_attache" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-3">
                    <label for="id_f" class="form-label">id_f002</label>
                    <select id="id_f" name="id_f002" data-name="id_f002" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="from-tab">
            <div class="w-clearfix"><strong>Статус:</strong>&nbsp;<span class="form-plus">+</span>
            </div>
        </div>
        <div class="from-tab-content">
            <div class="w-row">
                <div class="w-col w-col-4">
                    <label for="family_status" class="form-label">Семейное положение</label>
                    <select id="family_status" name="family_status" data-name="family_status" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-4">
                    <label for="small_status" class="form-label">small_status</label>
                    <select id="small_status" name="small_status" data-name="small_status" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-4">
                    <label for="social_status" class="form-label">social_status</label>
                    <select id="social_status" name="social_status" data-name="social_status" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
            </div>
            <div class="w-row">
                <div class="w-col w-col-4">
                    <label for="id_f" class="form-label">citizen_category</label>
                    <select id="id_f" name="id_f002" data-name="id_f002" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-4">
                    <label for="citizen_status" class="form-label">citizen_status</label>
                    <select id="citizen_status" name="citizen_status" data-name="citizen_status" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-4">
                    <label for="mo_date_attache-2" class="form-label">is_goverment</label>
                    <div class="w-checkbox">
                        <input id="is_goverment" type="checkbox" name="is_goverment" data-name="is_goverment" class="w-checkbox-input">
                        <label for="is_goverment" class="w-form-label">Да</label>
                    </div>
                </div>
            </div>
        </div>


        <div class="from-tab">
            <div class="w-clearfix"><strong>Работа:</strong>&nbsp;<span class="form-plus">+</span>
            </div>
        </div>
        <div class="from-tab-content">
            <div class="w-row">
                <div class="w-col w-col-4">
                    <label for="work_place" class="form-label">Место работы:</label>
                    <input id="work_place" type="text" name="work_place"  data-name="work_place" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-4">
                    <label for="PROFESSION" class="form-label">profession</label>
                    <input id="PROFESSION" type="text" name="PROFESSION"  data-name="PROFESSION" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-4">
                    <label for="education" class="form-label">education</label>
                    <select id="education" name="education" data-name="education" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
            </div>
            <div class="w-row">
                <div class="w-col w-col-4">
                    <label for="okved" class="form-label">okved</label>
                    <input id="okved" type="text" name="okved"  data-name="okved" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-4">
                    <label for="dependent" class="form-label">dependent</label>
                    <input id="dependent" type="text" name="dependent"  data-name="dependent" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-4">
                    <label for="position_at_work" class="form-label">position_at_work</label>
                    <input id="position_at_work" type="text" name="position_at_work"  data-name="position_at_work" class="w-input form-text-field">
                </div>
            </div>
        </div>

        <div class="form-validator">
            <?php echo validation_errors(); ?>
        </div>
        <div class="form-button-arrea">
            <input type="submit"  value="Сохранить" data-wait="Please wait..." class="w-button form-button">
        </div>
        </form>

    </div>
</div>