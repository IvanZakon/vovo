<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="utf-8">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="js/ScrollTrigger.min.js"></script>
  <link rel="stylesheet" href="/m-style.css">
  <link rel="stylesheet" href="/f-cov.css">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="http://kenwheeler.github.io/slick/slick/slick-theme.css">
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <title>VnTechno - Главная</title>
</head>
<header>
<!-- MENU -->
<div class="podcontainer">
<div class="container menu-cont">
<nav class="navbar navbar-expand-lg navbar-light bg-light my-nav-navbar">
  <a class="navbar-brand" href="#">
  <img src="/img/logo/logo.svg" class="top-logo">  
  <span class="header-name-company">VnTechno</span>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav my-ul-navbar">
      <li class="nav-item">
        <a class="nav-link" href="#">О компании</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Услуги
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Услуга 1</a>
          <a class="dropdown-item" href="#">Услуга 2</a>
          <a class="dropdown-item" href="#">Услуга 3</a>
          <a class="dropdown-item" href="#">Услуга 4</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Цены</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Наши работы</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Новости</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Контакты</a>
      </li>
    </ul>
  </div>
  <a href="" class="my-buttcall">Заказать звонок</a>
</nav>
</div>
</div>
</header>





<section class="sect-1">
<!-- SLIDER -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner ">
    <div class="carousel-item active">
     <img class="d-block w-100 first-slide" src="/img/banner-slider/orther/3-3ke.png" alt="Первый слайд">
     <div class="carousel-caption d-none d-md-block">
          <h3>Метка первого слайда</h3>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur</p>
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <a href="" class="my-buttcall">Подробнее</a>

           <!--<div class="text-center sliderContent centerContainer" style="">
          <div class="sliderContent__name">Доставка по москве бесплатно!</div>
          <div class="sliderContent__desc">При заказе на сумму от 60 000 рублей</div>
          <a href="/catalog/" class="cButton">Перейти в каталог</a>
          </div>  -->
        </div>
    </div>


    <!-- <div class="carousel-item">
    <img class="d-block w-100 twoo-slide" src="/img/banner-slider/2-slide.jpg" alt="Второй слайд">
    <div class="carousel-caption d-none d-md-block">
          <h3>Метка второго слайда</h3>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
    </div>
    <div class="carousel-item">
    <img class="d-block w-100 three-slide" src="/img/banner-slider/3-slide.jpg" alt="Третий слайд">
    <div class="carousel-caption d-none d-md-block">
          <h3>Метка третьего слайда</h3>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>  -->
</section>


<!-- SERVICE -->
<section class="sect-2">
<div class="container">
  <h1 class="my-1-h1">Наши услуги</h1>
    <div class="service-item">
      <a href="#" class="a-btn">
        <div class="first-service-item">
          <span class="zagolovok-item">Наливные промышленные полы, напольная разметка</span>
        </div>
      </a>
      <a href="#" class="a-btn">
        <div class="two-service-item">
          <span class="zagolovok-item">Изготовление и монтаж металлоконструкий</span>
        </div>
      </a>
      <a href="#" class="a-btn">
        <div class="three-service-item">
          <span class="zagolovok-item">Монтаж, ремонт и обслуживание автоматических ворот</span>
        </div>
      </a>
      <a href="#" class="a-btn">
        <div class="four-service-item">
          <span class="zagolovok-item">Комплексное обслуживание инженерных систем</span>
        </div>
      </a>
    </div>
</div>
</section>

