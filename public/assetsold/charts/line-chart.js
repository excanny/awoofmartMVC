(function ($) {
 "use strict";
 
	
	
	 /*----------------------------------------*/
	/*  2.  Line Chart Multi axis
	/*----------------------------------------*/
	var ctx = document.getElementById("sellerStats");
	var linechartmultiaxis = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [{
				label: "No. of Posts",
				fill: false,
                backgroundColor: '#006DF0',
				borderColor: '#006DF0',
				data: [10, 15, 20, 25, 30, 40, 50],
				yAxisID: "y-axis-1"
            }, {
                label: "No. Of Views",
				fill: false,
                backgroundColor: '#933EC5',
				borderColor: '#933EC5',
				data: [300, 315, 400, 500, 550, 750, 800],
				yAxisID: "y-axis-2"
				
		}]
		},
		options: {
			responsive: true,
			hoverMode: 'index',
			stacked: false,
			title:{
				display: true,
				text:'No of Posts-Views Chart'
			},
			scales: {
				yAxes: [{
					type: "linear",
					display: true,
					position: "left",
					id: "y-axis-1",
				}, {
					type: "linear", 
					display: true,
					position: "right",
					id: "y-axis-2",
					gridLines: {
						drawOnChartArea: false,
					},
				}],
			}
		}
	});
	
	 
	
	
		
})(jQuery); 