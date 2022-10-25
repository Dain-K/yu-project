$(".menu1").click(function () {
  $(this).addClass("on");
  $(".menu2").removeClass("on");
});

$(".menu2").click(function () {
  $(this).addClass("on");
  $(".menu1").removeClass("on");
});