<section class="sect-3">
<div class="container company">
  <div class="row">
    <div class="col-md-8 col-sm-8 left-company-block">
      <h2 class="my-1-h2">Немного о нас</h2>
        <div class="" alt="поле с текстом">
          <h3 class="back-company">Строительно-производственная компания "VNTECHNO".</h3>
          <br>
          <p class="company-main-cont">Компания специализируется в решении многопрофильных задач различной
          сложности. Основной целью нашей компании является выполнение работ в
          минимальные сроки, с минимальными расходами Клиента.</p>
          <p>Для достижения поставленных целей в штате нашей компании имеется
          высококвалифицированная команда сотрудников, от слесаря до инженера.</p>
          <p>Для удобства Клиента мы выстраиваем гибкий график работ, не мешающий основному
          процессу производства.</p>
          <p>В наш спектр услуг входит как изготовление/монтаж металлических конструкций и
          изделий для бытового использования, так и для производственных мощностей, от
          заборов на дачном участке, до строительных ферм.</p>
        </div>
        </div>
        <div class="col-md-4 col-sm-4 right-company-block">
          <!-- <img src="/img/akciya1.png" class="action-bl"> -->
          <div class="slider">
  <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
  <input type="radio" name="slider" title="slide2" class="slider__nav"/>
  <input type="radio" name="slider" title="slide3" class="slider__nav"/>
  <input type="radio" name="slider" title="slide4" class="slider__nav"/>
  <div class="slider__inner">
    <div class="slider__contents"><i class="slider__image fa fa-codepen"></i>
      <h2 class="slider__caption">Металл</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
    <div class="slider__contents"><i class="slider__image fa fa-newspaper-o"></i>
      <h2 class="slider__caption">Полы</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
    <div class="slider__contents"><i class="slider__image fa fa-television"></i>
      <h2 class="slider__caption">Инженерные</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
    <div class="slider__contents"><i class="slider__image fa fa-diamond"></i>
      <h2 class="slider__caption">Ворота</h2>
      <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima! Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
    </div>
  </div>
</div>
        </div>
    </div>
  </div>
  <div class="container bot-company">
    <div class="col-12 col-md-12 col-sm-12">
      <div class="row">
        <p>Также предлагаются работы по установке и обслуживанию автоматических и
        секционных ворот в различных областях их применения.В дополнении ко всему мы имеем большой опыт в обслуживании инженерных систем
        и работам с любыми типами напольных покрытий.</p>
      </div>
    </div>
  </div>
</div>
</section>




<!-- JOB PHOTO -->
<section class="sect-4">
<div class="container">
<h2>Наши работы</h2>
 <div class="sl-slider">
  <div class="slider__item">
    <img src="img/job-carousel/car-job-1.jpg" alt="">
  </div>
  <div class="slider__item">
    <img src="img/job-carousel/car-job-2.jpg" alt="">
  </div>
  <div class="slider__item">
    <img src="img/job-carousel/car-job-3.jpg" alt="">
  </div>
  <div class="slider__item">
    <img src="img/job-carousel/car-job-4.jpg" alt="">
  </div>
  <div class="slider__item">
    <img src="img/job-carousel/car-job-1.jpg" alt="">
  </div>
  <div class="slider__item">
    <img src="img/job-carousel/car-job-2.jpg" alt="">
  </div>
 </div>
 <div class="two-slider">
  <div class="slider__item_two">
    <img src="img/job-carousel/car-job-4.jpg" alt="">
  </div>
  <div class="slider__item_two">
    <img src="img/job-carousel/car-job-3.jpg" alt="">
  </div>
  <div class="slider__item_two">
    <img src="img/job-carousel/car-job-2.jpg" alt="">
  </div>
  <div class="slider__item_two">
    <img src="img/job-carousel/car-job-1.jpg" alt="">
  </div>
  <div class="slider__item_two">
    <img src="img/job-carousel/car-job-4.jpg" alt="">
  </div>
  <div class="slider__item_two">
    <img src="img/job-carousel/car-job-3.jpg" alt="">
  </div>
 </div>
</div>
<script>
$(document).ready(function(){
    $('.sl-slider').slick({
      arrows: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      speed: 500,
      /*infinite: false,*/
      autoplay: true,
      autoplaySpeed: 2000,
      pauseOnHover: true,
      pauseOnFocus: true,
    })
});

$(document).ready(function(){
    $('.two-slider').slick({
      arrows: false,
      slidesToShow: 4,
      slidesToScroll: 1,
      speed: 500,
      /*infinite: false,*/
      autoplay: true,
      autoplaySpeed: 3000,
      pauseOnHover: true,
      pauseOnFocus: true,
    })
});
</script>




<div class="container">
 <h2>Наши работы</h2>
  <div class="jobs-grid-container">
    <div class="jobs-grid-item">Фото 1</div>
    <div class="jobs-grid-item">Фото 2</div>
    <div class="jobs-grid-item">Фото 3</div>
    <div class="jobs-grid-item">Фото 4</div>
    <div class="jobs-grid-item">Фото 5</div>
    <div class="jobs-grid-item">Фото 6</div>
  </div>
</div>

</section>



