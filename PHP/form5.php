<form  id="form" name="form" method="GET" action="InserirTodos.php">
 	<label for= "nome"> Nome: </label><br/>
	<input type= "text" name="nome"><br/>
	<label for= "sobrenome"> Sobrenome: </label><br/>
	<input type= "text" name="sobrenome"><br/><br/>
	<label for="pais">Nacionalidade:</label> 
  	<select name="pais" id="pais">
                <option value="Brasil" selected="selected">Brasil</option>
                <option value="Chile">Chile</option>
                <option value="Argentina">Argentina</option>
                <option value="Uruguai">Uruguai</option>
        </select> <br/><br/>
        <p>Selecionar:</p>
	<input type="radio" id="sexof" name="sexo" value="Sexo: Femenino">
	<label for="sexof">Femenino</label><br>
	<input type="radio" id="sexom" name="sexo" value="Sexo: Masculino">
	<label for="sexom">Masculino</label><br><br>
	
	<input type= "radio" id="campinas" name="fav_lang" value="Eu sou de Campinas">
	<label for="html">CAMPINAS </label><br>
	<input type="radio" id="itu" name="fav_lang" value="Eu sou de Itu">
	<label for="css">ITU</label><br>
	<input type="radio" id="sp" name="fav_lang" value="Eu sou de SP">
	<label for="javascript">SP</label><br><br>
	
	<label>Onde estuda:</label> <br>
	<input type="checkbox" name="onde_estuda[]" value="Campinas"> Campinas <br>
	<input type="checkbox" name="onde_estuda[]" value="SP"> SP <br>
	<input type="checkbox" name="onde_estuda[]" value="Piracicaba"> Pira <br>
	<input type="checkbox" name="onde_estuda[]" value="Outro"> Outro...<br><br>
 
	<input name="button" type="submit" value="Inserir"/>
</form>
</body>
</html>
