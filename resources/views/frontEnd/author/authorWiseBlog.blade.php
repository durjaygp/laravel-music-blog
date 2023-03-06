@extends('frontEnd.master')
@section('title','Author')
@section('content')
<div class="main_title_wrapper category_title_section jl_cat_img_bg">
          <div
            class="category_image_bg_image"
            style="
              background-image: url('{{asset('frontEnd')}}/images/soroush-karimi-253940-unsplash-1920x982.jpg');
            "
          ></div>
          <div class="category_image_bg_ov"></div>
          <div class="jl_cat_title_wrapper">
            <div class="container">
              <div class="row">
                <div class="col-md-12 main_title_col">
                  <div class="jl_cat_mid_title">
                  <h3 class="categories-title title">{{$author->name}}</h3>
                    <p>{{$author->description}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="jl_post_loop_wrapper">
          <div class="container" id="wrapper_masonry">
            <div class="row">
              <div class="col-md-8 grid-sidebar" id="content">
                <div class="jl_wrapper_cat">
                  <div
                    id="content_masonry"
                    class="pagination_infinite_style_cat"
                  >
				  @foreach($blogs as $blog)
                    <div
                      class="box jl_grid_layout1 blog_grid_post_style post-2970 post type-post status-publish format-gallery has-post-thumbnail hentry category-business tag-inspiration tag-morning tag-racing post_format-post-format-gallery"
                      data-aos="fade-up"
                    >
                      <div class="post_grid_content_wrapper">
                        <div class="image-post-thumb">
                          <a
                            href="{{route('blog',$blog->slug)}}"
                            class="link_image featured-thumbnail"
                            title="{{($blog->title)}}"
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
                              style="background: #0015ff"
                              href="{{route('category.wise.blog',$blog->category->slug)}}"
                              >{{$blog->category->name}}</a
                            ></span
                          >
                          <span class="jl_post_type_icon"
                            ><i class="la la-camera"></i
                          ></span>
                        </div>
                        <div class="post-entry-content">
                          <div class="post-entry-content-wrapper">
                            <div class="large_post_content">
                              <h3 class="image-post-title">
                                <a href="{{route('blog',$blog->slug)}}">
                                {{$blog->title}}</a
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
                                    href="{{route('author.wise.blog',$blog->user->id)}}"
                                    title="Posts by {{$blog->user->name}}"
                                    rel="author"
                                    >{{$blog->user->name}}</a
                                  ></span
                                ><span class="post-date"
                                  ><i class="fa fa-clock-o"></i>{{ $blog->created_at->format('M d, Y') }}</span
                                ></span
                              >
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
					@endforeach
                  </div>
                  <nav class="jellywp_pagination">
                        <ul class="page-numbers">
                            {{$blogs->links()}}
                        </ul>
                    </nav>
                </div>
              </div>
              @include('frontEnd.include.rightSideBar')
            </div>
          </div>
        </div>
        <!-- end content -->
@endsection
