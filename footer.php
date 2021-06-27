<footer>
	<div class="container_pp">
		<div class="footer_cols">
			<div class="copyright_footer">
				<p>© Copyright StarTerra. All Rights Reserved.</p>
			</div>
			<div class="sm_footer">
				<ul>
					<li>
						<a href="https://t.me/starterra" target="_blank" rel="nofollow">
						<svg xmlns="http://www.w3.org/2000/svg" width="28.343" height="23.62" viewBox="0 0 28.343 23.62"> <path id="Path_3339" data-name="Path 3339" d="M11.118,58.225l-.469,6.595a1.639,1.639,0,0,0,1.31-.634L15.1,61.18l6.517,4.772c1.2.666,2.037.315,2.36-1.1l4.278-20.044h0c.379-1.767-.639-2.458-1.8-2.024L1.312,52.41c-1.716.666-1.69,1.623-.292,2.056l6.428,2L22.38,47.123c.7-.465,1.342-.208.816.257Z" transform="translate(0.004 -42.658)" fill="#fff"/> </svg>
						</a>
					</li>
					<li>
						<a href="https://twitter.com/StarTerra_io" target="_blank" rel="nofollow">
							<svg xmlns="http://www.w3.org/2000/svg" width="29.065" height="23.617" viewBox="0 0 29.065 23.617"> <path id="twitter" d="M29.141,1465.366c10.968,0,16.967-9.087,16.967-16.967,0-.259,0-.516-.017-.772a12.111,12.111,0,0,0,2.975-3.086,11.892,11.892,0,0,1-3.425.939,5.978,5.978,0,0,0,2.622-3.3,11.932,11.932,0,0,1-3.786,1.447,5.969,5.969,0,0,0-10.162,5.439,16.937,16.937,0,0,1-12.29-6.23,5.967,5.967,0,0,0,1.846,7.959,5.913,5.913,0,0,1-2.706-.745v.076a5.965,5.965,0,0,0,4.784,5.845,5.936,5.936,0,0,1-2.693.1,5.971,5.971,0,0,0,5.572,4.142,11.963,11.963,0,0,1-7.406,2.558,12.2,12.2,0,0,1-1.42-.086,16.885,16.885,0,0,0,9.141,2.674" transform="translate(-20 -1441.749)" fill="#fff"/> </svg>
						</a>
					</li>
					<li>
						<a href="mailto:contact@starterra.io" target="_blank" rel="nofollow">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve"> <g> <g> <path d="M507.49,101.721L352.211,256L507.49,410.279c2.807-5.867,4.51-12.353,4.51-19.279V121    C512,114.073,510.297,107.588,507.49,101.721z"></path> </g> </g> <g> <g> <path d="M467,76H45c-6.927,0-13.412,1.703-19.279,4.51l198.463,197.463c17.548,17.548,46.084,17.548,63.632,0L486.279,80.51    C480.412,77.703,473.927,76,467,76z"></path> </g> </g> <g> <g> <path d="M4.51,101.721C1.703,107.588,0,114.073,0,121v270c0,6.927,1.703,13.413,4.51,19.279L159.789,256L4.51,101.721z"></path> </g> </g> <g> <g> <path d="M331,277.211l-21.973,21.973c-29.239,29.239-76.816,29.239-106.055,0L181,277.211L25.721,431.49    C31.588,434.297,38.073,436,45,436h422c6.927,0,13.412-1.703,19.279-4.51L331,277.211z"></path> </g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> <g> </g> </svg>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
jQuery(function($) {
	$.fn.parallax = function(resistance, mouse) {
	  $el = $(this);
	  TweenLite.to($el, 0.2, {
		x: -((mouse.clientX - window.innerWidth / 2) / resistance),
		y: -((mouse.clientY - window.innerHeight / 2) / resistance)
	  });
	};

	$(document).mousemove(function(e) {
	  /*$(".background").parallax(-30, e);
	  $(".cloud1").parallax(10, e);*/
	  $(".space_paralax2").parallax(45, e);
	  $(".space_paralax").parallax(30, e);
	});
	
	
	$( ".button_mobile svg" ).click(function() {
	  jQuery('.primary_menu_mobile').addClass('show_mobile_menu');
	  jQuery('body').css('overflow-y', 'hidden');
	  jQuery('.overlay_menu').fadeIn('fast');
	});
	$( ".close_mobile_menu svg" ).click(function() {
	  jQuery('.primary_menu_mobile').removeClass('show_mobile_menu');
	  jQuery('body').css('overflow-y', 'auto');
	  jQuery('.overlay_menu').fadeOut('fast');
	});
	$( ".primary_menu_mobile .menu_item a" ).click(function() {
	  jQuery('.primary_menu_mobile').removeClass('show_mobile_menu');
	  jQuery('body').css('overflow-y', 'auto');
	  jQuery('.overlay_menu').fadeOut('fast');
	});
	
	$( ".overlay_menu" ).click(function() {
	  jQuery('.primary_menu_mobile').removeClass('show_mobile_menu');
	  jQuery('body').css('overflow-y', 'auto');
	  jQuery('.overlay_menu').fadeOut('fast');
	});
});
</script>
<script>
  AOS.init({
  once: true,
  mirror: true, 
});

window.scroll({
  top: 2500, 
  left: 0, 
  behavior: 'smooth'
});

// Scroll certain amounts from current position 
window.scrollBy({ 
  top: 100, // could be negative value
  left: 0, 
  behavior: 'smooth' 
});

// Scroll to a certain element
document.querySelector('.hello').scrollIntoView({ 
  behavior: 'smooth' 
});
</script>
</body>
</html>