import $ from 'jquery';
class HeroSlider {
  constructor() {

    this.els = $(".hero-slider");
    this.initSlider();
  }

  initSlider() {
    this.els.slick({
      mobileFirst: true,
      variableWidth: true,
      arrows: true,
      autoplay:true
    });
  }
}

export default HeroSlider;