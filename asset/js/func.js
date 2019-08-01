function pexxrcent() {  //name,img,lore,price
	$.post( "_fewza.php?qr-code",{money: 	$('#money').val(),percent: $('#percent').val()},  function(data) {

			var obj = jQuery.parseJSON(data);

			if (obj.status == 'success') {
				//swalalert('Success!',obj.message,'success')
				
	
				  document.getElementById("qrcode").src = obj.base64za;

				
				$("#myModal").modal(); //qrcode
				
			} else if (obj.status == 'error') {
				swalalert('Error!',obj.message,'error')
			}
		}
	);
	


}

function reportid() {
	
}

$(document).ready(function() {
	$('#editemployee').on('show.bs.modal', function (event) {
	  var button = $(event.relatedTarget);
	  var id= button.data('id');
	  var modal = $(this);
	  modal.find('#emp_id').val(id);
	});
});

function swalalert(title,message,type) {
	if (type == "success"){
		Swal.fire({
			title: title,
			text: message,
			type: type,
			confirmButtonColor: '#32CD32',
			confirmButtonText: '<i class="fa fa-check"></i> OK'
		   }).then((result) => {
		   if (result) {
		   }
		   })
		return;
	} else if (type == "error") {
		Swal.fire({
			title: title,
			text: message,
			type: type,
			confirmButtonColor: '#E54D40',
			confirmButtonText: '<i class="fa fa-times"></i> OK'
		   }).then((result) => {
		   if (result) {
		   }
		   })
		return;
	}
}
