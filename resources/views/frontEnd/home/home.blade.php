@extends('frontEnd.master')
@section('title','Homepage')
@section('content')
    <div class="container">
        <div class="row jl_front_b_cont">
            <div class="col-md-12 jl_mid_main_3col">
                <div class="jl_3col_wrapin">
                    <div id="pl-3476" class="panel-layout">
                        <div id="pg-3476-0" class="panel-grid panel-no-style">
                             <div id="pgc-3476-0-0" class="panel-grid-cell">
                         <span class="jl_none_space"></span>
                         <div id="panel-3476-0-0-0"
                           class="so-panel widget widget_disto_recent_grid5_widgets jl_widget_recent_grid5 panel-first-child panel-last-child"
                           data-index="0">
                           <div class="jl_grid5_builder jelly_homepage_builder">
                             <div class="jl_grid5_wrapper">
                               <div class="jl_grid5_container">
                                {{-- big image --}}
                                   @foreach($features as $blog)
                                       @if($loop->iteration ==1)
                                 <div class="jl_grid5_item jl_grid5main jl_grid1">
                                   <div class="jl_grid5_itemin">
                                     <span class="image_grid_header_absolute" style="
                                           background-image: url('{{asset($blog->image)}}');
                                         "></span>
                                     <a href="{{route('blog',$blog->slug)}}" class="link_grid_header_absolute"
                                       title="{{$blog->title}}"></a>
                                     <span class="meta-category-small"><a class="post-category-color-text"
                                         style="background: #7fbc1e" href="#">{{$blog->category->name}}</a></span>
                                     <div class="wrap_box_style_main image-post-title">
                                       <h3 class="image-post-title">
                                         <a href="{{route('blog',$blog->slug)}}">{{$blog->title}}</a>
                                       </h3>
                                       <span class="jl_post_meta"><span class="jl_author_img_w"><img src="{{asset($blog->user->image)}}"
                                             width="30" height="30" alt="Anna Nikova"
                                             class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                             href="#" title="Posts by {{$blog->user->name}}" rel="author">{{$blog->user->name}}</a></span><span
                                           class="post-date"><i class="fa fa-clock-o"></i>{{ $blog->created_at->format('M d, Y') }}</span></span>
                                     </div>
                                   </div>
                                 </div>
                                       @else
                                           <div class="jl_grid5_item jl_grid5small jl_grid2">
                                               <div class="jl_grid5_itemin">
                                     <span class="image_grid_header_absolute" style="background-image: url('{{asset($blog->image)}}');"></span>
                                                   <a href="#" class="link_grid_header_absolute"
                                                      title="{{$blog->title}}"></a>
                                                   <span class="meta-category-small"><a class="post-category-color-text"
                                                                                        style="background: #7fbc1e" href="#">{{$blog->category->name}}</a></span>
                                                   <span class="jl_post_type_icon"><i class="la la-camera"></i></span>
                                                   <div class="wrap_box_style_main image-post-title">
                                                       <h3 class="image-post-title">
                                                           <a href="{{route('blog',$blog->slug)}}">
                                                               {{$blog->title}}
                                                           </a>
                                                       </h3>
                                                       <span class="jl_post_meta"><span class="jl_author_img_w"><img src="{{asset($blog->user->image)}}"
                                                                                                                     width="30" height="30" alt="{{$blog->user->name}}"
                                                                                                                     class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo" /><a
                                                                   href="#" title="Posts by {{$blog->user->name}}" rel="author">{{$blog->user->name}}</a></span><span
                                                               class="post-date"><i class="fa fa-clock-o"></i>{{ $blog->created_at->format('M d, Y') }}</span></span>
                                                   </div>
                                               </div>
                                           </div>
                                       @endif
                                   @endforeach
                                  {{-- big image --}}
                               </div>
                             </div>
                           </div>
                           <span class="jl_none_space"></span>
                         </div>
                       </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </a>
    <!-- Home grid section -->


    <div class="jl_post_loop_wrapper jl_grid_4col_home">
        <div class="container" id="wrapper_masonry">
            <div class="row">
                <div class="col-md-12 grid-sidebar">
                    <div class="jl_wrapper_cat">
                        <div id="content_masonry">
                            @foreach($blogs as $blog)
                            <div
                                class="box jl_grid_layout1 blog_grid_post_style post-4761 post type-post status-publish format-standard has-post-thumbnail hentry category-sports"
                                data-aos="fade-up">
                                <div class="post_grid_content_wrapper">
                                    <div class="image-post-thumb">
                                        <a
                                            href="{{route('blog',$blog->slug)}}"
                                            class="link_image featured-thumbnail"
                                            title="{{$blog->title}}"
                                        >
                                            <img
                                                width="780"
                                                height="450"
                                                src="{{asset($blog->image)}}"
                                                class="attachment-disto_large_feature_image size-disto_large_feature_image wp-post-image"
                                                alt=""
                                            />
                                            <div class="background_over_image"></div>
                                        </a>
                                        <span class="meta-category-small"
                                        ><a
                                                class="post-category-color-text"
                                                style="background: #36c942"
                                                href="#"
                                            >{{$blog->category->name}}</a
                                            ></span
                                        >
                                    </div>
                                    <div class="post-entry-content">
                                        <div class="post-entry-content-wrapper">
                                            <div class="large_post_content">
                                                <h3 class="image-post-title">
                                                    <a href="{{route('blog',$blog->slug)}}">{{$blog->title}}</a
                                                    >
                                                </h3>
                                                <span class="jl_post_meta"
                                                ><span class="jl_author_img_w"
                                                    ><img
                                                            src="{{asset($blog->user->image)}}"
                                                            width="30"
                                                            height="30"
                                                            alt="{{$blog->user->name}}"
                                                            class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo"
                                                        /><a
                                                            href="#"
                                                            title="Posts by {{$blog->user->name}}"
                                                            rel="author"
                                                        >{{$blog->user->name}}</a
                                                        ></span
                                                    ><span class="post-date"
                                                    ><i class="fa fa-clock-o"></i>{{ $blog->created_at->format('M d, Y') }}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <nav class="jellywp_pagination">
                        <ul class="page-numbers">
                            {{$blogs->links()}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
