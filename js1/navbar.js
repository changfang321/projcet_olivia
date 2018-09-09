// 選單固定在上方
$(function () {
    var $menu = $('#navbar')
    var menuTop = $menu.offset().top
    var menuHeight = $menu.height()
    var $container = $('.content')
    var $win = $(window)
    console.log($container.css('marginTop'))

    $win.on('scroll', function () {
        var scrollTop = $win.scrollTop()

        console.log(scrollTop)

        if (scrollTop >= menuTop) {
            if (!$menu.hasClass('menuFix')) {
                $menu.addClass('menuFix')
                $container.css({
                    marginTop: parseFloat($container.css('marginTop')) + menuHeight
                })
            }
        } else {
            if ($menu.hasClass('menuFix')) {
                $menu.removeClass('menuFix')
                $container.css({
                    marginTop: parseFloat($container.css('marginTop')) - menuHeight
                })

            }

        }
    })


});



$(function () {
    $('.logoP').click(function () {
        $('.tresA').slideToggle();
    })

})




// $(function () {
//     var $menu = $('#navbar')
//     var menuTop = $menu.offset().top
//     var menuHeight = $menu.height()
//     var $container = $('.content')
//     var $win = $(window)
//     console.log($container.css('marginTop'))

//     $win.on('scroll', function () {
//         var scrollTop = $win.scrollTop()

//         console.log(scrollTop)

//         if (scrollTop >= menuTop) {
//             if (!$menu.hasClass('menuFix')) {
//                 $menu.addClass('menuFix')
//                 $container.css({
//                     marginTop: parseFloat($container.css('marginTop')) + menuHeight
//                 })
//             }
//         } else {
//             if ($menu.hasClass('menuFix')) {
//                 $menu.removeClass('menuFix')
//                 $container.css({
//                     marginTop: parseFloat($container.css('marginTop')) - menuHeight
//                 })
//             }

//         }
//     })


// });