<div class="col-lg-4 col-md-12 col-sm-12">
    <div class="sidebar">
        <div id="search-2" class="widget side-widget widget_search">
            <div class="side-widget-header border-0">
                <h4>Recherche ici...</h4>
            </div>
            <div class="side-widget-body p-t-10">
                <form action="" method="get">
                    <div class="input-group">
                        <input type="search" class="form-control" name="q" value="" placeholder="Tapez votre recherche...">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-primary">Go</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
        <div id="categories-3" class="widget side-widget widget_categories">
            <div class="side-widget-header border-0">
                <h4>Categories</h4>
            </div>
            <ul>
                @foreach($categories as $category)
                <li class="cat-item cat-item-32">
                    <a href="{{ route('news.category', $category->slug) }}">{{ $category->name }}</a>
                </li>
                @endforeach
            </ul>

        </div>
        <!-- <div id="unico_latest_blogs-2" class="widget side-widget widget_unico_latest_blogs">

            <div class="side-widget-header border-0">
                <h4>Nos dernier Blogs</h4>
            </div>
            <div class="side-widget-body">
                <div class="side-list">
                    <ul class="side-blog-list">

                        <li class="blog-post">
                            <a href="#">
                                <div class="blog-list-img" style="background-image:url({{ asset('images/banner.jpg')}});"></div>
                            </a>
                            <div class="blog-list-info">
                                <h5><a href="#" title="blog">Everything About Quality ...</a></h5>
                                <div class="blog-post-meta">
                                    <span class="updated">January 5, 2024</span>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div> -->

        <div id="tag_cloud-2" class="widget side-widget widget_tag_cloud">
            <div class="side-widget-header border-0">
                <h4>Nos dernier tweets</h4>
            </div>
            <div class="tagcloud">
                <a class="twitter-timeline" data-height="400" href="https://twitter.com/honorekab">Tweets by congo peace network</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <div id="archives-3" class="widget side-widget widget_archive">
            <div class="side-widget-header border-0">
                <h4>Facebook</h4>
            </div>
            <div class="fb-page" data-href="https://www.facebook.com/CongoPeaceNetwork" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/CongoPeaceNetwork" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/CongoPeaceNetwork">CongoPeaceNetwork</a></blockquote></div>

        </div>
    </div>
</div>
