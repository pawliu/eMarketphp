var poprzednieGrafiki = [];

function ustawGrafikiDlaKatalogu(katalog) {
	var znaleziono = false;
	for (var i = 0; i < poprzednieGrafiki.length; i++) {
		var poprzednia = poprzednieGrafiki[i];
		if (poprzednia.katalog == katalog) {
			grafiki = poprzednia.wartosc;
			znaleziono = true;
			break;
		}
	}
	if (znaleziono) {
		wyswietl();
	} else {
		przeladujGrafiki(katalog);
	}

}

function przeladujGrafiki(katalog) {
	request = $.ajax({
		async : false,
		url : "dostarczycielDanych.php",
		data : {
			katalog : katalog
		},
		type : "get"
	});
	request.done(function(odpowiedz, textStatus, jqXHR) {
		console.info(typeof (odpowiedz));
		zapamietajGrafikDlaKatalogu(katalog, odpowiedz);
		grafiki = odpowiedz;
		aktElement = 0;
		wyswietl();
	});
}

function zapamietajGrafikDlaKatalogu(katalog, noweGrafiki) {
	poprzednieGrafiki.push({
		katalog : katalog,
		wartosc : noweGrafiki
	});
}

function wybranoKatalog(a) {
	var katalog = document.getElementById("nazwaKatalogu").value;
	ustawGrafikiDlaKatalogu(katalog);
}