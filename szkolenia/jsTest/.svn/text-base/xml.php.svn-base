<?php
require_once 'element.php';
header ( 'Content-Type: text/xml' );
echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>";
echo "<!-- Paramenry \$_GET";
foreach ($_GET as $key => $value) {
	echo "$key=$value ";
}
echo "-->";
if (! isset ( $_GET ['ex'] )) {
	echo "<test>
	<element id='1'>
		<nazwa value=\"Element 1\"/>
		<kod>Element 1</kod>
	</element>
	<element id='2'>
		<nazwa value=\"Element 2\"/>
		<kod>Element 2</kod>
	</element>
</test>";
} else {
	$dane = dajElementy ();
	$xml = dajXml ( $dane );
	echo $xml;
}
function dajXml($dane) {
	$xmlWriter = new XMLWriter ();
	$xmlWriter->openMemory ();
	$xmlWriter->writeComment("Dane generowane przez php");
	$xmlWriter->startElement ( "test" );
	foreach ( $dane as $dana ) {
		$xmlWriter->startElement ( "element" );
		$xmlWriter->writeAttribute ( "id", $dana->id );
		$xmlWriter->startElement ( "nazwa" );
		$xmlWriter->writeAttribute ( "value", $dana->nazwa );
		$xmlWriter->endElement ();
		$xmlWriter->startElement ( "kod" );
		$xmlWriter->writeRaw ( $dana->kod );
		$xmlWriter->endElement ();
		$xmlWriter->endElement ();
	}
	$xmlWriter->endElement ();
	return $xmlWriter->outputMemory ( true );
}

?>

