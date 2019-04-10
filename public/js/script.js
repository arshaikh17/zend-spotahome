$(document).ready(function () {
	
	initializeDatatables();
	
});

function initializeDatatables () {
	
	$("#advertTable").DataTable({
		columnDefs						 :	[{
			"targets"					 :	[0, 4, 5],
			"orderable"					 :	false,
		}]
	});
	
}

