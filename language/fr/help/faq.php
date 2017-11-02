<?php
/**
 * This file is part of the French language pack for the
 * phpBB forum software.
 *
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 * For more information about the language pack, please visit
 * https://www.phpbb.com/customise/db/translation/french/
 */

/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'   => 'Chaque administrateur peut autoriser ou interdire certains types de pièces jointes. Si vous n’êtes pas certain de savoir ce qui est autorisé ou non, nous vous invitons à contacter un administrateur du forum.',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION' => 'Quelles pièces jointes sont autorisées sur ce forum ?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'       => 'Pour retrouver la liste des pièces jointes que vous avez transférées, veuillez vous rendre dans le panneau de contrôle de l’utilisateur et suivre les liens vers la section des pièces jointes.',
	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'     => 'Comment puis-je retrouver toutes mes pièces jointes ?',

	'HELP_FAQ_BLOCK_ATTACHMENTS'  => 'Pièces jointes',
	'HELP_FAQ_BLOCK_BOOKMARKS'    => 'Favoris et abonnements',
	'HELP_FAQ_BLOCK_FORMATTING'   => 'Mise en forme et types de sujets',
	'HELP_FAQ_BLOCK_FRIENDS'      => 'Amis et ignorés',
	'HELP_FAQ_BLOCK_GROUPS'       => 'Niveaux des utilisateurs et groupes d’utilisateurs',
	'HELP_FAQ_BLOCK_ISSUES'       => 'À propos de phpBB',
	'HELP_FAQ_BLOCK_LOGIN'        => 'Problèmes de connexion et d’inscription',
	'HELP_FAQ_BLOCK_PMS'          => 'Messagerie privée',
	'HELP_FAQ_BLOCK_POSTING'      => 'Problèmes de publication',
	'HELP_FAQ_BLOCK_SEARCH'       => 'Recherche dans les forums',
	'HELP_FAQ_BLOCK_USERSETTINGS' => 'Préférences et paramètres des utilisateurs',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'   => 'Dans phpBB 3.0, la fonctionnalité qui vous permettait d’ajouter un sujet aux favoris était similaire à celle présente dans votre navigateur internet. Vous ne receviez aucune notification lorsqu’un sujet ajouté aux favoris était mis à jour. Dans phpBB 3.2, les favoris sont davantage similaires aux abonnements. Vous pouvez à présent recevoir une notification lorsqu’un sujet ajouté aux favoris est mis à jour. L’abonnement, quant à lui, vous préviendra de la mise à jour d’un forum ou d’un sujet auquel vous êtes abonné. Les options de notification des favoris et des abonnements peuvent être modifiés depuis le panneau de contrôle de l’utilisateur, sous les « Préférences du forum ».',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION' => 'Quelle est la différence entre les favoris et les abonnements ?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'        => 'Vous pouvez vous abonner à un forum spécifique en cliquant sur le lien « S’abonner au forum » situé en bas de la page du forum.',
	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'      => 'Comment puis-je m’abonner à un forum spécifique ?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'       => 'Pour résilier vos abonnements, veuillez vous rendre dans le panneau de contrôle de l’utilisateur et suivre le lien vers vos abonnements.',
	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'     => 'Comment puis-je résilier mes abonnements ?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'        => 'Vous pouvez ajouter aux favoris ou vous abonner à un sujet spécifique en cliquant sur le lien approprié dans le menu « Outils du sujet », situé en haut et en bas des sujets et parfois illustré par une image.<br />Répondre à un sujet tout en cochant la case « Recevoir une notification lorsqu’une réponse est publiée » équivaut à vous abonner à ce sujet.',
	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'      => 'Comment puis-je ajouter aux favoris ou m’abonner à un sujet spécifique ?',

	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'      => 'Les annonces contiennent souvent des informations importantes sur le forum dans lequel vous naviguez. Les annonces apparaissent en haut de chaque page du forum dans lequel elles ont été publiées. Tout comme les annonces générales, les permissions concernant les annonces sont définies par les administrateurs du forum.',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'    => 'Que sont les annonces ?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'            => 'Le BBCode est une implémentation spéciale du code HTML, vous offrant un meilleur contrôle sur la mise en forme d’un message. L’utilisation du BBCode est déterminée par les administrateurs, mais il vous est également possible de la désactiver sur chaque message depuis le formulaire de rédaction. Le BBCode est similaire à l’architecture du code HTML, les balises sont contenues entre des crochets « [ » et « ] » à la place des chevrons « &lt; » et « &gt; ». Pour plus d’informations à propos du BBCode, veuillez consulter le guide qui est accessible depuis la page de rédaction.',
	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'          => 'Qu’est-ce que le BBCode ?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'   => 'Les annonces générales contiennent des informations très importantes que vous devriez consulter en priorité. Elles apparaissent en haut de chaque forum et dans le panneau de contrôle de l’utilisateur. Les permissions concernant les annonces générales sont définies par les administrateurs du forum.',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION' => 'Que sont les annonces générales ?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'              => 'Par mesure de sécurité, il n’est pas possible d’insérer du code HTML sur ce forum. La majeure partie de la mise en forme qui peut être générée par du code HTML peut être remplacée par du BBCode.',
	'HELP_FAQ_FORMATTING_HTML_QUESTION'            => 'Puis-je insérer du code HTML ?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'             => 'Les icônes de sujet sont de petites images que l’auteur peut insérer afin d’illustrer le contenu de son sujet. Les administrateurs peuvent désactiver cette fonctionnalité.',
	'HELP_FAQ_FORMATTING_ICONS_QUESTION'           => 'Que sont les icônes de sujet ?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'            => 'Oui, vous pouvez insérer des images à vos messages. Si les administrateurs du forum ont autorisé l’insertion de pièces jointes, vous pourrez transférer des images sur le forum. Dans le cas contraire, vous devrez insérer un lien vers une image distante, hébergée sur un serveur internet public, comme par exemple « http://www.exemple.com/mon-image.gif ». Vous ne pourrez cependant ni insérer de lien vers des images présentes sur votre propre ordinateur (à moins, bien évidemment, que celui-ci soit en lui-même un serveur internet), ni insérer de lien vers des images hébergées derrière un quelconque système d’authentification, comme par exemple les services de messagerie électronique de Outlook ou de Yahoo, les sites protégés par un mot de passe, etc. Pour insérer une image, utilisez la balise BBCode « [img] ».',
	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'          => 'Puis-je insérer des images ?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'            => 'Les sujets verrouillés sont des sujets dans lesquels les utilisateurs ne peuvent plus répondre et dans lesquels les sondages sont automatiquement expirés. Les sujets peuvent être verrouillés par un administrateur ou un modérateur du forum pour de multiples raisons. Vous pouvez également verrouiller vos propres sujets, si cela a été autorisé par les administrateurs.',
	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'          => 'Que sont les sujets verrouillés ?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'           => 'Les émoticônes sont de petites images qui peuvent être utilisées grâce à un code court et qui permettent d’exprimer des sentiments. Par exemple, « :) » exprime la joie, alors qu’au contraire, « :( » exprime la tristesse. Vous pouvez consulter la liste complète des émoticônes depuis le formulaire de rédaction. Essayez cependant de ne pas abuser des émoticônes, elles peuvent rapidement rendre un message illisible et un modérateur pourrait décider de le modifier ou de le supprimer complètement. Les administrateurs du forum peuvent également limiter le nombre d’émoticônes qu’il est possible d’insérer à un message.',
	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'         => 'Que sont les émoticônes ?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'          => 'Les notes apparaissent en dessous des annonces et seulement sur la première page du forum concerné. Elles sont souvent assez importantes et il est recommandé de les consulter dès que vous en avez la possibilité. Tout comme les annonces et les annonces générales, les permissions concernant les notes sont définies par les administrateurs du forum.',
	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'        => 'Que sont les notes ?',

	'HELP_FAQ_FRIENDS_BASIC_ANSWER'    => 'Vous pouvez utiliser ces listes afin d’organiser et trier certains utilisateurs du forum. Les membres ajoutés à votre liste d’amis seront listés dans le panneau de contrôle de l’utilisateur afin de consulter rapidement leur statut en ligne et leur envoyer des messages privés. Selon le style utilisé, les messages publiés par ces utilisateurs peuvent éventuellement être mis en surbrillance. Si vous ajoutez un utilisateur à votre liste d’ignorés, tous les messages qu’il publiera seront masqués par défaut.',
	'HELP_FAQ_FRIENDS_BASIC_QUESTION'  => 'À quoi sert ma liste d’amis et d’ignorés ?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'   => 'Dans chaque profil d’utilisateurs, un lien vous permet de les ajouter à votre liste d’amis ou d’ignorés. De même, vous pouvez ajouter directement des utilisateurs depuis le panneau de contrôle de l’utilisateur en saisissant leur nom d’utilisateur. Vous pouvez également les supprimer de vos listes depuis cette même page.',
	'HELP_FAQ_FRIENDS_MANAGE_QUESTION' => 'Comment puis-je ajouter ou supprimer des utilisateurs de ma liste d’amis et d’ignorés ?',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'    => 'Les administrateurs sont les membres possédant le plus haut niveau de contrôle sur le forum. Ces utilisateurs peuvent contrôler toutes les opérations du forum, telles que les paramètres des permissions, le bannissement d’utilisateurs, la création de groupes d’utilisateurs ou de modérateurs, etc. Ils peuvent également être habilités à modérer l’ensemble des forums. Tout ceci dépend de la configuration effectuée par le fondateur du forum.',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'  => 'Que sont les administrateurs ?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'            => 'Les administrateurs du forum peuvent assigner une couleur aux membres d’un groupe d’utilisateurs afin de faciliter leur identification.',
	'HELP_FAQ_GROUPS_COLORS_QUESTION'          => 'Pourquoi certains groupes d’utilisateurs apparaissent dans une couleur différente ?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'           => 'Si vous êtes membre de plus d’un groupe d’utilisateurs, votre groupe d’utilisateurs par défaut est utilisé afin de déterminer quelle sera la couleur et le rang qui vous sera assigné par défaut. Les administrateurs du forum peuvent vous autoriser à modifier vous-même votre groupe d’utilisateurs par défaut depuis le panneau de contrôle de l’utilisateur.',
	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'         => 'Qu’est-ce qu’un « groupe d’utilisateurs par défaut » ?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'        => 'Les modérateurs sont des utilisateurs individuels (ou des groupes d’utilisateurs individuels) qui surveillent régulièrement les forums. Ils ont la possibilité de modifier ou de supprimer les sujets, les verrouiller, les déverrouiller, les déplacer, les fusionner et les diviser dans le forum qu’ils modèrent. En règle générale, les modérateurs sont présents pour que les utilisateurs respectent les règles imposées sur le forum.',
	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'      => 'Que sont les modérateurs ?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'              => 'Cette page liste les membres de l’équipe du forum que sont les administrateurs et les modérateurs, en plus de quelques informations supplémentaires tels que les forums qu’ils modèrent.',
	'HELP_FAQ_GROUPS_TEAM_QUESTION'            => 'Qu’est-ce que le lien « L’équipe » ?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'        => 'Les groupes d’utilisateurs sont une façon pour les administrateurs du forum de regrouper plusieurs utilisateurs. Chaque utilisateur peut appartenir à plusieurs groupes et chaque groupe peut détenir des permissions individuelles. Ceci facilite les tâches aux administrateurs qui pourront modifier les permissions de plusieurs utilisateurs en une seule fois, ou encore leur accorder des pouvoirs de modération, ou bien leur donner accès à un forum privé.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'   => 'Vous pouvez consulter tous les groupes d’utilisateurs en cliquant sur le lien « Groupes d’utilisateurs » depuis le panneau de contrôle de l’utilisateur. Si vous souhaitez en rejoindre un, cliquez sur le bouton approprié. Cependant, tous les groupes d’utilisateurs ne sont pas ouverts aux nouvelles adhésions. Certains peuvent nécessiter une approbation, d’autres peuvent être privés et d’autres peuvent même être invisibles. Si le groupe est public, vous pouvez le rejoindre en cliquant sur le bouton dédié. Si le groupe est restreint et nécessite une approbation, vous devez cliquer également sur le bouton approprié. Le responsable du groupe d’utilisateurs devra alors approuver votre requête et pourra vous demander la raison de votre requête. Merci de ne pas harceler un responsable de groupe s’il refuse votre demande.',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION' => 'Où sont les groupes d’utilisateurs et comment puis-je en rejoindre un ?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'   => 'Le responsable d’un groupe d’utilisateurs est généralement assigné lorsque les groupes d’utilisateurs sont initialement créés par un administrateur du forum. Si vous êtes intéressé par la création d’un groupe d’utilisateurs, votre premier contact devrait être un administrateur. Essayez de le contacter en lui envoyant un message privé.',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION' => 'Comment puis-je devenir le responsable d’un groupe d’utilisateurs ?',
	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'      => 'Que sont les groupes d’utilisateurs ?',

	'HELP_FAQ_ISSUES_ADMIN_ANSWER'         => 'Tous les utilisateurs du forum peuvent utiliser le formulaire disponible sur le lien « Nous contacter » si cette fonctionnalité a été activée par les administrateurs du forum.<br />Les membres du forum peuvent également utiliser le lien « L’équipe ».',
	'HELP_FAQ_ISSUES_ADMIN_QUESTION'       => 'Comment puis-je contacter un administrateur du forum ?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'       => 'Ce programme a été développé et mis sous licence par phpBB Limited. Si vous souhaitez proposer l’intégration d’une nouvelle fonctionnalité, veuillez vous rendre sur <a href="https://www.phpbb.com/ideas/">notre centre d’idées</a> (en anglais) où vous pourrez voter pour les idées soumises par d’autres utilisateurs et suggérer les vôtres.',
	'HELP_FAQ_ISSUES_FEATURE_QUESTION'     => 'Pourquoi la fonctionnalité X n’est pas disponible ?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'         => 'Tous les administrateurs listés sur la page « L’équipe » devraient être un contact approprié concernant ces problèmes. Si vous n’obtenez aucune réponse de leur part, vous devriez alors contacter le propriétaire du domaine (dont les informations sont disponibles grâce à <a href="https://www.google.fr/search?q=whois">une requête WHOIS</a>), ou, si celui-ci fonctionne sur un service gratuit (comme Yahoo, Free, etc.), le service de gestion des abus. Veuillez noter que phpBB Limited n’a absolument aucune juridiction et ne peut en aucun cas être tenu comme responsable de comment, où et par qui ce forum est utilisé. Ne contactez pas phpBB Limited pour tout problème d’ordre légal (commentaire incessant, insultant, diffamatoire, etc.) qui ne sont pas directement reliés avec le site internet de phpBB.com ou le logiciel phpBB en lui-même. Si vous envoyez un courrier électronique à phpBB Limited à propos d’une utilisation de tierce partie de ce logiciel, attendez-vous à une réponse laconique ou à ne pas recevoir de réponse.',
	'HELP_FAQ_ISSUES_LEGAL_QUESTION'       => 'Qui dois-je contacter à propos de problèmes d’abus ou d’ordres légaux liés à ce forum ?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'   => 'Ce programme (dans sa forme non modifiée) est produit et distribué par <a href="https://www.phpbb.com/">phpBB Limited</a>, qui en est le légitime propriétaire. Il est rendu accessible sous la « Licence Publique Générale GNU version 2 (GPL-2.0) » et peut être distribué gratuitement. Pour plus d’informations, veuillez consulter la rubrique « <a href="https://www.phpbb.com/about/">À propos de phpBB</a> » (en anglais).',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION' => 'Qui a développé ce logiciel de forum de discussions ?',

	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'            => 'Si vous ne cochez pas la case « Se souvenir de moi » lors de votre connexion au forum, vous ne resterez connecté que pour une période prédéfinie. Cela permet d’éviter que votre compte soit utilisé par quelqu’un d’autre. Pour rester connecté, veuillez cocher la case « Se souvenir de moi » lors de votre connexion au forum. Ceci n’est pas recommandé si vous accédez au forum depuis un ordinateur public, comme une librairie, un cybercafé, une université, etc. Si vous n’arrivez pas à trouver cette case à cocher, il est probable qu’un administrateur du forum ait désactivé cette fonctionnalité.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'          => 'Pourquoi suis-je déconnecté automatiquement ?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'           => 'Plusieurs raisons peuvent en être la cause. Assurez-vous avant tout que votre nom d’utilisateur et votre mot de passe soient corrects. Si tel est le cas, contactez un administrateur du forum afin de vous assurer de ne pas avoir été banni. Il est également possible que le propriétaire du site internet ait un problème de configuration et qu’il soit nécessaire de la corriger.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'   => 'Il est possible qu’un administrateur ait désactivé ou supprimé votre compte pour une quelconque raison. De plus, beaucoup de forums suppriment périodiquement les utilisateurs inactifs afin de réduire la taille de leur base de données. Si tel était le cas, inscrivez-vous de nouveau et essayez de participer plus activement aux discussions du forum.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION' => 'Je m’étais déjà inscrit par le passé mais ne peux à présent plus me connecter ?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'         => 'Pourquoi ne puis-je pas me connecter ?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'        => 'Il est possible qu’un administrateur du forum ait désactivé les inscriptions afin d’empêcher les nouveaux visiteurs de s’inscrire. De même, il est également possible qu’un administrateur du forum ait banni votre adresse IP ou interdit l’utilisation du nom d’utilisateur que vous souhaitez utiliser. Pour plus d’informations, veuillez contacter un administrateur du forum.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'      => 'Pourquoi ne puis-je pas m’inscrire ?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'                  => 'La COPPA (pour « Child Online Privacy and Protection Act ») est une loi des États-Unis d’Amérique qui demande aux sites internet collectant potentiellement des informations sur les mineurs âgés de moins de 13 ans un consentement écrit des parents ou des tuteurs légaux des mineurs concernés. Si vous ne savez pas si cette loi s’applique également aux mineurs âgés de moins de 13 ans inscrits sur votre forum, nous vous conseillons de contacter un conseiller juridique qui pourra vous renseigner. Veuillez noter que phpBB Limited et que les propriétaires de ce forum ne peuvent pas vous proposer d’assistance légale et ne doivent donc pas être contactés à ce sujet, excepté lorsque l’assistance porte sur la question « Qui dois-je contacter à propos de problèmes d’abus ou d’ordres légaux liés à ce forum ? ».',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'                => 'Qu’est-ce que la COPPA ?',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'         => 'Cette option vous permet d’effacer tous les cookies générés par phpBB 3.2 qui conservent votre authentification et votre connexion au forum. Les cookies permettent également d’enregistrer le statut des messages (s’ils sont lus ou non lus) dans le cas où cette fonctionnalité a été activée par un administrateur du forum. Si vous rencontrez des problèmes récurrents de connexion et de déconnexion au forum, essayez de supprimer les cookies.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'       => 'À quoi sert « Supprimer tous les cookies du forum » ?',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'          => 'Pas de panique ! Bien que votre mot de passe ne puisse pas être récupéré, il peut facilement être réinitialisé. Veuillez vous rendre sur la page de connexion et cliquer sur « J’ai perdu mon mot de passe ». Suivez les instructions et vous devriez être en mesure de pouvoir vous connecter de nouveau rapidement.<br />Cependant, si vous ne pouvez pas réinitialiser votre mot de passe, nous vous invitons à contacter un administrateur du forum.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'        => 'J’ai perdu mon mot de passe !',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'               => 'Vous n’êtes pas dans l’obligation de le faire, mais les administrateurs du forum peuvent limiter la publication de messages aux utilisateurs inscrits. En vous inscrivant, vous pouvez également avoir accès à des fonctionnalités supplémentaires qui ne sont pas disponibles aux visiteurs, tels que l’affichage d’avatars personnalisés, l’utilisation de la messagerie privée, l’envoi de courriers électroniques aux autres utilisateurs, l’adhésion à un groupe d’utilisateurs, etc. L’inscription ne vous prend qu’un court instant, c’est pourquoi nous vous recommandons de le faire.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'       => 'Vérifiez en premier lieu que votre nom d’utilisateur et votre mot de passe soient corrects. Si la fonctionnalité de la COPPA est activée et que vous avez spécifié avoir en dessous de 13 ans pendant l’inscription, vous devrez suivre les instructions que vous avez reçues. Certains forums exigeront également que les nouvelles inscriptions doivent être activées, soit par vous-même ou soit par un administrateur, avant que vous puissiez ouvrir une session ; cette information était présente lors de votre inscription. Si vous aviez reçu un courrier électronique, consultez les instructions. Si vous ne recevez pas de courrier électronique, vous avez probablement spécifié une mauvaise adresse de courrier électronique ou le courrier électronique a été filtré en tant que pourriel. Si vous êtes certain que l’adresse de courrier électronique que vous avez spécifiée était correcte, essayez de contacter un administrateur du forum.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'     => 'Je suis inscrit mais je ne peux pas me connecter !',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'             => 'Pourquoi ai-je besoin de m’inscrire ?',

	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'   => 'Soit vous n’êtes pas inscrit et connecté, soit un administrateur a désactivé entièrement la messagerie privée sur le forum, soit un administrateur ou un modérateur a décidé de vous empêcher d’envoyer des messages privés. Pour plus d’informations, veuillez contacter un administrateur du forum.',
	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION' => 'Je ne peux pas envoyer de messages privés !',
	'HELP_FAQ_PMS_SPAM_ANSWER'          => 'Nous en sommes navrés. Le formulaire d’envoi de courriers électroniques de ce forum possède des protections qui essaient de repérer les utilisateurs envoyant de tels messages. Vous devriez envoyer par courrier électronique une copie complète du courrier électronique que vous avez reçu à un administrateur du forum. Il est très important d’y inclure les en-têtes contenant des informations sur l’auteur du courrier électronique. Il pourra alors agir en conséquence.',
	'HELP_FAQ_PMS_SPAM_QUESTION'        => 'J’ai reçu un courrier électronique indésirable de la part de quelqu’un sur ce forum !',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'      => 'Vous pouvez supprimer automatiquement les messages privés d’un utilisateur en utilisant les règles de messages depuis le panneau de contrôle de l’utilisateur. Si vous recevez des messages privés de manière abusive de la part d’un autre utilisateur, rapportez ces messages aux modérateurs. Ils peuvent empêcher un utilisateur d’envoyer des messages privés.',
	'HELP_FAQ_PMS_UNWANTED_QUESTION'    => 'Je continue à recevoir des messages privés non sollicités !',

	'HELP_FAQ_POSTING_BUMP_ANSWER'               => 'En cliquant sur le lien « Remonter le sujet » lorsque vous êtes en train de consulter un sujet, vous pouvez remonter celui-ci en haut de la liste des sujets, à la première page du forum. Cependant, si vous ne voyez pas ce lien, cette fonctionnalité a peut-être été désactivée ou le temps d’attente nécessaire entre les remontées n’a peut-être pas encore été atteint. Il est également possible de remonter le sujet simplement en y répondant, mais assurez-vous de le faire tout en respectant les règles du forum.',
	'HELP_FAQ_POSTING_BUMP_QUESTION'             => 'Comment puis-je remonter mes sujets ?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'             => 'Pour publier un nouveau sujet dans un forum, cliquez sur le bouton « Nouveau sujet ». Pour publier une réponse à un sujet ou un message, cliquez sur le bouton « Répondre ». Il se peut que vous ayez besoin d’être inscrit avant de pouvoir rédiger un message. Sur chaque forum, une liste de vos permissions est affichée en bas de l’écran du forum ou du sujet. Par exemple : vous pouvez publier de nouveaux sujets dans ce forum, vous pouvez transférer des pièces jointes dans ce forum, etc.',
	'HELP_FAQ_POSTING_CREATE_QUESTION'           => 'Comment puis-je publier un nouveau sujet ou une réponse ?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'              => 'Il vous permet d’enregistrer comme brouillons les messages que vous souhaitez finaliser et publier ultérieurement. Vous pouvez reprendre les messages enregistrés comme brouillons depuis le panneau de contrôle de l’utilisateur.',
	'HELP_FAQ_POSTING_DRAFT_QUESTION'            => 'À quoi sert le bouton « Enregistrer comme brouillon » affiché lors de la rédaction d’un sujet ?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'        => 'À moins que vous ne soyez un administrateur ou un modérateur du forum, vous ne pouvez modifier ou supprimer que vos propres messages. Vous pouvez modifier un de vos messages en cliquant le bouton adéquat, parfois dans une limite de temps après que le message initial ait été publié. Si quelqu’un a déjà répondu à votre message, un petit texte situé en dessous du message affichera le nombre de fois que vous l’avez modifié, contenant la date et l’heure de la modification. Ce petit texte n’apparaîtra pas s’il s’agit d’une modification effectuée par un modérateur ou un administrateur, bien qu’ils puissent rédiger une raison discrète concernant leur modification. Veuillez noter que les utilisateurs normaux ne peuvent pas supprimer leur propre message si une réponse a été publiée.',
	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'      => 'Comment puis-je modifier ou supprimer un message ?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'   => 'Certains forums peuvent être limités à certains utilisateurs ou groupes d’utilisateurs. Pour consulter, rédiger, publier ou réaliser n’importe quelle autre action, vous avez besoin des permissions adéquates. Essayez de contacter un modérateur ou un administrateur du forum afin de lui demander un accès.',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION' => 'Pourquoi ne puis-je pas accéder à un forum ?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'     => 'Les permissions permettant de transférer des pièces jointes sont accordées par forum, par groupe ou par utilisateur. Les administrateurs du forum ont peut-être désactivé le transfert de pièces jointes dans le forum concerné, ou seuls certains groupes d’utilisateurs détiennent cette autorisation. Pour plus d’informations, veuillez contacter un administrateur du forum.',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'   => 'Pourquoi ne puis-je pas transférer de pièces jointes ?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'           => 'La limite d’options d’un sondage est décidée par les administrateurs du forum. Si le nombre d’options que vous pouvez ajouter à un sondage vous semble trop restreint, essayez de demander à un administrateur du forum s’il est possible de l’augmenter.',
	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'         => 'Pourquoi ne puis-je pas ajouter plus d’options à un sondage ?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'        => 'Lorsque vous rédigez un nouveau sujet ou modifiez le premier message d’un sujet, cliquez sur l’onglet « Créer un sondage » situé en-dessous du formulaire principal de rédaction. Si cet onglet n’est pas disponible, il est probable que vous n’ayez pas la permission de créer des sondages. Saisissez le titre du sondage en incluant au moins deux options dans les champs adéquats, chaque option devant être insérée sur une nouvelle ligne. Vous pouvez définir le nombre d’options que les utilisateurs peuvent insérer en modifiant, lors du vote, le nombre des « Options par utilisateur ». Vous pouvez également spécifier une limite de temps en jours et autoriser ou non les utilisateurs à modifier leurs votes.',
	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'      => 'Comment puis-je créer un sondage ?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'          => 'Comme pour les messages, les sondages ne peuvent être modifiés que par leur auteur, les modérateurs et les administrateurs. Pour modifier un sondage, modifiez tout simplement le premier message du sujet car le sondage est obligatoirement associé à ce dernier. Si personne n’a encore voté, il est possible de supprimer le sondage ou de modifier ses options. Cependant, si des votes ont été exprimés, seuls les modérateurs et les administrateurs peuvent modifier ou supprimer le sondage. Cela empêche de modifier les options d’un sondage en cours.',
	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'        => 'Comment puis-je modifier ou supprimer un sondage ?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'              => 'Les administrateurs du forum peuvent décider de soumettre à des vérifications les messages que vous rédigez sur le forum. Il est également possible que vous ayez été placé dans un groupe d’utilisateurs aux permissions limitées. Pour plus d’informations, veuillez contacter un administrateur du forum.',
	'HELP_FAQ_POSTING_QUEUE_QUESTION'            => 'Pourquoi mon message a-t-il besoin d’être approuvé ?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'             => 'Si les administrateurs du forum ont activé cette fonctionnalité, un bouton dédié devrait être affiché à côté du message que vous souhaitez rapporter. En cliquant sur celui-ci, vous trouverez toutes les étapes nécessaires afin de rapporter le message.',
	'HELP_FAQ_POSTING_REPORT_QUESTION'           => 'Comment puis-je rapporter des messages à un modérateur ?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'          => 'Pour insérer une signature à un de vos messages, vous devez tout d’abord en créer une depuis le panneau de contrôle de l’utilisateur. Une fois créée, vous pouvez cocher la case « Insérer une signature » depuis le formulaire de rédaction afin d’insérer votre signature. Vous pouvez également ajouter une signature qui sera insérée à tous vos messages en cochant la case appropriée dans le panneau de contrôle de l’utilisateur. Si vous choisissez cette dernière option, il ne vous sera plus utile de spécifier sur chaque message votre souhait d’insérer votre signature.',
	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'        => 'Comment puis-je insérer une signature à mon message ?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'            => 'Chaque forum a son propre ensemble de règles. Si vous ne respectez pas une de ces règles, vous recevrez un avertissement. Veuillez noter que cette décision n’appartient qu’aux administrateurs du forum, phpBB Limited n’est en aucun cas responsable du règlement instauré sur cet espace. Pour plus d’informations, veuillez contacter un administrateur du forum.',
	'HELP_FAQ_POSTING_WARNING_QUESTION'          => 'Pourquoi ai-je reçu un avertissement ?',

	'HELP_FAQ_SEARCH_BLANK_ANSWER'       => 'Votre recherche a renvoyé trop de résultats pour que le serveur puisse les afficher. Utilisez la recherche avancée et essayez d’être plus précis dans les termes employés et dans la sélection des forums dans lesquels vous souhaitez effectuer une recherche.',
	'HELP_FAQ_SEARCH_BLANK_QUESTION'     => 'Pourquoi ma recherche renvoie à une page blanche ?!',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'       => 'Saisissez un terme dans la boîte de recherche située sur l’index, les pages des forums ou les pages de sujets. La recherche avancée est accessible en cliquant sur le lien « Recherche avancée » disponible sur toutes les pages du forum. L’accès à la recherche dépend du style utilisé.',
	'HELP_FAQ_SEARCH_FORUM_QUESTION'     => 'Comment puis-je effectuer une recherche dans un ou des forums ?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'     => 'Veuillez vous rendre sur la page « Membres » puis cliquer sur le lien « Trouver un membre ».',
	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'   => 'Comment puis-je rechercher des membres ?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'   => 'Votre recherche était probablement trop vague ou incluait trop de termes communs qui ne sont pas indexés par phpBB. Essayez d’être plus précis et d’utiliser les différents filtres disponibles dans la recherche avancée.',
	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION' => 'Pourquoi ma recherche ne renvoie aucun résultat ?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'         => 'Vos propres messages peuvent être affichés soit en cliquant sur le lien « Afficher vos messages » dans le panneau de contrôle de l’utilisateur, soit en cliquant sur le lien « Rechercher les messages de l’utilisateur » sur la page de votre propre profil ou soit en cliquant sur le menu « Raccourcis » situé sur la partie supérieure du forum. Pour effectuer une recherche de vos propres sujets, utilisez la recherche avancée et remplissez convenablement les options qui vous sont disponibles.',
	'HELP_FAQ_SEARCH_OWN_QUESTION'       => 'Comment puis-je retrouver mes propres messages et sujets ?',

	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'            => 'Deux images peuvent apparaître à côté de votre nom d’utilisateur lorsque vous consultez un sujet. Une d’elles peut être une image associée à votre rang, généralement représentée par des étoiles, des carrés ou des ronds. Elle permet d’indiquer votre activité selon le nombre de messages que vous avez publié, ou permet de différencier votre statut particulier sur le forum. L’autre image, généralement plus grande, est une image connue sous le nom d’avatar qui est bien souvent unique et personnelle à chaque utilisateur.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'    => 'Dans le panneau de contrôle de l’utilisateur, sous « Profil », vous pouvez ajouter un avatar en utilisant une des quatre méthodes suivantes : le service « Gravatar », la galerie d’avatars, les images distantes ou le transfert d’images locales. Les administrateurs du forum peuvent activer ou non la fonctionnalité des avatars et des méthodes qu’ils veuillent rendre disponible aux utilisateurs. Si vous ne pouvez pas utiliser d’avatars, nous vous invitons à contacter un administrateur du forum.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'  => 'Comment puis-je afficher un avatar ?',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'          => 'Que signifient les images situées à côté de mon nom d’utilisateur ?',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'   => 'Si vous êtes un utilisateur inscrit, tous vos paramètres sont stockés dans la base de données du forum. Vous pouvez les modifier depuis le panneau de contrôle de l’utilisateur. Le lien vers ce dernier se trouve généralement en cliquant sur votre nom d’utilisateur situé en haut des pages du forum. Ce système vous permettra de modifier tous vos paramètres et toutes vos préférences.',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION' => 'Comment puis-je modifier mes paramètres ?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'       => 'Si les administrateurs ont activé cette fonctionnalité, seuls les utilisateurs inscrits peuvent envoyer des courriers électroniques aux autres utilisateurs depuis un formulaire dédié. Cela permet d’empêcher une utilisation abusive du système de messagerie électronique par des utilisateurs malveillants ou des robots.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'     => 'Pourquoi m’est-il demandé de me connecter lorsque je clique sur le lien de courrier électronique d’un utilisateur ?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'       => 'Dans le panneau de contrôle de l’utilisateur, sous « Préférences du forum », vous trouverez l’option « Masquer mon statut en ligne ». Si vous activez cette option, vous ne serez visible que des administrateurs, des modérateurs et de vous-même. Vous serez alors comptabilisé comme étant un utilisateur invisible.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'     => 'Comment puis-je masquer mon nom d’utilisateur de la liste des utilisateurs en ligne ?',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'          => 'Soit les administrateurs n’ont pas installé votre langue sur le forum, soit le logiciel n’a pas encore été traduit dans votre langue. Essayez de demander à un administrateur du forum s’il est possible qu’il puisse installer la langue que vous souhaitez. Si la traduction désirée n’existe pas, vous êtes libre de vous porter volontaire et commencer une nouvelle traduction. Pour plus d’informations, veuillez vous rendre sur <a href="https://www.phpbb.com/">le site internet de phpBB</a>&reg; (en anglais).',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'        => 'Ma langue n’apparaît pas dans la liste !',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'              => 'Les rangs, qui apparaissent en dessous de votre nom d’utilisateur, indiquent votre activité selon le nombre de messages que vous avez publié ou identifient certains utilisateurs spécifiques, comme les administrateurs et les modérateurs. Dans la plupart des cas, seul un administrateur du forum peut modifier le texte des rangs du forum. Merci de ne pas abuser de ce système en publiant inutilement des messages afin d’augmenter votre rang sur le forum. Beaucoup de forums ne toléreront pas ce procédé et un administrateur ou un modérateur pourra vous sanctionner en abaissant votre compteur de messages.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'            => 'Quel est mon rang et comment puis-je le modifier ?',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'        => 'Si vous êtes certain d’avoir correctement réglé le fuseau horaire mais que l’heure n’est toujours pas correcte, il est probable que l’horloge du serveur soit erronée. Veuillez contacter un administrateur afin de lui communiquer ce problème.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'      => 'J’ai réglé le fuseau horaire mais l’heure n’est toujours pas correcte !',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'          => 'Il est possible que l’heure affichée soit réglée sur un fuseau horaire différent du vôtre. Si tel était le cas, veuillez vous rendre dans le panneau de contrôle de l’utilisateur et régler le fuseau horaire afin de trouver votre zone adéquate, par exemple Londres, Paris, New York, Sydney, etc. Veuillez noter que le réglage du fuseau horaire, comme la plupart des autres paramètres, n’est accessible qu’aux utilisateurs inscrits. Si vous n’êtes pas inscrit, c’est l’occasion idéale de le faire.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'        => 'L’heure n’est pas correcte !',
]);
