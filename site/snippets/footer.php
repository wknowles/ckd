<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
var elem = document.querySelector('.grid');
var msnry = new Masonry( elem, {
  // options
  itemSelector: '.grid-item',
  columnWidth: 380,

});

// element argument can be a selector string
//   for an individual element
var msnry = new Masonry( '.grid', {
  // options
    gutter: 30,
    fitWidth: true
});
</script>
</body>
</html>
