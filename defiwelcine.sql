-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 12 mai 2021 à 00:03
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `defiwelcine`
--

-- --------------------------------------------------------

--
-- Structure de la table `avis`
--

CREATE TABLE `avis` (
  `id` int(11) NOT NULL,
  `util` int(11) NOT NULL,
  `film` int(11) NOT NULL,
  `note` int(11) NOT NULL,
  `avis` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

CREATE TABLE `films` (
  `id` int(8) NOT NULL,
  `titre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date_sortie` date NOT NULL,
  `duree` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `realisateur` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `acteurs` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `genre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `synopsis` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `date_sortie`, `duree`, `realisateur`, `acteurs`, `genre`, `synopsis`, `image`) VALUES
(18, 'Le Vétéran', '2021-01-03', '1h48', 'Robert Lorenz', 'Liam Neeson', 'Action', '\r\nPoursuivis par les membres d’un cartel mexicain, une mère et son fils traversent la frontière qui sépare le Mexique de l’Arizona et se retrouvent sur les terres de Jim Hanson. Aigri, vieillissant, celui-ci dénonce traditionnellement les immigrés clandestins aux autorités. Mais quand la mère est tuée dans une fusillade, l’américain récalcitrant décide d’aider le jeune Miguel à fuir. Le vétéran de guerre veuf et désabusé et le garçon orphelin vont devoir traverser les Etats-Unis, poursuivis par des criminels et des policiers corrompus.\r\n', 'images/5942577.jpg-c_310_420_x-f_jpg-q_x-xxyxx (1).jpeg'),
(19, 'Les Tuches 4', '2021-12-08', '1h48', 'Olivier Baroux', 'Jean Paul Rouve', 'Comédie', 'Après avoir démissionné de son poste de président de la république, Jeff et sa famille sont heureux de retrouver leur village de Bouzolles. A l’approche des fêtes de fin d’année, Cathy demande un unique cadeau : renouer les liens avec sa sœur Maguy, et son mari Jean-Yves avec qui Jeff est fâché depuis 10 ans.\r\nLa réconciliation aurait pu se dérouler sans problème, sauf que lors d’un déjeuner, Jeff et Jean-Yves, vont une nouvelle fois trouver un sujet de discorde : NOËL. Cette querelle familiale qui n’aurait jamais dû sortir de Bouzolles va se transformer en bras de fer entre Jeff et un géant de la distribution sur Internet.', 'images/3527263.jpg-c_310_420_x-f_jpg-q_x-xxyxx (1).jpg'),
(20, 'Oxygène', '2021-05-12', '1h40', 'Alexandre Aja', 'Mélanie Laurent', 'Science', 'Une jeune femme se réveille seule dans une unité cryogénique. Elle ne sait plus qui elle est, ni comment elle a pu finir enfermée dans une capsule de la taille d\'un cercueil. Tandis qu\'elle commence à manquer d\'oxygène, elle va devoir recomposer les éléments de sa mémoire pour sortir de ce cauchemar.', 'images/1645809.jpg-c_310_420_x-f_jpg-q_x-xxyxx.jpeg'),
(21, 'SpaceJam- Nouvelle ère', '2021-06-14', '1h52', 'Malcom D Lee', 'Lebron James', 'Comédie', 'Alors que le basketteur LeBron James visite les studios Warner avec son fils Bronny , ils se retrouvent accidentellement piégés dans une dimension parallèle où tout l’univers Warner Bros est contrôlé par le tout puissant AI G, une intelligence artificielle. Avec l\'aide des Looney Tunes, la star de la NBA va tout tenter pour retrouver son fils disparu et battre l’équipe de Goons de l’IA, composé des meilleurs basketteurs du monde.', 'images/4815368.jpg-c_310_420_x-f_jpg-q_x-xxyxx.jpeg'),
(22, 'Spirale- L\'Héritage de Saw', '2021-05-19', '1h33', 'Daren Lyn Bousman', 'Samuel L Jackon', 'Fantastique', 'Travaillant dans l\'ombre de son père, une légende locale de la police, le lieutenant Ezekiel «Zeke» Banks et son nouveau partenaire enquêtent sur une série de meurtres macabres dont le mode opératoire rappelle étrangement celui d’un tueur en série qui sévissait jadis dans la ville. Pris au piège sans le savoir, Zeke se retrouve au centre d’un stratagème terrifiant dont le tueur tire les ficelles.', 'images/5831765.jpg-c_310_420_x-f_jpg-q_x-xxyxx.jpeg'),
(23, 'Raya et le dernier dragon', '2021-06-04', '1h47', 'Paul Briggs et Don hall', 'Emilie Rault', 'Aventure', 'Il y a de cela fort longtemps, au royaume imaginaire de Kumandra, humains et dragons vivaient en harmonie. Mais un jour, une force maléfique s’abattit sur le royaume et les dragons se sacrifièrent pour sauver l’humanité.\r\nLorsque cette force réapparait cinq siècles plus tard, Raya, une guerrière solitaire, se met en quête du légendaire dernier dragon pour restaurer l’harmonie sur la terre de Kumandra, au sein d’un peuple désormais divisé. Commence pour elle un long voyage au cours duquel elle découvrira qu’il lui faudra bien plus qu’un dragon pour sauver le monde, et que la confiance et l’entraide seront essentiels pour conduire au succès cette périlleuse mission.', 'images/5830085.jpg-c_310_420_x-f_jpg-q_x-xxyxx.jpeg'),
(24, 'Un Homme en colère', '2021-05-12', '1h47', 'Guy Ritchie', 'Jason Statham', 'Action', 'Un convoyeur de fond fraichement engagé surprend ses collègues par l’incroyable précision de ses tirs de riposte alors qu’ils subissent les assauts de braqueurs expérimentés.\r\nTous se demandent désormais qui il est, d’où il vient et pourquoi il est là.', 'images/0385531.jpg-c_310_420_x-f_jpg-q_x-xxyxx.jpeg'),
(25, 'Conjuring 3 sous l\'emprise du diable', '2021-06-02', '1h58', 'Michael Chavez', 'Patrice Wilson', 'Fantastique', ' sous l\'emprise du diable retrace une affaire terrifiante de meurtre et de présence maléfique mystérieuse qui a même ébranlé les enquêteurs paranormaux Ed et Lorraine Warren, pourtant très aguerris. Dans cette affaire issue de leurs dossiers secrets – l\'une des plus spectaculaires – , Ed et Lorrain commencent par se battre pour protéger l\'âme d\'un petit garçon, puis basculent dans un monde radicalement inconnu. Ce sera la première fois dans l\'histoire des États-Unis qu\'un homme soupçonné de meurtre plaide la possession démoniaque comme ligne de défense.', 'images/638278-conjuring-3-sous-l-emprise-du-diable-la-bande-annonce.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `genre` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `genre`) VALUES
(1, 'Action'),
(2, 'Aventure'),
(3, 'Comédie'),
(4, 'Documentaire'),
(5, 'Drame'),
(6, 'Fantastique'),
(7, 'Romance'),
(8, 'Science Fiction');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(150) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `pseudo`, `pass`) VALUES
(1, 'aaa', '$2y$10$iqVP7tpdLKtbOR5iaiVq1.WRnyxShQduZxOxVbag.NL3JZn083gGi'),
(2, 'ggg', '$2y$10$jffd7RNJglrAjh4trD3HautDAsXvpgtLme0y0PR0n.lZYdKAHkRlO');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `avis`
--
ALTER TABLE `avis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `util` (`util`),
  ADD KEY `film` (`film`);

--
-- Index pour la table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `avis`
--
ALTER TABLE `avis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `avis`
--
ALTER TABLE `avis`
  ADD CONSTRAINT `avis_ibfk_1` FOREIGN KEY (`film`) REFERENCES `films` (`id`),
  ADD CONSTRAINT `avis_ibfk_2` FOREIGN KEY (`util`) REFERENCES `utilisateur` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
