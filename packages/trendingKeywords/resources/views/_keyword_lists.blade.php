@if (isset($trending_keywords))
  <div class="hot-words d-none d-sm-block">
    @foreach ($trending_keywords as $hotkeyword)
      <a href="{{ route('inCategoriesSearch') . '?q=' . $hotkeyword }}">
        {{ $hotkeyword }}
      </a>
    @endforeach
  </div>
@endif
<style>
  .hot-words {
    /* height: 16px; */
    /* overflow: hidden; */
    margin-top: 10px;
  }

  .hot-words a {
    position: relative;
    /* float: left; */
    padding-left: 5px;
    /* line-height: 16px; */
    /* font-size: 12px; */
    color: #666;
  }

  .hot-words a:hover {
    color: #ff4747;
  }

  .hot-words a:not(:first-child):before {
    position: absolute;
    left: 0;
    top: 2px;
    content: "";
    display: inline-block;
    width: 1px;
    height: 10px;
    font-size: 0;
    overflow: hidden;
    background-color: #e9e9e9;
  }

  .hot-words a:first-child {
    padding-left: 0;
  }

</style>
