(function($) {
    function detectDimensions() {
        var browser = {
            isIe: function() {
                return navigator.appVersion.indexOf("MSIE") != -1
            },
            navigator: navigator.appVersion,
            getVersion: function() {
                var version = 999;
                if (navigator.appVersion.indexOf("MSIE") != -1)
                    version = parseFloat(navigator.appVersion.split("MSIE")[1]);
                return version
            }
        };
        if (browser.isIe() && browser.getVersion() <= 9) {
            $("html").addClass("ie9")
            console.log("You are currently using Internet Explorer" + browser.getVersion() + " or are viewing the site in Compatibility View, please upgrade for a better user experience.")
        }
        console.log(window.screen.availWidth);
        if (window.screen.availWidth < 768) {
            $('html').removeClass("tablet").removeClass("desktop").addClass('smartphone')
        } else if (window.screen.availWidth >= 768 && window.screen.availWidth < 1280) {
            $('html').removeClass("desktop").removeClass("smartphone").addClass('tablet')
        } else if (window.screen.availWidth >= 1280) {
            $('html').removeClass("tablet").removeClass("smartphone").addClass('desktop')
        }
        var browserWidth, browserHeight;
        var browserWidth = $(window).width();
        var browserHeight = $(window).height();
        $('html').removeClass('portrait').removeClass('landscape');
        if (browserWidth > browserHeight) $('html').addClass('landscape');
        else $('html').addClass('portrait');
        if ($("html").hasClass("smartphone")) $("html").removeClass("largeScreen").addClass("smallScreen");
        else if ($("html").hasClass("tablet") && $("html").hasClass("portrait")) $("html").removeClass("largeScreen").addClass("smallScreen");
        else if ($("html").hasClass("tablet") && $("html").hasClass("landscape")) $("html").removeClass("smallScreen").addClass("largeScreen");
        else if ($("html").hasClass("desktop")) $("html").removeClass("smallScreen").addClass("largeScreen");
        $('html').removeClass('dimensions_unavailable');
        $.event.trigger({
            type: "dimensionUpdate",
            message: "html class update",
            time: new Date()
        })
    }
    $(document).ready(function() {
        detectDimensions();
        $(window).resize(function() {
            detectDimensions()
        })
    })
})(jQuery);
(function($) {
    function limpaConsole() {
        console.API;
        if (typeof console._commandLineAPI !== 'undefined') {
            console.API = console._commandLineAPI
        } else if (typeof console._inspectorCommandLineAPI !== 'undefined') {
            console.API = console._inspectorCommandLineAPI
        } else if (typeof console.clear !== 'undefined') {
            console.API = console
        }
        console.API.clear()
    }

    function carregandoTimeout() {
        setTimeout(function() {
            $(".corpo").removeClass("carregando");
            console.log("###########################################");
            console.log("Sistema iniciado!");
            console.log("###########################################");
            console.log(" ")
        }, 6000)
    }
    $(window).on("load", function() {
        $(".corpo").removeClass("carregando");
        console.log("###########################################");
        console.log("Sistema iniciado!");
        console.log("###########################################");
        console.log(" ")
    });
    $(document).ready(function() {
        carregandoTimeout();
        el = $("#curriculum");
        console.log("Iniciando...");
        if (($("html").hasClass("smartphone") && $("html").hasClass("landscape")) || $("html").hasClass("tablet")) {
            //naoDisponivel()
        }
        $(window).on('resize', function() {
            if (($("html").hasClass("smartphone") && $("html").hasClass("landscape")) || ($("html").hasClass("smartphone") && $("html").hasClass("portrait") && $("body").hasClass('desabilitado')) || $("html").hasClass("tablet") || $("html").hasClass("desktop")) {}
        });
        $(".repetir_video").on('click', function() {});

        function naoDisponivel() {
            console.log("###########################################");
            console.log("Barrada entrada de tablet ou smartphone!!!");
            console.log("###########################################");
            console.log(" ");
            console.log = function() {};
            el.addClass('desabilitado');
            var except = el.find('.naodisponivel');
            el.empty().append(except)
        }
    })
})(jQuery)