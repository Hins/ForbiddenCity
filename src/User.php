<?php

class User
{
    var $createdDate = 0.0;
	var $idSize = 0.0;
	var $is_digitID = 0.0;
	var $introSize = 0.0;
	var $signatureSize = 0.0;
	var $feedMonthCount = 0.0;
	var $feed6MonthCount = 0.0;
	var $feedYearCount = 0.0;
	var $feedCount = 0.0;
	var $contacts = 0.0;
	var $friends = 0.0;
	var $group = 0.0;
	var $topicInGroup = 0.0;
	var $activityJoin = 0.0;
	var $activityOwn = 0.0;
	var $board = 0.0;
	var $city = 0.0;
	var $cityInterest = 0.0;
	var $list = 0.0;
	var $listInterest = 0.0;
	var $travel = 0.0;
	var $travelInterest = 0.0;
	var $travelWord = 0.0;
	var $site = 0.0;
	var $album = 0.0;
	var $albumInterest = 0.0;
	var $photo = 0.0;
	var $photoComment = 0.0;
	var $photoAverageComment = 0.0;
	var $note = 0.0;
	var $noteComment = 0.0;
	var $music = 0.0;
	var $musicInterest = 0.0;
	var $musicing = 0.0;
	var $movie = 0.0;
	var $movieInterest = 0.0;
	var $movieing = 0.0;
	var $book = 0.0;
	var $bookInterest = 0.0;
	var $booking = 0.0;
	var $bookMonth = 0.0;
	var $bookYear = 0.0;
	var $movieMonth = 0.0;
	var $movieYear = 0.0;
	var $musicMonth = 0.0;
	var $musicYear = 0.0;
	var $review = 0.0;
	var $reviewComment = 0.0;
	var $reviewAverageComment = 0.0;
	var $like = 0.0;
	var $likeNote = 0.0;
	var $likeAlbum = 0.0;
	var $likePhoto = 0.0;
	var $likeOnline = 0.0;
	var $likeTopic = 0.0;
	var $likeStory = 0.0;
	var $thing = 0.0;
	var $thingLike = 0.0;
	var $story = 0.0;
	var $drama = 0.0;
	var $subject = 0.0;
	var $appWish = 0.0;
	var $appCollect = 0.0;
	var $expert = 0.0;
	var $magazine = 0.0;
	
	var $ID = "";
	var $type = 0;  // 2 - good guy, 0 - bad guy;
	
	function Output()
	{
		echo $this->ID." ".
			 $this->createdDate." ".
		     $this->idSize." ".
			 $this->is_digitID." ".
			 $this->introSize." ".
			 $this->signatureSize." ".
			 $this->feedCount." ".
			 $this->contacts." ".
			 $this->friends." ".
			 $this->group." ".
			 $this->city." ".
			 $this->cityInterest." ".
			 $this->list." ".
			 $this->listInterest." ".
			 $this->album." ".
			 $this->albumInterest." ".
			 $this->music." ".
			 $this->musicInterest." ".
			 $this->musicing." ".
			 $this->movie." ".
			 $this->movieInterest." ".
			 $this->movieing." ".
			 $this->book." ".
			 $this->bookInterest." ".
			 $this->booking." ".
			 $this->thing." ".
			 $this->thingLike." ".
			 $this->story." ".
			 $this->drama." ".
			 $this->expert." ".
			 $this->magazine;
	}
}
?>

