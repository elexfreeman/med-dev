<div class="w-container">
    <h1 class="body-h1">Пациент&nbsp;<span class="body-h1-span">(редактирование)</span></h1>
</div>
<div class="w-container patient-container">
    <div class="w-form">

        <?php echo form_open('patients/edit/'.$patient->id,['class' => '', 'id' => 'patient_edit']); ?>
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
                               value="<?php echo date( 'm.d.Y', strtotime($patient->birthday) ); ?>"
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
            <div class="w-clearfix"><strong>Документ: </strong><?php echo $patient->patient_doc->doc_type; ?>
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
                        <option value="">Select one...</option>

                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-3">
                    <label for="REGION-2" class="form-label">серия:</label>
                    <select id="REGION-2" name="REGION-2" data-name="Region 2" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-3">
                    <label for="AREA-4" class="form-label">Номер:</label>
                    <select id="AREA-4" name="AREA" data-name="AREA" class="w-select">
                        <option value="">Select one...</option>
                        <option value="First">First Choice</option>
                        <option value="Second">Second Choice</option>
                        <option value="Third">Third Choice</option>
                    </select>
                </div>
                <div class="w-col w-col-3">
                    <label for="house-7" class="form-label">Дата выдачи:</label>
                    <input id="house-7" type="text" name="house-7"  data-name="House 7" class="w-input form-text-field">
                </div>
            </div>
            <div class="w-row">
                <div class="w-col w-col-6">
                    <label for="CORPUS-3" class="form-label">Место выдачи:</label>
                    <input id="CORPUS-3" type="text" name="CORPUS-3"  data-name="Corpus 3" class="w-input form-text-field">
                </div>
                <div class="w-col w-col-6">
                    <label for="CORPUS-2" class="form-label">citizenship</label>
                    <input id="CORPUS-2" type="text" name="CORPUS-2"  data-name="Corpus 2" class="w-input form-text-field">
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