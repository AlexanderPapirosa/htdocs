var gVersion = "TimeRecordingSystem 1.0.6";
var gMessage0001 = "Bitte ausfüllen!";

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

function do0001( aValue )
{
		var lElement = document.getElementById( aValue );
		lElement.submit();
}

function do0002_1()
{
	var x = false;
	x = do0002_1_1( "in0003" );
	if ( x == false ) return;
	
	x = do0002_1_1( "in0004" );
	if ( x == false ) return;
	
	x = do0002_1_1( "in0006" );
	if ( x == false ) return;
	
	x = do0002_1_1( "in0007" );
	if ( x == false ) return;
	
	x = do0002_1_1( "in0008" );
	if ( x == false ) return;	

	document.forms["form0002"].submit();	
}

function do0002_1_1( aValue )
{
	var x = document.forms["form0002"][aValue];
	if ( x.value == "" || x.value == gMessage0001 )
	{
		x.value = gMessage0001;
		x.style = "color: red;";
		return false;		
	}
	return true;	
}

function do0002_2( aValue )
{
	var lObject = document.forms["form0002"][aValue];
	if ( lObject.value == gMessage0001 )
	{
		lObject.value = "";
		lObject.style = "color: #005500;";
	}
}

function show0001()
{
	if ( isEnable0001() )
	{
		var lElement = document.getElementById('menulist');
		if ( lElement != null )
		{
			lElement.innerHTML = '<li id="menu_label">ANMELDUNG</li><li id="menu_login"><a href="#" onclick="do0001(\'form0001\');">Einloggen</a></li>';
		}
		var lElement2 = document.getElementById('bodyText');
		if ( lElement2 != null )
		{
		lElement2.innerHTML = '\
		<a href="#">Passwort vergessen?</a>\
		<br><a href="main/site0001.php">Registrieren</a>\
		<br><a href="main/db.php">Registrieren als Gruppenadministrator</a>\
		';
		}
		var lElement3 = document.getElementById('bodyForm');
		if ( lElement3 != null )
		{
			lElement3.innerHTML = '\
			<form id = "form0001" action="main/start.php" method="post">\
				<table border="0" cellpadding="0" cellspacing="40" align="center" style="width:100%">\
					<tr>\
						<td align="center">  \
							<div class="Wrapper">\
							<div class="Input">\
								<input type="text" name="in0001" class="Input-text" placeholder="E-Mail">\
								<label for="input" class="Input-label">E-Mail</label>\
							</div>\
							</div>\
						</td>\
					</tr> \
					<tr>\
						<td align="center">  \
							<div class="Wrapper">\
							<div class="Input">\
								<input type="password" name="in0002" class="Input-text" placeholder="Passwort">\
								<label for="input" class="Input-label">Passwort</label>\
							</div>\
							</div> \
						</td>\
					</tr>\
				</table>\
			</form>\
			';
		}
	}
}