<section class="seccion">
<div class="formulario clearfix">
	<div class="cabecera_formularios">
		<h3>Formulario de alta en la web</h3>
	<form method="post" action="alta.php">
		</div>
	<div class="col_2_formulario">
	
            <label for="nombre">* Nombre: <input type="text" name="nombre_usuario" required="true" id="nombre" value="<?php echo $_POST["nombre_usuario"];->getNombreUsuario(); ?>"/></label>
	</div>
	<div class="col_2_formulario">
	
             <label for="apellidos"> * Primer apellido: <input type="text"  name="apellido1" required="true" id="apellidouno" value="<?php echo $_POST["apellido1"];->getApellidosUsuario(); ?>"/></label>
    </div>
    <div class="col_2_formulario">
	
             <label for="apellidos"> Segundo apellido: <input type="text" name="apellido2" id="apellidodos" value="<?php echo $_POST["apellido2"];->getApellidosUsuario(); ?>"/></label>
	</div>
		<div class="col_2_formulario">
	
            <label for="email"> * Correo electrónico: <input type="email" name="email_usuario" required="true" id="email" value="<?php echo $_POST["email_usuario"];->getEmailUsuario(); ?>"/></label>
	</div>
	<div class="col_2_formulario">
	
            <label for="password"> * Contraseña: <input type="password" name="password_usuario" required="true" id="password" value="<?php echo $_POST["password_usuario"];->getpasswordUsuario(); ?>"/></label>
	</div>
    <div class="col_2_formulario">
	
    <label for="rpassword"> * Repite contraseña: <input type="password" name="rpassword_usuario" required="true" id="rpassword"></label>
</div>
        
    <div class="col_2_formulario">
	
            <label for="pais"> * Pais: <input type="text" name="pais_usuario" id="pais" value="<?php echo $_POST["pais_usuario"];->getPaisUsuario(); ?>"/></label>
	</div>
		<div class="col_2_formulario">
	
            <label for="fecha_nacimiento"> * Fecha de nacimiento: <input type="date" name="fecha_nacimiento_usuario" min="1918-12-31" max="2000-12-31" id="fecha_nacimiento" value="<?php echo $usuario->getFechaNacimientoUsuario(); ?>"/></label>
	</div>
		<div class="col_formulario">
			
			<input class="buttom_green" type="submit" value="Darse de alta" />
		</div>
        <div class="leyenda">
        <p ><b>* los campos marcados con este símbolo son obligatorios</b></p>
        </div>	

	</form>
 </div>
	</div>

    
 </div>
