<?php
require_once 'superlista/element.php';
class Uzytkownik implements WierszListy{
	private $id;
	private $login;
	private $haslo;
	private $imie;
	private $nazwisko;
	private $email; 
	private $skasowany;
	public function __construct($id = null) {
		if ($id != null) {
			$this->id = $id;
		}
	}
	function ustawNoweDane($login, $haslo, $imie, $nazwisko, $email) {
		$this->login = $login;
		$this->haslo = $haslo;
		$this->imie = $imie;
		$this->nazwisko = $nazwisko;
		$this->email = $email;
	}
	function podsumowanie() {		
		return $this->login . "&nbsp" . $this->imieNazwisko ();
	}
	function imieNazwisko() {
		return $this->imie . "&nbsp" . $this->nazwisko;
	}
	function getLogin() {
		return $this->login;
	}
	function getHaslo() {
		return $this->haslo;
	}
	function getImie() {
		return $this->imie;
	}
	function getNazwisko() {
		return $this->nazwisko;
	}
	function getEmail() {
		return $this->email;
	}
	function getId() {
		return $this->id;
	}
	
	function dostepny(){
		return !$this->skasowany;
	}
}
?>