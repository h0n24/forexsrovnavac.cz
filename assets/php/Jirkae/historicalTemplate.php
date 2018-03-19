<?  $last_month=date("Y-m-d",strtotime("-1 months"));
$today=date("Y-m-d",strtotime("-1 day"));

$start = strtotime($last_month);
$end = strtotime($today);
$result = array();
while ($start <= $end) {
    if (date('N', $start) <= 5) {
        $current = date('Y-m-d', $start);
        $result[$current] = 1;
    }
    $start += 86400;
}

 ?>

<table id="historical_table" class="sm-sortable-table">
      <thead>
      <tr>
        <th>Symbol</th>
        <th>Company</th>
        <th>Historical Date</th>
        <th class="float">Historical Price</th>
        <th class="float">Current Price</th>
        <th class="float">Change</th>
        <th class="float">Change (%)</th>
      </tr>
      </thead>
      <tbody>
     <?php 
     foreach (array_reverse($result) as $key=>$value) {
   ?>
   <tr class="sm-widget" data-type="historicalPerformance" data-add-to-class="from" data-symbol="AAPL" data-from="<?php echo $key; ?>">
        <td><span class="sm-data-property" data-property="Symbol"></span></td>
        <td><span class="sm-data-property" data-property="Name"></span></td>
        <td><span class="sm-data-property" data-property="Date"></span></td>
        <td><span class="sm-data-property" data-property="historicalPrice" data-callback="smFormatNumber" data-callback-arguments="2,$"></span></td>
        <td><span class="sm-data-property" data-property="LastTradePriceOnly" data-callback="smFormatNumber" data-callback-arguments="2,$"></span></td>
        <td><span class="sm-data-property" data-property="historicalPerformance" data-callback="smFormatNumber" data-callback-arguments="2,$"></span></td>
        <td><span class="sm-data-property" data-property="historicalPerformancePercent" data-callback="smFormatNumber" data-callback-arguments="0,,%"></span></td>
      </tr>
   <?php
}
     
     ?>                                                                                                      
      
     
     <script>
            $(function(){
              $('#historical_table tr').each(function() {     console.log("zde");
    if ($(this).find('td span:empty').length) $(this).remove();
});​
              });
              
                        
        </script>   

      </tbody>
    </table> 