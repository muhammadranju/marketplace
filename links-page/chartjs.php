


<script>
	//line chart
	var ctx = document.getElementById("lineChart");
	//ctx.height = 100;
	var myChart = new Chart(ctx, {
		type: 'line',
		data: {
			labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December "],
			datasets: [{
					label: "Downloads",
					borderColor: "#c49300",
					borderWidth: "1",
					backgroundColor: "#ffc30fa2",
					//data: [18, 44, 67, 43, 76, 45, 30, 25, 36, 42, 21, 24]
					data: [8, 4, 0, 1, 0, 5, 0, 7, 3, 5, 0, 2]
				},
				// {
				// 	label: "Date",
				// 	borderColor: "rgba(0, 123, 255, 0.9)",
				// 	borderWidth: "1",
				// 	backgroundColor: "rgba(0, 123, 255, 0.5)",
				// 	pointHighlightStroke: "rgba(26,179,148,1)",
				// 	data: [16, 3, 18, 26, 42, 33, 30,20 ]
				// }
			]
		},
		options: {
			responsive: true,
			tooltips: {
				mode: 'index',
				intersect: false
			},
			hover: {
				mode: 'nearest',
				intersect: false
			}

		}
	});
</script>
<script>
	var ctx = document.getElementById("barChart");
	// ctx.height = 300;
	var myChart = new Chart(ctx, {
		type: 'bar',
		data: {
			labels: ["January", "February", "March", "April", "May", "June", "July"],
			datasets: [{
					label: "My First dataset",
					data: [65, 59, 80, 81, 56, 55, 40],
					borderColor: "rgba(0, 123, 255, 0.9)",
					borderWidth: "0",
					backgroundColor: "rgba(0, 123, 255, 0.5)"
				},
				{
					label: "My Second dataset",
					data: [28, 48, 40, 19, 86, 27, 90],
					borderColor: "rgba(0,0,0,0.09)",
					borderWidth: "0",
					backgroundColor: "rgba(000,149,255)"
				}
			]
		},
		options: {
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero: true
					}
				}]
			}
		}
	});
</script>
