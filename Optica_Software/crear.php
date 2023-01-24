<div class="form">
			<form action="crearcliente.php" method="POST">
				<label for="tipodoc">TIPO DOCUMENTO</label>
				<br>
                <td><select name="tipoid" class="textosSelect" id="tipoid" size="1">	<option value="CC">CÉDULA DE CIUDADANIA</option>
	<option value="CE">CÉDULA DE EXTRANJERÍA</option>
	<option value="CN">CERTIFICADO DE NACIDO VIVO</option>
	<option value="CD">CARNÉ DIPLOMATICO</option>
	<option value="NU">N.U.I.P</option>
	<option value="PA">PASAPORTE</option>
	<option value="PE">PERMISO ESPECIAL</option>
	<option value="RC">REGISTRO CIVIL</option>
	<option value="SC">SALVOCONDUCTO DE PERMANENCIA</option>
	<option value="TI">TARJETA DE IDENTIDAD</option>
</select></td>
<br>
<br>
                <label for="documento">NUMERO</label>
				<br>
				<input type="text" name="numero" placeholder="Numero Documento" required>
                <br>
                <br>
                <label for="nombre">NOMBRE COMPLETO</label>
				<br>
				<input type="text" name="nombre" placeholder="Nombre" required>
                <br>
                <br>
				<label for="nombre">DIRECCION</label>
				<br>
				<input type="direccion" name="direccion" placeholder="Direccion" required>
				<br>
                <br>
                <label for="telefono">TELEFONO</label>
				<br>
                <input type="telephone" name="telefono" placeholder="Telefono" required>
				<br>
                <br>
                <label for="nacimiento">FECHA DE NACIMIENTO</label>
				<br>
                <td><input type="date" name="nacimiento" step="1" min="2000-01-01" max="2018-12-31" value="<?php echo date("Y-m-d");?>"required></td>
				<br>
                <br>
				<input type="submit" value="Enviar">
			</form>

            