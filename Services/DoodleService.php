<?php
namespace DidUngar\DoodleBundle\Services;

class DoodleService {
	protected $title = '';
	public function setTitle($title) {
		$this->title = $title;
	}
	protected $name = '';
	public function setName($name) {
		$this->name = $name;
	}
	protected $options = [];
	public function addOption($option) {
		$this->options[] = $option;
	}
	public function getUrl() {
		$iOption = 0;
		foreach($this->options as $key => $val) {
			$iOption ++;
			$this->options[$key] = "option{$iOption}=".urlencode($val);
		}
		return "http://doodle.com/create?type=text&locale=fr&title=".urlencode($this->title)."&name=".urlencode($this->name)."&".implode('&', $this->options);
	}
}

