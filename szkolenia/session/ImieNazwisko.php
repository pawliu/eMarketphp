<?php
class ImieNazwisko implements ImieNazwiskoBase {
	public $id;
	protected  $nazwisko;
	public  $imie;
	public function __construct() {
	}

	public function getImie() {
		return $this->imie;
	}
	public function getNazwisko() {
		return $this->nazwisko;
	}
	
	public function __destruct(){
		
	}
}
// abstract class 
interface ImieNazwiskoBase {
	public function getImie();
	public function getNazwisko();
}
class ImieNazwiskoExt extends ImieNazwisko {
	public function tekstDoPrzywitania() {
		return $this->getImie () . "&nbsp" . $this->getNazwisko ()."(metoda z klasy ImieNazwiskoExt)";
	}
	
	public function getNazwisko(){
		return parent::getNazwisko();
	}
	
	public function zmienImie($noweImie){
		$this->imie=$noweImie;
	}
	
	public function __destruct(){

	}
}
?>