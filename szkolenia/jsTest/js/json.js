function pobierzDaneJson(lokalizacja, nazwaDiv) {
	request = $.ajax({
		async : false,
		url : lokalizacja,
		data : {
			id : 123
		},
		type : "get"
	});
	request.done(function(odpowiedz, textStatus, jqXHR) {
		// log a message to the console
		// var obiektOdpowiedzi=jQuery.parseJSON(odpowiedz);
		var dane = zbudujDane(odpowiedz);
		var elDocelowy = document.getElementById(nazwaDiv);
		elDocelowy.innerHTML = dane;
	});
	request.fail(function(jqXHR, textStatus, errorThrown) {
		// log the error to the console
		alert("Problem z ajax: " + textStatus);
	});
}

function zbudujDane(odpowiedz) {
	var dane = "";
	for (var i = 0; i < odpowiedz.length; i++) {
		var element = odpowiedz[i];
		dane += "id=" + element.id + ", nazwa=" + element.nazwa + " ,kod="
				+ element.kod + "</br>";
	}
	return dane;
}