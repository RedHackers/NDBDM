-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-09 16:01:44
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rh`
--

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1498465573),
('m130524_201442_init', 1498465577);

-- --------------------------------------------------------

--
-- 表的结构 `rh_activity_attend`
--

CREATE TABLE `rh_activity_attend` (
  `activity_id` mediumint(8) UNSIGNED NOT NULL COMMENT '活动id',
  `member_name` varchar(15) NOT NULL COMMENT '成员名称',
  `activity_sort` varchar(20) NOT NULL COMMENT '活动类型'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rh_activity_attend`
--

INSERT INTO `rh_activity_attend` (`activity_id`, `member_name`, `activity_sort`) VALUES
(1, '李想', '竞赛'),
(2, '贾靖宇', '竞赛'),
(3, '崔立骁', '体育'),
(4, '周睿', '体育'),
(5, '贾靖宇', '志愿'),
(6, '崔立骁', '志愿');

-- --------------------------------------------------------

--
-- 表的结构 `rh_activity_info`
--

CREATE TABLE `rh_activity_info` (
  `activity_name` varchar(20) NOT NULL COMMENT '活动名称',
  `activity_detail` text NOT NULL COMMENT '活动内容',
  `activity_pic` varchar(255) NOT NULL COMMENT '活动图片',
  `activity_id` mediumint(8) UNSIGNED NOT NULL COMMENT '活动id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rh_activity_info`
--

INSERT INTO `rh_activity_info` (`activity_name`, `activity_detail`, `activity_pic`, `activity_id`) VALUES
('密码学竞赛', '“没有网络安全就没有国家安全”，密码是保障网络空间和信息安全的核心技术。为进一步提高我国高校学生的信息安全意识，普及密码知识，实践密码技术，发现密码人才，鼓励创新思维，增进团队协作，推动我国密码技术的发展和应用，中国密码学会定于2017年9月至11月举办第三届全国密码技术竞赛（含初赛、复赛、决赛三个阶段）。', 'competition1.jpg', 1),
('信息安全大赛', '2017年第十届全国大学生信息安全竞赛由教育部高等学校信息安全专业教学指导委员会主办，由西安电子科技大学承办。本次竞赛的目的，是为培养、选拔、推荐优秀信息安全专业人才创造条件，促进高等学校信息安全专业课程体系、教学内容和方法的改革，培养学生的创新意识与团队合作精神，普及信息安全知识，增强学生信息安全意识。', 'competition2.jpg', 2),
('篮球比赛', '篮球比赛即根据篮球运动进行的比赛，篮球比赛的形式多种多样，有较为常见的五人篮球，也有最流行的街头三人篮球赛，是三对三的比赛，更讲究个人技术。', 'sport1.jpg', 3),
('排球比赛', '排球比赛是两队在由球网分开的场地上进行比赛的集体项目。它可以有多种比赛方式，以适应各种不同性质比赛的需求，从而不断推动该项运动的广泛开展。 \n比赛的目的，是各队遵照规则，将球击过球网，使其落在对方场区的地面上，而防止球落在本方场区的地面上。每队可击球3次(拦网触球除外)将球击回对区。', 'sport2.jpg', 4),
('图书馆志愿者活动', '为了培养志愿者们的服务热情和对志愿工作的态度，体验图书馆工作人员的辛苦，从而使他们能自觉遵守图书馆的有关规定，懂得珍惜图书馆工作人员的劳动成果，同时把爱心传递给周围的人，影响并带动更多的人奉献爱心，让志愿者们体会生活的不易，更好的充实自己。', 'voluntary1.jpg', 5),
('马拉松志愿者活动', '参与这项活动能让我们学会树立大局意识、服务意识和学习意识；并且感受到责任 的意义，；我们在参与的过程中能全身心的投入、坚守岗位，以高质量的志愿服务水平为赛事添加光彩。', 'voluntary1.jpg', 6);

-- --------------------------------------------------------

--
-- 表的结构 `rh_activity_show`
--

CREATE TABLE `rh_activity_show` (
  `activity_show_id` mediumint(10) NOT NULL,
  `activity_show_name` varchar(20) NOT NULL COMMENT '展示活动名称',
  `activity_show_detail` text NOT NULL COMMENT '展示活动介绍',
  `activity_show_pic` varchar(20) NOT NULL COMMENT '展示活动图片'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rh_activity_show`
--

INSERT INTO `rh_activity_show` (`activity_show_id`, `activity_show_name`, `activity_show_detail`, `activity_show_pic`) VALUES
(1, '密码学竞赛', '“没有网络安全就没有国家安全”，密码是保障网络空间和信息安全的核心技术。为进一步提高我国高校学生的信息安全意识，普及密码知识，实践密码技术，发现密码人才，鼓励创新思维，增进团队协作，推动我国密码技术的发展和应用，中国密码学会定于2017年9月至11月举办第三届全国密码技术竞赛（含初赛、复赛、决赛三个阶段）。', '密码学竞赛.jpg'),
(2, '信息安全大赛', '2017年第十届全国大学生信息安全竞赛由教育部高等学校信息安全专业教学指导委员会主办，由西安电子科技大学承办。本次竞赛的目的，是为培养、选拔、推荐优秀信息安全专业人才创造条件，促进高等学校信息安全专业课程体系、教学内容和方法的改革，培养学生的创新意识与团队合作精神，普及信息安全知识，增强学生信息安全意识。', '信息安全大赛.jpg'),
(3, '图书馆志愿者活动', '为了培养志愿者们的服务热情和对志愿工作的态度，体验图书馆工作人员的辛苦，从而使他们能自觉遵守图书馆的有关规定，懂得珍惜图书馆工作人员的劳动成果，同时把爱心传递给周围的人，影响并带动更多的人奉献爱心，让志愿者们体会生活的不易，更好的充实自己。', '图书馆志愿者活动,jpg'),
(4, '篮球比赛', '篮球比赛即根据篮球运动进行的比赛，篮球比赛的形式多种多样，有较为常见的五人篮球，也有最流行的街头三人篮球赛，是三对三的比赛，更讲究个人技术。', '篮球比赛.jpg'),
(5, '排球比赛', '排球比赛是两队在由球网分开的场地上进行比赛的集体项目。它可以有多种比赛方式，以适应各种不同性质比赛的需求，从而不断推动该项运动的广泛开展。 \r\n比赛的目的，是各队遵照规则，将球击过球网，使其落在对方场区的地面上，而防止球落在本方场区的地面上。每队可击球3次(拦网触球除外)将球击回对区。', '排球比赛.jpg'),
(6, '马拉松志愿者活动', '参与这项活动能让我们学会树立大局意识、服务意识和学习意识；并且感受到责任 的意义，；我们在参与的过程中能全身心的投入、坚守岗位，以高质量的志愿服务水平为赛事添加光彩。', '马拉松志愿者活动.jpg'),
(7, '田野比赛', '这醉人的风光，那么美丽，那么朴素。当我们还眷恋着这世俗的喧嚣，也许永远也体会不到田野里那自然的美。如果累了，停下脚步吧，来领略一下大自然赐予我们的这个朴素的，醉人的田野风光吧！', '田野比赛.jpg'),
(8, '歌手大赛', '来吧，让那麦克风失去它的光芒 ', '歌手大赛.jpg'),
(9, '汉字书写比赛', '传魏晋之遗风 创古今书法之大成', '汉字书写比赛.jpg'),
(10, '足球比赛', '竞技绿茵，激情人生。\r\n', '足球比赛.jpg'),
(11, '舞蹈大会', '塑造魅力气质，打造曼妙舞姿', '舞蹈大会.jpg'),
(12, '乒乓球比赛', '乒乓有形，快乐无限', '乒乓球比赛.jpg'),
(13, '电竞比赛', '梦想的原点，等你战出新高度', '电竞比赛.jpg'),
(14, '安全急救培训', '在津南校区大通学生中心开展了安全急救专题培训，以进一步增强学生急救意识、提高急救能力。', '安全急救培训.jpg'),
(15, '参观IT企业', '到麒麟公司、国家超级计算天津中心、天津中科智能识别产业技术研究院进行参观', '参观IT企业.jpg'),
(16, '茶道文化体验', '汉语言文化学院王居尚老师与同学们分享了茶道文化，并现场演示了茶艺', '茶道文化体验.jpg'),
(17, '腾讯HR讲解简历制作', '同学们纷纷表示，通过此次讲座，不仅学习了简历制作的技巧，更感受到了互联网行业就业的机遇与挑战，受益匪浅。', '简历制作.jpg'),
(18, '国创百项交流会', '本次国创百项交流会是计算机与控制工程学院举办的“创享视界”首届科技文化节的一项。', '国创百项交流会.jpg'),
(19, '工业自动化展览', '到天津梅江会展中心参观国际工业自动化技术装备展览会，领略当代计算机科学和人工智能技术的前沿风采。', '工业自动化展览.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `rh_background_admin`
--

CREATE TABLE `rh_background_admin` (
  `adminID` char(15) NOT NULL COMMENT '管理员编号',
  `admin_password` char(32) NOT NULL COMMENT '管理员密码'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `rh_info_link`
--

CREATE TABLE `rh_info_link` (
  `link_name` varchar(20) NOT NULL COMMENT '链接名',
  `link_url` varchar(255) NOT NULL COMMENT '链接地址'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rh_info_link`
--

INSERT INTO `rh_info_link` (`link_name`, `link_url`) VALUES
('南开大学', 'http://www.nankai.edu.cn/'),
('南开大学数据库与信息系统实验室', 'http://222.30.51.81/dbis/frontend/web/index.php'),
('南开大学计算机与控制工程学院', 'http://cc.nankai.edu.cn/');

-- --------------------------------------------------------

--
-- 表的结构 `rh_member_info`
--

CREATE TABLE `rh_member_info` (
  `member_name` varchar(15) NOT NULL COMMENT '成员名称',
  `member_major` varchar(20) NOT NULL COMMENT '成员专业',
  `live_pic_id` mediumint(8) UNSIGNED NOT NULL COMMENT '成员图片id',
  `member_degree` varchar(20) NOT NULL COMMENT '成员学历',
  `member_duty` varchar(20) NOT NULL COMMENT '成员职务',
  `member_interest` varchar(20) NOT NULL COMMENT '成员兴趣方向',
  `member_email` char(40) NOT NULL COMMENT '成员电子邮箱',
  `member_live` text NOT NULL COMMENT '成员经历'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rh_member_info`
--

INSERT INTO `rh_member_info` (`member_name`, `member_major`, `live_pic_id`, `member_degree`, `member_duty`, `member_interest`, `member_email`, `member_live`) VALUES
('周睿', '信息安全与法学', 1, '本科在读', '团员', '信息安全与法学', 'zhourui@qq.com', '追逐于信息安全与法学,\r\n执着于渗透利用与漏洞,\r\n思索于过去现在与将来,\r\n成长于自己社会与所在.\r\n前进于安全的道路上,不断拼搏!'),
('崔立骁', '信息安全与法学', 1, '本科在读', '团员', '信息安全与法学', 'cuilixiao@qq.com', '追逐于信息安全与法学,\r\n执着于渗透利用与漏洞,\r\n思索于过去现在与将来,\r\n成长于自己社会与所在.\r\n前进于安全的道路上,不断拼搏!'),
('李想', '信息安全与法学', 1, '本科在读', '团员', '信息安全与法学', 'lixang@qq.com', '追逐于信息安全与法学,\r\n执着于渗透利用与漏洞,\r\n思索于过去现在与将来,\r\n成长于自己社会与所在.\r\n前进于安全的道路上,不断拼搏!'),
('贾靖宇', '信息安全与法学', 1, '本科在读', '团员', '信息安全与法学', 'jingjiayu@qq.com', '追逐于信息安全与法学,\r\n执着于渗透利用与漏洞,\r\n思索于过去现在与将来,\r\n成长于自己社会与所在.\r\n前进于安全的道路上,不断拼搏!');

-- --------------------------------------------------------

--
-- 表的结构 `rh_member_live`
--

CREATE TABLE `rh_member_live` (
  `member_name` varchar(15) NOT NULL COMMENT '成员名称',
  `live_pic_id` mediumint(8) UNSIGNED NOT NULL COMMENT '成员图片id',
  `live_pic` varchar(255) NOT NULL COMMENT '成员图片'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rh_member_live`
--

INSERT INTO `rh_member_live` (`member_name`, `live_pic_id`, `live_pic`) VALUES
('周睿', 1, '周睿1.jpg'),
('周睿', 2, '周睿2.jpg'),
('周睿', 3, '周睿3.jpg'),
('周睿', 4, '周睿4.jpg'),
('崔立骁', 1, '崔立骁1.jpg'),
('崔立骁', 2, '崔立骁2.jpg'),
('崔立骁', 3, '崔立骁3.jpg'),
('崔立骁', 4, '崔立骁4.jpg'),
('李想', 1, '李想1.jpg'),
('李想', 2, '李想2.jpg'),
('李想', 3, '李想3.jpg'),
('李想', 4, '李想4.jpg'),
('贾靖宇', 1, '贾靖宇1.jpg'),
('贾靖宇', 2, '贾靖宇2.jpg'),
('贾靖宇', 3, '贾靖宇3.jpg'),
('贾靖宇', 4, '贾靖宇4.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `rh_note_record`
--

CREATE TABLE `rh_note_record` (
  `user_name` varchar(15) NOT NULL COMMENT '用户名称',
  `note_email` char(40) NOT NULL COMMENT '留言邮箱',
  `note_content` text NOT NULL COMMENT '留言内容',
  `note_id` mediumint(8) UNSIGNED NOT NULL COMMENT '留言id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rh_note_record`
--

INSERT INTO `rh_note_record` (`user_name`, `note_email`, `note_content`, `note_id`) VALUES
('Alice', 'Alice@gmail.com', '每一次拜访是不变的思念，\r\n每一条留言是真情的流露.\r\n平平安安是我一生的心愿.\r\n快快乐乐是我一世的祝愿.\r\n网 络 传 送 着 关 怀\r\n空 间 增 添 着 色 彩\r\n回 访 加 深 着 友 爱\r\n祝朋友天天开心 幸福永远!!', 1),
('Barry', 'Barry@gmail.com', '百度存知己. 网络若比邻.\r\n虽隔千万里. 时刻心连心.\r\n高兴报报喜. 心烦觅知音.\r\n互相多勉励. 事业有雄心.\r\n天天见一面. 心平气又稳.\r\n有空踩脚印. 没空留个影.\r\n网友千千万. 回想个个亲.', 2),
('Harry', 'Harry@qq.com', '相遇是缘，相知是份，相遇又相知是缘分，\r\n有缘为朋友，惜缘为知己，\r\n让我们用真诚的心，\r\n好好的珍惜这份缘吧!\r\n周末愉快!\r\n友情的延续来自心灵，不论联系有多少，\r\n只要内心留有彼此的一片天空，\r\n那么偶尔一声问候就会带来会心的一笑，\r\n就会发现在某个地方还有一个人在牵挂着你! 祝开心每一天!', 3),
('Jing Xiang', 'Jingxiang@qq.com', '真情的延续来自心灵，\r\n无论联系有多少，\r\n只需内心留有彼此的一片天空，\r\n那么偶尔一声问候就会带来会心的一笑，\r\n就会发现在某个地方有个朋友在祝福着你。', 4),
('Felicity', 'Felicity@163.com', '好久没来看你了，呵呵!别介意噢!\r\n有种心情,天天传递,依然纯朴;\r\n有种经历,事隔多日,依然怀念;\r\n有种问候,清清淡淡,却最真诚!\r\n…━*祝你*永远*幸福*快乐*━…', 5),
('Lamen', 'Lamen@gmail.com', '祝愿，插上翅膀飞到你身旁\r\n福音，微风送轻轻到你耳边\r\n真情，从嘴说出入到你心坎\r\n祝福，信息传到你美丽空间', 6),
('Bai He', 'Baihe@qq.com', '一天一个太阳点燃新的希望\r\n一天一个梦想祝你幸福安康\r\n一天一个故事每天都不寻常\r\n一天一份祝福天天心情舒畅', 7),
('Yang Jie', 'Yangjie@qq.com', '好朋友是美梦，谁都企盼\r\n好朋友是赤金，永远灿烂\r\n好朋友是情缘，一世牵伴\r\n好朋友是心路，越走越宽\r\n好朋友是洪福，吉祥无边', 8);

-- --------------------------------------------------------

--
-- 表的结构 `rh_note_show`
--

CREATE TABLE `rh_note_show` (
  `note_id` mediumint(8) UNSIGNED NOT NULL COMMENT '留言id',
  `note_show_id` int(8) UNSIGNED NOT NULL COMMENT '留言展示序号'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rh_note_show`
--

INSERT INTO `rh_note_show` (`note_id`, `note_show_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(5, 5),
(6, 4),
(8, 6);

-- --------------------------------------------------------

--
-- 表的结构 `rh_team_info`
--

CREATE TABLE `rh_team_info` (
  `team_name` varchar(255) NOT NULL COMMENT '团队名称',
  `team_num` int(5) NOT NULL DEFAULT '1' COMMENT '团队成员',
  `team_dir` varchar(255) NOT NULL COMMENT '团队方向',
  `team_motto` varchar(255) NOT NULL COMMENT '团队格言',
  `team_pic` varchar(255) NOT NULL COMMENT '团队图片',
  `team_intro` text NOT NULL COMMENT '团队介绍'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `rh_team_info`
--

INSERT INTO `rh_team_info` (`team_name`, `team_num`, `team_dir`, `team_motto`, `team_pic`, `team_intro`) VALUES
('RedHackers', 4, '追逐于信息安全与法学,\r\n执着于渗透利用与漏洞,\r\n思索于过去现在与将来,\r\n成长于自己社会与所在.\r\nRedHackers团队,前进于安全的道路上,不断拼搏!', '挑战不可能, 做信安的强者！', 'team.png', '追逐于信息安全与法学,\r\n执着于渗透利用与漏洞,\r\n思索于过去现在与将来,\r\n成长于自己社会与所在.\r\nRedHackers团队,前进于安全的道路上,不断拼搏!');

-- --------------------------------------------------------

--
-- 表的结构 `rh_team_server`
--

CREATE TABLE `rh_team_server` (
  `server_name` varchar(20) NOT NULL COMMENT '服务名称',
  `server_member_num` int(5) NOT NULL DEFAULT '0' COMMENT '服务人数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'idealeer', 'gq1_UNkYAiU6EmsiXZr7Kcs3FLeBcKfk', '$2y$13$uyN1bG4QTVHy.tc/0q3cs.a0YwnGaOSaW1Arn.lNrC0B3hN3J3/Rm', NULL, 'idealeer521@gmail.com', 10, 1498465983, 1498465983);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `rh_activity_attend`
--
ALTER TABLE `rh_activity_attend`
  ADD PRIMARY KEY (`activity_id`),
  ADD KEY `member_name` (`member_name`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `rh_activity_info`
--
ALTER TABLE `rh_activity_info`
  ADD PRIMARY KEY (`activity_id`);

--
-- Indexes for table `rh_activity_show`
--
ALTER TABLE `rh_activity_show`
  ADD PRIMARY KEY (`activity_show_id`);

--
-- Indexes for table `rh_background_admin`
--
ALTER TABLE `rh_background_admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `rh_info_link`
--
ALTER TABLE `rh_info_link`
  ADD PRIMARY KEY (`link_name`);

--
-- Indexes for table `rh_member_info`
--
ALTER TABLE `rh_member_info`
  ADD PRIMARY KEY (`member_name`),
  ADD KEY `live_pic_id` (`live_pic_id`);

--
-- Indexes for table `rh_member_live`
--
ALTER TABLE `rh_member_live`
  ADD PRIMARY KEY (`member_name`,`live_pic_id`),
  ADD KEY `live_pic_id` (`live_pic_id`);

--
-- Indexes for table `rh_note_record`
--
ALTER TABLE `rh_note_record`
  ADD PRIMARY KEY (`note_id`),
  ADD KEY `note_id` (`note_id`);

--
-- Indexes for table `rh_note_show`
--
ALTER TABLE `rh_note_show`
  ADD PRIMARY KEY (`note_show_id`),
  ADD KEY `note_id` (`note_id`);

--
-- Indexes for table `rh_team_info`
--
ALTER TABLE `rh_team_info`
  ADD PRIMARY KEY (`team_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `rh_activity_show`
--
ALTER TABLE `rh_activity_show`
  MODIFY `activity_show_id` mediumint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- 使用表AUTO_INCREMENT `rh_note_record`
--
ALTER TABLE `rh_note_record`
  MODIFY `note_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '留言id', AUTO_INCREMENT=13;
--
-- 使用表AUTO_INCREMENT `rh_note_show`
--
ALTER TABLE `rh_note_show`
  MODIFY `note_show_id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '留言展示序号', AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 限制导出的表
--

--
-- 限制表 `rh_activity_attend`
--
ALTER TABLE `rh_activity_attend`
  ADD CONSTRAINT `rh_activity_attend_ibfk_1` FOREIGN KEY (`member_name`) REFERENCES `rh_member_info` (`member_name`),
  ADD CONSTRAINT `rh_activity_attend_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `rh_activity_info` (`activity_id`);

--
-- 限制表 `rh_member_info`
--
ALTER TABLE `rh_member_info`
  ADD CONSTRAINT `rh_member_info_ibfk_1` FOREIGN KEY (`live_pic_id`) REFERENCES `rh_member_live` (`live_pic_id`);

--
-- 限制表 `rh_note_show`
--
ALTER TABLE `rh_note_show`
  ADD CONSTRAINT `rh_note_show_ibfk_1` FOREIGN KEY (`note_id`) REFERENCES `rh_note_record` (`note_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
