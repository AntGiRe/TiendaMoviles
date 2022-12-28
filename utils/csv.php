<?php
class Csv{

	private $csv_file;

	public function __construct($csv_file){
		$this->csv_file = $csv_file;
	}

	public function csvToArray(){
		$result = array();
		$csv = file($this->csv_file);
		foreach($csv as $line) {
			$result[] =  str_getcsv($line, ";");  
		}
		return $result;
	}

	public function addArray($array){
		$fp = fopen($this->csv_file, 'a');
		fputcsv($fp, $array, ";");
		fclose($fp);
	}

	public function arrayToCsv($array){
		$fp = fopen($this->csv_file, 'a');
		foreach ($array as $fields) {
			fputcsv($fp, $fields, ";");
		}
		fclose($fp);
	}
}
?>