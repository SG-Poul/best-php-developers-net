@extends ('layouts.master')

@section ('content')
    <input type="hidden" value="{{ csrf_token() }}" id="csrf-token">
    <div class="container">
        <br/>
        <!-- The Gallery as lightbox dialog, should be a child element of the document body -->
        <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
            <div class="slides"></div>
            <h3 class="title"></h3>
            <a class="prev">‹</a>
            <a class="next">›</a>
            <a class="close">×</a>
            <a class="play-pause"></a>
            {{--<ol class="indicator"></ol>--}}
        </div>

        <div id="links">
            @foreach ($images as $img)
                <a href="{{ $img['original'] }}" title="">
                    <img src="{{ $img['icon'] }}" alt="">
                </a>
            @endforeach
        </div>


        <script src="/js/blueimp/blueimp-gallery.min.js"></script>
        <script>
            document.getElementById('links').onclick = function (event) {
                event = event || window.event;
                var target = event.target || event.srcElement,
                    link = target.src ? target.parentNode : target,
                    options = {index: link, event: event},
                    links = this.getElementsByTagName('a');
                blueimp.Gallery(links, options);
            };
        </script>
    </div>
@endsection
