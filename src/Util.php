<?php
include_once "User.php";
include_once "Config.php";

function GetFileContent($filename)
{
    $handle = fopen($filename, "r");
	if ($handle == false)
	{
		return false;
	}
	$size = filesize($filename);
	if ($size == false)
	{
		return false;
	}
    $content = fread($handle, $size);
	fclose($handle);
	return $content;
}

function GetTimeStamp($createDate)
{
    date_default_timezone_set("Asia/Hong_Kong");
    $time_array = explode(" ", $createDate);
	$date_array = explode("-", $time_array[0]);
	$curDate = getdate(time());
	return (count($date_array) < 3) ? 0.0 : ($curDate["year"] - intval($date_array[0])) * 365 + ($curDate["mon"] - intval($date_array[1])) * 30 + ($curDate["mday"] - intval($date_array[2]));
}

function GetSectionFromProfile($content, $startBound, $endBound)
{
    $start = strpos($content, $startBound);
	if ($start !== false)
	{
		$end = strpos($content, $endBound, $start + strlen($startBound));
		if ($end !== false)
		{
			return substr($content, $start + strlen($startBound), $end - $start - strlen($startBound));
		}
	}
	return false;
}

function ExtractBasicElements(&$user, $content, $seed)
{
    // createdDate
	$createdDate = GetSectionFromProfile($content, CREATEDATEPREFIX, CREATEDATEPOSTFIX);
	if ($createdDate != false)
	{
		$user->createdDate = GetTimeStamp($createdDate);
	}

	// Signature
	$signatureSize = GetSectionFromProfile($content, SIGNATUREPREFIX, SIGNATUREPOSTFIX);
	if ($signatureSize != false)
	{
		$user->signatureSize = strlen($signatureSize);
	}

	// Contact
	$contacts = GetSectionFromProfile($content, CONTACTPREFIX, CONTACTPOSTFIX);
	if ($contacts != false)
	{
		$user->contacts = $contacts;
	}

	// Friend
	$ID = GetSectionFromProfile($content, IDPREFIX, IDPOSTFIX);
	$ID = substr($ID, 0, strlen($ID) - 1);
	$user->ID = $ID;
	$friends = GetSectionFromProfile($content, $ID.FRIENDPREFIX, FRIENDPOSTFIX);
	if ($friends != false)
	{
		$user->friends = $friends;
	}

	// Group
	$group = GetSectionFromProfile($content, GROUPPREFIX, GROUPPOSTFIX);
	if ($group != false)
	{
		$user->group = $group;
	}

	// City
	$city = GetSectionFromProfile($content, CITYPREFIX, CITYPOSTFIX);
	if ($city != false)
	{
		$user->city = $city;
	}

	// CityInterest
	$cityInterest = GetSectionFromProfile($content, CITYINTERESTPREFIX, CITYINTERESTPOSTFIX);
	if ($cityInterest != false)
	{
		$user->cityInterest = $cityInterest;
	}

	// List
	$list = GetSectionFromProfile($content, LISTPREFIX, LISTPOSTFIX);
	if ($list != false)
	{
		$user->list = $list;
	}

	// ListInterest
	$listInterest = GetSectionFromProfile($content, LISTINTERESTPREFIX, LISTINTERESTPOSTFIX);
	if ($listInterest != false)
	{
		$user->listInterest = $listInterest;
	}

	// Album
	$album = GetSectionFromProfile($content, ALBUMPREFIX, ALBUMPOSTFIX);
	if ($album != false)
	{
		$user->album = $album;
	}

	// AlbumInterest
	$albumInterest = GetSectionFromProfile($content, ALBUMINTERESTPREFIX, ALBUMINTERESTPOSTFIX);
	if ($albumInterest != false)
	{
		$user->albumInterest = $albumInterest;
	}

	// Music
	$music = GetSectionFromProfile($content, MUSICPREFIX1.$seed.MUSICPREFIX2, MUSICPOSTFIX);
	if ($music != false)
	{
		$user->music = $music;
	}

	// MusicInterest
	$musicInterest = GetSectionFromProfile($content, MUSICINTERESTPREFIX1.$seed.MUSICINTERESTPREFIX2, MUSICINTERESTPOSTFIX);
	if ($musicInterest != false)
	{
		$user->musicInterest = $musicInterest;
	}

	// Musicing
	$musicing = GetSectionFromProfile($content, MUSICINGPREFIX1.$seed.MUSICINGPREFIX2, MUSICINGPOSTFIX);
	if ($musicing != false)
	{
		$user->musicing = $musicing;
	}

	// Movie
	$movie = GetSectionFromProfile($content, MOVIEPREFIX1.$seed.MOVIEPREFIX2, MOVIEPOSTFIX);
	if ($movie != false)
	{
		$user->movie = $movie;
	}

	// MovieInterest
	$movieInterest = GetSectionFromProfile($content, MOVIEINTERESTPREFIX1.$seed.MOVIEINTERESTPREFIX2, MOVIEINTERESTPOSTFIX);
	if ($movieInterest != false)
	{
		$user->movieInterest = $movieInterest;
	}

	// Movieing
	$movieing = GetSectionFromProfile($content, MOVIEINGPREFIX1.$seed.MOVIEINGPREFIX2, MOVIEINGPOSTFIX);
	if ($movieing != false)
	{
		$user->movieing = $movieing;
	}

	// Book
	$book = GetSectionFromProfile($content, BOOKPREFIX1.$seed.BOOKPREFIX2, BOOKPOSTFIX);
	if ($book != false)
	{
		$user->book = $book;
	}

	// BookInterest
	$bookInterest = GetSectionFromProfile($content, BOOKINTERESTPREFIX1.$seed.BOOKINTERESTPREFIX2, BOOKINTERESTPOSTFIX);
	if ($bookInterest != false)
	{
		$user->bookInterest = $bookInterest;
	}

	// booking
	$booking = GetSectionFromProfile($content, BOOKINGPREFIX1.$seed.BOOKINGPREFIX2, BOOKINGPOSTFIX);
	if ($booking != false)
	{
		$user->booking = $booking;
	}

	// thing
	$thing = GetSectionFromProfile($content, THINGPREFIX, THINGPOSTFIX);
	if ($thing != false)
	{
		$user->thing = $thing;
	}

	// thingLike
	$thingLike = GetSectionFromProfile($content, THINGLIKEPREFIX1.$seed.THINGLIKEPREFIX2, THINGLIKEPOSTFIX);
	if ($thingLike != false)
	{
		$user->thingLike = $thingLike;
	}

	// story
	$story = GetSectionFromProfile($content, STORYPREFIX, STORYPOSTFIX);
	if ($story != false)
	{
		$user->story = $story;
	}

	// expert
	$expert = GetSectionFromProfile($content, EXPERTPREFIX, EXPERTPOSTFIX);
	if ($expert != false)
	{
		$user->expert = $expert;
	}

	// Drama
	$drama = GetSectionFromProfile($content, DRAMAPREFIX, DRAMAPOSTFIX);
	if ($drama != false)
	{
		$user->drama = $drama;
	}

	// Magazine
	$magazine = GetSectionFromProfile($content, MAGAZINEPREFIX, MAGAZINEPOSTFIX);
	if ($magazine != false)
	{
		$user->magazine = $magazine;
	}
}

?>