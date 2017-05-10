$(document).on("ready",main);

function main()
{
	$("form").submit(function(e){
		e.preventDefault();
		$.ajax({
		url:"add",
		type: "post",
		data: $("#formoferta").serialize(),
		success:function(){
			swal({
  				title: "Auto close alert!",
  				text: "I will close in 2 seconds.",
  				timer: 10000,
  				showConfirmButton: false,
  				
				});
			window.location="";
		}
	});
	});
}