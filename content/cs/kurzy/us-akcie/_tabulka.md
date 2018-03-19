{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "ZYNGA",
"detail" : {
    "ticker": "NASDAQ:ZNGA",
    "burza": "US",
    "odvetvi": "ODVETVI"
},
"meta" : {
    "title": "ZYNGA",
    "description": "ZYNGA",
    "keywords": "ZYNGA"
}
{{/settings}}


<table class="sm-sortable-table">
      <thead>            
        <tr>
          <th>Symbol</th>
          <th>Company</th>
          <th class="float">Last price</th>
          <th class="float">Change</th>
          <th class="float">Change (%)</th>
          <th class="float">Open</th>
          <th class="float">Low</th>
          <th class="float">High</th>
          <th class="integer">Volume</th>              
        </tr>              
      </thead>
      <tbody>
            
<tr class="sm-widget" data-symbol="AAPL" data-type="quote">
<td><a href="tvujlink" class="sm-data-property" data-property="Symbol"></a></td>
<td><span class="sm-data-property" data-property="Name"></span></td>
<td><i class="caret sm-icon"></i><span class="sm-data-property" data-property="LastTradePriceOnly" data-callback="parseFloat"></span></td>
<td><span class="sm-data-property" data-property="Change" data-callback="parseFloat"></span></td>
<td><span class="sm-data-property" data-property="PercentChange" data-callback="parseFloat"></span></td>
<td><span class="sm-data-property" data-property="Open" data-callback="parseFloat"></span></td>
<td><span class="sm-data-property" data-property="DaysLow" data-callback="parseFloat"></span></td>
<td><span class="sm-data-property" data-property="DaysHigh" data-callback="parseFloat"></span></td>
<td><span class="sm-data-property" data-property="Volume" data-callback="parseInt"></span></td>
</tr>





</tbody>
</table>

        
   