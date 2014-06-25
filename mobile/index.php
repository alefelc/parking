<?php include("header.php"); ?>
<div class="exploreSiteFullPane">
	<div id="content">
		<h2 class="title">Saldo Actual</h2>
		<h4 class="title">$ 300</h4>
		<h2 class="title" style="margin-top:30px">Recarga Saldo</h2>
		<div class="balance">
			<div class="charge">
				<a href="#modal"><img src="img/charge.png" width="80px" height="80px"></a>
			</div>
			<div class="call-big">
				<a href="tel:+13174562564"><img src="img/call_big.png" width="80px" height="80px"></a>
			</div>
		</div>
	</div>
</div>
<div id="modal">
	<div class="modal-content">
		<div class="cf footer">
			<a href="#" class="btn"><img src="img/close@2x.png" width="16px" height="16px"></a>
		</div>
		<div class="modal-header">
			<h5>Recarga de Saldo</h5>
		</div>
		<form action="#" method="post">
			<input type="text" id="code" pattern="[0-9]{12}" placeholder="Ingrese el PIN" required/>
			<input type="submit" value="Cargar">
		</form>
	</div>
	<div class="overlay">
	</div>
</div>
</body>
<?php include("footer.php"); ?>