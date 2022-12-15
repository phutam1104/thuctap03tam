export default class slickecosystem {
    constructor(){
      this.$this = $('html')
    }
    init() {
      this.Eslick();
    }
    Eslick(){
      $('.slick-ecosystem').slick(
        {
          infinite:true,
          prevArrow:$('.prev2'),
          nextArrow:$('.next2'),
          cssEase: 'linear',
          arrows:true,
        }
      )
    }
  }
  new slickecosystem().init()