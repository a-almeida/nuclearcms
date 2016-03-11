-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Mar-2016 às 21:45
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `nuclearcms_github`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `info_site`
--

CREATE TABLE IF NOT EXISTS `info_site` (
  `infoID` int(11) NOT NULL,
  `infoKEY` varchar(255) NOT NULL,
  `infoVALUE` text NOT NULL,
  `infoVIEW` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `info_site`
--

INSERT INTO `info_site` (`infoID`, `infoKEY`, `infoVALUE`, `infoVIEW`) VALUES
(0, 'logotipo', 'logotipos/logonuclear2__DATE__1457707257.png', 1),
(1, 'title', 'NuclearCMS Your Project', 1),
(2, 'description', 'Webdeveloper Power Supply to your next web project', 1),
(3, 'address', '', 1),
(4, 'CEP', '', 1),
(5, 'city', 'Nuclear', 1),
(6, 'country', 'Cms', 1),
(7, 'phone1', '', 1),
(8, 'phone2', '', 1),
(9, 'fax', '', 1),
(10, 'email', 'youremail@nuclearcms.com', 1),
(11, '_gps', '', 1),
(12, 'facebook', 'https://www.facebook.com/nuclearcms', 1),
(13, 'google', '', 1),
(14, 'linkedin', '', 1),
(15, 'dbsize', '59681', 0),
(16, 'disksize', '22002184', 0),
(17, 'totalviews', '200', 0),
(18, 'totalusers', '61', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `menus`
--

CREATE TABLE IF NOT EXISTS `menus` (
  `menuID` int(11) NOT NULL,
  `menuORDER` int(11) NOT NULL,
  `menuGROUP` int(11) NOT NULL,
  `menuNAME` varchar(50) NOT NULL,
  `menuLINK` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `menus`
--

INSERT INTO `menus` (`menuID`, `menuORDER`, `menuGROUP`, `menuNAME`, `menuLINK`) VALUES
(1, 1, 0, 'home', 'home'),
(2, 2, 0, 'demo', 'demonstration'),
(3, 3, 0, 'download', 'downloads'),
(4, 4, 0, 'Documentation', 'documentation'),
(5, 5, 0, 'github', 'https://github.com/joelviseu/nuclearcms');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `articlesID` int(11) NOT NULL,
  `articlesNAME` varchar(70) NOT NULL,
  `articlesSLUG` varchar(70) NOT NULL,
  `articlesTITLE` varchar(70) NOT NULL,
  `articlesSUBTITLE` varchar(180) NOT NULL,
  `articlesTEXT` text NOT NULL,
  `articlesIMG` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pages`
--

INSERT INTO `pages` (`articlesID`, `articlesNAME`, `articlesSLUG`, `articlesTITLE`, `articlesSUBTITLE`, `articlesTEXT`, `articlesIMG`) VALUES
(1, 'home', 'home', 'NUCLEARcms', 'webdeveloper power supply', '<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum eros, at imperdiet ligula. Fusce aliquam diam nec purus porttitor posuere. Mauris ultrices euismod eros, a dictum orci interdum id. Curabitur vehicula consectetur ligula quis blandit. Ut tristique urna nec dapibus tristique. Aenean tincidunt pellentesque diam. Donec urna metus, vestibulum sit amet ultricies at, posuere in arcu. Nullam tincidunt ac ligula sed congue. Nunc id vestibulum neque. Nulla at molestie odio, a vulputate sapien. Curabitur accumsan bibendum nisi ac varius. Nunc sed pretium dolor. Pellentesque sed pharetra elit. Vivamus auctor auctor efficitur.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Nunc iaculis faucibus tristique. Sed ultrices pellentesque lectus ac luctus. Aliquam vitae felis elementum, egestas dui et, convallis nunc. Nunc quam velit, mattis non condimentum in, interdum sit amet mi. Curabitur vel arcu rhoncus, rhoncus sem eget, bibendum purus. Ut malesuada sodales urna, sed malesuada dui fringilla eget. Vivamus vitae nisl pretium, varius dui laoreet, fermentum enim. Duis fringilla ullamcorper risus, sed maximus nibh sagittis vitae. In vehicula purus nisi, ac ultrices lacus ullamcorper nec. Maecenas in semper neque.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">In vel volutpat lacus. Vivamus sodales, enim vitae tempor viverra, ipsum diam hendrerit augue, sit amet blandit augue nisl volutpat purus. Vestibulum in dolor quis nulla volutpat pharetra. Praesent vitae vehicula sapien. Cras tincidunt urna ac fringilla ultrices. Nam ornare, massa a viverra egestas, augue dui tempus erat, ac vulputate lacus augue ac ex. Nullam vel volutpat massa. In non ornare nisi. Morbi quam dolor, accumsan non aliquet ut, convallis sed dolor. Quisque id lorem id nulla iaculis faucibus eu in nulla. Suspendisse in interdum arcu, id maximus ipsum. Maecenas lobortis blandit leo, mattis finibus urna maximus vitae. Mauris vitae sagittis urna, id feugiat mi. Proin luctus risus non sagittis egestas.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Integer dolor diam, egestas eu rutrum et, euismod vel lorem. Quisque eget dictum tellus. Duis hendrerit risus eu purus placerat varius. Vestibulum urna tortor, mollis suscipit pulvinar eu, gravida nec ligula. Duis magna eros, vulputate ac iaculis a, pellentesque in risus. Praesent scelerisque euismod feugiat. Ut sit amet nunc felis. Praesent iaculis commodo nunc et lobortis. Integer nec sagittis metus, sed sagittis diam.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Ut in mi at urna dictum lacinia. Duis luctus, quam quis lacinia condimentum, nisl dui tempus enim, eu tincidunt risus nulla sed massa. Quisque et turpis a erat mattis ultricies. Maecenas aliquam diam lectus, eu congue leo posuere vitae. Integer consequat ex nec ex sagittis ullamcorper ac ac ex. Duis interdum ligula ac ornare tincidunt. Nulla facilisi. Cras elementum cursus varius. Nunc vitae massa ipsum. Curabitur sit amet interdum ligula. Morbi non lacus eu urna mollis tempus. Donec sed dapibus massa, ut fringilla odio.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Aliquam lobortis quam quam, id interdum lorem luctus eget. Aenean pretium enim sit amet ex posuere, nec dapibus ipsum interdum. Vestibulum sagittis ac mauris sed consectetur. Nulla eros lectus, suscipit vel luctus eu, suscipit quis augue. Mauris nec congue mauris. Maecenas vulputate et turpis facilisis efficitur. Ut metus sapien, venenatis vitae viverra eget, facilisis et sem. Suspendisse tortor libero, venenatis eget lorem quis, condimentum porta neque. Nulla viverra, purus et varius iaculis, lorem justo suscipit turpis, et molestie lectus dolor non orci. Praesent eget ante eros.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Nullam vel egestas ante. Fusce ut cursus lorem, vel lacinia quam. Proin dignissim, orci ut viverra placerat, risus tortor vulputate mauris, eu gravida quam eros at erat. Sed varius eros in consequat venenatis. Mauris lectus metus, congue quis enim et, rhoncus aliquam libero. Maecenas varius quam nec quam lobortis mattis. Aliquam pulvinar est eu ipsum congue, et euismod tellus tincidunt. Quisque placerat sem placerat nunc gravida pulvinar a non ligula. Curabitur ut nunc volutpat, luctus ex ac, cursus ipsum. Cras laoreet feugiat viverra. Proin a ex luctus, pulvinar nisi ut, varius tellus. Maecenas consequat nunc vel mauris pharetra, quis iaculis eros egestas. Nullam eget metus sed tellus mattis tristique id et dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam pharetra massa quis velit vulputate, vel volutpat libero egestas. Suspendisse potenti.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Fusce tincidunt feugiat est id rutrum. Curabitur finibus, leo sit amet hendrerit feugiat, massa velit sollicitudin leo, eu efficitur turpis ante sit amet nibh. Morbi at magna efficitur, finibus tellus vel, faucibus diam. Pellentesque sed semper diam, id finibus sapien. Morbi vel pellentesque augue. Aliquam cursus eleifend dui, quis finibus ligula viverra ut. Aenean a eleifend erat. Maecenas facilisis gravida nisl, at commodo neque. Mauris ligula ligula, lobortis a augue ac, posuere euismod lectus. Nunc sapien lorem, rutrum et convallis vel, cursus vestibulum sem. Suspendisse sit amet nulla luctus, pellentesque tortor hendrerit, semper odio. Sed placerat diam et ligula convallis pharetra. In nec ultricies augue, id finibus nisl. Nullam rutrum magna mollis elit porta dictum. Nunc id vestibulum quam.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Mauris lacinia mi sit amet ligula faucibus, sit amet ultrices purus ultrices. Duis feugiat cursus purus in lacinia. Mauris varius sapien nec nulla faucibus, quis rutrum tellus porttitor. Sed accumsan metus id ipsum scelerisque, et pretium dolor tempor. Etiam sagittis sapien augue. Vestibulum rutrum, eros vitae viverra commodo, erat velit sollicitudin risus, quis dictum leo ante luctus eros. Nulla vulputate faucibus magna, at consequat tortor molestie ut. Sed nec lorem hendrerit, efficitur metus sed, egestas dolor. Sed sed maximus nunc. Nullam nibh augue, rhoncus vitae elit et, gravida faucibus risus. Vivamus cursus ante enim, id faucibus diam mollis ac.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Donec placerat consequat lorem sit amet pretium. Pellentesque vel pharetra turpis, eu vehicula magna. Suspendisse malesuada mauris id condimentum imperdiet. Fusce at nulla finibus, laoreet ipsum in, auctor massa. Quisque neque lacus, dictum ut iaculis in, vestibulum sed ex. Nulla velit orci, dapibus vel tempor vitae, consequat sed magna. Nam eget interdum ipsum. Quisque pretium sapien sed tristique auctor.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Nunc a metus ornare, aliquam leo nec, laoreet velit. Pellentesque eu purus quis velit malesuada mollis. Sed finibus eu tortor congue auctor. Morbi tortor augue, mollis at dictum vel, rhoncus et lacus. Nam lobortis malesuada vulputate. Ut vel interdum ex. Donec pretium est eu ante feugiat, ut lacinia mauris posuere. Sed ac ipsum aliquet, imperdiet turpis id, scelerisque nibh. Pellentesque consequat ipsum id mauris aliquet lobortis vitae dapibus nunc. Quisque vitae lorem eget massa imperdiet lobortis. Proin pellentesque, dui non mollis fringilla, eros eros faucibus quam, vitae sagittis lacus urna at orci. Vestibulum lectus magna, ultrices at tincidunt posuere, gravida sed nisi. Phasellus a erat eros.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Praesent quis condimentum neque. Morbi laoreet massa et lacus pretium, vitae lobortis felis pulvinar. Proin dignissim dapibus dui, vel pretium tortor interdum tristique. Pellentesque volutpat ante a tellus vestibulum convallis. Donec eget commodo purus. Cras scelerisque tortor purus, vel posuere neque efficitur quis. Nunc non tristique nibh. Proin at condimentum lacus, a rhoncus magna. Etiam egestas, ipsum in iaculis sagittis, mauris dui ultrices turpis, sed tincidunt massa massa ac urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam cursus, felis in placerat efficitur, orci lorem eleifend arcu, in euismod purus nunc quis tortor. Donec tincidunt justo non nulla accumsan scelerisque. Donec lacinia mauris ut velit aliquet, at finibus ex dignissim. Pellentesque erat velit, lobortis vel semper nec, pharetra quis quam. Vestibulum non pharetra felis, ac sollicitudin odio. Aliquam tempor urna massa, sed finibus justo semper quis.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Sed sit amet facilisis nisi, ac auctor sapien. Mauris sed neque at est viverra fringilla ac tristique nunc. Proin ultrices metus in enim volutpat, quis faucibus lectus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc faucibus gravida eleifend. Suspendisse potenti. Aliquam varius, leo vel pellentesque dignissim, nisl ex fringilla tellus, vulputate rutrum arcu mauris non magna. Cras sed nisl eu enim commodo pulvinar ut non sem.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">In hac habitasse platea dictumst. Curabitur semper placerat eros, convallis porta metus tempus non. Praesent fermentum tincidunt tincidunt. Proin in lacus nec lectus venenatis malesuada vestibulum a orci. Curabitur sed finibus arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque euismod diam finibus, ultricies lectus ac, sollicitudin eros.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Donec facilisis viverra diam, vel porta tortor facilisis dapibus. Suspendisse ut magna bibendum, tincidunt magna ac, suscipit magna. Integer et mauris congue, ultrices est eu, mattis enim. Suspendisse volutpat rhoncus aliquam. Vestibulum vestibulum libero vitae consectetur lobortis. Donec odio leo, suscipit vitae orci sed, rutrum pretium nibh. Maecenas molestie tortor sit amet diam ullamcorper, id elementum ex aliquam. Nullam sed ultrices diam. Maecenas et dignissim velit. Nunc consectetur ac purus et pulvinar. Vivamus venenatis viverra dolor ut congue. Cras consequat lobortis nisi, id facilisis nunc fringilla a. Vivamus lobortis quis mauris sit amet tempus. Vivamus vehicula diam vel mauris hendrerit placerat.</p>', 'bannernuclear2__DATE__1457707777.jpg'),
(2, 'demo', 'demonstration', 'demonstration', 'webdeveloper power supply', '<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum eros, at imperdiet ligula. Fusce aliquam diam nec purus porttitor posuere. Mauris ultrices euismod eros, a dictum orci interdum id. Curabitur vehicula consectetur ligula quis blandit. Ut tristique urna nec dapibus tristique. Aenean tincidunt pellentesque diam. Donec urna metus, vestibulum sit amet ultricies at, posuere in arcu. Nullam tincidunt ac ligula sed congue. Nunc id vestibulum neque. Nulla at molestie odio, a vulputate sapien. Curabitur accumsan bibendum nisi ac varius. Nunc sed pretium dolor. Pellentesque sed pharetra elit. Vivamus auctor auctor efficitur.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Nunc iaculis faucibus tristique. Sed ultrices pellentesque lectus ac luctus. Aliquam vitae felis elementum, egestas dui et, convallis nunc. Nunc quam velit, mattis non condimentum in, interdum sit amet mi. Curabitur vel arcu rhoncus, rhoncus sem eget, bibendum purus. Ut malesuada sodales urna, sed malesuada dui fringilla eget. Vivamus vitae nisl pretium, varius dui laoreet, fermentum enim. Duis fringilla ullamcorper risus, sed maximus nibh sagittis vitae. In vehicula purus nisi, ac ultrices lacus ullamcorper nec. Maecenas in semper neque.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">In vel volutpat lacus. Vivamus sodales, enim vitae tempor viverra, ipsum diam hendrerit augue, sit amet blandit augue nisl volutpat purus. Vestibulum in dolor quis nulla volutpat pharetra. Praesent vitae vehicula sapien. Cras tincidunt urna ac fringilla ultrices. Nam ornare, massa a viverra egestas, augue dui tempus erat, ac vulputate lacus augue ac ex. Nullam vel volutpat massa. In non ornare nisi. Morbi quam dolor, accumsan non aliquet ut, convallis sed dolor. Quisque id lorem id nulla iaculis faucibus eu in nulla. Suspendisse in interdum arcu, id maximus ipsum. Maecenas lobortis blandit leo, mattis finibus urna maximus vitae. Mauris vitae sagittis urna, id feugiat mi. Proin luctus risus non sagittis egestas.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Integer dolor diam, egestas eu rutrum et, euismod vel lorem. Quisque eget dictum tellus. Duis hendrerit risus eu purus placerat varius. Vestibulum urna tortor, mollis suscipit pulvinar eu, gravida nec ligula. Duis magna eros, vulputate ac iaculis a, pellentesque in risus. Praesent scelerisque euismod feugiat. Ut sit amet nunc felis. Praesent iaculis commodo nunc et lobortis. Integer nec sagittis metus, sed sagittis diam.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Ut in mi at urna dictum lacinia. Duis luctus, quam quis lacinia condimentum, nisl dui tempus enim, eu tincidunt risus nulla sed massa. Quisque et turpis a erat mattis ultricies. Maecenas aliquam diam lectus, eu congue leo posuere vitae. Integer consequat ex nec ex sagittis ullamcorper ac ac ex. Duis interdum ligula ac ornare tincidunt. Nulla facilisi. Cras elementum cursus varius. Nunc vitae massa ipsum. Curabitur sit amet interdum ligula. Morbi non lacus eu urna mollis tempus. Donec sed dapibus massa, ut fringilla odio.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Aliquam lobortis quam quam, id interdum lorem luctus eget. Aenean pretium enim sit amet ex posuere, nec dapibus ipsum interdum. Vestibulum sagittis ac mauris sed consectetur. Nulla eros lectus, suscipit vel luctus eu, suscipit quis augue. Mauris nec congue mauris. Maecenas vulputate et turpis facilisis efficitur. Ut metus sapien, venenatis vitae viverra eget, facilisis et sem. Suspendisse tortor libero, venenatis eget lorem quis, condimentum porta neque. Nulla viverra, purus et varius iaculis, lorem justo suscipit turpis, et molestie lectus dolor non orci. Praesent eget ante eros.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Nullam vel egestas ante. Fusce ut cursus lorem, vel lacinia quam. Proin dignissim, orci ut viverra placerat, risus tortor vulputate mauris, eu gravida quam eros at erat. Sed varius eros in consequat venenatis. Mauris lectus metus, congue quis enim et, rhoncus aliquam libero. Maecenas varius quam nec quam lobortis mattis. Aliquam pulvinar est eu ipsum congue, et euismod tellus tincidunt. Quisque placerat sem placerat nunc gravida pulvinar a non ligula. Curabitur ut nunc volutpat, luctus ex ac, cursus ipsum. Cras laoreet feugiat viverra. Proin a ex luctus, pulvinar nisi ut, varius tellus. Maecenas consequat nunc vel mauris pharetra, quis iaculis eros egestas. Nullam eget metus sed tellus mattis tristique id et dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam pharetra massa quis velit vulputate, vel volutpat libero egestas. Suspendisse potenti.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Fusce tincidunt feugiat est id rutrum. Curabitur finibus, leo sit amet hendrerit feugiat, massa velit sollicitudin leo, eu efficitur turpis ante sit amet nibh. Morbi at magna efficitur, finibus tellus vel, faucibus diam. Pellentesque sed semper diam, id finibus sapien. Morbi vel pellentesque augue. Aliquam cursus eleifend dui, quis finibus ligula viverra ut. Aenean a eleifend erat. Maecenas facilisis gravida nisl, at commodo neque. Mauris ligula ligula, lobortis a augue ac, posuere euismod lectus. Nunc sapien lorem, rutrum et convallis vel, cursus vestibulum sem. Suspendisse sit amet nulla luctus, pellentesque tortor hendrerit, semper odio. Sed placerat diam et ligula convallis pharetra. In nec ultricies augue, id finibus nisl. Nullam rutrum magna mollis elit porta dictum. Nunc id vestibulum quam.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Mauris lacinia mi sit amet ligula faucibus, sit amet ultrices purus ultrices. Duis feugiat cursus purus in lacinia. Mauris varius sapien nec nulla faucibus, quis rutrum tellus porttitor. Sed accumsan metus id ipsum scelerisque, et pretium dolor tempor. Etiam sagittis sapien augue. Vestibulum rutrum, eros vitae viverra commodo, erat velit sollicitudin risus, quis dictum leo ante luctus eros. Nulla vulputate faucibus magna, at consequat tortor molestie ut. Sed nec lorem hendrerit, efficitur metus sed, egestas dolor. Sed sed maximus nunc. Nullam nibh augue, rhoncus vitae elit et, gravida faucibus risus. Vivamus cursus ante enim, id faucibus diam mollis ac.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Donec placerat consequat lorem sit amet pretium. Pellentesque vel pharetra turpis, eu vehicula magna. Suspendisse malesuada mauris id condimentum imperdiet. Fusce at nulla finibus, laoreet ipsum in, auctor massa. Quisque neque lacus, dictum ut iaculis in, vestibulum sed ex. Nulla velit orci, dapibus vel tempor vitae, consequat sed magna. Nam eget interdum ipsum. Quisque pretium sapien sed tristique auctor.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Nunc a metus ornare, aliquam leo nec, laoreet velit. Pellentesque eu purus quis velit malesuada mollis. Sed finibus eu tortor congue auctor. Morbi tortor augue, mollis at dictum vel, rhoncus et lacus. Nam lobortis malesuada vulputate. Ut vel interdum ex. Donec pretium est eu ante feugiat, ut lacinia mauris posuere. Sed ac ipsum aliquet, imperdiet turpis id, scelerisque nibh. Pellentesque consequat ipsum id mauris aliquet lobortis vitae dapibus nunc. Quisque vitae lorem eget massa imperdiet lobortis. Proin pellentesque, dui non mollis fringilla, eros eros faucibus quam, vitae sagittis lacus urna at orci. Vestibulum lectus magna, ultrices at tincidunt posuere, gravida sed nisi. Phasellus a erat eros.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Praesent quis condimentum neque. Morbi laoreet massa et lacus pretium, vitae lobortis felis pulvinar. Proin dignissim dapibus dui, vel pretium tortor interdum tristique. Pellentesque volutpat ante a tellus vestibulum convallis. Donec eget commodo purus. Cras scelerisque tortor purus, vel posuere neque efficitur quis. Nunc non tristique nibh. Proin at condimentum lacus, a rhoncus magna. Etiam egestas, ipsum in iaculis sagittis, mauris dui ultrices turpis, sed tincidunt massa massa ac urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam cursus, felis in placerat efficitur, orci lorem eleifend arcu, in euismod purus nunc quis tortor. Donec tincidunt justo non nulla accumsan scelerisque. Donec lacinia mauris ut velit aliquet, at finibus ex dignissim. Pellentesque erat velit, lobortis vel semper nec, pharetra quis quam. Vestibulum non pharetra felis, ac sollicitudin odio. Aliquam tempor urna massa, sed finibus justo semper quis.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Sed sit amet facilisis nisi, ac auctor sapien. Mauris sed neque at est viverra fringilla ac tristique nunc. Proin ultrices metus in enim volutpat, quis faucibus lectus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc faucibus gravida eleifend. Suspendisse potenti. Aliquam varius, leo vel pellentesque dignissim, nisl ex fringilla tellus, vulputate rutrum arcu mauris non magna. Cras sed nisl eu enim commodo pulvinar ut non sem.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">In hac habitasse platea dictumst. Curabitur semper placerat eros, convallis porta metus tempus non. Praesent fermentum tincidunt tincidunt. Proin in lacus nec lectus venenatis malesuada vestibulum a orci. Curabitur sed finibus arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque euismod diam finibus, ultricies lectus ac, sollicitudin eros.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Donec facilisis viverra diam, vel porta tortor facilisis dapibus. Suspendisse ut magna bibendum, tincidunt magna ac, suscipit magna. Integer et mauris congue, ultrices est eu, mattis enim. Suspendisse volutpat rhoncus aliquam. Vestibulum vestibulum libero vitae consectetur lobortis. Donec odio leo, suscipit vitae orci sed, rutrum pretium nibh. Maecenas molestie tortor sit amet diam ullamcorper, id elementum ex aliquam. Nullam sed ultrices diam. Maecenas et dignissim velit. Nunc consectetur ac purus et pulvinar. Vivamus venenatis viverra dolor ut congue. Cras consequat lobortis nisi, id facilisis nunc fringilla a. Vivamus lobortis quis mauris sit amet tempus. Vivamus vehicula diam vel mauris hendrerit placerat.</p>', 'banner_admin3__DATE__1457714807.jpg'),
(3, 'downloads', 'downloads', 'downloads', 'downloads', '<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum eros, at imperdiet ligula. Fusce aliquam diam nec purus porttitor posuere. Mauris ultrices euismod eros, a dictum orci interdum id. Curabitur vehicula consectetur ligula quis blandit. Ut tristique urna nec dapibus tristique. Aenean tincidunt pellentesque diam. Donec urna metus, vestibulum sit amet ultricies at, posuere in arcu. Nullam tincidunt ac ligula sed congue. Nunc id vestibulum neque. Nulla at molestie odio, a vulputate sapien. Curabitur accumsan bibendum nisi ac varius. Nunc sed pretium dolor. Pellentesque sed pharetra elit. Vivamus auctor auctor efficitur.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Nunc iaculis faucibus tristique. Sed ultrices pellentesque lectus ac luctus. Aliquam vitae felis elementum, egestas dui et, convallis nunc. Nunc quam velit, mattis non condimentum in, interdum sit amet mi. Curabitur vel arcu rhoncus, rhoncus sem eget, bibendum purus. Ut malesuada sodales urna, sed malesuada dui fringilla eget. Vivamus vitae nisl pretium, varius dui laoreet, fermentum enim. Duis fringilla ullamcorper risus, sed maximus nibh sagittis vitae. In vehicula purus nisi, ac ultrices lacus ullamcorper nec. Maecenas in semper neque.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">In vel volutpat lacus. Vivamus sodales, enim vitae tempor viverra, ipsum diam hendrerit augue, sit amet blandit augue nisl volutpat purus. Vestibulum in dolor quis nulla volutpat pharetra. Praesent vitae vehicula sapien. Cras tincidunt urna ac fringilla ultrices. Nam ornare, massa a viverra egestas, augue dui tempus erat, ac vulputate lacus augue ac ex. Nullam vel volutpat massa. In non ornare nisi. Morbi quam dolor, accumsan non aliquet ut, convallis sed dolor. Quisque id lorem id nulla iaculis faucibus eu in nulla. Suspendisse in interdum arcu, id maximus ipsum. Maecenas lobortis blandit leo, mattis finibus urna maximus vitae. Mauris vitae sagittis urna, id feugiat mi. Proin luctus risus non sagittis egestas.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Integer dolor diam, egestas eu rutrum et, euismod vel lorem. Quisque eget dictum tellus. Duis hendrerit risus eu purus placerat varius. Vestibulum urna tortor, mollis suscipit pulvinar eu, gravida nec ligula. Duis magna eros, vulputate ac iaculis a, pellentesque in risus. Praesent scelerisque euismod feugiat. Ut sit amet nunc felis. Praesent iaculis commodo nunc et lobortis. Integer nec sagittis metus, sed sagittis diam.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Ut in mi at urna dictum lacinia. Duis luctus, quam quis lacinia condimentum, nisl dui tempus enim, eu tincidunt risus nulla sed massa. Quisque et turpis a erat mattis ultricies. Maecenas aliquam diam lectus, eu congue leo posuere vitae. Integer consequat ex nec ex sagittis ullamcorper ac ac ex. Duis interdum ligula ac ornare tincidunt. Nulla facilisi. Cras elementum cursus varius. Nunc vitae massa ipsum. Curabitur sit amet interdum ligula. Morbi non lacus eu urna mollis tempus. Donec sed dapibus massa, ut fringilla odio.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Aliquam lobortis quam quam, id interdum lorem luctus eget. Aenean pretium enim sit amet ex posuere, nec dapibus ipsum interdum. Vestibulum sagittis ac mauris sed consectetur. Nulla eros lectus, suscipit vel luctus eu, suscipit quis augue. Mauris nec congue mauris. Maecenas vulputate et turpis facilisis efficitur. Ut metus sapien, venenatis vitae viverra eget, facilisis et sem. Suspendisse tortor libero, venenatis eget lorem quis, condimentum porta neque. Nulla viverra, purus et varius iaculis, lorem justo suscipit turpis, et molestie lectus dolor non orci. Praesent eget ante eros.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Nullam vel egestas ante. Fusce ut cursus lorem, vel lacinia quam. Proin dignissim, orci ut viverra placerat, risus tortor vulputate mauris, eu gravida quam eros at erat. Sed varius eros in consequat venenatis. Mauris lectus metus, congue quis enim et, rhoncus aliquam libero. Maecenas varius quam nec quam lobortis mattis. Aliquam pulvinar est eu ipsum congue, et euismod tellus tincidunt. Quisque placerat sem placerat nunc gravida pulvinar a non ligula. Curabitur ut nunc volutpat, luctus ex ac, cursus ipsum. Cras laoreet feugiat viverra. Proin a ex luctus, pulvinar nisi ut, varius tellus. Maecenas consequat nunc vel mauris pharetra, quis iaculis eros egestas. Nullam eget metus sed tellus mattis tristique id et dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam pharetra massa quis velit vulputate, vel volutpat libero egestas. Suspendisse potenti.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Fusce tincidunt feugiat est id rutrum. Curabitur finibus, leo sit amet hendrerit feugiat, massa velit sollicitudin leo, eu efficitur turpis ante sit amet nibh. Morbi at magna efficitur, finibus tellus vel, faucibus diam. Pellentesque sed semper diam, id finibus sapien. Morbi vel pellentesque augue. Aliquam cursus eleifend dui, quis finibus ligula viverra ut. Aenean a eleifend erat. Maecenas facilisis gravida nisl, at commodo neque. Mauris ligula ligula, lobortis a augue ac, posuere euismod lectus. Nunc sapien lorem, rutrum et convallis vel, cursus vestibulum sem. Suspendisse sit amet nulla luctus, pellentesque tortor hendrerit, semper odio. Sed placerat diam et ligula convallis pharetra. In nec ultricies augue, id finibus nisl. Nullam rutrum magna mollis elit porta dictum. Nunc id vestibulum quam.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Mauris lacinia mi sit amet ligula faucibus, sit amet ultrices purus ultrices. Duis feugiat cursus purus in lacinia. Mauris varius sapien nec nulla faucibus, quis rutrum tellus porttitor. Sed accumsan metus id ipsum scelerisque, et pretium dolor tempor. Etiam sagittis sapien augue. Vestibulum rutrum, eros vitae viverra commodo, erat velit sollicitudin risus, quis dictum leo ante luctus eros. Nulla vulputate faucibus magna, at consequat tortor molestie ut. Sed nec lorem hendrerit, efficitur metus sed, egestas dolor. Sed sed maximus nunc. Nullam nibh augue, rhoncus vitae elit et, gravida faucibus risus. Vivamus cursus ante enim, id faucibus diam mollis ac.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Donec placerat consequat lorem sit amet pretium. Pellentesque vel pharetra turpis, eu vehicula magna. Suspendisse malesuada mauris id condimentum imperdiet. Fusce at nulla finibus, laoreet ipsum in, auctor massa. Quisque neque lacus, dictum ut iaculis in, vestibulum sed ex. Nulla velit orci, dapibus vel tempor vitae, consequat sed magna. Nam eget interdum ipsum. Quisque pretium sapien sed tristique auctor.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Nunc a metus ornare, aliquam leo nec, laoreet velit. Pellentesque eu purus quis velit malesuada mollis. Sed finibus eu tortor congue auctor. Morbi tortor augue, mollis at dictum vel, rhoncus et lacus. Nam lobortis malesuada vulputate. Ut vel interdum ex. Donec pretium est eu ante feugiat, ut lacinia mauris posuere. Sed ac ipsum aliquet, imperdiet turpis id, scelerisque nibh. Pellentesque consequat ipsum id mauris aliquet lobortis vitae dapibus nunc. Quisque vitae lorem eget massa imperdiet lobortis. Proin pellentesque, dui non mollis fringilla, eros eros faucibus quam, vitae sagittis lacus urna at orci. Vestibulum lectus magna, ultrices at tincidunt posuere, gravida sed nisi. Phasellus a erat eros.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Praesent quis condimentum neque. Morbi laoreet massa et lacus pretium, vitae lobortis felis pulvinar. Proin dignissim dapibus dui, vel pretium tortor interdum tristique. Pellentesque volutpat ante a tellus vestibulum convallis. Donec eget commodo purus. Cras scelerisque tortor purus, vel posuere neque efficitur quis. Nunc non tristique nibh. Proin at condimentum lacus, a rhoncus magna. Etiam egestas, ipsum in iaculis sagittis, mauris dui ultrices turpis, sed tincidunt massa massa ac urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam cursus, felis in placerat efficitur, orci lorem eleifend arcu, in euismod purus nunc quis tortor. Donec tincidunt justo non nulla accumsan scelerisque. Donec lacinia mauris ut velit aliquet, at finibus ex dignissim. Pellentesque erat velit, lobortis vel semper nec, pharetra quis quam. Vestibulum non pharetra felis, ac sollicitudin odio. Aliquam tempor urna massa, sed finibus justo semper quis.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Sed sit amet facilisis nisi, ac auctor sapien. Mauris sed neque at est viverra fringilla ac tristique nunc. Proin ultrices metus in enim volutpat, quis faucibus lectus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc faucibus gravida eleifend. Suspendisse potenti. Aliquam varius, leo vel pellentesque dignissim, nisl ex fringilla tellus, vulputate rutrum arcu mauris non magna. Cras sed nisl eu enim commodo pulvinar ut non sem.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">In hac habitasse platea dictumst. Curabitur semper placerat eros, convallis porta metus tempus non. Praesent fermentum tincidunt tincidunt. Proin in lacus nec lectus venenatis malesuada vestibulum a orci. Curabitur sed finibus arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque euismod diam finibus, ultricies lectus ac, sollicitudin eros.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Donec facilisis viverra diam, vel porta tortor facilisis dapibus. Suspendisse ut magna bibendum, tincidunt magna ac, suscipit magna. Integer et mauris congue, ultrices est eu, mattis enim. Suspendisse volutpat rhoncus aliquam. Vestibulum vestibulum libero vitae consectetur lobortis. Donec odio leo, suscipit vitae orci sed, rutrum pretium nibh. Maecenas molestie tortor sit amet diam ullamcorper, id elementum ex aliquam. Nullam sed ultrices diam. Maecenas et dignissim velit. Nunc consectetur ac purus et pulvinar. Vivamus venenatis viverra dolor ut congue. Cras consequat lobortis nisi, id facilisis nunc fringilla a. Vivamus lobortis quis mauris sit amet tempus. Vivamus vehicula diam vel mauris hendrerit placerat.</p>', 'bannernuclear2__DATE__1457707777.jpg'),
(4, 'documentation', 'documentation', 'documentation', 'documentation', '<p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum eros, at imperdiet ligula. Fusce aliquam diam nec purus porttitor posuere. Mauris ultrices euismod eros, a dictum orci interdum id. Curabitur vehicula consectetur ligula quis blandit. Ut tristique urna nec dapibus tristique. Aenean tincidunt pellentesque diam. Donec urna metus, vestibulum sit amet ultricies at, posuere in arcu. Nullam tincidunt ac ligula sed congue. Nunc id vestibulum neque. Nulla at molestie odio, a vulputate sapien. Curabitur accumsan bibendum nisi ac varius. Nunc sed pretium dolor. Pellentesque sed pharetra elit. Vivamus auctor auctor efficitur.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Nunc iaculis faucibus tristique. Sed ultrices pellentesque lectus ac luctus. Aliquam vitae felis elementum, egestas dui et, convallis nunc. Nunc quam velit, mattis non condimentum in, interdum sit amet mi. Curabitur vel arcu rhoncus, rhoncus sem eget, bibendum purus. Ut malesuada sodales urna, sed malesuada dui fringilla eget. Vivamus vitae nisl pretium, varius dui laoreet, fermentum enim. Duis fringilla ullamcorper risus, sed maximus nibh sagittis vitae. In vehicula purus nisi, ac ultrices lacus ullamcorper nec. Maecenas in semper neque.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">In vel volutpat lacus. Vivamus sodales, enim vitae tempor viverra, ipsum diam hendrerit augue, sit amet blandit augue nisl volutpat purus. Vestibulum in dolor quis nulla volutpat pharetra. Praesent vitae vehicula sapien. Cras tincidunt urna ac fringilla ultrices. Nam ornare, massa a viverra egestas, augue dui tempus erat, ac vulputate lacus augue ac ex. Nullam vel volutpat massa. In non ornare nisi. Morbi quam dolor, accumsan non aliquet ut, convallis sed dolor. Quisque id lorem id nulla iaculis faucibus eu in nulla. Suspendisse in interdum arcu, id maximus ipsum. Maecenas lobortis blandit leo, mattis finibus urna maximus vitae. Mauris vitae sagittis urna, id feugiat mi. Proin luctus risus non sagittis egestas.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Integer dolor diam, egestas eu rutrum et, euismod vel lorem. Quisque eget dictum tellus. Duis hendrerit risus eu purus placerat varius. Vestibulum urna tortor, mollis suscipit pulvinar eu, gravida nec ligula. Duis magna eros, vulputate ac iaculis a, pellentesque in risus. Praesent scelerisque euismod feugiat. Ut sit amet nunc felis. Praesent iaculis commodo nunc et lobortis. Integer nec sagittis metus, sed sagittis diam.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Ut in mi at urna dictum lacinia. Duis luctus, quam quis lacinia condimentum, nisl dui tempus enim, eu tincidunt risus nulla sed massa. Quisque et turpis a erat mattis ultricies. Maecenas aliquam diam lectus, eu congue leo posuere vitae. Integer consequat ex nec ex sagittis ullamcorper ac ac ex. Duis interdum ligula ac ornare tincidunt. Nulla facilisi. Cras elementum cursus varius. Nunc vitae massa ipsum. Curabitur sit amet interdum ligula. Morbi non lacus eu urna mollis tempus. Donec sed dapibus massa, ut fringilla odio.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Aliquam lobortis quam quam, id interdum lorem luctus eget. Aenean pretium enim sit amet ex posuere, nec dapibus ipsum interdum. Vestibulum sagittis ac mauris sed consectetur. Nulla eros lectus, suscipit vel luctus eu, suscipit quis augue. Mauris nec congue mauris. Maecenas vulputate et turpis facilisis efficitur. Ut metus sapien, venenatis vitae viverra eget, facilisis et sem. Suspendisse tortor libero, venenatis eget lorem quis, condimentum porta neque. Nulla viverra, purus et varius iaculis, lorem justo suscipit turpis, et molestie lectus dolor non orci. Praesent eget ante eros.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Nullam vel egestas ante. Fusce ut cursus lorem, vel lacinia quam. Proin dignissim, orci ut viverra placerat, risus tortor vulputate mauris, eu gravida quam eros at erat. Sed varius eros in consequat venenatis. Mauris lectus metus, congue quis enim et, rhoncus aliquam libero. Maecenas varius quam nec quam lobortis mattis. Aliquam pulvinar est eu ipsum congue, et euismod tellus tincidunt. Quisque placerat sem placerat nunc gravida pulvinar a non ligula. Curabitur ut nunc volutpat, luctus ex ac, cursus ipsum. Cras laoreet feugiat viverra. Proin a ex luctus, pulvinar nisi ut, varius tellus. Maecenas consequat nunc vel mauris pharetra, quis iaculis eros egestas. Nullam eget metus sed tellus mattis tristique id et dolor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam pharetra massa quis velit vulputate, vel volutpat libero egestas. Suspendisse potenti.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Fusce tincidunt feugiat est id rutrum. Curabitur finibus, leo sit amet hendrerit feugiat, massa velit sollicitudin leo, eu efficitur turpis ante sit amet nibh. Morbi at magna efficitur, finibus tellus vel, faucibus diam. Pellentesque sed semper diam, id finibus sapien. Morbi vel pellentesque augue. Aliquam cursus eleifend dui, quis finibus ligula viverra ut. Aenean a eleifend erat. Maecenas facilisis gravida nisl, at commodo neque. Mauris ligula ligula, lobortis a augue ac, posuere euismod lectus. Nunc sapien lorem, rutrum et convallis vel, cursus vestibulum sem. Suspendisse sit amet nulla luctus, pellentesque tortor hendrerit, semper odio. Sed placerat diam et ligula convallis pharetra. In nec ultricies augue, id finibus nisl. Nullam rutrum magna mollis elit porta dictum. Nunc id vestibulum quam.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Mauris lacinia mi sit amet ligula faucibus, sit amet ultrices purus ultrices. Duis feugiat cursus purus in lacinia. Mauris varius sapien nec nulla faucibus, quis rutrum tellus porttitor. Sed accumsan metus id ipsum scelerisque, et pretium dolor tempor. Etiam sagittis sapien augue. Vestibulum rutrum, eros vitae viverra commodo, erat velit sollicitudin risus, quis dictum leo ante luctus eros. Nulla vulputate faucibus magna, at consequat tortor molestie ut. Sed nec lorem hendrerit, efficitur metus sed, egestas dolor. Sed sed maximus nunc. Nullam nibh augue, rhoncus vitae elit et, gravida faucibus risus. Vivamus cursus ante enim, id faucibus diam mollis ac.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Donec placerat consequat lorem sit amet pretium. Pellentesque vel pharetra turpis, eu vehicula magna. Suspendisse malesuada mauris id condimentum imperdiet. Fusce at nulla finibus, laoreet ipsum in, auctor massa. Quisque neque lacus, dictum ut iaculis in, vestibulum sed ex. Nulla velit orci, dapibus vel tempor vitae, consequat sed magna. Nam eget interdum ipsum. Quisque pretium sapien sed tristique auctor.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Nunc a metus ornare, aliquam leo nec, laoreet velit. Pellentesque eu purus quis velit malesuada mollis. Sed finibus eu tortor congue auctor. Morbi tortor augue, mollis at dictum vel, rhoncus et lacus. Nam lobortis malesuada vulputate. Ut vel interdum ex. Donec pretium est eu ante feugiat, ut lacinia mauris posuere. Sed ac ipsum aliquet, imperdiet turpis id, scelerisque nibh. Pellentesque consequat ipsum id mauris aliquet lobortis vitae dapibus nunc. Quisque vitae lorem eget massa imperdiet lobortis. Proin pellentesque, dui non mollis fringilla, eros eros faucibus quam, vitae sagittis lacus urna at orci. Vestibulum lectus magna, ultrices at tincidunt posuere, gravida sed nisi. Phasellus a erat eros.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Praesent quis condimentum neque. Morbi laoreet massa et lacus pretium, vitae lobortis felis pulvinar. Proin dignissim dapibus dui, vel pretium tortor interdum tristique. Pellentesque volutpat ante a tellus vestibulum convallis. Donec eget commodo purus. Cras scelerisque tortor purus, vel posuere neque efficitur quis. Nunc non tristique nibh. Proin at condimentum lacus, a rhoncus magna. Etiam egestas, ipsum in iaculis sagittis, mauris dui ultrices turpis, sed tincidunt massa massa ac urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nullam cursus, felis in placerat efficitur, orci lorem eleifend arcu, in euismod purus nunc quis tortor. Donec tincidunt justo non nulla accumsan scelerisque. Donec lacinia mauris ut velit aliquet, at finibus ex dignissim. Pellentesque erat velit, lobortis vel semper nec, pharetra quis quam. Vestibulum non pharetra felis, ac sollicitudin odio. Aliquam tempor urna massa, sed finibus justo semper quis.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Sed sit amet facilisis nisi, ac auctor sapien. Mauris sed neque at est viverra fringilla ac tristique nunc. Proin ultrices metus in enim volutpat, quis faucibus lectus porttitor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc faucibus gravida eleifend. Suspendisse potenti. Aliquam varius, leo vel pellentesque dignissim, nisl ex fringilla tellus, vulputate rutrum arcu mauris non magna. Cras sed nisl eu enim commodo pulvinar ut non sem.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">In hac habitasse platea dictumst. Curabitur semper placerat eros, convallis porta metus tempus non. Praesent fermentum tincidunt tincidunt. Proin in lacus nec lectus venenatis malesuada vestibulum a orci. Curabitur sed finibus arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque euismod diam finibus, ultricies lectus ac, sollicitudin eros.</p><p style="text-align: justify; font-size: 11px; line-height: 14px; margin-bottom: 14px; padding: 0px; font-family: Arial, Helvetica, sans; letter-spacing: normal;">Donec facilisis viverra diam, vel porta tortor facilisis dapibus. Suspendisse ut magna bibendum, tincidunt magna ac, suscipit magna. Integer et mauris congue, ultrices est eu, mattis enim. Suspendisse volutpat rhoncus aliquam. Vestibulum vestibulum libero vitae consectetur lobortis. Donec odio leo, suscipit vitae orci sed, rutrum pretium nibh. Maecenas molestie tortor sit amet diam ullamcorper, id elementum ex aliquam. Nullam sed ultrices diam. Maecenas et dignissim velit. Nunc consectetur ac purus et pulvinar. Vivamus venenatis viverra dolor ut congue. Cras consequat lobortis nisi, id facilisis nunc fringilla a. Vivamus lobortis quis mauris sit amet tempus. Vivamus vehicula diam vel mauris hendrerit placerat.</p>', 'bannernuclear2__DATE__1457707777.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `_groups`
--

CREATE TABLE IF NOT EXISTS `_groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `_groups`
--

INSERT INTO `_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Estrutura da tabela `_login_attempts`
--

CREATE TABLE IF NOT EXISTS `_login_attempts` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `_sessions`
--

CREATE TABLE IF NOT EXISTS `_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `_users`
--

CREATE TABLE IF NOT EXISTS `_users` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `_users`
--

INSERT INTO `_users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', NULL, '$2y$08$Le/YqxnKiGMbqzdrDDwvjeMOjkEXh66wyFdzAqx6xIZviP3/ul6BS', NULL, 'webmaster@nuclearcms.com', NULL, NULL, NULL, NULL, 1454892670, 1457728284, 1, 'web', 'master', '', ''),
(2, '127.0.0.1', NULL, '$2y$08$I/RHF/mbP9lwGJry3eIa6Oa4eW2THo1j465fdoXKD4j5qgazemUl.', NULL, 'demo@nuclearcms.com', NULL, NULL, NULL, NULL, 1457724015, NULL, 1, 'demo', 'demo', 'demo', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `_users_groups`
--

CREATE TABLE IF NOT EXISTS `_users_groups` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `_users_groups`
--

INSERT INTO `_users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info_site`
--
ALTER TABLE `info_site`
  ADD PRIMARY KEY (`infoID`), ADD UNIQUE KEY `infoID` (`infoID`), ADD UNIQUE KEY `infoKEY` (`infoKEY`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`menuID`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`articlesID`);

--
-- Indexes for table `_groups`
--
ALTER TABLE `_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_login_attempts`
--
ALTER TABLE `_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_sessions`
--
ALTER TABLE `_sessions`
  ADD PRIMARY KEY (`id`), ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `_users`
--
ALTER TABLE `_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_users_groups`
--
ALTER TABLE `_users_groups`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`), ADD KEY `fk_users_groups_users1_idx` (`user_id`), ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info_site`
--
ALTER TABLE `info_site`
  MODIFY `infoID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `menuID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `articlesID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `_groups`
--
ALTER TABLE `_groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `_login_attempts`
--
ALTER TABLE `_login_attempts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `_users`
--
ALTER TABLE `_users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `_users_groups`
--
ALTER TABLE `_users_groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
