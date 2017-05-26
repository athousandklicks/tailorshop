/* global $this */

"use strict";
/* -------------------------------------
 Google Analytics
 change UA-XXXXX-X to be your site's ID.
 -------------------------------------- */
(function (b, o, i, l, e, r) {
    b.GoogleAnalyticsObject = l;
    b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
    b[l].l = +new Date;
    e = o.createElement(i);
    r = o.getElementsByTagName(i)[0];
    e.src = '//www.google-analytics.com/analytics.js';
    r.parentNode.insertBefore(e, r)
}(window, document, 'script', 'ga'));
ga('create', 'UA-XXXXX-X', 'auto');
ga('send', 'pageview');
/* -------------------------------------
 CUSTOM FUNCTION WRITE HERE
 -------------------------------------- */
$(document).ready(function (e) {
    /* -------------------------------------
     PROGRESS BAR
     -------------------------------------- */
    try {
        $('#skill-faq').appear(function () {
            jQuery('.skill-holder').each(function () {
                jQuery(this).find('.skill-bar').animate({
                    width: jQuery(this).attr('data-percent')
                }, 2500);
            });
        });
    } catch (err) {
    }
    /* -------------------------------------
     CUSTOM FORM
     -------------------------------------- */
    $(function () {
        jcf.replaceAll();
    });
    /* -------------------------------------
     HOME SLIDER PROGRESSBAR
     -------------------------------------- */
    var time = 7;
    var $progressBar, $bar, $elem, isPause, tick, percentTime;
    $("#home-slider").owlCarousel({
        slideSpeed: 500,
        paginationSpeed: 500,
        pagination: true,
        singleItem: true,
        navigation: true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ],
        afterInit: progressBar,
        afterMove: moved,
        startDragging: pauseOnDragging
    });
    function progressBar(elem) {
        $elem = elem;
        buildProgressBar();
        start();
    }
    function buildProgressBar() {
        $progressBar = $("<div>", {
            id: "progressBar"
        });
        $bar = $("<div>", {
            id: "bar"
        });
        $progressBar.append($bar).prependTo($elem);
    }
    function start() {
        percentTime = 0;
        isPause = false;
        tick = setInterval(interval, 10);
    }
    ;
    function interval() {
        if (isPause === false) {
            percentTime += 1 / time;
            $bar.css({
                width: percentTime + "%"
            });
            if (percentTime >= 100) {
                $elem.trigger('owl.next')
            }
        }
    }
    function pauseOnDragging() {
        isPause = true;
    }
    function moved() {
        clearTimeout(tick);
        start();
    }
    /* -------------------------------------
     PRODUCT SLIDER
     -------------------------------------- */
    $("#product-slider").owlCarousel({
        autoPlay: false,
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 3],
        itemsMobile: [479, 1],
        pagination: false,
        navigation: true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });
    /* -------------------------------------
     PRODUCT SLIDER
     -------------------------------------- */
    $("#brand-slider").owlCarousel({
        autoPlay: false,
        items: 5,
        itemsDesktop: [1199, 5],
        itemsDesktopSmall: [979, 4],
        itemsTablet: [768, 3],
        itemsMobile: [479, 1],
        pagination: false,
        navigation: true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });
    /* -------------------------------------
     PRODUCT SLIDER
     -------------------------------------- */
    $("#expert-slider").owlCarousel({
        autoPlay: false,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        itemsTablet: [768, 2],
        itemsMobile: [479, 1],
        pagination: false,
        navigation: true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });
    /* -------------------------------------
     FAQ ACCORDION
     -------------------------------------- */
    function toggleChevron(e) {
        $(e.target)
                .prev('.accordion-heading')
                .find("i.indicator")
                .toggleClass('fa-caret-down fa-caret-right');
    }
    $('#faq-accordion').on('hidden.bs.collapse', toggleChevron);
    $('#faq-accordion').on('shown.bs.collapse', toggleChevron);
    /* -------------------------------------
     SIDEBAR ACCORDION
     -------------------------------------- */
    function toggleChevron(e) {
        $(e.target)
                .prev('.accordion-heading')
                .find("i.indicator")
                .toggleClass('fa-angle-down fa-angle-right');
    }
    $('#sidebar-accordion').on('hidden.bs.collapse', toggleChevron);
    $('#sidebar-accordion').on('shown.bs.collapse', toggleChevron);
    /* -------------------------------------
     SIDEBAR ACCORDION
     -------------------------------------- */
    function toggleChevron(e) {
        $(e.target)
                .prev('.accordion-heading')
                .find("i.indicator")
                .toggleClass('fa-angle-down fa-angle-right');
    }
    $('#shirtdesign-accordion').on('hidden.bs.collapse', toggleChevron);
    $('#shirtdesign-accordion').on('shown.bs.collapse', toggleChevron);
    /* -------------------------------------
     POPULAR ITEMS SLIDER
     -------------------------------------- */
    $("#popular-items-slider").owlCarousel({
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        navigation: true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });
    /* -------------------------------------
     RECENTLY VIEWED SLIDER
     -------------------------------------- */
    $("#recently-viewed-slider").owlCarousel({
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        navigation: true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });
    /* -------------------------------------
     Pretty Photo Gallery
     -------------------------------------- */
    $("a[data-rel]").each(function () {
        $(this).attr("rel", $(this).data("rel"));
    });
    $("a[data-rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'normal',
        theme: 'dark_square',
        slideshow: 3000,
        autoplay_slideshow: true,
        social_tools: false
    });
    /* -------------------------------------
     Product Slider 				
     -------------------------------------- */
    (function ($) {
        var sync1 = $("#sync1");
        var sync2 = $("#sync2");
        sync1.owlCarousel({
            singleItem: true,
            slideSpeed: 1000,
            navigation: false,
            pagination: false,
            afterAction: syncPosition,
            responsiveRefreshRate: 200,
        });
        sync2.owlCarousel({
            items: 4,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [979, 2],
            itemsTablet: [768, 2],
            itemsTabletSmall: [640, 3],
            itemsMobile: [479, 2],
            pagination: false,
            responsiveRefreshRate: 100,
            afterInit: function (el) {
                el.find(".owl-item").eq(0).addClass("synced");
            }
        });
        function syncPosition(el) {
            var current = this.currentItem;
            $("#sync2")
                    .find(".owl-item")
                    .removeClass("synced")
                    .eq(current)
                    .addClass("synced")
            if ($("#sync2").data("owlCarousel") !== undefined) {
                center(current)
            }
        }
        $("#sync2").on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).data("owlItem");
            sync1.trigger("owl.goTo", number);
        });
        function center(number) {
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
            var num = number;
            var found = false;
            for (var i in sync2visible) {
                if (num === sync2visible[i]) {
                    var found = true;
                }
            }
            if (found === false) {
                if (num > sync2visible[sync2visible.length - 1]) {
                    sync2.trigger("owl.goTo", num - sync2visible.length + 2)
                } else {
                    if (num - 1 === -1) {
                        num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                }
            } else if (num === sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", sync2visible[1])
            } else if (num === sync2visible[0]) {
                sync2.trigger("owl.goTo", num - 1)
            }
        }
    }(jQuery));
    /* -------------------------------------
     RECENTLY VIEWED SLIDER
     -------------------------------------- */
    $("#product-review-slider").owlCarousel({
        slideSpeed: 300,
        paginationSpeed: 400,
        singleItem: true,
        pagination: false,
        navigation: true,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });
    /* -------------------------------------
     DESIGN YOUR PRODUCT SLIDER
     -------------------------------------- */
    (function ($) {
        var sync1 = $("#product-tab-data");
        var sync2 = $("#product-tabs");
        sync1.owlCarousel({
            autoPlay: false,
            singleItem: true,
            slideSpeed: 1000,
            navigation: true,
            pagination: false,
            navigationText: [
                "<i class='fa fa-angle-left'></i>",
                "<i class='fa fa-angle-right'></i>"
            ],
            lazyEffect: "fade",
            autoHeight: true,
            afterAction: syncPosition,
            responsiveRefreshRate: 200,
        });
        sync2.owlCarousel({
            items: 3,
            itemsDesktop: [1199, 3],
            itemsDesktopSmall: [992, 2],
            itemsTablet: [768, 2],
            itemsMobile: [479, 2],
            pagination: false,
            responsiveRefreshRate: 100,
            afterInit: function (el) {
                el.find(".owl-item").eq(0).addClass("synced");
            }
        });
        function syncPosition(el) {
            var current = this.currentItem;
            $("#product-tabs")
                    .find(".owl-item")
                    .removeClass("synced")
                    .eq(current)
                    .addClass("synced")
            if ($("#product-tabs").data("owlCarousel") !== undefined) {
                center(current)
            }
        }
        $("#product-tabs").on("click", ".owl-item", function (e) {
            e.preventDefault();
            var number = $(this).data("owlItem");
            sync1.trigger("owl.goTo", number);
        });
        function center(number) {
            var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
            var num = number;
            var found = false;
            for (var i in sync2visible) {
                if (num === sync2visible[i]) {
                    var found = true;
                }
            }
            if (found === false) {
                if (num > sync2visible[sync2visible.length - 1]) {
                    sync2.trigger("owl.goTo", num - sync2visible.length + 2)
                } else {
                    if (num - 1 === -1) {
                        num = 0;
                    }
                    sync2.trigger("owl.goTo", num);
                }
            } else if (num === sync2visible[sync2visible.length - 1]) {
                sync2.trigger("owl.goTo", sync2visible[1])
            } else if (num === sync2visible[0]) {
                sync2.trigger("owl.goTo", num - 1)
            }
        }
    }(jQuery));
    /* -------------------------------------
     Google Map
     -------------------------------------- */
    $("#contacus-map").gmap3({
        marker: {address: "Haltern am See, Weseler Str. 151"},
        map: {options: {zoom: 16}}
    });
    /* -------------------------------------
     Product Image Change
     -------------------------------------- */
    $(".product-img .rotate").on('click', function () {
        $(".active .img-swap").toggle();
    });
    /* -------------------------------------
     Product Increase
     -------------------------------------- */
    $('em.minus').on('click', function () {
        $('#quantity1').val(parseInt($('#quantity1').val()) - 1, 10);
    });
    $('em.plus').on('click', function () {
        $('#quantity1').val(parseInt($('#quantity1').val()) + 1, 10);
    });

    $("#shirtdesign-accordion li").on('click',function () {

        $("#shirtdesign-accordion li label").addClass('jcf-label-active')
                .siblings().find('.jcf-label-active').removeClass('jcf-label-active');

    });
    if ($('#shirtdesign-accordion li').hasClass('active')) {
            $('#shirtdesign-accordion li label.jcf-label-active .jcf-radio').addClass('jcf-checked').removeClass('jcf-unchecked');
            $('.jcf-radio input').setAttribute("checked", "checked");
        } else {
            $('.jcf-radio').removeClass('jcf-checked').addClass('jcf-unchecked');
        }
});
