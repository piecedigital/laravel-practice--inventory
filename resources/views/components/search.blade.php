<div id="search-wrapper" class="">
  <div id="listing-search-component">
    <h1 class="title">{{ $search_title }}</h1>
    <div class="separator"></div>
    <form class="" action="/listings" method="get">
      <div class="row">
        <div class="column">
          <label for="">seller</label>
          <input type="text" name="seller" value="">
        </div><div class="column">
          <label for="">make</label>
          <input type="text" name="make" value="">
        </div><div class="column">
          <label for="">model</label>
          <input type="text" name="model" value="">
        </div>
      </div>
      <div class="row">
        <div class="column">
          <label for="">price</label>
          <select class="" name="price">
            <option value=""></option>
          </select>
        </div><div class="column">
          <label for="">weight</label>
          <input type="text" name="weight" value="">
        </div><div class="column">
          <label for="">year</label>
          <input type="text" name="year" value="">
        </div>
      </div>
      <div class="row">
        <div class="center">
          <button type="submit" name="button">Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
