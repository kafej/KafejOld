<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kafej</title>
	<meta name="description" content="Kafej">
	<link rel="shortcut icon" href="img/k.ico">
	<link href="css/default.css" rel="stylesheet" type="text/css" />
	<link href="css/jquery-ui-1.8.12.custom.css" rel="stylesheet" type="text/css"/>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.8.12.custom.min.js" type="text/javascript"></script>
	<script src="js/validate.min.js" type="text/javascript"></script>
	<script src="js/init.js" type="text/javascript"></script>
	<script src="js/browser.js" type="text/javascript"></script>
	<script src="js/galeria.js" type="text/javascript"></script>
	<script src="js/mess.js" type="text/javascript"></script>
	<script src="js/waypoints.min.js" type="text/javascript"></script>
	<script src="js/modernizr.custom.js" type="text/javascript"></script>
	<script src="js/menu.expbuilder.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.gridnav.js"></script>
	<script type="text/javascript" src="js/plax.js"></script>
	<script type="text/javascript" src="js/jquery.toastmessage.js"></script>
	<script type="text/javascript" src="js/easyzoom.min.js"></script>
<script type="text/javascript">
	var pole=new Array(16);
	var koniec=0;
	var x1=0;
	var y1=0;
	var numRuchu = 0;
	var pole2=new Array(9);
	var koniec2=0;
	var zuo1=0;
	var zuo2=0;
	var numRuchu2 = 0;
	$(window).load(function()
		{
			$('body').css('cursor', 'wait');
			setTimeout(function() { 
				$('body').css('cursor', 'auto');
			}, 1100);
			setTimeout(function() { 
				$().toastmessage('showToast', {
					text     : '<li><b>16.10.2012</b> - full validation according to W3C standards (HTML5/CSS3)<br /></li><li><b>This project was created to <br />"play" with jQuery</b></li><li>There is a difference between minimizing and closing ;)</li><li><b>Enjoy !!</b></li>',
					sticky   : true,
					position : 'top-left',
					type     : 'notice',
					closeText: '',
					close    : function () {console.log("toast is closed ...");}
				});
			}, 500);
			setTimeout(function() { 
				$().toastmessage('showToast', {
					text     : 'Press the right mouse button :)',
					sticky   : false,
					position : 'top-left',
					type     : 'warning',
					closeText: '',
					close    : function () {console.log("toast is closed ...");}
				});
			}, 1400);
			$('#prezentacjel').one('click', function() {
				$().toastmessage('showToast', {
					text     : 'These are only two effective examples...',
					sticky   : false,
					position : 'top-left',
					type     : 'warning',
					closeText: '',
					close    : function () {console.log("toast is closed ...");}
				});
			});
			$('#lszkoly4').one('click', function() {
				$().toastmessage('showToast', {
					text     : 'Move your mouse over the image to enlarge',
					sticky   : false,
					position : 'top-left',
					type     : 'warning',
					closeText: '',
					close    : function () {console.log("toast is closed ...");}
				});
			});
			$('#certyfikat').one('click', function() {
				$().toastmessage('showToast', {
					text     : 'Move your mouse over the image to enlarge',
					sticky   : false,
					position : 'top-left',
					type     : 'warning',
					closeText: '',
					close    : function () {console.log("toast is closed ...");}
				});
			});
			$('#jlpt41').one('click', function() {
				$().toastmessage('showToast', {
					text     : 'Move your mouse over the image to enlarge',
					sticky   : false,
					position : 'top-left',
					type     : 'warning',
					closeText: '',
					close    : function () {console.log("toast is closed ...");}
				});
			});
			$('#jlptn41').one('click', function() {
				$().toastmessage('showToast', {
					text     : 'Move your mouse over the image to enlarge',
					sticky   : false,
					position : 'top-left',
					type     : 'warning',
					closeText: '',
					close    : function () {console.log("toast is closed ...");}
				});
			});
			$('#jlptn42').one('click', function() {
				$().toastmessage('showToast', {
					text     : 'Move your mouse over the image to enlarge',
					sticky   : false,
					position : 'top-left',
					type     : 'warning',
					closeText: '',
					close    : function () {console.log("toast is closed ...");}
				});
			});
			$('#link2 a').one('click', function() {
				$().toastmessage('showToast', {
					text     : 'You are rich and want to have page like this. ?',
					sticky   : false,
					position : 'top-left',
					type     : 'warning',
					closeText: '',
					close    : function () {console.log("toast is closed ...");}
				});
				setTimeout(function() { 
					$().toastmessage('showToast', {
						text     : 'Do you have an interesting offer ?',
						sticky   : false,
						position : 'top-left',
						type     : 'warning',
						closeText: '',
						close    : function () {console.log("toast is closed ...");}
					});
				}, 2700);
				setTimeout(function() { 
					$().toastmessage('showToast', {
						text     : '...so dont forget to write about it.',
						sticky   : false,
						position : 'top-left',
						type     : 'warning',
						closeText: '',
						close    : function () {console.log("toast is closed ...");}
					});
				}, 5700);
			});
			jQuery.fn.resetForm = function () 
			{
			  $(this).each (function() { this.reset(); });
			};
			$(document).bind("contextmenu",function(e){
				return false;
			});
			$.reject({  
				reject: { 
					safari: true, // Apple Safari
					chrome: false, // Google Chrome
					firefox: false, // Firefox
					msie: true, // Microsoft Internet Explorer
					opera: true, // Opera
					konqueror: true, // Konqueror (Linux)
					unknown: true // Everything else
				},
				display: ['firefox','chrome'] // Displays 
			});
			$('.wrapper').dialog(
			{
				position: [310,90],
				hide: "fold",
				show: "drop",
				autoOpen: false,
				width: '650',
				buttons: 
				{
	                "Send": function() {
	                    $('#form').submit();
	                },
					"Close": function() 
					{ 
						$(this).dialog("close");
						$('#form').resetForm();
						$('#form').find('label.error').remove();
						$('#form').find('label.ok').remove();
						$('#link2').removeClass('current');
						$(this).dialog(
						{
							position: [310,90],
							width: '650',
							height: 'auto',
						});
					} 
				}
			});
			$('#link2 a').click(function()
			{
				$('#link2').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('.wrapper').dialog('open');
				$('.wrapper').dialog('moveToTop');
				return false;
			});
			$('#linkcvv').click(function()
			{
				$('#link2').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('.wrapper').dialog('open');
				$('.wrapper').dialog('moveToTop');
				return false;
			});
			$('#screenn1').click(function()
			{
				$('canvas').remove();
				$('.fog').remove();
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#link1').removeClass('current');
				$('#command').css('top', '2em');
				$('#command').css('left', '1em');
				m3D.init( 
					[ 
						{ src: 'img1.jpg' },
						{ src: 'img2.jpg' },
						{ src: 'img3.jpg' },
						{ src: 'img4.jpg' },
						{ src: 'img5.jpg' },
						{ src: 'img6.jpg' },
						{ src: 'img7.jpg' },
						{ src: 'img8.jpg' },
						{ src: 'img9.jpg' },
						{ src: 'img10.jpg' },
						{ src: 'img11.jpg' },
						{ src: 'img12.jpg' },
						{ src: 'img13.jpg' },
						{ src: 'img14.jpg' },
						{ src: 'img15.jpg' },
						{ src: 'img16.jpg' },
						{ src: 'img17.jpg' },
						{ src: 'img18.jpg' },
						{ src: 'img19.jpg' },
						{ src: 'img20.jpg' },
						{ src: 'img21.jpg' },
						{ src: 'img22.jpg' },
						{ src: 'img23.jpg' },
						{ src: 'img24.jpg' }
					] 
				); 
			});
			$('#zamknij4').click(function()
			{
				$('#kupablog').css('display', 'none');
			});
			$('#zamknij5').click(function()
			{
				$('#kupablog').css('display', 'none');
				$('#linkblog').removeClass('current');
			});
			$('#zamknij11').click(function()
			{
				$('.cv1').draggable({ cursor: 'auto' });
				$('.cv1').draggable('destroy');
				$('#kupacv').css('display', 'none');
				$('#linkcs').removeClass('current');
			});
			$('.close2').click(function()
			{
				$('.kupa').css('display', 'none');
			});
			$('.close').click(function()
			{
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('.kupa').css('display', 'none');
			});
			$('#zamknijgz').click(function()
			{
				$('.kupa').css('display', 'none');
				$('#blah').removeClass('current');
			});
			$('#projektyz').click(function()
			{
				if ($('#grafika').hasClass('current2') || $('#prezentacje').hasClass('current2')) {
				} else
				{
					$('#projekty').removeClass('current');
				}
				$('#projekty2').removeClass('current2');
			});
			$('#prezentacjez').click(function()
			{
				if ($('#grafika').hasClass('current2') || $('#projekty2').hasClass('current2')) {
				} else
				{
					$('#projekty').removeClass('current');
				}
				$('#prezentacje').removeClass('current2');
			});
			$('#certyfikatz').click(function()
			{
				if ($('#japonskie1').hasClass('current2') || $('#japonskie2').hasClass('current2') || $('#japonskie3').hasClass('current2')) {
				} else
				{
					$('#certyfikaty').removeClass('current');
				}
				$('#tekst').removeClass('current2');
			});
			$('#japonskie1z').click(function()
			{
				if ($('#tekst').hasClass('current2') || $('#japonskie2').hasClass('current2') || $('#japonskie3').hasClass('current2')) {
				} else
				{
					$('#certyfikaty').removeClass('current');
				}
				$('#japonskie1').removeClass('current2');
			});
			$('#japonskie2z').click(function()
			{
				if ($('#tekst').hasClass('current2') || $('#japonskie1').hasClass('current2') || $('#japonskie3').hasClass('current2')) {
				} else
				{
					$('#certyfikaty').removeClass('current');
				}
				$('#japonskie2').removeClass('current2');
			});
			$('#japonskie3z').click(function()
			{
				if ($('#tekst').hasClass('current2') || $('#japonskie1').hasClass('current2') || $('#japonskie2').hasClass('current2')) {
				} else
				{
					$('#certyfikaty').removeClass('current');
				}
				$('#japonskie3').removeClass('current2');
			});
			$('#szkoly1z').click(function()
			{
				if ($('#szkoly2').hasClass('current2') || $('#szkoly3').hasClass('current2') || $('#szkoly4').hasClass('current2')) {
				} else
				{
					$('#szkoly').removeClass('current');
				}
				$('#szkoly1').removeClass('current2');
			});
			$('#szkoly2z').click(function()
			{
				if ($('#szkoly1').hasClass('current2') || $('#szkoly3').hasClass('current2') || $('#szkoly4').hasClass('current2')) {
				} else
				{
					$('#szkoly').removeClass('current');
				}
				$('#szkoly2').removeClass('current2');
			});
			$('#szkoly3z').click(function()
			{
				if ($('#szkoly2').hasClass('current2') || $('#szkoly1').hasClass('current2') || $('#szkoly4').hasClass('current2')) {
				} else
				{
					$('#szkoly').removeClass('current');
				}
				$('#szkoly3').removeClass('current2');
			});
			$('#szkoly4z').click(function()
			{
				if ($('#szkoly2').hasClass('current2') || $('#szkoly3').hasClass('current2') || $('#szkoly1').hasClass('current2')) {
				} else
				{
					$('#szkoly').removeClass('current');
				}
				$('#szkoly4').removeClass('current2');
			});
			$('#zamknija').click(function()
			{
				if ($('#kyouu').dialog( "isOpen" ) || $('#kyouu2').dialog( "isOpen" )) {
				} else
				{
					$('#projekty').removeClass('current');
				}
				$('#grafika').removeClass('current2');
				$('.tj_container').css('left', '0');
				$('.tj_container').css('top', '0');
				$('.avatarki ul').css('top', '0');
				$('.avatarki').css('margin', '0');
				$('.avatarki ul').css('left', '0');
				$('.avatarki ul').draggable('destroy');
				$('#avatary1').css('display', 'none');
				$('#sygnatury1').css('display', 'none');
				$('.tj_wrapper').css('visibility', 'hidden');
				$('.tj_nav').css('visibility', 'hidden');
				$('#tapety1').css('display', 'none');
				$('#rendery1').css('display', 'none');
				$('#banery1').css('display', 'none');
			});
			$('#opis').dialog(
			{
				position: [400,200],
				hide: "fold",
				show: "drop",
				autoOpen: false,
				width: '650',
				buttons: 
				{
					"Close": function() 
					{ 
						$(this).dialog("close"); 
						$('#link3').removeClass('current');
						$(this).dialog(
						{
							position: [400,200],
							width: '650',
							height: 'auto',
						});
					} 
				}
			});
			$('#link3 a').click(function()
			{
				$('#link3').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#opis').dialog('open');
				$('#opis').dialog('moveToTop');
				return false;
			});
			$('#link1 a').one('click', function() {
					m3D.init( 
						[ 
							{ src: 'img1.jpg' },
							{ src: 'img2.jpg' },
							{ src: 'img3.jpg' },
							{ src: 'img4.jpg' },
							{ src: 'img5.jpg' },
							{ src: 'img6.jpg' },
							{ src: 'img7.jpg' },
							{ src: 'img8.jpg' },
							{ src: 'img9.jpg' },
							{ src: 'img10.jpg' },
							{ src: 'img11.jpg' },
							{ src: 'img12.jpg' },
							{ src: 'img13.jpg' },
							{ src: 'img14.jpg' },
							{ src: 'img15.jpg' },
							{ src: 'img16.jpg' },
							{ src: 'img17.jpg' },
							{ src: 'img18.jpg' },
							{ src: 'img19.jpg' },
							{ src: 'img20.jpg' },
							{ src: 'img21.jpg' },
							{ src: 'img22.jpg' },
							{ src: 'img23.jpg' },
							{ src: 'img24.jpg' }
						] 
					);
					$('body').css('cursor', 'wait');
					setTimeout(function() { 
						$('body').css('cursor', 'auto');
					}, 1000);
			});
			$('#link1 a').click(function()
			{
				$('.kupa').css('display', 'none');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#link1').addClass('current');
				$('#screen').css('visibility', 'visible');
				$('#command').css('visibility', 'visible');
				return false;
			});
			$('#certyfikat').click(function()
			{
				$('body').css('overflow', 'hidden');
				$('#toeicl').show(1000);
				$('#toeicll').show(1000);
				$('.kupa').css('display', 'none');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu3').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu').dialog("option", "hide", 'null').dialog('close');
				$('#certyfikaty').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#tekst').css('display', 'block');
				$('#tekst').addClass('current2');
				return false;
			});
			$('#toeic1').click(function()
			{
				$('.kupa').css('display', 'none');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu3').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu').dialog("option", "hide", 'null').dialog('close');
				$('#certyfikaty').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#tekst').css('display', 'block');
				return false;
			});
			$('#jlpt41').click(function()
			{
				$('body').css('overflow', 'hidden');
				$('#ichi').show(1000);
				$('#ichii').show(1000);
				$('.kupa').css('display', 'none');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu3').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu').dialog("option", "hide", 'null').dialog('close');
				$('#certyfikaty').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#japonskie1').css('display', 'block');
				$('#japonskie1').addClass('current2');
				return false;
			});
			$('#jlptn41').click(function()
			{
				$('body').css('overflow', 'hidden');
				$('#ni').show(1000);
				$('#nii').show(1000);
				$('.kupa').css('display', 'none');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu3').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu').dialog("option", "hide", 'null').dialog('close');
				$('#certyfikaty').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#japonskie2').css('display', 'block');
				$('#japonskie2').addClass('current2');
				return false;
			});
			$('#jlptn42').click(function()
			{
				$('body').css('overflow', 'hidden');
				$('#san').show(1000);
				$('#sann').show(1000);
				$('.kupa').css('display', 'none');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu3').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu').dialog("option", "hide", 'null').dialog('close');
				$('#certyfikaty').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#japonskie3').css('display', 'block');
				$('#japonskie3').addClass('current2');
				return false;
			});
			$('#jlptn411').click(function()
			{
				$('.kupa').css('display', 'none');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu3').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu').dialog("option", "hide", 'null').dialog('close');
				$('#certyfikaty').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#japonskie3').css('display', 'block');
				$('#japonskie3').addClass('current2');
				return false;
			});
			$('#lszkoly1').click(function()
			{
				$('.kupa').css('display', 'none');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu3').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu').dialog("option", "hide", 'null').dialog('close');
				$('#szkoly').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#szkoly1').css('display', 'block');
				$('#szkoly1').addClass('current2');
				return false;
			});
			$('#lszkoly2').click(function()
			{
				$('.kupa').css('display', 'none');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu3').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu').dialog("option", "hide", 'null').dialog('close');
				$('#szkoly').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#szkoly2').css('display', 'block');
				$('#szkoly2').addClass('current2');
				return false;
			});
			$('#lszkoly3').click(function()
			{
				$('.kupa').css('display', 'none');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu3').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu').dialog("option", "hide", 'null').dialog('close');
				$('#szkoly').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#szkoly3').css('display', 'block');
				$('#szkoly3').addClass('current2');
				return false;
			});
			$('#lszkoly4').click(function()
			{
				$('body').css('overflow', 'hidden');
				$('#szkoll').show(1000);
				$('#szkolll').show(1000);
				$('.kupa').css('display', 'none');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu3').dialog("option", "hide", 'null').dialog('close');
				$('#draggablesu').dialog("option", "hide", 'null').dialog('close');
				$('#szkoly').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#szkoly4').css('display', 'block');
				$('#szkoly4').addClass('current2');
				return false;
			});
			$('#paleta').dialog(
			{
				hide: "fold",
				show: "drop",
				autoOpen: false,
				width: '350',
				buttons: 
				{
					"Close": function() 
					{ 
						$(this).dialog("close");
						$(this).dialog(
						{
							position: 'center',
							width: '350',
						});
					} 
				}
			});
			$('#opisG').click(function()
			{
				$('#paleta').dialog('open');
				$('#paleta').dialog('moveToTop');
				return false;
			});
			$('#banery').click(function()
			{
				if ($('#banery1').css('display') == 'none') 
				{
					$('#banery-plik1').animate({
						marginLeft: "30%",
						marginTop: "15%"
					}, 1000, function() {
					});
					$('#banery1').css('display', 'block');
					$('#avatary1').css('display', 'none');
					$('#sygnatury1').css('display', 'none');
					$('.tj_wrapper').css('visibility', 'hidden');
					$('.tj_nav').css('visibility', 'hidden');
					$('#tapety1').css('display', 'none');
					$('#rendery1').css('display', 'none');
				}
				else
				{
					$('#banery1').css('display', 'none');
				}
				return false;				
			});
			$('#tapety').click(function()
			{
				if ($('#tapety1').css('display') == 'none') 
				{
					$('#tapety-plik1').animate({
						marginRight: "30%",
						marginTop: "10%"
					}, 1000, function() {
					});
					$('#tapety1').css('display', 'block');
					$('#avatary1').css('display', 'none');
					$('#sygnatury1').css('display', 'none');
					$('.tj_wrapper').css('visibility', 'hidden');
					$('.tj_nav').css('visibility', 'hidden');
					$('#rendery1').css('display', 'none');
					$('#banery1').css('display', 'none');
				}
				else
				{
					$('#tapety1').css('display', 'none');
				}
				return false;
			});
			$('#avatary').click(function()
			{
				if ($('#avatary1').css('display') == 'none')
				{
					$('#avatary-plik1').animate({
						marginLeft: "25%",
						marginTop: "16%"
					}, 1000, function() {
					});
					$('#avatary-plik2').animate({
						marginLeft: "10%",
						marginTop: "15%"
					}, 1000, function() {
					});
					$('#avatary-plik3').animate({
						marginRight: "25%",
						marginTop: "16%"
					}, 1000, function() {
					});
					$('#avatary1').css('display', 'block');
					$('#sygnatury1').css('display', 'none');
					$('.tj_wrapper').css('visibility', 'hidden');
					$('.tj_nav').css('visibility', 'hidden');
					$('#tapety1').css('display', 'none');
					$('#rendery1').css('display', 'none');
					$('#banery1').css('display', 'none');
				}
				else
				{
					$('#avatary1').css('display', 'none');
				}
				return false;
			});		
			$('#resecikA').click(function()
			{
				$('.avatarki').css('margin', '0');
				$('.avatarki ul').css('top', '0');
				$('.avatarki ul').css('left', '0');
				$('.tj_container').css('left', '0');
				$('.tj_container').css('top', '0');
				$('.avatarki ul').draggable('destroy');
				$('.tj_container').draggable('destroy');
				$('#avatary1').css('display', 'none');
				$('#sygnatury1').css('display', 'none');
				$('.tj_wrapper').css('visibility', 'hidden');
				$('.tj_nav').css('visibility', 'hidden');
				$('#tapety1').css('display', 'none');
				$('#rendery1').css('display', 'none');
				$('#banery1').css('display', 'none');
			});
			$('#sygnatury').click(function()
			{
				if ($('#sygnatury1').css('display') == 'none')
				{
					$('#sygnatury-plik1').animate({
						marginLeft: "15%",
						marginTop: "10%"
					}, 1000, function() {
					});	
					$('#sygnatury-plik2').animate({
						marginRight: "20%",
						marginTop: "13%"
					}, 1000, function() {
					});
					$('#sygnatury1').css('display', 'block');
					$('#avatary1').css('display', 'none');
					$('.tj_wrapper').css('visibility', 'hidden');
					$('.tj_nav').css('visibility', 'hidden');
					$('#tapety1').css('display', 'none');
					$('#rendery1').css('display', 'none');
					$('#banery1').css('display', 'none');
				}
				else
				{
					$('#sygnatury1').css('display', 'none');
				}
				return false;
			});
			$('#tla').one('click', function() {
				$(this).toastmessage('showToast', {
					text     : 'Backgrounds can be scrolled, by the mouse wheel.',
					sticky   : false,
					position : 'top-left',
					type     : 'notice',
					closeText: '',
					close    : function () {console.log("toast is closed ...");}
				});
			});
			$('#tla').click(function()
			{
				if ($('.tj_nav').css('visibility') == 'hidden')
				{
					$('.tj_wrapper').css('visibility', 'visible');
					$('.tj_nav').css('visibility', 'visible');
					$('#avatary1').css('display', 'none');
					$('#sygnatury1').css('display', 'none');
					$('#tapety1').css('display', 'none');
					$('#rendery1').css('display', 'none');
					$('#banery1').css('display', 'none');
				}
				else
				{
					$('.tj_wrapper').css('visibility', 'hidden');
					$('.tj_nav').css('visibility', 'hidden');
				}
				return false;				
			});
			$('#rendery').click(function()
			{
				if ($('#rendery1').css('display') == 'none')
				{
					$('#rendery-plik3').animate({
						marginRight: "2%",
						marginTop: "5%"
					}, 700, function() {
					});
					$('#rendery-plik2').animate({
						marginLeft: "7%",
						marginTop: "5%"
					}, 700, function() {
					});
					$('#rendery-plik1').animate({
						marginLeft: "3%",
						marginTop: "6%"
					}, 700, function() {
					});
					$('#rendery1').css('display', 'block');
					$('#avatary1').css('display', 'none');
					$('#sygnatury1').css('display', 'none');
					$('.tj_wrapper').css('visibility', 'hidden');
					$('.tj_nav').css('visibility', 'hidden');
					$('#tapety1').css('display', 'none');
					$('#banery1').css('display', 'none');
				}
				else
				{
					$('#rendery1').css('display', 'none');
				}
				return false;
			});
			$('#grafikaL').one('click', function() {
				$('#tj_container').gridnav({
					type	: {
						mode		: 'sequpdown', 	// use def | fade | seqfade | updown | sequpdown | showhide | disperse | rows
						speed		: 500,			// for fade, seqfade, updown, sequpdown, showhide, disperse, rows
						easing		: '',			// for fade, seqfade, updown, sequpdown, showhide, disperse, rows	
						factor		: 50,			// for seqfade, sequpdown, rows
						reverse		: false			// for sequpdown
					}
				});
				$('body').css('cursor', 'wait');
				setTimeout(function() { 
					$('body').css('cursor', 'auto');
				}, 1000);
			});
			$('#grafikaL').click(function()
			{
				$('body').css('overflow', 'hidden');
				$('.kupa').css('display', 'none');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#projekty').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#grafika').css('display', 'block');
				$('#grafika').addClass('current2');
				$('#przesunA').show(1000);
				$('#resecikA').show(1000);
				$('#opisG').show(1000);
				$('#avatary').show(1000);
				$('#sygnatury').show(1000);
				$('#tla').show(1000);
				$('#rendery').show(1000);
				$('#banery').show(1000);
				$('#tapety').show(1000);
				return false;
			});
			$('#lprojekty2').click(function()
			{
				$('.kupa').css('display', 'none');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#projekty').addClass('current');
				$('#projekty2').addClass('current2');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('#projekty2').css('display', 'block');
				return false;
			});
			$('#prezentacjel').click(function()
			{
				$('#prezentacje').css('display', 'block');
				$('#projekty').addClass('current');
				$('#kyouu').dialog('open');
				$('#kyouu').dialog('moveToTop');
				$('#kyouu2').dialog('open');
				$('#kyouu2').dialog('moveToTop');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				return false;
			});
			$('#linkblog a').click(function()
			{
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#linkblog').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('.kupa').css('display', 'none');
				$('#kupablog').css('display', 'block');
				$('.top').css('display', 'block');
				$('body').css('overflow', 'visible');
				return false;
			});
			$('#linkcs a').click(function()
			{
				$('body').css('overflow', 'hidden');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#linkcs').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('.kupa').css('display', 'none');
				$('#kupacv').css('display', 'block');
				return false;
			});
			$('#blah a').click(function()
			{
				$('.kupa').css('display', 'none');
				$('#blah').addClass('current');
				$('#screen').css('visibility', 'hidden');
				$('#command').css('visibility', 'hidden');
				$('.wrapper').dialog("option", "hide", 'null').dialog('close');
				$('#opis').dialog("option", "hide", 'null').dialog('close');
				$('#paleta').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu').dialog("option", "hide", 'null').dialog('close');
				$('#kyouu2').dialog("option", "hide", 'null').dialog('close');
				$('#glowna').css('display', 'block');
				return false;
			});
			$('#kliknij').click(function()
			{
				$('.cv1').draggable({ cursor: 'crosshair' });
				return false;
			});
			$('#command').draggable({ cursor: 'crosshair' });
			$('.top').addClass('hidden');
			$.waypoints.settings.scrollThrottle = 0;
			$('#calosc').waypoint(function(event, direction) {
				$('.top').toggleClass('hidden', direction === "up");
			}, {
				offset: '-10%'
			}).find('#menu').waypoint(function(event, direction) {
				$(this).parent().toggleClass('sticky', direction === "down");
				event.stopPropagation();
			}).find('.zamknij').waypoint(function(event, direction) {
				$(this).parent().toggleClass('sticky', direction === "down");
				event.stopPropagation();
			});
			$('#plax').plaxify({"xRange":40,"yRange":10,"invert":true});
			$.plax.enable();
			$('#kyouu').dialog({
				autoOpen: false,
				width: 630,
				height: 370,
				buttons: {
					"Close": function() {
						if ($('#kyouu2').dialog( "isOpen" ) || $('#grafika').hasClass('current2')) {
						} else
						{
							$('#projekty').removeClass('current');
						}				
						$(this).dialog("close");
						$(this).dialog(
						{
							position: 'center',
							width: '630',
							height: '370',
						});
					} 
				}
			});
			$('#kyouu2').dialog({
				position: [310,250],
				hide: "fold",
				show: "drop",
				autoOpen: false,
				width: 630,
				height: 370,
				buttons: {
					"Close": function() {
						if ($('#kyouu').dialog( "isOpen" ) || $('#grafika').hasClass('current2')) {
						} else
						{
							$('#projekty').removeClass('current');
						}
						$(this).dialog("close"); 
						$(this).dialog(
						{
							position: [310,250],
							width: '630',
							height: '370',
						});
					} 
				}
			});
			$('#resecik').click(function()
			{
				location.reload();
			});
			$('#pobierz').click(function()
			{
				window.open('http://bamir-automoto.pl/kafej/en/MichaelZbyl-CV-EN.pdf');
			});
			$('#zoom').easyZoom();
			$('#zoom1').easyZoom();
			$('#zoom2').easyZoom();
			$('#zoom3').easyZoom();
			$('#zoom4').easyZoom();
			$("html").rclick('#click');
			$('#draggablesu').dialog({
				resizable: false,
				autoOpen: false,
				width: 320,
				height: 330,
				position: [60,240],
			});
			$('#draggablesu3').dialog({
				resizable: false,
				autoOpen: false,
				width: 280,
				height: 280,
				position: [460,240],
			});
			$('#linksu').click(function(){
				$('#draggablesu').dialog('open');
				return false;
			});
			$('#linksu2').click(function(){
				$('#draggablesu3').dialog('open');
				return false;
			});
			$('#faco').click(function() {
				window.open('http://www.facebook.com/kafej666');
			});
			$('#twicior').click(function() {
				window.open('https://twitter.com/kafej666');
			});
			$('#szkoll').click(function() {
				window.open('http://www.pwsz.pl/');
			});
			$('#szkolll').click(function() {
				window.open('http://pl.wikipedia.org/wiki/In%C5%BCynier');
			});
			$('#toeicl').click(function() {
				window.open('http://www.pl.toeic.eu/');
			});
			$('#toeicll').click(function() {
				window.open('http://en.wikipedia.org/wiki/TOEIC');
			});
			$('#ichi, #ni, #san').click(function() {
				window.open('http://www.jlpt.jp/e/');
			});
			$('#ichii, #nii, #sann').click(function() {
				window.open('http://en.wikipedia.org/wiki/Japanese_Language_Proficiency_Test');
			});
		}
	);
	
	function Losowanie() //LOSOWANIE LICZB Z TABLICY 16 ELEMENTOWEJ I WYSWIETLENIE ICH.
	{
		var y=16;
		tablica=new Array(16);
		
		for(i=0;i<16;i++)
		{
			tablica[i]=1;
		}
		for(i=0;i<16;i++)
		{		
			x=1+ Math.round ((y-1)*Math.random());
			x=Math.min(y,x);
			x=Math.max(0,x);
			y--;
			k=0;
			while(x>tablica[k])
			{
				x-=tablica[k++];
			}
			pole[i]=k;
			tablica[k]=0;
			if(k==0)
			{
				y1=Math.floor(i/4);
				x1=i-4*y1;
			}
			
		}
	}

	function Przesun(i,j) //INICJACJA PRZESOWANIA KLOCKOW.
	{
		if(( koniec==0)&&(Math.abs(i-x1)+Math.abs(j-y1)==1))
		{	
			xy1=x1+4*y1;
			numRuchu++;
			xy2=i+4*j;
			pole[xy1]=pole[xy2];
			document["pole"+xy1].src = "img/klocki/klocek_"+pole[xy2]+".png";
			pole[xy2]=0;
			document["pole"+xy2].src = "img/klocki/klocek_0.png";
			x1=i;
			y1=j;
			Sprawdz();
			Wyswietl(numRuchu);
		}
	}
	
	function Wyswietl()
	{
		document.getElementById("msg").innerHTML = 'This is Your <b>'+numRuchu+'</b> move.';
	}
	
	function Sprawdz() //SPRAWDZENIE CZY KLOCKI ZOSTALY ULOZONE POPRAWNIE, JEZELI TAK TO KOMUNIKAT.
	{
		koniec=1;
		for(i=0;i<14;i++)
		{
			if(pole[i]!=i+1)
			{			
				koniec=0;
			}
		}
		if (pole[15]) 
		{
			koniec=0;
		}
		if(koniec)
		{
			alert("CONGRATULATIONS!!!!!!!!!!! YOU DID IT!!!!!!!!.");
		}
	}
	Losowanie();
	document.write('<div id="draggablesu" title="Eight puzzle game"style="display:none;"><p id="msg"style="padding-bottom:10px;text-align:center;"> This is Your <b>'+numRuchu+'</b> move.</p><table style="display:block; margin-top: 20px;margin-left:50px;" cellpadding="0" cellspacing="0"/>');

			for(i=0;i<4;i++)
			{
				document.write('<tr><div class="kostka">');
				for(j=0;j<4;j++)
				{
					document.write('<td><IMG id="kostka" style="cursor: pointer; margin-top: -5px;" onclick="Przesun('+j+','+i+')" src="img/klocki/klocek_'+pole[(i*4+j)]+'.png" name="pole'+(i*4+j)+'"></td>');
				}
			}
	document.write('</tr></div>');
	document.write('</table></div>');
				
				

	function Losowanie2() //LOSOWANIE LICZB Z TABLICY 16 ELEMENTOWEJ I WYSWIETLENIE ICH.
	{
		var y=9;
		tablica=new Array(9);
		
		for(i=0;i<9;i++)
		{
			tablica[i]=1;
		}
		for(i=0;i<9;i++)
		{		
			x=1+ Math.round ((y-1)*Math.random());
			x=Math.min(y,x);
			x=Math.max(0,x);
			y--;
			k=0;
			while(x>tablica[k])
			{
				x-=tablica[k++];
			}
			pole2[i]=k;
			tablica[k]=0;
			if(k==0)
			{
				zuo2=Math.floor(i/3);
				zuo1=i-3*zuo2;
			}
			
		}
	}

	function Przesun2(i,j) //INICJACJA PRZESOWANIA KLOCKOW.
	{
		if(( koniec2==0)&&(Math.abs(i-zuo1)+Math.abs(j-zuo2)==1))
		{	
			xzuo2=zuo1+3*zuo2;
			numRuchu2++;
			xy2=i+3*j;
			pole2[xzuo2]=pole2[xy2];
			document["pole2"+xzuo2].src = "img/klocki/klocek_"+pole2[xy2]+".png";
			pole2[xy2]=0;
			document["pole2"+xy2].src = "img/klocki/klocek_0.png";
			zuo1=i;
			zuo2=j;
			Sprawdz2();
			Wyswietl2(numRuchu2);
		}
	}
	
	function Wyswietl2()
	{
		document.getElementById("msg2").innerHTML = 'This is Your <b>'+numRuchu2+'</b> move.';
	}
	
	function Sprawdz2() //SPRAWDZENIE CZY KLOCKI ZOSTALY ULOZONE POPRAWNIE, JEZELI TAK TO KOMUNIKAT.
	{
		koniec2=1;
		for(i=0;i<7;i++)
		{
			if(pole2[i]!=i+1)
			{			
				koniec2=0;
			}
		}
		if (pole2[8]) 
		{
			koniec2=0;
		}
		if(koniec2)
		{
			alert("CONGRATULATIONS!!!!!!!!!!! YOU DID IT!!!!!!!!.");
		}
	}
	Losowanie2();
	document.write('<div id="draggablesu3" title="Fifteen puzzle game" style="display:none;"><p id="msg2" style="padding-bottom:10px;text-align:center;"> This is Your <b>'+numRuchu2+'</b> move.</p><table style="display: block; margin-top: 20px; margin-left: 50px;" cellpadding="0" cellspacing="0"/>');

			for(i=0;i<3;i++)
			{
				document.write('<tr><div class="kostka2">');
				for(j=0;j<3;j++)
				{
					document.write('<td><IMG id="kostka2" style="cursor: pointer; margin-top: -5px;" onclick="Przesun2('+j+','+i+')" src="img/klocki/klocek_'+pole2[(i*3+j)]+'.png" name="pole2'+(i*3+j)+'"></td>');
				}
			}
	document.write('</tr></div>');
	document.write('</table></div>');
