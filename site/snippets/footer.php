<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
var elem = document.querySelector('.grid');
var msnry = new Masonry( elem, {
  // options
  itemSelector: '.grid-item',
  columnWidth: 500,
});

// element argument can be a selector string
//   for an individual element
var msnry = new Masonry( '.grid', {
  // options
    gutter: 60,
    fitWidth: true
});
</script>
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
