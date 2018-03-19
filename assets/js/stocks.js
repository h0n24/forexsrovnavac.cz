/**
 * Premium Stock Market Widgets
 * ---------------------------------------------
 * Version 1.5, built on Friday, January 20, 2017
 * Copyright (c) WebTheGap <mail@webthegap.com>. All rights reserved.
 * Demo: http://webthegap.com/products/premium-stock-market-widgets
 * Purchase: https://codecanyon.net/item/premium-stock-market-widgets/18686543?ref=financialtechnology
 * Like: https://www.facebook.com/webthegap/
 */
"use strict";var premiumStockMarketWidgetsPlugin=function(a){function e(e){return m=a(document),p=a(v),f("Initialize",p.length+" widgets"),l(p),0!=p.length&&(m.off("widgetsDataReady",p).off("mouseenter",v+" .smw-combo-table tbody tr"),m.on("widgetsDataReady",p,o).on("mouseenter",v+" .smw-combo-table tbody tr",function(){var e=a(this),t=e.data("symbol"),s=e.closest(v).find(g);s.find("img").hide(),s.find('[data-symbol="'+t+'"]').show()}),a.each(w,function(a,e){f("Clear Interval "+e),clearInterval(e)}),w=[],p.each(function(e,s){var n=a(s),r=parseInt(n.data("refresh-frequency"),10);if(!isNaN(r)&&r>0){var i=setInterval(function(){t(n,!0)},1e3*r);w.push(i),f("Set interval "+i+"("+r+")")}}),void t(p,e))}function t(e,t){var t="undefined"==typeof t||t,o=n(e),l=s(e);r(e),t?(f("Get market data from SERVER",o,l),o.length&&l.length&&a.ajax({url:smwGlobals.ajaxUrl,dataType:"json",data:{action:smwGlobals.ajaxGetMarketData,symbols:o,fields:l},success:function(a){f("Market data received",a),a.success?(k=a.data,i(e,k)):f("ERROR response received",a.data)}})):(f("Get market data from CACHE",o),i(e,k))}function s(e){var t=[];return e.find(h).each(function(e,s){var s=a(s).data("field").replace("_","");a.inArray(s,t)<0&&t.push(s)}),t}function n(e){var t=[];return e.each(function(e,s){for(var n=a(s).data("symbol"),r=n?n.split(","):[],i=0;i<r.length;i++)a.inArray(r[i],t)<0&&t.push(r[i])}),t}function r(e){e.each(function(e,t){var s=a(t).data("dependency");s&&c(smwGlobals.dependencies[s])})}function i(e,t){e.each(function(e,s){var n=a(s);n.find(h).each(function(e,s){var r=a(s),i=r.data("field"),o=r.data("symbol")?r.data("symbol"):n.data("symbol"),l="undefined"!=typeof t[o][i]?t[o][i]:"";r.addClass("smw-field-"+i),r.text(l);var d=r.data("previous-value");"undefined"!=typeof d&&d!=l&&r.animate({opacity:0},200).animate({opacity:1},200).animate({opacity:0},200).animate({opacity:1},200),r.data("previous-value",l)}),n.find(b).each(function(e,s){var r=a(s),i=r.data("symbol")?r.data("symbol"):n.data("symbol"),o="undefined"!=typeof t[i].c1&&"N/A"!=t[i].c1?parseFloat(t[i].c1):0;o>0?r.removeClass("smw-drop").addClass("smw-rise"):o<0?r.removeClass("smw-rise").addClass("smw-drop"):r.removeClass("smw-drop smw-rise")})}),e.trigger("widgetsDataReady")}function o(e){var t=a(e.target);f("widgetsDataReady",t.attr("class")),t.hasClass("smw-visible")||t.addClass("smw-visible")}function l(a){a.each(function(a,e){var t=e.className.split(/\s+/);t.length>=3&&d(smwGlobals.pluginUrl+"templates/"+t[1].substr(4)+"/"+t[2].substr(4)+"/style.css")})}function d(e){a.inArray(e,C)<0&&(f("Loading CSS file",e),a("<link>").appendTo("head").attr({type:"text/css",rel:"stylesheet",href:e}),C.push(e))}function c(e,t){"undefined"==typeof G[e]&&(f("Loading JS file",e),G[e]=a.ajax({url:e,dataType:"script",cache:!0})),"undefined"!=typeof t&&G[e].done(t)}function u(a,e,t){if(a.hasClass(y+"-Int")||a.hasClass(y+"-Float")||a.hasClass(y+"-Percent"))return parseFloat(e.text().replace(/[^0-9.-]/g,""));if(a.hasClass(y+"-BigNumber")){var s={K:1e3,M:1e6,B:1e9},n=e.text(),r=n.substr(-1);if(s.hasOwnProperty(r))var i=parseFloat(n.replace(/[^0-9.]/g,""))*s[r];else var i=parseFloat(n.replace(/[^0-9.]/g,""));return i}return e.text()}function f(){0!=smwGlobals.debug&&console.log(arguments)}f("globals",smwGlobals);var m,p,y=smwGlobals.code,v="."+y,g="."+y+"-chart-container",h="."+y+"-market-data-field",b="."+y+"-change-indicator",w=[],C=[],G={},k=[];return a(document).ready(function(){e(!0)}),{init:e,getMarketData:function(){return k},getWidgetContainers:function(){return p},getWidgetsFields:s,loadVendorPlugin:c,tablesortGetValue:u,log:f}}(jQuery);