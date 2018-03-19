{{settings}}
  "language": "cs",
  "template": 2,
  "header": "bitconnect",
  "meta" : {
    "title": "BitConnect coin kurz, aktuální graf a vývoj ceny v BCC/USD/EUR",
    "description": "Graf a vývoj BitConnect kurzu (Dolar/Euro), aktuální graf a kurz kryptoměny BitConnect. Cena BitConnect se neustále mění a tak hodnota BitConnect neustále kolísá",
    "keywords": "BitConnect kurz, BitConnect hodnota, Kurzy BitConnect, BitConnect  obchodování, BitConnect"
  }
{{/settings}}


{{section}}


##BitConnect (BCC) coin kurz - EURO / DOLAR

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
var theUrl = baseUrl+'serve/v3/coin/chart?fsym=BCCOIN&tsyms=USD,EUR';
s.src = theUrl + ( theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
embedder.parentNode.appendChild(s);
})();
</script>

{{/section}}



