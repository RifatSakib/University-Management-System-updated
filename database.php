<table>
	<tr>
	
		
		<th>SName</th>
		<th>ID</th>
		
	</tr>
	<tbody id="data">
		
	</tbody>

</table>
<script >
	var ajax=new XMLHttpRequest();
	var method="GET";
	var url="data.php";
	var asynchronous=true;


	ajax.open(method,url,asynchronous);
	ajax.send();
	ajax. onreadystatechange = function()
	{

		if(this.readystate ==4 && this.status==200)
		{
			var data = JSON.parse(this.responseText);
			console.log(data);
			var html="";
			for (var a=0; a<data.length;a++)
			{
				var SName=data[a].SName;
				var ID=data[a].ID;
				html +="<tr>";
				html +="<td>"+SName+"</td>";
				html +="<td>"+ID+"</td>";
				html +="</tr>";

			}

			document.getElementByID("data").innerHTML=html;
		}
	}


</script>