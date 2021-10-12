$(document).ready(function(){
    $('job-slider').slick({
        arrows:true,
        dots:true,
        adaptiveHeight:true,
        slidesToShow:5,
        slidesToScroll:1
        speed:100,
    })
}


<div class="container">
 <div class="sl-slider">
  <div class="slider__item">
    <img src="img/job-carousel/car-job-1.jpg" alt="">
  </div>
  <div class="slider__item">
    <img src="img/job-carousel/car-job-1.jpg" alt="">
  </div>
  <div class="slider__item">
    <img src="img/job-carousel/car-job-1.jpg" alt="">
  </div>
  <div class="slider__item">
    <img src="img/job-carousel/car-job-1.jpg" alt="">
  </div>
  <div class="slider__item">
    <img src="img/job-carousel/car-job-1.jpg" alt="">
  </div>
  <div class="slider__item">
    <img src="img/job-carousel/car-job-1.jpg" alt="">
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
      autoplaySpeed: 3000,
      pauseOnHover: true,
      pauseOnFocus: true,
    })
});
</script>










<div class="container">
<figure class="baha1493">
  <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/ls-sample1.jpg" alt="ls-sample1" /></div>
  <figcaption>
    <div class="date"><span class="day">28</span><span class="month">Oct</span></div>
    <h3>The World Ended Yesterday</h3>
    <p>

      You know what we need, Hobbes? We need an attitude. Yeah, you can't be cool if you don't have an attitude.
    </p>
    <footer>
      <div class="views"><i class="ion-eye"></i>2,907</div>
      <div class="love"><i class="ion-heart"></i>623</div>
      <div class="comments"><i class="ion-chatboxes"></i>23</div>
    </footer>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="baha1493 hover">
  <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/ls-sample2.jpg" alt="ls-sample2" /></div>
  <figcaption>
    <div class="date"><span class="day">17</span><span class="month">Nov</span></div>
    <h3>An Abstract Post Heading</h3>
    <p>

      Sometimes the surest sign that intelligent life exists elsewhere in the universe is that none of it has tried to contact us.
    </p>
    <footer>
      <div class="views"><i class="ion-eye"></i>1,870</div>
      <div class="love"><i class="ion-heart"></i>973</div>
      <div class="comments"><i class="ion-chatboxes"></i>85</div>
    </footer>
  </figcaption>
  <a href="#"></a>
</figure>
<figure class="baha1493">
  <div class="image"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/ls-sample3.jpg" alt="ls-sample3" /></div>
  <figcaption>
    <div class="date"><span class="day">01</span><span class="month">Dec</span></div>
    <h3>Down with this sort of thing</h3>
    <p>

      I don't need to compromise my principles, because they don't have the slightest bearing on what happens to me anyway.
    </p>
    <footer>
      <div class="views"><i class="ion-eye"></i>928</div>
      <div class="love"><i class="ion-heart"></i>198</div>
      <div class="comments"><i class="ion-chatboxes"></i>23</div>
    </footer>
  </figcaption>
  <a href="#"></a>
</figure>
</div>
<script>
/* Demo purposes only */
$(".hover").mouseleave(
  function() {
    $(this).removeClass("hover");
  }
);
</script>