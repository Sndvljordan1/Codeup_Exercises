<?php 
class Log
{
	private $filename;
	private $handle;
	
	public function __construct($prefix = "log"){
		$this->setFileName($prefix);
		$this->handle = fopen($this->filename, 'a');
	}
	
	public function logInfo($message){
	    return $this->logMessage("INFO", $message);
	}
	
	public function logError($message){
	    return $this->logMessage("ERROR", $message);
	}
	
	public function logMessage($logLevel, $message)
	{
	    fwrite($this->handle, PHP_EOL . date("Y-m-d H:i:s ") . "[{$logLevel}] $message" . PHP_EOL);
	}
	
	public function __destruct(){
		if (isset($handle)) {
			fclose($this->handle);
		}
	}

	protected function setFileName($prefix)
    {
    	if(is_string($prefix)){
	        $this->filename = htmlspecialchars(strip_tags(trim($prefix))) . date("Y-m-d") . ".log";
    	}else{
    		die("Strings only please" . PHP_EOL);
    	}
    	if(!touch($this->filename) || !is_writeable($this->filename)){
    		die("File cannot be written to" .PHP_EOL);
    	}
    }


}
 ?>