<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <link rel="apple-touch-icon" sizes="57x57" href="assets/images/groeco.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/images/groeco.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/images/groeco.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/images/groeco.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/images/groeco.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/groeco.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/images/groeco.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/groeco.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/groeco.png">
    <link rel="icon" type="image/png" href="assets/images/groeco.png">
    <link rel="manifest" href="assets/json/manifest.json">
    <meta name="msapplication-TileImage" sizes="144x144" content="assets/images/groeco.png">
    <meta name="msapplication-config" content="assets/xml/browserconfig.xml">
    <meta name="theme-color" content="#66BB6A">
    <link rel="shortcut icon" sizes="32x32" href="assets/images/groeco.png">
    <title>GroEco| B2B AgriTech that connects farmers direct to consumers </title>
    <meta name="keywords" content="GroEco B2B Supply Chain AgriTech for Farmers">
    <meta name="description" content="GroEco is based in Mombasa &#039;the second largest city in Kenya.  tech-driven supply chain platform that connects farmers of fresh vegetables and fruits with  local restaurats, hotels, holiday homes, food enterprises and businesses across coastal regions .">
    <meta property="og:title" content="GroEco| B2B AgriTech that connects farmers direct to consumers " />
    <meta property="og:url" content="https://ninjacart.in/" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="GroEco is based in Mombasa &#039;the second largest city in Kenya.  tech-driven supply chain platform that connects farmers of fresh vegetables and fruits with  local restaurats, hotels, holiday homes, food enterprises and businesses across coastal regions ." />
    <link rel="canonical" href="">
   


    
    <script src="assets/indexjs/jquery.min.js"></script>
<style>
header.fixed{
    padding: 20px 0;
    background: #fff;
    -webkit-box-shadow: 0 0 10px 0 rgba(50, 50, 50, .55);
    -moz-box-shadow: 0 0 10px 0 rgba(50, 50, 50, .55);
    box-shadow: 0 0 10px 0 rgba(50, 50, 50, .55);
}
</style>
<script>
document.addEventListener("scroll",function(){
  var target = document.getElementsByTagName('header');
  var val = document.getElementsByTagName('body');
  if(window.pageYOffset > 1){
	val[0].style.color= "#000";
	  
	 target[0].style.padding= "20px 0";
	 target[0].style.background= "#fff";
	 target[0].style.boxShadow= "0 0 10px 0 rgba(50, 50, 50, .55)";
  }
  else if(window.pageYOffset < 30){
	target[0].style.padding= "40px 0";
         target[0].style.background= "none";
         target[0].style.boxShadow= "none";
  }
},false); 

    </script>
<link href="assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link href="assets/css/animate.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/swiper.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link href="assets/css/style.css" type="text/css" rel="stylesheet">
<link href="assets/css/responsive.css" type="text/css" rel="stylesheet">

@livewireStyles
</head>


<body>

<div class="layouts">

@include ('layouts.header')
{{$slot}}
@include ('layouts.footer')


</div>


<!-- script --> 
@livewireScripts
<script src="{{ mix('/js/app.js') }}"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/script.js"></script>
<script>
    $(function(){

        var swiper = new Swiper('.banner_info .swiper-container', {
            spaceBetween: 0,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });

        var swiper = new Swiper('.creatingopportunities_list .swiper-container', {
            slidesPerView: 3,
            spaceBetween: 0,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                639: {
                    slidesPerView: 1
                }
            }
        });


        $('.peopleaboutninjacart_slider').slick({
            // centerMode: true,
            // centerPadding: '120px',
            slidesToShow: 1,
            responsive: [
                {
                    breakpoint: 980,
                    settings: {
                        centerPadding: '60px',
                    }
                },
                {
                    breakpoint: 639,
                    settings: {
                        centerPadding: '0',
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });


        $('.reasonstobuy_slider').slick({
            centerMode: true,
            centerPadding: '120px',
            slidesToShow: 3,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                {
                    breakpoint: 1100,
                    settings: {
                        centerPadding: '60px',
                    }
                },
                {
                    breakpoint: 980,
                    settings: {
                        centerPadding: '60px',
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        centerPadding: '0',
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 639,
                    settings: {
                        centerPadding: '0',
                        slidesToShow: 1,
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });


        var swiper = new Swiper('.careerslifeatninjacart_list .swiper-container', {
            slidesPerView: 3,
            spaceBetween: 10,
            loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2
                },
                639: {
                    slidesPerView: 1
                }
            }
        });
    });

</script>
@livewireScripts
</body>

</html>

