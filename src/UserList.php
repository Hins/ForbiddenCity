<?php

include_once "Util.php";

$allUser = array("HinsPan");
$seeds = array("HinsPan");
$cf = new CommandFactory("UserList");

while(count($seeds) > 0 && count($allUser) < 10000)
{
	$seeds2 = array();
	while(count($seeds) > 0)
	{
		$seed = array_pop($seeds);
		$command = $cf->Execute($seed);
		$content = GetFileContent(OUTPUTFOLDER.$seed.USERLISTFILEPOSTFIX);
		if ($content != false)
		{
			$content = json_decode($content);
			foreach($content as $value)
			{
				if (!in_array($value->{"uid"}, $allUser))
				{
					array_push($allUser, $value->{"uid"});
					array_push($seeds2, $value->{"uid"});
				}
			}
		}
	}
	$seeds = $seeds2;
}

?>