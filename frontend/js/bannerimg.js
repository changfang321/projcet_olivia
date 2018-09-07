$(function () {
    var $block = $('#block')
    var $ul = $block.find('ul.imgs')
    var $li = $ul.find('li')
    var length = $li.length
    var index = 0
    var speed = 2000
    var timer
    var timeSpeed = 5000


    $li.css({
        opacity: 0
    }).eq(index).css({
        opacity: 1
    })

    var $dots = $('<ul class="dots"></ul>')
    $li.each(function () {
        var $this = $(this)
        var src = $this.find('img').attr('src')

        $dots.append('<li><a href="#"><img src="' + src + '"></a></li>')
    })

    var $dotLi = $dots.find('li')
    $dotLi.eq(index).addClass('selected')

    $block.append($dots)

    var $next = $('#next').click(function () {

        $li.eq(index).stop().animate({
            opacity: 0,
            zIndex: 0
        }, speed)

        $dotLi.eq(index).removeClass('selected')

        index = (index + 1) % length


        $li.eq(index).stop().animate({
            opacity: 1,
            zIndex: length
        }, speed)
        $dotLi.eq(index).addClass('selected')

    })

    $('#prev').click(function () {

        $li.eq(index).stop().animate({
            opacity: 0,
            zIndex: 0
        }, speed)
        $dotLi.eq(index).removeClass('selected')

        index = (index - 1 + length) % length

        $li.eq(index).stop().animate({
            opacity: 1,
            zIndex: length
        }, speed)
        $dotLi.eq(index).addClass('selected')

    })

    $('.dots a').click(function () {
        var $this = $(this)
        var $parent = $this.parent()
        var parentIndex = $parent.index()

        $li.eq(index).stop().animate({
            opacity: 0,
            zIndex: 0
        }, speed)

        $dotLi.eq(index).removeClass('selected')

        index = parentIndex

        $li.eq(index).stop().animate({
            opacity: 1,
            zIndex: length
        }, speed)
        $dotLi.eq(index).addClass('selected')

        return false;
    })

    function auto() {
        // $next.click()
        $next.trigger('click')

        timer = setTimeout(auto, speed + timeSpeed)
    }

    $block.hover(function () {
        clearTimeout(timer)
    }, function () {
        timer = setTimeout(auto, timeSpeed)
    })

    timer = setTimeout(auto, timeSpeed)

})