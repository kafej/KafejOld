$(function(){
	var li = $('.mess').find('li');
	var dupcia = $('.avatarki').find('ul');
			
	var mess = {
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
		$('.make').text('Click me');
		$('.make').mouseover(function() {
			$('.make').text('Click me');
		}).mouseout(function() {
			$('.make').text('Click me');
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
		$(this).addClass("wycentrowanie");
		$(this).text('Align');
	}).mouseout(function() {
		$(this).text('Align');
	});
	$('#pobierz').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Download');
	}).mouseout(function() {
		$(this).text('Down');
	});
	$('#toeicl, #szkoll, #ichi, #ni, #san').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('WWW');
	}).mouseout(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('WWW');
	});
	$('#toeicll, #szkolll, #ichii, #nii, #sann').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Wiki');
	}).mouseout(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Wiki');
	});
	$('#przesunA').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Moving');
	}).mouseout(function() {
		$(this).text('Movi');
	});
	$('#avatary').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Avatars');
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
		$(this).text('Signatures');
	}).mouseout(function() {
		$(this).text('Sygn');
	});
	$('#tla').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Backgrounds');
	}).mouseout(function() {
		$(this).text('Back');
	});
	$('#banery').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Banners');
	}).mouseout(function() {
		$(this).text('Bann');
	});
	$('#tapety').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Wallpaper');
	}).mouseout(function() {
		$(this).text('Wall');
	});
	$('#rendery').mouseover(function() {
		$(this).addClass("wycentrowanie");
		$(this).text('Renders');
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
		$(this).text('Shuf');
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
			$('.make').text('Shuf');
			$(this).mouseover(function() {
				$(this).text('shuffle');
			}).mouseout(function() {
				$(this).text('Shuf');
			});
			$(this).css('width', '26px');
			$(this).css('border-radius', '40px 0 0 40px');			
		});
	});		
});