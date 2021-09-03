
<link rel="stylesheet" href="{{ asset('Admin/dist/style.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<link rel="shortcut icon" href="{{ asset('mahardika_ticket/dist/img/logo9.png') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<!-- CSS -->
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">

{{-- Jquery --}}
<script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

    <style>
      .font-lato {
        font-family: 'Open Sans', sans-serif;
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