</script>
</head><body>
<div id="click" style="display: none;">
	<a id="linksu2">Eight puzzle game</a>
	<a id="linksu">Fifteen puzzle game</a>
	<a id="faco">FaceBook</a>
	<a id="twicior">Twitter</a>
	<a id="resecik">Reset all</a>
</div>
<div id="calosc">
	<div id="menu">
		<ul id="nav">
			<li class="current" id="blah"><a href="#">About me</a></li>
			<li id="certyfikaty"><a href="#" style="float: left;"><div style="margin-left:-7px;">Certificates<img src="img/strzalka1.gif" style="margin-top: 3px;padding: 0px 4px 0px 7px;margin-right:-13px;float: right;" alt=""></div></a>
				<ul>
					<li><a href="#">English<img src="img/strzalka.gif" style="float: right;margin-top: 2px;margin-right: -12px;" alt=""></a>
						<ul>
							<li id="certyfikat"><a href="#">TOEIC</a></li>
						</ul>
					</li>
					<li><a href="#">Japanese<img src="img/strzalka.gif" style="float: right;margin-top: 2px;margin-right: -12px;" alt=""></a>
						<ul>
							<li id="jlpt41"><a href="#">JLPT 4</a></li>
							<li id="jlptn41"><a href="#">JLPT N4</a></li>
							<li id="jlptn42"><a href="#">JLPT N3</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li id="projekty"><a href="#" style="float: left;"><div style="margin-left:-7px;">Projects<img src="img/strzalka1.gif" style="margin-top: 3px;padding: 0px 4px 0px 7px;margin-right:-13px;float: right;" alt=""></div></a>
				<ul>
					<li id="grafikaL"><a href="#">Graphical</a></li>
					<li><a id="prezentacjel" href="#">Presentations</a></li>
				</ul>
			</li>
			<li id="szkoly"><a id="lszkoly4" href="#">Studies</a></li>
			<li id="linkcs"><a href="#">CV</a></li>
			<li id="linkblog"><a href="#">Blog</a></li>	
			<li id="link1"><a href="#">Gallery</a></li>
			<li id="link3"><a href="#">Info</a></li>
			<li id="link2"><a href="#">Contact</a></li>
		</ul>
		<div id="shell">
			<img src="css/kafej.png" id="plax" alt="">
		</div>
	</div>
	<div id="glowna" class="kupa">
		<div class="zamknij">
			<div title="Minimize" class="close"></div>
			<div id="zamknijgz" title="Close" class="close2"></div>
		</div>
		<div class="tekst">
			<div class="tekst-glowna">
				<div style="text-indent: 2cm;">Last July, I graduated from the computer engineering faculty, where I had an engineer’s title awarded. In the course of my study, I was a secretary of a research circle 
				set up together with my fellow students, which dealt with artificial intelligence issues. 
				Apart from carrying out the circle’s programme, I was responsible, among other things, for preparing reports, giving in projects within set time limits and taking care that the mood amongst the club members was good. I can give myself the credit for such achievements 
				as the grade average over 4.0 for the whole course of engineering programme, a certificate in Business English, and a passed certificate in the Japanese language – level 4 (basic) and N4 (everyday use). The said certificates are a perfect example of my deep interest in Japan and its culture, but they also imply that despite studying such a hard subject as IT, I management to learn such a demanding language as Japanese is.</div>
				<br /><br />

				<div style="text-indent: 2cm;">In my short, though intensive career, I have had the opportunity to work both 
				as a computer programmer and as an administrator of Windows-based servers. I was also responsible for designing and administering a LAN (wired) and WLAN (wireless) in a small independent company. A large part of my duties involved help-desk support provided to users. Remote support and troubleshooting related to hardware has always been a source of great satisfaction to me.</div>
				<br /><br />

				<div style="text-indent: 2cm;">Ever since my early childhood, I have been interested in broadly defined IT and Japanese culture. I believe that the combination of these two passions is the best thing that could happen to me. I also hope that joining the knowledge acquired both at my university and professional career with the command of such languages as English and Japanese will pay off in the future.</div><br /><br />

				Yours sincerely,<br />
				Zbyl Michał
			</div>
		</div>
	</div>
		<div class="wrapper" title="Kontakt">		
			<form id="form" class="blocks" action="#" method="post">
				<p>
					<label>Name:/Nick:</label>
					<input type="text" class="text" name="name" />
				</p>
				<p>
					<label>Firm:</label>
					<input type="text" class="text" name="company" />
				</p>
				<p>
					<label>E-mail:</label>
					<input type="text" class="text" name="email" />
				</p>
				<p>
					<label>Topic:</label>
					<input type="text" class="text" name="subject" />
				</p>
				<p class="area">
					<label>Message:</label>
					<textarea class="textarea" name="text" rows="40" cols="40"></textarea>
				</p>
			</form>		
			<?php
				if (isset($_POST['email'])){
					$mail = $_POST['email'];
					$name = $_POST['name'];
					$company = $_POST['company'];
					$subject = $_POST['subject'];
					$text = $_POST['text'];
				
					 $to = "kafej666@o2.pl";
					 $message =" Dostałeś mail ze stronki Kafej. Email kontaktowy Osoby wysyłającej ".$mail;
					 $message .=" Imię : ".$name;
					 $message .=" Firma : ".$company;
					 $message .=" Treść Wiadomości : ".$text;

					 if(mail($to,$subject,$message)){
						echo "<p style='margin-top:30px;color:#333333;font-weight:bold;font-size:21px;text-align:center;'>";
						echo "Previous message has been sent.";
						echo '</p>';
					} 
					else{ 
						echo "<p style='margin-top:30px;color:#333333;font-weight:bold;font-size:21px;text-align:center;'>";
						echo "Previous message hasnt been sent..";
						echo '</p>';
					}
				}
			?>
		</div>
		<ul id="opis" title="Information about the site" style="display: none;">
			<li><b>Name of the project:</b> Kafej</li>
			<li><b>Version: 3.0.</b> Tasted on Firefox 12+ i Google Chrome 19+. JavaScript and Flash required.</li>
			<li><b>Minimum resolution:</b> 1366x768 - with enabled full-screen mode.</li>
			<li><b>Last update:</b> 16.10.2012.</li>
			<li><b>Programs:</b> Photoshop CS5, Notepad++.</li>
			<li><b>Programming languages​​:</b> (X)HTML, JS, CSS, PHP.</li>
			<li><b>Used Frameworks/libraries/plugins:</b> jQuery, jQuery-ui (modified), 3D gallery experiment (modified), jQuery validation plug-in, jQuery Browser Rejection Plugin (modified), mobily makemess (modified), jQuery waypoints (modified), jQuery easing, jQuery mousewheel, jQuery toastmessage (modified), modernizr, jQuery gridnav...</li>
		</ul>
		<div id="paleta" title="Description" style="display: none;">
			<b>These are just examples.</b><br />
		</div>
			<div id="command"> 
				<h1>Click on the picture/square to zoom in.</h1>
				<div id="bar"></div> 
			</div> 
			<div id="screen"> 
				<div class="zamknij" style="margin-top: 0px;border-radius: 2em 2em 2em 2em;">
					<div title="Minimize" class="close"></div>
					<div id="screenn1" title="Close" class="close2"></div>
				</div>
				<div id="urlInfo"></div> 
			</div>		
		<div id="tekst" class="kupa" style="display: none;">
			<div class="zamknij" style="border-radius: 2em 2em 2em 2em;">
				<div title="Minimize" class="close"></div>
				<div id="certyfikatz" title="Close" class="close2"></div>
			</div>
			<a href="#" id="toeicl" class="make2" style="margin-top: 175px;" title="Strona główna">WWW</a>
			<a href="#" id="toeicll" class="make2" title="Wiki">Wiki</a>
			<div class="tekst">
			</div>
			<div class="cerciki">
				<a id="zoom3" href="img/galeria/TOEIC.jpg" class="zoom1"><img src="img/galeria/img7.jpg" alt=""></a>
			</div>
		</div>
		<div id="japonskie1" class="kupa" style="display: none;">
			<div class="zamknij" style="border-radius: 2em 2em 2em 2em;">
				<div title="Minimize" class="close"></div>
				<div id="japonskie1z" title="Close" class="close2"></div>
			</div>
			<a href="#" id="ichi" class="make2" style="margin-top: 175px;" title="Strona główna">WWW</a>
			<a href="#" id="ichii" class="make2" title="Wiki">Wiki</a>
			<div class="tekst">
			</div>
			<div class="cerciki" style="left:35%;">
				<a id="zoom" href="img/galeria/JLPT-4.jpg" class="zoom1"><img src="img/galeria/img5.jpg" style="margin-top:-100px;max-width: 900px; max-height: 750px;" alt=""></a>
			</div>
		</div>
		<div id="japonskie2" class="kupa" style="display: none;">
			<div class="zamknij" style="border-radius: 2em 2em 2em 2em;">
				<div title="Minimize" class="close"></div>
				<div id="japonskie2z" title="Close" class="close2"></div>
			</div>
			<a href="#" id="ni" class="make2" style="margin-top: 175px;" title="Strona główna">WWW</a>
			<a href="#" id="nii" class="make2" title="Wiki">Wiki</a>
			<div class="tekst">
			</div>
			<div class="cerciki" style="left:35%;">
				<a id="zoom1" href="img/galeria/JLPT-N4.jpg" class="zoom1"><img src="img/galeria/img4.jpg" style="margin-top:-100px;max-width: 900px; max-height: 750px;" alt=""></a>
			</div>
		</div>
		<div id="japonskie3" class="kupa" style="display: none;">
			<div class="zamknij" style="border-radius: 2em 2em 2em 2em;">
				<div title="Minimalizuj" class="close"></div>
				<div id="japonskie3z" title="Zamknij" class="close2"></div>
			</div>
			<a href="#" id="san" class="make2" style="margin-top: 175px;" title="Strona główna">WWW</a>
			<a href="#" id="sann" class="make2" title="Wiki">Wiki</a>
			<div class="tekst">
			</div>
			<div class="cerciki" style="left:35%;">
				<a id="zoom4" href="img/galeria/JLPT-N3.jpg" class="zoom1"><img src="img/galeria/img24.jpg" style="margin-top:-100px;max-width: 900px; max-height: 750px;" alt=""></a>
			</div>
		</div>
		<div id="szkoly1" class="kupa" style="display: none;">
			<div class="zamknij" style="border-radius: 2em 2em 2em 2em;">
				<div title="Minimize" class="close"></div>
				<div id="szkoly1z" title="Close" class="close2"></div>
			</div>
			<div class="tekst">
				fdsfdsfdsfdsfdsdsfdsdsfdsdsfdsdsfdsddsfdsdsfdsdsfddsfdsdsfdsdsfddsfdsdsfdsdsfdsfds
			</div>
		</div>
		<div id="szkoly2" class="kupa" style="display: none;">
			<div class="zamknij" style="border-radius: 2em 2em 2em 2em;">
				<div title="Minimize" class="close"></div>
				<div id="szkoly2z" title="Close" class="close2"></div>
			</div>
			<div class="tekst">
				fdsfdsfdsfdsfdsdsfdsdsfdsdsfdsdsfdsdsfdsdsfddsfdsdsfdsdsfddsfdsdsfdsdsfddsfdsdsfdsdsfddsfdsdsfdsdsfddsfdsdsfds
			</div>
		</div>
		<div id="szkoly3" class="kupa" style="display: none;">
			<div class="zamknij" style="border-radius: 2em 2em 2em 2em;">
				<div title="Minimize" class="close"></div>
				<div id="szkoly3z" title="Close" class="close2"></div>
			</div>
			<div class="tekst">
				fdsfdsfdsfdsfddsfdsdsfdsdsfddsfdsdsfdsdsfddsfdsdsfdsdsfddsfdsdsfdsdsfddsfdsdsfdsdsfdsdsfdsdsfdsdsfdsdsfdsdsfds
			</div>
		</div>
		<div id="szkoly4" class="kupa" style="display: none;">
			<div class="zamknij" style="border-radius: 2em 2em 2em 2em;">
				<div title="Minimize" class="close"></div>
				<div id="szkoly4z" title="Close" class="close2"></div>
			</div>
			<a href="#" id="szkoll" class="make2" style="margin-top: 175px;" title="Strona główna">WWW</a>
			<a href="#" id="szkolll" class="make2" title="Wiki">Wiki</a>
			<div class="tekst">
			</div>
			<div class="cerciki" style="left:35%;">
				<a id="zoom2" href="img/galeria/uczelnia1.jpg" class="zoom"><img src="img/galeria/img22.jpg" style="margin-top:-100px;max-width: 900px; max-height: 750px;" alt=""></a>
			</div>
		</div>
		<div id="grafika" class="kupa" style="display: none;">
				<div class="zamknij" style="margin-top: 40px;border-radius: 2em 2em 2em 2em;">
					<div title="Minimize" class="close"></div>
					<div id="zamknija" title="Close" class="close2"></div>
				</div>
				<a href="#" id="opisG" class="make2" style="margin-top: 175px;" title="Description On/Off">Description</a>
				<a href="#" id="przesunA" class="make2" title="Moving on/off">Movi</a>
				<a href="#" id="resecikA" class="make2" style="margin-top: 265px;" title="Reset">Rese</a>
				<a href="#" id="avatary" class="make2" style="margin-top: 320px;" title="Avatars On/Off">Avat</a>
				<a href="#" id="sygnatury" class="make2" style="margin-top: 365px;" title="Signatures On/Off">Sygn</a>
				<a href="#" id="tla" class="make2" style="margin-top: 410px;" title="Backgrounds On/Off">Back</a>
				<a href="#" id="rendery" class="make2" style="margin-top: 455px;" title="Renders On/Off">Rend</a>
				<a href="#" id="banery" class="make2" style="margin-top: 500px;" title="Banners On/Off">Bann</a>
				<a href="#" id="tapety" class="make2" style="margin-top: 545px;" title="Wallpaper On/Off">Wall</a>
			<div id="avatary1" style="display: none;">
					<div id="avatary-plik1" class="avatarki" style="float: left;">
					<ul>
						<li style="cursor:pointer;"><img src="img/projekty/avatarki/1.gif" alt=""></li>
						<li style="margin-top: -4px;cursor:pointer;">Kafej</li>
					</ul>
					</div>
					<div id="avatary-plik2" class="avatarki" style="float: left;">
					<ul>
						<li style="cursor:pointer;"><img src="img/projekty/avatarki/2.gif" alt=""></li>
						<li style="margin-top: -4px;cursor:pointer;">Kafej 2</li>
					</ul>
					</div>
					<div id="avatary-plik3" class="avatarki" style="float: right;">
					<ul>
						<li style="cursor:pointer;"><img src="img/projekty/avatarki/3.gif" alt=""></li>
						<li style="margin-top: -4px;cursor:pointer;">Henker</li>
					</ul>
					</div>
			</div>
			<div id="sygnatury1" style="display: none;">
					<div id="sygnatury-plik1" class="avatarki" style="float: left;">
					<ul>
						<li style="cursor:pointer;"><img src="img/projekty/sygnaturki/1.png" style="width: 350px;" alt=""></li>
						<li style="margin-top: -4px;cursor:pointer;">Kafej - Sygnaturka</li>
					</ul>
					</div>
					<div id="sygnatury-plik2" class="avatarki" style="margin:0;float: right;">
					<ul>
						<li style="cursor:pointer;"><img src="img/projekty/sygnaturki/2.jpg" style="width: 350px;" alt=""></li>
						<li style="margin-top: -4px;cursor:pointer;">Henker - Sygnaturka</li>
					</ul>
					</div>
			</div>
			<div id="rendery1" style="display: none;">
					<div id="rendery-plik1" class="avatarki" style="float: left;">
					<ul>
						<li style="cursor:pointer;"><img src="img/projekty/renderki/1.gif" style="width: 350px;" alt=""></li>
						<li style="margin-top: -4px;cursor:pointer;">Kafej - Render 1</li>
					</ul>
					</div>
					<div id="rendery-plik2" class="avatarki" style="margin:0;float: left;">
					<ul>
						<li style="cursor:pointer;"><img src="img/projekty/renderki/2.png" style="height: 350px;" alt=""></li>
						<li style="margin-top: -4px;cursor:pointer;">Kafej - Render 2</li>
					</ul>
					</div>
					<div id="rendery-plik3" class="avatarki" style="margin:0;float: right;">
					<ul>
						<li style="cursor:pointer;"><img src="img/projekty/renderki/3.png" style="height: 350px;" alt=""></li>
						<li style="margin-top: -4px;cursor:pointer;">Kafej - Render 3</li>
					</ul>
					</div>
			</div>
			<div id="banery1" style="display: none;">
					<div id="banery-plik1" class="avatarki" style="margin:0;float: left;">
					<ul>
						<li style="cursor:pointer;"><img src="img/projekty/banery/1.jpg" alt=""></li>
						<li style="margin-top: -4px;cursor:pointer;">Kafej - Baner</li>
					</ul>
					</div>
			</div>
			<div id="tapety1" style="display: none;">
					<div id="tapety-plik1" class="avatarki" style="margin:0;float: right;">
					<ul>
						<li style="cursor:pointer;"><img src="img/projekty/tapety/1.jpg" style="height: 350px;" alt=""></li>
						<li style="margin-top: -4px;cursor:pointer;">Kafej - Tapeta</li>
					</ul>
					</div>
			</div>
			<div id="tj_container" class="tj_container">
				<div class="przesuntap">
					<div class="tj_nav">
						<span id="tj_prev" class="tj_prev">Previous</span>
						<span id="tj_next" class="tj_next">Next</span>
					</div>
					<div class="tj_wrapper">
						<ul class="tj_gallery">
							<li><a href="#"><img src="img/projekty/tla/1.jpg" style="width: 400px;" alt="image01"/></a></li>
							<li><a href="#"><img src="img/projekty/tla/2.jpg" style="width: 400px;" alt="image02"/></a></li>
							<li><a href="#"><img src="img/projekty/tla/3.jpg" style="width: 400px;" alt="image03"/></a></li>
							<li><a href="#"><img src="img/projekty/tla/4.jpg" style="width: 400px;" alt="image04"/></a></li>
							<li><a href="#"><img src="img/projekty/tla/5.jpg" style="width: 400px;" alt="image05"/></a></li>
							<li><a href="#"><img src="img/projekty/tla/6.jpg" style="width: 400px;" alt="image06"/></a></li>
							<li><a href="#"><img src="img/projekty/tla/7.jpg" style="width: 400px;" alt="image07"/></a></li>
							<li><a href="#"><img src="img/projekty/tla/8.jpg" style="width: 400px;height: 150px;" alt="image08"/></a></li>
							<li><a href="#"><img src="img/projekty/tla/9.jpg" style="width: 400px;" alt="image09"/></a></li>
							<li><a href="#"><img src="img/projekty/tla/10.jpg" style="width: 400px;" alt="image10"/></a></li>
							<li><a href="#"><img src="img/projekty/tla/11.jpg" style="width: 400px;" alt="image11"/></a></li>
							<li><a href="#"><img src="img/projekty/tla/12.jpg" style="width: 400px;" alt="image12"/></a></li>
							<li><a href="#"><img src="img/projekty/tla/13.jpg" style="width: 400px;height: 150px;" alt="image13"/></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>	
		<div id="projekty2" class="kupa" style="display: none;">
			<div class="zamknij" style="border-radius: 2em 2em 2em 2em;">
				<div title="Minimize" class="close"></div>
				<div id="projektyz" title="Close" class="close2"></div>
			</div>
			<div class="tekst">
				fdsfdsfdsfdsfdsdsfdsdsfddsfdsdsfdsdsfd
			</div>
		</div>
		<div id="prezentacje" class="kupa" style="display: none;">
			<div id="kyouu" title="メーリクリスマス！！！">
				<object id="prezi_9gy7zt1i0xuy" name="prezi_9gy7zt1i0xuy" data="prezi" type="prezi/quicktime" width="600" height="260"><param name="movie" value="http://prezi.com/bin/preziloader.swf"/><param name="allowfullscreen" value="true"/><param name="allowscriptaccess" value="always"/><param name="bgcolor" value="#ffffff"/><param name="flashvars" value="prezi_id=9gy7zt1i0xuy&amp;lock_to_path=1&amp;color=ffffff&amp;autoplay=no&amp;autohide_ctrls=0"/><embed id="preziEmbed_9gy7zt1i0xuy" src="http://prezi.com/bin/preziloader.swf" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" bgcolor="#ffffff" flashvars="prezi_id=9gy7zt1i0xuy&amp;lock_to_path=1&amp;color=black&amp;autoplay=no&amp;autohide_ctrls=0"><embed /></object>
			</div>
			<div id="kyouu2" title="Breadth Search Algorithm">
				<object id="prezi_a34fd10fb280fe225130a4d7f082e145487ba726" name="prezi_a34fd10fb280fe225130a4d7f082e145487ba726" data="prezi" type="prezi/quicktime" width="600" height="260"><param name="movie" value="http://prezi.com/bin/preziloader.swf"/><param name="allowfullscreen" value="true"/><param name="allowscriptaccess" value="always"/><param name="bgcolor" value="#ffffff"/><param name="flashvars" value="prezi_id=a34fd10fb280fe225130a4d7f082e145487ba726&amp;lock_to_path=0&amp;color=ffffff&amp;autoplay=no&amp;autohide_ctrls=0"/><embed id="preziEmbed_a34fd10fb280fe225130a4d7f082e145487ba726" src="http://prezi.com/bin/preziloader.swf" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" bgcolor="#ffffff" flashvars="prezi_id=a34fd10fb280fe225130a4d7f082e145487ba726&amp;lock_to_path=0&amp;color=black&amp;autoplay=no&amp;autohide_ctrls=0"><embed /></object>
			</div>
		</div>
		<div id="kupablog" class="kupa" style="display: none;">
			<div class="zamknij">
				<div id="zamknij4" title="Minimize" class="close"></div>
				<div id="zamknij5" title="Close" class="close2"></div>
			</div>
			<div class="txt">
				<h1>Lorem Ipsum Dolor</h1>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
			</div>
			<div class="txt">
				<h1>Lorem Ipsum Dolor</h1>
				<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
			</div>
		</div>
		<div id="cvu" style="width: 400px;height: 400px;">
			<div id="kupacv" class="kupa" style="display: none;">
				<div class="zamknij">
					<div title="Minimize" class="close"></div>
					<div id="zamknij11" title="Close" class="close2"></div>
				</div>
				<a href="#" id="kliknij" class="make">Click Me</a>
				<a href="#" id="wyrownaj" class="make2" title="Wyrównaj" style="margin-top: 200px;">Align</a>
				<a href="#" id="pobierz" class="make2" title="Pobierz" style="margin-top: 246px;">Down</a>
				<div class="mess">
					<ul class="reset">
						<li class="cv1">
								<b>Michael Zbyl</b><br />
									Date of birth: 22.12.1988 w Gorzowie Wlkp.<br />
									Marital status:
										single<br />
										<b>Contact: <a id="linkcvv" href="#">Click me</a></b>
						</li>
						<li class="cv1" style="width:400px;">
									<b>EDUCATION</b><br />
									2011 - now
										<br  /><div style="margin-left: 6px"><b>West Pomeranian University of Technology in Szczecin</b></div>
										<div style="margin-left: 6px"><b>Faculty of Computer Science and Information Technology</b></div>
										<div style="margin-left: 6px">- MA studies: Computer Science</div>
										<div style="margin-left: 6px">- Schoolarship for academic performance</div><br />
									2009 - 2011
										<br  /><div style="margin-left: 6px"><b>State Higher Vocational School in Gorzow Wlkp.</b></div>
										<div style="margin-left: 6px"><b>Institute of Technology</b></div>
										<div style="margin-left: 6px">- Engineering studies: Computer Science</div>
										<div style="margin-left: 6px">- Graduated with the final grade: <b>good(B)</b></div>
										<div style="margin-left: 6px">- Awarded title: <b>Engineer</b></div>
										<div style="margin-left: 6px">- Scholarship for academic performance</div>
										<div style="margin-left: 6px">- Member of Artificial intelligence Club (as Secretary)</div><br />
									2007 - 2009
										<br  /><div style="margin-left: 6px"><b>Higher Vocational IT School in Gorzow Wlkp.</b></div>
										<div style="margin-left: 6px">- Study engineering: Computer Science</div><br />
									2004 - 2007
										<br  /><div style="margin-left: 6px"><b>High School No.7 in Gorzow Wlkp.</b></div>
										<div style="margin-left: 6px">I was on the profile of an expanded English, mathematics and computer
																	science. I passed 'Matura' with an extended English. (leaving exam)
										</div>
						</li>
						<li class="cv1" style="width:470px;">
									<b>WORK EXPERIENCE</b><br />
									03.2009 - 
										<b>Bamir.Auto.Moto.P.H.U - IT Specialist/Administrator</b><br />
										 - created Corporate networks (LAN and WLAN),<br />
										 - Windows Server administration,<br />
										 - remote Support,<br />
										 - maintenance of IT equipment,<br />
										 - server maintenance and monitoring,<br />
										 - created a Company website<br />
										 - administration and development of the Company website<br /><br />
									06.2007 - 09.2008 
										<b>AsticStudio - Web Developer</b><br />
										 - web application development in PHP,<br />
										 - database design,<br />
										 - add functionality to existing solutions,<br />
										 - testing created software,<br />
										 - created reports and documentations
						</li>
						<li class="cv1" style="width:470px;">
									<b>SKILLS</b><br />
										 - Programming languages: (X)HTML, CSS, JavaScript/AJAX, PHP,
										 <br  /><div style="margin-left: 10px">C#/C++,  Java</div>
										 - Library: jQuery, SMARTY, Android SDK<br />
										 - CMS: Joomla!, Drupal<br />
										 - Databases: SQLite, MySQL<br />
										 - Operating systems: Windows 95-7, Windows Server 2003/2008 R2,
										 <br  /><div style="margin-left: 10px">Linux (Debian/Kubuntu/Ubuntu/Linux Mint/Android), iOS</div>
										 - Software: MS Office, Microsoft Management Console, 
										 <br  /><div style="margin-left: 10px">Adobe Photoshop, NetBeans, Matlab, Eclipse, Rachmistrz GT,</div>
										 <div style="margin-left: 10px">TeamViewer, VMware, VirtualBox, Firebug, Apache Tomcat…</div>
										 - European driving license (Category B)
						</li>
						<li class="cv1">
									<b>LANGUAGES</b><br />
										- English - business level. (<a id="toeic1" href="#">TOEIC</a>)<br />
										- Japanese - intermediate level. (<a id="jlptn411" href="#">JLPT N3</a>)
						</li>
						<li class="cv1">
									<b>INTERESTS</b><br />
										- Japanese language, music and culture<br />
										- new technologies<br />
										- fishing
										- traveling
						</li>
					</ul>
				</div>
			</div>
		</div>
</div>
		<footer>
			<nav>
				<ul>
					<li><a class="top" href="#" title="Top"></a></li>
				</ul>
			</nav>
		</footer>
</body>
</html>