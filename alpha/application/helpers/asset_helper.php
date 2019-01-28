<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');

/********** Link fichier CSS ********************/
if (!function_exists('css_url')){
	function css_url($nom){
		return base_url() . 'asset/css/' . $nom . '.css';
	}
}//

/********** SRC fichier JS ********************/
if (!function_exists('js_url')){
	function js_url($nom){
		return base_url() . 'asset/js/' . $nom . '.js';
	}
}//

/********** SRC dossier "images" ********************/
if (!function_exists('images_url')){
	function images_url($nom){
		return base_url() . 'asset/images/' . $nom;
	}
}//

/********** SRC dossier "img" ********************/
if (!function_exists('img_url')){
	function img_url($nom){
		return base_url() . 'asset/img/' . $nom;
	}
}//

/********** SRC dossier "TinyMCE" ********************/
if (!function_exists('tinymce_url')){
	function tinymce_url($nom){
		return base_url() . 'asset/tinymce/' . $nom;
	}
}//