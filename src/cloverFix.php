<?php


function cloverFixFileName($givenName) {
    return str_replace('/', '\\', $givenName);
}

function cloverFix($givenFile) {
  //load in file as simple xml
    $xml = simplexml_load_file($givenFile);
  //loop over all name attributes from the file tags
    foreach ($xml->xpath('//file') as $fileTag) {
      //replace name by cloverFixFileName version of name
//	    echo("\n .. found one! :: ".$fileTag['name']);
        $fileTag['name'] = cloverFixFileName($fileTag['name']);
    }

  //return new xml (as a string)	
    return $xml->asXML();
}

?>
