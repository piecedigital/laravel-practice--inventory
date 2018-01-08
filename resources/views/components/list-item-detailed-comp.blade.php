<div id="list-item-detailed-component">
    <h1 class="title">
        {{ $value->make . " " . $value->model . ", " . $value->year }}
    </h1>
    <div class="separator"></div>
    <div class="center">
        <div class="media">
            <div class="single">
                <img src="{{ $value->url }}" alt="">
            </div>
            <div class="gallery">
                <ul>
                    @foreach ($media as $key => $media_data)
                        <li class="">
                            <img src="{{$media_data->url}}" alt="">
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="separator"></div>
        <div class="descriptions">{{ $value->description }}</div>
        <div class="metadata">
            <div class="meta-width"><h3>width</h3>: {{ $value->dimensions_width_value . "" . $value->dimensions_width_unit }}</div>
            <div class="meta-height"><h3>height</h3>: {{ $value->dimensions_height_value . "" . $value->dimensions_height_unit }}</div>
            <div class="meta-lenth"><h3>lenth</h3>: {{ $value->dimensions_lenth_value . "" . $value->dimensions_lenth_unit }}</div>
            <div class="meta-weight"><h3>weight</h3>: {{ $value->weight_value . "" . $value->weight_unit }}</div>
            <div class="meta-color"><h3>color</h3>: {{ $value->color }}</div>
        </div>
        <div class="separator"></div>
        <div class="">
            <a href="/reviews/{{ $value->id }}">See Reviews</a>
        </div>
    </div>
</div>
