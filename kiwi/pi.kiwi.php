<?php
class Plugin_kiwi extends Plugin {

	var $meta = array(
	  'name'        => 'kiwi',
	  'description' => 'Take Kimono\'s structured APIs and output them into Statamic',
	  'version'     => '1.0',
	  'author'      => '@tyvdh (Tyler van der Hoeven)',
	  'author_url'  => 'http://tylervdh.com'
	);

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