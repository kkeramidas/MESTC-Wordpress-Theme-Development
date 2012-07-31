$(document).ajaxComplete(function(event, xhr, settings) {
    $("table.tribe-events-calendar tbody tr").each(function(index) {
	$(this).find("td:gt(3)").addClass("tribe-events-right");
    });
});