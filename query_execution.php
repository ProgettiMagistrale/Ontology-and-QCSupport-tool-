<!DOCTYPE html>
<!--
	Q-SAD DSS Tool
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
			<a href="index.html">Q-SAD DSS Tool</a>
		</h1>
		<nav id="nav">
			<ul>
				<li><a href="index.html">Home</a></li>
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
				<h2>Recommended patterns</h2>
			</header>
			<section>
				<form method="post" action="query.php">
					<div class="12u$">
						<table>
							<tr>
								<td>
										<?php
                                            echo("<br>");
                                            $nFR=$_POST['nFR'];
                                            $family=$_POST['family'];
                                            $number = $_POST['number'];
                                            $file="Pattern.txt";
                                            $doc=file_get_contents($file);
											$i=0;
                                            $line=explode("\n",$doc);
                                            foreach($line as $newline){
                                                //echo '<h3 style="color:#453288">'.$newline.'</h3><br>';
                                                //split linea
                                                if($i<$number){
                                                $separatore = ";";
                                                $stringa = $newline;
                                                $array=explode($separatore,$stringa);
                                                
												
                                                if(strcmp(trim($array[1]), trim($nFR)) == 0){
													  //trovato pattern
                                                      echo ' <div class="result-wrapper">
                                                      <input type="text" style="border-color:black;border-width:2px;" readonly="readonly" name="result" value="'.$array[0].'"></div>';
													  $i = $i+1;

                                                      //echo '<h3 style="color:#453288">'.$array[0].'</h3><br>';
                                                      echo("<br>");
                                                      echo("<br>");
                                                }
											  }
                                            }	
                                            fclose($myfile);
										?>
								</td>
							</tr>
						</table>

					</div>
					<div>
						<ul class="actions">
							<br>
							<li><input type="submit" value="Repeat a Query" class="special" /></li>
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
					<p>Q-SAD DSS Tool</p>
				</ul>
			</div>

		</div>
	</div>
</footer>
</html>
