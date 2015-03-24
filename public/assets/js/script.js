$(function(){

	$('body').on('submit','#auth',function(event){
		event.preventDefault();
		var url = $(this).attr('action');
		var cred = $(this).serialize();
		var form = $(this);
		$.ajax({
			cache:false,
			url: url,
			type: 'post',
			data: cred,
			dataType:'json',
			beforeSend:function(){
				form.find('button').attr('disabled',true);
			}
			,error:function( xhr, stat ){
				alert('ERRR: code : '+xhr+ ': '+stat.text);
			}
			,success:function( response ){
				var  appendTo = '';
				var clas = '';
				$('.response-msg').removeClass('alert-success');
				$('.response-msg').removeClass('alert-danger');
				if(response.auth == 1 ){
					$('.response-msg').addClass('alert-success');
					appendTo = '<span class="sr-only">Success:</span>'+response.msg;
					window.location.reload();
				}else{
					
					$('.response-msg').addClass('alert-danger');
					appendTo = '<span class="sr-only">Error:</span>'+response.msg;

				}
				$('.response-msg').removeClass('hide').html(appendTo);
				
			}
			,complete:function(){
				form.find('button').attr('disabled',false);
			}

		});
	});

});