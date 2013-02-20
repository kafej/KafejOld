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
				required: 'Required field',
				minlength: 'Minimum length: 3'
			},
			company: {
				required: 'Required field'
			},
			subject: {
				required: 'Required field',
				minlength: 'Minimum length: 3'
			},
			email: 'Incorrect e-mail',
			message: {
				required: 'Required field'
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