<header class="navbar navbar-fixed-top navbar-inverse" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="{{url}}" class="navbar-brand">Forex <i class="fa fa-bar-chart-o"></i> srovnávač</a>
    </div>
    <nav class="navbar-collapse bs-navbar-collapse collapse" role="navigation" style="height: 1px;" id="scrollpsy">
      <ul class="nav navbar-nav">
        <li>
          <a href="{{url}}index#section-1">Seznam brokerů</a>
        </li>
        <li>
          <a href="{{url}}index#section-2">Jak správně vybrat</a>
        </li>
        <li class="dropdown">
          <a href="#" id="drop1" role="button" class="dropdown-toggle" data-toggle="dropdown">Aktuální kurzy <b class="caret"></b></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{url}}akcie-apple">Akcie Apple</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{url}}akcie-ibm">Akcie IBM</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url}}bitcoin/">Bitcoiny</a></li>
        <li><a href="{{url}}litecoin/">Litecoiny</a></li>
        <li><a href="{{url}}blog/">Blog</a></li>
        <li class="dropdown">
          <a href="#" id="drop2" role="button" class="dropdown-toggle" data-toggle="dropdown"><img src="{{img-url}}flags/cs.png" class="flag"></a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="drop2">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{base-url}}en/">English</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{base-url}}">Česky</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{base-url}}pl/">Polski</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{base-url}}de/">Deutsche</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="{{base-url}}sk/">Slovensky</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</header>