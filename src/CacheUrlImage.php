<?php

namespace Ama\Util;

/*
 * CacheUrlImage v1.0.0
 *
 * By Anders Andersen
 *
 * Free to use and abuse under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 */
class CacheUrlImage {
	
	/**
	*  Path to cache folder
	*
	*	@var string
	*/
	public $path = "images/";

	/**
	*  How long should the image be cached (in seconds)
	*
	*	@var string
	*/
	public $cache_time = "3600";
	
	/**
	*	Cache image
	*
	*	@parama string $image
	*	@return image path
	*/
	public function cache($url){
		
		$file_name = explode("/", $url);
		$file_name = end($file_name);
		

		if ($this->is_cached($file_name)){
			return $this->path . $file_name;	
		}
		else {
			$this->saveImage($file_name, $url);
			return $this->path . $file_name;
		}

	}
	

	/**
	*	Check if image exits
	*
	*	@param stirng $file_name
	*	@return void
	*/
	public function is_cached($file_name){
		
		$file_name = $this->path . $file_name;
		if(file_exists($file_name) && (filemtime($file_name) + $this->cache_time >= time())) return true;	

		return false;
	}

	
	/**
	* 	Save image 
	*
	*	@param string $file_name
	*	@param string $url
	* 	@return void
	*/
	public function saveImage($file_name, $url){

		// Get image
		$image = file_get_contents($url);

		$file = $this->path . $file_name;	
		file_put_contents($file, $image);
	}
	
	
}