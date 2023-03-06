<div class="col-md-4" id="sidebar">
                    <div id="disto_recent_post_widget-7" class="widget post_list_widget">
                        <div class="widget_jl_wrapper"><span class="jl_none_space"></span>
                            <div class="widget-title">
                                <h2>Recent Posts</h2>
                            </div>
                            <div>
                                <ul class="feature-post-list recent-post-widget">
                                    @foreach($rightSideBar_recentblog as $blog)
                                    <li>
                                        <a href="{{route('blog',$blog->slug)}}" class="jl_small_format feature-image-link image_post featured-thumbnail" title="{{$blog->title}}">
                                            <img width="120" height="120" src="{{asset($blog->image)}}" class="attachment-disto_small_feature size-disto_small_feature wp-post-image" alt="{{$blog->title}}" />
                                            <div class="background_over_image"></div>
                                        </a>
                                        <div class="item-details">
                                            <span class="meta-category-small"><a class="post-category-color-text" style="background:#d800f9" href="{{route('category.wise.blog',$blog->category->slug)}}">{{$blog->category->name}}</a></span>
                                            <h3 class="feature-post-title"><a href="{{route('blog',$blog->slug)}}">{{$blog->title}}</a></h3>
                                            <span class="post-meta meta-main-img auto_image_with_date">
                                                <span class="post-date"><i class="fa fa-clock-o"></i>{{ $blog->created_at->format('M d, Y') }}</span></span>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <span class="jl_none_space"></span>
                        </div>
                    </div>
                    <span class="jl_none_space"></span>
                    <div id="disto_category_image_widget_register-5" class="widget jellywp_cat_image">
                        <div class="wrapper_category_image">
                            <div class="category_image_wrapper_main">
                                @foreach($rightSideBar_categories as $category)
                                <div class="category_image_bg_image" style="">
                                    <a class="category_image_link" id="category_color_4" href="{{route('category.wise.blog',$category->slug)}}">
                                        <span class="jl_cm_overlay"><span class="jl_cm_name">{{$category->name}}</span><span class="jl_cm_count">{{$category->blogs_count}}</span></span></a>
                                    <div class="category_image_bg_overlay" style="background: #d1783c;"></div>
                                </div>
                                @endforeach
                            </div> <span class="jl_none_space"></span>
                        </div>
                    </div><span class="jl_none_space"></span>

                    <span class="jl_none_space"></span>
                </div>

