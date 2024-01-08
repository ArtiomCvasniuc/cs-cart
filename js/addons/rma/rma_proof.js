(function (_, $) {
    $(document).ready(function() {
        if(screen.width >= 1024) {
            let ez = $(".proof_main").easyZoom({
                preventClicks: true,
            });
            let api = ez.data('easyZoom');

            let initial = $($(".proof_thumb_list a").get(0));
            api.swap(initial.data('standard'), initial.data('href'));
            $(".proof_main a").attr('href', initial.data('standard'));

            $(".proof_thumb_list").on('click', 'a', function(evt) {
                let $this = $(this);

                evt.preventDefault();

                console.log($this);
                api.swap($this.data('standard'), $this.data('href'));
                $(".proof_main a").attr('href', $this.data('standard'));
            });
        }
    });
})(Tygh, Tygh.$);