<!-- STEP BY STEP -->
<section class="sect-">
<div class="container">
 <h2 class="my-1-h2 jobs">Как начать работу с нами</h2>
   <p class="text-stepbystep">Сделайте 3 простых шага для начала работы с нами.</p>
     <div class="step-by-step">
      <a href="#" class="a-btn">
        <div class="block-step first-step">
          <div class="step-inside">
            <span class="step-sp">Сделайте первый шаг</span>
            <p class="step-p">Вместе с нами давайте<br>попробуем это сделать</p>
          </div>
          <img src="/img/svg/first-step.svg" class="step-svg">
        </div>
      </a>
      <a href="#" class="a-btn">
        <div class="block-step first-step">
          <div class="step-inside">
           <div class="first-inside-step"> 
            <span class="step-sp">Сделайте первый шаг</span>
            <p class="step-p">Вместе с нами давайте<br>попробуем это сделать</p>
          </div> 
          <div class="two-inside-step">
            <span class="start-now-insstep">Начать сейчас</span>
            <img src="/img/svg/play.svg" class="play-svg">
          <div class="three-inside-svg">
            <img src="/img/svg/two-step.svg" class="step-svg">
          </div>
          </div>
          </div>
        </div>
      </a>
      <a href="#" class="a-btn">
        <div class="block-step three-step">
          <div class="step-inside">
            <span class="step-sp">Сделайте последний шаг</span>
            <p class="step-p">Давайте сделаем последний <br>шаг вместе</p> 
            <img src="/img/svg/three-step.svg" class="step-svg">
          </div>
        </div>
      </a>
    </div>
</div>
</section>


<!-- FORM COV -->
<section class="sect-5">
<div class="container formcov">
<div class="custom-block-form form-punk">
	<div class="line-1 live1live top-line-1">
		Заявка на расчёт продукции
	</div>
	<div class="line-buttons">
		<input id="name" class="cov-input" type="text" placeholder="Ваше имя*">
		<input id="phone" class="cov-input" type="text" placeholder="Ваш телефон*">
    <input id="email" class="cov-input" type="text" placeholder="Ваш email*">
	</div>
	<div class="line-buttons pussy" style="padding-top: 21px; padding-bottom: 20px">
    <input id="pole" type="text" placeholder="Сообщение*">
    <a href="#" class="punk-submit new-submit">Отправить</a>
	</div>
	<div class="line-1 live1live1">(Нажимая на кнопку “Отправить”, Вы даёте своё согласие на обработку персональных данных)</div>
  </div>
</div>
<script>
$(document).ready(function(){


$( ".punk-submit" ).click( function( event ) {	
  event.preventDefault();
 var flag1=0;
 var flag2=0;
 var flag3=0;  
 var flag4=0;


  if ($('.form-punk').find('#name').val() ==""){
	  flag1=1;
	  $('.form-punk').find('#name').css('border','1px solid red');
  }else{
	  flag1=0;
	  $('.form-punk').find('#name').css('border','1px #333');
  }
  
  if ($('.form-punk').find('#phone').val() ==""){
	  flag2=1;
	 $('.form-punk').find('#phone').css('border','1px solid red');
  }else{
	  flag2=0;
	  $('.form-punk').find('#phone').css('border','1px #333');
  }

 if ($('.form-punk').find('#email').val() ==""){
	  flag3=1;
	 $('.form-punk').find('#email').css('border','1px solid red');
  }else{
	  flag3=0;
	  $('.form-punk').find('#email').css('border','1px #333');
  }

 if ($('.form-punk').find('#pole').val() ==""){
	  flag4=1;
	 $('.form-punk').find('#pole').css('border','1px solid red');
  }else{
	  flag4=0;
	  $('.form-punk').find('#pole').css('border','1px #333');
  }


  
if (flag1==1 || flag2 ==1 || flag3==1 || flag4==1){

}else{
  $.ajax({
                    url: "/local/templates/simplelandshop_themes_blue/new-form/covid-form-script.php",
                    type: "post",
                    dataType: "json",
                    data: { 
						"name":    $('#name').val(),
                        "phone":    $('#phone').val(),
                        "email":    $('#email').val(),
                        "pole":    $('#pole').val(),
						"page": location.href,
						
	
                    },

                    success: function(data){
						
                }
	});
	
	$('.form-punk').addClass('thanks');
                        $('.form-punk').html("Спасибо! Ваша заявка отправлена. Мы свяжемся с Вами в ближайшее время!");
}
	return false;
});

});
</script>
</section>






