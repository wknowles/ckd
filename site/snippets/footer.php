<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $('a[href^="#"]').on('click',function (e) {
        e.preventDefault();

        var target = this.hash;
        var $target = $(target);

        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900, 'swing');
    });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
  var  mainNav = $(".main-nav");
      navStick = "nav-stick";
      headerHeight = $('header').height();

  $(window).scroll(function() {
    if( $(this).scrollTop() > (headerHeight / 1.333 )) {
      mainNav.addClass(navStick);
    } else {
      mainNav.removeClass(navStick);
    }
  });
});
</script>
<script>
$(document).ready(function(){
  $('a').click(function(){
    $('a').removeClass("active");
    $(this).addClass("active");
});
});
</script>
</body>
</html>
