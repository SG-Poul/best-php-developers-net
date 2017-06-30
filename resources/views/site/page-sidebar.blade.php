@extends ('layouts.master')

@section ('content')
    <div class="container">
        <br/>
        <div class="row">
            <div class="col-sm-9">
                @if(Auth::check())
                    <form action="/edit" method="POST">
                        {{ csrf_field() }}
                        <textarea id="bodyField" name="body">{!! $content->body !!}</textarea>
                        <input type="hidden" name="url" value="{!! $content->url !!}">
                        @ckeditor('bodyField')
                    </form>
                @else
                    {!! $content->body !!}
                @endif
            </div>
            <div class="col-sm-3">
                <div class="container">
                    @include('layouts.sidebar')
                </div>
            </div>
        </div>
    </div>



@endsection
