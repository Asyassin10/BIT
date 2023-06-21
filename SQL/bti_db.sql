-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 15 juin 2023 à 16:55
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
(222, '90', 15, '2023-04-10 10:56:01', '2023-04-10 10:56:01', '90%'),
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
(258, 'Qui sommes-nous ?', 3, '2023-04-10 11:36:04', '2023-05-04 11:40:43', 'Qui sommes-nous ?dd'),
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
('2JktvUgTrIDLtre9JStq9JotdFZcD7kE9eWRQnkt', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicGZzSG12bGk2bnViOFdpMGNjM01ZUm50cHBiWjhGMDhSQktMTWc3aSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686834661),
('37csqUp6JqrYoDKfKerfwAmUVO9lTx5wd7VmIogx', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaVJSR09QYjFHa09seExmMlFJTzhzajZFWG9qSm5haDQ3SUpwNndJbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835861),
('3aM4yBj5Sfzd8YdtBWWa0UKPISQmpHFy37YVSvos', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0VIUmZJcGhWUVBTQUZJRFg4eTBUcmlNWHJQN01GczNNd2hCYTVzbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686833855),
('4fKCIOlJ0aSmRwHy2e1BVKM4SX7VQcqY1mHIH3nz', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicFFiZEw1Z0NsT2tUc2lXZHYwamV5bUJPbTRseDZkT2lEUER0Z3ppcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835211),
('4KxDo4HtZbobkX0RIJ8grHQMaY0Atn8ctUSDIJSD', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoielZhOGkzWUQ4cTZubUxHMzBCN2RNSkttbFo2dWxyOGxtMnNObjhBVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686832606),
('4W9LES3P4slnQnFmyNDketNQeIUpJtmuUZjJUEkn', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibVFhU203REZkMUxoVE9KU2dvbHplSUwxWmlwZXBMa2xId1ZXUGJjMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686832616),
('58JRYaxkge7IGoUP0Mo9DryUtDtemVh7uOwTcPsX', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUVhQUVhtQzZaWnE2ZUNXNUdWWlJIaWVZZHdmM0ZGanI3UXYzRUlUYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686837825),
('5O9hovrhy4SqbX6F7OXkr6sARbHPolQ68rAVLPjf', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidWxJSllGU1lqWlJ5TDBiOGNSajNjdUM4YVl6clpFSVJQSkNOeloxTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835003),
('6P4Fv9fqeW6fKijZzZaKgraw8ipuTGVsbpp1chel', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZHZIMmVUcWF1cjNURnlzcnc5SzdyUURRSmxyZ0w0SVZKRUFjdzZycSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686831801),
('7nHxKrfMDsbT4iGGKOhY8iNF9DOHg6WUY5qkS87X', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRmJiZWR0QmZJRFI5UUttMWdEaGR2NXUwV0ZkYW5Yck5qSGtDdVgxdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686832945),
('7OTbTWR1L1cLeUXfk6GlrdvLZxi42d71fjQ1V0A6', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNjR2eGFXVlFUNFZBRVBQa2pqY2U4eVBwQ2JKVWlGeUJsbExZSlZpcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835076),
('8AqKslhHXBKx2z8j4RExxqV9m0Zf89nv7HpmSUTM', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN29aU29PRWhaZTVvdjMyeFgzWkVvZW5WYnF5c3dGa2RXS3NLUHhDZiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835142),
('8GKjYeZnQZKmGPioi1vlN65pWxMviq89wvvcZXtK', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZjFQV0xKREZjVGtJU3QwMkRCMHpSOWF3SmJ5djN2eFFzMllYWlh3VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686828040),
('aV7Ls4JnoD09OkyjgucTuDR99cWzWuKDEwPxrdQg', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZzltNmJINVVFd0RRVlpPWWh4V3pjOFNsUG8zOXVZSFhKTW1WVndMcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686832599),
('c35mSSKoS1rgT74HPz3SP16m71vsFDRKh78HEOqR', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaDI0bW1KUE9zd2RzbkdhQW5sZUszNWNyZ1FOVllBZEJ0RVk5TWpDVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686834220),
('DguPhAJWRiVwhwgKSwi8MNbQDQUd25xk4iFNjKMK', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiS0pkd2JxZzNIcDBDWU9qN1ZFWUNvMHRJWEdrN2VLN0lkUmhyUVdaayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686832931),
('e1xU0qcIKdhyHy9dn1TjSuSdYDcVQKjVU4YMmxcu', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib0NGZWNHTnA0b2RlYnVZUVZWYWc0ckhVVlpLQjI1alZUQ2pTbGY2UyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686837806),
('emxL5CT4DTKHwq9z3ZgznmOywSQm1onL8yMp1zJt', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWGtwUE0zME1ZQ2RBOGVVSzBFbkRyYzE5dHdURktXYjZuY3JWcnVtQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686834678),
('FFp6r9ugRJprc40njPNqZdUQ3sbi3WvNSvKCp8km', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZXMyeVBxTVllbWRycjRSMWtOeEJvQmk5RlIzS3BNVVhkS21JRU4ybyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835925),
('gFXOyB3DrozKfgfPid2t8nZh9ELJm4HBztYEJCa5', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZWV6SndrbE5nTFlXSEJqbXk0VGxicGRKNkkyTnc5cnEzeUR0d1l3TCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835964),
('gIPtp6rmtxZgZRqskFI4HWlwbaPSrXILKWkP2iCH', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZkMxWWpDUUo4UVllOGdRN1RqTVo2M2NzSkd2OGdZNW1DOGxxV1ZTRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686829742),
('HzJwhiMwngkAKoQtN6AMjX5H4f1jD1ir8RylyelP', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiczNSZFJ4ZzNsbllhNHluYUl2OVhBNVhNNlZFRWx5VkFqVmVVNHNHZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686828171),
('HZL5ghfCkezKMKxddBXVijaZSlCgvfjSezakHxk7', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicE5aZk83OTZZREZKa0pHS3BOR3dGOFlDRDRyZzYwQkNFbzVnNGljUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835038),
('iQcZxwQoWSNRtKEFloEtZOIsuzg1PKP30ZQdAMPs', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRmtaNUFHVXprQ2RWSDcySkdxSjR6bW1kd3B1bURhdE5UcVNnVHNtSSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686837832),
('j9VDKeb5PyWtA1M7BXAwXZb4Hi78YZvaF0sCCMeS', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2FPd0R5MXozMzUxSURKaUR5QzhKbEh0RzEyczhSOEdPbkl0V1RzMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835870),
('JCdSzDyuieQFpzyDokTrbW9Dq7zbTAWtcIEu2NyQ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQkV3TEExOUVoTUVadWZKSjQ1N3pvNTh3VGtPcXlNcXI1WmNXUlRsRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686832635),
('JGH1DTi7iZAhvzS48cqK72N0FnqcJWYfqX6LJPqy', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibnFPZGZEck1tUXZtM3dPbWZsTUNuWGpRbHJCa0N3bzVrRFR2Z0JJaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686832980),
('jzzDIbcXka82Vdt8vCSWDdpBsZCZiKxhWQoFOxxl', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQ0NpUTd6QlV1RVJFdGpiTUl3NWs1OTU1b2ZCTThjZWNnZndLWGQ3UyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686827694),
('kC3pS6gbcfijUuGbkNh1kzKpJzcVnoT793CAZoMy', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNjJ2ZlpWMVp2bUM2SFVQdTFwM3N4UUZLZml0SEFGc1NZWFlNT3FpaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835131),
('KD0dnQGz8ZwDbEMe6wNYGzrhRC0Fm2nbt4jTSev4', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN0Q5RWxscGt2eXhKT1F6NjZva1FJUTFKamNNamRjRW5EZTE4MjFKUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835921),
('mDtSUdN5YJD29DDF1rugzrYXWFM1Pl8BEcq0e4DI', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOUNvdWl0dG5OYVVBcmxIUzZFanVDMHVobG9pNGYwemJac3FWYURBMSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686827644),
('MhgI0ekSZgOT6CjfDb8GLdouWTRtnb9MQlTttsUi', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiV2QybGRBck1GQ0RIY2daSlRKeFpQaHBjdDRpN0tGQ0JTZ1pBcmRpQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835027),
('MxDB5cWm0wAJyaPl3CBRsX5cZsuUxhQ5Q2I220sI', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZjNTRlpER1dKTFdIT3pFS00wcEhhbGJ3Q3YzQTNKSm42RkVMb1hKVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686827235),
('mxppNppQOgnfolZsPuImIfz4LXpFrMiup2ye6xhT', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiamxxZlJ2bk9Qdnh5djA4Yk1wejlFNWJibXJxVDhCSTBXWVRvck9kQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686838643),
('NE5WZV0Yo29WMexK1sHXxsbY9iiGW8k7g0y9mgnY', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicklRNnF0VzQ2VVlNeTRKRG8xNEpNUUVZVHVxMVdLSllYcmJTNW5FUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686828816),
('nMlLgLw1cU6sUQcrp0iGYXn8tU5RH1SDqwYfSIj4', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTENpNGxzZjhlcVlhV1d2ZGRaUElxYXNiZFBlV1I3REd5TkIzUnI5dSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686832561),
('NQgCkPow0ybtBM7EB6BS159Qq0yh78dIaD93mOoP', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWW1NdmltcHlac2VOUzFuYzdwQ1R3ZHVnZlFWNFdRUEF1NVAyZEdUVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835935),
('Nzornz1t48L4kOqlrmZtU8b6wp3tVLHvwv9iGB5x', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWFlta2prbzRxZmRGMERvY0hLMDRLOTFLdjZVWHhZblBZcjBDZnVMVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686828081),
('oToWTTkEOKA3dadgP5cfQnFM5eAw94FeehhZiHh5', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidjJVR0F3Y0ZOc25mdkZKN2EzVWtKc05nUWZDa201V3YwaG1XazVFYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835088),
('OuVxNxIIRa2PEk1nLxE5IunDnMhyiNCQ7pv0nKWs', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicW9VSzd4dXM1SDJlOTVzNnplYXp4elFYaHRjNUJnVE9ZUTlNNlg0MSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686828203),
('P5MEKQNXgRQfexhPOpSc4JlL78EeDvuzlA61eZBa', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidlpkN01jWWZlQk9vN0loUW5qZUhyU0JLVzV6azh0b0VPWVc1WjdibyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686833110),
('ppqVb12htdEvPAZP6jUa3jFGxW2OQQ6yhrO7G3JJ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZmgzQTI5SzRMcm1wY3NyTjFldkxLR3JkR2t4OGd6cUhyZXViY05meiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686832629),
('QfIuLbgNiakpBKVSxmEkAqAMy4Lnb96TibDVwEfb', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOFpsSW4wVTVHc0RsOGN1VjFLbmk5S2IxcGwzQzBkaWIzUTRxMUMxSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835018),
('QqakGyMBhGsqDm6qOF7Jbx3RVJp8muIgzDfCZKZy', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieWo3MFZXcUdVdkptZ3V4ZHBaNThkM2dHakNDbDhYV3NHaks5Sm5nYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686832622),
('QRdwxlO0rMQEz75q1lJmDBC3J3x353QfXGq4g3At', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibWR4dmhLY2RUZHVGMFZVczF4OWdZVnliWkk4NEw2dUdxUGdpU2JBayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835057),
('r1mYl0xKnU5lTv1AS6jFJBWeLpRw1G9V8V1FzT0G', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSUhXejlQN09rdEhUNjQwelo5SlFRNU5raU9mZnNmUlEyWG9lc2FiQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686827247),
('stq9AG3Q6K76d5NK0xhFZ7S8SD7zLhCwBEqgIF4f', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYlRHWUpGaDFCc25OSU0zaHQyTnpwUDFDa0o4UVBoQjRMb09qU21xbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686836885),
('Tfe6Y7o2ZPpdnOINGEHBrmg59vuXTlkW6CYD4KBs', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjBQanFibW5LbXFQcDdVZFg5YUt1T0N4a2lYSmJOSWFYMjN5THFEQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686832611),
('Ub3SgA3Y62JtM9nLrCbmleUr8qmNapvgwMYaB9KI', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZlpDNm1jWEJjd0JSQzVGaExYb0VBTGNDb21rZUVGdFpjY0lnM2xHSiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835199),
('uccQrxL3MEHlFf1PK8Urc1ZXYiSoUHJSPGKWJkFd', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaHppdVBZb014NHJtR2E4eEpZY2JTdHVWajJjcFp5anlCQnRqUGxrYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686828503),
('ueXop1be1rFTjTUKJeDnFt5fmbzQMtnZTchJQ5kk', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY09YWnZCV2U1R2RjOTFRSm1taWNUcEg2QXk1MGx4NzNDR0h0Uko1WSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686828125),
('UfZpHkhCJ50l4cmv2QvIXe6sqSEQuSmYFQaFCZJz', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoid0p2UklUd0k4RGN5Tkd1TGs0Z21WNXlOb0lzVlpZWU85bUE4b1ZGNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835050),
('uUxvTwhnQdOiDyoqN8lP16NYtlWTC3LxBGOiLP4t', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiekcxSzNXb3BWV1hGZG1FSllzeEdSNzg3Z1ZyMHEzZXBVVlRodnRwcCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686834140),
('vdw4erNg1ybwhe3t32mg2AD402TtPoHrpwvdS6D1', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZm9ydDFrWkxOMjBxVTB5elJXR2dvQVZNVWRtdDd4OVM0Q253c3hBbiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686832967),
('wEVKpNDFIlL3F8uPSfzDNi822b8VcECKWHwHWROS', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVjRHc1ljQ0VPY21wOW1NRHFoY3JxTEl3bHg1WlRjN0diWW0yZkpTRCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686829723),
('WKsoZzGzzLlFOwvH1AHzz8BA84v6vwOFyyMOuDJm', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZVR6bTcwNXNiclptb1lrdzRZRlNDb1VBQTdHR2ZhNUFQVDc3VzVtbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686835156),
('WN9ZF0l2f2IDalhssXhaq8LtRrGIiWKJqIDfZXw8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRG03cEpWbnZjb0JhaXBmcXBMRFRnc2ZuSXhnM212ekNaQm9tWkVjSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zZXJ2aWNlL2NvbnN0cnVpcmUtbGEtdmlzaW9uIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1686837824),
('wScVTzDpY4u9WQReDzVVoxkoAXhklD4Kps5TTyrp', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFVMcEtiT2tDNUQ5Y1hXcHN6TEtoaWtaNm92TktXZkUzUDdjODZhSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686827769),
('xklEwRrN2hAMhoKD2l5kmTQiEJe50nhcd2y8dDPR', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVlFLV0ZZNmRMYXlQcVpWc0NZaFk1cWZkNFpkWk5mSUtUenhDU2JNNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686838626),
('yBbE8GgYGgUTAFJ3h9fkKeALeijkdY4lQOwAnejI', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidW9DWnlyNUZxWllIYngzUEVOTmJhOGZHemtHVmxvSFI4ckkydGdHTiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686837799),
('YS2xQ8cwLRi4AoRLsISfdF7VRMAqudA1VAFaW53k', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTWtOM0xqN0ZNZlhpWmQ0RjlWYWVoMW9EczdRYzk5WW5yWXJBM2RFdCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686833128),
('Z4vfKoIohKX2IoFNp1QUY0g7VNqT2crX7CHR8WMQ', NULL, NULL, '', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieFQ1UW54N0ZSbUJWNXZqSzcxaXBYd0ZKeG5DZlRYSWFxV2VLeUZ1OCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6ODoiaHR0cDovLzoiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1686833100);

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
