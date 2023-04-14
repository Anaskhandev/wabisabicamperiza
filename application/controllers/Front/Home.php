<?php

class Home extends Front_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library("session");
		$this->load->helper('url');
	}

	public function index()
	{
		if ($this->session->userdata('GRANDE_COUNT')) {
			$this->session->unset_userdata('GRANDE_COUNT');
		}
		if ($this->session->userdata('PEQUENA_COUNT')) {
			$this->session->unset_userdata('PEQUENA_COUNT');
		}
		if ($this->session->userdata('MEDIANA_COUNT')) {
			$this->session->unset_userdata('MEDIANA_COUNT');
		}
		$data['table'] = "reviews";
		$content['reviews'] = $this->general->get($data);

		$data['table'] = "home_slider_one";
		$content['home_slider_one'] = $this->general->get($data);

		$data['table'] = "home_slider_two";
		$content['home_slider_two'] = $this->general->get($data);

		$data['table'] = "home_slider_three";
		$content['home_slider_three'] = $this->general->get($data);

		$content['main_content'] = 'index';

		$this->load->view('front/inc/view', $content);
	}

	public function reviews()
	{
		$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));


		$userIp = $this->input->ip_address();


		//wabisabi key : 

		$secret = '';

		$url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);

		$status = json_decode($output, true);

		if ($status['success']) {
			$content = array(
				'name' =>	$this->input->post('name', TRUE),
				'email' => $this->input->post('email', TRUE),
				'msg' => $this->input->post('msg', TRUE),
				'affair' => $this->input->post('affair', TRUE),
				'image' => $_FILES['fileToUpload']['name'],
			);

			// image starts

			$target_dir = "uploads/reviews/";
			$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
			$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
			move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);

			//image ends


			$data['table'] = 'reviews';
			$this->general->insert($data, $content);
			$this->session->set_flashdata('success', '¡ GRACIAS POR TU OPINION !');
			redirect();
		} else {
			$this->session->set_flashdata('error', 'Sorry Google Recaptcha Unsuccessful!!');
		}

		redirect();
	}

	public function newsletter()
	{
		if ($_POST)
			$content = array(
				'name' =>	$this->input->post('name', TRUE),
				'email' => $this->input->post('email', TRUE),
			);
		$data['table'] = 'newsletter';
		$this->general->insert($data, $content);
		$this->session->set_flashdata('success', 'Submitted Successfully.');
		redirect();
	}

	public function bnrSubmit()
	{
		$recaptchaResponse = trim($this->input->post('g-recaptcha-response'));


		$userIp = $this->input->ip_address();

		//inceptives key :

		// $secret = '6Lcwi74iAAAAAHPH0rnBgvx7wU329o_byeXVV1p3';

		//wabisabi key : 

		$secret = '';

		$url = "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response=" . $recaptchaResponse . "&remoteip=" . $userIp;

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$output = curl_exec($ch);
		curl_close($ch);


		$status = json_decode($output, true);

		if ($status['success']) {
			if ($_POST)
				$GRANDE_COUNT  = $this->session->userdata('GRANDE_COUNT');
			$PEQUENA_COUNT = $this->session->userdata('PEQUENA_COUNT');
			$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
			if ($GRANDE_COUNT > $PEQUENA_COUNT && $GRANDE_COUNT > $MEDIANA_COUNT) {
				$message = "GRANDE";
			} else if ($PEQUENA_COUNT > $GRANDE_COUNT && $PEQUENA_COUNT > $MEDIANA_COUNT) {
				$message = "PEQUENA";
			} else if ($MEDIANA_COUNT > $GRANDE_COUNT && $MEDIANA_COUNT > $PEQUENA_COUNT) {
				$message = "MEDIANA";
			}
			$content = [
				'q1' =>	$this->input->post('q1', TRUE),
				'q2' => $this->input->post('q2', TRUE),
				'q3' => $this->input->post('q3', TRUE),
				'q4' => $this->input->post('q4', TRUE),
				'q5' =>	$this->input->post('q5', TRUE),
				'q6' => $this->input->post('q6', TRUE),
				'q7' => $this->input->post('q7', TRUE),
				'q8' => $this->input->post('q8', TRUE),
				'q9' => $this->input->post('q9', TRUE),
				'q10' => $this->input->post('q10', TRUE),
				'bnr_questions_email' => $this->input->post('bnr_questions_email', TRUE),
				'grande_count'  => $GRANDE_COUNT,
				'pequena_count' => $PEQUENA_COUNT,
				'mediana_count' => $MEDIANA_COUNT,
				'highest'		=> $message ?? '',
			];
			$data['table'] = 'bnr_questions';
			$this->general->insert($data, $content);
			$this->session->set_userdata('email', $this->input->post('bnr_questions_email', TRUE));
			$this->session->set_userdata('message', $message ?? '');
			$this->sendMail();
			$this->session->set_flashdata('title', '¡ GRACIAS POR TUS RESPUESTAS !');
			$this->session->set_flashdata('footer', 'Si no lo recibes, comprueba PROMOCIONES');
			$this->session->set_flashdata('success', '¡ Te hemos enviado a tu correo una lista con las furgonetas que mejor se adaptan a tus necesidades !');
			$this->session->unset_userdata('email');
			// $this->session->unset_userdata('message');
			$this->session->unset_userdata('GRANDE_COUNT');
			$this->session->unset_userdata('PEQUENA_COUNT');
			$this->session->unset_userdata('MEDIANA_COUNT');
		} else {
			$this->session->set_flashdata('error', 'Error! Google Recaptcha Unsuccessful!');
		}
		redirect();
	}
	public function sendMail22222()
	{
		$view_name = 'email_template';
		$file = APPPATH . 'views/' . $view_name . '.php';
		$mailto = $this->session->userdata('email');
		$subject = "Tu furgoneta ideal es una FURGONETA " . $this->session->userdata('message');
		$message = file_get_contents($file);

		$content = file_get_contents($file);
		$content = chunk_split(base64_encode($content));

		// a random hash will be necessary to send mixed content
		$separator = md5(time());

		// carriage return type (RFC)
		$eol = "\r\n";

		// main header (multipart mandatory)
		$headers = "From: WABI SABI <wabisabicamperiza@gmail.com>" . $eol;
		$headers .= "MIME-Version: 1.0" . $eol;
		$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
		$headers .= "Content-Transfer-Encoding: 7bit" . $eol;
		$headers .= "This is a MIME encoded message." . $eol;

		// message
		$body = "--" . $separator . $eol;
		$body .= "Content-Type: text/html; charset=\"iso-8859-1\"" . $eol;
		$body .= "Content-Transfer-Encoding: 8bit" . $eol;
		$body .= $message . $eol;

		// attachment
		// $body .= "--" . $separator . $eol;
		// $body .= "Content-Type: application/octet-stream; name=\"" . $filename . "\"" . $eol;
		// $body .= "Content-Transfer-Encoding: base64" . $eol;
		// $body .= "Content-Disposition: attachment" . $eol;
		// $body .= $content . $eol;
		// $body .= "--" . $separator . "--";

		//SEND Mail
		if (mail($mailto, $subject, $body, $headers)) {
			echo "mail send ... OK"; // or use booleans here
		} else {
			echo "mail send ... ERROR!";
			print_r(error_get_last());
		}
	}
	public function sendMail111()
	{
		$to = $this->session->userdata('email');
		$subject = "Tu furgoneta ideal es una FURGONETA " . $this->session->userdata('message');

		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// Always set content-type when sending HTML email
		$view_name = 'email_template';
		$target_file = APPPATH . 'views/' . $view_name . '.php';
		if (file_exists($target_file)) {
			$htmlContent = file_get_contents($target_file);
		};
		mail($to, $subject, $htmlContent, $headers);
	}
	public function sendMail()
	{
		$to = $this->session->userdata('email');
		$subject = "Tu furgoneta ideal es una FURGONETA " . $this->session->userdata('message');
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		// Always set content-type when sending HTML email
		//   $view_name='email_template';
		//   $target_file=APPPATH.'views/'.$view_name.'.php';
		//   if(file_exists($target_file)){ echo $target_file; die;};
		//   die;
		// echo $target_file;die;
		//$img = file_get_contents('http://wabisabicamperiza.com/assets/front/img/white-logo.svg');
		//$imgdata = base64_encode($img);
		//echo  $img = "<img src='data:image/x-icon;base64,$imgdata' style='height: 100px; border: 1px solid black; border-radius: 100%; width: max-content;'>"; die;

		// More headers
		$headers .= 'From: WABI SABI <wabisabicamperiza@gmail.com>' . "\r\n";
		$htmlContent = '<!DOCTYPE html>';
		$htmlContent .= '<html lang="en">';
		$htmlContent .= '<head>';
		$htmlContent .= '<meta charset="UTF-8">';
		$htmlContent .= '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
		$htmlContent .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
		$htmlContent .= '<title>Email</title>';
		$htmlContent .= '<link rel="preconnect" href="https://fonts.googleapis.com">';
		$htmlContent .= '<link rel="preconnect" href="https://fonts.gstatic.com">';
		$htmlContent .= '<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,500&display=swap" rel="stylesheet" />
		<!-- put jquery before owl carousel -->
		<!-- jquery -->
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	  
		<!-- owl carousel -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
		  integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
		  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
		  integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
		  crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css"
		  integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA=="
		  crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
		  integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
		  crossorigin="anonymous" referrerpolicy="no-referrer" />';
		$htmlContent .= '</head>';
		$htmlContent .= ' <body style="box-sizing: border-box; margin: 0px;">';
		$htmlContent .= '<div  align="center" style="max-width: 700px">';
		$htmlContent .= '<div align="center" style="background-color: #f5ae38; width: 3px; height: 50px; margin: 0px auto 10px;"></div>';
		$htmlContent .= '<div align="center">';
		$htmlContent .= '<h2 align="center" style=" max-width: 100%; margin: 0px auto 10px; border: 3px solid #f5ae38; padding: 10px 29px;">Tu furgoneta ideal es una FURGONETA ' . $this->session->userdata('message') . '</h2>';
		// $htmlContent .="<img src='data:image/x-icon;base64,$imgdata' style='height:100px;border:1px solid black;border-radius:100%;width:100px'>";
		$htmlContent .= "<img src='http://wabisabicamperiza.com/assets/front/img/white-logo.jpg' style='height:100px;border:1px solid black;border-radius:100%;width:100px'>";
		$htmlContent .= '</div>';
		$htmlContent .= '<div align="center" style="background-color: #f5ae38; width: 3px; height: 50px; margin: 0px auto 10px;"></div>';
		$htmlContent .= '<div align="center" style="background-color: #f5ae38; height: max-content; width: 100%; padding: 18px">';
		$htmlContent .= '<img src="http://wabisabicamperiza.com/assets/front/img/' . $this->session->userdata('message') . '.jpg" alt="" style="border-radius: 10px" />';
		$htmlContent .= '</div>';
		$htmlContent .= '<table width="700px">
        <tr>
          <td width="350px">
            <h1 style="color: #f5ae38">¿ Qué tamaño de furgoneta debería comprar ?</h1>
            <p style="font-size: 18px; padding: 10px 0px">
			En el caso ideal lo mejor que deberíais hacer es definir vuestros requerimientos y crear un diseño que cubra vuestras necesidades antes de decidir qué furgoneta comprar. De esta manera evitaremos perder el tiempo buscando furgonetas que no cumplan con los requisitos mínimos.
            </p>

            <p style="font-size: 18px; padding: 10px 0px">
			Lo primero de todo que deberíais preguntaros es lo siguiente:
            </p>
            <p style="font-size: 18px">- ¿Cuántas personas vais o vivir o viajar en la furgoneta?</p>
            <p style="font-size: 18px">- ¿Qué tipo de viajes vais a hacer con la furgoneta?</p>
            <p style="font-size: 18px">- ¿Qué equipo deportivo o material vais a almacenar en vuestra furgoneta?</p>
            <p style="font-size: 18px">- ¿Qué servicios mínimos quiero que tenga mi furgoneta?</p>
            <p style="font-size: 18px">- ¿Cuál es tu presupuesto para comprar y camperizar tu furgoneta camper?</p>
            <img src="https://wabisabicamperiza.com/assets/front/img/car_email.png" alt="" />
            <h1 style="font-size: 18px; padding: 10px 0px; color: #f5ae38">FURGONETAS GRANDES</h1>
            <p style=
			"font-size: 18px;">
			Las furgonetas grandes son ideales para aquellos que quieran vivir y descubrir lugares viajando en un hotel de 5 estrelllas. Estas furgonetas son lo suficientemente grandes como para albergar en su interior una cama fija, una cocina con fregadero e incluso una cabina para una ducha y un baño.
            </p>
          </td>

          <td width="350px">
            <p style="font-size: 18px; padding: 10px 0px">
              Podemos clasificar las furgonetas grandes en dos tipos según los modelos de los principales fabricantes.
            </p>
            <p style="font-size: 18px; padding: 10px 0px">
			Las furgonetas Fiat Ducato, Citroën Jumper, Peugeot Boxer, y la Ram Promaster que encontramos en Europa tienen las mismas medidas interiores. Estas furgonetas se caracterizan por ser hasta 2 metros de anchas, por lo que te permiten tener más anchura para jugar con tu disposición general.
            </p>
            <p style="font-size: 18px; padding: 10px 0px">
			Por otro lado, las furgonetas Mercedes Sprinter, VW Crafter y Volkwagen LT comparten las mismas medidas interiores y suelen tener una altura y longitud mayor.
            </p>
            <img src="https://wabisabicamperiza.com/assets/front/img/table_email.png" alt="" />

            <p style="font-size: 18px; padding: 10px 0px">
			Si lo que queremos es situar una cama fija de manera transversal, vamos a elegir las furgonetas que me proporcionen ese extra de anchura como una Citroën Jumper o Fiat Ducato. Sin embargo, si eres demasiado alto incluso como para no caber en una cama de manera transversal de 2 metros, entonces vas a elegir una furgoneta con mayor longitud y altura como una Sprinter o Crafter.
            </p>
            <p style="font-size: 18px; padding: 10px 0px">
              Generalmente en este tipo de vehículos pueden viajar entre 2 y 4 personas, dependiendo de la distribución
              de camas y la homologación de asientos
            </p>
            <p style="font-size: 18px; padding: 10px 0px">
              En cuanto a equipamiento, este tipo de furgonetas pueden ser perfectamente equipadas para hacer todo tipo
              de viajes.
            </p>
          </td>
        </tr>
      </table>
	  <img style="width: 700px; " src="https://wabisabicamperiza.com/assets/front/img/2.png" alt="" />';
		$htmlContent .= '<a style="background-color: #f9ae65;
		text-decoration:none;
		border: 1px solid #f9ae65;
		color: #1a1818;
		display: inline-block;
		text-transform: uppercase;
		font-size: 16px;
		font-weight: 500;
		line-height: 16px;
		padding: 15px 30px;" href="https://wabisabicamperiza.com/Manual-de-Camperizacion"  align="center">LO QUIERO</a>';
		$htmlContent .= '<table width="700px">
        <tr>
          <td width="350px">
            <p style="font-size: 18px; padding: 10px 0px">
			El inconveniente de tener una furgoneta con mayor longitud son las dificultades en la conducción y el aparcamiento. Las furgonetas con mayor longitud son más difíciles de conducir que las pequeñas y no se pueden aparcar en batería en muchas ciudades. Sin embargo, aparcar una furgoneta grande en paralelo no tendría que ser un problema siempre que instales una cámara de visión trasera.
            </p>

            <p style="font-size: 18px; padding: 10px 0px"> 
			
			Es muy importante que tengas en cuenta que la camperización de una furgoneta camper grande no puede superar las 3.5 toneladas. Además, es muy importante que distribuyas los pesos de manera uniforme o lo largo de la furgoneta para evitar problemas de estabilidad en la conducción.

            </p>
            <h1 style="font-size: 18px; padding: 10px 0px; color: #f5ae38">FURGONETAS MEDIANAS </h1>

            <p style="font-size: 18px">
			Las furgonetas medianas son más fáciles de aparcar y conducir y son lo suficientemente grandes como para albergar todo tipo de servicios excepto una ducha interior. Además, este tipo de furgonetas suelen consumir menos que las furgonetas grandes y pueden alcanzar velocidades de hasta 150 km/h

			</p>
            <img src="https://wabisabicamperiza.com/assets/front/img/fiattransit.png" alt="" />
            <p style="font-size: 18px">Además, la mayoría de los modelos no te van a permitir ponerte de pie. Es una opción muy popular si lo que quieres es un pequeño aliado los fines de semanas o pasar uno temporada veraniega en la naturaleza dónde el tiempo te deje hacer más vida en el exterior.

			</p>
          </td>

          <td width="350px">
		  <h1 style="font-size: 18px; padding: 10px 0px; color: #f5ae38">FURGONETAS PEQUEÑAS</h1>

            <p style="font-size: 18px; padding: 10px 0px">
			Si lo que buscas es una furgoneta económica con la que puedas vivir pequeñas aventuras, entonces lo que necesitas es una furgoneta pequeña como una VW Caddy, Citroën Berlingo o Renault Kangoo.

            </p>
			<img src="https://wabisabicamperiza.com/assets/front/img/transitconnect.png" alt="" />
            <p style="font-size: 18px; padding: 10px 0px">
			Esta furgoneta te permitirá tener una cama y como mucho una pequeña cocina y un espacio de almacenamiento. Por lo general, pasarás la mayor parte de tu tiempo haciendo vida fuera de la furgoneta así que te recomendamos que elijas esta opción si vas o usar tu furgoneta en zonas cálidas como los Islas Canarias o el sur de Europa.
            </p>
            <p style="font-size: 18px; padding: 10px 0px">
			En resumen, este tipo de furgonetas pueden estar bien si lo que queremos es una escapada breve con nuestra pareja. Tendremos que contar con el apoyo de alguna app (Park4night) que nos diga dónde podemos ir parando para ducharnos, lavar la ropa e ir al baño. Además, puede servirnos como vehículo propio debido a su facilidad para aparcar en zonas urbanas.
            </p>
            <img style="max-width: 350px; " src="https://wabisabicamperiza.com/assets/front/img/email-bus.png" alt="" />

           
          </td>
		  
		  </tr>
		  </table>
		  <img style="width: 700px; " src="https://wabisabicamperiza.com/assets/front/img/01_Page.png" alt="" />';
		$htmlContent .= '<a style="background-color: #f9ae65;
		text-decoration:none;
		border: 1px solid #f9ae65;
		color: #1a1818;
		display: inline-block;
		text-transform: uppercase;
		font-size: 16px;
		font-weight: 500;
		line-height: 16px;
		padding: 15px 30px;" href="https://wabisabicamperiza.com/Manual-de-Camperizacion"  align="center">COMPRAR</a>';
		$htmlContent .= '</div>';
		$htmlContent .= '</body>';
		$htmlContent .= '</html>';

		mail($to, $subject, $htmlContent, $headers);
	}
	// 	public function sendMail()
	//     {
	//         $to = $this->session->userdata('email');
	//         $subject = "The GRANDE or PEQUENA or MEDIANA.";

	//         $message = "
	//         <html>
	//         <head>
	//         <title>The GRANDE or PEQUENA or MEDIANA.</title>
	//         </head>
	//         <body>
	//         <h1>Thanks you for joining with us!</h1> 
	//         <table cellspacing='0' style='border: 2px dashed #FB4314; width: 100%;'> 
	//         <tr> 
	//             <th style='text-align:left'>Highest is :</th><td>".$this->session->userdata('message')."</td> 
	//         </tr> 
	//         <tr style='background-color: #e0e0e0;'> 
	//             <th style='text-align:left'>Email:</th><td>".$this->session->userdata('email')."</td> 
	//         </tr>
	//         </table>
	//         </body>
	//         </html>
	//         ";

	//         // Always set content-type when sending HTML email
	//         $headers = "MIME-Version: 1.0" . "\r\n";
	//         $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	//         // More headers
	//         $headers .= 'From: <wabisabicamperiza@gmail.com>' . "\r\n";

	//         mail($to,$subject,$message,$headers);
	//     }
	public function multiStepSelectedValue()
	{
		$selected_val = $this->input->post('selected_val', TRUE);
		// $this->session->unset_userdata('GRANDE_COUNT');
		// $this->session->unset_userdata('PEQUENA_COUNT');
		// $this->session->unset_userdata('MEDIANA_COUNT');
		// echo $step = $this->input->post('step',TRUE);die;
		$step = $this->input->post('step', TRUE);
		$GRANDE_COUNT = 0;
		$PEQUENA_COUNT = 0;
		$MEDIANA_COUNT = 0;
		if ($step == 1) {
			if ($selected_val == "LARGOS") {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', 1);
			} else {
				$this->session->set_userdata('PEQUENA_COUNT', 1);
				$this->session->userdata('PEQUENA_COUNT');
			}
		} else if ($step == 2) {
			if ($selected_val == "INTERIOR") {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', ++$GRANDE_COUNT);
			} else {
				$PEQUENA_COUNT = $this->session->userdata('PEQUENA_COUNT');
				$this->session->set_userdata('PEQUENA_COUNT', ++$PEQUENA_COUNT);
			}
		} else if ($step == 3) {
			if ($selected_val == "FIJA") {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', ++$GRANDE_COUNT);
			} else {
				$this->session->set_userdata('MEDIANA_COUNT', 1);
			}
		} else if ($step == 4) {
			if ($selected_val == "SI") {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', ++$GRANDE_COUNT);
			} else {
				$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
				$this->session->set_userdata('MEDIANA_COUNT', ++$MEDIANA_COUNT);
			}
		} else if ($step == 5) {
			if ($selected_val == "MUCHO") {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', ++$GRANDE_COUNT);
			} else {
				$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
				$this->session->set_userdata('MEDIANA_COUNT', ++$MEDIANA_COUNT);
			}
		} else if ($step == 6) {
			$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
			$this->session->set_userdata('MEDIANA_COUNT', ++$MEDIANA_COUNT);
		} else if ($step == 7) {
			if ($selected_val == "EXTERIOR") {
				$PEQUENA_COUNT = $this->session->userdata('PEQUENA_COUNT');
				$this->session->set_userdata('PEQUENA_COUNT', ++$PEQUENA_COUNT);
			} else {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', ++$GRANDE_COUNT);
			}
		} else if ($step == 8) {
			if ($selected_val == "MUCHO") {
				$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
				$this->session->set_userdata('MEDIANA_COUNT', ++$MEDIANA_COUNT);
			} else {
				$PEQUENA_COUNT = $this->session->userdata('PEQUENA_COUNT');
				$this->session->set_userdata('PEQUENA_COUNT', ++$PEQUENA_COUNT);
			}
		} else if ($step == 9) {
			if ($selected_val == "VIVIR") {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', ++$GRANDE_COUNT);
			} else {
				$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
				$this->session->set_userdata('MEDIANA_COUNT', ++$MEDIANA_COUNT);
			}
		} else if ($step == 10) {
			if ($selected_val == "UNO 0 DOS") {
				$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
				$this->session->set_userdata('MEDIANA_COUNT', ++$MEDIANA_COUNT);
			} else {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', ++$GRANDE_COUNT);
			}
		}
		echo $this->session->userdata('GRANDE_COUNT');
		echo "-----------";
		echo $this->session->userdata('PEQUENA_COUNT');
		echo "-----------";
		echo $this->session->userdata('MEDIANA_COUNT');
	}

	public function multiStepPreviousSelectedValue()
	{
		$selected_val = $this->input->post('selected_val', TRUE);
		$step = $this->input->post('step', TRUE);
		$GRANDE_COUNT = 0;
		$PEQUENA_COUNT = 0;
		$MEDIANA_COUNT = 0;
		if ($step == 1) {
			if ($selected_val == "LARGOS") {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', --$GRANDE_COUNT);
			} else {
				$PEQUENA_COUNT = $this->session->userdata('PEQUENA_COUNT');
				$this->session->set_userdata('PEQUENA_COUNT', --$PEQUENA_COUNT);
			}
		} else if ($step == 2) {
			if ($selected_val == "INTERIOR") {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', --$GRANDE_COUNT);
			} else {
				$PEQUENA_COUNT = $this->session->userdata('PEQUENA_COUNT');
				$this->session->set_userdata('PEQUENA_COUNT', --$PEQUENA_COUNT);
			}
		} else if ($step == 3) {
			if ($selected_val == "FIJA") {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', --$GRANDE_COUNT);
			} else {
				$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
				$this->session->set_userdata('MEDIANA_COUNT', --$MEDIANA_COUNT);
			}
		} else if ($step == 4) {
			if ($selected_val == "SI") {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', --$GRANDE_COUNT);
			} else {
				$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
				$this->session->set_userdata('MEDIANA_COUNT', --$MEDIANA_COUNT);
			}
		} else if ($step == 5) {
			if ($selected_val == "MUCHO") {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', --$GRANDE_COUNT);
			} else {
				$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
				$this->session->set_userdata('MEDIANA_COUNT', --$MEDIANA_COUNT);
			}
		} else if ($step == 6) {
			$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
			$this->session->set_userdata('MEDIANA_COUNT', --$MEDIANA_COUNT);
		} else if ($step == 7) {
			if ($selected_val == "EXTERIOR") {
				$PEQUENA_COUNT = $this->session->userdata('PEQUENA_COUNT');
				$this->session->set_userdata('PEQUENA_COUNT', --$PEQUENA_COUNT);
			} else {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', --$GRANDE_COUNT);
			}
		} else if ($step == 8) {
			if ($selected_val == "MUCHO") {
				$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
				$this->session->set_userdata('MEDIANA_COUNT', --$MEDIANA_COUNT);
			} else {
				$PEQUENA_COUNT = $this->session->userdata('PEQUENA_COUNT');
				$this->session->set_userdata('PEQUENA_COUNT', --$PEQUENA_COUNT);
			}
		} else if ($step == 9) {
			if ($selected_val == "VIVIR") {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', --$GRANDE_COUNT);
			} else {
				$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
				$this->session->set_userdata('MEDIANA_COUNT', --$MEDIANA_COUNT);
			}
		} else if ($step == 10) {
			if ($selected_val == "UNO 0 DOS") {
				$MEDIANA_COUNT = $this->session->userdata('MEDIANA_COUNT');
				$this->session->set_userdata('MEDIANA_COUNT', --$MEDIANA_COUNT);
			} else {
				$GRANDE_COUNT = $this->session->userdata('GRANDE_COUNT');
				$this->session->set_userdata('GRANDE_COUNT', --$GRANDE_COUNT);
			}
		}

		echo $this->session->userdata('GRANDE_COUNT');
		echo "-----------";
		echo $this->session->userdata('PEQUENA_COUNT');
		echo "-----------";
		echo $this->session->userdata('MEDIANA_COUNT');
	}
}
