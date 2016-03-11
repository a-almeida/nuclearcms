<script src="<?=PUBLICPATH?>assets/js/nuclear.bootstrap.js"></script>
        <script src="<?=PUBLICPATH?>statics/js/theme.js"></script>
         <script src="<?=PUBLICPATH?>assets/js/vendor/paralax/parallax.js"></script>
        <script src="<?=PUBLICPATH?>assets/js/vendor/datapicker/bootstrap-datepicker.js"></script>    
    	<script src="<?=PUBLICPATH?>assets/js/vendor/datapicker/bootstrap-datepicker.pt.min.js" ></script>
		  <script src="<?=PUBLICPATH?>assets/js/vendor/slider2/jquery.dbpas.carousel.js"></script>
		  
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/plugins/ScrollToPlugin.min.js"></script>
    <script src="<?=PUBLICPATH?>assets/js/vendor/smooth/smoothPageScroll.js"></script>

 <script>


 $(function() {
	  $('a[href*="#"]:not([href="#"])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});

</script>


    </body>
</html>