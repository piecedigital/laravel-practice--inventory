<div id="search-wrapper" class="">
  <div id="listing-search-component" class="component-defaults page-wrap center-content-margin">
    <h1 class="title">{{ $search_title }}</h1>
    <div class="separator"></div>
    <form class="" action="/listings" method="get">
      <div class="row">
        <div class="column">
          <label class="top" for="">seller</label><br>
          <select class="" name="seller">
            <option value="">---</option>
            @foreach ($sellerList as $key => $value)
              <option {{(Request::get("seller") == $value->id) ? "selected" : ""}}
                value="{{$value->id}}">{{$value->name}}</option>
            @endforeach
          </select>
        </div><div class="column">
          <label class="top" for="">make</label><br>
          <select class="" name="make">
            <option value="">---</option>
            @foreach ($makeList as $key => $value)
              <option {{(Request::get("make") == $value) ? "selected" : ""}}
                value="{{$value}}">{{$value}}</option>
            @endforeach
          </select>
        </div><div class="column">
          <label class="top" for="">model</label><br>
          <select class="" name="model">
            <option value="">---</option>
            @foreach ($modelList as $key => $value)
              <option {{(Request::get("model") == $value) ? "selected" : ""}}
                value="{{$value}}">{{$value}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <label class="top" for="">price <span id="price-range"></span></label><br>
          <div class="labeled-select">
            <div class="side-by-side">
                <label for="">Min</label>
                <select class="" name="minprice">
                  <option value="">---</option>
                  @for ($i = 0; $i <= 20; $i++)
                    @php
                      $val = ($maxPrice / 20) * $i;
                    @endphp
                    <option {{(Request::get("minprice") === strval($val)) ? "selected" : ""}}
                      value="{{$val}}">{{$val}}</option>
                  @endfor
                </select>
            </div><br>
            <div class="side-by-side">
                <label for="">Max</label>
                <select class="" name="maxprice">
                  <option value="">---</option>
                  @for ($i = 0; $i <= 20; $i++)
                    @php
                      $val = ($maxPrice / 20) * $i
                    @endphp
                    <option {{(Request::get("maxprice") === strval($val)) ? "selected" : ""}}
                      value="{{$val}}">{{$val}}</option>
                  @endfor
                </select>
            </div>
          </div>
        </div><div class="column">
          <label class="top" for="">weight <span id="weight-range"></span></label><br>
          <div class="labeled-select">
            <div class="side-by-side">
                <label for="">Min</label>
                <select class="" name="minwight">
                  <option value="">---</option>
                  @for ($i = 0; $i <= 20; $i++)
                    @php
                      $val = ($maxWeight / 20) * $i
                    @endphp
                    <option {{(Request::get("minweight") === strval($val)) ? "selected" : ""}}
                      value="{{$val}}">{{$val}}</option>
                  @endfor
                </select>
            </div><br>
            <div class="side-by-side">
                <label for="">Max</label>
                <select class="" name="maxwight">
                  <option value="">---</option>
                  @for ($i = 0; $i <= 20; $i++)
                    @php
                      $val = ($maxWeight / 20) * $i
                    @endphp
                    <option {{(Request::get("maxweight") === strval($val)) ? "selected" : ""}}
                      value="{{$val}}">{{$val}}</option>
                  @endfor
                </select>
            </div>
          </div>
        </div><div class="column">
          <label class="top" for="">year</label><br>
          <select class="" name="year">
            <option value="">---</option>
            @foreach ($yearList as $key => $value)
              <option {{(Request::get("year") == $value) ? "selected" : ""}}
                value="{{$value}}">{{$value}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="row">
        <div class="center">
          <button class="default-button" type="submit">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
