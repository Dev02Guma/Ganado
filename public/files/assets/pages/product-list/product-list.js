  'use strict';
 $(document).ready(function() {
        $('#e-product-list').DataTable();
        
        $(".save_btn").on("click", function() {
				
				$('.pname').val('');
				$('.jFiler-items').css('display','none');
				$('.stock').val('');
				$('.pamount').val('');
				$("#modal-13").modal('hide');
	
			});
        $(".close_btn").on("click", function() {
				$('.pname').val('');
				$('.jFiler-items').css('display','none');
				$('.stock').val('');
				$('.pamount').val('');
			});
    } );