<div class="col-md-4" style="display:none;" id="sidebar">
                <div
                  id="socialcountplus-2"
                  class="widget widget_socialcountplus"
                >
                  <div class="social-count-plus">
                    <ul class="default">
                      <li class="count-facebook">
                        <a
                          class="icon"
                          href="https://www.facebook.com/"
                          rel="nofollow noopener noreferrer"
                          target="_blank"
                        ></a
                        ><span class="items"
                          ><span class="count">20.5k</span
                          ><span class="label">likes</span></span
                        >
                      </li>
                      <li class="count-instagram">
                        <a
                          class="icon"
                          href="https://instagram.com/"
                          rel="nofollow noopener noreferrer"
                          target="_blank"
                        ></a
                        ><span class="items"
                          ><span class="count">20.5k</span
                          ><span class="label">followers</span></span
                        >
                      </li>
                      <li class="count-pinterest">
                        <a
                          class="icon"
                          href="https://www.pinterest.com/"
                          rel="nofollow noopener noreferrer"
                          target="_blank"
                        ></a
                        ><span class="items"
                          ><span class="count">20.5k</span
                          ><span class="label">followers</span></span
                        >
                      </li>
                      <li class="count-twitch">
                        <a
                          class="icon"
                          href="http://www.twitch.tv//profile"
                          rel="nofollow noopener noreferrer"
                          target="_blank"
                        ></a
                        ><span class="items"
                          ><span class="count">20.5k</span
                          ><span class="label">followers</span></span
                        >
                      </li>
                      <li class="count-twitter">
                        <a
                          class="icon"
                          href="https://twitter.com/"
                          rel="nofollow noopener noreferrer"
                          target="_blank"
                        ></a
                        ><span class="items"
                          ><span class="count">20.5k</span
                          ><span class="label">followers</span></span
                        >
                      </li>
                      <li class="count-vimeo">
                        <a
                          class="icon"
                          href="https://vimeo.com/"
                          rel="nofollow noopener noreferrer"
                          target="_blank"
                        ></a
                        ><span class="items"
                          ><span class="count">20.5k</span
                          ><span class="label">followers</span></span
                        >
                      </li>
                      <li class="count-youtube">
                        <a
                          class="icon"
                          href="#"
                          rel="nofollow noopener noreferrer"
                          target="_blank"
                        ></a
                        ><span class="items"
                          ><span class="count">20.5k</span
                          ><span class="label">subscribers</span></span
                        >
                      </li>
                      <li class="count-linkedin">
                        <a
                          class="icon"
                          href="https://www.linkedin.com/company/"
                          rel="nofollow noopener noreferrer"
                          target="_blank"
                        ></a
                        ><span class="items"
                          ><span class="count">20.5k</span
                          ><span class="label">followers</span></span
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <span class="jl_none_space"></span>
                <div
                  id="disto_category_image_widget_register-5"
                  class="widget jellywp_cat_image"
                >
                  <div class="wrapper_category_image">
                    <div class="category_image_wrapper_main">
                      <div
                        class="category_image_bg_image"
                        style="
                          background-image: url('../theme/disto/demo/wp-content/uploads/2019/02/annie-spratt-70918-unsplash-400x280.jpg');
                        "
                      >
                        <a
                          class="category_image_link"
                          id="category_color_2"
                          href="#"
                          ><span class="jl_cm_overlay"
                            ><span class="jl_cm_name">Active</span
                            ><span class="jl_cm_count">11</span></span
                          ></a
                        >
                        <div
                          class="category_image_bg_overlay"
                          style="background: #ed1c1c"
                        ></div>
                      </div>
                      <div
                        class="category_image_bg_image"
                        style="
                          background-image: url('../theme/disto/demo/wp-content/uploads/2019/02/soroush-karimi-253940-unsplash-400x280.jpg');
                        "
                      >
                        <a
                          class="category_image_link"
                          id="category_color_3"
                          href="#"
                          ><span class="jl_cm_overlay"
                            ><span class="jl_cm_name">Business</span
                            ><span class="jl_cm_count">10</span></span
                          ></a
                        >
                        <div
                          class="category_image_bg_overlay"
                          style="background: #0015ff"
                        ></div>
                      </div>
                      <div
                        class="category_image_bg_image"
                        style="
                          background-image: url('../theme/disto/demo/wp-content/uploads/2019/02/pexels-photo-1003816-400x280.jpg');
                        "
                      >
                        <a
                          class="category_image_link"
                          id="category_color_4"
                          href="#"
                          ><span class="jl_cm_overlay"
                            ><span class="jl_cm_name">Crazy</span
                            ><span class="jl_cm_count">5</span></span
                          ></a
                        >
                        <div
                          class="category_image_bg_overlay"
                          style="background: #d1783c"
                        ></div>
                      </div>
                    </div>
                    <span class="jl_none_space"></span>
                  </div>
                </div>
                <span class="jl_none_space"></span>
                <div
                  id="disto_recent_post_widget-7"
                  class="widget post_list_widget"
                >
                  <div class="widget_jl_wrapper">
                    <span class="jl_none_space"></span>
                    <div class="widget-title">
                      <h2>Recent Posts</h2>
                    </div>
                    <div>
                      <ul class="feature-post-list recent-post-widget">
                        <li>
                          <a
                            href="#"
                            class="jl_small_format feature-image-link image_post featured-thumbnail"
                            title="Sitting right here waiting for you come to me"
                          >
                            <img
                              width="120"
                              height="120"
                              src="../theme/disto/demo/wp-content/uploads/2019/02/sawyer-bengtson-1331688-unsplash-120x120.jpg"
                              class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                              alt=""
                            />
                            <div class="background_over_image"></div>
                          </a>
                          <div class="item-details">
                            <span class="meta-category-small"
                              ><a
                                class="post-category-color-text"
                                style="background: #d800f9"
                                href="#"
                                >Techno</a
                              ></span
                            >
                            <h3 class="feature-post-title">
                              <a href="#">
                                Sitting right here waiting for you come to me</a
                              >
                            </h3>
                            <span
                              class="post-meta meta-main-img auto_image_with_date"
                            >
                              <span class="post-date"
                                ><i class="fa fa-clock-o"></i>Dec 24, 2016</span
                              ></span
                            >
                          </div>
                        </li>
                        <li>
                          <a
                            href="#"
                            class="jl_small_format feature-image-link image_post featured-thumbnail"
                            title="Before breakfast we have a great photo shoot"
                          >
                            <img
                              width="120"
                              height="120"
                              src="../theme/disto/demo/wp-content/uploads/2018/11/susan-yin-698530-unsplash-120x120.jpg"
                              class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                              alt=""
                            />
                            <div class="background_over_image"></div>
                          </a>
                          <div class="item-details">
                            <span class="meta-category-small"
                              ><a
                                class="post-category-color-text"
                                style="background: #ed1c1c"
                                href="#"
                                >Active</a
                              ></span
                            >
                            <h3 class="feature-post-title">
                              <a href="#">
                                Before breakfast we have a great photo shoot</a
                              >
                            </h3>
                            <span
                              class="post-meta meta-main-img auto_image_with_date"
                            >
                              <span class="post-date"
                                ><i class="fa fa-clock-o"></i>Dec 23, 2016</span
                              ></span
                            >
                          </div>
                        </li>
                        <li>
                          <a
                            href="#"
                            class="jl_small_format feature-image-link image_post featured-thumbnail"
                            title="Beautiful flying bikes with simple style but look good"
                          >
                            <img
                              width="120"
                              height="120"
                              src="../theme/disto/demo/wp-content/uploads/2018/11/melissa-walker-horn-1058236-unsplash-120x120.jpg"
                              class="attachment-disto_small_feature size-disto_small_feature wp-post-image"
                              alt=""
                            />
                            <div class="background_over_image"></div>
                          </a>
                          <div class="item-details">
                            <span class="meta-category-small"
                              ><a
                                class="post-category-color-text"
                                style="background: #ed1c1c"
                                href="#"
                                >Active</a
                              ></span
                            >
                            <h3 class="feature-post-title">
                              <a href="#">
                                Beautiful flying bikes with simple style but
                                look good</a
                              >
                            </h3>
                            <span
                              class="post-meta meta-main-img auto_image_with_date"
                            >
                              <span class="post-date"
                                ><i class="fa fa-clock-o"></i>Dec 23, 2016</span
                              ></span
                            >
                          </div>
                        </li>
                      </ul>
                    </div>
                    <span class="jl_none_space"></span>
                  </div>
                </div>
                <span class="jl_none_space"></span>
                <div
                  id="disto_recent_large_slider_widgets-5"
                  class="widget jl_widget_slider"
                >
                  <div class="slider_widget_post jelly_loading_pro">
                    <div class="recent_post_large_widget">
                      <span
                        class="image_grid_header_absolute"
                        style="
                          background-image: url('../theme/disto/demo/wp-content/uploads/2018/11/marvin-tolentino-680683-unsplash-380x350.jpg');
                        "
                      ></span>
                      <a
                        href="#"
                        class="link_grid_header_absolute"
                        title="Standing right here and singing until the mid"
                      ></a>
                      <span class="meta-category-small"
                        ><a
                          class="post-category-color-text"
                          style="background: #ed1c1c"
                          href="#"
                          >Active</a
                        ></span
                      >
                      <div class="wrap_box_style_main image-post-title">
                        <h3 class="image-post-title">
                          <a href="#">
                            Standing right here and singing until the mid</a
                          >
                        </h3>
                        <span class="jl_post_meta"
                          ><span class="jl_author_img_w"
                            ><img
                              src="img/favicon.jpg"
                              width="30"
                              height="30"
                              alt="Anna Nikova"
                              class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo"
                            /><a
                              href="#"
                              title="Posts by Anna Nikova"
                              rel="author"
                              >Anna Nikova</a
                            ></span
                          ><span class="post-date"
                            ><i class="fa fa-clock-o"></i>Dec 23, 2016</span
                          ></span
                        >
                      </div>
                    </div>
                    <div class="recent_post_large_widget">
                      <span
                        class="image_grid_header_absolute"
                        style="
                          background-image: url('../theme/disto/demo/wp-content/uploads/2016/12/bartosz-wanot-133401-unsplash-380x350.jpg');
                        "
                      ></span>
                      <a
                        href="#"
                        class="link_grid_header_absolute"
                        title="You can make your art with canyon color"
                      ></a>
                      <span class="meta-category-small"
                        ><a
                          class="post-category-color-text"
                          style="background: #6b34ba"
                          href="#"
                          >Gaming</a
                        ></span
                      >
                      <div class="wrap_box_style_main image-post-title">
                        <h3 class="image-post-title">
                          <a href="#">
                            You can make your art with canyon color</a
                          >
                        </h3>
                        <span class="jl_post_meta"
                          ><span class="jl_author_img_w"
                            ><img
                              src="img/favicon.jpg"
                              width="30"
                              height="30"
                              alt="Anna Nikova"
                              class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo"
                            /><a
                              href="#"
                              title="Posts by Anna Nikova"
                              rel="author"
                              >Anna Nikova</a
                            ></span
                          ><span class="post-date"
                            ><i class="fa fa-clock-o"></i>Dec 23, 2016</span
                          ></span
                        >
                      </div>
                    </div>
                    <div class="recent_post_large_widget">
                      <span
                        class="image_grid_header_absolute"
                        style="
                          background-image: url('../theme/disto/demo/wp-content/uploads/2019/03/banter-snaps-1438384-unsplash-380x350.jpg');
                        "
                      ></span>
                      <a
                        href="#"
                        class="link_grid_header_absolute"
                        title="Makeup it really important things to do"
                      ></a>
                      <span class="meta-category-small"
                        ><a
                          class="post-category-color-text"
                          style="background: #6b34ba"
                          href="#"
                          >Gaming</a
                        ></span
                      >
                      <div class="wrap_box_style_main image-post-title">
                        <h3 class="image-post-title">
                          <a href="#">
                            Makeup it really important things to do</a
                          >
                        </h3>
                        <span class="jl_post_meta"
                          ><span class="jl_author_img_w"
                            ><img
                              src="img/favicon.jpg"
                              width="30"
                              height="30"
                              alt="Anna Nikova"
                              class="avatar avatar-30 wp-user-avatar wp-user-avatar-30 alignnone photo"
                            /><a
                              href="#"
                              title="Posts by Anna Nikova"
                              rel="author"
                              >Anna Nikova</a
                            ></span
                          ><span class="post-date"
                            ><i class="fa fa-clock-o"></i>Dec 23, 2016</span
                          ></span
                        >
                      </div>
                    </div>
                  </div>
                  <span class="jl_none_space"></span>
                </div>
              </div>