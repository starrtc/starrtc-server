-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019-06-24 03:13:09
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
-- 表的结构 `audio_lists`
--

CREATE TABLE IF NOT EXISTS `audio_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(200) NOT NULL,
  `channelId` varchar(50) DEFAULT NULL,
  `roomId` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `liveState` tinyint(3) unsigned DEFAULT '0',
  `ctime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uuid` (`uuid`),
  KEY `roomId` (`roomId`),
  KEY `channelId` (`channelId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=49 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4526 ;

--
-- 转存表中的数据 `channels`
--

INSERT INTO `channels` (`id`, `userId`, `channelId`, `channelType`, `liveType`, `ownerId`, `ownerType`, `conCurrentNumber`, `liveState`, `extra`, `specify`, `lastOnlineTime`, `ctime`) VALUES
(4502, '892500', 'Wz@NWuVjb1ahaa4a', 3, 2, 'a4aBNTAHMWt8_tIH', 2, 0, 1, '', '', 1561169941, '2019-06-22 10:19:01'),
(4503, '976224', 'Wz@NWuVjb1pLaaGa', 3, 2, 'a4ac9NcAoWt9JAxB', 2, 0, 1, '', '', 1561172643, '2019-06-22 11:04:03'),
(4504, '976224', 'Wz@NWuVjb1Pfaaia', 3, 2, 'a4a7-DJIYWt9JLjz', 2, 0, 1, '', '', 1561172687, '2019-06-22 11:04:47'),
(4505, '112233', 'Wz@NWuVjb@JXaa0a', 3, 2, 'a4aCg0k40Wt_jrs7', 2, 0, 1, '', '', 1561196412, '2019-06-22 17:40:12'),
(4506, '112233', 'Wz@NWuVjb@ksaaKa', 3, 2, 'a4adjKPSkWt_j4iJ', 2, 0, 1, '', '', 1561196464, '2019-06-22 17:41:04'),
(4507, '147258', 'Wz@NWuVjb@@Raama', 3, 2, 'a4a6JzdGkWt_kH_x', 2, 0, 1, '', '', 1561196527, '2019-06-22 17:42:07'),
(4508, '147258', 'Wz@NWuVjb@Ktaaoa', 3, 2, 'a4aDXUGJIWt_kYKR', 2, 0, 1, '', '', 1561196594, '2019-06-22 17:43:14'),
(4509, '147258', 'Wz@NWuVjb@lNaaqa', 3, 2, 'a4aeWUy_oWt_klH4', 2, 0, 1, '', '', 1561196647, '2019-06-22 17:44:07'),
(4510, '789188', 'Wz@NWuVjbMpdaaua', 3, 2, 'a4aE5CkDkWuAEajm', 2, 0, 1, '', '', 1561221769, '2019-06-23 00:42:49'),
(4511, '789188', 'Wz@NWuVjbMpTaawa', 3, 2, 'a4afTikDoWuAEkw9', 2, 0, 1, '', '', 1561221811, '2019-06-23 00:43:31'),
(4512, '789188', 'Wz@NWuVjbMqGaaya', 3, 2, 'a4aFZsA3UWuAE8h0', 2, 0, 1, '', '', 1561221908, '2019-06-23 00:45:08'),
(4513, '789188', 'Wz@NWuVjbMqta9aa', 3, 2, 'a4agbsmiEWuAFDvl', 2, 0, 1, '', '', 1561221938, '2019-06-23 00:45:38'),
(4514, '789188', 'Wz@NWuVjbMQAa98a', 3, 1, 'a4a3TDHrQWuAFHqS', 2, 0, 1, '', '', 1561221954, '2019-06-23 00:45:54'),
(4515, '9999', 'Wz@NWuVjbMQUa9Ca', 3, 1, 'a4aGsXE-kWuAFUCZ', 2, 0, 1, '', '', 1561222005, '2019-06-23 00:46:45'),
(4516, '9999', 'Wz@NWuVjbMrAa9ea', 3, 1, 'a4ahxdFKYWuAFXPm', 2, 0, 1, '', '', 1561222018, '2019-06-23 00:46:58'),
(4517, '9999', 'Wz@NWuVjbMrWa94a', 3, 1, 'a4a2eOnscWuAFk2q', 2, 0, 1, '', '', 1561222073, '2019-06-23 00:47:53'),
(4518, '789188', 'Wz@NWuVjbMRDa9Ga', 3, 1, 'a4aHGEArQWuAFpKo', 2, 0, 1, '', '', 1561222091, '2019-06-23 00:48:11'),
(4519, '9999', 'Wz@NWuVjbMtLa9ia', 3, 1, 'a4ajgC1OkWuAGdx2', 2, 0, 1, '', '', 1561222307, '2019-06-23 00:51:47'),
(4520, '9999', 'Wz@NWuVjbMtxa90a', 3, 2, 'a4a0UBPX4WuAGjbC', 2, 0, 1, '', '', 1561222330, '2019-06-23 00:52:10'),
(4521, '789188', 'Wz@NWuVjbMTBa9Ka', 3, 2, 'a4aJ0s0TcWuAGmNL', 2, 0, 1, '', '', 1561222341, '2019-06-23 00:52:21'),
(4522, '789188', 'Wz@NWuVjbMUVa9oa', 3, 2, 'a4a@LS4lEWuAHRpV', 2, 0, 1, '', '', 1561222519, '2019-06-23 00:55:19'),
(4523, '9999', 'Wz@NWuVjbMv8a9qa', 3, 2, 'a4aKd2h-UWuAHU2F', 2, 0, 1, '', '', 1561222532, '2019-06-23 00:55:32'),
(4524, '650475', 'Wz@NWuVjbthfaACa', 3, 2, 'a4aN4iADEWuDKb5M', 2, 0, 1, '', '', 1561273679, '2019-06-23 15:07:59'),
(4525, '9999', 'Wz@NWuVjbuIGaAea', 3, 2, 'a4aoa9qyQWuDq7Te', 2, 0, 1, '', '', 1561282197, '2019-06-23 17:29:57');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3813 ;

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
(3777, '892500', 'a4aBNTAHMWt8_tIH', '8', 1, 2, 100, 1, 1561169941, '2019-06-22 10:19:01'),
(3778, '976224', 'a4ac9NcAoWt9JAxB', '啊', 1, 2, 100, 1, 1561172642, '2019-06-22 11:04:02'),
(3779, '976224', 'a4a7-DJIYWt9JLjz', '想', 1, 2, 100, 1, 1561172687, '2019-06-22 11:04:47'),
(3780, '112233', 'a4aCg0k40Wt_jrs7', '1234', 1, 2, 100, 1, 1561196411, '2019-06-22 17:40:11'),
(3781, '112233', 'a4adjKPSkWt_j4iJ', '1234', 1, 2, 100, 1, 1561196464, '2019-06-22 17:41:04'),
(3782, '147258', 'a4a6JzdGkWt_kH_x', '123456', 1, 2, 100, 1, 1561196527, '2019-06-22 17:42:07'),
(3783, '147258', 'a4aDXUGJIWt_kYKR', '222555', 1, 2, 100, 1, 1561196593, '2019-06-22 17:43:13'),
(3784, '147258', 'a4aeWUy_oWt_klH4', '369', 1, 2, 100, 1, 1561196646, '2019-06-22 17:44:06'),
(3785, '789188', 'a4a5PYIoYWuAEQ0r', '超级聊天室', 1, 0, 100, 1, 1561221729, '2019-06-23 00:42:09'),
(3786, '789188', 'a4aE5CkDkWuAEajm', '互动直播', 1, 2, 100, 1, 1561221769, '2019-06-23 00:42:49'),
(3787, '789188', 'a4afTikDoWuAEkw9', '小课', 1, 2, 100, 1, 1561221811, '2019-06-23 00:43:31'),
(3788, '789188', 'a4a47idrMWuAE3w_', '聊天室', 1, 0, 100, 1, 1561221889, '2019-06-23 00:44:49'),
(3789, '789188', 'a4aFZsA3UWuAE8h0', '123', 1, 2, 100, 1, 1561221908, '2019-06-23 00:45:08'),
(3790, '789188', 'a4agbsmiEWuAFDvl', 'ok', 1, 2, 100, 1, 1561221938, '2019-06-23 00:45:38'),
(3791, '789188', 'a4a3TDHrQWuAFHqS', '会议', 1, 1, 100, 1, 1561221954, '2019-06-23 00:45:54'),
(3792, '9999', 'a4aGsXE-kWuAFUCZ', '123', 1, 1, 100, 1, 1561222004, '2019-06-23 00:46:44'),
(3793, '9999', 'a4ahxdFKYWuAFXPm', '会议', 1, 1, 100, 1, 1561222018, '2019-06-23 00:46:58'),
(3794, '9999', 'a4a2eOnscWuAFk2q', '123', 1, 1, 100, 1, 1561222073, '2019-06-23 00:47:53'),
(3795, '789188', 'a4aHGEArQWuAFpKo', '123', 1, 1, 100, 1, 1561222091, '2019-06-23 00:48:11'),
(3796, '9999', 'a4ai0qyRkWuAFw8B', '123', 1, 0, 100, 1, 1561222123, '2019-06-23 00:48:43'),
(3797, '789188', 'a4a1LwmrMWuAF18M', '123', 1, 0, 100, 1, 1561222143, '2019-06-23 00:49:03'),
(3798, '9999', 'a4aI39YFUWuAGVi9', '123', 1, 0, 100, 1, 1561222273, '2019-06-23 00:51:13'),
(3799, '9999', 'a4ajgC1OkWuAGdx2', '123', 1, 1, 100, 1, 1561222307, '2019-06-23 00:51:47'),
(3800, '9999', 'a4a0UBPX4WuAGjbC', '123', 1, 2, 100, 1, 1561222330, '2019-06-23 00:52:10'),
(3801, '789188', 'a4aJ0s0TcWuAGmNL', '123', 1, 2, 100, 1, 1561222341, '2019-06-23 00:52:21'),
(3802, '9999', 'a4akT4WOsWuAGqxf', '666', 1, 0, 100, 1, 1561222360, '2019-06-23 00:52:40'),
(3803, '789188', 'a4a@LS4lEWuAHRpV', '123', 1, 2, 100, 1, 1561222519, '2019-06-23 00:55:19'),
(3804, '9999', 'a4aKd2h-UWuAHU2F', '123', 1, 2, 100, 1, 1561222532, '2019-06-23 00:55:32'),
(3805, '9999', 'a4alJsmmwWuCwqZ8', '123456', 1, 0, 100, 1, 1561266923, '2019-06-23 13:15:23'),
(3806, '9999', 'a4a-MVq0UWuCwsKQ', '123456', 1, 0, 100, 1, 1561266930, '2019-06-23 13:15:30'),
(3807, '9999', 'a4aL8YEzAWuCwsz6', '123456', 1, 0, 100, 1, 1561266933, '2019-06-23 13:15:33'),
(3808, '9999', 'a4amrexLsWuCwtQf', '123456', 1, 0, 100, 1, 1561266934, '2019-06-23 13:15:34'),
(3809, '9999', 'a4aMfiHZYWuCwvXy', '123456', 1, 0, 100, 1, 1561266943, '2019-06-23 13:15:43'),
(3810, '9999', 'a4anzoZmoWuCw0XI', '123', 1, 0, 100, 1, 1561266963, '2019-06-23 13:16:03'),
(3811, '650475', 'a4aN4iADEWuDKb5M', '111', 1, 2, 100, 1, 1561273679, '2019-06-23 15:07:59'),
(3812, '9999', 'a4aoa9qyQWuDq7Te', '123', 1, 2, 100, 1, 1561282196, '2019-06-23 17:29:56');

