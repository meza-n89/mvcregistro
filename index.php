<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Darkness</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="stylesheet" href="css/modal.css" type="text/css" />
<link rel="canonical" href="http://www.alessioatzeni.com/wp-content/tutorials/jquery/login-box-modal-dialog-window/index.html" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('a.login-window').click(function() {
		
		// Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup and add close button
		$(loginBox).fadeIn(300);
		
		//Set the center alignment padding + border
		var popMargTop = ($(loginBox).height() + 24) / 2; 
		var popMargLeft = ($(loginBox).width() + 24) / 2; 
		
		$(loginBox).css({ 
			'margin-top' : -popMargTop,
			'margin-left' : -popMargLeft
		});
		
		// Add the mask to body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);
		
		return false;
	});
	
	// When clicking on the button close or the mask layer the popup closed
	$('a.close, #mask').live('click', function() { 
	  $('#mask , .login-popup').fadeOut(300 , function() {
		$('#mask').remove();  
	}); 
	return false;
	});
});
</script>
</head>
<body id="top">
<div class="wrapper">
  <div id="header">
    <div id="logo">
      <h1><a href="index.html">Aula virtual</a></h1>
      <p>Free Website Template</p>
    </div>
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="pages/style-demo.html">Maestros</a></li>
        <li><a href="pages/full-width.html">Alumnos</a></li>
        <li><a href="#login-box" class="login-window">Iniciar session</a></li>
        <!--<li class="last"><a href="#">A Long Link Text</a></li>-->
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="latest">
    <div class="fl_left"><a href="#"><img src="css/images/575x300.jpg" alt="" /></a></div>
    <div class="fl_right">
      <h2>Colegio ing Douglas </h2>
      <p>Cursuspenatisaccum ut curabitur nulla tellus tor ames a in curabitur pede. Idet mollisi eros dis orci congue elis et curabitur consequam intesque. Cursuspenatisaccum ut curabitur nulla tellus tor.</p>
      <ul>
        <li><a href="#"><img src="css/images/100x100.jpg" alt="" /></a></li>
        <li><a href="#"><img src="css/images/100x1002.jpg" alt="" /></a></li>
        <li class="last"><a href="#"><img src="css/images/100x1003.jpg" alt="" /></a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="intro">
    <ul>
      <li>
        <h2>Mision</h2>
        <div class="imgholder"><a href="#"><img src="images/demo/300x150.gif" alt="" /></a></div>
        <p>Asumimos la responsabilidad de dar una formación integral a cada uno de nuestros alumnos en las distintas etapas de su desarrollo. </p>
        <p>Poniendo el máximo empeño en el cultivo de valores humanos y en la creación de hábitos de estudio, trabajo y convivencia para una excelente formacion academica y personal</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </li>
      <li>
        <h2>Vision</h2>
        <div class="imgholder"><a href="#"><img src="images/demo/300x150.gif" alt="" /></a></div>
        <p>Ser la primera elección de las familias que garantice la formación académica, la madurez emocional y la educación en valores necesarios para el futuro de sus hijos en un mundo tecnológico y global.</p>
        <p>Un Colegio que considere al alumnado el centro de toda su acción educativa, ayudándole a ser el protagonista activo de su proceso formativo.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </li>
      <li class="last">
        <h2>Mensaje de nuestra Directora</h2>
        <div class="imgholder"><a href="#"><img src="images/demo/300x150.gif" alt="" /></a></div>
        <p>Estimados padres de familia:</p>
        <p>El éxito es una condición deseable para todos los que buscan algo en la vida, para todos aquellos que se han trazado una meta. He aquí entonces una invitación para trazar un proyecto de vida que puede brindar las mayores y mejores satisfacciones.</p>
        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
      </li>
    </ul>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="container">
    <div id="content">
      <!--<h2>About This Free CSS Template</h2>-->
      <p>This is a W3C standards compliant free website template from <a href="http://www.os-templates.com/">OS Templates</a>.</p>
      <p>This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>, which allows you to use and modify the template for both personal and commercial use when you keep the provided credit links in the footer.</p>
      <p>For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
    </div>
    <div id="column">
      <div class="holder">
        <h2>Nullamlacus loborttis</h2>
        <ul id="latestnews">
          <li class="last"><img class="imgl" src="images/demo/80x80.gif" alt="" />
            <p><strong>Indonectetus facilis leo nibh.</strong></p>
            <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna.</p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
        </ul>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="footer">
    <div id="newsletter">
      <h2>Stay In The Know !</h2>
      <p>Please enter your email to join our mailing list</p>
      <form action="#" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>
      <p>To unsubscribe please <a href="#">click here &raquo;</a></p>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
    
    
    
    <div id="login-box" class="login-popup">
        <a href="#" class="close">X</a>
          <form method="get" class="signin" action="controladores/main.php">
              <input type="hidden" name="main" value="2"></input>
                <fieldset class="textbox">
            	<label class="username">
                <span>Username or email</span>
                <input id="username" name="usuario" value="" type="text"  placeholder="Username">
                </label>
                
                <label class="password">
                <span>Password</span>
                <input id="password" name="password" value="" type="password" placeholder="Password">
                </label>
                
                    <button  type="submit">Sign in</button>
                
                <p>
                <a class="forgot" href="#">Forgot your password?</a>
                </p>
                
                </fieldset>
          </form>
     </div>
</body>
</html>