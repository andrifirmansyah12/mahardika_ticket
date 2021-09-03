<!-- JavaScript -->
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script>
  $(document).ready(function(){
    setTimeout(function() {
      $(".preloader").fadeOut();               
    }, 500);
  })
</script>

<script>
    var scrollpos = window.scrollY;
    var navcontent = document.getElementById("nav-content");
  
    document.addEventListener("scroll", function () {
      /*Apply classes for slide in bar*/
      scrollpos = window.scrollY;
  
      if (scrollpos > 10) {
        navaction.classList.remove("bg-white");
        navaction.classList.remove("text-gray-800");
        navaction.classList.add("text-white");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-gray-800");
          toToggle[i].classList.remove("text-white");
        }
        navcontent.classList.remove("bg-gray-100");
        navcontent.classList.add("bg-white");
      } else {
        navaction.classList.add("bg-white");
        navaction.classList.remove("text-white");
        navaction.classList.add("text-gray-800");
        //Use to switch toggleColour colours
        for (var i = 0; i < toToggle.length; i++) {
          toToggle[i].classList.add("text-white");
          toToggle[i].classList.remove("text-gray-800");
        }
        navcontent.classList.remove("bg-white");
        navcontent.classList.add("bg-gray-100");
      }
    });
  </script>
  <script>
    var navMenuDiv = document.getElementById("nav-content");
    var navMenu = document.getElementById("nav-toggle");
  
    document.onclick = check;
    function check(e) {
      var target = (e && e.target) || (event && event.srcElement);
  
      //Nav Menu
      if (!checkParent(target, navMenuDiv)) {
        // click NOT on the menu
        if (checkParent(target, navMenu)) {
          // click on the link
          if (navMenuDiv.classList.contains("hidden")) {
            navMenuDiv.classList.remove("hidden");
          } else {
            navMenuDiv.classList.add("hidden");
          }
        } else {
          // click both outside link and outside menu, hide menu
          navMenuDiv.classList.add("hidden");
        }
      }
    }
    function checkParent(t, elm) {
      while (t.parentNode) {
        if (t == elm) {
          return true;
        }
        t = t.parentNode;
      }
      return false;
    }
  </script>

<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<script>
  $('#slick-image').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    slidesToShow: 1,
  });

  $('#slick-blog').slick({
    autoplay: true,
    autoplaySpeed: 8000,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });
</script>
