$(document).ready(function () {

    var autosilde = true;
    var pausesilde = true;

    $(".sliderli").first().addClass("current");
    $(".sliderli").hide();
    $(".current").show();

    function nextslider() {
        $(".current").removeClass("current").addClass("oldActive");
        if ($(".oldActive").is(":last-child")) {
            $(".sliderli").first().addClass("current");
        } else {
            $(".oldActive").next().addClass("current");
        }
        $(".oldActive").removeClass("oldActive");
        $(".sliderli").fadeOut(500);
        $(".current").fadeIn(500);

    }

    function prevslider() {
        $(".current").removeClass("current").addClass("oldActive");
        if ($(".oldActive").is(":first-child")) {
            $(".sliderli").last().addClass("current");
        } else {
            $(".oldActive").prev().addClass("current");
        }
        $(".oldActive").removeClass("oldActive");
        $(".sliderli").fadeOut(500);
        $(".current").fadeIn(500);

    }

    $("#N").click(function () {
        nextslider();
    })
    $("#P").click(function () {
        prevslider();
    })
})

$("#designimg").hover(function () {
    $(".arrowNP").addClass("sliderHovered");
}, function () {
    $(".arrowNP").removeClass("sliderHovered");
})