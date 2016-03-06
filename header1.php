<div class="Header">
	<div class="Header-top">
	 	<div class="Header-logo">	 		
			<h1>
				<a href="http://localhost/index/" class="Header-link"><?php bloginfo('title' ); ?>
				</a>
				<span><?php bloginfo('description'); ?></span>

			</h1>			
	  	</div>
	  	<div class="Header-menu">
	  		<div class="Header-menu_desktop">
	  			<?php include TEMPLATEPATH . '/nav.php' ?>
	  		</div>
	  		<label class="Header-label" for="menu">
	  			<span class="icon-menu"></span>
	  		</label>
	  		<input type="checkbox" class="check" id="menu">
	  		<div class="Header-navResponse">
				<?php include TEMPLATEPATH . '/nav.php' ?>
			</div>
		</div>
	</div>	
</div>


<script>
	function subMenu () {    
	    $('.sub-menu').toggle();
	};

	// function closeContact () {    
	//     $('.Contact').fadeOut(1000);
	// };

	// $('.Header-contact, .Footer-contact').click( openContact );

	$('.menu-item-192').click( subMenu );
</script>
