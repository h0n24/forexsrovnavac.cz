{{settings}}
"language": "cs",
"templateFile": "kurzyDetailLayout",
"header": "kurzyNew",
"footer_left": "kurzyLeft",
"pageTitle": "Akcie Fortuna",
"detail" : {
    "ticker": "FOREG:PSE",
    "burza": "BURZA CENNÝCH PAPÍRŮ PRAHA (PSE)",
    "odvetvi": "SPOTŘEBA/GAMBLING"
},
"meta" : {
    "title": "Akcie Apple Inc - aktuální graf a vývoj ceny, diskuze",
    "description": "Apple Inc",
    "keywords": "Akcie Apple"
}
{{/settings}}

    
<h2>Apple Inc - aktuální graf a vývoj ceny akcií</h2>




> Společnost Apple byla založena v roce 1976 a pod vedením Steva Jobse a Tima Cooka se vyvinula z malé garážové firmy ve světovou jedničku v oblasti spotřební elektroniky. Apple je v současnosti největší firmou světa. 

> Akcie společnosti apple těží především z prodejů mobilních telefonů iPhone, které společně s iPady patří k nejúspěšnějším produktům firmy. Při uvádění nového typu těchto produktů na trh lidé dokonce neváhají čekat před obchody ve frontách i několik desítek hodin. 

        
<div id="mainBox">
    <div>
  
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Graf vývoje</a></li>
            <li role="presentation"><a href="#statistics" aria-controls="statistics" role="tab" data-toggle="tab">Statistiky Apple</a></li>       
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Další americké akcie</a></li>            
            <li role="presentation"><a href="#discussion" aria-controls="discussion" role="tab" data-toggle="tab">Diskuze</a></li> 
              
      
        </ul>

             <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="iframeContainer tradingview" style="height: 600px;">                                
                    <!-- TradingView Widget BEGIN -->                    
                    <iframe src="http://marketools.plus500.com/Widgets/InstrumentChartContainer?hl=cs&cty=CZ&id=66349&tags=widg+chart&pl=2&instSymb=AAPL" style="height: 600px; border: none;" scrolling="no"></iframe>
                    <!-- TradingView Widget END -->                    
                </div>
                
                {{partial: kurzy/detail-alert}}
                <div class="googleFeedContainer">
                    {{googleFeed url=>"https://www.google.com/finance/company_news?q=NASDAQ:AAPL&ei=lv8AWNiUNcGBsgGwjY8o&output=rss"}}                    
                </div>
                <div class="clear"></div>
            </div>
            <div role="tabpanel" class="tab-pane" id="profile">
                {{partial: kurzy/us-akcie}}
            </div>
            <div role="tabpanel" class="tab-pane" id="discussion">
                {{discussion}}
            </div>
             <div role="tabpanel" class="tab-pane" id="statistics">
           <table style="width:100%" class="sm-sortable-table sm-widget" data-type="stats" data-symbol="AAPL" data-loader="true">
      <thead>            
        <tr>
          <th>Attribute</th>
          <th>Value</th>              
        </tr>              
      </thead>
      <tbody>
            
        <tr>
          <td><strong title="Celkové příjmy podniku z prodeje některých dané množství výrobku">Total Revenue</strong></td>
          <td><span class="sm-data-property" data-property="financialData.totalRevenue"></span></td>
        </tr>       

        <tr>
          <td>Return on Assets</td>
          <td><span class="sm-data-property" data-property="financialData.returnOnAssets"></span></td>
        </tr>

        <tr>
          <td>Return on Equity</td>
          <td><span class="sm-data-property" data-property="financialData.returnOnEquity"></span></td>
        </tr>
        
        <tr>
          <td>Enterprise Value</td>
          <td><span class="sm-data-property" data-property="defaultKeyStatistics.enterpriseValue"></span></td>
        </tr>
        
        <tr>
          <td>Total Cash</td>
          <td><span class="sm-data-property" data-property="financialData.totalCash"></span></td>
        </tr>

        <tr>
          <td>Book Value</td>
          <td><span class="sm-data-property" data-property="defaultKeyStatistics.bookValue"></span></td>
        </tr>

        <tr>
          <td>EBITDA</td>
          <td><span class="sm-data-property" data-property="financialData.ebitda"></span></td>
        </tr>

        <tr>
          <td>Total Debt</td>
          <td><span class="sm-data-property" data-property="financialData.totalDebt"></span></td>
        </tr>

        <tr>
          <td>Total Cash Per Share</td>
          <td><span class="sm-data-property" data-property="financialData.totalCashPerShare"></span></td>
        </tr>

        <tr>
          <td>Revenue Per Share</td>
          <td><span class="sm-data-property" data-property="financialData.revenuePerShare"></span></td>
        </tr>

      </tbody>
    </table> 
            </div>     
            
        </div>

    </div>
</div>