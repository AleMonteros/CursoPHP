<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Validar formulario</title>
	<style>
		body{
            background-color: #264673; 
            box-sizing: border-box; 
            font-family: Arial;
        }

		form{
			background-color: white;
			padding: 10px;
			margin: 100px auto;
			width: 500px;
		}

		input[type=text], input[type=password]{
			padding: 10px;
			width: 480px;
		}
		input[type="submit"]{
            text-align: center;
			border: 0;
			background-color: #ED8824;
			padding: 10px 20px;
            margin-top: 10px;
		}

		.error{
			background-color: #FF9185;
			font-size: 12px;
			padding: 10px;
		}
		.correcto{
			background-color: #A0DEA7;
			font-size: 12px;
			padding: 10px;
		}
	</style>
</head>
<body>
	<form action="#" method="POST">
		<?php

            $nombre = "";
            $password = "";
            $email = "";
            $pais = "";
            $nivel = "";
            $lenguajes = array();


			if(isset($_POST['nombre'])){
                $nombre = $_POST['nombre'];
                $password = $_POST['password'];
                $email = $_POST['email'];
                $pais = $_POST['pais'];

                if(isset($_POST['nivel'])){
                    $nivel = $_POST['nivel'];
                }else{
                    $nivel = "";
                }

                if(isset($_POST['lenguajes'])){
                    $lenguajes = $_POST['lenguajes'];
                }else{
                    $lenguajes = [];
                }
            
                $campos = array();

                if($nombre == ""){
                    array_push($campos, "El campo Nombre no puede estar vaci.");
                }

                if($password == "" || strlen($password < 6)){
                    array_push($campos, "El campo Contraseña no puede estar vacio, ni tener menos de 6 caracteres.");
                }

                if($email == "" || strpos($email, "@") === false){
                    array_push($campos, "Ingresa un correo Electrónico valido.");
                }

                if($pais == ""){
                    array_push($campos, "Selecciona un país de origen.");
                }

                if($nivel == ""){
                    array_push($campos , "Selecciona un nivel de Desarrollo.");
                }

                if($lenguajes == "" || count($lenguajes) < 2){
                    array_push($campos , "Selecciona al menos 2 Lenguajes de Programación");
                }

                if(count($campos) > 0){
                    echo "<div class='error'>";
                    for ($i = 0; $i < count($campos); $i++) {
                        echo "<li>".$campos[$i]."</i>";
                    }
                } else{
                    echo "<div class='correcto'> Datos Correctos";
                }
                echo "</div>";
            }
		?>
		<p>
		Nombre:<br/>
		<input type="text" name="nombre" value="<?php echo $nombre; ?>">
		</p>

		<p>
		Contraseña:<br/>
		<input type="password" name="password" value="<?php echo $password; ?>">
		</p>

		<p>
		Correo Electrónico:<br/>
		<input type="text" name="email" value="<?php echo $email; ?>">
		</p>

        <p>
            País de Origen : 
            <select name="pais" id="">
                <option value="">Selecciona un País</option>
                <option value="arg" <?php if($pais == "arg") echo "selected"?>>Argentina</option>
                <option value="uru" <?php if($pais == "uru") echo "selected"?>>Uruguay</option>
                <option value="par" <?php if($pais == "par") echo "selected"?>>Paraguay</option>
                <option value="chi" <?php if($pais == "chi") echo "selected"?>>Chile</option>
                <option value="bol" <?php if($pais == "bol") echo "selected"?>>Bolivia</option>
                <option value="bra" <?php if($pais == "bra") echo "selected"?>>Brasil</option>
                <option value="per" <?php if($pais == "per") echo "selected"?>>Peru</option>
            </select>
        </p>

        <p>
            Nivel de Desarrollo :
            <input type="radio" name="nivel" value="principiante" <?php if($nivel == "principiante") echo "checked" ?>> Principiante
            <input type="radio" name="nivel" value="intermedio"  <?php if($nivel == "intermedio") echo "checked" ?>> Intermedio
            <input type="radio" name="nivel" value="avanzado" <?php if($nivel == "avanzado") echo "checked" ?>> Avanzado
        </p>

        <p style="margin-top: 15px;" >
            Lenguajes de Programación : <br>
            <input style="margin-top: 15px;" type="checkbox" name="lenguajes[]" value="php" <?php if(in_array("php", $lenguajes)) echo "checked" ?>> PHP <br>
            <input type="checkbox" name="lenguajes[]" value="js" <?php if(in_array("js", $lenguajes)) echo "checked" ?>> JavaScript <br>
            <input type="checkbox" name="lenguajes[]" value="c#" <?php if(in_array("c#", $lenguajes)) echo "checked" ?>> C# <br>
            <input type="checkbox" name="lenguajes[]" value="c++" <?php if(in_array("c++", $lenguajes)) echo "checked" ?>> C++ <br>
            <input type="checkbox" name="lenguajes[]" value="py" <?php if(in_array("py", $lenguajes)) echo "checked" ?>> Python <br>
            <input type="checkbox" name="lenguajes[]" value="java" <?php if(in_array("java", $lenguajes)) echo "checked" ?>> Java <br> 
        </p>

		<p>
            <input type="submit" value="Enviar Datos">
        </p> 
	</form>
</body>
</html>