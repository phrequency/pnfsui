jQuery( document ).ready(function( $ ) {
  // Code using $ as usual goes here.

$('img').each(function(){
	console.log('boo');
	$(this).bind('error', function() {
	   console.log('image did not load');
	});
});


$('.descr-inner img').each(function(){
	$(this).wrap('<div class="item-thumb-wrapper" />');
});


$('.more').on('click','a',function(e){
	$(this).parent().next('.secondary').slideToggle(750);
});


$('.sidebar.menu')
//.sidebar({overlay: true})
  .sidebar('attach events', '.menu.trigger')
;

});