<?php

class Plugin_kiwi extends Plugin {

	public function index() {
		
		$key = $this->fetchParam('key');
		$id = $this->fetchParam('id');
		$collection = $this->fetchParam('collection');
		
		$request = "http://www.kimonolabs.com/api/".$id."?apikey=".$key."";
		$response = file_get_contents($request);
		$results = json_decode($response, TRUE);
		
		$count = $results['count'];
		
		$results = $results['results'];		
		$results = $results[$collection];
		
		$output = "";
		
		foreach ($results as $result) {
			$output .= Parse::template($this->content, $result);	
		}	
		
		return $output;
	}
}