<?php


function render_block_form(): string
{
    return '
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Mulish&family=Montserrat&family=Noto+Sans:wght@400;600&display=swap");
        
        * {
            box-sizing: border-box;
        }
        .form-container {
            border-width: 1px;
            border-radius: 20px;
            background-position: center center;
            border-color: #b58a84;
            border-style: solid;
            box-sizing: border-box;
            padding: 24px 12px 30px;
            max-width: 460px;
            width: 100%;
            position: absolute;
            z-index: 3;
            top: 100px;
            left: calc(50% - 600px + 640px);
            display: flex;
            flex-direction: column;
        }
        .form-container h2 {
            color: #feaf39;
            font-size: 34px;
            font-family: "Mulish", Arial, sans-serif;
            text-align: center;
        }
        .form-container p {
            color: #ffffff;
            font-size: 20px;
            line-height: 28px;
            font-family: "Mulish", Arial, sans-serif;
            text-align: center;
            margin-bottom: 10px;
        }
        .form-container form {
            max-width: 400px;
            align-self: center;
        }
        .form-container__input {
            border: 1px solid #ebf5ff;
            background-color: #ebf5ff;
            width: 100%;
            box-sizing: border-box;
            color: #1c3749;
            border-radius: 40px;
            font-size: 16px;
            font-weight: 400;
            height: 80px;
            padding: 0 20px;
            outline: none;
            text-align: center;
            margin: 0 0 20px;
        }
        .form-container__input:last-child {
          margin-bottom: 16px;
        }      
        .form-container__submit {
            cursor: pointer;
            width: 100%;
            height: 100px;
            padding: 0 15px;
            border: 0;
            border-radius: 35px;
            font-weight: 700;
            font-size: 22px;
            color: #2b2a2e;
            background: #d9ad60;
            box-sizing: border-box;
            outline: none;
            position: relative;
            overflow: hidden;
            background-image: -moz-linear-gradient(90deg, rgb(254, 175, 57) 0%, rgb(181, 138, 132) 100%);
            background-image: -webkit-linear-gradient(90deg, rgb(254, 175, 57) 0%, rgb(181, 138, 132) 100%);
            background-image: -ms-linear-gradient(90deg, rgb(254, 175, 57) 0%, rgb(181, 138, 132) 100%);
            box-shadow: 0px 6px 0px 0px #d1891d;
            text-shadow: 0px 1px 0px #fed59a;
            margin-top: 20px;
        }
        .form-container__submit:hover {
            transition: .3s all !important;
            top: 2px;
            background-image: -moz-linear-gradient(90deg, rgb(181, 138, 132) 0%, rgb(254, 175, 57) 100%);
            background-image: -webkit-linear-gradient(90deg, rgb(181, 138, 132) 0%, rgb(254, 175, 57) 100%);
            background-image: -ms-linear-gradient(90deg, rgb(181, 138, 132) 0%, rgb(254, 175, 57) 100%);
            box-shadow: 0px 4px 0px 0px #9a7670;
        }
        .form-container__submit:disabled {
          opacity: .5;
          transition: none;
        }
        .form-container__submit::before {
            content: "";
            background-color: rgba(255, 255, 255, 0.5);
            height: 100%;
            width: 3em;
            display: block;
            position: absolute;
            top: 0;
            left: -5em;
            transform: skewX(-45deg) translateX(0);
            -webkit-transition: none;
            transition: none;
        }
        .form-container__submit:hover:before {
            transform: skewX(-45deg) translateX(37em);
            -webkit-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
        }
        .form-container__checkbox-wrapper {
            display: flex;
            align-items: center;
        }
        .form-container input[type="checkbox"] {
            margin-left: 0;
            margin-right: 10px;
            width: 20px;
            height: 20px;
            min-width: 20px;
        }
        .form-container label {
            font-size: 14px;
            color: #fff;
            font-family: Montserrat, sans-serif;
        }
    </style>
    <div class="form-container">
        <h2>ЗАПОЛНИТЕ ФОРМУ,</h2>
        <p>чтобы закрепить за&nbsp;собой <strong>бонусное&nbsp;место</strong> и&nbsp;получить <strong style="color: rgb(181, 138, 132);">в&nbsp;подарок запись «PRO Деньги»</strong></p>
        <form action="display_data_from_block_form.php" method="POST">
        <div>
            <input class="form-container__input" type="text" name="name" placeholder="Введите ваше имя" required>
            <input class="form-container__input" type="email" name="email" placeholder="Введите ваш email" required>
            <input class="form-container__input" type="tel" name="phone" placeholder="Введите ваш телефон" required>
        </div>
            
        <div class="form-container__checkbox-wrapper">
            <input type="checkbox" name="consent" required>
            <label>Даю <a href="https://lp.insidium.ru/personal.pdf" style="color:#fff; border-bottom:1px solid #fff;" target="_blank" rel="noopener">согласие на обработку моих персональных данных</a></label>
          </div>
          <button class="form-container__submit" type="submit">ПОЛУЧИТЬ ПОДАРОК</button>
        </form>
    </div>
    ';
}
