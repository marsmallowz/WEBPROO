	<div id="canvas-holder" style="width:40%">
		<canvas id="chart-area"></canvas>
	</div>
	<?php
		$data = get_rekap_asal();
		$color = ['red','orange','yellow','green'];
		$str_value = implode(",",array_values($data));
		$i = 0; 
		foreach($data as $asal => $presentase)
		{
			$str_color[]= "windows.charColors.".$color[$i];
			$star_kota[]= $asal;
			$i++;

		} 
	?>
	<script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
	<script src="https://www.chartjs.org/samples/latest/utils.js"></script>
	<script>
		var config = {
			type: 'pie',
			data: {
				datasets: [{
					data: [
							<?php echo $str_value; ?>
					],
					backgroundColor: [
						<?php echo implode(",",$str_color);?>
					],
					label: 'Dataset 1'
				}],
				labels: [
					'<?php echo implode("','",$str_kota);?>'
				]
			},
			options: {
				responsive: true
			}
		};

		window.onload = function() {
			var ctx = document.getElementById('chart-area').getContext('2d');
			window.myPie = new Chart(ctx, config);
		};
		</script>