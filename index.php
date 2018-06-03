<?php
    require_once 'header.php';
?>
<?php
	  require_once 'clases/noticia.php';
	  require_once 'clases/video.php';
	  require_once 'clases/ultimaNoticia.php';
	  require_once 'clases/posiciones.php';
	 // require_once 'clases/ultimoVideo.php';
	$obj_UltimaNoticias = new app\clases\ultimaNoticiaFrente; // 
	$obj_noticias = new app\clases\noticia; // 
        
	
	
	 
?>
<?php  
	//foreach ($obj_UltimaNoticias::listaUltimasNoticias() as $value) {
	foreach ($obj_UltimaNoticias::get_UltimasNoticias() as $value) {
		//if($value->posicion == \app\clases\Posiciones::principal){
		if($value["posicion"]== \app\clases\Posiciones::principal){
			//foreach ($obj_noticias::listaNoticias() as $value2) {
			foreach ($obj_noticias::get_noticias() as $value2) {
                   // echo "<p> {$value["id_noticia"]}</p>";
                  // echo "<p> {$value2["posicion"]}</p>";
                   //if($value->id_noticia == $value2->id_noticia"]){ 
                   
                  //<img alt='Bootstrap Image Preview' src=$value>
                   //{$value2->titulo}
                   //{$value2->descripcion}
                   if($value["id_noticia"]== $value2["id_noticia"]){
                            echo "<div class='row'><div class='col-md-6'>
                                    <img alt='Bootstrap Image Preview' src='http://www.layoutit.com/img/sports-q-c-140-140-3.jpg'>
                                    </div>
                                    <div class='col-md-6'>
                                    <h3>
                                    
                                        {$value2["titulo"]}

								    </h3>
								    <p>

										{$value2["descripcion"]}
								    </p>
								   </div>
								   </div>";
                		}//fin del if
                	}
				}//fin del if de posicion
            if($value["posicion"]== \app\clases\Posiciones::primera_arriba){
                foreach ($obj_noticias::get_noticias() as $value2) {
                    if($value["id_noticia"]== $value2["id_noticia"]){
                        echo "<div class='row'>
                                <div class='col-md-4'>
                                        <img alt='Bootstrap Image Preview' src='http://www.layoutit.com/img/sports-q-c-140-140-3.jpg'>
                                        <h2>
                                                {$value2["titulo"]}
                                        </h2>
                                        <p>
                                                {$value2["descripcion"]}
                                        </p>
                                        <p>
                                                <a class='btn' href='#'>View details »</a>
                                        </p>
                                </div>";
                    }
                }
            }       
	}//fin del for 1
?>

		<div class='col-md-4'>
			<img alt='Bootstrap Image Preview' src='http://www.layoutit.com/img/sports-q-c-140-140-3.jpg'>
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class='btn' href='#'>View details »</a>
			</p>
		</div>
		<div class='col-md-4'>
			<img alt='Bootstrap Image Preview' src='http://www.layoutit.com/img/sports-q-c-140-140-3.jpg'>
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class='btn' href='#'>View details »</a>
			</p>
		</div>
	</div>
	<div class='row'>
		<div class='col-md-4'>
			<img alt='Bootstrap Image Preview' src='http://www.layoutit.com/img/sports-q-c-140-140-3.jpg'>
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class='btn' href='#'>View details »</a>
			</p>
		</div>
		<div class='col-md-4'>
			<img alt='Bootstrap Image Preview' src='http://www.layoutit.com/img/sports-q-c-140-140-3.jpg'>
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class='btn' href='#'>View details »</a>
			</p>
		</div>
		<div class='col-md-4'>
			<img alt='Bootstrap Image Preview' src='http://www.layoutit.com/img/sports-q-c-140-140-3.jpg'>
			<h2>
				Heading
			</h2>
			<p>
				Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			</p>
			<p>
				<a class='btn' href='#'>View details »</a>
			</p>
		</div>
	</div>
	<div class='row'>
		<div class='col-md-12'>
			<div class='row'>
				<div class='col-md-4'>
					<img alt='Bootstrap Image Preview' src='http://www.layoutit.com/img/sports-q-c-140-140-3.jpg'>
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
				<div class='col-md-4'>
					<img alt='Bootstrap Image Preview' src='http://www.layoutit.com/img/sports-q-c-140-140-3.jpg'>
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
				<div class='col-md-4'>
					<img alt='Bootstrap Image Preview' src='http://www.layoutit.com/img/sports-q-c-140-140-3.jpg'>
					<p>
						Lorem ipsum dolor sit amet, <strong>consectetur adipiscing elit</strong>. Aliquam eget sapien sapien. Curabitur in metus urna. In hac habitasse platea dictumst. Phasellus eu sem sapien, sed vestibulum velit. Nam purus nibh, lacinia non faucibus et, pharetra in dolor. Sed iaculis posuere diam ut cursus. <em>Morbi commodo sodales nisi id sodales. Proin consectetur, nisi id commodo imperdiet, metus nunc consequat lectus, id bibendum diam velit et dui.</em> Proin massa magna, vulputate nec bibendum nec, posuere nec lacus. <small>Aliquam mi erat, aliquam vel luctus eu, pharetra quis elit. Nulla euismod ultrices massa, et feugiat ipsum consequat eu.</small>
					</p>
				</div>
			</div>
			<div class='row'>
				<div class='col-md-12'>
					<h3>
						Videos.
					</h3>
					<div class='row'>
						<div class='col-md-6'>
							<h3>
								Video
							</h3>
						</div>
						<div class='col-md-6>
							<h3>
								Video 1.
							</h3>
							<h3>
								Video 2.
							</h3>
							<h3>
								Video 3.
							</h3>
							<h3>
								Video 4.
							</h3>
						</div>
					</div>
				</div>
			</div>
<?php
	require_once 'footer.php';
?>