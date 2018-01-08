<div id="list-item-component">
    <a href="/listings/{{ $value->id }}" class="content">
        <h1 class="title">
            {{ $value->make . " " . $value->model . ", " . $value->year }}
        </h1>
        <div class="separator"></div>
        <div class="center">
            <div class="media">
                <div class="single">
                    <img src="{{ $value->url }}" alt="">
                </div>
            </div>
        </div>
    </a>
</div>
