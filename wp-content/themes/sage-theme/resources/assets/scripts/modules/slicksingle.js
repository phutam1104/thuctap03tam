export default class slicksingle {
  constructor(){
    this.$this = $('html')
  }
  init() {
    this.Carousel();
  }
  Carousel(){
    $('.slick-single').slick(
      {
        dots:false,
        infinite:true,
        cssEase: 'linear',
        arrows:true,
        prevArrow:$('.prev'),
        nextArrow:$('.next'),
      }
    )
  }
}
new slicksingle().init()