<!DOCTYPE html>
<html>
<head>
<title>Formulario</title> 
<style type="text/css">
h1 { text-align: center; }
td { padding: 0.2em 2em ; }
</style>

</head>
<body>
<h1>Formulario
</h1>
<form action="comprobar.php" method="get"/>

<p>Nombre: <input type="text" name="nombre" placeholder="Nombre" required>   
   Apellidos: <input type="text" name="apellidos" size="20" required>   
   e-mail: <input type="text" name="email" size="35" required>
   DNI: <input type="text" name="dni" size="8" required>
   Edad: <input type="text" name="edad" size="3" required><br/></p>
<table>
Domicilio<br/>
   País: <input type="text" name="pais" size="15"  required> 
   Provincia: <input type="text" name="provincia"size="15"  required> 
   Localidad: <input type="text" name="localidad" size="15" required>
   Calle: <input type="text" name="calle"size="15"  required> 
   Numero: <input type="text" name="numero" size="4" required> 
   Torre: <input type="text" name="torre"size="4" > 
   Piso: <input type="text" name="piso"size="4" >
</table>
<table>
   <tr>
   <td>
   Sexo<br/>
   <input type="radio" name="sexo" value="Hombre"  required> Hombre<br/>
   <input type="radio" name="sexo" value="Mujer"> Mujer</p>
   </td>
   <td>
   Estado Civil<br/>
   <input type="radio" name="estado" value="Soltero" checked="checked"  required>
     Soltero/a<br/>
   <input type="radio" name="estado" value="Casado"> 
     Casado/a<br/>
   <input type="radio" name="estado" value="Viudo"> 
     Viudo/a<br/>
    <input type="radio" name="estado" value="Divorciado"> 
    Divorciado/a<br/>
   </td>
   <td>
       Hijos<input type="text" name="hijos" size="5"> <br/>
   </td>
   <td>
   Hobbies: <br/>
   
   <input type="radio" name="hobbies" value="Musica"required> Música<br/>
   <input type="radio" name="hobbies" value="Deportes ">Deportes<br/>
   <input type="radio" name="hobbies" value="Cine ">Cine<br/>
   <input type="radio" name="hobbies" value="Libros"> Libros<br/>
   <input type="radio" name="hobbies" value="Ciencia"> Ciencia</p>
   </td>
</table>
<input value="Enviar" type="submit">
</form>
</body>
</html>


