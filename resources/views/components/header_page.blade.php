
<link rel="stylesheet" href="{{ asset('Admin/dist/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<link rel="shortcut icon" href="{{ asset('mahardika_ticket/dist/img/logo9.png') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<!-- CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&family=Roboto&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">

{{-- Jquery --}}
<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

    <style>
      .js-dropdown {
      position: relative;
      }

      [class*="btns-"],
      .js-dropdown {
      display: -moz-inline-stack;
      display: inline-block;
      zoom: 1;
      }

      [class*="btns-"],
      .js-dropdown .js-dropdown__slider {
      -webkit-transition: 0.3s ease-out;
      transition: 0.3s ease-out;
      }

      [class*="btns-"],
      .js-dropdown .js-dropdown__slider {
      border: 1px solid;
      border-color: #181863;
      }

      a {
      color: #181863;
      widows: 10px;
      text-decoration: none;
      outline: 0;
      -webkit-transition-property: all;
      transition-property: all;
      }

      [class*="btns-"] {
        text-align: center !important;
        vertical-align: bottom;
        border-radius: 3px;
        background-color: #f0f0f0;
      color: black;
      text-decoration: none;
      white-space: nowrap;
      line-height: normal;
      border-color: transparent;
      width: auto;
      -webkit-transition-property: border-color, background;
      transition-property: border-color, background;
      font-weight: 400;
      cursor: pointer;
      padding: 0.57143em 0.85714em;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      }

      .btns-text {
      color: #181863;
      background: transparent;
      }

      .js-dropdown .js-dropdown__slider {
      position: absolute;
      }

      .js-dropdown .js-dropdown__slider {
      background: white;
      border-color: gray;
      border-radius: 3px;
      right: 10px;
      top: 100%;
      width: 10rem;
      margin-top: 0.28571em;
      padding: 0.14286em 0.71429em;
      visibility: hidden;
      -webkit-transform: translateY(20%);
      -ms-transform: translateY(20%);
      transform: translateY(20%);
      -webkit-transition-property: all;
      transition-property: all;
      zoom: 1;
      filter: alpha(opacity=0);
      opacity: 0;
      }

      .js-dropdown.is-active .js-dropdown__slider {
      visibility: visible;
      -webkit-transform: translateY(0);
      -ms-transform: translateY(0);
      transform: translateY(0);
      zoom: 1;
      filter: alpha(opacity=100);
      opacity: 1;
      }

      .js-dropdown .js-dropdown__item {
      display: block;
      }

      .js-dropdown .js-dropdown__item {
      white-space: nowrap;
      padding-top: 0.28571em;
      padding-bottom: 0.28571em;
      }
      
      .js-dropdown .js-dropdown__icon:after {
        font-family: FontAwesome;
        font-weight: 400;
        font-style: normal;
        text-decoration: inherit;
        -webkit-font-smoothing: antialiased;
        vertical-align: baseline;
        background-image: none;
        background-position: 0% 0%;
        background-repeat: repeat;
        content: "\f150";
        margin-left: 0.57143em;
      }

      .js-dropdown.is-active .js-dropdown__icon:after {
        content: "\f151";
      }

      .font-lato {
        font-family: 'Montserrat', sans-serif;;
      }

      .text-blue-ticket{
        color: #181863;
      }

      .border-blue-ticket{
        border-color: #181863;
      }

      .bg-blue-ticket{
        background-color: #181863;
      }

        #close {
        float:right;
        display:inline-block;
        padding:2px 5px;
        color: black;
      }

        .icon::after{
        content: '';
        display: block;
        position: absolute;
        border-top: 23px solid transparent;
        border-bottom: 17px solid transparent;
        border-left: 12px solid #3182ce;
        left: 100%;
        top: 0;
      }

      .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 9999;
      }

      .preloader .loading {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%,-50%);
        font: 14px arial;
      }

      html{
        scroll-behavior: smooth;
      }

      .smooth {
        transition: box-shadow 0.3s ease-in-out;
      }

      ::selection { 
        background-color: aliceblue
      }
    </style>