{{-- Global Styles Start --}}
body {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'global.body.backgroundColor') ])
    @style([ 'property' => 'background-image', 'value' => data_get($settings, 'global.body.backgroundImage') ])
    @if(data_get($settings, 'global.body.backgroundImage'))
        @style([ 'property' => 'background-size', 'value' => data_get($settings, 'global.body.backgroundSize') ])
        @style([ 'property' => 'background-attachment', 'value' => data_get($settings, 'global.body.backgroundStyle') ])
        @style([ 'property' => 'background-position', 'value' => data_get($settings, 'global.body.backgroundPosition') ])
        @style([ 'property' => 'background-repeat', 'value' => data_get($settings, 'global.body.backgroundRepeat') ])
    @endif
    @style([ 'property' => 'font-family', 'value' => data_get($settings, 'global.font.family') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'global.font.color') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'global.font.size') ])
    @style([ 'property' => 'line-height', 'value' => data_get($settings, 'global.font.lineHeight') ])
}
{{-- Global Styles End --}}

{{-- Container Start --}}
.container {
    @style([ 'property' => 'width', 'value' => data_get($settings, 'global.container.width') ])
    @style([ 'property' => 'max-width', 'value' => data_get($settings, 'global.container.maxWidth') ])
}

@media (max-width: 1200px) {
    .container {
        width: 100%;
    }
}
{{-- Container End --}}


{{-- Content Container Styles Start --}}
.container .content {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'content.general.backgroundColor') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.color') ])
}
{{-- Content Container Styles End --}}


{{-- Content Styles Start --}}
.content-index .posts .post .post-title-link, 
.content-single .post .post-title {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.color') ])
    @style([ 'property' => 'font-family', 'value' => data_get($settings, 'content.general.postTitle.fontFamily') ])
}

.content-index .posts .post .post-title-link:hover, 
.content-single .post .post-title:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'content.general.postTitle.hoverColor') ])
}
{{-- Content Styles End --}}


{{-- Featured Image Styles Start --}}
.content-index .posts .post .post-featured-image {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.indexPageHeight') ])
}

.content-single .post .post-featured-image {
    @style([ 'property' => 'height', 'value' => data_get($settings, 'content.general.featuredImage.singlePageHeight') ])
}
{{-- Featured Image Styles End --}}

{{-- Sidebar Styles --}}
.container .sidebar {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'sidebar.general.backgroundColor') ])
}
{{-- Sidebar Styles End --}}

{{-- Sidebar Widget Styles Start --}}
.sidebar .widget {
    @style([ 'property' => 'margin-bottom', 'value' => data_get($settings, 'widgets.general.spacing') ])
}

.sidebar .widget .widget-header {
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'widgets.header.padding') ])
    @style([ 'property' => 'margin-bottom', 'value' => data_get($settings, 'widgets.header.marginBottom') ])
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'widgets.header.backgroundColor') ])
}

.sidebar .widget .widget-title {
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'widgets.header.fontStyle') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'widgets.header.fontColor') ])
}

.sidebar .widget .widget-body {
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'widgets.body.padding') ])
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'widgets.body.backgroundColor') ])
} 
{{-- Sidebar Widget Styles End --}}


{{-- Logo Styles Start --}}
.sidebar header .logo .logo-link {
    @style([ 'property' => 'font-family', 'value' => data_get($settings, 'sidebar.logo.fontFamily') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'sidebar.logo.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'sidebar.logo.fontColor') ])
}
{{-- Logo Styles End --}}


{{-- Navigation Styles Start --}}
#navigation .menu .menu-item a {
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'sidebar.menu.items.padding') ])
    @style([ 'property' => 'font-family', 'value' => data_get($settings, 'sidebar.logo.fontFamily') ])
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'sidebar.menu.items.fontSize') ])
    @style([ 'property' => 'color', 'value' => data_get($settings, 'sidebar.menu.items.fontColor') ])
}

#navigation .menu .menu-item a:hover {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'sidebar.menu.items.fontHoverColor') ])
}

#navigation .menu .drop-menu-item > a {
    @style([ 'property' => 'text-transform', 'value' => data_get($settings, 'sidebar.menu.dropDownItems.textTransform') ])
    @style([ 'property' => 'padding', 'value' => data_get($settings, 'sidebar.menu.dropDownItems.padding') ])
}
{{-- Navigation Styles End --}}


{{-- Hamburger Button Styles Start --}}
.hamburger-inner, .hamburger-inner::before, 
.hamburger-inner::after {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'sidebar.hamburgerButton.color') ])
}

.hamburger.is-active .hamburger-inner,
.hamburger.is-active .hamburger-inner::before,
.hamburger.is-active .hamburger-inner::after {
    @style([ 'property' => 'background-color', 'value' => data_get($settings, 'sidebar.hamburgerButton.activeColor') ])
}
{{-- Hamburger Button Styles End --}}


{{-- Sidebar Footer Styles Start --}}
.sidebar footer {
    @style([ 'property' => 'color', 'value' => data_get($settings, 'footer.general.fontColor') ])
}
{{-- Sidebar Footer Styles End --}}


{{-- Headline styles Start --}}
h1, .h1 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline1') ])
}

h2, .h2 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline2') ])
}

h3, .h3 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline3') ])
}

h4, .h4 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline4') ])
}

h5, .h5 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline5') ])
}

h6, .h6 {
    @style([ 'property' => 'font-size', 'value' => data_get($settings, 'headlines.size.headline6') ])
}

h1, .h1, h2, .h2, h3, .h3, h4, .h4 {
    @style([ 'property' => 'line-height', 'value' => data_get($settings, 'headlines.general.lineHeight') ])
}
{{-- Headline styles End--}}