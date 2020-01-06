<div class="posts">
    @foreach ( $posts as $post )
        <div class="post">
            <!-- Content image -->
            @if($post->featuredimage && !empty(get_theme_setting('content.general.featuredImage.indexPageHeight')))
                <a class="post-image-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">
                    <div class="post-featured-image" style='background-image: url({{ $post->featuredimage->original }});'></div>
                </a>
            @elseif($post->featuredimage && empty(get_theme_setting('content.general.featuredImage.indexPageHeight')))
                <a class="post-image-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">
                    <img src="{{ $post->featuredimage->original }}" class="img-responsive" alt="">
                </a>
            @endif
            <!-- Post section -->
            <section class="post-content-wrapper">
                <div class="post-taxonomy">
                    @taxonomy([
                        'taxonomy' => 'Tags',
                        'post' => $post,
                        'commaSeparate' => false
                    ]) @endtaxonomy
                </div>
                <{{ get_theme_setting('content.general.postTitle.size') }} class="post-title"><a class="post-title-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">{{ $post->title }}</a></{{ get_theme_setting('content.general.postTitle.size') }}>
                <div class="post-meta">
                    <div class="post-meta-detail">
                        <div class="post-meta-date">Posted on {{ $post->created_at->format('Y-m-d') }}</div>
                        <div class="post-meta-by">&nbsp; by &nbsp;</div>
                        <div class="post-meta-author">
                            @if(get_website_setting('website.members.userDisplayName') == 'fullname')
                                {{ $post->author->firstname }} {{ $post->author->lastname }}
                            @else
                                {{ $post->author->username }}
                            @endif
                        </div> 
                    </div>
                </div>
                @if(has_excerpt($post))
                    <div class="post-excerpt">
                        {!! get_excerpt($post, get_theme_setting('content.general.excerptLength')) !!}
                    </div>
                @elseif(has_text_block($post))
                    <div class="post-excerpt text-block">
                        {!! get_text_block($post) !!}
                    </div>
                @endif
                <div class="post-footer">
                    <a class="btn btn-primary" href="/{{ $post->type->slug }}/{{ $post->slug }}">Read More</a>
                </div>
            </section>
        </div>
    @endforeach
</div>
{{ $posts->links() }}
