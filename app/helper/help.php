<?php
 function getsitenamefb(){
  $row= DB::table('setesetting')->select('fb');
   if($row->exists()){
    return $row;
   }
 	
 }
  function getsitenametw(){
    $row= DB::table('setesetting')->select('tw');
   if($row->exists()){
    return $row;
   }
 	
 }
  function getsitenameyt(){
  $row= DB::table('setesetting')->select('yt');
    if($row->exists()){
    return $row;
   }
 	
 }
  function geisettings($value="sitename"){
    return isset(\App\Settings::first()->{$value}) ? \App\Settings::first()->{$value}: null;
   
 	
 }
 function bu_type(){
 	$arr=['شقة','فيلا','شاليه'];
 	return $arr;
 }
 function bu_rent(){
 	$arr=['تمليك','ايجار'];
 	return $arr;
 }
  function bu_status(){
 	$arr1=['غير مفعل','مفعل'];
 	return $arr1;
 }
  function rooms(){
  	$arr1=[];
  	for ($i=1; $i < 20 ; $i++) { 
  		$arr1[$i]=$i;
  	}
 	
 	return $arr1;
 }
 function searchnamefield(){
 	$arr=array(
 	"bu_price" =>"السعر",
 	"rooms"=>"عدد الغرف",
 	"bu_type"=>"نوع العقار",
 	"bu_rent"=>"نوع العملية",
 	"bu_square"=>"المساحة",
 	"bu_price_from"=>"من سعر",
 	"bu_price_to"=>"الي سعر"
 	);
 	return $arr;
 }
 function unreadmessage(){
 	return \App\Message::where("view",0)->get();
 }
  function countmessage(){
 	return \App\Message::where("view",0)->count();
 }
 function setactive($array,$class="active"){
 	if(!empty($array)){
 		$args_arr=[];
 		foreach ($array as $key => $url) {

 			if(Request::segment($key+1) == $url){
 				$args_arr[]=$url;

 			}
 		}
 		if(count($args_arr) == count(Request::segments())){
 			if(isset($args_arr[0])){
 				return $class;
 			}
 		}

 	}
 }
