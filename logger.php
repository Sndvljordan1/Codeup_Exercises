<?php
function logMessage($logLevel, $message)
{
    $filename = "log-" . date("Y-m-d") . ".log";
    $handle = fopen($filename, 'a');
    fwrite($handle, PHP_EOL . date("Y-m-d H:i:s ") . "[{$logLevel}] $message" . PHP_EOL);
    fclose($handle);
}
function logInfo($message){
    return logMessage("INFO", $message);
}
function logError($message){
    return logMessage("ERROR", $message);
}
logInfo("Han shot first.");
logError("IT'S A TRAP!!!!");