$(document).ready(function () {
	
	initializeDatatables();
	
});

function initializeDatatables () {
	
	$("#advertTable").DataTable();
	$("div.dataTables_filter input").addClass("form-control");
	$("div.dataTables_length select").addClass("form-control");
	
}

