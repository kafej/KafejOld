$(function(){
	var li = $('.mess').find('li');
	var dupcia = $('.avatarki').find('ul');
			
	var mess = {
		random: function(low, up){
			return Math.floor((Math.random()*(low-up+1))+up);
		},
		css: function(){
			var rotate = this.random(-20, 20),
				zindex = this.random(0, li.length),
				degrees = 'rotate('+rotate+'deg)';
			return {'degrees': degrees, 'zindex': zindex }
		},
		degrees: function(element){
			var random = this.css();
			$(element).css({
				'-webkit-transform': random.degrees,
				'-moz-transform': random.degrees,
				'-o-transform': random.degrees,
				'z-index': random.zindex
			});
		},
		animate: function(element, x, y){
			$(element).animate({
				top: y,
				left: x
			}, 700);
		}
	}
	var mess2 = {
		random: function(low, up){
			return Math.floor((Math.random()*(low-up+1))+up);
		},
		css: function(){
			var rotate = this.random(-0, 0),
				zindex = this.random(0, li.length),
				degrees = 'rotate('+rotate+'deg)';
			return {'degrees': degrees, 'zindex': zindex }
		},
		degrees: function(element){
			var random = this.css();
			$(element).css({
				'-webkit-transform': random.degrees,
				'-moz-transform': random.degrees,
				'-o-transform': random.degrees,
				'z-index': random.zindex
			});
		},
	}	
	li.each(function(){
		mess.degrees($(this));
	});
	$('#zamknij11').click(function(){
		li.each(function(){
			mess.animate($(this), 0, 0);
			mess.degrees($(this));
		});
		$('.make').text('Kliknij mnie');
		$('.make').mouseover(function() {
			$('.make').text('Kliknij mnie');
		}).mouseout(function() {
			$('.make').text('Kliknij mnie');
		});
		$('.make').removeClass('hoverek');
		$('.make').removeAttr('style');
		$('#wyrownaj').css('display', 'none');
		$('#pobierz').css('display', 'none');
		$('.cv1').draggable({ cursor: 'auto' });
		$('.cv1').draggable('destroy');
		return false;
	});
	$('#wyrownaj').mouseover(function() {
		$(this).text('Wyrównaj');
	}).mouseout(function() {
		$(this).text('Wyró');
	});
	$('#pobierz').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Pobierz');
	}).mouseout(function() {
		$(this).text('Pobi');
	});
	$('#toeicl, #szkoll, #ichi, #ni, #san').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Strona');
	}).mouseout(function() {
		$(this).text('Stro');
	});
	$('#toeicll, #szkolll, #ichii, #nii, #sann').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Wiki');
	}).mouseout(function() {
		$(this).text('Wiki');
	});
	$('#przesunA').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Przesuń');
	}).mouseout(function() {
		$(this).text('Prze');
	});
	$('#avatary').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Avatary');
	}).mouseout(function() {
		$(this).text('Avat');
	});
	$('#resecikA').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Reset');
	}).mouseout(function() {
		$(this).text('Rese');
	});
	$('#sygnatury').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Sygnatury');
	}).mouseout(function() {
		$(this).text('Sygn');
	});
	$('#tla').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Tła');
	}).mouseout(function() {
		$(this).text('Tła');
	});
	$('#banery').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Banery');
	}).mouseout(function() {
		$(this).text('Bane');
	});
	$('#tapety').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Tapety');
	}).mouseout(function() {
		$(this).text('Tape');
	});
	$('#rendery').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Rendery');
	}).mouseout(function() {
		$(this).text('Rend');
	});
	$('#opisG').mouseover(function() {
		$(this).addClass("wycentrowanie");
	}).mouseout(function() {
	});
	$("#przesunA").toggle(function() 
	{
		$('.avatarki ul').draggable();
		$('.przesuntap').draggable();
	}, function() 
	{
		$('.przesuntap').draggable('destroy');
		$('.avatarki ul').draggable('destroy');
	});
	$('#wyrownaj').click(function()
	{
		li.each(function(){
			mess2.degrees($(this));
		});	
	});
	$('.make').one('click', function() {
		$(this).text('Przet');
	});
	$('.make').click(function(){
		li.each(function(){
			var t = $(this), x = mess.random(-500, 400), y = mess.random(-100, 220);
			mess.animate(t, x, y);
			mess.degrees(t);
		});
		$('#wyrownaj').show(1000);
		$('#pobierz').show(1000);
		$(this).addClass('hoverek');
		$(this).css('margin-left', '-46px');
		$(this).animate({
			left: "100%",
			marginTop: "110px"
		}, 1000, function() {
			$('.make').text('Przet');
			$(this).mouseover(function() {
				$(this).text('Przetasuj');
			}).mouseout(function() {
				$(this).text('Przet');
			});
			$(this).css('width', '26px');
			$(this).css('border-radius', '40px 0 0 40px');			
		});
	});		
});