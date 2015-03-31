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
});
