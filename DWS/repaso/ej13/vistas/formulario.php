<?php
echo "<form method='GET'>
Peso<input type='number' name='peso'><br>
Precio<input type='number' name='precio'><br>
Stock<input type='number' name='stock'><br>
Pulgadas o capacidad(monitor)<input type='number' name='pulgacap'><br>
<select name='tipo'>
<option value='Monitores'>Monitor</option>
<option value='Discoduro'>Disco</option>
</select>
<input type='submit' name='enviar' value='Enviar'></form>";