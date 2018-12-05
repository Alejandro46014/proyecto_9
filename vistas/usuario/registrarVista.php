
<section class="seccion">
<div class="formulario clearfix">
    <h2>Formulario de alta</h2>
    <form action="?controller=Usuarios&action=crearUsuario" method="post">
	<div class="col_2_formulario">      
<label for="nombre">Nombre *</label><input id="nombre" type="text" name="nombre_usuario" required="true" placeholder="Introduce tu nombre" />
</div>
<div class="col_2_formulario">     
<p><label for="apellido1">Primer apellido *</label><br /><input id="apellido1" type="text" name="apellido1" required="true" placeholder="Introduce tu primer apellido" /></p>
</div>
<div class=col_2_formulario>      
<p><label for="nombre">Segundo apellido</label><br /><input type="text" name="usuario" placeholder="Introduce tu segundo apellido" /></p>
</div>
<div style="width:50%; float:left;">       
<p><label for="nombre">Fecha de nacimiento *</label><br /><input type="date" name="fecha" required="true" placeholder="Introduce tu feche de naciemiento" /></p>
</div>
<div style="width:50%; float:left;">     
<p><label for="nombre">Poblacion *</label><br /><input type="text" name="poblacion" required="true" placeholder="Introduce tu poblacion" /></p>
</div>
<div style="width:50%; float:left;">      
<p><label for="nombre">Email *</label><br /><input type="text" name="email" required="true" placeholder="Introduce tu direccion de correo electrónico" /></p>
</div>
<div style="width:50%; float:left;">       
<p><label for="nombre">Usuario *</label><br /><input type="text" name="usuario" required="true" placeholder="Introduce tu usuario" /></p>
</div>
<div style="width:50%; float:left;">
<p><label for="password">Password *</label><br /><input type="text" name="password" required="true" placeholder="Introduce tu contraseña" /></p>
</div>
<p><input type="submit" value="Darse de alta"  name="guardar"/> </p>
<small>* los campos marcados con este símbolo son obligatorios</small>
</form>
 </div>
</form>
 </div>
	
</section>