-- --------------------------------------------------------

--
-- 表的结构 `class_lists`
--

CREATE TABLE IF NOT EXISTS `class_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(200) NOT NULL,
  `roomId` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `ctime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `roomId` (`roomId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=667 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=100382 ;

--
-- 转存表中的数据 `groups`
--

INSERT INTO `groups` (`id`, `groupName`, `userList`, `needAuth`, `hasLive`, `state`, `creator`, `numLimit`, `curNum`, `ctime`) VALUES
(100381, '123', '789188_0', 1, 0, 1, '789188', 20000, 1, '2019-06-23 00:49:28'),
(100380, '66666', '892500_0', 1, 0, 1, '892500', 20000, 1, '2019-06-21 14:32:24'),
(100379, '99999', '892500_0', 1, 0, 1, '892500', 20000, 1, '2019-06-21 14:31:07'),
(100377, '520', '639254_0', 1, 0, 1, '639254', 2000, 1, '2019-03-05 14:11:35'),
(100378, '市场部', '909411_0,哈哈_0', 1, 0, 1, '909411', 2000, 2, '2019-03-17 08:22:35');

-- --------------------------------------------------------

--
-- 表的结构 `live_lists`
--

CREATE TABLE IF NOT EXISTS `live_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(200) NOT NULL,
  `channelId` varchar(50) DEFAULT NULL,
  `roomId` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `liveState` tinyint(3) unsigned DEFAULT '0',
  `ctime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `uuid` (`uuid`),
  KEY `roomId` (`roomId`),
  KEY `channelId` (`channelId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3142 ;

--
-- 转存表中的数据 `live_lists`
--

INSERT INTO `live_lists` (`id`, `uuid`, `channelId`, `roomId`, `name`, `userId`, `liveState`, `ctime`) VALUES
(2863, 'kvJJAtjDYxEFaps9aKbMHEvlQWc-VvN8', 'kvJJAtjDYxEFaps9', 'aKbMHEvlQWc-VvN8', 'Babs', '337180', 0, '2018-11-23 14:52:01'),
(2864, 'kvJJAtjDYyMpaP09aKbSxQQDQWc-6syV', 'kvJJAtjDYyMpaP09', 'aKbSxQQDQWc-6syV', '宝宝', '934054', 0, '2018-11-23 17:33:30'),
(2881, 'kvJJAtjDzuvVar89aKa@ETgOMWdNp5h8', 'kvJJAtjDzuvVar89', 'aKa@ETgOMWdNp5h8', '直播', '643850', 0, '2018-11-26 09:34:47'),
(2866, 'kvJJAtjDYyPraPm9aKbTLpEuMWc-8LkZ', 'kvJJAtjDYyPraPm9', 'aKbTLpEuMWc-8LkZ', '图', '570399', 0, '2018-11-23 17:39:58'),
(2839, 'kvJJAtjDYUs0aOC9aKb6WbG9EWc_P9Oa', 'kvJJAtjDYUs0aOC9', 'aKb6WbG9EWc_P9Oa', '好吧', '243422', 0, '2018-11-23 09:47:08');

-- --------------------------------------------------------

--
-- 表的结构 `meeting_lists`
--

CREATE TABLE IF NOT EXISTS `meeting_lists` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(200) NOT NULL,
  `roomId` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `userId` varchar(100) NOT NULL,
  `ctime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `userId` (`userId`),
  KEY `roomId` (`roomId`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2399 ;

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=342 ;

--
-- 转存表中的数据 `userGroup`
--

INSERT INTO `userGroup` (`id`, `userId`, `groupList`) VALUES
(338, '909411', '10400_0'),
(339, '哈哈', '10400_0'),
(340, '892500', '100380_0'),
(341, '789188', '100381_0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
