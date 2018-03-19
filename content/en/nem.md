{{settings}}
  "language": "en",
  "template": 2,
  "header": "nem",
  "meta" : {
    "title": "NEM price US Dollar/Euro - Current chart and price in XEM/BTC/USD/EUR",
    "description": "NEM cryptocurrency - Current price and charts in US Dollar - (XEM/USD) and Euro - (XEM/EUR)",
    "keywords": "NEM rate, NEM for free, NEM trading, NEM"
  }
{{/settings}}

{{partial: cryptoen}}

{{section}}
## NEM price in **Dollar** - USD chart **(XEM/USD)**
<!-- TradingView Widget BEGIN -->
<script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
<script type="text/javascript">
new TradingView.widget({
  "width": "100%",
  "height": 400,
  "symbol": "POLONIEX:XEMUSD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "White",
  "style": "3",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "allow_symbol_change": true,
  "hideideas": true,
  "show_popup_button": true,
  "popup_width": "1000",
  "popup_height": "650",
});
</script>
<!-- TradingView Widget END -->
{{/section}}
{{section}}
## NEM price in **Euro** - EUR chart **(XEM/EUR)**
<!-- TradingView Widget BEGIN -->
<script type="text/javascript">
baseUrl = "https://widgets.cryptocompare.com/";
var scripts = document.getElementsByTagName("script");
var embedder = scripts[ scripts.length - 1 ];
(function (){
var appName = encodeURIComponent(window.location.hostname);
if(appName==""){appName="local";}
var s = document.createElement("script");
s.type = "text/javascript";
s.async = true;
var theUrl = baseUrl+'serve/v3/coin/chart?fsym=XEM&tsyms=EUR,';
s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
embedder.parentNode.appendChild(s);
})();
</script>
<!-- TradingView Widget END -->
{{/section}}
{{section}}
## NEM price in **Bitcoin** - BTC chart  **(XEM/BTC)**
<!-- TradingView Widget BEGIN -->
<script type="text/javascript" src="https://d33t3vvu2t2yu5.cloudfront.net/tv.js"></script>
<script type="text/javascript">
new TradingView.widget({
  "width": "100%",
  "height": 400,
  "symbol": "POLONIEX:XEMBTC",
  "interval": "30",
  "timezone": "Etc/UTC",
  "theme": "White",
  "style": "3",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "allow_symbol_change": true,
  "hideideas": true,
  "show_popup_button": true,
  "popup_width": "1000",
  "popup_height": "650",
});
</script>
<!-- TradingView Widget END -->
{{/section}}
- - -
The NEM price, The NEM Rate (XEM) is displayed in the currency of a specific exchange, (USD) Kraken (EUR) and BitFinex (BTC). You will find the evolution of the NEM price over the last half year. Individual "candlesticks" indicate the current price per NEM. The stopwatch indicates the minimum and maximum odds. You can view the course development in about 5 minute charts, to annual charts. The LISK charts is displayed with a 5 minute delay.
- - -
{{/section}}
