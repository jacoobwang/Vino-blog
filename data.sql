-------------------------------------------------------------------------------------------------
------------mblog sql mblog_cate------------------—————————-------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
CREATE TABLE `mblog_cate` (
  `term_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`term_id`),
  KEY (`name`),
  KEY (`slug`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-------------------------------------------------------------------------------------------------
------------mblog sql mblog_posts------------------—————————-------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
CREATE TABLE `mblog_posts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_author` bigint(20) unsigned NOT NULL DEFAULT 0,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_md` text NOT NULL,
  `post_thumb` varchar(255) NOT NULL DEFAULT '',
  `post_origin` varchar(255) NOT NULL DEFAULT '',
  `post_desc` varchar(1000) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY (`post_author`),
  KEY `type_status_date` (`post_type`,`post_status`,`post_date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-------------------------------------------------------------------------------------------------
------------mblog sql mblog_users------------------—————————-------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
CREATE TABLE `mblog_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_login` varchar(255) NOT NULL DEFAULT '',
  `user_pass` varchar(255) NOT NULL DEFAULT '',
  `user_nickname` varchar(255) NOT NULL DEFAULT '',
  `user_email` varchar(255) NOT NULL DEFAULT '',
  `user_registered`  datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_avatar` varchar(255) NOT NULL DEFAULT '',
  `user_profile` varchar(2000) NOT NULL DEFAULT '',
  `user_power`  varchar(20) NOT NULL DEFAULT 'guest',
  `user_github` varchar(255) NOT NULL DEFAULT '',
  `user_weibo`  varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY (`user_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-------------------------------------------------------------------------------------------------
------------mblog sql mblog_setting------------------—————————-------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
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
  `register_open` smallint(2) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-------------------------------------------------------------------------------------------------
------------mblog sql mblog_label------------------—————————-------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
-------------------------------------------------------------------------------------------------
CREATE TABLE `mblog_label` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint(20) unsigned NOT NULL DEFAULT '0',
  `label` varchar(255)  NOT NULL DEFAULT '',
  `type` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;