<?php include("header.php"); ?>
</div>
<div id="content">
	<h2 class="title">Contactenos</h2>
	<form id="contact" class="contactForm">
		<label>Nombre Completo <span class="required">*</span></label>
		<input type="text" name="name" id="ContactName" placeholder="Nombre">
		<label>E-mail <span class="required">*</span></label>
		<input type="email" name="mail" id="ContactEmail" placeholder="E-mail">
		<label>Mensaje <span class="required">*</span></label>
		<textarea id="ContactMessage" name="comment" placeholder="En que podemos ayudarlo?"></textarea>
		<input type="submit" class="btn-normal" id="SubmitContact" value="enviar">
		<div id="msg" class="notifications" style="display:none">
		</div>
	</form>
	<br/><br/><br/>
</div>
<?php include("footer.php"); ?>