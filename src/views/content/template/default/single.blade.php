@push('content-custom-css')
    @if($css){{ $css }}@endif
@endpush

@php
    $contentType = $content->type->slug;
    $showTitle = $content->settings->get('showTitle', get_theme_setting('content.' . $contentType . '.settings.showTitle'));
    $showMetaData = $content->settings->get('showMetaData', get_theme_setting('content.' . $contentType . '.settings.showMetaData'));
    $showAuthorBio = $content->settings->get('showAuthorBio', get_theme_setting('content.' . $contentType . '.settings.showAuthorBio'));
    $showComments = $content->settings->get('showComments', get_theme_setting('content.' . $contentType . '.settings.showComments'));
@endphp

<div class="post">
    @if($content->featuredimage && !empty(get_theme_setting('content.general.featuredImage.singlePageHeight')))
        <div class="post-featured-image" style='background-image: url({{ $content->featuredimage->original }});'></div>
    @elseif($content->featuredimage && empty(get_theme_setting('content.general.featuredImage.singlePageHeight')))
        <img src="{{ $content->featuredimage->original }}" class="img-responsive" alt="">
    @endif
    <div class="post-content-wrapper">
        @if($showTitle)
            <{{ get_theme_setting('content.general.postTitle.size') }} class="post-title">{{ $content->title }}</{{ get_theme_setting('content.general.postTitle.size') }}>
        @endif

        @if($showMetaData)
            <div class="post-meta">
                <div class="post-meta-detail">
                    <div class="post-meta-date">Posted on {{ $content->created_at->format('Y-m-d') }}</div>&nbsp; by &nbsp;
                    <div class="post-meta-author">
                        @if(get_website_setting('website.members.userDisplayName') == 'fullname')
                            {{ $content->author->firstname }} {{ $content->author->lastname }}
                        @else
                            {{ $content->author->username }}
                        @endif
                    </div> 
                </div>
            </div>
        @endif

        <div class="post-content-blocks" style="margin-bottom: 25px;">
            @component('content.render.rootblocks', [
            'rootBlocksIds' => $rootBlocksIds,
            'allBlocks' => $allBlocks,
            ])@endcomponent
        </div>

        @if($showAuthorBio)
            <div class="post-author">
                <div class="post-author-image"><img class="img-responsive" src="{{ get_gravatar($content->author->email) }}" /></div>
                <div class="post-author-details">
                    @if(get_website_setting('website.members.userDisplayName') == 'fullname')
                        <div class="post-author-name">About {{ $content->author->firstname }} {{ $content->author->lastname }}</div>
                    @else
                        <div class="post-author-name">About {{ $content->author->username }}</div>
                    @endif
                    <div class="post-author-bio">{{ $content->author->bio }}</div>
                </div>
            </div>
        @endif

        @if($showComments)
            @switch(get_website_setting('website.comments.type'))
                @case('native')
                    <comments
                        :allow-nested={{ json_encode(get_website_setting('website.comments.allowNested')) }}
                        :max-depth="{{ get_website_setting('website.comments.nestedDepth') }}"
                        order="{{ get_website_setting('website.comments.order') }}"
                        :content-id={{ $content->id }}
                        :content-author-id={{ $content->author->id }}>
                    </comments>
                    @break
                @case('disqus')
                    @if(!empty(get_website_setting('website.comments.disqusChannel')))
                        <div id="disqus_thread"></div>
                        @push('scripts')
                            <script id="disqus_comments">
                                var disqus_config = function () {
                                    this.page.url = '{{ route("frontend.posts.show", $content->slug) }}';  // Replace PAGE_URL with your page's canonical URL variable
                                    this.page.identifier = '{{ $content->id }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };
                                (function() {  // REQUIRED CONFIGURATION VARIABLE: EDIT THE SHORTNAME BELOW
                                    var d = document, s = d.createElement('script');

                                    s.src = 'https://{{ get_website_setting('website.comments.disqusChannel') }}.disqus.com/embed.js';  // IMPORTANT: Replace EXAMPLE with your forum shortname!

                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <script id="dsq-count-scr" src="//{{ get_website_setting('website.comments.disqusChannel') }}.disqus.com/count.js" async></script>
                        @endpush
                    @endif
                    @break
                @default
                {{-- defaults to no comments! --}}
            @endswitch
        @endif
    </div>
</div>
