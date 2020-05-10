$(document).ready(function(){

	$,get('show.php',function(data){
		$('data-show').html(data);
	})
})