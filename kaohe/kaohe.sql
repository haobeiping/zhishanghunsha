-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-12-09 12:10:27
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kaohe`
--

-- --------------------------------------------------------

--
-- 表的结构 `shuju`
--

CREATE TABLE `shuju` (
  `id` int(11) NOT NULL,
  `biaoti` varchar(220) CHARACTER SET utf8 DEFAULT NULL,
  `neirong` longtext CHARACTER SET utf8,
  `zuozhe` varchar(20) NOT NULL,
  `liulanliang` int(11) DEFAULT '0',
  `zishu` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `shuju`
--

INSERT INTO `shuju` (`id`, `biaoti`, `neirong`, `zuozhe`, `liulanliang`, `zishu`) VALUES
(26, '这也是有中国特色的变现模式', '这也是有中国特色的变现模式，即先通过漫画获得一定的原创IP知名度，再通过动画放大IP的价值，后期还有可能制作大电影，并同时推出游戏。比如《十万个冷笑话》，从漫画走向大电影和游戏，这条变现道路为它带来了超级可观的利润，这也是国内比较公认的变现模式，也是最普遍的一种。 但是，依然有很多人不愿意做动画。因为动画成本太高，很多公司没有视频播放平台支持就承担不起，于是，就有了「多快好省」的第三条路，从漫画直接跳到真人网剧。这个模式我们也可以将其称为「打破次元壁」模式。 最近《画江湖之不良人》就在使用这个模式，从前期的二次元动漫一体化直接过渡到三次元网剧，是「2.5次元」的概念，目前网剧口碑形势一片大好，后期可能直接延伸到真人电影、然后是游戏。还有少数一些是漫画直接跳到游戏。 从以上三种变现模式来看，目前国内的「IP投资」基本处于探索阶段。 万达的大型主题乐园虽然会借鉴一些中国的传统神话故事，但是还没到纯通过漫画直接到衍生品的程度。这是因为国内衍生品绝大多数是毛绒玩具，作品本身从启动之初也没有设想好衍生品这条路。相反，如果一开始就想好要做衍生品，就可以先做衍生品授权再逐渐构思前期的作品属性，这很可能是奥飞接下去的主要战略——用手里的IP搭配生产力，主动根据下游选择做什么样的动漫。 「IP变现」模式比较适合玄幻类的作品。基于现在的国内动漫技术水平而言，诸如《十万个冷笑话》这种角色夸张、故事主线完全脱离现实的作品，很难直接转化为真人作品。如果资金很充足，可以像《大鱼海棠》、《大圣归来》一样做动画大电影或者直接做游戏。成本高风险大，但是也可以带来大量变现机会。 反而是女生偏好的都市言情题材，因为情节、人物贴近现实从而和真人作品很搭，「打破次元壁」模式也是三种模式里成本最低的。 总之，三种模式并非完全独立的关系，随着资金和实力的积攒，可以生发出更多的选择组合。漫画根本上还一个是「小体量，大能量」的东西，更多的是一个泛IP的代名词，是一种从其本身产生IP或让IP效应增强的有效手段。也就是说，只有广泛的结合电影、网剧、游戏、衍生品等众多形式，才能将IP的触达乘以10甚至100。而且无论哪一种模式，很多时候公司都会先通过低成本的漫画「试水」，如果漫画不成功就没有必要再往下深度投入，这就是投资IP的保守之路。', ' ', 0, 957),
(28, '这也是有中国特色的变现模式', '这也是有中国特色的变现模式', ' ', 0, 13),
(29, '这也是有中国特色的变现模式，即先通过漫画获得一定的原创IP知名度，再通过动画放大IP的价值，后期还有可能制作大电影，并同时推出游戏。比如《十万个冷笑', '这也是有中国特色的变现模式，即先通过漫画获得一定的原创IP知名度，再通过动画放大IP的价值，后期还有可能制作大电影，并同时推出游戏。比如《十万个冷笑这也是有中国特色的变现模式，即先通过漫画获得一定的原创IP知名度，再通过动画放大IP的价值，后期还有可能制作大电影，并同时推出游戏。比如《十万个冷笑这也是有中国特色的变现模式，即先通过漫画获得一定的原创IP知名度，再通过动画放大IP的价值，后期还有可能制作大电影，并同时推出游戏。比如《十万个冷笑这也是有中国特色的变现模式，即先通过漫画获得一定的原创IP知名度，再通过动画放大IP的价值，后期还有可能制作大电影，并同时推出游戏。比如《十万个冷笑这也是有中国特色的变现模式，即先通过漫画获得一定的原创IP知名度，再通过动画放大IP的价值，后期还有可能制作大电影，并同时推出游戏。比如《十万个冷笑这也是有中国特色的变现模式，即先通过漫画获得一定的原创IP知名度，再通过动画放大IP的价值，后期还有可能制作大电影，并同时推出游戏。比如《十万个冷笑这也是有中国特色的变现模式，即先通过漫画获得一定的原创IP知名度，再通过动画放大IP的价值，后期还有可能制作大电影，并同时推出游戏。比如《十万个冷笑这也是有中国特色的变现模式，即先通过漫画获得一定的原创IP知名度，再通过动画放大IP的价值，后期还有可能制作大电影，并同时推出游戏。比如《十万个冷笑这也是有中国特色的变现模式，即先通过漫画获得一定的原创IP知名度，再通过动画放大IP的价值，后期还有可能制作大电影，并同时推出游戏。比如《十万个冷笑', ' ', 0, 666);

-- --------------------------------------------------------

--
-- 表的结构 `zhuce`
--

CREATE TABLE `zhuce` (
  `id` int(11) NOT NULL,
  `yonghuming` varchar(11) CHARACTER SET utf8 NOT NULL COMMENT '用户名',
  `mima` varchar(11) CHARACTER SET utf8 NOT NULL COMMENT '密码',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `zhuce`
--

INSERT INTO `zhuce` (`id`, `yonghuming`, `mima`, `time`) VALUES
(1, 'sgh', '123', '2016-12-15 16:00:00'),
(39, '  ', '7215ee9c7d9', '2016-12-09 10:34:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `shuju`
--
ALTER TABLE `shuju`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zhuce`
--
ALTER TABLE `zhuce`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `shuju`
--
ALTER TABLE `shuju`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- 使用表AUTO_INCREMENT `zhuce`
--
ALTER TABLE `zhuce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
