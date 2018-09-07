// // $(window).scroll(function () {
// //     var scroll = $(window).scrollTop();
// //     $(".zoom img").css({
// //         transform: 'translate3d(-50%, -' + (scroll / 500) + '%, 0) scale(' + (500 + scroll / 0) /
// //             500 + ')',
// //         //Blur suggestion from @janwagner: https://codepen.io/janwagner/ in comments
// //         //"-webkit-filter": "blur(" + (scroll/200) + "px)",
// //         //filter: "blur(" + (scroll/200) + "px)"
// //     });
// // });



// window.onscroll = function () {
//     var $container = $('.content')
//     console.log($container.css('marginTop'))
//     if ($(document).scrollTop() > 1000) //距離頂部高度
//     {
//         $("#zoom").addClass('float');
//         $container.css({
//             marginTop: parseFloat($container.css('marginTop')) + menuHeight
//         })
//     } else {
//         $("#zoom").removeClass('float');
//         $container.css({
//             marginTop: parseFloat($container.css('marginTop')) - menuHeight
//         })
//     }
// }