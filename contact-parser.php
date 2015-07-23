<?php
function parseContacts($filename)
{
    $contacts = array();
    $handle = fopen($filename, 'r');
    $contents = trim(fread($handle, filesize($filename)));
    $contact = explode("\n", $contents);
    foreach ($contact as $key => $value) {
    	$contactsArray = explode('|', $value);
    	$contacts[] = array(
    		'Name' => $contactsArray[0],
    		'Number' => phoneNumber($contactsArray[1])
		);
    }
    fclose($handle);
    return $contacts;
}
function phoneNumber($someNumber){
	$someNumber = substr($someNumber, 0, 3) . '-' . substr($someNumber, 3, 3) . '-' .substr($someNumber, 6, 4);
	return $someNumber;
}
function addContact($filename, $newContact){
    $handle = fopen($filename, 'a');
    fwrite($handle, $newContact);
    fclose($handle);
}

$new = "Jesse's Girl|3218675309";

addContact('contacts.txt', $new);

var_dump(parseContacts('contacts.txt'));
