$(function () {
  $(".vertical_tabs .tab-wrap").click(function () {
    var index = $(this).index();

    $(".vertical_tabs .tab-wrap").removeClass("active");
    $(".vertical_tabs .tab-wrap").eq(index).addClass("active");
  });

  $(".vertical_tabs_2 .tab-wrap").click(function () {
    var index = $(this).index();

    $(".vertical_tabs_2 .tab-wrap").removeClass("active");
    $(".vertical_tabs_2 .tab-wrap").eq(index).addClass("active");
  });
});
