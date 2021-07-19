$('.voto label i.fa').on('click mouseover', function(){

	$('.voto label i.fa').removeClass('active');

	var val = $(this).prev('input').val();

	$('.voto label i.fa').each(function(){

		var $input = $(this).prev('input');

		if($input.val() <= val){
			$(this).addClass('active');
		}
	});
});

$('.voto').mouseleave(function(){

	var val = $(this).find('input:checked').val();

	if (val == undefined){

		$('.voto label i.fa').removeClass('active');

	}else{

		$('.voto label i.fa').each(function(){

			var $input = $(this).prev('input');

			if ($input.val() > val){

				$(this).removeClass('active');

			}else{

				$(this).addClass('active');
			}
		});
	}
});