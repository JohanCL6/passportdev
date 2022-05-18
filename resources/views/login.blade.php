<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Win Login</title>


    <!-- FONTS  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- CSS  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        /*-- General Styles ---*/
        :root {
            --sky: #d4d8ed;
            --orange: #ff8900;
            --darkorange: #b26717;
            --darkblue: #212443;
            --sblue: #3c3f5a;
            --sgray: #dedee3;
            --lightgray: #eff0f2;
            --orangeup: #ff942c;
            --orangedown: #ff611b;
            --sblack: #0e0e0e;
            --semiblack: #616161;
        }

        ul {
            /* list-style: none; */
            margin: 0;
            /* padding: 0; */
        }

        li {
            margin: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        p {
            margin: 0;
            padding: 0;
        }

        p {
            font-size: inherit;
        }

        a {
            color: inherit;
        }

        a:focus,
        a:hover {
            text-decoration: none;
            color: inherit;
        }

        .form-control {
            border-radius: 0;
            font-size: 11px;
            padding: 5px 10px;
            color: #000 !important;
            box-shadow: none !important;
            border-color: transparent;
        }


        .form-group select {
            background-color: #1e2038 !important;
        }

        /* ==========================================================================
Fonts
========================================================================== */
        .light {
            font-weight: 300;
        }

        .sbold {
            font-weight: 500;
        }

        .semibold {
            font-weight: 600;
        }

        .bold {
            font-weight: 700;
        }

        .bolder {
            font-weight: 900;
        }

        .z-index-haute {
            z-index: 10;
        }

        .index-2 {
            z-index: 10;
        }

        /*STRIPE*/
        .stripe {
            height: 1px;
            border-style: dashed;
            border-color: white;
            border-width: 0.5px;
        }

        .stripe:before {
            content: "";
            position: absolute;
            right: 0;
            top: 0;
            height: 10px;
            width: 10px;
            background-color: white;
            border-radius: 50%;
            transform: translateX(50%) translateY(-50%);
        }

        .stripe:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            height: 10px;
            width: 10px;
            background-color: white;
            border-radius: 50%;
            transform: translateX(-50%) translateY(-50%);
        }

        /* ==========================================================================
Author's custom styles
========================================================================== */
        body {
            color: #1e2038;
            font-family: "Urbanist", sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            font-weight: 400;
            background-color: #fff;
        }

        body,
        html {
            overflow-x: hidden;
        }

        .text-white,
        .white {
            color: white;
        }

        /* utils starts */
        .list {
            list-style-type: disc;
            padding-left: 15px;
            margin-bottom: 15px;
        }

        .cursor-pointer {
            cursor: pointer;
        }

        .br-10 {
            border-radius: 10px;
        }

        .br-15 {
            border-radius: 15px;
        }

        .br-15-top {
            border-radius: 15px 15px 0px 0px;
        }

        .br-15-bottom {
            border-radius: 0px 0px 15px 15px;
        }

        .br-20 {
            border-radius: 20px;
        }

        .br-30 {
            border-radius: 30px;
        }

        .br-20-top {
            border-radius: 20px 20px 0px 0px;
        }

        .border-bottom-red {
            border-bottom: 1px solid var(--red);
        }

        .letter-spacing {
            letter-spacing: 1px;
        }

        .trans {
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        /* utils ends */

        /* text color starts */
        .text-black {
            color: #171b2b !important;
        }

        .text-semiblack {
            color: var(--semiblack) !important;
        }

        .text-darkblue {
            color: var(--darkblue) !important;
        }

        .text-sblue {
            color: var(--sblue);
        }

        .text-sblack {
            color: var(--sblack);
        }

        .text-sky {
            color: var(--sky);
        }

        .text-sgray {
            color: var(--sgray);
        }

        .text-darkorange {
            color: var(--darkorange);
        }

        .text-lightgray {
            color: var(--lightgray);
        }

        .text-orange {
            color: var(--orange) !important;
        }

        /* text color ends */

        /* backgrounds starts */
        .bg-darkblue {
            background-color: var(--darkblue);
        }

        .bg-sblue {
            background-color: var(--sblue);
        }

        .bg-sky {
            background-color: var(--sky);
        }

        .bg-sgray {
            background-color: var(--sgray);
        }

        .bg-darkorange {
            background-color: var(--darkorange);
        }

        .bg-sblack {
            background: var(--sblack) !important;
        }

        .bg-orange-v-gradient {
            background: rgb(255, 97, 27);
            background: linear-gradient(0deg,
                    rgba(255, 97, 27, 1) 0%,
                    rgba(255, 120, 35, 1) 47%,
                    rgba(255, 148, 44, 1) 100%);
        }

        .bg-black-v-gradient {
            background: rgb(18, 16, 11);
            background: linear-gradient(0deg,
                    rgba(18, 16, 11, 1) 0%,
                    rgba(49, 48, 45, 1) 47%,
                    rgba(86, 86, 86, 1) 100%);
        }

        .bg-lightgray {
            background-color: var(--lightgray) !important;
        }

        .bg-orange {
            background-color: var(--orange) !important;
        }

        .bg-black {
            background-color: black;
        }

        .bg-white {
            background-color: #fff;
        }

        .bg-white-transparent {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .bg-cover {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center center;
        }

        .bg-cover-bottom {
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center bottom;
        }

        .bg-blue {
            background-color: #1e2038;
        }

        /* backgrounds ends */

        /* text sizes starts */
        .text-huge {
            font-size: 28px !important;
        }

        .text-big {
            font-size: 22px !important;
        }

        .text-medium {
            font-size: 18px !important;
        }

        .text-normal {
            font-size: 16px !important;
        }

        .text-small {
            font-size: 14px !important;
        }

        .text-tiny {
            font-size: 10px !important;
        }

        .lh-10 {
            line-height: 1;
        }

        .lh-11 {
            line-height: 1.1;
        }

        .lh-12 {
            line-height: 1.2;
        }

        .lh-13 {
            line-height: 1.3;
        }

        .h2-title-after:after {
            content: "";
            position: absolute;
            left: 50%;
            bottom: -10px;
            height: 2px;
            width: 80px;
            background-color: var(--cherry);
            transform: translateX(-50%);
        }

        .box-after-raya {
            position: absolute;
        }

        .box-after-raya:after {
            content: "";
            position: absolute;
            bottom: 0;
            height: 10px;
            width: 40px;
        }

        /* text sizes ends */

        /* buttons starts */
        .btn-orange {
            background-color: var(--orange);
            color: white;
        }

        .btn-orange:hover {
            background-color: #171a29;
            color: white;
        }

        .btn-white {
            background-color: white;
            color: black;
        }

        .btn-white:hover {
            background-color: #221e1f;
            color: white;
        }

        .btn-black {
            background-color: #171a29;
            color: white;
        }

        .btn-black:hover {
            background-color: var(--orange);
            color: white;
        }

        /* buttons ends*/

        /* breadcrumb starts*/
        /* breadcrumb ends */

        label.error {
            color: red;
        }

        /* header starts*/

        .flipper {
            font-size: 34px !important;
        }

        /*FORM*/

        .formulario_box {
            margin: auto;
        }

        .confirma {
            font-size: 23px;
            margin-bottom: 20px;
            color: #ff8900;
        }

        .copyright>span {
            color: white;
        }

        .check.lef {
            left: -12px;
            position: absolute;
            top: 1px;
        }

        .check {
            position: absolute;
            top: 0;
            left: 50%;
            margin-left: -8px;
            height: 14px;
            width: 22px;
            border-radius: 5px;
            background-color: transparent;
            border: 2px solid #fb6804;
            -webkit-transition: all 0.2s;
            -moz-transition: all 0.2s;
            -o-transition: all 0.2s;
            -ms-transition: all 0.2s;
            transition: all 0.2s;
        }

        .ancho_condiciones {
            padding-left: 22px;
            width: 100%;
        }

        .ancho_condiciones .form-group {
            margin-bottom: 0px;
            line-height: 1.2;
        }

        .cont.lef {
            text-align: left;
            display: block;
            margin-top: 10px;
        }

        .cont {
            display: block;
            position: relative;
            padding-left: 15px;
            margin-bottom: 0;
            margin-top: 10px;
            cursor: pointer;
            font-size: 13px;
            color: #fff;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-weight: 500;
        }

        .cont input[type="checkbox"] {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        .cont input:checked~.check {
            background-color: #ff6903;
        }

        ::-webkit-input-placeholder {
            color: #A2A2A2 !important;
        }

        :-moz-placeholder {
            /* Firefox 18- */
            color: #A2A2A2 !important;
        }

        ::-moz-placeholder {
            /* Firefox 19+ */
            color: #A2A2A2 !important;
        }

        :-ms-input-placeholder {
            color: #A2A2A2 !important;
        }

        label {
            color: red;
            font-size: 12px;
        }

        .box-shadow {
            box-shadow: 0 0 30px #00000033;
        }

        button:focus {
            outline: none;
        }

        .gracias {
            color: var(--blue);
            padding: 150px 0;
            text-align: center;
        }

        .box-items {
            width: 33%;
        }

        /*LANDING*/

        .socials a {
            background-color: #d0cfd0;
            color: #fff;
            font-size: 20px;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        @keyframes smoothScroll {
            0% {
                transform: translateY(-150px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        header.h_fixed {
            position: fixed;
            background-color: #fff;
            animation: smoothScroll 1s forwards;
            box-shadow: 0 0 60px rgb(0 0 0 / 50%);
            z-index: 1001;
        }

        .mobile-header {
            position: fixed;
            transition: left 0.2s;
            top: 0;
            left: 100%;
            z-index: 1;
        }

        .mobile-header.active {
            left: 0;
            box-shadow: 0 0 60px rgb(0 0 0 / 90%);
        }

        #menus>div {
            border-bottom: 1px solid #d0cfd0;
        }

        /* personalizacion  */
        .border-bottom-orange {
            border-bottom: 3px solid var(--darkorange);
        }

        /* ends personalizacion  */

        .question-title {
            background-color: #f3f3f4;
            border-right: 50px solid transparent;
            border-left: 30px solid transparent;
        }

        .question {
            background-color: #f3f3f4;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 30px #00000040;
        }

        .question-title .fa {
            position: absolute;
            right: 0px;
            top: 50%;
            color: var(--orange);
            transition: transform 0.2s;
            transform: translateY(-50%) translateX(100%);
            height: 100%;
            width: 50px;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .question-title.collapsed .fa {
            transform: translateY(-50%) translateX(100%) rotate(180deg);
        }

        .question-number {
            position: absolute;
            left: 0px;
            top: 50%;
            transition: transform 0.2s;
            transform: translateY(-50%) translateX(-100%);
            height: 100%;
            width: 30px;
            font-size: 17px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .modal .cerrar {
            position: absolute;
            width: 50px;
            height: 50px;
            text-align: center;
            background-color: var(--orange);
            color: #fff;
            font-size: 35px;
            border-radius: 50%;
            right: -25px;
            top: -25px;
            z-index: 10000;
            cursor: pointer;
            font-weight: 600;
            opacity: 1;
        }

        .down_button {
            left: 50%;
            bottom: 40px;
            border: 2px solid white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            margin-left: -18px;
        }

        #gift-wraper {
            border: 1px solid #474958;
        }

        .bg-white-trasnsp-1 {
            background-color: rgba(255, 255, 255, 0.15);
        }

        .bg-white-trasnsp-2 {
            background-color: rgba(255, 255, 255, 0.25);
        }

        .bg-white-trasnsp-3 {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .bg-black-trasnsp-4 {
            background-color: rgba(0, 0, 0, 0.4);
        }

        .border-gray {
            border-color: #7A6F65 !important;
        }

        .down-white-btn {
            color: var(--orange);
            background-color: white;
            border-radius: 50%;
            width: 30px;
            height: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 25px;
            position: absolute;
            left: 50%;
            top: 0;
            transform: translateX(-50%) translateY(-50%);
        }

        .mas-icon {
            width: 30px;
            height: 30px;
        }

        /* landing css */
        .bg-banner {
            background-image: url("{{ asset('img/bg-movil.jpg') }}");
        }






        .number-circle {
            width: 47px;
            height: 47px;
            font-size: 25px;
            border: 4px solid #fff;
            left: 50%;
            top: -25px;
            transform: translateX(-50%);
        }

        .section-exp .box h3 {
            height: 225px;
        }

        .section-exp .box img:not(:last-child) {
            margin-top: -78px;
        }

        .section-exp .box img:last-child {
            bottom: 0px;
            left: 50%;
            transform: translateX(-50%);
        }

        .section-exp .box {
            height: 520px;
        }

        .section-exp .box:last-child img:last-child {
            padding-bottom: 34px;
        }


        .warn img {
            top: 0px;
            left: 10%;
            height: 100%;
        }

        .conditions .desktop .box {
            border: 5px solid var(--sgray);
            border-radius: 3px;
            height: 180px;
        }

        .conditions .movil .box {
            border: 5px solid var(--orange);
        }

        .section-schedule2 .box {
            width: 244px;
        }

        .conditions .desktop .box:hover {
            border: 5px solid var(--orange);
        }

        .conditions .desktop .box img,
        .conditions .movil .box img {
            top: -50px;
            left: 33px;
        }

        .flexslider .slides img {
            width: auto;
        }

        .flexslider .flex-viewport {
            padding-top: 40px;
        }

        .flex-direction-nav a:before {
            font-family: "Font Awesome 5 Pro";
            font-size: 40px;
            display: inline-block;
            content: "\f137";
            font-weight: 900;
            color: var(--orange);
            text-shadow: none;
        }

        .flex-direction-nav a.flex-next:before {
            content: "\f138";
        }

        .flex-direction-nav a {
            width: 50px;
            height: 50px;
            top: 45%;
        }

        .flex-direction-nav .flex-prev {
            left: -43px;
        }

        .flexslider:hover .flex-direction-nav .flex-prev {
            left: -43px;
        }

        .flexslider:hover .flex-direction-nav .flex-next {
            right: -43px;
        }

        .flex-direction-nav .flex-next {
            right: -43px;
        }

        .section-online {
            padding-top: 30px;
        }

        .flexslider {
            border: 4px solid transparent !important;
        }

        .section-experiencia .flexslider .box {
            height: 360px;
        }

        .section-experiencia .flexslider {
            background: transparent;
        }

        .section-contenido .flexslider {
            background: transparent;
        }

        .section-contenido li .box {
            height: auto;
        }

        .section-contenido li:first-child .box {
            background: #fe5000;
        }

        .section-contenido li:nth-child(2) .box {
            background: #6000ff;
        }

        .section-contenido li:nth-child(3) .box {
            background: #3a7e97;
        }

        .section-canales-fav>div>.row {
            height: 773px;
            padding-top: 74px;
        }

        footer .col-8:not(:last-child) h3:after {
            content: "";
            position: absolute;
            width: 63px;
            height: 1px;
            background: var(--semiblack);
            left: 50%;
            transform: translateX(-50%);
            bottom: 21px;
        }

        /* personalizacion flexslider */
        /* .flexslider .slides img {
  width: 70px;
} */

        .flex-direction-nav a:before {
            font-family: "Font Awesome 5 Pro";
            font-size: 40px;
            display: inline-block;
            font-weight: 300;
            content: "\f137";
            color: var(--lorange);
            text-shadow: none;
        }

        .flex-direction-nav a.flex-next:before {
            content: "\f138";
        }

        .flex-direction-nav a {
            width: 50px;
            height: 50px;
            top: -12%;
            color: none;
            text-shadow: none;
        }

        .flex-direction-nav .flex-next {
            left: 60%;
            transform: translate(-50%, 0px);
        }

        .flex-direction-nav .flex-prev {
            left: 40%;
            transform: translate(-50%, 0px);
        }

        .flexslider:hover .flex-direction-nav .flex-prev {
            opacity: 1;
            left: 40%;
        }

        .flexslider:hover .flex-direction-nav .flex-next {
            opacity: 1;
            left: 60%;
        }

        .flex-control-paging li a.flex-active {
            width: 50px;
            background: var(--orange);
            transition: 500ms;
        }

        .flex-control-paging li a {
            width: 18px;
            background: var(--semiblack);
        }

        .section-contenido .custom-navigation .flex-prev,
        .section-contenido .custom-navigation .flex-next {
            top: 50%;
            transform: translateY(-5%);
        }

        .section-contenido .custom-navigation .flex-prev {
            left: -35px;
        }

        .section-contenido .custom-navigation .flex-next {
            right: -35px;
        }

        /* end landing css */
        /* reseting collapse  */

        .sec-preguntas .card-header {
            background: none;
            border: none;
            border-radius: none;
        }

        .sec-preguntas .btn-link:hover,
        .sec-preguntas .btn-link:focus {
            text-decoration: none;
        }

        .sec-preguntas .btn:focus {
            box-shadow: none;
        }

        .sec-preguntas .card {
            border: none;
            background: #f6f6f6;
        }

        input#user,
        input#pass {
            background-image: url({{asset('img/user.png')}});
            background-repeat: no-repeat;
            background-position: 4% 50%;
            text-indent: 35px;
        }

        input#pass {
            background-image: url({{ asset('img/pass.png') }});
            font: small-caption;
        }

        .user-pass {
            margin-top: 207px;
        }



        /* end reseting collapse */
        /* ==========================================================================
Mobile first
========================================================================== */
        @media screen and (min-width: 576px) {


            /* landing css */
            .warn>div>div>div>div {
                border-radius: 10px;
            }

            .section-contenido li .box {
                height: 187px;
            }

            .section-canales-fav>div>.row {
                height: 100vh;
            }

            footer .col-8:not(:last-child) h3:after {
                content: "";
                position: absolute;
                width: 1px;
                height: 40px;
                background: var(--semiblack);
                top: 50%;
                transform: translateY(-50%);
                left: unset;
                right: -34px;
            }

            /* end landing css */
        }

        @media screen and (min-width: 768px) {
            .section-banner {
                height: 100vh;
            }

            .bg-banner {
                background-image: url("{{ asset('img/bg-desktop.jpg') }}");
            }

            /* landing css */
            .warn p {
                transform: translateX(40%);
            }

            .section-contenido li .box {
                height: 156px;
            }

            footer .col-8:not(:last-child) h3:after {
                right: -13px;
            }

            footer .col-8:not(:last-child) h3:after {
                right: -10px;
            }

            .footer {
                position: absolute;
                bottom: 1%;
                left: 50%;
                transform: translateX(-50%);
            }

            .bg-cover {
                background-position: bottom center;
            }

            .formulario {
                position: absolute;
                left: 50%;
                top: 50%;
                transform: translate(-50%, -50%);
            }

            /* end landing css */
        }

        @media screen and (min-width: 992px) {
            /* landing css */

            .bg-form>div {
                transform: translateX(15%);
            }

            .bg-form .content-form {
                width: 308px;
            }

            .section-schedule {
                margin-top: -215px;
            }

            .section-schedule>div>div.row {
                height: 335px;
            }

            .section-schedule2 .box {
                width: 265px;
                height: 133px;
            }

            .section-exp {
                margin-top: -83px;
            }

            /* end landing css */
            .form-control {
                font-size: 13px;
            }

            /* text sizes starts */
            .text-huge {
                font-size: 40px !important;
            }

            .text-big {
                font-size: 30px !important;
            }

            .text-medium {
                font-size: 25px !important;
            }

            .text-normal {
                font-size: 18px !important;
            }

            .text-small {
                font-size: 14px !important;
            }

            .text-tiny {
                font-size: 12px !important;
            }

            /* text sizes ends */
            .flipper {
                font-size: 45px !important;
            }

            .section-online {
                padding-top: 100px;
            }

            .section-contenido li .box {
                height: 168px;
            }

            footer .col-8:not(:last-child) h3:after {
                right: -34px;
            }

        }

        @media screen and (min-width: 1200px) {


            .section-contenido li .box {
                height: 202px;
            }

            .section-contenido {
                height: 580px;
            }
        }
    </style>

    <!-- JS  -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script>

    </script>
</head>

<body>
    <section class="section-banner bg-banner bg-cover">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-md-start py-4">
                <div class="col-4 col-lg-3 text-center">
                    <img class="d-block mx-auto img-fluid" src="{{ asset('img/logo-win.png') }}">
                </div>
            </div>
        </div>
        <div class="container formulario">
            <div class="row user-pass align-items-center justify-content-center justify-content-lg-end mt-md-2 mb-md-3">
                <div class="col-11 col-sm-8 col-md-6 col-lg-5 col-xl-4 text-center">
                    <form class="p-3 br-10 bg-black-trasnsp-4 border border-gray">
                        <h1 class="text-center text-medium text-white mb-3">Ingresa tu usuario <br> y contraseña para
                            <br> iniciar
                            sesión
                        </h1>
                        <div class="form-group mb-2">
                            <input type="text" id="user" class="form-control br-10 text-normal" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <input type="password" id="pass" class="form-control br-10 text-normal"
                                placeholder="Contraseña">
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input" id="remindme">
                                <label class="form-check-label text-white text-small" for="remindme">Recordarme</label>
                            </div>
                            <div class="text-white text-small"><a href="#"><u>¿Olvidaste tu contraseña?</u></a></div>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LeE7b8fAAAAANO6D_RAYpsCdANUGonSpmvPckCO"></div>
                        <div class="d-flex flex-column px-4">
                            <button type="submit"
                                class="btn btn-orange br-10 text-normal text-white py-2 mb-2">Ingresar</button>
                            <a href="#" class="br-10 text-small text-white py-2 bg-white-trasnsp-2">
                                ¿Aún no estás registrado?
                            </a>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        </div>
        <div class="container footer">
            <div
                class="row justify-content-center justify-content-md-between justify-content-lg-around align-items-center mt-5">
                <div class="col-6 col-sm-3 col-md-3 col-lg-2 col-xl-2 text-center  order-md-2">
                    <a href="#!">
                        <img class="img-fluid px-4" src="{{ asset('img/logo-win.png') }}" alt="logo win">
                    </a>
                </div>
                <div class="col-10 col-sm-10 col-md-7 col-lg-6 order-md-1">
                    <p class="text-center text-md-left text-white text-tiny lh-12 my-3">Todos los derechos reservados,
                        WIN 2022 <br><br>

                        Te recordamos que la información solicitada se encuentra bajo el amparo del Secreto de las
                        Telecomunicaciones recogido en el Artículo 2 de la Constitución Política del Perú; la misma que
                        tiene por objetivo brindarte Seguridad y Confidencialidad.</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>