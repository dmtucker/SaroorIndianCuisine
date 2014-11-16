$(document).ready(
    function ( ) {
        function resetMenu ( ) {
            $('nav>ul>li>a').css('color','#FFF');
        }
        function activateTab ( that ) {
            that.find('a').css('color','#06F');
        }
        $('nav>ul>li').click(
            function ( e ) {
                resetMenu();
                activateTab($(this));
            }
        );
        $("#tabs").tabs({
            show: 500
        });
        resetMenu();
        $('nav>ul>li').each(
            function ( index ) {
                if ($(this).hasClass('ui-tabs-active')) activateTab($(this));
            }
        );
        $('#map>object').removeClass('absent');
    }
);




function slideSwitch() {
    var $active = $('#slideshow img.active');
    if ($active.length == 0) $active = $('#slideshow img:last');
    var $next = $active.next().length ? $active.next() : $('#slideshow img:first');
    $active.addClass('last-active');
    $next.css({opacity: 0.0}).addClass('active').animate({opacity: 1.0},1000,function() {
        $active.removeClass('active last-active');
    });
}
$(function() { setInterval("slideSwitch()",3000); });
