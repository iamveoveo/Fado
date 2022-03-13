
$('.autoplay').slick({
    slidesToShow: 6,
    slidesToScroll: 2,
    autoplay: false,
    autoplaySpeed: 2000,
  });

  // header
window.onscroll = function(){
  scroll();
};
function scroll(){
    if(document.body.scrollTop > 350 || document.documentElement.scrollTop > 350){
        document.getElementById("product-scroll-section").style.top = "0";
    }
    else{
        document.getElementById("product-scroll-section").style.top = "-200px";
    }
};

$(document).ready(function(){
  var quantity = 1;

  $('.down-btn').click(function(){
    if(quantity>1){
      quantity--;
      $('[name="quantity"]').val(quantity);
    };
  });
  $('.up-btn').click(function(){
    quantity++;
    $('[name="quantity"]').val(quantity);
  });
});