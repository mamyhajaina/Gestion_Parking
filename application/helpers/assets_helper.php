<?php
	if(!defined('BASEPATH')) exit('No direct script access allowed');
		if(!function_exists('css_login')){
			function css_login($cssFileName){
				$cssFolder="assets/Login_v3/";
				return site_url($cssFolder.$cssFileName);
			}
		}
		if(!function_exists('css_front')){
			function css_front($cssFileName){
				$cssFolder="assets/Front/";
				return site_url($cssFolder.$cssFileName);
			}
		}
		if(!function_exists('css_back')){
			function css_back($jsFileName){
				$jsFolder="assets/Back/";
				return site_url($jsFolder.$jsFileName);
			}
		}
		if(!function_exists('img_produit')){
			function img_produit($jsFileName){
				$jsFolder="assets/Front/img/Produits/";
				return site_url($jsFolder.$jsFileName);
			}
		}
		if(!function_exists('bootstrap_js_loader')){
			function bootstrap_js_loader($jsFileName){
				$jsFolder="assets/Css/Bootstrap/bootstrap-4.3-2.1-dist/js/";
				return site_url($jsFolder.$jsFileName);
			}
		}
		if(!function_exists('plugins_loader')){
			function plugins_loader($jsFileName){
				$jsFolder="assets/plugins/";
				return site_url($jsFolder.$jsFileName);
			}
		}
		if(!function_exists('image_loader')){
			function image_loader($imageSource){
				$imageFolder="assets/images/";
				return site_url($imageFolder.$imageSource);
			}
		}
		if(!function_exists('font_loader')){
			function font_loader($font){
				$fontFolder="assets/webfonts/";
				return site_url($fontFolder.$font);
			}
		}
?>