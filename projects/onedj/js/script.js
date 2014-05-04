/*

============================================
@ Document Title: script.js
@ Created By: Austin Gardner-Smith
@ Created On: 12/02/2010
@ Description: Javascript for oneDJ
@ Copyright ©Austin Gardner-Smith, 2010
============================================

*/


jQuery(document).ready(function(){
	
	callUpload();


});


var rootURL = '/onedj/';

function callUpload(){
	
	$('#upload').click(function(){
	
		$.ajax({
			type: 'POST',
			url: 'ajax.php',
			data: '&task=upload',
			success: function(html){
				$('div.panel').html(html);
			}
		
		});
	
	});
}



























