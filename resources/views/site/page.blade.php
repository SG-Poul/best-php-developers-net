@extends ('layouts.master')

@section ('content')
    {{--@foreach($posts as $post)--}}
    {{--@include('post.post')--}}
    {{--@endforeach--}}

    @if(Auth::check())
        <div class="container">
            <form action="/edit" method="POST">
                {{ csrf_field() }}
                <textarea id="bodyField" name="body">
                    {{ $content->body }}
                </textarea>
                <input type="hidden" name="url" value="{{ $content->url }}">
                @ckeditor('bodyField')
            </form>
        </div>
    @else
        <div class="container">
            {{ $content->body }}
        </div>
    @endif

@endsection
