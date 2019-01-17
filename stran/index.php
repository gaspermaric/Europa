<!-- Vse naloge preusmeritev -->
<?php

if (isset($_GET['stran']))
{
	if (($_GET['stran']=="novice"))
	{
		include 'template/novice.html.php';
	}
	else if (($_GET['stran']=="slovenia"))
	{
		if (isset($_GET['pokrajine']))
		{
			if($_GET['pokrajine']=="alpska")
				include 'template/pokrajine/alpska.html.php';
			else if($_GET['pokrajine']=="kraska")
				include 'template/pokrajine/kraska.html.php';
			else if($_GET['pokrajine']=="osrednja")
				include 'template/pokrajine/osrednja.html.php';
			else if($_GET['pokrajine']=="panonska")
				include 'template/pokrajine/panonska.html.php';
		}
		else if(isset($_GET['gastronomija']))
		{
			if($_GET['gastronomija']=="vina")
				include 'template/gastronomija/vina.html.php';
			else if($_GET['gastronomija']=="hrana")
				include 'template/gastronomija/hrana.html.php';
		}
		else
			include 'template/slovenia.html.php';
	}
}
else
{
  include 'template/index.html.php';
}

?>
