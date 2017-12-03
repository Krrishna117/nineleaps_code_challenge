$(document).ready(function(){
	$("#add_employee").click(function(e){
		e.preventDefault();
		var firstName = $("#firstName").val();
		var lastName = $("#lastName").val();
		var emplyeeRole = $("#emplyeeRole option:selected").text();
		var reportingManager = $("#reportingManager option:selected").text();
		var formInput = $("#add_user_form").serialize();

		if($.trim(firstName)==''){
			$("#firstName").css('border-color', '#de1414');
		}else{
			$("#firstName").css('border-color', '#13963b');
		}
		if($.trim(lastName)==''){
			$("#lastName").css('border-color', '#de1414');
		}else{
			$("#lastName").css('border-color', '#13963b');
		}
		if(emplyeeRole=='' || emplyeeRole=="Employee role"){
			$("#emplyeeRole").css('border-color', '#de1414');
		}else{
			$("#emplyeeRole").css('border-color', '#13963b');
		}
		if(reportingManager=='' || reportingManager=="select reporting manager"){
			$("#reportingManager").css('border-color', '#de1414');
		}else{
			$("#reportingManager").css('border-color', '#13963b');
		}
		$.ajax({
			type: "POST",
			url: "store_employee_details.php",
			data: formInput,
			success: function(data){
				$("#firstName").css('border-color', '#c1c1c1');
				$("#lastName").css('border-color', '#c1c1c1');
				$("#emplyeeRole").css('border-color', '#c1c1c1');
				$("#reportingManager").css('border-color', '#c1c1c1');
				$("#reportingManager").prop('disabled', false);
				$("#add_user_form").trigger('reset');
				alert("Employee Details are successfully added to database...");
			},
			error: function(err){
				alert(err);
			}
		});
	});

	$("#emplyeeRole").change(function(e){
		e.preventDefault();
		var emplyeeRole = $("#emplyeeRole option:selected").text();
		if(emplyeeRole=="CEO")
			$("#reportingManager").prop('disabled', true);
		else
			$("#reportingManager").prop('disabled', false);
	});

	$("#reset_form").click(function(e){
		e.preventDefault();
		$("#firstName").css('border-color', '#c1c1c1');
		$("#lastName").css('border-color', '#c1c1c1');
		$("#emplyeeRole").css('border-color', '#c1c1c1');
		$("#reportingManager").css('border-color', '#c1c1c1');
		$("#reportingManager").prop('disabled', false);
		$("#add_user_form").trigger('reset');
	});
});