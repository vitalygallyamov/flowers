jQuery(document).ready(function(){
	$('.update-reviews').on('click', function(e){
		e.preventDefault();
		var link = $(this);
		var page = link.data('page');
		var offset = $('.r_offset').val();

		if(parseInt(offset) > 0)	page = 1;
		
		$.ajax({
			url: '/site/updateReviews',
			type: 'GET',
			data: {Reviews_page: page},
			dataType: 'html',
			success: function(result){
				$('.reviews-block').html($(result));
				// console.log($(result).find('.r_offset'));
				// $('.r_offset').val($(result).find('.r_offset').val());
				
				link.data('page', page+1);
			}
		});
	});
});