
 <script  src="/js/searchbox.js"></script>
 <script  src="/js/buttonSend.js"></script>
 <link rel="stylesheet" type="text/css" href="/css/my.css">
<title>
Добавление пары
</title>
<h1>
Добавление пары
</h1>
  
<body>
<div id="main">
	<br><br><br>
    <div id="header"><h1>Ввод данных</h1></div>
    <br>
    <table  style="	width: 100%;">
    <tr>
    	<td style="	width: 50%;">
		    <div id="content">
		    	Преподаватель:<br>
		    	<input type="text" list="results1" id="sbPrepod"/>
		    	<datalist id="results1"></datalist>
		    </div>
		    <br>
		    <br>
		    <br>
		    <div id="content">
		    	Предмет: <br>
		    	<input type="text" list="results2" id="sbPredmet"/>
		    	<datalist id="results2"></datalist>
		    </div>
		    <br>
		    <br>
		    <br>
		    <div id="content">
		    	Группа:<br>
		    	<input type="text" list="results3" id="sbGruppa"/>
		    	<datalist id="results3"></datalist>
		    </div>
		    <div id="content">
		    	Подгруппа:<br>
		    	<input type="text" list="results4" id="sbPodgruppa"/>
		    	<datalist id="results4"></datalist>
		    </div>
		    <br>
		    <br>
		    <br>
		    <div id="content">
		    	№ дня:
		    	<select id = "selectDay">
		    		<option>1</option>
		    		<option>2</option>
		    		<option>3</option>
		    		<option>4</option>
		    		<option>5</option>
		    		<option>6</option>
		    		<option>7</option>
		    		<option>8</option>
		    		<option>9</option>
		    		<option>10</option>
		    		<option>11</option>
		    		<option>12</option>
		    		<option>13</option>
		    		<option>14</option>
		    	</select>
		    </div>
		    <br>
		    <br>
		    <br>
		    <div id = "content">
		    	№ пары:
		    	<select id = "selectPar">
		    		<option>1</option>
		    		<option>2</option>
		    		<option>3</option>
		    		<option>4</option>
		    		<option>5</option>
		    		<option>6</option>
		    		<option>7</option>
		    		<option>8</option>
		    	</select>
		    </div>
		</td>
		<td>
		    
		  		<div class="buttonHolder">
				  <a href="#" class="button tick" id = "buttonSend"></a>
				</div>
				<div id="resultInfo"></div>
		</td>
    </tr>
    </table>


</div>

</body>