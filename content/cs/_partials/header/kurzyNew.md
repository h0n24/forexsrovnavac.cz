<!-- Static navbar -->
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/kurzy"><img src="/assets/img/kurzy/logo.png" width="120"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="../navbar/" class="dropdown-toggle" data-toggle="dropdown" title="Akcie" aria-expanded="true">Akcie <b class="caret"></b></a>
                    <ul class="dropdown-menu">                        
                        <li>
                            <a href="/kurzy/ceske-akcie">České akcie</a>
                        </li>
                        <li>
                            <a href="/kurzy/nemecke-akcie">Německé akcie</a>
                        </li>
                        <li>    
                            <a href="/kurzy/us-akcie">USA akcie</a>
                        </li>
                    </ul>
                </li>
                <li><a href="/kurzy/forex">Forex</a></li>
                <li class=""><a href="/kurzy/komodity">Komodity</a></li>                                
                <li><a href="/kurzy/indexy">Indexy</a></li>                
                <li class="search "><gcse:search></gcse:search></li>
                <li class="searchMockup"><a></a></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<script>
    (function () {
        var cx = '009596837020734343041:vnmrjayhnt8';
        var gcse = document.createElement('script');
        gcse.type = 'text/javascript';
        gcse.async = true;
        gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(gcse, s);
    })();

    document.querySelector(".searchMockup a").addEventListener("click", function(){
        document.querySelector(".searchMockup").style.display = 'none';
        document.querySelector(".search").style.display = 'inline-block';
    });
    /*$('.searchMockup a').click(function(){
        alert('a');
    });*/
</script>

