export default class slickleaders {
    constructor(){
      this.$this = $('html')
    }
    init() {
      this.Carousel();
    }
    Carousel(){
      $('.slick-leaders').slick(
        {
          
          dots:false,
          infinite:true,
          prevArrow:$('.prev1'),
          nextArrow:$('.next1'),
          cssEase: 'linear',
          slidesToShow: 6,
          slidesToScroll: 1,
          arrows:true,
          responsive: [
            {
              breakpoint: 1025,
              settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
              },
            },
            {
              breakpoint: 769,
              settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
              },
            },
          ],
        }
      )
    }
  }
  new slickleaders().init()