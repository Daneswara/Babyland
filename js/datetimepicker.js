$(document).ready(function(){
					
var unavailableDates = ["5-12-2016"]
 
function unavailable(date) {
        dmy = date.getDate() + "-" + (date.getMonth()+1) + "-" + date.getFullYear();
        if ($.inArray(dmy, unavailableDates) == -1) {
            return [true, ""];
        } else {
            return [false, "", "Not Available"];
        }
    }
	
$('#datepicker').datepicker({ 
	beforeShowDay: unavailable, dateFormat: 'dd-mm-yy', changeFirstDay: false , firstDay: 1, minDate: 0, onSelect: function(dateStr) {
	}});
	
});