-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2023 at 04:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aictanzania_website_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `album_id` int(20) NOT NULL,
  `album_name` varchar(200) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `creator` varchar(100) NOT NULL,
  `published` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`album_id`, `album_name`, `description`, `creator`, `published`) VALUES
(1, 'Ufunguzi Wa Kanisa La Kalunde AICT Tabora', 'Ufunguzi wa Kanisa la kiinjilisti la Kalunde lilifunguliwa na Askofu Mkuu Silasi Kezakubi tarehe 12/5/2013. Kanisa hili lilianzishwa na Mchungaji Joseph Ipimilo wa Pastorati ya Ipuli Tabora Mjini. Kanisa la Kalunde lipo Uyui nje kidogo ya Tabora mjini.', '', 'published'),
(2, 'UFUNGUZI WA CHUO CHA UUGUZI MKULA HOSPITAL', 'Chuo cha Mafunzi ya uuguzi Mkula Hospital kwa jina la Bishop Kisula College of Health and Allied Sciences kiliwekewa jiwe la msingi na kufunguliwa rasmi tarehe 12/12/2013 na raisi wa jamhuri ya muungano wa Tanzania Mheshimiwa Jakaya Mrisho Kikwete.\r\n\r\nTukio hili kubwa la kihistoria katika AICT lilifanyika kwenye eneo la chuo mbele ya ofisi ya administration. Tukio hili liliudhuliwa na viongozi mbalimbali wa kanisa akiwemo Askofu mkuu Silas Majaliwa Kezakubi, katibu mkuu Zakayo Bugota, Mkuu wa idara ya afya Dr Shadrack Watugala na viongozi mbalimbali wa kidini na serikali, pamoja na watu wote kwa ujumla.\r\n\r\nHospitali ya Mkula ni mmoja ya vituo vya afya vkubwa na tegemezi katika mkoa wa Simiu, imekuwa ikitoka mafunzo ya uuguzi ngazi ya cheti, kwa sasa Mkula itaweza kutoa mafunzo ya uuguzi kwa ngazi ya diploma.', '', 'published'),
(3, 'UFUNGUZI WA CHUO CHA UUGUZI MKULA HOSPITAL', 'Chuo cha Mafunzi ya uuguzi Mkula Hospital kwa jina la Bishop Kisula College of Health and Allied Sciences kiliwekewa jiwe la msingi na kufunguliwa rasmi tarehe 12/12/2013 na raisi wa jamhuri ya muungano wa Tanzania Mheshimiwa Jakaya Mrisho Kikwete.\r\n\r\nTukio hili kubwa la kihistoria katika AICT lilifanyika kwenye eneo la chuo mbele ya ofisi ya administration. Tukio hili liliudhuliwa na viongozi mbalimbali wa kanisa akiwemo Askofu mkuu Silas Majaliwa Kezakubi, katibu mkuu Zakayo Bugota, Mkuu wa idara ya afya Dr Shadrack Watugala na viongozi mbalimbali wa kidini na serikali, pamoja na watu wote kwa ujumla.\r\n\r\nHospitali ya Mkula ni mmoja ya vituo vya afya vkubwa na tegemezi katika mkoa wa Simiu, imekuwa ikitoka mafunzo ya uuguzi ngazi ya cheti, kwa sasa Mkula itaweza kutoa mafunzo ya uuguzi kwa ngazi ya diploma.', '', 'published'),
(4, 'Harusi ya Mwinjilisti Charles Bundi', 'Harusi ya Mwinjilisti wa AICT Ndug Charles Bundi na binti Neema Magwesela waliofunga pingu za maisha tarehe 13/10/2013. Harusi lifanyika tabora mjini katika kanisa mama la dayosisi ya tabora Kitete.\r\n\r\nHarusi hii iliudhuliwa na viongozi mbalimbali wa AICT akiwemo Askofu Mkuu Silas Majaliwa Kezakubi pamoja na mama askofu, Askofu wa diosisi ya Geita Mussa Masanja Magwesela na mama Askofu na viongozi wengineo. Harusi hii iliudhuliwa na mamia wa waumini wa AICT kutoka sehemu mbalimbali wakiwemo ngugu za maharusi.\r\n\r\nHarusi hii ilifungishwa na Mch Alphonce Tambaru ambaye pia ni katibu wa dayosisi ya tabora na mchungaji wa pastorati ya Sikonge.', '', 'unpublished'),
(5, 'Mahubiri ya AICT Makongoro', 'Mahubiri yalifanyika siku ya Jumamoso ya 28/2/2014 kiongozi alikuwa binti Bahati Benjamini na mwimbishaji alikuwa Paulo Buyemba na kiongozi alikuwa Mchungaji Lugayila akimuongoza mhubiri Askofu Masanja Magwesela.', '', 'published'),
(6, 'AIC BWIRU CHOIR', 'AICT BWIRU CHOIR, wanatarajia kuzindua Albam yao ya CHOMOKA tarehe 10/08/2014 uwanja wa ccm kiruma Mwanza.', '', 'published'),
(7, 'Siku ya kwnza: SAFARI YA IDARA YA INJILI NA MISHENI AICT â€œLIVE BURUNDIâ€', 'Siku ya kwnza: SAFARI YA IDARA YA INJILI NA MISHENI AICT â€œLIVE BURUNDIâ€', 'Paul Bunyemba', 'unpublished'),
(8, 'Siku ya kwanza: SAFARI YA IDARA YA INJILI NA MISHENI AICT â€œLIVE BURUNDIâ€', 'Siku ya kwanza: SAFARI YA IDARA YA INJILI NA MISHENI AICT â€œLIVE BURUNDIâ€', 'Paul Bunyemba', 'unpublished'),
(9, 'Siku ya kwanza: SAFARI YA IDARA YA INJILI NA MISHENI AICT â€œBURUNDI LIVEâ€', 'Siku ya kwanza: SAFARI YA IDARA YA INJILI NA MISHENI AICT \"BURUNDI LIVEâ€', 'Paul Bunyemba', 'unpublished'),
(10, 'Siku ya kwanza: SAFARI YA IDARA YA INJILI NA MISHENI AICT â€œ BURUNDI LIVEâ€', 'Siku ya kwanza: SAFARI YA IDARA YA INJILI NA MISHENI AICT â€œ BURUNDI LIVEâ€', 'Paul Bunyemba', 'published'),
(11, 'â€œSiku ya piliâ€ Kikundi cha Injili na Misheni kilifundisha Imani ya Kanisa la AICT Nchini  Burundi \'LIVE\'', 'â€œSiku ya piliâ€ Kikundi cha Injili na Misheni kilifundisha Imani ya Kanisa la AICT Nchini  Burundi \'LIVE\'', 'Paul Bunyemba', 'published'),
(12, 'Siku ya tatu: Eneo litakapo jengwa makao makuu ya AIC Burundi â€œLIVEâ€', 'Siku ya tatu: Eneo litakapo jengwa makao makuu ya AIC Burundi â€œLIVEâ€', 'Paul Bunyemba', 'unpublished'),
(13, 'MAAZIMISHO YA MIAKA 21 YA DAYOSISI YA MWANZA', 'Dayosisi ya Mwanza, imeazimisha miaka 21 tangu kuanzishwa kwake. Maazimisho haya yamefanyika katika kiwanja cha CCM kirumba, Kirumba Mwanza. Maazimisho haya yalihudhuriwa na viongozi mbalimbali wa kanisa wakiwemo maaskofu wa dayosisi zote, maaskofu waastafu, wachungaji na makatibu. Vikundi mbalimbali vya kwaya vilimuuimbia Bwana. Maadhimisho haya yalihudhuliwa na waumini kutoka sehemu mbali mbali.', 'Kezakubi Silasi', 'unpublished'),
(14, 'MAAZIMISHO YA MIAKA 21 YA DAYOSISI YA MWANZA', 'Dayosisi ya Mwanza, imeazimisha miaka 21 tangu kuanzishwa kwake. Maazimisho haya yamefanyika katika kiwanja cha CCM kirumba, Kirumba Mwanza. Maazimisho haya yalihudhuriwa na viongozi mbalimbali wa kanisa wakiwemo maaskofu wa dayosisi zote, maaskofu waastafu, wachungaji na makatibu. Vikundi mbalimbali vya kwaya vilimuuimbia Bwana. Maadhimisho haya yalihudhuliwa na waumini kutoka sehemu mbali mbali.', 'Kezakubi Silasi', 'published'),
(15, 'IBADA YA KUMWEKEA WAKFU, ASKOFU JONH BUNANGO MUDITI NA KUMSIMIKA KAZINI.', 'Ibada ya kumwekea wakfu, Askofu John Bunango Muditi, ilifanyika tarehe 19/10/2014 katika uwanja vya CCM Kirumba Mwanza. Ibada hii ilihudhuriwa na Makamu wa Raisi ambaye ndiye alikuwa mgeni rasmi, Maaskofu wote wa AICT pamoja na Maaskofu kutoka madhehebu mengine, wachungaji, viongozi na mamia ya waumini kutoka sehemu mbalimbali.', 'Kezakubi Silasi', 'published'),
(16, 'UFUNGUZI WA MADARASA NA OFISI YA CHUO CHA UUGUZI KOLANDOTO.', 'Ufunguzi wa madarasa na ofisi ya chuo cha uuguzi AICT Kolandoto, ulifanyika tarehe 31/10/2014 katika eneo la Chuo cha Uuguzi cha Kolondoto, dayosisi ya Shinyanga. Mgeni rasmi alikuwa Askofu Mkuu wa AICT Silas Kezakubi, ambaye alifuatana na Katibu Mkuu wa AICT Mch Zakayo Bugota. Uzinduzi ulihudhuliwa pia na viongozi wa Idara ya Afya kama vile Mwenyekiti wa Bodi, Mkurugenzi mkuu Dkt Shadrack Watugala, Mkuu wa Chuo cha uuguzi Kolandoto Ndg Daudi Malimi, pamoja na madkitari, wauguzi, waumini wa AICT na watu mbalimbali.', 'Kezakubi Silasi', 'published'),
(17, 'UTOAJI WA VYETI KWA WAHITIMU WA MAFUNZO YA UUGUZI KOLANDOTO.', 'Mahafali ya kutoa vyeti kwa wahitimu wa Mafunzo ya uuguzi katika chuo cha Kolandoto yalifanyika tarehe 31/10/2014 Kolandoto Shinyanga. Vyeti vilitolewa na Askofu Mkuu, Silas Kezakubi kwa wahitimu wote wa mafunzo hayo. Sherehe hio ilihudhuriwa na Katibu Mkuu, Mwenyekiti wa bodi ya afya, Mkurugenzi wa Idara ya Afya, Mkuu wa Chuo, wafanyakazi, viongozi na watu mbalimbali.', 'Kezakubi Silasi', 'published'),
(18, 'SIKU NNE ZA MAADHIMISHO YA MIAKA 20 YA AICT DAYOSISI YA MARA NA UKEREWE TAR 06-09, NOVEMBER 2014.', 'Kanisa la AICT Dayosisi ya Mara na Ukerewe lipo katika Maadhimisho ya kutimiza miaka 20 ya Dayosisi ya AICT MARA & UKERERWE tangu kuanzishwa Mwaka 1993. Sherehe hizo zinafanyika katika Uwanja wa Karume wa CCM Musoma.  Mstari Mkuu katika maadhimisho haya ni kutoka katika kitabu cha Waefeso 1:3  â€˜Atukuzwe Mungu, Baba wa Bwana wetu Yesu Kristo, aliyetubariki kwa baraka zote za rohoni, katika ulimwengu wa roho, ndani yake Kristoâ€™\r\n\r\nMgeni rasmi katika sherehe hizo ni Askofu Mkuu Silas Yego kutoka AIC Kenya anashirikiana na Maaskofu wote wa AIC Tanzania katika kuhubiri Neno la Mungu. Pia maadhimisho haya yameambatana na  kwaya mbalimbali ambazo zinaimba na kumsifu Mungu.', 'andrew mawanda', 'published'),
(19, 'SIKU NNE ZA MAADHIMISHO YA MIAKA 20 YA AICT DAYOSISI YA MARA NA UKEREWE TAR 06-09, NOVEMBER 2014.', 'Kanisa la AICT Dayosisi ya Mara na Ukerewe lipo katika Maadhimisho ya kutimiza miaka 20 ya Dayosisi ya AICT MARA & UKERERWE tangu kuanzishwa Mwaka 1993. Sherehe hizo zinafanyika katika Uwanja wa Karume wa CCM Musoma.  Mstari Mkuu katika maadhimisho haya ni kutoka katika kitabu cha Waefeso 1:3  â€˜Atukuzwe Mungu, Baba wa Bwana wetu Yesu Kristo, aliyetubariki kwa baraka zote za rohoni, katika ulimwengu wa roho, ndani yake Kristoâ€™\r\n\r\nMgeni rasmi katika sherehe hizo ni Askofu Mkuu Silas Yego kutoka AIC Kenya anashirikiana na Maaskofu wote wa AIC Tanzania katika kuhubiri Neno la Mungu. Pia maadhimisho haya yameambatana na  kwaya mbalimbali ambazo zinaimba na kumsifu Mungu.', 'andrew mawanda', 'unpublished'),
(20, 'Maaskofu wahudhuria mazishi ya Mzee Andrew Yohana Kinuno', 'Askofu Mkuu Silas Kezakubi, ambaye pia ni Askofu wa Dayosisi ya Tabora, na Askofu John Kanoni Nkola wa Dayosisi ya Shinyanga hivi karibuni walihudhuria ibada ya mazishi ya Mkristo mjini Tabora. Askofu John Kanoni Nkola alihuri katika mazishi hayo ya Mzee Andrew Yohana Kinuno ambaye alifariki tarehe 10-8-2015 na kuzikwa 12-8-2015. MzeeKinuno alikuwa mstari wa mbele katika shughuri nzima ya uanzishwaji wa AICT Dayosisi ya Tabora hapo 2006 na hivyo kuwa karibu sana na viongozi hao wa kanisa.', 'Kezakubi Silasi', 'published'),
(21, 'Faragha ya Maaskofu na wake wao', 'Hivi karibuni maaskofu wote sita wa Africa Inland Church Tanzania pamoja na wake zao walikuwa na faragha ya maombi katika kituo cha Sanga Sanga kinachoendeshwa na Dayosisi ya Pwana ya kanisa hilo. Faragha hiyo ya siku tatu ilikuwa ya maandalizi ya Mkutano wa kuadhimisha miaka 20 ya dayosisi hiyo ya Pwani. Maombi hayo ya faragha yalianza Novemba 23 hadi 25, na tarehe 26 maaskofu hao pamoja na wenzi wao walisafiri kwenda Dar-es-Salaam tayari kwa kuanza kwa maadhimisho kesho yake.\r\n\r\nMhubiri katika wa faragha hiyo alikuwa ni Mchugaji Tonny Surgent kutoka Wingereza. Wakati wa kuhitimisha faragha hiyo, mgeni huyo alisisitiza umuhimu wa watumishi wa kada mbali mbali katika kanisa, na hasa walioko katika maeneo ambayo kanisa bado ni change, kupata mafunzo ya kazi zao. Aliahidi kuendelea kuiombea Dayosisi ya Pwani na kanisa zima la Africa Inland Church Tanzania kuwa na vituo vya kutolea mafunzo ya namna hiyo.', 'Kezakubi Silasi', 'published'),
(22, 'Askofu Charles Salala Afanya Ziara ya Kikazi Katika Dayosisi ya Tabora', 'Askofu Charles Salala wa AICT Dayosisi ya Pwani, akiwa ameambatana na mkewe, hivi karibuni alifanya ziara ya kikazi katika AICT Dayosisi ya Tabora. Akiwa katika ziara hiyo, ambayo ilianza December 19, 2015 na kukamilika January 4, 2016, Askofu Salala alibariki na kuwaingiza kazini wachungaji wawili ambao ni Mchungaji Simon Kuhanda wa kanisa la Usevya katika Mkoa wa Katavi, Wilaya ya Mulele na Mchungaji Daniel Malale wa kanisa la Mwamapuli katika Mkoa huo huo na Wilaya hiyo hiyo. Aidha, katika kipindi hicho chote, Askofu alihubiri katika makanisa 12 na kuweka mawe ya msingi kwenye majengo 6. Kiongozi huyo wa kanisa alihitimisha ziara yake kwa kubariki ndoa kumi na moja katika kanisa la Katavi lililoko kwenye mji wa Mpanda Mkoani katavi.', 'Kezakubi Silasi', 'published'),
(23, 'TUKIO LA KUBARIKI NA KUGAWA VYETI VIPYA VYA NDOA', 'Tukio hili lilifanyika 8/8/2017 katika ukumbi wa AICT Makongoro, Mwanza. Tukio hili la kubariki ndoa na kutoa vyeti vipya lilifanywa na Askofu Mkuu, Silas Kezakubi. Viongozi na watumishi mbalimbali walibariki ndoa zao na kukabidhiwa vyeti vipya na Askofu Mkuu.', 'Kezakubi Silasi', 'unpublished'),
(24, 'TUKIO LA KUBARIKI NA KUGAWA VYETI VIPYA VYA NDOA', 'Tukio hili lilifanyika tarehe 8/8/2017 katika ukumbi wa AICT, makongoro Mwanza. Tukio hili liliongozwa na Baba Askofu Mkuu, Silas Kezakubi katika kubariki na kugawa vyeti vipya vya ndoa kwa watumishi.', 'Kezakubi Silasi', 'published'),
(25, 'KIKAO CHA MPANGO MKAKATI WA AICT', '<p>Kikao cha Mpango mkakati wa AICT kinafanyika kuanzia leo tarehe 17/12/2018 mpaka tarehe 19/12/2018. Dhumuni la kikao hiki ni kuweza kulipatia kanisa letu mpango mkakati wa kuliendesha kwa utaratibu bora na malengo yanayoendana KUTOKA NGAZI YA JUU MPAKA YA CHINI. Kikao hiki kinaongozwa na Askofu Mkuu Mussa Magwesela, kikijumuisha ofisi ya Katibu Mkuu Kiongozi Mch Josephales Mtebe, dayosisi zote pamoja na idara zote za AICT.&nbsp;</p>', '', 'unpublished'),
(26, 'KIKAO CHA MPANGO MKAKATI WA AICT', '<p>Kikao hiki kinafanyika kuanzia leo tarehe 17/12/2018 mpaka tarehe 19/12/2018. Dhumuni la kikao hiki ni kuliwezesha kanisa kuweza kupata mpango mkakati ambao utalifanikisha kanisa katika kutimiza malengo yake kiufanisi zaidi na kwa ushirikiano kutoka ngazi ya juu mpaka ya chini. Kikao hiki kinachoongozwa na Baba Askofu Mkuu Mussa Magwesela, pamoja na ofisi ya Katibu Mkuu kiongozi Mch. Josephales Mtebe,dayosisi zote za AICT pamoja na idara zote kwa ujumla.</p>', 'Kezakubi Silasi', 'published'),
(27, 'MAAFALI YA KWANZA YA CHUO CHA BIBLIA, KANDA YA TABORA', '<p><span style=\"background-color:rgb(255, 255, 255); color:rgb(29, 33, 41); font-family:helvetica,arial,sans-serif; font-size:14px\">Maafali ya kwanza ya chuo cha Biblia, kanda ya Tabora (Tabora Bible school). Maafali hayo yalifanyika dayosisi ya Tabora, mgeni rasmi akiwa Ask Silas M. Kezakubi. Wanafunzi 28 walihitimu mafunzo yao katika awamu ya kwanza ya maafali ya chuo hicho. Neno Kuu lilitoka katika Kitabu cha Isaya 6.8 &quot;KISHA NIKASIKIA SAUTI YA BWANA , AKISEMA NIMTUME NANI, NAYE NI NANI ATAKAYEKWENDA KWA AJILI YETU? NDIPO NILIPOSEMA, MIMI HAPA, NITUME MIMI.&quot;</span></p>', 'Kezakubi Silasi', 'published'),
(28, 'IBADA YA KUSTAAFU KWA ASKOFU CHARLES SALALAH WA DAYOSISI YA PWANI', '<p>Ibada ilifanyika tarehe 31/01/2021 katika ukumbi wa Diamond Jubilee Dar es Salaam</p>', 'Enock Magwesela', 'published'),
(29, 'TAMASHA LA UIMBAJI KUSTAAFU KWA ASKOFU CHARLES SALALAH WA DAYOSISI YA PWANI', 'Tamasha ilifanyika katika kanisa la AICT Chang\'ombe Dar es Salaam tarehe 30 Januari 2021. Baadhi ya kwaya za AICT Dayosisi ya Pwani waliweza kuimba katika tamasha hilo.', 'Enock Magwesela', 'published'),
(30, 'KONGAMANO LA VIJANA KITAIFA 2021', 'Kongamano la maombi kitaifa lililofanyika katika Shule ya Sekondari Musoma, Dayosisi ya Mara na Ukerewe', 'Enock Magwesela', 'published'),
(31, 'KONGAMANO LA WANAWAKE KITAIFA 2021 LILILOFANYIKA KATIKA DAYOSISI YA GEITA', 'Kongamano la wanawake kitaifa ilifanyika katika Shule ya Sekondari ya Wasichana Nyankumbu Geita, Dayosisi ya Geita.', 'Enock Magwesela', 'published'),
(32, 'KONGAMANO LA MAOMBI KITAIFA', 'Kongamano la maombi la tatu kitaifa ilifanyika kuanzia tarehe 26 Julai mpaka tarehe 1 Agosti 2021 katika Kanisa la AICT Buzuruga, Mwanza.  Watu mbalimbali kutoka Dayosisi zote walihudhuria. Walimu waliofundisha masomo katika Kongamano hili ni Askofu Mkuu Mussa Magwesela, Askofu Mstaafu wa Dayosisi ya Pwani Charles Salalah, Askofu Mstaafu wa Dayosisi ya Mara na Ukerewe Dkt. Peter Kitula.\r\nWalkmu wengine ni Askofu wa Dayosisi ya Mara na Ukerewe Peter Phares Kissena na Mwinjilisti Genoveva Mikomangwa.', 'Enock Magwesela', 'published'),
(33, 'SINODI KUU YA AICT 2021', 'Vikao vya Sinodi kuu ya AICT iliyofanyika katika Kanisa la AICT Buzuruga Mwanza, kuanzia tarehe 8 mpaka tarehe 10 Septemba 2021. Sinodi ambayo ilikuwa maalumu kupigia kura mapendekezo mapya ya kuingizwa kwenye katiba ya Kanisa.', 'Enock Magwesela', 'published'),
(34, 'UCHAGUZI KUPITISHA MAPENDEKEZO YA KUINGIZWA KWENYE KATIBA YA KANISA', '<p>Uchaguzi wa kupitisha mapendekezo ya kuingizwa kwenye katiba ya Kanisa. Uchaguzi ulifanyika katika vikao vya Sinodi kuu ya AICT iliyokaa tarehe 9 Septemba, 2021 katika Kanisa la AICT Buzuruga Mwanza.</p>', 'Enock Magwesela', 'published'),
(35, 'AICT - DAYOSISI YA MWANZA, SINODI YA 28, TAREHE 20-21/07/2022 MAKONGORO', '<p>Tunamshukuru <strong>Mungu</strong> kwa kutuwezesha kufanikisha <strong>Sinodi ya 28</strong> ambayo imehudhuriwa na wajumbe <strong>304</strong>, Ofisi ya Askofu kupitia <strong>katibu</strong> <strong>Mch. Philipo Kanwele</strong> imetoa taarifa ya <strong>Katibu wa Dayosisi ya Mwanza</strong>.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; Wajumbe wa Sinodi wamemchagua <strong>Mch. Japhet Kafugo</strong> kuwa Mchungaji msaidizi wa Askofu Dayosisi ya Mwanza, pia <strong>Mwnj. Eliada Bujiku</strong> amechaguliwa kuwa Mwenyekiti Balaza la Fedha Dayosisi Mwanza na wajumbe wake ni <strong>Kelebe Luteli, Jackson Songora na Deus Kadiko.</strong></p>\r\n\r\n<p>Wachungaji wawakilishi wa kanda ni <strong>Mch. Paul L. Salala ( Magu &amp; Busega )</strong>. <strong>Mch.Zablon Kashinje ( Misungwi )</strong>. <strong>Mch. Mathias M. Kadinda ( Kwimba ).</strong></p>', 'admin aict', 'unpublished'),
(36, 'test', '', 'kisb aict', 'unpublished'),
(37, 'IBADA YA KUMSIKA KAZINI ASKOFU MKUU WA AICT MUSSA M. MAGWESELA NA MAKAMU WA ASKOFU ZAKAYO E. BUGOTA 06/11/2022', '', 'admin aict', 'unpublished'),
(38, 'IBADA MAALUMU YA KUSTAAFU KWA ASKOFU SILAS M. KEZAKUBI 04/09/2022', '', 'admin aict', 'unpublished'),
(39, 'Ibada ya KUMSIMIKA kazini Askofu wa Tatu wa AICT Dayosisi ya Pwani Askofu PHILIPO MAFUJA MAGWANO', '', 'admin aict', 'published'),
(40, 'IBADA MAALUMU YA KUMSIMIKA KAZINI ASKOFU MKUU WA AICT MUSSA M. MAGWESELA NA MAKAMU WA ASKOFU ZAKAYO E. BUGOTA', '<p><span dir=\"auto\">IBADA MAALUMU YA KUMSIMIKA KAZINI ASKOFU MKUU WA AICT MUSSA M. MAGWESELA NA MAKAMU WA ASKOFU ZAKAYO E. BUGOT</span><span dir=\"auto\">A. AICT Makongoro kanisa kuu</span></p>', 'admin aict', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `allgroups`
--

CREATE TABLE `allgroups` (
  `group_id` int(11) NOT NULL,
  `groupname` varchar(100) NOT NULL,
  `creator` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `allowedregion`
--

CREATE TABLE `allowedregion` (
  `allowedregion_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `diocese_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

CREATE TABLE `audios` (
  `song_id` int(20) NOT NULL,
  `song_name` varchar(500) NOT NULL,
  `artistes` varchar(100) NOT NULL,
  `ext` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `plays` int(11) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `audios`
--

INSERT INTO `audios` (`song_id`, `song_name`, `artistes`, `ext`, `status`, `plays`, `downloads`) VALUES
(6, 'sample song', 'sample song', 'mp3', 'unpublished', 6160, 2677),
(7, 'Above All', 'Unknown', 'mp3', 'published', 25354, 27308),
(8, 'All Things are Possible', 'Unknown', 'mp3', 'published', 20608, 20114),
(9, 'All We Like Sheep', 'Don Moen', 'mp3', 'published', 20639, 21158),
(10, 'ANCIENT OF DAYS', 'Ron Kenoly/Hosanna Music', 'mp3', 'unpublished', 35268, 42209),
(11, 'Awesome God', 'Michael W Smith', 'mp3', 'published', 118261, 152218),
(12, 'The Old Rugged Cross', 'Alan Jackson', 'mp3', 'published', 59, 97);

-- --------------------------------------------------------

--
-- Table structure for table `bishopdioceses`
--

CREATE TABLE `bishopdioceses` (
  `id` int(11) NOT NULL,
  `bishop_id` int(11) NOT NULL,
  `diocese` int(11) NOT NULL,
  `startdate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bishopdioceses`
--

INSERT INTO `bishopdioceses` (`id`, `bishop_id`, `diocese`, `startdate`) VALUES
(1, 17, 11, 2022),
(2, 16, 8, 1958),
(3, 15, 7, 1993),
(4, 14, 5, 1993),
(5, 13, 4, 2018),
(6, 12, 7, 2000),
(7, 11, 3, 2018),
(8, 10, 2, 2022),
(9, 9, 8, 1985),
(10, 8, 8, 1985),
(11, 7, 7, 2018),
(12, 6, 4, 1993),
(13, 5, 2, 1997),
(14, 4, 6, 2007),
(20, 2, 5, 2004),
(21, 2, 7, 2022),
(22, 10, 7, 2018),
(23, 18, 6, 0),
(24, 19, 5, 0),
(25, 20, 7, 0),
(26, 21, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bishopphotos`
--

CREATE TABLE `bishopphotos` (
  `photo_id` int(20) NOT NULL,
  `bishop_id` int(20) NOT NULL,
  `ext` varchar(4) NOT NULL,
  `published` varchar(50) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bishopphotos`
--

INSERT INTO `bishopphotos` (`photo_id`, `bishop_id`, `ext`, `published`, `caption`) VALUES
(1, 1, 'jpg', 'published', 'no caption'),
(2, 1, 'jpg', 'published', 'no caption'),
(6, 2, 'jpg', 'published', 'no caption');

-- --------------------------------------------------------

--
-- Table structure for table `bishops`
--

CREATE TABLE `bishops` (
  `bishop_id` int(20) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `diocese` varchar(200) NOT NULL,
  `startdate` varchar(50) NOT NULL,
  `wife` varchar(100) NOT NULL,
  `poster_id` int(20) NOT NULL,
  `bio` varchar(10000) NOT NULL,
  `ext` varchar(5) NOT NULL,
  `actret` varchar(15) NOT NULL,
  `rank` varchar(20) DEFAULT '1',
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bishops`
--

INSERT INTO `bishops` (`bishop_id`, `fullname`, `dob`, `diocese`, `startdate`, `wife`, `poster_id`, `bio`, `ext`, `actret`, `rank`, `status`) VALUES
(1, 'Silasi Majaliwa Kezakubi', '20/2/1952', 'TABORA', '2007', '', 29, '', 'jpg', '', '1', 'Inactive'),
(2, 'Mussa Masanja Magwesela', '1962', '7', '2022', 'Rebeka Simon', 0, '<p>Bishop Mussa Masanja Magwesela was born 1962 at Mwadui Mine in Shinyanga Tanzania.</p>\r\n', 'jpg', 'active', '', 'Inactive'),
(3, 'Silas Majaliwa Kezakubi', '20/2/1952', 'TABORA', '2007', 'Eunice Gumba Kezakubi', 0, '<p>Bishop Silas Majaliwa Kezakubi was born in 1952 at Geita.</p>', 'jpg', '', '1', 'Inactive'),
(4, 'Silas Majaliwa Kezakubi', '20/2/1952', '6', '2007', 'Eunice Gumba Kezakubi', 0, '<p>Bishop Silas Majaliwa Kezakubi was born in 1952 at Geita in Lake zone province.</p>\r\n', 'jpg', 'retired', '1', 'active'),
(5, 'Charles S. Salalah', '23/5/1951', '2', '20/7/1997', 'Mariam Nyazobe Salala', 0, '<p>Nilizaliwa katika familia ya Kikristo na nilibatizwa mwaka 1962 lakini nilikutana na Yesu na kubadilisha maisha yangu mwaka 1967. Hii kwangu ilikuwa Luzu yangu kama Yakobo alivyokutana na Bwana alipoondoka kwa wazazi waote. Mwaka 1968 nilijiunga na chuo cha Biblia na safari ya kumtumkia Bwana ilianzia hapo.</p>\r\n', 'JPG', 'retired', '1', 'active'),
(6, 'Peter Mabula Kitula', '28/7/1948', '4', 'November 1993', 'Esther Ndekwa Kitula', 0, '<p>Teacher at Majahida Bible school, student pastor with Christian students (UKWATA) overseeing 22 institutions in Mwanza region. Pastor of AICT Chang&#39;ombe, Dar es salaam, Lecturer at Nassa Theological College, Bishop of Mara and Ukerewe.</p>\r\n\r\n<p>From 2006/2009 was vice chairman of the Christian Council of Tanzania (CCT). In July of 2009, I was voted as chairman until 2013. I have also served as President of the Christian Social Services Commission (CSSC) which is owned by both CCT and Catholic Bishops.</p>\r\n', 'JPG', 'passed away', '', 'Inactive'),
(7, 'Philipo Mafuja', '', '7', '2018', 'Elizabeth Manumbu Mafuja', 0, '<p>Askofu wa nne wa dayosisi ya Mwanza.</p>\r\n', 'jpg', 'active', '1', 'Inactive'),
(8, 'Paulo Nyangwaswa', '', '8', '1985', 'Josephine Nyangwaswa', 0, '<p>Askofu Mkuu wa pili wa AIC Tanzania kutoka mwaka 1985 mpaka mwaka 1994. Pia ni Askofu wa Kwanza wa dayosisi ya Pwani kutoka mwaka 1993 mpaka mwaka 1997.</p>\r\n', 'jpg', 'retired', '1', 'Inactive'),
(9, 'Methusela Paulo Nyangwaswa', '', '8', '1985', 'Josephine Nyangwaswa', 0, '<p>Askofu Mkuu wa pili wa AICT, kutoka mwaka 1985 mpaka mwaka 1994. Pia Askofu wa kwanza wa dayosisi ya Pwani, kutoka mwaka 1993 mpaka mwaka 1997.</p>\r\n', 'jpg', 'retired', '1', 'active'),
(10, 'Philipo Mafuja Magwano', '1976', '2', '2018', 'Elizabeth Manumbu Mafuja', 0, '<p>Askofu wa tatu wa dayosisi ya Pwani</p>\r\n', 'jpg', 'active', '1', 'active'),
(11, 'Zakayo Enock Bugota', '', '3', '2018', 'Kephuleni Musa Mayala', 0, '<p>Askofu wa pili wa dayosisi ya Shinyanga.</p>\r\n', 'jpg', 'active', '1', 'active'),
(12, 'Daniel Bugayo Nungwana', '20/6/1948', '7', '2000', 'Salome Samsoni Magwisha', 0, '<p>Askofu Mkuu wa nne kutoka mwaka 2002 mpaka mwaka 2010. Askofu wa pili wa dayosisi ya Mwanza kutoka mwaka 2000 mpaka mwaka 2013..</p>\r\n', 'jpg', 'passed away', '1', 'active'),
(13, 'Peter Phales Kisena', '', '4', '2018', 'Ruthie Simon', 0, '<p>Askofu wa pili wa dayosisi ya Mara na Ukerewe.</p>\r\n', 'jpg', 'active', '1', 'active'),
(14, 'Zakayo Majige', '1949', '5', '1993', 'Grace Kulwa Mazoya', 0, '<p>Askofu wa kwanza wa dayosisi ya Geita kutoka mwaka 1993 mpaka mwaka 2004.</p>\r\n', 'jpg', 'passed away', '1', 'active'),
(15, 'Samweli Masingili Magesa', '4/3/1933', '7', '1993', 'Lidia Nyamisi Magesa', 0, '<p>Askofu wa kwanza wa dayosisi ya Mwanza kutoka mwaka 1993 mpaka mwaka 1997.</p>\r\n', 'jpg', 'passed away', '1', 'active'),
(16, 'Jeremiah Mahalu Kisula', '1958', '8', '1958', '', 0, '<p>Askofu Mkuu wa kwanza kutoka mwaka 1958 hadi mwaka 1984.</p>\r\n', 'jpg', 'passed away', '1', 'active'),
(17, 'Amos Katoto Ngeze', '1968', '11', '2022', 'Mercy Samweli', 0, '<p>Askofu wa kwanza wa Dayosisi ya kati</p>\r\n', 'jpg', 'active', '1', 'active'),
(20, 'Mussa Masanja Magwesela', '1962', '7', '', 'Rebeka Simon', 0, '<p>Bishop Mussa Masanja Magwesela was born 1962 at Mwadui Mine in Shinyanga Tanzania.</p>\r\n', 'jpg', 'active', '2', 'active'),
(18, 'Joshua Lusato Jacob', '12/04/1972', '6', '2022', 'Pendo Samweli', 0, '<p>Askofu wa pili wa dayosisi ya Shinyanga.</p>\r\n', 'jpg', 'active', '', 'active'),
(19, 'Reuben Yusuph Ng\'wala', '03/01/1960', '5', '', 'Agnes Hoka Kuhoyelwa', 0, '', 'jpg', 'active', '1', 'active'),
(21, 'Peter Mabula Kitula', '28/07/1948', '4', '1993', 'Esther Ndekwa Kitula', 0, '<p>Teacher at Majahida Bible school, student pastor with Christian students (UKWATA) overseeing 22 institutions in Mwanza region. Pastor of AICT Chang&#39;ombe, Dar es salaam, Lecturer at Nassa Theological College, Bishop of Mara and Ukerewe.</p>\r\n\r\n<p>From 2006/2009 was vice chairman of the Christian Council of Tanzania (CCT). In July of 2009, I was voted as chairman until 2013. I have also served as President of the Christian Social Services Commission (CSSC) which is owned by both CCT and Catholic Bishops.</p>\r\n', 'jpg', 'passed away', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`, `status`) VALUES
(1, 'Sports', 1),
(2, 'Agriculture', 1);

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE `children` (
  `child_id` int(11) NOT NULL,
  `child_name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `center` varchar(200) NOT NULL,
  `story` mediumtext NOT NULL,
  `dob` varchar(100) NOT NULL,
  `ext` varchar(5) NOT NULL,
  `poster` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`child_id`, `child_name`, `gender`, `center`, `story`, `dob`, `ext`, `poster`, `status`) VALUES
(12, 'Samson Kitwana', 'male', 'Pamoja Tuwalee', '<p>Samson is living in Tabora.</p>\r\n', '21/2/1996', 'jpg', 4, 'unpublished');

-- --------------------------------------------------------

--
-- Table structure for table `churches`
--

CREATE TABLE `churches` (
  `church_id` int(11) NOT NULL,
  `church` varchar(500) NOT NULL,
  `pastorate_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `churches`
--

INSERT INTO `churches` (`church_id`, `church`, `pastorate_id`, `status`) VALUES
(1, 'Magomeni', 1, 1),
(2, 'Malampaka', 2, 1),
(3, 'Majengo-Kahama', 3, 1),
(4, 'Nyasho', 4, 1),
(5, 'KAMBARAGE', 5, 1),
(6, 'Yeriko', 6, 1),
(7, 'Tabora', 7, 1),
(8, 'Kipalapala', 7, 1),
(9, 'Utula Ideka', 7, 0),
(10, 'Gihu', 2, 1),
(11, 'Muhida', 2, 1),
(12, 'Bukangilika', 2, 1),
(13, 'Kulimi', 2, 1),
(14, 'Mwabulimbu', 2, 1),
(15, 'Nyabubinza', 2, 1),
(16, 'Kazunze', 2, 1),
(17, 'Bweri', 89, 1),
(18, 'Chang\'ombe', 91, 1),
(19, 'Mbande', 91, 1),
(20, 'Mlamleni', 91, 1),
(21, 'Kepston', 91, 1),
(22, 'Tumaini', 92, 1),
(23, 'Kolandoto', 93, 1),
(24, 'Makongoro', 94, 1),
(25, 'Nyakato', 95, 1),
(26, 'Sima', 97, 1),
(27, 'Kazilankanda', 73, 1),
(28, 'Kalangalala', 98, 1),
(29, 'Mwanzugi', 116, 1),
(30, 'Mwalala', 116, 1),
(31, 'Lugubu', 116, 1),
(32, 'Kasulu', 47, 1),
(33, 'Makere', 47, 1),
(34, 'Tandala', 47, 1),
(35, 'Mpeta', 47, 1),
(36, 'Ng\'wanduhubanhu', 47, 1),
(37, 'Songambele', 47, 1),
(38, 'Lugufu', 47, 1),
(39, 'Igunga', 22, 1),
(40, 'Igogo', 22, 1),
(41, 'Mpindo', 22, 1),
(42, 'Mwazizi', 22, 1),
(43, 'Mbutu', 22, 1),
(44, 'Isakamaliwa', 22, 1),
(45, 'Kidalu', 22, 1),
(46, 'Msai', 22, 1),
(47, 'Iguguno', 22, 1),
(48, 'Kinyambuli', 22, 1),
(49, 'Hindishi', 22, 1),
(50, 'Kambikatoto', 11, 1),
(51, 'Kawa', 11, 1),
(52, 'Sipa', 11, 1),
(53, 'Usevya', 36, 1),
(54, 'Kashishi', 36, 1),
(55, 'Msadya', 36, 1),
(56, 'Kibaoni', 36, 1),
(57, 'Nzega', 19, 1),
(58, 'Bulunde', 19, 1),
(59, 'Ihema', 19, 1),
(60, 'Natta', 19, 1),
(61, 'Nzega Ndogo', 19, 1),
(62, 'Katavi', 41, 1),
(63, 'Ibindi', 41, 1),
(64, 'Sikitiko', 41, 1),
(65, 'Ulwila', 41, 1),
(66, 'Choma', 21, 1),
(67, 'Mwaluzwilo', 21, 1),
(68, 'Ifumba', 21, 1),
(69, 'Mwamapuli', 21, 1),
(70, 'Mwashiku', 21, 1),
(71, 'Ng\'hele', 21, 1),
(72, 'Kibondo', 48, 1),
(73, 'Kilemba', 48, 1),
(74, 'Twabagondozi', 48, 1),
(75, 'Kigadye', 48, 1),
(76, 'Mwamashiga', 23, 1),
(77, 'Bulenya', 23, 1),
(78, 'Bukama', 23, 1),
(79, 'Mwamashimba', 23, 1),
(80, 'Jogohya', 23, 1),
(81, 'Mwang\'halanga', 23, 1),
(82, 'Kininginila', 23, 0),
(83, 'Kining\'inila', 23, 1),
(84, 'Mwanyagula', 23, 1),
(85, 'Imalanguzu', 23, 1),
(86, 'Majimoto', 33, 1),
(87, 'Bondeni', 33, 1),
(88, 'Sentaunyenya', 33, 1),
(89, 'Kanindi', 33, 1),
(90, 'Matiga', 33, 1),
(91, 'Bukingwaminzi A', 33, 1),
(92, 'Bukingwaminzi B', 33, 1),
(93, 'Mamba', 32, 1),
(94, 'Kabunde', 32, 1),
(95, 'Kikonko', 32, 1),
(96, 'Nkwilo', 32, 1),
(97, 'Mnazimmoja', 32, 1),
(98, 'Muze', 32, 1),
(99, 'Upele', 39, 1),
(100, 'Mlowoka', 39, 1),
(101, 'Mlimani', 39, 1),
(102, 'Mwendakulima', 39, 1),
(103, 'Mkuyuni', 39, 1),
(104, 'Taragwe', 39, 1),
(105, 'Wimate', 39, 1),
(106, 'Gethsemane', 39, 1),
(107, 'Igunguli', 117, 1),
(108, 'majengo', 117, 0),
(109, 'Ukwanga', 117, 1),
(110, 'Ulyankulu', 117, 1),
(111, 'Ninange', 117, 1),
(112, 'Utulangoko', 117, 1),
(113, 'Tumaini', 117, 1),
(114, 'Mpongolo', 117, 1),
(115, 'Lukaranga', 117, 1),
(116, 'Sawewe', 117, 1),
(117, 'Maendeleo', 117, 1),
(118, 'Igembensabo', 117, 1),
(119, 'Kasekese', 38, 1),
(120, 'Sibwesa', 38, 1),
(121, 'Nkungwi', 38, 1),
(122, 'Kamlenga', 38, 1),
(123, 'Kaseganyama', 38, 1),
(124, 'Kigwa', 10, 1),
(125, 'Makibo', 10, 1),
(126, 'Kinamagi', 10, 1),
(127, 'Musonga', 10, 1),
(128, 'Igurubi', 24, 1),
(129, 'Itunduru', 24, 1),
(130, 'Ntobo', 24, 1),
(131, 'Ibologelo', 24, 1),
(132, 'Mwabadegeleki', 24, 1),
(133, 'Mwajilunga', 24, 1),
(134, 'Kinungu', 24, 1),
(135, 'Kalangale', 24, 1),
(136, 'Urambo', 12, 1),
(137, 'Kasisi', 12, 1),
(138, 'Mpanda', 44, 1),
(139, 'Mwamabiti', 44, 1),
(140, 'Igalukilo', 44, 1),
(141, 'Vikonge', 44, 1),
(142, 'Kabatini', 44, 1),
(143, 'Ifinsi', 44, 1),
(144, 'Nyasa', 20, 1),
(145, 'Nkinga', 20, 1),
(146, 'Ilebula A', 43, 1),
(147, 'Ilebula B', 43, 1),
(148, 'Kamsanga', 43, 1),
(149, 'Kagala', 43, 1),
(150, 'Mkokwa', 43, 1),
(151, 'Mpungu', 118, 1),
(152, 'Isim', 118, 1),
(153, 'Kakola', 118, 1),
(154, 'Mpenge', 118, 1),
(155, 'Inonelwa', 118, 1),
(156, 'Miyega', 118, 1),
(157, 'Ibambo', 118, 1),
(158, 'Usigara', 118, 1),
(159, 'Salla', 118, 1),
(160, 'Msiliembe', 118, 1),
(161, 'Kilungu', 118, 1),
(162, 'Utula Udeka', 7, 1),
(163, 'Mwamapuli', 35, 1),
(164, 'Mkwajuni', 35, 1),
(165, 'Mabambasi', 35, 1),
(166, 'Maimba', 35, 1),
(167, 'Majengo', 117, 1),
(168, 'Mpyagula', 27, 1),
(169, 'Mwina', 27, 1),
(170, 'Kalangale', 27, 1),
(171, 'Mwamakoyesengi', 27, 1),
(172, 'Loya', 28, 1),
(173, 'Mwamabondo', 28, 1),
(174, 'Mwamdalaigwe', 28, 1),
(175, 'Mbulumbulu', 28, 1),
(176, 'Mwamlela', 28, 1),
(177, 'Misole', 26, 1),
(178, 'Itaga', 26, 1),
(179, 'Lutende', 26, 1),
(180, 'Simbo', 26, 1),
(181, 'Izumba', 29, 1),
(182, 'Tindili', 29, 1),
(183, 'Kaliua', 13, 1),
(184, 'Mkuyuni', 13, 1),
(185, 'Ugomagoma', 13, 1),
(186, 'Kasandalala', 13, 1),
(187, 'Zugimlole', 13, 1),
(188, 'Luyembe', 13, 1),
(189, 'Sikonge', 9, 1),
(190, 'Mibono Mpya', 9, 1),
(191, 'Ipuli', 8, 1),
(192, 'Utembwa', 8, 1),
(193, 'Ifucha', 8, 1),
(194, 'Ikongoro', 8, 1),
(195, 'Kidatu B', 8, 1),
(196, 'Konanne', 15, 1),
(197, 'Ishihimulwa', 15, 1),
(198, 'Mhulidede', 15, 1),
(199, 'Kagera', 15, 1),
(200, 'Kigwang\'ona', 15, 1),
(201, 'Mwabayanda', 15, 1),
(202, 'Ishinakalomo', 15, 1),
(203, 'Busenda', 15, 1),
(204, 'Kabanga', 15, 1),
(205, 'Kapalamsenga', 37, 1),
(206, 'Nkuswe', 37, 1),
(207, 'Kamalamansa', 37, 1),
(208, 'Kafisha', 37, 1),
(209, 'Ikola', 37, 1),
(210, 'Mkwajuni', 37, 1),
(211, 'Buhulyu', 18, 1),
(212, 'Gengetisa', 18, 1),
(213, 'Nkumbo', 18, 1),
(214, 'Itenka A', 40, 1),
(215, 'Itenka B', 40, 1),
(216, 'Senso', 40, 1),
(217, 'Tumaini', 40, 1),
(218, 'Imilamate', 40, 1),
(219, 'Sumbawanga', 31, 1),
(220, 'Ilemba', 31, 1),
(221, 'Mpwapwa', 31, 1),
(222, 'Kakese', 42, 1),
(223, 'Mbugani', 42, 1),
(224, 'Kawanzige', 42, 1),
(225, 'Mwamkulu', 42, 1),
(226, 'Imalabupina', 42, 1),
(227, 'Kabage', 42, 1),
(228, 'Ntumba', 42, 1),
(229, 'Mnyagala', 42, 1),
(230, 'Kayenze', 42, 1),
(231, 'Kapanga', 42, 1),
(232, 'Kigoma', 46, 1),
(233, 'Uvinza', 46, 1),
(234, 'Kazuramimba', 46, 1),
(235, 'Kamsisi', 45, 1),
(236, 'Imalabuduki', 45, 1),
(237, 'Songambele', 45, 1),
(238, 'Nambamoja', 45, 1),
(239, 'Bukene', 17, 1),
(240, 'Itobo', 17, 1),
(241, 'Mahene', 17, 1),
(242, 'Usinge', 14, 1),
(243, 'Ugansa', 14, 1),
(244, 'Reli Mpya', 14, 1),
(245, 'Mitimitano', 14, 1),
(246, 'Nditimo', 14, 1),
(247, 'Mwamapuli', 14, 1),
(248, 'Songambele', 14, 1),
(249, 'Kabakota', 14, 1),
(250, 'Namanyele', 34, 1),
(251, 'Palamawe', 34, 1),
(252, 'Mambali', 16, 1),
(253, 'Ngalamila', 16, 1),
(254, 'Busangu', 16, 1),
(255, 'Ibota', 16, 1),
(256, 'Kazima', 16, 1),
(257, 'Kawe', 16, 1),
(258, 'Morogoro Mjini', 108, 1),
(259, 'Kihonda', 108, 1),
(260, 'Kiroka', 108, 1),
(261, 'Mvuha', 108, 1),
(262, 'Kilengezi', 108, 1),
(263, 'Duthumi', 108, 1),
(264, 'Air Port', 106, 1),
(265, 'Simike', 249, 1),
(266, 'Mswiswi', 249, 1),
(267, 'Ilongo', 249, 1),
(268, 'Azimio', 249, 1),
(269, 'Mtoro', 249, 1),
(270, 'Endamaga', 250, 1),
(271, 'Oltiro', 250, 1),
(272, 'Jobagi', 250, 1),
(273, 'Kisiriri', 250, 1),
(274, 'Mbuyuni', 250, 1),
(275, 'Gidamilanda', 250, 1),
(276, 'MajiMoto', 250, 1),
(277, 'Karatu', 250, 1),
(278, 'Kinyinyi', 250, 1),
(279, 'MWASELE', 5, 1),
(280, 'BUSHUSHU', 5, 1),
(281, 'NDALA', 254, 1),
(282, 'MWAWAZA', 254, 1),
(283, 'NEGEZI', 254, 1),
(284, 'BUGIMBAGU', 254, 1),
(285, 'CHIBE', 255, 1),
(286, 'LUBAGA', 255, 1),
(287, 'MWAMAPALALA', 255, 1),
(288, 'MAJI CLUB', 255, 1),
(289, 'ILULAMBULI', 255, 1),
(290, 'NGUNG\'WE', 255, 1),
(291, 'OLD SHINYANGA', 256, 1),
(292, 'MWAMADILANHA', 256, 1),
(293, 'PANDAGICHIZA', 256, 1),
(294, 'LYANDU', 256, 1),
(295, 'BULAMBILA', 256, 1),
(296, 'NHOBOLA', 256, 1),
(297, 'MWALUKWA', 256, 1),
(298, 'NGOKOLO', 257, 1),
(299, 'MATANDA', 257, 1),
(300, 'NDEMBEZI', 257, 1),
(301, 'MAGEUZI', 257, 1),
(302, 'Bukoli', 258, 1),
(303, 'Ihega', 258, 1),
(304, 'Bugogo', 258, 1),
(305, 'Shahende', 258, 1),
(306, 'Ntono', 258, 1),
(307, 'Wigo', 258, 1),
(308, 'Butwa', 259, 1),
(309, 'Mchangani', 259, 1),
(310, 'Izumacheli', 259, 1),
(311, 'Lulegea', 259, 1),
(312, 'Bulongelo', 259, 1),
(313, 'Lunazi', 259, 1),
(314, 'Nyakaswi', 260, 1),
(315, 'Kaseme', 260, 1),
(316, 'Bujula', 260, 1),
(317, 'Nyamakala', 260, 1),
(318, 'Ibambila', 260, 1),
(319, 'Lwabahinda', 260, 1),
(320, 'Idetemya', 261, 1),
(321, 'Nyamikonze', 261, 1),
(322, 'Iyenze', 261, 1),
(323, 'Sengerema', 261, 1),
(324, 'Sayuni', 261, 1),
(325, 'Mwingiro', 261, 1),
(326, 'Nyaseke', 262, 1),
(327, 'Nyambogo', 262, 1),
(328, 'Bulela', 262, 1),
(329, 'Gamadi', 262, 1),
(330, 'Igwaka', 262, 1),
(331, 'Bumanji', 262, 1),
(332, 'Bunegezi', 263, 1),
(333, 'Nyakato', 263, 1),
(334, 'Nyanguku', 263, 1),
(335, 'Bushishi', 263, 1),
(336, 'Igenge', 263, 1),
(337, 'Itemelo', 263, 1),
(338, 'Nkome', 264, 1),
(339, 'Makulugusi', 264, 1),
(340, 'Ihumilo', 264, 1),
(341, 'Mharamba', 264, 1),
(342, 'Bugonde', 264, 1),
(343, 'Munyala', 264, 1),
(344, 'Nyamboge', 265, 1),
(345, 'Katoma', 265, 1),
(346, 'Itale', 265, 1),
(347, 'Chelameno', 265, 1),
(348, 'Njingami', 265, 1),
(349, 'Nyakazeze', 265, 1),
(350, 'Buyombe', 266, 1),
(351, 'Buyagu', 266, 1),
(352, 'Mubabani', 266, 1),
(353, 'Iponyamakalai', 266, 1),
(354, 'Kagondo', 266, 1),
(355, 'Ilyamchele', 266, 1),
(356, 'Ibondo', 266, 1),
(357, 'Nyarugusu', 267, 1),
(358, 'Nazareth', 267, 1),
(359, 'Nyaruyeye', 267, 1),
(360, 'Ng\'wabageni', 267, 1),
(361, 'Buziba', 267, 1),
(362, 'Ikandilo', 267, 1),
(363, 'Kalivali', 267, 1),
(364, 'Chikobe', 268, 1),
(365, 'Kasang\'hwa', 268, 1),
(366, 'Nyachiluluma', 268, 1),
(367, 'Muselwani', 268, 1),
(368, 'Chemamba', 268, 1),
(369, 'Nyakasenya', 268, 1),
(370, 'Kageye', 268, 1),
(371, 'Nyandago', 268, 1),
(372, 'Lwamugasa', 269, 1),
(373, 'Munekezi', 269, 1),
(374, 'Katangalo', 269, 1),
(375, 'Mabamba', 269, 1),
(376, 'Magenge', 269, 1),
(377, 'Nyamalulu', 269, 1),
(378, 'Sayuni', 269, 1),
(379, 'Iseni', 269, 1),
(380, 'Bethelehemu', 270, 1),
(381, 'Ng\'wabasabi', 270, 1),
(382, 'Magogo', 270, 1),
(383, 'Buhalahala', 270, 1),
(384, 'Shinde', 270, 1),
(385, 'Sayuni', 270, 1),
(386, 'Kanani', 270, 1),
(387, 'Ebeneza', 270, 1),
(388, 'Kasamwa Ginnery', 271, 1),
(389, 'Yerusalemu', 271, 1),
(390, 'Chabulongo', 271, 1),
(391, 'Mkoba', 271, 1),
(392, 'Bung\'wangoko', 271, 1),
(393, 'Shilabela', 271, 1),
(394, 'Mshinde', 271, 1),
(395, 'Bethania', 271, 1),
(396, 'Nyakahako', 272, 1),
(397, 'Betheli (Kijiweni)', 272, 1),
(398, 'Kazunzu', 272, 1),
(399, 'Lugongo', 272, 1),
(400, 'Mbalagane', 272, 1),
(401, 'Emmaus', 272, 1),
(402, 'Nyangugano', 272, 1),
(403, 'Bethania', 272, 1),
(404, 'Chifunfu', 272, 1),
(405, 'Nyawilimilwa', 273, 1),
(406, 'Emau', 273, 1),
(407, 'Bethania', 273, 1),
(408, 'Kagu', 273, 1),
(409, 'Chankungu', 273, 1),
(410, 'Nyamigana', 273, 1),
(411, 'Lwemo', 273, 1),
(412, 'Mlamani', 273, 1),
(413, 'Kanyange', 273, 1),
(414, 'Mhangizi', 273, 1),
(415, 'Nyarubanga', 273, 1),
(416, 'Kamulale', 273, 1),
(417, 'Nyamalimbe', 274, 1),
(418, 'Shinyamwendwa', 274, 1),
(419, 'Lwamwizo', 274, 1),
(420, 'Nyang\'hanga', 274, 1),
(421, 'Wavu', 274, 1),
(422, 'Nzera', 275, 1),
(423, 'Igate', 275, 1),
(424, 'Sungusela', 275, 1),
(425, 'Kisesa', 275, 1),
(426, 'Nyitundu', 275, 1),
(427, 'Tumaini', 276, 1),
(428, 'Bondeni', 276, 1),
(429, 'Kaduda', 276, 1),
(430, 'Mihumba', 276, 1),
(431, 'Kasesa', 276, 1),
(432, 'Imani', 277, 1),
(433, 'Ludete', 277, 1),
(434, 'Yerusalemu', 277, 1),
(435, 'Ibondo \'A\'', 277, 1),
(436, 'Ibondo \'B\'', 277, 1),
(437, 'Buzanaki', 278, 1),
(438, 'Nyamigogo \'A\'', 278, 1),
(439, 'Nyamigogo \'B\'', 278, 1),
(440, 'Bukayaga', 278, 1),
(441, 'Kalemelo', 278, 1),
(442, 'Kasamwa', 279, 1),
(443, 'Nyabubele', 279, 1),
(444, 'Mwilima', 279, 1),
(445, 'Ibanda Senta', 279, 1),
(446, 'Nazareti', 279, 1),
(447, 'Gengesaba', 280, 1),
(448, 'Kasungamile', 280, 1),
(449, 'Bufunda', 280, 1),
(450, 'Ilangasika', 280, 1),
(451, 'Kashishi', 280, 1),
(452, 'Nyalwanzaja', 281, 1),
(453, 'Kamena', 281, 1),
(454, 'Nyabulolo', 281, 1),
(455, 'Semba', 281, 1),
(456, 'Nyashirima', 281, 1),
(457, 'Lushimba', 282, 1),
(458, 'Sayuni', 282, 1),
(459, 'Kafita', 282, 1),
(460, 'Kanegele', 282, 1),
(461, 'Israeli', 282, 1),
(462, 'Lwezera', 283, 1),
(463, 'Itelangoma', 283, 1),
(464, 'Membe', 283, 1),
(465, 'Bweya', 283, 1),
(466, 'Nyaruzuguti', 283, 1),
(467, 'Nyamililo', 284, 1),
(468, 'Bukondya', 284, 1),
(469, 'Kasungamile', 284, 1),
(470, 'Nyantakubwa', 284, 1),
(471, 'Ishokela', 284, 1),
(472, 'Ndelema', 285, 1),
(473, 'Imalampaka', 285, 1),
(474, 'Bujura', 285, 1),
(475, 'Mhama', 285, 1),
(476, 'Kasota', 286, 1),
(477, 'Samaria', 286, 1),
(478, 'Bugulula', 286, 1),
(479, 'Ebeneza', 286, 1),
(480, 'Bugalama', 287, 1),
(481, 'Yeriko', 287, 1),
(482, 'Kanaani', 287, 1),
(483, 'Misiri', 287, 1),
(484, 'Kayenze \'B\'', 288, 1),
(485, 'Nungwe', 288, 1),
(486, 'Nyawilolwa', 288, 1),
(487, 'Bondeni', 288, 1),
(488, 'Nyatongo', 289, 1),
(489, 'Nyamatongo', 289, 1),
(490, 'Kamanga', 289, 1),
(491, 'Karumo', 289, 1),
(492, 'Chemagati', 289, 1),
(493, 'Nyakagwe', 290, 1),
(494, 'Ngura', 290, 1),
(495, 'Butobera', 290, 1),
(496, 'Nyaseki', 290, 1),
(497, 'Iligamba', 291, 1),
(498, 'Bulyahilu', 291, 1),
(499, 'Mizuri', 291, 1),
(500, 'Bulolo', 291, 1),
(501, 'Buyange', 292, 1),
(502, 'Chigunga', 292, 1),
(503, 'Kabugoso', 292, 1),
(504, 'Nyakafuro', 292, 1),
(505, 'Kharumwa', 293, 1),
(506, 'Izunya', 293, 1),
(507, 'Bumanda', 293, 1),
(508, 'Chigunga', 294, 1),
(509, 'Buyange', 294, 1),
(510, 'Kabugoso', 294, 1),
(511, 'Nyakafuro', 294, 1),
(512, 'Nyijundu', 295, 1),
(513, 'Nyarubele', 295, 1),
(514, 'Ibolelo', 295, 1),
(515, 'Kasubuya', 295, 1),
(516, 'Mabogo', 296, 1),
(517, 'Mweja', 296, 1),
(518, 'Mimbili', 296, 1),
(519, 'Beya', 296, 1),
(520, 'Yordani', 297, 1),
(521, 'Bukungu', 297, 1),
(522, 'Sayuni', 297, 1),
(523, 'Ikangala', 297, 1),
(524, 'Beya', 297, 1),
(525, 'Nhwiga', 298, 1),
(526, 'Nyamtukuza', 298, 1),
(527, 'Kakora', 298, 1),
(528, 'Ligembe', 298, 1),
(529, 'Kitongo', 298, 1),
(530, 'Nyangalamila', 298, 1),
(531, 'Kahunda', 299, 1),
(532, 'Katwe', 299, 1),
(533, 'Kagomba', 299, 1),
(534, 'Busolwa', 300, 1),
(535, 'Kona', 300, 1),
(536, 'Ifugandi', 300, 1),
(537, 'Mugusu', 301, 1),
(538, 'Yerusalemu', 301, 1),
(539, 'Nyakabale', 301, 1),
(540, 'Nyamigota', 302, 1),
(541, 'Inyala', 302, 1),
(542, 'Chibingo', 302, 1),
(543, 'Kifufu', 303, 1),
(544, 'Lwenge', 303, 1),
(545, 'Nyamikoma', 303, 1),
(546, 'Nyankumbu', 304, 1),
(547, 'Nyantorotoro', 304, 1),
(548, 'Mpomvu', 304, 1),
(549, 'Katoma', 98, 1),
(550, 'Katoro', 305, 1),
(551, 'Ng\'wabasabi', 305, 1),
(552, 'Nyamizeze', 306, 1),
(553, 'Ng\'waliga', 306, 1),
(554, 'Butonga', 306, 1),
(555, 'Kashindaga', 306, 1),
(556, 'Buzilasoga \'A\'', 307, 1),
(557, 'Buzilasoga \'B\'', 307, 1),
(558, 'Ikoni', 307, 1),
(559, 'Kanyerere', 307, 1),
(560, 'Ng\'wamitilwa', 307, 1),
(561, 'Ilojaminzi', 307, 1),
(562, 'Ijinga', 307, 1),
(563, 'Igulumuki', 307, 1),
(564, 'Nyehunge', 308, 1),
(565, 'Nyamadoke', 308, 1),
(566, 'Bukiliguru', 308, 1),
(567, 'Mizolozolo', 308, 1),
(568, 'Kanoni', 309, 1),
(569, 'Bukoba', 310, 1),
(570, 'Kasenye', 310, 1),
(571, 'Busimbe', 310, 1),
(572, 'Karagwe', 311, 1),
(573, 'Kayanga', 311, 1),
(574, 'Nyakayanja', 311, 1),
(575, 'Kyerwa', 311, 1),
(576, 'Kisaba', 312, 1),
(577, 'Migongo', 312, 1),
(578, 'Bwanga', 313, 1),
(579, 'Minkoto', 313, 1),
(580, 'Nyakayondwa', 313, 1),
(581, 'Izumangabo', 313, 1),
(582, 'Itanga', 313, 1),
(583, 'Msufini', 313, 1),
(584, 'Igando', 313, 1),
(585, 'Majengo', 313, 1),
(586, 'Msasa', 314, 1),
(587, 'Busanda', 314, 1),
(588, 'Kilombelo 1', 314, 1),
(589, 'Kilombelo 2', 314, 1),
(590, 'Nyantika', 314, 1),
(591, 'Lubanda', 314, 1),
(592, 'Idoselo', 315, 1),
(593, 'Nyalubanga', 315, 1),
(594, 'Njiapanda', 315, 1),
(595, 'Senga\'A\'', 316, 1),
(596, 'Senga \'B\'', 316, 1),
(597, 'Mchangani', 316, 1),
(598, 'Buligi', 316, 1),
(599, 'Kaseni', 316, 1),
(600, 'Chanika', 316, 1),
(601, 'Mwembeni', 316, 1),
(602, 'Nyakasungwa', 317, 1),
(603, 'Iseni', 317, 1),
(604, 'Kasisa', 317, 1),
(605, 'Kamisa', 317, 1),
(606, 'Mkomani', 317, 1),
(607, 'Mwembeni', 318, 1),
(608, 'Mkolani', 318, 1),
(609, 'Ikulu', 318, 1),
(610, 'Nyakagwe', 318, 1),
(611, 'Kakubilo', 319, 1),
(612, 'Sayuni', 319, 1),
(613, 'Nyambaya', 319, 1),
(614, 'Nyabasana', 319, 1),
(615, 'Kabayole', 319, 1),
(616, 'Ibanda', 319, 1),
(617, 'Sima', 320, 1),
(618, 'Kiloleli', 320, 1),
(619, 'Tumaini Jipya', 320, 1),
(620, 'Ijinga', 320, 1),
(621, 'Kakora', 320, 1),
(622, 'Ebenezer', 320, 1),
(623, 'Nyanza', 321, 1),
(624, 'Nyasembe', 322, 1),
(625, 'Isima', 322, 1),
(626, 'Bwesule', 322, 1),
(627, 'Lukirini', 322, 1),
(628, 'Lubanga', 322, 1),
(629, 'Lwenegeza', 322, 1),
(630, 'Luhuha', 322, 1),
(631, 'Nyakagomba', 322, 1),
(632, 'Kiziba', 322, 1),
(633, 'Lubanga', 323, 1),
(634, 'Isulwa Butundwe', 323, 1),
(635, 'Buswelu', 323, 1),
(636, 'Ng\'wabagalu', 323, 1),
(637, 'Nyankongochoro', 323, 1),
(638, 'Lurenge', 323, 1),
(639, 'Nyakasuha', 323, 1),
(640, 'Sogoso', 324, 1),
(641, 'Mbalagashi', 324, 1),
(642, 'Ishishang\'holo', 324, 1),
(643, 'Ishingisha', 324, 1),
(644, 'Nyang\'homango', 324, 1),
(645, 'Igaka', 325, 1),
(646, 'Imalamawazo', 325, 1),
(647, 'Ishokelahela', 325, 1),
(648, 'Isome', 325, 1),
(649, 'Bukwimba', 326, 1),
(650, 'Kashishi', 326, 1),
(651, 'Kasubuya', 326, 1),
(652, 'Beloya', 326, 1),
(653, 'Bulangale', 326, 1),
(654, 'Nyang\'holongo', 326, 1),
(655, 'Busulwa', 326, 1),
(656, 'Nundu', 326, 1),
(657, 'Igeka', 326, 1),
(658, 'Kayenze Center', 327, 1),
(659, 'Kayenze Mama', 327, 1),
(660, 'Butunga', 327, 1),
(661, 'Igalula', 327, 1),
(662, 'Ngulumbai', 327, 1),
(663, 'Nyanchenche', 328, 1),
(664, 'Nyanzumula', 328, 1),
(665, 'Lwenge', 328, 1),
(666, 'Kimaka', 328, 1),
(667, 'Ngoma', 329, 1),
(668, 'Sigu', 329, 1),
(669, 'Nyasibu', 329, 1),
(670, 'Nyabila', 329, 1),
(671, 'Nyanzaga', 329, 1),
(672, 'Kaningu', 329, 1),
(673, 'Nyamilyango', 330, 1),
(674, 'Isabilo', 330, 1),
(675, 'Shabaka', 331, 1),
(676, 'Nyamugogwa', 331, 1),
(677, 'Lwenzura', 331, 1),
(678, 'Lubando', 331, 1),
(679, 'Yeriko', 331, 1),
(680, 'Nyang\'hwale', 332, 1),
(681, 'Nyaruguguna', 332, 1),
(682, 'Kanani', 332, 1),
(683, 'Kishinda', 333, 1),
(684, 'Mkolani', 333, 1),
(685, 'Ibisabageni', 333, 1),
(686, 'Ishokela', 333, 1),
(687, 'Miembeni', 333, 1),
(688, 'Kamhanga', 334, 1),
(689, 'Igaka', 334, 1),
(690, 'Ilagaja', 334, 1),
(691, 'Isamilo', 334, 1),
(692, 'Kabumba', 334, 1),
(693, 'Juma Kisiwani', 335, 1),
(694, 'Lyakanyasi', 335, 1),
(695, 'Kitandele', 335, 1),
(696, 'Kijuka', 336, 1),
(697, 'Kaseni', 336, 1),
(698, 'Kakurugusi', 336, 1),
(699, 'Bongonya', 336, 1),
(700, 'Kafundikile', 336, 1),
(701, 'Nyamazugo', 336, 1),
(702, 'Nyanzenda', 337, 1),
(703, 'Mikukulama', 337, 1),
(704, 'Magata', 337, 1),
(705, 'Igwanzozu', 337, 1),
(706, 'Katunguru', 338, 1),
(707, 'Sayuni', 338, 1),
(708, 'Nyamahona', 338, 1),
(709, 'Nyamutelela', 338, 1),
(710, 'Kasomeko', 338, 1),
(711, 'Chamabanda', 338, 1),
(712, 'Luhama', 339, 1),
(713, 'Bangwe', 339, 1),
(714, 'Ng\'wangika', 339, 1),
(715, 'Kasheka', 339, 1),
(716, 'Ilunda', 340, 1),
(717, 'Lubanda', 340, 1),
(718, 'Kahumulo', 340, 1),
(719, 'Mlanda', 340, 1),
(720, 'Ilekanilo', 340, 1),
(721, 'Nyalwambu', 340, 1),
(722, 'Giligali', 340, 1),
(723, 'Nyanchina', 340, 1),
(724, 'Nyampande', 341, 1),
(725, 'Kawekamo', 341, 1),
(726, 'Busulwangili', 341, 1),
(727, 'Mami', 341, 1),
(728, 'Buyagu', 342, 1),
(729, 'Isole', 342, 1),
(730, 'Kishinda', 342, 1),
(731, 'Kalangalala', 342, 1),
(732, 'Mulasa', 342, 1),
(733, 'Busisi', 343, 1),
(734, 'Nyitundu', 343, 1),
(735, 'Bitoto', 343, 1),
(736, 'Nyamasale', 343, 1),
(737, 'Mkomba', 343, 1),
(738, 'Sukuma', 344, 1),
(739, 'Yerusalemu', 344, 1),
(740, 'Samaria Ng\'wamanyili', 344, 1),
(741, 'Bukondo', 345, 1),
(742, 'Kitigili', 345, 1),
(743, 'Chankorongo \'A\'', 345, 1),
(744, 'Chankorongo \'B\'', 345, 1),
(745, 'Busaka', 345, 1),
(746, 'Iloganzala', 345, 1),
(747, 'Ebeneza', 345, 1),
(748, 'Lulama', 345, 1),
(749, 'Itabagumba', 346, 1),
(750, 'Zilagula', 346, 1),
(751, 'Yozu', 346, 1),
(752, 'Kanyala', 346, 1),
(753, 'Lushamba', 346, 1),
(754, 'Busenge', 346, 1),
(755, 'Bulyaheke', 346, 1),
(756, 'Mbugani', 346, 1),
(757, 'Isaka', 347, 1),
(758, 'Iseni', 347, 1),
(759, 'Bilulumo', 347, 1),
(760, 'Nyamatemele', 347, 1),
(761, 'Isegeng\'he', 347, 1),
(762, 'Bupandwa', 348, 1),
(763, 'Kafunzo', 348, 1),
(764, 'Luholongoma', 348, 1),
(765, 'Itulabusiga', 348, 1),
(766, 'Tabaluka', 349, 1),
(767, 'Mayuya', 349, 1),
(768, 'Bukala', 350, 1),
(769, 'Sengerema', 351, 1),
(770, 'Nyampulukano', 352, 1),
(771, 'Ibondo', 352, 1),
(772, 'Kizugwangoma', 352, 1),
(773, 'Majengo', 353, 1),
(774, 'Nazareti', 353, 1),
(775, 'Balatogwa', 353, 1),
(776, 'Tunyenye', 353, 1),
(777, 'Nyamikoma', 353, 1),
(778, 'Iyogelo', 354, 1),
(779, 'Bomani', 354, 1),
(780, 'Isungang\'holo', 354, 1),
(781, 'Kanyamwanza', 354, 1),
(782, 'Sayuni', 354, 1),
(783, 'Nyanango', 355, 1),
(784, 'Busekeseke', 355, 1),
(785, 'Kayenze', 355, 1),
(786, 'Kalebezo', 356, 1),
(787, 'Magulukenda', 356, 1),
(788, 'Mwangika', 356, 1),
(789, 'Nyashana', 356, 1),
(790, 'Liteli', 356, 1),
(791, 'Branch', 356, 1),
(792, 'Kakobe', 357, 1),
(793, 'Irenza', 357, 1),
(794, 'Kasalazi', 357, 1),
(795, 'Nyangalamila', 357, 1),
(796, 'Nyambeba', 357, 1),
(797, 'Ilyamuchele', 357, 1),
(798, 'Kazunzu', 357, 1),
(799, 'Nganza', 357, 1),
(800, 'Ngara', 358, 1),
(801, 'Nyarutembo', 358, 1),
(802, 'Isambala', 358, 1),
(803, 'Kakeneno', 358, 1),
(804, 'Nyantimba', 358, 1),
(805, 'Ipalamasa', 359, 1),
(806, 'Beda', 359, 1),
(807, 'Mwabasabi', 359, 1),
(808, 'Lushimba', 359, 1),
(809, 'Nyisanzi', 360, 1),
(810, 'Nyabilele', 360, 1),
(811, 'Dodoma', 360, 1),
(812, 'Kikumbaitale', 361, 1),
(813, 'Bukamila', 361, 1),
(814, 'Agape', 362, 1),
(815, 'Bwongela', 362, 1),
(816, 'Bupandwa', 362, 1),
(817, 'Ikuza', 363, 1),
(818, 'Itale', 364, 1),
(819, 'Nyang\'homango', 364, 1),
(820, 'Katende', 364, 1),
(821, 'Kibehe', 365, 1),
(822, 'Lusungwa', 365, 1),
(823, 'Kalebezo', 365, 1),
(824, 'Nyambiti', 365, 1),
(825, 'Busalala', 365, 1),
(826, 'Nyakato', 366, 1),
(827, 'Mkungo', 366, 1),
(828, 'Kasozibakaya', 366, 1),
(829, 'Nyashimba', 366, 1),
(830, 'Muungano', 367, 1),
(831, 'Mlimani', 367, 1),
(832, 'Lubabangwe', 367, 1),
(833, 'Bikaka', 367, 1),
(834, 'Kisesa', 367, 1),
(835, 'Buzilayombo', 368, 1),
(836, 'Katale', 368, 1),
(837, 'Kachwamba', 369, 1),
(838, 'Igalula', 369, 1),
(839, 'Kawinyole', 369, 1),
(840, 'Kagondo', 369, 1),
(841, 'Ilyamchele', 369, 1),
(842, 'Ilemela', 370, 1),
(843, 'Kanyama', 370, 1),
(844, 'Nyambogo', 370, 1),
(845, 'Nemba', 371, 1),
(846, 'Imalambegete', 371, 1),
(847, 'Chakikarabu', 371, 1),
(848, 'Chato', 372, 1),
(849, 'Buziku', 373, 1),
(850, 'Ihanga', 373, 1),
(851, 'Nyarutefye', 373, 1),
(852, 'Bwela', 373, 1),
(853, 'Biharamulo', 374, 1),
(854, 'Nyambale', 374, 1),
(855, 'Kabukome', 374, 1),
(856, 'Ntungamo', 374, 1),
(857, 'Mzani', 374, 1),
(858, 'Kumsali', 374, 1),
(859, 'Nyungwe', 374, 1),
(860, 'Busaka', 375, 1),
(861, 'Buhololo', 375, 1),
(862, 'Iseni', 375, 1),
(863, 'Musasa', 375, 1),
(864, 'Kasala', 375, 1),
(865, 'Chibumba', 375, 1),
(866, 'Nyampazi', 375, 1),
(867, 'Mtakuja', 375, 1),
(868, 'Buseresere', 376, 1),
(869, 'Imwelo', 376, 1),
(870, 'Mtunduni', 376, 1),
(871, 'Izenga', 376, 1),
(872, 'Nyambogo', 376, 1),
(873, 'Buyoga', 376, 1),
(874, 'Mtundu', 376, 1),
(875, 'Nazareti', 376, 1),
(876, 'Bethelehemu', 376, 1),
(877, 'Mwendakulima', 376, 1),
(878, 'Kyamyolwa', 377, 1),
(879, 'Kyota', 377, 1),
(880, 'Kasheza', 377, 1),
(881, 'Daraja Nane', 377, 1),
(882, 'Mwabaluhi', 377, 1),
(883, 'Lwenkala', 377, 1),
(884, 'Nyamagojo', 377, 1),
(885, 'Kisheni', 377, 1),
(886, 'Luhendo', 377, 1),
(887, 'Kishonga', 377, 1),
(888, 'Muleba', 378, 1),
(889, 'Mkuyu', 378, 1),
(890, 'Magamba', 379, 1),
(891, 'Mkalinzi', 379, 1),
(892, 'Bitunga', 379, 1),
(893, 'Kihinga', 379, 1),
(894, 'Kumyaga', 379, 1),
(895, 'Nfunzi', 380, 1),
(896, 'Nyamishwe', 380, 1),
(897, 'Mhaluzi', 380, 1),
(898, 'Mchangani', 380, 1),
(899, 'Ntama', 380, 1),
(900, 'Nyaruseni', 380, 1),
(901, 'Kabaganga', 380, 1),
(902, 'Nyakabanga', 380, 1),
(903, 'Iliba', 380, 1),
(904, 'Isenyi', 380, 1),
(905, 'Ibogaboge', 380, 1),
(906, 'Lugata', 380, 1),
(907, 'Nyakalilo', 381, 1),
(908, 'Betheli', 381, 1),
(909, 'Lugasa', 381, 1),
(910, 'Kazungute', 381, 1),
(911, 'Lumeya', 381, 1),
(912, 'Lusolelo', 381, 1),
(913, 'Bukokwa', 382, 1),
(914, 'Nyabutanga', 382, 1),
(915, 'Miyegelezo', 382, 1),
(916, 'Buchosa', 382, 1),
(917, 'Muganza', 383, 1),
(918, 'Kasenda', 383, 1),
(919, 'Mwelani', 383, 1),
(920, 'Lyulu', 384, 1),
(921, 'Nyang\'ombe', 384, 1),
(922, 'Isonda', 385, 1),
(923, 'Ng\'wamakiliga', 385, 1),
(924, 'Bumbire', 386, 1),
(925, 'Lushonga', 386, 1),
(926, 'Iramba', 387, 1),
(927, 'Kimoyomoyo', 387, 1),
(928, 'Nyakanazi', 388, 1),
(929, 'Mtundu', 388, 1),
(930, 'Kitwazi', 388, 1),
(931, 'Lunazi', 389, 1),
(932, 'Rwekubo', 389, 1),
(933, 'Kinazi', 389, 1),
(934, 'Kabangani', 389, 1),
(935, 'Migango', 389, 1),
(936, 'Muungano', 389, 1),
(937, 'Nyanzola', 389, 1),
(938, 'Kaboha', 390, 1),
(939, 'Shibalanga', 390, 1),
(940, 'KITANGILI', 391, 1),
(941, 'UFUNUO', 391, 1),
(942, 'BUGAYAMBELELE', 391, 1),
(943, 'KYEMTHEKE', 391, 1),
(944, 'BULUGALILA', 391, 1),
(945, 'NHELEGANI', 392, 1),
(946, 'ISHINABULANDI', 392, 1),
(947, 'IGEGU', 392, 1),
(948, 'IBANZA', 392, 1),
(949, 'ILOBASHI', 392, 1),
(950, 'BUBALE', 392, 1),
(951, 'MASENGWA', 392, 1),
(952, 'BULIMA', 393, 1),
(953, 'IPEJA', 393, 1),
(954, 'IKOMA', 393, 1),
(955, 'KOLANDOTO \"A\"', 394, 1),
(956, 'WAME', 394, 1),
(957, 'ZAIRE', 394, 1),
(958, 'MWANUBI', 394, 1),
(959, 'BUGWANDEGE', 394, 1),
(960, 'KOLANDOTO \"B\"', 395, 1),
(961, 'MWAMAGUNGULI', 395, 1),
(962, 'MSUMBIJI', 395, 1),
(963, 'NGUNGA', 395, 1),
(964, 'NHOBOLA', 395, 1),
(965, 'MWANONI', 395, 1),
(966, 'IBADAKULI', 396, 1),
(967, 'UZOGORE', 396, 1),
(968, 'KABONDO', 396, 1),
(969, 'SANJO', 396, 1),
(970, 'MAGOBEKO', 396, 1),
(971, 'MAGANZO', 397, 1),
(972, 'MASAGALA', 397, 1),
(973, 'SONGWA', 398, 1),
(974, 'SAMARIA', 398, 1),
(975, 'BUGANIKA', 398, 1),
(976, 'BUBIKI', 399, 1),
(977, 'BUSANGWA', 399, 1),
(978, 'NYASAMBA', 399, 1),
(979, 'MWAMSHONI', 399, 1),
(980, 'NG\'WAJININGU', 399, 1),
(981, 'MIPA', 399, 1),
(982, 'MWANIMA', 399, 1),
(983, 'MWAKOROMA', 399, 1),
(984, 'MONDO', 400, 1),
(985, 'MWIGUMBI', 400, 1),
(986, 'DURISI', 400, 1),
(987, 'MWAMASOLOLO', 400, 1),
(988, 'IDIDI', 401, 1),
(989, 'KABIJA', 401, 1),
(990, 'WISHITELEJA', 401, 1),
(991, 'BUGORO', 401, 1),
(992, 'NG\'WAGALANKULU', 401, 1),
(993, 'MANI', 401, 1),
(994, 'BUNAMBIYU', 402, 1),
(995, 'BUTUYU', 402, 1),
(996, 'MWANG\'HILI', 402, 1),
(997, 'MWACHANJO', 402, 1),
(998, 'MWADUI', 403, 1),
(999, 'SHY - BUSH', 403, 1),
(1000, 'UTEMINI', 403, 1),
(1001, 'MWASWEYA', 403, 1),
(1002, 'MASELA', 404, 1),
(1003, 'WIGELEKELO', 404, 1),
(1004, 'MWASHIBA', 404, 1),
(1005, 'MWASAYI', 404, 1),
(1006, 'IDUKILO', 405, 1),
(1007, 'MWASAYI', 405, 1),
(1008, 'BULIMA', 405, 1),
(1009, 'NYENZE', 405, 1),
(1010, 'MWABOMBA', 406, 1),
(1011, 'MWASANGA', 406, 1),
(1012, 'SENG\'WA', 406, 1),
(1013, 'MWANUNDI', 406, 1),
(1014, 'NYAMALOGO', 407, 1),
(1015, 'SHILABELA', 407, 1),
(1016, 'SAYU', 407, 1),
(1017, 'SHATIMBA', 407, 1),
(1018, 'NG\'WANG\'OSHA', 407, 1),
(1019, 'NG\'WAMAKALANGA', 407, 1),
(1020, 'MISHEPO', 408, 1),
(1021, 'ZUMVE', 408, 1),
(1022, 'BUSHOMA', 408, 1),
(1023, 'JIMONDOLI', 408, 1),
(1024, 'MHUGI', 408, 1),
(1025, 'USULE', 409, 1),
(1026, 'SUMBIGU', 409, 1),
(1027, 'MASEKELO', 409, 1),
(1028, 'BUKENE', 409, 1),
(1029, 'ISELAMAGAZI', 410, 1),
(1030, 'ICHONGO', 410, 1),
(1031, 'MWAMBASHA', 410, 1),
(1032, 'NG\'HOMANGO', 410, 1),
(1033, 'MWAJIJI', 410, 1),
(1034, 'MWASHININGU', 410, 1),
(1035, 'SALAWE', 411, 1),
(1036, 'ZUNZULI', 411, 1),
(1037, 'MWASENGE', 411, 1),
(1038, 'MUHUGI', 411, 1),
(1039, 'IHIMBILI', 411, 1),
(1040, 'IPANGO', 411, 1),
(1041, 'KAKOLA', 411, 1),
(1042, 'SOLWA', 412, 1),
(1043, 'MWABENDA', 412, 1),
(1044, 'MWADUTU', 412, 1),
(1045, 'MAHAMBE', 412, 1),
(1046, 'MWABUKI', 412, 1),
(1047, 'MANHEINGANA', 412, 1),
(1048, 'MHANGU', 413, 1),
(1049, 'SONGAMBELE', 413, 1),
(1050, 'BUDUHE', 413, 1),
(1051, 'IKONONGO', 413, 1),
(1052, 'KANO', 413, 1),
(1053, 'MWAKITOLYO', 414, 1),
(1054, 'NYALIGONGO', 414, 1),
(1055, 'MAWEMILU', 414, 1),
(1056, 'LYABUKANDE', 415, 1),
(1057, 'KIMANDAGULI', 415, 1),
(1058, 'BUKILIGULU', 415, 1),
(1059, 'KIZUNGU', 415, 1),
(1060, 'KADOTO', 415, 1),
(1061, 'BUZINZA', 415, 1),
(1062, 'LYAMIDATI', 415, 1),
(1063, 'NEBO', 415, 1),
(1064, 'BULIGE', 416, 1),
(1065, 'KAKULU', 416, 1),
(1066, 'NYANGALATA', 416, 1),
(1067, 'MALILITA', 416, 1),
(1068, 'MWAMBITI', 416, 1),
(1069, 'MAJENGO', 417, 1),
(1070, 'MWAMASHIMBAYI', 417, 1),
(1071, 'MWAKUZUKA', 417, 1),
(1072, 'KABONDO', 417, 1),
(1073, 'TINDE', 418, 1),
(1074, 'JOM', 418, 1),
(1075, 'NSALALA', 418, 1),
(1076, 'MWAMKANGA', 418, 1),
(1077, 'KITULI', 418, 1),
(1078, 'BUSANDA', 419, 1),
(1079, 'MANYADA', 419, 1),
(1080, 'NZAGALUBA', 419, 1),
(1081, 'IBINGO', 419, 1),
(1082, 'SINGITA', 419, 1),
(1083, 'ILOLA', 420, 1),
(1084, 'MENDO', 420, 1),
(1085, 'IHALO', 420, 1),
(1086, 'BULUMA', 420, 1),
(1087, 'IGUDU', 420, 1),
(1088, 'JANA', 420, 1),
(1089, 'DIDIA', 421, 1),
(1090, 'MWAMANYUDA', 421, 1),
(1091, 'NYIKA', 421, 1),
(1092, 'BUKUMBI', 421, 1),
(1093, 'ZOBOGO', 421, 1),
(1094, 'NYIDA', 422, 1),
(1095, 'ISANJA', 422, 1),
(1096, 'KIGWANG\'HONA', 422, 1),
(1097, 'ITWANGI', 422, 1),
(1098, 'BUTINI', 422, 1),
(1099, 'KISHAPU', 423, 1),
(1100, 'MHUNZE', 423, 1),
(1101, 'MWATAGA', 423, 1),
(1102, 'MWANULU', 423, 1),
(1103, 'MWABUSIGA', 423, 1),
(1104, 'MWANGONGO', 423, 1),
(1105, 'LUBAGA', 423, 1),
(1106, 'IBOJA', 423, 1),
(1107, 'MWASELE', 423, 1),
(1108, 'UCHUNGA', 424, 1),
(1109, 'BUPIGI', 424, 1),
(1110, 'NGUNDANGALI', 424, 1),
(1111, 'SULAGI', 424, 1),
(1112, 'KAKOLA', 424, 1),
(1113, 'WINENEKEJA', 424, 1),
(1114, 'IGAGA', 424, 1),
(1115, 'BUNYANYEMBE', 424, 1),
(1116, 'ILULA', 425, 1),
(1117, 'NGEME', 425, 1),
(1118, 'SHIYA', 425, 1),
(1119, 'SHAGIHILU', 426, 1),
(1120, 'MIGUNGA', 426, 1),
(1121, 'MWAMAGEMBE', 426, 1),
(1122, 'MANGU', 426, 1),
(1123, 'MALWILO', 426, 1),
(1124, 'SANJO', 426, 1),
(1125, 'NDOLELEJI', 426, 1),
(1126, 'UKENYENGE', 427, 1),
(1127, 'IKONDA', 427, 1),
(1128, 'DUGUSHILU', 427, 1),
(1129, 'WELA', 427, 1),
(1130, 'NEGEZI', 428, 1),
(1131, 'MWAWEJA', 428, 1),
(1132, 'MWAJIGINYA', 428, 1),
(1133, 'KIJONGO', 428, 1),
(1134, 'BULIMBA', 428, 1),
(1135, 'KILOLELI', 429, 1),
(1136, 'MIYUGUYU', 429, 1),
(1137, 'INOLELO', 429, 1),
(1138, 'NGOFILA', 429, 1),
(1139, 'MUGUDA', 429, 1),
(1140, 'KALITU', 429, 1),
(1141, 'MIHAMA', 430, 1),
(1142, 'LAGANA', 430, 1),
(1143, 'BELEDI', 430, 1),
(1144, 'MWAMADULU', 430, 1),
(1145, 'BUBINZA', 430, 1),
(1146, 'BUZINZA', 431, 1),
(1147, 'BULEKELA', 431, 1),
(1148, 'KINAMPANDA', 431, 1),
(1149, 'HILISHI', 431, 1),
(1150, 'MWANG\'HALANGA', 431, 1),
(1151, 'MWAJIDALALA', 431, 1),
(1152, 'MAGALATA', 431, 1),
(1153, 'MWAMASHELE', 432, 1),
(1154, 'BUSONGO', 432, 1),
(1155, 'MWAMANOTA', 432, 1),
(1156, 'ISAGALA', 432, 1),
(1157, 'IGUMILA', 432, 1),
(1158, 'IDUSHI', 432, 1),
(1159, 'MWAMASHIMBA', 433, 1),
(1160, 'MASANGA', 433, 1),
(1161, 'MWALATA', 433, 1),
(1162, 'GIMAGI', 433, 1),
(1163, 'KISESA', 433, 1),
(1164, 'MWANDOMA', 433, 1),
(1165, 'MWAMALASA', 433, 1),
(1166, 'MALENDI', 433, 1),
(1167, 'LALAGO', 434, 1),
(1168, 'SULU', 434, 1),
(1169, 'MBARAGANE', 434, 1),
(1170, 'MWAKIDIGA', 434, 1),
(1171, 'GULA', 434, 1),
(1172, 'SOMANDA', 434, 1),
(1173, 'MANDANG\'OMBE', 434, 1),
(1174, 'Iringa', 435, 1),
(1175, 'Mafinga', 435, 1),
(1176, 'Forest Mbeya', 436, 1),
(1177, 'Azimio', 437, 1),
(1178, 'Ilongo', 437, 1),
(1179, 'Simike', 437, 1),
(1180, 'Mswiswi', 437, 1),
(1181, 'Mbalizi', 438, 1),
(1182, 'Mkwajuni', 438, 1),
(1183, 'Kasinde', 438, 1),
(1184, 'Iyendwe', 438, 1),
(1185, 'Njombe', 439, 1),
(1186, 'Msamala', 440, 1),
(1187, 'Kyela', 441, 1),
(1188, 'Moshi', 442, 1),
(1189, 'Boma Ngâ€™ombe', 442, 1),
(1190, 'Njiro', 443, 1),
(1191, 'Mererani', 443, 1),
(1192, 'Babati', 444, 1),
(1193, 'Hoshai', 444, 1),
(1194, 'Riroda', 444, 1),
(1195, 'Kateshi', 444, 1),
(1196, 'Mongomono', 444, 1),
(1197, 'Endamsgha', 445, 1),
(1198, 'Olpiro', 445, 1),
(1199, 'Jabaji', 445, 1),
(1200, 'Barazani', 445, 1),
(1201, 'Muhiedagew', 446, 1),
(1202, 'Kisiriri', 446, 1),
(1203, 'Karatu', 446, 1),
(1204, 'Mbuyuni', 446, 1),
(1205, 'Pinyinyi', 446, 1),
(1206, 'Laika', 446, 1),
(1207, 'Samunge', 446, 1),
(1208, 'Mageri', 446, 1),
(1209, 'Waso', 446, 1),
(1210, 'Monduli', 447, 1),
(1211, 'Mto wa Mbu', 447, 1),
(1212, 'Lendikenya', 447, 1),
(1213, 'Majengo', 448, 1),
(1214, 'Longido', 448, 1),
(1215, 'Namanga', 448, 1),
(1216, 'Ngoyapase A', 449, 1),
(1217, 'Ngoyapase B', 449, 1),
(1218, 'Enduleni', 449, 1),
(1219, 'Esirwa', 449, 1),
(1220, 'Manyoni', 450, 1),
(1221, 'Heka', 450, 1),
(1222, 'Singida Mjini', 451, 1),
(1223, 'Igombwe', 451, 1),
(1224, 'Ishai', 451, 1),
(1225, 'Igrasoni', 451, 1),
(1226, 'Mitundu', 452, 1),
(1227, 'Useso', 452, 1),
(1228, 'Msonge', 452, 1),
(1229, 'Kipera', 452, 1),
(1230, 'Majengo', 453, 1),
(1231, 'Mwamagika', 453, 1),
(1232, 'Ihama', 453, 1),
(1233, 'Chaya', 453, 1),
(1234, 'Tura', 453, 1),
(1235, 'Kiyombo', 454, 1),
(1236, 'Mukituri', 454, 1),
(1237, 'Mnazi', 454, 1),
(1238, 'Kizota', 455, 1),
(1239, 'Msalato', 455, 1),
(1240, 'Ipagala', 456, 1),
(1241, 'Ihumwa', 456, 1),
(1242, 'Kibaigwa', 457, 1),
(1243, 'Ndachi', 458, 1),
(1244, 'Bahi', 458, 1),
(1245, 'Pahi', 459, 1),
(1246, 'Busi', 459, 1),
(1247, 'Keikei', 459, 1),
(1248, 'Kwamtoro', 460, 1),
(1249, 'Gumbu', 460, 1),
(1250, 'Moto', 460, 1),
(1251, 'Kwamadebe', 461, 1),
(1252, 'Magambua', 462, 1),
(1253, 'Manatu', 462, 1),
(1254, 'Ilase', 462, 1),
(1255, 'Wairo', 462, 1),
(1256, 'Madandaa', 462, 1),
(1257, 'Ukombozi', 462, 1),
(1258, 'Mkolahanze', 462, 1),
(1259, 'Handa', 462, 1),
(1260, 'Lahoda', 462, 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `follower_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `covers`
--

CREATE TABLE `covers` (
  `cover_id` int(20) NOT NULL,
  `album_id` varchar(20) NOT NULL,
  `image_name` varchar(100) NOT NULL,
  `ext` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `covers`
--

INSERT INTO `covers` (`cover_id`, `album_id`, `image_name`, `ext`) VALUES
(1, '1', 'c4ca4238a0b923820dcc509a6f75849b', 'jpg'),
(2, '2', 'c81e728d9d4c2f636f067f89cc14862c', 'jpg'),
(3, '3', 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'jpg'),
(4, '4', 'a87ff679a2f3e71d9181a67b7542122c', 'jpg'),
(5, '5', 'e4da3b7fbbce2345d7772b0674a318d5', 'jpg'),
(6, '6', '1679091c5a880faf6fb5e6087eb1b2dc', 'jpg'),
(7, '7', '8f14e45fceea167a5a36dedd4bea2543', 'jpg'),
(8, '8', 'c9f0f895fb98ab9159f51fd0297e236d', 'jpg'),
(9, '9', '45c48cce2e2d7fbdea1afc51c7c6ad26', 'jpg'),
(10, '10', 'd3d9446802a44259755d38e6d163e820', 'jpg'),
(11, '11', '6512bd43d9caa6e02c990b0a82652dca', 'jpg'),
(12, '12', 'c20ad4d76fe97759aa27a0c99bff6710', 'jpg'),
(13, '13', 'c51ce410c124a10e0db5e4b97fc2af39', 'jpg'),
(14, '14', 'aab3238922bcc25a6f606eb525ffdc56', 'jpg'),
(15, '15', '9bf31c7ff062936a96d3c8bd1f8f2ff3', 'jpg'),
(16, '16', 'c74d97b01eae257e44aa9d5bade97baf', 'jpg'),
(17, '17', '70efdf2ec9b086079795c442636b55fb', 'jpg'),
(18, '18', '6f4922f45568161a8cdf4ad2299f6d23', 'jpg'),
(19, '19', '1f0e3dad99908345f7439f8ffabdffc4', 'jpg'),
(20, '20', '98f13708210194c475687be6106a3b84', 'jpg'),
(21, '21', '3c59dc048e8850243be8079a5c74d079', 'jpg'),
(22, '22', 'b6d767d2f8ed5d21a44b0e5886680cb9', 'jpg'),
(23, '24', '1ff1de774005f8da13f42943881c655f', 'jpg'),
(24, '25', '8e296a067a37563370ded05f5a3bf3ec', 'JPG'),
(25, '26', '4e732ced3463d06de0ca9a15b6153677', 'JPG'),
(26, '27', '02e74f10e0327ad868d138f2b4fdd6f0', 'jpg'),
(27, '28', '33e75ff09dd601bbe69f351039152189', 'jpg'),
(28, '29', '6ea9ab1baa0efb9e19094440c317e21b', 'jpg'),
(29, '30', '34173cb38f07f89ddbebc2ac9128303f', 'jpg'),
(30, '31', 'c16a5320fa475530d9583c34fd356ef5', 'JPG'),
(31, '32', '6364d3f0f495b6ab9dcf8d3b5c6e0b01', 'JPG'),
(32, '33', '182be0c5cdcd5072bb1864cdee4d3d6e', 'jpg'),
(33, '34', 'e369853df766fa44e1ed0ff613f563bd', 'jpg'),
(34, '35', '1c383cd30b7c298ab50293adfecb7b18', 'jpg'),
(35, '36', '19ca14e7ea6328a42e0eb13d585e4c22', 'jpg'),
(36, '37', 'a5bfc9e07964f8dddeb95fc584cd965d', 'jpg'),
(37, '38', 'a5771bce93e200c36f7cd9dfd0e5deaa', 'JPG'),
(38, '39', 'd67d8ab4f4c10bf22aa353e27879133c', 'jpg'),
(39, '40', 'd645920e395fedad7bbbed0eca3fe2e0', 'JPG');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department`, `status`) VALUES
(4, 'Women ', 1),
(5, 'Healthy', 1),
(6, 'Planning, Investment, Economy and Development', 1),
(7, 'Evangelism and Missions', 1),
(8, 'Christian Education', 1),
(9, 'Youth', 1),
(10, 'News and Communication.', 1),
(11, 'Children', 1),
(12, 'Music and Singing', 1),
(13, 'Biblical and Theological Studies', 1);

-- --------------------------------------------------------

--
-- Table structure for table `deptdetails`
--

CREATE TABLE `deptdetails` (
  `deptdetails_id` int(11) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `aboutus` longtext NOT NULL,
  `whatwedo` longtext NOT NULL,
  `programs` longtext NOT NULL,
  `sponsors` longtext NOT NULL,
  `contacts` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deptdetails`
--

INSERT INTO `deptdetails` (`deptdetails_id`, `dept_id`, `aboutus`, `whatwedo`, `programs`, `sponsors`, `contacts`) VALUES
(1, 7, '<h2><strong>Idara inayohusika kueneza Injili ndani na nje nchi</strong></h2>', '<p><strong>1.</strong> Kuwafanya watu wote wamfahamu na kumwamini Yesu Kristo.</p>\r\n\r\n<p><strong>2.</strong> Kuwafuasa wakristo wote kwa njia mbalimbali ili waukulie wokovu na kumtukia Bwana wao.</p>\r\n\r\n<p><strong>3.</strong> Kushirikiana na Makanisa yaliyopo katika huduma ya kujieneza yenyewe kwa kupanda makanisa.</p>\r\n\r\n<p><strong>4.</strong> Kuyarithisha Maono ya Umisheni kwa Viongozi / Wakristo wote ili kuwafikia watu wa tabaka zote.</p>\r\n\r\n<p><strong>5.</strong> Kuona kuwa Idara ni chombo cha kanisa kuratibu shughuli zote za kiuinjilisti, kiufuasi, upandaji wa makanisa na&nbsp; umisheni ndani na nje ya nchi.</p>\r\n\r\n<p><strong>6.</strong> Kuweka mipango kazi kila mwaka na kusimamia utekelezaji wake, Kuandaa na kutoa taarifa za utekelezaji wa mipango kazi hiyo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; kwa mwaka.</p>\r\n\r\n<p><strong>7.</strong> Kuwaunganisha/ Kuwahamasisha Wakristo kuombea na kujitoa wao wenyewe kafanaya uinjilisti na umishenari katka makanisa yote ya AICT.</p>\r\n\r\n<p><strong>8.</strong> Kubuni na kuanzisha vyanzo vya ndani vya mapato ili kuiwezesha idara kutekeleza majukumu yake kwa ufanisi na kwa utukufu wa Mungu.</p>', '', '', '<p>+255 767 100 288 / +255 622 100 288</p>\r\n\r\n<p><strong>MAKONGORO MWANZA - TANZANIA</strong></p>'),
(2, 9, '<ol>\r\n	<li><strong>History: </strong>The Youth Department of the Africa Inland Church Tanzania started in 1956 under the leadership of Pastor Daudi Malongo.</li>\r\n	<li><strong>Vision Statement: </strong>Church Youth living holy life proclaiming the greatness and glory of God in their lives.</li>\r\n	<li><strong>Mission Statement: </strong>Serving youth spiritually, mentally, physically, socially and economically in their respective localities.</li>\r\n	<li><strong>Values:</strong> &nbsp;building good relationships, service, compassion, love, outreach, skillfulness, salvation</li>\r\n	<li><strong>Objectives:</strong></li>\r\n</ol>\r\n\r\n<ol style=\"list-style-type:lower-roman\">\r\n	<li>Loving, worshiping and glorifying God&nbsp;</li>\r\n	<li>Discipleship</li>\r\n	<li>Evangelization</li>\r\n	<li>Fellowship</li>\r\n	<li>Ministering to the younger generation</li>\r\n	<li>Promoting talents among youth</li>\r\n	<li>Economic empowerment</li>\r\n	<li>Youth welfare</li>\r\n</ol>', '<ol>\r\n	<li>Conduct youth conferences, workshops and seminars</li>\r\n	<li>Training Youth leaders</li>\r\n	<li>Outreach campaigns</li>\r\n	<li>Evangelism through sports</li>\r\n	<li>Singing concerts</li>\r\n</ol>', '<ol>\r\n	<li>Vijana Vocational Training Centre</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Located in Geita Town</li>\r\n	<li>Offers Level II Certificates in Electrical Installation, Welding and Metal Fabrication, Carpentry and Joinery, Motor Vehicle Mechanics</li>\r\n	<li>Offers Short Courses in: Computer Application, Basic Driving Course</li>\r\n</ul>\r\n\r\n<p style=\"margin-left:.75in\">&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Safina Project</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>Empowers young people through sunflower farming, processing and Marketing</li>\r\n	<li>Operates a sunflower pressing mill</li>\r\n	<li>Prepares natural medicine in collaboration with ANAMED Tanzania</li>\r\n	<li>Promotes youths&rsquo; talents and arts&nbsp;</li>\r\n</ul>\r\n\r\n<p style=\"margin-left:.75in\">&nbsp;</p>\r\n\r\n<ol>\r\n	<li>TAICTY Hostel</li>\r\n</ol>\r\n\r\n<ul>\r\n	<li>A facility for training</li>\r\n</ul>', '<ol>\r\n	<li>Youth Ministry International (YMI)</li>\r\n	<li>Reach Out Youth Ministries Solutions (ROYS)</li>\r\n	<li>Global Youth Coalition (GYC)</li>\r\n</ol>', '<ol>\r\n	<li>Head Office: Makongoro Road, Isamilo Ward, Mwanza City: P.O Box 905 Mwanza, Tanzania</li>\r\n	<li>Vijana VTC: Shilabela Street, P.O Box 523, Geita, Tanzania</li>\r\n	<li>Safina Project: Shilabela Street, P.O Box 523, Geita, Tanzania</li>\r\n</ol>\r\n\r\n<p>TAICY Hostel: Bank Road, Nyanza Street, P.O Box 523, Geita, Tanzania</p>');

-- --------------------------------------------------------

--
-- Table structure for table `deptleaders`
--

CREATE TABLE `deptleaders` (
  `deptleader_id` int(11) NOT NULL,
  `fullnames` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `position` varchar(100) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `church_id` int(11) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `wife` varchar(100) NOT NULL,
  `is_director` int(11) NOT NULL,
  `poster_id` int(11) NOT NULL,
  `bio` varchar(10000) NOT NULL,
  `ext` varchar(4) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `cvs` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `deptleaders`
--

INSERT INTO `deptleaders` (`deptleader_id`, `fullnames`, `dob`, `position`, `dept_id`, `church_id`, `start_date`, `wife`, `is_director`, `poster_id`, `bio`, `ext`, `username`, `password`, `level`, `cvs`, `status`) VALUES
(3, 'Dr. Elimeleki Z. Katani', '8/10/1962', 'Director', 5, 23, '2015', 'Beather Katani', 1, 4, '<p>Nilizaliwa Mwanza, Katungulu mission. Nilisoma shule ya msingi Kazirikanda, Ukerewe.Nilisoma sekondari mwaka 1980, Kahololo Secondary school nikamaliza mwaka 1983. Mwaka 1986 nilijiunga na mafunzo ya Uganga, Masasi Mtwara na kumaliza mwaka 1988 nikaiunga JKT mwaka huo, Msange JKT na kujiunga 1989. Mwaka 1989 nilianza kufanya kazi Kolandoto hospitali kwa mhula wa mwaka mmoja. Mwaka 1990 nilijiunga na mafunzo ya Afisa tabibu, Sengerema hadi 1993 na nikaanza kufanya kazi tena katika hospitali ya Kolandoto mpaka 2001 nilipojiunga na masomo ya udaktari KCMC Moshi na kuhitimu 2005. Nikaanza kufanya kazi Makongoro kama mratibu wa afya ya msingi AICT. Mwaka 2004 nikajiunga na mafunzo ya udaktari wa magonjwa ya macho hadi 2006. Mwaka 2006, nikaajaliwa Kolandoto kama daktari bigwa wa magonjwa ya macho. Mwaka 2009 nikateuliwa kama mganga mkuu wa hospitali ya Kolandoto hadi mwaka 2016. Mwaka 2015, niliteuliwa kuwa Mkurugenzi wa idara ya afya hadi sasa.</p>', 'jpg', 'elimeleki.katani', 'c3af97bb23511728e208d55373017f4c', 0, '', 'active'),
(4, 'Joseph M. Kahungwa', '7/10/1964', 'Chairman', 6, 24, '2014', 'Mary Joseph Kahungwa', 0, 4, '<p>Kuzaliwa 07.10.1966,</p>\r\n\r\n<p>Elimu; - masters in business administration(MBA) at University of Dar es salaam (2003-2005)</p>\r\n\r\n<ul>\r\n	<li>Bachelor of Commerce (Accounting) (1987-1991 march)</li>\r\n</ul>\r\n\r\n<p>Kazi;&nbsp;&nbsp;&nbsp; -mfanya Biashara sekta za hoteli, apartments, madini</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -mjumbe wa bodi ya TCCIA Investment Company</p>\r\n\r\n<p>Nafasi zingine; -mwenyekiti kamati bodi ya ukaguzi- TCCIA Investment Company</p>\r\n\r\n<ul>\r\n	<li>Makamu wa raisi kilimo (Tanzania Chember of Commerce, Industry and agriculture.</li>\r\n</ul>\r\n\r\n<p>Huduma kanisani.</p>\r\n\r\n<ul>\r\n	<li>Mwenyekiti wa Idara ya uchumi mipango na maendeleo AICT.</li>\r\n	<li>Mjumbe bodi ya chuo cha Theolojia cha Nasa (NTC)</li>\r\n	<li>Mjumbe wa idara ya theolojia na biblia AICT</li>\r\n	<li>Katibu wa AICT &ndash; pastorate ya Makongoro kanisa kuu mwanza.</li>\r\n</ul>\r\n\r\n<p>Contacts</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -0754 398 732</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -0787 991 309</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href=\"mailto:-jmkahungwa@yahoo.com\">-jmkahungwa@yahoo.com</a></p>\r\n\r\n<p>&nbsp;</p>', 'JPG', 'joseph.kahungwa', '7c8d5082e8e77ffcb1ac194114a1ca85', 0, '', 'active'),
(5, 'Sifa E. Mgema', '16/3/1967', 'Chairman of Mwanza Diocese', 4, 25, '2014', 'Enos Mgema', 0, 4, '<p style=\"margin-left:.25in\">&nbsp;&nbsp;Nilimwamini yesu tangu mwaka 1980&nbsp; na kubatizwa mwaka 1981 na mchungaji Bathoromayo Ihema, katika kanisa la Buhima Nassa tangu mwaka 1985, nilianza kufundisha shule ya watoto(Sunday school) Mwaka 1983-1984 nilianza kujitolea kamamhudumu katika kituo cha afya cha AICT Buhima Nassa, kisha nilichukua mafunzo ya mwaka mmoja ya uuguzi na kisha kufanya kazi katika hospitali ya Mkula na Bugando. Nilistaafu kwa hiari na kuanzisha huduma ya wazee walio katika mazingira hatarishi ambayo nliwashirikisha wanawake katika kanisa. Nashukuru mungu. Mwenyekiti Idara ya wanawake na watoto dayosisi ya mwanza. Ninaongoza idara ya wanawake na watoto katika dayosisi ya mwanza amabyo inapastoret 110 na local Church 500.</p>\r\n\r\n<p style=\"margin-left:.25in\">Contacts<span style=\"line-height:1.6\">&nbsp;-0753 789 085</span></p>', 'JPG', 'sifa.mgema', '3254a7944bc268ea481ff9f136c20eca', 0, '', 'active'),
(6, 'Rahel Dotto Nkulukulu', '22/9/1973', 'Chairman of Shinyanga Diocese', 4, 26, '2014', 'Daniel Dotto Nkulukulu', 0, 4, '<p style=\"margin-left:.25in\">Nlianza uongozi mwaka 2008 katika pastoriet ya Bariadi. Pia nlitumika katika chalo cha Bariadi mwaka 2014 nilichaguliwa kuwa mwenyekiti wa idara ya wanawake na watoto katika dayosisi ya shinyanga na mpaka sasa naendelea kumtumikia mungu kwa nafasi hiyo kama mkuu wa idara nilibatizwa 1992 na nilifunga ndoa mwaka 1992.</p>\r\n\r\n<p style=\"margin-left:.25in\">Contacts -&nbsp;<span style=\"line-height:1.6\">0784 965 444</span></p>', 'JPG', 'rahel.nkulukulu', '942a3f41f070d4507f6e893fb2731c0f', 0, '', 'active'),
(7, 'Martha M. Zakayo', '1/6/1970', 'Chairman', 4, 18, '2014', 'Obed Hezron Misoji', 0, 4, '<p style=\"margin-left:.25in\">Nilianza uongozi mwaka 2006 katika pastoreti ya chang&rsquo;ombe, mwaka 2000 nilichaguliwa kuwa mwenyekiti wa dayosisi ya pwani idara ya wanawake na watoto na mwaka 2014 nilichaguliwa kuwa mwenyekiti wa Idara ya wanawake na watoto A.I.C.T.</p>\r\n\r\n<p style=\"margin-left:.25in\">Contacts</p>\r\n\r\n<ul>\r\n	<li>0753 999 812</li>\r\n	<li>0784 546 103</li>\r\n</ul>', 'JPG', 'martha.zakayo', '21a11ce2ce55cd377c0b2b62f988faba', 0, '', 'active'),
(8, 'Fauster Mkaluka', '3/5/1955', 'Chairman Mara and Ukerewe Diocese', 4, 27, '2002', 'Ibrahimu Manyama', 0, 4, '<p style=\"margin-left:.25in\">Mimi nilimwamini yesu Kristo mnamo mwaka 1973 mwezi wa sita na kubatizwa mwaka 1974 mwezi wa kumi na mbili. Nilianza kumtumikia Mungu mnamo mwaka 1977 na kuanza kufundisha watoto wa shule ya jumapili semina za wanawake, lakini niliwahi kuchukua mafunzo ya Biblia ya miez 6 mpaka mwaka mmoja. Nilianza kuwa kiongozi wa idara ya wanawake mwaka 2002-2017.</p>\r\n\r\n<p style=\"margin-left:.25in\">Contacts -&nbsp;<span style=\"line-height:1.6\">0764 864 590</span></p>', 'JPG', 'fauster.nkaluka', '1668e8823d4e54fdbafe2b92af0a16f9', 0, '', 'active'),
(9, 'Rebecca Paulo Sanane', '11/9/1958', 'Chairman Pwani Diocese', 4, 1, '2014', 'Erasto Paulo Sanane', 0, 4, '<p style=\"margin-left:.25in\">Nilianza kazi ya mungu mwaka 2006, nikiwa mwenyekiti wa pastoreti ya Magomeni mpaka mwaka 2009. Kwa neema ya Mungu mwaka 2014 nikachaguliwa kuwa Mwenyekiti wa Idara ya wanawake na watoto katika dayosisi ya pwani mpaka sasa naendelea kumtumikia Mungu katika ngazi hiyo kama mwenye kiti.</p>\r\n\r\n<p style=\"margin-left:.25in\">Contacts -&nbsp;<span style=\"line-height:1.6\">0652 819 458</span></p>', 'JPG', 'rebecca.sanane', 'b882d869c3fd85fb1d71d267e2f65018', 0, '', 'active'),
(10, 'Margareth P. Ndaki', '17/1/1962', 'Chairman Tabora Diocese', 4, 7, '2014', 'Mathias B. Ndaki', 0, 4, '<p style=\"margin-left:.25in\">Nilianza huduma ya Mungu katika dayosisi ya Tabora, mara tu ilipo anzishwa kwa ngazi ya ukatibu, nimetumikia kwa kipindi hicho kama katibu mpaka mwaka 2014, nikachaguliwa kuwa mwenye kiti wa idara ya wanawake na watoto Dayosisi ya Tabora.</p>\r\n\r\n<p style=\"margin-left:.25in\">Contacts</p>\r\n\r\n<ul>\r\n	<li>0754 763 004</li>\r\n	<li>0786 880 260</li>\r\n</ul>', 'JPG', 'margareth.ndaki', '589014dfe396b41e5f96a8a4df315312', 0, '', 'active'),
(11, 'Agnes K. Jewe', '4/5/1956', 'Chairman Geita Diocese', 4, 28, '2014', 'Thomas D. Jewe', 0, 4, '<p style=\"margin-left:.25in\">Nilianza kumtumikia Mungu mwaka 1997 kwa nafasi ya ukatibu Idara ya wanawake na watoto hadi 2014. Kuanzia mwaka 2014 nilichaguliwa kuwa mwenye kiti wa idara ya wanawake na watoto Dayosisi ya Geita, hadi sasa ninaendelea na nafasi hiyo. Nimekuwa mjumbe wa H/Kuu na mkutano wa CCT tangu 2002 hadi 2012, lakini pamoja na kumtumikia Mungu nimekuwa mwalimu wa shule ya Msingi tangu mwaka 1979 hadi mwaka 2016, nilipotimiza Umri wa kustaafu kwa Mujibu wa sheria katika serikari yetu ta tanzania.</p>\r\n\r\n<p style=\"margin-left:.25in\">Contacts -&nbsp;<span style=\"line-height:1.6\">0754 062 842</span></p>', 'JPG', 'agnes.jewe', '4ef064099eea5e39f13165fcc2c1c567', 0, '', 'active'),
(12, 'Alphonce Samambile Tambalu', '30/6/1964', 'diocese secretary', 0, 7, '28/1/1996', 'Salome Joseph', 0, 4, '<p>Nimesoma shule ya msingi Ng&#39;wakiyenze wilayani Misungwi Mwanza tangu 1975-1981 nilipohitimu nilijiunga na chuo cha Biblia cha Katungulu tangu 1987-1990 nilipohitimu. Nimekuwa mwinjilisti katika kanisa la AICT tangu 1990-1995 nilipoteuliwa kujiunga na chuo cha uchungaji kwa kuchukua kozi ya miezi mitatu katika fani ya Uchungaji huko Bwiru Mwanza ikiwa 1/6/1995. Niliwekewa mikono kuwa Mchungaji tarehe 28/1/1996 katika Pastorate ya AICT Bujora Mwanza. Nimekuwa katibu mkuu wa dayosisi ya Mwanza tangu 2005-2007. Baadae nilienda kusoma katika chuo cha Theologia cha Nassa Bulima, miaka minne tangu 2007-2011 nilipohitimi na kutunukiwa cheti cha Diploma ya juu na tangu 2011 hadi sasa ni katibu mkuu wa dayosisi ya Tabora. Nilimwamini Yesu kuwa Bwana na Mwokozi wangu tarehe 10/4/1980 AICT Matale, Pastorate ya Sasi, Mwanza. Nilibatizwa tarehe 29/5/1982 katika maji ya mto Kisiwi huko Matale. Mchungaji aliyenibatiza ni Mch Jonathan Gwabo.</p>', 'no', 'alphonce.tambalu', 'fe2661549aaf66b1b88014746c73a093', 0, '', 'Inactive'),
(13, 'Joel N. Simbitti', '10/07/1964', 'Coordnator', 7, 24, '2011', 'Pendo Ndaki', 0, 8, '', 'jpg', 'injilinamisheni', '640920e76b2c79cc78a94fbc1cdfd1e2', 1, '', 'active'),
(14, 'Kaganzi Timothy adj', '', 'Director', 4, 814, '2021', '', 0, 3, '<p>Department and more details to come</p>', 'jpg', 'root', 'd41d8cd98f00b204e9800998ecf8427e', 0, '', 'active'),
(15, 'Kaganzi Timothy adj', '', 'Director', 4, 814, '2021', '', 0, 3, '<p>Department and more details to come</p>', 'jpg', 'root', 'd41d8cd98f00b204e9800998ecf8427e', 0, 'pdf', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `deptposts`
--

CREATE TABLE `deptposts` (
  `deptpost_id` int(11) NOT NULL,
  `post_title` varchar(100) NOT NULL,
  `description` longtext NOT NULL,
  `ext` varchar(4) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diocesedetails`
--

CREATE TABLE `diocesedetails` (
  `diocesedetails_id` int(11) NOT NULL,
  `diocese_id` int(11) NOT NULL,
  `history` longtext NOT NULL,
  `vision` varchar(1000) NOT NULL,
  `mission` varchar(1000) NOT NULL,
  `corevalues` longtext NOT NULL,
  `diocesedepts` longtext NOT NULL,
  `sponsors` longtext NOT NULL,
  `contacts` varchar(10000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `diocesedetails`
--

INSERT INTO `diocesedetails` (`diocesedetails_id`, `diocese_id`, `history`, `vision`, `mission`, `corevalues`, `diocesedepts`, `sponsors`, `contacts`) VALUES
(1, 6, '<p>Africa Inland Church Diocese of Tabora is a Faith Based Organization (FBO) which was officially inaugurated to be a Diocese on 8<sup>th </sup>October, 2006. It is among of Six diocese of the AFRICA&nbsp;INLAND CHURCH TANZANIA Denomination that legally is registered under <strong>Act CAP. 337 (R.E 2002) </strong>of Tanzania in 2010 with registration number <strong>S.A.6242,</strong> &nbsp;the core vision of the Tabora Diocese is to proclaim GOOD NEWS OF GOD and at the same time meeting socio-economic needs of the societies around it.&nbsp;</p>', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">A Diocese whereby every person live in fullness of life, serving one another in love and care as well as praising God for His goodness</span></p>', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">The Diocese tackles on building the capacity of her congregations and the community around to bring about holistic transformation to a people that enable them to live jubilant today and in the future to come</span></p>', '<ul>\r\n	<li>To evangelize or to reach the unreached people and plant churches&nbsp;&ldquo;Kuhubiri Injili au kuwafikia watu wasiofikiwa bado, na kupanda Makanisa&rdquo;</li>\r\n	<li>&nbsp; &nbsp; &nbsp;Strengthening Churches&nbsp;&ldquo;Kuimarisha Makanisa&rdquo;</li>\r\n	<li>&nbsp; &nbsp; &nbsp;To bring health education, health care and social services to the community</li>\r\n</ul>\r\n\r\n<p style=\"margin-left:.5in\">&ldquo;Kuleta ama kuboresha huduma za jamii: Elimu, huduma za afya, n.k.&rdquo;</p>\r\n\r\n<ul>\r\n	<li>&nbsp; &nbsp; &nbsp; To ensure children and youth are being educated</li>\r\n</ul>\r\n\r\n<p style=\"margin-left:.5in\">&ldquo;Kuhakiki watoto na vijana wamepata elimu&rdquo;</p>\r\n\r\n<ul>\r\n	<li>&nbsp; &nbsp; &nbsp;To help our community to improve their economic status</li>\r\n</ul>\r\n\r\n<p style=\"margin-left:.5in\">&ldquo;Kuiwezesha jamii yetu kujikwamua ki-uchumi&rdquo;</p>', '<ul style=\"list-style-type:none\">\r\n	<li>\r\n	<div class=\"col-xs-12 col-sm-6\" style=\"box-sizing: border-box; outline: 0px; margin: 0px; padding: 0px 15px; position: relative; min-height: 1px; float: left; width: 277.5px; color: rgb(0, 0, 0); font-family: \">\r\n	<ul style=\"list-style-type:none\">\r\n		<li>1. Evangelism</li>\r\n		<li>2. Youth</li>\r\n		<li>3. Health</li>\r\n		<li>4. Social Services</li>\r\n		<li>5. Projects</li>\r\n	</ul>\r\n	</div>\r\n\r\n	<div class=\"col-xs-12 col-sm-6\" style=\"box-sizing: border-box; outline: 0px; margin: 0px; padding: 0px 15px; position: relative; min-height: 1px; float: left; width: 277.5px; color: rgb(0, 0, 0); font-family: \">\r\n	<ul style=\"list-style-type:none\">\r\n		<li>6. Finance</li>\r\n		<li>7. Human Resource</li>\r\n		<li>8. Christian Education</li>\r\n		<li>9. Education</li>\r\n		<li>10. Women</li>\r\n	</ul>\r\n	</div>\r\n	</li>\r\n</ul>', '<h5><a href=\"http://ca.aimint.org/\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; background-color: transparent; color: rgb(56, 94, 126); text-decoration-line: none; outline: none !important;\" target=\"_blank\">Africa Inland Mission Canada</a></h5>\r\n\r\n<p>Africa Inland Mission is an evangelical Christian mission agency serving in over 20 African nations and reaching out to africans living in other countries.With a priority on unreached people groups, our passion is to see christ-centered churches established and thriving among all of Africa&#39;s peoples, and we&#39;re excited to offer Full term and short term ministry assignments for believers seeking to be a part of God&#39;s redemptive work through missions.</p>\r\n\r\n<h5><a href=\"http://us.aimint.org/\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; background-color: transparent; color: rgb(56, 94, 126); text-decoration-line: none; outline: none !important;\" target=\"_blank\">Africa Inland Mission USA</a></h5>\r\n\r\n<p>African inland Mission is an evangelical christian mission agency serving in over 20 African nations.Our passion is to see Christ-Centered churches established and thriving among all of Africa&#39;s peoples, and we&#39;re excited to offer Full Term and Short Term ministry assignments for believers seeking to be a part of God&#39;s redemptive work through missions</p>\r\n\r\n<h5><a href=\"http://www.communitybiblestudy.org/\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; background-color: transparent; color: rgb(56, 94, 126); text-decoration-line: none; outline: none !important;\" target=\"_blank\">Community Bible Studies (CBS) International</a></h5>\r\n\r\n<p>From young moms and housewives. From business people, professionals, tradespeople to students, or retired. We are just like you and your neighbors. family bible study.We come from all of the Christian denominations, from no religious background, or from non-Christian faiths that simply want to study the Bible, which is the most widely published and studied book in the world</p>\r\n\r\n<h5><a href=\"https://www.gottes-liebe-weltweit.de/hilfe-fuer-brueder-international/aktuelle-hilfe-und-berichte\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; background-color: transparent; color: rgb(56, 94, 126); text-decoration-line: none; outline: none !important;\" target=\"_blank\">HILFE FUR BRUDER GERMANY</a></h5>\r\n\r\n<h5><a href=\"http://www.pactworld.org/country/tanzania\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; background-color: transparent; color: rgb(56, 94, 126); text-decoration-line: none; outline: none !important;\" target=\"_blank\">PACT TANZANIA</a></h5>\r\n\r\n<p>Pact&#39;s work in tanzania focuses on improving the lives of orphans and vulnerable children.With our unique integrated approach, our efforts are also strengthening families and local economies, institutions and organisations- impacts that will benefit Tanzania for generations to come</p>\r\n\r\n<h5><a href=\"https://avantministries.org/\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; background-color: transparent; color: rgb(56, 94, 126); text-decoration-line: none; outline: none !important;\" target=\"_blank\">AVANT MINISTRIES</a></h5>\r\n\r\n<p>Avant is passionate about planting church among the unreached.We are also committed to training up national leaders to faithfully lead those churches.By the grace of God, three churches have been started and are being led by national believers. Rejoice with us that the truth of the gospel is changing lives !</p>\r\n\r\n<h5><a href=\"http://www.compassion.com/tanzania/tanzania-map.htm\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; background-color: transparent; color: rgb(56, 94, 126); text-decoration-line: none; outline: none !important;\" target=\"_blank\">INTERNATIONAL COMPASSION TANZANIA</a></h5>\r\n\r\n<p>Compassion International is child-advocacy ministry that pairs compassionate people with those who are suffering from poverty.The ministry releases children from spiritual, economic , social, and physical poverty.The goal is for each child to become a responsible and fulfilled adult</p>', '<div>\r\n<p>AFRICA INLAND CHURCH TANZANIA</p>\r\n\r\n<p><strong>DIOCESE OF TABORA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;Bishop +255 754 462 221&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong>&nbsp;&nbsp;&nbsp;</p>\r\n\r\n<p><strong>&nbsp;P.O. BOX&nbsp; 1286&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong><strong>General Secretary </strong><strong>+255 784 219 232</strong></p>\r\n\r\n<p><strong>TABORA, Tanzania &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Office Tel.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong><strong>+255 732 988 862</strong></p>\r\n\r\n<p><strong>Location: Tabora Municipality, Kitete road, Community Street&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</strong><strong>Email- aict.tabora@gmail.com&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong></p>\r\n</div>\r\n\r\n<p>&nbsp;</p>'),
(2, 3, '<p>The AICT Diocese of Shinyanga was inaugurated in October 1993 under the leadership of Bishop John Kanoni Nkola. By then there were only 47 pastorates and 215 local churches in the entire Diocese.</p>\r\n\r\n<p>The Diocese was operating in four Regions namely Shinyanga, Tabora, Rukwa, and Kigoma. The Diocese has worked hard on evangelism to an extent that it managed to open many new pastorates and local churches; in the year 2006 the Diocese managed to open a new Diocese that has twenty pastorates with 4,000 church members. Currently Diocese of Shinyanga has 86 pastorates under which there are 430 local churches with approximately 20,000 church members.</p>\r\n\r\n<p>AICT is a faith based organization, which, along with the enthusiasm of propagating the gospel of Christ, also it focuses on providing physical and social services to surrounding communities without any segregation. However in the year 2001 the diocese developed its vision and mission as stated here below:</p>', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">A Diocese whereby every person live in fullness of life, serving one another in love and care as well as praising God for His goodness</span></p>', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">The Diocese tackles on building the capacity of her congregations and the community around to bring about holistic transformation to a people that enable them to live jubilant today and in the future to come</span></p>', '<ul>\r\n	<li>Improved life of all church workers, increased church planting/growth to church members.</li>\r\n	<li>Mobilizing communities and church to full engage in primary secondary education as a means of reducing poverty.</li>\r\n	<li>Building capacity of Christian children to understand God&rsquo;s word and be able to live a sound Christian life</li>\r\n	<li>Build the capacity of youth and women to fight against poverty by developing income generating projects..</li>\r\n	<li>Improving food security and water.</li>\r\n	<li>Improving church buildings for conducive church services.</li>\r\n	<li>Building the capacity of church &amp; community to respond and mitigate on disaster issues</li>\r\n	<li>Build the capacity of the local church to mobilize her immediate community.</li>\r\n	<li>Facilitating poor communities to access health services, minimizing HIV infections as well as supporting the orphans/widows from HIV/AIDS with basic needs and raising funds from local and external sources.</li>\r\n</ul>', '<p>1. Development leads by&nbsp;<span style=\"color:rgb(34, 34, 34); font-family:arial,sans-serif; font-size:12.8px\">Mr Phinehas Chibago</span></p>\r\n\r\n<p>2. Christian Education leads by Rev.&nbsp;<span style=\"color:rgb(34, 34, 34); font-family:arial,sans-serif; font-size:12.8px\">Joshua Masaga</span></p>\r\n\r\n<p><span style=\"color:rgb(34, 34, 34); font-family:arial,sans-serif; font-size:12.8px\">3. Finance leads by Mr Musa Mayaya</span></p>\r\n\r\n<p>4. Youth leads by Mr Benjamini Batano</p>\r\n\r\n<p>5. Women leads by Mrs&nbsp;Rahel Dotto Nkulukulu</p>', '<p><span style=\"font-size:14px\">1.&nbsp;<strong>Bread for the world</strong></span></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>2. Compassion&nbsp;</strong></span></p>\r\n\r\n<h5><span style=\"font-size:14px\"><strong>3. Community Bible Studies (CBS) International</strong></span></h5>\r\n\r\n<p>From young moms and housewives. From business people, professionals, tradespeople to students, or retired. We are just like you and your neighbors. family bible study.We come from all of the Christian denominations, from no religious background, or from non-Christian faiths that simply want to study the Bible, which is the most widely published and studied book in the world</p>', '<ul>\r\n	<li><span style=\"color:rgb(129, 129, 129); font-family:roboto; font-size:12px\">PHYSICAL ADDRESS</span>\r\n	<p>Old Shinyanga Road<br />\r\n	P.O. Box 53 Shinyanga, Tanzania&nbsp;.</p>\r\n	</li>\r\n	<li><span style=\"color:rgb(129, 129, 129); font-family:roboto; font-size:12px\">PHONE NO</span>\r\n	<p>+255- 754 462221</p>\r\n	</li>\r\n	<li><span style=\"color:rgb(129, 129, 129); font-family:roboto; font-size:12px\">EMAIL ID</span>\r\n	<p>info@aictshinyangadiocese.org</p>\r\n	</li>\r\n</ul>'),
(3, 2, '<p>AICT began at Nassa station in 1909 under the work of two missionaries Emil and Marie Sywulka who worked under AIM (Africa Inland Mission) which replaced CMS (Church Missionary Society). These missionaries worked with some indigenous evangelists who volunteered to preach the gospel without pay to their own countrymen and women. The earliest mission stations besides Nassa were started, including Mwanza, Nera and Chamugasa.</p>\r\n\r\n<p>The missionary work was effective because of the partnership that existed between indigenous workers and foreign missionaries. For instance, the evangelistic outreaches were carried out in teams that planted churches in different parts of Sukuma land. After planting many churches and training nationals, AIM handled the church to nationals in 1963. While the name AICT came to being in 1958. From 1963 AICT was functioning under one bishop as the chief overseer and one executive council. Jeremiah Mahalu Kisula was the first bishop of the AICT. The church expanded and they decided to decentralize and divide the church into dioceses. In 1993, AICT was divided into five dioceses. Currently AICT has six dioceses named: Pwani, Mwanza, Shinyanga, Mara &amp; Ukerewe, Geita and Tabora.</p>\r\n\r\n<p>AICT Pwani Diocese was established in 1994 following expansion of the church activities in the coast regions. The first bishop of the PD was Bish. Paul Methusela Nyagwaswa and the current bishop is Bish. Charles S. Salalah. This is the missionary diocese focusing on reaching the unreached groups with the Gospel of Jesus Christ. Currently Pwani Diocese is serving 14 regions namely Pwani, Manyara, Arusha, Kilimanjaro, Tanga, Morogoro, Dodoma, Singida, Iringa, Mbeya, Ruvuma, Mtwara, Lindi and Dar-Es- Salaam.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><span style=\"font-size:16px\"><span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">Core Values</span></span></p>\r\n\r\n<p><span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">Solidarity/Unity</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">Respect</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">Appreciation of gifts</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">Love</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">Integrity</span></p>', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">A Diocese whereby every person live in fullness of life, serving one another in love and care as well as praising God for His goodness</span></p>', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">To proclaim the true Gospel of Jesus Christ and provide both spiritual and physical services to all persons, based on the Biblical perspective, to enable them to worship God and improve their well-being.</span></p>', '', '', '', '<p><span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">Magomeni Mapipa Uwalani/Mikumi Street</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">P.O. Box 9172 Dar-Es-Salaam Tanzania-East Africa</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&nbsp;Telephone: + 255 22 2170 406</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&nbsp;Mobile: + 255 752 757 103</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&nbsp;Email: aictcoastdiocese@yahoo.com</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&nbsp;Website:</span><a href=\"http://aictdyp.or.tz/\" style=\"box-sizing: border-box; background-image: initial; background-position: 0px 0px; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial; color: rgb(128, 80, 125); text-decoration-line: none; transition: all 0.4s ease-in-out; font-family: \">aictdyp.or.tz</a></p>'),
(4, 5, '<p>AICT-Diocese of Geita is one of the six Dioceses of the AICT. The Diocese has 89 Pastorates and 410 local congregations about 50,000 church members out of them 60% are children. These congregations are led by pastors and local evangelists. The diocese is located west of Mwanza region bordering with Uganda in north and Rwanda and Burundi in west. The area of the Diocese covers Sengerema and Geita Districts of Mwanza region and a whole region of Kagera that has eight districts namely Biharamuro, Bukoba town, Bukoba rural, Chato, Karagwe, Misenye, Muleba, Ngara. The main activities of the people in this Diocese are substantial farming of cash and food crops, fishing, and casual employment to Gold Mining Companies including small income generating activities.</p>\r\n\r\n<p>Africa Inland Church Tanzania (AICT) is an evangelical church registered in the country in March 1965. It was established by Africa Inland Mission (AIM) international from the USA in 1909 but was handed over to the indigenous people in 1965. In 1993, the national church Synod decentralized into five Dioceses namely Mwanza, Shinyanga, Geita, Pwani, Mara and Ukerewe; and of recently Tabora.</p>\r\n\r\n<p>Geita Diocese of the Africa Inland Church Tanzania was officially inaugurated October 10, 1993 when the first Bishop, the late Rev. Zakayo Mayala Majige was installed the diocesan Bishop. The servant of God received his home call January 21, 2004 after working devotedly and faithfully since the birth of the diocese.</p>\r\n\r\n<p>The AICT Central Synod elected Rev. Mussa Lucas Masanja Magwesela to take over from the late Bishop Zach Majige. As the diocese was celebrating her eleventh birthday, October 10, 2004, Rev. Mussa Magwesela was installed the second diocesan bishop. As it were, the successor should continue to carry on the predecessor&rsquo;s plans; thus Bishop Mussa had to proceed from where the late Bishop Zach ended.</p>\r\n\r\n<p>In achieving her vision and mission, the diocese has stipulated her core values that bound it and differentiate with other organisations or agencies as following here under;-</p>\r\n\r\n<p><span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; The authentic of God&rsquo;s word to his church</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Fellowship and holiness</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Love and caring to one another</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Humility and perseverance</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Evangelism and discipleship making</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Transparency and accountability</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Excellency in services</span></p>', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">A Diocese whereby every person live in fullness of life, serving one another in love and care as well as praising God for His goodness</span></p>', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">The Diocese tackles on building the capacity of her congregations and the community around to bring about holistic transformation to a people that enable them to live jubilant today and in the future to come</span></p>', '<p>The dioceses focus on the following thematic areas or objectives;-</p>\r\n\r\n<p><span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Pastoral and mission development in which expansion of the church through evangelism, discipleship and church planting is executed</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Improvement of education from nursery, primary, secondary education and higher level</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Integrated Community Development that tackles on capacity building, physical development, environment, water and sanitation, and relief services to disaster affected communities</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Women and development that focus on both spiritual and physical development</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Health services especially on primary health care, treatment provision, as well as care and prevention to HIV/AIDS victims</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Youth and Development in which the focus is on spiritual nurturing, economic empowerment and prevention from transmitted deceases including HIV/AIDS</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Christian education provision through Bible school training, Sunday schools, children camps, and Bible knowledge provision to primary and secondary schools</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Leadership and Financial Management</span></p>', '', '', '<p><span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">PO. Box 523 Geita, Tanzania.</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&nbsp;Tel: 028 2520029,028 2520437&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mob: +255 767 484 042</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&nbsp;E-mail: aictgeita@yahoo.com</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&nbsp;Website:&nbsp;</span></p>'),
(5, 7, '', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">A Diocese whereby every person live in fullness of life, serving one another in love and care as well as praising God for His goodness</span></p>', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">The Diocese tackles on building the capacity of her congregations and the community around to bring about holistic transformation to a people that enable them to live jubilant today and in the future to come</span></p>', '<div class=\"panel-body\">\r\n<p>The dioceses focus on the following thematic areas or objectives;-</p>\r\n\r\n<p><span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Pastoral and mission development in which expansion of the church through evangelism, discipleship and church planting is executed</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Improvement of education from nursery, primary, secondary education and higher level</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Integrated Community Development that tackles on capacity building, physical development, environment, water and sanitation, and relief services to disaster affected communities</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Women and development that focus on both spiritual and physical development</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Health services especially on primary health care, treatment provision, as well as care and prevention to HIV/AIDS victims</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Youth and Development in which the focus is on spiritual nurturing, economic empowerment and prevention from transmitted deceases including HIV/AIDS</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Christian education provision through Bible school training, Sunday schools, children camps, and Bible knowledge provision to primary and secondary schools</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Leadership and Financial Management</span></p>\r\n</div>', '', '', '<p>MAKONGORO</p>\r\n\r\n<p>P.O. BOX 2116</p>\r\n\r\n<p>MWANZA</p>\r\n\r\n<p>E-mail: info@aictdmz.or.tz</p>'),
(6, 4, '', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">A Diocese whereby every person live in fullness of life, serving one another in love and care as well as praising God for His goodness</span></p>', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">The Diocese tackles on building the capacity of her congregations and the community around to bring about holistic transformation to a people that enable them to live jubilant today and in the future to come</span></p>', '<div class=\"panel-body\">\r\n<p>The dioceses focus on the following thematic areas or objectives;-</p>\r\n\r\n<p><span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Pastoral and mission development in which expansion of the church through evangelism, discipleship and church planting is executed</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Improvement of education from nursery, primary, secondary education and higher level</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Integrated Community Development that tackles on capacity building, physical development, environment, water and sanitation, and relief services to disaster affected communities</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Women and development that focus on both spiritual and physical development</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Health services especially on primary health care, treatment provision, as well as care and prevention to HIV/AIDS victims</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Youth and Development in which the focus is on spiritual nurturing, economic empowerment and prevention from transmitted deceases including HIV/AIDS</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Christian education provision through Bible school training, Sunday schools, children camps, and Bible knowledge provision to primary and secondary schools</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Leadership and Financial Management</span></p>\r\n</div>', '', '', ''),
(7, 11, '', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">A Diocese whereby every person live in fullness of life, serving one another in love and care as well as praising God for His goodness</span></p>', '<p><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif\">The Diocese tackles on building the capacity of her congregations and the community around to bring about holistic transformation to a people that enable them to live jubilant today and in the future to com</span></p>', '<div class=\"panel-body\">\r\n<p>The dioceses focus on the following thematic areas or objectives;-</p>\r\n\r\n<p><span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Pastoral and mission development in which expansion of the church through evangelism, discipleship and church planting is executed</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Improvement of education from nursery, primary, secondary education and higher level</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Integrated Community Development that tackles on capacity building, physical development, environment, water and sanitation, and relief services to disaster affected communities</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Women and development that focus on both spiritual and physical development</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Health services especially on primary health care, treatment provision, as well as care and prevention to HIV/AIDS victims</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Youth and Development in which the focus is on spiritual nurturing, economic empowerment and prevention from transmitted deceases including HIV/AIDS</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Christian education provision through Bible school training, Sunday schools, children camps, and Bible knowledge provision to primary and secondary schools</span><br />\r\n<span style=\"font-family:helvetica neue,helvetica,arial,sans-serif\">&bull; Leadership and Financial Management</span></p>\r\n</div>', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dioceseposts`
--

CREATE TABLE `dioceseposts` (
  `diocesepost_id` int(11) NOT NULL,
  `diocese_id` int(11) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `description` longtext NOT NULL,
  `ext` varchar(4) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dioceseposts`
--

INSERT INTO `dioceseposts` (`diocesepost_id`, `diocese_id`, `title`, `description`, `ext`, `timestamp`, `status`) VALUES
(1, 7, 'SINODI YA 28,  MAKONGORO MWANZA, TAREHE 20-21/2022', '<p>Tunamshukuru <strong>Mungu</strong> kwa kutuwezesha kufanikisha <strong>Sinodi ya 28</strong> ambayo imehudhuriwa na wajumbe <strong>304</strong>, Ofisi ya Askofu kupitia <strong>katibu</strong> <strong>Mch. Philipo Kanwele</strong> imetoa taarifa ya <strong>Katibu wa Dayosisi ya Mwanza</strong>.</p>\r\n\r\n<p>&nbsp;&nbsp;&nbsp; Wajumbe wa Sinodi wamemchagua <strong>Mch. Japhet Kafugo</strong> kuwa Mchungaji msaidizi wa Askofu Dayosisi ya Mwanza, pia <strong>Mwnj. Eliada Bujiku</strong> amechaguliwa kuwa Mwenyekiti Balaza la Fedha Dayosisi Mwanza na wajumbe wake ni <strong>Kelebe Luteli, Jackson Songora na Deus Kadiko.</strong></p>\r\n\r\n<p>Wachungaji wawakilishi wa kanda ni <strong>Mch. Paul L. Salala ( Magu &amp; Busega )</strong>. <strong>Mch.Zablon Kashinje ( Misungwi )</strong>. <strong>Mch. Mathias M. Kadinda ( Kwimba ).</strong></p>', 'jpg', 1658480913, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dioceses`
--

CREATE TABLE `dioceses` (
  `diocese_id` int(11) NOT NULL,
  `diocese` varchar(400) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `dioceses`
--

INSERT INTO `dioceses` (`diocese_id`, `diocese`, `status`) VALUES
(2, 'PWANI', 1),
(3, 'SHINYANGA', 1),
(4, 'MARA NA UKEREWE', 1),
(5, 'GEITA', 1),
(6, 'TABORA', 1),
(7, 'MWANZA', 1),
(8, 'TANZANIA', 0),
(9, 'OLD SHINYANGA', 0),
(10, 'Chigunga', 0),
(11, 'KATI', 1);

-- --------------------------------------------------------

--
-- Table structure for table `diocesestaff`
--

CREATE TABLE `diocesestaff` (
  `diocesestaff_id` int(11) NOT NULL,
  `fullnames` varchar(100) NOT NULL,
  `ext` varchar(10) NOT NULL,
  `position` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `diocese_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `diocesestaff`
--

INSERT INTO `diocesestaff` (`diocesestaff_id`, `fullnames`, `ext`, `position`, `email`, `phone`, `gender`, `diocese_id`, `level`, `status`) VALUES
(1, 'Andy mawanda', '', 'Developer', '', '+2567792869586', 'Male', 5, 0, 0),
(2, 'Silas Majaliwa Kezakubi', 'jpg', 'Bishop', 'smkezakubi@hotmail.com', '+255 787 462 221, +255 754 462 221', 'Male', 6, 1, 1),
(3, 'Marko Masunga Ngalu', 'jpg', 'Rev. Assistant of Bishop:', 'mngalu@yahoo.com', '+255 623 995228, +255 785 855337', 'Male', 6, 2, 1),
(4, 'Tambalu Samambile Alphonce', '', 'General Secretary:', 'altambalu@yahoo.com', '+255 754 515 874, +255 783 515 874', 'Male', 6, 3, 1),
(5, 'Irene Dickson Kilonzo', 'jpg', 'Accountant', 'reneeydickson@gmal.com', '+255 746 448 323, +255 689 727 603', 'Female', 6, 4, 1),
(6, 'Neema Simon Mbilizi', 'jpg', 'Bishopâ€™s personal secretary', 'mbilizi.neema904@gmail.com', '+255 685 225 022, +255 762 872 742', 'Female', 6, 5, 1),
(7, 'Musa John Malifedha', '', 'Project Manager', 'johnmussa74@yahoo.com', '+255 784 989 422, +255 625 948 601', 'Male', 6, 6, 1),
(8, 'Naomi Lwenge', '', 'Compassion Director', 'nlwenge.tz959@gmail.com', '+255 758 134 074', 'Female', 6, 7, 1),
(9, 'Wales Joel Baruti', 'jpg', 'M&E officer:', 'barutiwales@gmail.com', '+255 756 415 626', 'Male', 6, 8, 1),
(10, 'Deus Origene Shumbi', 'jpg', 'Economic Strengthening Livelihood Officer (ESLO)', 'deoshumbi1@gmail.com', '+255 786 669 086, +255 764 572 022', 'Male', 6, 9, 1),
(18, 'GODFRY HIZA', '', 'ACCOUNTANT', '', '+255 719 1919 939 / +255 765 025 768', 'Male', 7, 1, 0),
(19, 'SALOME SHINHU', '', ' ACCOUNTANT ASSISTANT', '', '+255 752 999 775 / +255 624 806 687', 'Female', 7, 1, 1),
(20, 'SALOME SIMON MTENDO', '', 'P/S', '', '+255 754 397 272', 'Female', 7, 1, 1),
(21, 'SARAH MAYALA', '', 'RECEPTION', '', '+255 754 025 349 /+255717 572399', 'Female', 7, 1, 1),
(22, 'ELIAS S. BYEMERO', '', 'DRIVER', '', '+255 754 074 877', 'Male', 7, 1, 1),
(23, 'JANETH ENOCK', '', 'RECORDS', '', '+255 766 177 757 /+255 713 839 028', 'Female', 7, 1, 1),
(24, 'NYAKABI EDWARD', '', 'ENVIRONMENT', '', '+255 788 352 649', 'Male', 7, 1, 1),
(25, 'ELISHA MNYALA', '', 'SECURITY(NGEREKA)', '', '+255 762 265 328', 'Male', 7, 1, 1),
(26, 'REV. SAMSON NGâ€™WANDU', '', 'YOURTH DEPARTMENT COORDINATOR', '', '+255 769 626 305', 'Male', 7, 1, 1),
(27, 'REV.  JAPHET KAFUGO', '', 'EKD', '', '+255 754 828 687', 'Male', 7, 1, 1),
(28, 'JAFETH NGELELA', '', 'COORDNATOR - NGEREKA', '', '+255 786 223 639', 'Male', 7, 1, 1),
(29, 'ELIZABETH MANUMBU MAFUJA', '', 'CBS (C&Y)', '', '+255 755 453 440', 'Female', 7, 1, 1),
(30, 'REV. NEHEMIA WAMBURA', '', 'UKWATA/MWALIMU MALMBE', '', '+255 752 984 976', 'Male', 7, 1, 1),
(31, 'REV. EMMANUEL KULYA', '', 'GEREZA LA BUTIMBA', '', '+255 767 127 827', 'Male', 7, 1, 1),
(32, 'REV. STANLEY M. NATHANAEL', '', 'ETE/CBS/MALIMBE COLLEGE', '', '+255 786 323 911', 'Male', 7, 1, 1),
(33, 'REV. ABELI LUGAYILA', '', 'EVANGELISM AND MISSIONS', '', '+255 767 809 636 /+255 784 709 636', 'Male', 7, 1, 1),
(34, 'JEREMIA CHULE', '', 'CASHIER  	', '', '0755 766 070', 'Male', 7, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `fullnames` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `phone` varchar(80) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dept_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `fullnames`, `dob`, `position`, `phone`, `gender`, `dept_id`, `username`, `status`) VALUES
(1, 'Manoni, NJ', '11/17/1978', 'Headmaster', '+255768344075', 'Male', 6, 'justmanoy@ymail.com', 'waiting'),
(2, 'RIOBA J. MOHERE', '8/21/1993', 'Student of Theology', '+255788747137', 'Male', 7, 'mohererioba@gmail.com', 'waiting'),
(3, 'Daniel shija', '5/28/1978', 'Lab manager', '0756809805', 'Male', 5, 'danielshija2016@gmail.com', 'waiting'),
(4, 'Emmanuel Nyamalya', '1/1/1976', 'Pastor', '+255784998144', 'Male', 8, 'e_nyamalya@aol.com', 'waiting'),
(5, 'Elias Shiguta', '12/18/1989', 'Mwinjilisti', '+255628964122', 'Male', 7, 'eliasshiguta@gmail.com', 'waiting'),
(6, 'eritcheymargf', '11/26/1986', '12', '1-936-9367', 'Male', 6, 'eritcheymargf', 'waiting'),
(7, 'ygleyhoyt', '10/15/1992', 'Students ', '0889868282', 'Male', 7, 'ygleyhoyt', 'waiting'),
(8, 'ralsburyphil', '10/14/1993', '12', '06642271480', 'Male', 7, 'ralsburyphil', 'waiting'),
(9, 'raudemarsuhren', '2/4/1986', '12', '800-912-1275', 'Male', 10, 'raudemarsuhren', 'waiting'),
(10, 'rndstartiferd', '6/28/1991', '12', '06642271480', 'Male', 5, 'rndstartiferd', 'waiting'),
(11, 'ischofielmich', '5/11/1989', '12', '0889868282', 'Female', 5, 'ischofielmich', 'waiting'),
(12, 'nloronacele', '11/22/1981', '12', '1-732-7958856', 'Male', 7, 'nloronacele', 'inactive'),
(13, 'monclerrentilly', '10/20/1990', '12', '1-936-9367', 'Female', 4, 'monclerrentilly', 'waiting'),
(14, 'jhrejuli', '10/24/1994', '12', '0889868282', 'Female', 6, 'jhrejuli', 'waiting'),
(15, 'ozuloluis', '10/22/1988', '12', '0889868282', 'Female', 5, 'ozuloluis', 'waiting'),
(16, 'ochwadronrudys', '8/11/1992', '12', '800-912-1275', 'Female', 5, 'ochwadronrudys', 'waiting'),
(17, 'Manase', '2/20/2000', 'Christian', '0712343287', 'Male', 8, 'samwelmanase02@gmail.com', 'waiting'),
(18, 'dwoodmach', '11/6/1989', '12', '06642271480', 'Male', 5, 'dwoodmach', 'waiting'),
(19, 'ytifanytifany', '11/22/1992', '12', '0889868282', 'Male', 5, 'ytifanytifany', 'waiting'),
(20, 'keakirb', '7/5/1981', '12', '800-912-1275', 'Female', 10, 'keakirb', 'waiting'),
(21, 'alphshwabrando', '5/20/1993', '12', '1-936-9367', 'Female', 9, 'alphshwabrando', 'waiting'),
(22, 'eraunedarr', '5/6/1985', '12', '1-732-7958856', 'Male', 9, 'eraunedarr', 'waiting'),
(23, 'Daniel Lumala', '11/10/1990', 'Project coordinator ', '0692220999', 'Male', 8, 'dlumala', 'waiting'),
(24, 'Francis Mlelema', '1/16/1975', ' Project Coordinator at AICT Ngokolo TZ 958 Child and Youth Development Centre', '+255765296464', 'Male', 4, 'fmlelema.tz958@gmail.com', 'waiting'),
(25, 'Nuhu J Manoni', '11/17/1978', 'The Headmaster', '0768344075', 'Male', 6, 'nuhumanoni2@aict.org', 'waiting'),
(26, 'Samson Makwaya', '3/26/1995', 'Evangelist ', '0745235955', 'Male', 7, 'ndekimakwaya@gmail.com', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(20) NOT NULL,
  `event_name` varchar(500) NOT NULL,
  `event_venue` varchar(500) NOT NULL,
  `event_category` varchar(100) NOT NULL,
  `event_date` int(200) NOT NULL,
  `event_time` varchar(100) NOT NULL,
  `event_description` varchar(1000) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `featured` varchar(20) NOT NULL,
  `published` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_venue`, `event_category`, `event_date`, `event_time`, `event_description`, `poster`, `featured`, `published`) VALUES
(1, 'Kufungua Kanisa la Kalunde Tabora', 'Kanisa la Kalunde', 'Services', 1399878000, '10:00 AM - 4: 00 PM', 'Ufunguzi wa Kanisa la kiinjilisti la Kalunde lilifunguliwa na Askofu Mkuu Silasi Kezakubi tarehe 12/5/2013. Kanisa hili lilianzishwa na Mchungaji Joseph Ipimilo wa Pastorati ya Ipuli Tabora Mjini. Kanisa la Kalunde lipo Uyui nje kidogo ya Tabora mjini.', '', 'yes', 'published'),
(2, 'UFUNGUZI WA CHUO CHA UUGUZI MKULA HOSPITAL', 'Bishop Kisula College Of Health Administration Block', 'Services', 1386831600, '9:00 am - 5:00 pm', '<b>Chuo cha Mafunzi ya uuguzi Mkula Hospital kwa jina la Bishop Kisula College of Healt</b><b>h and Allied Sciences kiliwekewa jiwe la msingi na kufunguliwa rasmi tarehe 12/12/2013 na raisi wa jamhuri ya muungano wa Tanzania Mheshimiwa Jakaya Mrisho Kikwete.</b><p><br></p><p>Tukio hili kubwa la kihistoria katika<b> AICT</b> lilifanyika kwenye eneo la chuo mbele ya ofisi ya administration. Tukio hili liliudhuliwa na viongozi mbalimbali wa kanisa akiwemo <b>Askofu mkuu Silas Majaliwa Kezakubi, katibu mkuu Zakayo Bugota, Mkuu wa idara ya afya Shadrack Watugala na viongozi mbalimbali wa kidini na serikali</b>, pamoja na watu wote kwa ujumla.</p><p><br><p><p>Hospitali ya Mkula ni mmoja ya vituo vya afya vkubwa na tegemezi katika<b> mkoa wa Simiu</b>, imekuwa ikitoka mafunzo ya uuguzi ngazi ya <i><b>cheti</b></i>, kwa sasa Mkula itaweza kutoa mafunzo ya uuguzi kwa ngazi ya <i><b>diploma.</b></i></p></p></p>', '', 'yes', 'published'),
(3, 'Harusi ya Mwinjilisti Charles Bundi', 'Kanisa la AICT Kitete', 'Marriages', 1393286400, '8:00 AM - 9:00 PM', 'Harusi ya Mwinjilisti wa AICT Ndug Charles Bundi na Neema Magwesela waliofunga pingu za maisha tarehe 13/10/2013. Harusi lifanyika tabora mjini katika kanisa mama la dayosisi ya tabora Kitete.<p>Harusi hii iliudhuliwa na viongozi mbalimbali wa AICT akiwemo Askofu Mkuu Silas Majaliwa Kezakubi pamoja na mama askofu, Askofu wa diosisi ya Geita Mussa Masanja Magwesela na mama Askofu na viongozi wengineo. Harusi hii iliudhuliwa na mamia wa waumini wa AICT kutoka sehemu mbalimbali wakiwemo ngugu za maharusi.</p><p>Harusi hii ilifungishwa na Mch Alphonce Tambaru ambaye pia ni katibu wa dayosisi ya tabora na mchungaji wa pastorati ya Sikonge.</p>', '', 'yes', 'unpublished'),
(4, 'Mahubiri', 'AICT Makongoro', 'Services', 1393570800, '9:00 AM - 1:00 PM', '<b>Kanisa la <span style=\"color:rgb(53,28,117);\">AICT </span>Makongoro lingependa kuwaatalifu waumini wote kuwa siku ya Jumamosi kutakuwa na mahubiri ya pamoja.</b><br><br>akaiongozi atakuwa binti Bahati Benjamini na mwimbishaji atakuwa Paulo Buyemba na kiongozi atakuwa Mchungaji Lugayila akimuongoza mhubiri<b><i> Askofu Masanja Magwesela.</i></b><br><br>', '', 'yes', 'unpublished'),
(5, 'UZINDUZI WA ALBAM YA CHOMOKA AICT BWIRU CHOIR', 'CCM KIRUMBA, MWANZA-TANZANIA', 'Services', 1407654000, 'SAA 8 MCHANA', 'AICT Bwiru Kwaya WANACHOMOKA; wanawatangazia watu wote kwamba, watafanya uzinduzi wa ALBAM yao ya video ya CHOMOKA katika uwanja wa ccm kirumba mwanza tarehe 10/08/2014, saa 8:00 Mchana\r\nKIINGILIO WAKUBWA TSHS 2,000\r\nWATOTO TSHS. 1,000', '', 'no', 'published'),
(6, 'KONGAMANO LA KITAIFA LA VIJANA TAICY', 'DAR ES SALAAM KISARAWE JOURNER LUTHELAN SECONDARY', 'Services', 1417935600, '1:00 ASUBUHI - 4:00 USIKU', '<b>Kongamano la kitaifa la AICT</b> Vijana linatarajiwa kufanyika tarehe <b>7/12/2014</b> katika eneo la Kisarawe. Kongamano hili litaudhuliwa na viongozi mbalimbali akiwemo Mratibu wa Vijana kitaifa, waratibu wa vijana kidayosis na wengineo. Tunawaombeni vijana wote kujitokeza kwa wingi.<o:smarttagtype namespaceuri=\"urn:schemas-microsoft-com:office:smarttags\" name=\"City\"></o:smarttagtype><!--[if gte mso 9]><xml> <w:WordDocument>  <w:View>Normal</w:View>  <w:Zoom>0</w:Zoom>  <w:PunctuationKerning></w:PunctuationKerning>  <w:ValidateAgainstSchemas></w:ValidateAgainstSchemas>  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>  <w:Compatibility>   <w:BreakWrappedTables></w:BreakWrappedTables>   <w:SnapToGridInCell></w:SnapToGridInCell>   <w:WrapTextWithPunct></w:WrapTextWithPunct>   <w:UseAsianBreakRules></w:UseAsianBreakRules>   <w:DontGrowAutofit></w:DontGrowAutofit>  </w:C', 'Paul Bunyemba', 'no', 'unpublished'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipiscing', 'Lorem ipsum dolor sit', 'Services', 1396076400, '3-4', 'Lorem ipsum dolor sit amet, consectetur adipiscing Lorem ipsum dolor sit amet, consectetur adipiscing Lorem ipsum dolor sit amet, consectetur adipiscing', 'andrew mawanda', 'no', 'unpublished'),
(8, 'KONGAMANO LA KITAIFA LA VIJANA TAICY', 'DAR ES SALAAM KISARAWE JOURNER LUTHELAN SECONDARY', 'Services', 1417935600, '1:00 ASUBUHI - 4:00 USIKU', '<b>Kongamano la kitaifa la AICT</b> Vijana linatarajiwa kufanyika tarehe <b>7/12/2014</b> katika eneo la Kisarawe. Kongamano hili litaudhuliwa na viongozi mbalimbali akiwemo Mratibu wa Vijana kitaifa, waratibu wa vijana kidayosis na wengineo. Tunawaombeni vijana wote kujitokeza kwa wingi.', 'andrew mawanda', 'no', 'published'),
(9, 'SAFARI YA KWENDA KUANZISHWA KWA KANISA LA AICT-BURUNDI', 'BUJUMBURA-BURUNDI', 'Services', 1398927600, 'SAA 1:00 ASUBUHI', 'Idara ya Injili na Misheni makao Makuu, wanakushirikisha kuombea safari ya Umisheni nchini BURUNDI yenye madhumuni ya kuanzishwa kwa kanisa la <br><span style=\"color:rgb(0,0,0);\"><span style=\"color:rgb(0,0,0);\">AIC- BURUNDI</span></b> itakayofanyika tahehe 1-5/5/2014. Safari hiyo itakuwa na jumla ya watumishi thelathini (30).<br>Mambo ya kuombea ni:-<br><ol><li>Uwepo wa Mungu katika safari hii.</li><li>Upatikanaji wa Fedha za safari.<br></li><li>Upatikanaji wa gari la safari.</li><li>Mafanikio ya safari hiyo.</li></ol><p>Tuma chango wako kwenye Akaunti:-</p><p>AICT IDARA YA INJILI.</p><p>A/C NO. 5400477002 <br></p><p>TWIGA BANCORP-MWANZA</p><p><i>Tangazo hili limetolewa na Mratibu Mkuu Idara ya Injili na Misheni.<br></i></p><br>', 'Paul Bunyemba', 'no', 'published'),
(10, 'Siku ya kwnza: SAFARI YA IDARA YA INJIRI NA MISHENI AICT â€œLIVE BURUNDIâ€', 'NCHI YA BURUNDI', 'Services', 1399420800, '8:00', '<span style=\"font-size: 16px;\">Timu ya Injili na Misheni wakiwa ndani ya gari wakienda Nchi ya Burundi kuhubiri Injili</span>', 'Paul Bunyemba', 'no', 'unpublished'),
(11, 'SAFARI YA KWENDA UJERUMANI', 'UJERUMANI', 'Services', 1399766400, '08:00 AM - 04 PM', '<!--[if gte mso 9]><xml> <w:WordDocument>  <w:View>Normal</w:View>  <w:Zoom>0</w:Zoom>  <w:TrackMoves/>  <w:TrackFormatting/>  <w:PunctuationKerning/>  <w:ValidateAgainstSchemas/>  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>  <w:DoNotPromoteQF/>  <w:LidThemeOther>EN-US</w:LidThemeOther>  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>  <w:Compatibility>   <w:BreakWrappedTables/>   <w:SnapToGridInCell/>   <w:WrapTextWithPunct/>   <w:UseAsianBreakRules/>   <w:DontGrowAutofit/>   <w:SplitPgBreakAndParaMark/>   <w:DontVertAlignCellWithSp/>   <w:DontBreakConstrainedForcedTables/>   <w:DontVertAlignInTxbx/>   <w:Word11KerningPairs/>   <w:CachedColBalance/>  </w:Compatibility>  <m:mathPr>   <m:mathFont m:val=\"Cambria Math\"/>   <m:brkBin m:val=\"before\"/>   <m:brkBinSub m:val=\"--\"/>   <m:smallFrac m:val=\"off\"/>   <m:dispDef', 'Paul Bunyemba', 'no', 'unpublished'),
(12, 'SAFARI YA KWENDA UJERUMANI', 'UJERUMANI', 'Services', 1399507200, '06:00 AM', '<!--[if gte mso 9]><xml> <w:WordDocument>  <w:View>Normal</w:View>  <w:Zoom>0</w:Zoom>  <w:TrackMoves/>  <w:TrackFormatting/>  <w:PunctuationKerning/>  <w:ValidateAgainstSchemas/>  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>  <w:DoNotPromoteQF/>  <w:LidThemeOther>EN-US</w:LidThemeOther>  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>  <w:Compatibility>   <w:BreakWrappedTables/>   <w:SnapToGridInCell/>   <w:WrapTextWithPunct/>   <w:UseAsianBreakRules/>   <w:DontGrowAutofit/>   <w:SplitPgBreakAndParaMark/>   <w:DontVertAlignCellWithSp/>   <w:DontBreakConstrainedForcedTables/>   <w:DontVertAlignInTxbx/>   <w:Word11KerningPairs/>   <w:CachedColBalance/>  </w:Compatibility>  <m:mathPr>   <m:mathFont m:val=\"Cambria Math\"/>   <m:brkBin m:val=\"before\"/>   <m:brkBinSub m:val=\"--\"/>   <m:smallFrac m:val=\"off\"/>   <m:dispDef', 'Paul Bunyemba', 'no', 'unpublished'),
(13, 'WARSHA KWA KATIBU MAHSUSI WA AICT', 'AICT MAKONGORO MWANZA', 'Services', 0, '08:00 AM - 04 PM', '<!--[if gte mso 9]><xml> <w:WordDocument>  <w:View>Normal</w:View>  <w:Zoom>0</w:Zoom>  <w:TrackMoves/>  <w:TrackFormatting/>  <w:PunctuationKerning/>  <w:ValidateAgainstSchemas/>  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>  <w:DoNotPromoteQF/>  <w:LidThemeOther>EN-US</w:LidThemeOther>  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>  <w:Compatibility>   <w:BreakWrappedTables/>   <w:SnapToGridInCell/>   <w:WrapTextWithPunct/>   <w:UseAsianBreakRules/>   <w:DontGrowAutofit/>   <w:SplitPgBreakAndParaMark/>   <w:DontVertAlignCellWithSp/>   <w:DontBreakConstrainedForcedTables/>   <w:DontVertAlignInTxbx/>   <w:Word11KerningPairs/>   <w:CachedColBalance/>  </w:Compatibility>  <m:mathPr>   <m:mathFont m:val=\"Cambria Math\"/>   <m:brkBin m:val=\"before\"/>   <m:brkBinSub m:val=\"--\"/>   <m:smallFrac m:val=\"off\"/>   <m:dispDef', 'Paul Bunyemba', 'no', 'unpublished');

-- --------------------------------------------------------

--
-- Table structure for table `event_photos`
--

CREATE TABLE `event_photos` (
  `photo_id` int(20) NOT NULL,
  `event_id` int(20) NOT NULL,
  `image_name` varchar(200) NOT NULL,
  `ext` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `event_photos`
--

INSERT INTO `event_photos` (`photo_id`, `event_id`, `image_name`, `ext`) VALUES
(1, 1, 'c4ca4238a0b923820dcc509a6f75849b', 'jpg'),
(2, 2, 'c81e728d9d4c2f636f067f89cc14862c', 'jpg'),
(3, 3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'jpg'),
(4, 4, 'a87ff679a2f3e71d9181a67b7542122c', 'jpg'),
(5, 5, 'e4da3b7fbbce2345d7772b0674a318d5', 'jpg'),
(6, 6, '1679091c5a880faf6fb5e6087eb1b2dc', 'jpg'),
(7, 7, '8f14e45fceea167a5a36dedd4bea2543', 'jpg'),
(8, 8, 'c9f0f895fb98ab9159f51fd0297e236d', 'jpg'),
(9, 9, '45c48cce2e2d7fbdea1afc51c7c6ad26', 'jpg'),
(10, 10, 'd3d9446802a44259755d38e6d163e820', 'jpg'),
(11, 11, '6512bd43d9caa6e02c990b0a82652dca', 'jpg'),
(12, 12, 'c20ad4d76fe97759aa27a0c99bff6710', 'jpg'),
(13, 13, 'c51ce410c124a10e0db5e4b97fc2af39', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `follower_id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `occupation` varchar(500) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `church_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `forumadmins`
--

CREATE TABLE `forumadmins` (
  `user_id` int(11) NOT NULL,
  `fullnames` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `level` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `forumadmins`
--

INSERT INTO `forumadmins` (`user_id`, `fullnames`, `username`, `password`, `email`, `level`, `status`) VALUES
(1, 'Forum Admin', 'forum', '4fb97c51eae6e889ef41e5213005120a', 'forumadmin@gmail.com', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `forumcategories`
--

CREATE TABLE `forumcategories` (
  `forumcategory_id` int(11) NOT NULL,
  `forumcategory` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groupmembers`
--

CREATE TABLE `groupmembers` (
  `groupmember_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `member_id` int(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `group_messages`
--

CREATE TABLE `group_messages` (
  `message_id` int(20) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` mediumtext NOT NULL,
  `category` varchar(50) NOT NULL,
  `reciever` varchar(50) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `timestamp` int(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `group_messages`
--

INSERT INTO `group_messages` (`message_id`, `subject`, `message`, `category`, `reciever`, `sender`, `timestamp`, `status`) VALUES
(1, 'Thanksgiving invitation', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis at sollicitudin. Sed at nunc ac neque semper fermentum. Proin diam sem, semper fermentum eleifend nec, viverra ac est. Sed ultricies, lectus et vehicula imperdiet, felis tortor vehicula turpis, non fermentum enim est et sapien. Nam justo mi, dignissim a euismod ut, pretium sed leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In viverra porta est, consequat elementum metus tristique a. Mauris tempus tellus a metus dapibus faucibus egestas lectus consectetur. Integer libero dolor, luctus non congue vitae, tempus ut neque. Nunc eleifend lorem quis diam pharetra sagittis. Aliquam ut dolor dui. Fusce dictum facilisis ipsum eu porttitor. In ultricies rhoncus tortor vitae tincidunt. Lorem ipsum dolor sit amet', 'pastors', '', 'amawizzy@aict.org', 1394194444, '1'),
(3, 'nvnvn fkfrkekk', 'fkfjrj jjrjrjrj jrjrj', 'followers', '', 'amawizzy@aict.org', 1394201762, '1'),
(4, 'shhshshhh', 'xnxn ndndn', 'all', '', 'amawizzy@aict.org', 1394202127, '1'),
(5, 'To all pastors', 'fggk frrjjj rkk3k k3k33k r4jmgmgmgm', 'pastors', '', 'amawizzy@aict.org', 1394202232, '1'),
(6, 'hi everyone', 'fjfjf jrj4jj rrj4jj', 'all', '', 'amawizzy@aict.org', 1396862107, '1'),
(7, 'hi bishops', '<p>I was just saying hi to all bishops,Thnak you<br></p>', 'all', '', 'amawizzy@aict.org', 1419089646, '1'),
(8, 'aksksskskk', '<p>dkdkdkdkk<br></p>', 'all', '', 'amawizzy@aict.org', 1419089945, '1'),
(9, 'ddkdkkdk', '<p>kdkdkkdkkdk<br></p>', 'bishops', '', 'amawizzy@aict.org', 1419090098, '1'),
(10, 'alalall', '<p>dkkkwkwkwwkk<br></p>', 'all', '', 'amawizzy@aict.org', 1419090114, '1'),
(11, 'Hi everyone', '<p>i was just saying hi to everyone<br></p>', 'all', '', 'amawizzy@aict.org', 1419090915, '1'),
(12, 'hi all bishops', '<p>hi all bishops hi all bishops hi all bishops hi all bishops hi all bishops hi all bishops hi all bishops<br></p>', 'bishops', '', 'amawizzy@aict.org', 1419091102, '1'),
(13, 'hello bishops', '<p>Am letting you know that am also alive<br></p>', 'bishops', '', 'amawizzy2@aict.org', 1420276631, '1'),
(14, 'greetings to all our bishops', '<p>greetings to all our bishops greetings to all our bishops greetings to all our bishops greetings to all our bishops greetings to all our bishops greetings to all our bishops<br></p>', 'bishops', 'bishop', 'amawizzy2@aict.org', 1423083036, '1'),
(15, 'Unaionaje We yetu', '<p>Hii ni web yetu. Mnaionaje. Ninawaoba mfungue address katika web hii.<br></p>', 'all', 'all', 'kezakubi@aict.org', 1424801254, '1');

-- --------------------------------------------------------

--
-- Table structure for table `membergroupmessages`
--

CREATE TABLE `membergroupmessages` (
  `membergroupmessage_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messagefiles`
--

CREATE TABLE `messagefiles` (
  `messagefile_id` int(11) NOT NULL,
  `message_id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `ext` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `reciever` varchar(100) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `reciever_name` varchar(100) NOT NULL,
  `sender_position` varchar(100) NOT NULL,
  `reciever_position` varchar(100) NOT NULL,
  `message` mediumtext NOT NULL,
  `message_type` varchar(50) NOT NULL,
  `timestamp` int(40) NOT NULL,
  `sender_status` varchar(50) NOT NULL,
  `reciever_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `subject`, `sender`, `reciever`, `sender_name`, `reciever_name`, `sender_position`, `reciever_position`, `message`, `message_type`, `timestamp`, `sender_status`, `reciever_status`) VALUES
(1, 'Needed Urgently', 'amawizzy@aict.org', 'andyandy@aict.org', 'andy mawanda', 'andy murray', 'follower', 'pastor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis at sollicitudin. Sed at nunc ac neque semper fermentum. Proin diam sem, semper fermentum eleifend nec, viverra ac est. Sed ultricies, lectus et vehicula imperdiet, felis tortor vehicula turpis, non fermentum enim est et sapien. Nam justo mi, dignissim a euismod ut, pretium sed leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In viverra porta est, consequat elementum metus tristique a. Mauris tempus tellus a metus dapibus faucibus egestas lectus consectetur. Integer libero dolor, luctus non congue vitae, tempus ut neque. Nunc eleifend lorem quis diam pharetra sagittis. Aliquam ut dolor dui. Fusce dictum facilisis ipsum eu porttitor. In ultricies rhoncus tortor vitae tincidunt. Lorem ipsum dolor sit amet ', 'private', 1393928325, '1', '1'),
(2, 'End of year wishes', 'andyandy@aict.org', 'amawizzy@aict.org', 'andy murray', 'andy mawanda', 'pastor', 'follower', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis at sollicitudin. Sed at nunc ac neque semper fermentum. Proin diam sem, semper fermentum eleifend nec, viverra ac est. Sed ultricies, lectus et vehicula imperdiet, felis tortor vehicula turpis, non fermentum enim est et sapien. Nam justo mi, dignissim a euismod ut, pretium sed leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In viverra porta est, consequat elementum metus tristique a. Mauris tempus tellus a metus dapibus faucibus egestas lectus consectetur. Integer libero dolor, luctus non congue vitae, tempus ut neque. Nunc eleifend lorem quis diam pharetra sagittis. Aliquam ut dolor dui. Fusce dictum facilisis ipsum eu porttitor. In ultricies rhoncus tortor vitae tincidunt. Lorem ipsum dolor sit amet ', 'private', 1394026386, '1', '0'),
(3, 'Goodbye message  to you', 'amawizzy@aict.org', 'andyandy@aict.org', 'andy mawanda ', 'andy murray', 'follower', 'pastor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit', 'private', 1394142455, '1', '1'),
(4, 'shhshshhh', 'amawizzy@aict.org', 'andyandy@aict.org', 'andy mawanda', 'andy murray', 'follower', 'pastor', 'xnxn ndndn', 'public', 1394202127, '1', '1'),
(5, 'To all pastors', 'amawizzy@aict.org', 'andyandy@aict.org', 'andy mawanda', 'andy murray', 'follower', 'pastor', 'fggk frrjjj rkk3k k3k33k r4jmgmgmgm', 'public', 1394202232, '1', '1'),
(8, 'I will attend', 'amawizzy@aict.org', 'andyandy@aict.org', 'andy mawanda', 'andy murray', 'follower', 'pastor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis at sollicitudin. Sed at nunc ac neque semper fermentum. Proin diam sem, semper fermentum eleifend nec, viverra ac est. Sed ultricies, lectus et vehicula imperdiet, felis tortor vehicula turpis, non fermentum enim est et sapien. Nam justo mi, dignissim a euismod ut, pretium sed leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In viverra porta est, consequat elementum metus tristique a. Mauris tempus tellus a metus dapibus faucibus egestas lectus consectetur. Integer libero dolor, luctus non congue vitae, tempus ut neque. Nunc eleifend lorem quis diam pharetra sagittis. Aliquam ut dolor dui. Fusce dictum facilisis ipsum eu porttitor. In ultricies rhoncus tortor vitae tincidunt. Lorem ipsum dolor sit amet', 'private', 1394271002, '0', '1'),
(9, 'how are you', 'amawizzy@aict.org', 'kezakubis@aict.org', 'andy mawanda', 'Kezakubi Silasi', 'follower', 'follower', 'it just a simple message', 'private', 1396862490, '1', '1'),
(10, 'Halo mawanda', 'kezakubis@aict.org', 'amawizzy@aict.org', 'Kezakubi Silasi', 'andy mawanda', 'follower', 'follower', 'Hey Mawanda, watsup!', 'private', 1396875432, '1', '1'),
(11, 'waaaaaaaaaaatup', 'amawizzy@aict.org', 'kezakubis@aict.org', 'andy mawanda', 'Kezakubi Silasi', 'follower', 'follower', 'It was just a sample message', 'private', 1397125031, '0', '1'),
(12, 'Salaam', 'paulbuyemba@aict.org', 'bahatibenja@aict.org', 'paul buyemba', 'Bahati Benjamini', 'follower', 'follower', 'Habari za kazi.\r\n\r\npaul', 'private', 1410438854, '1', '1'),
(13, 'Salaam', 'herimwembe@aict.org', 'bahatibenja@aict.org', 'Herieth Mwembe', 'Bahati Benjamini', 'follower', 'follower', 'Mambo', 'private', 1410448989, '1', '1'),
(14, 'Salaam', 'herimwembe@aict.org', 'paulbuyemba@aict.org', 'Herieth Mwembe', 'paul buyemba', 'follower', 'follower', 'Mambo?', 'private', 1410449046, '1', '1'),
(15, 'Salaam', 'naomimatogo@aict.org', 'herimwembe@aict.org', 'Naomi Matogo', 'Herieth Mwembe', 'follower', 'follower', 'Mambo vipi?', 'private', 1410449238, '1', '1'),
(16, 'Uwepo wako', 'naomimatogo@aict.org', 'paulbuyemba@aict.org', 'Naomi Matogo', 'paul buyemba', 'follower', 'follower', 'Naitaji kujua uwepo wako katika dunia hii, Upo?', 'private', 1410449329, '1', '1'),
(17, 'Bwana Yesu Asifiwe', 'zmakongoro@aict.org', 'herimwembe@aict.org', 'Zawadi L. Makongoro', 'Herieth Mwembe', 'follower', 'follower', 'Habari za leo', 'private', 1410595288, '1', '1'),
(18, 'Hello', 'smasanyiwa@aict.org', 'herimwembe@aict.org', 'smasanyiwa', 'Herieth Mwembe', 'follower', 'follower', 'haujambo', 'private', 1410596128, '1', '1'),
(19, 'Salaam', 'zmakongoro@aict.org', 'kezakubis@aict.org', 'Zawadi L. Makongoro', 'Kezakubi Silasi', 'follower', 'follower', 'Bwana Yesu asifiwe, \r\nkama ulivyotusisitiza kuwa tupende kutumia mtandao wa kanisa letu napenda kukutia moyo kuwa tunatumia na endelea na maboresho uliyonayo naimani kuwa baada ya muda siyo mrefu tutaelekea kwenye mtazamo wa kitaalamu katika maswala ya technology computer', 'private', 1412706279, '1', '1'),
(20, 'mahitaji ya kuombea', 'magolanga@aict.org', 'kezakubis@aict.org', 'Elisha Magolanga', 'Kezakubi Silasi', 'follower', 'follower', 'Ninatiwa moyo na kazi yako ya utumishi, ninaomba unipe mahitaji ya kukuombea Baba askofu, nitakuwa na maombi ya kufunga muda si mrefu, nakuombea mtumishi wa Bwana', 'private', 1413411406, '1', '1'),
(21, 'Reply Message', 'kezakubis@aict.org', 'magolanga@aict.org', 'Kezakubi Silasi', 'Elisha Magolanga', 'follower', 'follower', '<p>Habari Mtumishi, mimi ni kijana wa Baba Askofu, sio Askofu. Lakini nitamfikishia ujumbe wake.</p>', 'private', 1423753880, '1', '1'),
(22, 'Habari ', 'kezakubis@aict.org', 'bahatibenja@aict.org', 'Kezakubi Silasi', 'Bahati Benjamini', 'follower', 'follower', '<p>Salaam kupitia Jina la <span style=\"font-weight: bold;\">Yesu Kristo,</span> vipi ni muda sasa sijasikia kutoka kwenu, mnaendeleaje na website?</p>', 'private', 1423754122, '1', '1'),
(23, 'Habari', 'kezakubis@aict.org', 'paulbuyemba@aict.org', 'Kezakubi Silasi', 'paul buyemba', 'follower', 'follower', '<p><span style=\"font-size: 14px; line-height: 24px;\">Salaam kupitia Jina laÂ </span><span style=\"font-size: 14px; line-height: 24px; font-weight: bold;\">Yesu Kristo,</span><span style=\"font-size: 14px; line-height: 24px;\">Â vipi ni muda sasa sijasikia kutoka kwenu, mnaendeleaje na website?</span><br></p>', 'private', 1423754233, '1', '1'),
(24, 'Ujenzi wa ofisi', 'kezakubi@aict.org', 'kezakubis@aict.org', 'Silasi Kezakubi', 'Kezakubi Silasi', 'bishop', 'follower', 'Je nadhani hizo fedha ziende kwenye kaabati wa ofisi au kweny deni la sysem.', 'private', 1424800832, '1', '1'),
(25, 'Reply Message', 'kezakubis@aict.org', 'kezakubi@aict.org', 'Kezakubi Silasi', 'Silasi Kezakubi', 'bishop', 'follower', '<p>sawa</p>', 'private', 1424802040, '1', '1'),
(26, 'salam', 'edwintitomagoti@aict.org', 'kezakubis@aict.org', 'EDWIN TITO MAGOTI', 'Kezakubi Silasi', 'follower', 'follower', '<p>Aman ya BWANA.</p><p>Nakusalimu kwa jina la Bwana wetu Yesu kristo.</p>', 'private', 1429018353, '1', '1'),
(27, 'salaam', 'watugala13@aict.org', 'kezakubis@aict.org', 'ibrahim watugala', 'Kezakubi Silasi', 'follower', 'follower', '<p>kheri ya mwaka mpya</p>', 'private', 1452264554, '1', '1'),
(28, 'Reply Message', 'kezakubis@aict.org', 'watugala13@aict.org', 'Kezakubi Silasi', 'ibrahim watugala', 'follower', 'follower', '<p><span style=\"color: rgb(206, 0, 0); font-weight: bold; font-family: Helvetica;\">Na wewe pia</span></p>', 'private', 1452268851, '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `article_id` int(50) NOT NULL,
  `article_title` varchar(200) NOT NULL,
  `article_description` varchar(5000) NOT NULL,
  `article_cat` int(11) DEFAULT NULL,
  `pdf_file` varchar(120) NOT NULL,
  `headline` varchar(5) NOT NULL,
  `poster` varchar(100) NOT NULL,
  `cstatus` int(11) NOT NULL,
  `timestamp` int(50) NOT NULL,
  `published` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`article_id`, `article_title`, `article_description`, `article_cat`, `pdf_file`, `headline`, `poster`, `cstatus`, `timestamp`, `published`) VALUES
(1, 'Uongo kuhusu Injili ya Barnaba', 'Hakuna historia yoyote inayoonesha kuwa Barnaba aliwahi kuandika injili na kwamba Wakristo wakaificha eti kwasababu inaeleza habari za Nabii aitwaye Muhammad.\r\n Kwanini Wakristo wafiche kama injili hiyo iliyoandikwa na Barnaba ilikuwepo? Kwani huyu Muhammad ni nani kwa Wakristo hata wakapata msituko wa kufikia hatua ya kuficha injili hiyo inayodaiwa imeandikwa na Barnaba? \r\nKwa Mkristo aliyesoma Biblia kama atasoma vizuri kamwe hawezi kubabaishwa na kitabu chochote au maneno ya mtu yeyote kwamba yupo mtu aitwaye Muhammad ambaye ni mtume baada ya Yesu. Katika Uf 1:8 tunasoma maneno haya\r\nMimi ni Alfa na Omega, mwanzo na mwisho asema Bwana Mungu aliyeko na aliyekuwako na atakaye kuja na mwenyezi.\r\nHii ni kuonesha hakuna mwingine awaye yote zaidi ya Yesu. Tena katika Yoh 5:43 tunasoma hivi:\r\nMimi nimekuja kwa jina la Baba yangu wala ninyi hamnipokei mwingine akija kwa jina lake mwenyewe mtampokea huyo.\r\nHii nayo inaonesha Yesu alianza kuonya mapema kwamba atakuja mtu kwa jina lake mwenyewe na kudai ya kuwa yeye ni mtume nanyi mtampokea huyo. Basi sambamba na hilo lazima uzushi utokee kwamba ipo injili ya Barnaba ambayo ni hiyo pekee iliyomtabiri mtu aitwaye Muhammad kuwa mtume baada ya Yesu. Mazingira ya utume wake yanatatanisha mno. Je, ni kipi ambacho kitatufanya tuamini kuwa ipo injili ya Barnaba na ndani yake inaelezea kuja kwa Nabii aitwaye Muhammad baada ya Yesu Kristo? Usikose kupata habari za huyo Barnaba na injili yake wiki ijayo.', NULL, '', 'yes', '', 0, 1392616829, 'unpublished'),
(2, 'Uongo kuhusu Injili ya Barnaba', 'Hakuna historia yoyote inayoonesha kuwa Barnaba aliwahi kuandika injili na kwamba Wakristo wakaificha eti kwasababu inaeleza habari za Nabii aitwaye Muhammad.\r\nKwanini Wakristo wafiche kama injili hiyo iliyoandikwa na Barnaba ilikuwepo? Kwani huyu Muhammad ni nani kwa Wakristo hata wakapata msituko wa kufikia hatua ya kuficha injili hiyo inayodaiwa imeandikwa na Barnaba? \r\nKwa Mkristo aliyesoma Biblia kama atasoma vizuri kamwe hawezi kubabaishwa na kitabu chochote au maneno ya mtu yeyote kwamba yupo mtu aitwaye Muhammad ambaye ni mtume baada ya Yesu. Katika Uf 1:8 tunasoma maneno haya\r\nMimi ni Alfa na Omega, mwanzo na mwisho asema Bwana Mungu aliyeko na aliyekuwako na atakaye kuja na mwenyezi.\r\nHii ni kuonesha hakuna mwingine awaye yote zaidi ya Yesu. Tena katika Yoh 5:43 tunasoma hivi:\r\nMimi nimekuja kwa jina la Baba yangu wala ninyi hamnipokei mwingine akija kwa jina lake mwenyewe mtampokea huyo.\r\n\r\nHii nayo inaonesha Yesu alianza kuonya mapema kwamba atakuja mtu kwa jina lake mwenyewe na kudai ya kuwa yeye ni mtume nanyi mtampokea huyo. Basi sambamba na hilo lazima uzushi utokee kwamba ipo injili ya Barnaba ambayo ni hiyo pekee iliyomtabiri mtu aitwaye Muhammad kuwa mtume baada ya Yesu. \r\n\r\nMazingira ya utume wake yanatatanisha mno. Je, ni kipi ambacho kitatufanya tuamini kuwa ipo injili ya Barnaba na ndani yake inaelezea kuja kwa Nabii aitwaye Muhammad baada ya Yesu Kristo? Usikose kupata habari za huyo Barnaba na injili yake wiki ijayo.', NULL, '', 'yes', '', 0, 1392621248, 'unpublished'),
(3, 'Uongo kuhusu Injili ya Barnaba', 'Hakuna historia yoyote inayoonesha kuwa Barnaba aliwahi kuandika injili na kwamba Wakristo wakaificha eti kwasababu inaeleza habari za Nabii aitwaye Muhammad.\r\n\r\nKwanini Wakristo wafiche kama injili hiyo iliyoandikwa na Barnaba ilikuwepo? Kwani huyu Muhammad ni nani kwa Wakristo hata wakapata msituko wa kufikia hatua ya kuficha injili hiyo inayodaiwa imeandikwa na Barnaba? \r\nKwa Mkristo aliyesoma Biblia kama atasoma vizuri kamwe hawezi kubabaishwa na kitabu chochote au maneno ya mtu yeyote kwamba yupo mtu aitwaye Muhammad ambaye ni mtume baada ya Yesu. Katika Uf 1:8 tunasoma maneno haya\r\nMimi ni Alfa na Omega, mwanzo na mwisho asema Bwana Mungu aliyeko na aliyekuwako na atakaye kuja na mwenyezi.\r\nHii ni kuonesha hakuna mwingine awaye yote zaidi ya Yesu. Tena katika Yoh 5:43 tunasoma hivi:\r\nMimi nimekuja kwa jina la Baba yangu wala ninyi hamnipokei mwingine akija kwa jina lake mwenyewe mtampokea huyo.\r\n\r\nHii nayo inaonesha Yesu alianza kuonya mapema kwamba atakuja mtu kwa jina lake mwenyewe na kudai ya kuwa yeye ni mtume nanyi mtampokea huyo. Basi sambamba na hilo lazima uzushi utokee kwamba ipo injili ya Barnaba ambayo ni hiyo pekee iliyomtabiri mtu aitwaye Muhammad kuwa mtume baada ya Yesu. \r\n\r\nMazingira ya utume wake yanatatanisha mno. Je, ni kipi ambacho kitatufanya tuamini kuwa ipo injili ya Barnaba na ndani yake inaelezea kuja kwa Nabii aitwaye Muhammad baada ya Yesu Kristo? Usikose kupata habari za huyo Barnaba na injili yake wiki ijayo.', NULL, '', 'yes', '', 0, 1392635042, 'unpublished'),
(4, 'Uongo kuhusu Injili ya Barnaba', 'Hakuna historia yoyote inayoonesha kuwa Barnaba aliwahi kuandika injili na kwamba Wakristo wakaificha eti kwasababu inaeleza habari za Nabii aitwaye Muhammad.\r\n\r\nKwanini Wakristo wafiche kama injili hiyo iliyoandikwa na Barnaba ilikuwepo? Kwani huyu Muhammad ni nani kwa Wakristo hata wakapata msituko wa kufikia hatua ya kuficha injili hiyo inayodaiwa imeandikwa na Barnaba? \r\nKwa Mkristo aliyesoma Biblia kama atasoma vizuri kamwe hawezi kubabaishwa na kitabu chochote au maneno ya mtu yeyote kwamba yupo mtu aitwaye Muhammad ambaye ni mtume baada ya Yesu. Katika Uf 1:8 tunasoma maneno haya\r\nMimi ni Alfa na Omega, mwanzo na mwisho asema Bwana Mungu aliyeko na aliyekuwako na atakaye kuja na mwenyezi.\r\nHii ni kuonesha hakuna mwingine awaye yote zaidi ya Yesu. Tena katika Yoh 5:43 tunasoma hivi:\r\nMimi nimekuja kwa jina la Baba yangu wala ninyi hamnipokei mwingine akija kwa jina lake mwenyewe mtampokea huyo.\r\n\r\nHii nayo inaonesha Yesu alianza kuonya mapema kwamba atakuja mtu kwa jina lake mwenyewe na kudai ya kuwa yeye ni mtume nanyi mtampokea huyo. Basi sambamba na hilo lazima uzushi utokee kwamba ipo injili ya Barnaba ambayo ni hiyo pekee iliyomtabiri mtu aitwaye Muhammad kuwa mtume baada ya Yesu. \r\n\r\nMazingira ya utume wake yanatatanisha mno. Je, ni kipi ambacho kitatufanya tuamini kuwa ipo injili ya Barnaba na ndani yake inaelezea kuja kwa Nabii aitwaye Muhammad baada ya Yesu Kristo? Usikose kupata habari za huyo Barnaba na injili yake wiki ijayo.', NULL, '', 'yes', '', 0, 1392635051, 'unpublished'),
(5, 'Uongo kuhusu Injili ya Barnaba', 'Hakuna historia yoyote inayoonesha kuwa Barnaba aliwahi kuandika injili na kwamba Wakristo wakaificha eti kwasababu inaeleza habari za Nabii aitwaye Muhammad.\r\n\r\nKwanini Wakristo wafiche kama injili hiyo iliyoandikwa na Barnaba ilikuwepo? Kwani huyu Muhammad ni nani kwa Wakristo hata wakapata msituko wa kufikia hatua ya kuficha injili hiyo inayodaiwa imeandikwa na Barnaba? \r\nKwa Mkristo aliyesoma Biblia kama atasoma vizuri kamwe hawezi kubabaishwa na kitabu chochote au maneno ya mtu yeyote kwamba yupo mtu aitwaye Muhammad ambaye ni mtume baada ya Yesu. Katika Uf 1:8 tunasoma maneno haya\r\nMimi ni Alfa na Omega, mwanzo na mwisho asema Bwana Mungu aliyeko na aliyekuwako na atakaye kuja na mwenyezi.\r\nHii ni kuonesha hakuna mwingine awaye yote zaidi ya Yesu. Tena katika Yoh 5:43 tunasoma hivi:\r\nMimi nimekuja kwa jina la Baba yangu wala ninyi hamnipokei mwingine akija kwa jina lake mwenyewe mtampokea huyo.\r\n\r\nHii nayo inaonesha Yesu alianza kuonya mapema kwamba atakuja mtu kwa jina lake mwenyewe na kudai ya kuwa yeye ni mtume nanyi mtampokea huyo. Basi sambamba na hilo lazima uzushi utokee kwamba ipo injili ya Barnaba ambayo ni hiyo pekee iliyomtabiri mtu aitwaye Muhammad kuwa mtume baada ya Yesu. \r\n\r\nMazingira ya utume wake yanatatanisha mno. Je, ni kipi ambacho kitatufanya tuamini kuwa ipo injili ya Barnaba na ndani yake inaelezea kuja kwa Nabii aitwaye Muhammad baada ya Yesu Kristo? Usikose kupata habari za huyo Barnaba na injili yake wiki ijayo.', NULL, '', 'yes', '', 0, 1392635051, 'unpublished'),
(6, 'Uongo kuhusu Injili ya Barnaba', 'Hakuna historia yoyote inayoonesha kuwa Barnaba aliwahi kuandika injili na kwamba Wakristo wakaificha eti kwasababu inaeleza habari za Nabii aitwaye Muhammad.\r\n\r\nKwanini Wakristo wafiche kama injili hiyo iliyoandikwa na Barnaba ilikuwepo? Kwani huyu Muhammad ni nani kwa Wakristo hata wakapata msituko wa kufikia hatua ya kuficha injili hiyo inayodaiwa imeandikwa na Barnaba? \r\nKwa Mkristo aliyesoma Biblia kama atasoma vizuri kamwe hawezi kubabaishwa na kitabu chochote au maneno ya mtu yeyote kwamba yupo mtu aitwaye Muhammad ambaye ni mtume baada ya Yesu. Katika Uf 1:8 tunasoma maneno haya\r\nMimi ni Alfa na Omega, mwanzo na mwisho asema Bwana Mungu aliyeko na aliyekuwako na atakaye kuja na mwenyezi.\r\nHii ni kuonesha hakuna mwingine awaye yote zaidi ya Yesu. Tena katika Yoh 5:43 tunasoma hivi:\r\nMimi nimekuja kwa jina la Baba yangu wala ninyi hamnipokei mwingine akija kwa jina lake mwenyewe mtampokea huyo.\r\n\r\nHii nayo inaonesha Yesu alianza kuonya mapema kwamba atakuja mtu kwa jina lake mwenyewe na kudai ya kuwa yeye ni mtume nanyi mtampokea huyo. Basi sambamba na hilo lazima uzushi utokee kwamba ipo injili ya Barnaba ambayo ni hiyo pekee iliyomtabiri mtu aitwaye Muhammad kuwa mtume baada ya Yesu. \r\n\r\nMazingira ya utume wake yanatatanisha mno. Je, ni kipi ambacho kitatufanya tuamini kuwa ipo injili ya Barnaba na ndani yake inaelezea kuja kwa Nabii aitwaye Muhammad baada ya Yesu Kristo? Usikose kupata habari za huyo Barnaba na injili yake wiki ijayo.', NULL, '', 'yes', '', 0, 1392639125, 'unpublished'),
(7, 'Lorem Ipsum is simply dummy text of the printing', '<b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', NULL, '', 'no', '', 0, 1392641114, 'unpublished'),
(8, 'MANENO YA KIEBRANIA', '<p class=\"MsoNormal\" style=\"color: rgb(87, 87, 87); font-family: Calibri; font-size: 16px; line-height: 22.399999618530273px;\"><span style=\"font-size: 18pt;\">Yapo maneno mengi ya <span style=\"font-size: 18pt;\"><i style=\"font-size: 18pt;\"><span style=\"font-size: 18pt;\"><b style=\"font-size: 18pt;\">Kiebrania</b></span></i></span> lakini hapa nitayaandika machache ili upate kujua kuwa&nbsp;<i>Qur’an</i>&nbsp;ni tegemezi haina lugha moja ndani yake kama wasemavyo Wislamu.&nbsp;</span></p><p class=\"MsoNormal\" style=\"color: rgb(87, 87, 87); font-family: Calibri; font-size: 16px; line-height: 22.399999618530273px;\"><span style=\"font-size: 18pt;\"><br></span></p><p class=\"MsoNormal\" style=\"color: rgb(87, 87, 87); font-family: Calibri; font-size: 16px; line-height: 22.399999618530273px;\"><span style=\"font-size: 18pt;\">Neno<i>HAMIYMINANN</i>&nbsp;lenye maana kafara ni neno la Kiebrania. Tena neno&nbsp;<i>A-YNINANIYAT</i>&nbsp;lenye maana sanamu ni neno la Kiebrania. Maneno haya yanapatikana katika&nbsp;<i>Sura ya 55:44</i>, ya&nbsp;<i>AL-Rahman</i>na&nbsp;<i>Sura ya 88:5 Surat AL-Ghashiyah.&nbsp;</i>Vilevile maneno kama<i>KINABATW</i>&nbsp;yaliyomo katika&nbsp;&nbsp;<i>Sura ya 44:24</i>&nbsp;<i>WATARIK</i>&nbsp;na&nbsp;<i>FASUR</i>katika&nbsp;<i>Sura ya 2:260</i>,&nbsp;<i>HABBADTA</i>&nbsp;26:22 na&nbsp;<i>MALAKUT</i>&nbsp;<i>Sura ya 6:75</i>.Hizi ni baadhi ya aya za&nbsp;<i>Qur’an&nbsp;</i>ambazo zina maneno ya lugha za kigeni. Hivyo kudai&nbsp;<i>Qur’an&nbsp;</i>ina lugha moja tu ya Kiarabu na hiyo ndiyo lugha pekee aliyoiridhia, tena ndiyo lugha anayoisikia hiyo siyo kweli. Lakini cha pili kama ndivyo basi huyo ni&nbsp;<i>Allah</i>&nbsp;ambaye anasikia lugha moja tu nayo ni ya Kiarabu. Lakini mimi nikijuacho Mungu aliyeumba wanadamu wote kila aina ya lugha husikia. Maana&nbsp;<i>YEHOVA</i>&nbsp;ni mkamilifu katika yote hana upungufu.</span></p><p class=\"MsoNormal\" style=\"color: rgb(87, 87, 87); font-family: Calibri; font-size: 16px; line-height: 22.399999618530273px;\"><br></p><p class=\"MsoNormal\" style=\"color: rgb(87, 87, 87); font-family: Calibri; font-size: 16px; line-height: 22.399999618530273px;\"><span style=\"font-size: 18pt;\">Jambo lingine ambalo lapasa kila Muislamu ajue ni kwamba zipo Sura za&nbsp;<i>Qur’an</i>&nbsp;ambazo majina yake ni lugha za kigeni na wala si Kiarabu. Kwa mfano ile Sura ambayo Muhammad aliita ni moyo wa&nbsp;<i>Qur’an</i>&nbsp;yaani Sura ya&nbsp;<i>YASIN</i>, Waislamu wengi wanafikiri kuwa jina la Sura hiyo halina tafsiri. Ukweli siyo sahihi na kama wapo Waalimu wa dini ya Kiislamu wanafundisha hivyo wanafanya hila. Hii ni kuwatumainisha Waislamu wasiojua, jambo la uongo. Katika<i>Itgan Juzuu</i>&nbsp;ya pili hadithi nambari 2720 inasema: Neno&nbsp;<i>Yasin</i>&nbsp;ni neno la Kihabeshi na&nbsp;<i>Yasin</i>&nbsp;ni kifupi cha neno zima la&nbsp;<i>YAINSAN</i>lenye maana ya mwanadamu.</span></p><p class=\"MsoNormal\" style=\"color: rgb(87, 87, 87); font-family: Calibri; font-size: 16px; line-height: 22.399999618530273px;\"><br></p><p class=\"MsoNormal\" style=\"color: rgb(87, 87, 87); font-family: Calibri; font-size: 16px; line-height: 22.399999618530273px;\"><span style=\"font-size: 18pt;\">Suyuti ameelezea kuwa neno hilo ni sawa na neno&nbsp;<i>YAARAJULI</i>&nbsp;la Kiarabu lenye maana “Ewe mtu”.</span></p><p class=\"MsoNormal\" style=\"color: rgb(87, 87, 87); font-family: Calibri; font-size: 16px; line-height: 22.399999618530273px;\"><i><span style=\"font-size: 18pt;\">SURAT</span></i><i><span style=\"font-size: 18pt;\">&nbsp;TWA-HA</span></i><span style=\"font-size: 18pt;\">: hili ni neno la Kihabeshi&nbsp;<i>Itgan Juzuu</i>&nbsp;ya pili hadithi nambari 2744 inathibitisha. Na kwenye&nbsp;<i>Mustadrak</i>&nbsp;pia neno hili ni sawa na&nbsp;<i>Yaarajuli</i>.</span></p><p class=\"MsoNormal\" style=\"color: rgb(87, 87, 87); font-family: Calibri; font-size: 16px; line-height: 22.399999618530273px;\"><br></p><p class=\"MsoNormal\" style=\"color: rgb(87, 87, 87); font-family: Calibri; font-size: 16px; line-height: 22.399999618530273px;\"><span style=\"font-size: 18pt;\">Nimekudokeza msomaji wangu ili upate kujua kuwa maneno wayasemayo Waislamu kuwa&nbsp;<i>Qur’an</i>&nbsp;ni Kiarabu tu hayana ukweli wowote. Lakini watu wote wangejiuliza hivi ni kwanini&nbsp;<i>Qur’an</i>ikanushe kutumika kwa lugha za kigeni wakati kuna ushahidi wa kutosha kwamba humo zimo lugha za kigeni katika Sura na aya za<i>Qur’an</i>?</span></p><p class=\"MsoNormal\" style=\"color: rgb(87, 87, 87); font-family: Calibri; font-size: 16px; line-height: 22.399999618530273px;\"><br></p><p class=\"MsoNormal\" style=\"color: rgb(87, 87, 87); font-family: Calibri; font-size: 16px; line-height: 22.399999618530273px;\"><span style=\"font-size: 18pt;\">Ebu jikumbushe maneno haya katika tafsiri ya Kiswahili ya Shekhe Abdallah Salehe Farcy ya Sura ya 41:44&nbsp;&nbsp;twasoma:</span></p><p class=\"MsoNormal\" style=\"color: rgb(87, 87, 87); font-family: Calibri; font-size: 16px; line-height: 22.399999618530273px; margin-left: 0.5in;\"><i><span style=\"font-size: 18pt;\">“Na lau k', NULL, '', 'yes', '', 0, 1392641691, 'unpublished'),
(9, 'Uongo kuhusu Injili ya Barnaba', '<span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><b style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">Hakuna historia yoyote inayoonesha kuwa Barnaba aliwahi kuandika injili na kwamba Wakristo wakaificha eti kwasababu inaeleza habari za Nabii aitwaye Muhammad.</b></span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">Kwanini Wakristo wafiche kama injili hiyo iliyoandikwa na Barnaba ilikuwepo? Kwani huyu Muhammad ni nani kwa Wakristo hata wakapata msituko wa kufikia hatua ya kuficha injili hiyo inayodaiwa imeandikwa na <i style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><b style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">Barnaba</b></i>?&nbsp;</span><p><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">Kwa Mkristo aliyesoma Biblia kama atasoma vizuri kamwe hawezi kubabaishwa na kitabu chochote au maneno ya mtu yeyote kwamba yupo mtu aitwaye Muhammad ambaye ni mtume baada ya Yesu. <i style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><b style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">Katika Uf 1:8</b> tunasoma maneno haya</i></span><i><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">Mimi ni Alfa na Omega, mwanzo na mwisho asema Bwana Mungu aliyeko na aliyekuwako na atakaye kuja na mwenyezi.</span></i></p><p><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">Hii ni kuonesha hakuna mwingine awaye yote zaidi ya Yesu. Tena katika Yoh 5:43 tunasoma hivi:</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">Mimi nimekuja kwa jina la Baba yangu wala ninyi hamnipokei mwingine akija kwa jina lake mwenyewe mtampokea huyo.</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><b style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">Hii nayo inaonesha Yesu alianza kuonya mapema kwamba atakuja mtu kwa jina lake mwenyewe na kudai ya kuwa yeye ni mtume nanyi mtampokea huyo. Basi sambamba na hilo lazima uzushi utokee kwamba ipo injili ya Barnaba ambayo ni hiyo pekee iliyomtabiri mtu aitwaye Muhammad kuwa mtume baada ya Yesu.&nbsp;</b></span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">Mazingira ya utume wake yanatatanisha mno. Je, ni kipi ambacho kitatufanya tuamini kuwa ipo injili ya Barnaba na ndani yake inaelezea kuja kwa Nabii aitwaye Muhammad baada ya Yesu Kristo? Usikose kupata habari za huyo Barnaba na injili yake wiki ijayo.</span></p>', NULL, '', 'yes', '', 0, 1392642670, 'unpublished'),
(10, 'CHUO CHA UUGUZI MKULA CHAFUNGULIWA RASMI', '<span style=\"color: rgb(0, 0, 0); font-family: \'Trebuchet MS\', Arial, Helvetica, Verdana, sans-serif; font-size: 12px; line-height: normal;\"><b style=\"color: rgb(0, 0, 0); font-family: \'Trebuchet MS\', Arial, Helvetica, Verdana, sans-serif; font-size: 12px; line-height: normal;\">Chuo cha Mafunzi ya uuguzi Mkula Hospital kwa jina la Bishop Kisula College of Health and Allied Sciences kiliwekewa jiwe la msingi na kufunguliwa rasmi tarehe 12/12/2013 na raisi wa jamhuri ya muungano wa Tanzania Mheshimiwa Jakaya Mrisho Kikwete.</b></span><p><span style=\"color: rgb(0, 0, 0); font-family: \'Trebuchet MS\', Arial, Helvetica, Verdana, sans-serif; font-size: 12px; line-height: normal;\"><br></span></p><p><span style=\"color: rgb(0, 0, 0); font-family: \'Trebuchet MS\', Arial, Helvetica, Verdana, sans-serif; font-size: 12px; line-height: normal;\">&nbsp;Tukio hili kubwa la kihistoria katika <b style=\"color: rgb(0, 0, 0); font-family: \'Trebuchet MS\', Arial, Helvetica, Verdana, sans-serif; font-size: 12px; line-height: normal;\">AICT</b> lilifanyika kwenye eneo la chuo mbele ya ofisi ya administration.&nbsp;</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: \'Trebuchet MS\', Arial, Helvetica, Verdana, sans-serif; font-size: 12px; line-height: normal;\">Tukio hili liliudhuliwa na viongozi mbalimbali wa kanisa akiwemo <b style=\"color: rgb(0, 0, 0); font-family: \'Trebuchet MS\', Arial, Helvetica, Verdana, sans-serif; font-size: 12px; line-height: normal;\">Askofu mkuu Silas Majaliwa Kezakubi, katibu mkuu Zakayo Bugota, Mkuu wa idara ya afya Dr Shadrack Watugala </b>na viongozi mbalimbali wa kidini na serikali, pamoja na watu wote kwa ujumla.&nbsp;</span></p><p><span style=\"color: rgb(0, 0, 0); font-family: \'Trebuchet MS\', Arial, Helvetica, Verdana, sans-serif; font-size: 12px; line-height: normal;\">Hospitali ya Mkula ni mmoja ya vituo vya afya vkubwa na tegemezi katika mkoa wa Simiu, imekuwa ikitoka mafunzo ya uuguzi <i style=\"color: rgb(0, 0, 0); font-family: \'Trebuchet MS\', Arial, Helvetica, Verdana, sans-serif; font-size: 12px; line-height: normal;\"><b style=\"color: rgb(0, 0, 0); font-family: \'Trebuchet MS\', Arial, Helvetica, Verdana, sans-serif; font-size: 12px; line-height: normal;\">ngazi ya cheti</b></i>, kwa sasa Mkula itaweza kutoa mafunzo ya uuguzi kwa <i style=\"color: rgb(0, 0, 0); font-family: \'Trebuchet MS\', Arial, Helvetica, Verdana, sans-serif; font-size: 12px; line-height: normal;\"><b style=\"color: rgb(0, 0, 0); font-family: \'Trebuchet MS\', Arial, Helvetica, Verdana, sans-serif; font-size: 12px; line-height: normal;\">ngazi ya diploma</b></i>.</span></p>', NULL, '', 'yes', '', 0, 1393270886, 'published'),
(11, 'Geita Resorce Center', '<b>GRC</b> is the centre found in Geita Mwanza.<br>', NULL, '', 'yes', '', 0, 1393315429, 'unpublished'),
(12, 'sdfghjk', 'sdfghjkgfdff', NULL, '', 'no', 'Kezakubi Silasi', 0, 1395400365, 'unpublished'),
(13, 'SAFARI YA KWENDA KUANZISHWA KWA KANISA LA AICT-BURUNDI', '<span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 13px; line-height: normal;\">Idara ya Injili na Misheni makao Makuu, wanakushirikisha kuombea safari ya Umisheni nchini BURUNDI yenye madhumuni ya kuanzishwa kwa kanisa la&nbsp;</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 13px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 13px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0);\">AIC- BURUNDI</span>&nbsp;itakayofanyika tahehe 1-5/5/2014. Safari hiyo itakuwa na jumla ya watumishi thelathini (30).</span><p><span style=\"line-height: normal;\"><font color=\"#000000\" face=\"arial\" size=\"2\"><br><b>Mambo ya kuombea ni:-</b></font><b><ol style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 13px;\"><li><b>Uwepo wa Mungu katika safari hii.</b></li><li><b>Upatikanaji wa Fedha za safari.</li><li><b>Upatikanaji wa gari la safari.</b></li><li><b>Mafanikio ya safari hiyo.</b></li></ol><p style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 13px;\"><b style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 13px;\">Tuma chango wako kwenye Akaunti:-</b></p><p style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 13px;\"><b>AICT IDARA YA INJILI.</b></p><p style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 13px;\"><b>A/C NO. 5400477002&nbsp;</p><p style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 13px;\"><b>TWIGA BANCORP-MWANZA</b></p><p style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 13px;\"><i>Tangazo hili limetolewa na Mratibu Mkuu Idara ya Injili na Misheni.<br></i></p><p style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 13px;\"><i><br></i></p></span></p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1396728505, 'published'),
(14, 'Siku ya kwanza: SAFARI YA IDARA YA INJILI NA MISHENI AICT â€œBURUNDI LIVEâ€', 'Ziara ya watu 16 wa kikundi cha Injili na Misheni &nbsp;cha AICT&nbsp; tarehe 1-5-2014, saa 10 alfajili walianza safari ya kwenda Nchi ya Burundi kuona uwezekano wa kuanzisha kanisa la AIC Burundi.&nbsp; Wana kikundi walio kwenda ni:<br><br>&nbsp;(1) David Emanuel -Mpiga picha za video<br>(2) Grace Shunashu -Mhazini msaidizi<br>(3) Mwinj. Benjamini kafula -Buzuruga<br>(4) Gereshom Fereshi -Mtumishi AIC Ufundi<br>(5) Paul Buyemba&nbsp; -Mtumishi AIC Inland Press<br>(6) Abigael Zebedayo -Mwimbaji Paradiso Choir AIC Buzuruga<br>(7) Mch. Charles Mabisa -AIC Makongoro<br>(8) Mwinj. Esther Shija -Mjumbe kamati ya Injili na Misheni<br>(9) Joseph Masunzu Kuzenza -Mzee wa kanisa AIC Shinyanga<br>(10) Mwinj. Yohana Bwire -Mratibu wa Injili na Misheni dayosisi ya Pwani<br>(11) Mch. Charles Sanagu - Mch. wa Changanyikeni Dar<br>(12) Mch. Emanuel Makunza -AIC Mtwara<br>(13) Mch. Mussa Hezeron -AIC Magomeni<br>(14) Mch. Zabroni Kashinje -AIC Misungwi<br>(15) Mch. Samwel Lupilya -AIC Buzuruga<br>(16) Mwinj. Stephen Kapongo -Mratibu Mkuu wa Idara ya Injili na Misheni AICT<br><br>Safari ilianzia&nbsp; kituo cha Emaus Makongoro Mwanza, na kufika AICT Dayosisi ya Geita saa 3.20 asubuhi&nbsp; mahali ambapo Idara ya Vijana AICT Dayosisi ya GEITA iliwakarimu chai na maji ya kunywa na safari ya Burundi ikaendelea.<br><br>Mungu akatenda muujiza kikundi&nbsp; kilipofika eneo la K9 wilaya ya Ngara mnamo saa 6 mchana.&nbsp; Mpwa wake na Ndg. Gereshom Fereshi anayeitwa Mwalimu Pius Radislaus&nbsp; alikikaribisha kikundi cha Injili na Misheni nyumbani kwake na kukikarimu chakula cha mchana na vinywaji. Kabla ya kuondoka nyumbani kwake kiongozi wa msafara Mwinjilisti Stephen Kapongo akamuomba Mch. Samwel Lupilya kumbariki mtoto mchanga wa familia ya Mwalimu Pius Radislaus.<br><br>Kikundi&nbsp; kilifika Kabanga mpakani mwa Tanzania na Burundi&nbsp; saa 10.20 jioni na baada ya kukamilisha taratibu zote za uamiaji kikundi kikaruhusiwa kuingia nchi ya Burundi. <br><br>Safari iliendelea&nbsp; na iliwachukua takribani masaa maNne zaidi kufika rango kuu la kuingia&nbsp; jiji la Bujumbula. Hii ni sehemu ambapo mwenyeji wao Mwinjilisti Kiongozi wa Burundi Ndg. Manjondi Ezechiel aliwapokea mnamo saa 4.20 usiku. Alikiongoza kikundi hadi kanisani wakafanya ibada ya kumshukuru Mungu kwa wageni kusafiri na kufika salama. Pia viongozi wenyeji wakapata fursa ya kujitambulisha kwa wageni. Badae wageni wakapewa chakula&nbsp; cha usiku na kupumzika ili kujiandaa na kazi ya siku ya pili..<br><br>', NULL, '', 'no', 'Paul Bunyemba', 0, 1399454068, 'published'),
(15, 'Siku ya kwanza: SAFARI YA IDARA YA INJILI NA MISHENI AICT \'LIVE BURUNDI\'', '<span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><b style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">Ziara ya watu 16 wa Idara ya Injili na Misheni ya&nbsp; AICT&nbsp; tarehe 1-5-2014, saa 10 alfajili ilianza safari kwenda nchi ya Burundi kuona uwezekano wa kuanzisha kanisa la AIC Burundi.</b>&nbsp; Kikundi cha AICT Injili na Misheni kiliongozwa na:</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">&nbsp;(1) David Emanuel -Mpiga picha za video</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(2) Grace Shunashu -Mhazini msaidizi</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(3) Mwinj. Benjamini kafula -Buzuruga</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(4) Gereshom Fereshi -Mtumishi AIC Ufundi</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(5) Paul Buyemba&nbsp; -Mtumishi AIC Inland Press</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(6) Abigael Zebedayo -Mwimbaji Paradiso Choir AIC Buzuruga</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(7) Mch. Charles Mabisa -AIC Makongoro</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(8) Mwinj. Esther Shija -Mjumbe kamati ya Injili na Misheni</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(9) Joseph Masunzu Kuzenza -Mzee wa kanisa AIC Shinyanga</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(10) Mwinj. Yohana Bwire -Mratibu wa Injili na Misheni dayosisi ya Pwani</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(11) Mch. Charles Sanagu - Mch. wa Changanyikeni Dar</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(12) Mch. Emanuel Makunza -AIC Mtwara</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(13) Mch. Mussa Hezeron -AIC Magomeni</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(14) Mch. Zabroni Kashinje -AIC Misungwi</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(15) Mch. Samwel Lupilya -AIC Buzuruga</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">(16) Mwinj. Stephen Kapongo -Mratibu Mkuu wa Idara ya Injili na Misheni AICT</span><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><br style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><span style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\"><b style=\"color: rgb(0, 0, 0); font-family: arial; font-size: 12px; line-height: normal;\">Safari ilianzia&nbsp; kituo cha Emaus Makongoro Mwanza, na kufika AICT Dayosisi ya Geita saa 3.20 asubuhi&nbsp; mahali ambapo Idara ya Vijana AICT Dayosisi ya GEITA iliwakarimu chai na maji ya kunywa na safari ya Burundi ikaendelea.</b></span><br style=\"color: rgb(0, 0, 0); fo', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1399471999, 'unpublished'),
(16, 'It just a sample', 'its just a sample', NULL, '', 'no', 'Kezakubi Silasi', 0, 1399475532, 'unpublished'),
(17, 'â€œSiku ya piliâ€ Kikundi cha Injili na Misheni kilifundisha Imani ya Kanisa la AICT Nchini  Burundi', '<span style=\"font-size: 12px; color: rgb(51, 51, 51);\"><span style=\"color: rgb(255, 0, 0); font-size: 12px;\">Mafunzo juu ya imani ya kanisa la AICT</span>.<br style=\"font-size: 12px;\">Siku ya tarehe 2/05/2014 saa 4 asubuhi â€œprogramâ€ ya Idara ya Injili na Misheni ili anza kaziÂ  rasmiÂ  katika kanisa la AIC Burundi.Â  Zamani liliitwa kanisa la \"ENGLISE EMMANUEL MIRACLE CENTER\" <br style=\"font-size: 12px;\">Â Baada ya ibada fupi ya asubuhi Uongozi wa AIC Burundi zamani \"Kanisa la ENGLISE EMMANUEL MIRACLE CENTER\"Â  wakajitambulisha kwa wangeni kama ifuatavyo:-<br><br style=\"font-size: 12px;\">1. Manjondi Ezechiel- Mwinjilisti kiongonzi<br style=\"font-size: 12px;\">2. Nicitegetse Pascal-Mwinjilisti msaidizi kiongonzi<br style=\"font-size: 12px;\">3. Nkeshimana Marc-Katibu<br style=\"font-size: 12px;\">4. Minani Egiole-Mhazini<br style=\"font-size: 12px;\">5. Kakozi Martin- Mwinjilisti wa kanisa na mshauri<br style=\"font-size: 12px;\"><br style=\"font-size: 12px;\">Katika utambulisho huo; Mwinjilisti kiongozi-Manjondi Ezechiel alimtambulisha Mwinjilisti kiongozi Ndg. Sharamba Augustini Akasante kutoka Congo. Alisema huko nchi ya Congo wali anzisha kanisa la ENGLISE EMMANUEL MIRACLE CENTER na sasa litakuwa kanisa la AIC Congo. <br style=\"font-size: 12px;\">Baada ya Utambulisho huo kiongozi wa kanisa la AIC Burundi zamani \"kanisa la ENGLISE EMMANUEL MIRACLE CENTER\" aliomba kikundi cha Injili na Misheni kufundisha imani ya kanisa la AICT kwa vitendo. Aidha uongozi uliomba kufundishwa, Taratibu za ibada na nyimbo za sifa. Ili kanisa la AIC Burundi lifanane na Kanisa la AIC Tanzania. Pia uongozi wa kanisa la AICÂ  Burundi umeomba kibari cha kutafsiri nyimbo za sifa, katiba ya AICT, Katekisimu na Taratibu za ibada kwa lugha ya Kirundi wavitumie Burundi.Â  <br style=\"font-size: 12px;\">Tena, Mwinjilisti kiongozi-Manjondi Ezechiel wa AIC-Burundi, akakiomba kikundi cha Injili na Misheni kuendesha ibada zote wakati wa ziara yao ili viongozi wa AIC Burundi wajifunze kwa kuona na vitendo.Â  <br style=\"font-size: 12px;\">Pia alisema eneo la kanisa la AIC Burundi zamani \"ENGLISE EMMANUEL MIRACLE CENTER\" sio la kwao eneo hilo wame pangishwa, hivyo aliwaomba wageni kabla ya kuondoka wafike sehemu inayoitwa \"RUBIRA, BUBANZA\" waone eneo la kiwanja walilo nunua lenye ukubwa wa \" urefu mita 200 na upana mita 100\" eneo ambalo watajenga makao makuu ya kanisa la AIC Burundi.<br style=\"font-size: 12px;\">Na ndipo, Mwinjilisti kiongozi-Manjondi Ezechiel akamkaribisha kiongozi wa kikundi cha Injili na Misheni Mwinj. Stephen Kapongo awatambulishe wageni alioambatana nao. Baada ya wageni kumaliza kujitambulisha kwa majina na sehemu walizotoka, Mratibu wa Idara akakubali kuwa wageni wata endesha ibada zote hapo kanisani. Pia wata fundisha masomo yafuatayo:<br><br style=\"font-size: 12px;\"><span style=\"color: rgb(255, 0, 0); font-size: 12px;\">1. Somo: Imani ya kanisa la AICT</span>- Mwalimu: Mch. Samwel Lupilya<br style=\"font-size: 12px;\">Mch. Samwel Lupilya alikufundisha juu ya Imani ya kanisa la AICT. Pia akafundisha mambo sita muhimu:<br style=\"font-size: 12px;\">Â Mungu ni mmoja katika Utatu Mtakatifu (Mt. 3:16-17; 28:19; 15:26)<br style=\"font-size: 12px;\">Â Mungu ni Muumbaji na Mlinzi wa vitu vyote...(Mwa. 1:1;26-28) <br style=\"font-size: 12px;\">Uungu na Ubinadamu wa Mungu Mwana, ambaye ndiye Bwana Yesu Kristo aliye Mungu halisi.... (Mt. 1:18-25; Lk. 1:26-38; 2:1-7, 52)<br style=\"font-size: 12px;\">Maandiko Matakatifu ya Agano la Kale na Agani Jipya, yana vitabu 66. (Rum. 3:23; 5:12, 1Yon. 1:8; Zab. 130:3)<br style=\"font-size: 12px;\">Imempasa binadamu kuzaliwa mara ya pili. Yn. (1:12-13; 3:3,5-6)<br style=\"font-size: 12px;\">Kanisa ni watu walioitwa na Mungu kwa njia ya Imani katika Kristo Yesu...(1Kol. 1:2; Yud. 1:1; Efe. 5:20-23; Kol. 1:18)<br style=\"font-size: 12px;\"><br style=\"font-size: 12px;\"><span style=\"color: rgb(255, 0, 0); font-size: 12px;\">2. Somo: Taratibu za ibada</span> -Mwalimu: Mch. Emmanuel Makunza<br style=\"font-size: 12px;\">Mch. Emmanuel Makunza wa Dayosisi ya Pwani alifundisha taratibu za ibada za AICT.Â  Alifundisha juu ya mambo matatu muhimu:<br style=\"font-size: 12px;\">Â Viongozi na Wakristo wa hakikishe uwepo wa Yesu Kristo katikati ya ibada zetu.<br style=\"font-size: 12px;\">Â Kiongozi ajiandae mapema kabla ya ibada na aongoze kwa utaratibu na heshima. <br style=\"font-size: 12px;\">Â Ibada za juma Pili mwongozo wa ibada unasema kabla ya ibada kuanza utulivu uwepo kanisani.<br style=\"font-size: 12px;\"><br style=\"font-size: 12px;\">Na baadaeÂ  alimkaribishaÂ  Mch. Charles Sanagu kuimbisha wimbo wa sifa no. 5 \"Bwana Mungu na shangaa\"<br><br style=\"font-size: 12px;\"><span style=\"color: rgb(255, 0, 0); font-size: 12px;\">Ibada:</span><br><br style=\"font-size: 12px;\">Ibada ilianza kwenye kanisa la AIC Buruni saa11 jioni.Â Â  Na ibada iliendeshwa na wageni ili kuwapa uzoefu wenyeji wajue taratibu na kanuni za ibada za kanisa laÂ  AIC Tanzania. <br style=\"font-siz', NULL, '', 'yes', 'Paul Bunyemba', 0, 1399664779, 'published'),
(18, 'Siku ya tatu: Eneo litakapo jengwa makao makuu ya AIC Burundi â€œLIVEâ€', '<span style=\"font-size: 12px; color: rgb(51, 51, 51);\">Siku ya tarehe 3/5/2024 kikundi cha injili na misheni cha AICT kiliendelea na ziara yake ndani ya nchi ya Burundi. Mnamo saa Nne za asubuhi Viongozi wa AIC Burundi waliwapeleka wageni wao kwenye eneo la kiwanja sehemu inayoitwa Rubira, Bubanza kama kilometa 16 kutoka kituo cha kanisa la AIC Burundi zamani \"ENGLISE EMMANUEL MIRACAL CENTER\"Â  eneo walilopewa na serikaliÂ  wajenge makao makuu ya AIC Burundi. Kikundi kilifika na kuoneshwa eneo lenye ukubwa wa takribani wa urefu wa mita 200 na upana mita 100. Kiongozi wa AIC Burundi aliwaomba Viongozi wa AIC Tanzania wamsaidie kunjengaÂ  Kanisa, Ofisi, Shule na Hospital.Â  Kabla ya kuondoka kwenye eneo la kiwanja kikundi cha Injili na Misheni kiliomba sara na baraka za Mungu akamilishe mipango na unjezi wa kanisa jipya la AIC Burundi.<br style=\"font-size: 12px;\">Badaye viongozi wa kanisa la AIC Burundi waliwapeleka wageni mjini Bunjumbura ili wapate fursa ya kununua maitaji yao muhimu. Baadae mnamo saa 9 alasiri mwenyeji wao aliwakaribisha chakula cha mchana nyumbani kwake kabla ya kwenda kwenye ibada ya jioni.<br style=\"font-size: 12px;\"><span style=\"font-size: 12px; color: rgb(51, 51, 51);\"><b><span style=\"color:rgb(255,0,0);font-size: 12px;\">Ibada</span></b></span>:<br style=\"font-size: 12px;\">Kiongozi wa Ibada hii alikuwaÂ  Mch. Charles Bahebe Sanagu wa kanisa la AIC Changanyikeni - Dayosisi ya Pwani. Mhubiri alikuwa Mch. Musa Hezron wa AIC Magomeni - Dayosisi ya Pwani. Mhubiri alihubiri juu ya Nguvu ya Msalaba. Neno kuu lilitoka katika kitabu cha 1 Wakorintho 1:18 \"Kwa sababu Neno la Msalaba kwao wanaopotea ni upiizi, bali kwetu sisi tunaookolewa ni nguvu ya Mungu\".Â  Mhubiri alisisitiza juu ya mambo manne kuhusu nguvu ya msalaba:<br style=\"font-size: 12px;\"><i style=\"font-size: 12px; color: rgb(51, 51, 51);\"><span style=\"color:rgb(0,0,255);font-size: 12px;\">- Nguvu ya msalaba ina uwezo wa kubadilisha maisha ya watu<br style=\"font-size: 12px; color: rgb(0, 0, 255);\">- Nguvu ya msalaba inatuwezesha kuishi maisha matakatifu<br style=\"font-size: 12px; color: rgb(0, 0, 255);\">- Nguvu ya msalaba inatuwezesha kuendelea mbele katika imani bila kujali matatizo na misukosuko<br style=\"font-size: 12px; color: rgb(0, 0, 255);\">- Nguvu ya msalaba hutuwezesha kumtumikia Mungu kwa mali zetu.</span></i><br style=\"font-size: 12px;\"><br style=\"font-size: 12px;\">Mwishoni Mhubiri alitoa mwaliko kwa watu wenye mahitaji mbalimbali. Watu 31 walijitokeza ili waombewe. Baada ya maombi M/kiti wa ibada alifunga ibada. <br style=\"font-size: 12px;\"><b><span style=\"color:rgb(255,0,0);font-size: 12px;\">Ibada ya Sinema</span></b><br style=\"font-size: 12px;\">Ibada ya jioni iliongozwa na Mwinjilisti Stephen Kapongo. Filamu iliyooneshwa ni ya maisha ya Yesu.Â  Kabla ya onesho la sinema halijafika mwisho, kulitokea hitilafu ya umeme kiasi cha kuathiri mwisho wa filamu. <br style=\"font-size: 12px;\"></span>', NULL, '', 'no', 'Paul Bunyemba', 0, 1400238680, 'published'),
(19, 'UFUNGUZI WA MKUTANO WA SINODI KUU YA AICT', '<!--[if gte mso 9]><xml> <o:OfficeDocumentSettings>  <o:AllowPNG></o:AllowPNG> </o:OfficeDocumentSettings></xml><![endif]--><p class=\"MsoNormal\"><span style=\"font-size:10.0pt;line-height:115%\">Kanisa la AICT limekua na mkutano wa Sinodi Kuu tangu Septemba 03-05, 2014 kwenye makao yake Makuu ya kanisa la AICT Makongoro-Mwanza. Kwa mujibu wa katiba ya kanisa la AICT ibara 106 inasema, mkutano wa Sinodi kuu utakutana mara moja tu baada ya miaka minne.</span></p><p class=\"MsoNormal\"><span style=\"font-size:10.0pt;line-height:115%\">M/kiti wa Mkutano wa Sinodi Kuu Askofu Mkuu wa AICT Silas Kezakubi alifungua mkutano na kuwa karibisha wajumbe katika Sinodi Mkuu. Aliwashukuru Wachungaji wa kanisa la AICT kwa amani na utulivu uliopo katika kanisa la AICT pamoja na ushirikiano waliyompa katika kipindi chote cha uongozi wake uliyokuwa unamalizika. </span></p><p class=\"MsoNormal\"><span style=\"font-size:10.0pt;line-height:115%\">Aidha, alisema katika uongozi wake wa miaka minne kanisa limepiga hatua nzuri kwa ujenzi wa ofisi ya makao Makuu ambao bado unaendelea. Ninanukuu,<i style=\"mso-bidi-font-style:normal\">â€œâ€¦nijukumu letu sisi wote kujenga ofisi Kuu ya kanisa letu maana hapani nyumbani kwetu wote hivyo tushirikiane wote tupajengeâ€¦â€</i> mwisho wa kunukuu.</span></p><p class=\"MsoNormal\"><span style=\"font-size:10.0pt;line-height:115%\">Askofu Mkuu Kezakubi akazungumzia uwekezaji wa eneo la Bwiru ambako serikali ilianzisha Chuo cha Mipango kwenye eneo la kanisa akasema, kanisa litaendelea kunufaika na uwekezaji huo. </span></p><span style=\"font-size:10.0pt;line-height:115%;font-family:\" calibri\",\"sans-serif\";mso-ascii-theme-font:minor-latin;mso-fareast-font-family:calibri;mso-fareast-theme-font:minor-latin;mso-hansi-theme-font:minor-latin;mso-bidi-font-family:\"times=\"\" new=\"\" roman\";mso-bidi-theme-font:minor-bidi;mso-ansi-language:en-us;mso-fareast-language:en-us;mso-bidi-language:ar-sa\"=\"\">Pia, M/kiti alizungumzia juu ya changamoto wanazokutananazo Wachungaji wa AICT wawapo kazini na baada ya kustaafu kazi akasema, uongozi wa kanisa utaona kama utakuwepo uwezekano wa kuwalipaWachungaji kiinua mgongo baada ya kustaafu kazi. Mwisho, M/kiti Askofu Mkuu Kezakubi alitoa lai kwenye Sinodi Kuu kwamba kutakua na chaguzi mbali mbali katika mkutano wa Sinodi Kuu hivyo Mungu awasaidie wachague viongozi watendakazi wa Bwana wetu Yesu Kristo. Wasikubali kuchagua viongozi kwa kushawishiwa au wasichague viongizi wa kanisa kwa kufuata ushabiki.</span><!--[if gte mso 9]><xml> <w:WordDocument>  <w:View>Normal</w:View>  <w:Zoom>0</w:Zoom>  <w:TrackMoves></w:TrackMoves>  <w:TrackFormatting></w:TrackFormatting>  <w:PunctuationKerning></w:PunctuationKerning>  <w:ValidateAgainstSchemas></w:ValidateAgainstSchemas>  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>  <w:DoNotPromoteQF></w:DoNotPromoteQF>  <w:LidThemeOther>EN-US</w:LidThemeOther>  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>  <w:Compatibility>   <w:BreakWrappedTables></w:BreakWrappedTables>   <w:SnapToGridInCell></w:SnapToGridInCell>   <w:WrapTextWithPunct></w:WrapTextWithPunct>   <w:UseAsianBreakRules></w:UseAsianBreakRules>   <w:DontGrowAutofit></w:DontGrowAutofit>   <w:SplitPgBreakAndParaMark></w:SplitPgBreakAndParaMark>   <w:EnableOpenTypeKerning></w:EnableOpenTypeKerning>   <w:DontFlipMirrorIndents></w:DontFlipMirrorIndents>   <w:OverrideTableStyleHps></w:OverrideTableStyleHps>  </w:Compatibility>  <m:mathPr>   <m:mathFont m:val=\"Cambria Math\"></m:mathFont>   <m:brkBin m:val=\"before\"></m:brkBin>   <m:brkBinSub m:val=\"--\"></m:brkBinSub>   <m:smallFrac m:val=\"off\"></m:smallFrac>   <m:dispDef></m:dispDef>   <m:lMargin m:val=\"0\"></m:lMargin>   <m:rMargin m:val=\"0\"></m:rMargin>   <m:defJc m:val=\"centerGroup\"></m:defJc>   <m:wrapIndent m:val=\"1440\"></m:wrapIndent>   <m:intLim m:val=\"subSup\"></m:intLim>   <m:naryLim m:val=\"undOvr\"></m:naryLim>  </m:mathPr></w:WordDocument></xml><![endif]--><!--[if gte mso 9]><xml> <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"true\"  DefSemiHidden=\"true\" DefQFormat=\"false\" DefPriority=\"99\"  LatentStyleCount=\"267\">  <w:LsdException Locked=\"false\" Priority=\"0\" SemiHidden=\"false\"   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Normal\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"false\"   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"heading 1\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 2\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 3\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 4\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 5\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 6\"></w:LsdException>  <w:LsdExceptio', NULL, '', 'yes', 'Paul Bunyemba', 0, 1410553462, 'published');
INSERT INTO `news` (`article_id`, `article_title`, `article_description`, `article_cat`, `pdf_file`, `headline`, `poster`, `cstatus`, `timestamp`, `published`) VALUES
(20, 'TAARIFA YA KAZI KWENYE MKUTANO WA SINODI KUU YA AICT', '<!--[if gte mso 9]><xml> <o:OfficeDocumentSettings>  <o:AllowPNG/> </o:OfficeDocumentSettings></xml><![endif]--><p class=\"MsoNormal\" style=\"margin-top:6.0pt;margin-right:0in;margin-bottom:6.0pt;margin-left:0in\"><span style=\"font-size:9.0pt;font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Katibu Mkuu Kiongozi Mch. Zakayo Bugota alianza kwakusema, tunakutana katika kipindi ambacho ni cha muhimu sana katika Kanisaletu. Mwaka huu 2014 ni kipindi cha kufanya chaguzi za ki-Katiba kwa Kanisaletu kuanzia ngazi ya Kanisa la Mtaa hadi Makao Makuu ya AICT.</span></p><p class=\"MsoNormal\" style=\"margin-top:6.0pt;margin-right:0in;margin-bottom:6.0pt;margin-left:0in;line-height:normal\"><span style=\"font-size:9.0pt;font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Natumia nafasi hii kumshukuru Mungu kwa amani na utulivuambao umeendelea hadi sasa kwa chaguzi zote zilizofanyika. Niwapongeze wotewaliopewa nafasi za utumishi katika kipindi cha miaka mine ijayo. Nawaombenisana tukaeni ndani yake Kristo ili kazi yetu izae matunda.</span></p><p class=\"MsoNormal\" style=\"margin-top:6.0pt;margin-right:0in;margin-bottom:6.0pt;margin-left:0in;line-height:normal;mso-outline-level:6\"><span style=\"font-size:9.0pt;font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;\">Ninayo matarajio na imani kwamba,Kristo ataendelea kutuwezesha kwenye utumishi huu kama alivyoahidi</span></p><p class=\"MsoNormal\" style=\"margin-top:6.0pt;margin-right:0in;margin-bottom:6.0pt;margin-left:0in;line-height:normal;mso-outline-level:6\"><span style=\"font-size:9.0pt;font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;\">Kanisaletu hutekeleza mipango na shughuli zake kupitia Daysosisi na idara zakanisa.Taarifa zake za utekelezaji hupitiwa na Baraza la Utendaji la Sinodi Kuuya AICT kila linapokutana. </span></p><p class=\"MsoNormal\" style=\"margin-top:6.0pt;margin-right:0in;margin-bottom:6.0pt;margin-left:0in;line-height:normal;mso-outline-level:6\"><span style=\"font-size:9.0pt;font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;\">Taarifahizi zinazotolewa zina husisha shughuli za Makao Makuu; Dayosisi;na Idara zaKanisa letu. <span style=\"color:black\">Kanisa letu limeendelea kupanuka nakukua hapa nchini hiki ni kiashiria tosha cha kuona kwamba tunahitaji mipangomadhubuti katika utoaji wa huduma zetu.</span></p><p class=\"MsoNormal\" style=\"margin-top:6.0pt;margin-right:0in;margin-bottom:6.0pt;margin-left:0in;line-height:normal;mso-outline-level:6\"><span style=\"font-size:9.0pt;font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;\">Kanisaletu katika umoja wake lina idara na vitengo mbalimbali zinazo husika na hudumaza kiroho na jamii ambazo ni <i style=\"mso-bidi-font-style:normal\">Afya,Elimu,Ufundina Teknolojia,Maandiko,Wanawake na Watoto,Vijana,Elimu ya Kikristo, Mafunzo yaBiblia naTheologia na Injili na Misheni. </i>Tunamshukuru Mungu kwambazinaendelea kutoa huduma kwa kanisa na jamii zikiwa na lengo lakutangazaInjili, kuonesha upendo wake Kristo, kulisaidia kanisa kiuchumi nakutoa ajirakwa jamii ya watanzania. </span></p><p class=\"MsoNormal\" style=\"margin-top:6.0pt;margin-right:0in;margin-bottom:6.0pt;margin-left:0in;line-height:normal;mso-outline-level:6\"><span style=\"font-size:9.0pt;font-family:&quot;Tahoma&quot;,&quot;sans-serif&quot;;mso-fareast-font-family:&quot;Times New Roman&quot;\">Aidha,Kanisa letu la Africa Inland Church Tanzania linatoa huduma zake kupitiadayosisi zake sita za Mwanza, Geita,Shinyanga, Pwani, Mara na Ukerewe naTabora.</span></p><!--[if gte mso 9]><xml> <w:WordDocument>  <w:View>Normal</w:View>  <w:Zoom>0</w:Zoom>  <w:TrackMoves/>  <w:TrackFormatting/>  <w:PunctuationKerning/>  <w:ValidateAgainstSchemas/>  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>  <w:DoNotPromoteQF/>  <w:LidThemeOther>EN-US</w:LidThemeOther>  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>  <w:Compatibility>   <w:BreakWrappedTables/>   <w:SnapToGridInCell/>   <w:WrapTextWithPunct/>   <w:UseAsianBreakRules/>   <w:DontGrowAutofit/>   <w:SplitPgBreakAndParaMark/>   <w:EnableOpenTypeKerning/>   <w:DontFlipMirrorIndents/>   <w:OverrideTableStyleHps/>  </w:Compatibility>  <m:mathPr>   <m:mathFont m:val=\"Cambria Math\"/>   <m:brkBin m:val=\"before\"/>   <m:brkBinSub m:val=\"&#45;-\"/>   <m:smallFrac m:val=\"off\"/>   <m:dispDef/>   <m:lMargin m:val=\"0\"/>   <m:rMargin m:val=\"0\"/>   <m:defJc m:val=\"centerGroup\"/>   <m:wrapIndent m:val=\"1440\"/>   <m:intLim m:val=\"subSup\"/>   <m:naryLim m:val=\"undOvr\"/>  </m:mathPr></w:WordDocument></xml><![endif]--><!--[if gte mso 9]><xml> <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"true\"  DefSemiHidden=\"true\" DefQFormat=\"false\" DefPriority=\"99\"  LatentStyleCount=\"267\">  <w:LsdException Locked=\"false\" Priority=', NULL, '', 'yes', 'Paul Bunyemba', 0, 1410585980, 'published'),
(21, 'Wasilisho Maalumu la Shirika la Compassion International kwenye Sinodo Kuu ya AICT', '<!--[if gte mso 9]><xml> <o:OfficeDocumentSettings>  <o:AllowPNG></o:AllowPNG> </o:OfficeDocumentSettings></xml><![endif]--><!--[if gte mso 9]><xml> <o:OfficeDocumentSettings>  <o:AllowPNG></o:AllowPNG> </o:OfficeDocumentSettings></xml><![endif]--><p class=\"MsoNormal\"><font size=\"2\"><span style=\"line-height: 15.3333320617676px;\">Sinodi Kuu ilipokea wasilisho Maalumu la Shirika la Compassion International kutoka kwa mwakilishi wake Mch. Mayala. Hoja aliyozungumzia ni kanisa lichukue jukumu la dhati la kutunza na kuwalea watoto na kuwa fundisha maadili mema. Kanisalisiiachie Serikali wajibu wa kutunza watoto. Vijana wengi sasa wamekosa mafunzo bora kutoka kanisani na wanapata mafunzo yasiyofaa kutoka kwenye mitandao ya kijamii na tovuti mbali mbali.</span></font></p><p class=\"MsoNormal\"><font size=\"2\"><span style=\"line-height: 15.3333320617676px;\"><br></span></font></p><p class=\"MsoNormal\"><font size=\"2\"><span style=\"line-height: 15.3333320617676px;\">Aidha, Kanisa liliwapa mwaliko wataalamu kutoka ofisi ya Ardhi Jiji la Mwanza kuja kutoaelimu kwenye Mkutano wa Sinodi Kuu. Mada Kuu iliyozungumziwa ni Umilikina Utatuzi wa Migogoro ya Ardhi Tanzani. Afisa Ardhi wa Jiji alifundisha kwa ufasaha juu ya hoja zifuatazo:</span></font></p><p class=\"MsoNormal\"><span style=\"line-height: 15.3333320617676px;\">- Taratibu za umilikishwaji ardhi ya kijiji</span></p><p class=\"MsoNormal\"><span style=\"line-height: 15.3333320617676px;\">-Taratibi za umulikishaji ardhi ya jumla</span></p><p class=\"MsoNormal\"><span style=\"line-height: 15.3333320617676px;\">-Hatua za umilikishaji ardhi</span></p><p class=\"MsoNormal\"><span style=\"line-height: 15.3333320617676px;\">-Matakwa ya kisheria kwa kila mwombaji</span></p><p class=\"MsoNormal\"><span style=\"line-height: 15.3333320617676px;\">-Faida za umilikishwaji ardhi</span></p><p class=\"MsoNormal\"><span style=\"line-height: 15.3333320617676px;\">-Changamoto za umilikishwaji ardhi</span></p><p class=\"MsoNormal\"><span style=\"line-height: 15.3333320617676px;\">-Utatuzi wa migogoro ya ardhi</span></p><p class=\"MsoNormal\"><span style=\"line-height: 15.3333320617676px;\">-Vyanzo vya migogoro ya ardhi</span></p><p class=\"MsoNormal\"><span style=\"line-height: 15.3333320617676px;\">-Mamlaka za utatuzi wa migogoro ya ardhi.</span></p><!--[if gte mso 9]><xml> <w:WordDocument>  <w:View>Normal</w:View>  <w:Zoom>0</w:Zoom>  <w:TrackMoves></w:TrackMoves>  <w:TrackFormatting></w:TrackFormatting>  <w:PunctuationKerning></w:PunctuationKerning>  <w:ValidateAgainstSchemas></w:ValidateAgainstSchemas>  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>  <w:DoNotPromoteQF></w:DoNotPromoteQF>  <w:LidThemeOther>EN-US</w:LidThemeOther>  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>  <w:Compatibility>   <w:BreakWrappedTables></w:BreakWrappedTables>   <w:SnapToGridInCell></w:SnapToGridInCell>   <w:WrapTextWithPunct></w:WrapTextWithPunct>   <w:UseAsianBreakRules></w:UseAsianBreakRules>   <w:DontGrowAutofit></w:DontGrowAutofit>   <w:SplitPgBreakAndParaMark></w:SplitPgBreakAndParaMark>   <w:EnableOpenTypeKerning></w:EnableOpenTypeKerning>   <w:DontFlipMirrorIndents></w:DontFlipMirrorIndents>   <w:OverrideTableStyleHps></w:OverrideTableStyleHps>  </w:Compatibility>  <m:mathPr>   <m:mathFont m:val=\"Cambria Math\"></m:mathFont>   <m:brkBin m:val=\"before\"></m:brkBin>   <m:brkBinSub m:val=\"--\"></m:brkBinSub>   <m:smallFrac m:val=\"off\"></m:smallFrac>   <m:dispDef></m:dispDef>   <m:lMargin m:val=\"0\"></m:lMargin>   <m:rMargin m:val=\"0\"></m:rMargin>   <m:defJc m:val=\"centerGroup\"></m:defJc>   <m:wrapIndent m:val=\"1440\"></m:wrapIndent>   <m:intLim m:val=\"subSup\"></m:intLim>   <m:naryLim m:val=\"undOvr\"></m:naryLim>  </m:mathPr></w:WordDocument></xml><![endif]--><!--[if gte mso 9]><xml> <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"true\"  DefSemiHidden=\"true\" DefQFormat=\"false\" DefPriority=\"99\"  LatentStyleCount=\"267\">  <w:LsdException Locked=\"false\" Priority=\"0\" SemiHidden=\"false\"   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Normal\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"false\"   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"heading 1\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 2\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 3\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 4\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 5\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 6\"></w:LsdException>  <w:LsdException Locked=\"false\" Pr                                  -->', NULL, '', 'yes', 'Paul Bunyemba', 0, 1410602886, 'published'),
(22, 'UCHAGUZI WA VIONGOZI WA KANISA LA AICT', '<!--[if gte mso 9]><xml> <o:OfficeDocumentSettings>  <o:AllowPNG></o:AllowPNG> </o:OfficeDocumentSettings></xml><![endif]--><p class=\"MsoNormal\" style=\"margin: 6pt 0in;\"><font size=\"2\"><span style=\"line-height: normal;\">Kwa mujibu wa katiba ya AICT ibara ya 105 inasema kazi za Sinodi Kuu ni pamoja na kumchagua Askofu Mkuu na Askofu Mkuu msaidizi,kumchagua Askofu wa Dayosisi, kuwachagua mhazini Mkuu na msaidizi wake,kuchagua katibu wa Sinodi na baraza la utendaji la Sinodi Kuu na kuteua majina mawili ya watu wenye utaalam wa fedha. Mwaka huu 2014 ni kipindi cha kufanya chaguzi za ki-Katiba kwa Kanisa la AICT kuanzia ngazi ya Kanisa la Mtaa hadi Makao Makuu ya AICT.</span></font></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in;\"><font size=\"2\"><span style=\"line-height: normal;\"><br></span></font></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in;\"><font size=\"2\"><span style=\"line-height: normal;\">Baada ya uongozi wa kanisa uliokuwepo kumaliza muda wake uongozi ukajiuzuru kupisha uchaguzi ufanyike. Askofu mkuu wa AICT Silas Kezakubi akamkabidhi Mwenyekiti wa muda Askofu Mkuu mstaafu Daniel Nungwana kusimamia uchaguzi wa viongozi katika nyadhifa mbali mbali za kanisa. Wafuatao walichaguliwa na mkutano wa Sinodi Kuu kuwa viongozi wa kanisa kwa muda mwa miaka minne ijayo:</span></font></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in;\"><font size=\"2\"><span style=\"line-height: normal;\"><br></span></font></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in;\"><font size=\"2\"><span style=\"line-height: normal;\">Silas Kezakubi-Askofu Mkuu wa AICT</span></font></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in;\"><span style=\"line-height: normal;\">Mussa Magwesela-Makamu wa Askofu Mkuu</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in;\"><span style=\"line-height: normal;\">John Bunango-Askofumteule wa dayosisi ya Mwanza</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in;\"><span style=\"line-height: normal;\">Mzee Daudi Kasenga-MhaziniMkuu wa AICT</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in;\"><span style=\"line-height: normal;\">Mch. Jacob Ocholaâ€“Mhazini Mkuu msaidizi wa AICT</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in;\"><span style=\"line-height: normal;\">Anna Makolobela -Mjumbewa kuteuliwa mwenye taaluma ya fedha</span></p><p class=\"MsoNormal\" style=\"margin: 6pt 0in;\"><span style=\"line-height: normal;\">Godwil Mahona- Mjumbewa kuteuliwa mwenye taaluma ya fedha</span></p><!--[if gte mso 9]><xml> <w:WordDocument>  <w:View>Normal</w:View>  <w:Zoom>0</w:Zoom>  <w:TrackMoves></w:TrackMoves>  <w:TrackFormatting></w:TrackFormatting>  <w:PunctuationKerning></w:PunctuationKerning>  <w:ValidateAgainstSchemas></w:ValidateAgainstSchemas>  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>  <w:DoNotPromoteQF></w:DoNotPromoteQF>  <w:LidThemeOther>EN-US</w:LidThemeOther>  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>  <w:Compatibility>   <w:BreakWrappedTables></w:BreakWrappedTables>   <w:SnapToGridInCell></w:SnapToGridInCell>   <w:WrapTextWithPunct></w:WrapTextWithPunct>   <w:UseAsianBreakRules></w:UseAsianBreakRules>   <w:DontGrowAutofit></w:DontGrowAutofit>   <w:SplitPgBreakAndParaMark></w:SplitPgBreakAndParaMark>   <w:EnableOpenTypeKerning></w:EnableOpenTypeKerning>   <w:DontFlipMirrorIndents></w:DontFlipMirrorIndents>   <w:OverrideTableStyleHps></w:OverrideTableStyleHps>  </w:Compatibility>  <m:mathPr>   <m:mathFont m:val=\"Cambria Math\"></m:mathFont>   <m:brkBin m:val=\"before\"></m:brkBin>   <m:brkBinSub m:val=\"--\"></m:brkBinSub>   <m:smallFrac m:val=\"off\"></m:smallFrac>   <m:dispDef></m:dispDef>   <m:lMargin m:val=\"0\"></m:lMargin>   <m:rMargin m:val=\"0\"></m:rMargin>   <m:defJc m:val=\"centerGroup\"></m:defJc>   <m:wrapIndent m:val=\"1440\"></m:wrapIndent>   <m:intLim m:val=\"subSup\"></m:intLim>   <m:naryLim m:val=\"undOvr\"></m:naryLim>  </m:mathPr></w:WordDocument></xml><![endif]--><!--[if gte mso 9]><xml> <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"true\"  DefSemiHidden=                                  -->', NULL, '', 'yes', 'Paul Bunyemba', 0, 1410674561, 'published'),
(23, 'Uzinduzi wa Meli ya MV Jubilee Hope', '<!--[if gte mso 9]><xml> <o:OfficeDocumentSettings>  <o:AllowPNG></o:AllowPNG> </o:OfficeDocumentSettings></xml><![endif]--><p class=\"MsoNormal\" style=\"line-height:normal\"><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\";color:blue\"=\"\">Askofu Mkuu Msaidizi wa AICT Mussa Magwesela na ambaye pia ni Askofu wa AICT Dayosisi ya Geita anawataarifu kwamba, Septemba 27, 2014 anatarajia kuwepo kwa tukio maalumu la uzinduzi wa Meli ya MV Jubilee Hope katika Bandari ya Mwanza ijulikanayo kwa jina la Customs.</span></p><p class=\"MsoNormal\" style=\"line-height:normal\"><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\";color:blue\"=\"\">AICT Dayosisi ya Geita imepata ufadhili wa Meli ya Mv Jubilee Hope kutoka kwa shirika liitwalo Vine Trust la nchini&nbsp;Uingereza. Meli hiii tasaidia kutoa huduma ya matibabu kwenye visiwa vilivyoko Ziwa Victoria upande wa Tanzania. Ayamu ya kwanza ni kwa visiwa vya wilaya ya Sengerema, Geita naMuleba.</span></p><p class=\"MsoNormal\" style=\"line-height:normal\"><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\";color:blue\"=\"\">Meli ya MV Jubilee Hope ipo bandari ya Kisumu na hivi sasa ipo kwenye hatua za mwisho za ukamilishwaji ili ianze safari ya kutoka Kisumu,Kenya kuja Mwanza, Tanzania.</span></p><!--[if gte mso 9]><xml> <w:WordDocument>  <w:View>Normal</w:View>  <w:Zoom>0</w:Zoom>  <w:TrackMoves></w:TrackMoves>  <w:TrackFormatting></w:TrackFormatting>  <w:PunctuationKerning></w:PunctuationKerning>  <w:ValidateAgainstSchemas></w:ValidateAgainstSchemas>  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>  <w:DoNotPromoteQF></w:DoNotPromoteQF>  <w:LidThemeOther>EN-US</w:LidThemeOther>  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>  <w:Compatibility>   <w:BreakWrappedTables></w:BreakWrappedTables>   <w:SnapToGridInCell></w:SnapToGridInCell>   <w:WrapTextWithPunct></w:WrapTextWithPunct>   <w:UseAsianBreakRules></w:UseAsianBreakRules>   <w:DontGrowAutofit></w:DontGrowAutofit>   <w:SplitPgBreakAndParaMark></w:SplitPgBreakAndParaMark>   <w:EnableOpenTypeKerning></w:EnableOpenTypeKerning>   <w:DontFlipMirrorIndents></w:DontFlipMirrorIndents>   <w:OverrideTableStyleHps></w:OverrideTableStyleHps>  </w:Compatibility>  <m:mathPr>   <m:mathFont m:val=\"Cambria Math\"></m:mathFont>   <m:brkBin m:val=\"before\"></m:brkBin>   <m:brkBinSub m:val=\"--\"></m:brkBinSub>   <m:smallFrac m:val=\"off\"></m:smallFrac>   <m:dispDef></m:dispDef>   <m:lMargin m:val=\"0\"></m:lMargin>   <m:rMargin m:val=\"0\"></m:rMargin>   <m:defJc m:val=\"centerGroup\"></m:defJc>   <m:wrapIndent m:val=\"1440\"></m:wrapIndent>   <m:intLim m:val=\"subSup\"></m:intLim>   <m:naryLim m:val=\"undOvr\"></m:naryLim>  </m:mathPr></w:WordDocument></xml><![endif]--><!--[if gte mso 9]><xml> <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"true\"  DefSemiHidden=\"true\" DefQFormat=\"false\" DefPriority=\"99\"  LatentStyleCount=\"267\">  <w:LsdException Locked=\"false\" Priority=\"0\" SemiHidden=\"false\"   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Normal\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"false\"   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"heading 1\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 2\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 3\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 4\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 5\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 6\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 7\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 8\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 9\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 1\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 2\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 3\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 4\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 5\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 6\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 7\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 8\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 9\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"35\" QFormat=\"true\" Name=\"caption\"></w', NULL, '', 'yes', 'Paul Bunyemba', 0, 1411631643, 'published'),
(24, 'IBADA YA SHUKRANI UJIO WA  MV. JUBILEE HOPE', '<!--[if gte mso 9]><xml> <o:OfficeDocumentSettings>  <o:TargetScreenSize>800x600</o:TargetScreenSize> </o:OfficeDocumentSettings></xml><![endif]--><p class=\"MsoNormal\" style=\"margin-top:12.0pt;margin-right:0in;margin-bottom:12.0pt;margin-left:0in\"><span style=\"color:black\">Kanisa la Afica Inland ChurchTanzania siku ya Jumamosi 27, Sept 2014 lilifanya ibada maalum ya shukrani katika badari ya Mwanza North ijulikanayo kwa jina la bandari ya â€œcustomâ€.</span></p><p class=\"MsoNormal\" style=\"margin-top:12.0pt;margin-right:0in;margin-bottom:12.0pt;margin-left:0in\"><span style=\"color:black\">Katiki ibada hiyo alihudhulia Mkuu wa Mkoa wa Geita, Askofu Mkuu Msaidizi Musa Magwesela ambaye pia ni Askofu wa AICT dayosisi ya Geita. Pia walikuwepo Wachungaji, Kwaya na Wageni mbalimbali.</span></p><p class=\"MsoNormal\" style=\"margin-top:12.0pt;margin-right:0in;margin-bottom:12.0pt;margin-left:0in\"><b style=\"mso-bidi-font-weight:normal\"><span style=\"font-size:10.0pt;color:red\">Taarifa fupi kuhusiana na ujio wa Mv. Jubilee Hope/Medical Ship.</span></b></p><p class=\"MsoNormal\" style=\"margin-top:12.0pt;margin-right:0in;margin-bottom:12.0pt;margin-left:0in\">Mv. Jubilee Hope ni chombo ambacho kimepatikana kupitia ushirikiano wa Shirika la kijamii huko Uingereza liitwalo Vine Trust na Kanisala Africa Inland Church Tanzania Dayosisi ya Geita.</p><p class=\"MsoNormal\" style=\"margin-top:12.0pt;margin-right:0in;margin-bottom:12.0pt;margin-left:0in\">Ushirikiano huu ulianza mwishoni mwa mwaka 2012. Lengo lake kuu ni kutoa huduma za afya ya msingi katika Visiwa vya Ziwa Victoria vilivyoko katika Mikoa ya Geita, Kagera na Mwanza upende wa nchi ya Tanzania. Kanisa limekuwa likitoa huduma za kiroho katika Visiwa hivi kwa takribani miaka 50. Mpaka sasa Kanisa linavyo vituo vya afya katika visiwa vitatu ambavyo ni Kanoni, Ikuza naBumbire. Huduma hiyo kwa ujumla imekuwa haitosherezi mahitaji ya huduma za afya katika visiwa zaidi ya 70 vilivyoko ndani ya ziwa Victoria kwa upande waTanzania.</p><p class=\"MsoNormal\" style=\"margin-top:12.0pt;margin-right:0in;margin-bottom:12.0pt;margin-left:0in\">Kwa mara ya kwanza habari hizi zilizungumzwa na Mch.Willie Mcphason ambaye ndiye Mkurugenzi wa Vine Trust na Mch. Justine Oforo ambaye ni Mtanzania. Lengo la Vine Tust ilikuwa ni kuipeleka Meli hii katika Ziwa Nyasa. Mazungumzo yao yalithibitisha uhitaji mkubwa uliokuwepo katika Visiwa vingi vya Ziwa Victoria na hasa katika upande wa Tanzania ambao una eneo kubwa la kilometa za Maraba.</p><p class=\"MsoNormal\" style=\"margin-top:12.0pt;margin-right:0in;margin-bottom:12.0pt;margin-left:0in\">Habari hizi baadaye zilidondoka katika masikio ya Dr.Richard Mwambo ambaye ni Mkurugenzi wa CSSC kanda ya Ziwa na katika hatua za utekelezaji, Baba Askofu Musa Magwesela alipata taarifa na kuchukua hatua za ufuatiliaji mpaka kufikia hatua hii tuliyo nayo leo. Mv Jubilee Hope, ina jumlaya uzito wa tani 178, urefu wa mita 24 ilijengwa upya huko Gilbraltar mwaka 2012.</p><p class=\"MsoNormal\" style=\"margin-top:12.0pt;margin-right:0in;margin-bottom:12.0pt;margin-left:0in\">Meli ina jumla ya vyumba vya Waganga viwili, chumba chaupasuaji mdogo pamoja na huduma ya Meno, Maabara ndogo na pharmacy.</p><p><span style=\"font-size:12.0pt;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\";mso-ansi-language:en-us;mso-fareast-language:en-us;mso-bidi-language:ar-sa\"=\"\">Kwa utaratibu wa kawaida, meli itatembelea visiwa nakutoa huduma za afya kwa muda wa wiki tatu na baadaye meli itarudi bandalini kwa muda wa wiki moja kwa lengo la kuchukua mahitaji ya mzunguko unaofuata. Ingawa katika mwaka wa kwanza meli itazunguka kwa wiki mbili na baadaye wiki mbili Bandarini.</span></p><!--[if gte mso 9]><xml> <w:WordDocument>  <w:View>Normal</w:View>  <w:Zoom>0</w:Zoom>  <w:TrackMoves></w:TrackMoves>  <w:TrackFormatting></w:TrackFormatting>  <w:PunctuationKerning></w:PunctuationKerning>  <w:ValidateAgainstSchemas></w:ValidateAgainstSchemas>  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>  <w:DoNotPromoteQF></w:DoNotPromoteQF>  <w:LidThemeOther>EN-US</w:LidThemeOther>  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>  <w:Compatibility>   <w:BreakWrappedTables></w:BreakWrappedTables>   <w:SnapToGridInCell></w:SnapToGridInCell>   <w:WrapTextWithPunct></w:WrapTextWithPunct>   <w:UseAsianBreakRules></w:UseAsianBreakRules>   <w:DontGrowAutofit></w:DontGrowAutofit>   <w:SplitPgBreakAndParaMark></w:SplitPgBreakAndParaMark>   <w:EnableOpenTypeKerning></w:EnableOpenTypeKerning>   <w:DontFlipMirrorIndents></w:DontFlipMirrorIndents>   <w:OverrideTableStyleHps></w:OverrideTableStyleHps>  </w:Compatibility>  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>  <m:mathPr>   <m:mathFont m:val=\"Cambria Math\"></m:mathFont>   <m:brkBin m:val=\"before\"></m:brkBin>   <m:brkBinSub m:val=\"--\"></m:brkBinSub>   <m:smal', NULL, '', 'yes', 'Paul Bunyemba', 0, 1411985941, 'published'),
(25, 'Ibada ya kuwekwa Wakfu na kusimikwa Kazini Ask. Mteule John Bunango Mditi', '<!--[if gte mso 9]><xml> <o:OfficeDocumentSettings>  <o:AllowPNG></o:AllowPNG> </o:OfficeDocumentSettings></xml><![endif]--><p class=\"MsoNormal\" style=\"margin-top:6.0pt;margin-right:0in;margin-bottom:6.0pt;margin-left:0in;line-height:normal\"><span style=\"font-size:11.0pt\">Kanisa la AICT Dayosisi ya Mwanza litakua na ibada Maalumu ya kuwekwa wakfu na kusimikwa kazini Askofu Mteule John Bunango Mditi kuwa Askofu wa Dayosisi ya Mwanza.Ibada itaanza tarehe 16-19, Octoba, 2014 kwenye Uwanja wa CCM Kirumba.</span></p><p class=\"bt-2\" style=\"margin-top:6.0pt;margin-right:0in;margin-bottom:6.0pt;margin-left:0in;text-indent:0in;line-height:normal\">Askofu John Bunango Mditi atakuwa Askofu wa Tatu wa AICT Dayosisi ya Mwanza inayo jumuisha makanisa yote ya AICT yaliyomo katika Mikoa ya Mwanza, (Wilaya za Nyamagana, Ilemela, Magu,Kwimba, Misungwi na Mkoa wa Simiyu (Wilaya ya Busega). Baada ya Askofu Daniel Nungwana aliyekuwepo kustaafu mwaka July, 2013.</p><p class=\"bt-2\" style=\"margin-top:6.0pt;margin-right:0in;margin-bottom:6.0pt;margin-left:0in;text-indent:0in;line-height:normal\">Askofu Mteule John Bunango Mditi kabla ya kuchaguliwa awe Askofu wa dayosisi ya Mwanza <span style=\"font-size:10.0pt\">alifanya kazi ya Uinjilisti katika kanisa la AICT Kola. Aliwekwa katika kazi ya uchungaji wa Africa Inland Church Tanzania Septemba,1997 katika kanisa la AICT Nzenga mkoani Tabora na Askofu John Kanoni Nkola wa AICT Dayosisi ya Shinyanga. Mwaka 1999 Baraza la Utendaji la AICT Dayosisi ya Shinyanga lilimteua kuwa Kaimu Katibu Mkuu wa Dayosisi ya Shinyanga. Aliajiriwa rasmi kuwa katibu Mkuu wa dayosisi kwa muda wa miaka kumi. </span></p><p class=\"BasicParagraph\" style=\"margin-top:6.0pt;margin-right:0in;margin-bottom:6.0pt;margin-left:0in;text-align:justify;text-indent:14.15pt;line-height:normal;mso-hyphenate:none\"><span style=\"font-size:10.0pt;font-family:\" times=\"\" new=\"\" roman\",\"serif\"\"=\"\">Na ndipo baadae amefanya kazi kama mwalimu wa Chuo cha Biblia<span style=\"mso-spacerun:yes\">&nbsp; </span>Katungulu, wilayani Sengerema kazi ambayo alikuwa anaendelea kuifanya hadi Septemba, 2014 alipochaguliwa na Sinodi Kuu ya AICT kuwa Askofu wa Dayosisi ya Mwanza.</span></p><span style=\"font-size:10.0pt;line-height:115%;font-family:\" times=\"\" new=\"\" roman\",\"serif\";mso-fareast-font-family:\"times=\"\" roman\";mso-ansi-language:en-us;mso-fareast-language:en-us;mso-bidi-language:ar-sa\"=\"\">Ibaada hii inatalajiwa kuudhuliwa na Maaskofu wote wa kanisa la AICT, viongozi wa Makanisa mbalimbali na viongozi wa Kiserikali.</span><!--[if gte mso 9]><xml> <w:WordDocument>  <w:View>Normal</w:View>  <w:Zoom>0</w:Zoom>  <w:TrackMoves></w:TrackMoves>  <w:TrackFormatting></w:TrackFormatting>  <w:AutoHyphenation></w:AutoHyphenation>  <w:PunctuationKerning></w:PunctuationKerning>  <w:ValidateAgainstSchemas></w:ValidateAgainstSchemas>  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>  <w:DoNotPromoteQF></w:DoNotPromoteQF>  <w:LidThemeOther>EN-US</w:LidThemeOther>  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>  <w:Compatibility>   <w:BreakWrappedTables></w:BreakWrappedTables>   <w:SnapToGridInCell></w:SnapToGridInCell>   <w:WrapTextWithPunct></w:WrapTextWithPunct>   <w:UseAsianBreakRules></w:UseAsianBreakRules>   <w:DontGrowAutofit></w:DontGrowAutofit>   <w:SplitPgBreakAndParaMark></w:SplitPgBreakAndParaMark>   <w:EnableOpenTypeKerning></w:EnableOpenTypeKerning>   <w:DontFlipMirrorIndents></w:DontFlipMirrorIndents>   <w:OverrideTableStyleHps></w:OverrideTableStyleHps>  </w:Compatibility>  <m:mathPr>   <m:mathFont m:val=\"Cambria Math\"></m:mathFont>   <m:brkBin m:val=\"before\"></m:brkBin>   <m:brkBinSub m:val=\"--\"></m:brkBinSub>   <m:smallFrac m:val=\"off\"></m:smallFrac>   <m:dispDef></m:dispDef>   <m:lMargin m:val=\"0\"></m:lMargin>   <m:rMargin m:val=\"0\"></m:rMargin>   <m:defJc m:val=\"centerGroup\"></m:defJc>   <m:wrapIndent m:val=\"1440\"></m:wrapIndent>   <m:intLim m:val=\"subSup\"></m:intLim>   <m:naryLim m:val=\"undOvr\"></m:naryLim>  </m:mathPr></w:WordDocument></xml><![endif]--><!--[if gte mso 9]><xml> <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"true\"  DefSemiHidden=\"true\" DefQFormat=\"false\" DefPriority=\"99\"  LatentStyleCount=\"267\">  <w:LsdException Locked=\"false\" Priority=\"0\" SemiHidden=\"false\"   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Normal\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"false\"   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"heading 1\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 2\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 3\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 4\"></w:LsdException>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 5\"></w:LsdException>  <w:LsdExcep', NULL, '', 'yes', 'Paul Bunyemba', 0, 1413186691, 'published'),
(26, 'SIKU TATU ZA MAAZIMISHO YA MIAKA 21 YA AICT DAYOSISI YA MWANZA TAR 16-19 OCTâ€™ 2014', '<!--[if gte mso 9]><xml> <o:OfficeDocumentSettings>  <o:TargetScreenSize>800x600</o:TargetScreenSize> </o:OfficeDocumentSettings></xml><![endif]--><p class=\"MsoNormal\">Kanisa la AICT Dayosisi ya Mwanza linaendela na Maazimishoya kutimiza miaka 21 yanayofanyika katika Uwanja wa CCM Kirumba jijini Mwanza. <span style=\"mso-spacerun:yes\">&nbsp;</span>Akihubiri leo asubuhi <span style=\"mso-spacerun:yes\">&nbsp;</span>kutoka kitabu cha â€œZaburi 51, Wak. 1:23, Yon.12:48, Isaya 54:7-8, Math 18:18 â€ juu ya â€œIMANI YA KWELIâ€. Askofu Mkuu MstaafuDaniel Nungwana alisema:<br>â€œâ€¦ Imani ya kweli ni kumwamini kabisa Kristo aliye kufa Msalabani na kufufukana sasa yu haiâ€¦<br>â€œâ€¦ Imani iyokoayo uendana na toba ya kweliâ€¦<br>â€œâ€¦ Imani iokoayo ni utii. Ujitoa katika utakasoâ€¦<br>â€œâ€¦ Imani iokoayo ni tunda la rohoâ€¦<br>â€œâ€¦ Toba ya dhati inazaa msamaha wa kweliâ€¦<br>â€œ â€¦ Asili ya Neno la Mungu ni Mungu Mwenyewe.<br>â€œâ€¦ Neno lina uweza wa Mungu.</p><p class=\"MsoNormal\">Askofu Mkuu Mtaafu wa AICT Danilie Nungwana akihubiri kwaujasiri alifafanua maisha ya watumishi wa Mungu kutoka kwenye Biblia ambao waliishina waliamini Neno la Mungu Mfano: Ibrahimu, Mfalme Daud, Yusph, Paulo na Petro.</p><p class=\"MsoNormal\">Katika ibada hiyo ya asubuhi watu zaidi ya 100 walirudi kwaBwana na kumkili Yesu Kristo kuwa Bwana na Mwokozi wa maisha yao.</p><p class=\"MsoNormal\">Katika muedelezo wa ibada ya maazimsisho ya miaka 21 yaDayosisi ya Mwaza. Akihubiri katika ibada ya jana Jioni kutoka kwenye â€œNENO KUUkitabu cha Zab. 51 na Efe 2:10, Warumi 2:1-2â€ Askofu wa AICT Dayosisi ya PWANICharles Salala alifafanua jinsi Mfalme Daud alivyo anguka dhambini akisema:<br>â€œâ€¦<span style=\"mso-spacerun:yes\">&nbsp; </span>Mfalme Daud alimkosea Mungualipotegemea jeshi lake na si Kumtegea Mungu<br>â€œâ€¦ Mfalme Daud alianguka kwenye dhambi ya zinaa<br>â€œâ€¦ Mfalme Daud alikili na kusema<span style=\"mso-spacerun:yes\">&nbsp;</span>â€¦Nimemtenda Bwana Dhambiâ€¦<br>Katika mahubiri yake Askofu Charles Salala alieleza jinsi Mfalme Daud alivyoomba msamaha baada ya kuangua dhambini akisema:<br>* Uifanye upya roho iliyotualia ndani yangu<br>* Ee Mungu uniumbie moyo safi uifanye upya roho yangu<br>* Daud akili dhambi kuharibu maisha yake<br>* Usinitenge na roho wako<br>* Ee Mungu niponye na dhambi na kinywa changu kitaimba nyimbo za kukusifu wewe<br>* Nikiisha samehewa kazi yangu itakuwa kuwafundisha wakosaji NENO lako</p><p class=\"MsoNormal\">Pia Askofu Salalah katika mahubiri yake alisema â€œIbada yakweli ni ya roho iliyo vunjikaâ€¦â€<br>Katika ibada hiyo watu zaidi ya 30 walimrudia Bwana na kumkili Yesu kuwa mwokoziwa maisha yao.</p><!--[if gte mso 9]><xml> <w:WordDocument>  <w:View>Normal</w:View>  <w:Zoom>0</w:Zoom>  <w:TrackMoves/>  <w:TrackFormatting/>  <w:PunctuationKerning/>  <w:ValidateAgainstSchemas/>  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>  <w:DoNotPromoteQF/>  <w:LidThemeOther>EN-US</w:LidThemeOther>  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>  <w:Compatibility>   <w:BreakWrappedTables/>   <w:SnapToGridInCell/>   <w:WrapTextWithPunct/>   <w:UseAsianBreakRules/>   <w:DontGrowAutofit/>   <w:SplitPgBreakAndParaMark/>   <w:EnableOpenTypeKerning/>   <w:DontFlipMirrorIndents/>   <w:OverrideTableStyleHps/>  </w:Compatibility>  <w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel>  <m:mathPr>   <m:mathFont m:val=\"Cambria Math\"/>   <m:brkBin m:val=\"before\"/>   <m:brkBinSub m:val=\"&#45;-\"/>   <m:smallFrac m:val=\"off\"/>   <m:dispDef/>   <m:lMargin m:val=\"0\"/>   <m:rMargin m:val=\"0\"/>   <m:defJc m:val=\"centerGroup\"/>   <m:wrapIndent m:val=\"1440\"/>   <m:intLim m:val=\"subSup\"/>   <m:naryLim m:val=\"undOvr\"/>  </m:mathPr></w:WordDocument></xml><![endif]--><!--[if gte mso 9]><xml> <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"true\"  DefSemiHidden=\"true\" DefQFormat=\"false\" DefPriority=\"99\"  LatentStyleCount=\"267\">  <w:LsdException Locked=\"false\" Priority=\"0\" SemiHidden=\"false\"   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"Normal\"/>  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"false\"   UnhideWhenUsed=\"false\" QFormat=\"true\" Name=\"heading 1\"/>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 2\"/>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 3\"/>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 4\"/>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 5\"/>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 6\"/>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 7\"/>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 8\"/>  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 9\"/>  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"toc 1\"/>  <w:LsdExcept', NULL, '', 'yes', 'Paul Bunyemba', 0, 1413637259, 'published'),
(27, 'Hitimisho la Maazimisho Miaka 21 ya AICT Dayosisi Mwanza', 'Katikaibada iliyoendelea jioni ya tar 18 Oct, 2014 kwenye maazimisho ya miaka 21 yaAICT dayosisi ya Mwanza. Askofu John Nkola aliendelea kuhuburi NENO KUU kutokakatika kitabu cha Zaburi 51. Askofu alifafanua zaidi juu ya Msamaha wa dhambiakasema, Mfalme Daud baada ya kutambua amemkosea Mungu aliji nyenyekeza mbeleza Mungu ili atakaswe, aoshwe dhambi zake. Daud wakati akiomba toba baada yakuanguka dhambini akutanguliza umaarufu wake au cheo chake. Mtu anapokua nadhambi isiyo tubiwa anakosa sifa ya kuwarejesha watu kwa Mungu. Tukitaka kuishikatika amani ya kweli lazima tuishi maisha ya toba:<br>- Daud alitambua amekosa mbele za Mungu<br>- Daud alitambua Mungu ana nguvu ya kusamehe dhambi<br>- Daud aliomba msamaha kama mkosaji<br>- Daud alipokua na dhambi isiyo tubiwa ali hisi mifupa yake kupondwa na kuwadhaifu<br>Wakati wa ibada hiyo ya jioni watu zaidi ya 30 walimrudia Kristo.<br><br>Keshoitakua siku ya mwisho ya maazimisho ya miaka 21 ya Dayosisi ya Mwanza. Kutakuana ibada maalumu ya kumuweka wakfu na kumsimika kazini Askofumteule John Bunango Mditi amabe atakuwa Askofu wa Tatu wa AICT Dayosisi yaMwanza. Baada ya Askofu Daniel Nungwana aliyekuwepo kustaafu mwaka July, 2013.<br>Dayosisi hii ina jumuisha makanisa yote ya AICTyaliyomo katika Mikoa ya Mwanza, (Wilaya za Nyamagana, Ilemela, Magu,Kwimba,Misungwi na Mkoa wa Simiyu (Wilaya ya Busega).<br>', NULL, '', 'yes', 'Paul Bunyemba', 0, 1413662785, 'published'),
(28, 'KILELE CHA MAAZIMISHO MIAKA 21 YA AICT DAIYOSISI YA MWANZA', 'Akiwahutubia Waumini wa dhehebu la Kikristo Katika kilele cha maazimisho ya sherehe ya kutimiza miaka 21 tangu kuanzishwa kwa Kanisa la AICT dayosisi ya Mwanza, Mgeni rasmi Mhe DKT. Mohammed Gharib Bilal, makamo wa Rais wa Jamhuri ya Muungano wa Tanzania alisema:&nbsp; Nawapongeza Kanisa la AICT kwa jitihada katika kupanua wigo wa shunguli zake mbalimbali.<br>Nijambo la kutia moyo kanisa hili limefikisha idadi ya waumini wanakadiriwa kufikia Millioni moja na jumla ya makanisa 2,069 kote nchini. Kitendo cha kuanzisha AIC Congo na jitihada za kuanzisha Uinjilisti nchini Msumbiji, sanjari na kupeleka huduma zake nchini Burundi, ni ushuhuda wa kujivunia wa kazi njema inayofanywa na kanisa hili. <br>Moja ya mambo muhimu ninalopenda kukumbushana na kusisitiza sana siku ya leo, ni amani ya Taifa letu. Vitabu vitakatifu vinafundisha na kusisitiza amani kwa wanadamu. Watu wetu wanahitaji amani. Ili taifa letu lisonge mbele linaitaji amani yetu. Amani ni sharti la kwanza katika kuleta maendeleo ya wanadamu. Hatuwezi kupanga mipango yoyote ya maendeleo kama nchi yetu haina amani. Sisi katika Serikali tunalo jukumu kubwa kuhakikisha tunasimamia, kulinda na kudumisha amani ya taifa letu kwa gharamaa yoyote ile na kamwe hatutaruhusu amani ya taifa letu ichezewe.<br>Katika kilele cha maanzisho hayo pia kulifanyika ibada maalumu ya kumuweka wakfu na kumsimika kazini Askofu John Bunango Mditi kuwa Askofu wa Tatu wa AICT dayosisi ya Mwanza. Akihubiri kwenye ibada hiyo kitabu cha Zaburi 51, Askofu Mkuu wa AICT Silas Keza-Kubi alisema:<br>- Daud alikuwa hodari na shujaa<br>- Wakati Daud anaandika Zab. 51 pamoja na kuwa Mtawala wa Nchi alijua amemkosea Mungu akaomba kusamehewa<br>- Daud alitawala maisha yake kwa kumtegemea Mungu<br>- Mungu ametuleta duniani ametupa uhuru wa kuchagua tuishi maisha mema au mabaya. Na tusipo mfuata Mungu tutawajibika.<br>- Agizo la Mungu anatutaka tufanye kazi. Watu wanataka utajiri bila ya kufanya kazi<br>- Ukitaka utajiri uwe na bidii ya kufanya kazi.<br>Pia Askofu Mkuu wa AICT aliwahasa vijana akisema, vijana wananguvu watumie nguvu zao kwenye shughuli za uzalishaji waboreshe maisha yao na kujiletea maendeleo.<br>Pia Askofu Mteule John Bunango akiwashukuru Maaskofu, Viongozi wa Serikali, Wachungaji na Waumini wote walikuwepo kwenye sherehe hizo alisema:<br>- Kanisa limewekwa na Mungu ili kuiudumia jamii, kuhubiri injiri ili watu wapate kuokolewa<br>- Aliwaomba Wakristo kuishi maisha ya utakatifu. Mahubiri ya matendo ni makubwa kuliko mahubiri ya maneno<br>- Kanisa liendelee kuunga juhudi za shughuli za maendeleo katika jamii yetu kama elimu, afya na umaskini.<br>- Aliiomba Serikali kusimamia msingi wa uhuru wa mtu kuambudu bila kuvunja sharia ya nchi<br>- Aliiomba Serikali isiingize sheria ya dini yeyote ile katika katiba ya nchi yetu<br>- Aliiomba Serikali iangalie usalama wa viongozi wa dini na waumini, vitendo vya kulipua majengo ya ibada na kuumizwa waumini vikomeshwe na Serikali<br>- Aliomba Serikali kuwapa kanisa kipaumbele kuwagawia aridhi wajenge nyumba za ibada<br>- Aliomba Serikali iipunguzie kanisa kodi ya ardhi kwa sababu kanisa linatoa huduma zisizo na faida hivyo kanisa linakosa fedha ya kulipia kodi ya ardhi<br>-Aliomba Serikali iendelee kuunga mkono juhudi za maendeleo zinazofanywa na kanisa kama huduma za afya na elimu. Kama itawezekana Serikali ilipe sehemu ya mishahara ya Walimu wanaofundisha kwenye shule za dini maana wao pia ni wadau wa sekta ya elimu.<br><br>', NULL, '', 'yes', 'Paul Bunyemba', 0, 1413885647, 'published'),
(29, 'SIKU NNE ZA MAADHIMISHO YA MIAKA 20 YA AICT DAYOSISI YA MARA NA UKEREWE TAR 06-09, NOVâ€™ 2014', 'Kanisa la AICT Dayosisi ya Mara na Ukerewe litakua na Maadhimisho ya kutimiza miaka 20 ya Dayosisi ya AICT MARA &amp; UKERERWE tangu kuanzishwa Mwaka 1993. Sherehe hizo zitafanyika katika Uwanja wa Karume wa CCM Musoma.&nbsp; Mstari Mkuu katika maadhimisho hayo ni kutoka katika kitabu cha Waefeso 1:3&nbsp; <i>â€˜Atukuzwe Mungu, Baba wa Bwana wetu Yesu Kristo, aliyetubariki kwa baraka zote za rohoni, katika ulimwengu wa roho, ndani yake Kristoâ€™</i><br><br>Mgeni rasmi katika sherehe hizo atakua Askofu Mkuu Silas Yego kutoka AIC Kenya atashirikiana na Maaskofu wote wa AIC Tanzania katika kuhubiri Neno la Mungu. Pia, kutakuwa na kwaya mbalimbali ambazo zitaiba na kumsifu Mungu.<br><br>Aidha, katika maadhimisho hayo kutakua na tukio maalumu la UZINDUZI wa kitabu cha HISTORIA YA AICT DAYOSISI YA MARA &amp; UKEREWE. Kitabu hicho kinazungumzia shughuli za maendeleo ambazo zimefanyika tangu Dayosisi ilipoanzishwa mwaka 1993. kitabu hicho kinaelezea vizuri&nbsp; maisha na michango ya kazi walizofanya watumishi mbalimbali wa AICT Dayosisi ya Mara na Ukerewe.<br><br>', NULL, '', 'yes', 'Paul Bunyemba', 0, 1415091075, 'published'),
(30, 'UFUNGUZI WA MADARASA NA OFISI YA CHUO CHA UUGUZI KOLANDOTO.', '<span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 12px;\">Ufunguzi wa madarasa na ofisi ya <b style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 12px;\">chuo cha uuguzi AICT Kolandoto</b>, ulifanyika tarehe 31/10/2014 katika eneo la Chuo cha Uuguzi cha Kolondoto, dayosisi ya Shinyanga. Mgeni rasmi alikuwa Askofu Mkuu wa AICT Silas Kezakubi, ambaye alifuatana na Katibu Mkuu wa AICT Mch Zakayo Bugota. Uzinduzi ulihudhuliwa pia na viongozi wa Idara ya Afya kama vile Mwenyekiti wa Bodi, Mkurugenzi mkuu Dkt Shadrack Watugala, Mkuu wa Chuo cha uuguzi Kolandoto Ndg Daudi Malimi, pamoja na madkitari, wauguzi, waumini wa AICT na watu mbalimbali.</span>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1415365186, 'published'),
(31, 'UTOAJI WA VYETI KWA WAHITIMU WA MAFUNZO YA UUGUZI KOLANDOTO.', '<h2 style=\"margin-top: 10px; margin-bottom: 10px; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 31.5px;\"><span style=\"font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 12px; font-weight: normal; line-height: 20px;\">Mahafali ya kutoa vyeti kwa wahitimu wa Mafunzo ya uuguzi katika chuo cha Kolandoto yalifanyika tarehe 31/10/2014 Kolandoto Shinyanga. Vyeti vilitolewa na Askofu Mkuu, Silas Kezakubi kwa wahitimu wote wa mafunzo hayo. Sherehe hio ilihudhuriwa na Katibu Mkuu, Mwenyekiti wa bodi ya afya, Mkurugenzi wa Idara ya Afya, Mkuu wa Chuo, wafanyakazi, viongozi na watu mbalimbali. Kupata picha za matukio tafadhari tazama katika gallery ya tovuti.</span></h2>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1415365422, 'published'),
(32, 'UFUNGUZI WA MADARASA NA OFISI YA CHUO CHA UUGUZI KOLANDOTO.', '<p><br></p><p>Ufunguzi wa madarasa na ofisi ya chuo cha uuguzi AICT Kolandoto, ulifanyika tarehe 31/10/2014 katika eneo la Chuo cha Uuguzi cha Kolondoto, dayosisi ya Shinyanga. Mgeni rasmi alikuwa Askofu Mkuu wa AICT Silas Kezakubi, ambaye alifuatana na Katibu Mkuu wa AICT Mch Zakayo Bugota. Uzinduzi ulihudhuliwa pia na viongozi wa Idara ya Afya kama vile Mwenyekiti wa Bodi, Mkurugenzi mkuu Dkt Shadrack Watugala, Mkuu wa Chuo cha uuguzi Kolandoto Ndg Daudi Malimi, pamoja na madkitari, wauguzi, waumini wa AICT na watu mbalimbali. Kupata picha zaidi za tukio tafadhari tembelea gallery yetu kupitia linki ifuatayo:&nbsp;http://aictanzania.org/Gallery</p><p><br></p><p>i</p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1415463546, 'unpublished'),
(33, 'SIKU NNE ZA MAADHIMISHO YA MIAKA 20 YA AICT DAYOSISI YA MARA NA UKEREWE TAR 06-09, NOVâ€™ 2014.', '<p><font color=\"#000000\" face=\"arial\" size=\"3\"><span style=\"line-height: normal; background-color: rgb(85, 85, 85);\">Kanisa la <b style=\"line-height: normal; background-color: rgb(85, 85, 85);\">AICT Dayosisi ya Mara na Ukerewe</b> lipo katika Maadhimisho ya kutimiza miaka 20 ya Dayosisi ya AICT MARA &amp; UKERERWE tangu kuanzishwa Mwaka 1993. Sherehe hizo zinafanyika katika Uwanja wa Karume wa CCM Musoma. <i style=\"line-height: normal; background-color: rgb(85, 85, 85);\"><b style=\"line-height: normal; background-color: rgb(85, 85, 85);\">&nbsp;Mstari Mkuu katika maadhimisho haya ni kutoka katika kitabu cha Waefeso 1:3 &nbsp;â€˜Atukuzwe Mungu, Baba wa Bwana wetu Yesu Kristo, aliyetubariki kwa baraka zote za rohoni, katika ulimwengu wa roho, ndani yake Kristoâ€™</b></i></span></font></p><p><font color=\"#000000\" face=\"arial\" size=\"3\"><span style=\"line-height: normal; background-color: rgb(85, 85, 85);\"><br></span></font></p><p><font color=\"#000000\" face=\"arial\" size=\"3\"><span style=\"line-height: normal; background-color: rgb(85, 85, 85);\">Mgeni rasmi katika sherehe hizo ni Askofu Mkuu Silas Yego kutoka AIC Kenya anashirikiana na Maaskofu wote wa AIC Tanzania katika kuhubiri Neno la Mungu. Pia maadhimisho haya yameambatana na &nbsp;kwaya mbalimbali ambazo zinaimba na kumsifu Mungu.Kuweza kupata picha za matukio mbalimbali tafadhari tembelea upande wa gallery wa tovuti hii au nenda moja kwa moja kwenye ukurasa wetu wa facebook kupitia: https://www.facebook.com/AICTanzania</span></font></p><p><font color=\"#000000\" face=\"arial\" size=\"3\"><span style=\"line-height: normal; background-color: rgb(85, 85, 85);\"><br></span></font></p><p><font color=\"#000000\" face=\"arial\" size=\"3\"><span style=\"line-height: normal; background-color: rgb(85, 85, 85);\">.</span></font></p>', NULL, '', 'yes', 'andrew mawanda', 0, 1415464491, 'unpublished'),
(34, 'SIKU NNE ZA MAADHIMISHO YA MIAKA 20 YA AICT DAYOSISI YA MARA NA UKEREWE TAR 06-09, NOVEMBER 2014.', '<p>Kanisa la AICT <b>Dayosisi ya Mara na Ukerewe</b> lipo katika Maadhimisho ya kutimiza miaka 20 ya Dayosisi ya AICT MARA &amp; UKERERWE tangu kuanzishwa Mwaka 1993. Sherehe hizo zinafanyika katika Uwanja wa Karume wa CCM Musoma. <b><i>&nbsp;Mstari Mkuu katika maadhimisho haya ni kutoka katika kitabu cha Waefeso 1:3 &nbsp;â€˜Atukuzwe Mungu, Baba wa Bwana wetu Yesu Kristo, aliyetubariki kwa baraka zote za rohoni, katika ulimwengu wa roho, ndani yake Kristoâ€™</i></b></p><p>Mgeni rasmi katika sherehe hizo ni Askofu Mkuu Silas Yego kutoka AIC Kenya anashirikiana na Maaskofu wote wa AIC Tanzania katika kuhubiri Neno la Mungu. Pia maadhimisho haya yameambatana na &nbsp;kwaya mbalimbali ambazo zinaimba na kumsifu Mungu.Kuweza kupata picha za matukio mbalimbali tafadhari tembelea upande wa gallery wa tovuti hii au nenda moja kwa moja kwenye ukurasa wetu wa facebook kupitia: https://www.facebook.com/AICTanzania.</p><p><br></p><p><br></p><p><br></p>', NULL, '', 'yes', 'andrew mawanda', 0, 1415464838, 'unpublished'),
(35, 'SIKU NNE ZA MAADHIMISHO YA MIAKA 20 YA AICT DAYOSISI YA MARA NA UKEREWE TAR 06-09, NOVEMBER 2014.', '<p>Kanisa la AICT <b>Dayosisi ya Mara na Ukerewe</b> lipo katika Maadhimisho ya kutimiza miaka 20 ya Dayosisi ya AICT MARA &amp; UKERERWE tangu kuanzishwa Mwaka 1993. Sherehe hizo zinafanyika katika Uwanja wa Karume wa CCM Musoma. <b><i>&nbsp;Mstari Mkuu katika maadhimisho haya ni kutoka katika kitabu cha Waefeso 1:3 &nbsp;â€˜Atukuzwe Mungu, Baba wa Bwana wetu Yesu Kristo, aliyetubariki kwa baraka zote za rohoni, katika ulimwengu wa roho, ndani yake Kristoâ€™</i></b></p><p>Mgeni rasmi katika sherehe hizo ni Askofu Mkuu Silas Yego kutoka AIC Kenya anashirikiana na Maaskofu wote wa AIC Tanzania katika kuhubiri Neno la Mungu. Pia maadhimisho haya yameambatana na &nbsp;kwaya mbalimbali ambazo zinaimba na kumsifu Mungu.Kuweza kupata picha za matukio mbalimbali tafadhari tembelea upande wa gallery wa tovuti hii au nenda moja kwa moja kwenye ukurasa wetu wa facebook kwa kubonyeza <a href=\"https://www.facebook.com/AICTanzania\">hapa</a>.</p><p><br></p><p><br></p>', NULL, '', 'yes', 'andrew mawanda', 0, 1415465296, 'published');
INSERT INTO `news` (`article_id`, `article_title`, `article_description`, `article_cat`, `pdf_file`, `headline`, `poster`, `cstatus`, `timestamp`, `published`) VALUES
(36, 'SHEREHE ZA MAADHIMISHO YA MIAKA 20 YA DAYOSISI YA MARA & UKEREWE', 'Kanisa la AICT dayosisi ya Mara na Ukerewe limefanya Sherehe za maadhimisho ya miaka 20 tangu kuanzishwa mwaka 1993. Katika maadhimisho hayo kulifanyika matukio maalumu kama uzinduzi wa kitabu cha historia ya AICT dayosisi ya Mara &amp; Ukerewe, watumishi wa muda mrefu kanisani walitunukiwa vyeti na zawadi na pia, vijana walio timiza umri sawa na dayosisi walipewa zawadi ya kitabu cha historia ya dayosisi ya Mara &amp; Ukerewe.<br><br>Katika mahubiri yake ya tarehe 7, Nov. 2014 kwenye maazimisho hayo mgeni rasmi Askofu Mkuu wa AIC Kenya Silas Yego aliwashukuru uongozi wa kanisa la AIC Tanzania kwa ushirikiano wao, Wachungaji, Wainjilist na waimbaji kwa nyimbo nzuri walizo ziimba.<br><br>Akihubiri kutoka kitabu cha Waefeso alisema:<br>-&nbsp;&nbsp; &nbsp;Kitabu cha Waefeso kinazungumzia mambo mengi, lakini jambo kubwa kinazungumzia mpango wa Mungu kwa kanisa. Kanisa ambalo linaitwa taifa jipya. Kanisa ambalo limepewa mfano wa kufananishwa na familia.<br>-&nbsp;&nbsp; &nbsp;Waefeso 1:3, â€˜Atukuzwe Mungu, Baba wa Bwana wetu Yesu Kristo, aliyetubariki kwa baraka zote za rohoniâ€¦â€™<br>-&nbsp;&nbsp; &nbsp;Mwanzo 1:28-29 â€˜Mungu akawabarikiaâ€¦â€™ Mpango wa Mungu alipo waumba wanadamu ulikuwa kuwabari. Mungu alikusudia mwanadamu aishi maisha ya Baraka. Lakini kwa sababu ya dhambi ikavunja Baraka zetu. Lakini Paul katika kitabu hiki amesema Atukuzwe Mungu, Baba wa Bwana wetu Yesu Kristo ambaye amerudisha baraka zetu.<br>-&nbsp;&nbsp; &nbsp;Wakristo ni jamii, kundi moja jipya lenye ushirika.<br>-&nbsp;&nbsp; &nbsp;Hapo zamani tulikuwa tumetengwa na Mungu kwa ajiri ya kuwa na dhambi.<br>-&nbsp;&nbsp; &nbsp;Kupitia mwokovu sisi sasa tumekuwa karibu na Mungu<br>-&nbsp;&nbsp; &nbsp;Jamii ya kikristo imeretwa katika ushirika wa Yesu Kristo, damu ya Yesu ndio upatanisho kamili<br>-&nbsp;&nbsp; &nbsp;Yesu mwenyewe ni Amani yetu<br>-&nbsp;&nbsp; &nbsp;Wakristo wamepatanishwa na Mungu kupitia damu ya Yesu Kristo<br>-&nbsp;&nbsp; &nbsp;Tofauti kati ya jamii ya kikristo na jamii nyingine ni kuwa jamii ya Kikristo ni jamii ya kifalme, jamii ya kikristo ni jamii ya ki-tukufu<br>-&nbsp;&nbsp; &nbsp;Wakristo si wageni mbinguni, bali wana hesabiwa kuwa wenyeji mbinguni pamoja na watakatifu mbinguni<br>-&nbsp;&nbsp; &nbsp;Wakristo ni hekalu la Mungu, mmejengwa juu ya Mitume na Manabii, Naye Kristo ni jiwe kuu la pembeni. Hekalu alikai na dhambi lazima Wakristo wajisafishe mara kwa mara<br><br>Katika mahubiri hayo watu zaidi ya 60 walimpokea Yesu na kuwa Mwokozi wa maisha yao.<br><br>', NULL, '', 'yes', 'Paul Bunyemba', 0, 1415695884, 'published'),
(37, 'ZIARA YA KIKAZI YA ASKOFU MKUU WA AICT KATIKA IDARA ZA KANISA LA AICT', '<p>Askofu Mkuu Silas Keza Kubi wa AICT alifanya ziara ya kikazi kwenye idara mbili za kanisa ambazo ni idara ya Maandiko (Inland Press na Publishers) na idara ya Ufundi na Tekinologia. Katika ziara yake aliambatana na Askofu John Bunango wa AICT Dayosisi ya Mwanza , Zakayo Bugota Katibu mkuu kiongozi (AICT) na Joseph Malangahe msaidizi wa mhasibu mkuu AICT<br />\r\nKatika ziara hiyo, Askofu mkuu alisomewa risara na viongozi wa idara hizo kuwa Idara zinakabiliwa na changamoto kubwa tatu.<br />\r\nâ€¢Â Â  Â Viwanda vimeachwa na mabadiliko ya Tekinoloji ya kisasa<br />\r\nâ€¢Â Â  Â Uchakavu wa mashine na miundo mbinu<br />\r\nâ€¢Â Â  Â Ukosefu wa mitaji<br />\r\nAidha, Askofu Mkuu wa AICT akihutubia na kujibu hoja mbali mbali katika ziara yake alisema. Kiwanda cha Inland Press kina historia ndefu katika kanisa la AICT. Kiwanda kilianzishwa na Wamishonari waliokuwa chini ya usimamizi wa shirika la AIM ambalo makao yake makuu yalikuwa Nairobi Kenya. Kiwanda cha Inland Press kilianzia huko Luhumbo na baadaye kilihamishiwa Bwiru, Mwanza kati ya Mwaka 1959 na 1960.<br />\r\nAskofu Keza Kubi aliendelea kusema, Madhumuni ya ziara yake katika idara za kanisa ni kuhimiza uwajibikaji wa kazi na mali za kanisa ambayo alisema ni mali ya Mungu. Mali zote zilizoko Kolandoto, Majaida, Nassa, Mkula, Katungulu Kazilankanda na kwingineko ni mali za kanisa sisi tupo tu kama mawakili. Je, kanisa ni nani? Kanisa ni Wakristo wote wa AICT. Hivyo wenye mali ni Wakristo wote wakiwemo na Wafanyakazi wa idara.</p>\r\n\r\n<p>Mali yote itunzwe na itumiwe vizuri ili ilete heshima na furaha katika mioyo ya Wakristo wa AICT. Askofu Mkuu aliendelea kufafanua kuwa ni wajibu wake kutembelea idara za kanisa kuona kazi zinazoendelea na kuhimiza uwajibikaji, akawaomba wafanyakazi wa idara kusoma kitabu cha Waebrania â€˜Watiini wenye kuwaongoza, na kuwanyenyekea; maana wao wanakesha kwa ajili ya roho zenu, kama watu watakaotoa hesabu, ili kwamba wafanye hivyo kwa furaha wala si kwa kuugua; maana isingewafaa ninyiâ€™. Waebrania 13:17<br />\r\nAskofu Mkuu alisema ameshtushwa na idadi ndogo ya Wafanya kazi wa Press waliopo kwa sasa.</p>\r\n\r\n<p>Askofu mkuu aliendelea kusema, Wakati idara za kanisa zilipo anzishwa na Wamisionari zilikuwa zinafanya vizuri kwa sababu Wamishionari walikuwa wana wakaguzi wao kutoka ofisi yao kuu iliyokuwa Nairobi. Tangu Wamishionari walipo wakabidhi wazalendo idara za kanisa sasa hazi fanyi kazi vizuri.</p>\r\n\r\n<p>Pia, Askofu Mkuu alisema, Idara ya Ufundi na Tekinologia ilianzishwa kwa madhumuni ya kutoa ajira kwa wakristo wa AICT na kufundisha vijana ili wapate elimu ya ufundi. Askofu Mkuu akijibu risara za Wafanyakazi wa Idara hizo alisema, Uongozi wa Kanisa la AICT utasaidia kutatua changamoto zilizopo kwenye idara ila idara zitoe ushirikiano mzuri. Kanisa litajitahidi kuwasiliana na taasisi za fedha hapa nchini kuona kama kuna uwezekano wa kupata mkopo wa riba nafuu ili uwasaidie katika mtaji wa uendeshaji wa shughuli za idara za kanisa.</p>\r\n\r\n<p>Â </p>', NULL, '', 'yes', 'Paul Bunyemba', 0, 1423124061, 'published'),
(38, 'Maaskofu wahudhuria mazishi ya Mzee Andrew Yohana Kinuno', '<p><strong>Askofu Mkuu Silas Kezakubi</strong>, ambaye pia ni Askofu wa Dayosisi ya Tabora, na <strong>Askofu</strong> <strong>John Kanoni Nkola</strong> wa Dayosisi ya Shinyanga hivi karibuni walihudhuria ibada ya mazishi ya Mkristo mjini Tabora. Askofu John Kanoni Nkola alihuri katika mazishi hayo ya <strong>Mzee Andrew Yohana Kinuno</strong> ambaye alifariki tarehe 10-8-2015 na kuzikwa 12-8-2015. MzeeKinuno alikuwa mstari wa mbele katika shughuri nzima ya uanzishwaji wa AICT Dayosisi ya Tabora hapo 2006 na hivyo kuwa karibu sana na viongozi hao wa kanisa. Katika mahubiri yake, <em>Askofu Nkola aliwaasa wakristo wafuate mfano wa Mzee Kinuno wa kubaki katika Imani licha ya changamoto&nbsp;</em><span style=\"line-height:1.6\"><em>nyingi za maisha zinazowakabili katika wakati huu ambazo alizilinganisha na birika lenye moto</em>.</span></p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1439644200, 'published'),
(39, 'Faragha ya Maaskofu na wake wao Morogoro.', '<p>Hivi karibuni maaskofu wote sita wa Africa Inland Church Tanzania pamoja na wake zao walikuwa na faragha ya maombi katika kituo cha Sanga Sanga kinachoendeshwa na Dayosisi ya Pwana ya kanisa hilo. Faragha hiyo ya siku tatu ilikuwa ya maandalizi ya Mkutano wa kuadhimisha miaka 20 ya dayosisi hiyo ya Pwani. Maombi hayo ya faragha yalianza Novemba 23 hadi 25, na tarehe 26 maaskofu hao pamoja na wenzi wao walisafiri kwenda Dar-es-Salaam tayari kwa kuanza kwa maadhimisho kesho yake.&nbsp;</p>\r\n\r\n<p>Mhubiri katika wa faragha hiyo alikuwa ni Mchugaji Tonny Surgent kutoka Wingereza. Wakati wa kuhitimisha faragha hiyo, mgeni huyo alisisitiza umuhimu wa watumishi wa kada mbali mbali katika kanisa, na hasa walioko katika maeneo ambayo kanisa bado ni change, kupata mafunzo ya kazi zao. Aliahidi kuendelea kuiombea Dayosisi ya Pwani na kanisa zima la Africa Inland Church Tanzania kuwa na vituo vya kutolea mafunzo ya namna hiyo.</p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1450006261, 'published'),
(40, 'Askofu Mkuu Atembelea Kituo cha AICT Vijana-Geita', '<p>Askofu Mkuu wa AICT Silas Kezakubi alifanya ziara ya kikazi kwenye kituo cha vijana AICT kilichomo katika mji wa Geita. Ziara hiyo ambayo ilianza Novemba 10 na kukamilika 11, 2015 ilielezwa kuwa ndiyo ya kwanza kufanywa na Askofu Mkuu aliyeko madarakani katika historia ya kituo hicho. Katika ziara hiyo, Askofu Mkuu aliiagiza Bodi kukamirisha ujenzi wa upanuzi wa nyumba ya wageni ambao umekuwa ukiendelea kwa zaidi ya mwaka mmoja hivi sasa bila ya kukamilika. Aliagiza ujenzi huo ukamilike kabla ya mwezi Augusti 2016 au sivyo kanisa litachukua hatua. Aidha alionyesha mshango kuwa idara hiyo hivi sasa inaendeshwa na wazalendo takribani kwa miaka arobaini lakini mishindwa kuongeza raslimali hivyo kuendelea kutumia zile tu zilizojengwa na wamisionari.</p>\r\n\r\n<p>Kituo cha vijana cha Geita, ambacho ndiyo mhimili mkubwa katika uendeshaji wa shughuri za idara ya vijana katika kanisa hilo kutokana na uzalishaji wake, kinavyo vitengo vikubwa vitatu. Ketengo cha kwanza ni nyumba ya wageni (hostel) ambayo imekuwa chanzo cha mapato kwa idara hiyo tangu miaka ya 70. Nyumba hii, ambayo ilijengwa kwa msaada wa makanisa ya Ujerumani imeendelea kutoa huduma kwa wageni wengi wanaokuja katika mji wa Geita. Kitengo hiki kimekuwa kikifanyiwa upanuzi zaidi ya mwaka hivi sasa.</p>\r\n\r\n<p>Kitengo cha pili ni karakana ambayo inahusu ufundishaji wa kutengeneza vifaa vya mbao (furniture) na vifaa vya chuma. Kitengo hiki kimesajiriwa na VETA kutoa mafuzo ya ufundi kwa vijana. Hadi sasa kinao wanafuzi kumi katika sehemu zote mbili.</p>\r\n\r\n<p>Kitengo cha tatu ni kile cha tiba asili (ANIMED) na kiwanda kidogo cha kusindika mafuta. Kitengo hiki, ambachi kwa sasa kinaendeshwa na mmishenari bado kichanga. Hata hivyo kinaendelea kufahamika. Kwa kulingana na&nbsp;</p>\r\n\r\n<p>maelezo ya uongozi wa kitengo, madhumuni yake ni kutibu kwa kutumia dawa za asili na kuwafundisha wateja&nbsp; wao na kuwahimiza kupanda miti hiyo kwa tiba yao na jirani zao.</p>\r\n\r\n<p>Kituo pia kinalo shamba zuri kwa ajili ya kilimo ambalo, hata hivyo, mazo yake hayako katika hali nzuri. Kiongozi huyo wa kanisa aliagiza uongozi utafute mtalaam wa kilimo wa kutoa ushauri ili shamba hilo lipate kutumika vizuri.</p>\r\n\r\n<p>Awali, akitoa taarifa ya kituo hicho cha vijana, Mratibu wa idara ya vijana wa kanisa Mchungaji Abel Lugayila, alisema nyumba ya wageni imewezesha kupata fedha za kuwalipa waratiby wote wa idara hiyo walioko katika Dayosisi zote sita. Aidha, Alisema mradi wa karakana umewezesha vijana wa kanisani na wale wa nje kupata ajira. Akichangia katika kikao hicho cha pamoja, mmoja wa wana bodi wa kituo hicho alitahadharisha juu ya kukaribisha baadhi ya watu kupanga katika majengo na maeneo ya idara hiyo bila mikataba mizuri.</p>\r\n\r\n<p>Bodi pamoja na wafanyakazi walimshukuru Askofu Mkuu kufanya ziara hiyo na kikao hicho cha pamoja kilihitimishwa kwa sala ya mtu mmoja.</p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1450025004, 'published'),
(41, 'Askofu Charles Salala Afanya Ziara ya Kikazi Katika Dayosisi ya Tabora', '<p><b>Askofu Charles Salala wa AICT Dayosisi ya Pwani, akiwa ameambatana na mkewe</b>, hivi karibuni alifanya ziara ya kikazi katika AICT Dayosisi ya Tabora. Akiwa katika ziara hiyo, ambayo ilianza December 19, 2015 na kukamilika January 4, 2016, Askofu Salala alibariki na kuwaingiza kazini wachungaji wawili ambao ni Mchungaji Simon Kuhanda wa kanisa la Usevya katika Mkoa wa Katavi, Wilaya ya Mulele na Mchungaji Daniel Malale wa kanisa la Mwamapuli katika Mkoa huo huo na Wilaya hiyo hiyo. Aidha, katika kipindi hicho chote, Askofu alihubiri katika makanisa 12 na kuweka mawe ya msingi kwenye majengo 6. Kiongozi huyo wa kanisa alihitimisha ziara yake kwa kubariki ndoa kumi na moja katika kanisa la Katavi lililoko kwenye mji wa Mpanda Mkoani katavi.</p><p>Wakizungumzia tukio hilo, baadhi ya wakristo katima eneo alilolitembelea Askofu Salala walielezea furaha yako kubwa kuona jinsi viongozi wao wanavyoweza kushirikiana katika kuliogoza kanisa. â€œTumefurahi mno kuona kuwa&nbsp;Askofu wa Pwani anaweza kuja kutuhudumia na bila shaka wa Tabora anaweza kuhudumia Pwaniâ€, mama mmoja alisikika akisema.</p><p>&nbsp;</p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1452014468, 'published'),
(42, 'TAMKO LA KANISA LA AICT KUHUSU KUKAMATWA KWA WAFANYAKAZI WA HOSPITALI TEULE YA KOLANDOTO', '<p><b>Hivi karibuni, gazeti moja litolewalo mara moja kwa juma hapa nchini lilichapisha habari juu ya kushikiliwa na TAKUKURU kwa watumishi watatu wa Hospitari Teule ya Kolandoto iliyoko Shinyanga.</b> Hospitali hii, ambayo ni ya kanisa la Africa Inland Church, Tanzania, ilifunguliwa mwaka 1913 na baadaye mwaka 1950 ilianzisha mafunzo ya Ukunga.</p><p>Mwaka 2013 kanisa liliingia mkataba na serikali na kuifanya Hospitali ya Kolandoto kuwa ni Hospitali Teule na hivyo kuweza kupata ruzuku ya serkali. Mwezi Mei mwaka huu watumishi watatu wa hospitali hiyo walishikiliwa na TAKUKURU baada ya tasisi hiyo kufanya ukaguzi hapo hospitalini. <b>Siku moja baada ya watumishi hao kukamatwa, Askofu Mkuu wa kanisa hilo, Askofu Silas Kezakubi, pamoja na Katibu wake Mkuu, Mchungaji Zakayo Bugota walifika Kolandoto ili kufahamu chanzo cha kukamatwa kwa watumishi hao.</b> Kutokana na vikao ilibainika kuwa chanzo cha kushikiliwa kwa watumishi hao ilikuwa ni ukaguzi uliofanywa na taasisi hiyo ya fedha za ruzuku kutoka serikalini.</p><p>&nbsp;Kwa kuwa kanisa halina njia ya kupata taarifa za taasisi ya serikali, Askofu Mkuu, kwanza, aliiomba Kamisheni ya Kikristo â€“ Christian Social Services Commission (CSSC) ambayo ndiyo mratibu wa mikata yote ya namna hii kati ya serikali na makanisa, wapate kuuangalia mkataba wa ushirikiano huo umesema nini linapotokea jambo la namna hii na kufanya mawasiliano na viongozi husika serikalini na kulipa kanisa taarifa. Pili, Askofu Mkuu aliagiza Mkaguzi wa ndani wa kanisa aende Kolandoto mara moja kufanya ukaguzi, na hasa juu ya matumizi ya fedha husika na kuleta taarifa.&nbsp; Taarifa hizo zote zitakapokamilika na kufikishwa Makao Makuu ya kanisa ndipo kanisa la Africa Inland Tanzania litakuwa na kitu cha kuzungumza. <b>Kwa hivi sasa kanisa bado halijatoa kauli juu ya jambo hili.</b></p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1465575238, 'published'),
(43, 'Askofu Dr Nkola Aanza Rasmi Mchakato wa Kustafuu', '<p>&nbsp;</p>\r\n\r\n<p><img alt=\"Bishop John Kanoni Nkola\" src=\"https://scontent-lhr3-1.xx.fbcdn.net/v/t34.0-12/13515197_1007947572614213_994708640_n.jpg?oh=455eba738c20b4d21e91daf19185c2f0&amp;oe=576B9313\" style=\"height:746px; width:497px\" /><strong>Askofu Dr. John Kanoni Nkola wa Dayosisi ya Shinyanga</strong>, AICT, ametangaza rasmi kuanza kwa mchakato wa mwaka mmoja wa kustaafu uongozi. Tamko hilo alitoa kwenye ibada maalum ya kuuzindua mchakato huo iliyofanyika<strong> Jumapili ya tarehe 5 Juni, 2016 katika kanisa kuu la Kambalage mjini Shinyanga.</strong> Akitangaza kuanza kwa mchakato huo, Askofu Dr. Nkola alisema,<em> &ldquo;Miaka 23 iliyopita, Bwana, kupitia uongozi wa kanisa, alinipatia jukumu la kuongoza Dayosisi hii. Na kazi hiyo nimeifanya kwa kumtii na kumwogopa Mungu.&rdquo;</em> Aliwashukuru &nbsp;wakristo wote, hususani wa kanisa &nbsp;kuu, kwa ushirikiano &nbsp;mzuri na mkubwa waliompatia katika kipindi chote hicho. Aliongeza, <em>&ldquo;Busara yenu na upendo wenu hakika vilinifanya niifurahie kazi hii&quot;.</em></p>\r\n\r\n<p><img alt=\"Bishop Silas M Kezakubi\" src=\"https://scontent-lhr3-1.xx.fbcdn.net/v/t34.0-12/13511381_1007947845947519_687491396_n.jpg?oh=1e11f4e25955167b913f75f13e771a66&amp;oe=576B303C\" style=\"height:671px; width:504px\" /><strong>Askofu Mkuu wa kanisa la AICT, akiwa kwenye uzinduzi wa mchakato wa kumuaga Askofu wa Dayosisi ya Shinyanga John Kanon Nkola&nbsp;<img src=\"file:///C:\\Users\\USER\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image001.jpg\" /></strong></p>\r\n\r\n<p>Askofu Mkuu wa kanisa hilo, Silas Kezakubi ndiye alikuwa mhubiri katika ibada hiyo. Katika mahubiri yake, Askofu Kezakubi aliwahimiza wakristo wote kushrikiana na uongozi wa kanisa hilo katika kuweka njia madhubuti za kuwatunza watumishi wa kanisa hapo wanapostaafu.<em> &ldquo;Mungu hafurahii kuona watu waliotoa maisha yao kumtumikia Yeye, na wakatumika hadi kuishiwa nguvu, baadaye wanapostaafu wanaishi kwa machozi.&rdquo;</em> Aliongeza kuwa utaratibu uliopo kwa sasa ni wastaafu hao kutunzwa na Pastorate au Doyosisi wanamoishi. Alibainisha kuwa, <em>&ldquo;utaratibu huo umeshindwa kwani pastorate nyingi hazina uwezo wa kumtunza mtumishi anayezihudumia na pia kumtunza mstaafu&rdquo;.</em> Alieleza kuwa njia nzuri ilikuwa kuwekeza katika majengo kwenye viwanja vyetu na kuweka kando sehemu ya mapato ya majengo hayo kwa kuwatunza wastaafu.</p>\r\n\r\n<p><img alt=\"Askofu Nkola akiwa na Mchungaji\" src=\"https://scontent-lhr3-1.xx.fbcdn.net/v/t34.0-12/13515220_1007947502614220_957224195_n.jpg?oh=fdcca24f2f88d5a11fa2501eecec1c08&amp;oe=576B6AA1\" style=\"height:717px; width:538px\" /></p>\r\n\r\n<p><strong><img src=\"file:///C:\\Users\\USER\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image002.jpg\" /></strong><span style=\"line-height:1.6\"><strong>Awali, Katibu Mkuu wa Dayosisi hiyo, Mchungaji Jacob Pambana</strong> alitoa ufafanuzi juu ya namna kanisa litakavyomuaga wakati wa kustaafu. Akimkaribisha Askofu Dkt Nkola ili azungumze na wakristo waliokuwa wamefurika katika viwanja vya kanisa Kuu, Katibu Mkuu Pambana alisema, <em>&ldquo;Baba Askofu Dkt Nkola atastaafu kwa heshima tarehe 24 Oktoba, 2017 kipindi ambapo kanisa la Mungu AICT Dayosisi ya Shinyanga tutafanya Mkutano Mkuu wa Injili na sherehe za kustaafu kwake&rdquo;</em>. Wachungaji zaidi ya hamsini kutoka pande zote za Dayosisi hiyo walifika kuhudhuria ibada hiyo</span></p>\r\n\r\n<p><img alt=\"Waumini wa kanisa la AICT wakiwa na furaha\" src=\"https://scontent-lhr3-1.xx.fbcdn.net/v/t34.0-12/13487484_1007947262614244_1845810830_n.jpg?oh=225962b23775459dfbc75092a8c2e1d9&amp;oe=576B94E0\" style=\"height:600px; width:799px\" /></p>\r\n\r\n<p><strong>Waumini wa kanisa hilo walifurika mapema kwenye viwanja vya kanisa Kuu wakiwa na shauku kubwa kuwaona na kuwasikia viongozi wao wa kiroho.</strong> Vikundi mbali mbali vya kwaya vilitumbuiza kwenye sherehe hiyo, kikiwemo kikundi cha wapiga tarumpeta. Baada ya ibada, wakati wa jioni, kwaya ziliendelea kutumbuiza na hatimaye sherehe hiyo ilikamilirishwa kwa walimu wa kwaya wote waliokuwepo kuanzisha umoja wao. Huu ndiyo umoja wa kwanza kabisa kuundwa na waalimu wa kwaya katika kanisa la AICT. Askofu Dkt Nkola, ambaye ndiye aliyesimamia uanzishwaji huo alieleza matumaini yake kuwa waalimu wengine wa kwaya watajiunga na umoja huo. Waalimu wa kwaya wamekuwa na mchango mkubwa katika kuendeleza katika kanisa la AICT.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"file:///C:\\Users\\USER\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image003.jpg\" /></p>\r\n\r\n<p><img src=\"file:///C:\\Users\\USER\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image004.jpg\" /></p>\r\n\r\n<p><img src=\"file:///C:\\Users\\USER\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image005.jpg\" /></p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1466523024, 'unpublished'),
(44, 'Askofu Dr Nkola Aanza Rasmi Mchakato wa Kustafuu', '<p><img alt=\"Bishop John Kanoni Nkola\" src=\"https://scontent-lhr3-1.xx.fbcdn.net/v/t34.0-12/13521676_1797871430444651_1974710707_n.jpg?oh=262d201c8be734ee0904be055a8cba61&amp;oe=576BB06E\" style=\"height:506px; width:497px\" /></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Askofu Dr. John Kanoni Nkola wa Dayosisi ya Shinyanga, AICT</strong>, ametangaza rasmi kuanza kwa mchakato wa mwaka mmoja wa kustaafu uongozi. Tamko hilo alitoa kwenye ibada maalum ya kuuzindua mchakato huo iliyofanyika Jumapili ya tarehe 5 Juni, 2016 katika kanisa kuu la Kambalage mjini Shinyanga. Akitangaza kuanza kwa mchakato huo, Askofu Dr. Nkola alisema,<em> &ldquo;Miaka 23 iliyopita, Bwana, kupitia uongozi wa kanisa, alinipatia jukumu la kuongoza Dayosisi hii. Na kazi hiyo nimeifanya kwa kumtii na kumwogopa Mungu.&rdquo;</em> Aliwashukuru &nbsp;wakristo wote, hususani wa kanisa &nbsp;kuu, kwa ushirikiano &nbsp;mzuri na mkubwa waliompatia katika kipindi chote hicho. Aliongeza,<em> &ldquo;Busara yenu na upendo wenu hakika vilinifanya niifurahie kazi hii.&rdquo; <img src=\"file:///C:\\Users\\USER\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image001.jpg\" /></em></span></p>\r\n\r\n<p><img alt=\"Bishop Silas M Kezakubi\" src=\"https://scontent-lhr3-1.xx.fbcdn.net/v/t34.0-12/13510562_1797872393777888_1936630378_n.jpg?oh=74841a95eec96d85897f6da0772b885f&amp;oe=576B682E\" style=\"height:516px; width:501px\" /></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Askofu Mkuu wa kanisa hilo, Silas Kezakubi</strong> ndiye alikuwa mhubiri katika ibada hiyo. Katika mahubiri yake, Askofu Kezakubi aliwahimiza wakristo wote kushrikiana na uongozi wa kanisa hilo katika kuweka njia madhubuti za kuwatunza watumishi wa kanisa hapo wanapostaafu. <em>&ldquo;Mungu hafurahii kuona watu waliotoa maisha yao kumtumikia Yeye, na wakatumika hadi kuishiwa nguvu, baadaye wanapostaafu wanaishi kwa machozi.&rdquo; </em>Aliongeza kuwa utaratibu uliopo kwa sasa ni wastaafu hao kutunzwa na Pastorate au Doyosisi wanamoishi. Alibainisha kuwa,<em> &ldquo;utaratibu huo umeshindwa kwani pastorate nyingi hazina uwezo wa kumtunza mtumishi anayezihudumia na pia kumtunza mstaafu&rdquo;.</em> Alieleza kuwa njia nzuri ilikuwa kuwekeza katika majengo kwenye viwanja vyetu na kuweka kando sehemu ya mapato ya majengo hayo kwa kuwatunza wastaafu.</span></p>\r\n\r\n<p><img src=\"file:///C:\\Users\\USER\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image002.jpg\" /><img alt=\"Bishop John Kanoni Nkola akiwa na Katibu wa dayosisi\" src=\"https://scontent-lhr3-1.xx.fbcdn.net/v/t34.0-12/13521747_1797872947111166_65748991_n.jpg?oh=01fc459a5d2725ec32e1747b13bf9b53&amp;oe=576B4E74\" style=\"height:457px; width:537px\" /></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Awali, Katibu Mkuu wa Dayosisi hiyo, Mchungaji Jacob Pambana </strong>alitoa ufafanuzi juu ya namna kanisa litakavyomuaga wakati wa kustaafu. Akimkaribisha Askofu Dkt Nkola ili azungumze na wakristo waliokuwa wamefurika katika viwanja vya kanisa Kuu, Katibu Mkuu Pambana alisema,<em> &ldquo;Baba Askofu Dkt Nkola atastaafu kwa heshima tarehe 24 Oktoba, 2017 kipindi ambapo kanisa la Mungu AICT Dayosisi ya Shinyanga tutafanya Mkutano Mkuu wa Injili na sherehe za kustaafu kwake&rdquo;.</em> Wachungaji zaidi ya hamsini kutoka pande zote za Dayosisi hiyo walifika kuhudhuria ibada hiyo</span></p>\r\n\r\n<p><img alt=\"Waumini wa kanisa la AICT\" src=\"https://scontent-lhr3-1.xx.fbcdn.net/v/t34.0-12/13510475_1797873300444464_99510862_n.jpg?oh=fa260e4696b46c3dd1a0d9f2cbc245df&amp;oe=576B4E1A\" style=\"height:441px; width:799px\" /></p>\r\n\r\n<p><span style=\"font-size:14px\"><strong>Waumini wa kanisa hilo walifurika mapema kwenye viwanja vya kanisa Kuu wakiwa na shauku kubwa kuwaona na kuwasikia viongozi wao wa kiroho.</strong> Vikundi mbali mbali vya kwaya vilitumbuiza kwenye sherehe hiyo, kikiwemo kikundi cha wapiga tarumpeta. Baada ya ibada, wakati wa jioni, kwaya ziliendelea kutumbuiza na hatimaye sherehe hiyo ilikamilirishwa kwa walimu wa kwaya wote waliokuwepo kuanzisha umoja wao. Huu ndiyo umoja wa kwanza kabisa kuundwa na waalimu wa kwaya katika kanisa la AICT. Askofu Dkt Nkola, ambaye ndiye aliyesimamia uanzishwaji huo alieleza matumaini yake kuwa waalimu wengine wa kwaya watajiunga na umoja huo. Waalimu wa kwaya wamekuwa na mchango mkubwa katika kuendeleza katika kanisa la AICT.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><img src=\"file:///C:\\Users\\USER\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image003.jpg\" /></p>\r\n\r\n<p><img src=\"file:///C:\\Users\\USER\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image004.jpg\" /></p>\r\n\r\n<p><img src=\"file:///C:\\Users\\USER\\AppData\\Local\\Temp\\msohtmlclip1\\01\\clip_image005.jpg\" /></p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1466524690, 'unpublished'),
(45, 'Askofu Dr Nkola Aanza Rasmi Mchakato wa Kustafuu', '<p><img alt=\"Bishop Kanoni Daniel Nkola\" src=\"https://lh3.googleusercontent.com/NLdKIF4_H-m5rq1X1QjcNCB_6SMCpXrFZVudPe0hwGJtgoTQAxfzRhJSdU8GnnLjCiJZ5QG7o9r7o-6ByKCAAvNzZCrXnWrC1R4HOelxfV4ceJ8iYTrcsoh2R9d5Toh17_HweNYgTPBXVuZBELZptaHjCWb1UsD0NZlBNqlwHYEXpXle3arebLJdPHYrg51J380ZXQGH-MIzeobaRTq28IjOpVS2G7DWb83C51ISXA5KaV6qrjQrNnZSCfgpS9aaCr3eOkL3AwDzxXTk0wrReWblPgGo9-h24a1oydm4ll_ri_vPhi69nE-W4XpwWfPD3ucsOKp13bouoFHTIRGqL1pjy36sQBnsoITx9ssvVEWkgg61YkbzmZJ0jADflQvxJ4KQsYMZADHxw9z96rRwP1eRiY_jBwcGc1v7GSbfpzWOrjT_YCHShfjxlw82mLizIW6HHBZp1Eo0EeJa4OtVljKet5KeoIqak1zsh3QWV0-fLjc4u96_iIJb0fSAnnPGUKojuFqka6QZRdO0vbSjnA04owIwEBeBz4PjAMU6WN2cYV8ydx28eH4jm9A-_vmy0igdMAS_RrHp8gZUJosVmZeJeVVdA7o=w497-h506-no\" style=\"height:506px; width:497px\"></p><p><b>Askofu Dr. John Kanoni Nkola wa Dayosisi ya Shinyanga, AICT</b><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px\">, ametangaza rasmi kuanza kwa mchakato wa mwaka mmoja wa kustaafu uongozi. Tamko hilo alitoa kwenye ibada maalum ya kuuzindua mchakato huo iliyofanyika Jumapili ya tarehe 5 Juni, 2016 katika kanisa kuu la Kambalage mjini Shinyanga. Akitangaza kuanza kwa mchakato huo, Askofu Dr. Nkola alisema,</span><i>&nbsp;â€œMiaka 23 iliyopita, Bwana, kupitia uongozi wa kanisa, alinipatia jukumu la kuongoza Dayosisi hii. Na kazi hiyo nimeifanya kwa kumtii na kumwogopa Mungu.â€</i><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px\">&nbsp;Aliwashukuru &nbsp;wakristo wote, hususani wa kanisa &nbsp;kuu, kwa ushirikiano &nbsp;mzuri na mkubwa waliompatia katika kipindi chote hicho. Aliongeza,</span><i>&nbsp;â€œBusara yenu na upendo wenu hakika vilinifanya niifurahie kazi hii.â€&nbsp;<img src=\"file:///C:/Users/USER/AppData/Local/Temp/msohtmlclip1/01/clip_image001.jpg\" style=\"border:0px; box-sizing:border-box; vertical-align:middle\"></i></p><p><img alt=\"Bishop Silas Kezakubi\" src=\"https://lh3.googleusercontent.com/Og1IAtjHgk4V0Gs8VswnkenriL3gz4nhlx7g_O9hHuDx-_ZgebL-mKB1Zoa5JPXvcrhnadodapOLrMo9VsVkMdt_-ZT4De1pDbZrMaHV3no6CvgA7M9ZFn_J2lT-xl2rROuGkDx5XXIOf8WykgOeJPZ0VwoycQcQmNn3I9mJxPvqaPHx1LEuODQiB5Uz0uB6TubnbbUZq8rCvd6t6JMTVvR5J4atcFhoIDONWu1EBQ5PYSF0pDhP2s2qLHPP63uqXizZ1apIj9kC1If3swxk7ZV-qlT5W29VOegPxzILlJEcRM-M3svT5Zau8zFgKJIIwLK7a3ieJudyoYjrH3DeTV2-I1jBQA7MySZT_Z1m6cU7eDxmokFdJWsLKe4-KwC1N4WuzIVOCjjFqcSnLjHXpRxkyLo0_si45PBOJlNqT44VWY4tz7_89FOJXqkQ8UrolX7jYfguXYD9mozW-gdIOuIOc_lt9IctD17odNWqkZpntGmocP8eo1JTWKagqZ1GCAdIw-yoEi2CPwIJJH9-Yosuv6f8C0y7KV3aURI5He8qy-gJTyu23NJke4xkhSWeaL9YqShWIPGvnpWSkcaH5VIra4M4q6s=w501-h516-no\" style=\"height:516px; width:501px\"></p><p><b>Askofu Mkuu wa kanisa hilo, Silas Kezakubi</b><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px\">&nbsp;ndiye alikuwa mhubiri katika ibada hiyo. Katika mahubiri yake, Askofu Kezakubi aliwahimiza wakristo wote kushrikiana na uongozi wa kanisa hilo katika kuweka njia madhubuti za kuwatunza watumishi wa kanisa hapo wanapostaafu.&nbsp;</span><i>â€œMungu hafurahii kuona watu waliotoa maisha yao kumtumikia Yeye, na wakatumika hadi kuishiwa nguvu, baadaye wanapostaafu wanaishi kwa machozi.â€&nbsp;</i><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px\">Aliongeza kuwa utaratibu uliopo kwa sasa ni wastaafu hao kutunzwa na Pastorate au Doyosisi wanamoishi. Alibainisha kuwa,</span><i>&nbsp;â€œutaratibu huo umeshindwa kwani pastorate nyingi hazina uwezo wa kumtunza mtumishi anayezihudumia na pia kumtunza mstaafuâ€.</i><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px\">&nbsp;Alieleza kuwa njia nzuri ilikuwa kuwekeza katika majengo kwenye viwanja vyetu na kuweka kando sehemu ya mapato ya majengo hayo kwa kuwatunza wastaafu.</span></p><p><img alt=\"Bishop Nkola akiwa na Katibu wa Dayosisi ya Shinyanga\" src=\"https://lh3.googleusercontent.com/66dsYwFWCvhKKd840xdBkB5g1bnRteF9IVMxGAl7M73jabXK9DLMr2UFKKburJ8_cHac0r4MUdosIuuT4x2A45UsWNshSYTjQoTqd5D9uR1iviw4x_q1G_eMwiRx_cP2Gzrr_2kg4orUXF4st_4Ch03tX6PWUdeGH65NsT1-cPHNafgdZoUAjPmeVbIrT9RCQmv7gCu-ETkhEOIU-PhH2YGAsgQA4o3BNUmSejVAgSfWOJ2d55ehvEmsU-SA5v0AbMrz-2dv9a98iheNihvWH3IGAZwLqBYxy7aCAr9DDGGeBD-gdyjKL_vA6bea_t5KpMbo0QnxGpLCnarT7xrALgtGiDBHgOy3XY-ERRIy6Eh2P-7e1bkmIIUX92ag1LnVclMH0jLLl5wMcI4oXJ6llMJvs6KtUsTXI3mI-BMShfGx9gGZuBMeKpY6qoaWyumkwZKrM1gor_TCK9Yzi5aJvChOv2H5YbdQr0FbiqOSDEA6tiYXW9NRf0WNtpsxXq9rb_9FD93GuYRVmxWS_ukkPY9tKl5syBb1s72ii3u7KKq5py6ghur2c7KF7CtCkPtVYd-aSG3l5xRJHNncUXat6VCchTvXJdY=w537-h457-no\" style=\"height:457px; width:537px\"></p><p><b>Awali, Katibu Mkuu wa Dayosisi hiyo, Mchungaji Jacob Pambana&nbsp;</b><span style=\"color:rgb(68, 68, 68); font-family:helvetica neue,helvetica,arial,sans-serif; font-size:14px\">alitoa ufafanuzi juu ya namna kanisa litakavyomuaga wakati wa kustaafu.&nbsp;</span></p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1467147980, 'published'),
(48, 'sample title', '<p>sample article so never mind</p>', NULL, '', 'no', 'andrew mawanda', 0, 1491161942, 'canceled'),
(49, 'AZIMIO LA BARAZA LA UTENDAJI LA SINODI KUU YA AICT DHIDI YA WATUMISHI WA KANISA WALIOPELEKEA KUUZWA KWA SHULE YA SEKONDARI YA ASKOFU NKOLA (BISHOP NKOLA SECONDARY SCHOOL)', '<p style=\"text-align: center;\"><b style=\"text-align: center;\">Askofu Mkuu wa Kanisa la AICT Tanzania, Silas M. Kezakubi akiwa anatoa taarifa ya baraza la utendaji la sinodi kuu ya AICT katika kanisa la Kambarage Shinyanga, leo asubuhi.</b></p><p><br></p><p>Katika kikao chake cha dharura kilichofanyika Makongoro, Mwanza Machi 8, 2017 <b>kufuatia kuuzwa kwa Shule ya Sekondari ya Askofu Nkola (Bishop Nkola Secondary School)</b>, Baraza la Utendaji la Sinodi Kuu ya AICT liliunda Tume Huru kuchunguza sababu na mazingira yaliyopelekea hasara na upotevu wa mali hiyo isiyoondosheka na hivyo kuleta aibu kubwa kwa kanisa. Shule hiyo ya kanisa iliuzwa kwa njia ya Mnada mnamo Februari 23, 2017 baada ya Dayosisi hiyo ya Shinyanga kushindwa kurejesha CRDB mkopo wa kiasi cha TZS 400,000,000.00 (Milioni Mia Nne) ambao shule hiyo iliwekwa kama dhamana.</p><p>Tume Huru ilifika Shinyanga na kufanya uchunguzi wake Machi 16-20, 2017 na kukabidhi Taarifa yake kwa Askofu Mkuu wa AICT Machi 27, 2017.</p><p>Katika kikao chake cha kawaida kilichofanyika Makongoro, Mwanza Machi 30-31, 2017 Baraza la Utendaji la Sinodi Kuu, pamoja na masuala mengine, lilipokea Taarifa ya Tume Huru na kujadili kwa kina maelezo na mapendekezo yote yaliyowasilishwa kwa marefu na mapana. <b>Wajumbe wa Baraza la Utendaji la Sinodi Kuu waliridhika na taarifa na hiyo walichukua hatua kali kwa watumishi wa kanisa wote wa AICT Dayosisi ya Shinyanga waliokuwapo wakati wa ujenzi wa Shule ya Sekondari ya Askofu Nkola (Bishop Nkola Secondary School) na wale waliopo sasa kwa matumizi mabaya ya madaraka na fedha ya Africa Inland Church Tanzania (AICT). Mambo hayo ndiyo yalipelekea shule hiyo kuuzwa.</b></p><ol><li>Baraza la Utendaji la Sinodi Kuu kwa mujibu wa Katiba ya AICT Ibara ya 23 (3) lilimtaka Askofu John Kanoni Nkola kustaafu mara moja. Yeye alishindwa kuwasimamia watendaji wake na pia hakuweza kupeleka taarifa mapema kwenye mabaraza ya juu.</li><li>Baraza la Utendaji la Sinodi Kuu kwa mujibu wa Katiba ya AICT Ibara ya 23 (3) lilimtaka Askofu John Bunango aliyekuwa Katibu Mkuu wa AICT Dayosisi ya Shinyanga wakati wa kukopa na kutumia fedha hizo kujiuzuru. Akiwa Katibu Mkuu wakati wa kukopa na kutumia fedha hizo, alijihusisha na matumizi mabaya ya madaraka na matumizi mabaya ya fedha.</li><li>Baraza la Utendaji la Sinodi Kuu kwa mujibu wa Sheria I (a) lilimwondoa katika kazi ya Uchungaji Mchungaji Mapambano Jacob, Katibu Mkuu wa AICT Dayosisi ya Shinyanga wakati Shule inauzwa. Yeye alihusika na matumizi mabaya ya madaraka na fedha za shule.</li><li>Baraza la Utendaji la Sinodi Kuu kwa mujibu wa Katiba ya AICT Sheria I (a) lilimwondoa katika kazi ya Uchungaji Mchungaji Emmanueli Petro Isaya ambaye alijihusisha na matumizi mabaya wakati wa ujenzi wa shule hiyo.</li><li>Baraza la Utendaji la Sinodi Kuu kwa mujibu wa Katiba ya AICT Sheria I (a) lilimwondoa katika kazi ya Uchungaji Mchungaji Meshaka Kulwa ambaye alijihusisha na matumizi mabaya ya fedha za mkopo huo.</li></ol><p>Baraza la Utendaji la Sinodi Kuu liliagiza ukaguzi wa ndani ufanyike haraka na kubaini wale ambao wamechukua mali ya kanisa kuirudisha haraka na pia wachukuliwe hatua.</p><p>Pamoja na hatua hizo Baraza la Utendaji limemshauri Askofu Mkuu kuita kikao cha dharura cha Sinodi Kuu ya AICT siku ya Ijumaa Aprili 28, 2017 kutoa uamuzi wa mwisho dhidi ya Askofu John Kanoni Nkola pamoja na Askofu John Bunango.</p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1491162267, 'published'),
(50, 'KUUZWA KWA BISHOP NKOLA SECONDARY SCHOOL, SINODI KUU YARIDHIA MAAMUZI YA BARAZA LA UTENDAJI', '<p><b>Sinodi Kuu ya Africa Inland Church</b>&nbsp;<b>Tanzania,</b> imeridhia kuwaondoa uaskofu Askofu John Kanoni Nkola na Askofu John Bunango. Sinodi hiyo, ambayo ilihudhuliwa na wawakilishi wapatao 800 kutoka nchini kote, ilipokea taarifa ya Baraza la Utendaji la kanisa &nbsp;iliyotolewa na Askofu Mkuu Silas Kezakubi ambayo ilitaka maaskofu hao waondolewe uaskofu kutokana na kuhusika kwao katika matumizi mabaya ya madaraka na ubadhilifu wa Shilingi milioni 400 za mkopo wa benki ya CRDB.</p><p>Sakata hili lilianza tarehe 22 February, 2017 pale Shule ya Sekondari ya Bishop Nkola ilipopigwa mnada na benki ya CRDB kutokana na deni hilo. Shule hiyo, ambayo ilijengwa mwaka 2006 kwa michango ya wakristo pamoja na harambee iliyoongozwa na Waziri Mkuu wakati huo, Mheshimiwa Fredrick Sumaye, iliwekwa kwa dhamana na uongozi wa Dayosisi ya Shinyanga ili kupata mkopo wa milioni 400/= wa kuiboresha. Baada ya kuuzwa kwa shule hiyo kwa njia ya mnada, Askofu Mkuu aliitisha kikao cha Utendaji cha dharura ili kujadiri jambo hilo. Kikao hicho kiliteua Tume Huru ya kufanya uchunguzi ili kubaini sababu zilizopelekea shule hiyo ishindwe kulipa mkopo huo hata ipigwe mnada.</p><p>Tume Huru ilitoa taarifaya yake katika Baraza la Utendaji la tarehe 30 March 2017. Taarifa hiyo ilibainisha ubadhilifu uliofanywa na viongozi pamoja na watendaji wa Dayosisi ya Shinyanga wa wakati huo juu ya mkopo huo. Ikielezea hali iliyokuwepo, taarifa hiyo inasema,<i> â€œHata hivyo, mfumo mzima wa Ofisi ya Uaskofu ya AIC Dayosisi ya Shinyanga ni kama walimwacha Yesu walipopokea mkopo wa Shilingi 400,000,000 kwa ajili ya ujenzi wa shule, wakatamani kujitajirisha ghaflaâ€</i>.</p><p>Ubadhilifu na kukosa uaminifu kulipelekea miundombinu yote iliyokuwa imepangwa kujengwa isikamilike na tena ijengwe kwa ubora wa chini sana. Kutokana na hayo, badala ya kuingiza wanafunzi wengi na kupata mapato mengi ili kulipa deni la CRDB, shule ilizidi kudidimia.</p><p>Katika maamuzi yake hapo tarehe 31 March, 2017, Baraza la Utendaji liliwachukulia hatua wote waliohusika na mkopo huo. Kwa mjibu wa Katiba ya kanisa, Baraza liliwavua uchungaji Mchungaji Mapambano Jacob (Katibu Mkuu wa sasa) Mchungaji Meshack Kulwa (ambaye alihusika kusimamia ujenzi wa uzio) na Mchungaji Emmanuel Isaya (ambaye alikuwa katibu wa elimu). Kwa mjibu wa katiba pia Baraza lilimwomba Askofu Dr John Nkola kustaafu na Askofu John Bunango aliombwa kujiuzuru.</p><p>Kwa kufuata Katiba ya kanisa, Askofu anaondolewa na Sinodi kuu baada ya kuombwa kustaafu au kujiuzuru na Baraza la Utendaji. Hivyo, Sinodi kuu iliyokutana Makongoro Mwanza tarehe 28 April, iliridhia kuwaondoa uaskofu hao wawili.</p><p>&nbsp;</p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1493673506, 'published'),
(51, 'HISTORIA FUPI YA KANISA LA AICT', '<p><span style=\"color:rgb(75, 95, 101); font-family:open sans; font-size:14px\">Mnamo mwaka 1877-1909 lilikuwa likiitwa CMS yaani Church Missionary Society lilianza kazi ya kuhubiri Injili katika Afrika Mashariki,Bagamoyo Tanganyika,mwezi Julai 1876.Mwaka 1909-1937 Peter Cameron Scott alianzisha AFRICA INLAND MISSION (AIM)mjini Philadelphia,USA.Madhumuni yake ilikuwa ni kuhubiri Injili na kuanzisha makanisa katika bara la Afrika.Mwaka 1937-1956 kanisa kuanzishwa rasmi na kupewa</span><span style=\"color:rgb(75, 95, 101); font-family:open sans; font-size:14px\">&nbsp;jina la EKLEZIA EVANJELI YA KRISTO (E.E.K) nakupewa katiba iliyo wapa mamlaka na kanuni tatu zilizo andikwa katika katiba; 1.Kujitawala lenyewe 2.Kujitegemea lenyewe 3.Kujieneza lenyewe.Wakati huu katiba ilikuwa imeandikwa kwa lugha ya Kisukuma na miniti zote za vikao. viliandikwa kwa Lugha hii.1957 Jina la kanisa EKLEZIA EVANJELU YA KRISTO lilibadirishwa na kuitwa AFRICA INLAND CHURCH TANGANYIKA Jina hili jipya liliandikwa katika katiba.Kujitawala halisi kwa A.I.C.Tanganyika kulipatikana 12/2/1960 katika mkutano wa Synod na Field Council.Kwa wakati huo mkuu wa kanisa alikuwa akiitwa DIRECTOR yaani Mkurugenzi.Mkurugenzi wa kwanza AICT ni Mch Jeremia Mahalu Kisula ambae baadae ndie aliyekuwa Askofu wa kwanza wa kanisa hili.Jina la Ukurugenzi lilibadirishwa na kuitwa Uaskofu mnamo mwaka 1966 na kuweza kuchaguliwa kila baaada ya miaka minne.Baadhi ya Majina ya viongozi wa kanisa hili tangu mwanzo.1.Oneil .Luten Shergold 2.Mch Alexander mckay.</span></p>', NULL, '', 'no', 'Kezakubi Silasi', 0, 1503063689, 'published'),
(52, 'HISTORIA FUPI YA KANISA LA AICT', '<p><span style=\"color:rgb(75, 95, 101); font-family:open sans; font-size:14px\">Mnamo mwaka 1877-1909 lilikuwa likiitwa CMS yaani Church Missionary Society lilianza kazi ya kuhubiri Injili katika Afrika Mashariki,Bagamoyo Tanganyika,mwezi Julai 1876.Mwaka 1909-1937 Peter Cameron Scott alianzisha AFRICA INLAND MISSION (AIM)mjini Philadelphia,USA.Madhumuni yake ilikuwa ni kuhubiri Injili na kuanzisha makanisa katika bara la Afrika.Mwaka 1937-1956 kanisa kuanzishwa rasmi na kupewa</span><span style=\"color:rgb(75, 95, 101); font-family:open sans; font-size:14px\">&nbsp;jina la EKLEZIA EVANJELI YA KRISTO (E.E.K) nakupewa katiba iliyo wapa mamlaka na kanuni tatu zilizo andikwa katika katiba; 1.Kujitawala lenyewe 2.Kujitegemea lenyewe 3.Kujieneza lenyewe.Wakati huu katiba ilikuwa imeandikwa kwa lugha ya Kisukuma na miniti zote za vikao. viliandikwa kwa Lugha hii.1957 Jina la kanisa EKLEZIA EVANJELU YA KRISTO lilibadirishwa na kuitwa AFRICA INLAND CHURCH TANGANYIKA Jina hili jipya liliandikwa katika katiba.Kujitawala halisi kwa A.I.C.Tanganyika kulipatikana 12/2/1960 katika mkutano wa Synod na Field Council.Kwa wakati huo mkuu wa kanisa alikuwa akiitwa DIRECTOR yaani Mkurugenzi.Mkurugenzi wa kwanza AICT ni Mch Jeremia Mahalu Kisula ambae baadae ndie aliyekuwa Askofu wa kwanza wa kanisa hili.Jina la Ukurugenzi lilibadirishwa na kuitwa Uaskofu mnamo mwaka 1966 na kuweza kuchaguliwa kila baaada ya miaka minne.Baadhi ya Majina ya viongozi wa kanisa hili tangu mwanzo.1.Oneil .Luten Shergold 2.Mch Alexander mckay.</span></p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1503063817, 'unpublished'),
(53, 'HONGERA KANISA LA KILUTHELI', '<p>Mimi pamoja na wakristo wote wa Africa Inland Church, Tanzania (AICT) tunawapongeza wakristo wa Kanisa la Kilutheri popote walipo duniani kwa kuishikilia imani ya kweli kwa kipindi cha miaka 500. Kanisa la Kilutheri lilizaliwa mwaka 1517 kwa mwasisi wake, Martin Luther kutongaza rasmi msimamo wa imani inayotegema Maandiko Matakatifu tu. Na pasipo kuongeza ziada, kanisa la Kilutheri ndiyo chimbuko la makanisa mengi yanayotii na kuheshimu maandiko Matakatifu.</p>\r\n\r\n<p>Na kwa hapa kwetu Tanzania, tunampongeza sana Mkuu wa kanisa la Kilutheri Tanzania, Askofu Dr Fredrick Onael Shoo kwa kazi kubwa anayoifanya ya kuliongoza kanisa hili kubwa na Maaskofu wote wanao kwa kazi kubwa wanayoifanya. Aidha, tunawapongeza wachungaji wote wa kanisa hili wanaolichunga kundi la Mungu kwa kutumia Maandiko Matakatifu.</p>\r\n\r\n<p>AICT inaungana na witu alioutoa Mkuu wa kanisa hili kuwa &ldquo;wasiache urithi wa imani yao na kukimbilia wapotoshaji wenye lengo la kuwaondoa katika imani kwa Yesu Kristo&rdquo;.</p>\r\n\r\n<p>Mungu, libariki kanisa la Kilutheli</p>\r\n\r\n<p>Askofu Silas Kezakubi, Askofu Mkuu, AICT</p>', NULL, '', 'yes', 'Kezakubi Silasi', 0, 1503063911, 'published'),
(54, 'my artilce here', '<p>just testing it so chiil it</p>', NULL, '', 'no', 'andrew mawanda', 3, 1509882295, 'canceled'),
(55, 'TAARIFA YA KUSIMAMISHWA KAZI KWA MCH THOMAS FUMBUKA KAMA KAIMU KATIBU MKUU', '<p>Mchungaji Thomas Fumbuka, aliyekuwa Katibu Mkuu Kiongozi wa kanisa la AICT alisimishwa kazi tangu tarehe 5 March, 2018 kwa tuhuma za kuweka mkataba wenye utata wa kufanya &nbsp;yadi ya kuuzia magari kwenye kuwanja cha Makao Makuu ya kanisa. Mkataba huo, ambao unakiuka masharti ya serikali wa kupewa viwanja, unaihusu kampuni ya Three Ace Company Ltd ya Bwana Said Ahmad Sardar kama mpangaji. Mkataba huo ulisainiwa tarehe 11 January, 2018 na kikao cha wadhamini cha kudhinisha mkataba huo kilikaa tarehe 16 January, 2018. Kikao hicho kilihudhuriwa na wajumbe 3 kati ya wajumbe 14 wa baraza la Wadhamini wa AICT. Askofu Mkuu alipelekewa mkataba huo tarehe 12 February, 2018. Siku hiyo hiyo Askofu Mkuu aliwaita Katibu Mkuu Fumbuka na Mhasibu Mkuu Masalu ili apewe maelezo &nbsp;ni kwa nini wametengeneza mkataba huo na hadi kufikia kupokea kupokea malipo bila yeye kuwa na taarifa. Mhasibu Mkuu alikiri kutokuwa na taarifa yoyote. Mchungaji Fumbuka alikiri kutomhusisha &nbsp;Mhasibu Mkuu Justus Masalu bali alishughurika na Mhasibu Mkuu Msaidizi katika masuala yote ya mkataba huo. Mara moja Askofu Mkuu alitengeneza kamati ndogo ya kuchunguza jambo hilo. Baada ya kupewa taarifa na kamati hiyo Askofu Mkuu alifanya kikao tarehe hiyo 5 February 2018 na Wadhamini wawili kati ya wale watatu waliohudhuria kikao cha kuidhinisha mkataba huo pamoja na Mchungaji Fumbuka na Mchana huo huo Mchungaji alikabidhiwa barua ya kusimamishwa kazi akiwa ofisini. Kwa kuwa jambo la kubadirisha matumizi ya kiwanja ni kunyume cha masharti ya kupewa viwanja na serikali, Askofu Mkuu alimteua Mhasibu Mkuu Justusus Masalu na watu wachache kutafuta njia ya kuliondoa kanisa katika mkataba huu tata. Hatima ya Mchungaji Fumbuka itafahamika tarehe 22 March, 2018 katika Kikao cha Utendaji.</p>', NULL, '', 'yes', 'Kezakubi Silasi', 3, 1520798883, 'unpublished'),
(56, 'BARAZA LA UTENDAJI LAPATA WAJUMBE WAPYA', '<p><span style=\"font-size:14px\"><strong>Kushoto ni Mchungaji Joseph Mayala na Kulia ni Ndugu Ndaki P. Munyeti.</strong></span>&nbsp;</p>\r\n\r\n<p>Baraza la Utendaji la Sinodi Kuu litakutakuwa na kikao chake cha kawaida tarehe 22 na 23 March 2018 likiwa na wajumbe wawili wapya. Wajumbe hao, ambao Baraza hilo liliteua kuwa wenyeviti wa idara za kanisa tangu mwezi August 2017, ni Mchungaji Joseph Mayala na Munyeti.</p>\r\n\r\n<p>Mchungaji Joseph Mayala&nbsp; (pichani)aliteuwa kuwa Mwenyekiti wa Bodi ya Theologian a Mafunzo ya Biblia. Idara ambayo inasimamia vyuo vyote vya kanisa na mafunzo mengine ya Biblia. Mchungaji Mayala, ambaye ni mmoja wa wajumbe vijana, anaingia katika Baraza hili akiwa na uzoefu mkubwa kutoka katika mashirika makubwa aliyofanya kazi nayo. Mashirika hayo ni pamoja na Barclays, Compassion International na hivi sasa anafanya na shirika laata sasa World Vision. Mchungaji Mayala hata sasa ni mjumbe wa Bodi ya Africa International University (AIU) ambayo zamani iliitwa NEGST. Mara tu alipochaguliwa kuwa Mwenyekiti wa Bodi hii, alianza juhudi za kuleta vitabu vya kutosha kwenye Chuo cha Theologia cha Nasa na hata kutafuta uwezekano wa kukifanya kifanye kazi na AIU ili kuinua taaruma.</p>\r\n\r\n<div>\r\n<p>Mjumbe mpya wa pili ni Ndugu Ndaki P. Munyeti&nbsp; ambaye ni Mwenyekiti wa Bodi mpya ya Mawasiliano. &nbsp;Yeye ni Mkurugenzi Mtendaji wa kampuni ya &nbsp;Tanais ambayo makao makuu yake yako Dar Es Salaam. Yeye amefanya kazi na makampuni makubwa. Ni mtalaam wa kutoa ushauri katika viwanda. Anatoa ushauri kwenye makampuni ya nchini nay a nje ya nchi, kazi ambayo imemfanya atembelee nchi nyingi.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;Kanisa la AICT liko katika harakati za kuanzisha kituo cha redio na pia kituo cha TV. Ndugu Ndaki P. Munyeti ndiye Mwenyekiti wa Bodi iliyoundwa ili kusimamia uanzishwaji wa vyombo hivyo vya mawasiliano.</p>\r\n\r\n<p><strong>Mapendekezo ya Mabadiriko ya Katiba</strong></p>\r\n\r\n<p>Moja ya mambo muhimu yanayotarajiwa katika kikao hiki ni kupanga tarehe ambayo Sinodi Kuu itakaa ili kupitisha au kukataa mapendekezo ya mabadiriko ya Katiba ya kanisa. Likiwa sasa limeingia karne ya pili tangu lilipoanzishwa (1909), wakristo wa kanisa hilo wametoa mapendekezo mengi ya mabadiriko ya Katiba ili kulifanya kuwa imara katikati ya changamoto mpya zilizomo katika jamii zote. Baadhi ya mapendekezo hayo yanalenga kuimarisha utawala (governance) kwa kuongeza majukumu ya mabaraza na kuongeza idadi ya vikao. Kwa upande wa nidhamu kwa viongozi, wakristo wengi wamependekeza pawepo na chombo ambacho kitashughurikia jambo maadili kwa watumishi wa kanisa na hasa uwakili wa mali za kanisa.</p>\r\n</div>', NULL, '', 'yes', 'Kezakubi Silasi', 1, 1521269329, 'published'),
(57, 'Kanisa Kuu Dayosisi ya Tabora Lamwaga Askofu Mstaafu  Dr Peter Kitula', '<div>\r\n<p>Askofu Mstaafu Dr Peter Kitula amepengezwa na Kanisa Kuu la Tabora kwa utumishi wake wa miaka mingi.Baba Askofu Kitula alistaafu rasmi tarehe 5 August, 2018 katika viwanja vya ofisi ya Dayosisi ya Mara na Ukerewe vilivyoko maeneo ya Bweli mjini Musoma. Kabla ya kustaafu, alitembelea kanisa Kuu la Dayosisi ya Shinyanga na lile la Dayosisi ya Mwanza kwa madhumuni ya kuagana na waumini.</p>\r\n</div>\r\n\r\n<p>Katika mahubiri yake yaliyojikita katika kitabu cha Luka 24:44-53 Askofu Kitula alikazia mambo matatu muhim katika maisha ya mkriato. &ldquo;Jambo la kwanza&rdquo;, alisema, &ldquo;ni kufunuliwa akili ili kuielewa Injili&rdquo;. Injili aliifafanua kuwa ni kuteswa, kufa na kufufuliwa kwa Bwana Yesu Kristo. Aliongeza kuwa pale mtu anapofunuliwa kumfahamu Kristo dipo anapobeba jukumu la kuwa shahidi wake Yesu.Kukaa kanisani miaka mingi au kuzaliwa katika nyumba au ukoo wa kikristo peke yake havitoshi. Mtu lazima afunuliwe kumfahamu Kristo dip awe mfuasi wa Kristo wa kweli.</p>\r\n\r\n<div>\r\n<p>Jambo la pili, Askofu Kitula alisema ni lazima mkristo aishi maisha ya kumshudia Kristo. Maisha ya mkristo wa kweli yanazungumza habari za Kristo anayeokoa. Tena maisha ya Mkristo ni lazima yazungumze juu ya ondoleo la dhambi linalopatikana kwa Kristo pekee. Kila mwanadamu anahitaji kusamehewa na kupata ondleo la dhambi.Jambo la tatu, tunasoma katika fungu hilo kuwa Bwana Yesu aliinua mikono yake akawabariki.</p>\r\n</div>\r\n\r\n<p>Kanisa la Tabora hufanya ibada mbili kwa kulingana na mahitaji wa wakristo wake. Kuna wale ambao huhitaji ibada ya mapema ili waweze kwenda kwenye majukumu. Ibada hiyo ya kwanza huanza saa 1.00 na kusha saa 3:30 asubuhi na ibada yap ili huanza saa 4:00 hadi saa 6:30. Askofu Mstaafu Peter Kitula ndiye aliyekuwa mhubiri katika ibada zote hizo mbili. Wakristo waliofanikiwa kusikika wakizungumzia mahubiri hayo walielezea jinsi yalivyosaidia katika kutafakari maisha yao ya kikristo mbele ya jamii.</p>\r\n\r\n<p>&nbsp;</p>', NULL, '', 'yes', 'Kezakubi Silasi', 3, 1536515065, 'published'),
(58, 'MPANGO MKAKATI WA AICT', '<p>LEO TAREHE 17/12/2018 HADI TAREHE 19/12/2018 UONGOZI WA KANISA LA AFRICA INLAND CHURCH TANZANIA UMEKUTANA MAKAO MAKUU YA KANISA MAKONGORO - MWANZA.</p>\r\n\r\n<p>LENGO KUU NI KUWEKA MPANGO MKAKATI WA KANISA . KATIKA KONGAMANO HILI KUTAKUWA NA UWASILISHAJI MBALIMBALI.</p>\r\n\r\n<p>K/KATIBU MKUU KIONGOZI WA KANISA MCHUNGAJI JOSEPHALES MTEBE ATAWASILISHA JUU YA MWELEKEO WA KANISA, WAWASILISHAJI WENGINE NI DR. GEORGE MLINGWA - UTAWALA BORA, MZEE SAMSON LUHIGO - KATIBA NA MZEE JERRY MASSAGA - FEDHA NA MIRADI.</p>\r\n\r\n<p>MATARAJIO YA MPANGO MKAKATI HUU NI KUWEKA MISINGI ITAKAYOWEZESHA KANISA KUSONGA MBELE.</p>\r\n\r\n<p><em>Imetolewa na Mwandishi, Mr Mtesigwa Mtebe.</em></p>', NULL, '', 'yes', 'Kezakubi Silasi', 3, 1545044755, 'published'),
(59, 'MAAFALI YA KWANZA YA CHUO CHA BIBLIA, KANDA YA TABORA.', '<p><span style=\"background-color:rgb(255, 255, 255); color:rgb(29, 33, 41); font-family:helvetica,arial,sans-serif; font-size:14px\">Maafali ya kwanza ya chuo cha Biblia, kanda ya Tabora (Tabora Bible school). Maafali hayo yalifanyika dayosisi ya Tabora leo tarehe 25 Januari 2019, mgeni rasmi akiwa Ask Silas M. Kezakubi. Wanafunzi 28 walihitimu mafunzo yao katika awamu ya kwanza ya maafali ya chuo hicho. Neno Kuu lilitoka katika Kitabu cha Isaya 6.8 &quot;KISHA NIKASIKIA SAUTI YA BWANA , AKISEMA NIMTUME NANI, NAYE NI NANI ATAKAYEKWENDA KWA AJILI YETU? NDIPO NILIPOSEMA, MIMI HAPA, NITUME MIMI.&quot;</span></p>', NULL, '', 'yes', 'Kezakubi Silasi', 3, 1548437892, 'published'),
(60, 'Uzinduzi wa Mpango Mkakati wa AICT', '<p>Kanisa la Africa Inland Church of Tanzania (AICT) leo tarehe 30 Juni, limefanya uzinduzi wa mpango mkakati katika kanisa kuu la AICT Makongoro. Kabla ya tukio hilo la kihisitoria, kulitangulia na vikao vya baraza la utendaji kwa siku mbili na kisha kufuatia kwa Sinodi kuu ya kanisa kwa siku tatu. Mpango mkakati huu umezinduliwa na Askofu Mkuu wa AICT, na viongozi mbalimbali wa kanisa. Pia kulikuwa na viongozi wa kiserikali ambapo Mkuu wa Mkoa wa Mwanza aliwakilishwa na Mkuu wa wilaya katika uzinduzi wa mpango mkakati.&nbsp;</p>', NULL, '', 'yes', 'Kezakubi Silasi', 3, 1561909550, 'published'),
(61, 'MATUKIO YA KANISA KWA MWEZI WA TISA 2021', 'Katika mwezi wa tisa kutakuwa na Mikutano ya Sinodi Kuu ya Kanisa ambayo pia itakuwa na mijadala ya kupitisha Katiba mpya ya Kanisa. Kikao hicho kitafanyika katika Kanisa la AICT Buzuruga Mwanza.\r\n\r\nPia mwezi wa tisa ni mwezi maalum kwaajili ya Idara ya Wanawake na Watoto Kanisani.', NULL, '', 'no', 'Enock Magwesela', 1, 1630861006, 'unpublished');
INSERT INTO `news` (`article_id`, `article_title`, `article_description`, `article_cat`, `pdf_file`, `headline`, `poster`, `cstatus`, `timestamp`, `published`) VALUES
(62, 'SINODI KUU YA AICT 2021', '<p>Sinodi Kuu ya AICT ilikaa kuanzia tarehe 8 mpaka 10 Septemba 2021 katika Kanisa la AICT Buzuruga, Mwanza. Sinodi ambayo ilikuwa maalumu kwa kupiga kura kupitisha mapendekezo mapya ya kuingizwa kwenye katiba ya Kanisa. Mbali na kupiga kura pia wajumbe wa mkutano walijadili taarifa ya utendaji ya Askofu Mkuu, Katibu Mkuu pamoja na taarifa ya fedha.&nbsp;</p>', NULL, '', 'yes', '', 1, 1632390381, 'published'),
(63, 'SINODI KUU YA AICT 2021', '<p>Sinodi Kuu ya AICT 2021 ilikaa kuanzia tarehe 8 mpaka 10 Septemba, 2021 katika Kanisa la AICT Buzuruga, Mwanza. Sinodi hii ilikuwa maalumu kwaajili ya kupitisha mapendekezo mapya ya kuingizwa katika katiba ya kanisa, mapendekezo yalikuwa 29. mbali na kupigia kura mapendekezo ya katiba mpya pia wajumbe wa Sinodi waliweza kujadili taarifa ya utendaji toka ofisi ya Askofu Mkuu na Katibu Mkuu pamoja na taarifa ya fedha.&nbsp;</p>', NULL, '', 'yes', 'Enock Magwesela', 1, 1632390574, 'unpublished'),
(64, 'KUPIGA KURA KUPITISHA MAPENDEKEZO YA KUINGIZWA KWENYE KATIBA YA KANISA', '<p>Wajumbe waliohudhuria kwenye Vikao vya Sinodi Kuu ya AICT iliyokaa tarehe 9 Septemba 2021 walipata fursa ya kupiga kura kupitisha mapendekezo mapya ya kuingizwa kwenye katiba ya Kanisa. Zaidi ya wajumbe 800 walihidhuria na kupata fursa ya kupiga kura mapendekezo mapya. kulikuwa na mapendekezo 29 ambayo yalikuwa yanapigiwa kura katika kikao hicho.&nbsp;</p>\r\n\r\n<p>Mapendekezo ya Kuingizwa katika Katiba ya AICT ni kama ifuatavyo</p>\r\n\r\n<ol>\r\n	<li>Kuzuia Dayosisi kuwa na Katiba yake.</li>\r\n	<li>Kufutwa kwa Baraza la Fedha na badala yake kuanzishwa Kamati ya Fedha na Ukaguzi.</li>\r\n	<li>Kubainishwa Mavazi stahiki na wajibu wa Muumini wa AICT.</li>\r\n	<li>Wanawake kuruhusiwa kuwa wazee na Wahudumu wa Kanisa.</li>\r\n	<li>Katibu Mkuu wa Dayosisi kuwa Katibu wa Dayosisi.</li>\r\n	<li>Kuanzishwa Baraza Maalum la Maaskofu wa AICT.</li>\r\n	<li>Kubadili jina la ngazi ya Chalo kuwa Jimbo.</li>\r\n	<li>Mfumo mpya wa fedha na Mawasilisho.</li>\r\n	<li>Mfumo mpya wa Ajira na ulipaji wa Maslahi kwa Watumishi wa AICT.</li>\r\n	<li>AICT Kugharamia Kozi za Wachungaji na Wainjilisti</li>\r\n	<li>Kuwekwa Utaratibu wa Kujaza nafasi ya Askofu Mkuu au Makamu wa Askofu Mkuu nafasi ikiwa wazi kabla ya kumaliza muda wake.</li>\r\n	<li>Nguvu ya pamoja katika uwekezaji.</li>\r\n	<li>Kanisa kutambua ushiriki wa Diaspora wake na kuwashirikisha kwenye Ibada na shughuli za Kanisa</li>\r\n	<li>Muundo mpya wa AICT, Kwaya na taratibu za uendeshaji wake.</li>\r\n	<li>Utaratibu wa kuhudumu kwa Watumishi Wastaafu wa AICT.</li>\r\n	<li>Kuanzishwa kwa Kurugenzi za AICT na majukumu yake.</li>\r\n	<li>Muda wa mafundisho ya ndoa usipungue siku ishirini na moja.</li>\r\n	<li>Kubainishwa kwa maeneo ya mazishi kwa Viongozi wa kiroho wa AICT.</li>\r\n	<li>Mtu atakayemwamini Yesu Kristo atabatizwa na kuingia katika ushirika wa AICT (isipokuwa Ushirika Mtakatifu na uongozi) na ataendelea na mafundisho ya Katekisimu kwa muda wa miezi sita.</li>\r\n	<li>Kutenganisha Katiba na Sheria (kwa sasa zinatwa Kanuni)</li>\r\n	<li>Utaratibu mpya wa utatuzi wa migogoro ndani ya AICT.</li>\r\n	<li>Kubadilika kwa muda wa Uchaguzi Mkuu wa AICT kutoka miaka minne (4) na kuwa miaka mitano (5) na itakuwa kwa ngazi zote za uongozi.</li>\r\n	<li>Katibu Mkuu kiongozi kuitwa Katibu Mkuu na kuwa pia Katibu wa Sinodi Kuu na Baraza la Utendaji la Sinodi Kuu.</li>\r\n	<li>Askofu Mkuu kufanyia kazi Makao Makuu ya AICT na kuwa Askofu wa Dayosisi yaliko Makao Makuu ya AICT.</li>\r\n	<li>Askofu Mkuu Msaidizi kuitwa Makamu wa Askofu Mkuu ambaye pia kituo chake cha kazi kitakuwa kwenye Dayosisi aliyopangiwa.</li>\r\n	<li>Kuwepo utaratibu maalum wa Uhamisho wa Maaskofu na Makatibu wa Dayosisi.</li>\r\n	<li>Matoleo ya Fungu sasa kuitwa Ada ya Mkristo ya mwaka.</li>\r\n	<li>Ukomo wa kazi ya Uaskofu</li>\r\n	<li>Utaratibu wa kumvua Askofu Uaskofu wa AICT</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>na katika mapendekezo yote mapendekezo 26 yalipitishwa na mapendekezo 3 hayakupitishwa mapendekezo ambayo hayakupitishwa ni</p>\r\n\r\n<ol>\r\n	<li>Wanawake kuruhusiwa kuwa wazee na Wahudumu wa Kanisa.</li>\r\n	<li>Muda wa mafundisho ya ndoa usipungue siku ishirini na moja.</li>\r\n	<li>Mtu atakayemwamini Yesu Kristo atabatizwa na kuingia katika ushirika wa AICT (isipokuwa Ushirika Mtakatifu na uongozi) na ataendelea na mafundisho ya Katekisimu kwa muda wa miezi sita.</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>', NULL, '', 'yes', 'Enock Magwesela', 1, 1632391445, 'published'),
(65, 'INLAND DEVELOPMENT TRUST (IDT) CHOSEN TO IMPLEMENT ACHIEVE PROJECT IN TABORA REGION.', '<p>The USAID Adolescents and Children HIV Incidence Reduction, Empowerment and Virus Elimination project, or ACHIEVE, is a five-year global effort&nbsp;to reach and sustain HIV epidemic control among pregnant and breastfeeding women, adolescents, infants and children.&nbsp;ACHIEVE currently works in&nbsp;Burundi,&nbsp;<a href=\"https://www.pactworld.org/library/achieve-dominican-republic\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font: inherit; box-sizing: border-box; color: rgb(154, 0, 100); text-decoration-line: none !important;\">Dominican Republic</a>,&nbsp;<a href=\"https://www.pactworld.org/library/achieve-namibia\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font: inherit; box-sizing: border-box; color: rgb(154, 0, 100); text-decoration-line: none !important;\">Namibia</a>,&nbsp;<a href=\"https://www.pactworld.org/library/achieve-nigeria\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font: inherit; box-sizing: border-box; color: rgb(154, 0, 100); text-decoration-line: none !important;\">Nigeria</a>,&nbsp;<a href=\"https://www.pactworld.org/library/achieve-rwanda\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font: inherit; box-sizing: border-box; color: rgb(154, 0, 100); text-decoration-line: none !important;\">Rwanda</a>, South Sudan,&nbsp;<a href=\"https://www.pactworld.org/library/achieve-tanzania\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font: inherit; box-sizing: border-box; color: rgb(154, 0, 100); text-decoration-line: none !important;\">Tanzania</a>&nbsp;and Zambia.&nbsp;The project is funded by the U.S. Agency for International Development and implemented by a Pact-led consortium of top global HIV/AIDS partners, including&nbsp;<a href=\"https://www.jhpiego.org/\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font: inherit; box-sizing: border-box; color: rgb(154, 0, 100); text-decoration-line: none !important;\" target=\"_blank\">Jhpiego</a>,&nbsp;<a href=\"https://thepalladiumgroup.com/\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font: inherit; box-sizing: border-box; color: rgb(154, 0, 100); text-decoration-line: none !important;\" target=\"_blank\">Palladium</a>,&nbsp;<a href=\"https://www.nomeansnoworldwide.org/\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font: inherit; box-sizing: border-box; color: rgb(154, 0, 100); text-decoration-line: none !important;\" target=\"_blank\">No Means No Worldwide</a>&nbsp;and&nbsp;<a href=\"http://www.wi-her.org/\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font: inherit; box-sizing: border-box; color: rgb(154, 0, 100); text-decoration-line: none !important;\" target=\"_blank\">WI-HER</a>. These core partners are being supported by a network of&nbsp;global and local strategic resource partners. ACHIEVE focuses on priority&nbsp;<a href=\"https://www.pepfar.gov/\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font: inherit; box-sizing: border-box; color: rgb(154, 0, 100); text-decoration-line: none !important;\" target=\"_blank\">PEPFAR</a>&nbsp;countries across Africa, Southeast Asia and the Caribbean.&nbsp;</p>\r\n\r\n<p>The ACHIEVE consortium works with USAID Missions, national governments and existing response partners to identify gaps in HIV prevention and treatment programming among target populations. Using best practices and expertise along with innovations, the project is addressing critical gaps to meet country-specific epidemic control goals.</p>\r\n\r\n<p>As part of its strategy, ACHIEVE is working to prevent and respond to gender-based violence and to empower youth to own their own future. To ensure that the consortium&rsquo;s efforts are sustainable, ACHIEVE is developing the capacity of local organizations to directly receive USAID funding in line with PEPFAR&rsquo;s 70/30 localization goal and&nbsp;<a href=\"https://www.usaid.gov/selfreliance\" style=\"margin: 0px; padding: 0px; border: 0px; outline: 0px; vertical-align: baseline; font: inherit; box-sizing: border-box; color: rgb(154, 0, 100); text-decoration-line: none !important;\" target=\"_blank\">USAID&rsquo;s Journey to Self-Reliance</a>.</p>', NULL, '', 'yes', 'Kezakubi Silasi', 3, 1633527230, 'published'),
(66, 'IBADA MAALUMU YA KUSTAAFU KWA ASKOFU SILAS M. KEZAKUBI 04/09/2022', '', NULL, '', 'no', 'admin aict', 1, 1672649260, 'unpublished'),
(67, 'IBADA MAALUMU YA KUSTAAFU KWA ASKOFU SILAS M. KEZAKUBI 04/09/2022', '', NULL, '', 'yes', 'admin aict', 1, 1672652397, 'canceled'),
(68, 'Ibada ya KUMSIMIKA kazini Askofu wa Tatu wa AICT Dayosisi ya Pwani Askofu PHILIPO MAFUJA MAGWANO', 'Ibada ya KUMSIMIKA kazini Askofu wa Tatu wa AICT Dayosisi ya Pwani Askofu PHILIPO MAFUJA MAGWANO, Imeongozwa na Askofu mkuu  wa AICT Askofu Mussa M. Magwesela, Mgeni rasmi Makamu wa Rais wa Jamhuri ya Muungano wa Tanzania Mh. Dkt Philip I. Mpango, Katika kanisa la AICT MAGOMENI Dar es Salaam, Tarehe 29/01/2023', NULL, '', 'yes', 'admin aict', 1, 1687439286, 'published'),
(69, 'IBADA YA KUMUWEKA WAKFU NA KUMSIMIKA KAZINI ASKOFU REUBEN YUSUPH NG\'WALA', '<p><span dir=\"auto\">IBADA YA KUMUWEKA WAKFU NA KUMSIMIKA KAZINI ASKOFU REUBEN YUSUPH NG&#39;WALA kuwa Askofu wa tatu wa Dayosisi ya Geita</span></p>', NULL, '', 'no', 'admin aict', 1, 1688551951, 'canceled'),
(70, 'IBADA YA KUMUWEKA WAKFU NA KUMSIMIKA KAZINI ASKOFU JOSHUA LUSATO JACOB', '<p><span dir=\"auto\">IBAD</span><span dir=\"auto\">A YA KUMUWEKA WAKFU NA KUMSIMIKA KAZINI ASKOFU JOSHUA LUSATO JACOB kuwa Askofu wa pili wa Dayosisi ya Tabora</span></p>', NULL, '', 'no', 'admin aict', 1, 1688552124, 'canceled'),
(71, 'IBADA YA KUWEKWA WAKFU NA KUSIMIKWA KWA ASKOFU AMOS KATOTO NGEZE', '<p><span dir=\"auto\">KUWEKWA WAKFU NA KUSIMIKWA KWA ASKOFU AMOS KATOTO NGEZE. AICT KIZOTA 27/11/2022 Dodoma</span></p>', 2, '', 'yes', 'admin aict', 1, 1688552517, 'published'),
(72, 'IBADA MAALUMU YA KUMSIMIKA KAZINI ASKOFU MKUU WA AICT MUSSA M. MAGWESELA NA MAKAMU WA ASKOFU ZAKAYO E. BUGOTA.', '', NULL, '', 'yes', 'admin aict', 1, 1688552605, 'published'),
(73, 'IBADA YA KUMUWEKA WAKFU NA KUMSIMIKA KAZINI ASKOFU JOSHUA LUSATO JACOB', '', NULL, '', 'yes', 'admin aict', 1, 1688555719, 'published'),
(74, 'IBADA YA KUMUWEKA WAKFU NA KUMSIMIKA KAZINI ASKOFU REUBEN YUSUPH NG\'WALA', '', NULL, '', 'yes', 'admin aict', 1, 1688555845, 'published'),
(75, 'TENDER NO: IDT/ECD/2023/01', '<p><strong>TERMS OF REFERENCE</strong></p>\r\n\r\n<p><strong>Introduction</strong></p>\r\n\r\n<p>INLAND DEVELOPMENT TANZANIA (IDT) is a Non - Governmental Organization legally registered under the Act NO. 24 of 2002 on August 2019 with registration NO. 00NGO/R/0489 to operate in Tanzania Mainland. Inland Development Tanzania (IDT) Diocese of Tabora is the inheritor name of African Inland Church Tanzania (AICT), which is a Faith Based Organization (FBO) and non-profit organization. The organization&rsquo;s head office is located in Tabora Municipal at AICT Diocese of Tabora, opposite to the JB series Hotel. IDT is currently implementing programs in Tabora region and has sub offices in each council of Tabora region.</p>\r\n\r\n<p>IDT aims to develop endeavor and empower community to overcome poverty, Ignorance, diseases and advocate for human rights.</p>\r\n\r\n<p>With this support from CNHF, Pact in collaboration with IDT integrate Early Childhood care and development activities into the ACHIEVE project. The ACHIEVE project, which is led by Pact and funded by PEPFAR through USAID, aim to improve the health and well-being of orphans and other vulnerable children (OVC), with a focus on children and adolescents living with or most at risk of contracting HIV and their caregivers. Through ACHIEVE, Pact delivers home-based, child-centered case management services, in line with Tanzania&rsquo;s National Integrated Case Management System (NICMS), Conducting in service training in community education on adolescent , peadtric Health and Nutrition to under five years, Data review Meetings, Bi-annual Data Summit, CCW&rsquo;s and LV monthly meeting, Education subsides distribution and normal field supportive supervision, CHMT Meeting, Clinical Home visiting and supportive supervision to high volume CTC to all councils. Conducting in service training in community education on adolescent, peadtric Health and Nutrition to under three &nbsp;years</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The Objective of the Assignment </strong></p>\r\n\r\n<p>The overall objective of this assignment is to procure 275 Tablets for CCWs so as to enable them in data collection and entry in real-time of their house visitations to ECD beneficiaries of 0-3 years in all 7 councils namely Tabora MC, Igunga DC, Nzega DC, Uyui DC, Urambo DC, Sikonge DC and Kaliua DC.</p>\r\n\r\n<p><strong>Items specification and requirements</strong></p>\r\n\r\n<table border=\"1\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:688px\">\r\n	<tbody>\r\n		<tr>\r\n			<td style=\"height:16px; width:83px\">\r\n			<ul style=\"list-style-type:square\">\r\n				<li>&nbsp;</li>\r\n			</ul>\r\n			</td>\r\n			<td style=\"height:16px; width:227px\">\r\n			<ul style=\"list-style-type:circle\">\r\n				<li>&nbsp;</li>\r\n			</ul>\r\n			</td>\r\n			<td style=\"height:16px; width:161px\">\r\n			<ul>\r\n				<li>&nbsp;</li>\r\n			</ul>\r\n			</td>\r\n			<td style=\"height:16px; width:76px\">\r\n			<ul style=\"list-style-type:square\">\r\n				<li>&nbsp;</li>\r\n			</ul>\r\n			</td>\r\n			<td style=\"height:16px; width:141px\">\r\n			<p><strong>Estimated Time of Delivery</strong></p>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:218px; width:83px\">\r\n			<p>275 Tablets</p>\r\n\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"height:218px; width:227px\">\r\n			<ul>\r\n				<li>Build: Aluminum body</li>\r\n				<li>Display: 8.7&rdquo;</li>\r\n				<li>Internal memory: at least 32GB</li>\r\n				<li>RAM: at least 4 GB</li>\r\n				<li>CPU: Octa-core (4x2.3 GHz Cortex-A53 &amp; 4x1.8 GHz Cortex-A53)</li>\r\n				<li>Chipset: Mediatek MT8768T Helio P22T (12 nm)</li>\r\n				<li>Network: GSM/HSPA/LTE</li>\r\n				<li>OS: At least Android 11</li>\r\n				<li>Battery: Non-removable Li-Ion 5100 mAh battery</li>\r\n			</ul>\r\n			</td>\r\n			<td style=\"height:218px; width:161px\">\r\n			<ul>\r\n				<li>Built in camera: 8 MP</li>\r\n				<li>Resolution: 800 x 1340 pixels, 5:3 ratio (~179 ppi density)</li>\r\n				<li>Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct</li>\r\n				<li>Dedicated microSD Card slot</li>\r\n				<li>USB: USB Type-C 2.0</li>\r\n				<li>GPS, GLONASS, BDS, GALILEO</li>\r\n			</ul>\r\n			</td>\r\n			<td style=\"height:218px; width:76px\">\r\n			<ul>\r\n				<li>275</li>\r\n			</ul>\r\n			</td>\r\n			<td style=\"height:218px; width:141px\">\r\n			<ul>\r\n				<li>6 days</li>\r\n			</ul>\r\n			</td>\r\n		</tr>\r\n		<tr>\r\n			<td style=\"height:49px; width:83px\">\r\n			<p>275 Screen protectors and covers</p>\r\n			</td>\r\n			<td style=\"height:49px; width:227px\">\r\n			<ul>\r\n				<li>Glass screen protector</li>\r\n				<li>Silicon cover</li>\r\n			</ul>\r\n			</td>\r\n			<td style=\"height:49px; width:161px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"height:49px; width:76px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n			<td style=\"height:49px; width:141px\">\r\n			<p>&nbsp;</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Distribution Information</strong>:</p>\r\n\r\n<p>All items will be delivered to IDT Head Office located at Tabora region as per target.</p>\r\n\r\n<p><strong>Scope of Work </strong></p>\r\n\r\n<p>The specific scope of work includes but should not be', NULL, '', 'yes', 'admin aict', 1, 1691743406, 'unpublished'),
(76, 'characteristics of DevOps', '<p>more and more works</p>', 1, '../pdfs/Vision, Missiaon, Objectives.pdf', 'no', 'andrew mawanda', 1, 1693890598, 'published');

-- --------------------------------------------------------

--
-- Table structure for table `news_photos`
--

CREATE TABLE `news_photos` (
  `photo_id` int(50) NOT NULL,
  `article_id` int(50) NOT NULL,
  `photo_name` varchar(50) NOT NULL,
  `ext` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `news_photos`
--

INSERT INTO `news_photos` (`photo_id`, `article_id`, `photo_name`, `ext`) VALUES
(1, 1, 'c4ca4238a0b923820dcc509a6f75849b', 'jpg'),
(2, 2, 'c81e728d9d4c2f636f067f89cc14862c', 'jpg'),
(3, 3, 'eccbc87e4b5ce2fe28308fd9f2a7baf3', 'jpg'),
(4, 4, 'a87ff679a2f3e71d9181a67b7542122c', 'jpg'),
(5, 5, 'e4da3b7fbbce2345d7772b0674a318d5', 'jpg'),
(6, 6, '1679091c5a880faf6fb5e6087eb1b2dc', 'jpg'),
(7, 7, '8f14e45fceea167a5a36dedd4bea2543', 'jpg'),
(8, 8, 'c9f0f895fb98ab9159f51fd0297e236d', 'jpg'),
(9, 9, '45c48cce2e2d7fbdea1afc51c7c6ad26', 'jpg'),
(10, 10, 'd3d9446802a44259755d38e6d163e820', 'jpg'),
(11, 11, '6512bd43d9caa6e02c990b0a82652dca', 'jpg'),
(12, 12, 'c20ad4d76fe97759aa27a0c99bff6710', 'jpg'),
(13, 13, 'c51ce410c124a10e0db5e4b97fc2af39', 'jpg'),
(14, 14, 'aab3238922bcc25a6f606eb525ffdc56', 'jpg'),
(15, 16, 'c74d97b01eae257e44aa9d5bade97baf', 'jpg'),
(16, 17, '70efdf2ec9b086079795c442636b55fb', 'jpg'),
(17, 18, '6f4922f45568161a8cdf4ad2299f6d23', 'jpg'),
(18, 19, '1f0e3dad99908345f7439f8ffabdffc4', 'jpg'),
(19, 20, '98f13708210194c475687be6106a3b84', 'jpg'),
(20, 21, '3c59dc048e8850243be8079a5c74d079', 'jpg'),
(21, 22, 'b6d767d2f8ed5d21a44b0e5886680cb9', 'jpg'),
(22, 23, '37693cfc748049e45d87b8c7d8b9aacd', 'jpg'),
(23, 24, '1ff1de774005f8da13f42943881c655f', 'jpg'),
(24, 25, '8e296a067a37563370ded05f5a3bf3ec', 'jpg'),
(25, 26, '4e732ced3463d06de0ca9a15b6153677', 'jpg'),
(26, 27, '02e74f10e0327ad868d138f2b4fdd6f0', 'jpg'),
(27, 28, '33e75ff09dd601bbe69f351039152189', 'jpg'),
(28, 29, '6ea9ab1baa0efb9e19094440c317e21b', 'jpg'),
(29, 30, '34173cb38f07f89ddbebc2ac9128303f', 'jpg'),
(30, 31, 'c16a5320fa475530d9583c34fd356ef5', 'jpg'),
(31, 32, '6364d3f0f495b6ab9dcf8d3b5c6e0b01', 'jpg'),
(32, 33, '182be0c5cdcd5072bb1864cdee4d3d6e', 'jpg'),
(33, 34, 'e369853df766fa44e1ed0ff613f563bd', 'jpg'),
(34, 35, '1c383cd30b7c298ab50293adfecb7b18', 'jpg'),
(35, 36, '19ca14e7ea6328a42e0eb13d585e4c22', 'jpg'),
(36, 37, 'a5bfc9e07964f8dddeb95fc584cd965d', 'jpg'),
(37, 38, 'a5771bce93e200c36f7cd9dfd0e5deaa', 'jpg'),
(38, 39, 'd67d8ab4f4c10bf22aa353e27879133c', 'jpg'),
(39, 40, 'd645920e395fedad7bbbed0eca3fe2e0', 'jpg'),
(40, 41, '3416a75f4cea9109507cacd8e2f2aefc', 'jpg'),
(41, 42, 'a1d0c6e83f027327d8461063f4ac58a6', 'jpg'),
(42, 43, '17e62166fc8586dfa4d1bc0e1742c08b', 'jpg'),
(43, 44, 'f7177163c833dff4b38fc8d2872f1ec6', 'jpg'),
(44, 45, '6c8349cc7260ae62e3b1396831a8398f', 'jpg'),
(45, 47, '67c6a1e7ce56d3d6fa748ab6d9af3fd7', 'jpg'),
(46, 48, '642e92efb79421734881b53e1e1b18b6', 'jpg'),
(47, 49, 'f457c545a9ded88f18ecee47145a72c0', 'jpg'),
(48, 50, 'c0c7c76d30bd3dcaefc96f40275bdc0a', 'jpg'),
(49, 51, '2838023a778dfaecdc212708f721b788', 'jpg'),
(50, 52, '9a1158154dfa42caddbd0694a4e9bdc8', 'jpg'),
(51, 53, 'd82c8d1619ad8176d665453cfb2e55f0', 'jpg'),
(52, 54, 'a684eceee76fc522773286a895bc8436', 'jpg'),
(53, 55, 'b53b3a3d6ab90ce0268229151c9bde11', 'jpg'),
(54, 56, '9f61408e3afb633e50cdf1b20de6f466', 'jpg'),
(55, 57, '72b32a1f754ba1c09b3695e0cb6cde7f', 'jpg'),
(56, 58, '66f041e16a60928b05a7e228a89c3799', 'jpg'),
(57, 59, '093f65e080a295f8076b1c5722a46aa2', 'jpg'),
(58, 60, '072b030ba126b2f4b2374f342be9ed44', 'jpg'),
(59, 61, '7f39f8317fbdb1988ef4c628eba02591', 'jpg'),
(60, 62, '44f683a84163b3523afe57c2e008bc8c', 'jpg'),
(61, 63, '03afdbd66e7929b125f8597834fa83a4', 'jpg'),
(62, 64, 'ea5d2f1c4608232e07d3aa3d998e5135', 'jpg'),
(63, 65, 'fc490ca45c00b1249bbe3554a4fdf6fb', 'jpg'),
(64, 66, '3295c76acbf4caaed33c36b1b5fc2cb1', 'jpg'),
(65, 67, '735b90b4568125ed6c3f678819b6e058', 'jpg'),
(66, 68, 'a3f390d88e4c41f2747bfa2f1b5f87db', 'jpg'),
(67, 69, '14bfa6bb14875e45bba028a21ed38046', 'jpg'),
(68, 70, '7cbbc409ec990f19c78c75bd1e06f215', 'jpg'),
(69, 71, 'e2c420d928d4bf8ce0ff2ec19b371514', 'jpg'),
(70, 72, '32bb90e8976aab5298d5da10fe66f21d', 'jpg'),
(71, 73, 'd2ddea18f00665ce8623e36bd4e3c7c5', 'jpg'),
(72, 74, 'ad61ab143223efbc24c7d2583be69251', 'jpg'),
(73, 75, 'd09bf41544a3365a46c9077ebb5e35c3', 'jpg'),
(74, 76, 'fbd7939d674997cdb4692d34de8633c4', 'jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pastorates`
--

CREATE TABLE `pastorates` (
  `pastorate_id` int(11) NOT NULL,
  `pastorate` varchar(400) NOT NULL,
  `diocese_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pastorates`
--

INSERT INTO `pastorates` (`pastorate_id`, `pastorate`, `diocese_id`, `status`) VALUES
(1, 'Magomeni', 2, 1),
(2, 'Malampaka', 3, 1),
(3, 'Majengo-Kahama', 3, 1),
(4, 'Musoma', 4, 1),
(5, 'Kambarage', 3, 1),
(6, 'Yeriko', 5, 1),
(7, 'Tabora', 6, 1),
(8, 'Ipuli', 6, 1),
(9, 'Sikonge', 6, 1),
(10, 'Kigwa', 6, 1),
(11, 'Kambikatoto', 6, 1),
(12, 'Urambo', 6, 1),
(13, 'Kaliua', 6, 1),
(14, 'Usinge', 6, 1),
(15, 'Bukumbi', 6, 1),
(16, 'Mambali', 6, 1),
(17, 'Bukene', 6, 1),
(18, 'Buhulyu', 6, 1),
(19, 'Nzega', 6, 1),
(20, 'Nyasa', 6, 1),
(21, 'Choma', 6, 1),
(22, 'Igunga', 6, 1),
(23, 'Mwambiti', 6, 1),
(24, 'Igurubi', 6, 1),
(25, 'Mwanzuli', 6, 0),
(26, 'Misole', 6, 1),
(27, 'Mpyagula', 6, 1),
(28, 'Loya', 6, 1),
(29, 'Izumba', 6, 1),
(30, 'Nkinga', 6, 1),
(31, 'Sumbawanga', 6, 1),
(32, 'Mamba', 6, 1),
(33, 'Majimoto', 6, 1),
(34, 'Namanyele', 6, 1),
(35, 'Mwamapuli', 6, 1),
(36, 'Usevya', 6, 1),
(37, 'Karema', 6, 1),
(38, 'Kasekese', 6, 1),
(39, 'Upele', 6, 1),
(40, 'Itenka', 6, 1),
(41, 'Katavi', 6, 1),
(42, 'Kakese', 6, 1),
(43, 'Ilebula', 6, 1),
(44, 'Mpanda', 6, 1),
(45, 'Kamsisi', 6, 1),
(46, 'Kigoma', 6, 1),
(47, 'Kasulu', 6, 1),
(48, 'Kibondo', 6, 1),
(49, 'Sirari', 4, 1),
(50, 'Tarime', 4, 1),
(51, 'Utegi', 4, 1),
(52, 'Mugumu', 4, 1),
(53, 'Isenye', 4, 1),
(54, 'Kurusaga', 4, 1),
(55, 'Maliwanda', 4, 1),
(56, 'Kisangwa', 4, 1),
(57, 'Bunda', 4, 1),
(58, 'Bunda Bomani', 4, 1),
(59, 'Manyamanyama', 4, 1),
(60, 'Kabasa', 4, 1),
(61, 'Bulamba', 4, 1),
(62, 'Kasuguti', 4, 1),
(63, 'Masinono', 4, 1),
(64, 'Kenkombyo', 4, 1),
(65, 'Kibara', 4, 1),
(66, 'Kitengule', 4, 1),
(67, 'Mkoko', 4, 1),
(68, 'Nafuba', 4, 1),
(69, 'Kisorya', 4, 1),
(70, 'Nansio', 4, 1),
(71, 'Bukongo', 4, 1),
(72, 'Murutunguru', 4, 1),
(73, 'Kazilankanda', 4, 1),
(74, 'Kigara', 4, 1),
(75, 'Bukondo', 4, 1),
(76, 'Bwiro', 4, 1),
(77, 'Bugula', 4, 1),
(78, 'Busagami', 4, 1),
(79, 'Masonga', 4, 1),
(80, 'Katende', 4, 1),
(81, 'Chibasi', 4, 1),
(82, 'Irugwa', 4, 1),
(83, 'Majita', 4, 1),
(84, 'Mugango', 4, 1),
(85, 'Kiabakari', 4, 1),
(86, 'Buhare', 4, 1),
(87, 'Makoko', 4, 1),
(88, 'Iringo', 4, 1),
(89, 'Bweri', 4, 1),
(90, 'Bukabwa', 4, 1),
(91, 'Chang\'ombe', 2, 1),
(92, 'Igoma', 7, 1),
(93, 'Kolandoto', 3, 1),
(94, 'Makongoro', 7, 1),
(95, 'Nyakato', 7, 1),
(96, 'Buzuruga', 7, 1),
(97, 'Bariadi', 3, 1),
(98, 'Kalangalala', 5, 1),
(99, 'Mbezi Beach', 2, 1),
(100, 'Ukonga', 2, 1),
(101, 'Kigamboni', 2, 1),
(102, 'Mbezi Luis', 2, 1),
(103, 'Kibaha', 2, 1),
(104, 'Mbagala', 2, 1),
(105, 'Tabata', 2, 1),
(106, 'Airport', 2, 1),
(107, 'Kongowe', 2, 1),
(108, 'Morogoro', 2, 1),
(109, 'Kizota', 2, 1),
(110, 'Ipagala', 2, 1),
(111, 'Manyoni', 2, 1),
(112, 'Singida', 2, 1),
(113, 'Mtwara', 2, 1),
(114, 'Majengo - Arusha', 2, 1),
(115, 'Njiro', 2, 1),
(116, 'Mwanzugi', 6, 1),
(117, 'Igunguli', 6, 1),
(118, 'Mpungu', 6, 1),
(119, 'Ngâ€™wawile', 7, 1),
(120, 'Isenengeja', 7, 1),
(121, 'Lubili', 7, 1),
(122, 'Busongo', 7, 1),
(123, 'Wisolele', 7, 1),
(124, 'Nyamayinza', 7, 1),
(125, 'Seeke', 7, 1),
(126, 'Mbalika', 7, 1),
(127, 'Misasi', 7, 1),
(128, 'Kijima', 7, 1),
(129, 'Ikungumhulu', 7, 1),
(130, 'Sasi', 7, 1),
(131, 'Manawa Ginery', 7, 1),
(132, 'Misungwi', 7, 1),
(133, 'Ngâ€™ombe', 7, 1),
(134, 'Nyahiti', 7, 1),
(135, 'Bomani', 7, 1),
(136, 'Iteja', 7, 1),
(137, 'Nguge', 7, 1),
(138, 'Mwambola', 7, 1),
(139, 'Mondo', 7, 1),
(140, 'Ukiriguru', 7, 1),
(141, 'Usagara', 7, 1),
(142, 'Bukumbi', 7, 1),
(143, 'Ngâ€™walongwabagole', 7, 1),
(144, 'Nyangomango', 7, 1),
(145, 'Nyamle', 7, 1),
(146, 'Mkolani', 7, 1),
(147, 'Buhongwa', 7, 1),
(148, 'Nyabulogoya', 7, 1),
(149, 'Butimba', 7, 1),
(150, 'Sahwa', 7, 1),
(151, 'Luchelele', 7, 1),
(152, 'Nyegezi', 7, 1),
(153, 'Bugando', 7, 1),
(154, 'Kiloleli Mjini', 7, 1),
(155, 'Nyamanoro', 7, 1),
(156, 'Mabatini', 7, 1),
(157, 'Kabuholo', 7, 1),
(158, 'Bwiru', 7, 1),
(159, 'Ilemela', 7, 1),
(160, 'Pasiansi', 7, 1),
(161, 'Kiseke', 7, 1),
(162, 'Lwashi', 7, 1),
(163, 'Igombe', 7, 1),
(164, 'Mhonze', 7, 1),
(165, 'Kishili', 7, 1),
(166, 'Ndofe', 7, 1),
(167, 'Maswa', 7, 1),
(168, 'Mbugani', 7, 1),
(169, 'Nyamhongoro', 7, 1),
(170, 'Shamaliwa', 7, 1),
(171, 'Majanini', 7, 1),
(172, 'Buswelu', 7, 1),
(173, 'Ilalila', 7, 1),
(174, 'Mecco', 7, 1),
(175, 'Nsumba', 7, 1),
(176, 'Kangae', 7, 1),
(177, 'Nyasaka', 7, 1),
(178, 'Masemele', 7, 1),
(179, 'Nyangulugulu', 7, 1),
(180, 'Bujora', 7, 1),
(181, 'Igunga', 7, 1),
(182, 'Igusa', 7, 1),
(183, 'Sekagi', 7, 1),
(184, 'Kayenze', 7, 1),
(185, 'Kanyama', 7, 1),
(186, 'Nyanguge', 7, 1),
(187, 'Matela', 7, 1),
(188, 'Bukandwe', 7, 1),
(189, 'Misambo', 7, 1),
(190, 'Lugeye', 7, 1),
(191, 'Magu', 7, 1),
(192, 'Yichobela', 7, 1),
(193, 'Kahangara', 7, 1),
(194, 'Salongâ€™we', 7, 1),
(195, 'Ilungu', 7, 1),
(196, 'Ngâ€™walinha', 7, 1),
(197, 'Isandula', 7, 1),
(198, 'Bulima', 7, 1),
(199, 'Nyamikoma', 7, 1),
(200, 'Kalemela', 7, 1),
(201, 'Shigala', 7, 1),
(202, 'Nassa Ginnery', 7, 1),
(203, 'Kabita', 7, 1),
(204, 'Nyakaboja', 7, 1),
(205, 'Kabila', 7, 1),
(206, 'Mahaha', 7, 1),
(207, 'Ngâ€™haya', 7, 1),
(208, 'Galamugi', 7, 1),
(209, 'Kadashi', 7, 1),
(210, 'Maligisu', 7, 1),
(211, 'Mkula', 7, 1),
(212, 'Lamadi', 7, 1),
(213, 'Mwamagigisi', 7, 1),
(214, 'Ngasamo', 7, 1),
(215, 'Nyangili', 7, 1),
(216, 'Sanga', 7, 1),
(217, 'Manawa', 7, 1),
(218, 'Nyambiti', 7, 1),
(219, 'Ngâ€™wabilanda', 7, 1),
(220, 'Chanogu', 7, 1),
(221, 'Nyamatala', 7, 1),
(222, 'Koromije', 7, 1),
(223, 'Sumve', 7, 1),
(224, 'Kanyelele', 7, 1),
(225, 'Mantare', 7, 1),
(226, 'Ngudu', 7, 1),
(227, 'Ngâ€™hundi', 7, 1),
(228, 'Jojiro', 7, 1),
(229, 'Mahiga', 7, 1),
(230, 'Itongo', 7, 1),
(231, 'Mabuki', 7, 1),
(232, 'Malya', 7, 1),
(233, 'Lyoma', 7, 1),
(234, 'Kitunga', 7, 1),
(235, 'Mgâ€™hungumalwa', 7, 1),
(236, 'Bugembe', 7, 1),
(237, 'Isagengâ€™he', 7, 1),
(238, 'Lunele', 7, 1),
(239, 'Imalilo', 7, 1),
(240, 'Kikubiji', 7, 1),
(241, 'Mwamashimba', 7, 1),
(242, 'Gulungâ€™wa', 7, 1),
(243, 'Nyangâ€™honge', 7, 1),
(244, 'Kiloleli', 7, 1),
(245, 'Masanza', 7, 1),
(246, 'Badugu', 7, 1),
(247, 'Nyaluhande', 7, 1),
(248, 'Sayaka', 7, 1),
(249, 'Usangu', 2, 1),
(250, 'Ziwa Eyasi', 2, 1),
(251, 'Kagunguli', 4, 1),
(252, 'Muluseni', 4, 1),
(253, 'Bomani', 4, 1),
(254, 'NDALA', 3, 1),
(255, 'CHIBE', 3, 1),
(256, 'OLD SHINYANGA', 3, 1),
(257, 'NGOKOLO', 3, 1),
(258, 'Bukoli', 5, 1),
(259, 'Butwa', 5, 1),
(260, 'Nyakaswi', 5, 1),
(261, 'Idetemya', 5, 1),
(262, 'Nyaseke', 5, 1),
(263, 'Bunegezi', 5, 1),
(264, 'Nkome', 5, 1),
(265, 'Nyamboge', 5, 1),
(266, 'Buyombe', 5, 1),
(267, 'Nyarugusu', 5, 1),
(268, 'Chikobe', 5, 1),
(269, 'Lwamugasa', 5, 1),
(270, 'Bethelehemu', 5, 1),
(271, 'Kasamwa Ginnery', 5, 1),
(272, 'Nyakahako', 5, 1),
(273, 'Nyawilimilwa', 5, 1),
(274, 'Nyamalimbe', 5, 1),
(275, 'Nzera', 5, 1),
(276, 'Tumaini', 5, 1),
(277, 'Imani', 5, 1),
(278, 'Buzanaki', 5, 1),
(279, 'Kasamwa', 5, 1),
(280, 'Gengesaba', 5, 1),
(281, 'Nyalwanzaja', 5, 1),
(282, 'Lushimba', 5, 1),
(283, 'Lwezera', 5, 1),
(284, 'Nyamililo', 5, 1),
(285, 'Ndelema', 5, 1),
(286, 'Kasota', 5, 1),
(287, 'Bugalama', 5, 1),
(288, 'Kayenze \'B\'', 5, 1),
(289, 'Nyamatongo', 5, 1),
(290, 'Nyakagwe', 5, 1),
(291, 'Iligamba', 5, 1),
(292, 'Chigunga', 10, 1),
(293, 'Kharumwa', 5, 1),
(294, 'Chigunga', 5, 1),
(295, 'Nyijundu', 5, 1),
(296, 'Mabogo', 5, 1),
(297, 'Yordani', 5, 1),
(298, 'Nhwiga', 5, 1),
(299, 'Kahunda', 5, 1),
(300, 'Busolwa', 5, 1),
(301, 'Mugusu', 5, 1),
(302, 'Nyamigota', 5, 1),
(303, 'Kifufu', 5, 1),
(304, 'Nyankumbu', 5, 1),
(305, 'Katoro', 5, 1),
(306, 'Nyamizeze', 5, 1),
(307, 'Buzilasoga', 5, 1),
(308, 'Nyehunge', 5, 1),
(309, 'Kanoni', 5, 1),
(310, 'Bukoba', 5, 1),
(311, 'Karagwe', 5, 1),
(312, 'Kisaba', 5, 1),
(313, 'Bwanga', 5, 1),
(314, 'Msasa', 5, 1),
(315, 'Idoselo', 5, 1),
(316, 'Senga', 5, 1),
(317, 'Nyakasungwa', 5, 1),
(318, 'Mwembeni', 5, 1),
(319, 'Kakubilo', 5, 1),
(320, 'Sima', 5, 1),
(321, 'Nyanza', 5, 1),
(322, 'Butundwe', 5, 1),
(323, 'Lubanga', 5, 1),
(324, 'Sogoso', 5, 1),
(325, 'Igaka', 5, 1),
(326, 'Bukwimba', 5, 1),
(327, 'Kayenze \'A\'', 5, 1),
(328, 'Nyanchenche', 5, 1),
(329, 'Ngoma', 5, 1),
(330, 'Nyamilyango', 5, 1),
(331, 'Shabaka', 5, 1),
(332, 'Nyang\'hwale', 5, 1),
(333, 'Kishinda', 5, 1),
(334, 'Kamhanga', 5, 1),
(335, 'Juma Kisiwani', 5, 1),
(336, 'Kijuka', 5, 1),
(337, 'Nyanzenda', 5, 1),
(338, 'Katunguru', 5, 1),
(339, 'Luhama', 5, 1),
(340, 'Ilunda', 5, 1),
(341, 'Nyampande', 5, 1),
(342, 'Buyagu', 5, 1),
(343, 'Busisi', 5, 1),
(344, 'Sukuma', 5, 1),
(345, 'Bukondo', 5, 1),
(346, 'Itabagumba', 5, 1),
(347, 'Isaka', 5, 1),
(348, 'Bupandwa', 5, 1),
(349, 'Tabaluka', 5, 1),
(350, 'Bukala', 5, 1),
(351, 'Sengerema', 5, 1),
(352, 'Nyampulukano', 5, 1),
(353, 'Majengo', 5, 1),
(354, 'Bomani', 5, 1),
(355, 'Nyanango', 5, 1),
(356, 'Kalebezo', 5, 1),
(357, 'Kakobe', 5, 1),
(358, 'Ngara', 5, 1),
(359, 'Ipalamasa', 5, 1),
(360, 'Nyisanzi', 5, 1),
(361, 'Kikumbaitale', 5, 1),
(362, 'Agape', 5, 1),
(363, 'Ikuza', 5, 1),
(364, 'Itale', 5, 1),
(365, 'Kibehe', 5, 1),
(366, 'Nyakato', 5, 1),
(367, 'Muungano', 5, 1),
(368, 'Buzilayombo', 5, 1),
(369, 'Kachwamba', 5, 1),
(370, 'Ilemela', 5, 1),
(371, 'Nemba', 5, 1),
(372, 'Chato', 5, 1),
(373, 'Buziku', 5, 1),
(374, 'Biharamulo', 5, 1),
(375, 'Busaka', 5, 1),
(376, 'Buseresere', 5, 1),
(377, 'Kyamyolwa', 5, 1),
(378, 'Muleba', 5, 1),
(379, 'Magamba', 5, 1),
(380, 'Kome', 5, 1),
(381, 'Nyakalilo', 5, 1),
(382, 'Bukokwa', 5, 1),
(383, 'Muganza', 5, 1),
(384, 'Lyulu', 5, 1),
(385, 'Isonda', 5, 1),
(386, 'Bumbire', 5, 1),
(387, 'Iramba', 5, 1),
(388, 'Nyakanazi', 5, 1),
(389, 'Lunazi', 5, 1),
(390, 'Kaboha', 5, 1),
(391, 'KITANGILI', 3, 1),
(392, 'NHELEGANI', 3, 1),
(393, 'BULIMA', 3, 1),
(394, 'KOLANDOTO \"A\"', 3, 1),
(395, 'KOLANDOTO \"B\"', 3, 1),
(396, 'IBADAKULI', 3, 1),
(397, 'MAGANZO', 3, 1),
(398, 'SONGWA', 3, 1),
(399, 'BUBIKI', 3, 1),
(400, 'MONDO', 3, 1),
(401, 'IDIDI', 3, 1),
(402, 'BUNAMBIYU', 3, 1),
(403, 'MWADUI', 3, 1),
(404, 'MASELA', 3, 1),
(405, 'IDUKILO', 3, 1),
(406, 'MWABOMBA', 3, 1),
(407, 'NYAMALOGO', 3, 1),
(408, 'MISHEPO', 3, 1),
(409, 'USULE', 3, 1),
(410, 'ISELAMAGAZI', 3, 1),
(411, 'SALAWE', 3, 1),
(412, 'SOLWA', 3, 1),
(413, 'MHANGU', 3, 1),
(414, 'MWAKITOLYO', 3, 1),
(415, 'LYABUKANDE', 3, 1),
(416, 'BULIGE', 3, 1),
(417, 'MAJENGO', 3, 1),
(418, 'TINDE', 3, 1),
(419, 'BUSANDA', 3, 1),
(420, 'ILOLA', 3, 1),
(421, 'DIDIA', 3, 1),
(422, 'NYIDA', 3, 1),
(423, 'KISHAPU', 3, 1),
(424, 'UCHUNGA', 3, 1),
(425, 'ILULA', 3, 1),
(426, 'SHAGIHILU', 3, 1),
(427, 'UKENYENGE', 3, 1),
(428, 'NEGEZI', 3, 1),
(429, 'KILOLELI', 3, 1),
(430, 'MIHAMA', 3, 1),
(431, 'BUZINZA', 3, 1),
(432, 'MWAMASHELE', 3, 1),
(433, 'MWAMASHIMBA', 3, 1),
(434, 'LALAGO', 3, 1),
(435, 'IRINGA', 11, 1),
(436, 'MBEYA', 11, 1),
(437, 'USANGU', 11, 1),
(438, 'SONGWE', 11, 1),
(439, 'NJOMBE', 11, 1),
(440, 'SONGEA', 11, 1),
(441, 'KYELA', 11, 1),
(442, 'MOSHI', 11, 1),
(443, 'NJIRO', 11, 1),
(444, 'BABATI', 11, 1),
(445, 'LAKE EYAS', 11, 1),
(446, 'BARAY', 11, 1),
(447, 'MONDULI', 11, 1),
(448, 'MAJENGO', 11, 1),
(449, 'ENDULEN', 11, 1),
(450, 'MANYONI', 11, 1),
(451, 'SINGIDA', 11, 1),
(452, 'MGANDU', 11, 1),
(453, 'KARANGASI', 11, 1),
(454, 'KIYOMBO', 11, 1),
(455, 'KIZOTA', 11, 1),
(456, 'IPAGALA', 11, 1),
(457, 'KIBAIGWA', 11, 1),
(458, 'BEROYA', 11, 1),
(459, 'PAHI', 11, 1),
(460, 'KWAMTORO', 11, 1),
(461, 'KWAMADEBE', 11, 1),
(462, 'MAGAMBUA', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pastorphotos`
--

CREATE TABLE `pastorphotos` (
  `photo_id` int(20) NOT NULL,
  `pastor_id` int(20) NOT NULL,
  `ext` varchar(5) NOT NULL,
  `published` varchar(50) NOT NULL,
  `caption` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pastorphotos`
--

INSERT INTO `pastorphotos` (`photo_id`, `pastor_id`, `ext`, `published`, `caption`) VALUES
(1, 0, 'jpg', 'published', 'Mchungaji Paul Mabula Kengele akiwa na mke wake.'),
(11, 4, 'jpg', 'published', 'no caption'),
(26, 3, 'jpg', 'published', 'no caption'),
(31, 8, 'jpg', 'published', 'no caption');

-- --------------------------------------------------------

--
-- Table structure for table `pastors`
--

CREATE TABLE `pastors` (
  `pastor_id` int(20) NOT NULL,
  `fullnames` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `church_id` int(11) NOT NULL,
  `diocese_id` int(11) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `wife` varchar(100) NOT NULL,
  `poster_id` int(20) NOT NULL,
  `bio` varchar(10000) NOT NULL,
  `ext` varchar(5) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pastors`
--

INSERT INTO `pastors` (`pastor_id`, `fullnames`, `dob`, `church_id`, `diocese_id`, `start_date`, `wife`, `poster_id`, `bio`, `ext`, `username`, `password`, `status`) VALUES
(2, 'sample', '23/11/1950', 0, 0, '2008', 'sample data', 3, 'sfkfktkkkrkrk', 'jpg', '', '', 'Inactive'),
(3, 'Paul Mabula Kengele', '1966', 0, 0, '24/1/1999', 'Eliada Subyeki Kengele', 3, 'Nilizaliwa 1966 Iseja-Sesele kata ya Nyanguge wilaya ya Magu. Elimu ya msingi nilisoma na kuhitimu mwaka 1984katika shule ya msingi ya Matela. Nilimpokea yesu kuwa Mwokozi na Bwana tarehe 15/12/1985 katika kanisa la AICT Matela na kubatizwa Machi 1986 Nyanguge na Rev. Paul Nyanda. Nilijiunga na chuo cha biblia Katungulu mwaka 1989 na kuhitimu July 8, 1993 na kwenda katika local church ya Bitaraguru pastoreti ya Kisangwa Bunda hadi 1998 pale nilipoteuliwa kuhudhuria kozi ya uchungaji. Nilitumwa Kasuguti ambapo tulitumika kuanzia mwaka 1999 mpaka 2010. Baadae nilihamishiwa kanisa la Uaskofu Nyasho Musoma had Septemba2014 ambapo nilihamishiwa pastoreti teule ya Buhare ambapo ilizinduliwa rasmi tarehe 26/10/2014 ndipo naendelea kutumika mpaka sasa. Hivyo utumishi wangu mpaka kufikia sasa ni miaka 21.', 'jpg', '', '', 'Inactive'),
(4, 'Mathias Mleka Kadinda', '1/1/1968', 0, 0, '11/12/2011', 'Naomi Mleka', 3, 'Nilizaliwa katika familia ya watu wasio wacha Mungu.  Kabla sijaenda katika chuo cha biblia nilipata wito wakuanza kumtumikia Mungu katika kanisa la AICT Sumba, Pastoreti ya Buswelu Dayosisi ya Mwanza tangu mwaka 1993 mpaka 2002 ndipo nikajiunga na chuo cha biblia tarehe 31/8/2009. July 2006 nilitumwa Mara Ragata, Kasuguti mwaka 2006 mpaka 2009 ndipo nikahamishiwa Kibara 2009 mpaka 2011 ambapo nilichaguliwa kuwa Mchungaji mteule, Baada ya kumaliza kozi ya Uchungaji nikatumwa Manyamanyama, ndipo nilipo mpaka sasa baada ya kuwekewa mikono kuwa Mchungaji.', 'jpg', '', '', 'Inactive'),
(5, 'Elikana Magigita', '1958', 0, 0, '2008', 'Ruth Magigita', 3, 'Mimi ni Mchungaji Elikana Magigita na mke wangu Ruth Magigita. Mungu ametubariki kuwa watumishi wake. Tuna watoto tisa(9) na wajukuu 18 tumeingizwa na Bwana katika nafasi ya Uchungaji mwaka 2008 tukiwa pastoreti ya I senye na tukapewa uhamisho kwenda pastoreti ya Bunda Bomani mpaka sasa tulipo tunauona mkono wa Bwana ukitubariki.', 'jpg', '', '', 'Inactive'),
(6, 'sample', 'sample', 0, 0, 'sample', 'sample', 0, '<p><span style=\"color:rgb(20, 24, 35); font-family:helvetica,arial,lucida grande,tahoma,verdana,arial,sans-serif; font-size:14px\">A Japanese engineer has created a trash can that moves on its own to catch your trash. Developed by Minoru Kurata, the device features a wall-mounted sensor that detects which direction the trash is coming from. A computer then calculates the thrown trash&#39;s trajectory and moves the trash can so the item will land inside the can. The invention won an Excellence Award at the Japan Media Arts Festival</span></p>', 'jpg', '', '', 'Inactive'),
(7, 'Charles B. Sanagu', '11/6/1970', 1, 0, 'June 2003', 'Sarah H. Zakayo Nkulokulu', 4, '<p>Nilizaliwa tarehe 11 June 1970 katika kijiji cha Kalangalala, Sengerema na kusoma elimu ya msingi katika kijiji cha Ikindilo Bariadi Shinyanga. Namshukuru Mungu kunipa neema ya kumjua mnamo tangu mwaka 1987 na kubatizwa 1989. Mwaka 1994 nilipata wito wa kwenda kumtumikia Mungu, na kabla ya kutimiza ndoto hii nilipata neema ya kujiunga na chuo cha biblia Majahida tangu tarehe 22/8/1994 hadi tarehe 16/7/1998 na kuanza huduma ya uinjilisti tarehe 27/7/1998 ukerewe na kujiunga na chuo Uchungaji. Nimekuwa mchungaji kibaha, chang&#39;ombe, bagamoyo, changanyikeni na sasa ni Mchungaji Magomeni na msaidizi wa Askofu Pwani.</p>', 'JPG', 'charles.sanagu', 'bb0b28e2d8ade15b428a0bec8c59a3a9', 'active'),
(8, 'andrew mawanda', '12/06/1990', 1, 0, '2001', 'mary ann', 3, '<p>here is my biography</p>', 'jpg', 'aict', '03539c97829606f4827b06a76666972b', 'Inactive'),
(9, 'Charles Petro Lugembe', '24/6/1963', 2, 0, '11/3/2001', 'Cathren Joseph Lugembe', 4, '<p><br />\r\nI have been chairman of team group since 2005 to 2010 dioceses of shinyanga. I&nbsp;have completed B.A HARVEST &nbsp;LAND COLLEGE 2007-2009, iam of PROFFESSIONAL OF STUDIES,now am sttudying (MA) at therapon university- shinyanga campus in leadership and management</p>', 'JPG', 'charles.lugembe', 'c26b6f62763f423e3116a6fc64fd6eee', 'active'),
(10, 'Jacob Joash Ocholla', '10/4/1974', 3, 0, '22/2/2009', 'Rebecca Charles', 4, '<p>Mimi jacob joash ochola nilizaliwa katika kijiji cha Izumachele wilayani geita ,mkoa wa geita, baada ya kumaliza elimu ya msingi mwaka 1989.Nilijiunga &nbsp;na chuo cha biblia cha Katungulu mwaka 1996-2000. Baada ya kuhitimu masomo ya chuo cha biblia nilianza kumtumikia Mungu kama mwinjilisti katika maeneo mbalimbali kama vile Kalibeze sengerema, Utegi Mara, Sirari na Musoma, na mwaka 2008 &nbsp;nilikwenda chuo cha uchungaji cha Bwiru Mwanza .Nina mke na watoto wanne(4), wakike wawili na wakiume wawili.</p>', 'JPG', 'jacob.ocholla', 'f5e5a2b6c067f900f45d20f587584a7c', 'active'),
(11, 'Paul Doto Kasheto', '1/7/1966', 4, 0, '20/11/1995', 'Elizabeth Erasto', 4, '<p>Nilianza kazi ya bwana mwaka 1985,nilipomjua Yesu kuwa ni bwana na mwokovu wangu toka katika kijiji cha Jimondoli &nbsp;mkoa wa shinyanga, chuo cha biblia Katungulu 1991, NTC 2004, uinjilisti-Kibara,uchungaji-Majita,Kazilankanda 2004-2008, Nansio2008-2014, Musoma 2014 makamu (mch msaidizi wa askofu-MMD), nina watoto wanne ,Daniel,Erasto,Tezira na Dorice.</p>', 'JPG', 'paul.kasheto', '37d62c862644dc168fe7eba3a308e976', 'active'),
(12, 'Aaron Isilyumu Malyuta', '30/5/1948', 5, 0, '2000', 'Florence Seleman', 4, '<p>Nilianza kusoma shule ya datasa la kwanza, 1957 huko Kwimba na kumaliza darasa la nne na kujiunga middle school Buyogo 1961. Nilihitimu darasa la saba, 1964 na kujiunga na shule ya Sekondari ya Shinyanga nilihitimu kidato cha nne mwaka 1968. Nilienda chuo cha ualimu Marangu Moshi 1969-1970. Nilijiunga na jeshi la kujenga taifa kwa mujibu wa sheria na baada ya hapo niliajiriwa kazi ya ualimu katika shule ya msingi wilaya ya Kwimba mkoa wa Mwanza. Nimefundisha shule mbalimbali na nyadhifa kama mwalimu mkuu na mratibu wa elimu wa kata. Pia nilichukua mafunzo ya elimu maalumu huko Tabora na kuwa mwalimu wa viziwi na kufundisha shule ya viziwi, Mugeza Bukoba.&nbsp;</p>\r\n\r\n<p>Nilimwamini Yesu 1957 na kubatizwa 1961 huko Kijima. Nilitumika kanisani kama mzee wa Kanisa sehemu ambayo nilikaa kikazi. Mwaka 1989 nilienda kusoma chuo cha Biblia huko Nassa (NTC) hadi 1992 nilipotumwa kufundisha shule ya Biblia Katungulu. Mwaka 2002 nilihama na kuwa Mchungaji wa Buginza dayosisi ya Shinyanga na baadae kuhamia AICT Bariadi. Nilichaguliwa kuwa Mchungaji msaidizi wa Askofu mwaka 2015 dayosisi ya Shinyanga na kuhamia kanisa la AICT Kambarage, kwa sasa pia ni mwenyekiti wa idara ya injili na Misheni wa kanisa letu AICT.</p>', 'JPG', 'aaron.malyuta', 'd6bc2b836a5d407e8a2cbdd580ad11e5', 'active'),
(13, 'Obed Zakayo Nkulukulu', '1/1/1959', 6, 0, '1999', 'Loyce Enoka Kipeja', 4, '<p>Born in 1959, at Mwabalaturu village Bariadi distirict Simiyu. I completed my primary school education in 1975 at Ikindilo primary school.i completed sec.school at Nsumba sec. in 1975. I was baptized in 1971 after receiving Jesus christ as my saviour in 1969. In 1981 i completed my studies in cartography at Tabora Ardhi Institute. In 1992 i completed my Theology studies at Nassa theological college.I worked with goverment at Ruvula region. I have served with the church as a decow, Evawuelist, teacher, pastor and held position such as principal in bible schools, Director of Theological and biblical studies department , Dioceses tresurer, Acting dioceses general secretary and now am assiting the bishop.</p>', 'JPG', 'obed.nkulukulu', '5631f664224afc670fb3b570b24b1556', 'active'),
(14, 'Timothy B. Mpanilehi', '20/6/1982', 5, 0, '2015', 'Edina Wilson Majige', 4, '<p>Kwa&nbsp;neema ya Mungu nimezaliwa katika familia ya kichungaji. Nilianza huduma katika idara ya vijana na uimbaji wa kwaya katika kanisa la AICT-Bwiru, makongoro misasi na Musoma. Nilienda masomo ya Theologia Nassa (Nassa theological college)-2006. Mara baada ya masomo ya sekondari katika shule ya sekondari ya Kitangiri, kituo changu cha kwanza kilikua LTC ya Nzega Tabora kisha pastoreti ya Ipuli kama mchungaji.Nikiwa Tabora nilifanya huduma ya vijana kama mratibu wa Idara na sasa &nbsp;ninakaimu nafasi ya &nbsp;katibu &nbsp;mkuu wa AICT dayosisi ya Shinyanga.</p>', 'JPG', 'timothy.mpanilehi', 'dd69e5aa58b303c4d0d7152e5399decb', 'active'),
(15, 'Marco M. Ngalu', '14/9/1972', 7, 0, '2003', 'Shella Martha Leonard', 4, '<p>Mchungaji Marco M. Ngalu alizaliwa Isike, Sakwe, Bariadi mkoa wa Simiyu. Amehitimu shule ya msingi, Ibulyu Mwaka 1990 akaingia mafunzo ya mgambo mwaka 1991. Alimwamini Yesu kuwa mwana na mwokozi 1985 na kubatizwa mwaka 1987 na Mch. Shadrack Masele, Bariadi Simiyu. Mwaka 1993 akaiunga na chuo cha Biblia Majahida na kuhitimu mwaka 1997. Mwaka 1995-1997 alishika nafasi ya Mwenyekiti wa bweni chuoni. Alifungishwa ndoa mwaka 1998, Nov 21 na Mch Yakobo Malale wa pastorate ya Mwamunkesha Kanadi Bariadi. Mwaka 1997-2003 alikuwa Mwinjilisti local church ya Nyamilyango, pastorate ya Kasota, Geita. Mwaka 2002 alichaguliwa kujiunga na chuo cha Uchungaji na kutumwa pastorate ya Kasulu, Kigoma tangu 2003 hadi 2008.Mwaka 2008 hadi 2015 alihamishiwa pastorate ya Igunga, Tabora. Akiwa mwenyekiti wa chalo cha Mwambiti. Mwaka 2015 alichaguliwa kuwa Mchungaji msaidizi wa Askofu, dayosisi ya Tabora hadi sasa. Mchungaji Marco M. Ngalu pia ni mwenyekiti wa EKD Tabora.</p>', 'JPG', 'marco.ngalu', '5844690e9e18e76ac0e9629f5bce04e8', 'active'),
(16, 'Emmanuel Machibula', '25/10/1962', 17, 0, '20/10/1997', 'Kefleni Jihada', 4, '<p><br />\r\nNilisoma chuo cha biblia Katungulu mwaka 1988-1991, nilfanya kazi ya uinjilisti katika local church ya kigogoto pastorate ya Katungulu dayosisi ya Geita mwaka november 1991-1997. Nilisoma chuo cha uchungaji tarehe 1-30/5/1997,nilifanya kazi ya uchungaji katika pastorate ya Kitengule dayosisi ya mara na ukerewe november 1997-2006.Nimesoma chuo cha theologia cha Nassa August 2006-july 2010. Nimewahi kuwa mwenyekiti idara ya vijana ya dayosisi ya Mara na Ukerewe mwaka 1999- Julai 2006. Nimewahi kuwa mratibu idara ya vijana dayosisi ya Marana Ukerewe september 2010 july 2012. Katibu mkuu wa dayosisi ya Mara na Ukerewe tangu Agosti 2012 sasa. Nimewahi kuhudhuria mafunzo mbalimbali ikiwa ni pamoja na bible tarining centerr for pastors miaka miwili. Timothy leadership training (TLT) MIAKA miwili.Nimewahi kuhudhuria makongam,ano ya kimataifa kama vile (TEA) THEOLOGICAL EDUCATIO IN AFRICA nchini Kenya mara mbili na nchini Uganda mara mbili.</p>', 'JPG', 'emmanuel.machibula', '238bfcdcab2dd593a0dcb5488799f94d', 'active'),
(17, 'Alphonce Samambile Tambalu', '30/6/1964', 7, 0, '28/1/1996', 'Salome Joseph', 4, '<p>Nimesoma shule ya msingi Ng&#39;wakiyenze wilayani Misungwi Mwanza tangu 1975-1981 nilipohitimu nilijiunga na chuo cha Biblia cha Katungulu tangu 1987-1990 nilipohitimu. Nimekuwa mwinjilisti katika kanisa la AICT tangu 1990-1995 nilipoteuliwa kujiunga na chuo cha uchungaji kwa kuchukua kozi ya miezi mitatu katika fani ya Uchungaji huko Bwiru Mwanza ikiwa 1/6/1995. Niliwekewa mikono kuwa Mchungaji tarehe 28/1/1996 katika Pastorate ya AICT Bujora Mwanza. Nimekuwa katibu mkuu wa dayosisi ya Mwanza tangu 2005-2007. Baadae nilienda kusoma katika chuo cha Theologia cha Nassa Bulima, miaka minne tangu 2007-2011 nilipohitimi na kutunukiwa cheti cha Diploma ya juu na tangu 2011 hadi sasa ni katibu mkuu wa dayosisi ya Tabora. Nilimwamini Yesu kuwa Bwana na Mwokozi wangu tarehe 10/4/1980 AICT Matale, Pastorate ya Sasi, Mwanza. Nilibatizwa tarehe 29/5/1982 katika maji ya mto Kisiwi huko Matale. Mchungaji aliyenibatiza ni Mch Jonathan Gwabo.</p>', 'JPG', 'alphonce.tambalu', 'cbef359de2f9cf11a7ec0351022d8780', 'active'),
(18, 'Henry Jonathani Kanyumi', '2/1952', 22, 0, '1985', 'Esther Kanyumi', 4, '<p>Mimi nilizaliwa katika kijiji cha Nyamahona wilaya ya Sengerema, nilimaliza masomo ya shule ya msingi 1967 Katungulu Upper primary school. Nimepitia kozi ya chuo cha Biblia Katungulu miaka 4 tangu 1977-1980. Nilipata mafunzo ya uhamasishaji rasmali miaka 2 tangu 2008-2010 nikapata cheti cha Diploma. Nilihudhuria mafunzo ya ifikopo 2009 miezi 2. Nimepata mafunzo ya Pastor&#39;s course mwaka 1985. Mafunzo ya kuelimisha watu wenye Ualbino, elimu ya jamii kuunda vikundi vya pamoja. Nimeongoza Pastoate ya Makongoro, Tabora, Misasi, Igoma, Nyanguge, Idara ya Injili na Misheni, mhazini AICT, Katibu wa sinodi.</p>', 'JPG', 'henry.kanyumi', '074136744bea3d42f62dd24f2470d0ab', 'active'),
(19, 'Abedinego Mazabali', '1961', 472, 0, '8/2/2006', 'Helena Paulo', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(20, 'Adamu Mabindo', '29/03/1962', 314, 0, '17/02/2013', 'Esther Kayungilo', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(21, 'Alphaxard Peter Kabui', '14/07/1957', 302, 0, '25/02/2007', 'Godliver Thomas', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(22, 'Alfred Mganga', '1978', 888, 0, '2015', 'Anet Wilikista Osika', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(23, 'Alfred Nyamalo', '28/4/1961', 835, 0, '1/5/2005', 'Frola Ngando Magesa', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(24, 'Isack Kolombo Luzunya', '15/09/1974', 308, 0, '12/12/2020', 'Raheli Limbe Luhula', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(25, 'George Nyanda', '1962', 320, 0, '2001', 'Janet Charles Nyaruko', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(26, 'Japhet Mboje', '1971', 326, 0, '27/1/2013', 'Monica Musa', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(27, 'Elias Kahema', '1966', 332, 0, '2012', 'Grace Matigizu', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(28, 'James Makeja', '1956', 338, 0, '2/4/2006', 'Rahel Yohana', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(29, 'Yakobo Nila Lunyalika', '1970', 344, 0, '22/02/2019', 'Esther Masele Kazi', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(30, 'Reuben Mpuya Luyeye', '1967', 350, 0, '2017', 'Rahel Kisenha Salage', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(31, 'Joel Nkuji', '24/10/1957', 357, 0, '2001', 'Annastazia Chola Bulugu', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(32, 'Peter Nguta', '26/03/1965', 364, 0, '1/3/1998', 'Anna Jacobo Aroni', 8, '', 'png', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(33, 'Edward Phineas', '1960', 372, 0, '2001', 'Alidina Erenest', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(34, 'Musa Mhoja', '1964', 380, 0, '2001', 'Rebeka Maguja', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(35, 'Charles Itemo', '1970', 388, 0, '2013', 'Fortinata Mahumbi', 8, '', 'png', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(36, 'Jonathan John Miyekelo', '1/7/1964', 396, 0, '2004', 'Naomi Kulwa', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(37, 'Jackson Paulo Mboyi', '1/3/1960', 405, 0, '7/3/1993', 'Eunice Yakobo', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(38, 'Edward Mashalla', '1965', 417, 0, '2013', 'Neema Kachwele', 8, '', 'png', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(39, 'Methusela Ndaki', '9/12/1963', 422, 0, '20/06/1998', 'Eva Marko Siyabo', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(40, 'Emmanuel Sengo', '1979', 427, 0, '2/12/2017', 'Eda James', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(41, 'Ferdinand Bundala', '1964', 432, 0, '2003', 'Sara Samson', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(42, 'Timotheo Kamuli', '1953', 437, 0, '1989', 'Rebeka Enocka', 8, '', 'JPG', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(43, 'Abel Maningu', '1966', 442, 0, '2006', 'Eva Paulo Sahani', 8, '', 'png', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(44, 'Musa Jisusi', '1966', 447, 0, '6/22/1905', 'Eliza Gerishoni', 8, '', 'png', '', 'd41d8cd98f00b204e9800998ecf8427e', 'active'),
(45, 'Kaganzi Timothy', '', 11, 0, '', '', 0, '<p>Well done and more just</p>\r\n', '', '', '', 'active'),
(46, 'Kaganzi Timothy adj', '', 0, 2, '', '', 0, '<p>ljjgkhvj kjhgvujhvmn bkjbmn mn</p>\r\n', '', '', '', 'active'),
(47, 'Kaganzi Timothy adjust', '', 0, 5, '', '', 0, '<p>wellloe donre and mor eanf one</p>\r\n', 'jpg', '', '', 'active'),
(48, 'Kaganzi Timothy adjust and', '', 0, 5, '', '', 0, '<p>more is done and just desire</p>\r\n', 'jpg', '', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(20) NOT NULL,
  `album_id` int(20) NOT NULL,
  `caption` varchar(100) NOT NULL,
  `ext` varchar(5) NOT NULL,
  `published` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `album_id`, `caption`, `ext`, `published`) VALUES
(1, 1, 'Hili ndilo kanisa letu', 'jpg', 'published'),
(2, 1, 'Maeneo ya nje ya kanisa', 'jpg', 'published'),
(3, 1, 'Tusimame pamoja', 'jpg', 'published'),
(4, 1, 'hili ndilo kanisa', 'jpg', 'published'),
(5, 1, 'Askofu Silas Kezakubi akichukua picha na waaumini', 'jpg', 'published'),
(6, 1, 'Tukio la picha kwa pamoja likiendelea', 'jpg', 'published'),
(7, 1, 'Wakiendelea kuchukua picha', 'jpg', 'published'),
(8, 1, 'Askofu akiendelea kuchukua picha na waumini', 'jpg', 'published'),
(9, 1, 'Wakinamama na watoto wakichukua picha', 'jpg', 'published'),
(10, 1, 'Waumini wakichukua picha', 'jpg', 'published'),
(11, 2, 'Wanafunzi wa chuo wakiimba', 'jpg', 'published'),
(12, 2, 'Haya ndio majengo ya Chuo cha Bishop Kisula College', 'jpg', 'published'),
(13, 2, 'Mgeni rasmi Raisi Kikwete akisaini fomu mbele ya Askofu mkuu Silas Kezakubi', 'jpg', 'published'),
(14, 2, 'Raisi akipiga Picha ya Pamoja na viongozi wote wa AICT na hospital ya Mkula', 'jpg', 'published'),
(15, 2, 'Tukio la kuchukua picha likiendelea', 'jpg', 'published'),
(16, 2, 'Raisi akiendelea kuchukua picha na viongozi wa AICT na wakiserikali', 'jpg', 'published'),
(17, 2, 'Tukio la picha likiendelea kufanyika', 'jpg', 'published'),
(18, 2, 'Raisi akiendelea kuchukua picha na waalikwa wake', 'jpg', 'published'),
(19, 2, 'Raisi akisalimiana na wafanyakazi wa Chuo hiki', 'jpg', 'published'),
(20, 2, 'Raisi akielekea kufungua jiwe la msingi la chuo hiki cha Uuguzi', 'jpg', 'published'),
(21, 3, 'Haya ndio majengo ya chuo cha Bishop Kisula College', 'jpg', 'published'),
(22, 3, 'Wanafunzi wa chuo wakiimba', 'jpg', 'published'),
(23, 3, 'Raisi akisalimiana na wafanyakazi wa Chuo', 'jpg', 'published'),
(24, 3, 'Raisi akifungua jiwe la msingi la chuo', 'jpg', 'published'),
(25, 3, 'Raisi akichukua picha na viongozi mbalimbali wa Kanisa la AICT na wakiserikali', 'jpg', 'published'),
(26, 3, 'Tukio la picha kwa pamoja likiendelea', 'jpg', 'published'),
(27, 3, 'Raisi akiendelea kuchukua picha na waalikwa wake', 'jpg', 'published'),
(31, 3, 'Mgeni rasmi Raisi Mhe Jakaya Mrisho Kikwete akisaini fomu mbele y', 'jpg', 'published'),
(36, 4, 'Maandalizi', 'jpg', 'published'),
(37, 4, 'Maharusi wakiingia', 'jpg', 'published'),
(38, 4, 'Ukumbi ukiwasubiri maharusi', 'jpg', 'published'),
(39, 4, 'Mambo yakiendelea kupamba moto', 'jpg', 'published'),
(40, 4, 'Chereko chereko', 'jpg', 'published'),
(41, 4, 'Bibi harusi na msindikizaji wake', 'jpg', 'published'),
(42, 4, 'no caption', 'jpg', 'published'),
(43, 4, 'Askofu Magwesela na mama wakiwapongeza maharusi', 'jpg', 'published'),
(44, 4, 'Wakati wa kutoa zawadi', 'jpg', 'published'),
(45, 4, 'no caption', 'jpg', 'published'),
(46, 4, 'Picha ya pamoja', 'jpg', 'published'),
(47, 4, 'Pongezi zikiendelea', 'jpg', 'published'),
(48, 4, 'Tendo la kukata keki', 'jpg', 'published'),
(49, 4, 'Maharusi wakilishana keki', 'jpg', 'published'),
(50, 4, 'no caption', 'jpg', 'published'),
(51, 4, 'no caption', 'jpg', 'published'),
(52, 4, 'no caption', 'jpg', 'published'),
(53, 4, 'no caption', 'jpg', 'published'),
(54, 4, 'no caption', 'jpg', 'published'),
(55, 4, 'no caption', 'jpg', 'published'),
(56, 5, 'Waumini wakimwimbia bwana Mungu', 'jpg', 'published'),
(57, 6, 'AICT-Bwiru Choir wanatarajia kuzindua Albam yao ya CHOMOKA', 'jpg', 'published'),
(58, 6, 'AICT-BWIRU CHOIR wanatarajia kuzindua Albam yao ya CHOMOKA', 'jpg', 'published'),
(71, 0, 'Mch. Samwel Lupilya akiwakabidhi mtoto Mwal, Pius na mkewe baada ya kumbariki', 'jpg', 'unpublished'),
(72, 0, 'no caption', 'jpg', 'unpublished'),
(73, 0, 'Mwana Kikindi wa Injili na Misheni Ndg. Gershom Fereshi akifurahia mtoto alipo barikiwa', 'jpg', 'unpublished'),
(77, 0, 'no caption', 'jpg', 'unpublished'),
(78, 0, 'no caption', 'jpg', 'published'),
(79, 0, 'no caption', 'jpg', 'published'),
(80, 0, 'no caption', 'jpg', 'published'),
(81, 0, 'no caption', 'jpg', 'published'),
(82, 0, 'no caption', 'jpg', 'published'),
(83, 0, 'no caption', 'jpg', 'published'),
(84, 0, 'no caption', 'jpg', 'published'),
(85, 0, 'no caption', 'jpg', 'published'),
(86, 0, 'no caption', 'jpg', 'unpublished'),
(87, 0, 'no caption', 'jpg', 'published'),
(88, 0, 'no caption', 'jpg', 'published'),
(89, 0, 'no caption', 'jpg', 'published'),
(92, 0, 'no caption', 'jpg', 'published'),
(97, 0, 'no caption', 'jpg', 'published'),
(102, 0, 'no caption', 'jpg', 'published'),
(107, 0, 'no caption', 'jpg', 'published'),
(108, 0, 'no caption', 'jpg', 'published'),
(109, 0, 'no caption', 'jpg', 'published'),
(110, 0, 'no caption', 'jpg', 'published'),
(111, 0, 'no caption', 'jpg', 'published'),
(112, 0, 'no caption', 'jpg', 'published'),
(113, 0, 'no caption', 'jpg', 'published'),
(114, 0, 'no caption', 'jpg', 'published'),
(115, 0, 'no caption', 'jpg', 'published'),
(116, 0, 'no caption', 'jpg', 'published'),
(117, 0, 'no caption', 'jpg', 'published'),
(118, 0, 'no caption', 'jpg', 'published'),
(119, 0, 'no caption', 'jpg', 'published'),
(120, 0, 'no caption', 'jpg', 'published'),
(121, 0, 'no caption', 'jpg', 'published'),
(122, 0, 'no caption', 'jpg', 'published'),
(127, 0, 'no caption', 'jpg', 'published'),
(132, 0, 'no caption', 'jpg', 'published'),
(133, 0, 'no caption', 'jpg', 'published'),
(134, 0, 'no caption', 'jpg', 'published'),
(135, 0, 'no caption', 'jpg', 'published'),
(136, 0, 'no caption', 'jpg', 'published'),
(137, 0, 'no caption', 'jpg', 'published'),
(138, 0, 'no caption', 'jpg', 'published'),
(139, 0, 'no caption', 'jpg', 'published'),
(142, 0, 'no caption', 'jpg', 'published'),
(143, 0, 'no caption', 'jpg', 'published'),
(144, 0, 'no caption', 'jpg', 'published'),
(145, 0, 'no caption', 'jpg', 'published'),
(146, 0, 'no caption', 'jpg', 'published'),
(147, 0, 'Mch. Charles Mabisa na Mch. Mussa Hezeron, baada ya kukagua eneo litakalo jengwa AIC Burundi', 'jpg', 'published'),
(148, 0, 'Baadhi ya wajumbe wa kikundi cha Injili na Misheni baada ya kuona eneo litakalo jengwa makao makku y', 'jpg', 'published'),
(149, 0, 'Ndg. Manjondi Ezechiel- Mwinjilisti kiongonzi, akieleza matumizi ya eneo la kanisa la AIC Burundi', 'jpg', 'published'),
(150, 0, 'Mjue Mr. David Emanuel -Mpiga picha za video wa Idara ya Injili na Misheni, hapa anapiga picha eneo ', 'jpg', 'published'),
(151, 0, 'Baadhi ya wana Injili na Misheni wakijiandaa kuombea eneo la kanisa', 'jpg', 'published'),
(152, 0, 'no caption', 'jpg', 'published'),
(157, 10, 'no caption', 'jpg', 'unpublished'),
(158, 13, 'Maaskofu wa AICT, wakiwa kwenye maazimisho ya miaka 21 ya dayosisi ya Mwanza.', 'jpg', 'published'),
(159, 13, 'Hii ni moja ya kwaya za AICT ikiimba kwenye maazimisho ya miaka 21 ya dayosisi ya Mwanza.', 'jpg', 'published'),
(160, 13, 'Askofu John Kanoni Nkola akihubiri katika ibada ya jioni siku ya Jumamosi kwenye maazimisho ya miaka', 'jpg', 'published'),
(161, 13, 'Wakiristo wa kanisa la AICT, wakiazimisha miaka 21 ya dayosisi ya Mwanza.', 'jpg', 'published'),
(162, 13, 'Baadhi ya vijana wa kanisa la AICT, wakiazimisha miaka 21 ya dayosisi ya Mwanza.', 'jpg', 'published'),
(163, 13, 'Wachungaji na viongozi wa kanisa la AICT, wakiwa kwenye jukwaa kuu katika maazimisho ya miaka 21 ya ', 'jpg', 'published'),
(164, 13, 'Baadhi ya wanakwaya wa kanisa la AICT, wakisubiria kuimba kwenye maazimisho ya miaka 21 ya dayosisi ', 'jpg', 'published'),
(168, 14, 'Maaskofu wa AICT, wakiwa kwenye maazimisho ya miaka 21 ya dayosisi ya Mwanza.', 'jpg', 'published'),
(169, 14, 'Hii ni moja ya kwaya za AICT ikiimba kwenye maazimisho ya miaka 21 ya dayosisi ya Mwanza.', 'jpg', 'published'),
(170, 14, 'Baadhi ya vijana wa kanisa la AICT, wakiazimisha miaka 21 ya dayosisi ya Mwanza.', 'jpg', 'published'),
(171, 14, 'Baadhi ya wanakwaya wa kanisa la AICT, wakisubiria kuimba kwenye maazimisho ya miaka', 'jpg', 'published'),
(172, 14, 'Askofu John Kanoni Nkola akihubiri katika ibada ya jioni siku ya Jumamosi kwenye maazimisho', 'jpg', 'published'),
(173, 14, 'Baadhi ya Wakristo wa kanisa la AICT, wakiazimisha miaka 21 ya dayosisi ya Mwanza.', 'jpg', 'published'),
(174, 14, 'Wachungaji na viongozi wa kanisa la AICT, wakiwa kwenye jukwaa kuu katika maazimisho ya miaka 21 ya ', 'jpg', 'published'),
(178, 15, 'AICT Makongoro kwaya wakiimba.', 'jpg', 'published'),
(179, 15, 'Tukio la kumwekea mikono Askofu mteule John Bunango Muditi likikaribia.', 'jpg', 'published'),
(180, 15, 'Maaskofu wakijiandaa kumwekea mikono Askofu mteule John Bunango Muditi. kuwa Askofu wa dayosisi ya M', 'jpg', 'published'),
(181, 15, 'Tukio la Ibada ya kumuwekea mikono likiwa linaendelea.', 'jpg', 'published'),
(182, 15, 'Maaskofu wakisoma mistari yao kutoka kwenye biblia maalumu kwa Askofu John Bunango Muditi.', 'jpg', 'published'),
(183, 15, 'no caption', 'jpg', 'unpublished'),
(184, 15, 'Askofu John Bunango Muditi, akiwa na mke wake baada ya kuwekewa mikono.', 'jpg', 'published'),
(185, 15, 'Mgeni rasmi, Makamu wa Raisi ya Jamhuri ya Muungano wa Tanzania akielekea jukwaani kutoa hotuba.', 'jpg', 'published'),
(186, 15, 'Makamu wa Raisi wa Jamhuri ya Muungano wa Tanzania, akimpongeza Askofu John Bunango Muditi.', 'jpg', 'published'),
(187, 15, 'Katibu Mkuu wa AICT na Katibu wa Dayosisi ya Geita wakimpongeza Askofu John Bunango Muditi.', 'jpg', 'published'),
(188, 15, 'Mgeni rasmi, Maaskofu na Viongozi mabalimbali wakijiandaa kuchukua picha ya pamoja.', 'jpg', 'published'),
(189, 15, 'Tukio la picha ya pamoja likianza.', 'jpg', 'published'),
(190, 15, 'Tukio la picha ya pamoja likiendelea.', 'jpg', 'published'),
(191, 15, 'Tukio la picha ya pamoja likiendelea.', 'jpg', 'published'),
(192, 15, 'Tukio la Picha ya pamoja likikamilika.', 'jpg', 'published'),
(193, 15, 'Mgeni Rasmi, akiaga tayari kwa kuondoka uwanjani.', 'jpg', 'published'),
(194, 15, 'Kwaya ikiimba.', 'jpg', 'published'),
(195, 15, 'Askofu John Bunango Muditi, akiwa na mke wake baada ya ibada ya kumwekea wakfu kuisha.', 'jpg', 'published'),
(196, 15, 'Waumini mbalimbali wakimpongeza Askofu John Bunango Muditi.', 'jpg', 'published'),
(197, 16, 'Shughuli ya kuweka jiwe la msingi la majengo ya Chuo cha uuguzi Kolandoto ikitaka kuanza.', 'jpg', 'published'),
(198, 16, 'Maandalizi yakiendelea.', 'jpg', 'published'),
(199, 16, 'Askofu Mkuu, akikata utepe, tayari kwa kuweka jiwe la msingi.', 'jpg', 'published'),
(200, 16, 'Askofu Mkuu akielekea kufungua jiwe la msingi.', 'jpg', 'published'),
(201, 16, 'Askofu Mkuu, akiweka rasmi jiwe la msingi.', 'jpg', 'published'),
(202, 16, 'Shughuli ya ufunguzi ikiendelea.', 'jpg', 'published'),
(203, 16, 'Shughuli ya ufunguzi ikikamilika.', 'jpg', 'published'),
(204, 16, 'Wahitimu wa mafunzo ya unesi.', 'jpg', 'published'),
(205, 16, 'Baada ya kuweka jiwe la msingi.', 'jpg', 'published'),
(206, 16, 'Jiwe la msingi baada ya uzinduzi.', 'jpg', 'published'),
(207, 16, 'Jiwe la msingi.', 'jpg', 'published'),
(208, 16, 'Ndani ya moja ya darasa jipya.', 'jpg', 'published'),
(209, 16, 'Darasa jipya.', 'jpg', 'published'),
(210, 16, 'Wakitoka inje ya darasa baada ya ufunguzi rasmi.', 'jpg', 'published'),
(211, 16, 'Moja ya darasa la uuguzi linavyoonekana kwa ndani.', 'jpg', 'published'),
(212, 16, 'Jinsi madarasa yanavyoonekana kwa inje.', 'jpg', 'published'),
(213, 16, 'Zoezi la kupanda miti likianza.', 'jpg', 'published'),
(214, 16, 'Zoezi likiendelea', 'jpg', 'published'),
(215, 16, 'Zoezi la upandaji miti likiendelea.', 'jpg', 'published'),
(216, 16, 'Askofu Mkuu, akijiandaa kupanda mti.', 'jpg', 'published'),
(217, 16, 'Zoezi likiendelea', 'jpg', 'published'),
(218, 16, 'Askofu Mkuu akianza kupanda mti.', 'jpg', 'published'),
(219, 16, 'Askofu Mkuu, akimalizia kupanda mti mbele ya madarasa yaliyofunguliwa rasmi.', 'jpg', 'published'),
(220, 16, 'no caption', 'jpg', 'unpublished'),
(221, 16, 'no caption', 'jpg', 'unpublished'),
(222, 16, 'Katibu Mkuu akianza zoezi la kupanda mti.', 'jpg', 'published'),
(223, 16, 'Katibu Mkuu akimalizia kupanda mti.', 'jpg', 'published'),
(224, 16, 'Mwenyeketi wa bodi ya Afya, akianza kupanda mti.', 'jpg', 'published'),
(225, 16, 'Mwenyeketi wa Bodi, akimalizia kupanda mti.', 'jpg', 'published'),
(226, 16, 'Viongozi, wahitimu na watu mbalimbali wakiwa wamekusanyika mbele ya jengo baada ya shughuli ya kufun', 'jpg', 'published'),
(227, 17, 'Wahitimu wa Mafunzo ya uuguzi.', 'jpg', 'published'),
(228, 17, 'Wahitimu wakijipanga vizuri.', 'jpg', 'published'),
(229, 17, 'Tukio likiendelea.', 'jpg', 'published'),
(230, 17, 'Tukio bado likiwa linaendelea.', 'jpg', 'unpublished'),
(231, 17, 'Tukio likiwa bado linaendelea.', 'jpg', 'published'),
(232, 17, 'Maandalizi yakiendelea.', 'jpg', 'published'),
(233, 17, 'Wahitimu wakianza kutembea.', 'jpg', 'published'),
(234, 17, 'Viongozi wakielekea kwenye jukwaa, tayari kuanza kukabidhi vyeti.', 'jpg', 'published'),
(235, 17, 'Viongozi wakiongozwa na Askofu Mkuu, wakiendelea kuelekea jukwaani.', 'jpg', 'published'),
(236, 17, 'Eneo ambalo mahafari hayo yalipofanyika.', 'jpg', 'published'),
(237, 17, 'Hapa ndipo mahafari hayo, yalipofanyikia.', 'jpg', 'published'),
(238, 17, 'Viongozi wakiwa wamekaa Jukwaani, tayari kwa kuanza kutoa vyeti.', 'jpg', 'published'),
(239, 17, 'no caption', 'jpg', 'published'),
(240, 17, 'Wahitimu wakiwa kwenye jukwaa lao.', 'jpg', 'published'),
(241, 17, 'Shughuli ya kutoa vyeti, ikianza rasmi.', 'jpg', 'published'),
(242, 17, 'Askofu Mkuu, akitoa vyeti.', 'jpg', 'published'),
(243, 17, 'Tukio likiendelea.', 'jpg', 'published'),
(244, 17, 'Tukio likiendelea.', 'jpg', 'published'),
(245, 17, 'Tukio likiendelea.', 'jpg', 'published'),
(246, 17, 'Tukio likiendelea.', 'jpg', 'published'),
(247, 17, 'Tukio bado likiwa linaendelea.', 'jpg', 'published'),
(248, 17, 'tukio likiendelea.', 'jpg', 'published'),
(249, 17, 'no caption', 'jpg', 'unpublished'),
(250, 17, 'no caption', 'jpg', 'unpublished'),
(251, 17, 'no caption', 'jpg', 'unpublished'),
(252, 17, 'no caption', 'jpg', 'unpublished'),
(253, 17, 'no caption', 'jpg', 'unpublished'),
(254, 17, 'no caption', 'jpg', 'unpublished'),
(255, 17, 'no caption', 'jpg', 'unpublished'),
(256, 17, 'no caption', 'jpg', 'unpublished'),
(257, 17, 'Wahitimu wote, walipata vyeti baada ya kuhitimu mafunzo yao.', 'jpg', 'published'),
(262, 18, 'AICT CVC kutoka Dar wakiimba kwenye maadhimisho ya miaka 20 ya AICT dayosisi ya Mara na Ukerewe', 'jpg', 'published'),
(263, 18, 'Askofu mkuu wa AIC kenya Silas Yego akihubiri kwenye maadhimisho ya miaka 20 ya dayosisi ya Mara na ', 'jpg', 'published'),
(264, 18, 'Baadhi ya Maaskofu wa AIC wa kenya na tanzania wakiwa kwenye uwanja wa karume mjini musoma kwe shere', 'jpg', 'published'),
(265, 18, 'Baadhi ya Maaskofu wa AICT na wageni waalikwa wakiwa jukwaa kuu kwenye maadhimisho ya miaka 20 ya da', 'jpg', 'published'),
(266, 18, 'Baadhi ya Wakristo na viongozi wa umoja wa kinamama wakiwa wanaimba jukwaa kuu kwenye maadhimisho ya', 'jpg', 'published'),
(267, 18, 'Maaskofu wa AICT wakiwa kwenye maazimisho ya miaka 20 ya dayosisi ya Mara na Ukerewe.', 'jpg', 'published'),
(268, 18, 'Wakristo wa AICT dayosisi ya Mara na Ukerewe wakiwa kwenye maadhimisho ya miaka 20 ya dayosisi ya Ma', 'jpg', 'published'),
(269, 20, 'no caption', 'jpg', 'unpublished'),
(270, 20, 'no caption', 'jpg', 'unpublished'),
(271, 20, 'no caption', 'jpg', 'unpublished'),
(274, 20, 'Askofu Mkuu Kezakubi (kulia) akimsikiliza Askofu Nkola wote wakiwa kwenye msiba', 'jpg', 'published'),
(275, 20, 'Askofu Mkuu Silas Kezakubi (kulia) akimtamblisha Askofu John K. Nkola ambaye yuko tayari kuhubi kwen', 'jpg', 'published'),
(276, 20, 'Picha ya pamoja ya maaskofu pamoja na wake zao baada ya mazishi ya Mzee Andrew Kinuno', 'jpg', 'published'),
(277, 21, 'Hapa Mchungaji Tonny Surgent, mhubiri katika faragha ya maombe hiyo akielezea jambo wakati wa kipind', 'jpg', 'published'),
(278, 21, 'Jengo kuu la kituo cha Sanga Sanga nje kidogo ya mji wa Morogoro.', 'jpg', 'published'),
(279, 21, 'Katika picha hii Mchungaji Tony Swanson ambaye ndiye Mkuruganzi wa kituo cha Sanga Sanga anawaonye m', 'jpg', 'published'),
(280, 22, 'Askofu Salala na mkewe Mariam pamoja na watumishi Dayosisi ya Tabora wakiwa kwenye hoteli ya Lyamba ', 'jpg', 'published'),
(281, 22, 'Wakristo wa kanisa la Mwamapuli wanashangilia kwa furaha kumsindikiza Mchungaji Mteule akawekewe mik', 'jpg', 'published'),
(282, 22, 'Askofu Salala akimwekea mikono Mchungaji Mteule Daniel Malale wa Mwamapuli', 'jpg', 'published'),
(283, 24, 'caption here', 'jpg', 'published'),
(284, 24, 'no caption', 'jpg', 'published'),
(285, 24, 'no caption', 'jpg', 'published'),
(286, 24, 'no caption', 'jpg', 'published'),
(287, 24, 'no caption', 'jpg', 'published'),
(288, 24, 'no caption', 'jpg', 'published'),
(289, 24, 'no caption', 'jpg', 'published'),
(290, 24, 'no caption', 'jpg', 'published'),
(291, 24, 'no caption', 'jpg', 'published'),
(292, 24, 'no caption', 'jpg', 'published'),
(293, 24, 'no caption', 'jpg', 'published'),
(294, 24, 'no caption', 'jpg', 'published'),
(295, 24, 'no caption', 'jpg', 'published'),
(296, 24, 'no caption', 'jpg', 'published'),
(297, 24, 'no caption', 'jpg', 'published'),
(298, 24, 'no caption', 'jpg', 'published'),
(299, 24, 'no caption', 'jpg', 'published'),
(300, 24, 'no caption', 'jpg', 'published'),
(301, 24, 'no caption', 'jpg', 'published'),
(302, 24, 'no caption', 'jpg', 'published'),
(303, 24, 'no caption', 'jpg', 'published'),
(304, 24, 'no caption', 'jpg', 'published'),
(305, 24, 'no caption', 'jpg', 'published'),
(306, 24, 'no caption', 'jpg', 'published'),
(307, 24, 'no caption', 'jpg', 'published'),
(308, 24, 'no caption', 'jpg', 'published'),
(309, 24, 'no caption', 'jpg', 'published'),
(310, 24, 'no caption', 'jpg', 'published'),
(311, 24, 'no caption', 'jpg', 'published'),
(312, 24, 'no caption', 'jpg', 'published'),
(313, 24, 'no caption', 'jpg', 'published'),
(314, 24, 'no caption', 'jpg', 'published'),
(315, 24, 'no caption', 'jpg', 'published'),
(316, 24, 'no caption', 'jpg', 'published'),
(317, 24, 'no caption', 'jpg', 'published'),
(318, 24, 'no caption', 'jpg', 'published'),
(319, 24, 'no caption', 'jpg', 'published'),
(320, 24, 'no caption', 'jpg', 'published'),
(321, 24, 'no caption', 'jpg', 'published'),
(322, 24, 'no caption', 'jpg', 'published'),
(323, 24, 'no caption', 'jpg', 'published'),
(324, 24, 'no caption', 'jpg', 'published'),
(325, 24, 'no caption', 'jpg', 'published'),
(326, 24, 'no caption', 'jpg', 'published'),
(327, 24, 'no caption', 'jpg', 'published'),
(328, 24, 'no caption', 'jpg', 'published'),
(329, 24, 'no caption', 'jpg', 'published'),
(330, 24, 'no caption', 'jpg', 'published'),
(331, 24, 'no caption', 'jpg', 'published'),
(332, 24, 'no caption', 'jpg', 'published'),
(333, 24, 'no caption', 'jpg', 'published'),
(334, 24, 'no caption', 'jpg', 'published'),
(335, 24, 'no caption', 'jpg', 'published'),
(336, 24, 'no caption', 'jpg', 'published'),
(337, 24, 'no caption', 'jpg', 'published'),
(338, 24, 'no caption', 'jpg', 'published'),
(339, 24, 'no caption', 'jpg', 'published'),
(340, 24, 'no caption', 'jpg', 'published'),
(341, 24, 'no caption', 'jpg', 'published'),
(342, 24, 'no caption', 'jpg', 'published'),
(343, 24, 'no caption', 'jpg', 'published'),
(344, 24, 'no caption', 'jpg', 'published'),
(345, 24, 'no caption', 'jpg', 'published'),
(346, 24, 'no caption', 'jpg', 'published'),
(347, 24, 'no caption', 'jpg', 'published'),
(348, 24, 'no caption', 'jpg', 'published'),
(349, 24, 'no caption', 'jpg', 'published'),
(350, 26, 'Baba Askofu Mkuu akitoa neno la ufunguzi wa kikao.', 'jpg', 'published'),
(351, 26, 'no caption', 'jpg', 'published'),
(352, 26, 'Katibu Mkuu Kiongozi akitoa muelekeo wa kanisa kwa wajumbe wote wa kikao.', 'jpg', 'published'),
(353, 26, 'Wajumbe wakiwa ndani ya kikao.', 'jpg', 'published'),
(354, 26, 'Wajumbe wakimsikiliza Katibu Mkuu kiongozi.', 'jpg', 'published'),
(355, 27, 'no caption', 'jpg', 'published'),
(356, 27, 'no caption', 'jpg', 'published'),
(357, 27, 'no caption', 'jpg', 'published'),
(358, 27, 'no caption', 'jpg', 'published'),
(359, 27, 'no caption', 'jpg', 'published'),
(360, 27, 'no caption', 'jpg', 'published'),
(361, 27, 'no caption', 'jpg', 'published'),
(362, 27, 'no caption', 'jpg', 'published'),
(363, 27, 'no caption', 'jpg', 'published'),
(364, 27, 'no caption', 'jpg', 'published'),
(365, 27, 'no caption', 'jpg', 'published'),
(366, 27, 'no caption', 'jpg', 'published'),
(367, 28, 'no caption', 'jpg', 'published'),
(368, 28, 'no caption', 'jpg', 'published'),
(369, 28, 'no caption', 'jpg', 'published'),
(370, 28, 'no caption', 'jpg', 'published'),
(371, 28, 'no caption', 'jpg', 'published'),
(372, 28, 'no caption', 'jpg', 'published'),
(373, 28, 'no caption', 'jpg', 'published'),
(374, 28, 'no caption', 'jpg', 'published'),
(375, 28, 'no caption', 'jpg', 'published'),
(376, 28, 'no caption', 'jpg', 'published'),
(377, 28, 'no caption', 'jpg', 'published'),
(378, 28, 'no caption', 'jpg', 'published'),
(379, 28, 'no caption', 'jpg', 'published'),
(380, 28, 'no caption', 'jpg', 'published'),
(381, 28, 'no caption', 'jpg', 'published'),
(382, 29, 'no caption', 'jpg', 'published'),
(383, 29, 'no caption', 'jpg', 'published'),
(384, 29, 'no caption', 'jpg', 'published'),
(385, 29, 'no caption', 'jpg', 'published'),
(386, 29, 'no caption', 'jpg', 'published'),
(387, 29, 'no caption', 'jpg', 'published'),
(388, 29, 'no caption', 'jpg', 'published'),
(392, 30, 'no caption', 'jpg', 'published'),
(393, 30, 'no caption', 'jpg', 'published'),
(394, 30, 'no caption', 'jpg', 'published'),
(395, 30, 'no caption', 'jpg', 'published'),
(396, 30, 'no caption', 'jpg', 'published'),
(397, 30, 'no caption', 'jpg', 'published'),
(398, 30, 'no caption', 'jpg', 'published'),
(399, 30, 'no caption', 'jpg', 'published'),
(400, 30, 'no caption', 'jpg', 'published'),
(401, 30, 'no caption', 'jpg', 'published'),
(402, 30, 'no caption', 'jpg', 'published'),
(403, 30, 'no caption', 'jpg', 'published'),
(404, 30, 'no caption', 'jpg', 'published'),
(405, 30, 'no caption', 'jpg', 'published'),
(406, 30, 'no caption', 'jpg', 'published'),
(407, 30, 'no caption', 'jpg', 'published'),
(408, 30, 'no caption', 'jpg', 'published'),
(409, 30, 'no caption', 'jpg', 'published'),
(410, 30, 'no caption', 'jpg', 'published'),
(411, 30, 'no caption', 'jpg', 'published'),
(412, 31, 'no caption', 'jpg', 'published'),
(413, 31, 'no caption', 'jpg', 'published'),
(414, 31, 'no caption', 'jpg', 'published'),
(415, 31, 'no caption', 'jpg', 'published'),
(416, 31, 'no caption', 'jpg', 'published'),
(417, 31, 'no caption', 'jpg', 'published'),
(418, 31, 'no caption', 'jpg', 'published'),
(419, 31, 'no caption', 'jpg', 'published'),
(420, 31, 'no caption', 'jpg', 'published'),
(421, 31, 'no caption', 'jpg', 'published'),
(422, 31, 'no caption', 'jpg', 'published'),
(423, 31, 'no caption', 'jpg', 'published'),
(424, 31, 'no caption', 'jpg', 'published'),
(425, 31, 'no caption', 'jpg', 'published'),
(426, 31, 'no caption', 'jpg', 'published'),
(427, 31, 'no caption', 'jpg', 'published'),
(428, 31, 'no caption', 'jpg', 'published'),
(429, 31, 'no caption', 'jpg', 'published'),
(430, 31, 'no caption', 'jpg', 'published'),
(431, 31, 'no caption', 'jpg', 'published'),
(432, 31, 'no caption', 'jpg', 'published'),
(433, 31, 'no caption', 'jpg', 'published'),
(434, 31, 'no caption', 'jpg', 'published'),
(435, 31, 'no caption', 'jpg', 'published'),
(436, 31, 'no caption', 'jpg', 'published'),
(437, 33, 'no caption', 'jpg', 'published'),
(438, 33, 'no caption', 'jpg', 'published'),
(439, 33, 'no caption', 'jpg', 'published'),
(440, 33, 'no caption', 'jpg', 'published'),
(441, 33, 'no caption', 'jpg', 'published'),
(442, 33, 'no caption', 'jpg', 'published'),
(443, 33, 'no caption', 'jpg', 'published'),
(444, 33, 'no caption', 'jpg', 'published'),
(445, 33, 'no caption', 'jpg', 'published'),
(446, 33, 'no caption', 'jpg', 'published'),
(447, 33, 'no caption', 'jpg', 'published'),
(448, 33, 'no caption', 'jpg', 'published'),
(449, 33, 'no caption', 'jpg', 'published'),
(450, 33, 'no caption', 'jpg', 'published'),
(451, 33, 'no caption', 'jpg', 'published'),
(452, 33, 'no caption', 'jpg', 'published'),
(453, 33, 'no caption', 'jpg', 'published'),
(454, 33, 'no caption', 'jpg', 'published'),
(455, 33, 'no caption', 'jpg', 'published'),
(456, 33, 'no caption', 'jpg', 'published'),
(457, 33, 'no caption', 'jpg', 'published'),
(458, 33, 'no caption', 'jpg', 'published'),
(459, 33, 'no caption', 'jpg', 'published'),
(460, 33, 'no caption', 'jpg', 'published'),
(461, 33, 'no caption', 'jpg', 'published'),
(462, 33, 'no caption', 'jpg', 'published'),
(463, 33, 'no caption', 'jpg', 'published'),
(464, 33, 'no caption', 'jpg', 'published'),
(467, 34, 'no caption', 'jpg', 'published'),
(468, 34, 'no caption', 'jpg', 'published'),
(469, 34, 'no caption', 'jpg', 'published'),
(470, 34, 'no caption', 'jpg', 'published'),
(471, 34, 'no caption', 'jpg', 'published'),
(472, 34, 'no caption', 'jpg', 'published'),
(473, 34, 'no caption', 'jpg', 'published'),
(474, 34, 'no caption', 'jpg', 'published'),
(475, 34, 'no caption', 'jpg', 'published'),
(476, 34, 'no caption', 'jpg', 'published'),
(477, 34, 'no caption', 'jpg', 'published'),
(478, 34, 'no caption', 'jpg', 'published'),
(479, 34, 'no caption', 'jpg', 'published'),
(480, 34, 'no caption', 'jpg', 'published'),
(481, 34, 'no caption', 'jpg', 'published'),
(482, 34, 'no caption', 'jpg', 'published'),
(483, 35, 'no caption', 'jpg', 'published'),
(484, 35, 'no caption', 'jpg', 'published'),
(485, 35, 'no caption', 'jpg', 'published'),
(486, 35, 'no caption', 'jpg', 'published'),
(487, 35, 'no caption', 'jpg', 'unpublished'),
(488, 35, 'Wagombea nafasi ya M/kiti wa Baraza la fedha', 'jpg', 'published'),
(489, 36, 'no caption', 'jpg', 'published'),
(490, 39, 'no caption', 'jpg', 'published'),
(491, 39, 'no caption', 'jpg', 'published'),
(492, 39, 'no caption', 'jpg', 'published'),
(493, 39, 'no caption', 'jpg', 'published'),
(494, 39, 'no caption', 'jpg', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(20) NOT NULL,
  `poster_id` int(20) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `post` mediumtext NOT NULL,
  `timestamp` int(20) NOT NULL,
  `published` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registered_users`
--

CREATE TABLE `registered_users` (
  `user_id` int(20) NOT NULL,
  `fullnames` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `occupation` varchar(500) NOT NULL,
  `church_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ext` varchar(5) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registered_users`
--

INSERT INTO `registered_users` (`user_id`, `fullnames`, `position`, `phone`, `gender`, `dob`, `occupation`, `church_id`, `username`, `address`, `password`, `ext`, `status`) VALUES
(1, 'andy mawanda', 'follower', '0', '', '', '', 0, 'amawizzy', 'amawizzy@aict.org', '3ed8447b1e527b071b0079c3c1b771ed', 'jpg', 'active'),
(2, 'andy murray', 'pastor', '0', '', '', '', 0, 'andyandy', 'andyandy@aict.org', '3ed8447b1e527b071b0079c3c1b771ed', 'jpg', 'active'),
(3, 'Kezakubi Silasi', 'follower', '2147483647', '', '', '', 0, 'kezakubis', 'kezakubis@aict.org', '23889c167d8f7ac8687ea50b5644f7d9', 'jpg', 'active'),
(4, 'aaaaaa', 'follower', '778283249', '', '', '', 0, 'aaaaaa', 'aaaaaa@aict.org', '0b4e7a0e5fe84ad35fb5f95b9ceeac79', 'png', 'active'),
(5, 'mawanda andrew', 'bishop', '0778283249', '', '', '', 0, 'mawi', 'mawi@aict.org', '1b4d8f5b452b8cbb15e42c7914e83c76', 'no', 'inactive'),
(6, 'Bujashi Mathias Titus', 'follower', '+255763027984', '', '', '', 0, 'bujashi', 'bujashi@aict.org', '6d06ca2cdb9ffd791cb1c2f5498a38ca', 'no', 'active'),
(7, 'Bahati Benjamini', 'follower', '0763322127', '', '', '', 0, 'bahatibenja', 'bahatibenja@aict.org', '24c7df847ff9da60cc01d7b30b36eb07', 'no', 'active'),
(8, 'paul buyemba', 'follower', '0767264269', '', '', '', 0, 'paulbuyemba', 'paulbuyemba@aict.org', 'ac27eff92a7da13718998dc79f9a0a34', 'no', 'active'),
(9, 'Herieth Mwembe', 'follower', '0763018491', '', '', '', 0, 'herimwembe', 'herimwembe@aict.org', 'e3136c18ace79ce4345b7be86974e812', 'no', 'active'),
(10, 'Naomi Matogo', 'follower', '0757031913', '', '', '', 0, 'naomimatogo', 'naomimatogo@aict.org', 'fdc0978bc0cc4c37c3e3d44fc63ee487', 'no', 'active'),
(11, 'Zawadi L. Makongoro', 'follower', '+255755733019', '', '', '', 0, 'zmakongoro', 'zmakongoro@aict.org', '34145483bf951026cb827ab889e3e7a1', 'no', 'active'),
(12, 'smasanyiwa', 'follower', '0768684334', '', '', '', 0, 'smasanyiwa', 'smasanyiwa@aict.org', 'a14405384dd06521ef1d70f1406e1118', 'no', 'active'),
(13, 'Elisha Magolanga', 'follower', '0784617145', '', '', '', 0, 'magolanga', 'magolanga@aict.org', '6855eaf8cfc2354e1070922d4e259f13', 'jpg', 'active'),
(14, 'Rahel E Mgema', 'follower', '0763741698', '', '', '', 0, 'rahelmgema', 'rahelmgema@aict.org', 'ffcd000f8bee77faa0d0aac9f5557a80', 'no', 'active'),
(15, 'Stephen E Shilingi', 'follower', '0767551528', '', '', '', 0, 'stephenshilingi', 'stephenshilingi@aict.org', 'a732b2510d71dcd6f32bb0bb131c4d5a', 'no', 'active'),
(16, 'Edward Masalu Frank', 'follower', '0752271139', '', '', '', 0, 'frankedward', 'frankedward@aict.org', '67730f7472ce0824ad862c73eadba57b', 'no', 'active'),
(17, 'Amos Deus Lukenza', 'follower', '0764660090', '', '', '', 0, 'amosdeus', 'amosdeus@aict.org', '356b2102e119338863f10a38e294d47e', 'no', 'active'),
(18, 'Elisha M Steven', 'follower', '0759096770', '', '', '', 0, 'elishasteven', 'elishasteven@aict.org', '12517df1ee6b7b1bb2bf40f64b07abe8', 'no', 'active'),
(19, 'Martha Sakwa', 'follower', '0767381052', '', '', '', 0, 'marthasakwa', 'marthasakwa@aict.org', '60ed0f4332dc26b3d4e7a825f0ee2571', 'no', 'active'),
(20, 'Elizabeth Fabian', 'follower', '0752537532', '', '', '', 0, 'elizafabian', 'elizafabian@aict.org', '93d7f1d19b0b435b65216e8caaee044d', 'no', 'active'),
(21, 'bujashi mathias', 'follower', '+255713900606', '', '', '', 0, 'titus', 'titus@aict.org', '6d06ca2cdb9ffd791cb1c2f5498a38ca', 'jpg', 'active'),
(27, 'andy mawizzy', 'follower', '0779282818', '', '', '', 0, 'mawizzy', 'mawizzy@aict.org', '3ed8447b1e527b071b0079c3c1b771ed', 'no', 'active'),
(28, 'Aloyce Kalunde', 'follower', '+255653700083', '', '', '', 0, 'kalunde', 'kalunde@aict.org', '1bd40f494230e9bc1283982ea63da106', 'no', 'active'),
(29, 'Silasi Kezakubi', 'bishop', '+255754462221', '', '', '', 0, 'kezakubi', 'kezakubi@aict.org', 'd558b3c44d2b908e50f85487c31b54bb', 'no', 'inactive'),
(30, 'EDWIN TITO MAGOTI', 'follower', '255766151460', '', '', '', 0, 'edwintitomagoti', 'edwintitomagoti@aict.org', 'c05614d935f040e86f932285ce8671eb', 'no', 'active'),
(31, 'ibrahim watugala', 'follower', '0675554753', '', '', '', 0, 'watugala13', 'watugala13@aict.org', 'cc40e4fc561bb490e79d79724d910142', 'no', 'active'),
(32, 'adelaider mwasamila', 'follower', '0754685229', '', '', '', 0, 'adelaider', 'adelaider@aict.org', 'e401229f76fb5ae6a11fadf023cd09bb', 'no', 'active'),
(33, 'James Fuki Kalunde ', 'follower', '753706394', '', '', '', 0, 'jameskalunde', 'jameskalunde@aict.org', '45ef056851976fdb9ea205c16ee36042', 'no', 'active'),
(34, 'thomas fumbuka', 'pastor', '0255428000', '', '', '', 0, 'thomas', 'thomas@aict.org', '5eaf0467a7fdc9fe2a16b9b8a8fd8b4a', 'no', 'active'),
(35, 'Kezakubi Silas', 'follower', '0763610484', '', '', '', 0, 'keza', 'keza@aict.org', '4f9c12e06df7db84dd219756eb7ef2e0', 'no', 'active'),
(36, 'Davie Mabuga', 'follower', '0763199165', '', '', '', 0, 'davie', 'davie@aict.org', '59d13df61a5969eb318cb676a561f377', 'no', 'active'),
(37, 'Charles B. Sanagu', 'pastor', 'null', 'null', '11/6/1970', 'pastor', 1, 'charles.sanagu', 'charles.sanagu@aict.org', 'bb0b28e2d8ade15b428a0bec8c59a3a9', 'JPG', 'active'),
(38, 'andrew mawanda', 'pastor', 'null', 'null', '12/06/1990', 'pastor', 1, 'aict', 'aict@aict.org', '03539c97829606f4827b06a76666972b', 'jpg', 'active'),
(39, 'Charles Petro Lugembe', 'pastor', 'null', 'null', '24/6/1963', 'pastor', 2, 'charles.lugembe', 'charles.lugembe@aict.org', 'c26b6f62763f423e3116a6fc64fd6eee', 'JPG', 'active'),
(40, 'Jacob Joash Ocholla', 'pastor', 'null', 'null', '10/4/1974', 'pastor', 3, 'jacob.ocholla', 'jacob.ocholla@aict.org', 'f5e5a2b6c067f900f45d20f587584a7c', 'JPG', 'active'),
(41, 'Paul Doto Kasheto', 'pastor', 'null', 'null', '1/7/1966', 'pastor', 4, 'paul.kasheto', 'paul.kasheto@aict.org', '37d62c862644dc168fe7eba3a308e976', 'JPG', 'active'),
(42, 'Aaron Isilyumu Malyuta', 'pastor', 'null', 'null', '30/5/1948', 'pastor', 5, 'aaron.malyuta', 'aaron.malyuta@aict.org', 'd6bc2b836a5d407e8a2cbdd580ad11e5', 'JPG', 'active'),
(43, 'Obed Zakayo Nkulukulu', 'pastor', 'null', 'null', '1/1/1959', 'pastor', 6, 'obed.nkulukulu', 'obed.nkulukulu@aict.org', '5631f664224afc670fb3b570b24b1556', 'JPG', 'active'),
(44, 'Timothy B. Mpanilehi', 'pastor', 'null', 'null', '20/6/1982', 'pastor', 5, 'timothy.mpanilehi', 'timothy.mpanilehi@aict.org', 'dd69e5aa58b303c4d0d7152e5399decb', 'JPG', 'active'),
(45, 'Peter Mabula Kitula', 'bishop', 'null', 'null', '28/7/1948', 'bishop', 4, 'peter.kitula', 'peter.kitula@aict.org', '1a2000b4d539a75d17f55fe1d9afe703', 'JPG', 'active'),
(46, 'Marco M. Ngalu', 'pastor', 'null', 'null', '14/9/1972', 'pastor', 7, 'marco.ngalu', 'marco.ngalu@aict.org', '5844690e9e18e76ac0e9629f5bce04e8', 'JPG', 'active'),
(47, 'Emmanuel Machibula', 'pastor', 'null', 'null', '25/10/1962', 'pastor', 17, 'emmanuel.machibula', 'emmanuel.machibula@aict.org', '238bfcdcab2dd593a0dcb5488799f94d', 'JPG', 'active'),
(48, 'Lameck Kazinza', 'follower', '0754006708', 'Male', '219715200', 'Pastor', 18, 'lameckelisabeth@yahoo.com', 'lameckelisabeth@yahoo.com@aict.org', 'd5b1c82c6e035d4a772d83b5e62c1bbd', 'no', 'waiting'),
(49, 'Alphonce Samambile Tambalu', 'pastor', 'null', 'null', '30/6/1964', 'diocese secretary', 7, 'alphonce.tambalu', 'alphonce.tambalu@aict.org', 'cbef359de2f9cf11a7ec0351022d8780', 'JPG', 'active'),
(50, 'Henry Jonathani Kanyumi', 'pastor', 'null', 'null', '2/1952', 'pastor', 22, 'henry.kanyumi', 'henry.kanyumi@aict.org', '074136744bea3d42f62dd24f2470d0ab', 'JPG', 'active'),
(52, 'Dr. Elimeleki Z. Katani', 'Director', 'null', 'null', '8/10/1962', 'Director', 23, 'elimeleki.katani', 'elimeleki.katani@aict.org', 'c3af97bb23511728e208d55373017f4c', 'jpg', 'active'),
(53, 'Joseph M. Kahungwa', 'Chairman', 'null', 'null', '7/10/1964', 'Chairman', 24, 'joseph.kahungwa', 'joseph.kahungwa@aict.org', '7c8d5082e8e77ffcb1ac194114a1ca85', 'JPG', 'active'),
(54, 'Sifa E. Mgema', 'Chairman of Mwanza Diocese', 'null', 'null', '16/3/1967', 'Chairman of Mwanza Diocese', 25, 'sifa.mgema', 'sifa.mgema@aict.org', '3254a7944bc268ea481ff9f136c20eca', 'JPG', 'active'),
(55, 'Rahel Dotto Nkulukulu', 'Chairman of Shinyanga Diocese', 'null', 'null', '22/9/1973', 'Chairman of Shinyanga Diocese', 26, 'rahel.nkulukulu', 'rahel.nkulukulu@aict.org', '942a3f41f070d4507f6e893fb2731c0f', 'JPG', 'active'),
(56, 'Martha M. Zakayo', 'Chairman', 'null', 'null', '1/6/1970', 'Chairman', 18, 'martha.zakayo', 'martha.zakayo@aict.org', '21a11ce2ce55cd377c0b2b62f988faba', 'JPG', 'active'),
(57, 'Fauster Mkaluka', 'Chairman Mara and Ukerewe Diocese', 'null', 'null', '3/5/1955', 'Chairman Mara and Ukerewe Diocese', 27, 'fauster.nkaluka', 'fauster.nkaluka@aict.org', '1668e8823d4e54fdbafe2b92af0a16f9', 'JPG', 'active'),
(58, 'Rebecca Paulo Sanane', 'Chairman Pwani Diocese', 'null', 'null', '11/9/1958', 'Chairman Pwani Diocese', 1, 'rebecca.sanane', 'rebecca.sanane@aict.org', 'b882d869c3fd85fb1d71d267e2f65018', 'JPG', 'active'),
(59, 'Margareth P. Ndaki', 'Chairman Tabora Diocese', 'null', 'null', '17/1/1962', 'Chairman Tabora Diocese', 7, 'margareth.ndaki', 'margareth.ndaki@aict.org', '589014dfe396b41e5f96a8a4df315312', 'JPG', 'active'),
(60, 'Agnes K. Jewe', 'Chairman Geita Diocese', 'null', 'null', '4/5/1956', 'Chairman Geita Diocese', 28, 'agnes.jewe', 'agnes.jewe@aict.org', '4ef064099eea5e39f13165fcc2c1c567', 'JPG', 'active'),
(61, 'Yusuph Charles Ntigwaza', 'follower', '+255 752 935 596', 'Male', '512179200', 'Teacher', 28, 'ntigwaza', 'ntigwaza@aict.org', '8072933c93e8bbf3f6711ac3f32490e2', 'no', 'waiting'),
(62, 'JOYCE WILLIBERTH NGULIMI', 'follower', '0764472257', 'Female', '868060800', 'secretary', 28, 'ngulimifireco.ltd@gmail.com', 'ngulimifireco.ltd@gmail.com@aict.org', 'e9a76d93a1dccd330a0cc7fd6310aad3', 'no', 'waiting'),
(63, 'Shadrack Yakobo Zebedayo', 'follower', '0754861288', 'Male', '3/19/1964', 'Muumini AICT', 157, 'makoye1964@gmail.com', 'makoye1964@gmail.com@aict.org', 'c0fc68083afd95e21a0bc4733c750b89', 'no', 'waiting'),
(64, 'Shadrack Yakobo Zebedayo', 'follower', '0754861288', 'Male', '3/19/1964', 'Muumini AICT', 157, 'mamakoye1964@gmail.com', 'mamakoye1964@gmail.com@aict.org', 'c0fc68083afd95e21a0bc4733c750b89', 'no', 'waiting'),
(65, 'Jilala Kidendei Nkuba', 'follower', '+255627738414', 'Male', '6/13/1994', 'Student', 157, 'Iamjilala', 'Iamjilala@aict.org', '3dd9583cdca2a214b16610b577f70859', 'no', 'waiting'),
(66, 'Kaseha', 'follower', '719793316', 'Male', '5/29/1981', 'Scientist', 157, 'wimekagwa@yahoo.com', 'wimekagwa@yahoo.com@aict.org', '053f0c8d7ea6d635266702f522075574', 'no', 'waiting'),
(67, 'Simony Kaparatus', 'follower', '785600635', 'Male', '3/7/1985', 'Key Account Manager', 157, 'simonydr', 'simonydr@aict.org', 'f907924bcbfb81a73c19de2349c914cb', 'no', 'waiting'),
(68, 'Erasto Malula', 'follower', '0758146508', 'Male', '10/10/1992', 'Engineer', 157, 'erastomalula10@gmail.com', 'erastomalula10@gmail.com@aict.org', 'dd609befec03db9e0f27ae1fff712d67', 'no', 'waiting'),
(69, 'Emmanuel Sengo Reuben', 'follower', '0784358891', 'Male', '12/31/1978', 'Video Production', 157, 'esengo220@gmail.com', 'esengo220@gmail.com@aict.org', 'bb07b961a4a64d49c50b51a725d9baaf', 'no', 'waiting'),
(70, 'Manoni, NJ', 'employee', '+255768344075', 'Male', '11/17/1978', 'Teacher', 157, 'justmanoy@ymail.com', 'justmanoy@ymail.com@aict.org', 'd4c88711844cbb1d5967e02891244a93', 'no', 'waiting'),
(71, 'RIOBA J. MOHERE', 'employee', '+255788747137', 'Male', '8/21/1993', 'Evangelist', 157, 'mohererioba@gmail.com', 'mohererioba@gmail.com@aict.org', 'd3d1cb3b8f9e0828ad538cb3c4935db0', 'no', 'waiting'),
(72, 'Elisha Dottol Makungu', 'follower', '0622904904', 'Male', '5/10/1978', 'Pasteur', 157, 'dottyeli02@gmail.com', 'dottyeli02@gmail.com@aict.org', 'a7d83e9d4c8efe204d51f807f9df8765', 'no', 'waiting'),
(73, 'Elisha Dottol Makungu', 'follower', '0622904904', 'Male', '5/10/1978', 'Pasteur', 157, 'dottyeli02@gmail', 'dottyeli02@gmail@aict.org', 'a7d83e9d4c8efe204d51f807f9df8765', 'no', 'waiting'),
(74, 'Alex', 'follower', '0768977456', 'Male', '1/10/1993', 'Audiologist', 157, 'allexychars19@gmail.com', 'allexychars19@gmail.com@aict.org', '9815f80fa54f5fc2cdd8435c5a8b3bae', 'no', 'waiting'),
(75, 'Alex', 'follower', '0768977456', 'Male', '1/10/1993', 'Audiologist', 157, 'allexychars19', 'allexychars19@aict.org', '9815f80fa54f5fc2cdd8435c5a8b3bae', 'no', 'waiting'),
(76, 'Daniel shija', 'employee', '0756809805', 'Male', '5/28/1978', 'Lab techologist', 157, 'danielshija2016@gmail.com', 'danielshija2016@gmail.com@aict.org', 'edb77bd5df138cf8f938048ebafa1281', 'no', 'waiting'),
(77, 'Peter Malonja', 'follower', '+255754391776', 'Male', '1/1/1954', 'Self yet serving God as an Evangelist at AICT Capstone Local Church,  DSM', 157, 'estÃ napita1@gmail.com', 'estÃ napita1@gmail.com@aict.org', '7c880e38f3636bd8be94b1655024c21e', 'no', 'waiting'),
(78, 'TIMOTHEO EDWARD MACHIYA', 'follower', '0765882419', 'Male', '2/28/1993', 'LABORATORY TECHNICIAN', 157, 'mashalamachiya@gmail.com', 'mashalamachiya@gmail.com@aict.org', '1508e7ffffa2d637b962ef8f82835c43', 'no', 'waiting'),
(79, 'Elisha', 'follower', '0754862202', 'Male', '11/29/1977', 'teacher', 157, '@elika.org', '@elika.org@aict.org', '1c31154423201887bedc95d2aa85007a', 'no', 'waiting'),
(80, 'Peter Lutema', 'follower', '0764817132', 'Male', '12/12/1988', 'Teacher', 157, 'peechtpcl', 'peechtpcl@aict.org', '85be9792fbf5947d88e6761f6385cb6c', 'no', 'waiting'),
(81, 'LEONARD ZACHARIA', 'follower', '0764988339', 'Male', '5/2/1992', 'TEACHER', 157, 'lzacharia', 'lzacharia@aict.org', 'd2c01834f5c8cc0a66e8a8ca5373f869', 'no', 'waiting'),
(82, 'Emmanuel Nyamalya', 'employee', '+255784998144', 'Male', '1/1/1976', 'Church Pastor', 157, 'e_nyamalya@aol.com', 'e_nyamalya@aol.com@aict.org', '16326bb34011d8659b8ec901164250ab', 'no', 'waiting'),
(83, 'Sadick  Japhari Adriano', 'follower', '+255 786 629 616', 'Male', '2/21/1990', 'Monitoring and Evaluation Officer', 157, 'sadickadriano1990@gmail.com', 'sadickadriano1990@gmail.com@aict.org', '6c49d757267f8ac7458dc527e4d380c0', 'no', 'waiting'),
(84, 'JAMES FUKI KALUNDE', 'follower', '0753706394', 'Male', '5/20/1992', 'Teacher', 157, 'jameskalunde.jk.jk65@gmail.com', 'jameskalunde.jk.jk65@gmail.com@aict.org', '5957953468bf6f455e04975cd337a519', 'no', 'waiting'),
(85, 'Obeid Mkina', 'follower', '0764424423', 'Male', '8/7/1980', 'MGT', 157, 'obemkina@gmail.com', 'obemkina@gmail.com@aict.org', 'c70550d9fe6b38c8d285788f5af2ddd7', 'no', 'waiting'),
(86, 'Singili kabeho', 'follower', '0758224998', 'Male', '3/4/1990', 'Tazama ilivyo vyema yakumpeza Mungu ndg wakae kwa umoja', 157, 'singilikabeho', 'singilikabeho@aict.org', '94f550e2e6003aefcc1ce4b56daea1aa', 'no', 'waiting'),
(87, 'LAZARO KADILI', 'follower', '0754565050', 'Male', '5/24/1961', 'Mzee wa Kanisa na Katibu Pastoreti ya Mbagala Dayosisi ya Pwani', 157, 'Lazarokadili@yahoo.com', 'Lazarokadili@yahoo.com@aict.org', '689a8cf81b176030d9f19690c5c49278', 'no', 'waiting'),
(88, 'Joseph Waganda', 'follower', '+255786600999', 'Male', '5/18/1975', 'Business', 157, 'waganda50', 'waganda50@aict.org', '5c0a0097d55be1c7e2b19611aae925ad', 'no', 'waiting'),
(89, 'lucas michael', 'follower', '0768387176', 'Male', '7/27/1999', 'geita', 157, 'lucasmichael2707@gmail.com', 'lucasmichael2707@gmail.com@aict.org', 'a2c37d3b39f6755703d544c13c4bee34', 'no', 'waiting'),
(90, 'Mabula Boniphace', 'follower', '0620629997', 'Male', '12/23/1998', 'Mwanza', 157, 'mabulaboniphace', 'mabulaboniphace@aict.org', 'f272abc61f5319f0e89e1529ad85d003', 'no', 'waiting'),
(91, 'NEHEMIAH ZACHARIA', 'follower', '+255 766163967', 'Male', '5/29/1987', 'SHINYANGA', 157, 'nehemia2018@gmail.com', 'nehemia2018@gmail.com@aict.org', 'efa19d6ccfd57d69c5d052f7bfbed9d3', 'no', 'waiting'),
(92, 'David Kyalo Malonza', 'follower', '254742330671', 'Male', '9/5/1986', 'Data clerk', 157, 'davidmalonza71', 'davidmalonza71@aict.org', '62fb1fbaab1a0abbd396b4c2fe7b7215', 'no', 'waiting'),
(93, 'Philipo Mafuja', 'bishop', 'null', 'null', '', 'bishop', 7, 'philipo.mafuja', 'philipo.mafuja@aict.org', 'e10adc3949ba59abbe56e057f20f883e', 'jpg', 'active'),
(94, 'Paulo Nyangwaswa', 'bishop', 'null', 'null', '', 'bishop', 8, 'paulo.nyangwaswa', 'paulo.nyangwaswa@aict.org', 'e10adc3949ba59abbe56e057f20f883e', 'jpg', 'active'),
(95, 'Methusela Paulo Nyangwaswa', 'bishop', 'null', 'null', '', 'bishop', 8, 'methusela.nyangwaswa', 'methusela.nyangwaswa@aict.org', 'e10adc3949ba59abbe56e057f20f883e', 'jpg', 'active'),
(96, 'Philipo Mafuja Magwano', 'bishop', 'null', 'null', '', 'bishop', 7, 'philipo.magwano', 'philipo.magwano@aict.org', 'e10adc3949ba59abbe56e057f20f883e', 'jpg', 'active'),
(97, 'Zakayo Enock Bugota', 'bishop', 'null', 'null', '', 'bishop', 3, 'zakayo.bugota', 'zakayo.bugota@aict.org', 'e10adc3949ba59abbe56e057f20f883e', 'jpg', 'active'),
(98, 'Daniel Bugayo Nungwana', 'bishop', 'null', 'null', '', 'bishop', 7, 'daniel.nungwana', 'daniel.nungwana@aict.org', 'e10adc3949ba59abbe56e057f20f883e', 'jpg', 'active'),
(99, 'Peter Phales Kisena', 'bishop', 'null', 'null', '', 'bishop', 4, 'peter.kisena', 'peter.kisena@aict.org', 'e10adc3949ba59abbe56e057f20f883e', 'jpg', 'active'),
(100, 'Zakayo Majige', 'bishop', 'null', 'null', '', 'bishop', 5, 'zakayo.majige', 'zakayo.majige@aict.org', 'e10adc3949ba59abbe56e057f20f883e', 'jpg', 'active'),
(101, 'Samweli Masingili Magesa', 'bishop', 'null', 'null', '', 'bishop', 7, 'samweli.magesa', 'samweli.magesa@aict.org', 'e10adc3949ba59abbe56e057f20f883e', 'jpg', 'active'),
(102, 'Jeremiah Mahalu Kisula', 'bishop', 'null', 'null', '', 'bishop', 8, 'jeremiah.kisula', 'jeremiah.kisula@aict.org', 'e10adc3949ba59abbe56e057f20f883e', 'jpg', 'active'),
(103, 'Simon Koskey', 'follower', '0710972691', 'Male', '1/2/1984', 'Mchungaji', 157, 'kipyegonkoskey2018@gmail.com', 'kipyegonkoskey2018@gmail.com@aict.org', '0245eebc011bfd0eff4d9547f57c362c', 'no', 'waiting'),
(104, 'Elias Shiguta', 'employee', '+255628964122', 'Male', '12/18/1989', 'Mwinjilisti', 157, 'eliasshiguta@gmail.com', 'eliasshiguta@gmail.com@aict.org', 'e589dd2a027a446fdadb2cdccf56dbe2', 'no', 'waiting'),
(105, 'shadrack mazige', 'follower', '0744732068', 'Male', '10/27/1993', 'business administrator', 157, 'mazige', 'mazige@aict.org', '09460c3883dd7e9d79a8145fc09e8981', 'no', 'waiting'),
(106, 'Manase', 'employee', '0712343287', 'Male', '2/20/2000', 'Christian', 157, 'samwelmanase02@gmail.com', 'samwelmanase02@gmail.com@aict.org', 'fe007a74134329c1e7f604804c10e7c3', 'no', 'waiting'),
(107, 'Kaseha, Wilson Mengi', 'follower', '+255719793316', 'Male', '5/29/1981', 'Lecturer', 157, 'wilsonkaseha@gmail.com', 'wilsonkaseha@gmail.com@aict.org', '053f0c8d7ea6d635266702f522075574', 'no', 'waiting'),
(108, 'Edward mathayo', 'follower', '0783245048', 'Male', '3/1/1990', 'Teacher', 157, 'edwardmathayo1@gmail.com', 'edwardmathayo1@gmail.com@aict.org', 'ba3f99d2164b3dfb3b76f92a86bb3648', 'no', 'waiting'),
(109, 'JOEL LUMALA', 'follower', '+255 716 048 678', 'Male', '1/29/1988', 'Workshop Supervisor at Glenrich Transportation Company Ltd - Dar es Salaam', 157, 'joellumala@gmail.com', 'joellumala@gmail.com@aict.org', '7842d367a0fd51d07c37127f4c5accd1', 'no', 'waiting'),
(110, 'Samwel Lazaro maziku', 'follower', '+255622108348', 'Male', '5/4/1957', 'Ev', 157, 'lazaro samwel@yahoo.com', 'lazaro samwel@yahoo.com@aict.org', '6449c27b624f9c7da86a80894b93d1d0', 'no', 'waiting'),
(111, 'Daniel Lumala', 'employee', '0692220999', 'Male', '11/10/1990', 'Teacher', 157, 'dlumala', 'dlumala@aict.org', '6f4bfe2648748bb851b7fc5dcd988c5a', 'no', 'waiting'),
(112, 'Zacharia Gervas Matonange', 'follower', '0736671530', 'Male', '4/28/1991', 'Shoe Designer', 157, 'gervaszacharia@gmail.com', 'gervaszacharia@gmail.com@aict.org', 'b5cd999cfbd64c70d48c7b9ea1158ff9', 'no', 'waiting'),
(113, 'karoli albogast warioba', 'follower', '+255766263979', 'Male', '3/12/1986', 'farmer', 157, 'karoliwarioba', 'karoliwarioba@aict.org', 'ef3a2ae0e5703874c52d406e3ec5a40f', 'no', 'waiting'),
(114, 'Raphael midenge', 'follower', '0747525030', 'Male', '3/13/1998', 'PeasAnt', 157, 'midenge12@gmail.com', 'midenge12@gmail.com@aict.org', '7e655ea3570f622b4a0a322609bf94b2', 'no', 'waiting'),
(115, 'Swea Elisha Mlekwa', 'follower', '0762970710', 'Male', '9/11/1991', 'Civil Engineer', 157, 'sweamlekwa', 'sweamlekwa@aict.org', '7ee8ddb4b52c5ba66aaa9d324dc357ac', 'no', 'waiting'),
(116, 'Francis Mlelema', 'employee', '+255765296464', 'Male', '1/16/1975', 'Evangelist / Pastor', 157, 'fmlelema.tz958@gmail.com', 'fmlelema.tz958@gmail.com@aict.org', '383409192d5e6d11c4bf1e07e01bd21c', 'no', 'waiting'),
(117, 'Yohana Joseph', 'follower', '0767688639', 'Male', '9/1/1993', 'Entrepreneur', 157, 'josephelisha66@gmail.com', 'josephelisha66@gmail.com@aict.org', '85d624f15771da13d499e8275014aed9', 'no', 'waiting'),
(118, 'Joel N. Simbitti', 'deptleader', 'null', 'null', '10/07/1964', 'Coordnator', 24, 'injilinamisheni', 'injilinamisheni@aict.org', '640920e76b2c79cc78a94fbc1cdfd1e2', 'no', 'active'),
(119, 'JOTHAM OTINDO OTIENO', 'follower', '+447788818401', 'Male', '12/31/1959', 'logistics', 157, 'otienojm@yahoo.co.uk', 'otienojm@yahoo.co.uk@aict.org', 'af2a819071ff3bb5732a683dfec96666', 'no', 'waiting'),
(120, 'Edwin Magoti', 'follower', '0766151460', 'Male', '7/26/1987', 'Statistician', 157, 'emagoti', 'emagoti@aict.org', '615f4b590a562cc79f64d66716269318', 'no', 'waiting'),
(121, 'Ezekiel', 'follower', '0621232060', 'Male', '7/14/1997', 'Mchungaji', 301, 'ezekielmwaipopo1@gmail.com', 'ezekielmwaipopo1@gmail.com@aict.org', '1f12c655bd688c3a87ddd44555970f7e', 'no', 'waiting'),
(122, 'Diana Emmanuel Jacob', 'follower', '0787383336', 'Female', '12/9/1996', 'Student', 301, 'P3773/0002', 'P3773/0002@aict.org', '0f6f1d0651b6b82c00f61043f5f93725', 'no', 'waiting'),
(123, 'Dennis Mwakilili', 'follower', '0763787446', 'Male', '10/13/1992', 'Business', 603, 'dennis.mwakilili31@gmail.com', 'dennis.mwakilili31@gmail.com@aict.org', '127a05575dbb79c51adcf977e45f3349', 'no', 'waiting'),
(124, 'Nuhu J Manoni', 'employee', '0768344075', 'Male', '11/17/1978', 'Teacher', 1171, 'nuhumanoni2@aict.org', 'nuhumanoni2@aict.org@aict.org', '65cba0c6af3a7757c94c5001ca76bc81', 'no', 'waiting'),
(125, 'Elikana Zacharia Peter', 'follower', '0622661548', 'Male', '8/19/2001', 'Student', 1171, 'elikanapeter28@gmail.com', 'elikanapeter28@gmail.com@aict.org', '2af10cc9fddecb9e297110988890f2c5', 'no', 'waiting'),
(126, 'Erick Masanja John', 'follower', '0754222182', 'Male', '7/3/1991', 'Teacher', 1171, 'shakazulu.lumumba@gmail.com', 'shakazulu.lumumba@gmail.com@aict.org', 'f2362a14ec88f4ec65d1b7c00bea8f60', 'no', 'waiting'),
(127, 'Peter Mihayo', 'follower', '0711424840', 'Male', '4/14/1995', 'University student', 1171, 'mihayopeter32@gmail.com', 'mihayopeter32@gmail.com@aict.org', '303d3be9561846bb42f6274bf423a176', 'no', 'waiting'),
(128, 'Samson Makwaya', 'employee', '0745235955', 'Male', '3/26/1995', 'Muumini', 1171, 'ndekimakwaya@gmail.com', 'ndekimakwaya@gmail.com@aict.org', 'c9670dc266a7de29f69f2427656e7105', 'no', 'waiting'),
(129, 'George Fumbuka', 'follower', '0754303759', 'Male', '11/3/1953', 'Accountant', 1171, 'fumbuka1953@yahoo.co.in', 'fumbuka1953@yahoo.co.in@aict.org', '6b82d30fc0d30b348ec14f59a70fdd4b', 'no', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `secpositions`
--

CREATE TABLE `secpositions` (
  `secposition_id` int(11) NOT NULL,
  `secposition` varchar(200) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `secpositions`
--

INSERT INTO `secpositions` (`secposition_id`, `secposition`, `status`) VALUES
(3, 'general secretary', 1),
(4, 'diocesan secretary', 1);

-- --------------------------------------------------------

--
-- Table structure for table `secretaries`
--

CREATE TABLE `secretaries` (
  `secretary_id` int(11) NOT NULL,
  `pastor_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `secretaries`
--

INSERT INTO `secretaries` (`secretary_id`, `pastor_id`, `position_id`, `status`) VALUES
(6, 14, 3, 1),
(7, 6, 4, 1),
(8, 0, 3, 1),
(9, 67, 3, 1),
(10, 48, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  `ext` varchar(4) NOT NULL,
  `poster` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider_photos`
--

CREATE TABLE `slider_photos` (
  `slider_id` int(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `ext` varchar(4) NOT NULL,
  `published` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `slider_photos`
--

INSERT INTO `slider_photos` (`slider_id`, `title`, `description`, `ext`, `published`) VALUES
(3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 'm ipsum dolor sit amet, consectetur adipiscing elit. Nam elementum varius dapibus. Sed hendrerit porta felis at sollicitudin. Sed at nunc ac neque semper fermentum. Proin diam sem, semper fermentum eleifend nec, viverra ac est. Sed ultricies, lectus et vehicula imperdiet, felis tortor vehicula turpis, non fermentum enim est et sapien. Nam justo mi, dignissim a euismod ut, pretium sed leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In viverra porta est, consequat elementum metus tristique a. Mauris tempus tellus a metus dapibus faucibus egestas lectus consectetur. Integer libero dolor, luctus non congue vitae, tempus ut neque. Nunc eleifend lorem quis diam pharetra sagittis. Aliquam ut dolor dui. Fusce dictum facilisis ipsum eu porttitor. In ultricies rhoncus tortor vitae tincidunt.\r\nLorem ipsum dolor sit amet', 'jpg', 'unpublished');

-- --------------------------------------------------------

--
-- Table structure for table `staffgroupmessages`
--

CREATE TABLE `staffgroupmessages` (
  `staffgroupmessage_id` int(11) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` longtext NOT NULL,
  `group_id` int(11) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staffmessages`
--

CREATE TABLE `staffmessages` (
  `message_id` int(100) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `sender` varchar(100) NOT NULL,
  `reciever` varchar(100) NOT NULL,
  `sender_name` varchar(100) NOT NULL,
  `reciever_name` varchar(100) NOT NULL,
  `sender_position` varchar(100) NOT NULL,
  `reciever_position` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `message_type` varchar(50) NOT NULL,
  `timestamp` int(40) NOT NULL,
  `sender_status` varchar(50) NOT NULL,
  `reciever_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topiccomments`
--

CREATE TABLE `topiccomments` (
  `topiccomment_id` int(11) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `topic_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `topiccomments`
--

INSERT INTO `topiccomments` (`topiccomment_id`, `comment`, `topic_id`, `fullname`, `phone`, `timestamp`, `status`) VALUES
(1, 'Elimu ya ngazi ya shahada ya uzamili kutoka kwenye vyuo mtakavyoainisha', 2, 'ELKANA SAMWELI NTEBI', '0769050486', 1509361988, 1),
(2, 'Mishahara na pension kwa wachungaji na wainjilisti. Waumini kuwe na ada ya kila wiki ya mishahara hiyo angalau kila muumini mtu mzima atoe asilimia 0.0 1 ya kima cha chini cha mshahara.', 1, 'John Mangu', '0768830015', 1509362706, 1),
(3, '1.Mwadirifu 2. Ajue  ya dini ya kikristo  3.Awe na shahada ya elimu ya dini. 4. awe mchungaji wa ngazi ya juu 5. Awe mchungaji ngazi ya juu kati ya wachungajiwa ngazi hiyo kwenye jimbo hilo 6. Awe anaheshimika 7. Awe mwalimu na mwenye uwezo wa kufundisha. 8. Aheshimu mke wake (Ndoa yake) na awe na mke mmoja. 9. Awe na kiasi na tabia njema 10. Mkarimu. 11. Asituhumiwe na kosa lolote.', 2, 'John Mangu', '0768830015', 1509363754, 1),
(4, 'Bwana asifiwe,,! Kwanza ningependa kuomba ili mtu apate kuwa mchungaji lazma awe na elimu ya kdato cha nne,,,na mtu awe askofu lazma awe amesoma theology na ikiwezekana awe na elimu isiyopungua kdato cha sita ili  aweze hata kuendesha miradi ya kanisa bla utata na awe mtu ambae anaweza kuleta chachu ya maendeleo ktk kanisa namaanisha awe na uwezo wakuhimiza maendeleo,,,Awe mtu anaeweza kufufua na kuendeleza local church ndogondogo cyo mtu wakujal local church kubwa tu.. Ahsante', 2, 'Henry daudi Nkenyenge', '0754860396', 1509370137, 1),
(5, 'Kila pastorate ihakikishe inashirikiana ktk kjenga makanisa ya local church zake zote,,,na wachungaji wawe wasomi angalau kdato cha nne nakwendelea na wawe chachu ya maendeleo ktk kanisa siyo wabaguzi wa baadhi ya waumin au makanisa kwasababu tu ya maslah wanayopata kwa baadhi ya waumin au makanisa kama huduma kwa mchungaji,,, ahsanteni', 1, 'Henry daudi Nkenyenge', '0754860396', 1509370594, 1),
(6, 'Kila pastorate ihakikishe inashirikiana ktk kjenga makanisa ya local church zake zote,,,na wachungaji wawe wasomi angalau kdato cha nne nakwendelea na wawe chachu ya maendeleo ktk kanisa siyo wabaguzi wa baadhi ya waumin au makanisa kwasababu tu ya maslah wanayopata kwa baadhi ya waumin au makanisa kama huduma kwa mchungaji,,, ahsanteni', 1, 'Henry daudi Nkenyenge', '0754860396', 1509370645, 1),
(7, 'Moja ya kigezo ambacho ningependa kitumike kumpata Askofu wa kanisa langu ni lazima awe amewahi kuongoza kanisa ktk nafasi ya uchungaji kwa miaka isiyopungua kumi kwenye pastorate yeyote. Pia maaskofu wapigiwe kura ya kuthibiti Kila baada ya miaka mitano.', 2, 'Marko Mabelele', '0764223755', 1509372716, 1),
(8, 'Katiba ya kanisa langu itambue kuundwa kamati ya maadili ya kanisa zima na ipewe nguvu ya kisheria kulinda maadili ya viongozi ktk kanisa letu.', 1, 'Marko Mabelele', '0764223755', 1509373065, 1),
(9, 'Kwa maoni yangu askofu atokane miongoni mwa  wachungaji ambao wameonyesha utume wa kimungu kwa kiwango cha juu kabisa, maaskofu wa AICT na AIC duniani wawe ndio wajumbe pekee Katika uchaguzi wa askofu Mpya, uchanguzi utanguliwa na maombi ya mwezi mzima kwa haya maaskofu Katika makao makuu ya kanisa dunia CV zote za kielimu na kiutumishi ziwepo Katika ofisi ili kuwawezesha maaskofu kuchagua nani  awe askofu mpya, utaratibu uliokuwepo wa wachungaji kupiga kura kuliluhusu kampeni na rushwa na hata uwepo wa Mungu Katika mchakato huu kuwa mdogo', 2, 'Timothy George', '0765909519', 1509377381, 1),
(10, 'Kifungu kimoja wapo  kiwe ni kiwako  cha Chini cha elimu kwa wachungaji na wainjilisti kuwa ni kidato cha NNE, kwa ambao tayari ni wachungaji na hawana elimu hii  watakiwe kujiendeleza, hii  itasaidia kuwawezesha wachungaji wetu kuendana na mabadiliko ya utandawazi na pia kumudu kuweza  kuongoza local church au pastorate hekimu ya Mungu na kipawa hiki cha elimu\r\n\r\nMwisho Kanisa limetusahau sana mikoa ya kusini yaani mikoa ya Mtwara, Lindi na ruvuma, maeneo kama masasi, newala, Nachingwea, tunduru na hata songea hakuna kanisa basi tunaomba watumwe watumishi maeneo haya', 1, 'Timothy George', '0765909519', 1509378044, 1),
(11, 'Kwanza, inabidi tutambue kuwa kanisa letu tumekuwa nyuma sana hasa  kwenye maswala ya kuwekeza katika jamii, kwenye elimu, afya n.k licha ya kuwa na Rasilimal za kutosha. Hivyo Basi,\r\n\r\n1. Tunahitaji askof mwenye Uwezo wa kupambanua mambo na kujenga hoja, kiongozi atakaetoa mwanga wa nini kifanyike ili kuwezesha kanisa  kusonga Mbele.\r\n\r\n2. Awe na elimi angalau Degree ya pili (Masters) ya theologia lakini pia at least ana uelewa mzur wa maswala ya either Uchumi, Maendeleo, Sheria nk..', 2, 'Edwin Tito Magoti', '076615460', 1509385473, 1),
(12, '1. Wachungaji na wainjilist pamoja na kuwa na bachelor ya Theology, wawe watu kwenye ujuzi na fani mbalimbali, wawe wataalam wa maendeleo, wanasheria, walimu, etc', 1, 'Edwin Tito Magoti', '0766151460', 1509385638, 1),
(13, '1.Kigezo cha kwanza ni Kuliishi Neno\r\n2. Elimu yake katika mambo ya Kiroho\r\n3.Elimu yake katika mambo ya Kidunia Lazima awe na shahada ya Uzamili na kuendelea\r\n4. Uzoefu katika uongozi na kutatua changamoto katika njia zifaazo', 2, 'Faraja Jacob', '0714979592', 1509386486, 1),
(14, 'Uwepo wa taarifa za hesabu za mapato na matumizi katika kanisa katika ngazi zote kuanzia local church mpaka dayosisi na ziwe wazi kwa waumini kwa wakati', 1, 'Faraja Jacob', '0724979592', 1509386714, 1),
(15, 'Ninapendekeza vigezo vifuatavyo :\r\n1. Kigezo cha uadilifu.  Awe ni mtu asiyetuhumia kwa uhalifu wowote. \r\n2. Kigezo cha elimu.  Awe na shahada na kuendelea kutoka Ktk chuo kinachotambuliwa ( siyo vyuo vya kudownload).  Pia vyeti viwasilishwe, si maneno tu.  \r\n3.Awe na uzoefu wa kutosha Ktk utumishi kanisani, zaidi ya miaka mitano', 2, 'Thobias Kazwanomo', '+255759952905', 1509387638, 1),
(16, 'Kwanza mchungaji awe ameitumikia AIC kwa mda usiopungua miaka 10 na awe hajawahi kuhusishwa na tuhuma yeyote katka utumishi wake kwa miaka yote...', 2, 'Epafra japhet mitinje...', '0742180512', 1509388383, 1),
(17, 'Napendekeza \r\n1. Kifungu cha ukomo wa uaskofu,  kuhamishwa kwa maaskofu, lakini pia lipiwa kura baada ya miaka mitano ili kupima kama anafaa kuendelea Ktk cheo hicho au la.  \r\nKipengele  cha mgawanyo wa mapato ufanyiwe mabadiliko. Asilimia kubwa ya mapato ibaki Ktk ngazi ya local church.\r\n3. Pia kipengele  cha askofu mkuu kuwa huru bila  Dayosisi, lakini askofu mkuu apewe mamlaka (meno). \r\n4. Cheo cha wazee wa kanisa kipitiwe tena,  kwani kundi hilo limekuwa chanzo kikubwa la vurugu Ktk makanisa,  na kikwazo kwa wachungaji \r\n4', 1, 'Thobias Kazwanomo', '+255759952905', 1509388397, 1),
(18, 'Ashuhudiwe kumpokea roho mtakatifu. Maana kanisa linapitia wakati mgumu kutokana kutoruhusu huduma ya roho matakatifu. Kwa kigezo kuwa watakuwa walokole. Mimi maoni yg mchungaji achaguliwe kwa huduma yake na sio kampeni kama kwenye siasa', 2, 'Marco. Meja', '+255767715099', 1509396301, 1),
(19, 'Ashuhudiwe kumpokea roho mtakatifu. Maana kanisa linapitia wakati mgumu kutokana kutoruhusu huduma ya roho matakatifu. Kwa kigezo kuwa watakuwa walokole. Mimi maoni yg mchungaji achaguliwe kwa huduma yake na sio kampeni kama kwenye siasa', 2, 'Marco. Meja', '+255767715099', 1509396302, 1),
(20, 'Amoxicillin Low Cost  <a href=http://costofcial.com>cialis</a> Buy 5milligram Tadalafil Online Best Erectile Dysfunction Drugs Dolore Testicoli Finasteride Propecia', 2, 'JameWew', '81238952264', 1509410625, 1),
(21, 'Vigezo:\r\n- Uchaji wa MUNGU\r\n- Sifa katika Tito na Timotheo zifuatwe kikamilifu\r\n-historia ya maisha Safi yeye na familia yake na jamii\r\n-elimu isiwe ndo kigezo cha kupata uaskofu\r\n- awe anafahamika katika eneo anakotoka na vilevile atakako wenda kufanya kazi wamkubal.', 2, 'William Nathan', '+255784630346', 1509418466, 1),
(22, 'Kiwepo kipengele cha vipindi vya lazima vya kujifunza neno kwa nguvu na kuomba kwa muda mrefu  ili kuweka hofu kwenye mioyo ya watu maana watu wapokosa hofu ya Mungu makanisani na kuwa wakristo wa kawaida ndio mwanzo wa vurugu nyingi', 1, 'happy', '0754266396', 1509420683, 1),
(23, 'Kiwepo kipengele cha vipindi vya lazima vya kujifunza neno kwa nguvu na kuomba kwa muda mrefu  ili kuweka hofu kwenye mioyo ya watu maana watu wapokosa hofu ya Mungu makanisani na kuwa wakristo wa kawaida ndio mwanzo wa vurugu nyingi  na iwe ni sheria ya lazima viongozi waokoke ili watuelekeze kwenda mbinguni na si vinginevyo naamini viongozi wakiokoka kanisa litafundishwa kuomba na sio kupigana makanisani asante', 1, 'happy', '0754266396', 1509420862, 1),
(24, 'wachungaji waangaliwe je wanaushuhuda,pili tuangalie na proffesion zao,je,wana elimu za kukithi kuwa asikofu,tuweke viwango vya elimu pia,pia wafanyiwe udahili na sio kuteuwana tu', 2, 'silas paul pambe', '0755485974', 1509423003, 1),
(25, 'hapa tuchague kamati maalumu ya kutunga na kushauri ili katiba yetu ikidhi vigezo,tusiende tu kipendwa,na vijana washirikishwe kikamilifu ili kupata,muundo thabiti,', 1, 'silas paul pambe', '0755485974', 1509423247, 1),
(26, 'Nina maoni mawili \r\n1.Muda wa ibada uzingatiwe na ufatwe kuepuka kuwa kinyume na muda maana Mungu wetu ni wa utaratibu \r\n2.Nashauri mahubiri yawe yanafanyika mapema ikiwwzekana kabla ya kutoa sadaka kwani hapo katikakti panakuwa na mambo mengi yanayopelekea muda wa mahubir kuwa late na mda mwingne tunakua tumechoka na kuanza kulala muda wa ibada tunaweza iga kwa wenzetu wa lutherani naomba kuwasilisha', 2, 'Ramadhan Benjamin Myala', '0756555750', 1509425011, 1),
(27, 'Mchungaji tunaemhitaji ili awe Askofu kwanza kabisa vigezo vyote vya kumtambua kwamba yeye ni mchungaji vimekamilika pili matendo yake yawe yanasomeka kwa nje yaani ukimuona tu hutakiwi kuwa na maswali kuhusu utmishi wake,awe na hofu ya Mungu, mwisho asiwe ni mkabila na awe tayari kukosolewa', 2, 'Joseph Eliakim Lukanga', '0715278699', 1509427013, 1),
(28, 'Nadhani kwa kuangalia rohoni haitoshi, nafikiri ifike sehemu tuangalie mchango wake au mikakati yake aliyoitimiza hii ikiwa na maana aliyetumika sehemu tofauti kwa mafanikio makubwa.....\r\n\r\nLakini pia Elimu yake iwe kipaumbele...(kuanzia degree)\r\n Tunao watu wa mfano huo kama Mch Charles Sweya n.k', 2, 'Samson Makwaya', '0745235955', 1509430328, 1),
(29, 'ASKOFU wa kanisa hili la AIC achaguliwe ikiwa tu anajuwa vyema historia ya kanisa hili lilipototoka,misingi yake,malengo yake Awe na asili ya AIC yani kuanzia siku ya kwanza ya asili yake,Angalieni mtu ambaye aa maono oevu juu ya kanisa sio kama sasa viongozi wamedumaza kanisa,Mtu safi asiye na mawaa asiye fisadi kanisa hili limefika hapa kwa ufisadi wa viongozi,Pia umri uwe kuanzia miaka 45,Kiwango cha shule kiwa angalau ajuwe kuongea lugha ya kigeni mpja wapo iwqe kifaransa kiingereza na kichina,Masuala ya level ya shule lisizingatiwe sana kinachotakiwa kuzingatiwa ajuwe lugha ya kigeni ili imsadie katka majukumu yake,Nasema hvi kwa sababu kanisa hili limeongozwa na watu wasomi lakini limedumaa haisaidii usomi kwenye suala la uasili na malengo na misingi ya kanisa Taasisi ya kiroho haihusiani na Elimu ya mwili KIkubwa Elimu ya Lugha za kigeni...Wasomi watumike katka undeshaji wa mfumo lakini Wateuliwe msiweke sana swala la Elimu,Ila ikitokea ni vyema pia,Angalieni pia historia ya mtu katika kanisa uelewa wake juu ya kanisa msije weka mtu akaja na kuhuhisha misingi  yake baadae makatoka kwenye line,Mpaka sasa kanisa la AIC liMEDUMAA.Kiongozi atakaye jali watumishi wa vijijini na kuwapa nguvu maana huko ndo injili inachagamoto kiasi kikubwa....', 2, 'Benyamin Yakobo', '', 1509431770, 1),
(30, 'Askofu ni lazima awe na shahada ya kwanza ya udhamivu katika masomo ya thiolojia ili kuleta ushindani kwenye soko la kiutumushi kwa kuwa kanisa letu lina ushirikiano na makanisa mengine hapa Tanzania na duniani kwa ujumla', 2, 'Isaya KAZOBA', '07631919', 1509431976, 1),
(31, 'Tuzingatie elimu au taaluma ya mtu katika mambo ya kiroho na kimwili.  \r\n\r\nAngalau shahada moja. Katika mambo ya uongozi au taaluma inayokaribiana na hiyo. \r\n\r\nNa stashahada ya theology', 2, 'Leonard Zacharia', '0764988339', 1509432300, 1),
(32, 'Katiba hii pia iwe a kifungu cha kujali wachungaji wa vijijini ambao wengi na kiasi kikubwa ndo wametumika na kanisa hili muda mrefu katika kulijenga mwisho wa siku mnawatupa vijijini,Katiba iwe bayana kuwa wachungaji wote ni sawa wa mijini a vijijini,na Wana haki sawa,Tofauti na sasa wachugaji wakongwe wamekuwa wakiishi maisha magumu zaidi na sadaka kila week zinatumwa huko makao makuu angalieni namna ya kuwalipa hata mshara kiwango kidogo au wekeni utarabu wa kwa asilimia,,Pesa yote imekuwa ikitumwa huko makao makuu lakini kanisa lenyewe linadumaa kila siku makanisa ni yale yale hakuna jipya na pesa inatumwa sijui sasa inafaya nini,Huku WACHUNGAJI WENGI WALIO PAMBANA KUENEZA INJILI MKIWAACHA WAKIISHI MAISHA MAGUMU HUKU MKIWALAZIMISHA SADAKA ZITUMWE MAKAO MAKUU...angalieni hili wekeni kifungu katak katiba kitakacho wapa nguvu wachungaji kueneza injili vijijini ndani huko ambako ndo ulikuwa utaratibu wa kanisa hili zamani...', 1, 'peter saimon', '', 1509432346, 1),
(33, 'Uwekezaji na mawasiliano\r\nKanisa halina aseti ambazo zitawaleta watu kwa Bwana kwa njia ya huduma za jamii mfno; vyuo, hospitali, mashule kwa kila mahali hapa Tanzania na Duniani kote.\r\nkanisa kurusha mojawapo ya matukio mhimu ikiwa ni pamoja na mahubiri au shughuli zozote za kikanisa', 1, 'Isaya KAZOBA', '0763571919', 1509432553, 1),
(34, 'Bwana yesu asifiwe sana/ kwa maoni yangu mimi ningepanda uchaguzi wa mchungaji kua asikofu kwanza Elimu yake pili Mali alizonazo kabla ya kuchaguliwa tatu Utayari wake kulitumikia kanisa na nne Tunu ya utumishi katika kanisa pamoja na kuangalia Uadilifu wake tangu akiwa kwenye uinjilisti au uumini wa kawaida asanteni sana wenu katika bwana', 2, 'paul shati', '+255755477980', 1509436801, 1),
(35, 'Bwana yesu asifiwe sana/ kwa maoni yangu mimi ningepanda uchaguzi wa mchungaji kua asikofu kwanza Elimu yake pili Mali alizonazo kabla ya kuchaguliwa tatu Utayari wake kulitumikia kanisa na nne Tunu ya utumishi katika kanisa pamoja na kuangalia Uadilifu wake tangu akiwa kwenye uinjilisti au uumini wa kawaida asanteni sana wenu katika bwana', 2, 'paul shati', '+255755477980', 1509436835, 1),
(36, 'Bwana yesu asifiwe sana/ kwa maoni yangu mimi ningepanda uchaguzi wa mchungaji kua asikofu kwanza Elimu yake pili Mali alizonazo kabla ya kuchaguliwa tatu Utayari wake kulitumikia kanisa na nne Tunu ya utumishi katika kanisa pamoja na kuangalia Uadilifu wake tangu akiwa kwenye uinjilisti au uumini wa kawaida asanteni sana wenu katika bwana', 2, 'paul shati', '+255755477980', 1509436842, 1),
(37, 'Misingi imara itajengwa kwa uwazi,usawa,uwajibikaji n.k. Siyo viongozi wengine wajione miungu watu kwamba bila wao hakuna kitakachoendelea. Dayosisi zimeyasahau sana makanisa yake hakuna uendelezaji wowote. Wenyewe wakiwa na michango yao wanaileta hadi ngazi za chini kabisa na inaratibiwa vizuri .Sasa ikifika kipindi makanisa yanahitaji msaada mfano wa ujenzi. Dayosisi hazishughuliki kabisa ilihali kila mwezi wanapata asilimia za makanisa hayo.Ninachojiuliza ni kwamba pesa zote hizo hutumika kuwalipa tu watumishi ama nini... tuboresheni na sisi mambo yetu ili tuingie katika karne nyingine na tuende na wakati uliopo uzuri watu wanapenda sana kanisa letu ila sehemu nyingi mazingira si rafiki', 1, 'paul danka', '0769598216', 1509437239, 1),
(38, 'Kigezo cha kwanza kiwe ni elimu! walau awe na elimu ya shahada ktk masomo ya theology au kwa masomo yoyote! Nimesema hivyo kwasababu askofu anatakiwa kuwa na interaction ya watu mbalimbali, inatia aibu endapo askofu kapata mwaliko wa kwenda nje ya nje halafu aende na mkalimani! vivyo hivyo na kwa wasaidizi wa askofu kiwango cha elimu kiwe juu!\r\n\r\nAwe na umri wa kuanzia miaka 50 kwenda mbele akiwa amelitumikia kanisa pia zaidi ya miaka 10 ndipo apewe nafasi hiyo!\r\n\r\nAwe mtu mwenyekulizika na kipato chake kinachotokana na mahali alipo', 2, 'DANIEL J SHUNULA', '0765885396', 1509439595, 1),
(39, 'Tnahitaji wasomi dunia imebadilika usisi ndo unaturudisha nyuma', 2, 'Sarah mathiad', '0766588368', 1509440199, 1),
(40, 'Ili mchungaji awe askofu awe na elimu kuanzia Masters kama wenye masters ni wa chache basi degree iwe mwisho.', 2, 'Daud Charles', '0753031976', 1509447199, 1),
(41, 'Mapato kutoka kwenye miradi ya AICT ya katwa asilimia 50 kwa ajili ya kuendeleza na kufungua local church zaidi', 1, 'Daud Charles', '0753031976', 1509447636, 1),
(42, 'Nawasalimu katika jina la BABA MUNGU WETU. Maoni yangu ni kuwa: Kigezo cha kwanza kabisa, awe na hofu kubwa mbele za Mungu, pili, awe na elimu angulau first degree na kuendelea, tatu kanisa lihusike kuwaandaa maaskofu kwa kuwaendeleza kielimu na kiroho.', 2, 'Ziliyo B Deogratias', '0754663327', 1509451392, 1),
(43, 'Nawasalimu katika jina la BABA MUNGU WETU. Maoni yangu ni kuwa: Kigezo cha kwanza kabisa, awe na hofu kubwa mbele za Mungu, pili, awe na elimu angulau first degree na kuendelea, tatu kanisa lihusike kuwaandaa maaskofu kwa kuwaendeleza kielimu na kiroho.', 2, 'Ziliyo B Deogratias', '0754663327', 1509451394, 1),
(44, 'Bwana apewe sifa,  napendekeza wachungaji walipwe mishahara kwa usawa,  hii itawasaidia hata wachungaji kuishi maisha ya kawaida,  maake wenye unafuu ni wale waishio mjini tuu lkini vijijini wanateseka,  ifike mahala kanisa litambue umuhimu wa watumishi wote na kwa usawa. \r\n\r\nLa pili: PESA za sadaka zisitolewe zote ktk pastorate au makanisa,  ili yajiletee maendeleo na kupunguza michango. \r\n\r\nTatu :  iwekwe sheria kwa mafisadi,  kanisa letu limekuwa nyuma kwa kila kitu uje kwenye mashule HOI,  hospital HOI,  lini tutaendelea???????? \r\nYangu ni hayo,  Mungu awasaidie.', 1, 'Mary journey majige', '0766867614', 1509455455, 1),
(45, '1.Awe Na elimu ya Theologia ya neno la Mungu miaka 4(Diploma,Adv. Dipl.,B.Th)\r\nHii itamsaidia kulijenga kanisa ktk msingi wa neno la Mungu.\r\n2.Pamoja Na sifa hiyo,awe Na shahada yoyote (Elimu,Theol.,IT,Communication etc\r\nHii itamsaidia kumpa uwezo wa kujengana mahusiano Kwa watu wa chini Na juu bila hofu.\r\n3.Awe Na uzoefu wa kukaa kulea kanisa miaka 3,anzia akiwa mwinjilisti au mchg.\r\nItaonyesha uwezo wake kulea hata akipewa diocese.\r\n4.Aombe Kwa kuandika mkakati wake ktk kuongoza kanisa.Hii utamsaidia kujua pia uwezo  wake.\r\n5.Ajieleze katika Sinodi ya uchaguzi.\r\n6.Umri wake uanzie miaka 40-55 kwani ni Jukumu zito\r\n7.Muda wa kustaafu iwe miaka 60 tu Kwa askofu.\r\nPia msaidizi wa askofu awe Na sifa hizo kwani sifa zinapotofautiana gap inakuwa kubwa sana,hata ushauri unakuwa mgumu sana.', 2, 'xxxxxxxx', 'xxxxxxx', 1509456372, 1),
(46, '1.Elimu  ithaminiwe ya Theologia\r\n2.Utumishi iwe ni  ajira,mtumishi alipwe kulingana Na elimu yake.\r\n3. Uchungaji uanzie shahada ya kwanza Na chuo cha NTC kianze kutoa hata km not accredited km sasa.', 1, 'xxxxxxx', 'xxxxxx', 1509456743, 1),
(47, 'Uchungaji: Wanawake wapewe uchungaji,na uzee wa kanisa.Ubatizo: MTU anayemuamini Yesu akiwa Mke wa pili abatizwe Na ashiriki. Asipate tu uongozi.', 2, 'xxxxxxxxxx', 'xxxxxxxxxx', 1509457084, 1),
(48, 'KUWE NA KIFUNGU THABITI KITAKACHO JENGA MISINGI IMARA YA TAASISI ZA ELIMU KATIKA KANISA ILI KUINGIA KATIKA USHINDANI WA KIELIMU NA TAASISI ZINGINE ZA DINI DUNIANI.', 1, 'CLEOPA DAUD MASSOLWA', '0714792579', 1509463601, 1),
(49, 'Awe na elimu ya biblia na ya kijamii angalau kuanzia kiwango cha masta. \r\nLakini pia asiwe askofu wa dayosisi yoyote, na akae makao makuu ya kanisa. \r\nNaongeza kuwa wachunhaji wapewe mikataba ya kazi na walipwe mishahara kwani wengi wanamaosha magumu', 2, 'Renatus Sangija', '0762308331', 1509471290, 1),
(50, 'Kuwe na wachungaji wanawake,wahudumu na wazee wanawake mwongozo wa ibada ubadilishwe watu waombe wote badala ya watu wawili pia wachungaji na wainjilist malipo yao yawe sawa kuwe na utaratibu wa kuwalipa wote bila kujali wa mjini au kijijini', 1, 'joseph mwombeji', '0714082495', 1509472544, 1),
(51, 'Awe mwenye hofu ya Mungu,mwenye doctorate ya theolojia asiye na tuhuma zozote', 2, 'joseph mwombeji', '0714082495', 1509472713, 1),
(52, 'Moja ya kitu kinacholidhoofisha kanisa letu ni kutowajali watumishi wake(Wainjilist na Wachungaji) hasa wanaotumika katika mazingira magumu, hivyo katiba iwe na kipengele cha kuwatambua na kuwapa kipaumbele.\r\nPia kanisa liwe na vipengele vyenye kuonyesha kuwathamini na kuwaheshimu Wainjilist si kama ilivyo sasa, maana huko kwa Wainjilist ndiko msingi wa Kanisa unaanzia.\r\nVilevile kuwepo na eneo linaloainisha wazi jinsi kanisa litakavyohusika kuwaendeleza na kuwasimamia watumishi walio na nia ya kujiendeleza kielimu.', 1, 'Andrew Lucas Shigella', '+255768187967', 1509475794, 1),
(53, 'Mchungaji achaguliwe kuwa askofu kwa kuzingatia imani yake katika kumtumikia MUNGU, imani hiyo ikiambatana na matendo yake mbele za MUNGU na wanadamu', 2, 'Leonard Shushu', '0754274704', 1509476625, 1),
(54, 'Kiwango cha Elimu kianzie Degree ya Pili (Masters) na kuendelea kwa Askofu Mkuu. PhD inafaa zaidi. Pia kwa Maaskofu wote napendekeza wawe angalau na Degree ya Kwanza. Wachungaji kuanzia Diploma, Wainjilisti wawe na Certificate. Nashauri kuwe na mfumo maalum wa mtu kuwa Mchungaji kwanza asome Elimu ya Sekondari akiwa yangu kijana baadae aingie Chuo cha Kimisionary kufundishwa Theology kisha mafunzo maalumu ya Utumishi (Uchungaji) kwa kipindi cha Miezi 6.', 2, 'Boaz Mihulu Mbundu', '0714103390', 1509480228, 1),
(55, 'Uchaguzi wa maaskofu uwe kila baada ya miaka mitano (5) na askofu aruhusiwe kugombea vipindi vitatu apumzike kuwa askofu wa dayosisi, umri uwe kuanzia miaka 40 mwisho 60 kugombea u askofu wa dayosisi.', 1, 'Edson Rwambogo', '0765355105', 1509507330, 1),
(56, 'Awe ameokoka na Mcha Mungu na kazi zake ziwe ndizo kipimo cha kuchaguliwa kwake. Kazi km kuombea waumini na kufunguliwa waumini mbalimbali, Alie fanikiwa kukuza kanisa sehemu alipo, Mwenye nguvu kiuchumi ambae si tegemezi, Ambae anasimamia injili iliyohai ya Mungu', 2, 'Daniel Gabriel', '0713717429', 1509508723, 1),
(57, 'Naomba mfumo Wa utawala wa kanisa ubadilishwe, kwan makao makuu ya AICT upo kama jina tu. Naomba katiba ibadili mfumo Wa dayosisi kujitawala mgawanyo Wa pesa uwepo kwenda makao makuu, bila ya hivyo hata makao makuu halitapajenga.', 1, 'Lameck kisendi', '0786082223', 1509511053, 1),
(58, 'Naomba mfumo Wa utawala wa kanisa ubadilishwe, kwan makao makuu ya AICT upo kama jina tu. Naomba katiba ibadili mfumo Wa dayosisi kujitawala mgawanyo Wa pesa uwepo kwenda makao makuu, bila ya hivyo hata makao makuu halitapajenga.', 1, 'Lameck kisendi', '0786082223', 1509511056, 1),
(59, 'Naomba mfumo Wa utawala wa kanisa ubadilishwe, kwan makao makuu ya AICT upo kama jina tu. Naomba katiba ibadili mfumo Wa dayosisi kujitawala mgawanyo Wa pesa uwepo kwenda makao makuu, bila ya hivyo hata makao makuu halitapajenga.', 1, 'Lameck kisendi', '0786082223', 1509511074, 1),
(60, 'Naomba uwanja upanuliwe zaidi si hayo tu mawili MF. Ajira za wainjilisti ,wachungaji, Na maaskofu. Kwenye masilahi katiba haiweki bayana. Mtumishi alipwe mshahara,awekewe mafao km Watumishi wengine mabadiliko yataanza. Nje Na hapo elimu itaendelea kupuuzwa mpaka sasa. Ndio maana kanisa linazaidi ya miaka 100 bila University Na vyuo vilivyopo having kiwango. Diploma gani ya miaka 4,then Adv. Dipl. gani sasa haipo ktk mfumo wa elimu,pia nayo minne. Nani katuloga sisi,mbona hatuendi?', 2, 'xxxxxxxxxx', 'xxxxxxxxxx', 1509512165, 1),
(61, 'Naomba uwanja upanuliwe zaidi si hayo tu mawili MF. Ajira za wainjilisti ,wachungaji, Na maaskofu. Kwenye masilahi katiba haiweki bayana. Mtumishi alipwe mshahara,awekewe mafao km Watumishi wengine mabadiliko yataanza. Nje Na hapo elimu itaendelea kupuuzwa mpaka sasa. Ndio maana kanisa linazaidi ya miaka 100 bila University Na vyuo vilivyopo having kiwango. Diploma gani ya miaka 4,then Adv. Dipl. gani sasa haipo ktk mfumo wa elimu,pia nayo minne. Nani katuloga sisi,mbona hatuendi?', 2, 'xxxxxxxxxx', 'xxxxxxxxxx', 1509512171, 1),
(62, '1. Maasikofu wawe wanahamishwa vituo vya kazi kama wanavyofanya kwa wachungaji. na askofu mkuu wa kanisa akae makao makuu ya kanisa na sio kupewa dayosisi tena. Hiii itasaidia kwa yeye kuwawajibisha maaskofu ambao watashindwa kusmamia majukumu yao.\r\n2.Wachungaji wawe na Elimu angalau shahada ya kwanza ya Thiology ama elimu nyingineyo, ili kusaidia kuwa wabunifu katika maeneo yao ya kazi. pia waajiliwe na walipwe posho/mishahara kulingana na Madaraja ya elimu zao, na sio kuangalia ukubwa wa kanisa analolihudumia\r\n3. wachungaji wapewe mikataba ya kazi na kuingizwa kwenye makato mbalimbali ya mifuko ya jamii pamoja na bima za afya, ili wakati wa kustafu wapewe Pension/kiinua mgongo.\r\n4. Pastorate ziwajibike chalo kwanza badala ya kuwajibika Dayosisi moja kwa moja, hii itasaidia chalo kuwa na nguvu katika utendaji na kuleta maendeleo ya haraka kwa kanisa\r\n5. Makatibu watendaji wa Dayosisi na AICT wawe ni watu waliobobea kwenye mambo ya utawala na utendaji wenye sifa za angalau elimu ya shahada ya kwanza katika mambo hayo, na sio kuangalia kwamba awe mchungaji.\r\n6.Mirandi mbalimbali ya kanisa isimamiwe na watalaamu wa miradi ambao wamesomea mambo hayo na wawe wenye hofu ya Mungu.\r\n7. Kanisa liwe na mkakati mzuri wa kuanzisha makanisa na kuyasaidia makanisa machanga kwa kujenga baadhi ya miundombinu (kama jengo la kuabudia, nyumba ya kichungaji n,k), hii itasaidia kukuza kanisa.', 1, 'Renatus Sangija', '0762309331', 1509518080, 1),
(63, 'Ni wazi Askofu ndiye mwangalizi wa kanisa hivyo ni vyema kanisa kuwa na kamati ya maadili na shubaka (data base) ya taarifa za watumishi. Yeyote anayetaka kupewa UASKOFU anapaswa kupimwa kutoka kwenye kumbukumbu za kanisa kuhusu maisha yake na utumishi wake vilivyoandikwa si kwa kutumia dhana ya masimulizi. Anayepaswa kuwa Askofu anatakiwa kuwa anafahamika kwa kiwango cha kutosha na kamati ya maadili inayoweza kuundwa na wazee wa kanisa,viongozi wa Kiroho na wanataaluma inapaswa itathmini hilli', 2, 'AMIN JEREMIAH NGULUM', '0621605005', 1509523174, 1),
(64, 'Ni lazima katiba itambue nafasi ya WAKRISTO kwa kuwa ndio KANISA LENYEWE (EKKLESIA). Pia katiba itambue wajibu wa OFISI YA HUDUMA (Kwa maana ya viongozi kama wachungaji n.k). NI LAZIMA KANISA LIJENGWE HASA NA NENO LA MUNGU NA SI NADHARIA NA MAPOKEO YA WASOMI', 1, 'AMIN JEREMIAH NGULUMA', '0621605005', 1509523288, 1),
(65, 'Bwana yesu asifiwe mimi kwa maoni yangu binafsi ningependa kanisa au mahali Sadaka inapotolewa isiachwe asilimia bali dayosisi ndio ipewe hiyo asilimia ilikujenga na kuweka misingi na miundombinu bora katika kanisa husika\r\nMaana inapobaki asilimia inakuwa haiwezi kujenga chochote bali itajenga family ya mtumishi mahali husika...  Kanisa litakuwa na nguvu imara likipeleka asilimia na kuacha nguvu kubwa mahali Sadaka ilipotolewa', 1, 'Peter Nkwabi', '0758055633', 1509528470, 1),
(66, 'askofu awe anakaa miaka mitano tu anachaguliwa mwingine sabu wanavokaa kwenye kiti miaka yote maendeleo yanakuwa hayapo wainjilisti wa kike nao waruhusiwe kuwa wachungaji kwani huduma haina mwanamke wala mwanaume', 1, 'suzana lazaro David', '0672260872', 1509529785, 1),
(67, '.kiwango cha elimu aanzie na PhD /Dr \r\n.awe Amekuwa mchungaji kwa takribani miaka 30\r\n.awe amewahi kuwa makamu wa Askofu kwa Muda miaka 10\r\n.awe amewahi kusimamia miradi ya Maendeleo popote pale kwa uwazi, inaonekana waziwazi kwa waumini BILA kutiliwa mashaka \r\n.awe hajawahi kutuhumiwa na rushwa, matumizi mabaya ya ofisi, fedha Za Kanisa, mashirika \r\n.awe na uchumi unaoneka wazi wazi kwake Binafsi, nje ya kutegemea Kanisa kwa Kila Kitu \r\n.awe na familia ya watoto wasiozidi 5,wenye elimu inayojitosheleza na kazi zao\r\n.mali zake zionekane wazi wazi kwa uongozi WA Kila dayosisi na Makao Makuu ya Kanisa \r\n.apimwe kwa Kuangalia rekodi zake Za kiutendaji, Katka Makanisa aliyotumikia \r\n.ofisi zake zikaguliwe Historia yake, management na administrative zilikuwaje na zikoje \r\n.ushiriki wake katika kutatua migogoro ya waumini, makanisani\r\n.social interactions pia zipimwe \r\n.creativity Ndani ya Kanisa ikoje \r\n.nafasi ya kiroho awe ameiva KWELI KWELI! \r\n........Asanteni Sana', 2, 'Samwel d. Limbe', '0763343998', 1509532826, 1),
(68, 'Awe na Elimu ya darasani kuanzia diploma na awe amehudumu katika kanisa au local church sio chini ya miaka mitatu.', 3, 'Edson Rwambogo', '0621046614', 1509536660, 1),
(69, 'Hapana askofu abaki katika dayosisi yake ila aruhusiwe kugombea dayosisi nyingine km nafasi itakuwepo', 4, 'Edson Rwambogo', '0621046614', 1509536807, 1),
(70, 'Kiongozi mwenye sifa kuwania uaskofu Elimu yake Ianzie degree kutoka vyuo vinavyotambulika na serikali', 2, 'Edson  Rwambogo', '0621046614', 1509536977, 1),
(71, 'Dayosisi zote zihakikishe zina shule kuanzia chekechea mpaka secondary school  na uwepo utaratibu wa kuwasomesha watoto wasiozidi wawilI.', 1, 'Edson Rwambogo', '0621046614', 1509537174, 1),
(72, 'Kuna umuhimu mkubwa sana kwa maaskofu kuhamishwa kama wachungaji, na uhamisho huu ufanyike kila baada ya miaka 3.nawasilisha', 6, 'Benjamin joshua', '0755924950', 1509544420, 1),
(73, 'Miaka 3', 5, 'Benjamin joshua', '0755924950', 1509544485, 1),
(74, 'Asikofu afanye kazi kwenye dayosisi miaka mitano then ahamishwe', 6, 'Emmanuel Zabron Nkoba', '0719070915', 1509544526, 1),
(75, 'Wapewe uhamisho', 4, 'Benjamin joshua', '0755924950', 1509544571, 1),
(76, 'Ndio wapewe uhamisho', 4, 'Emmanuel Zabron Nkoba', '0719070915', 1509544646, 1),
(77, 'Waumini wa kanisa alipo mwinjilisti ndo wahusike kutoa maoni kama anafaa kwenda uchungaji ama la', 3, 'Benjamin joshua', '0755924950', 1509544666, 1),
(78, 'Waumini wa kanisa alipo mwinjilisti ndo wahusike kutoa maoni kama anafaa kwenda uchungaji ama la', 3, 'Benjamin joshua', '0755924950', 1509544667, 1),
(79, 'Nafikili utaratibu uliopo ni mzuri tu hauna shida', 2, 'Benjamin joshua', '0755924950', 1509544771, 1),
(80, 'Nafikili utaratibu uliopo ni mzuri tu hauna shida', 2, 'Benjamin joshua', '0755924950', 1509544771, 1),
(81, 'Waumini wapewe nafasi pana zaidi ya kuwahoji wainjilisti, wachungaji na maaskofu pale inapobainika Kuna shida ama dosari katika utendaji kazi wao', 1, 'Benjamin joshua', '0755924950', 1509544914, 1),
(82, 'Askofu ahamishwe tu inapohitajika bila kuangalia muda, muda wa juu ni miaka 6', 5, 'Joseph w nyalibeshi', '0784848371', 1509546921, 1),
(83, 'Maaskofu wahamishwe', 4, 'Joseph w nyalibeshi', '0784848371', 1509547062, 1),
(84, 'Askofu mkuu akae makao makuu ya aict', 1, 'Joseph w nyalibeshi', '0784848371', 1509547243, 1),
(85, 'Wito ndio msingi wa kazi ya MUNGU\r\nUwezo wake wa kufanya kazi akijua anapaswa kufanya nini pia anajibika kwa MUNGU na kanisa lililomtuma', 3, 'Kamani Isaya', '0755722200', 1509548890, 1),
(86, 'Kuna hatari ya kujaza maeneo ya makanisa makaburi, nibudi kuweka kanuni iwe wale tu waliohatarisha maisha yao kwa kazi ya injili ndo wazikwe kanisani', 7, 'Kamani Isaya', '0755722200', 1509549157, 1),
(87, 'Uhamisho wa Askofu hauna maana kwani ingefaa askufu kustaafu akiwa na miaka 60 tu kama mwangalizi wa kanisa na spate muda wa kuandika vitabu na kufunza aliyoyaishi vyuo vya Biblia akiwa na nguvu', 6, 'Kamani Isaya', '0755722200', 1509549451, 1),
(88, 'Mchungaji apendekezwe kuwa Askofu na wakristo makanisani, apataye kura nyingi jina lake liletwe sinody ya uchaguzi ndo lipigiwe kura na wajumbe, apataye theruthi mbili awe Askofu na atangazwe kwa gazeti la serikali', 2, 'Kamani Isaya', '0755722200', 1509549810, 1),
(89, 'Katiba I we na malengo mahususi ya Huduma, iwe na mission bayana na maono yaliyoandikwa, maadili ya kanisa, haki za mtumishi ziainishwe hats kama ataacha kazi kumbuka Yesu alifundisha wazi atakayemtumikia baba atamheshimu na atapokea Mara 100 katika ulimwengu huu na baadaye uzima wa milili. Masuala ya uhamisho wa watumishi yawe na masilahi ili kuepusha udharirishaji wa watumishi!', 1, 'Kamani Isays', '0755722200', 1509550274, 1),
(90, 'Katiba I we na malengo mahususi ya Huduma, iwe na mission bayana na maono yaliyoandikwa, maadili ya kanisa, haki za mtumishi ziainishwe hats kama ataacha kazi kumbuka Yesu alifundisha wazi atakayemtumikia baba atamheshimu na atapokea Mara 100 katika ulimwengu huu na baadaye uzima wa milili. Masuala ya uhamisho wa watumishi yawe na masilahi ili kuepusha udharirishaji wa watumishi!', 1, 'Kamani Isays', '0755722200', 1509550275, 1),
(91, 'Maoni yangu ni kuwa Askofu unatakiwa kukaa kwa muda wa miaka 10 then anahamishiwa sehemu nyingine lkn lazima apewe/ awe na malengo baada ya hiyo miaka nini ataacha kama alama kwa ajili ya maendeleo ya kanisa', 5, 'Alphonce bunyara', '0766304548', 1509552496, 1),
(92, 'Maoni yangu ni kuwa Askofu unatakiwa kukaa kwa muda wa miaka 10 then anahamishiwa sehemu nyingine lkn lazima apewe/ awe na malengo baada ya hiyo miaka nini ataacha kama alama kwa ajili ya maendeleo ya kanisa', 5, 'Alphonce bunyara', '0766304548', 1509552497, 1),
(93, 'Maoni yangu ni kuwa Askofu unatakiwa kukaa kwa muda wa miaka 10 then anahamishiwa sehemu nyingine lkn lazima apewe/ awe na malengo baada ya hiyo miaka nini ataacha kama alama kwa ajili ya maendeleo ya kanisa', 5, 'Alphonce bunyara', '0766304548', 1509552497, 1),
(94, 'Ni muhimu katiba ikaainisha ni namna gani nzuri ya kupata pato kwa ajili ya miradi ya kanisa au ni muhimu katiba ikabainisha namna nzuri ya kuwa na miradi ya kabisa sehemu nayojiendesha yenyewe ili kiwe chanzo cha pato kwa ajili ya kanisa maana kwa hali ilivyo sasa ni mbaya kwa upande wa kanisa sababu ni kuwa kanisa halina chanzo kingine cha mapato ukiacha sadaka na zaka zinazo toka kwa waumini', 1, 'alphonce bunyara', '0766304548', 1509552987, 1),
(95, 'Ni muhimu katiba ikaainisha ni namna gani nzuri ya kupata pato kwa ajili ya miradi ya kanisa au ni muhimu katiba ikabainisha namna nzuri ya kuwa na miradi ya kabisa sehemu nayojiendesha yenyewe ili kiwe chanzo cha pato kwa ajili ya kanisa maana kwa hali ilivyo sasa ni mbaya kwa upande wa kanisa sababu ni kuwa kanisa halina chanzo kingine cha mapato ukiacha sadaka na zaka zinazo toka kwa waumini', 1, 'alphonce bunyara', '0766304548', 1509553006, 1),
(96, 'Ni muhimu katiba ikaainisha ni namna gani nzuri ya kupata pato kwa ajili ya miradi ya kanisa au ni muhimu katiba ikabainisha namna nzuri ya kuwa na miradi ya kabisa sehemu nayojiendesha yenyewe ili kiwe chanzo cha pato kwa ajili ya kanisa maana kwa hali ilivyo sasa ni mbaya kwa upande wa kanisa sababu ni kuwa kanisa halina chanzo kingine cha mapato ukiacha sadaka na zaka zinazo toka kwa waumini', 1, 'alphonce bunyara', '0766304548', 1509553008, 1),
(97, 'Maaskofu wazikwe kwenye makaburi  ya makanisa kwa historia ya kanisa.', 7, 'selemani abdallah', '0788273356', 1509558012, 1),
(98, 'Nashukuru sana kwa kanisa kwa mafundisho mazuri ila ombi langu ni kufanya mapinduzi makubwa ktk siku ya kuabudu tuabudu siku ya haki hapo ndo tutauonyesha ulimwengu Wa sasa kuwa Aic nayo imefanya mageuzi toka mageuzi ya akina Luther miaka 500 iliyopita', 1, 'Melkizedek Balingi', '0765978620', 1509558327, 1),
(99, 'Naomba Ibada inapoanza ,naomba sana maombi ya jumapili tuwe na vitabu vya kufuata kabisa na ibada inze kwa kukiri makosa ambayo mkiristu amekosa badala ya utaratibu wa sasa tunaanza ibada tu mojakwamoja,tufanye basi kama waruteli wanavyofanya unakiri makosa uliyoyafanya', 1, 'Daniel mrefu', '0789019251', 1509561068, 1),
(100, 'Miaka 7 kiwango cha chini na mwisho iwe miaka 14', 5, 'AMOS KACHEMBEHO', '0752670929', 1509563266, 1),
(101, 'Kanisa ni tasisi inayokuwa hvyo itaendelea kuwa na viongoz mbalimbal hvyo ukiruhusu viongoz wazkwe eneo la kansa siku moja patajaa maon yangu wazkwe nje na maeneo ya kanisa ili kuyapa Uhuru wa wa upanuz wa maendeleo kama cyo watengewe maeneo nje na Kansas ya kazka viongoz tu', 7, 'AMOS KACHEMBEHO', '0752670929', 1509564110, 1),
(102, 'Ukomo wa maaskof ktk kutumika akichaguliwa atumike ndan ya mda wa miaka 7 tupate mda kufanya uchaguz tena ili kuona alichokfanya', 1, 'AMOS KACHEMBEHO', '0752670929', 1509564502, 1),
(103, 'Wainjrst wapate baraza lao na askof au wakarbishe kwenye sinod maana ni watumis wa  kanisa na wanakaa nawatu weng lakn hawana sehem ya kutolea kelo zao hvyo hutuwez kuendelea kwa kuzan wainjrst wakikarbshwa wanapga kelele  hii n kama kuchoma nyama kwenye tochi ukizan baada ya mda itaivaa kumbe itaoza', 1, 'AMOS KACHEMBEHO', '0752670929', 1509565094, 1),
(104, 'Bwana Yesu asifiwe,nashauri Maaskofu nao wahamishwe maana karama na vipawa hutifautiana kati ya mtu na mtu,hivyo wakihamishwa wataleta mabadiliko katika Dayosisi tofauti na ilivyokuwa,ili kuleta ufanisi ni vyema wakihamishwa', 4, 'Bether John Sayi', '0683134767', 1509593008, 1),
(105, 'Nashauri wahamishwe kila baada ya miaka 7', 5, 'Bether John Sayi', '0683134767', 1509593084, 1),
(106, 'Wahamishwe kwa kura za kuokota vikaratasi vilivyoandikwa Dayosisi zote,Askofu asihamishwe kwa kupigiwa kura wala kwa kuomba mwenyewe au kuombwa na Dayosisi husika maana itasababisha mtafaruku', 6, 'Bether John Sayi', '0683134767', 1509593233, 1),
(107, 'Wahamishwe kwa kura za kuokota vikaratasi vilivyoandikwa Dayosisi zote,Askofu asihamishwe kwa kupigiwa kura wala kwa kuomba mwenyewe au kuombwa na Dayosisi husika maana itasababisha mtafaruku', 6, 'Bether John Sayi', '0683134767', 1509593234, 1),
(108, 'Nashauri Maaskofu na wake zao wazikwe makanisani ila watumishi wengine wazikwe na familia zao,sio kwamba hatuwapendi Bali hawa ni wengi wakizikwa kanisani makanisa yatajaa,kwa kuwa Uaskofu ndo ngazi ya juu kabisa ya kanisa letu kwa kutambua hili na kuweka kumbukumbu ni vyema Maaskofu wazikwe makanisani', 7, 'Bether John Sayi', '0683134767', 1509593448, 1),
(109, 'Kwa mimi napendekeza maaskofu wawe wanakaa miaka 5-10 kisha wanabadilishiwa sehemu hii itasaidia kujua mahali hapo ni pa kazi na si makao ya kudumu kunakuwa na mabadiliko hata kiutendaji', 5, 'Rhoda peter', '0754008090', 1509597477, 1),
(110, 'Kwa mimi napendekeza maaskofu wawe wanakaa miaka 5-10 kisha wanabadilishiwa sehemu hii itasaidia kujua mahali hapo ni pa kazi na si makao ya kudumu kunakuwa na mabadiliko hata kiutendaji', 5, 'Rhoda peter', '0754008090', 1509597478, 1),
(111, 'Kwa mimi napendekeza maaskofu wawe wanakaa miaka 5-10 kisha wanabadilishiwa sehemu hii itasaidia kujua mahali hapo ni pa kazi na si makao ya kudumu kunakuwa na mabadiliko hata kiutendaji', 5, 'Rhoda peter', '0754008090', 1509597479, 1),
(112, 'Mimi naona kwa hili liko mikononi mwa familia kama familia itakubali azikwe popote basi kuwe na meneo maalumu ya kuzika viongozi kwa kila dayosisi', 7, 'Rhoda peter', '0754008090', 1509597740, 1),
(113, 'Ndio nakubari, ila maaskofu wawe wanakaa miaka 10 kisha anahamishwa kwenda dayosisi nyingine', 6, 'Rhoda peter', '0754008090', 1509597913, 1),
(114, 'Ili kanisa letu liwe na misingi imara lazima tuwekeze pia katika elimu dunia kwa kiwango kikubwa. Elimu ya kikristu lazima kiambatane na elimu dunia ,hii itasaidia kuleta maendeleo. Kanisa lazima lijijenge kitaasisi zaidi,lifanye sensa ya waumini wake kutambua vipawa na vipaji pamoja na utaalam walionao ili waweze kutumika na kanisa katika ustawi. Dunia imebadilika sana kanisa linahitajiwa watu wenye elimu zaidi. Fikiria ni kanisa la AICT pekee amabalo mpaka sasa halina chuo kikuu,hata shule tu za sekondari hakuna yenye kutolea mfano.MUNGU ATUSAIDIE KANISA LIMEPOTEZA MWELEKEO TUSIPOFANYA MAGEUZI MAKUBWA', 1, 'Nicholaus Shalali', '+255785 777739', 1509599722, 1),
(115, 'Hakuna sbb ya kuwahamisha ila kuwepo na muda wa ukomo wa kukaa kwny nafasi hiyo kwa maoni yng miaka minne inatosha kukaa ktk nafasi hiyo na baada ya hapo ufanyke uchaguzi Mkuu na huo ndio utakaowaweka maeneo mapya', 6, 'jumapili elias', '', 1509609589, 1);

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(11) NOT NULL,
  `topic` varchar(10000) NOT NULL,
  `category_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`topic_id`, `topic`, `category_id`, `type`, `timestamp`, `status`) VALUES
(1, 'Ndugu Mkiristo ungependa katiba yetu mpya ya AICT, iwe na kifungu gani ambacho kitasaidia kujenga misingi imara ya Kanisa letu.', 0, 'no', 1509345600, 1),
(2, 'Mpendwa Mkiristo, ni vigezo gani vitumike kumchagua Mchungaji kuwa Askofu wa AICT?', 0, 'no', 1509348329, 1),
(3, 'Katika kuimarisha kanisa ambalo ni mwili wa Kristo, sasa hivi tumo katika mchakato wa kuirejelea Katiba. Kwa maoni yako, ni vigezo gani vitumike katika kumteua mwinjilist kuwa Mchungaji?', 0, 'no', 1509535951, 1),
(4, 'Kwa utaratibu wa kanisa, ni wainjilisti na wachungaji tu ndiyo hupewa uhamisho. Kwa maoni yako, je na Maaskofu wapewe uhamisho?', 0, 'no', 1509536279, 1),
(5, 'Kama wewe maoni yako ni maaskofu kupewa uhamisho, unaona ni muda gani wa chini kwa Askofu kuwa kwenye Dayosisi moja na muda gani ni wa juu?', 0, 'no', 1509537113, 1),
(6, 'Kwa yule anayekubali uhamisho wa Maaskofu, tafadhari pendekeza njia za kufanya uhamisho huo.', 0, 'no', 1509537233, 1),
(7, 'Baada ya kazi zetu hapa duniani, Mungu hutupumzisha na miili yetu hurudi mavumbini. Baadhi ya viongozi wanazikwa kando kando ya majengo ya makanisa na wengine zehemu zingine. Toa maoni yako ni wapi viongozi wazikwe bila kuonyesha tofauti hizo.', 0, 'no', 1509537761, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `fullnames` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `level` varchar(2) NOT NULL,
  `activate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `fullnames`, `username`, `password`, `email`, `level`, `activate`) VALUES
(3, 'andrew mawanda', 'mawizzy', 'e10adc3949ba59abbe56e057f20f883e', 'andrewmawanda@yahoo.com', '1', 'active'),
(4, 'Kezakubi Silasi', 'Keza', '944ce13aca2ed8b2e1d86374f727ff97', 'kezakubis@gmail.com', '1', 'active'),
(5, 'Jackson Kezakubi', 'jack', '4ff9fc6e4e5d5f590c4f2134a8cc96d1', 'jacksonkezakubi@gmail.com', '0', 'Inactive'),
(6, 'Paul Bunyemba', 'aict', 'ebc1ff8bd27f0546099df93a8e01361c', 'paulbuyemba@yahoo.com', '0', 'Inactive'),
(7, 'Enock Magwesela', 'enock', 'c1387a5e9222a1d56477066152337fce', 'emagwesela@gmail.com', '0', 'Inactive'),
(8, 'admin aict', 'aictadminhq1', '9153e76b2255e82f3727fd526f0526c6', 'info@aictanzania.org', '1', 'active'),
(9, 'kisb aict', 'kisb', 'f31fbb18dc7a86a79f0a4fb9421aa38c', 'kisb@aictanzania.org', '1', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `verses`
--

CREATE TABLE `verses` (
  `verse_id` int(20) NOT NULL,
  `verse` varchar(500) NOT NULL,
  `poster` varchar(200) NOT NULL,
  `published` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `verses`
--

INSERT INTO `verses` (`verse_id`, `verse`, `poster`, `published`) VALUES
(1, 'For God so loved the world that he gave us his only son that whoever believes in him should not perish but have everlasting life', '', 'published'),
(2, 'Jesus said,am the way the truth and the life and no one goes to the father except through me', '', 'published'),
(3, 'Mimi ndimi mchungaji mwema, mchungaji mwema hutoa uhai wake kwa ajili ya kondoo.', '', 'published'),
(4, 'Kwa maana jinsi hii mungu aliupenda ulimwengu, hata akamtoa mwanawe wa pekee ili kila mtu amwaminiye asipotee bali awe na uzima wa milele.', '', 'published'),
(5, 'Yeremia 33:3 Niite nami nitakuitikia na kukuonyesha mambo magumu unayoyajua na usiyoyajua.', '', 'published'),
(6, 'Tazama ilivyovema ndugu wakae pamoja kwa umoja inavyopendeza', '', 'published'),
(7, 'Neno la Kristo likae kwa wingi ndani yetu (Wakolosai 3:16).', 'Kezakubi Silasi', 'published'),
(8, 'Yesu kama kielelezo yeye mwenyewe ni neno ndani ya neno anamshinda shetani (Luka 4:1-12).', 'Kezakubi Silasi', 'published');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `video_name` varchar(500) NOT NULL,
  `url` varchar(500) NOT NULL,
  `image` varchar(100) NOT NULL,
  `views` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `video_name`, `url`, `image`, `views`, `status`) VALUES
(1, 'A I C CHANGOMBE VIJANA CHOIR KWA MACHO', 'https://www.youtube.com/watch?v=opMLBx0um-w', 'opMLBx0um-w', 11989, 'published'),
(2, 'AIC CHANG\'OMBE -JINSI ZILIVYO', 'https://www.youtube.com/watch?v=4ULE-H153PU&list=PLBHpiVAJySFeLMKGvSyY0GdzZ__lD-pzd', '4ULE-H153PU', 8661, 'published'),
(3, 'AIC CHANG\'OMBE VIJANA CHOIR Mikate', 'https://www.youtube.com/watch?v=TMc_igl4e1Y', 'TMc_igl4e1Y', 19251, 'published'),
(4, 'AICT MKULA HOSPITAL', 'https://youtu.be/vUd5MTFjD4M', 'vUd5MTFjD4M', 7179, 'published'),
(5, 'BABA ASKOFU MKUU SILAS KEZAKUBI AKIELEZEA KUHUSU MPANGO WA NTC', 'https://youtu.be/JkUxEu9Oahk', 'JkUxEu9Oahk', 2401, 'published'),
(6, 'MKUU WA CHUO CHA NTC AKIELEZEA KUHUSU MAMBO MBALIMBALI YA CHUO', 'https://youtu.be/V7KBTXXAwxE', 'V7KBTXXAwxE', 1057, 'published'),
(7, '(INTRO) MCH TIMOTH MPANILEHI AKITOA NENO', 'https://youtu.be/HgNVMw_BUVU', 'HgNVMw_BUVU', 1868, 'published'),
(8, 'BABA ASKOFU SALALA AKITOA UJUMBE KWA KANISA', 'https://youtu.be/mPgw22-RwEo', 'mPgw22-RwEo', 2237, 'published'),
(9, 'BABA ASKOFU KITULA AKITOA UJUMBE KWA KANISA.', 'https://youtu.be/NDz1K5cHg2o', 'NDz1K5cHg2o', 2173, 'published'),
(10, 'BABA ASKOFU KEZAKUBI AKITOA HISTORIA YAKE NA UJUMBE KWA KANISA.', 'https://youtu.be/nviFj0UIaQc', 'nviFj0UIaQc', 2509, 'published'),
(11, 'PART ONE kanisa lisimamie mafundisho sahihi', 'https://youtu.be/IRBs8zUjcYs', 'IRBs8zUjcYs', 764, 'published'),
(12, 'PART TWO tubadilike ili tuendelee', 'https://youtu.be/fsH2A4XwamA', 'fsH2A4XwamA', 699, 'published'),
(13, 'IBADA YA KUMUAPISHA NA KUMTIA WAKIFU ASKOFU PHILIPO MAFUJA.', 'https://www.youtube.com/watch?v=0yz1Y5-raIg&feature=youtu.be', '0yz1Y5-raIg', 1752, 'published'),
(14, 'WASIFU WA ASKOFU PHILIPO MAFUJA', 'https://www.youtube.com/watch?v=twwFZl-FZE8&feature=youtu.be', 'twwFZl-FZE8', 1994, 'published'),
(15, 'ASKOFU PHILIPO MAFUJA AKILA KIAPO', 'https://www.youtube.com/watch?v=umx6NxRpBOM', 'umx6NxRpBOM', 1835, 'published'),
(16, 'PART ONE - IBADA YA UKUMBUSHO WA KUZALIWA KWA YESU KRISTO', 'https://www.youtube.com/watch?v=4iNCU9NfRQI&feature=youtu.be', '4iNCU9NfRQI', 2036, 'published'),
(17, 'PART TWO - IBADA YA UKUMBUSHO WA KUZALIWA KWA YESU KRISTO', 'https://www.youtube.com/watch?v=E83e16t9s8E&feature=youtu.be', 'E83e16t9s8E', 2158, 'published'),
(18, 'Wimbo Maalum wa Kanisa ukielezea Mpango Mkakati', 'https://www.facebook.com/103791804894598/videos/266810438209726', '', 109, 'published'),
(19, 'Wimbo Maalum wa Kanisa ukielezea Mpango Mkakati', 'https://www.youtube.com/watch?v=b8tLwJWzo_0', 'b8tLwJWzo_0', 259, 'published');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`album_id`);

--
-- Indexes for table `allgroups`
--
ALTER TABLE `allgroups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `allowedregion`
--
ALTER TABLE `allowedregion`
  ADD PRIMARY KEY (`allowedregion_id`);

--
-- Indexes for table `audios`
--
ALTER TABLE `audios`
  ADD PRIMARY KEY (`song_id`);

--
-- Indexes for table `bishopdioceses`
--
ALTER TABLE `bishopdioceses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bishopphotos`
--
ALTER TABLE `bishopphotos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `bishops`
--
ALTER TABLE `bishops`
  ADD PRIMARY KEY (`bishop_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`child_id`);

--
-- Indexes for table `churches`
--
ALTER TABLE `churches`
  ADD PRIMARY KEY (`church_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `covers`
--
ALTER TABLE `covers`
  ADD PRIMARY KEY (`cover_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `deptdetails`
--
ALTER TABLE `deptdetails`
  ADD PRIMARY KEY (`deptdetails_id`);

--
-- Indexes for table `deptleaders`
--
ALTER TABLE `deptleaders`
  ADD PRIMARY KEY (`deptleader_id`);

--
-- Indexes for table `deptposts`
--
ALTER TABLE `deptposts`
  ADD PRIMARY KEY (`deptpost_id`);

--
-- Indexes for table `diocesedetails`
--
ALTER TABLE `diocesedetails`
  ADD PRIMARY KEY (`diocesedetails_id`);

--
-- Indexes for table `dioceseposts`
--
ALTER TABLE `dioceseposts`
  ADD PRIMARY KEY (`diocesepost_id`);

--
-- Indexes for table `dioceses`
--
ALTER TABLE `dioceses`
  ADD PRIMARY KEY (`diocese_id`);

--
-- Indexes for table `diocesestaff`
--
ALTER TABLE `diocesestaff`
  ADD PRIMARY KEY (`diocesestaff_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `event_photos`
--
ALTER TABLE `event_photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`follower_id`);

--
-- Indexes for table `forumadmins`
--
ALTER TABLE `forumadmins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `forumcategories`
--
ALTER TABLE `forumcategories`
  ADD PRIMARY KEY (`forumcategory_id`);

--
-- Indexes for table `groupmembers`
--
ALTER TABLE `groupmembers`
  ADD PRIMARY KEY (`groupmember_id`);

--
-- Indexes for table `group_messages`
--
ALTER TABLE `group_messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `membergroupmessages`
--
ALTER TABLE `membergroupmessages`
  ADD PRIMARY KEY (`membergroupmessage_id`);

--
-- Indexes for table `messagefiles`
--
ALTER TABLE `messagefiles`
  ADD PRIMARY KEY (`messagefile_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `news_photos`
--
ALTER TABLE `news_photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `pastorates`
--
ALTER TABLE `pastorates`
  ADD PRIMARY KEY (`pastorate_id`);

--
-- Indexes for table `pastorphotos`
--
ALTER TABLE `pastorphotos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `pastors`
--
ALTER TABLE `pastors`
  ADD PRIMARY KEY (`pastor_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `secpositions`
--
ALTER TABLE `secpositions`
  ADD PRIMARY KEY (`secposition_id`);

--
-- Indexes for table `secretaries`
--
ALTER TABLE `secretaries`
  ADD PRIMARY KEY (`secretary_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `slider_photos`
--
ALTER TABLE `slider_photos`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `staffgroupmessages`
--
ALTER TABLE `staffgroupmessages`
  ADD PRIMARY KEY (`staffgroupmessage_id`);

--
-- Indexes for table `staffmessages`
--
ALTER TABLE `staffmessages`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `topiccomments`
--
ALTER TABLE `topiccomments`
  ADD PRIMARY KEY (`topiccomment_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `verses`
--
ALTER TABLE `verses`
  ADD PRIMARY KEY (`verse_id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `album_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `allgroups`
--
ALTER TABLE `allgroups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `allowedregion`
--
ALTER TABLE `allowedregion`
  MODIFY `allowedregion_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `audios`
--
ALTER TABLE `audios`
  MODIFY `song_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bishopdioceses`
--
ALTER TABLE `bishopdioceses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `bishopphotos`
--
ALTER TABLE `bishopphotos`
  MODIFY `photo_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bishops`
--
ALTER TABLE `bishops`
  MODIFY `bishop_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `children`
--
ALTER TABLE `children`
  MODIFY `child_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `churches`
--
ALTER TABLE `churches`
  MODIFY `church_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1261;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `covers`
--
ALTER TABLE `covers`
  MODIFY `cover_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `deptdetails`
--
ALTER TABLE `deptdetails`
  MODIFY `deptdetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `deptleaders`
--
ALTER TABLE `deptleaders`
  MODIFY `deptleader_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `deptposts`
--
ALTER TABLE `deptposts`
  MODIFY `deptpost_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `diocesedetails`
--
ALTER TABLE `diocesedetails`
  MODIFY `diocesedetails_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dioceseposts`
--
ALTER TABLE `dioceseposts`
  MODIFY `diocesepost_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dioceses`
--
ALTER TABLE `dioceses`
  MODIFY `diocese_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `diocesestaff`
--
ALTER TABLE `diocesestaff`
  MODIFY `diocesestaff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `event_photos`
--
ALTER TABLE `event_photos`
  MODIFY `photo_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `follower_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forumadmins`
--
ALTER TABLE `forumadmins`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forumcategories`
--
ALTER TABLE `forumcategories`
  MODIFY `forumcategory_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groupmembers`
--
ALTER TABLE `groupmembers`
  MODIFY `groupmember_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_messages`
--
ALTER TABLE `group_messages`
  MODIFY `message_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `membergroupmessages`
--
ALTER TABLE `membergroupmessages`
  MODIFY `membergroupmessage_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messagefiles`
--
ALTER TABLE `messagefiles`
  MODIFY `messagefile_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `article_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `news_photos`
--
ALTER TABLE `news_photos`
  MODIFY `photo_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `pastorates`
--
ALTER TABLE `pastorates`
  MODIFY `pastorate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=463;

--
-- AUTO_INCREMENT for table `pastorphotos`
--
ALTER TABLE `pastorphotos`
  MODIFY `photo_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `pastors`
--
ALTER TABLE `pastors`
  MODIFY `pastor_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=495;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registered_users`
--
ALTER TABLE `registered_users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `secpositions`
--
ALTER TABLE `secpositions`
  MODIFY `secposition_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `secretaries`
--
ALTER TABLE `secretaries`
  MODIFY `secretary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider_photos`
--
ALTER TABLE `slider_photos`
  MODIFY `slider_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `staffgroupmessages`
--
ALTER TABLE `staffgroupmessages`
  MODIFY `staffgroupmessage_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staffmessages`
--
ALTER TABLE `staffmessages`
  MODIFY `message_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topiccomments`
--
ALTER TABLE `topiccomments`
  MODIFY `topiccomment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `verses`
--
ALTER TABLE `verses`
  MODIFY `verse_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
