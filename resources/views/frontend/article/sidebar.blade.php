<!-- Sidebar ============================================= -->
 <style> a.btn.btn-xs.btn-primary {color: #fff; }  </style>
<aside>
<div class="sidebar nobottommargin col_last clearfix">
    <div class="sidebar-widgets-wrap">
@include('frontend/elements/search')
        <div class="widget widget_links clearfix">
            <h4>Blog Categories</h4>


                    <ul class="arrow">
                        @foreach($categories->slice(0, round($categories->count()/2)) as $category)
                        <li>
                            <a href="{!! URL::route('dashboard.category', array('category'=>$category->slug)) !!}">{!! $category->title !!}</a>
                        </li>
                        @endforeach
                    </ul>


                    <ul class="arrow">
                        @foreach($categories->slice(round($categories->count()/2), ($categories->count())) as $category)
                        <li>
                            <a href="{!! URL::route('dashboard.category', array('category'=>$category->slug)) !!}">{!! $category->title !!}</a>
                        </li>
                        @endforeach
                    </ul>

        </div>
        <!--/.categories-->
        <div class="widget clearfix">
            <h4>Tag Cloud</h4>
            <div class="tagcloud">
                @foreach($tags as $tag)

                    <a class="" href="{!! URL::route('dashboard.tag', array('tag'=>$tag->slug)) !!}">
                    {!! $tag->name !!}
                    </a>

                @endforeach
            </div>
        </div> <!--/.tags-->
    </div>
</div>
</aside>
