$(document).ready(function(){
    // <----------tooltip---------->
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    });
    // <-----------popover---------->
    $(function () {
        $('[data-toggle="popover"]').popover()
    })

    tippy('#myButton', {
        content: "I'm a Tippy tooltip!",
    });

    // $(".nav-item").click(function(){
    //     $(".active_prb, active").css({
    //         "background-color": "rgb(39, 39, 39)",
    //         "border-radius": "none",
    //         "color": "white !important"
    //     });
    // });

    (function ($) {
        "use strict";
        
        /*Clipboard*/
        if ($('.button-clipboard').length) {
            var clipboard = new ClipboardJS('.button-clipboard');
        }
    
        var $clipboardBtn = $('.icon-list-wrap a');
        $clipboardBtn.on('click', function (e) {
            e.preventDefault();
        });
        var $clipboard = new ClipboardJS('.icon-list-wrap a');
        $clipboard.on('success', function(e) {
            $(e.trigger).append("<span class='badge badge-success'>copied</span>");
            setTimeout(function() {
                $clipboardBtn.children('.badge').remove();
            }, 3000);
        });
        $clipboard.on('error', function(e) {
            $(e.trigger).append("<span class='badge badge-danger'>Error</span>");
            setTimeout(function() {
                $clipboardBtn.children('.badge').remove();
            }, 3000);
        });
        

         /*Clipboard*/
    if ($('.button-clipboard').length) {
        var clipboard = new ClipboardJS('.button-clipboard');
    }

    })(jQuery);

});