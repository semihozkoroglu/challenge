<h1>Katılım Formu</h1>
<br />
<span>onsequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</span>
<br />
<br />
<form>
	<div class="appform">
		<label class="formtext" for="user-name">Ad Soyad </label>
			<input class="inputbox" id="user-name" name="name" type="text"/>
	</div>		
	<div class="appform">
		<label class="formtext" for="user-phone">Telefon </label>
			<input class="inputbox" id="user-phone" name="number" type="text"/>
	</div>		
	<div class="appform">
		<label class="formtext" for="user-mail">E-Mail </label>
			<input class="inputbox" id="user-mail" name="email" type="text"/>
	</div>
	<div class="clear"></div>
		<label class="check-text">
			<input id="checkbox" type="checkbox" name="terms" checked="checked"/> Katılım koşullarını okudum, kabul ediyorum.
		</label> 
	<input type="hidden" name="id" value="<?php echo $id ?>"><br>
	<div id="logingo" class="button"><span>
		<input type="submit" value="Kaydet">
		</span>
	</div>
</form>
