-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Jan-2020 às 01:17
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bompastor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `nome` varchar(65) NOT NULL,
  `senha` varchar(65) NOT NULL,
  `id_admin` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`nome`, `senha`, `id_admin`) VALUES
('master', 'master', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `associado`
--

CREATE TABLE `associado` (
  `id_associado` int(10) NOT NULL,
  `nome` varchar(65) NOT NULL,
  `email` varchar(105) NOT NULL,
  `telefone` varchar(65) NOT NULL,
  `rua` varchar(1000) NOT NULL,
  `numero` int(10) NOT NULL,
  `complemento` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `estatuto`
--

CREATE TABLE `estatuto` (
  `documento` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `estatuto`
--

INSERT INTO `estatuto` (`documento`) VALUES
('	Lorem ipsum magna ante hendrerit fusce quisque bibendum pretium ante inceptos integer inceptos, sodales donec fames sollicitudin hac hendrerit felis augue sed sem venenatis. sociosqu convallis posuere duis habitasse vivamus diam phasellus netus, eget volutpat iaculis aptent integer vel id convallis suscipit, mollis suscipit hendrerit mattis fames cras tristique. pulvinar potenti vitae himenaeos feugiat imperdiet molestie dictum venenatis, in nisl condimentum vel eget arcu quis praesent ipsum, pharetra gravida fusce placerat tempus congue dolor. convallis class metus egestas dui semper primis fringilla adipiscing imperdiet ultricies arcu nulla orci elementum, curabitur nulla enim fusce curabitur mollis netus volutpat vulputate ipsum urna lectus torquent. \r\n\r\n	Hac ad curae nostra quisque suspendisse fames felis interdum posuere facilisis accumsan pretium, molestie consequat aenean elementum inceptos mauris cras donec massa praesent magna, sed rhoncus metus sapien nulla tempor suscipit nisi aliquam tempus fusce. himenaeos etiam ut ac porta nulla auctor, urna aliquet morbi tempus varius maecenas inceptos, nostra ad condimentum inceptos magna. semper lobortis tristique id dui feugiat sollicitudin tristique rutrum ut dictum posuere commodo, auctor quisque inceptos pharetra odio quisque euismod massa vehicula duis tincidunt. sed mi placerat tempus fames aptent tellus, duis placerat sed viverra felis, nostra pulvinar auctor erat auctor. \r\n\r\n	Nulla blandit platea varius consectetur litora laoreet nibh class aliquam ullamcorper habitant, suspendisse fermentum porttitor vestibulum auctor ac vulputate nostra feugiat nec elit, phasellus a orci id placerat tempor adipiscing leo inceptos amet. id sem consectetur fringilla rhoncus aliquam quisque eleifend arcu interdum velit semper fermentum rutrum ultrices curabitur, aliquam euismod hac euismod dictum congue dolor venenatis lacus integer sodales vulputate nisi feugiat. habitant massa nibh justo faucibus fringilla mi curabitur risus, orci nam molestie taciti sed ac pretium volutpat, duis purus consectetur taciti dictum nulla auctor. duis eu maecenas semper erat velit euismod, facilisis gravida convallis conubia erat eget, maecenas etiam libero faucibus quam. \r\n\r\n	Posuere consectetur donec dolor suspendisse torquent blandit facilisis ipsum, quam fringilla feugiat scelerisque leo suscipit tincidunt habitasse, massa vel et senectus ultricies metus fusce. facilisis arcu aenean morbi volutpat vel mi porta, facilisis porttitor erat urna vestibulum iaculis nunc, pulvinar mollis vehicula molestie hac donec. magna donec class posuere sagittis porttitor bibendum rhoncus placerat, volutpat donec pretium auctor tempus consectetur diam interdum, purus cursus rhoncus aenean etiam congue malesuada. ante aptent bibendum blandit aptent mauris cras ipsum dapibus nam, etiam blandit hac quis mi vestibulum dapibus tempor. litora conubia quam amet porta quisque libero dui convallis ligula maecenas, turpis duis elit enim donec bibendum at vel maecenas, consequat massa proin tempus sollicitudin nibh ipsum luctus eget. \r\n\r\n	Donec nisi praesent quis himenaeos proin, lobortis vitae facilisis vel gravida, leo class hendrerit senectus. mi torquent orci nisl cras ad dapibus elit, duis ornare fusce vel himenaeos netus vehicula, etiam eros consectetur fames potenti sit. congue dolor iaculis varius integer senectus tempor lorem libero non aenean diam, habitant porttitor maecenas dictumst litora morbi curabitur quisque turpis malesuada conubia, dolor mattis tincidunt potenti varius leo netus hac quis donec. vel lacus mattis suscipit potenti cursus mauris libero platea, sollicitudin enim adipiscing quam torquent consectetur lobortis tortor cursus, suscipit aliquet congue primis aenean interdum pharetra. \r\n\r\n	Lobortis netus vehicula donec varius viverra netus neque, elementum facilisis aenean cras sollicitudin felis, ad cubilia lacus hendrerit rhoncus posuere. hendrerit feugiat sollicitudin litora pretium augue fusce auctor nunc et elementum quisque facilisis at sociosqu dolor vestibulum sagittis, euismod mauris praesent ultricies pharetra sed inceptos curae litora urna litora eros at tempus velit. fermentum iaculis rutrum platea aliquam platea accumsan pharetra, urna purus praesent arcu tortor consequat, himenaeos ad aptent convallis etiam feugiat. magna tristique dictumst urna erat malesuada quis iaculis commodo inceptos a, taciti phasellus malesuada consectetur tempus iaculis posuere vel. \r\n\r\n	Sem augue tortor mollis mauris augue lectus volutpat cras fermentum lorem dapibus pellentesque, dictumst nec nam aenean primis taciti imperdiet aliquam suscipit congue. viverra ultricies ut luctus eleifend inceptos platea venenatis in sollicitudin, urna taciti etiam sapien diam viverra curabitur aenean vel, dapibus himenaeos turpis suspendisse ad posuere proin mattis. quis ullamcorper orci scelerisque placerat ut, diam habitant mi in. viverra ut aliquam posuere platea nisi dictum feugiat dictumst mattis lacinia purus, fusce facilisis lobortis potenti ornare semper cubilia accumsan dapibus. lectus primis porta mauris pellentesque turpis libero eros dictum venenatis, nunc massa curabitur tortor commodo tellus nisi fusce. \r\n\r\n	Nibh ornare elementum aenean porta eu urna vivamus fringilla nam inceptos, tortor eu diam ut euismod et himenaeos ante tempor, hendrerit lorem volutpat dapibus auctor platea porttitor non luctus. quam etiam tempus cras justo magna elementum nulla non euismod habitant, aliquet libero fermentum facilisis litora taciti senectus interdum molestie tincidunt, aptent nulla erat sociosqu aliquam fames maecenas porttitor dolor. metus pellentesque et arcu class dui pretium, feugiat litora auctor lacus rutrum at per, lacinia ornare posuere fusce vulputate. tincidunt sapien mi morbi nullam ut arcu vestibulum tristique ipsum, mi bibendum morbi cras leo erat sodales ultrices lorem, justo habitasse fusce integer aenean aliquam placerat fusce. \r\n\r\n	Tellus lacinia enim senectus mi nullam augue nostra ultrices primis, commodo pellentesque platea nam sed nam ut sapien aenean proin, integer magna lobortis scelerisque aliquet suspendisse habitasse aliquam. iaculis suspendisse consequat placerat cras dapibus convallis curabitur consequat nec laoreet, blandit torquent morbi mollis nostra suspendisse sollicitudin velit aliquam, donec himenaeos odio faucibus vitae suspendisse phasellus molestie elit. sapien dictumst pellentesque sociosqu hac leo posuere himenaeos, at curabitur pretium blandit commodo aliquam inceptos arcu, convallis ut iaculis risus odio posuere. scelerisque nisl augue molestie quis scelerisque felis ut litora at scelerisque cubilia, accumsan a donec platea quisque aliquam suspendisse sapien placerat. \r\n\r\n	Faucibus habitasse ad sem ut maecenas metus vestibulum nam maecenas velit erat, nisi mi etiam ut malesuada mauris et amet nullam netus vel torquent, ut potenti nibh etiam cubilia vulputate et etiam ligula fermentum. mi fusce etiam maecenas adipiscing vitae eleifend faucibus, enim interdum risus aliquet himenaeos inceptos lectus fames, vulputate purus eros ad lacus eros. etiam justo porta viverra pharetra tempor gravida id quisque, aliquam fames feugiat cras himenaeos luctus suscipit, turpis mauris donec elementum fermentum adipiscing per. consequat suspendisse odio quam purus aenean nostra consectetur aptent laoreet rhoncus, mi lorem potenti volutpat ultricies tincidunt neque sodales et, sodales posuere placerat ultrices orci egestas inceptos praesent etiam. \r\n\r\n	Ut vulputate elementum dolor tincidunt ullamcorper arcu orci tristique, auctor sapien sodales leo mi aenean urna, mattis posuere justo mollis bibendum nec et. congue laoreet lacinia condimentum pharetra mauris massa consectetur nisi cursus eleifend, litora luctus aliquet diam in accumsan facilisis potenti sit purus tincidunt, laoreet ornare diam potenti erat nullam etiam aptent diam. vel etiam nunc ligula iaculis nulla ligula eu, fusce tempor tristique purus varius tristique, amet auctor egestas non aptent accumsan. orci interdum consequat curae aenean lobortis vel auctor, sociosqu adipiscing at commodo dolor faucibus vulputate, convallis imperdiet ornare sed ornare dapibus. \r\n\r\n	Porttitor cursus platea viverra commodo curae est dictum ut orci condimentum, nibh pulvinar laoreet maecenas facilisis accumsan varius quisque a. aliquet dictum nec euismod quis leo cras volutpat quam, aliquam tristique fermentum ullamcorper sodales ipsum fermentum euismod, commodo mauris pulvinar sit pulvinar aliquet neque. lobortis at nulla cursus fringilla mi pellentesque ut lacus, ornare viverra dolor odio dapibus nisl porta, facilisis etiam fermentum primis amet aenean lacus. id dui semper sit quisque lectus consequat varius porttitor ipsum consequat taciti imperdiet amet in, aliquam ad mi quam inceptos senectus sem praesent porta fames ultrices sapien. \r\n\r\n	Ante libero vestibulum morbi faucibus urna quisque lacinia sed nullam pellentesque, commodo accumsan enim diam eu malesuada quis fames aptent lorem, malesuada aliquam dictumst feugiat porta in laoreet luctus non. tellus suscipit aliquam posuere duis morbi cras amet aptent, bibendum neque donec bibendum curabitur primis consectetur odio nibh, etiam taciti inceptos a aliquam ut duis. senectus elit cursus imperdiet morbi laoreet viverra litora vulputate potenti turpis, congue dolor id senectus placerat ligula curabitur tortor nulla eros dapibus, praesent per volutpat massa hac malesuada nostra nunc ante. semper tempus lacinia congue nibh accumsan libero ipsum, placerat eu curae porttitor justo vel, pharetra tempus risus posuere bibendum dui. \r\n\r\n	Morbi netus mi semper nisi sem platea cras habitant, elit gravida faucibus amet blandit turpis ante conubia, imperdiet etiam maecenas dolor nostra urna sem. metus augue auctor non tempor tristique class curae ut per, odio nulla eros senectus curabitur commodo quisque aenean odio, placerat tempus erat convallis tortor eleifend aenean sit. himenaeos pellentesque aenean erat curabitur integer id, qu'),
('	Lorem ipsum magna ante hendrerit fusce quisque bibendum pretium ante inceptos integer inceptos, sodales donec fames sollicitudin hac hendrerit felis augue sed sem venenatis. sociosqu convallis posuere duis habitasse vivamus diam phasellus netus, eget volutpat iaculis aptent integer vel id convallis suscipit, mollis suscipit hendrerit mattis fames cras tristique. pulvinar potenti vitae himenaeos feugiat imperdiet molestie dictum venenatis, in nisl condimentum vel eget arcu quis praesent ipsum, pharetra gravida fusce placerat tempus congue dolor. convallis class metus egestas dui semper primis fringilla adipiscing imperdiet ultricies arcu nulla orci elementum, curabitur nulla enim fusce curabitur mollis netus volutpat vulputate ipsum urna lectus torquent. \r\n\r\n	Hac ad curae nostra quisque suspendisse fames felis interdum posuere facilisis accumsan pretium, molestie consequat aenean elementum inceptos mauris cras donec massa praesent magna, sed rhoncus metus sapien nulla tempor suscipit nisi aliquam tempus fusce. himenaeos etiam ut ac porta nulla auctor, urna aliquet morbi tempus varius maecenas inceptos, nostra ad condimentum inceptos magna. semper lobortis tristique id dui feugiat sollicitudin tristique rutrum ut dictum posuere commodo, auctor quisque inceptos pharetra odio quisque euismod massa vehicula duis tincidunt. sed mi placerat tempus fames aptent tellus, duis placerat sed viverra felis, nostra pulvinar auctor erat auctor. \r\n\r\n	Nulla blandit platea varius consectetur litora laoreet nibh class aliquam ullamcorper habitant, suspendisse fermentum porttitor vestibulum auctor ac vulputate nostra feugiat nec elit, phasellus a orci id placerat tempor adipiscing leo inceptos amet. id sem consectetur fringilla rhoncus aliquam quisque eleifend arcu interdum velit semper fermentum rutrum ultrices curabitur, aliquam euismod hac euismod dictum congue dolor venenatis lacus integer sodales vulputate nisi feugiat. habitant massa nibh justo faucibus fringilla mi curabitur risus, orci nam molestie taciti sed ac pretium volutpat, duis purus consectetur taciti dictum nulla auctor. duis eu maecenas semper erat velit euismod, facilisis gravida convallis conubia erat eget, maecenas etiam libero faucibus quam. \r\n\r\n	Posuere consectetur donec dolor suspendisse torquent blandit facilisis ipsum, quam fringilla feugiat scelerisque leo suscipit tincidunt habitasse, massa vel et senectus ultricies metus fusce. facilisis arcu aenean morbi volutpat vel mi porta, facilisis porttitor erat urna vestibulum iaculis nunc, pulvinar mollis vehicula molestie hac donec. magna donec class posuere sagittis porttitor bibendum rhoncus placerat, volutpat donec pretium auctor tempus consectetur diam interdum, purus cursus rhoncus aenean etiam congue malesuada. ante aptent bibendum blandit aptent mauris cras ipsum dapibus nam, etiam blandit hac quis mi vestibulum dapibus tempor. litora conubia quam amet porta quisque libero dui convallis ligula maecenas, turpis duis elit enim donec bibendum at vel maecenas, consequat massa proin tempus sollicitudin nibh ipsum luctus eget. \r\n\r\n	Donec nisi praesent quis himenaeos proin, lobortis vitae facilisis vel gravida, leo class hendrerit senectus. mi torquent orci nisl cras ad dapibus elit, duis ornare fusce vel himenaeos netus vehicula, etiam eros consectetur fames potenti sit. congue dolor iaculis varius integer senectus tempor lorem libero non aenean diam, habitant porttitor maecenas dictumst litora morbi curabitur quisque turpis malesuada conubia, dolor mattis tincidunt potenti varius leo netus hac quis donec. vel lacus mattis suscipit potenti cursus mauris libero platea, sollicitudin enim adipiscing quam torquent consectetur lobortis tortor cursus, suscipit aliquet congue primis aenean interdum pharetra. \r\n\r\n	Lobortis netus vehicula donec varius viverra netus neque, elementum facilisis aenean cras sollicitudin felis, ad cubilia lacus hendrerit rhoncus posuere. hendrerit feugiat sollicitudin litora pretium augue fusce auctor nunc et elementum quisque facilisis at sociosqu dolor vestibulum sagittis, euismod mauris praesent ultricies pharetra sed inceptos curae litora urna litora eros at tempus velit. fermentum iaculis rutrum platea aliquam platea accumsan pharetra, urna purus praesent arcu tortor consequat, himenaeos ad aptent convallis etiam feugiat. magna tristique dictumst urna erat malesuada quis iaculis commodo inceptos a, taciti phasellus malesuada consectetur tempus iaculis posuere vel. \r\n\r\n	Sem augue tortor mollis mauris augue lectus volutpat cras fermentum lorem dapibus pellentesque, dictumst nec nam aenean primis taciti imperdiet aliquam suscipit congue. viverra ultricies ut luctus eleifend inceptos platea venenatis in sollicitudin, urna taciti etiam sapien diam viverra curabitur aenean vel, dapibus himenaeos turpis suspendisse ad posuere proin mattis. quis ullamcorper orci scelerisque placerat ut, diam habitant mi in. viverra ut aliquam posuere platea nisi dictum feugiat dictumst mattis lacinia purus, fusce facilisis lobortis potenti ornare semper cubilia accumsan dapibus. lectus primis porta mauris pellentesque turpis libero eros dictum venenatis, nunc massa curabitur tortor commodo tellus nisi fusce. \r\n\r\n	Nibh ornare elementum aenean porta eu urna vivamus fringilla nam inceptos, tortor eu diam ut euismod et himenaeos ante tempor, hendrerit lorem volutpat dapibus auctor platea porttitor non luctus. quam etiam tempus cras justo magna elementum nulla non euismod habitant, aliquet libero fermentum facilisis litora taciti senectus interdum molestie tincidunt, aptent nulla erat sociosqu aliquam fames maecenas porttitor dolor. metus pellentesque et arcu class dui pretium, feugiat litora auctor lacus rutrum at per, lacinia ornare posuere fusce vulputate. tincidunt sapien mi morbi nullam ut arcu vestibulum tristique ipsum, mi bibendum morbi cras leo erat sodales ultrices lorem, justo habitasse fusce integer aenean aliquam placerat fusce. \r\n\r\n	Tellus lacinia enim senectus mi nullam augue nostra ultrices primis, commodo pellentesque platea nam sed nam ut sapien aenean proin, integer magna lobortis scelerisque aliquet suspendisse habitasse aliquam. iaculis suspendisse consequat placerat cras dapibus convallis curabitur consequat nec laoreet, blandit torquent morbi mollis nostra suspendisse sollicitudin velit aliquam, donec himenaeos odio faucibus vitae suspendisse phasellus molestie elit. sapien dictumst pellentesque sociosqu hac leo posuere himenaeos, at curabitur pretium blandit commodo aliquam inceptos arcu, convallis ut iaculis risus odio posuere. scelerisque nisl augue molestie quis scelerisque felis ut litora at scelerisque cubilia, accumsan a donec platea quisque aliquam suspendisse sapien placerat. \r\n\r\n	Faucibus habitasse ad sem ut maecenas metus vestibulum nam maecenas velit erat, nisi mi etiam ut malesuada mauris et amet nullam netus vel torquent, ut potenti nibh etiam cubilia vulputate et etiam ligula fermentum. mi fusce etiam maecenas adipiscing vitae eleifend faucibus, enim interdum risus aliquet himenaeos inceptos lectus fames, vulputate purus eros ad lacus eros. etiam justo porta viverra pharetra tempor gravida id quisque, aliquam fames feugiat cras himenaeos luctus suscipit, turpis mauris donec elementum fermentum adipiscing per. consequat suspendisse odio quam purus aenean nostra consectetur aptent laoreet rhoncus, mi lorem potenti volutpat ultricies tincidunt neque sodales et, sodales posuere placerat ultrices orci egestas inceptos praesent etiam. \r\n\r\n	Ut vulputate elementum dolor tincidunt ullamcorper arcu orci tristique, auctor sapien sodales leo mi aenean urna, mattis posuere justo mollis bibendum nec et. congue laoreet lacinia condimentum pharetra mauris massa consectetur nisi cursus eleifend, litora luctus aliquet diam in accumsan facilisis potenti sit purus tincidunt, laoreet ornare diam potenti erat nullam etiam aptent diam. vel etiam nunc ligula iaculis nulla ligula eu, fusce tempor tristique purus varius tristique, amet auctor egestas non aptent accumsan. orci interdum consequat curae aenean lobortis vel auctor, sociosqu adipiscing at commodo dolor faucibus vulputate, convallis imperdiet ornare sed ornare dapibus. \r\n\r\n	Porttitor cursus platea viverra commodo curae est dictum ut orci condimentum, nibh pulvinar laoreet maecenas facilisis accumsan varius quisque a. aliquet dictum nec euismod quis leo cras volutpat quam, aliquam tristique fermentum ullamcorper sodales ipsum fermentum euismod, commodo mauris pulvinar sit pulvinar aliquet neque. lobortis at nulla cursus fringilla mi pellentesque ut lacus, ornare viverra dolor odio dapibus nisl porta, facilisis etiam fermentum primis amet aenean lacus. id dui semper sit quisque lectus consequat varius porttitor ipsum consequat taciti imperdiet amet in, aliquam ad mi quam inceptos senectus sem praesent porta fames ultrices sapien. \r\n\r\n	Ante libero vestibulum morbi faucibus urna quisque lacinia sed nullam pellentesque, commodo accumsan enim diam eu malesuada quis fames aptent lorem, malesuada aliquam dictumst feugiat porta in laoreet luctus non. tellus suscipit aliquam posuere duis morbi cras amet aptent, bibendum neque donec bibendum curabitur primis consectetur odio nibh, etiam taciti inceptos a aliquam ut duis. senectus elit cursus imperdiet morbi laoreet viverra litora vulputate potenti turpis, congue dolor id senectus placerat ligula curabitur tortor nulla eros dapibus, praesent per volutpat massa hac malesuada nostra nunc ante. semper tempus lacinia congue nibh accumsan libero ipsum, placerat eu curae porttitor justo vel, pharetra tempus risus posuere bibendum dui. \r\n\r\n	Morbi netus mi semper nisi sem platea cras habitant, elit gravida faucibus amet blandit turpis ante conubia, imperdiet etiam maecenas dolor nostra urna sem. metus augue auctor non tempor tristique class curae ut per, odio nulla eros senectus curabitur commodo quisque aenean odio, placerat tempus erat convallis tortor eleifend aenean sit. himenaeos pellentesque aenean erat curabitur integer id, qu');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE `imagens` (
  `id_imagem` int(11) NOT NULL,
  `imagem` varchar(45) NOT NULL,
  `nome` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id_imagem`, `imagem`, `nome`) VALUES
(2, '', '19146143-1521517897907571-1954991859278819722-n.jpg'),
(3, '', '33bcae8e28314bef8dbdf7f8e62cc022.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE `noticias` (
  `id` int(4) NOT NULL,
  `id_admin` varchar(45) NOT NULL,
  `titulo` varchar(165) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `data` date NOT NULL,
  `imagem` varchar(122) NOT NULL,
  `noticia` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `id_admin`, `titulo`, `categoria`, `data`, `imagem`, `noticia`) VALUES
(12, 'master', 'Católicos da Arquidiocese de Juiz de Fora celebram Corpus Christi', 'Eventos', '2019-12-31', '19146143-1521517897907571-1954991859278819722-n.jpg', 'Lorem ipsum magna ante hendrerit fusce quisque bibendum pretium ante inceptos integer inceptos, sodales donec fames sollicitudin hac hendrerit felis augue sed sem venenatis. sociosqu convallis posuere duis habitasse vivamus diam phasellus netus, eget volutpat iaculis aptent integer vel id convallis suscipit, mollis suscipit hendrerit mattis fames cras tristique. pulvinar potenti vitae himenaeos feugiat imperdiet molestie dictum venenatis, in nisl condimentum vel eget arcu quis praesent ipsum, pharetra gravida fusce placerat tempus congue dolor. convallis class metus egestas dui semper primis fringilla adipiscing imperdiet ultricies arcu nulla orci elementum, curabitur nulla enim fusce curabitur mollis netus volutpat vulputate ipsum urna lectus torquent. \r\n\r\n	Hac ad curae nostra quisque suspendisse fames felis interdum posuere facilisis accumsan pretium, molestie consequat aenean elementum inceptos mauris cras donec massa praesent magna, sed rhoncus metus sapien nulla tempor suscipit nisi aliquam tempus fusce. himenaeos etiam ut ac porta nulla auctor, urna aliquet morbi tempus varius maecenas inceptos, nostra ad condimentum inceptos magna. semper lobortis tristique id dui feugiat sollicitudin tristique rutrum ut dictum posuere commodo, auctor quisque inceptos pharetra odio quisque euismod massa vehicula duis tincidunt. sed mi placerat tempus fames aptent tellus, duis placerat sed viverra felis, nostra pulvinar auctor erat auctor. '),
(13, 'master', 'Bairro bom pastor', 'História', '2019-12-31', '33bcae8e28314bef8dbdf7f8e62cc022.jpg', 'Nulla blandit platea varius consectetur litora laoreet nibh class aliquam ullamcorper habitant, suspendisse fermentum porttitor vestibulum auctor ac vulputate nostra feugiat nec elit, phasellus a orci id placerat tempor adipiscing leo inceptos amet. id sem consectetur fringilla rhoncus aliquam quisque eleifend arcu interdum velit semper fermentum rutrum ultrices curabitur, aliquam euismod hac euismod dictum congue dolor venenatis lacus integer sodales vulputate nisi feugiat. habitant massa nibh justo faucibus fringilla mi curabitur risus, orci nam molestie taciti sed ac pretium volutpat, duis purus consectetur taciti dictum nulla auctor. duis eu maecenas semper erat velit euismod, facilisis gravida convallis conubia erat eget, maecenas etiam libero faucibus quam. \r\n\r\n	Posuere consectetur donec dolor suspendisse torquent blandit facilisis ipsum, quam fringilla feugiat scelerisque leo suscipit tincidunt habitasse, massa vel et senectus ultricies metus fusce. facilisis arcu aenean morbi volutpat vel mi porta, facilisis porttitor erat urna vestibulum iaculis nunc, pulvinar mollis vehicula molestie hac donec. magna donec class posuere sagittis porttitor bibendum rhoncus placerat, volutpat donec pretium auctor tempus consectetur diam interdum, purus cursus rhoncus aenean etiam congue malesuada. ante aptent bibendum blandit aptent mauris cras ipsum dapibus nam, etiam blandit hac quis mi vestibulum dapibus tempor. litora conubia quam amet porta quisque libero dui convallis ligula maecenas, turpis duis elit enim donec bibendum at vel maecenas, consequat massa proin tempus sollicitudin nibh ipsum luctus eget. \r\n\r\n	Donec nisi praesent quis himenaeos proin, lobortis vitae facilisis vel gravida, leo class hendrerit senectus. mi torquent orci nisl cras ad dapibus elit, duis ornare fusce vel himenaeos netus vehicula, etiam eros consectetur fames potenti sit. congue dolor iaculis varius integer senectus tempor lorem libero non aenean diam, habitant porttitor maecenas dictumst litora morbi curabitur quisque turpis malesuada conubia, dolor mattis tincidunt potenti varius leo netus hac quis donec. vel lacus mattis suscipit potenti cursus mauris libero platea, sollicitudin enim adipiscing quam torquent consectetur lobortis tortor cursus, suscipit aliquet congue primis aenean interdum pharetra. '),
(14, 'master', 'Bom pastor', 'Documentações', '2019-12-31', '3.jpg', 'Nulla blandit platea varius consectetur litora laoreet nibh class aliquam ullamcorper habitant, suspendisse fermentum porttitor vestibulum auctor ac vulputate nostra feugiat nec elit, phasellus a orci id placerat tempor adipiscing leo inceptos amet. id sem consectetur fringilla rhoncus aliquam quisque eleifend arcu interdum velit semper fermentum rutrum ultrices curabitur, aliquam euismod hac euismod dictum congue dolor venenatis lacus integer sodales vulputate nisi feugiat. habitant massa nibh justo faucibus fringilla mi curabitur risus, orci nam molestie taciti sed ac pretium volutpat, duis purus consectetur taciti dictum nulla auctor. duis eu maecenas semper erat velit euismod, facilisis gravida convallis conubia erat eget, maecenas etiam libero faucibus quam. \r\n\r\n	Posuere consectetur donec dolor suspendisse torquent blandit facilisis ipsum, quam fringilla feugiat scelerisque leo suscipit tincidunt habitasse, massa vel et senectus ultricies metus fusce. facilisis arcu aenean morbi volutpat vel mi porta, facilisis porttitor erat urna vestibulum iaculis nunc, pulvinar mollis vehicula molestie hac donec. magna donec class posuere sagittis porttitor bibendum rhoncus placerat, volutpat donec pretium auctor tempus consectetur diam interdum, purus cursus rhoncus aenean etiam congue malesuada. ante aptent bibendum blandit aptent mauris cras ipsum dapibus nam, etiam blandit hac quis mi vestibulum dapibus tempor. litora conubia quam amet porta quisque libero dui convallis ligula maecenas, turpis duis elit enim donec bibendum at vel maecenas, consequat massa proin tempus sollicitudin nibh ipsum luctus eget. \r\n\r\n	Donec nisi praesent quis himenaeos proin, lobortis vitae facilisis vel gravida, leo class hendrerit senectus. mi torquent orci nisl cras ad dapibus elit, duis ornare fusce vel himenaeos netus vehicula, etiam eros consectetur fames potenti sit. congue dolor iaculis varius integer senectus tempor lorem libero non aenean diam, habitant porttitor maecenas dictumst litora morbi curabitur quisque turpis malesuada conubia, dolor mattis tincidunt potenti varius leo netus hac quis donec. vel lacus mattis suscipit potenti cursus mauris libero platea, sollicitudin enim adipiscing quam torquent consectetur lobortis tortor cursus, suscipit aliquet congue primis aenean interdum pharetra. ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceiros`
--

CREATE TABLE `parceiros` (
  `id` int(10) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `link` varchar(60) NOT NULL,
  `imagem` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `parceiros`
--

INSERT INTO `parceiros` (`id`, `nome`, `link`, `imagem`) VALUES
(1, 'google', 'www.google.com', 'logo-parceiro.png');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Índices para tabela `associado`
--
ALTER TABLE `associado`
  ADD PRIMARY KEY (`id_associado`);

--
-- Índices para tabela `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id_imagem`);

--
-- Índices para tabela `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `parceiros`
--
ALTER TABLE `parceiros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `associado`
--
ALTER TABLE `associado`
  MODIFY `id_associado` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id_imagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `parceiros`
--
ALTER TABLE `parceiros`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
