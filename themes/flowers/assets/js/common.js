jQuery(document).ready(function(){

	//ajax update reviews
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

	//order-form
	$('#catalog').on('click', '.set-order', function(e){
		e.preventDefault();

		var id = $(this).data('good');
		$('#order-form input:text').val('');
		$('#order-form').find('.good-id').val(id);

		$.fancybox.open('#order-form');
	});

	//show all items catalog
	$("#catalog .nav ul").append('<li><a class="show-all" href="/site/index?ajax=catalog-items&show_all=1">Показать все</a></li>');
	$('#catalog').on('click', '.show-all', function(e){
		e.preventDefault();
		$('.keys').attr('/?show');
		// $.ajax({
		// 	url: '/site/index',
		// 	type: 'GET',
		// 	data: {ajax: 'catalog-items', show_all: true},
		// 	success: function(result){
		// 		$('#catalog .items').html(result);
		// 	}
		// });
	});

	//phone form
	$('.get-call').on('click', function(e){
		e.preventDefault();
		$.fancybox.open('#phone-form');
	});

	//filter catalog
	$('.filter').on('change', 'select', function(){
		$.ajax({
			url: '/site/filterCatalog',
			type: 'POST',
			data: $('#catalog-filter').serialize(),
			success: function(result){
				$('#catalog .items').html(result);
			}
		});
	});
});