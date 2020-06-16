$(document).ready(function() {
    function animation() {
        var progress = document.getElementsByClassName("progress-bar");
        var arr = $.makeArray(progress);
        var width = 0;
        var arrWidth = ['80', '70', '60', '50', '40'];
        for (let i = 0; i < arr.length; i++) {
            if (i > (arrWidth.length - 1)) {
                width = arrWidth[i - arrWidth.length];
            } else width = arrWidth[i];
            arr[i].style.width = (width + '%');
            arr[i].animate([{ width: '0' }, { width: (width + '%') }], 800)
        }
    }
    /*--------------------------------Scroll active-Animations------------------------------ */
    var active = document.getElementById('start-animate');
    var check = true;
    if (active.getBoundingClientRect().y <= $(window).height()) {
        animation();
        check = false;
    }

    $(window).on("scroll resize", function() {
        if ((active.getBoundingClientRect().y <= $(window).height()) && check == true) {
            animation();
            check = false;
        }
    });
});