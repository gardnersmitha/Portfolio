<?php

//eventually pass this a user id on login.
function getDecks(){
	$html = null;
	//dummy content
	for($i=1;$i<10;$i++){
		//
		$html .= '
		
		<li class="gutter_item">
			<span class="gutter_item_txt">Deck #'.$i.'</span>
			<span class="gutter_item-act" id="gutter_item_act_'.$i.'"></span>
		</li>
		
		';
	}
	
	echo $html;
	
}










//buid a little view
function buildGutterItem($item){

	$html = null;
	
	$html .= '
	
	<li class="gutter_item">
		<span class="gutter_item_txt">'.$item['name'].'</span>
		<span class="gutter_item-act" id="gutter_item_act_'.$item['id'].'></span>
	</li>
	
	';
	
	return $html;
}
















?>