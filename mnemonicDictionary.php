<?php
require 'simple_html_dom.php';

$html = file_get_html('http://mnemonicdictionary.com/wordlist/GREwordlist');

echo '<html><body><table>';

foreach ($html->find('#home-middle-content',0)->find('.row-fluid') as $rowFluid) {

	if(!empty($rowFluid->find('h2', 0))){
		echo '<tr><td>';
		echo $rowFluid->find('h2', 0)->plaintext;
		echo '</td>';
	}
	if(!empty($rowFluid->find('p', 0))){
		echo '<td>';
		echo str_replace('Short Definition : ', '', $rowFluid->find('p', 0)->plaintext);
		echo '</td></tr>';
	}

}


?>