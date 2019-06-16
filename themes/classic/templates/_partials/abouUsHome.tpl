
<section class="mg-main-about">
  <div class="container">
    <h2>О компании</h2>
    <img class="d-none d-xl-inline" src="/themes/classic/img/megumi-text.jpg" alt="" />
    <div class="mg-main-about__row">
      <div class="mg-main-about__col order-2 order-xl-1"><strong>В MegumiShop мы уверены: люди, увлеченные своей работой, делают ее лучше. Поэтому мы с готовностью обсуждаем новые идеи и поощряем профессиональное развитие. У нас ценятся дружеские отношения в коллективе. Мы не только работаем, но и отдыхаем вместе: играем в футбол, отмечаем праздники и веселимся на наших вечеринках.</strong></div>
      <div class="mg-main-about__col order-1 order-xl-2"><img src="/themes/classic/img/img-1.jpg" alt="" /></div>
      <div class="mg-main-about__col d-none d-xl-block"> <img src="/themes/classic/img/img-2.jpg" alt="" /></div>

    </div>
    <a class="mg-btn" href="/about-us">Узнать больше</a>
  </div>
</section>

<script>
  $(document).ready(function () {
    $('#mg-main-slider-bannerHome').slick({
      arrows: false,
      dots: true,
      draggable: true,
      slidesToShow: 3,
      slidesToScroll: 3,
      responsive: [
        {
          breakpoint: 1199,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  });
</script>