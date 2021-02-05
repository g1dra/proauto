@extends('layouts.master')
@section('page-content')
    <main id="page-content">
        <div class="container" style="margin-top: 95px">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-9 post-list">
                    @foreach($posts as $post)
                        <article class="post-list__item format-standart">
                            <figure class="thumbnail post-list__thumbnail">
                                <a href="#"><img src="/storage/cover_images/{{$post->cover_image}}" alt="image-not-loaded"></a>
                            </figure>
                            <div class="post-list__item-content">
                                <header class="post-list__item-header">
                                    <div class="post-list__item-meta post-block_meta">
                                        <span class="date"><i class="icon-clock"></i> {{$post->created_at}}</span>
                                    </div>
                                    <h3 class="post-list__item-title">{{$post->title}}</h3>
                                    {{--<span class="post-list__item-author">by <a href="#">Paul Johnson</a></span>--}}
                                </header>
                                <div class="post-list__item-desc">
                                    <p>{!! $post->body !!}</p>
                                </div>
                                <footer class="post-list__item-footer">
                                    <a href="/posts/{{$post->id}}" class="btn">READ POST</a>
                                    <a href="/posts/{{$post->id}}" class="btn data-delete" data-method="DELETE"
                                       data-confirm="Are you sure?">DELETE POST</a>
                                </footer>
                            </div>
                        </article>
                    @endforeach
                    {{--
                                    <article class="post-list__item format-gallery">
                                        <div class="swiper-container-slider-format swiper-container">
                                            <div class="swiper-wrapper">
                                                <figure class="thumbnail post-list__thumbnail swiper-slide">
                                                    <img src="assets/images/blog-post-img-2.jpg" alt="">
                                                </figure>
                                                <figure class="thumbnail post-list__thumbnail swiper-slide">
                                                    <img src="assets/images/blog-post-img-3.jpg" alt="">
                                                </figure>
                                                <figure class="thumbnail post-list__thumbnail swiper-slide">
                                                    <img src="assets/images/blog-post-img-4.jpg" alt="">
                                                </figure>
                                            </div>
                                            <div class="swiper-pagination swiper-pagination-slider-format"></div>
                                            <span class="swiper-button-next-blog swiper-button-next"><i class="icon-left-arrow2"></i></span>
                                            <span class="swiper-button-prev-blog swiper-button-prev"><i class="icon-left-arrow"></i></span>
                                        </div>
                                        <div class="post-list__item-content">
                                            <header class="post-list__item-header">
                                                <div class="post-list__item-meta post-block_meta">
                                                    <span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
                                                    <a href="#" class="comment"><i class="icon-social"></i>  3</a>
                                                </div>
                                                <h3 class="post-list__item-title">RentalCars's Cheap One-Way Car Rental Guide</h3>
                                                <span class="post-list__item-author">by <a href="#">Paul Johnson</a></span>
                                            </header>
                                            <div class="post-list__item-desc">
                                                <p>Leann Rimes bought a one-way ticket on a westbound train, to see how far she could go. Eventually, she might want to make a return trip back east! If she's collected a lot of new possessions while out west, the cheapest option might be a one-way rental vehicle, where she rents...</p>
                                            </div>
                                            <footer class="post-list__item-footer">
                                                <a href="single-post.html" class="btn">READ POST</a>
                                                <div class="social-list">
                                                    <ul class="social-list__icons">
                                                        <li><a target="_blank" href="https://www.facebook.com/Tonytemplates/?ref=hl"><i class="icon-facebook-logo"></i></a></li>
                                                        <li><a target="_blank" href="https://twitter.com/tonytemplates/"><i class="icon-twitter-letter-logo"></i></a></li>
                                                        <li><a target="_blank" href="https://plus.google.com"><i class="icon-google-plus"></i></a></li>
                                                        <li><a target="_blank" href="https://www.linkedin.com/uas/login?"><i class="icon-linkedin-logo"></i></a></li>
                                                    </ul>
                                                </div>
                                            </footer>
                                        </div>
                                    </article>
                    --}}

                    {{--                <article class="post-list__item format-link">
                                        <figure class="thumbnail post-list__thumbnail link-thumb">
                                            <a href="single-post.html"><img src="assets/images/blog-post-img-5.jpg" alt=""></a>
                                            <a href="index.html" class="post-link"> </a>
                                        </figure>
                                        <div class="post-list__item-content">
                                            <header class="post-list__item-header">
                                                <div class="post-list__item-meta post-block_meta">
                                                    <span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
                                                    <a href="#" class="comment"><i class="icon-social"></i>  3</a>
                                                </div>
                                                <h3 class="post-list__item-title">The Fee Detective and the Grace of Rental Car Companies</h3>
                                                <span class="post-list__item-author">by <a href="#">Paul Johnson</a></span>
                                            </header>
                                            <div class="post-list__item-desc">
                                                <p>Leann Rimes bought a one-way ticket on a westbound train, to see how far she could go. Eventually, she might want to make a return trip back east! If she's collected a lot of new possessions while out west, the cheapest option might be a one-way rental vehicle, where she rents...</p>
                                            </div>
                                            <footer class="post-list__item-footer">
                                                <a href="single-post.html" class="btn">READ POST</a>
                                                <div class="social-list">
                                                    <ul class="social-list__icons">
                                                        <li><a target="_blank" href="https://www.facebook.com/Tonytemplates/?ref=hl"><i class="icon-facebook-logo"></i></a></li>
                                                        <li><a target="_blank" href="https://twitter.com/tonytemplates/"><i class="icon-twitter-letter-logo"></i></a></li>
                                                        <li><a target="_blank" href="https://plus.google.com"><i class="icon-google-plus"></i></a></li>
                                                        <li><a target="_blank" href="https://www.linkedin.com/uas/login?"><i class="icon-linkedin-logo"></i></a></li>
                                                    </ul>
                                                </div>
                                            </footer>
                                        </div>
                                    </article>--}}

                    <div class="pagination">
                        {{--href="http://proauto.test/posts?page=2"--}}
                        <ul>
                            @for($i=1; $i<=$posts->lastpage(); $i++)
                                <li class="{{ Request::is('/posts?page='.$i) ? 'active': ''}}"><a href="/posts?page={{$i}}">{{$i}}</a></li>
                            @endfor
                        </ul>
                    </div>
                </div>
                {{--
                            <aside class="col-xs-12 col-md-4 col-lg-3 sidebar" id="sidebar">
                                <div class="sidebar-block">
                                    <form class="form-default">
                                        <div class="tt-form-search">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <a href="#" type="submit" class="btn">GO</a>
                                        </div>
                                    </form>
                                </div>
                                <div class="sidebar-block">
                                    <h3>Archive</h3>
                                    <div class="calendar">
                                        <div class="calendar__header">November 2017</div>
                                        <table>
                                            <tr>
                                                <th>M</th>
                                                <th>T</th>
                                                <th>W</th>
                                                <th>T</th>
                                                <th>F</th>
                                                <th>S</th>
                                                <th>S</th>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>5</td>
                                                <td>6</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>8</td>
                                                <td>9</td>
                                                <td>10</td>
                                                <td>11</td>
                                                <td>12</td>
                                                <td>13</td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>15</td>
                                                <td>16</td>
                                                <td class="selected">17</td>
                                                <td>18</td>
                                                <td>19</td>
                                                <td>20</td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>22</td>
                                                <td>23</td>
                                                <td>24</td>
                                                <td>25</td>
                                                <td>26</td>
                                                <td>27</td>
                                            </tr>
                                            <tr>
                                                <td>28</td>
                                                <td>29</td>
                                                <td>30</td>
                                                <td>31</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </table>
                                        <div class="calendar__footer"><a href="#">« Sep</a></div>
                                    </div>
                                </div>
                                <div class="sidebar-block">
                                    <h3>Post Categories</h3>
                                    <ul class="list-categories">
                                        <li><a href="#">Audios</a> <span class="count">(2)</span></li>
                                        <li><a href="#">Daily Inspiration</a> <span class="count">(7)</span></li>
                                        <li><a href="#">Freelance</a> <span class="count">(3)</span></li>
                                        <li><a href="#">Links</a> <span class="count">(1)</span></li>
                                        <li><a href="#">Mobile</a> <span class="count">(1)</span></li>
                                        <li><a href="#">Photography </a> <span class="count">(5)</span></li>
                                        <li><a href="#">Quotes</a> <span class="count">(1)</span></li>
                                        <li><a href="#">Resources</a> <span class="count">(3)</span></li>
                                        <li><a href="#">Status</a> <span class="count">(2)</span></li>
                                    </ul>
                                </div>
                                <div class="sidebar-block">
                                    <h3>Popular tags</h3>
                                    <ul class="list-tags">
                                        <li><a href="#">Car</a></li>
                                        <li><a href="#">Rentals</a></li>
                                        <li><a href="#">Mobile App</a></li>
                                        <li><a href="#">Cheap Rental Cars</a></li>
                                        <li><a href="#">Thrifty</a></li>
                                        <li><a href="#">Online Booking</a></li>
                                        <li><a href="#">Airport Rentals</a></li>
                                        <li><a href="#">Rental Rates</a></li>
                                        <li><a href="#">Auto</a></li>
                                    </ul>
                                </div>
                                <div class="sidebar-block">
                                    <h3>Featured Posts</h3>
                                    <div class="post-block">
                                        <figure class="thumbnail">
                                            <a href="single-post.html"><img src="assets/images/post-thumb_small-1.jpg" alt=""></a>
                                        </figure>
                                        <div class="post-block__content">
                                            <div class="post-block_meta">
                                                <span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
                                                <a href="#" class="comment"><i class="icon-social"></i>  3</a>
                                            </div>
                                            <h4>International Airport Car Rental Guide</h4>
                                        </div>
                                    </div>
                                    <div class="post-block">
                                        <figure class="thumbnail">
                                            <a href="single-post.html"><img src="assets/images/post-thumb_small-2.jpg" alt=""></a>
                                        </figure>
                                        <div class="post-block__content">
                                            <div class="post-block_meta">
                                                <span class="date"><i class="icon-clock"></i> 10 February, 2017</span>
                                                <a href="#" class="comment"><i class="icon-social"></i>  3</a>
                                            </div>
                                            <h4>Tampa Airport Rental Car Facility Delayed</h4>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                --}}
            </div>
        </div>
    </main>
@endsection
@section('footer-scripts')
    <script src="{{asset('/js/formForDelete.js')}}"></script>
@endsection