		<style>
			body {padding-top:0;}
			.navbar-fixed-top, .jumbotron {position:relative;margin-top:0;}
			#ban_x1 * {position:relative;font-family: Roboto, sans-serif!important;font-weight:normal!important;}
			#ban_x1 ul, #ban_x1 ul li {display: block;margin:0;padding:0;font-size:14px!important;}
			#ban_x1 ul li {padding-left: 20px;background: url(//www.forexsrovnavac.cz/assets/img/banner/li_ban.jpg) no-repeat left center;line-height:1.5!important;}
			#ban_x1 a {display:block;color:#666666!important;text-decoration:none;float:none;margin:auto;max-width:1140px;}
			#ban_x1 {border:0;text-align:center;overflow:hidden;background:#fff;padding-right:20px}
			#ban_x1 .clear {clear:both;float:none;}
			#ban_x1 .clear.mobile {display:none;}
			#ban_x1 .inner {padding:12px;text-align:left;}
			#ban_x1 .col20, #ban_x1 .col30 {float:left;width:20%;}
			#ban_x1 .col30 {width:30%}
			#ban_x1 .btn {display:block;padding: 8px;background:#5dc646;color:#fff!important;text-transform:uppercase;text-align:center;font-size:20px;line-height:1;margin-bottom:4px;}
			#ban_x1 .small {display:block;font-size:11px;line-height:1.2;}
			#ban_x1 .col30 .small {letter-spacing: 1px;font-size: 12px;}
			#ban_x1 .col30 img {top: 0}
			#ban_x1 .col20 img {display:block;margin:0;padding:0;width: auto;height:100%;}
			#ban_x1 h3 {margin:0;padding:0;font-weight:bold!important;font-size:36px;line-height: 1.2;color:#666666!important;}
			#ban_x1 .ic_close {display: block;width: 32px;height:32px;position:absolute;top:0;right:0;
			background: url(//www.forexsrovnavac.cz/assets/img/banner/ic_close_grey600_48dp.png) no-repeat center center;background-size: auto 16px;
			cursor:pointer;
			}		
			
			@media only screen and (max-width:925px){
			#ban_x1 .col30, #ban_x1 .col20 {width: 33.333333%;}
			#ban_x1 .col20:first-child {display:none;}
			}
			@media only screen and (max-width:820px){
			#ban_x1 h3 {font-size: 30px;}
			}
			@media only screen and (max-width:700px){
			#ban_x1 .col30:nth-child(4) {display:none;}
				#ban_x1 h3 {font-size: 20px;}
			#ban_x1 .col30, #ban_x1 .col20 {width: 50%;}
			#ban_x1 .col20 .small {font-size: 9px;}
			}
			@media only screen and (max-width:400px){
			#ban_x1 h3 {font-size: 16px;padding-top:4px;}
			#ban_x1 .btn {font-size: 16px;}
			}
			
		</style>
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script>
			$(document).ready(function() {
			
			var pathname = window.location.pathname;			
			
		$('#ban_x1 .ic_close').click(function() {
			$('#ban_x1').hide();
			setCookie('cookies_ad','yes','/');
			
		});
		
        function setCookie(key, value, pathname) {
            var expires = new Date();
			//pathname = window.location.pathname;
            expires.setTime(expires.getTime() + (1 * 24 * 60 * 60 * 1000));
            document.cookie = key + '=' + value +';path='+pathname+''+ ';expires=' + expires.toUTCString();
        }

		if(pathname!='/') {
			setCookie('cookies_ad','yes',pathname);	
		}
		
});
		</script>
		<div class="test"></div>
		<div id="ban_x1">
			<a href="http://serv.markets.com/promoRedirect?key=ej0xNTk1ODM1OSZsPTE1OTU4MzI0JnA9MTAxNjA%3D" target="_blank">
				<div class="col20">
					<img src="//www.forexsrovnavac.cz/assets/img/banner/coin_ban.jpg" alt="" />
				</div>
				<div class="col30">
					<div class="inner">
						<span class="small">Dostupné na <img src="//www.forexsrovnavac.cz/assets/img/banner/logo_ban.jpg" alt="" /></span>
						<h3>Bitcoin Trading</h3>
					</div>
				</div>
				<div class="clear mobile"></div>
				<div class="col30">
					<div class="inner">
						<ul>
							<li>Zabezpečená obchodní platforma</li>
							<li>Není potřeba Bitcoin peněženka</li>
							<li>Velké množství metod pro vklad a výběr</li>
						</ul>
					</div>
				</div>
				<div class="col20">
					<div class="inner">
						<span class="btn">Založit účet</span>
						<span class="small">Obchodování s CFD Kryptoměn nese značné riziko ztráty kapitálu.</span>
					</div>
				</div>
				<div class="clear"></div>
			</a>
			<span class="ic_close"></span>
		</div>