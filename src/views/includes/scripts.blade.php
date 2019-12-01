<script id="magnific-popup">
    $(document).ready(function() {
        $('.image-lightbox').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            showCloseBtn: false,
            fixedContentPos: true,
            mainClass: 'mfp-no-margins mfp-with-zoom',
            image: {
                verticalFit: true
            },
            zoom: {
                enabled: true,
                duration: 400,
                easing: 'ease-in-out'
            }
        });
    });
</script>

<script id="theme-js-variables">
    window.themeSettings = []
    window.themeSettings.hamburgerMenu = []
    window.themeSettings.hamburgerMenu.inAnimation = '{{ get_theme_setting('sidebar.hamburgerMenu.inAnimation') }}'
    window.themeSettings.hamburgerMenu.outAnimation = '{{ get_theme_setting('sidebar.hamburgerMenu.outAnimation') }}'
</script>