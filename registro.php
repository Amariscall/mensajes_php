<! DOCTYPE html>
<Html>
	<Cabeza>
		<meta charset"utf-8" >
		<título>Registro de usuario - mensajes App</título>
		<enlace relá "hoja de estilo"  hrefá"https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"  integridad"sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"  crossorigin"anonymous " anonymous" >
		<enlace rel"hoja de estilo"  tipo"text/css"  hrefá"style.css" >
	</Cabeza>
	<Cuerpo>
		<Rúbrica>
			<h1>Mensajes App</h1>
			<h2>Registro de usuario</h2>
		</Rúbrica>
		<Sección>
			<div classá"row" >
				<div classá"col-md-3"></div>
				<div classá"col-md-6" >
					<Div>
						<p>Si tiene una cuenta creada, <a hrefá"login.php">inicia sesión</a > </p>
					</Div>
					< nombredel formulario"inicio de sesión"  acción""  método"POST" >
					  	<div classá"form-group" >
						    <etiqueta para"nombre_completo">Nombre completo</etiqueta>
						    < Tipo deentrada"texto"  clase"form-control"  id"nombre_completo"  name"nombre_completo"  aria-describedby?"nombre-ayuda" >
					    	<id pequeño "nombre-ayuda"  class"form-text text-muted">Tu nombre completo .</small>
					  	</Div>
					  	<div classá"form-group" >
						    <etiqueta para"correo">Correo</etiqueta>
						    < Tipo deentrada"correo electrónico"  clase"form-control"  id"correo"  name""correo"  aria-describedby"correo-ayuda" >
					    	<id pequeño "correo-ayuda"  classá"form-text text-muted">No te enviaremos Spam, allí podrás recuperar tu cuenta.</small>
					  	</Div>
					  	<div classá"form-group" >
						    <etiqueta para"celular">Celular</etiqueta>
						    < Tipo deentrada"tel"  classá"form-control"  id"celular"  name"" celular"  aria-describedby?"-celular-ayuda" >
					    	<id pequeño "celular-ayuda"  classá"form-text text-muted"> también;usar usar tu número para el login.</small>
					  	</Div>
					  	<div classá"form-group" >
					    	<etiqueta paralaetiqueta "clave">Contraseña</>
					    	< Tipo deentrada"" contraseña"  clase"form-control"  id"clave"  nombre"clave"clave" >
					  	</Div>
					  	<div classá"form-group" >
					    	<etiqueta para"clave2">Verifica tu Contraseña</etiqueta>
					    	<Tipo de entrada "" contraseña"  clase"form-control"  id"clave2"  nombre"clave2 " clave2" >
					  	</Div>
					  	<tipo de botón "enviar"  nombre"enviar"  clase"btn btn-primary">Enviar</botón>
					</Forma>
				</Div>
				<div classá"col-md-3"></div>
			</Div>
		</Sección>
		<Pie>
			<p>Mensajes App - creado para mostrar Owasp 2020 ©</p>
		</Pie>
	</Cuerpo>
</Html>