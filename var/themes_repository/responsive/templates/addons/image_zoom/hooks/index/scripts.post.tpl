{script src="js/addons/image_zoom/lib/easyzoom.min.js"}
{script src="js/addons/image_zoom/index.js"}

<script type="application/javascript">
    (function (_, $) {
        $.ceEvent('on', 'ce.responsive_classes.ready', function () {
            var positionId = {$addons.image_zoom.cz_zoom_position};
            if ('{$language_direction}' === 'rtl') {
                positionId = $.ceImageZoom('translateFlyoutPositionToRtl', positionId);
            }

            var $body = $('body', _.doc);

            $('.cm-previewer').each(function (i, elm) {
                var isMobile = $body.hasClass('screen--xs') ||
                    $body.hasClass('screen--xs-large') ||
                    $body.hasClass('screen--sm') ||
                    $body.hasClass('screen--sm-large');

                if (isMobile && Modernizr.touchevents) {
                    return false;
                }

                $.ceImageZoom('init', $(elm), positionId);
            });
        });
    })(Tygh, Tygh.$);
</script>
