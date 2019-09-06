-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  ven. 06 sep. 2019 à 07:45
-- Version du serveur :  5.7.24-27
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `u0470792_baby_center`
--

-- --------------------------------------------------------

--
-- Structure de la table `adverts`
--

CREATE TABLE `adverts` (
  `id` int(11) NOT NULL,
  `categ_id` varchar(250) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descpt` text NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `adverts`
--

INSERT INTO `adverts` (`id`, `categ_id`, `title`, `descpt`, `cover`, `cover2`, `cover3`) VALUES
(23, '', 'Advert one', 'testing product', 'featured_3.png', '', ''),
(24, '', 'Advert two', 'testing product', 'featured_3.png', '', ''),
(25, '', 'Advert three', 'testing product', 'featured_3.png', '', ''),
(26, '', 'Advert four', 'testing product', 'featured_3.png', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `all_items`
--

CREATE TABLE `all_items` (
  `id` int(11) NOT NULL,
  `sub_categ_id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `new_price` varchar(250) NOT NULL,
  `discount` varchar(250) NOT NULL,
  `descpt` text NOT NULL,
  `color` varchar(250) NOT NULL,
  `size` varchar(250) NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `available` varchar(250) NOT NULL,
  `newz` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `name_of_promotion` varchar(250) NOT NULL,
  `new_price` varchar(10) NOT NULL,
  `old_price` varchar(11) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `banner`
--

INSERT INTO `banner` (`id`, `categ_id`, `title`, `name_of_promotion`, `new_price`, `old_price`, `cover`, `cover2`, `cover3`) VALUES
(26, 0, 'Bathing and Changing Promo', 'oaps ueuu', '90', '80', 'best_2.png', '', ''),
(27, 0, 'Baby 225', 'July Discount', '500', '350', 'best_6.png', '', ''),
(28, 0, 'Stroller', 'Joy Ride', '300000', '250000', 'banner_product.png', '', ''),
(29, 0, 'Product 1', 'oaps ueuu', '45000', '20', 'qa.png', 'qs.png', 'qd.png');

-- --------------------------------------------------------

--
-- Structure de la table `banner2`
--

CREATE TABLE `banner2` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `categ_id` int(10) NOT NULL,
  `descpt` text NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `banner2`
--

INSERT INTO `banner2` (`id`, `title`, `categ_id`, `descpt`, `cover`, `cover2`, `cover3`) VALUES
(32, 'Black Monday!', 7, 'you dont want to miss this!', 'ryan family scene01 web.png', '', ''),
(33, 'Ride like a Boss', 4, 'Number one selling stroller', 'donkey2-mono.png', '', ''),
(34, 'Black Monday!', 7, 'you dont want to miss this!', 'ryan family scene01 web.png', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `best_rated`
--

CREATE TABLE `best_rated` (
  `id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `new_price` varchar(10) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `best_rated`
--

INSERT INTO `best_rated` (`id`, `categ_id`, `title`, `color`, `new_price`, `cover`, `cover2`, `cover3`) VALUES
(21, 0, 'Product 1', 'pink', '40,000', '724x610_mini_standard.png', '', ''),
(22, 0, 'Product 1', 'pink', '40,000', '724x610_mini_standard.png', '', ''),
(23, 0, 'Product 1', 'pink', '40,000', '724x610_mini_standard.png', '', ''),
(24, 0, 'Product 1', 'pink', '40,000', '724x610_mini_standard.png', '', ''),
(25, 0, 'Product 7', 'yellow', '59,000', 'Cambridge1000-800x534.png', '', ''),
(26, 0, 'Product 7', 'yellow', '59,000', 'Cambridge1000-800x534.png', '', ''),
(27, 0, 'Product 1', 'pink', '40,000', '724x610_mini_standard.png', '', ''),
(28, 0, 'Product 7', 'yellow', '59,000', 'Cambridge1000-800x534.png', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `best_sellers`
--

CREATE TABLE `best_sellers` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `b_categ_id` int(11) NOT NULL,
  `categ_id` int(10) NOT NULL,
  `new_price` varchar(11) NOT NULL,
  `old_price` varchar(11) NOT NULL,
  `descpt` text NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `best_sellers`
--

INSERT INTO `best_sellers` (`id`, `title`, `b_categ_id`, `categ_id`, `new_price`, `old_price`, `descpt`, `cover`, `cover2`, `cover3`) VALUES
(77, 'Top 20 test product', 3, 5, '45000', '50000', 'this is a test product', 'featured_3.png', '', ''),
(78, 'Top 20 test product 2', 3, 5, '45000', '50000', 'this is a test product', 'featured_2.png', '', ''),
(79, 'Top 20 test product', 3, 5, '45000', '50000', 'this is a test product', 'featured_3.png', '', ''),
(80, 'Top 20 test product 2', 3, 5, '45000', '50000', 'this is a test product', 'featured_2.png', '', ''),
(81, 'Top 20 test product', 3, 5, '45000', '50000', 'this is a test product', 'featured_3.png', '', ''),
(82, 'Top 20 test product 2', 3, 5, '45000', '50000', 'this is a test product', 'featured_2.png', '', ''),
(83, 'Top 20 test product', 3, 5, '45000', '50000', 'this is a test product', 'featured_3.png', '', ''),
(84, 'Top 20 test product 2', 3, 5, '45000', '50000', 'this is a test product', 'featured_2.png', '', ''),
(85, 'Top 20 test product', 3, 5, '45000', '50000', 'this is a test product', 'featured_3.png', '', ''),
(86, 'Top 20 test product 2', 3, 5, '45000', '50000', 'this is a test product', 'featured_2.png', '', ''),
(87, 'Top 20 test product', 3, 5, '45000', '50000', 'this is a test product', 'featured_3.png', '', ''),
(88, 'Top 20 test product 2', 3, 5, '45000', '50000', 'this is a test product', 'featured_2.png', '', ''),
(89, 'Product 1', 1, 5, '60,000', '50,000', 'this is a test product', 'ryan family scene01 web.png', '', ''),
(90, 'Product 3', 1, 10, '34000', '50,000', 'another hit', 'Toys-Hub-Pre-School.png', '', ''),
(91, 'Product 1', 1, 5, '60,000', '50,000', 'this is a test product', 'ryan family scene01 web.png', '', ''),
(92, 'Product 3', 1, 10, '34000', '50,000', 'another hit', 'Toys-Hub-Pre-School.png', '', ''),
(93, 'Product 1', 1, 5, '60,000', '50,000', 'this is a test product', 'ryan family scene01 web.png', '', ''),
(94, 'Product 3', 1, 10, '34000', '50,000', 'another hit', 'Toys-Hub-Pre-School.png', '', ''),
(95, 'Product 1', 1, 5, '60,000', '50,000', 'this is a test product', 'ryan family scene01 web.png', '', ''),
(96, 'Product 3', 1, 10, '34000', '50,000', 'another hit', 'Toys-Hub-Pre-School.png', '', ''),
(97, 'Awesome gift', 2, 7, '30,000', '20,000', 'this is an awesome gift', 'Precious-Prince-Hamper.png', '', ''),
(98, 'Wowzer', 2, 7, '15000', '20,000', 'look out ladies', 'funny-baby-clothes.png', '', ''),
(99, 'something', 2, 7, '10,000', '20,000', 'this will blow your mind', '54037.png', '', ''),
(100, 'Awesome gift', 2, 7, '30,000', '20,000', 'this is an awesome gift', 'Precious-Prince-Hamper.png', '', ''),
(101, 'Wowzer', 2, 7, '15000', '20,000', 'look out ladies', 'funny-baby-clothes.png', '', ''),
(102, 'something', 2, 7, '10,000', '20,000', 'this will blow your mind', '54037.png', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `best_seller_categories`
--

CREATE TABLE `best_seller_categories` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descpt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `best_seller_categories`
--

INSERT INTO `best_seller_categories` (`id`, `title`, `descpt`) VALUES
(1, 'Toys', 'toys'),
(2, 'Gifts', 'gifts'),
(3, 'Top 20  ', 'Top 20  ');

-- --------------------------------------------------------

--
-- Structure de la table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descpt` text NOT NULL,
  `cover` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `brand`
--

INSERT INTO `brand` (`id`, `title`, `descpt`, `cover`) VALUES
(41, 'BABY GAP', 'BABY GAP', '696537923.png'),
(48, 'DISNEY', 'DISNEY', '1184604110.png'),
(49, 'CATER\'S', 'CATER\'S', '1185442050.png'),
(50, 'NEXT', 'NEXT', '1910213900.png'),
(51, 'OLD NAVY', ' OLD NAVY', '138642377.png'),
(52, 'CLARKS', ' CLARKS', '190628932.png'),
(53, 'SEEBABY', ' SEEBABY', '1800174564.png');

-- --------------------------------------------------------

--
-- Structure de la table `brandiuytre`
--

CREATE TABLE `brandiuytre` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descpt` text NOT NULL,
  `cover` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `brandiuytre`
--

INSERT INTO `brandiuytre` (`id`, `title`, `descpt`, `cover`) VALUES
(29, 'New arrivals', ' ', '64449236.png_300x300'),
(31, '', ' ', ''),
(38, 'Car seats and Carriers 76', ' Car seats and Carriers 76', '1082289213.jpg'),
(43, 'Car seats and Carriers 22', ' Car seats and Carriers 22', '2028882140.jpg'),
(45, 'ÐœÐµÐ¶Ð´ÑƒÐ½Ð°Ñ€Ð¾Ð´Ð½Ð°Ñ Ð´ÐµÑÑ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚ÑŒ', ' Car seats and Carriers 85', '2102007729.jpg'),
(46, 'Best Rated', ' Best Rated', '1987985636.jpg'),
(51, 'Ð¢ÐµÑÑ‚ 1: ÐœÐµÐ¶Ð´ÑƒÐ½Ð°Ñ€Ð¾Ð´Ð½Ð°Ñ Ð´ÐµÑÑ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚ÑŒ ', 'Ð¢ÐµÑÑ‚ 1: ÐœÐµÐ¶Ð´ÑƒÐ½Ð°Ñ€Ð¾Ð´Ð½Ð°Ñ Ð´ÐµÑÑ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚ÑŒ ', '1205481056.jpg'),
(55, 'Bet rated', ' Bet rated', '1369477338.jpg'),
(57, 'Here is new Product', ' Here is new Product', '1716314547.jpg'),
(58, '000000000', ' top 00000', '88640685.jpg'),
(60, 'Final Test', ' Final Test', '1404937295.jpg'),
(61, 'New Brand', ' New brand by Smurts', '317784716.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `dow`
--

CREATE TABLE `dow` (
  `id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descpt` text NOT NULL,
  `color` varchar(250) NOT NULL,
  `size` varchar(250) NOT NULL,
  `new_price` varchar(10) NOT NULL,
  `old_price` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `discount` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `dow`
--

INSERT INTO `dow` (`id`, `categ_id`, `title`, `descpt`, `color`, `size`, `new_price`, `old_price`, `quantity`, `available`, `discount`, `cover`, `cover2`, `cover3`) VALUES
(18, 1, 'Stroller', 'Best stroller on the market currently and we have it in stock for you', 'brown', 'large', '250,000', '300,000', 50, 20, '16%', 'banner_product.png', '', ''),
(20, 2, 'Product 1', 'deal of the week', 'red', '34cm', '20,000', '50,000', 90, 20, '60%', 'Toys-Hub-Pre-School.png', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `featured`
--

CREATE TABLE `featured` (
  `id` int(11) NOT NULL,
  `sub_categ_id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `new_price` varchar(10) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `featured`
--

INSERT INTO `featured` (`id`, `sub_categ_id`, `categ_id`, `title`, `color`, `new_price`, `cover`, `cover2`, `cover3`) VALUES
(23, 0, 0, 'Product 1', 'blue', '60,000', 'SCF565_62-1_x700.png', '', ''),
(24, 0, 0, 'Product 2', 'yellow', '70,000', '873dce73a749ad8bfdcfd4e7caf56958.png', '', ''),
(25, 0, 0, 'Product 1', 'blue', '60,000', 'SCF565_62-1_x700.png', '', ''),
(26, 0, 0, 'Product 2', 'yellow', '70,000', '873dce73a749ad8bfdcfd4e7caf56958.png', '', ''),
(27, 0, 0, 'Product 1', 'blue', '60,000', 'SCF565_62-1_x700.png', '', ''),
(28, 0, 0, 'Product 2', 'yellow', '70,000', '873dce73a749ad8bfdcfd4e7caf56958.png', '', ''),
(29, 0, 0, 'Product 1', 'blue', '60,000', 'SCF565_62-1_x700.png', '', ''),
(30, 0, 0, 'Product 2', 'yellow', '70,000', '873dce73a749ad8bfdcfd4e7caf56958.png', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `hot_deals`
--

CREATE TABLE `hot_deals` (
  `id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `new_price` varchar(10) NOT NULL,
  `old_price` varchar(11) NOT NULL,
  `discount` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `hot_deals`
--

INSERT INTO `hot_deals` (`id`, `categ_id`, `title`, `new_price`, `old_price`, `discount`, `cover`, `cover2`, `cover3`) VALUES
(31, 1, 'Product 1', '45,000', '50,000', '50%', '724x610_mini_standard.png', '', ''),
(32, 2, 'Product 7', '30,000', '60,000', '50%', 'weanmeister-easyrinse-baby-feeding-bibs-grey-blue-beatnik-bear-by-wean-meister-332.png', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

CREATE TABLE `items` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(63, 'Item 3', 'here is item 3', '2019-08-06 02:00:00', '2019-08-05 21:00:08'),
(64, 'Item 4', 'here is item 4', '2019-08-06 02:00:00', '2019-08-05 21:00:08');

-- --------------------------------------------------------

--
-- Structure de la table `members`
--

CREATE TABLE `members` (
  `memid` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `members`
--

INSERT INTO `members` (`memid`, `firstname`, `lastname`, `address`) VALUES
(1, 'Neovic', 'Devierte', 'Silay City'),
(2, 'Julyn', 'Divinagracia', 'E.B. Magalona'),
(3, 'Gemalyn', 'Cepe', 'Bohol'),
(4, 'Matet', 'Devierte', 'Silay City'),
(5, 'Tintin', 'Devierte', 'Silay City'),
(6, 'Bien', 'Devierte', 'Cebu City'),
(7, 'Cherry', 'Ambayec', 'Cebu City'),
(8, 'Jubilee', 'Limsiaco', 'Silay City'),
(9, 'Janna ', 'Atienza', 'Talisay City'),
(10, 'Desire', 'Osorio', 'Bacolod City'),
(11, 'Debbie', 'Osorio', 'Talisay City'),
(12, 'Nipoy ', 'Polondaya', 'Victorias City'),
(13, 'Johnedel', 'Balino', 'Cauyan, Negros'),
(14, 'Nereca', 'Tajonera', 'Cauayan, Negros'),
(15, 'Jerome', 'Robles', 'Cebu City');

-- --------------------------------------------------------

--
-- Structure de la table `on_sales`
--

CREATE TABLE `on_sales` (
  `id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `color` varchar(250) NOT NULL,
  `new_price` varchar(10) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `on_sales`
--

INSERT INTO `on_sales` (`id`, `categ_id`, `title`, `color`, `new_price`, `cover`, `cover2`, `cover3`) VALUES
(17, 0, 'Baby 2', 'pink', '40', 'DKA_6111.JPG', '', ''),
(18, 0, 'New arrivals 000', 'pink', '400', 'DKA_6048.JPG', '', ''),
(19, 0, 'New arrivals 22', 'pink', '23', 'DKA_6050.JPG', '', ''),
(20, 0, 'New arrivals 333', 'pink', '43', 'DKA_6021.JPG', '', ''),
(21, 0, 'Product 3', 'blue', '70,000', '0001.png', '', ''),
(22, 0, 'Product 2', 'black', '59,000', '009.png', '', ''),
(23, 0, 'Product 3', 'blue', '70,000', '0001.png', '', ''),
(24, 0, 'Product 2', 'black', '59,000', '009.png', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `pagination_table`
--

CREATE TABLE `pagination_table` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `age` int(10) NOT NULL,
  `dept` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `pagination_table`
--

INSERT INTO `pagination_table` (`id`, `name`, `age`, `dept`) VALUES
(1, 'Ahsan', 22, 'Information Technology'),
(2, 'Ali', 25, 'Human Resource'),
(3, 'Kashif', 30, 'Information Technology'),
(4, 'Iqbal', 31, 'Information Technology'),
(5, 'Farooq', 34, 'Finance'),
(6, 'Adnan', 29, 'Finance'),
(7, 'Javed', 25, 'Information Technology'),
(8, 'Irfan', 35, 'Production'),
(9, 'Kamran', 34, 'Production'),
(10, 'Danish', 27, 'Finance'),
(11, 'Naghman', 26, 'Administration'),
(12, 'Riaz', 37, 'Administration'),
(13, 'Imran', 36, 'Finance'),
(14, 'Wajahat', 28, 'Administration'),
(15, 'Arsalan', 31, 'Finance'),
(16, 'Sheraz', 34, 'Information Technology'),
(17, 'Faraz', 30, 'Marketing'),
(18, 'Ayaaz', 28, 'Marketing'),
(19, 'Abbas', 26, 'Finance'),
(20, 'Bilal', 33, 'Quality Assurance'),
(21, 'Jibran', 28, 'Quality Assurance'),
(22, 'Nasir', 36, 'Finance'),
(23, 'Mohsin', 29, 'Marketing'),
(24, 'Yaqoob', 35, 'Production'),
(25, 'Hammad', 30, 'Quality Assurance'),
(26, 'Imran', 30, 'Information Technology'),
(27, 'Kashif', 28, 'Finance'),
(28, 'Azhar', 27, 'Human Resource'),
(29, 'Misbah', 33, 'Marketing'),
(30, 'Tabish', 27, 'Quality Assurance'),
(31, 'Furqan', 35, 'Marketing'),
(32, 'Ilyas', 25, 'Finance'),
(33, 'Kamran', 24, 'Information Technology'),
(34, 'Babar', 29, 'Finance'),
(35, 'Adnan', 32, 'Marketing'),
(36, 'Wasif', 25, 'Finance');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `descpt` text NOT NULL,
  `color` varchar(250) NOT NULL,
  `size` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `discount` varchar(250) NOT NULL,
  `new` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `categ_id`, `title`, `price`, `descpt`, `color`, `size`, `quantity`, `available`, `discount`, `new`, `cover`, `cover2`, `cover3`) VALUES
(1, 1, 'soap', '500\r\n', 'we', 'red', '23*37', 50, 20, '20%', 'new', 'partydress01-3.jpg', 'partydress01-3.jpg', 'partydress01-3.jpg'),
(2, 4, 'BMW ', '670', 'hgigudsagu ', 'red', '23*37', 23, 20, '20%', 'yes', 'partydress01-3.jpg', 'partydress01-3.jpg', 'partydress01-3.jpg'),
(3, 4, 'New arrivals223', '344', 'g uuasui ', 'pink', '23*37', 50, 20, '20%', 'yes', 'partydress01-3.jpg', 'partydress01-3.jpg', 'partydress01-3.jpg'),
(5, 4, 'Product 1', '40,000', 'test', 'blue', '23*37', 33, 20, '20%', 'yes', 'partydress01-3.jpg', 'partydress01-3.jpg', 'partydress01-3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `products225`
--

CREATE TABLE `products225` (
  `productCode` varchar(15) NOT NULL,
  `productName` varchar(70) NOT NULL,
  `productLine` varchar(50) NOT NULL,
  `productScale` varchar(10) NOT NULL,
  `productVendor` varchar(50) NOT NULL,
  `productDescription` text NOT NULL,
  `quantityInStock` smallint(6) NOT NULL,
  `buyPrice` double NOT NULL,
  `MSRP` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products225`
--

INSERT INTO `products225` (`productCode`, `productName`, `productLine`, `productScale`, `productVendor`, `productDescription`, `quantityInStock`, `buyPrice`, `MSRP`) VALUES
('S10_1678', '1969 Harley Davidson Ultimate Chopper', 'Motorcycles', '1:10', 'Min Lin Diecast', 'This replica features working kickstand, front suspension, gear-shift lever, footbrake lever, drive chain, wheels and steering. All parts are particularly delicate due to their precise scale and require special care and attention.', 7933, 48.81, 95.7),
('S10_1949', '1952 Alpine Renault 1300', 'Classic Cars', '1:10', 'Classic Metal Creations', 'Turnable front wheels; steering function; detailed interior; detailed engine; opening hood; opening trunk; opening doors; and detailed chassis.', 7305, 98.58, 214.3);

-- --------------------------------------------------------

--
-- Structure de la table `productss`
--

CREATE TABLE `productss` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `descpt` varchar(250) NOT NULL,
  `picture` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `productss`
--

INSERT INTO `productss` (`id`, `name`, `descpt`, `picture`) VALUES
(18, 'Joseph', 'Harman', '1.jpg'),
(19, 'John', 'Moss', '4.jpg'),
(20, 'Lillie', 'Ferrarium', '3.jpg'),
(21, 'Yolanda', 'Green', '5.jpg'),
(22, 'Cara', 'Gariepy', '7.jpg'),
(23, 'Christine', 'Johnson', '11.jpg'),
(24, 'Alana', 'Decruze', '12.jpg'),
(25, 'Krista', 'Correa', '13.jpg'),
(26, 'Charles', 'Martin', '14.jpg'),
(69, 'Frank', 'Lemons', '22610.jpg'),
(66, 'Margaret', 'Ault', '14365.jpg'),
(71, 'Christina', 'Wilke', '9248.jpg'),
(68, 'Roy22', 'Newton', ''),
(77, 'test 223657', '223 test', '848355854.07');

-- --------------------------------------------------------

--
-- Structure de la table `productsss`
--

CREATE TABLE `productsss` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `descpt` varchar(250) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `productsss`
--

INSERT INTO `productsss` (`id`, `name`, `descpt`, `picture`, `price`) VALUES
(18, 'Joseph', 'Harman', '1.jpg', '225'),
(19, 'John', 'Moss', '4.jpg', '345'),
(20, 'Lillie', 'Ferrarium', '3.jpg', '343'),
(21, 'Yolanda', 'Green', '5.jpg', '564'),
(22, 'Cara', 'Gariepy', '7.jpg', '345'),
(23, 'Preacher 225', 'Johnson', '1986444297.png', '234'),
(78, 'ÑÑ‚Ñ€Ð¾Ð¸Ð¼Ñ…Ñ€Ð°Ð¼ÐºÐ°Ð·Ð°Ð½ÑŒ.Ñ€Ñ„', 'Kids products', '130458238.jpg', '123');

-- --------------------------------------------------------

--
-- Structure de la table `productz`
--

CREATE TABLE `productz` (
  `id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `descpt` text NOT NULL,
  `color` varchar(250) NOT NULL,
  `size` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `discount` varchar(250) NOT NULL,
  `new` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `productz`
--

INSERT INTO `productz` (`id`, `categ_id`, `title`, `price`, `descpt`, `color`, `size`, `quantity`, `available`, `discount`, `new`, `cover`, `cover2`, `cover3`) VALUES
(1, 1, 'soap', '500\r\n', 'we', 'red', '23*37', 50, 20, '20%', 'new', '9248.jpg', '9248.jpg', '9248.jpg'),
(2, 4, 'BMW ', '670', 'hgigudsagu ', 'red', '23*37', 23, 20, '20%', 'yes', '7.jpg', '9248.jpg', '4.jpg'),
(3, 4, 'New arrivals223', '344', 'g uuasui ', 'pink', '23*37', 50, 20, '20%', 'yes', '5.jpg', '9248.jpg', '7.jpg'),
(5, 4, 'Product 1', '40,000', 'test', 'blue', '23*37', 33, 20, '20%', 'yes', '4.jpg', '5.jpg', '7.jpg'),
(6, 5, 'OGA ÐœÐµÐ¶Ð´ÑƒÐ½Ð°Ñ€Ð¾Ð´Ð½Ð°Ñ Ð´ÐµÑÑ‚ÐµÐ»ÑŒÐ½Ð¾ÑÑ‚ÑŒ ', '40,000343434', 'Kids products rrt', '#bdf28c', 'dggd', 12, 13, 'dxgfg', 'Yes', '1865528051.jpg', '9248.jpg', '596999279.jpg'),
(7, 4, 'Lorem ipsum 2123', '', ' xds', '#ff0000', '', 0, 0, '', '', '222141097.jpg', '2027689767.png', '577933087.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `descpt` text NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reviews`
--

INSERT INTO `reviews` (`id`, `categ_id`, `title`, `descpt`, `cover`, `cover2`, `cover3`, `date`) VALUES
(22, 0, 'Feeding', 'hsdhhdshhsdfv', 'adv_3.png', '', '', '07.20.19'),
(23, 0, 'Dancing\r\n', 'hsdhhdshhsdfv', 'adv_3.png', '', '', '07.20.19'),
(24, 0, 'Runing\r\n', 'hsdhhdshhsdfv', 'adv_3.png', '', '', '07.20.19'),
(25, 0, 'Dodorick', 'this is Donalds head', 'headache.png', '', '', '07.22.19');

-- --------------------------------------------------------

--
-- Structure de la table `super_deals`
--

CREATE TABLE `super_deals` (
  `id` int(11) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `descpt` text NOT NULL,
  `color` varchar(250) NOT NULL,
  `size` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `available` int(11) NOT NULL,
  `discount` varchar(250) NOT NULL,
  `new` varchar(250) NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `super_deals`
--

INSERT INTO `super_deals` (`id`, `categ_id`, `title`, `price`, `descpt`, `color`, `size`, `quantity`, `available`, `discount`, `new`, `cover`, `cover2`, `cover3`) VALUES
(1, 1, 'soap', '500\r\n', 'we', 'red', '23*37', 50, 20, '20%', 'new', 'IMG_0021.JPG', '', ''),
(2, 4, 'BMW ', '670', 'hgigudsagu ', 'red', '23*37', 23, 20, '20%', 'yes', 'PNG image-CA1B1C81A454-1.png', '', ''),
(3, 4, 'New arrivals223', '344', 'g uuasui ', 'pink', '23*37', 50, 20, '20%', 'yes', 'JPEG image-1551A592D44B-1.jpeg', '', ''),
(4, 6, 'Feeding', '34', 'hagguidsau', 'pink', '23*37', 50, 20, '20%', 'yes', 'avatar-1577909_960_720.png', '', ''),
(5, 4, 'Product 1', '40,000', 'test', 'blue', '23*37', 33, 20, '20%', 'yes', 'donkey2-mono.png', '', ''),
(6, 5, 'Product 1', '40,000', 'bbxzbzbxzc cxxv', 'pink', '23*37', 23, 20, '16%', 'yes', '296374_221179381264759_1937890_n.jpg', '201554602015-05-204889713BabyBee-01.jpg', '201554602015-05-204889713BabyBee-01.jpg'),
(7, 5, 'Super deal 1', '40,000', 'jks', 'yellow', '23*3', 70, 20, '16%', 'yes', '098.png', 'wee.png', '023.png'),
(8, 4, 'Product 1', '34', 'ktddt', 'brown', '23*3', 23, 22, '60%', 'yes', 'ed.png', 'qw.png', 'poe.png');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_images`
--

CREATE TABLE `tbl_images` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbl_images`
--

INSERT INTO `tbl_images` (`id`, `name`) VALUES
(1, ''),
(2, '');

-- --------------------------------------------------------

--
-- Structure de la table `trends`
--

CREATE TABLE `trends` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `categ_id` int(11) NOT NULL,
  `price` varchar(11) NOT NULL,
  `descpt` text NOT NULL,
  `cover` varchar(250) NOT NULL,
  `cover2` varchar(250) NOT NULL,
  `cover3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `trends`
--

INSERT INTO `trends` (`id`, `title`, `categ_id`, `price`, `descpt`, `cover`, `cover2`, `cover3`) VALUES
(24, 'This just Arrived', 7, '40', 'You wil lvoe this', 'Precious-Prince-Hamper.png', '', ''),
(25, 'Ladies ive arrived', 5, '12', 'shoudl we say more?', 'funny-baby-clothes.png', '', ''),
(26, 'This just Arrived', 7, '40', 'You wil lvoe this', 'Precious-Prince-Hamper.png', '', ''),
(27, 'Ladies ive arrived', 5, '12', 'shoudl we say more?', 'funny-baby-clothes.png', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adverts`
--
ALTER TABLE `adverts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `all_items`
--
ALTER TABLE `all_items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `banner2`
--
ALTER TABLE `banner2`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `best_rated`
--
ALTER TABLE `best_rated`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `best_sellers`
--
ALTER TABLE `best_sellers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `best_seller_categories`
--
ALTER TABLE `best_seller_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `brandiuytre`
--
ALTER TABLE `brandiuytre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `dow`
--
ALTER TABLE `dow`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `hot_deals`
--
ALTER TABLE `hot_deals`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`memid`);

--
-- Index pour la table `on_sales`
--
ALTER TABLE `on_sales`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pagination_table`
--
ALTER TABLE `pagination_table`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `productss`
--
ALTER TABLE `productss`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `productsss`
--
ALTER TABLE `productsss`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `productz`
--
ALTER TABLE `productz`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `super_deals`
--
ALTER TABLE `super_deals`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tbl_images`
--
ALTER TABLE `tbl_images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `trends`
--
ALTER TABLE `trends`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adverts`
--
ALTER TABLE `adverts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `all_items`
--
ALTER TABLE `all_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `banner2`
--
ALTER TABLE `banner2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `best_rated`
--
ALTER TABLE `best_rated`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `best_sellers`
--
ALTER TABLE `best_sellers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT pour la table `best_seller_categories`
--
ALTER TABLE `best_seller_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT pour la table `brandiuytre`
--
ALTER TABLE `brandiuytre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `dow`
--
ALTER TABLE `dow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `featured`
--
ALTER TABLE `featured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `hot_deals`
--
ALTER TABLE `hot_deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `members`
--
ALTER TABLE `members`
  MODIFY `memid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `on_sales`
--
ALTER TABLE `on_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `pagination_table`
--
ALTER TABLE `pagination_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `productss`
--
ALTER TABLE `productss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pour la table `productsss`
--
ALTER TABLE `productsss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT pour la table `productz`
--
ALTER TABLE `productz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `super_deals`
--
ALTER TABLE `super_deals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `tbl_images`
--
ALTER TABLE `tbl_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `trends`
--
ALTER TABLE `trends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
