jQuery(document).ready(function () {
  console.log("hello");
  $(".more-btn").click(function () {
    $(this).toggleClass("active");
    $(".main-navigation").toggleClass("active");
  });
});
