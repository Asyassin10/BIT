-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 12 juin 2023 à 17:45
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bti_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `article_text` text NOT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `article_slug` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`article_id`, `article_text`, `categorie_id`, `created_at`, `updated_at`, `article_slug`) VALUES
(19, 'Qui sommes-nous ?ddd', 9, '2023-04-10 08:45:08', '2023-04-12 10:31:21', 'Qui sommes-nous ?ddd'),
(20, 'Technologie &Innovation', 9, '2023-04-10 08:45:08', '2023-04-10 08:45:08', 'Technologie &Innovation'),
(21, 'Digital Factory', 9, '2023-04-10 08:45:08', '2023-04-10 08:45:08', 'Digital Factory'),
(22, 'IoT & Robotics', 9, '2023-04-10 08:45:08', '2023-04-10 08:45:08', 'IoT & Robotics'),
(23, 'Data Intelligence', 9, '2023-04-10 08:45:08', '2023-04-10 08:45:08', 'Data Intelligence'),
(24, 'Innover, accélérer et industrialiser', 9, '2023-04-10 08:46:32', '2023-04-10 08:46:32', 'Innover, accélérer et'),
(25, 'Que vous soyez dans une démarche de construction d’un nouveau produit à destination de vos utilisateurs où de transformation de son système d’information en mettant en place des solutions de modernisation.', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Que vous soyez'),
(26, 'Digital Factory', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Digital Factory'),
(27, 'Avec la Digital Factory, nous répondons à un besoin très précis : accélérer la mise sur le marché des produits en nous concentrant sur les fonctionnalités qui apportent le plus de valeur.', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Avec la Digital'),
(28, 'Les prestations associées au service Agile at Scale', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Les prestations associées'),
(29, 'Construction de votre produit, chez vous ou chez nous, sur un temps limité et un budget maitrisé grâce à une approche basée sur les méthodes éprouvées (Lean, Agile, DevOps)', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Construction de votre'),
(30, 'L’apport d’expertise technique ponctuelle pour accélérer la réalisation et le déploiement de vos produits IT', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'L’apport d’expertise technique'),
(31, 'Mise à disposition de capacités de veille et d’innovation pour votre organisation', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Mise à disposition'),
(32, 'Nous avons une approche agile, lean et moderne couplée à des outils adéquats pour monter rapidement en maturité sur vos produits et vous aider à accélérer la mise en place sur le marché.', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Nous avons une'),
(33, 'Dans un contexte de révolution numérique, le design UX est devenu un composant central dans la réussite de la mise en œuvre d’un produit informatique auprès d’un public d’utilisateurs métiers. Hier, l’utilisateur s’adaptait aux applications qui lui étaient fournies. Aujourd’hui, ce sont les applications qui doivent être adaptées aux utilisateurs, centrées sur leurs besoins réels et leurs parcours.', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Dans un contexte'),
(34, 'IoT & Robotics', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'IoT & Robotics'),
(35, 'Ainsi, l’intégration de la technologie et de l’innovation dans l’ensemble des activités de l’entreprise passe dorénavant par l’amélioration de l’expérience utilisateur à intégrer dès le début de la conception des produits.', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Ainsi, l’intégration de'),
(36, 'Les prestations associées au service IoT & Robotics', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Les prestations associées'),
(37, 'Conception des produits du point de vue des clients : Design Thinking, User safari, Personas…', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Conception des produits'),
(38, 'Amélioration de l’ergonomie des produits : test utilisateur, eye-tracking…', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Amélioration de l’ergonomie'),
(39, 'Optimisation du comportement utilisateurs : tag management systems, web analytics…', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Optimisation du comportement'),
(40, 'Nous vous accompagnons dans ces projets de transformation basés sur la technologie et l’innovation pour vous aider à intégrer les éléments de compréhension des comportements de vos utilisateurs dans le cycle de vie de votre entreprise et à faire évoluer l’expérience fournie.', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Nous vous accompagnons'),
(41, 'L’analytics est là pour vous. En raison de la masse de données présentes dans les entreprises et des enjeux business associés, on remarque une montée en puissance des projets BI, Big data et data labs dans les directions informatiques.', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'L’analytics est là'),
(42, 'Data Intelligence', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Data Intelligence'),
(43, 'Notre marque de fabrique est de construire pour vous un flux régulier d’informations qui alimente vos technologies intelligentes pour fournir une vue à 360° de votre écosystème et permettre d’anticiper les virages à venir.', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Notre marque de'),
(44, 'Les prestations associées au service Data Intelligence', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Les prestations associées'),
(45, 'Construire votre chaîne d’acquisition de données performante et adaptée aux différents usages (Spark, Kafka, MapReduce…)', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Construire votre chaîne'),
(46, 'Construire votre système de stockage des données (HDFS, MongoDB, Hbase, Storm) avec la couche de supervision et de sécurité adéquate', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Construire votre système'),
(47, 'Construire vos banques de données avec la mise en place des agrégations et des enrichissements nécessaires', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Construire vos banques'),
(48, 'Mettre en place votre outil de restitution des données grâce à des solutions de Dataviz (Power BI, Tableau, Qlik) ou des couches de services (ElasticSearch, API…)', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Mettre en place'),
(49, 'Nous avons développé au cours de ces dernières années un savoir-faire très précieux en nous appuyant sur un socle d’activités techniques que nos consultants maîtrisent et sauront mettre à disposition de vos spécificités métiers et organisationnelles.', 9, '2023-04-10 09:24:00', '2023-04-10 09:24:00', 'Nous avons développé'),
(50, 'Service', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Service'),
(51, 'Transformation UX', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Transformation UX'),
(52, 'Stratégie Omnicanale', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Stratégie Omnicanale'),
(53, 'UX Design', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'UX Design'),
(54, 'Changement Management', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Changement Management'),
(55, 'Innover, accélérer et industrialiser', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Innover, accélérer et'),
(56, 'La digitalisation de la société a poussé les entreprises vers le chemin de l’innovation, développant de nouveaux outils pour toucher le consommateur via différents canaux supplémentaires. Depuis, le consommateur a bien évolué et recherche de la cohérence et de la qualité, quel que soit le canal utilisé : Un omni-consommateur est né !', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'La digitalisation de'),
(57, 'Stratégie Omnicanale', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Stratégie Omnicanale'),
(58, 'Avec ces évolutions de pratiques la stratégie omnicanale, qui s’est très rapidement imposée, permet de répondre aux attentes en utilisant les forces du digital et celles des points de vente physiques.', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Avec ces évolutions'),
(59, 'Les prestations associées au service Stratégie Omnicanale', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Les prestations associées'),
(60, 'Diagnostic de maturité', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Diagnostic de maturité'),
(61, 'Coaching et accompagnement sur la montée en maturité des équipes', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Coaching et accompagnement'),
(62, 'Définition des scénarios de parcours clients omnicanaux', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Définition des scénarios'),
(63, 'Nous avons les outils nécessaires pour évaluer rapidement la maturité de votre organisation en termes de stratégie d’architecture et de pratiques pour vous aider à évoluer vers celle qui vous convient le mieux.', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Nous avons les'),
(64, 'Dans un contexte de révolution numérique, la transformation UX est devenue un composant central dans la réussite de la mise en œuvre d’un produit informatique auprès d’un public d’utilisateurs métiers.', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Dans un contexte'),
(65, 'UX Design', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'UX Design'),
(66, 'Ainsi, l’intégration des technologies digitales dans l’ensemble des activités de l’entreprise passe dorénavant par l’amélioration de l’expérience utilisateur à intégrer dès le début de la conception des produits.', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Ainsi, l’intégration des'),
(67, 'Les prestations associées au service UX Design', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Les prestations associées'),
(68, 'Conception des produits du point de vue des clients : Design Thinking, User safari, Personas…', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Conception des produits'),
(69, 'Amélioration de l’ergonomie des produits : test utilisateur, eye-tracking…', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Amélioration de l’ergonomie'),
(70, 'Optimisation du comportement utilisateurs : tag management systems, web analytics…', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Optimisation du comportement'),
(71, 'Nous vous accompagnons dans ces projets de transformation pour vous aider à intégrer les éléments de compréhension des comportements de vos utilisateurs dans le cycle de vie de votre entreprise et à faire évoluer l’expérience fournie.', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Nous vous accompagnons'),
(72, 'À l’heure du numérique, notre approche de conduite et d’accompagnement au changement tire les fruits de l’intelligence collective au travers des leviers technologiques. Notre ambition est de centrer l’accompagnement autour de l’humain grâce à une méthodologie éprouvée et adaptable au contexte client.', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'À l’heure du'),
(73, 'Changement Management', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Changement Management'),
(74, 'Notre valeur réside dans l’acculturation des collaborateurs au réflexe “Change” sur tous nos projets et côté client, dans la valorisation de la mesure de la performance des transformations, sujet au cœur des problématiques de transformation.', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Notre valeur réside'),
(75, 'Les prestations associées au service Change Management', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Les prestations associées'),
(76, 'Stratégie de conduite du changement', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Stratégie de conduite'),
(77, 'Mise en œuvre opérationnelle de la stratégie de conduite du changement', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Mise en œuvre'),
(78, 'Suivi et le pilotage du plan d’accompagnement au changement', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Suivi et le'),
(79, 'Création de cellules de conduite du changement transverses', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Création de cellules'),
(80, 'Cette démarche nous permet de nous adapter rapidement et de personnaliser la conduite du changement dans le cadre d’une transformation digitale, à l’échelle de l’entreprise, d’une région ou du pays.', 10, '2023-04-10 09:30:33', '2023-04-10 09:30:33', 'Cette démarche nous'),
(81, 'Service', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Service'),
(82, 'Multi-Speed IT', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Multi-Speed IT'),
(83, 'Agile at Scale', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Agile at Scale'),
(84, 'Lean IT et Green IT', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Lean IT et'),
(85, 'Culture et plateforme DevOps', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Culture et plateforme'),
(86, 'La transformation digitale impose la mise en œuvre d’un modèle opérationnel à plusieurs vitesses, le multi-speed IT plus précisément, pour permettre la cohabitation entre les différentes équipes.', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'La transformation digitale'),
(87, 'Agile at Scale', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Agile at Scale'),
(88, 'L’Agile at Scale apporte une réponse en aidant les organisations à décentraliser les décisions au sein des équipes, gérer les interdépendances et installer une approche orientée valeur à l’échelle. La majorité des entreprises ont déjà expérimenté les méthodes Agiles, avec des résultats positifs, mais peu sont passées à la mise à l’échelle du modèle.', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'L’Agile at Scale'),
(89, 'Les prestations associées au service Agile at Scale', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Les prestations associées'),
(90, 'Diagnostic de maturité', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Diagnostic de maturité'),
(91, 'Définition de la stratégie, business case et feuille de route', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Définition de la'),
(92, 'Définition du modèle opérationnel Agile at Scale', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Définition du modèle'),
(93, 'Accompagnement et coaching des équipes', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Accompagnement et coaching'),
(94, 'Coaching sur l’approche produit', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Coaching sur l’approche'),
(95, 'La généralisation de l’Agile at Scale du modèle multi-speed IT requiert un changement complet de modèle opérationnel et notre approche, basée sur les meilleures pratiques du marché, permet de répondre à ces enjeux tout en prenant en compte la diversité des contextes.', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'La généralisation de'),
(96, 'Les DSI sont confrontées à des exigences toujours plus pressantes en ce qui concerne la maîtrise de leurs activités. L’amélioration de la qualité et de la rapidité de ses processus de projet et maintenance, tout en maintenant la satisfaction métier au plus haut niveau, sont les principaux enjeux de la DSI d’aujourd’hui pour mieux accompagner la transformation de demain.', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Les DSI sont'),
(97, 'Lean IT et Green IT', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Lean IT et'),
(98, 'Notre méthodologie se base sur un modèle Lean regroupant les normes et les standards d’excellence pour améliorer la performance globale de la DSI.', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Notre méthodologie se'),
(99, 'Les prestations associées au service Lean IT et Green IT', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Les prestations associées'),
(100, 'Diagnostic bottom-up des processus et des pratiques', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Diagnostic bottom-up des'),
(101, 'Management visuel & Kanban, Daily stand-up meeting, matrice des compétences', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Management visuel &'),
(102, 'Construction du Business Case avec les pistes d’optimisations', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Construction du Business'),
(103, 'Mise en œuvre Lean Portfolio Management', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Mise en œuvre'),
(104, 'Implémentation des pistes d’optimisations', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Implémentation des pistes'),
(105, 'Pour mesurer l’efficacité des actions d’optimisation, nous proposons la mise en place d’un système de mesure basé sur le modèle d’un Balanced Scorecard pour :', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Pour mesurer l’efficacité'),
(106, 'Mesurer la valeur ajoutée de l’IT pour le métier ;', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Mesurer la valeur'),
(107, 'Mesurer l’efficacité de la mise en place d’un nouveau produit et de la maintenance d’un produit existant.', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Mesurer l’efficacité de'),
(108, 'Le DevOps, indispensable avec la digitalisation des métiers de l’entreprise, est le résultat de 5 leviers clés : l’agilité, l’intégration continue, la flexibilité de l’infrastructure, la digitalisation des processus et la modernisation des applications.', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Le DevOps, indispensable'),
(109, 'Culture et plateforme DevOps', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Culture et plateforme'),
(110, 'Notre approche de transformation DevOps repose sur un parcours sur-mesure en fonction de la maturité des différentes activités (études, opérations, tests…) et de l’organisation de l’entreprise.', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Notre approche de'),
(111, 'Les prestations associées au service Culture et plateforme DevOps', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Les prestations associées'),
(112, 'Diagnostic de maturité', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Diagnostic de maturité'),
(113, 'Définition de la stratégie, business case et feuille de route', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Définition de la'),
(114, 'Définition du modèle opérationnel DevOps', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Définition du modèle'),
(115, 'Mise en place de l’intégration et du déploiement continue', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Mise en place'),
(116, 'Accompagnement au changement', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Accompagnement au changement'),
(117, 'Nous vous accompagnons pour vous aider dans la transformation organisationnelle, culturelle et technologique de votre entreprise, grâce aux services multi-speed IT. De la phase de diagnostic jusqu’à la généralisation, nos accélérateurs permettent une mise en œuvre rapide et sécurisée.', 8, '2023-04-10 09:48:21', '2023-04-10 09:48:21', 'Nous vous accompagnons'),
(118, '<p>Nos services</p>', 14, '2023-04-10 10:29:28', '2023-05-25 06:03:00', 'Nos services'),
(119, 'Nous nous engageons dans une démarche de transformation et d’innovation technologique au service du bien commun. ', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Nous nous engageons'),
(120, 'De l’émergence à la réalisation d’une idée, nos offres de services IT permettent de couvrir l’ensemble des activités pour vous accompagner.', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'De l’émergence à'),
(121, 'Grâce à une combinaison de compétences métiers et technologiques complémentaires, BTI – Advisory est en mesure de formuler la stratégie à adopter, de valider la faisabilité des idées nouvelles, de décliner et de mettre en œuvre opérationnellement les directions stratégiques et d’accompagner sur l’ensemble de la chaîne de valeur la montée en maturité opérationnelle des équipes.', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Grâce à une'),
(122, 'Transformation des Produits IT', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Transformation des Produits'),
(123, 'Journey To Cloud', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Journey To Cloud'),
(124, 'Digital Workplace', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Digital Workplace'),
(125, 'Architecture digitale', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Architecture digitale'),
(126, 'Nous accompagnons les DSI à maximiser la création de valeur et à se positionner comme partenaires du métier grâce à la transformation des produits IT.', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Nous accompagnons les'),
(127, 'Multi-Speed IT', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Multi-Speed IT'),
(128, 'Agile at Scale', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Agile at Scale'),
(129, 'Lean IT et Green IT', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Lean IT et'),
(130, 'Culture et plateforme DevOps', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Culture et plateforme'),
(131, 'Nous accompagnons les DSI à ancrer une culture durable et à mettre en place des pratiques permettant d’adapter des cycles de réalisation aux enjeux de l’entreprise afin de rester compétitif et innovant.', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Nous accompagnons les'),
(132, 'Technologie & Innovation', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Technologie & Innovation'),
(133, 'Digital Factory', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Digital Factory'),
(134, 'IoT & Robotics', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'IoT & Robotics'),
(135, 'Data Intelligence', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Data Intelligence'),
(136, 'Tout notre savoir-faire technologique au service de l’innovation de nos clients.', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Tout notre savoir-faire'),
(137, 'Transformation UX', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Transformation UX'),
(138, 'Stratégie Omnicanale', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Stratégie Omnicanale'),
(139, 'UX Design', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'UX Design'),
(140, 'Changement Management', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Changement Management'),
(141, 'L’expérience utilisateur au cœur de la construction des produits.', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'L’expérience utilisateur au'),
(142, 'Suivant vos besoins, BTI - Advisory mobilise l’ensemble des compétences nécessaires pour accélérer et sécuriser l’atteinte de vos objectifs grâce à ses différents services IT.', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Suivant vos besoins,'),
(143, 'Nous couvrons tous les domaines d’activités et abordons des projets de toute nature. Nous apportons une valeur ajoutée aux acteurs du projet par un apport indépendant, intègre, créatif et rigoureux.', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Nous couvrons tous'),
(144, '35% Multi-Speed IT', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', '35% Multi-Speed IT'),
(145, '30% Transformation des produits IT', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', '30% Transformation des'),
(146, '15% Transformation UX', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', '15% Transformation UX'),
(147, '20% Technologie et Innovation', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', '20% Technologie et'),
(148, 'Contactez-nous', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Contactez-nous'),
(149, 'Parlez avec l\'un de nos experts', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'Parlez avec l\'un'),
(150, 'BTI – Advisory est toujours à la recherche de personnes talentueuses. Nous vous contacterons dans les plus brefs délais !', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'BTI – Advisory'),
(151, 'NOTRE ÉCOSYSTÈME', 14, '2023-04-10 10:29:28', '2023-04-10 10:29:28', 'NOTRE ÉCOSYSTÈME'),
(152, 'Service', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Service'),
(153, 'Transformation des Produits IT', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Transformation des Produits'),
(154, 'Journey To Cloud', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Journey To Cloud'),
(155, 'Digital Workplace', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Digital Workplace'),
(156, 'Architecture digitale', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Architecture digitale'),
(157, 'Innover, accélérer et industrialiser', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Innover, accélérer et'),
(158, 'Face aux besoins métiers croissants d’agilité pour le traitement des demandes d’évolution, répondant au virage de l’ère de la révolution digitale, les entreprises se doivent d’engager une démarche en rupture dans la gestion de ses infrastructures.', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Face aux besoins'),
(159, 'Journey To Cloud', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Journey To Cloud'),
(160, 'Le Cloud apparaît comme une solution innovante majeure pour penser et consommer les ressources informatiques de manière optimale. Nous nous dirigeons tout droit vers l’IT as a Business, un changement de paradigme qui affectera l’ensemble des entreprises.', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Le Cloud apparaît'),
(161, 'Les prestations associées au service Journey to Cloud', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Les prestations associées'),
(162, 'Diagnostic de maturité', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Diagnostic de maturité'),
(163, 'Définition du modèle opérationnel', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Définition du modèle'),
(164, 'Définition de la stratégie, business case et feuille de route Cloud', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Définition de la'),
(165, 'Étude de faisabilité et conception de la plateforme Cloud', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Étude de faisabilité'),
(166, 'Pilotage de la migration des applications et des produits IT vers le Cloud', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Pilotage de la'),
(167, 'BTI Advisory propose de vous accompagner dans ce parcours de transformation de vos produits IT avec une démarche innovante et collaborative, tout en assurant la mobilisation et la participation de toutes les parties prenantes.', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'BTI Advisory propose'),
(168, 'À mesure que la transition digitale s’accélère, une évidence s’impose : l’expérience collaborateur devient un pilier de la transformation digitale des entreprises, notamment à travers le Digital Workplace. Personnalisation des parcours, contractualisation à la mission, virtualisation de l’espace de travail et du management, mobilité généralisée et modes collaboratifs innovants sont autant de nouveaux enjeux au sein des entreprises.', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'À mesure que'),
(169, 'Digital Workplace', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Digital Workplace'),
(170, 'La transformation des produits IT doit être pensée sous le prisme de l’usage et de son apport de valeur avant de déterminer les outils qui soutiendront ce changement.', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'La transformation des'),
(171, 'Les prestations associées au service Digital Workplace', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Les prestations associées'),
(172, 'Diagnostic de maturité', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Diagnostic de maturité'),
(173, 'Définition de la stratégie, business case et feuille de route Cloud', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Définition de la'),
(174, 'Cadrage et pilotage du déploiement de projets collaboratifs', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Cadrage et pilotage'),
(175, 'Pilotage de la mise en œuvre du Digital Workplace', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Pilotage de la'),
(176, 'Pour vous accompagner dans cette transformation, nous avons développé une approche structurée en 3 grandes phases afin d’engager d’accélérer l’innovation, réduire les coûts et améliorer la satisfaction des utilisateurs du Digital Workplace.', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Pour vous accompagner'),
(177, 'La transformation des produits IT impose la mise en œuvre d’un SI à plusieurs vitesses pour permettre la cohabitation entre les différents produits de l’entreprise. Sa flexibilité n’est pas seulement l’enjeu de la DSI mais aussi celui de l’entreprise dans laquelle un certain nombre de parties prenantes partagent des objectifs communs.', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'La transformation des'),
(178, 'Architecture digitale', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Architecture digitale'),
(179, 'La transformation des produits IT impose la mise en œuvre d’un SI à plusieurs vitesses pour permettre la cohabitation entre les différents produits de l’entreprise. Sa flexibilité n’est pas seulement l’enjeu de la DSI mais aussi celui de l’entreprise dans laquelle un certain nombre de parties prenantes partagent des objectifs communs.', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'La transformation des'),
(180, 'Aujourd’hui, l’architecture digitale d’entreprise se positionne définitivement comme l’orchestrateur de la transformation digitale en proposant un modèle Agile du SI partagé.', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Aujourd’hui, l’architecture digitale'),
(181, 'Les prestations associées au service Architecture Digitale', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Les prestations associées'),
(182, 'Définition du schéma directeur pour la transformation du SI', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Définition du schéma'),
(183, 'Coaching et accompagnement des architectes', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Coaching et accompagnement'),
(184, 'Mise en place de l’offre de services et de la gouvernance de l’architecture', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Mise en place'),
(185, 'Cadrage et accompagnement des projets', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Cadrage et accompagnement'),
(186, 'Digitaliser, fluidifier, sécuriser vos processus internes', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Digitaliser, fluidifier, sécuriser'),
(187, 'BTI – Advisory vous accompagne dans la transformation de vos silos applicatifs vers une logique de plateformes digitales permettant l’émergence des modes “Fast IT” et “Core IT”.', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'BTI – Advisory'),
(188, 'Contactez-nous', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Contactez-nous'),
(189, 'Parlez avec l’un de nos experts', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Parlez avec l’un'),
(190, 'Vous avez une question ? Vous recherchez un renseignement précis ou une documentation spécifique ? ', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'Vous avez une'),
(191, 'N’hésitez pas à nous en faire part !', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'N’hésitez pas à'),
(192, 'NOTRE ÉCOSYSTÈME', 7, '2023-04-10 10:38:35', '2023-04-10 10:38:35', 'NOTRE ÉCOSYSTÈME'),
(193, 'BTI – Advisory, une société de conseil IT 100% indépendante.', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'BTI – Advisory,'),
(194, 'Nous pensons que la transformation digitale fera partie intégrante du monde de demain et qu’elle doit avoir un impact sociétal positif.', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Nous pensons que'),
(195, 'Notre mission', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Notre mission'),
(196, 'En tant que jeune société de conseil IT, nous souhaitons devenir les bâtisseurs de ces grandes transformations durables.', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'En tant que'),
(197, 'Derrière BTI – Advisory se trouve une équipe pluridisciplinaire, qui allie des compétences et expertises IT et de fortes valeurs.', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Derrière BTI –'),
(198, 'Nos services', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Nos services'),
(199, 'L’excellence collective au service de la transformation digitale et durable', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'L’excellence collective au'),
(200, 'Transformation des Produits IT', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Transformation des Produits'),
(201, 'Journey To Cloud', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Journey To Cloud'),
(202, 'Digital Workplace', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Digital Workplace'),
(203, 'Architecture digitale', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Architecture digitale'),
(204, 'Nous accompagnons les DSI à maximiser la création de valeur et à se positionner comme partenaires du métier grâce à la transformation des produits IT.', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Nous accompagnons les'),
(205, 'Multi-Speed IT', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Multi-Speed IT'),
(206, 'Agile at Scale', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Agile at Scale'),
(207, 'Lean IT et Green IT', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Lean IT et'),
(208, 'Culture et plateforme DevOps', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Culture et plateforme'),
(209, 'Nous accompagnons les DSI à ancrer une culture durable et à mettre en place des pratiques permettant d’adapter des cycles de réalisation aux enjeux de l’entreprise afin de rester compétitif et innovant.', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Nous accompagnons les'),
(210, 'Technologie & Innovation', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Technologie & Innovation'),
(211, 'Digital Factory', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Digital Factory'),
(212, 'IoT & Robotics', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'IoT & Robotics'),
(213, 'Data Intelligence', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Data Intelligence'),
(214, 'Tout notre savoir-faire technologique au service de l’innovation de nos clients.', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Tout notre savoir-faire'),
(215, 'Transformation UX', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Transformation UX'),
(216, 'Stratégie Omnicanale', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Stratégie Omnicanale'),
(217, 'UX Design', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'UX Design'),
(218, 'Changement Management', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Changement Management'),
(219, 'L’expérience utilisateur au cœur de la construction des produits.', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'L’expérience utilisateur au'),
(220, 'Nos références', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Nos références'),
(221, 'Nous avons à cœur de mettre nos expertises au service de la transformation digitale des entreprises.', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Nous avons à'),
(222, '90%', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', '90%'),
(223, 'de croissance en 2022', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'de croissance en'),
(224, '4M', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', '4M'),
(225, 'de CA en 2022', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'de CA en'),
(226, '+40', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'collaborateurs'),
(227, 'collaborateurs', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', '+40'),
(228, '45', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', '45'),
(229, 'projets réalisés en 2022', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'projets réalisés en'),
(230, 'Nous rejoindre', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Nous rejoindre'),
(231, 'Travailler chez BTI - Advisory, c’est rejoindre un collectif où le savoir-être est aussi valorisé que le savoir-faire.', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Travailler chez BTI'),
(232, 'Data Engineer BI Senior', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Data Engineer BI'),
(233, 'Développeur Fullstack', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Développeur Fullstack'),
(234, 'Développeur Junior Java Angular', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'Développeur Junior Java'),
(235, 'NOTRE ÉCOSYSTÈME', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', 'NOTRE ÉCOSYSTÈME'),
(236, 'Contactez-nous', 6, '2023-04-10 11:08:14', '2023-04-10 11:08:14', 'Contactez-nous'),
(237, 'Vous avez un projet ? Vous souhaitez nous rencontrer ?', 6, '2023-04-10 11:08:14', '2023-04-10 11:08:14', 'Vous avez un'),
(238, 'Échangeons', 6, '2023-04-10 11:08:14', '2023-04-10 11:08:14', 'Échangeons'),
(239, 'NOTRE ÉCOSYSTÈME', 6, '2023-04-10 11:08:14', '2023-04-10 11:08:14', 'NOTRE ÉCOSYSTÈME'),
(240, 'Nous rejoindre', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Nous rejoindre'),
(241, 'Nos offres d’emploi', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Nos offres d’emploi'),
(242, 'Vous souhaitez évoluer dans un environnement de travail stimulant, dans lequel vous aurez des opportunités de progression de premier ordre ? Rejoignez-nous pour cultiver votre goût d’entreprendre et révéler votre personnalité au sein d’une équipe ambitieuse et volontaire.', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Vous souhaitez évoluer'),
(243, 'Travailler chez BTI - Advisory c’est rejoindre un collectif où le savoir-être est autant valorisé que le savoir-faire.', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Travailler chez BTI'),
(244, 'Vous êtes une personne passionnée, dynamique, riche d’idées et d’envies, désireuse de les communiquer et de les réaliser avec l’entreprise, vous aimez contribuer à des projets passionnants autour des défis de transformation. Alors n’hésitez pas !', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Vous êtes une'),
(245, 'Les offres', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Les offres'),
(246, 'Découvrez nos offres d’emploi et postez votre candidature en ligne !', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Découvrez nos offres'),
(247, 'Data Engineer BI Senior', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Data Engineer BI'),
(248, 'Réalisation', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Réalisation'),
(249, 'Paris', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Paris'),
(250, 'CDI', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'CDI'),
(251, 'Lead Développeur .Net Core', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Lead Développeur .Net'),
(252, 'Expérience Utilisateur', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Expérience Utilisateur'),
(253, 'Pilotage', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Pilotage'),
(254, 'Candidature spontanée', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Candidature spontanée'),
(255, 'Vous ne trouvez pas votre bonheur ?', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'Vous ne trouvez'),
(256, 'BTI – Advisory est toujours à la recherche de personnes talentueuses. Remplissez le formulaire ci-dessous en y joignant votre CV ainsi qu’en expliquant vos motivations. Nous vous contacterons dans les plus brefs délais !', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'BTI – Advisory'),
(257, 'NOTRE ÉCOSYSTÈME', 5, '2023-04-10 11:28:01', '2023-04-10 11:28:01', 'NOTRE ÉCOSYSTÈME'),
(258, 'Qui sommes-nous ?dd', 3, '2023-04-10 11:36:04', '2023-05-04 11:40:43', 'Qui sommes-nous ?dd'),
(259, 'Bâtir de manière durable les transformations numériques de nos clients', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Bâtir de manière'),
(260, 'Fondée en 2016, BTI Advisory est une société 100% indépendante, qui possède de nombreuses expertises IT et qui intervient sur des missions à forte valeur ajoutée dans différents secteurs d’activités : secteur bancaire, assurances, secteur énergétique, secteur public, transports, etc.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Fondée en 2016,'),
(261, 'À l’heure où tout s’accélère, les entreprises font face à de nouveaux défis : les technologies et les services deviennent plus rapidement obsolètes que par le passé, la concurrence s’accroît, le flot d’innovations devient continu et les entreprises sont de plus en plus agiles.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'À l’heure où'),
(262, 'Forte de ses expériences et de son expertise IT, BTI - Advisory accompagne ses clients dans le conseil, la transformation et la modernisation des organisations ainsi que de leurs projets digitaux.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Forte de ses'),
(263, 'Notre compréhension des enjeux métiers et technologiques nous permet d’intervenir sur la stratégie et la performance opérationnelle des systèmes d’information, le pilotage de programmes ou projets et sur des sujets d’expertises pointus.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Notre compréhension des'),
(264, 'Notre succès se construit principalement autour de la qualité de nos collaborateurs et notre esprit d’équipe. Avec BTI – Advisory, vous avez des équipes de personnes motivées et engagées dans la réussite de vos projets. Nous choisir, c’est mobiliser les compétences de toute une entreprise pour vous aider à transformer vos idées en valeur !', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Notre succès se'),
(265, 'Des valeurs fondamentales qui portent les projets', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Des valeurs fondamentales'),
(266, 'BTI – Advisory est une société de conseil en IT à taille humaine, prônant l’importance des compétences techniques alliées à des valeurs fortes pour la réussite globale des projets.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'BTI – Advisory'),
(267, 'Excellence :', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Excellence :'),
(268, 'Apporter le meilleur service possible, en mêlant qualité et innovation ;', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Apporter le meilleur'),
(269, 'Engagement :', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Engagement :'),
(270, 'S’impliquer durablement envers nos clients et pour la société ;', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'S’impliquer durablement envers'),
(271, 'Ouverture ', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Ouverture '),
(272, 'Être curieux et s’enrichir de la diversité pour rester réceptifs à de nouvelles opportunités ;', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Être curieux et'),
(273, 'Solidarité :', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Solidarité :'),
(274, 'Avoir une communauté sur le partage et l’échange entre nous et avec nos clients.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Avoir une communauté'),
(275, 'Des engagements forts pour nos clients', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Des engagements forts'),
(276, 'La clé de la réussite pour la transformation digitale des entreprises réside avant tout dans des engagements concrets au niveau des projets chez BTI – Advisory :', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'La clé de'),
(277, 'La qualité :', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'La qualité :'),
(278, 'Nous mettons en œuvre une démarche qualité pour la satisfaction de nos clients mais aussi pour nos collaborateurs', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Nous mettons en'),
(279, 'L\'innovation :', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'L\'innovation :'),
(280, 'Nous plaçons l’innovation au cœur de notre activité afin d’offrir les services de demain ;', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Nous plaçons l’innovation'),
(281, 'La transparence :', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'La transparence :'),
(282, 'Nous prônons une transparence à tous les niveaux pour atteindre une parfaite accessibilité de l’information.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Nous prônons une'),
(283, 'Les BTI Advisors', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Les BTI Advisors'),
(284, 'Une équipe d’experts IT dédiée chez BTI - Advisory', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Une équipe d’experts'),
(285, 'BTI - Advisory accompagne ses clients dans leurs problématiques de système d’information les plus complexes, notamment grâce à son expertise IT, afin de garantir que leurs décisions contribuent pleinement à la réalisation de leurs objectifs stratégiques, opérationnels et financiers.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'BTI - Advisory'),
(286, 'De ce fait, nos équipes sont structurées de façon à intégrer un large éventail d’expertises IT et de perspectives. Nous sommes très attachés à la diversité de nos collaborateurs qui proviennent de différents horizons.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'De ce fait,'),
(287, 'Chez BTI – Advisory, nous considérons que la qualité de service est indissociable du bien-être de chacun et des meilleures conditions de travail. C’est pourquoi nous nous investissons pour l’épanouissement de nos collaborateurs en instaurant une culture de dialogue permanent afin de connaître leurs aspirations et permettre l’atteinte de leurs propres objectifs.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Chez BTI –'),
(288, 'Les BTI Advisors', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Les BTI Advisors'),
(289, 'Notre système de gestion des Ressources Humaines repose sur les valeurs fondatrices de BTI - Advisory : la transparence et la qualité.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Notre système de'),
(290, 'Dans ce cadre, nous avons construit avec les collaborateurs un système de gestion des Ressources Humaines pour encourager le développement des talents tout au long de leur apprentissage : recrutement, intégration, gestion des carrières, formation et gestion des connaissances.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Dans ce cadre,'),
(291, 'Ce système est structuré autour de deux grands axes :', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Ce système est'),
(292, 'L’accompagnement dans le développement du potentiel', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'L’accompagnement dans le'),
(293, 'L’accompagnement dans l’atteinte des objectifs', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'L’accompagnement dans l’atteinte'),
(294, 'La personnalisation du suivi des collaborateurs se traduit par une relation de proximité avec les interlocuteurs groupe, formalisée par des outils, tels que les points missions, les bilans annuels où les entretiens de carrière.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'La personnalisation du'),
(295, 'Nos références', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Nos références'),
(296, 'Nous avons à cœur de mettre nos expertises au service de la transformation digitale des entreprises.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Nous avons à'),
(297, 'Notre politique de partenariat', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Notre politique de'),
(298, 'Nous souhaitons nouer des partenariats éditeurs pour avoir accès à des informations disponibles uniquement chez les partenaires et connaître en détail les outils des éditeurs.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Nous souhaitons nouer'),
(299, 'Cependant, nous privilégions notre indépendance par rapport à nos partenariats et refusons ainsi toute commission pour la recommandation d’un outil spécifique. Nous préconisons toujours ce que nous pensons être la meilleure approche pour nos clients et nous ne divulguons pas d’informations confidentielles à nos partenaires.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Cependant, nous privilégions'),
(300, 'Si, sur une mission, une clause d’un contrat de partenariat devenait contraire à nos principes d’indépendance, nous n’hésiterions pas à dénoncer immédiatement le partenariat concerné comme le prévoient ces contrats.', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Si, sur une'),
(301, 'Contactez-nous', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Contactez-nous'),
(302, 'Parlez avec l’un de nos experts', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Parlez avec l’un'),
(303, 'Vous avez une question ? Vous recherchez un renseignement précis ou une documentation spécifique ? N’hésitez pas à nous en faire part', 3, '2023-04-10 11:36:04', '2023-04-10 11:36:04', 'Vous avez une'),
(304, 'BTI - ADVISORY', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'BTI - ADVISORY'),
(305, 'NOS SERVICES', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'NOS SERVICES'),
(306, 'À propos', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'À propos'),
(307, 'Blog', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'Blog'),
(308, 'Nous rejoindre', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'Nous rejoindre'),
(309, 'Contactez-nous', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'Contactez-nous'),
(310, 'Transformation des produits IT', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'Transformation des produits'),
(311, 'Multi-Speed IT', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'Multi-Speed IT'),
(312, 'Technologie & Innovation', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'Technologie & Innovation'),
(313, 'Transformation UX', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'Transformation UX'),
(314, '18 rue Drouot, 75009 Paris', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', '18 rue Drouot,'),
(315, '(+33) 1.40.90.30.77', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', '(+33) 1.40.90.30.77'),
(316, 'contact@bti-advisory.com', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'contact@bti-advisory.com'),
(317, 'Copyright © 2023 BTI - Advisory', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'Copyright © 2023'),
(318, 'Mentions légales', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'Mentions légales'),
(319, 'CGU', 16, '2023-04-11 09:41:17', '2023-04-11 09:41:17', 'CGU'),
(320, 'NOTRE ÉCOSYSTÈME', 16, NULL, NULL, 'NOTRE ÉCOSYSTÈME');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `categorie_name` varchar(255) NOT NULL,
  `categorie_parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_presentation` varchar(255) DEFAULT NULL,
  `key_redis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`categorie_id`, `categorie_name`, `categorie_parent_id`, `created_at`, `updated_at`, `url_presentation`, `key_redis`) VALUES
(3, 'À propos', NULL, '2023-04-07 14:20:18', '2023-05-04 11:27:56', 'À propos - BTI - Advisory', 'a_propos_BTI_Advisory'),
(4, 'Nos services', NULL, '2023-04-07 14:22:03', '2023-04-07 14:22:03', '', ''),
(5, 'Nous rejoindre', NULL, '2023-04-07 14:22:19', '2023-05-04 11:27:56', 'Nous rejoindre - BTI - Advisory', 'Nous_rejoindre_BTI_Advisory'),
(6, 'Contactez-nous', NULL, '2023-04-07 14:22:28', '2023-05-04 11:27:56', 'Contactez-nous - BTI - Advisory', 'Contactez_nous_BTI_Advisory'),
(7, 'transformation des produits it', 4, '2023-04-07 14:22:48', '2023-05-04 11:27:56', 'Transformation des Produits IT - BTI - Advisory', 'Transformation_des_Produits_IT_BTI_Advisory'),
(8, 'multi speed it', 4, '2023-04-07 14:23:01', '2023-05-04 11:27:56', 'Multi-Speed IT - BTI - Advisory', 'Multi_Speed_IT_BTI_Advisory'),
(9, 'technologie innovation', 4, '2023-04-07 14:23:19', '2023-05-04 11:27:56', 'Technologie & Innovation - BTI - Advisory', 'Technologie_Innovation_BTI_Advisory'),
(10, 'transformation ux', 4, '2023-04-07 14:23:35', '2023-05-04 11:27:56', 'Transformation UX - BTI - Advisory', 'Transformation_UX_BTI_Advisory'),
(11, 'Blog', NULL, '2023-04-07 14:24:02', '2023-04-07 14:24:02', NULL, ''),
(12, 'accueil', NULL, '2023-04-07 14:25:47', '2023-04-07 14:26:12', NULL, ''),
(13, 'Notre écosystème', NULL, '2023-04-07 14:30:20', '2023-04-07 14:30:20', NULL, ''),
(14, 'Tous nos services', 4, '2023-04-07 12:40:15', '2023-05-04 11:27:56', 'Nos service - BTI - Advisory', 'Nos_service_BTI_Advisory'),
(15, 'Home', NULL, NULL, '2023-05-04 11:27:56', 'BTI - Advisory - Cabinet de conseil en IT', 'BTI_Advisory_Cabinet_de_conseil_en_IT'),
(16, 'Footer', NULL, NULL, NULL, 'Footer', ''),
(17, 'BTI Studio', NULL, '2023-04-11 12:34:26', '2023-04-11 12:34:26', NULL, ''),
(18, 'BTI Lab', NULL, '2023-04-11 12:34:55', '2023-04-11 12:34:55', NULL, ''),
(19, 'Yellow IT', NULL, '2023-04-11 12:35:16', '2023-04-11 12:35:16', NULL, ''),
(20, 'Nos publications', NULL, '2023-04-11 12:35:43', '2023-04-11 12:35:43', NULL, ''),
(21, 'Nos  études de cas', NULL, '2023-04-11 12:36:05', '2023-04-11 12:36:05', NULL, '');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_29_100431_create_sessions_table', 1),
(7, '2023_03_29_102349_create_roles_table', 1),
(8, '2023_03_29_103234_add_role_id_to_users_table', 1),
(9, '2023_04_05_102231_create_categories_table', 1),
(10, '2023_04_05_102335_add_recursive_foreign_key_in_categories', 1),
(11, '2023_04_05_102405_create_articles_table', 1),
(12, '2023_04_05_115658_make_categorie_parent_id_nullable', 1),
(13, '2023_04_06_115409_make_article_text_text', 2),
(14, '2023_04_06_151954_add_article_slug_into_articles', 3),
(15, '2023_04_07_151148_add_url_presentation_in_categories', 4),
(16, '2023_04_28_112417_create_permission_tables', 5),
(17, '2023_04_27_135058_create_ms_graph_tokens_table', 6),
(18, '2023_05_02_105336_add_id_office_to_users_table', 6),
(19, '2023_05_04_112010_add_keu_redis', 7);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 7);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(3, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 1),
(4, 'App\\Models\\User', 2),
(4, 'App\\Models\\User', 3),
(4, 'App\\Models\\User', 4),
(4, 'App\\Models\\User', 5),
(4, 'App\\Models\\User', 6);

-- --------------------------------------------------------

--
-- Structure de la table `ms_graph_tokens`
--

CREATE TABLE `ms_graph_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `access_token` text NOT NULL,
  `refresh_token` text DEFAULT NULL,
  `expires` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ms_graph_tokens`
--

INSERT INTO `ms_graph_tokens` (`id`, `user_id`, `email`, `access_token`, `refresh_token`, `expires`, `created_at`, `updated_at`) VALUES
(1, NULL, 'asyassin06_outlook.com#EXT#@asyassin06outlook.onmicrosoft.com', 'eyJ0eXAiOiJKV1QiLCJub25jZSI6ImdUSmlzUVRzYzJ4MDVOOXVONHk5MFlabFVvWXg4NWRkWlNzbGVUQVJzRmsiLCJhbGciOiJSUzI1NiIsIng1dCI6Ii1LSTNROW5OUjdiUm9meG1lWm9YcWJIWkdldyIsImtpZCI6Ii1LSTNROW5OUjdiUm9meG1lWm9YcWJIWkdldyJ9.eyJhdWQiOiIwMDAwMDAwMy0wMDAwLTAwMDAtYzAwMC0wMDAwMDAwMDAwMDAiLCJpc3MiOiJodHRwczovL3N0cy53aW5kb3dzLm5ldC85YjQ1ZDU0Yi1jYjNiLTQ2NGUtOGVlNS1hYjIzMTllMmE2MGMvIiwiaWF0IjoxNjg1MDA0MzM2LCJuYmYiOjE2ODUwMDQzMzYsImV4cCI6MTY4NTAwODc3OSwiYWNjdCI6MCwiYWNyIjoiMSIsImFpbyI6IkFZUUFlLzhUQUFBQUFoa2w0WHp1b1IyY21ncE5yMUZzM0pDenBVNHE1RERBdVFscnlVNHNUVDlkZ1dLbzFpbzAzbjErSnVWRmR6aVB5YjcxVFFSUStPWFRBcElvMTh1SWFwc3k3NWFaTGczdlBXbW9LUHVQbnZsZEl3Y21XeXNNbmc5TjdDV1pIK0NKMWZHUE9oQS82Z2NNd2pTbGdsYUlNYUErOXVROTI0TjFxNUwxbEZOZnd2cz0iLCJhbHRzZWNpZCI6IjE6bGl2ZS5jb206MDAwMzQwMDE1OTdBRTU1NyIsImFtciI6WyJwd2QiLCJtZmEiXSwiYXBwX2Rpc3BsYXluYW1lIjoiZGVtbyIsImFwcGlkIjoiYWJjZjRlNTAtNDY5ZC00ODgwLTgyODQtNTA1MDQ3MGNjN2RlIiwiYXBwaWRhY3IiOiIxIiwiZW1haWwiOiJhc3lhc3NpbjA2QG91dGxvb2suY29tIiwiZmFtaWx5X25hbWUiOiJhcyIsImdpdmVuX25hbWUiOiJ5YXNzaW5lIiwiaWRwIjoibGl2ZS5jb20iLCJpZHR5cCI6InVzZXIiLCJpcGFkZHIiOiIxOTcuMjMwLjg1LjE4MSIsIm5hbWUiOiJ5YXNzaW5lIGFzIiwib2lkIjoiNjg4MmY3MjctYTBkZS00ZjNiLTllNjMtOTcxZTk5MDdjNmUzIiwicGxhdGYiOiIzIiwicHVpZCI6IjEwMDMyMDAyOUIwN0Y2MEQiLCJyaCI6IjAuQVVzQVM5VkZtenZMVGthTzVhc2pHZUttREFNQUFBQUFBQUFBd0FBQUFBQUFBQUJMQVBZLiIsInNjcCI6IkNhbGVuZGFycy5SZWFkV3JpdGUgQ29udGFjdHMuUmVhZFdyaXRlIEZpbGVzLlJlYWRXcml0ZSBNYWlsLlJlYWRXcml0ZSBNYWlsLlNlbmQgTWFpbGJveFNldHRpbmdzLlJlYWRXcml0ZSBvcGVuaWQgVGFza3MuUmVhZFdyaXRlIFVzZXIuUmVhZFdyaXRlIHByb2ZpbGUgZW1haWwiLCJzaWduaW5fc3RhdGUiOlsia21zaSJdLCJzdWIiOiJnQzRHTlktU0t1NnZ3WlVfd0VramU0SXFZVExQRGZLMlBiM3N6RWlwa0NvIiwidGVuYW50X3JlZ2lvbl9zY29wZSI6IkFGIiwidGlkIjoiOWI0NWQ1NGItY2IzYi00NjRlLThlZTUtYWIyMzE5ZTJhNjBjIiwidW5pcXVlX25hbWUiOiJsaXZlLmNvbSNhc3lhc3NpbjA2QG91dGxvb2suY29tIiwidXRpIjoiajBaSTNBTHpTVWFsT0hobGdPOFZBQSIsInZlciI6IjEuMCIsIndpZHMiOlsiNjJlOTAzOTQtNjlmNS00MjM3LTkxOTAtMDEyMTc3MTQ1ZTEwIiwiYjc5ZmJmNGQtM2VmOS00Njg5LTgxNDMtNzZiMTk0ZTg1NTA5Il0sInhtc19zdCI6eyJzdWIiOiJFMlVWTk1KMzZaNVFkYVYxOWF2NFNENmVENENVeEJpVXVqY3A0RUJId3g0In0sInhtc190Y2R0IjoxNjgyNTE5MjIxfQ.rlDZiFqoyMfmv6jPvULVgnX4yhe-BesFNbzCT86p16_x4-KbCg43QCszHRHLX52yB3oYnCvjNy5dhNtfOwvDjK1u5wRz66AR67bYNZJtWbF9hWycklDJVv-j5PUPK7Ow7cHOKLiNPgGb2vZkSA_YQf9e-mLLTEKkjSq7VDfT-NioMfgB0OUHIRTeJWiqAfEFgzKLjjw0QB769uwi1ZW1CedJhZd9nHvCxKSnnF7A1JdxVJ79VuBFPYBsc3HxaY6nbOJezqoFFAeh905-RHHWXSEZCZdmPY7k0Hyl1Wh4Aa2dKJtXpCM-BzfUi8NeN5rwrTCX3SgieBMN5_bs_KUrlw', '0.AUsAS9VFmzvLTkaO5asjGeKmDFBOz6udRoBIgoRQUEcMx95LAPY.AgABAAEAAAD--DLA3VO7QrddgJg7WevrAgDs_wUA9P-46Or4BdGFRK_9lgUpiQugmRmlxr4VViV6SA0U4vC9190w34B7MhjhLS2C9ajRfQXbj45-cSRc0AKMRuGLFdZCmI5aV2Np0-Mc8Y8yFezNEtK8PQf45ChHYzPU84JaWmPiKSVzmkd08v-_y9kWXGAmZ2UGQPYrQUF-8TYueXJ-nGack8xiBsQpKpo3mZfKjajfWSbRdw_7Iveau3mbuIp_fAMZE0AgnrFpDR0IEQSRU8iBzaff2JQGlshKoMoFCUEHiCJ7_cVeUdYycUMx9ZDKD81pr46CU6PDqNyhx3UU7KbaxKObU2fX8SpsMMV2q5A7423XBWszwvxALGvOmjwRIL4pWzu8DAaCfOhyJphtRbKoWC80f6caSiQyXEg1paWB55xrskkDiIrAgbFjQYoieQ-yVL1-9KTdjYPGyWuu8Mq7YEiZ9tSLTNH2ECBmqvZeonIBFFw-SsjNW84xgDdP5WgvfGZZePH1r4d_yH3_VpzVtQp9iZfDObSXz9-Ym_G8I7vbiv__M63h9pL1MrHPugh_KDnl1wJL5tNBS3AG-B_dSx9so2Ei6WUv9q9uz4dEBPB6N0U96iYINBsL_X5rT8SWAgGKFDVK98EQL6bOnnP_WIR_KHdDryOstOuwdenJIqVLYDscnQEpY6yjPSkstnwD75Fo9cfPOTiT4T1jg_rpidvQLtA5FHu3F08-CADMzQ4bp4gktg0vIA2v73qqTnPd7xxi0pBGxJ4K-gjQc7poWUZBHz8tKv3nkqB8fqCSbCP4kzWxsy59YWoRnKVL3ncTbqPm4HkiUmoAURUOTBtYhcg1PwAOZY61eX-xmQFPKPPDLbIB7paDcI7FlWZLmLEXiTtoTLWijrWwjTpLuSKwxsIOMw4_Fgewcjt2aPgfZro66LldFg_qJNEgthVLBto3N9fQ4CUzMp9zNjePwmqfZREGpTnVcKIhCC0WjIIeJOMdKJKvqObaQcFTvPXt3Im_qsOsD-2NMbV5veMigrJ-_LNV0tiDwLYlThVRzEICLyLMg-WD_ADKSxxEpggqbVORkiQ-GmHpu65Ip2NUiJLF9Qrf6fcPzt8TUPkCC9VnW3K-3IKlxIxbvew7y9V47Rb_CVK33pc-LaocUju4AAHjUyF6szhBAb96hNeMsbfAcc_svWy6htMTq5OsPcQpl5ck9QW2yVRV13uhIJ0INbLVU-T8-yHSDYrI4PwU9yNS5pwZp7uMRpJfkF4dEIaU9hebfZ78pqp4UUfZpbDr94x8KAPUmUK6Fuw60WhxCrexgE4McgRdO8FlUyynNmXqpb0aaXQMrKc4WfCyJNmHmiVlPstCeukTFoaSKxeNX2L5_IbKtQ-O7XIL-hhMgMGp7bs3x0y23rN65Bjj2rTthOPJL37EJkkGZcOcNu9vZt9r8ciCLAPo-84zpCI-TT0MELQ-QRVmO5P0xAKHrZOsWFY-v40', '1685008779', '2023-05-03 08:13:27', '2023-05-25 07:50:37');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'edit articlesdd', 'web', '2023-05-02 09:29:15', '2023-05-25 00:11:31'),
(4, 'create articles', 'web', '2023-05-02 09:29:15', '2023-05-02 09:29:15'),
(6, 'role 012', 'web', '2023-05-03 09:23:55', '2023-05-03 09:23:55');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 'web', '2023-05-02 09:29:30', '2023-05-02 09:29:30'),
(4, 'User', 'web', '2023-05-02 09:29:30', '2023-05-02 09:29:30'),
(8, 'Editeur', 'web', '2023-05-25 07:14:01', '2023-05-25 07:14:01'),
(9, 'Reader', 'web', '2023-05-25 08:04:45', '2023-05-25 08:04:45');

-- --------------------------------------------------------

--
-- Structure de la table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(3, 3),
(3, 4),
(4, 4),
(6, 3);

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0JduLqtTkb5K4U28d6QWQs5vlI63BzQPrqJtqPNU', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibFF6UmdiZ1JDZjR2RlNwRzltVjRVVVRaZlNteHhrSmVhbjE5Z21EWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686311712),
('0JfdudLzpWsDe9dBLfjhSqCauqHycEcLin4JM7bP', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib24zaHBoNGVNSHFtRkhmYmhra2NIWmQyV3NCaTBPN1FKZTJ6N3RwQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686572596),
('0VPNWeEBIoy1vZErnHxvkbovBpdr8LYMnQDCQxPF', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV2VWTG5XeUNFQTd6Sm10elQ5bFMyaDBRV3hrbVlaQmJlRlZHY2g0WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310319),
('24HFAl1zSIB2tzAKS00n7iCseWUtcslb1BZnXbwu', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTTMwWjc0VkFBbmdEMDd1OTAxanExZGxRRWJCcmRTb0FVQ1FjMjVzcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312026),
('24vAxxbO32rRHY8UOYWzPSr195A2HcCMHfiClMSL', NULL, '127.0.0.1', 'Mozilla/5.0 (iPhone; CPU iPhone OS 14_0 like Mac OS X) AppleWebKit/603.1.30 (KHTML, like Gecko) Version/12.0.0 Mobile/15A5370a Safari/602.1', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUdvSm1jZU4xNDk3ZFhiVVBZemh5T3o5OEdMMUt4MFJERDdFWXZYciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1686313634),
('2rScSjdYvOjArBmRdNJpxdby0oEcN9hYKl0FImwt', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidHNHOXVTTDIwZDJSWFpEemVrbVkyYVNHRmFQdEZYM0NXQVNhV3JMUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310381),
('3FEcmHigKS794Eshbtl1D1OmBAXtg49lJU8OxwyX', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzZNSTR4T01CQjFsSlNkZlUyQ2haanFYT3Q4U3pkbDVSdkg1TVBOYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312395),
('3iQHsFdqdIV3CQfeRiacbVvr0t61mDnGKSq0JPQJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDRxV284akp0bXM4a3hUdUx0dmxvWXlvVFc5S2xFQ3BhMGtWZnJlQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1686571697),
('3LbGMPzB7lFJ74nSy45rDwOfEiU18rnpGYCcvzHy', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWHhxcXVXd1BETVVhUzdsWWRiWmJWWm1EMHRVY0dVZ1JpQ0doTUN4diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310207),
('3NcUStndf0eUfudVii4Dwdb2GxWQDFLkGtgWbtOS', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS1pmWW1tS1NvS3FkYUlGRmRsdXE5dVg3eTFPajRJR2FBM2FBcU1rMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313289),
('4f2RdcaMm9yJO3dWGWF9nV7Uwsn1xkyMCaGx2L2y', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMmRyUkFoV1lvZ0VrVVZVN3B5V1V2QlhKQzFtTGpsTlI2b1pBNFhycSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312610),
('4wmXfTnSS0V1oFx6JPDNwpFlcaWCC8sCUBAxyKvY', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVTRhN2FENk1rcnF2UVBWSXB5UlFCT0JHRmZ2bjNkUkhNQTEwcEdoaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308096),
('56HM5wmrvhHXIV2sasJWjOcY6fUBBTM4f3j9TQLd', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY1drUm1GVlpYeDlHVUpZRUJZOXpJYzRIYWJWNlNDSmRua3pldnIyaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307916),
('5ocl1FpbrmXOCabfi3Yobv8Qq5nzJp7roREmiLmJ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUGdrTFJxMGdyUUVUR0prRXN3Vm8xTVNxOTF6dWllRWJxQ1NkUHplbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310699),
('5TVYgXaI5u7x4abd1rEtiYM1pQUcChscjOw7UwSY', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ3BsWlQxSW5XWGVhOUIxZUR6MzY0Tk1pSlFneGhPODBYeDNDbDlLcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312671),
('6Cup4NxFtZXGsbWJKqgaSI46csCHWK52gqlUzCKP', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidTlOdlZOVHZWcVpzWXFnb2dBY0lpYUs4aTdFdHhGV25jbGVZbklUdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310707),
('6HMXbdnLxglhVxErJJ2smsI3AJNwTbeCwD5Z7Kgj', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRlowVjlUcVRMV2s2ZlgxVjVqa0JHVzgyNFlIQUR6ajZrQ2ZURVl3eSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308073),
('6Pvno8eVyokQzg8P7309qZ1eHiQqOQY0BqJPAiVw', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibzh0Nzc2QVBlY3BoU1plT1Q1cUVqc2ljQnNSTUVNT3FXMkZMYWZhbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308088),
('7cQAwvAmZWe5iaKLkqNG3Wt18W2E0iVtfZbyIQse', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTXpyUDc1enF0Ym56RDh5MVhCM3Bna2l6RzZJV2dRdWhUYm5LcFZnQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310570),
('7SIBPmXKeCmlKZxhZB0MC3f5gl8gSqARHHAJH9YV', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYWgwbVUzRFVqdGpaQ3VDQlF0RUdWdnBnUENPcmI1ampSc0dxbjBNZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307953),
('87MmwH5pyoRTrWQFWo0yUk3TUfqgvdAua6Xi0aNs', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRUIzSDc5SlJrRUZQd0xIcXFtV3JDWllKeDNvVEowc2FVY1l6VzJzaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310356),
('8Bb7hQNHYh4AzoX7hqi161EStzV8WZQmVpoJFAKv', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidUhEWnhuQ2I1V0xCSW9zTklvY2x3RE5ONFhEcm8zWXplUTR6ZnNzTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686311971),
('9oz1EAV8fVQKDcEGYa2nfiiAqPKxPp8zGD2AizKD', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN1JselB4QVVxQXNJYTIwanFCaEZwdnVxQUFBV243STYwcVd5UGc3ZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312559),
('9p76WTj7wU21bW0GJZy5PUxNnI99n8ER0h3cR72j', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRVNmTlBPTUJ6Y0xCVGt2Zmo3YlRwWUFnMmpSVXhtbXdsUFI3M0JRRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310792),
('9Vibc62AaCCziWFGFau75kEsmsaNU0BnxuQ89B0Q', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOEg5RlBJUEpqOVJ6VHpxd0tSZGdtbkV0VHF0Q01OWjE5R2hxYVhjZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307748),
('9ZFRoeMKl0G4gBvvYDFn5BwZNl0516Nma0j70SCX', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSTBJNDc1dHQ1OGpNczgwRVJKY1cwVTJMSnNMaFROU2JCdHhtWWV1TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312792),
('a8WJSA0qGBu1dZ9sd7txmHr1wz1xKi1DAwcndLtf', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieTFXampoVkZxekdZNmw2bVYwV3BEVHI0dWljMVNCdEd5UDRvcVhoQSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312497),
('AK4HJN3aFXCAGKkrBpGw4MQU4AdwhmNVptGwGH0f', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid0FWR1gydnQzQ1RKb3hSRDZ6dXdTMXJCTzhScGZodFNWWmtINlhWZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307867),
('aleYMRqgJ0Jf16nbH7PsF6ABULhAqr1jUzU43fEW', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT0hKamNnVFAxMElUY1FKNG9TUHJUNk1MamNpcU1uTHBBSzQxWUZoeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686571594),
('AnMtlCslHheISwTbGWpTgNzWD2iTjcv87GDAybRL', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOTB6Y2N5WTlra1hBOXlZT1hsUmdJSkhIQ3YyVEsxZ3UwNDVweUs3YyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308274),
('bjEJ7v6oeKk3yEZZpZAU9FVFLUCTvDc4Vvq2wJRt', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYTJzcG1aTUVLWXBGNXg0cnJRT2Z5OXY4OUpMakhtSngzTG85QWNyTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312422),
('BSSp3JExJrkxg3gQfJXatOZTbTta8oQSMMoY8TVS', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQnU5RzVtRURIbGplU2ZDSm9mZHJGZFRpQjBBQ0kxQjZrdHlPNDFTNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312045),
('BucLvL2zuOlBuPlu0InIKYY7TSRZmURkOH9YJgpw', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTGlCQmJuSVVSbWx3TW8wY1NIcHRlT0pjYWhvam11ZVFsNFdnSTFTRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308364),
('cDrUR5zbYwLCZldmZYv3IGRzmbEASxUz5PqXLg4U', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWDVmSHhDV1lwR29xU1A4SFdZVGlGYmF2UnNiZ0Z0b2Fha3lMd1F3WCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312463),
('CJIiLYekA8SwM9zguW1inGUUmu65YjWcboZi2fDG', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRjliUlFmS3BteDdKVUlwRkxuZzVaWllianl3dzFadU5yU2VlQzhkWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686572583),
('cYxRQ11c4e4PsRzojPFAxO829aL1BwKZx8GI3rJe', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZWlYYVZxaW9qaHBjYW14bENNY2VUSnFnMlI4YVJibEcyY3hBQWFSeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686311842),
('d7HjGajXgrN8xYpkhQgIQMUFV9tuRpzBcLgWUenb', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaXg1UnhPN3U0SUczYlUzYXZPT1NXY3RQRkllVUpTYVNSS0xQcEJXSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313442),
('DDhxql0DVCrY7qngmkCemTD1CoxJABcz1ESdrSEe', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGFQWGw2NjN5UUFrZzBCeHd0VDFlWXZleEYyMUJaVVN1ajF6ZXVyVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307775),
('DgO9n24loVHQakmMQgF234cpoVTTPHgMazY5oV3x', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibnJyeHdIbGZCN2NNcUxKZ0dkOHVaUEZQeFp5N1BEWUEwQXlQRHNibCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686571913),
('DMBpXhHlJi9656tlY8FvjN0INQZ5LzNt1mBEcdXA', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFJjUzVyMG5sM0Iwem5najFUdk80NXl6QmNNblgzUXZHbDlhTW5tRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686311818),
('dqoQWUHqZ18nojQ6cvvGiJg0D0BDIS1HVUq5egZo', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWFhrWUc4M2l6UUh2UjhGVWdtZW5kQjN1VDBMTWhFZDVydUJqY2tHOCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312342),
('DQXCjnk3v5nzi9kmIUhF2sGtjRSgK3V66vF2sMnq', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVFNFbjhmZVF3ZjVWaEZMa05tSHgxV0hKY2lWUng4ZTBMU2JmQ1ZySSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308181),
('DyI8r11o2SJV63cvWSyR1EM8oM5SoYq2tkAThJsO', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid011bUZyOWw0ZXNkTTJRWXdLVmRhSWoyUXJOazgzMEVSemZ0NlFBSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308372),
('DzCP4k58D8SCcgXH9HR0zIu1TVqu9UVNybqDtVsz', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjRNUEdrd20ySTdobEVzSUpPbVZHdnFkdnRiMFJJdDg1bnVVRHBUMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308157),
('E7QlLrsItC5BaJs6IVNAiVCyBTQ4h91D0cpaUllS', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUhKbEFXZjZzYTFTU0pXajFSSlVoWTV2SFFRUlZGeDVmdG8xSFRpRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310427),
('E7wpgfqwZvrjWErv85KT5oBdZw2YmMtDSTIMi5d0', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGVmMFh4d0VvajFPWVIxdDNRNlpqZTFhUlU5VDF4U1pSOHB3STdBRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308177),
('e8BA6eE9K7c0z0LZa0DvR53TxqO3VsHy5kV1ABok', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXJkQ05kdWEzQTdQZ29OZnY2R0Z5QWdXUU5HakFHeWtuNWlwRk0yTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310185),
('Ef9pAgz3cjgb1dP7bchhBwhKGybZKtV0nPizHIgy', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTHJQY0RWZ3B2SDQxMkREcWVncFdtTEhiZ3R4TTd1S081allmUGVsVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313251),
('eLGX1CxlsYGizuuANKUH3S5CmjMNIVwl53PC8ENE', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiODFjYW96SE5YbU9MV1pzZVJvb2FadW16Z05OeGpPU1ZYV2hzbG9qayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310414),
('Ern8bgKaZCkaZwIBmx1aRYX0cfS7Jx55N34Rd9cg', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaXVuNFJCNXpuWlFQWWxwRDRVVGRabUZPOUNXbGI2R29IRVJnem91ZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307931),
('Esct6GUTzMR2wxa5dPoeF1GHD15ZUNYslayOfeAZ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYjhpNk1GZ214Ykx2dlp0SllDT0Y4ZVoyeXJGZmt0VU9VNXhVWXNldiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313224),
('etbomQ9AYvz7J5yG2OG2C3gQceT3SBHJgBfocQSs', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0ZPT1lyRTFXcEJlYllXcldCbEMwNWlIWWs1SGg4c0ZCdzA3R2doQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686311901),
('EuOzPvr1OBSxSoLxoMtWJgmLqTS5zLdq8N6rM7et', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicjhpY043dHJtMmVpZnZWcHFZT2JvMzFJSlc0T3lQaldaUUNKcE9jSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313234),
('eXfpqPDMuQjjWIjqSQ1cDwDdwnnOG6rhhsRPpcbJ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaDdUSG1EMXB2SnhhanRaMENTMWdrbnU5TFNhS01oWHI1b3AyN2hQSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686311417),
('EYEzZqNBaB4LTsKSiRxNGnYcV9OXs7pNCt2XfSzc', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidExqRkRXMTByWThqOWhRYmRvdHpLNlhrWUQyelVnWUZqcFJ2YVVoMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310722),
('eZlZBdjol0oYJwdnxcwHd9xA2nIT4iYtIP7TSvTY', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQW1RSkVaWWJSMlVOWXJiR1JudUtkRzRySTZUR2lWbDRuVlhZa0JyZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686309483),
('fbxw9sj1KrNP2M4QbyOCA8vEpMH5ZUKusy1bNQgy', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUlHQnRIU2Q1N0pNZVNibmZUeXZMUHVIMHpwWUVCakxLMm10ZjlsTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310743),
('fddxgq9HAeJNQtlUakvVSv0V2vKXgCr6XcDkPsZz', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicm91MHFJRkVyQ0pJRkFyWHVWOXJsTkxQSEVDMGpJZURKM2cwOEIweSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686309473),
('ffgi2ESK69w5LloZdABfhuJ4VDhYec8ICO0sDSdn', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUFrOUI0R1ZnYnJVTlNOUUNkOEpWdXpKU213a29JZW5wS3pVa25pMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312757),
('FWxfNiR6odNLAJGeZiqejZ87aTMaadHZ92fGsRMl', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoialROMzVPeFlURXpPa3Zqdkdxc2EzZ1NiQjFmNklzV09YZzBBdUEzUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312483),
('fYxgzTB40rTjKLN8131a22SIq01Qo1fidb7jfgeW', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickZDNWVZekJaRlhjc0x4Qjk4dE9SM0pqQ0pLMkhwMHE1SnVhVmdGMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313214),
('gGWQusfbt1c33bNbJzFeBBiXg7vJachQeZQFpPes', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTFSUllocEQwNDFCNzUzNlo2d2VrTW8xOHBPakw5d2J3UlpJalp2ZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307844),
('gJD41zjBroWuM01UcC7UWpcPW1LQmJO916tf9CCq', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXQ1bEU5bGp1YWJocVk4SnB3b2xEcTdHdm9mOWtid05OZmF0dDdsWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686306910),
('GoRRtRp4edBrjoVD430GwLxHraT94arv3FAwo9te', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicFRtZGo5ckVrNGRSbjZING4ya2NwUHhOSXhCQTNxUTg3TUMwTUQ3YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313284),
('GtEQzkrIjHxgf2ogHh7eAUKXujYSMpzw9jya84rS', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSU11bHJVcjN1bVhxNXZKcHd6WU9UdlZuREJteWRuaUFmc1hlNGlNbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310735),
('gvbM5BSFPJL1tMrWBscqgrkQLoBwUGuLmbX8ifao', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieDQzQnJwbGRQajNDQWZmMGliOUc5eVJxN3NEVDB2UXBxYmlqUnhnTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313259),
('GW6BGJus071uQDbsp2HkAuK9URswoXb61RXAPCT3', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRm9IRjY1bjhkUm11OHVRdXljcUlONXlmWWdZbXhBMGVWTGV3cW9CbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307964),
('HfsJ0cWYzEt9Um90crDVhAXoUrOq2YyGTr7qnisn', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN3JBT2c0R2ZiR3hWZFVtRHJTTkRuMnNSZDFBYzJGUTNkWk9EZU1TSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686311937),
('hoXUr7vTiAN6sUd0ibvw5xzMOmdB1WmYTVTRBb7V', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT25URUZzVmZUZmVJTTdYV2pLc3dUa3REOWwwckZSdW41aFZzS2lnMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1686582859),
('HplRTHifNH9JQ7phfZLJ5Garqjd0VqT6Iik2iqsD', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTkVoY3llYkpUYVdtNHg1SWpidG52VVFDNEVIbUpSZ0IxTTBaTnJCTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313193),
('hRZxOMqMfHHVwMaKpXsFJmqYHq0uJqQSW3J6vYuQ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM3RzbDZoMUdqYWlJY25uTEt4TkV0VmVWc2QwSTJ3T01Sc09kT09kZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686306883),
('hSoMZeso9CvYvRwGcujniaTkNqLjT2hbc0WnXWjl', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUpTS0JJUjdEMnN1cld0TE1lY2NLQ0pMUDAzMlF0N2p1N2ZLTWZ4cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686311793),
('HX9t9ZWvbP7VIF99LUvH0SLzP1IhQRRohfmAH4qu', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibXk3dHVMYUhMcHQ1eU5ZWWRiSHJuenp4WHdURWc1WDFqOVRDeFIxRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310244),
('HZOmaIAlzwCDpSkdkg27xfFBfmdW2Rz8QY0pFc8c', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidzJEWE9YSnFkVUlYRFk1bkNMUWg3TnU2NmZYbDlkZGNOWHFDOWF5bCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310857),
('i0i7aP6bgI52hs4JRFpIdqElu5K56yZi4UhOrERo', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSDdzTVBLaUkyVVBBbGl0aldGS3dnRXFJeVVSVnA1RU95SkwxT2c0VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308385),
('I57mLVMXeNZOiNF54O60jj6nXZgrxs4wWbtPHMTl', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVmRnVXZEbVZnWWVwcGJUVlNxa1drWkd3R25telhHeXZYcEoxVGVWRSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310308),
('i9SgSx5Lhrn5KMdPwM36huOWYTVbOYgtwaPpyIqa', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNUxObjAySGZMMmZwMHhFbWtsSGpGZkpOUDBLM1RjQ3k0Mnc0bllTciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310338),
('j4MJi3ozmr1iUGxIRn0aOS4tbP3urygeDgMWgklQ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWjVkTWRtY3M5cEpqMkE4UVVYSHZaWWFyZ2hXRHBvT0hHckYzNTJnUiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312646),
('jEhXJv16lI4fdfjzL3LoYl1Hjbt4g8WkmEGKtorf', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVG94UjNhMlM3bkl6WWxRMXdsUTY5elB4eUhmQzlMUHd4YllOWWtwUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686311352),
('jffMg948RNoQz5WWrOLmEPvAUqtvNp6A6FemBsYU', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0tNckcyV3VZMjlHRVB4UzhCRjNlNHR3eFRMRlRUeWVRNTZZUWNxdyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312542),
('JIIHuG53pvgBdRyur0uzHpP86Q4VAoFowVV0j4ce', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYjZ5QWNyR0RRTzhvM2MwYmZVQTlNNUdURFBYb1JJUm5tUE1QYVl2VyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312523),
('JM1IUxMxHICmWaTFnQevtX47jAawMxYuVTiTVBAr', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUWtrMmo2ZGtvTUx1OTU0Q3dIYVFvdGo1eW50S0t4NVFtbG5hOHE5MiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310064),
('jmdQ6uASi8l0G9TANt9UDE9FAkbzPxJ2QzsFZcZ9', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidlZLc1RIY3dJdWwwbTF3WlhUeDAzcE5GNTlNbjZVUm5MRVNuYThIdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308352),
('K6nCykNqOtYcRgWjE9oQ6IZNp21oph5jtB8gdZ0W', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTmdsQ1ZPMWVWaU9MbzBtTU95aGtHd2xRWU81RDJEVWpuZ05WRlpIQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312336),
('KE0cRBosGFst1BtIRqsQsg8FdXNCvRh4XvAamOQI', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0ZuZzBJeGpzZTJZekYyZTlYYWdSbTVrbXdvM3VkWUk1VEx4RkxTYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312618),
('kwyICCPA5pZlFnZ7cEbH11Rm2oufaoDAtXKgsgkg', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidjJwNUNXQmNMVVNiRnR2WGNuMzJHR2V1cThqaXBoQ2VjejBYNUNENCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312435),
('KyVHL55nsqkqVEv4PJGY9cUQNkPAS1vlX6DzYAvC', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNkNwUWpaQmVyY3BSbGtXbFVFb2Q5WEhTMkh5ZFdzZnZYTnlodXJyRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312687),
('LadmdBxt0fLOvRGznxrrfehlafjVEH2jDgz5K930', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZERrNFlseXlwa0duNVZ4R3I4SUp5MXdlQldtSjdQcHJYU3V4WmJRYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313414),
('LaM91jRqnmlFOX2vmWuCsnAmnXvxnkljZvSLwwvu', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUnY0MmJ5U2oxbktLZ0FDcFlXeVEzZlRJQUFGSmVxZEp1dEoyVnVXVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312779),
('LeVD5SRIRgHKWEao4O5si5ybmxHl9LS5SRrW4ulx', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOGJQVFljbHhORXh3cHowZmhFd25tR2h5VE5DVzU3RFRZT2lXbjhhNCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310397),
('lFazM3sryoKwuz8Ija8Ot9tt80nr0DjVGxC3Yaxr', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV0ZKeUNFazRGbWJTRUl6S3NQMWxhb3FPMUpUc01IZmlwQ0V0UXNtNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310780),
('LIXrZHDTFfOfZA1v7rI7GkB8DBN3vDEmDmCCHTJq', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWwzbW9LVmtoeXVDaFZxSW1SS2hOcWl0MFNnRGxVT1VSM0llNURGTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307850),
('lj3lXUdr5OuN6yZvRPzFWRdWTWJDFHHcy8PlfkUS', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNEpXTUpWSlJ6R2ZzV0FtRmY2M0Q4alkwUWw4SnNVQ0N5aW5UYnJuTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310365),
('LkyoQuqK5T7tJVG6vYky3kdg4Zc3Cc0lrigjVovt', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOGJTbEhGZEtIZGZMQjZjbWtRQ3FENEZEcjYwT3FENTFzUXh1a2ZYNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313307),
('LMx94DMcCgdsjjgj8RflEFLFdD9c4rJtDQjM6zre', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTlBMS1FJSFRiNW5udnZ0V3pNdERxTjNXUmxoSHBkRXZjalpyZ2E2dCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312002),
('lUx7wnyVCj3T2I0W2YnToXi0vdN9BLoKrcYKGkIb', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaFJabkFVc28wdEpLM3BZZXBaWXhzWUdwNmRxRlFXbXNoVUc2eTJSeCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312773),
('LZxqvHKlzvAYAwuTLRfSqEuGZJSK30tZ3masa8JL', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRHdKY0NqWTlxQXUzSFBVbzVzTUtKeElneEhxRWtQWHAySWpSS0FmdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307882),
('mlkolZHaVhDB454eSckjGwICn8lGJuIyjpZkdUE9', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQXlDcW9QZFJlMlVmMXU5dkQ2R2ZjWFpMR0V5a1hYbHBXNjk0WnoxYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686572565),
('MoasvDZUx7JzbO9Nitt7UKeHZk8kHJOdbaxBdWWt', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWnA2ajR1SHR4M0FpbEZPYkZPV3ZWRTNlRkJxeTJBTHJkOGtVaFNHUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310689),
('mpf1LzjFOoF1Yozz6IlVeYeZGf6exGojtQgLv1PQ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZjRZNWkxRzVLeFlqek4yN0FFWklWNnVhNWwxTXk5VklDRVdBTnN3SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686309369),
('MWZZW3eSsGxo8NsWXk997bEPmXw5dmdrc7aeK8sT', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUTZzOFZjTlB3ZzBZb29Gc3A3cjZtQ2V3c0lhNG52bkFZUndYc1duSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308397),
('mZJfzagMYtu5aidOghhic0xxQ3lgz9iCWmSyGLa4', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSDRGcldjb0ExcENpRXlJbzVLNjdUWHBHQmlBWmszTnpIRmEySWxHbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310551),
('NO3hHbY5aKz824FrhdVrXfpuOmKfYUN5EWGw3H6p', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQlUyelF1ZmFOdnZQMmNHOGlOU1dJenlNUzFodjUwY09kc1ZIbUxPcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312680),
('Nwjyv0Q3sLdH29uMOT5snDkxEDhpDsEy1UsKKYzH', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT0ZiUTdvbGIzWXlMS0xpRWVQd1NtelRWZ0dlczJsRGg4b2tSbXpVWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310884),
('NxT22NWoTfftRuYJLN4huBMlWrSBJ79oSI33O6WS', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkI2WllxODFkb0x2WnF3MldIdFdYa0xFZnJzRmcySkRSSFZZV3dnciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308263),
('O2x2zGISleo9haBN3gKV3GTHMiCf4io1Uro3Blei', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRm1pQWR6YlFPNGJhZm1uZzBtVjAzQUtFZW1UYXkwTmtIWkRCUXNBbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312799),
('OaJz2rk5CB1hrCeMxgmYYTwt4tutwuAnQvFKR7o2', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMDBuOVRudE94T1RKRHRJTTlaWWpJSU4xTDFIQVR3cUxCSGpFendPMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310849),
('oCx1CDDGB4CzCbFapDV4Bho6DWjIVIvciEi4zhb5', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRW9kaGFyNFpCN2dNUDVQallQQm03bWFWaTJua3A1RmpMOTdJSkZhWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310528),
('OjtOoGepxexMsBwvoD1Vu0mbkYDK33qSOARqX2Ig', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoia3Rqd05CRmg2UkxXMzU4UnlqRlFHTHFhWjh1Wm83c3NTTFFTbGNLQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310259),
('OVkFHBfI1OJiX48bDmBK40oE1HdneooG8JEUVyLh', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaEl2cmVKUmZpRHlLSnYwT3Fud0d0MmJKMmE5OVdzaktMaFM0S2s2ViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310826),
('oVRjcXQDvaZteDzq806kp1MiRG256ZVGpflvmSTh', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMU13bGptQVM2bkI5c0paa3V6T1BtUnBaMnlIZjBZVnhsNGxIaHYzNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686306993),
('OX13pY0BAm1nb21bZIhAUMNnNHiDYA5iMKu9A4jL', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSEg4a01sRmZ3UHFRZEQ3Q3dBdU9jd2NZaDZlSWZUUWdBa3JIT3M3NCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312299),
('OzrUPMeAvH7sA8Ap5SxcDjTix4iIBTj3JrdEeefd', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieVNMd3p3VDhsdUJiZFJPckFzTFZLMWdNdnB1VEJEMFdlVVpCQVN2RCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312660),
('P6cwgJCxavN2WYPSuecHrlhQcgIyfwYsuXOxClPC', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUzVKa0VvcnF2akx0WGxaVW40dDlzWUZieFhJbjdFZ0k0TmJtclE2USI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308268),
('PCMgHAr2qp1B3PWkAvIzYIYIWeG6S8fXbHYYACTx', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTnNWTVJaS1Y5QVZmbDNpelFKNDUwbDkzQ1VZQmo2MVlYVlBpU0ZYayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307828),
('PD7V3d5CmAsjVUWo1wir75wa37S4dmA9YfFfk8A1', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR1Y1WE9VR0J4V2xIMVFYTFZjU0xsUnZKaFpZRlpVbFgzOTQ0eXpuWiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310161),
('q0IDtoGGj6TuE2OZ8UDn6lydL3S01eltKhwlupZL', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUDRUREtrQ280cDh6MWpJWWpOZHkydzM2WkthODN5NWFRNHFscW5qQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308167),
('q3igvqZrNAwf4oxSms9e9Jmq0rPy4DV27aoKQqbp', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSjFMRjJVRDk5Q1pzZ2w4U2pKVjhsbEU4UU5tUDk4QUJicHFBTkNOWCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312272),
('QMv6RV2u2LrgSP7XOon6nyk1cdCdkH5acVB1RjNZ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiclJwOUkwa1NUN0djRUF6MTRUdGlyek05YTM1Snp1MHlUOUpDZjNQbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310514),
('Qw1xHiXtGCf7x4O7ohXNVmnG1uSnP8LyJ0xhFNg1', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTFJvWE5FTE93N3BEcTJ6bVJEbHY3dHdUOGx1b2V2S09mY2F5MURnUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308213),
('QWsOpdQpyfoXNhuce48TsouUa7krM3qZDOVMzXmR', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMm00Y2NxUUZYN0FBeFUzMURTQ2FDcEhkejl3dEpHM3lQSDFtMzVWWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313424),
('qZxZkqvlqQkyMzR2zIzsbS9aRKDlzeMPJRNeyg2y', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYlpyZFNKREM1QmRDQ0VBakY5TUo0RUpabmk0djdoSFhiT3lTVXg3YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310773),
('RBPIKW6xz4cpWJNQ5j5wE5X4GqzdbXjVD2b0bsFV', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZGdZR014WHJhWElvcmdiMUdFa2VXcmdFb0ExSDBybWhpeDNteEkzVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312809),
('rfamwyHrf4Fz2WDa4UXoaYlEFOWlebGnUmKOlylQ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaFJoYnNmbXI1TlQ5eGdwVmtUaG5GWEt6c1VQckhZa21GcGJhSUJsbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313276),
('RmQTBWiAGRGckMu1SsAl6TuytI6mz7THW2555Gcw', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWXo4Rm51ZU5DcFR6bUVvbDJJdEczVWprSkZSNU85MVFqM25nV0gzSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686311763),
('rXv03Mj6iIl3Boc1o3ow8dDuFInO2JHFHWLRjjH9', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM0dkUUVBQnhyV1pXUm5JR2s1bDBoZ2JidTFYRlZOYTBTMEwydkQ0aCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686311881),
('RzSzxag1fwW1TagKb87weB2KN4qThjAIUQQO0pZI', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRHZtZ1hyVTdBMzQzMVlGTFVGNE8zV1FZa0ZVMkFVUWpGYUgwS0RtZSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686309398),
('S1YintxWBxsoAFmMtaC2Ffhs1RJ2hhIu9JqFu7OA', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidHM4TE4wV2ljbm9lbHBnbjEzQ0tMazFyaVBLV3ZuWFFDUm9KcWpweiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310540),
('SiFUFa8UmUNfudigvIHLAn1veZTmedx9ZWQhf65J', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkZKeVFaOHY3cVdQRDJ4NW9qeG1BNEZpQ09ZREFwMDJzN3NFREZtdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310231),
('sl8t7Sn0Rq9sl21GUrw2yGdee62PjFb3NsiSi0lu', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTlZ4S1pSTUVpWHc2eE5CUHkyMVR2NnljN2Y5ZGE3R0VWMkI3MGhqNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308233),
('SPIegfNf9xKX43Gj2gw1BDjcFUXp5QjNQcX4c3sA', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWhnNkZ4bWdPQWZpT2pRMGVKOExRUFg1eUhHeVFrNUE1MEd0NlhYTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307753),
('sWOTaPmXyO3mqn044JL9glTTScTR6G1rrQIAJGwN', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM1YydnVGcmpWMmRjNERSWU1wWDl3U09OaEx3RTM4TTZnYjdIZ1dsdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307711),
('SX169FvnHLPbAjHkucszU4L8g9uoJJO7wqi4VGYn', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOExLZTE4dGNydFpOVjNScWNPNXJ3Z3ZKeHNmNEdWajRvWm40Q05hTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308319),
('SYVrosJ1aMsp9Qi5yMGFDnDCmkZiyVMvLSaA6VSC', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicG91MkowTlI5V3Q1czZVcGs1d2NRcGlaR3IxWGQ5UE9ES09uM1B3YiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310817),
('Tj0nn7D8JX7JLemdF7i45pzquIAXQHDjCY2DNfHh', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTjRDWjRGbkozS2xyNk5aMEFxMkpzd2MxaklrT01ZWEVQSGFMM3BmQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310752),
('U320hmNZpGECoJKoK0jeo1nJ18adNs9GPfHSh9mC', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTkdGQ25aTmFGMlM4ZjFiV1FQUGhUQWJrT0R5Tm9ZandLVWM0SXJkcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313347),
('UEqgcEJCnhV2s8QDV4xUEMdP9hVzyhP4LuDyct4A', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNTBOQWhxTlFDV2VoTGZ1Tm02NkY1d0JQV0ZvSHIwSlVZT2FBZDBRMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312281),
('VetpD58X55e2XPfxOJqeeEtgpTdBLHu0bqsBxqbL', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiak1hYzEweE4xMmpEbEhUMFdUTTFkVTRFazQ5NHBkSDhCdDZETzVHSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686311399),
('vfc6x6s2s8vzM6wQtA5ZI7hUle1zWMZfffsEFTog', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSkI0SXlkZkNSMDJVMXRuS2N1S2RieGpxMHR5Sk9GenR1UmV0MHFXWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310796),
('vJeE2sUnOmsgemNiWi0GWDzTr83UPhcsWkeCOBVB', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ2R4OVoyRjMzU3kyV2lXT1F1YWlIM3pXVTlZaEx6SDVvMHBFclE5SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308111),
('VqyI1obXAKbyf7ZajvW7lCIIwzcSUv7uj73znpyD', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieXFSa01pQUlnUE9wWng2cFhOeFRJd3BlR25va015YUZzeWM5VlJacSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307686),
('w1Tlef8pTjezK15sCSaBH93ggZeJVWFyWznTNfBI', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWmdja0RoSDJUVmlIek1rdXpuMkJYODNVaEpCd1dpcGdicVF0SktDTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307791),
('WAEYK7YEVYJqJgNgDvuPwxRqQ22fj26iRiO6Bhxm', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUlhQYmM5OWZDNlgzelRDaGtySmYzV0tKejNYWHltRU9ldmlKemRTcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310580),
('WEjTv3vafBejHm5plLSUjDZILgksMaovghz9HpU1', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoic01Ea0VMalpMdmxBYlgzVTd2V0N6VnRBSzBZOEtGdG42eEU0UGZscCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308257),
('wExAB8JvcjgxAOlF0CShucWqwOqFJu5UEeyGqznI', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSVZmZFdIU3gzem5lWlh2NmZUTUl5eEpQa2ZISEV1U0hWeUI5MGNCVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686306871),
('wV1w8MlIv7Fcf314LVWPE3madaUl4PdjYxFbR0ZV', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOGZGbWJaenVXUlZXTGQxZUR2eU9BN1pMRnpKOE1zZ0dFTGRKNWpjSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312626),
('WZ4UNnX8tQ5PgLbayXvDtx01hws3QJ1h4aSbvlnM', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicElXZENpS3Vwb2tKaVBBNWtwT1l3SHpZMkU1NnpuOTVuWW1URjFFUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307691),
('X3RBwCAxjMN9zLsS3hjoBB8Fgh90oE7uDChwW1Hr', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMFVJelVMM0E1OWt3aUFNNE5UbmlUOUJDZGZydkQ5eVNveng3aEFkMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310125),
('Xg3i4YVHSFnnhvbnv6NrJFrMlRHXtT8CHO0qxbPu', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib29aMWpoNXdIc3pvRktjMFhyczRQTnd1ZG0yTkNSVzh5dVhmbkJubiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308128),
('xUgpJNLk0DeRQ1OYVl9XZYp6kP5Y2anbV3utrCiY', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkpHdGJsSFZCRnZpVlVEa3Q4YWRpWVpsaDBTVlYwWUtzWUEyb252TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308203),
('XXwYasl4w4Xy8Ks9mT0U9nIJ4Hmr9vfamReg81EE', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicFZoVnhwZmlFcnlqZ2xPZ1dwZ3pGTktteUR0Z2xveFZwMFJqeEtXSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312787),
('Y06B2r2ehfq75GJCEHj1Zfh6JcPYxKPPFQoC9u9u', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYnRNT2VuQ2tYa2JyS2NBa29Mc1poUzh4U2tQb0d2TzJXRU00bnVjZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686313375),
('yAlc4xkIgDuF4EwWmRN9zxhhDwEEqk5ryOYoCz5N', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiT0hqM1ZvQ1hhYXh6TzlLM1d5QVZGaFZHc2lrbVp1a3h2YTRjVWJGcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310835),
('YaPVkaNTgU1HSnQgsBN39d4IQLjX7imZTv22Rvgy', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS2ducXZMWENLZ1FHeW1RZWNaYTIxbDZZYWRMejZjNXlNNzhuUFJ4ZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310148),
('YiJJbP6E4r0aVlSMvVxgySa5bNoEAKeQT7plj4Sh', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoienVkbjhJWXhvaU5INnlkMU1JVzJrVWhRTHc4MzlxMGVXUkpyS2s0TiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310405),
('YjPVgr7avG97SUfnxUKzoDNxFvCyPpTPRuZdP2Yx', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNjk5d2NoRGc0dGFveEprMHBGRDI5TUlYNkpMME9NaU9kUkVRbzZNTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686310255),
('YX8Y36yKqrUsCi8cO4JwmbTfjGcQgTqVJg1RspS3', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZU5QYVVRS1RNcXZBMzVQSUxxcEkyR0RWVGUwZnJJZ0w0TDUwU2RFdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308145),
('YZzlWDfe2c0H2Qnla7ycVQRdRONZUi3uNf5adNCA', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNDZMV0hzNzNTQmRpYTZHODFVbllpaVAwSGZUNlU4dVNWWElaNldITiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686309433),
('ZgiEJHRDBocfo2XqeBJVhQCeyQ68cWuTTl9K5yhd', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicTl2Wkx3dktqY3o1TUxySkhpUHF6dGczZWNON3ZVZmoyN054cUJtbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686308102),
('ZjN3BYhzsr7t96Mn9vcNnkKE1wQAmesiJU3NoUX6', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaE15UVEzOVZPV09XdU5GRjhpNkhjR0FxV3RTb1hIZHRQN0x0R01ZdSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686311309),
('zjZt9bdZkelLetQXeWTJ7rwnIiCc78kOQNgHTnTk', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ21iYWgxbXltYWQ1MlI1ZEhHeVNkSXBUZ0hDUUNOYVQ4T1ZMQ3dUaiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686307730),
('Zqdy1gUGm8Tf5yda3Znd485OOU85WwIIJrFDqOno', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWEhUSWdlY0M3azJZRzdtY1RkZ05JUm9kWGVzbjhkeVNqeUtMa29QTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686312314);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_office` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `id_office`) VALUES
(1, 'admin', 'admin@gmail.com', '2023-03-29 08:42:23', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'aXOc5dgvLeILyFI55WjtUkQGmyefT1Y080Za0TzYO5u21D2X7saYNX6lTUW9', NULL, NULL, '2023-03-29 08:42:23', '2023-03-29 08:42:23', NULL),
(2, 'user', 'user@gmail.com', '2023-03-29 08:44:56', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, NULL, 'xoTTZQjW7MPvYWigV78VaCbtXDWvx9R5Y9LEsoSmP5ydeRkepsKBUSsivKbY', NULL, NULL, '2023-03-29 08:44:56', '2023-03-29 08:44:56', NULL),
(3, 'reda', 'reda@gmail.com', NULL, '$2y$10$kMUujOMw2.7JewyM6vp9X.MELz0EftuTkNko9bLTqKa6u..g5PAxC', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-02 09:13:20', '2023-05-02 09:13:20', NULL),
(4, 'ahmad02', 'ahmad02@gmail.com', NULL, '$2y$10$SlUGHH35ZjN263rxz/x/Me2a1NQQFW/gRJjKgbPyBzYFMGjz8vhie', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-02 09:13:20', '2023-05-02 09:13:20', NULL),
(5, 'yassine as', 'asyassin06_outlook.com#EXT#@asyassin06outlook.onmicrosoft.com', NULL, '$2y$10$G63FPPf33cHGoz6jR0I4s..PvUVLKXuRSTEePbvjftczmf61LfbvG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-03 08:13:29', '2023-05-25 07:51:04', NULL),
(6, 'zack', 'elhossnizakaria@gmail.com', NULL, '$2y$10$5otqcsVFXW8qwNkhlSGJ3eaMR3ujNEcaA0EgUJTxwDCdOJNfoCUVG', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-25 02:52:04', '2023-05-25 02:52:04', NULL),
(7, 'test', 'dda@gmail.com', NULL, '$2y$10$vViNAo4AG6mQExxs15auUeifVTo87sjpfBVic9.vIIz7cZ10LWFhS', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-25 06:47:29', '2023-05-25 06:47:29', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `articles_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categorie_id`),
  ADD KEY `categories_categorie_parent_id_foreign` (`categorie_parent_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `ms_graph_tokens`
--
ALTER TABLE `ms_graph_tokens`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Index pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `categorie_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `ms_graph_tokens`
--
ALTER TABLE `ms_graph_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`categorie_id`);

--
-- Contraintes pour la table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_categorie_parent_id_foreign` FOREIGN KEY (`categorie_parent_id`) REFERENCES `categories` (`categorie_id`);

--
-- Contraintes pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