<!-- ADVANTAGES -->
<section class="sect-6">
 <div class="container">
  <div class="row">
    <div class="advantages-anoncetext">
      <h3 class="my-h2-advant">Наши преимущества</h3>
      <p class="content-advant">Напряженный ритм жизни, постоянное ощущение усталости и подавленность? Услуги частного помогут решить трудности, с которыми вы не можете справиться самостоятельно. Опыт работы более 7 лет. Записаться на консультацию можно по номеру 8 (000) 000-00-00 или оставить заявку на сайте. 
         Напряженный ритм жизни, постоянное постоянное постоянное постоянное  ощущение усталости и подавленность?
      </p>
    </div>
    <div class="znachk-bl">
    <div class="col-lg-5th col-md-5th col-sm-5th advantages">
      <div class="first-tag"><span class="topzagltopzagl">Точное соблюдение сроков</span></div>
      <div class="img-place-svg-time"><img src="/img/svg/deadline.svg" class="catimg1"></div>
      <div class="anonce-tagcont">Lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem</div>
    </div>
    <div class="col-lg-5th col-md-5th col-sm-5th advantages">
      <div class="twoo-tag"><span class="topzagltopzagl">Собственное производство</span></div>
      <div class="img-place-svg-time"><img src="/img/svg/gear.svg" class="catimg1"></div>
      <div class="anonce-tagcont">Lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem</div>
    </div>
    <div class="col-lg-5th col-md-5th col-sm-5th advantages">
      <div class="three-tag"><span class="topzagltopzagl">Индивидуальный<br>подход</span></div>
      <div class="img-place-svg-time"><img src="/img/svg/clipboard.svg" class="catimg1"></div>
      <div class="anonce-tagcont">Lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem</div>
    </div>
    <div class="col-lg-5th col-md-5th col-sm-5th advantages">
      <div class="twoo-tag"><span class="topzagltopzagl">Бесплатный выезд специалиста</span></div>
      <div class="img-place-svg-time"><img src="/img/svg/express-delivery.svg" class="catimg1"></div>
      <div class="anonce-tagcont">Lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem</div>
    </div>
    <div class="col-lg-5th col-md-5th col-sm-5th advantages">
      <div class="twoo-tag"><span class="topzagltopzagl">Собственные<br>методики</span></div>
      <div class="img-place-svg-time"><img src="/img/svg/project.svg" class="catimg1"></div>
      <div class="anonce-tagcont">Lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem inpsum lorem</div>
    </div>
  </div>
 </div>
</div>
</section>


<!-- ОТЗЫВЫ -->
<!--
<section class="sect-7">
<div class="container">
  <h2 class="my-h2-advant">Отзывы клиентов</h2>
  <p class="content-otzv">Ниже вы можете ознакомиться с нашими отзывами Ниже вы можете ознакомиться с нашими отзывами</p>
  <div class="otzuvy">
    <div class="first-otzv">
      <span class="fio-otzv">Надежда Васильевна</span>
      <p class="content-otzv">Могу сказать, как клиент, что Женя работает на результат без воды, желания потянуть время, очень заинтересованно, деликатно, и вместе с тем смело, постоянно выдвигая и проверяя свои гипотезы. И мне очень нравится, что это гипотезы, а не авторитетные мнения.
      Женя готов идти на глубину, где будет непонятно, неприятно и мучительно страшно. Но не бойтесь, в трудный момент у вас всегда будет спасательный круг. В то же время не думайте, что Женя сделает все за вас. Тут придется самим потеть, дрожжать от страха, встретившись лицом к лицу со своими монстрами, выть от боли и из пустоты своей души взращивать достоинство.
      Спасибо, Женя! Ты один из лучших! Моя жизнь стала однозначно богаче после встречи с тобой! И я на пути к своей цельности и настоящести! Присоединяйтесь!
      </p>
      <span class="inside-page-otzv"><a href="" class="">Смотреть</a></span>
    </div>
    <div class="two-otzv">
      <span class="fio-otzv">Надежда Васильевна</span>
      <p class="content-otzv">Могу сказать, как клиент, что Женя работает на результат без воды, желания потянуть время, очень заинтересованно, деликатно, и вместе с тем смело, постоянно выдвигая и проверяя свои гипотезы. И мне очень нравится, что это гипотезы, а не авторитетные мнения.
      Женя готов идти на глубину, где будет непонятно, неприятно и мучительно страшно. Но не бойтесь, в трудный момент у вас всегда будет спасательный круг. В то же время не думайте, что Женя сделает все за вас. Тут придется самим потеть, дрожжать от страха, встретившись лицом к лицу со своими монстрами, выть от боли и из пустоты своей души взращивать достоинство.
      Спасибо, Женя! Ты один из лучших! Моя жизнь стала однозначно богаче после встречи с тобой! И я на пути к своей цельности и настоящести! Присоединяйтесь!
      </p>
      <span class="inside-page-otzv"><a href="" class="">Смотреть</a></span>
    </div>
  </div>
  <div class="all-otzv">
    <a href="" class="my-buttcall">Все отзывы</a>
  </div>
