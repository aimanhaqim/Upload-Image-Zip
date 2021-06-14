$(document).ready(function(){
	$('#btn_zip').on('click', function(){
		var file_data = $('#zip_file').prop('files')[0];
		if(file_data != undefined){
			var form_data = new FormData();
			form_data.append('zip_file', file_data);
			$.ajax({
				type: 'POST',
				url: 'extract.php',
				contentType: false,
				processData: false,
				data: form_data,
				success: function(data){
					$('#result').html(data);
				}
			});
		}
		return false;
	});
});