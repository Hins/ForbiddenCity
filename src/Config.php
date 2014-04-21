<?php

define("DATADIRECTORY", "../data/");

define("HOMEPAGE", "http://www.douban.com/people/");
define("OUTPUTFOLDER", "../data/");
define("FILEPOSTFIX", ".html");
define("CRAWLCOMMAND", "wget");
define("USERAGENT1", " --user-agent=\"Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 (.NET CLR 3.5.30729)\"");
define("USERAGENT2", " --user-agent=\"Mozilla/5.0 (Linux; U; Android 4.0.3; zh-cn; M032 Build/IML74K) AppleWebKit/533.1 (KHTML, like Gecko)Version/4.0 MQQBrowser/4.1 Mobile Safari/533.1\"");
define("USERAGENT3", " --user-agent=\"Mozilla/5.0 (Windows; U; Windows NT 5.2) AppleWebKit/525.13 (KHTML,like Gecko) Chrome/0.2.149.27 Safari/525.13\"");
define("COMMANDOPTION", "-O");
define("SPACESEPERATOR", " ");

define("USERAPI", "http://api.douban.com/shuo/v2/users/");
define("USERAPIFilePOSTFIX", ".userapi");
define("APIKEY", "?apikey=04d5ca9ec61514ed0e815fdc523f3ec7");
define("APIKEY2", "&apikey=04d5ca9ec61514ed0e815fdc523f3ec7");

define("USERLISTFILEPOSTFIX", ".userlist");

define("CREATEDATEPREFIX", "<br/> ");
define("CREATEDATEPOSTFIX", "加入</div>");

define("IDPREFIX", "<title>");
define("IDPOSTFIX", "</title>");

define("SIGNATUREPREFIX", "<span id=\"display\" class=\"pl\">(");
define("SIGNATUREPOSTFIX", ")</span>");

define("CONTACTPREFIX", "contacts\" target=\"_self\">成员");
define("CONTACTPOSTFIX", "</a>");

define("FRIENDPREFIX", "被");
define("FRIENDPOSTFIX", "人关注");

define("GROUPPREFIX", "常去的小组(");
define("GROUPPOSTFIX", ")");

define("CITYPREFIX", "events/attend\" target=\"_blank\">");
define("CITYPOSTFIX", "个参加");

define("CITYINTERESTPREFIX", "events/wish\" target=\"_blank\">");
define("CITYINTERESTPOSTFIX", "个感兴趣");

define("LISTPREFIX", "doulists\" target=\"_blank\">豆列");
define("LISTPOSTFIX", "<");

define("LISTINTERESTPREFIX", "shows\" target=\"_blank\">喜欢");
define("LISTINTERESTPOSTFIX", "<");

define("ALBUMPREFIX", "photos\" target=\"_self\">创建");
define("ALBUMPOSTFIX", "<");

define("ALBUMINTERESTPREFIX", "album\collect\" target=\"_self\">关注");
define("ALBUMINTERESTPOSTFIX", "<");

define("MUSICPREFIX1", "http://music.douban.com/people/");
define("MUSICPREFIX2", "/collect\" target=\"_blank\">");
define("MUSICPOSTFIX", "张听过");

define("MUSICINTERESTPREFIX1", "http://music.douban.com/people/");
define("MUSICINTERESTPREFIX2", "/wish\" target=\"_blank\">");
define("MUSICINTERESTPOSTFIX", "张想听");

define("MUSICINGPREFIX1", "http://music.douban.com/people/");
define("MUSICINGPREFIX2", "/do\" target=\"_blank\">");
define("MUSICINGPOSTFIX", "张在听");

define("MOVIEPREFIX1", "http://movie.douban.com/people/");
define("MOVIEPREFIX2", "/collect\" target=\"_blank\">");
define("MOVIEPOSTFIX", "部看过");

define("MOVIEINTERESTPREFIX1", "http://movie.douban.com/people/");
define("MOVIEINTERESTPREFIX2", "/wish\" target=\"_blank\">");
define("MOVIEINTERESTPOSTFIX", "部想看");

define("MOVIEINGPREFIX1", "http://movie.douban.com/people/");
define("MOVIEINGPREFIX2", "/do\" target=\"_blank\">");
define("MOVIEINGPOSTFIX", "部在看");

define("BOOKPREFIX1", "http://book.douban.com/people/");
define("BOOKPREFIX2", "/collect\" target=\"_blank\">");
define("BOOKPOSTFIX", "本读过");

define("BOOKINTERESTPREFIX1", "http://book.douban.com/people/");
define("BOOKINTERESTPREFIX2", "/wish\" target=\"_blank\">");
define("BOOKINTERESTPOSTFIX", "本想读");

define("BOOKINGPREFIX1", "http://book.douban.com/people/");
define("BOOKINGPREFIX2", "/do\" target=\"_blank\">");
define("BOOKINGPOSTFIX", "本在读");

define("THINGPREFIX", "done\" target=\"_self\">");
define("THINGPOSTFIX", "做过");

define("THINGLIKEPREFIX1", "http://www.douban.com/thing/people/");
define("THINGLIKEPREFIX2", "/wish\" target=\"_self\">");
define("THINGLIKEPOSTFIX", "想做");

define("STORYPREFIX", "mine\" target=\"_self\">");
define("STORYPOSTFIX", "故事");

define("EXPERTPREFIX", "expert\" target=\"_self\">");
define("EXPERTPOSTFIX", "擅长");

define("DRAMAPREFIX", "drama/collect\" target=\"_blank\">");
define("DRAMAPOSTFIX", "部看过");

define("MAGAZINEPREFIX", "看的杂志(");
define("MAGAZINEPOSTFIX", ")");

define("FEEDFILEPOSTFIX", ".feed");
define("FEEDCOMMAND", "/statuses?p=");

?>