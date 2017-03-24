-- MySQL dump 10.13  Distrib 5.6.12, for Win64 (x86_64)
--
-- Host: localhost    Database: Mblog
-- ------------------------------------------------------
-- Server version	5.6.12-log

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
-- Table structure for table `mblog_cate`
--

DROP TABLE IF EXISTS `mblog_cate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mblog_cate` (
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
-- Dumping data for table `mblog_cate`
--

LOCK TABLES `mblog_cate` WRITE;
/*!40000 ALTER TABLE `mblog_cate` DISABLE KEYS */;
INSERT INTO `mblog_cate` VALUES (7,'生活感悟','life',-1),(8,'影像世界','camera',-1),(9,'程序江湖','coder',-1);
/*!40000 ALTER TABLE `mblog_cate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mblog_label`
--

DROP TABLE IF EXISTS `mblog_label`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mblog_label` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `label` varchar(255) NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mblog_label`
--

LOCK TABLES `mblog_label` WRITE;
/*!40000 ALTER TABLE `mblog_label` DISABLE KEYS */;
INSERT INTO `mblog_label` VALUES (28,4,'歌曲','label'),(29,4,'7','category'),(34,6,'mysql','label'),(35,6,'9','category'),(36,7,'相机','label'),(37,7,'7','category'),(38,7,'8','category'),(44,10,'9','category'),(49,8,'opencart','label'),(50,8,'9','category'),(54,9,'9','category'),(55,10,'','label'),(57,5,'monolog','label'),(58,5,'9','category');
/*!40000 ALTER TABLE `mblog_label` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mblog_posts`
--

DROP TABLE IF EXISTS `mblog_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mblog_posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT '0',
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_md` text NOT NULL,
  `post_thumb` varchar(255) NOT NULL DEFAULT '',
  `post_desc` varchar(255) NOT NULL DEFAULT '',
  `post_origin` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `post_author` (`post_author`),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mblog_posts`
--

LOCK TABLES `mblog_posts` WRITE;
/*!40000 ALTER TABLE `mblog_posts` DISABLE KEYS */;
INSERT INTO `mblog_posts` VALUES (4,1,'2017-01-24 09:56:37','<h1 id=\"h1-u5439u554Au5439u554Au5C0Fu6728u9A6Cu554A\"><a name=\"吹啊吹啊小木马啊\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>吹啊吹啊小木马啊</h1><p>我得骄傲放纵<br>吹啊吹啊<br>无所谓啊<br>你看我在勇敢的微笑<br>你看我在回首啊</p>\n<h2 id=\"h2--\"><a name=\"怎么大风越狠，我心越荡\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>怎么大风越狠，我心越荡</h2><p>看第二季时，对这首歌很喜欢，觉得很特别，一开始就抓耳，而且耐听。四组导师全部转身，网上的评价也都满好。于是拿来尝试分析下，不知道撸了多少遍，但依然是很耐听。</p>\n<p>期待下后面蔡健雅会怎么打磨。把对这首歌理出的特别的点，先列在前面。详细评析放在后面。</p>\n<p>1.+整体方面，在标准的流行歌结构下，起承转合做的到位。同时在旋律、节奏律动、词、唱上都做出了特色。开头即抓人，高潮又能量满满，很具感染力。</p>\n<p>2.+旋律上一个很大的特色，是较多六度、八度音程的跳进。整首曲子会显得跌宕起伏，不平，更多情绪和意外。</p>\n<p>3.+音域较宽，有两个八度，G3到G5。主歌音域基本在G3到G4内，而副歌整提了一个八度，在G4到G5，对比强烈。</p>\n<p>4.+副歌部分，节奏短促、密集，且多切分节奏，歌词多，很有律动感。仅从官能上，就让耳朵“爽”。+与主歌较平稳的进行对比强烈。</p>\n<p>5.+词不刻意追求押韵，形式上不古板，显得随性、自然，符合这歌的立意。同时也通畅。</p>\n<p>6.+词意积极向上，给自己励志，但绝不给别人灌鸡汤。区别于泛滥的爱来爱去、苦情、鸡汤歌之类的。</p>\n<p>7.+词曲结合的比较好。</p>\n<p>8.+音色、唱腔咬字有特色，有的地方觉得有些像田震。有的音不知道是因为颤音？还是什么，音高比较微妙，还有尾音的处理，所以有个别音去摸音高不大有把握，比谱面上要生动有韵味的多。野味十足！这方面也有人多给讲讲就好了。</p>\n<p>9.+呈现出来的词曲人合一。这妹子看起来随性、自然，也有点古灵精怪，鞠躬讲话什么的还挺萌的。这歌就是写她自己，当前的年龄，当前的阶段，面对着一些不确定和外力，时有摇摆与畏缩的状态，但是又坚定，抱有勇气和力量想去面对未来、追求自由吧。</p>\n','野子-致我最爱的歌','publish','0000-00-00 00:00:00','post','#吹啊吹啊小木马啊\n我得骄傲放纵\n吹啊吹啊\n无所谓啊\n你看我在勇敢的微笑\n你看我在回首啊\n\n##怎么大风越狠，我心越荡\n\n\n看第二季时，对这首歌很喜欢，觉得很特别，一开始就抓耳，而且耐听。四组导师全部转身，网上的评价也都满好。于是拿来尝试分析下，不知道撸了多少遍，但依然是很耐听。\n\n期待下后面蔡健雅会怎么打磨。把对这首歌理出的特别的点，先列在前面。详细评析放在后面。\n\n1.+整体方面，在标准的流行歌结构下，起承转合做的到位。同时在旋律、节奏律动、词、唱上都做出了特色。开头即抓人，高潮又能量满满，很具感染力。\n\n2.+旋律上一个很大的特色，是较多六度、八度音程的跳进。整首曲子会显得跌宕起伏，不平，更多情绪和意外。\n\n3.+音域较宽，有两个八度，G3到G5。主歌音域基本在G3到G4内，而副歌整提了一个八度，在G4到G5，对比强烈。\n\n4.+副歌部分，节奏短促、密集，且多切分节奏，歌词多，很有律动感。仅从官能上，就让耳朵“爽”。+与主歌较平稳的进行对比强烈。\n\n5.+词不刻意追求押韵，形式上不古板，显得随性、自然，符合这歌的立意。同时也通畅。\n\n6.+词意积极向上，给自己励志，但绝不给别人灌鸡汤。区别于泛滥的爱来爱去、苦情、鸡汤歌之类的。\n\n7.+词曲结合的比较好。\n\n8.+音色、唱腔咬字有特色，有的地方觉得有些像田震。有的音不知道是因为颤音？还是什么，音高比较微妙，还有尾音的处理，所以有个别音去摸音高不大有把握，比谱面上要生动有韵味的多。野味十足！这方面也有人多给讲讲就好了。\n\n9.+呈现出来的词曲人合一。这妹子看起来随性、自然，也有点古灵精怪，鞠躬讲话什么的还挺萌的。这歌就是写她自己，当前的年龄，当前的阶段，面对着一些不确定和外力，时有摇摆与畏缩的状态，但是又坚定，抱有勇气和力量想去面对未来、追求自由吧。\n','http://localhost/blog2/attachment/thumbnail/376544167465860372.jpg','吹啊吹啊小木马啊我得骄傲放纵吹啊吹啊无所谓啊你看我在勇敢的微笑你看我在回首啊怎么大风越狠，我心越荡看第二季时，对这首歌很喜欢，觉得很特别，一开始就抓耳，而且耐听。四组导师全部转身，网上的评价也都满好。','http://localhost/blog2/attachment/376544167465860372.jpg'),(5,1,'2017-02-09 05:32:25','<p>Monolog内置很多很实用的handler，它们几乎囊括了各种的使用场景，这里介绍一些使用的：</p>\n<pre><code class=\"lang-html\">StreamHandler：把记录写进PHP流，主要用于日志文件。\n\nSyslogHandler：把记录写进syslog。\n\nErrorLogHandler：把记录写进PHP错误日志。\n\nNativeMailerHandler：使用PHP的mail()函数发送日志记录。\n\nSocketHandler：通过socket写日志。\n\nRedisHandler：把记录写进Redis。\n\nMongoDBHandler：把记录写进Mongo。\n\nElasticSearchHandler：把记录写到ElasticSearch服务。\n</code></pre>\n<p>前面说过，Processor可以为日志记录添加额外的信息，Monolog也提供了一些很实用的processor：</p>\n<pre><code class=\"lang-html\">IntrospectionProcessor：增加当前脚本的文件名和类名等信息。\n\nWebProcessor：增加当前请求的URI、请求方法和访问IP等信息。\n\nMemoryUsageProcessor：增加当前内存使用情况信息。\n\nMemoryPeakUsageProcessor：增加内存使用高峰时的信息。\n</code></pre>\n<p>代码参考</p>\n<pre><code class=\"lang-php\">use Monolog\\Logger;\nuse Monolog\\Handler\\StreamHandler;\nuse Monolog\\Handler\\FirePHPHandler;\n\n// Create the logger\n$logger = new Logger(&#39;my_logger&#39;);\n\n// Now add some handlers\n$logger-&gt;pushHandler(new StreamHandler(__DIR__.&#39;/my_app.log&#39;, Logger::DEBUG));\n\n// Now add some processors\n$logger-&gt;pushProcessor(new WebProcessor());\n\n// You can now use your logger\n$logger-&gt;info(&#39;index page ok &#39;);\n</code></pre>\n<p>输出结果</p>\n<pre><code class=\"lang-json\">[2017-01-02 14:43:53] vino_log.INFO: index page ok [] {&quot;url&quot;:&quot;/vino/&quot;,&quot;ip&quot;:&quot;127.0.0.1&quot;,&quot;http_method&quot;:&quot;GET&quot;,&quot;server&quot;:&quot;localhost&quot;,&quot;referrer&quot;:&quot;NULL&quot;}\n</code></pre>\n','monolog 相关知识','publish','0000-00-00 00:00:00','post','Monolog内置很多很实用的handler，它们几乎囊括了各种的使用场景，这里介绍一些使用的：\n\n```html\nStreamHandler：把记录写进PHP流，主要用于日志文件。\n\nSyslogHandler：把记录写进syslog。\n\nErrorLogHandler：把记录写进PHP错误日志。\n\nNativeMailerHandler：使用PHP的mail()函数发送日志记录。\n\nSocketHandler：通过socket写日志。\n\nRedisHandler：把记录写进Redis。\n\nMongoDBHandler：把记录写进Mongo。\n\nElasticSearchHandler：把记录写到ElasticSearch服务。\n\n```\n\n\n\n前面说过，Processor可以为日志记录添加额外的信息，Monolog也提供了一些很实用的processor：\n\n```html\nIntrospectionProcessor：增加当前脚本的文件名和类名等信息。\n\nWebProcessor：增加当前请求的URI、请求方法和访问IP等信息。\n\nMemoryUsageProcessor：增加当前内存使用情况信息。\n\nMemoryPeakUsageProcessor：增加内存使用高峰时的信息。\n\n```\n\n\n\n代码参考\n\n```php\nuse Monolog\\Logger;\nuse Monolog\\Handler\\StreamHandler;\nuse Monolog\\Handler\\FirePHPHandler;\n\n// Create the logger\n$logger = new Logger(\'my_logger\');\n\n// Now add some handlers\n$logger->pushHandler(new StreamHandler(__DIR__.\'/my_app.log\', Logger::DEBUG));\n\n// Now add some processors\n$logger->pushProcessor(new WebProcessor());\n\n// You can now use your logger\n$logger->info(\'index page ok \');\n```\n\n\n\n输出结果\n\n```json\n[2017-01-02 14:43:53] vino_log.INFO: index page ok [] {\"url\":\"/vino/\",\"ip\":\"127.0.0.1\",\"http_method\":\"GET\",\"server\":\"localhost\",\"referrer\":\"NULL\"}\n```','http://localhost/blog2/attachment/thumbnail/05.jpg','Monolog内置很多很实用的handler，它们几乎囊括了各种的使用场景，这里介绍一些使用的：StreamHandler：把记录写进PHP流，主要用于日志文件。SyslogHandler：把记录写进syslog。ErrorLogHandler：把记录写进PHP错误日志。NativeMailerHandler：使','http://localhost/blog2/attachment/05.jpg'),(6,1,'2017-01-24 10:00:48','<p>在mysql中有一个general_log，它可以记录应用程序发过来的每条sql请求。它对我们查错有很大帮助，但是它不适合在生产环境中使用，因为这个log文件会非常大。这些不影响我们去了解和学习。</p>\n<blockquote>\n<p>+As+of+MySQL+5.7.8,+each+line+that+shows+when+a+client+connects+also+includes+using+connection_type+to+indicate+the+protocol+used+to+establish+the+connection.+connection_type+is+one+of+TCP/IP+(TCP/IP+connection+established+without+SSL),+SSL/TLS+(TCP/IP+connection+established+with+SSL),+Socket+(Unix+socket+file+connection),+Named+Pipe+(Windows+named+pipe+connection),+or+Shared+Memory+(Windows+shared+memory+connection).As+of+MySQL+5.7.8,+each+line+that+shows+when+a+client+connects+also+includes+using+connection_type+to+indicate+the+protocol+used+to+establish+the+connection.+connection_type+is+one+of+TCP/IP+(TCP/IP+connection+established+without+SSL),+SSL/TLS+(TCP/IP+connection+established+with+SSL),+Socket+(Unix+socket+file+connection),+Named+Pipe+(Windows+named+pipe+connection),+or+Shared+Memory+(Windows+shared+memory+connection).</p>\n</blockquote>\n<p>在mysql的官方文档中可以看到这么一段话，意思是在5.7.8以后的版本中general_log会记录每次sql连接的方式。当多个client连接mysqld的时候，可以清楚的区分每个client的连接方式。比如：</p>\n<pre><code>2016/12/12+11:01:342016-12-12T02:27:02.797108Z+++17+Connect+root@localhost+on+wordpress+using+Socket\n</code></pre><p>mysql中跟general_log相关的参数有三个：general_log、log_output、general_log_file。</p>\n<p>general_log：全局动态变量，默认关闭<br>log_output+：全局动态变量，可取FILE、TABLE、NONE。其中TABLE存储方式比较方便按条件检索。若指定为NONE，则即使general_log开启了也不会记录log。若log_output指定为TABLE，则会在mysql数据库下边创建一个general_log表。需要注意的是该参数不仅仅影响general的存储方式还影响slow的存储方式，这一点需要特别注意。<br>general_log_file：全局动态变量，日志文件名，不指定的话默认为hostname.log，位于数据目录下。</p>\n<h2 id=\"h2--general_log\"><a name=\"+设置general_log\" class=\"reference-link\"></a><span class=\"header-link octicon octicon-link\"></span>+设置general_log</h2><p>general_log默认为关闭状态，可以通过下面命令查看它的状态</p>\n<pre><code>SHOW+VARIABLES+LIEK+&#39;general_log&#39;;\n</code></pre><p>打开general_log</p>\n<pre><code>SET+GLOBAL+general_log+=+&#39;ON&#39;;\n</code></pre><p>关闭general_log</p>\n<pre><code>SET+GLOBAL+general_log+=+&#39;OFF&#39;;\n</code></pre><p>查看general_log存储路径</p>\n<pre><code>SHOW+VARIABLES+LIKE+&#39;general_log_file&#39;;\n</code></pre><p>设置log_output+为table</p>\n<pre><code>SET+GLOBAL+log_output+=+&#39;table&#39;;\n</code></pre><p>设置log_output+为file</p>\n<pre><code>SET+GLOBAL+log_output+=+&#39;file&#39;;\n</code></pre><p>设置log_output+为none，它不会生成general_log，等于关闭general_log</p>\n<pre><code>SET+GLOBAL+log_output+=+&#39;none&#39;;\n</code></pre><p>除了以上这些命令来控制general_log，还可以直接更改mysql配置文件设置general_log。在my.cnf中配置，增加下面两行：</p>\n<pre><code>general_log+=+1;\ngeneral_log_file+=+/var/lib/log/general.log\n</code></pre><p>保存后，重启mysql。</p>\n<p>关于+log_output=table</p>\n<p>在mysql+db+会增加一个表general_log，通过查看表结构，是一个外部的csv文件。</p>\n<pre><code>mysql&gt;+use+mysql;+mysql&gt;+show+create+table+general_log\\G+\n***************************+1.+row+***************************+\n+++++++++++++++++++Table:+general_log+\nCreate+Table:+CREATE+TABLE+`general_log`+(+\n++`event_time`+timestamp+NOT+NULL+DEFAULT+CURRENT_TIMESTAMP+ON+UPDATE+CURRENT_TIMESTAMP,+\n++`user_host`+mediumtext+NOT+NULL,+\n++`thread_id`+bigint(21)+unsigned+NOT+NULL,+\n++`server_id`+int(10)+unsigned+NOT+NULL,+\n++`command_type`+varchar(64)+NOT+NULL,+\n++`argument`+mediumtext+NOT+NULL+\n)+ENGINE=CSV+DEFAULT+CHARSET=utf8+COMMENT=&#39;General+log&#39;\n</code></pre><p>可以看到，引擎使用的是CSV，该引擎下MySQL会将表中的数据存储在数据目录对应的数据库目录下文件名为表明扩展名为.CSV的文件中。当我们对这个表进行查询时性能较低，应修改表的引擎为myIsam，提高性能。</p>\n<pre><code>set+global+general_log+=+off;\nalter+table+general_log+engine+=+myisam;\nset+global+general_log+=+on;\n</code></pre>','Mysql适时记录每一条sql','publish','0000-00-00 00:00:00','post','在mysql中有一个general_log，它可以记录应用程序发过来的每条sql请求。它对我们查错有很大帮助，但是它不适合在生产环境中使用，因为这个log文件会非常大。这些不影响我们去了解和学习。\n\n>+As+of+MySQL+5.7.8,+each+line+that+shows+when+a+client+connects+also+includes+using+connection_type+to+indicate+the+protocol+used+to+establish+the+connection.+connection_type+is+one+of+TCP/IP+(TCP/IP+connection+established+without+SSL),+SSL/TLS+(TCP/IP+connection+established+with+SSL),+Socket+(Unix+socket+file+connection),+Named+Pipe+(Windows+named+pipe+connection),+or+Shared+Memory+(Windows+shared+memory+connection).As+of+MySQL+5.7.8,+each+line+that+shows+when+a+client+connects+also+includes+using+connection_type+to+indicate+the+protocol+used+to+establish+the+connection.+connection_type+is+one+of+TCP/IP+(TCP/IP+connection+established+without+SSL),+SSL/TLS+(TCP/IP+connection+established+with+SSL),+Socket+(Unix+socket+file+connection),+Named+Pipe+(Windows+named+pipe+connection),+or+Shared+Memory+(Windows+shared+memory+connection).\n\n在mysql的官方文档中可以看到这么一段话，意思是在5.7.8以后的版本中general_log会记录每次sql连接的方式。当多个client连接mysqld的时候，可以清楚的区分每个client的连接方式。比如：\n```\n2016/12/12+11:01:342016-12-12T02:27:02.797108Z+++17+Connect+root@localhost+on+wordpress+using+Socket\n```\nmysql中跟general_log相关的参数有三个：general_log、log_output、general_log_file。\n\ngeneral_log：全局动态变量，默认关闭\nlog_output+：全局动态变量，可取FILE、TABLE、NONE。其中TABLE存储方式比较方便按条件检索。若指定为NONE，则即使general_log开启了也不会记录log。若log_output指定为TABLE，则会在mysql数据库下边创建一个general_log表。需要注意的是该参数不仅仅影响general的存储方式还影响slow的存储方式，这一点需要特别注意。\ngeneral_log_file：全局动态变量，日志文件名，不指定的话默认为hostname.log，位于数据目录下。\n\n##+设置general_log\n\ngeneral_log默认为关闭状态，可以通过下面命令查看它的状态\n```\nSHOW+VARIABLES+LIEK+\'general_log\';\n```\n打开general_log\n```\nSET+GLOBAL+general_log+=+\'ON\';\n```\n关闭general_log\n```\nSET+GLOBAL+general_log+=+\'OFF\';\n```\n查看general_log存储路径\n```\nSHOW+VARIABLES+LIKE+\'general_log_file\';\n```\n设置log_output+为table\n```\nSET+GLOBAL+log_output+=+\'table\';\n```\n设置log_output+为file\n```\nSET+GLOBAL+log_output+=+\'file\';\n```\n设置log_output+为none，它不会生成general_log，等于关闭general_log\n```\nSET+GLOBAL+log_output+=+\'none\';\n```\n除了以上这些命令来控制general_log，还可以直接更改mysql配置文件设置general_log。在my.cnf中配置，增加下面两行：\n```\ngeneral_log+=+1;\ngeneral_log_file+=+/var/lib/log/general.log\n```\n保存后，重启mysql。\n\n关于+log_output=table\n\n在mysql+db+会增加一个表general_log，通过查看表结构，是一个外部的csv文件。\n```\nmysql>+use+mysql;+mysql>+show+create+table+general_log\\G+\n***************************+1.+row+***************************+\n+++++++++++++++++++Table:+general_log+\nCreate+Table:+CREATE+TABLE+`general_log`+(+\n++`event_time`+timestamp+NOT+NULL+DEFAULT+CURRENT_TIMESTAMP+ON+UPDATE+CURRENT_TIMESTAMP,+\n++`user_host`+mediumtext+NOT+NULL,+\n++`thread_id`+bigint(21)+unsigned+NOT+NULL,+\n++`server_id`+int(10)+unsigned+NOT+NULL,+\n++`command_type`+varchar(64)+NOT+NULL,+\n++`argument`+mediumtext+NOT+NULL+\n)+ENGINE=CSV+DEFAULT+CHARSET=utf8+COMMENT=\'General+log\'\n```\n可以看到，引擎使用的是CSV，该引擎下MySQL会将表中的数据存储在数据目录对应的数据库目录下文件名为表明扩展名为.CSV的文件中。当我们对这个表进行查询时性能较低，应修改表的引擎为myIsam，提高性能。\n```\nset+global+general_log+=+off;\nalter+table+general_log+engine+=+myisam;\nset+global+general_log+=+on;\n```','http://localhost/blog2/attachment/thumbnail/psb%20%283%29.jpg','在mysql中有一个general_log，它可以记录应用程序发过来的每条sql请求。它对我们查错有很大帮助，但是它不适合在生产环境中使用，因为这个log文件会非常大。这些不影响我们去了解和学习。+As+of+MySQL+5.7.8,+each+line+that+shows+when+a+cl','http://localhost/blog2/attachment/psb%20%283%29.jpg'),(7,1,'2017-01-24 10:17:40','<p>这几个月出去旅行的次数比较多，A7S2搭配35mm,50mm和28-70mm三个镜头的组合，基本能满足我的摄影和摄像的需求。但是，总觉得缺了点什么，有些时候（尤其是吃饭的时候），单机还是会觉得略不方便。</p>\n<p><img src=\"https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-04319.jpg\" alt=\"\"></p>\n<p>同A7系列一样，黑橙配色搭配的盒子。</p>\n<p><img src=\"https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-04315.jpg\" alt=\"\"></p>\n<p><img src=\"https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-04323.jpg\" alt=\"\"></p>\n<p>打开箱子，质保卡，说明书，充电线，还有我们的黑卡5，由于已经用了一个多星期了，这张照片里面的黑卡5镜头装了KASE的UV镜。<br><img src=\"https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-02681.JPG\" alt=\"\"></p>\n<p><img src=\"https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-02690.JPG\" alt=\"\"></p>\n<p>整个机身十分简洁，用惯了A7的我拿到手里第一感受就是「纳尼，居然这么小」，好处是「小」，坏处也是「小」，总感觉会掉，不装个手绳不放心。</p>\n<p><img src=\"https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-02687.JPG\" alt=\"\"></p>\n<p>侧身照，索尼这么多年工业设计功底在这里，黑卡5给人的感觉就是很精致和漂亮。</p>\n<p><img src=\"https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-02697.JPG\" alt=\"\"></p>\n','索尼RX100 M5开箱验机','publish','0000-00-00 00:00:00','post','这几个月出去旅行的次数比较多，A7S2搭配35mm,50mm和28-70mm三个镜头的组合，基本能满足我的摄影和摄像的需求。但是，总觉得缺了点什么，有些时候（尤其是吃饭的时候），单机还是会觉得略不方便。\n\n![](https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-04319.jpg)\n\n同A7系列一样，黑橙配色搭配的盒子。\n\n![](https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-04315.jpg)\n\n![](https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-04323.jpg)\n\n打开箱子，质保卡，说明书，充电线，还有我们的黑卡5，由于已经用了一个多星期了，这张照片里面的黑卡5镜头装了KASE的UV镜。\n![](https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-02681.JPG)\n\n![](https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-02690.JPG)\n\n整个机身十分简洁，用惯了A7的我拿到手里第一感受就是「纳尼，居然这么小」，好处是「小」，坏处也是「小」，总感觉会掉，不装个手绳不放心。\n\n![](https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-02687.JPG)\n\n侧身照，索尼这么多年工业设计功底在这里，黑卡5给人的感觉就是很精致和漂亮。\n\n![](https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-02697.JPG)\n','https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-04315.jpg','这几个月出去旅行的次数比较多，A7S2搭配35mm,50mm和28-70mm三个镜头的组合，基本能满足我的摄影和摄像的需求。但是，总觉得缺了点什么，有些时候（尤其是吃','https://luoleiorg.b0.upaiyun.com/blog/2016/11/rx100/RX100-04315.jpg'),(8,1,'2017-02-09 12:13:24','<p>国内外比较知名的商城系统有ecshop、zencart、magento等，这几个是比较老牌且知名度较高的商城系统。但是我去找了下这几个现在都很难找到免费的安装包，都已经商业化了，需要付费才能用。后面经过一番搜索发现了opencart这个系统。</p>\n<p>下面说下如何快速安装部署这个系统。</p>\n<p>1，购买vps，选用的是搬瓦工最便宜的vps，速度还可以值得推荐。</p>\n<p>2，在vps上安装nginx+php-fpm+mysql的应用环境。</p>\n<p>​    centos系统，首先要更新所有rmp包++<code>yum+update</code></p>\n<p>​    <strong>安装nginx</strong></p>\n<p>​    编译安装方式</p>\n<pre><code class=\"lang-shell\">    wget+http://nginx.org/download/nginx-1.5.9.tar.gz\n\n    tar+-zxvf+nginx-1.5.9.tar.gz\n\n    cd+nginx-1.5.9\n\n    ./configure+--prefix=/usr/local/nginx\n\n    make+&amp;&amp;+make+install\n</code></pre>\n<ul>\n<li>编译过程中需要手动解决依赖问题。</li></ul>\n<p>​    <strong>安装php-fpm</strong></p>\n<p>​    编译安装方式</p>\n<pre><code class=\"lang-shell\">wget+http://cn2.php.net/distributions/php-5.4.7.tar.gz\ntar+zvxf+php-5.4.7.tar.gz\ncd+php-5.4.7\n./configure+--prefix=/usr/local/php++--enable-fpm+--with-mcrypt+\n--enable-mbstring+--disable-pdo+--with-curl+--disable-debug++--disable-rpath+\n--enable-inline-optimization+--with-bz2++--with-zlib+--enable-sockets+\n--enable-sysvsem+--enable-sysvshm+--enable-pcntl+--enable-mbregex+\n--with-mhash+--enable-zip+--with-pcre-regex+--with-mysql+--with-mysqli+\n--with-gd+--with-jpeg-dir\nmake+all+install\n</code></pre>\n<p>​    安装成功后需要复制安装目录下的php-fpm.conf.default+文件为php-fpm.conf，路径可放在/etc/下也可放在安装目录的/etc下。</p>\n<p>​    <strong>安装mysql</strong></p>\n<p>​    yum安装方式</p>\n<pre><code class=\"lang-shell\">yum+install+-y+mysql-server+mysql+mysql-devel\n</code></pre>\n<p>​    也可以采用源码安装，大多数时候为了省事还是yum直接安装吧。</p>\n<pre><code class=\"lang-mysql\">mysql+-uroot+-p+第一次进入是没有密码的，直接回车\nSET+PASSWORD+FOR+&#39;root&#39;@&#39;localhost&#39;=PASSWORD(&#39;123456&#39;)+这里通过语句设置了root的密码为123456\n</code></pre>\n<p>​    <strong>让nginx支持PHP</strong></p>\n<pre><code class=\"lang-nginx\">    location+~+\\.php$+{\n++++++++++++fastcgi_pass+++127.0.0.1:9000;\n++++++++++++fastcgi_index++index.php;\n++++++++++++fastcgi_param++SCRIPT_FILENAME+$document_root$fastcgi_script_name;\n++++++++++++fastcgi_param++PATH_INFO+$fastcgi_script_name;\n++++++++++++include++++++++fastcgi_params;\n++++++++}\n</code></pre>\n<p>​    修改nginx.conf中的以下代码，默认情况下是被注释的。需要注意的是确保web目录的可访问权限，当对目录权限严格限制的时候，最好保证nginx与php进程的用户和用户组一致。（linux里所有程序都是文件，都具有权限问题，指定用户运行是为了确保文件的安全性及系统安全性）如果没有访问权限，访问php文件时会出现404而不是403。</p>\n<p>​    <strong>配置mysql.sock</strong></p>\n<pre><code class=\"lang-mysql\">pdo_mysql.default_socket=+/var/lib/mysql/mysql.sock\nmysql.default_socket+=+/var/lib/mysql/mysql.sock\nmysqli.default_socket+=+/var/lib/mysql/mysql.sock\n</code></pre>\n<p>​    配置这个是为了防止php使用的socket路径与mysql不一致造成无法连接的问题。</p>\n<p>​    <strong>安装opencart</strong></p>\n<pre><code class=\"lang-shell\">wget\nhttps://codeload.github.com/mycncart/opencart_international/zip/opencart_international_2.3.0.2\n\nunzip+opencart_international_2.3.0.2.zip\n</code></pre>\n<p>​    解压目录后只需要把upload目录下的所有文件放到web根目录下即可，然后通过浏览器访问实现安装。安装流程可以参考解压后的install.txt文件。</p>\n<p>​    </p>\n<p>​    ok，以上所有安装流程已经结束！</p>\n<p>​    </p>\n','opencart --如何快速搭建商城系统','publish','0000-00-00 00:00:00','post','国内外比较知名的商城系统有ecshop、zencart、magento等，这几个是比较老牌且知名度较高的商城系统。但是我去找了下这几个现在都很难找到免费的安装包，都已经商业化了，需要付费才能用。后面经过一番搜索发现了opencart这个系统。\n\n下面说下如何快速安装部署这个系统。\n\n1，购买vps，选用的是搬瓦工最便宜的vps，速度还可以值得推荐。\n\n2，在vps上安装nginx+php-fpm+mysql的应用环境。\n\n​	centos系统，首先要更新所有rmp包++```yum+update```\n\n​	**安装nginx**\n\n​	编译安装方式\n\n```shell\n	wget+http://nginx.org/download/nginx-1.5.9.tar.gz\n\n	tar+-zxvf+nginx-1.5.9.tar.gz\n\n	cd+nginx-1.5.9\n\n	./configure+--prefix=/usr/local/nginx\n\n	make+&&+make+install\n\n```\n\n+	编译过程中需要手动解决依赖问题。\n\n​	**安装php-fpm**\n\n​	编译安装方式\n\n```shell\nwget+http://cn2.php.net/distributions/php-5.4.7.tar.gz\ntar+zvxf+php-5.4.7.tar.gz\ncd+php-5.4.7\n./configure+--prefix=/usr/local/php++--enable-fpm+--with-mcrypt+\n--enable-mbstring+--disable-pdo+--with-curl+--disable-debug++--disable-rpath+\n--enable-inline-optimization+--with-bz2++--with-zlib+--enable-sockets+\n--enable-sysvsem+--enable-sysvshm+--enable-pcntl+--enable-mbregex+\n--with-mhash+--enable-zip+--with-pcre-regex+--with-mysql+--with-mysqli+\n--with-gd+--with-jpeg-dir\nmake+all+install\n```\n\n​	安装成功后需要复制安装目录下的php-fpm.conf.default+文件为php-fpm.conf，路径可放在/etc/下也可放在安装目录的/etc下。\n\n​	**安装mysql**\n\n​	yum安装方式\n\n```shell\nyum+install+-y+mysql-server+mysql+mysql-devel\n```\n\n​	也可以采用源码安装，大多数时候为了省事还是yum直接安装吧。\n\n```mysql\nmysql+-uroot+-p+第一次进入是没有密码的，直接回车\nSET+PASSWORD+FOR+\'root\'@\'localhost\'=PASSWORD(\'123456\')+这里通过语句设置了root的密码为123456\n```\n\n​	**让nginx支持PHP**\n\n```nginx\n	location+~+\\.php$+{\n++++++++++++fastcgi_pass+++127.0.0.1:9000;\n++++++++++++fastcgi_index++index.php;\n++++++++++++fastcgi_param++SCRIPT_FILENAME+$document_root$fastcgi_script_name;\n++++++++++++fastcgi_param++PATH_INFO+$fastcgi_script_name;\n++++++++++++include++++++++fastcgi_params;\n++++++++}\n```\n\n​	修改nginx.conf中的以下代码，默认情况下是被注释的。需要注意的是确保web目录的可访问权限，当对目录权限严格限制的时候，最好保证nginx与php进程的用户和用户组一致。（linux里所有程序都是文件，都具有权限问题，指定用户运行是为了确保文件的安全性及系统安全性）如果没有访问权限，访问php文件时会出现404而不是403。\n\n​	**配置mysql.sock**\n\n```mysql\npdo_mysql.default_socket=+/var/lib/mysql/mysql.sock\nmysql.default_socket+=+/var/lib/mysql/mysql.sock\nmysqli.default_socket+=+/var/lib/mysql/mysql.sock\n```\n\n​	配置这个是为了防止php使用的socket路径与mysql不一致造成无法连接的问题。\n\n​	**安装opencart**\n\n```shell\nwget\nhttps://codeload.github.com/mycncart/opencart_international/zip/opencart_international_2.3.0.2\n\nunzip+opencart_international_2.3.0.2.zip\n```\n\n​	解压目录后只需要把upload目录下的所有文件放到web根目录下即可，然后通过浏览器访问实现安装。安装流程可以参考解压后的install.txt文件。\n\n​	\n\n​	ok，以上所有安装流程已经结束！\n\n​	','http://localhost/blog2/attachment/thumbnail/psb11%20%282%29.jpg','国内外比较知名的商城系统有ecshop、zencart、magento等，这几个是比较老牌且知名度较高的商城系统。但是我去找了下这几个现在都很难找到免费的安装包，都已经商业化了，需要付费才能用。后面经过一番搜索发现了opencart这个','http://localhost/blog2/attachment/psb11%20%282%29.jpg'),(9,1,'2017-02-09 12:18:39','<p>操作多维的核心就是遍历＋递归，下面是一种实现方法：</p>\n<pre><code class=\"lang-php\">$s = [\n        4 =&gt; array(\n            [\n            0 =&gt; array(\n                1 =&gt; &#39;{&quot;lnglat&quot;:[&quot;113.943359&quot;,&quot;22.54567&quot;], &quot;s&quot;:&quot;1&quot;}&#39;,\n                2 =&gt; &#39;{&quot;lnglat&quot;:[&quot;113.944756&quot;,&quot;22.547728&quot;], &quot;s&quot;:&quot;1&quot;}&#39;,\n                3 =&gt; &#39;{&quot;lnglat&quot;:[&quot;113.944443&quot;,&quot;22.5483&quot;], &quot;s&quot;:&quot;3&quot;}&#39;\n            ),\n            1 =&gt; array(\n                0 =&gt; &#39;{&quot;lnglat&quot;:[&quot;113.943359&quot;,&quot;22.5555&quot;], &quot;s&quot;:&quot;1&quot;}&#39;,\n                2 =&gt; &#39;{&quot;lnglat&quot;:[&quot;113.944756&quot;,&quot;22.62345&quot;], &quot;s&quot;:&quot;1&quot;}&#39;,\n                3 =&gt; &#39;{&quot;lnglat&quot;:[&quot;113.944443&quot;,&quot;22.33333&quot;], &quot;s&quot;:&quot;3&quot;}&#39;\n            )\n            ]\n        )    \n    ];\n    print_r($s);\n\n    $rs = &#39;&#39;;\n    function arrayToString($arr){\n        global $rs;\n        if(is_array($arr)) {\n            foreach ($arr as $key =&gt; $value) {\n              if(count($value) == count($value,1)){  \n                   $rs .= implode(&quot;&quot;, $value);  \n              }else{  \n                  arrayToString($value);\n              }  \n            }\n        }else{\n            $rs .= $arr;\n        }\n    }\n\n    arrayToString($s);\n    echo $rs;\n</code></pre>\n<p>说明下上述代码中有个核心点就是判断数组是否是一维数组。传进去是多维需要不断的递归让他回到一维我们才能够操作需要的value。判断一维的方法就是使用count方法，通常情况下，我们只使用一个参数计算数组的长度，然而，它还有第二个参数，它可以递归对数组计数，对计算多维数组的长度特别有用。可以参考<a href=\"http://php.net/manual/zh/function.count.php\">http://php.net/manual/zh/function.count.php</a></p>\n','PHP多维数组转一维或合并成字符串','publish','0000-00-00 00:00:00','post','操作多维的核心就是遍历＋递归，下面是一种实现方法：\n```php\n$s = [\n        4 => array(\n            [\n            0 => array(\n                1 => \'{\"lnglat\":[\"113.943359\",\"22.54567\"], \"s\":\"1\"}\',\n                2 => \'{\"lnglat\":[\"113.944756\",\"22.547728\"], \"s\":\"1\"}\',\n                3 => \'{\"lnglat\":[\"113.944443\",\"22.5483\"], \"s\":\"3\"}\'\n            ),\n            1 => array(\n                0 => \'{\"lnglat\":[\"113.943359\",\"22.5555\"], \"s\":\"1\"}\',\n                2 => \'{\"lnglat\":[\"113.944756\",\"22.62345\"], \"s\":\"1\"}\',\n                3 => \'{\"lnglat\":[\"113.944443\",\"22.33333\"], \"s\":\"3\"}\'\n            )\n            ]\n        )    \n    ];\n    print_r($s);\n\n    $rs = \'\';\n    function arrayToString($arr){\n        global $rs;\n        if(is_array($arr)) {\n            foreach ($arr as $key => $value) {\n              if(count($value) == count($value,1)){  \n                   $rs .= implode(\"\", $value);  \n              }else{  \n                  arrayToString($value);\n              }  \n            }\n        }else{\n            $rs .= $arr;\n        }\n    }\n\n    arrayToString($s);\n    echo $rs;\n```\n\n说明下上述代码中有个核心点就是判断数组是否是一维数组。传进去是多维需要不断的递归让他回到一维我们才能够操作需要的value。判断一维的方法就是使用count方法，通常情况下，我们只使用一个参数计算数组的长度，然而，它还有第二个参数，它可以递归对数组计数，对计算多维数组的长度特别有用。可以参考http://php.net/manual/zh/function.count.php\n','http://localhost/blog2/attachment/thumbnail/0530190016.jpg','操作多维的核心就是遍历＋递归，下面是一种实现方法：$s=[4=&gt;array([0=&gt;array(1=&gt;&#39;{&quot;lnglat&quot;:[&quot;113.943359&quot;,&quot;22.54567&quot;],&quot;s&quot;:&quot;1&quot;}&#39;,2=&gt;&#39;{&quot;lnglat&quot;:[&quot;113.944756&quot;,&quot;22.547728&quot;],&quot;s','http://localhost/blog2/attachment/0530190016.jpg'),(10,1,'2017-02-09 04:47:20','<p><strong>html</strong></p>\n<pre><code class=\"lang-html\">&lt;div id=&quot;demo&quot;&gt;\n    &lt;span&gt;我是一个span&lt;/span&gt;\n    &lt;span&gt;我是一个span&lt;/span&gt;\n    &lt;span&gt;我是一个span&lt;/span&gt;\n    &lt;span&gt;我是一个span&lt;/span&gt;\n&lt;/div&gt;\n</code></pre>\n<p><strong>css</strong></p>\n<pre><code class=\"lang-css\">#demo span {\n    display:inline-block;\n}\n</code></pre>\n<p><strong>效果</strong></p>\n<p>可以看到各个span间是有间隙的。</p>\n<p><strong>间隙由来</strong></p>\n<p>因为每个span间有换行或回车，如果我们把它放在同一行，那么间隙就会消失。</p>\n<p>知道原因后，可以通过约定书写方式，强制把他们放到一行来实现去除间隙。然而，这限制性太强，代码也不美观，对有代码洁癖的人来说简直不能忍。</p>\n<p><strong>优雅的解决方法</strong></p>\n<p><strong>1－方法1:</strong></p>\n<pre><code class=\"lang-css\">#demo {\n     font-size:0;\n}\n#demo span {\n     display:inline-block;\n     *display:inline;\n     *zoom:1;\n     font-size:14px;\n}\n</code></pre>\n<p>奇怪？为什么font-size会对间隙有影响。上面已经知道间隙是由换行或回车产生的空白字符所致，既然是字符当然可以用font来控制。</p>\n<p>该方法存在的问题是font-size要被overwrite一次；IE7及以下浏览器依然会残留1px的间隙；较老版本的webkit对小于12px的font-size设置不友好: chrome还可以设置-webkit-text-size-adjust:none用以支持超小字体，Safari即使设置了也无力。</p>\n<p><strong>2-方法2:</strong></p>\n<pre><code class=\"lang-css\">#demo{\n    *padding-left:1px;\n    font-size:0;\n}\n#demo span{\n    display:inline-block;\n    *display:inline;\n    *zoom:1;\n    *margin-left:-1px;\n    font-size:14px;\n}\n</code></pre>\n<p>该方法针对IE7及以下浏览器hack，让每个inline-block的span元素向左负margin一个像素，借此修复IE7及以下浏览器下顽固的残留1px间隙问题。由于span向左margin了-1px，同时需将父元素#demo向左padding 1px，用于抵消位置偏移。</p>\n<p>然而该方法在ie下存在一定隐患性，如果你想让代码变得更健壮，它不会是最佳方法。</p>\n<p><strong>3－方法3:</strong></p>\n<pre><code class=\"lang-css\">#demo{\n    *word-spacing:-1px;\n    font-size:0;\n}\n#demo span{\n    display:inline-block;\n    *display:inline;\n    *zoom:1;\n    word-spacing:normal;\n    font-size:14px;\n}\n</code></pre>\n<p>inline-block之间的间隙是因插入了空白换行或回车符所致，你可能很快就能想起有个<a href=\"http://css.doyoe.com/properties/text/word-spacing.htm\">word-spacing</a>属性是用来处理单词间空白符的。针对IE7及以下浏览器hack，定义word-spacing为-1px，即可修复IE7及以下浏览器下顽固的残留1px间隙问题。</p>\n','font-size:0清除display:inline-block的间隙','publish','0000-00-00 00:00:00','post','**html**\n\n```html\n<div id=\"demo\">\n	<span>我是一个span</span>\n	<span>我是一个span</span>\n	<span>我是一个span</span>\n	<span>我是一个span</span>\n</div>\n```\n\n**css**\n\n```css\n#demo span {\n	display:inline-block;\n}\n```\n\n**效果**\n\n可以看到各个span间是有间隙的。\n\n**间隙由来**\n\n因为每个span间有换行或回车，如果我们把它放在同一行，那么间隙就会消失。\n\n知道原因后，可以通过约定书写方式，强制把他们放到一行来实现去除间隙。然而，这限制性太强，代码也不美观，对有代码洁癖的人来说简直不能忍。\n\n**优雅的解决方法**\n\n**1－方法1:**\n\n```css\n#demo {\n     font-size:0;\n}\n#demo span {\n     display:inline-block;\n     *display:inline;\n	 *zoom:1;\n	 font-size:14px;\n}\n```\n\n奇怪？为什么font-size会对间隙有影响。上面已经知道间隙是由换行或回车产生的空白字符所致，既然是字符当然可以用font来控制。\n\n该方法存在的问题是font-size要被overwrite一次；IE7及以下浏览器依然会残留1px的间隙；较老版本的webkit对小于12px的font-size设置不友好: chrome还可以设置-webkit-text-size-adjust:none用以支持超小字体，Safari即使设置了也无力。\n\n**2-方法2:**\n\n```css\n#demo{\n	*padding-left:1px;\n	font-size:0;\n}\n#demo span{\n	display:inline-block;\n	*display:inline;\n	*zoom:1;\n	*margin-left:-1px;\n	font-size:14px;\n}\n```\n\n该方法针对IE7及以下浏览器hack，让每个inline-block的span元素向左负margin一个像素，借此修复IE7及以下浏览器下顽固的残留1px间隙问题。由于span向左margin了-1px，同时需将父元素#demo向左padding 1px，用于抵消位置偏移。\n\n然而该方法在ie下存在一定隐患性，如果你想让代码变得更健壮，它不会是最佳方法。\n\n**3－方法3:**\n\n```css\n#demo{\n	*word-spacing:-1px;\n	font-size:0;\n}\n#demo span{\n	display:inline-block;\n	*display:inline;\n	*zoom:1;\n	word-spacing:normal;\n	font-size:14px;\n}\n```\n\ninline-block之间的间隙是因插入了空白换行或回车符所致，你可能很快就能想起有个[word-spacing](http://css.doyoe.com/properties/text/word-spacing.htm)属性是用来处理单词间空白符的。针对IE7及以下浏览器hack，定义word-spacing为-1px，即可修复IE7及以下浏览器下顽固的残留1px间隙问题。','','html&lt;divid=&quot;demo&quot;&gt;&lt;span&gt;我是一个span&lt;/span&gt;&lt;span&gt;我是一个span&lt;/span&gt;&lt;span&gt;我是一个span&lt;/span&gt;&lt;span&gt;我是一个span&lt;/span&gt;&lt;/div&gt;','');
/*!40000 ALTER TABLE `mblog_posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mblog_setting`
--

DROP TABLE IF EXISTS `mblog_setting`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mblog_setting` (
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
-- Dumping data for table `mblog_setting`
--

LOCK TABLES `mblog_setting` WRITE;
/*!40000 ALTER TABLE `mblog_setting` DISABLE KEYS */;
INSERT INTO `mblog_setting` VALUES (1,'Mblog是一款支持markdown编辑器的博客管理系统','Mblog能帮助你快速创建一个博客网站，它完美支持了markdown编辑器，在使用体验上达到了一个傻瓜式的用户体验，对于作者来说无需关注代码，只需要专心写字就好','531532957@qq.com','http://localhost/blog2/templates/frontend/images/amazeui-b.png','https://placeholdit.imgix.net/~text?txtsize=33&txt=400%C3%97250&w=400&h=250','http://localhost/blog2/post/4','http://localhost/blog2/post/5','','',1);
/*!40000 ALTER TABLE `mblog_setting` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mblog_users`
--

DROP TABLE IF EXISTS `mblog_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mblog_users` (
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
-- Dumping data for table `mblog_users`
--

LOCK TABLES `mblog_users` WRITE;
/*!40000 ALTER TABLE `mblog_users` DISABLE KEYS */;
INSERT INTO `mblog_users` VALUES (1,'jacoob','b527d1e826a99f20cfe0a5966c1a557a','Jacoob','531532957@qq.com','2017-01-18 18:07:44','http://localhost/blog2/templates/backend/assets/img/user01.png','我是Jacoob，Mblog及vino的作者，欢迎您使用Mblog来创建自己的博客，若有什么疑问，欢迎我联系。\n\n我不想成为一个庸俗的人。十年百年后，当我们死去，质疑我们的人同样死去，后人看到的是裹足不前、原地打转的你，还是一直奔跑、走到远方的我？','admin','https://github.com/jacoobwang','http://weibo.com/loadphp');
/*!40000 ALTER TABLE `mblog_users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-02-26 18:49:11
