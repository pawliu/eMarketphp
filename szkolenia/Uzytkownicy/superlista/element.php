<?php
interface WierszListy {
	/**
	 *
	 * @return unikalny identyfikator wiersza, przekazywany do podstron
	 */
	function getId();
	/**
	 * @return ciag znakow reprezentujacy element na liscie
	 */
	function podsumowanie();
}
?>