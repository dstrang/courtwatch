$(document).ready(function(){



	$("#judgeGenderBreakdown").click(function(){
	  	var male;
	  	var female;
		var url = 'api/getGenderBreakdown';
		$.ajax({
			url:url,
			type:'GET',
			dataType: 'json',
			success:function(data){
				var data = [['Male', parseInt(data.male)],['Female', parseInt(data.female)]];
			  	var plot1 = jQuery.jqplot ('graph', [data], 
			    { 
			      	seriesDefaults: {
			        	renderer: jQuery.jqplot.PieRenderer,
			        	rendererOptions: {
			        		dataLabelThreshold: 0,
			        		showDataLabels: true,
			        		dataLabels: 'percent',
			        		dataLabelFormatString: "%d"+"%"
			        	}
			      	}, 
			      	legend: { show:true,
			      			  location: 'se',
			      			  showSwatches: true
			      	}
			    });
			},
			error:function(data){
				console.log(data);
			}
		});	
	});
});