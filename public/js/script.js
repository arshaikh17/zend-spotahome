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
		var data						 =	table.data().toArray();
		var dataArray					 =	[];
		
		for (var i in data) {
			
			dataArray.push(data[i]);
		}
		
		$.ajax({
			url							 :	"/application/download",
			method						 :	"POST",
			data						 :	{data : dataArray},
			success						 :	function (data) {
				
				$("<a />", {
					"download": "data.json",
					"href" : "data:application/json," + encodeURIComponent(JSON.stringify(data))
				})
				.appendTo("body")
				.click(function() {
					$(this).remove()
				})[0]
				.click()
				
			}
		})
		
	})
	
}

