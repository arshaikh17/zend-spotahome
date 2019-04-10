$(document).ready(function () {
	
	initializeDatatables();
	
});

function initializeDatatables () {
	
	var table							 =	$("#advertTable").DataTable({
		columnDefs						 :	[{
			"targets"					 :	[3, 4],
			"orderable"					 :	false,
		}]
	});
	
	$("#download").click(function (e) {
		
		e.preventDefault();
		var data						 =	table.rows().data().toArray();
		var dataArray					 =	[];
		
		for (var i in data) {
			dataArray.push(data[i]);
		}
		
		$.ajax({
			url							 :	"/application/download",
			method						 :	"POST",
			data						 :	{data : dataArray},
			success						 :	function (data) {
				console.log(data)
			}
		})
		
	})
	
}

