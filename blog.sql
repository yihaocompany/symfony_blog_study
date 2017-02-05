-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-02-05 04:12:22
-- 服务器版本： 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `blog`
--

CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL,
  `title` char(72) NOT NULL DEFAULT '',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '-1 删除 0 草稿 1 正常 2 置顶',
  `createtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatetime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '文章类型（分级）',
  `look` int(11) NOT NULL DEFAULT '1' COMMENT '浏览量'
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `blogtag`
--

CREATE TABLE IF NOT EXISTS `blogtag` (
  `id` int(11) NOT NULL,
  `blogid` int(11) DEFAULT '0',
  `tagid` int(11) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8 COMMENT='blog_tag关联表';

-- --------------------------------------------------------

--
-- 表的结构 `blogtype`
--

CREATE TABLE IF NOT EXISTS `blogtype` (
  `id` int(11) NOT NULL,
  `name` char(24) NOT NULL DEFAULT '' COMMENT '类型名称',
  `topid` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `blog_configs`
--

CREATE TABLE IF NOT EXISTS `blog_configs` (
  `id` int(11) NOT NULL,
  `name` char(36) NOT NULL DEFAULT '',
  `value` varchar(360) NOT NULL DEFAULT '',
  `ext` tinyint(2) NOT NULL DEFAULT '0',
  `comment` varchar(360) DEFAULT '' COMMENT '解释这条记录的含义'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='网站信息综合表，name代表这条记录的关键key ';

--
-- 转存表中的数据 `blog_configs`
--

INSERT INTO `blog_configs` (`id`, `name`, `value`, `ext`, `comment`) VALUES
(1, 'login', '6d253d7e5955a36e0213b6f6957b788d', 0, '登陆验证 value是md5(md5(password)+name)'),
(2, 'site_back', 'xxxxxx', 0, '网站备案号'),
(3, 'site_title', 'xxxxxx', 0, '网站名称'),
(4, 'site_keywords', 'xxxxxx', 0, '网站关键词'),
(5, 'site_description', 'xxxxxx', 0, '网站描述'),
(6, 'blog_title', 'xxxxxx', 0, '博客名称'),
(7, 'site_url', 'xxxxxx', 0, '本站url');

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL,
  `blogid` int(11) DEFAULT NULL,
  `content` varchar(240) DEFAULT '',
  `nickname` char(24) DEFAULT '',
  `createtime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `replyid` int(11) DEFAULT '0' COMMENT '-1 已被回复 0 未被回复 >0 回复的那个id'
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `blogid` int(11) NOT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `link`
--

CREATE TABLE IF NOT EXISTS `link` (
  `id` int(11) NOT NULL,
  `url` char(36) NOT NULL DEFAULT '',
  `title` char(36) NOT NULL DEFAULT '',
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `say`
--

CREATE TABLE IF NOT EXISTS `say` (
  `id` int(11) NOT NULL,
  `content` varchar(480) NOT NULL DEFAULT '',
  `createtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `imgs` varchar(480) NOT NULL DEFAULT '' COMMENT 'json格式'
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) NOT NULL,
  `name` char(24) DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL,
  `bid` char(20) DEFAULT ''
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`),
  ADD KEY `type` (`type`);

--
-- Indexes for table `blogtag`
--
ALTER TABLE `blogtag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogid` (`blogid`) USING BTREE,
  ADD KEY `tagid` (`tagid`) USING BTREE;

--
-- Indexes for table `blogtype`
--
ALTER TABLE `blogtype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_configs`
--
ALTER TABLE `blog_configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`blogid`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`blogid`);

--
-- Indexes for table `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `say`
--
ALTER TABLE `say`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `blogtag`
--
ALTER TABLE `blogtag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `blogtype`
--
ALTER TABLE `blogtype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `blog_configs`
--
ALTER TABLE `blog_configs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `say`
--
ALTER TABLE `say`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- 限制导出的表
--

--
-- 限制表 `blogtag`
--
ALTER TABLE `blogtag`
  ADD CONSTRAINT `blogid` FOREIGN KEY (`blogid`) REFERENCES `blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `commentid` FOREIGN KEY (`blogid`) REFERENCES `blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `id` FOREIGN KEY (`blogid`) REFERENCES `blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
