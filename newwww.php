<script>
$(document).ready(function(){
	var req = null;
	$('#keysearch').on('keyup', function(){
		var key = $('#keysearch').val();
		if (key && key.length > 2)
		{
			$('#loading').css('display', 'block');
			if (req)
				req.abort();
			req = $.ajax({
				url : 'fetch_record.php',
				type : 'POST',
				cache : false,
				data : {
					keysearch : key,
				},
				success : function(data)
				{
					console.log(data)
					if (data)
					{
						$('#loading').css('display', 'none');
						$("#result").html(data).show();
					}
				}
			});
		}
		else
		{
			$('#loading').css('display', 'none');
			$('#result').css('display', 'none');
		}
 
	});
});
</script>