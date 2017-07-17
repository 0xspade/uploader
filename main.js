$(document).ready(function(){

	var form = $("#uploadForm");

	form.ajaxForm({

		beforeSend : function(){
			$(".progress").show();
		},

		uploadProgress : function(event, position, total, percentComplete){
			$(".progress-bar").delay(500).width(percentComplete+'%');
			$(".progress-bar").delay(500).html(percentComplete+'%');
		},

		success : function(){
			$(".progress").hide();
			$("#file").val("");
		},

		complete : function(response){
			if(response.responseText == "invalid_file"){

				$(".result").show(function(){
					$(".result").html('<div class="alert alert-danger" role="alert"><strong><i class="fa fa-times" aria-hidden="true"></i> Oh snap!</strong> Only Image File is Allowed.</div>');
				});				
				$(".img").hide();

			}else if(response.responseText == "error"){

				$(".result").show(function(){
					$(".result").html('<div class="alert alert-warning" role="alert"><strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Warning!</strong> An Error Occured, Please Try Again.</div>');
				});
				$(".img").hide();

			}else{

				$(".result").show(function(){
					$(".result").html('<div class="alert alert-success" role="alert"><strong><i class="fa fa-check" aria-hidden="true"></i> Well done!</strong> Your Image Successfully Uploaded.</div>');
				});
				
				$(".img").show(function(){
					$(".img").html("<a href='"+response.responseText+"'><img src='"+response.responseText+"' width='100%'></a><div class='buttons'><button type='button' id='save_button' class='btn btn-success'><i class='fa fa-check' aria-hidden='true'></i></button><button type='button' data-path='"+response.responseText+"' id='remove_button' class='btn btn-danger'><i class='fa fa-times' aria-hidden='true'></i></button></div>");
					
					//Delete the Pics :D
					$("#remove_button").click(function(){
						if( confirm("Delete This Image?") == true ){
							var path = $("#remove_button").data("path");
							$.ajax({
								url : "delete.php",
								type : "POST",
								data : { path:path },
								success : function(data){
									
									$(".result").hide(function(){
										$("#result").show(1000, function(){
											$(this).delay(3000).hide(1000);
										});
										$(".img").hide();
									});

								}

							});
						}else{
							return false;
						}
					});

					//Save Pic :D
					$("#save_button").click(function(){
						
						$(".result").hide(function(){
							$("#saved").show(1000, function(){
								$(this).delay(3000).hide(1000);
							});
							$(".img").hide();
						});
					});


				});

			}
			
		}

	});

	$(".progress").hide();
	$(".result").hide();
	$("#result").hide();
	$("#saved").hide();
});