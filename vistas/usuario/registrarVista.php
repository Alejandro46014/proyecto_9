<section class="seccion">
<div class="formulario clearfix">
    <div class="cabecera_formularios">
        <h3>Formulario de alta en la web</h3>
    <form method="post" action="?controller=Usuarios&action=crearUsuario">
        </div>
        <p><b>La contraseña deber tener 8 caracteres e inlcuir una Mayúscula, minúsculas y números</b></p>
    <div class="col_2_formulario">
    <label for="nombre">* Nombre: <input type="text" name="nombre_usuario" required="true" id="nombre" value="<?php echo $_POST["nombre_usuario"]; ?>"/></label>
    </div>
    <div class="col_2_formulario">
    
            <label for="apellidos"> * Primer apellido: <input type="text"  name="apellido1_usuario" required="true" id="apellidouno" value="<?php echo $_POST["apellido1_usuario"]; ?>"/></label>
   </div>
   <div class="col_2_formulario">
    
            <label for="apellidos"> Segundo apellido: <input type="text" name="apellido2_usuario" id="apellidodos" value="<?php echo $_POST["apellido2_usuario"]; ?>"/></label>
    </div>
        <div class="col_2_formulario">
    
           <label for="email"> * Correo electrónico: <input type="email" name="email_usuario" required="true" id="email" value="<?php echo $_POST["email_usuario"]; ?>"/></label>
    </div>
    <div class="col_2_formulario">
    
           <label for="password"> * Contraseña: <input type="password" name="password_usuario" required="true" id="password" value="<?php echo $_POST["password_usuario"]; ?>" title="La contraseña debe contener mayúsculas minúsculas, numeros y tener una longitud de 8 caracteres"/></label>
    </div>
   <div class="col_2_formulario">
    
   <label for="rpassword"> * Repite contraseña: <input type="password" name="rpassword" required="true" id="rpassword"></label>
</div>

   <div class="col_2_formulario">
    
           <label for="pais"> * Pais: <input type="text" name="pais_usuario" id="pais" value="<?php echo $_POST["pais_usuario"]; ?>"/></label>
    </div>
        <div class="col_2_formulario">
    
           <label for="fecha_nacimiento"> * Fecha de nacimiento: <input type="date" name="fecha_nacimiento_usuario" min="1918-12-31" max="2000-12-31" id="fecha_nacimiento" value="<?php echo $$_POST['fecha_nacimiento_usuario'] ?>"/></label>
    </div>
        <div class="col_formulario">
            
            <input class="buttom_green" type="submit" value="Darse de alta" />
            <div class="leyenda">
       <spam>* los campos marcados con este símbolo son obligatorios</spam>
       </div>
        </div>
           

    </form>
</div>
    </div>


</div>
</section>