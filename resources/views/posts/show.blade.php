@extends('layouts.master')
@section('page-content')
    <main id="page-content">
        <div class="container" style="margin-top: 95px">
            <div class="row">
                <div class="col-xs-12 col-md-8 col-lg-9 post-list">
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
                                    {{--<a href="single-post.html" class="btn">READ POST</a>--}}

                                </footer>
                            </div>
                        </article>
                </div>

            </div>
        </div>
    </main>
@endsection