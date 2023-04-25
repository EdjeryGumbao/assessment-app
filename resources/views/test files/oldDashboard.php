<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		.header {
			background-color: #333;
			color: #fff;
			padding: 20px;
			text-align: center;
			font-size: 24px;
			font-weight: bold;
		}

		.sidebar {
			background-color: #f2f2f2;
			height: 100vh;
			width: 200px;
			position: fixed;
			top: 0;
			left: 0;
			overflow-x: hidden;
			padding-top: 20px;
		}

		.sidebar a {
			display: block;
			color: #000;
			padding: 16px;
			text-decoration: none;
		}

		.sidebar a:hover {
			background-color: #ddd;
		}

		.main {
			margin-left: 200px;
			padding: 20px;
		}

		.card {
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, .1);
			padding: 20px;
			margin-bottom: 20px;
		}

		.card h2 {
			margin-top: 0;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
	<div class="header">
		Dashboard
	</div>

	<div class="sidebar">
		<a href="#">Home</a>
		<a href="#">Reports</a>
		<a href="#">Analytics</a>
		<a href="#">Settings</a>
	</div>

	<div class="main">
		<div class="card">
			<h2>Report 1</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac quam eu velit sodales malesuada. Sed viverra lectus non tellus commodo, non pulvinar felis suscipit.</p>
		</div>

		<div class="card">
			<h2>Report 2</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac quam eu velit sodales malesuada. Sed viverra lectus non tellus commodo, non pulvinar felis suscipit.</p>
		</div>

		<div class="card">
			<h2>Report 3</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ac quam eu velit sodales malesuada. Sed viverra lectus non tellus commodo, non pulvinar felis suscipit.</p>
		</div>
	</div>
</body>
</html>