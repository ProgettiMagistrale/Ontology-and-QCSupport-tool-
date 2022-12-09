<!DOCTYPE html>
<!--
	QCSuppport Tool 
-->


<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>QCSupport Tool </title>
<!--<meta http-equiv="content-type" content="text/html; charset=utf-8" />-->
<meta name="description" content="" />
<meta name="keywords" content="" />
<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
<script src="js/jquery.min.js"></script>
<script src="js/skel.min.js"></script>
<script src="js/skel-layers.min.js"></script>
<script src="js/init.js"></script>
<link rel="stylesheet" href="skel.css" />
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="style-xlarge.css" />
<style>
table {
	margin: 0 0 0 0;
	width: 100%;
}

table tbody tr {
	border: 0;
}

table tbody tr:nth-child(2n + 1) {
	background-color: rgba(255, 255, 255, 0.1);
}

table td {
	padding: 0.75em 0.75em;
	width: 20px;
}
</style>

</head>
<body>


	<!-- Header -->
	<header id="header">
		<h1>
			<a href="homepage.html">QCSupport Tool </a>
		</h1>
		<nav id="nav">
			<ul>
				<li><a href="homepage.html">Home</a></li>
				<!-- 						<li><a href="nfr.jsp">NFR</a></li>
						<li><a href="pattern.jsp">Pattern</a></li>
						<li><a href="families.jsp">Families</a></li>
						<li><a href="aggiungi.jsp">Add</a></li>
						<li><a href="add.jsp" class="button special">Search</a></li> 
				<li><a href="mainsearch.html" class="button special">Search</a></li> -->

				<li><a href="query_execution.php"
					class="button special">Compose your query</a></li>
				<!-- 				<li><a href="logout.jsp">Logout</a></li> -->

			</ul>

		</nav>
	</header>

	<!-- Main -->
	<section id="main" class="wrapper">
		<div class="container">
			<header class="major">
				<h2>Query definition</h2>
			</header>
			<section>
				<form method="post" action="query_execution.php">
					<h2>Select your Non-Functional Requirement </h2>
					<div class="12u$">
						<table>
							<tr>
								<td>
									<div class="select-wrapper">
										<select name="nFR" id="nFR">
											<option value="">- Non Functional Requirement -</option>
                                            <?php
                                            	$file="Non_Functional_Requirements.txt";
                                            	$doc=file_get_contents($file);

                                				$line=explode("\n",$doc);
                                            	
                                                foreach($line as $newline){
                                                	echo('<option value="'.$newline.'">'.$newline.'</option>');
                                                }
                                            ?>
										</select>
									</div>
								</td>
							</tr>
						</table>

					</div>
					
					
					<h2>Select your family</h2>
					<div class="12u$">
						<div class="select-wrapper">
							<select name="family" id="family">
								<option value="">- Family -</option>
								<option value="Quantum Computing"> Quantum Computing </option>
                                <option value="Classical Architecture"> Classical Architecture </option>
							</select>
						</div>
					</div>
					<h2>



					<h2>
						<br> Insert the number of the best results to show

					</h2>
					<div class="12u$">
						<div class="select-wrapper">
							<input type="text" name="number"
								id="number_of_results">
							<option value="">- Number of Pattern results -</option>
						</div>
					</div>
					<div>
						<ul class="actions">
							<br>
							<li><input type="submit" value="Get Pattern list" class="special" /></li>
						</ul>
					</div>
				</form>
			</section>
		</div>
	</section>
</body>
<!-- Footer -->
<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="8u 12u$(medium)">
				<ul class="copyright">
					<p>QCSupport Tool</p>
				</ul>
			</div>

		</div>
	</div>
</footer>
</html>