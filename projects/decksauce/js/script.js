/*

============================================
@ Document Title: script.js
@ Created By: Austin Gardner-Smith
@ Created On: 00/00/2010
@ Description: Javascript for Project
@ Copyright ©Austin Gardner-Smith, 2010
============================================

*/


//Some globals

var loader  = rooturl+'assets/loader.gif';
var panel = $('#panel');

//Init everything

$(document).ready(function(){
	newDeck();
	getDeck();
	newSlide();
	getSlide();
	editSlide();
//	saveSlide();
});

//Create new slide on click
function newSlide(){

	$('div.create_slide').click(function(){
		var obj = $(this).attr('id').split('#');
		var deck_id = obj[1];
		
		$.ajax({
			type: 'POST',
			url: rooturl+'slide/index.php',
			data: 'task=create&deck_id='+deck_id,
			success: function(html){
				alert(html);
				var slide = '<li class="gutter_item slide" id="deck#'+deck_id+'slide#'+html+'">';
				 	slide +=		'<span class="gutter_item_txt">Untitled Slide</span>';
				 	slide +=		'<span class="gutter_item-act"></span>';
					slide += '</li>';
					
				$('#gutter ul').append(slide);
			}
		});
	});
	
}

//Create a new deck on click
function newDeck(){
	$('div.create_deck').click(function(){
		var title = prompt('Give your new deck a title','')
		if(title == null){
			alert('Your deck needs to have a title.');
		}else{
			$.ajax({
				type: 'POST',
				url: rooturl+'deck/index.php',
				data: 'task=create&title='+title,
				success: function(html){
					$('#panel').html(html);
					$('#redirect').click();
				}
			});
		}
	});
}

function getDeck(){
	$('li.gutter_item.deck .gutter_item_txt').click(function(){
		var obj = $(this).parent().attr('id').split('#');
		var deck_id = obj[1];
		
		$.ajax({
			type: 'POST',
			url: rooturl+'deck/index.php',
			data: 'task=preview&deck_id='+deck_id,
			success: function(html){
				$('#panel').html(html);
			}
		});
		
	});
}

function editDeck(){
	$('li.gutter_item.deck .gutter_item_act').click(function(){
		var obj = $(this).parent().attr('id').split('#');
		var deck_id = obj[1];
		
		$.ajax({
			type: 'POST',
			url: rooturl+'deck/index.php',
			data: 'task=edit&deck_id='+deck_id,
			success: function(html){
				$('#panel').html(html);
			}
		});
		
	});

}

function editSlide(){
	$('li.gutter_item.slide' ).click(function(){
		var obj = $(this).attr('id').split('#');
		var deck_id = obj[1];
		var slide_id = obj[3];
		alert(slide_id);
		
		$.ajax({
			type: 'POST',
			url: rooturl+'deck/index.php',
			data: 'task=edit&deck_id='+deck_id+'&slide_id='+slide_id,
			success: function(html){
				$('#panel').html(html);
				$('li.gutter_item').removeClass('active');
				$(this).addClass('active');
			}
		});
		
	});
}


function saveSlide(obj){
	var info = $(obj).parent().attr('id').split('#');
	var slide_id = info[1];
	
	var title = $('#slide_title_input').val();
	var content = $('#slide_content_input').val();
	
	alert('Title='+title+' and content = '+content);
	
	$.ajax({
			type: 'POST',
			url: rooturl+'slide/index.php',
			data: 'task=save&slide_id='+slide_id+'&title='+title+'&content='+content,
			success: function(html){
				if(html = 'success'){
					$('#notifier').html('Changes saved!').fadeIn('slow');
					$('li.gutter_item.active').children('.gutter_item_txt').html(title);
				}else{
					$('#notifier').html('Didn\'t work. You suck. ').fadeIn('slow');
				}
			}
		});
	
}



function getSlide(){}



















