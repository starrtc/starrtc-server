-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019-06-22 02:24:37
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
  `liveType` tinyint(3) unsigned NOT NULL COMMENT '1会议2直播',
  `ownerId` varchar(100) NOT NULL COMMENT '群或聊天室',
  `ownerType` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '1群2room',
  `conCurrentNumber` smallint(5) unsigned NOT NULL DEFAULT '200',
  `liveState` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `extra` varchar(1024) NOT NULL,
  `specify` varchar(50) NOT NULL,
  `lastOnlineTime` int(10) unsigned DEFAULT '0',
  `ctime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `channelId` (`channelId`),
  KEY `ownerId` (`ownerId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4503 ;

--
-- 转存表中的数据 `channels`
--

INSERT INTO `channels` (`id`, `userId`, `channelId`, `channelType`, `liveType`, `ownerId`, `ownerType`, `conCurrentNumber`, `liveState`, `extra`, `specify`, `lastOnlineTime`, `ctime`) VALUES
(4502, '892500', 'Wz@NWuVjb1ahaa4a', 3, 2, 'a4aBNTAHMWt8_tIH', 2, 0, 1, '', '', 1561169941, '2019-06-22 10:19:01');

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
  `liveType` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '1会议2直播',
  `conCurrentNumber` mediumint(8) unsigned NOT NULL DEFAULT '200',
  `state` tinyint(3) unsigned NOT NULL DEFAULT '1',
  `lastOnlineTime` int(10) unsigned DEFAULT '0',
  `ctime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `roomId` (`roomId`),
  KEY `userId` (`userId`),
  KEY `state` (`state`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3778 ;

--
-- 转存表中的数据 `chatRoom`
--

INSERT INTO `chatRoom` (`id`, `userId`, `roomId`, `roomName`, `roomType`, `liveType`, `conCurrentNumber`, `state`, `lastOnlineTime`, `ctime`) VALUES
(3769, '268342', 'a4a9VxeOsWt4l0kj', '12', 1, 0, 100, 1, 1561096309, '2019-06-21 13:51:49'),
(3766, '892500', 'a4aCU5LnEWt4TokY', '888', 1, 0, 100, 1, 1561091541, '2019-06-21 12:32:21'),
(3767, '892500', 'a4ad0O7OUWt4UKg8', '999', 1, 0, 100, 1, 1561091680, '2019-06-21 12:34:40'),
(3768, '892500', 'a4aazFe3QWt4VQZB', '999', 1, 0, 100, 1, 1561091966, '2019-06-21 12:39:26'),
(3770, '892500', 'a4aaS_GK4Wt4yTk_', '888', 1, 0, 100, 1, 1561099581, '2019-06-21 14:46:21'),
(3771, '892500', 'a4a96NG0MWt4yfSa', '发布会', 1, 0, 100, 1, 1561099629, '2019-06-21 14:47:09'),
(3772, '776637', 'a4aANzRFoWt41fRw', 'aaa', 1, 0, 100, 1, 1561100416, '2019-06-21 15:00:16'),
(3773, '892500', 'a4a913RpUWt89Vtv', '888', 1, 0, 100, 1, 1561169583, '2019-06-22 10:13:03'),
(3774, '892500', 'a4aA800ysWt89w29', '888', 1, 0, 100, 1, 1561169694, '2019-06-22 10:14:54'),
(3775, '892500', 'a4abXHi-oWt897Oj', '888', 1, 0, 100, 1, 1561169736, '2019-06-22 10:15:36'),
(3776, '892500', 'a4a83X1j4Wt8_g6w', '5', 1, 0, 100, 1, 1561169891, '2019-06-22 10:18:11'),
(3777, '892500', 'a4aBNTAHMWt8_tIH', '8', 1, 2, 100, 1, 1561169941, '2019-06-22 10:19:01');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100381 ;

--
-- 转存表中的数据 `groups`
--

INSERT INTO `groups` (`id`, `groupName`, `userList`, `needAuth`, `hasLive`, `state`, `creator`, `numLimit`, `curNum`, `ctime`) VALUES
(100380, '66666', '892500_0', 1, 0, 1, '892500', 20000, 1, '2019-06-21 14:32:24'),
(100379, '99999', '892500_0', 1, 0, 1, '892500', 20000, 1, '2019-06-21 14:31:07'),
(100377, '520', '639254_0', 1, 0, 1, '639254', 2000, 1, '2019-03-05 14:11:35'),
(100378, '市场部', '909411_0,哈哈_0', 1, 0, 1, '909411', 2000, 2, '2019-03-17 08:22:35');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=341 ;

--
-- 转存表中的数据 `userGroup`
--

INSERT INTO `userGroup` (`id`, `userId`, `groupList`) VALUES
(338, '909411', '10400_0'),
(339, '哈哈', '10400_0'),
(340, '892500', '100380_0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
