function pobierzXml(lokalizacja, nazwaDiv) {
	zaladujAjax(lokalizacja, nazwaDiv);

}

function daneOdebrane(nazwaDiv, dane) {
	var txt = new Text();
	var elDocelowy = document.getElementById(nazwaDiv);
	txt.data = dane;
	elDocelowy.innerHTML = "";
	elDocelowy.appendChild(txt);
}

function zaladujAjax(lokalizacja, nazwaDiv) {
	try {
		request = $.ajax({
			url : lokalizacja,
			type : "get",
			data : {
				ex : "",
				id : 123,
				nazwa : "abc",
			}
		});
		request.done(function(odpowiedz, textStatus, jqXHR) {
			// log a message to the console
			daneOdebrane(nazwaDiv, zbudujXml(odpowiedz));

		});
		request.fail(function(jqXHR, textStatus, errorThrown) {
			// log the error to the console
			alert("Problem z ajax: " + textStatus);
		});
	} catch (e) {
		// TODO: handle exception
		alert(e);
	}
}

function zbudujXml(xml) {

	if (xml.xml)
		return xml.xml;
	else if (XMLSerializer) {
		var serializatorXml = new XMLSerializer();
		return serializatorXml.serializeToString(xml);
	} else {
		alert("Blad");
		return "";
	}

}