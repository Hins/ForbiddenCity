<?php

include_once "Config.php";

class CommandType
{
	const Profile = "Profile";
	const UserAPI = "UserAPI";
	const Signature = "Signature";
	const Contacts = "Contacts";
	const UserList = "UserList";
}

class CommandFactory
{
    var $m_command;
	function __construct($command)
	{
		$this->m_command = $command;
	}
	
	function Execute($ID)
	{
		switch($this->m_command)
		{
			case CommandType::Profile:
				return CRAWLCOMMAND.SPACESEPERATOR.HOMEPAGE.$ID.SPACESEPERATOR.COMMANDOPTION.SPACESEPERATOR.OUTPUTFOLDER.$ID.FILEPOSTFIX;
			case CommandType::UserAPI:
				return CRAWLCOMMAND.SPACESEPERATOR.USERAPI.$ID.APIKEY.SPACESEPERATOR.COMMANDOPTION.SPACESEPERATOR.OUTPUTFOLDER.$ID.USERAPIFilePOSTFIX;
			case CommandType::Signature:
				return CRAWLCOMMAND.SPACESEPERATOR.USERAPISIGNATURE.$ID.APIKEY.SPACESEPERATOR.COMMANDOPTION.SPACESEPERATOR.OUTPUTFOLDER.$ID.USERSIGNATUREPOSTFIX;
			case CommandType::Contacts:
				return CRAWLCOMMAND.SPACESEPERATOR.USERAPIV2.$ID.APIV2_CONTACT.APIKEY.SPACESEPERATOR.COMMANDOPTION.SPACESEPERATOR.OUTPUTFOLDER.$ID.CONTACT_POSTFIX;
			case CommandType::UserList:
				return CRAWLCOMMAND.SPACESEPERATOR.USERAPI.$ID."/following".APIKEY.SPACESEPERATOR.COMMANDOPTION.SPACESEPERATOR.OUTPUTFOLDER.$ID.USERLISTFILEPOSTFIX;
			default:
				return "";
		}
	}
}

?>