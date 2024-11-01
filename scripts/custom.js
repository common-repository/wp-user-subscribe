(function($){

	jQuery(document).ready(function(){
		jQuery(".cross").on('click', function(){
			jQuery('#main-area').hide();

			return false;
		});

	})

}(jQuery))