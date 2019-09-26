<div class="h-auto flex-col flex w-full bg-sidebar">
        <!-- Mountains image -->
        <div class="mx-auto pt-16 pb-6">
            @if(get_theme_setting('header.logo.logotype') == 'text')
        <a class="logo-link" href="{{ url('/') }}">
            {{ get_website_setting('website.title') }}
        </a>
    @else
        <a class="logo-link" href="{{ url('/') }}">
            <img src="{{ get_theme_setting('header.logo.logoImage') }}" class="img-responsive" alt="logo">
        </a>
    @endif
        </div>
        <!-- Slogan -->
        <h6 class="text-center mx-auto font-sans text-xl font-semibold pb-8 w-62 text-slogan">
            Aurora is a minimal and clean Laraone blog theme.
        </h6>
        <!-- Social Media icons -->
        <div class="text-center flex justify-center items-center pb-16 mdxl:border-b w-8/12 mx-auto w-8/12 border-sidebar-1">
            <div class="pr-4">
                <a href="#">
                    <i class="fab fa-facebook-f text-2xl hover:text-gray-400 text-white"></i>
                </a>
            </div>
            <div class="pr-4">
                <a href="#">
                    <i class="fab fa-twitter fa-lg text-2xl hover:text-gray-400 text-white"></i>
                </a>
            </div>
            <div class="pr-4">
                <a href="#">
                    <i class="fab fa-instagram text-2xl hover:text-gray-400 text-white"></i>
                </a>
            </div>
            <div class="pr-4">
                <a href="#">
                    <i class="fab fa-linkedin-in text-2xl hover:text-gray-400 text-white"></i>
                </a>
            </div>
            <div>
                <a href="#">
                    <i class="fab fa-google-plus-g fa-lg text-2xl hover:text-gray-400 text-white"></i>
                </a>
            </div>
        </div>
        <!-- Responsive wrapper -->
        <div class="hidden" id="responsive-menu">
            <!-- Horizontal border line -->
            <div class="border-t text-center mx-auto w-8/12 border-sidebar-2">
            </div>
            <!-- Menu -->
            @php
                $menu = get_menu('header');
            @endphp
            <section class="flex flex-col mx-auto py-20 w-8/12">
                <div class="menu">
                @if($menu)
                @foreach ($menu as $key => $item)
                    <div class="menu-item @if($item->subItems->count()) dropdown @endif @if(!$item->subItems->count()) pb-2 @endif">
                        @if($item->parent_id == null)
                            <a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/{{ $item->url }}">{{ $item->title }}</a>
                        @endif

                        @if($item->subItems->count())
                            <div class="dropdown-content animated zoomIn faster">
                            @foreach ($item->subItems as $key => $subItem)
                                <div class="drop-menu-item pb-2"><a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/{{ $subItem->url }}">{{ $subItem->title }}</a></div>
                            @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach
            @else

                <div class="menu-item pb-2">
                        <a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/">Start</a>
                    </div>

                    <div class="menu-item pb-2">
                        <a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/posts">Blog</a>
                    </div>

                    <div class="menu-item dropdown">
                            <a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/posts">Media</a>
                        <div class="dropdown-content">
                            <div class="drop-menu-item"><a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/posts">Videos</a></div>
                            <div class="drop-menu-item"><a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/posts">Images</a></div>
                        </div>
                    </div>

                    <div class="menu-item">
                        <a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/posts">About</a>
                    </div>
            @endif
        </div>
        </div>
        </section>
    </div>

<div class="responsive-menu-sidebar">

    <!-- Horizontal border line -->
    <div class="border-t text-center mx-auto w-8/12 border-sidebar-2">
    </div>
    <!-- Menu -->
    @php
            $menu = get_menu('header');
            @endphp
        <section class="flex flex-col mx-auto py-20 w-8/12">
            <div class="menu">
            @if($menu)
            @foreach ($menu as $key => $item)
                <div class="menu-item @if($item->subItems->count()) dropdown @endif @if(!$item->subItems->count()) pb-2 @endif">
                    @if($item->parent_id == null)
                        <a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/{{ $item->url }}">{{ $item->title }}</a>
                    @endif

                    @if($item->subItems->count())
                        <div class="dropdown-content animated zoomIn faster">
                        @foreach ($item->subItems as $key => $subItem)
                            <div class="drop-menu-item pb-2"><a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/{{ $subItem->url }}">{{ $subItem->title }}</a></div>
                        @endforeach
                        </div>
                    @endif
                </div>
            @endforeach
        @else

            <div class="menu-item pb-2">
                    <a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/">Start</a>
                </div>

                <div class="menu-item pb-2">
                    <a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/posts">Blog</a>
                </div>

                <div class="menu-item dropdown">
                        <a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/posts">Media</a>
                    <div class="dropdown-content">
                        <div class="drop-menu-item"><a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/posts">Videos</a></div>
                        <div class="drop-menu-item"><a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/posts">Images</a></div>
                    </div>
                </div>

                <div class="menu-item">
                    <a class="text-xl text-white tracking-widest hover:text-gray-400 hover:no-underline" href="/posts">About</a>
                </div>
        @endif
    </div>
    </section>
</div>