</div>
</section> 
-->


<!-- BRANDS CAROUSEL -->
<section class="sect-8">
<div class="ant-carousel">
  <div class="ant-carousel-hider">
    <ul class="ant-carousel-list">
      <li class="ant-carousel-element"><img src="/img/brands-karousel/doorhan.jpg" alt="0">
      </li>
      <li class="ant-carousel-element"><img src="/img/brands-karousel/dynaco.png" alt="1">
      </li>
      <li class="ant-carousel-element"><img src="/img/brands-karousel/hoermann.jpg" alt="2">
      </li>
      <li class="ant-carousel-element"><img src="/img/brands-karousel/pum.png" alt="3">
      </li>
      <li class="ant-carousel-element"><img src="/img/brands-karousel/turbo-floor.jpg" alt="4">
      </li>
      <li class="ant-carousel-element"><img src="/img/brands-karousel/doorhan.jpg" alt="5">
      </li>
      <li class="ant-carousel-element"><img src="/img/brands-karousel/dynaco.png" alt="1">
      </li>
      <li class="ant-carousel-element"><img src="/img/brands-karousel/hoermann.jpg" alt="2">
      </li>
      <li class="ant-carousel-element"><img src="/img/brands-karousel/pum.png" alt="3">
      </li>
    </ul>
  </div>
  <div class="ant-carousel-arrow-left"></div>
  <div class="ant-carousel-arrow-right"></div>
  <div class="ant-carousel-dots"></div>
</div>
<br>
<br>
</section>
<!-- HELP BLOCK -->
<br>
<br>
<br>
<br>
<section class="sect-9">
<div class="container">
  <h4 class="h4-help">Нужна помощь?</h4>
  <p>Оператор даст рабочие рекомендации или возьмёт вопрос на себя</p>
  <div class="col-12 col-md-6 col-sm-6 help-block">
		<input id="help-phone" type="text" placeholder="Ваш телефон*">
    <div class="help-butt"><a href="" class="my-buttcall-two help-call">Заказать звонок</a></div>
	</div>
</div>
<br>
<br>
<br>
<br>
</section>















<!-- MAP -->
<div class="map">	
	<div class="wrp">
		<div class="map-box">
			<h2 class="h2-map">Наши контакты</h2>
			<p>г. Москва, ул. Аргуновская д16 корп. 2</p>
			<p><a href="tel:+7 (967) 431-08-04">+7 (967) 431-08-04</a></p>
			<p><a href="mailto:info@site.com">info@vntechno.ru</a></p>
		</div>
	</div>
	<div id="map"><iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A0adfcf1fb5156fde3c481f48dfeed511126911ad97d3d8cdacd3753d5cb74c85&amp;source=constructor" width="100%" height="500" frameborder="0"></iframe>
</div>

