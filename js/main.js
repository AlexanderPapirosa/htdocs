var gVersion = "TimeRecordingSystem 1.5";

function show0002()
{
	document.write( gVersion );
}

function enable0001()
{	
	document.cookie = 'set0001=true';
	show0001();
}

function isEnable0001()
{	
	if (navigator.cookieEnabled == false) {
      alert ('Cookies sind ausgeschaltet.');	  
	  return false;
    }
	
	if ( document.cookie )
	{	
		var lValue = document.cookie;
		if ( lValue.indexOf('set0001=true') != -1 )
		{
			return true;
		}
	}
	
	return false;	
}

function show0001()
{
	if ( isEnable0001() )
	{
		var lElement = document.getElementById('menulist');
		if ( lElement != null )
		{
			lElement.innerHTML = '<li id="menu_label">ANMELDUNG</li><li id="menu_login"><a href="#">Einloggen</a></li>';
		}
		var lElement2 = document.getElementById('bodyText');
		if ( lElement2 != null )
		{
			lElement2.innerHTML = '<a href="#">Passwort vergessen?</a><br><a href="main/main.php">Registrieren</a><br><a href="#">Registrieren als Gruppenadministrator</a>';
		}
		var lElement3 = document.getElementById('bodyForm');
		if ( lElement3 != null )
		{
			lElement3.innerHTML = '\
			<table border="0" cellpadding="0" cellspacing="40" align="center" style="width:100%">\
				<tr>\
					<td align="center">  \
						<div class="Wrapper">\
						<div class="Input">\
							<input type="text" id="inpute" class="Input-text" placeholder="E-Mail">\
							<label for="input" class="Input-label">E-Mail</label>\
						</div>\
						</div>\
					</td>\
				</tr> \
				<tr>\
					<td align="center">  \
						<div class="Wrapper">\
						<div class="Input">\
							<input type="password" id="inputp" class="Input-text" placeholder="Passwort">\
							<label for="input" class="Input-label">Passwort</label>\
						</div>\
						</div> \
					</td>\
				</tr>\
			</table>';
		}
	}
}