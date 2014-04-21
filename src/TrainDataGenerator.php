<?php

include_once "Config.php";
include_once "Util.php";
include_once "User.php";
include_once "CommandFactory.php";

$file = fopen("InitialSeeds","r");
while(!feof($file))
{
	$seed = fgets($file);
	$seed = substr($seed, 0, strlen($seed) - 1);
	$user = new User();
	$cf = new CommandFactory("UserAPI");
	
	$command = $cf->Execute($seed);
	exec($command, $content);
	$content = GetFileContent(OUTPUTFOLDER.$seed.USERAPIFilePOSTFIX);
	if ($content != false)
	{
		$json = json_decode($content);
		$user->idSize = strlen($json->{"screen_name"});
		$user->is_digitID = ctype_digit($json->{"screen_name"}) ? 1 : 0;
		$user->introSize = strlen($json->{"description"});
		$user->feedCount = $json->{"statuses_count"};
	}
	$cf->m_command = "Profile";
	$command = $cf->Execute($seed);
	exec($command, $content);
	ExtractBasicElements($user, GetFileContent(OUTPUTFOLDER.$seed.FILEPOSTFIX), $seed);
	if (intval($user->createdDate) != 0)
	{
		$user->Output();
	}
}
fclose($file);

?>