<?php
//Done(createdDate): 加入Douban时间(按天数计算): http://api.douban.com/shuo/v2/users/HinsPan?apikey=04d5ca9ec61514ed0e815fdc523f3ec7
//Done(idSize): ID字数: http://api.douban.com/shuo/v2/users/HinsPan?apikey=04d5ca9ec61514ed0e815fdc523f3ec7
//Done(is_digitID): ID是否是数字串:http://api.douban.com/shuo/v2/users/HinsPan?apikey=04d5ca9ec61514ed0e815fdc523f3ec7
//Done(introSize): 个人介绍字数: http://api.douban.com/shuo/v2/users/HinsPan?apikey=04d5ca9ec61514ed0e815fdc523f3ec7
//Done(signatureSize): 签名档字数: http://api.douban.com/people/yaya?apikey=04d5ca9ec61514ed0e815fdc523f3ec7
//最近一个月的广播数: http://www.douban.com/people/yaya/statuses?p=21
//最近六个月的广播数: http://www.douban.com/people/yaya/statuses?p=21
//最近一年的广播数: http://www.douban.com/people/yaya/statuses?p=21
//Done(feedCount): 所有广播数: http://api.douban.com/shuo/v2/users/yaya?apikey=04d5ca9ec61514ed0e815fdc523f3ec7
//Done(contacts): 关注数 http://www.douban.com/people/HinsPan/
//Done(friends): 被关注数: http://www.douban.com/people/HinsPan/
//Done(group): 关注的小组数: http://www.douban.com/people/HinsPan/
//小组中推荐话题数量: http://www.douban.com/group/people/yaya/
//参加的活动数: http://www.douban.com/people/HinsPan/online?g=j
//发起的活动数: http://www.douban.com/people/HinsPan/online?g=o
//留言板留言数量: http://www.douban.com/people/yaya/board?start=260
//Done(city): 参加的同城活动: http://www.douban.com/people/HinsPan/
//Done(cityInterest): 感兴趣的同城活动: http://www.douban.com/people/HinsPan/
//Done(list): 创建的豆列(东西): http://www.douban.com/people/HinsPan/
//Done(listInterest): 关注的豆列(东西): http://www.douban.com/people/HinsPan/
//去过的地方数量: http://www.douban.com/trip/people/yaya/
//想去的地方数量: http://www.douban.com/trip/people/yaya/
//去过的文字数量: http://www.douban.com/trip/people/yaya/
//关注的小站数量: http://www.douban.com/people/36298457/contact_site
//Done(album): 创建的相册数量: http://www.douban.com/people/HinsPan/photos
//Done(albumInterest): 关注的相册数量：http://www.douban.com/people/yaya/
//相册中的总相片数: http://www.douban.com/people/HinsPan/photos
//相册的总评论数: http://www.douban.com/people/HinsPan/photos
//每个相册的平均评论数: http://www.douban.com/people/HinsPan/photos
//日记数量: http://api.douban.com/people/yaya/notes?apikey=04d5ca9ec61514ed0e815fdc523f3ec7
//日记评论数量: http://api.douban.com/people/yaya/notes?apikey=04d5ca9ec61514ed0e815fdc523f3ec7
//Done(music): 听过的专辑数量: http://www.douban.com/people/yaya/
//Done(musicInterest): 想听的专辑数量: http://www.douban.com/people/yaya/
//Done(musicing): 在听的专辑数量：http://www.douban.com/people/yaya/
//Done(movie): 想看的电影数量: http://www.douban.com/people/yaya/
//Done(movieInterest): 看过的电影数量: http://www.douban.com/people/yaya/
//Done(movieing): 在看的电影数量: http://www.douban.com/people/yaya/
//Done(book): 读过的书的数量: http://www.douban.com/people/yaya/
//Done(bookInterest): 在读的书的数量: http://www.douban.com/people/yaya/
//Done(booking): 想读的书的数量: http://www.douban.com/people/yaya/
//平均一年读书数量: http://www.douban.com/people/yaya/statuses?p=21
//平均一月读书数量: http://www.douban.com/people/yaya/statuses?p=21
//平均一年看电影数量: http://www.douban.com/people/yaya/statuses?p=21
//平均一月看电影数量: http://www.douban.com/people/yaya/statuses?p=21
//平均一年听音乐数量: http://www.douban.com/people/yaya/statuses?p=21
//平均一月听音乐数量: http://www.douban.com/people/yaya/statuses?p=21
//评论数: http://api.douban.com/people/HinsPan/reviews?apikey=04d5ca9ec61514ed0e815fdc523f3ec7
//评论被评论数: http://www.douban.com/people/yaya/reviews
//平均评论被评论数: http://www.douban.com/people/yaya/reviews
//喜欢总数: http://www.douban.com/people/HinsPan/likes/?start=30
//喜欢的日记数量: http://www.douban.com/people/36298457/likes/note/?start=15
//喜欢的相册数量: http://www.douban.com/people/HinsPan/likes/photo_album/?start=30
//喜欢的照片数量: http://www.douban.com/people/HinsPan/likes/photo/?start=30
//喜欢的线上活动数量: http://www.douban.com/people/HinsPan/likes/online/?start=30
//喜欢的小组话题数量: http://www.douban.com/people/HinsPan/likes/topic/?start=15
//喜欢的故事数量: http://www.douban.com/people/HinsPan/likes/experience/?start=1
//Done(thing): 做过的事情数量: http://www.douban.com/people/HinsPan/
//Done(thingLike): 想做的事情数量: http://www.douban.com/people/HinsPan/
//Done(story): 故事数量: http://www.douban.com/people/HinsPan/
//Done(drama): 看过的舞台剧数量: http://www.douban.com/people/yaya/
//添加的豆瓣条目数: http://www.douban.com/people/yaya/subjects?start=30
//想要用的移动应用数量: http://www.douban.com/people/yaya/apps?action=wish&start=30
//用过的移动应用数量: http://www.douban.com/people/yaya/apps?action=collect&start=1
//Done(expert): 擅长事情的数量: http://www.douban.com/people/36298457/
//Done(magazine): 看过的杂志数量: http://www.douban.com/people/HinsPan/
?>