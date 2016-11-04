<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title> @yield('title') </title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      * { background-color: white; }
      div { margin-bottom: 1em; }
      ul.pagination li.active { border-bottom: solid 1px; }
    </style>
  </head>
  <body>
    <div id="content" class="pure-g">
      @if(session('status'))
      <div class="pure-u-1">
        <div class="status"><p>{{ session('status') }}</p></div>
      </div>
      @endif
      <div class="pure-u-1">
        @yield('content')
      </div>
    </div>
  </body>
</html>