<!-- FOOTER -->
 <footer>
 <div class="container-fluid foot-back-body">
  <div class="container foot-body">
    <div class="top-foot">
      <div class="foot-info-null">
        <ul class="foot-ul">
          <li class="first-li-foot foot-logo"><span style="font-size: 30px; color: white;">VN</span><span style="color: #7AB1FF; font-size: 30px; ">TECHNO</span></li>
          <li class="foot-li"><a href="" class="foot-li-a">О компании</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Реквизиты</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Оплата</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Цены</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Наши работы</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Новости</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Контакты</a></li>
        </ul>
      </div>
      <div class="foot-info-one">
        <ul class="foot-ul">
          <li class="first-li-foot">ИЗГОТОВЛЕНИЕ МЕТАЛЛОКОНСТРУКЦИЙ</li>
          <li class="foot-li"><a href="" class="foot-li-a">Производство изделий из металла</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Сварочные работы</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Порошковая покраска</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Плазменная резка</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Слесарные работы</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Слесарные работы</a></li>
        </ul>
      </div>
      <div class="foot-info-two">
        <ul class="foot-ul">
          <li class="first-li-foot">ОБСЛУЖИВАНИЕ ИНЖЕНЕРНЫХ СИСТЕМ</li>
          <li class="foot-li"><a href="" class="foot-li-a">Проверка безопастности электрических систем</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Проверка тепловых узлов и пунктов</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Чистка, ревизия и ремонт кондиционирования</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Проверка и ремонт систем водоснабжения</a></li>
        </ul>
      </div>
      <div class="foot-info-three">
        <ul class="foot-ul">
          <li class="first-li-foot">РЕМОНТ И ОБСЛУЖИВАНИЕ ВОРОТ</li>
          <li class="foot-li"><a href="" class="foot-li-a">Въездные ворота</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Гаражные ворота</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Промышленные ворота</a></li>
        </ul>
      </div>
      <div class="foot-info-four">
      <ul class="foot-ul foot-ul-custom-mobile">
          <li class="first-li-foot">ПРОМЫШЛЕННЫЕ НАЛИВНЫЕ ПОЛЫ</li>
          <li class="foot-li"><a href="" class="foot-li-a">Полимерное покрытие пола</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Пол с бетонным покрытием</a></li>
          <li class="foot-li"><a href="" class="foot-li-a">Напольная разметка</a></li>
        </ul>
        <div class="footer-contact-place">
          <div class="mail-vunosk">
            <span class="mail-vun-one"><img src="img/svg/email.svg" class="svg-cont-mail">vntechno@mail.ru</span>
            <span class="number-vub-one"><img src="img/svg/phone-call.svg" class="svg-cont">+7 (967)-431-08-04</span>
            <span class="number-vub-two"><img src="img/svg/phone-call.svg" class="svg-cont">+7 (967)-431-08-04</span>
          </div>
          <div class="messanger-vunosk">
          <a href="https://api.whatsapp.com/send?phone=79674310804" target="_blank">
            <img src="img/svg/whatsapp.svg" class="about-icons-messanger-wts">
          </a>
            <img src="img/svg/telegram.svg" class="about-icons-messanger-tg">   
            <img src="img/svg/viber.svg" class="about-icons-messanger-viber">   
          </div>
        </div>
      </div>
    </div>
    <div class="bottom-foot">
      <div class="foot-logslog"><span style="font-size: 18px; color: white;">VN</span><span style="color: #7AB1FF; font-size: 18px; ">TECHNO</span><br><br><span class="kompleks-text">- Комплексные работы</span></div>
      <div class="foot-about">
        <div class="foot-about-first"><span>Принимаем к оплате:</span></div>
        <div class="foot-about-twoo">
        <img src="img/svg/mir.svg" class="about-icons-last">
        <img src="img/svg/che.svg" class="about-icons-middle">
        <img src="img/svg/qiwi.svg" class="about-icons-middle">
        <img src="img/svg/visa.svg" class="about-icons-middle">
        <img src="img/svg/mastercart.svg" class="about-icons-middle">
        <img src="img/svg/eweodin.svg" class="about-icons-last">
        </div>
      </div>
      <div class="foot-answer">
        <div class="foot-answer-first"><span>Нужна помощь?</span></div>
        <div class="foot-answer-two"><a href="" class="my-buttcall-two">Задать вопрос</a></div>
      </div>
    </div>
    <div class="foot-vunosk">
      <div class="copiright-vunosk">
        © 2020, ООО "VnTechno"
      </div>
      <div class="politic-vunosk">
        <u><a href="" class="politic">Политика конфидициальности</a></u>
      </div>
    </div>
  </div>
 </div>
</footer>
<script>
function Ant(crslId) {

let id = document.getElementById(crslId);
if(id) {
  this.crslRoot = id
}
else {
  this.crslRoot = document.querySelector('.ant-carousel')
};

// Carousel objects
this.crslList = this.crslRoot.querySelector('.ant-carousel-list');
this.crslElements = this.crslList.querySelectorAll('.ant-carousel-element');
this.crslElemFirst = this.crslList.querySelector('.ant-carousel-element');
this.leftArrow = this.crslRoot.querySelector('div.ant-carousel-arrow-left');
this.rightArrow = this.crslRoot.querySelector('div.ant-carousel-arrow-right');
this.indicatorDots = this.crslRoot.querySelector('div.ant-carousel-dots');

// Initialization
this.options = Ant.defaults;
Ant.initialize(this)
};

