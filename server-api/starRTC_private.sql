-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019-06-29 02:30:31
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
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '业务类型',
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4613 ;

--
-- 转存表中的数据 `channels`
--

INSERT INTO `channels` (`id`, `userId`, `channelId`, `channelType`, `type`, `relateId`, `relateType`, `conCurrentNumber`, `liveState`, `extra`, `specify`, `lastOnlineTime`, `ctime`) VALUES
(4610, '577175', 'Wz@NWuVjB@9Laaya', 7, 2, 'a4aOdndV4WudswRG', 2, 100, 1, '会议流2', '', 1561718883, '2019-06-28 18:48:03'),
(4609, '577175', 'Wz@NWuVjBkSZaawa', 7, 4, 'a4aN6Oe1wWudo9Hz', 2, 100, 0, '直播流', '', 1561717887, '2019-06-28 18:31:27'),
(4611, '577175', 'Wz@NWuVjBKaoa9aa', 3, 1, 'a4aptBaiUWud8J3B', 2, 0, 0, '直播', '', 1561722920, '2019-06-28 19:55:20'),
(4612, '577175', 'Wz@NWuVjBKaUa98a', 3, 3, 'a4aP_cXWoWud8NHk', 2, 0, 0, '会议', '', 1561722933, '2019-06-28 19:55:33');

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
  `type` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '业务类型',
  `conCurrentNumber` mediumint(8) unsigned NOT NULL DEFAULT '200',
  `state` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `lastOnlineTime` int(10) unsigned DEFAULT '0',
  `ctime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roomId` (`roomId`),
  KEY `userId` (`userId`),
  KEY `state` (`state`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3940 ;

--
-- 转存表中的数据 `chatRoom`
--

INSERT INTO `chatRoom` (`id`, `userId`, `roomId`, `roomName`, `roomType`, `type`, `conCurrentNumber`, `state`, `lastOnlineTime`, `ctime`) VALUES
(3934, '577175', 'a4anY3GS4Wudopu3', '会议流', 1, 2, 100, 1, 1561717808, '2019-06-28 18:30:08'),
(3935, '577175', 'a4aN6Oe1wWudo9Hz', '直播流', 1, 4, 100, 1, 1561717887, '2019-06-28 18:31:27'),
(3936, '577175', 'a4aoTVtlwWudpSQv', '纯IM', 1, 0, 100, 1, 1561717974, '2019-06-28 18:32:54'),
(3937, '577175', 'a4aOdndV4WudswRG', '会议流2', 1, 2, 100, 1, 1561718883, '2019-06-28 18:48:03'),
(3938, '577175', 'a4aptBaiUWud8J3B', '直播', 1, 1, 100, 1, 1561722920, '2019-06-28 19:55:20'),
(3939, '577175', 'a4aP_cXWoWud8NHk', '会议', 1, 3, 100, 1, 1561722933, '2019-06-28 19:55:33');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100385 ;

--
-- 转存表中的数据 `groups`
--

INSERT INTO `groups` (`id`, `groupName`, `userList`, `needAuth`, `hasLive`, `state`, `creator`, `numLimit`, `curNum`, `ctime`) VALUES
(100384, '888', '577175_1', 1, 0, 1, '577175', 20000, 1, '2019-06-28 16:57:08');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=345 ;

--
-- 转存表中的数据 `userGroup`
--

INSERT INTO `userGroup` (`id`, `userId`, `groupList`) VALUES
(344, '577175', '100384_1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
