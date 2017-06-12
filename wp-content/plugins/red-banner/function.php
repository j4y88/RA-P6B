<?php
/*
Plugin Name: Red banner
Plugin URI: redacademy.com
Description:Adding function to create a custom banner
Version: 0.1
Author: Your name
*/

function hello() {
	echo "Hello!!";
}

function show_title() {
	echo the_title();
}

class new_title {
	function init() {
		the_title();
	}
}

class display_post{

	function __cons(){
		self::init();
	}
	private $hi = "Hello";

	public function init() {
		$this->posts=get_post();
		self:: new_title();
	}
	private function new_title() {
		$this->post=$this->posts;
		self:: render();
	}
	private function render () {
		echo $this->post->post_title;
		echo $this->post->post_date;
		echo $this->post->post_content;
	}
}

class display_banner{
	function __construct(){
		self:: check_img();
	}
	public function check_img() {
		if(get_field("banner-image") && !is_archive() && !is_search()){
			self::show_banner();
		} else {
			self::hide_banner();
		}
	}
	private function show_banner() {
		?>
		<style>
			.hero-background {
				background: url(<?php the_field("company-logo"); ?>) center no-repeat,
				url(<?php the_field("banner-image"); ?>) center bottom no-repeat;
				background-size: auto, cover;
				height: 70vh;
			}
		</style>
		<?php
	}
	private function hide_banner() {
		?>
		<style>
			.hero-background {
				height: 45px;
				border-bottom: 1px solid grey;
				margin-bottom: 1px;
			}
			nav div a {
				color: darkgrey;
			}
		</style>
		<?php
	}
}

class display_logo{
	function __construct(){
		self:: check_img();
	}
	public function check_img() {
		if(get_field("banner-image") && !is_archive() && !is_search()){
			self::show_white();
		} else {
			self::show_green();
		}
	}
	private function show_white() {
		echo "whitelogo";
	}
	private function show_green() {
		echo "greenlogo";
	}
}

function first25words($s) {
    return preg_replace('/((\w+\W*){49}(\w+))(.*)/', '${1}', $s);    
}
?>