Ant.defaults = {

// Default options for the carousel
elemVisible: 6, // Кол-во отображаемых элементов в карусели
loop: true,     // Бесконечное зацикливание карусели 
auto: true,     // Автоматическая прокрутка
interval: 5000, // Интервал между прокруткой элементов (мс)
speed: 750,     // Скорость анимации (мс)
touch: true,    // Прокрутка  прикосновением
arrows: true,   // Прокрутка стрелками
dots: true      // Индикаторные точки
};

Ant.prototype.elemPrev = function(num) {
num = num || 1;

if(this.options.dots) this.dotOn(this.currentElement);
this.currentElement -= num;
if(this.currentElement < 0) this.currentElement = this.dotsVisible-1;
if(this.options.dots) this.dotOff(this.currentElement);

if(!this.options.loop) {  // сдвиг вправо без цикла
  this.currentOffset += this.elemWidth*num;
  this.crslList.style.marginLeft = this.currentOffset + 'px';
  if(this.currentElement == 0) {
    this.leftArrow.style.display = 'none'; this.touchPrev = false
  }
  this.rightArrow.style.display = 'block'; this.touchNext = true
}
else {                    // сдвиг вправо с циклом
  let elm, buf, this$ = this;
  for(let i=0; i<num; i++) {
    elm = this.crslList.lastElementChild;
    buf = elm.cloneNode(true);
    this.crslList.insertBefore(buf, this.crslList.firstElementChild);
    this.crslList.removeChild(elm)
  };
  this.crslList.style.marginLeft = '-' + this.elemWidth*num + 'px';
  let compStyle = window.getComputedStyle(this.crslList).marginLeft;
  this.crslList.style.cssText = 'transition:margin '+this.options.speed+'ms ease;';
  this.crslList.style.marginLeft = '0px';
  setTimeout(function() {
    this$.crslList.style.cssText = 'transition:none;'
  }, this.options.speed)
}
};

Ant.prototype.elemNext = function(num) {
num = num || 1;

if(this.options.dots) this.dotOn(this.currentElement);
this.currentElement += num;
if(this.currentElement >= this.dotsVisible) this.currentElement = 0;
if(this.options.dots) this.dotOff(this.currentElement);

if(!this.options.loop) {  // сдвиг влево без цикла
  this.currentOffset -= this.elemWidth*num;
  this.crslList.style.marginLeft = this.currentOffset + 'px';
  if(this.currentElement == this.dotsVisible-1) {
    this.rightArrow.style.display = 'none'; this.touchNext = false
  }
  this.leftArrow.style.display = 'block'; this.touchPrev = true
}
else {                    // сдвиг влево с циклом
  let elm, buf, this$ = this;
  this.crslList.style.cssText = 'transition:margin '+this.options.speed+'ms ease;';
  this.crslList.style.marginLeft = '-' + this.elemWidth*num + 'px';
  setTimeout(function() {
    this$.crslList.style.cssText = 'transition:none;';
    for(let i=0; i<num; i++) {
      elm = this$.crslList.firstElementChild;
      buf = elm.cloneNode(true); this$.crslList.appendChild(buf);
      this$.crslList.removeChild(elm)
    };
    this$.crslList.style.marginLeft = '0px'
  }, this.options.speed)
}
};

Ant.prototype.dotOn = function(num) {
this.indicatorDotsAll[num].style.cssText = 'background-color:#BBB; cursor:pointer;'
};

Ant.prototype.dotOff = function(num) {
this.indicatorDotsAll[num].style.cssText = 'background-color:#556; cursor:default;'
};

