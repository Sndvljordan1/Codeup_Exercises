<?php

function parseContacts($filename)
{
    $contacts = array();
    $filename = 'contacts.txt';
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contact = explode("\n", $contents);
    foreach ($contact as $key => $value) {
    	$contactsArray = explode('|', $value);
    	$contacts[] = array(
    		'Name' => $contactsArray[0],
    		'Number' => phoneNumber($contactsArray[1])
    		);
    	// $fields = ['Name', 'Number'];
    	// $inner = array_combine($fields, explode("|", $value));
    	// $inner['Number'] = phoneNumber($inner['Number']);
    	// array_push($contacts, $inner);
    }
    fclose($handle);
    return $contacts;
}
function phoneNumber($someNumber){
	$someNumber = substr($someNumber, 0, 3) . '-' . substr($someNumber, 3, 3) . '-' .substr($someNumber, 6, 4);
	return $someNumber;
}

var_dump(parseContacts('contacts.txt'));
