@extends('layouts.master')
@section('page-content')
    <main id="page-content">
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <h1 style="margin-top: 25px ">Create Post</h1>
                @include('pages.message')
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" required>
                </div>
                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea id="article-ckeditor" rows=="5" class="form-control" placeholder="Insert Text" name="body"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" id="cover_image" name="cover_image">
                </div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </main>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection
