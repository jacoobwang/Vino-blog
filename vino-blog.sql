-- MySQL dump 10.13  Distrib 5.7.11, for osx10.10 (x86_64)
--
-- Host: localhost    Database: vino_blog
-- ------------------------------------------------------
-- Server version	5.7.11

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Current Database: `vino_blog`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `vino_blog` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `vino_blog`;

--
-- Table structure for table `vino_blog_cate`
--

DROP TABLE IF EXISTS `vino_blog_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vino_blog_cate` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY `name` (`name`),
  KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vino_blog_cate`
--

LOCK TABLES `vino_blog_cate` WRITE;
/*!40000 ALTER TABLE `vino_blog_cate` DISABLE KEYS */;
INSERT INTO `vino_blog_cate` VALUES (7,'生活感悟','life',-1);
/*!40000 ALTER TABLE `vino_blog_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vino_blog_label`
--

DROP TABLE IF EXISTS `vino_blog_label`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vino_blog_label` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `label` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=85 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vino_blog_label`
--

LOCK TABLES `vino_blog_label` WRITE;
/*!40000 ALTER TABLE `vino_blog_label` DISABLE KEYS */;
INSERT INTO `vino_blog_label` VALUES (1,1,'歌曲','label'),(2,1,'7','category'),(3,2,'风光','label'),(4,2,'7','category');
/*!40000 ALTER TABLE `vino_blog_label` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vino_blog_posts`
--

DROP TABLE IF EXISTS `vino_blog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vino_blog_posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` varchar(1000) NOT NULL DEFAULT '',
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_md` longtext,
  `post_thumb` varchar(2000) NOT NULL DEFAULT '',
  `post_desc` varchar(2000) NOT NULL DEFAULT '',
  `post_origin` varchar(2000) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `post_author` (`post_author`),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vino_blog_posts`
--

LOCK TABLES `vino_blog_posts` WRITE;
/*!40000 ALTER TABLE `vino_blog_posts` DISABLE KEYS */;
INSERT INTO `vino_blog_posts` VALUES (1,1,'2017-03-24 05:00:55','<h1 id=\"h1-u5439u554Au5439u554Au5C0Fu6728u9A6Cu554A\"><a name=\"吹啊吹啊小木马啊\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>吹啊吹啊小木马啊</h1><p>我得骄傲放纵<br>吹啊吹啊<br>无所谓啊<br>你看我在勇敢的微笑<br>你看我在回首啊</p>\n<h2 id=\"h2--\"><a name=\"怎么大风越狠，我心越荡\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>怎么大风越狠，我心越荡</h2><p>看第二季时，对这首歌很喜欢，觉得很特别，一开始就抓耳，而且耐听。四组导师全部转身，网上的评价也都满好。于是拿来尝试分析下，不知道撸了多少遍，但依然是很耐听。</p>\n<p>期待下后面蔡健雅会怎么打磨。把对这首歌理出的特别的点，先列在前面。详细评析放在后面。</p>\n<p>1.整体方面，在标准的流行歌结构下，起承转合做的到位。同时在旋律、节奏律动、词、唱上都做出了特色。开头即抓人，高潮又能量满满，很具感染力。</p>\n<p>2.旋律上一个很大的特色，是较多六度、八度音程的跳进。整首曲子会显得跌宕起伏，不平，更多情绪和意外。</p>\n<p>3.音域较宽，有两个八度，G3到G5。主歌音域基本在G3到G4内，而副歌整提了一个八度，在G4到G5，对比强烈。</p>\n<p>4.副歌部分，节奏短促、密集，且多切分节奏，歌词多，很有律动感。仅从官能上，就让耳朵“爽”。+与主歌较平稳的进行对比强烈。</p>\n<p>5.词不刻意追求押韵，形式上不古板，显得随性、自然，符合这歌的立意。同时也通畅。</p>\n<p>6.词意积极向上，给自己励志，但绝不给别人灌鸡汤。区别于泛滥的爱来爱去、苦情、鸡汤歌之类的。</p>\n<p>7.词曲结合的比较好。</p>\n<p>8.音色、唱腔咬字有特色，有的地方觉得有些像田震。有的音不知道是因为颤音？还是什么，音高比较微妙，还有尾音的处理，所以有个别音去摸音高不大有把握，比谱面上要生动有韵味的多。野味十足！这方面也有人多给讲讲就好了。</p>\n<p>9.呈现出来的词曲人合一。这妹子看起来随性、自然，也有点古灵精怪，鞠躬讲话什么的还挺萌的。这歌就是写她自己，当前的年龄，当前的阶段，面对着一些不确定和外力，时有摇摆与畏缩的状态，但是又坚定，抱有勇气和力量想去面对未来、追求自由吧。</p>\n','野子-致我最爱的歌','publish','0000-00-00 00:00:00','post','#吹啊吹啊小木马啊\n我得骄傲放纵\n吹啊吹啊\n无所谓啊\n你看我在勇敢的微笑\n你看我在回首啊\n\n##怎么大风越狠，我心越荡\n\n\n看第二季时，对这首歌很喜欢，觉得很特别，一开始就抓耳，而且耐听。四组导师全部转身，网上的评价也都满好。于是拿来尝试分析下，不知道撸了多少遍，但依然是很耐听。\n\n期待下后面蔡健雅会怎么打磨。把对这首歌理出的特别的点，先列在前面。详细评析放在后面。\n\n1.整体方面，在标准的流行歌结构下，起承转合做的到位。同时在旋律、节奏律动、词、唱上都做出了特色。开头即抓人，高潮又能量满满，很具感染力。\n\n2.旋律上一个很大的特色，是较多六度、八度音程的跳进。整首曲子会显得跌宕起伏，不平，更多情绪和意外。\n\n3.音域较宽，有两个八度，G3到G5。主歌音域基本在G3到G4内，而副歌整提了一个八度，在G4到G5，对比强烈。\n\n4.副歌部分，节奏短促、密集，且多切分节奏，歌词多，很有律动感。仅从官能上，就让耳朵“爽”。+与主歌较平稳的进行对比强烈。\n\n5.词不刻意追求押韵，形式上不古板，显得随性、自然，符合这歌的立意。同时也通畅。\n\n6.词意积极向上，给自己励志，但绝不给别人灌鸡汤。区别于泛滥的爱来爱去、苦情、鸡汤歌之类的。\n\n7.词曲结合的比较好。\n\n8.音色、唱腔咬字有特色，有的地方觉得有些像田震。有的音不知道是因为颤音？还是什么，音高比较微妙，还有尾音的处理，所以有个别音去摸音高不大有把握，比谱面上要生动有韵味的多。野味十足！这方面也有人多给讲讲就好了。\n\n9.呈现出来的词曲人合一。这妹子看起来随性、自然，也有点古灵精怪，鞠躬讲话什么的还挺萌的。这歌就是写她自己，当前的年龄，当前的阶段，面对着一些不确定和外力，时有摇摆与畏缩的状态，但是又坚定，抱有勇气和力量想去面对未来、追求自由吧。\n','http://i2.hdslb.com/video/6c/6cad264d30004f0e46356be2533b9618.jpg','吹啊吹啊小木马啊我得骄傲放纵吹啊吹啊无所谓啊你看我在勇敢的微笑你看我在回首啊怎么大风越狠，我心越荡看第二季时，对这首歌很喜欢，觉得很特别，一开始就抓耳，而且耐听。四组导师全部转身，网上的评价也都满好。','http://i2.hdslb.com/video/6c/6cad264d30004f0e46356be2533b9618.jpg'),(2,1,'2017-03-24 07:58:24','<p>二月如奔驰的马驹，一晃而过。三月带着一股兴盛的动态，强势入住。三月是有力量的，它不容忽视。</p>\n<p>春天在三月里已经丰富饱满，那些生长出来的绿意，在一夜间，就多了许多。</p>\n<p>“阳春百日风在香”，三月的微风带着俏皮吹拂在脸颊，温和的如少女的发丝，飘动着春天里特有的气息。走在三月的风中，有股特别渴望奔跑的想法。我们都经历过逆风飞翔的困难，我们也经过过迎风奔跑的快意。你在风中的样子，最美。</p>\n<p>三月的雨是带着丝线的细，穿透心底的清幽，滋润着大地。小草，野花，树叶，绿枝，还有撑着雨伞的的人。在三月的雨中，是适合思念一个人的。“人间三月雨和尘”，三月的雨带着清凉缠绵，一来就会润了心田。一场雨后，更多春生。</p>\n<p>三月的花，是迷人的。在花海里，抬头间，鼻尖就会触碰着花朵的温柔。颔首处，扑鼻而来的香氛，流动在身边。忍不住的想去，与花共眠。写不尽的花意，流水也在等待着花的垂爱。花期到了，满树的花蕊，把春天装扮的格外美丽。</p>\n<p>在三月里，遇到的人，也都是那么美好的。褪去了厚重的棉衣，每个人都是友好的。每一次相逢，都值得尊重。一定会有人，对你无条件的好，因为这些人懂得你的好。</p>\n<p>更有知交，在你遇到困难的时候，如三月里的阳光，给予你无限的勇气和战胜困难的力量。不是每一段路程都布满鲜花，泥泞处，拉你一把的人，是尊贵的。明媚的三月，让一切都不是问题。</p>\n<p>“时在中春，阳和方起。”到了三月，才真正的暖和起来，可以着单薄的春装。草木也正在翻动绿意，一眨眼，就看到了新芽。</p>\n<p>三月，是个美丽的时节。草长莺飞时，值得去奋斗。</p>\n','阳春三月','publish','0000-00-00 00:00:00','post','二月如奔驰的马驹，一晃而过。三月带着一股兴盛的动态，强势入住。三月是有力量的，它不容忽视。\n\n春天在三月里已经丰富饱满，那些生长出来的绿意，在一夜间，就多了许多。\n\n“阳春百日风在香”，三月的微风带着俏皮吹拂在脸颊，温和的如少女的发丝，飘动着春天里特有的气息。走在三月的风中，有股特别渴望奔跑的想法。我们都经历过逆风飞翔的困难，我们也经过过迎风奔跑的快意。你在风中的样子，最美。\n\n三月的雨是带着丝线的细，穿透心底的清幽，滋润着大地。小草，野花，树叶，绿枝，还有撑着雨伞的的人。在三月的雨中，是适合思念一个人的。“人间三月雨和尘”，三月的雨带着清凉缠绵，一来就会润了心田。一场雨后，更多春生。\n\n三月的花，是迷人的。在花海里，抬头间，鼻尖就会触碰着花朵的温柔。颔首处，扑鼻而来的香氛，流动在身边。忍不住的想去，与花共眠。写不尽的花意，流水也在等待着花的垂爱。花期到了，满树的花蕊，把春天装扮的格外美丽。\n\n在三月里，遇到的人，也都是那么美好的。褪去了厚重的棉衣，每个人都是友好的。每一次相逢，都值得尊重。一定会有人，对你无条件的好，因为这些人懂得你的好。\n\n更有知交，在你遇到困难的时候，如三月里的阳光，给予你无限的勇气和战胜困难的力量。不是每一段路程都布满鲜花，泥泞处，拉你一把的人，是尊贵的。明媚的三月，让一切都不是问题。\n\n“时在中春，阳和方起。”到了三月，才真正的暖和起来，可以着单薄的春装。草木也正在翻动绿意，一眨眼，就看到了新芽。\n\n三月，是个美丽的时节。草长莺飞时，值得去奋斗。','http://img.hb.aicdn.com/05f503e79e197232ac0675f4639cd7459ab4b327bdf37-3HoX31_fw658','二月如奔驰的马驹，一晃而过。三月带着一股兴盛的动态，强势入住。三月是有力量的，它不容忽视。春天在三月里已经丰富饱满，那些生长出来的绿意，在一夜间，就多了许多。“阳春百日风在香”，三月的微风带着俏皮吹拂','http://img.hb.aicdn.com/05f503e79e197232ac0675f4639cd7459ab4b327bdf37-3HoX31_fw658');
/*!40000 ALTER TABLE `vino_blog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vino_blog_setting`
--

DROP TABLE IF EXISTS `vino_blog_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vino_blog_setting` (
  `id` smallint(2) unsigned NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) NOT NULL DEFAULT '',
  `site_desc` varchar(255) NOT NULL DEFAULT '',
  `site_email` varchar(255) NOT NULL DEFAULT '',
  `site_logo` varchar(255) NOT NULL DEFAULT '',
  `site_thumbnail` varchar(255) NOT NULL DEFAULT '',
  `banner1` varchar(255) NOT NULL DEFAULT '',
  `banner2` varchar(255) NOT NULL DEFAULT '',
  `banner3` varchar(255) NOT NULL DEFAULT '',
  `banner4` varchar(255) NOT NULL DEFAULT '',
  `register_open` smallint(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vino_blog_setting`
--

LOCK TABLES `vino_blog_setting` WRITE;
/*!40000 ALTER TABLE `vino_blog_setting` DISABLE KEYS */;
INSERT INTO `vino_blog_setting` VALUES (1,'vino_blog是一款支持markdown编辑器的博客管理系统','vino_blog能帮助你快速创建一个博客网站，它完美支持了markdown编辑器，在使用体验上达到了一个傻瓜式的用户体验，对于作者来说无需关注代码，只需要专心写字就好','531532957@qq.com','https://jacoobwang.github.io/vino/logo.png','https://placeholdit.imgix.net/~text?txtsize=33&txt=400%C3%97250&w=400&h=250','http://localhost/vino_blog/post/4','http://localhost:8080/post/6','','',1);
/*!40000 ALTER TABLE `vino_blog_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vino_blog_users`
--

DROP TABLE IF EXISTS `vino_blog_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vino_blog_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(255) NOT NULL DEFAULT '',
  `user_pass` varchar(255) NOT NULL DEFAULT '',
  `user_nickname` varchar(255) NOT NULL DEFAULT '',
  `user_email` varchar(255) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_avatar` varchar(255) DEFAULT '',
  `user_profile` varchar(2000) NOT NULL DEFAULT '',
  `user_power` varchar(20) NOT NULL DEFAULT 'guest',
  `user_github` varchar(255) NOT NULL DEFAULT '',
  `user_weibo` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `user_login` (`user_login`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vino_blog_users`
--

LOCK TABLES `vino_blog_users` WRITE;
/*!40000 ALTER TABLE `vino_blog_users` DISABLE KEYS */;
INSERT INTO `vino_blog_users` VALUES (1,'admin','e10adc3949ba59abbe56e057f20f883e','Jacoob','531532957@qq.com','2017-01-18 18:07:44','https://avatars2.githubusercontent.com/u/11434315?v=3&s=460','我是Jacoob，Vino及Vino-blog的作者，欢迎您使用Vino-blog来创建自己的博客，若有什么疑问，欢迎我联系。\n\n我不想成为一个庸俗的人。十年百年后，当我们死去，质疑我们的人同样死去，后人看到的是裹足不前、原地打转的你，还是一直奔跑、走到远方的我？','admin','https://github.com/jacoobwang','http://weibo.com/loadphp');
/*!40000 ALTER TABLE `vino_blog_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-04-01 17:14:53
