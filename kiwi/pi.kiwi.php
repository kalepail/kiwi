<?php
class Plugin_kiwi extends Plugin {

	var $meta = array(
	  'name'        => 'kiwi',
	  'description' => 'Take Kimono\'s structured APIs and output them into Statamic',
	  'version'     => '1.1',
	  'author'      => '@tyvdh (Tyler van der Hoeven)',
	  'author_url'  => 'http://tylervdh.com'
	);

	public function index() {
		
		$id = $this->fetchParam('id');
		$key = $this->config['key'];
		$collection = $this->fetchParam('collection');
		
		$request = "http://www.kimonolabs.com/api/".$id."?apikey=".$key;
		$response = file_get_contents($request);
		$results = json_decode($response, TRUE);
		
		$results = array_get($results, 'results:'.$collection);
		
//		echo("<pre>");
//		print_r($results);
//		echo("</pre>");	
		
		return Parse::tagLoop($this->content, $results, true);
	}
}
