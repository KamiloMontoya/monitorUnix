
<p>A continuación se presenta el listado de comandos utilizados para extraer la información del servidor mostrada en el Dashboard:</p>

<table class="table">
	<thead>
		<tr> 
			<th scope="col">Variable</th>
			<th scope="col">Comando</th>
		</tr>	
	</thead>
	<tbody>
		<tr> 
			<td scope="row">Versión sistema operativo</td>
			<td><code>cat /etc/issue</code></td>
			
		</tr>	
		<tr> 
			<td scope="row">Versión kernel de linux</td>
			<td><code>uname -r</code></td>
			
		</tr>	
		<tr> 
			<td scope="row">Obtener IP pública:</td>
			<td>
				<code>curl ifconfig.me</code>
			</td>
		</tr>	
		<tr> 
			<td scope="row">Obtener IP privada:</td>
			<td><code>hostname -I | awk '{print $1}'</code></td>
			
		</tr>
		<tr> 
			<td scope="row">Porcentaje de uso de CPU:</td>
			<td><code>grep 'cpu ' /proc/stat | awk '{usage=($2+$4)*100/($2+$4+$5)} END {print usage "%"}'</code></td>
			
		</tr>
		<tr> 
			<td scope="row">Porcentaje de uso de memoria:</td>
			<td><code>free -m -h -t | grep T | awk '{usage=($3*100)/$2} END {print usage "%"}'</code></td>
			
		</tr>
		<tr> 
			<td scope="row">Uso de disco duro</td>
			<td><code>df --total | awk '{usage=($4*100)/$2} END {print usage "%"}'</code></td>
			
		</tr>
	</tbody>
</table>
<br><br>