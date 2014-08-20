<!DOCTYPE html>
<html lang="es">  

	<head>
		
		 <title>Autos en venta</title>
		 <meta charset="utf-8" />
		 <link rel="stylesheet" href="css/index.css" />
		 <link rel="stylesheet" href="css/normalize.css" />

	</head>

	<body>

		<header>
			  <div class="logo">
			      <a href="index.php"> <img src="images/logo.gif" alt="logo" /></a>
		      </div>
		      <div class="titular">
		      	 <h1>Venta de autos</h1>
		      </div>
		      <div class="links">
		   
			       <nav>

			            <ul>

				           <li> <a href="#">INICIO</a></li>
				           <li> <a href="#">CONTACTO</a></li>
				           <li> <a href="listado.php">ADMINISTRACIÓN</a></li>

			            </ul>

		             </nav>
		      </div>
		</header>

	    <section>
		  
		   	<article class="include">
					 <h2> 
					 	Busca el auto que querés por marca o modelo
					 </h2>	 	
			 	<?php include ("form_busqueda.php"); ?>

		  	 </article>

		  

		</section>

		<footer>
			
		</footer>
		
	</body>
	


</html>