Ant.initialize = function(that) {

// Constants
that.elemCount = that.crslElements.length; // Количество элементов
that.dotsVisible = that.elemCount;         // Число видимых точек
let elemStyle = window.getComputedStyle(that.crslElemFirst);
that.elemWidth = that.crslElemFirst.offsetWidth +  // Ширина элемента (без margin)
  parseInt(elemStyle.marginLeft) + parseInt(elemStyle.marginRight);

// Variables
that.currentElement = 0; that.currentOffset = 0;
that.touchPrev = true; that.touchNext = true;
let xTouch, yTouch, xDiff, yDiff, stTime, mvTime;
let bgTime = getTime();

// Functions
function getTime() {
  return new Date().getTime();
};
function setAutoScroll() {
  that.autoScroll = setInterval(function() {
    let fnTime = getTime();
    if(fnTime - bgTime + 10 > that.options.interval) {
      bgTime = fnTime; that.elemNext()
    }
  }, that.options.interval)
};

// Start initialization
if(that.elemCount <= that.options.elemVisible) {   // Отключить навигацию
  that.options.auto = false; that.options.touch = false;
  that.options.arrows = false; that.options.dots = false;
  that.leftArrow.style.display = 'none'; that.rightArrow.style.display = 'none'
};

if(!that.options.loop) {       // если нет цикла - уточнить количество точек
  that.dotsVisible = that.elemCount - that.options.elemVisible + 1;
  that.leftArrow.style.display = 'none';  // отключить левую стрелку
  that.touchPrev = false;    // отключить прокрутку прикосновением вправо
  that.options.auto = false; // отключить автопркрутку
}
else if(that.options.auto) {   // инициализация автопрокруки
  setAutoScroll();
  // Остановка прокрутки при наведении мыши на элемент
  that.crslList.addEventListener('mouseenter', function() {
    clearInterval(that.autoScroll)
  }, false);
  that.crslList.addEventListener('mouseleave', setAutoScroll, false)
};

if(that.options.touch) {   // инициализация прокрутки прикосновением
  that.crslList.addEventListener('touchstart', function(e) {
    xTouch = parseInt(e.touches[0].clientX);
    yTouch = parseInt(e.touches[0].clientY);
    stTime = getTime()
  }, false);
  that.crslList.addEventListener('touchmove', function(e) {
    if(!xTouch || !yTouch) return;
    xDiff = xTouch - parseInt(e.touches[0].clientX);
    yDiff = yTouch - parseInt(e.touches[0].clientY);
    mvTime = getTime();
    if(Math.abs(xDiff) > 15 && Math.abs(xDiff) > Math.abs(yDiff) && mvTime - stTime < 75) {
      stTime = 0;
      if(that.touchNext && xDiff > 0) {
        bgTime = mvTime; that.elemNext()
      }
      else if(that.touchPrev && xDiff < 0) {
        bgTime = mvTime; that.elemPrev()
      }
    }
  }, false)
};

if(that.options.arrows) {  // инициализация стрелок
  if(!that.options.loop) that.crslList.style.cssText =
    'transition:margin '+that.options.speed+'ms ease;';
  that.leftArrow.addEventListener('click', function() {
    let fnTime = getTime();
    if(fnTime - bgTime > that.options.speed) {
      bgTime = fnTime; that.elemPrev()
    }
  }, false);
  that.rightArrow.addEventListener('click', function() {
    let fnTime = getTime();
    if(fnTime - bgTime > that.options.speed) {
      bgTime = fnTime; that.elemNext()
    }
  }, false)
}
else {
  that.leftArrow.style.display = 'none';
  that.rightArrow.style.display = 'none'
};

if(that.options.dots) {  // инициализация индикаторных точек
  let sum = '', diffNum;
  for(let i=0; i<that.dotsVisible; i++) {
    sum += '<span class="ant-dot"></span>'
  };
  that.indicatorDots.innerHTML = sum;
  that.indicatorDotsAll = that.crslRoot.querySelectorAll('span.ant-dot');
  // Назначаем точкам обработчик события 'click'
  for(let n=0; n<that.dotsVisible; n++) {
    that.indicatorDotsAll[n].addEventListener('click', function() {
      diffNum = Math.abs(n - that.currentElement);
      if(n < that.currentElement) {
        bgTime = getTime(); that.elemPrev(diffNum)
      }
      else if(n > that.currentElement) {
        bgTime = getTime(); that.elemNext(diffNum)
      }
      // Если n == that.currentElement ничего не делаем
    }, false)
  };
  that.dotOff(0);  // точка[0] выключена, остальные включены
  for(let i=1; i<that.dotsVisible; i++) {
    that.dotOn(i)
  }
}
};
new Ant();
</script> 
</body>
</html>

