(function(UI) {

    "use strict";

    var scrollpos = {x: window.scrollX, y: window.scrollY},
        $win      = UI.$win,
        $doc      = UI.$doc,
        $html     = UI.$html,
        Offcanvas = {

        show: function(element) {

            element = UI.$(element);

            if (!element.length) return;

            var $body     = UI.$('body'),
                bar       = element.find(".yb-offcanvas-bar:first"),
                rtl       = (UI.langdirection == "right"),
                flip      = bar.hasClass("yb-offcanvas-bar-flip") ? -1:1,
                dir       = flip * (rtl ? -1 : 1),

                scrollbarwidth =  window.innerWidth - $body.width();

            scrollpos = {x: window.pageXOffset, y: window.pageYOffset};

            element.addClass("yb-active");

            $body.css({"width": window.innerWidth - scrollbarwidth, "height": window.innerHeight}).addClass("yb-offcanvas-page");
            $body.css((rtl ? "margin-right" : "margin-left"), (rtl ? -1 : 1) * (bar.outerWidth() * dir)).width(); // .width() - force redraw

            $html.css('margin-top', scrollpos.y * -1);

            bar.addClass("yb-offcanvas-bar-show");

            this._initElement(element);

            bar.trigger('show.uk.offcanvas', [element, bar]);

            // Update ARIA
            element.attr('aria-hidden', 'false');
        },

        hide: function(force) {

            var $body = UI.$('body'),
                panel = UI.$(".yb-offcanvas.yb-active"),
                rtl   = (UI.langdirection == "right"),
                bar   = panel.find(".yb-offcanvas-bar:first"),
                finalize = function() {
                    $body.removeClass("yb-offcanvas-page").css({"width": "", "height": "", "margin-left": "", "margin-right": ""});
                    panel.removeClass("yb-active");

                    bar.removeClass("yb-offcanvas-bar-show");
                    $html.css('margin-top', '');
                    window.scrollTo(scrollpos.x, scrollpos.y);
                    bar.trigger('hide.uk.offcanvas', [panel, bar]);

                    // Update ARIA
                    panel.attr('aria-hidden', 'true');
                };

            if (!panel.length) return;

            if (UI.support.transition && !force) {

                $body.one(UI.support.transition.end, function() {
                    finalize();
                }).css((rtl ? "margin-right" : "margin-left"), "");

                setTimeout(function(){
                    bar.removeClass("yb-offcanvas-bar-show");
                }, 0);

            } else {
                finalize();
            }
        },

        _initElement: function(element) {

            if (element.data("OffcanvasInit")) return;

            element.on("click.uk.offcanvas swipeRight.uk.offcanvas swipeLeft.uk.offcanvas", function(e) {

                var target = UI.$(e.target);

                if (!e.type.match(/swipe/)) {

                    if (!target.hasClass("yb-offcanvas-close")) {
                        if (target.hasClass("yb-offcanvas-bar")) return;
                        if (target.parents(".yb-offcanvas-bar:first").length) return;
                    }
                }

                e.stopImmediatePropagation();
                Offcanvas.hide();
            });

            element.on("click", "a[href*='#']", function(e){

                var link = UI.$(this),
                    href = link.attr("href");

                if (href == "#") {
                    return;
                }

                UI.$doc.one('hide.uk.offcanvas', function() {

                    var target;

                    try {
                        target = UI.$(link[0].hash);
                    } catch (e){
                        target = '';
                    }

                    if (!target.length) {
                        target = UI.$('[name="'+link[0].hash.replace('#','')+'"]');
                    }

                    if (target.length && UI.Utils.scrollToElement) {
                        UI.Utils.scrollToElement(target, UI.Utils.options(link.attr('data-yb-smooth-scroll') || '{}'));
                    } else {
                        window.location.href = href;
                    }
                });

                Offcanvas.hide();
            });

            element.data("OffcanvasInit", true);
        }
    };

    UI.component('offcanvasTrigger', {

        boot: function() {

            // init code
            $html.on("click.offcanvas.uikit", "[data-yb-offcanvas]", function(e) {

                e.preventDefault();

                var ele = UI.$(this);

                if (!ele.data("offcanvasTrigger")) {
                    var obj = UI.offcanvasTrigger(ele, UI.Utils.options(ele.attr("data-yb-offcanvas")));
                    ele.trigger("click");
                }
            });

            $html.on('keydown.uk.offcanvas', function(e) {

                if (e.keyCode === 27) { // ESC
                    Offcanvas.hide();
                }
            });
        },

        init: function() {

            var $this = this;

            this.options = UI.$.extend({
                "target": $this.element.is("a") ? $this.element.attr("href") : false
            }, this.options);

            this.on("click", function(e) {
                e.preventDefault();
                Offcanvas.show($this.options.target);
            });
        }
    });

    UI.offcanvas = Offcanvas;

})(UIkit);
