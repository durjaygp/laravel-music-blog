@extends('frontEnd.master')
@section('title')
    {{$blog->title}}
@endsection
@section('content')
    <section id="content_main" class="clearfix jl_spost">
        <div class="container">
            <div class="row main_content">
                <div class="col-md-8  loop-large-post" id="content">
                    <div class="widget_container content_page">
                        <!-- start post -->
                        <div class="post-103 post type-post status-publish format-audio has-post-thumbnail hentry category-health tag-inspiration tag-swim tag-water post_format-post-format-audio" id="post-103">
                            <div class="single_section_content box blog_large_post_style">
                                <div class="jl_single_style2">
                                    <div class="single_post_entry_content single_bellow_left_align jl_top_single_title jl_top_title_feature">
                                        <span class="meta-category-small single_meta_category"><a class="post-category-color-text" style="background:#7fbc1e" 
                                        href="{{route('category.wise.blog',$blog->category->slug)}}">
                                        {{$blog->category->name}}</a></span>
                                        <h1 class="single_post_title_main" alt="{{$blog->title}}">{{$blog->title}}</h1>
                                        <p class="post_subtitle_text">
                                            {{$blog->description}}
                                        </p>
                                        <span class="single-post-meta-wrapper">
                                            <span class="post-author"><span><img src="{{asset($blog->user->image)}}" width="50" height="50" alt="{{$blog->user->name}}" class="avatar avatar-50 wp-user-avatar wp-user-avatar-50 alignnone photo" />
                                                    <a href="{{route('author.wise.blog',$blog->user->id)}}" title="Posts by {{$blog->user->name}}" rel="author">{{$blog->user->name}}</a></span></span>
                                            <span class="post-date updated"><i class="fa fa-clock-o"></i>{{ $blog->created_at->format('M d, Y') }}</span>

                                        </span>
                                    </div>
                                    <div class="single_content_header jl_single_feature_below">
                                        <div class="image-post-thumb jlsingle-title-above">
                                            <img src="{{asset($blog->image)}}" alt="{{$blog->title}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="post_content">
                                    <p>{!!$blog->body !!}
                                    </p>
                                    </div>
                                <div class="clearfix"></div>
                                <div class="auth">
                                    <div class="author-info">
                                        <div class="author-avatar">
                                            <img src="{{asset($blog->user->image)}}" width="165" height="165" alt="{{$blog->user->name}}" class="avatar avatar-165 wp-user-avatar wp-user-avatar-165 alignnone photo" />                                    </div>
                                        <div class="author-description">
                                            <h5><a href="{{route('author.wise.blog',$blog->user->id)}}">{{$blog->user->name}}</a></h5>
                                            <p>
                                            {{$blog->user->description}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <!--<div class="related-posts">

                                    <h4>
                                        Related Articles                                </h4>

                                    <div class="single_related_post">


                                        <div class="jl_related_feature_items">
                                            <div class="jl_related_feature_items_in">
                                                <div class="image-post-thumb">
                                                    <a href="#" class="link_image featured-thumbnail" title="This is a great toy and beautiful for short">
                                                        <img width="780" height="450" src="{{asset('frontEnd')}}/images/irina-iriser-654436-unsplash-780x450.jpg" class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image" alt="" />                                                    <div class="background_over_image"></div>
                                                    </a>
                                                </div>
                                                <span class="meta-category-small"><a class="post-category-color-text" style="background:#7fbc1e" href="#">Health</a></span>
                                                <div class="post-entry-content">
                                                    <h3 class="jl-post-title"><a href="#">
                                                            This is a great toy and beautiful for short</a></h3>
                                                    <span class="jl_post_meta"><span class="jl_author_img_w"><img src="img/favicon.jpg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a href="#" title="Posts by Anna Nikova" rel="author">Anna Nikova</a></span><span class="post-date"><i class="fa fa-clock-o"></i>Dec 24, 2016</span></span>                                            </div>

                                            </div>
                                        </div>



                                        <div class="jl_related_feature_items">
                                            <div class="jl_related_feature_items_in">
                                                <div class="image-post-thumb">
                                                    <a href="#" class="link_image featured-thumbnail" title="Creative photography ideas from smart devices">
                                                        <img width="780" height="450" src="{{asset('frontEnd')}}/images/mikky-koopac-1056364-unsplash-780x450.jpg" class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image" alt="" />                                                    <div class="background_over_image"></div>
                                                    </a>
                                                </div>
                                                <span class="meta-category-small"><a class="post-category-color-text" style="background:#7fbc1e" href="#">Health</a></span>
                                                <div class="post-entry-content">
                                                    <h3 class="jl-post-title"><a href="#">
                                                            Creative photography ideas from smart devices</a></h3>
                                                    <span class="jl_post_meta"><span class="jl_author_img_w"><img src="img/favicon.jpg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a href="#" title="Posts by Anna Nikova" rel="author">Anna Nikova</a></span><span class="post-date"><i class="fa fa-clock-o"></i>Dec 23, 2016</span></span>                                            </div>

                                            </div>
                                        </div>


                                        <div class="clear_2col_related"></div>
                                        <div class="jl_related_feature_items">
                                            <div class="jl_related_feature_items_in">
                                                <div class="image-post-thumb">
                                                    <a href="#" class="link_image featured-thumbnail" title="Have good food taste then enjoy reading">
                                                        <img width="780" height="450" src="{{asset('frontEnd')}}/images/bruce-christianson-559084-unsplash-780x450.jpg" class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image" alt="" />                                                    <div class="background_over_image"></div>
                                                    </a>
                                                </div>
                                                <span class="meta-category-small"><a class="post-category-color-text" style="background:#7fbc1e" href="#">Health</a></span><span class="jl_post_type_icon"><i class="la la-camera"></i></span>
                                                <div class="post-entry-content">
                                                    <h3 class="jl-post-title"><a href="#">
                                                            Have good food taste then enjoy reading</a></h3>
                                                    <span class="jl_post_meta"><span class="jl_author_img_w"><img src="img/favicon.jpg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a href="#" title="Posts by Anna Nikova" rel="author">Anna Nikova</a></span><span class="post-date"><i class="fa fa-clock-o"></i>Dec 23, 2016</span></span>                                            </div>

                                            </div>
                                        </div>


                                        <div class="clear_3col_related"></div>
                                        <div class="jl_related_feature_items">
                                            <div class="jl_related_feature_items_in">
                                                <div class="image-post-thumb">
                                                    <a href="#" class="link_image featured-thumbnail" title="the best place to celebrate birthday and swim">
                                                        <img width="780" height="450" src="{{asset('frontEnd')}}/images/icons8-team-554108-unsplash-780x450.jpg" class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image" alt="" />                                                    <div class="background_over_image"></div>
                                                    </a>
                                                </div>
                                                <span class="meta-category-small"><a class="post-category-color-text" style="background:#7fbc1e" href="#">Health</a></span><span class="jl_post_type_icon"><i class="la la-camera"></i></span>
                                                <div class="post-entry-content">
                                                    <h3 class="jl-post-title"><a href="#">
                                                            the best place to celebrate birthday and swim</a></h3>
                                                    <span class="jl_post_meta"><span class="jl_author_img_w"><img src="img/favicon.jpg" width="30" height="30" alt="Anna Nikova" class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a href="#" title="Posts by Anna Nikova" rel="author">Anna Nikova</a></span><span class="post-date"><i class="fa fa-clock-o"></i>Dec 23, 2016</span></span>                                            </div>

                                            </div>
                                        </div>


                                        <div class="clear_2col_related"></div>                                                                    </div>

                                </div>
                                <!-- comment

                                <div id="respond" class="comment-respond">
                                    <h3 id="reply-title" class="comment-reply-title">Leave a Reply <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a></small></h3>
                                    <form action="#" method="post" id="commentform" class="comment-form">
                                        <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                        </p>
                                        <p class="comment-form-comment">
                                            <textarea class="u-full-width" id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="Comment"></textarea>
                                        </p>
                                        <div class="form-fields row"><span class="comment-form-author col-md-4"><input id="author" name="author" type="text" value="" size="30" placeholder="Fullname"></span>
                                            <span class="comment-form-email col-md-4"><input id="email" name="email" type="text" value="" size="30" placeholder="Email Address"></span>
                                            <span class="comment-form-url col-md-4"><input id="url" name="url" type="text" value="" size="30" placeholder="Web URL"></span>
                                        </div>
                                        <p class="form-submit">
                                            <input name="submit" type="submit" id="submit" class="submit" value="Post Comment">
                                        </p>
                                    </form>
                                </div> #respond -->

                            </div>
                        </div>
                        <!-- end post -->
                        <div class="brack_space"></div>
                    </div>
                </div>

                @include('frontEnd.include.rightSideBar')
            </div>
        </div>
    </section>
@endsection
