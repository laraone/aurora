<script id="custom-javascript">
    $(document).ready(function() {
        $('.image-lightbox').magnificPopup({type:'image'});
    });

    var $hamburgerBtn = $("#hamburger-button");
    $hamburgerBtn.on("click", function(e) {
        $hamburgerBtn.toggleClass("is-active");
        var $hnavigation = $("#navigation");
        if($hamburgerBtn.hasClass('is-active')) {
            $hnavigation.attr("class", "menu-active");
            $hnavigation.addClass("animated {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} fast");
        } else {
            $hnavigation.removeClass("animated menu-active {{ get_theme_setting('sidebar.hamburger.general.inAnimation') }} fast");
            window.setTimeout(function() {
                $('#hamburger-button').addClass("animated {{ get_theme_setting('sidebar.hamburger.general.outAnimation') }} fast");
            }, 200);
            window.setTimeout(function() {
                $hnavigation.removeClass("menu-active {{ get_theme_setting('sidebar.hamburger.general.outAnimation') }}");
                $hnavigation.addClass("menu-inactive");
            }, 900);
        }
    });

    var $dropdownBtnOpen = $('.dropdown-button-open');
    $dropdownBtnOpen.on("click", function(event) {
        var $dropdownContent = $(event.target).closest('.menu-item').find('.dropdown-content');
        var $dropdownBtnClose = $(event.target).closest('.menu-item').find('.dropdown-button-close');
        $dropdownContent.show();
        $(event.target).hide();
        $dropdownBtnClose.show();
    });

    var $dropdownBtnClose = $('.dropdown-button-close');
    $dropdownBtnClose.on("click", function(event) {
        var $dropdownContent = $(event.target).closest('.menu-item').find('.dropdown-content');
        var $dropdownBtnOpen = $(event.target).closest('.menu-item').find('.dropdown-button-open');
        $dropdownContent.hide();
        $(event.target).hide();
        $dropdownBtnOpen.show();
    });

</script>
