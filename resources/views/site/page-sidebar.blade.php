@extends ('layouts.master')

@section ('content')
    {{--@foreach($posts as $post)--}}
    {{--@include('post.post')--}}
    {{--@endforeach--}}

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                @if(Auth::check())
                    <form action="/edit" method="POST">
                        {{ csrf_field() }}
                        <textarea id="bodyField" name="body">{{ $content->body }}</textarea>
                        <input type="hidden" name="url" value="{{ $content->url }}">
                        @ckeditor('bodyField')
                    </form>
                @else
                    <div class="container">{{ $content->body }}</div>
                @endif
            </div>
            <div class="col-sm-4">
                @include('layouts.sidebar')
            </div>
        </div>



@endsection