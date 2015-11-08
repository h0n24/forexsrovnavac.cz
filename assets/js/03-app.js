window.onload = function() { //$(document).ready(function () {
  $('.navbar a').smoothScroll();
  $('.created-by').tooltip();
  $('.carousel').carousel({interval: 0});
  $('.brokeri td').hover(function() {
    var u = parseInt($(this).index());
    var t = u + 1;
    $('.brokeri td:nth-child('+t+')').addClass('highlighted');
    $('.brokeri td:nth-child('+u+'), .brokeri th:nth-child('+u+')').addClass('highlighted-prev');
  },
  function() {
    var u = parseInt($(this).index());
    var t = u + 1;
    $('.brokeri td:nth-child('+t+')').removeClass('highlighted');
    $('.brokeri td:nth-child('+u+'), .brokeri th:nth-child('+u+')').removeClass('highlighted-prev');
  });

  if ($('.table-kurzy').length) {
    var feedsInterval = setInterval(function(){
      $.getJSON('./assets/php/get.php', function(data) {
      var items = [];
        for (var i=0;i<Object.keys(data).length;i++) {
          $.each(data[i], function(key, val) {
            if (key == "P") { 
              var j = '#'+key+i;
              $(j).html(val + '%'); 
            }
            else {
              var j = '#'+key+i;
              $("body").find(j).html(val);
            }
          });
        }
      });
    },1000);
  };

  
  $(window).scroll(function () {
    if ($('.navbar-sticky').length) {
      if ($(window).scrollTop() > 700) {
        $('.navbar-sticky').addClass('navbar-fixed-top');
      }

      if ($(window).scrollTop() < 701) {
        $('.navbar-sticky').removeClass('navbar-fixed-top');
      }
    };
  });

});