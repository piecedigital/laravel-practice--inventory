<div id="list-item-detailed-component" class="component-defaults page-wrap center-content-margin">
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
        <div class="wrapper">
            <div class="separator"></div>
            <div class="media">
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
            <div class="split-box">
                <div class="split-content descriptions">
                    {{ $value->description }}
                </div>
                <div class="splitter"></div>
                <div class="split-content metadata">
                    <div class="column">
                        <div class="meta-width"><h3>Width:</h3> {{ $value->dimensions_width_value . "" . $value->dimensions_width_unit }}</div>
                        <div class="meta-height"><h3>Height:</h3> {{ $value->dimensions_height_value . "" . $value->dimensions_height_unit }}</div>
                        <div class="meta-lenth"><h3>Length:</h3> {{ $value->dimensions_length_value . "" . $value->dimensions_length_unit }}</div>
                    </div>
                    <div class="column">
                        <div class="meta-weight"><h3>Weight:</h3> {{ $value->weight_value . "" . $value->weight_unit }}</div>
                        <div class="meta-color"><h3>Color:</h3> {{ $value->color }}</div>
                        <div class="meta-color"><h3>Price:</h3> {{ $value->price }}</div>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
            <div>
                <a class="default-button" href="/inventory-reviews/{{ $value->id }}">See Reviews</a>
            </div>
        </div>
    </div>
</div>
