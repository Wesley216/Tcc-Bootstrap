$('.filter-btn').on('click', function(){
	
	let type = $(this).attr('id');
	let boxes = $('.project-box');

	$('.main-btn').removeClass('active');
	$(this).addClass('active');

	if(type == 'bot-trad'){

		eachBoxes('trad', boxes);

	}else if(type == 'bot-prem'){

		eachBoxes('prem', boxes);

	}else if(type == 'bot-sup'){

		eachBoxes('sup', boxes);

	}else if(type == 'bot-doc'){

		eachBoxes('doc', boxes);

	}else{

		eachBoxes('all', boxes);
	}
});


function eachBoxes(type, boxes){

	if(type == 'all'){

		$(boxes).fadeIn();

	}else{

		$(boxes).each(function(){

			if(!$(this).hasClass(type)){

				$(this).fadeOut('slow');

			}else{

				$(this).fadeIn();
			}
		});
	}
}