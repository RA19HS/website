<!DOCTYPE html>
<html lang='en'>
	<head>
		<meta charset='UTF-8'>
		<title>calendar</title>
		<meta name='author' content='R.A.'>
		<meta name='keywords' content='calendar, event, mathematics, math, weblog, blog, R.A.'>
		<meta name='description' content='Math events'>
		<meta http-equiv='refresh' content='10'>
		<meta name='viewport' content='width=device-width,initial-scale=1.0'>
		<link rel='stylesheet' href='global.css'>
		<style>
body{background-color:rgb(219,255,159);}
table,th,td{border:1px solid black;border-spacing:3px;padding:2px;border-radius:4px;}
.CAL{overflow-x:auto;}
th{background-color:rgb(200,200,200);}tr:hover{background-color:white;}
.CT{background-color:transparent;}
.CY{background-color:yellow;}
.CR{background-color:red;}
.CL{background-color:lime;}
.CB{background-color:brown;}
.CP{background-color:purple;}
.CO{background-color:orange;}
.CS{background-color:black;color:white;}
		</style>
	</head>
	<body>
		<?php $PAGE="calendar"; include 'template.php';?>
		<p>
		<div class='CAL'>
			<table>
				<caption>TIR 1400</caption>
				<th>SH</th><th>1S</th><th>2S</th><th>3S</th><th>4S</th><th>5S</th><th>JM</th>
				<tr><td colspan='3'></td><td class='CY'>01</td><td>02</td><td>03</td><td class='CL'>04</td></tr>
				<tr><td>05</td><td>06</td><td class='CB'>07</td><td>08</td><td>09</td><td class='CR'>10</td><td>11</td></tr>
				<tr><td>12</td><td class='CP'>13</td><td>14</td><td>15</td><td>16</td><td>17</td><td>18</td></tr>
				<tr><td>19</td><td class='CS'>20</td><td>21</td><td>22</td><td>23</td><td>24</td><td>25</td></tr>
				<tr><td>26</td><td class='CS'>27</td><td>28</td><td>29</td><td class='CO'>30</td><td>31</td><td></td></tr>
			</table>
		</div>
		</p>
	</body>
</html>
