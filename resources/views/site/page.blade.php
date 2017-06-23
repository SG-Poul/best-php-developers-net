@extends ('layouts.master')

@section ('content')
    {{--@foreach($posts as $post)--}}
    {{--@include('post.post')--}}
    {{--@endforeach--}}

    @if(Auth::check())
        <div class="container">
            <textarea id="bodyField"></textarea>
            @ckeditor('bodyField')
        </div>
    @else
        <div class="container">
            content
        </div>
    @endif

@endsection
