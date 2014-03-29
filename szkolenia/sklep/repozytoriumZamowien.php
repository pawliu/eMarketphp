<?php
require_once 'utils/sqlUtils.php';
require_once '../session/sesje.php';

function zlozZamowienie(Zamowienie $zamowienie) {
	$idUzytkownika = getIdZalogowanegoUzytkownika ();
	$zamowienie->idUzytkownika = $idUzytkownika;
	$zamowienie->status = znajdzStatusPoczatkowy ();
	$creareZamSQL = "insert into Zamowienie (uzytkownik,status,adresWysylki,komentarz)
	values ($idUzytkownika, :status, :adresWysylki, :komentarz)";
	$dbh = dajPDO ();
	try {
		$dbh->beginTransaction ();
		$stmt = $dbh->prepare ( $creareZamSQL );
		$stmt->bindValue ( "status", $zamowienie->status );
		$stmt->bindValue ( "adresWysylki", $zamowienie->adres );
		$stmt->bindValue ( "komentarz", $zamowienie->komentarz );
		$stmt->execute ();
		$zamowienieID = $dbh->lastInsertId ();
		$creareElementSQL = "insert into ElZamowienia (zamowienieId,produktId,ilosc)
		values ($zamowienieID, :produkt, :ilosc)";
		$stmt = $dbh->prepare ( $creareElementSQL );
		foreach ( $zamowienie->elementy as $element ) {
			$stmt->bindValue ( "produkt", $element->id );
			$stmt->bindValue ( "ilosc", $element->ilosc );
			
			$stmt->execute ();
		}
		$dbh->commit ();
		$dbh = null;
		//wyslijMail ( "Temat", "Treœæ w <b>HTML</b>" );
	} catch ( Exception $e ) {
		// kod 500 - blad serwera
		http_response_code ( 500 );
	}
}
// przyklad na podstawie http://swiftmailer.org/
require_once 'lib/swift_required.php';
function wyslijMail($temat, $tresc) {
	
	// Otwprz polaczenie
	$transport = Swift_SmtpTransport::newInstance ( 'localhost', 25 )
//  	->setUsername ( 'test' )->setPassword ( 'test' )
	;;

	;
	
	;
	
	// instancja obiektu wysylajacego
	$mailer = Swift_Mailer::newInstance ( $transport );
	
	// stworz wiadomosc
	$message = Swift_Message::newInstance ( $temat )->setFrom ( array (
			'john@doe.com' => 'John Doe' 
	) )->setTo ( array (
			'niziutki@gmail.com' 
	) )->setBody ( $tresc );
	
	// wyslij
	$result = $mailer->send ( $message );
}
function znajdzZamowienie($id) {
	$selectSql = "select adresWysylki as adres,komentarz,uzytkownik as idUzytkownika,status,data from
	zamowienie where id=$id";
	$zamowienia = sqlQuery ( $selectSql, 'Zamowienie' );
	if (sizeof ( $zamowienia ) != 1) {
		error_log ( "Wynik zapytania o zamowienie zwrocil " . sizeof ( $zamowienia ) . " zamiast 1" );
		serverError ();
		return;
	}
	$zamowienie = $zamowienia [0];
	$selectSql = "select p.nazwa, p.cena, e.ilosc from ElZamowienia e
	join produkt p on p.id=e.produktId
	where e.zamowienieId=$id";
	$zamowienie->elementy = sqlQuery ( $selectSql );
	return $zamowienie;
}
function znajdzZamowieniaUzytkownika() {
	$idUzytkownika = getIdZalogowanegoUzytkownika ();
	$sql = "select id,data,status from Zamowienie where uzytkownik=$idUzytkownika";
	return sqlQuery ( $sql, 'ZamowienieNaLiscie' );
}
function getIdZalogowanegoUzytkownika() {
	$daneUzytkownika = odczytajZSesji ( "daneUzytkownika" );
	if ($daneUzytkownika == null) {
		throw new Exception ( "Brak uzytkownika w sesji" );
	}
	return $daneUzytkownika->id;
}
function znajdzStatusPoczatkowy() {
	return "NOWE";
}
class Zamowienie {
	public $adres = "";
	public $komentarz = "";
	public $idUzytownika = "";
	public $status = "";
	public $data = null;
	public $elementy = array ();
}
class ZamowienieBuilder {
	private $adres = "";
	private $komentarz = "";
	private $elementy;
	private $data = null;
	public static function newInstance() {
		return new self ();
	}
	public function zbudujZWartosciamiDomyslnymi() {
		$zam = new Zamowienie ();
		$zam->adres = $this->adres;
		$zam->komentarz = $this->komentarz;
		$zam->status = znajdzStatusPoczatkowy ();
		if ($this->data != null) {
			$zam->data = $this->data;
		} else {
			$zam->data = date ( "d.m.Y H:i:s", time () );
		}
		$zam->elementy = $this->elementy;
		$zam->idUzytownika = getIdZalogowanegoUzytkownika ();
		return $zam;
	}
	public function zAdresem($adres) {
		$this->adres = $adres;
		return $this;
	}
	public function zKomentarzem($komentarz) {
		$this->komentarz = $komentarz;
		return $this;
	}
	public function zElementami($elementy) {
		$this->elementy = $elementy;
		return $this;
	}
	public function zData($data) {
		$this->data = $data;
		error_log("Ustawiono date=".$data);
		return $this;
	}
}
class ZamowienieNaLiscie {
	public $id;
	public $data;
	public $status;
}

?>