$(function(){
	$("#form").validate({
		rules: {
			name: {
				required: true,
				minlength: 3
			},
			company: {
				required: true
			},
			subject: {
				required: true,
				minlength: 3
			},
			email: {
				required: true,
				email: true
			},
			message: {
				required: true
			}
		},
		messages: {
			name: {
				required: 'Pole wymagane',
				minlength: 'Minimalna długość: 3'
			},
			company: {
				required: 'Pole wymagane'
			},
			subject: {
				required: 'Pole wymagane',
				minlength: 'Minimalna długość: 3'
			},
			email: 'Nieprawidłowy adres e-mail',
			message: {
				required: 'Pole wymagane'
			}
		},
		success: function(label) {
			label.html('OK').removeClass('error').addClass('ok');
			setTimeout(function(){
				label.fadeOut(500);
			}, 2000)
		}
	});
});