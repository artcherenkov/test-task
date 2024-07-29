<?php
function render_style($id): string
{
    return "
    <style>
        #rec{$id} input::-webkit-input-placeholder {
            color: #181818;
            opacity: 0.5;
        }
    
        #rec{$id} input::-moz-placeholder {
            color: #181818;
            opacity: 0.5;
        }
    
        #rec{$id} input:-moz-placeholder {
            color: #181818;
            opacity: 0.5;
        }
    
        #rec{$id} input:-ms-input-placeholder {
            color: #181818;
            opacity: 0.5;
        }
    
        #rec{$id} textarea::-webkit-input-placeholder {
            color: #181818;
            opacity: 0.5;
        }
    
        #rec{$id} textarea::-moz-placeholder {
            color: #181818;
            opacity: 0.5;
        }
    
        #rec{$id} textarea:-moz-placeholder {
            color: #181818;
            opacity: 0.5;
        }
    
        #rec{$id} textarea:-ms-input-placeholder {
            color: #181818;
            opacity: 0.5;
        }
    
        @media screen and (max-width: 560px) {
            #rec{$id} .t-popup__close-icon g {
                fill: #ffffff !important;
            }
        }
    
        #rec{$id} .t702__title {
            font-family: 'Montserrat';
        }
    
        #rec{$id} .t702__descr {
            font-family: 'Montserrat';
        }
    </style>";
}

