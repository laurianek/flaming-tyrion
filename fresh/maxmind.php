<?php

function getIPData($type,$lang='fr'){
	
	static $infodata = false;
	
	if(!is_array($infodata) || array_key_exists('error',$infodata) ){
	
		$account = 51743;
		$license = 'Zy3DuvvOBxz3';
		
		$ip = $_SERVER['REMOTE_ADDR'];
		
		$ch = curl_init();
		
		$url = 'https://geoip.maxmind.com/geoip/v2.1/city/'.$ip;
		
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_TIMEOUT,1);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch,CURLOPT_USERPWD,$account.':'.$license);
		
		$retdata = curl_exec($ch);
		
		curl_close($ch);
		
		$infodata = json_decode($retdata,true);

		if(!is_array($infodata) || array_key_exists('error',$infodata)){
			return '';
		}
	}
	
	switch($type){
		case 'country':
			return array_key_exists('country',$infodata) && array_key_exists('iso_code',$infodata['country']) ? $infodata['country']['iso_code'] : '';
			break;
		case 'countryname':
			$names = array_key_exists('country',$infodata) && array_key_exists('names',$infodata['country']) ? $infodata['country']['names'] : array();
			return array_key_exists($lang,$names) ? $names[$lang] : (array_key_exists('en',$names) ? $names['en'] : '');
			break;
		case 'city':
			$names = array_key_exists('city',$infodata) && array_key_exists('names',$infodata['city']) ? $infodata['city']['names'] : array();
			return array_key_exists($lang,$names) ? $names[$lang] : (array_key_exists('en',$names) ? $names['en'] : '');
			break;
		case 'postcode':
			$postcode = '';
			if(array_key_exists('postal',$infodata)){
				if($infodata['postal']['confidence'] > 80){
					$postcode = $infodata['postal']['code'];
				}
			}
			return $postcode;
			break;
		case 'region':
			if(array_key_exists('subdivisions',$infodata)){
				$key = count($infodata['subdivisions']) - 1;
				
				if($key >=0 ){
					$names = $infodata['subdivisions'][$key]['names'];
					
					return array_key_exists($lang,$names) ? $names[$lang] : (array_key_exists('en',$names) ? $names['en'] : '');
				}else{
					return '';
				}
			}else{
				return '';
			}
			break;
	}
	
}