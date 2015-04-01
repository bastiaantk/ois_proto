$(document).ready(function () {
	$(this).find('.error').hide();

	$(this).on('click', function (event) {
		$('.popup-menu').slideUp();
	});

	$('.popup-menu, .container > header .menu button').on('click', function (event) {
		event.stopPropagation();
	});

	$('.container > header .menu button').on('click', function () {
		var $this = $(this);

		if ($this.hasClass('logout')) {
			document.location.href = 'logout.php';
		}
		else if ($this.hasClass('login')) {
			$('.popup-menu:not(.login)').hide();
			$('.popup-menu.login').slideToggle();
		}
		else if ($this.hasClass('search')) {
			$('.popup-menu:not(.search)').hide();
			$('.popup-menu.search').slideToggle();
		}
		else if ($this.hasClass('language')) {
			$('.popup-menu:not(.language)').hide();
			$('.popup-menu.language').slideToggle();
		}
		else if ($this.hasClass('notifications')) {
			$('.popup-menu:not(.notifications)').hide();
			$('.popup-menu.notifications').slideToggle();
		}
	});

	$('.popup-menu.login form').on('submit', function (event) {
		if ($('#login-password').val() == 'fout') {
			event.preventDefault();
			console.log('fout');
			$(this).find('.error').text('Onjuiste combinatie van wachtwoord/gebruikersnaam').show();
		}
	});

	$('aside .vaksites select').on('change', function () {
		document.location.href = 'index.php?p=vaksites&vak=' + $(this).find('option:selected').prop('value');
	});

	console.log();

	$('.container > .content').css({
		'min-height': $('.container aside').outerHeight()
	});
	$('.container aside').css({
		'top': 0,
		'bottom': 0,
		'min-height': '100%'
	});

	$('.vak').on('mouseover', function (e) {
		var parentOffset = $(this).parent().offset();
		var relX = e.pageX - parentOffset.left + 260;
		var relY = e.pageY - parentOffset.top + 110;
		$('.hidden.vak').show().css({
			top: relY,
			left: relX
		});
	});
	$('.vak').on('mouseout', function () {
		$('.hidden.vak').hide();
	});
	$('.resultaat').on('mouseover', function (e) {
		var parentOffset = $(this).parent().offset();
		var relX = e.pageX - parentOffset.left + 260;
		var relY = e.pageY - parentOffset.top + 110;
		$('.hidden.res').show().css({
			top: relY,
			left: relX
		});
	});
	$('.resultaat').on('mouseout', function () {
		$('.hidden.res').hide();
	});

	$('#practicum-search').on('keydown', function () {
		if ($(this).val().length > 3) {
			$('#practicum-nummer').val('3429834');
		} else {
			$('#practicum-nummer').val('');
		}
	});
});