function render_popup_form($id, $idx, $title): string
{
    $style = render_style($id);
    return "
    <div id='rec{$id}' class='r t-rec' data-animationappear='off' data-record-type='702' data-extra-form-id='{$id}'>
        {$style}
        <!-- T702 -->
        <div class='t702'>
            <div class='t-popup' data-tooltip-hook='#tarif{$idx}' role='dialog' aria-modal='true' tabindex='-1' aria-label='Тариф {$title}'>
                <div class='t-popup__close t-popup__block-close'>
                    <button type='button' class='t-popup__close-wrapper t-popup__block-close-button' aria-label='Закрыть диалоговое окно'>
                        <svg role='presentation' class='t-popup__close-icon' width='23px' height='23px' viewBox='0 0 23 23' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'>
                            <g stroke='none' stroke-width='1' fill='#fff' fill-rule='evenodd'>
                                <rect transform='translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708)' x='10.3137085' y='-3.6862915' width='2' height='30'></rect>
                                <rect transform='translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708)' x='10.3137085' y='-3.6862915' width='2' height='30'></rect>
                            </g>
                        </svg>
                    </button>
                </div>
                <div class='t-popup__container t-width t-width_6'>
                    <div class='t702__wrapper'>
                        <div class='t702__text-wrapper t-align_center'>
                            <div class='t702__title t-title t-title_xxs' id='popuptitle_{$id}'>
                                Тариф «{$title}»
                            </div>
                            <div class='t702__descr t-descr t-descr_xs'>
                                Запишитесь в предварительный список, чтобы забронировать место по самой низкой цене.
                            </div>
                        </div>
                        <form id='form{$id}' name='form{$id}' role='form' action='display_data.php' method='POST' class='t-form t-form_inputs-total_8'>
                            <input type='hidden' name='form_id' value='{$id}' />
                            <input type='hidden' name='form_title' value='{$title}' />
                            <!-- NO ONE SERVICES CONNECTED -->
                            <div class='js-successbox t-form__successbox t-text t-text_md' aria-live='polite' style='display: none'></div>
                            <div class='t-form__inputsbox t-form__inputsbox_vertical-form t-form__inputsbox_inrow'>
                                <div class='t-input-group t-input-group_nm' data-input-lid='1495810359387' data-field-type='nm'>
                                    <div class='t-input-block' style='border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;'>
                                        <input type='text' name='Name' id='input_1495810359387' class='t-input js-tilda-rule' value='' placeholder='Ваше имя:' style='color: #181818; border: 1px solid #c9c9c9; border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;' />
                                        <div class='t-input-error' aria-live='polite' id='error_1495810359387'></div>
                                    </div>
                                </div>
                                <div class='t-input-group t-input-group_em' data-input-lid='1495810354468' data-field-type='em'>
                                    <div class='t-input-block' style='border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;'>
                                        <input type='email' name='Email' id='input_1495810354468' class='t-input js-tilda-rule' value='' placeholder='Ваш email:' style='color: #181818; border: 1px solid #c9c9c9; border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;' />
                                        <div class='t-input-error' aria-live='polite' id='error_1495810354468'></div>
                                    </div>
                                </div>
                                <div class='t-input-group t-input-group_ph' data-input-lid='1495810410810' data-field-type='ph'>
                                    <div class='t-input-block' style='border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;'>
                                        <input type='tel' name='Phone' id='input_1495810410810' class='t-input js-tilda-rule' value='' placeholder='Ваш телефон:' pattern='[0-9]*' style='color: #181818; border: 1px solid #c9c9c9; border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;' />
                                        <div class='t-input-error' aria-live='polite' id='error_1495810410810'></div>
                                    </div>
                                </div>
                                <div class='t-input-group t-input-group_cb' data-input-lid='1639138424970' data-field-type='cb'>
                                    <div class='t-input-block' style='border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;'>
                                        <label class='t-checkbox__control t-text t-text_xs'>
                                            <input type='checkbox' name='Checkbox' value='yes' class='t-checkbox js-tilda-rule' checked data-tilda-req='1' aria-required='true' />
                                            <div class='t-checkbox__indicator'></div>
                                            Даю
                                            <a href='https://lp.insidium.ru/personal.pdf' target='_blank' rel='noreferrer noopener' style='color: rgb(217, 173, 96); border-bottom: 1px solid rgb(217, 173, 96); box-shadow: none; text-decoration: none;'>согласие на обработку моих персональных данных</a>
                                        </label>
                                        <div class='t-input-error' aria-live='polite' id='error_1639138424970'></div>
                                    </div>
                                </div>
                                <div class='t-input-group t-input-group_cb' data-input-lid='1677491269997' data-field-type='cb'>
                                    <div class='t-input-block' style='border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;'>
                                        <label class='t-checkbox__control t-text t-text_xs'>
                                            <input type='checkbox' name='Checkbox_2' value='yes' class='t-checkbox js-tilda-rule' checked data-tilda-req='1' aria-required='true' />
                                            <div class='t-checkbox__indicator'></div>
                                            Принимаю условия
                                            <a href='https://lp.insidium.ru/oferta.pdf' target='_blank' rel='noreferrer noopener' style='color: rgb(217, 173, 96); border-bottom: 1px solid rgb(217, 173, 96); box-shadow: none; text-decoration: none;'>публичной оферты</a>
                                        </label>
                                        <div class='t-input-error' aria-live='polite' id='error_1677491269997'></div>
                                    </div>
                                </div>
                                <div class='t-input-group t-input-group_cb' data-input-lid='1639138548689' data-field-type='cb'>
                                    <div class='t-input-block' style='border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;'>
                                        <label class='t-checkbox__control t-text t-text_xs'>
                                            <input type='checkbox' name='Checkbox_3' value='yes' class='t-checkbox js-tilda-rule' data-tilda-req='1' aria-required='true' />
                                            <div class='t-checkbox__indicator'></div>
                                            * Оплачивая билет по бонусной цене, я отдаю себе отчет, что он является невозвратным и не подлежит переносу.
                                        </label>
                                        <div class='t-input-error' aria-live='polite' id='error_1639138548689'></div>
                                    </div>
                                </div>
                                <div class='t-input-group t-input-group_cb' data-input-lid='1693982213712' data-field-type='cb'>
                                    <div class='t-input-block' style='border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;'>
                                        <label class='t-checkbox__control t-text t-text_xs'>
                                            <input type='checkbox' name='Checkbox_4' value='yes' class='t-checkbox js-tilda-rule' data-tilda-req='1' aria-required='true' />
                                            <div class='t-checkbox__indicator'></div>
                                            Ознакомился
                                            <a href='https://lp.insidium.ru/strategia-proriva-pravila.pdf' target='_blank' rel='noreferrer noopener' style='color: rgb(217, 173, 96); border-bottom-color: rgb(217, 173, 96); border-bottom-style: solid; box-shadow: none; text-decoration: none;'><u>с правилами участия в программе</u></a>
                                        </label>
                                        <div class='t-input-error' aria-live='polite' id='error_1693982213712'></div>
                                    </div>
                                </div>
                                <div class='t-input-group t-input-group_cb' data-input-lid='1705053989439' data-field-type='cb'>
                                    <div class='t-input-block' style='border-radius: 10px; -moz-border-radius: 10px; -webkit-border-radius: 10px;'>
                                        <label class='t-checkbox__control t-text t-text_xs'>
                                            <input type='checkbox' name='Checkbox_5' value='yes' class='t-checkbox js-tilda-rule' data-tilda-req='1' aria-required='true' />
                                            <div class='t-checkbox__indicator'></div>
                                            Отсутствие на тренинге более 2-х часов невозможно.<br />В этом случае вы не будете допущены в зал.
                                        </label>
                                        <div class='t-input-error' aria-live='polite' id='error_1705053989439'></div>
                                    </div>
                                </div>
                                <div class='t-form__errorbox-middle'>
                                    <div class='js-errorbox-all t-form__errorbox-wrapper' style='display: none' data-nosnippet tabindex='-1' aria-label='Ошибки при заполнении формы'>
                                        <ul role='list' class='t-form__errorbox-text t-text t-text_md'>
                                            <li class='t-form__errorbox-item js-rule-error js-rule-error-all'></li>
                                            <li class='t-form__errorbox-item js-rule-error js-rule-error-req'></li>
                                            <li class='t-form__errorbox-item js-rule-error js-rule-error-email'></li>
                                            <li class='t-form__errorbox-item js-rule-error js-rule-error-name'></li>
                                            <li class='t-form__errorbox-item js-rule-error js-rule-error-phone'></li>
                                            <li class='t-form__errorbox-item js-rule-error js-rule-error-minlength'></li>
                                            <li class='t-form__errorbox-item js-rule-error js-rule-error-string'></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class='t-form__submit'>
                                    <button type='submit' class='t-submit' style='color: #2b2a2e; background-color: #d9ad60; border-radius: 20px; -moz-border-radius: 20px; -webkit-border-radius: 20px; text-transform: uppercase;' data-field='buttontitle' data-buttonfieldset='button'>
                                        ЗАБРОНИРОВАТЬ
                                    </button>
                                </div>
                            </div>
                            <div class='t-form__errorbox-bottom'>
                                <div class='js-errorbox-all t-form__errorbox-wrapper' style='display: none' data-nosnippet tabindex='-1' aria-label='Ошибки при заполнении формы'>
                                    <ul role='list' class='t-form__errorbox-text t-text t-text_md'>
                                        <li class='t-form__errorbox-item js-rule-error js-rule-error-all'></li>
                                        <li class='t-form__errorbox-item js-rule-error js-rule-error-req'></li>
                                        <li class='t-form__errorbox-item js-rule-error js-rule-error-email'></li>
                                        <li class='t-form__errorbox-item js-rule-error js-rule-error-name'></li>
                                        <li class='t-form__errorbox-item js-rule-error js-rule-error-phone'></li>
                                        <li class='t-form__errorbox-item js-rule-error js-rule-error-minlength'></li>
                                        <li class='t-form__errorbox-item js-rule-error js-rule-error-string'></li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        <div class='t702__form-bottom-text t-text t-text_xs t-align_center'>
                            <p style='text-align: center'>
                                <span style='font-family: Jost'>*Заполняя форму, вы гарантированно закрепляете за собой место по специальным условиям.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            t_onReady(function() {
                t_onFuncLoad('t702_initPopup', function() {
                    t702_initPopup('{$id}');
                });
            });
        </script>
    </div>
    ";
}
