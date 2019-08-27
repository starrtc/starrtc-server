-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019-08-08 03:24:09
-- 服务器版本: 5.6.36
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `starRTC_private`
--

-- --------------------------------------------------------

--
-- 表的结构 `channels`
--

CREATE TABLE IF NOT EXISTS `channels` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userId` varchar(100) NOT NULL COMMENT '上传者',
  `channelId` varchar(100) NOT NULL,
  `channelType` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT 'LOGIN_PUBLIC等',
  `relateId` varchar(100) NOT NULL COMMENT '群或聊天室',
  `relateType` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '1群2room',
  `conCurrentNumber` smallint(5) unsigned NOT NULL DEFAULT '200',
  `liveState` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `extra` varchar(1024) DEFAULT NULL,
  `specify` varchar(50) DEFAULT NULL,
  `lastOnlineTime` int(10) unsigned DEFAULT '0',
  `ctime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `channelId` (`channelId`),
  KEY `ownerId` (`relateId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5303 ;

-- --------------------------------------------------------

--
-- 表的结构 `chatRoom`
--

CREATE TABLE IF NOT EXISTS `chatRoom` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userId` varchar(200) NOT NULL,
  `roomId` varchar(100) NOT NULL,
  `roomName` varchar(200) NOT NULL,
  `roomType` tinyint(3) unsigned NOT NULL COMMENT '1public与2login',
  `conCurrentNumber` mediumint(8) unsigned NOT NULL DEFAULT '200',
  `state` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `lastOnlineTime` int(10) unsigned DEFAULT '0',
  `ctime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roomId` (`roomId`),
  KEY `userId` (`userId`),
  KEY `state` (`state`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4721 ;

-- --------------------------------------------------------

--
-- 表的结构 `docs`
--

CREATE TABLE IF NOT EXISTS `docs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(2048) COLLATE utf8_bin NOT NULL,
  `file_ext` varchar(10) COLLATE utf8_bin NOT NULL,
  `local_path` varchar(2048) COLLATE utf8_bin NOT NULL,
  `full_path` varchar(2048) COLLATE utf8_bin NOT NULL,
  `url_path` varchar(2048) COLLATE utf8_bin NOT NULL,
  `json` mediumtext COLLATE utf8_bin,
  `state` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '成功1失败2',
  `ctime` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

-- --------------------------------------------------------

--
-- 表的结构 `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `groupName` varchar(1024) DEFAULT NULL,
  `userList` longtext,
  `needAuth` tinyint(3) unsigned DEFAULT '1',
  `hasLive` tinyint(3) unsigned DEFAULT '0',
  `state` tinyint(3) unsigned DEFAULT '1',
  `creator` varchar(100) NOT NULL,
  `numLimit` mediumint(8) unsigned DEFAULT '20000',
  `curNum` mediumint(8) unsigned DEFAULT NULL,
  `ctime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `creator` (`creator`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100458 ;

-- --------------------------------------------------------

--
-- 表的结构 `list`
--

CREATE TABLE IF NOT EXISTS `list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userId` varchar(100) DEFAULT NULL,
  `type` tinyint(3) unsigned DEFAULT NULL,
  `roomId` varchar(50) DEFAULT NULL,
  `data` text,
  `ctime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `roomId` (`roomId`),
  KEY `userId` (`userId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=696 ;

-- --------------------------------------------------------

--
-- 表的结构 `online_users`
--

CREATE TABLE IF NOT EXISTS `online_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userId` varchar(100) NOT NULL,
  `last_online_ts` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `userGroup`
--

CREATE TABLE IF NOT EXISTS `userGroup` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `userId` varchar(100) NOT NULL,
  `groupList` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=422 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
