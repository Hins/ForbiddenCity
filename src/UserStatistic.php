<?php
include_once "Util.php";

$handle = opendir(DATADIRECTORY);
$users = array();

while(false !== $file=(readdir($handle)))
{
	if($file != DATADIRECTORY.'.' && $file != DATADIRECTORY.'..')
	{
		$content = GetFileContent("./data/".$file);
		if ($content != false)
		{
			$content = json_decode($content);
			foreach($content as $value)
			{
				if (!in_array($value->{"uid"}, $users))
				{
					array_push($users, $value->{"uid"});
					print $value->{"uid"}."\n";
				}
			}
		}
	}
}
closedir($handle);
?>