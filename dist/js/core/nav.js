(function(UI) {

    "use strict";

    UI.component('nav', {

        defaults: {
            "toggle": ">li.yb-parent > a[href='#']",
            "lists": ">li.yb-parent > ul",
            "multiple": false
        },

        boot: function() {

            // init code
            UI.ready(function(context) {

                UI.$("[data-yb-nav]", context).each(function() {
                    var nav = UI.$(this);

                    if (!nav.data("nav")) {
                        var obj = UI.nav(nav, UI.Utils.options(nav.attr("data-yb-nav")));
                    }
                });
            });
        },

        init: function() {

            var $this = this;

            this.on("click.uk.nav", this.options.toggle, function(e) {
                e.preventDefault();
                var ele = UI.$(this);
                $this.open(ele.parent()[0] == $this.element[0] ? ele : ele.parent("li"));
            });

            this.find(this.options.lists).each(function() {
                var $ele   = UI.$(this),
                    parent = $ele.parent(),
                    active = parent.hasClass("yb-active");

                $ele.wrap('<div style="overflow:hidden;height:0;position:relative;"></div>');
                parent.data("list-container", $ele.parent()[active ? 'removeClass':'addClass']('yb-hidden'));

                // Init ARIA
                parent.attr('aria-expanded', parent.hasClass("yb-open"));

                if (active) $this.open(parent, true);
            });

        },

        open: function(li, noanimation) {

            var $this = this, element = this.element, $li = UI.$(li), $container = $li.data('list-container');

            if (!this.options.multiple) {

                element.children('.yb-open').not(li).each(function() {

                    var ele = UI.$(this);

                    if (ele.data('list-container')) {
                        ele.data('list-container').stop().animate({height: 0}, function() {
                            UI.$(this).parent().removeClass('yb-open').end().addClass('yb-hidden');
                        });
                    }
                });
            }

            $li.toggleClass('yb-open');

            // Update ARIA
            $li.attr('aria-expanded', $li.hasClass('yb-open'));

            if ($container) {

                if ($li.hasClass('yb-open')) {
                    $container.removeClass('yb-hidden');
                }

                if (noanimation) {

                    $container.stop().height($li.hasClass('yb-open') ? 'auto' : 0);

                    if (!$li.hasClass('yb-open')) {
                        $container.addClass('yb-hidden');
                    }

                    this.trigger('display.uk.check');

                } else {

                    $container.stop().animate({
                        height: ($li.hasClass('yb-open') ? getHeight($container.find('ul:first')) : 0)
                    }, function() {

                        if (!$li.hasClass('yb-open')) {
                            $container.addClass('yb-hidden');
                        } else {
                            $container.css('height', '');
                        }

                        $this.trigger('display.uk.check');
                    });
                }
            }
        }
    });


    // helper

    function getHeight(ele) {
        var $ele = UI.$(ele), height = "auto";

        if ($ele.is(":visible")) {
            height = $ele.outerHeight();
        } else {
            var tmp = {
                position: $ele.css("position"),
                visibility: $ele.css("visibility"),
                display: $ele.css("display")
            };

            height = $ele.css({position: 'absolute', visibility: 'hidden', display: 'block'}).outerHeight();

            $ele.css(tmp); // reset element
        }

        return height;
    }

})(UIkit);
