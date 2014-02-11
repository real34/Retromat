var phase_titles = ['Ouvrir la rétrospective', 'Recueillir des données', 'Générer des idées', 'Décider des actions', 'Clore la rétrospective', 'Quelque chose de complètement différent'];

// BIG ARRAY OF ALL ACTIVITIES
// Mandatory: id, phase, name, summary, desc
// Example:
//all_activities[i] = {
//  id:        i+1,
//  phase:     int in {1-5},
//  name:      "",
//  alternativeName: "",
//  summary:   "",
//  desc:      "Multiple \
//              Lines",
//  duration:  "",
//  source:    "",
//  more:      "", // a link
//  suitable:  "",
//  photo: "" // a link
//};
// Values for duration: "<minMinutes>-<maxMinutes> perPerson"
// Values for suitable: "iteration, realease, project, introverts, max10People, rootCause, smoothSailing, immature, largeGroup"

all_activities = [];
all_activities[0] = {
	phase: 0,
	name: "ECVP",
	summary: "Comment se sentent les participants de la rétro : Explorateur, Client, Vacancier, ou Prisonnier ?",
	desc: "Préparez un paper-board avec des zones pour E, C, V, et P. Expliquez les concepts : <br>\
<ul>\
    <li>Explorateur : Désireux de se lancer, de rechercher ce qui a et n'a pas fonctionné et comment améliorer.</li>\
    <li>Client : Attitude positive. Content si de bonnes choses en ressortent.</li>\
    <li>Vacancier : Hésitant à participer activement mais la rétro vaut mieux que le travail habituel.</li>\
    <li>Prisonnier : Participe seulement car il (sent qu'il) le doit.</li>\
</ul>\
Faites un sondage (anonyme sur des bouts de papier). Comptez les réponses et assurez le suivi sur le tableau \
pour que tous voient. Si la confiance est faible, détruisez délibérément les votes pour assurer la confidentialité. \
Demandez ce que les participants pensent des résultats. Si il ya une majorité de Vacanciers ou Prisonniers \
envisagez d'utiliser la rétro pour discuter de cette constatation.",
	duration: "5-10 numberPeople",
	source: source_agileRetrospectives,
	suitable: "iteration, release, project, immature"
};
all_activities[1] = {
	phase: 0,
	name: "Prévisions météo",
	summary: "Les participants marquent leur 'météo' (humeur) sur un paper-board",
	desc: "Préparez un paper-board avec un dessin d'orage, pluie, nuages ​​et soleil. \
Chaque participant marque son humeur sur le tableau.",
	source: source_agileRetrospectives
};
all_activities[2] = {
	phase: 0,
	name: "Check In - Question rapide", // TODO This can be expanded to at least 10 different variants - how?
	summary: "Posez une question à laquelle chacun des participants répond à son tour",
	desc: "À tour de rôle chaque participant répond à la même question (sauf s'ils disent «je passe»). \
Exemples de questions: <br>\
<ul>\
    <li>En un mot - Qu'attendez-vous de cette rétrospective ?</li>\
    <li>En un mot - Qu'avez vous en tête ?<br>\
        Traitez les préoccupations, par exemple en les écrivants et en les mettant - physiquement et mentalement - de côté</li>\
    <li>Dans cette rétrospective - Si vous étiez une voiture, quel genre serait-elle ?</li>\
    <li>Dans quel état émotionnel êtes-vous ? (par exemple, «heureux», «en colère», «triste», «effrayé»)</li>\
</ul><br>\
Évitez l'évaluation des commentaires, par exemple avec «Très Bien». «Merci» est suffisant.",
	source: source_agileRetrospectives
};
all_activities[3] = {
	phase: 1,
	name: "Frise chronologie",
	summary: "Les participants écrivent les événements marquants et les ordonnent chronologiquement",
	desc: "Divisez en groupes de 5 personnes ou moins. Distribuez des cartes et des marqueurs. \
Donnez aux participants 10 minutes pour noter des événements mémorables et / ou personnellement significatifs. \
Il s'agit de recueillir plusieurs points de vue. Un consensus serait préjudiciable. Tous les participants \
affichent leurs cartes et les ordonnent. Il est normal d'ajouter des cartes à la volée. Analysez.<br>\
Des codes couleurs peuvent aider à faire ressortir des modèles, par exemple :<br>\
<ul>\
    <li>Émotions</li>\
    <li>Évènements (techniques, organisation, personnes, ...)</li>\
    <li>Fonctions (testeur, développeur, manager, ...)</li>\
</ul>",
	duration: "60-90 timeframe",
	source: source_agileRetrospectives,
	suitable: "iteration, introverts"
};
all_activities[4] = {
	phase: 1,
	name: "Analyse des histoires utilisateur",
	summary: "Passez sur chaque histoire utilisateur traitée par l'équipe et cherchez des améliorations possibles",
	desc: "Préparation : Rassemblez toutes les histoires utilisateur traitées lors de l'itération et les amener à \
la rétrospective. <br> \
En groupe (10 personnes max.) lire chaque histoire utilisateur. Pour chacune d'elles se demander si \
elle s'est bien passée ou non. Si tout s'est bien passé, saisir pourquoi. Sinon discuter de ce que vous pourriez \
faire différemment, à l'avenir. <br> \
Variantes : Vous pouvez effectuer cela pour les tickets de support, les bugs ou toute autre tâche \
effectuée par l'équipe.",
	source: source_findingMarbles,
	suitable: "iteration, max10people"
};
all_activities[5] = {
	phase: 1,
	name: "Aimer à aimer",
	summary: "Les participants font correspondre des cartes qualité à leurs propres propositions \"Commencer-Arrêter-Continuer\"",
	desc: "Préparation: 20 cartes qualité, càd des fiches cartonnées colorées avec un unique mot \
comme <i>drôle, claire, sérieuse, géniale, dangereuse, désagréable</i>.<br> \
Chaque membre de l'équipe doit écrire au moins 9 cartes : 3 de chaque pour les choses \
à commencer à faire, à continuer et à arrêter. Choisissez une personne qui sera le premier juge. \
Le juge retourne la première carte qualité. Chaque membre sélectionne alors parmi ses cartes \
celle qui correspond le mieux à ce mot et la pose face cachée sur la table. \
Le dernier à se décider doit remettre la carte dans son jeu. Le juge mélange toutes \
les cartes proposées, les retourne une par une et décide laquelle correspond le plus = la gagnante. \
Toutes les cartes sont jetées. La personne ayant proposé la carte gagnante reçoit \
la carte qualité. La personne à la gauche du juge devient alors le nouveau juge.<br> \
Arrêter lorsque tout le monde est à court de cartes (6-9 tours). Celui qui a le plus \
de cartes qualité gagne. Débriefez en demandant quelles sont les principales conclusions. \
<br>(Basé sur le jeu 'Apples to Apples')",
	source: source_agileRetrospectives,
	duration: "30-40",
	suitable: "iteration, introverts"
};
all_activities[6] = {
	phase: 1,
	name: "Mad Sad Glad",
	summary: "Collectez les évènements durant lesquels les membres de l'équipe se sont sentis en colère (mad), triste (sad), ou content (glad) et trouvez les raisons",
	desc: "Affichez trois affiches intitulées 'en colère' (mad), 'triste' (sad), et 'content' (glad) ou '>:), :(, :)'. \
Les membres de l'equipe écrivent un évènement par carte lorsqu'ils on ressenti ce sentiment, avec un code couleur pour chaque type de sentiment. \
Lorsque le temps est écoulé demandez à chacun de placer ses cartes sur les affiches appropriées. Regroupez les cartes sur \
chaque affiche puis demandez au groupe de nommer chaque regroupement. <br>\
Terminez en demandant :\
<ul>\
    <li>Qu'en ressort-il ? Qu'est-ce qui est inattendu ?</li>\
    <li>Qu'est-ce qui a rendu cette tâche difficile ? Qu'est-ce qui a été amusant ?</li>\
    <li>Reconnaissez vous des motifs / modèles ? Que signifient-ils pour vous en tant qu'équipe ?</li>\
    <li>Des suggestions sur comment continuer ?</li>\
</ul>",
	source: source_agileRetrospectives,
	duration: "15-25",
	photo: "<a href='static/images/activities/7_Mad-Sad-Glad.jpg' rel='lightbox[activity6]' title='Contribuée par Chloe Gachet'>Voir la Photo</a>",
	suitable: "iteration, release, project, introverts"
};
all_activities[7] = {
	phase: 2,
	name: "5 Pourquoi",
	alternativeName: "Analyse de cause racine",
	summary: "Examinez de près la cause racine de problèmes en vous demandant à plusieurs reprises 'Pourquoi ?'",
	desc: "Divisez les participants en petits groupes (<= 4 personnes) et donnez à chaque groupe \
l'un des problèmes le plus identifié précédemment. Instructions pour le groupe :\
<ul>\
    <li>Une personne demande aux autres 'Pourquoi est-ce arrivé ?' à plusieurs reprises pour trouver la cause racine ou une suite d'évènements</li>\
    <li>Notez la cause racine trouvée (souvent la réponse au 5ème 'Pourquoi ?')</li>\
</ul>\
Laissez le groupe partager leurs conclusions.",
	source: source_agileRetrospectives,
	duration: "15-20",
	suitable: "iteration, release, project, root_cause"
};
all_activities[8] = {
	phase: 2,
	name: "Matrice d'apprentissage",
	summary: "Les membres de l'équipe 'brainstorment' sur 4 catégories afin de rapidement lister des problèmes",
	desc: "Après avoir discuté des données de la Phase 2, affichez un tableau à 4 quadrants intitulés \
':)', ':(', 'Idée !', et 'Appréciation'. Distribuez des post-its. \
<ul>\
    <li>Les membres de l'équipe peuvent contribuer à chaque quadrant. Une idée par post-it.</li>\
    <li>Regroupez les notes.</li>\
    <li>Distribuez 6 à 10 points aux participants pour voter et élire les idées les plus importantes.</li>\
</ul>\
Cette liste sera celle utilisée pour la Phase 4.",
	source: source_agileRetrospectives,
	duration: "20-25",
	suitable: "iteration"
};
all_activities[9] = {
	phase: 2,
	name: "Brainstorming / Filtrage",
	summary: "Générez de nombreuses idées et filtrez les suivant vos critères",
	desc: "Exposez les règles du brainstorming, et le but : générer un maximum de nouvelles idées \
qui seront filtrées <em>après</em> le brainstorming.\
<ul>\
    <li>Laissez les participants écrire leurs idées pendant 5 à 10 minutes</li>\
    <li>Faites des tours de table en demandant de façon répétée une idée à chacun, jusqu'à ce que toutes les idées soient au tableau</li>\
    <li>Demandez ensuite des filtres (exemple : coût, temps demandé, unicité des concepts, pertinence par rapport à l'activité, ...). \
        Laissez le groupe en choisir 4.</li>\
    <li>Appliquez chaque filtre et marquez les idées qui passent les 4 filtres.</li>\
    <li>Quelles idées le groupe veut-il faire avancer ? Est-ce que quelqu'un se sent particulièrement concerné par une de ces idées ? \
        Autrement prenez une décision à la majorité.</li>\
</ul>\
Les idées sélectionnées rentrent en Phase 4.",
	source: source_agileRetrospectives,
	more: "<a href='http://www.mpdailyfix.com/the-best-brainstorming-nine-ways-to-be-a-great-brainstorm-lead/'>\
    Nine Ways To Be A Great Brainstorm Lead</a>",
	duration: "40-60",
	suitable: "iteration, release, project, introverts"
};
all_activities[10] = {
	phase: 3,
	name: "Le Cercle des Questions",
	summary: "Questions et r&eacute;ponses font le tour du cercle de l'&eacute;quipe - une excellente fa&ccedil;on de parvenir à un consensus",
	desc: "Tout le monde s'asseoit en cercle. Commencez en annonçant que vous allez faire un tour de questions pour d&eacute;couvrir \
ce que vous voulez faire en tant que groupe. Vous commencez par poser la premi&egrave;re question &agrave; votre voisin, par exemple \
'Quelle est la chose la plus importante que nous devrions d&eacute;marrer lors de la prochaine it&eacute;ration ?' Votre \
voisin r&eacute;pond et pose une question li&eacute;e &agrave; son voisin. Arr&ecirc;tez-vous quand un consensus &eacute;merge ou \
que le temps est &eacute;coul&eacute;. Faites au moins un tour, qu'on puisse entendre tout le monde !",
	source: source_agileRetrospectives,
	duration: "30+ groupsize",
	suitable: "iteration, release, project, introverts"
};
all_activities[11] = {
	phase: 3,
	name: "D&eacute;marrer, Arr&ecirc;ter, Continuer",
	summary: "R&eacute;fl&eacute;chissez ensemble &agrave; ce que vous voulez d&eacute;marrer, arr&ecirc;ter ou continuer et gardez les propositions les mieux not&eacute;es",
	desc: "Diviser le tableau en 3 colonnes nomm&eacute;es 'D&eacute;marrer', 'Continuer' and 'Arr&ecirc;ter'. \
Demander aux participants d'&eacute;crire des propositions concr&egrave;tes pour chaque cat&eacute;gorie - 1 \
id&eacute;e par carte. Laissez les &eacute;crire en silence pendant quelques minutes. \
Puis chacun lit ses propositions &agrave; voix haute et les place dans la cat&eacute;gorie appropri&eacute;e. \
Mener une courte discussion sur les 20% d'id&eacute;es qui vous semblent les plus b&eacute;n&eacute;fiques. Votez en distribuant des points \
ou des croix &agrave; l'aide d'un marqueur, par exemple 1, 2, et 3 points &agrave; distribuer par personne. \
Les 2 ou 3 meilleures seront vos actions &agrave; mener.\
<br><br>\
(Voir <a href='http://agileretroactivities.blogspot.co.at/search/label/innovation'>Paulo Caroli's 'Open the Box'</a> pour une excellente alternative à cette activité)",
	source: source_agileRetrospectives,
	duration: "15-30",
	suitable: "iteration"
};
all_activities[12] = {
	phase: 3,
	name: "Objectifs SMART",
	summary: "Formulez un plan d'action spécifique et mesurable",
	desc: "Présentez les <a href='http://en.wikipedia.org/wiki/SMART_criteria'>objectifs SMART</a> \
(Spécifique, Mesurable, Atteignable, Réaliste, défini dans le Temps) ainsi que des exemples d'objectifs \
plus ou moins SMART, par exemple 'Nous étudierons les stories avant des les accepter en en parlant avec le \
product owner tous les mercredi à 9h.' plutôt que 'Nous prendrons connaissance des stories avant qu'elles \
ne soit ajoutées au backlog du sprint'. <br>\
Créez des groupes par thématiques sur lesquelles l'équipe souhaite continuer à travailler. Chaque groupe identifie de 1 à 5 \
étapes concrètes pour atteindre l'objectif. Chaque groupe présente ses résultats. Tous les participants doivent \
s'accorder sur la compatibilité SMART des objectifs. Affiner et ratifier.",
	source: source_agileRetrospectives,
	duration: "20-60 groupsize",
	suitable: "iteration, release, project"
};
all_activities[13] = {
	phase: 4,
	name: "La porte des retours - les chiffres",
	summary: "Évaluez la satisfaction des participants à propos de la rétro sur une échelle de 1 à 5 en un minimum de temps",
	desc: "Placez des posts-its sur la porte numérotés de 1 à 5. 1 étant le plus haut et le meilleur score, 5 le plus bas et le pire. \
A la fin de la rétrospective, demandez aux participants de placer un post-it sur le chiffre qui d'après eux \
correspond le mieux à la session. Le post-it peut être vide ou contenir un commentaire ou une suggestion.",
	source: "ALE 2011, " + source_findingMarbles,
	duration: "2-3",
	suitable: "iteration, largeGroups"
};
all_activities[14] = {
	phase: 4,
	name: "Appréciations",
	summary: "Les membres de l'équipe sont reconnaissants les uns envers les autres et concluent de manière positive",
	desc: "Commencez en remerciant de manière sincère l'un des participants. \
Cela peut concerner n'importe laquelle de ses contributions : aider l'équipe ou vous-même à résoudre un problème, ...<br />\
Invitez alors les autres à faire de même et attendez que quelqu'un se jette à l'eau. Arrêtez quand personne n'a parlé pendant plus d'une minute.",
	source: source_agileRetrospectives + " qui l'a adapté de 'The Satir Model: Family Therapy and Beyond'",
	duration: "5-30 groupsize",
	suitable: "iteration, release, project"
};
all_activities[15] = {
	phase: 4,
	name: "Aide, Gêne, Hypothèse",
	summary: "Obtenez des retours concrets sur votre manière de faciliter",
	desc: "Préparez 3 feuilles de papier intitulés 'Aide', 'Gêne', et 'Hypothèse' \
(des suggestions de choses à essayer). \
Demandez aux participants de vous aider à progresser et devenir un meilleur facilitateur en vous écrivant des post-its \
et en signant de leurs initiales pour que vous puissiez poser des questions par la suite.",
	source: source_agileRetrospectives,
	duration: "5-10",
	suitable: "iteration, release"
};
all_activities[16] = {
	phase: 4, // marche aussi pour 5
	name: "SaMoLo (Plus de, Autant de, Moins de)",
	summary: "Pour vous aider à redresser la barre dans votre rôle de facilitateur",
	desc: "Dessinez au tableau trois parties intitulées 'Plus de', 'Autant de', et 'Moins de'. \
Demandez aux participants un coup de main pour vous aider à améliorer votre comportement : Écrivez sur des post-its \
ce que vous devriez faire, plus souvent, moins souvent et ce qui est très bien comme ça. Lisez et \
discutez un court moment des post-its collés dans chaque partie.",
	more: "<a href='http://www.scrumology.net/2010/05/11/samolo-retrospectives/'>Les expériences de David Bland</a>",
	source: "<a href='http://fairlygoodpractices.com/samolo.htm'>Fairly good practices</a>",
	duration: "5-10",
	suitable: "iteration, release, project"
};
all_activities[17] = {
phase:     0,
name:      "Check in - Commentaires Amazon",
summary:   "Commentez l'itération sur Amazon. N'oublier pas l'évaluation !",
desc:      "Chaque membre écrit un rapide commentaire qui comporte : \
<ul>\
    <li>Un titre</li>\
    <li>Un commentaire</li>\
    <li>Une évaluation (5 étoiles pour le meilleur score) </li>\
</ul>\
Chacun lit son commentaire. Notez les évaluations sur un tableau.<br>\
Peut s'étendre à la rétrospective entière en demandant également ce qui est recommandé de faire et de ne pas faire pour l'itération.",
source:    "<a href='http://blog.codecentric.de/2012/02/unser-sprint-bei-amazon/'>Christian Hei&szlig;</a>",
duration:  "10",
suitable: "release, project"
};
all_activities[18] = {
phase:     1,
name:      "Hors-Bord / Voilier",
summary:   "Analysez les forces qui vous vont avancer et qui vous ralentissent",
desc:      "Dessinez un bateau sur un tableau à feuilles. Dotez le d'un bon moteur \
ainsi que d'une ancre très lourde. Les membres de l'équipe écrivent en silence sur des post-its ce qui a propulsé l'équipe vers l'avant \
et ce qui lui a fait faire du surplace. Une idée par post-it. Collez les post-its respectivement sur le moteur et l'ancre. \
Lisez les tous et discutez de comment booster le 'moteur' et comment se passer de l’'ancre'.",
source:    "<a href='http://leadinganswers.typepad.com/leading_answers/2007/10/calgary-apln-pl.html'>Mike Griffiths</a>, qui l'a adapté pour " + source_innovationGames,
duration:  "10-15 par groupe",
photo:    "<a href='static/images/activities/19_Speedboat.jpg' rel='lightbox[activity18]' title='Contribution de Corinna Baldauf'>Voir la photo</a>",
suitable: "iteration, release"
};
all_activities[19] = {
phase:     2,
name:      "Le jeu de la perfection",
summary:   "Qu'est-ce qui pourrait faire que la prochaine itération obtiennent une note de 10 sur 10 ?",
desc:      "Dessinez deux colonnes sur une feuille du tableau, une petite pour 'Évaluation' et une grande pour 'Actions'. \
Tout le monde évalue la dernière itération sur une échelle de 1 à 10. Ensuite chacun suggère quelles action(s) \
feraient que la prochaine itération obtienne un score de 10 sur 10.",
source:    "<a href='http://www.benlinders.com/2011/getting-business-value-out-of-agile-retrospectives/'>Ben Linders</a>",
suitable: "iteration, release"
};
all_activities[20] = {
phase:     3,
name:      "Fusion",
summary:   "Réduisez le nombre d'actions possibles à seulement deux qui seront expérimentées par l'équipe",
desc:      "Distribuez des cartes et des marqueurs. Dites à tout le monde d'écrire les deux actions qu'ils \
veulent essayer à la prochaine itération - aussi précises que possible \
(<a href='http://en.wikipedia.org/wiki/SMART_criteria'>SMART</a>). Ensuite tout le monde paire \
avec son voisin et ensemble ils doivent fusionner leurs actions en une seule liste avec \
deux actions. Les paires forment des groupes de 4. Puis 8. Maitenant ramassez les deux actions de tous les groupes \
et votez pour les deux finales.",
source:    "Lydia Grawunder &amp; Sebastian Nachtigall",
duration:  "15-30 groupSize",
photo:    "<a href='http://1.bp.blogspot.com/-dLemopaMJ9o/UhKRRRBMFkI/AAAAAAAAC78/6hH5yQKucYA/s320/photo+4(1).JPG' rel='lightbox[activity20]' title='Prise par Paulo Caroli'>Voir la photo</a>",
suitable: "iteration, release, project, largeGroups"
};
all_activities[21] = {
    phase:     0,
    name:      "Prise de température",
    summary:   "Les participants marquent leur 'température' (humeur) sur un tableau",
    desc:      "Préparez un tableau avec un dessin de thermomètre allant de glacé à chaud \
    en passant par la température du corps. \
    Chaque participant marque son humeur au tableau.",
    source:  source_unknown
};
all_activities[22] = {
    phase:     4,
    name:      "La porte des retours - Smileys",
    summary:   "Mesurez la satisfaction des participants concernant la rétro en un minimum de temps en utilisant des smileys",
    desc:      "Dessinez un ':)', ':|', et ':(' sur une feuille de papier et accrochez la sur la porte. \
    À la fin de la rétrospective, demandez aux participants de marquer leur niveau \
    de satisfaction par rapport à la session par un 'x' sous le smiley correspondant.",
    source:    "<a href='http://boeffi.net/tutorials/roti-return-on-time-invested-wie-funktionierts/'>Boeffi</a>",
    duration:  "2-3",
    suitable: "iteration, largeGroups"
};
all_activities[23] = {
    phase:     3,
    name:      "Liste des choses à faire",
    summary:   "Les participants proposent et s'engagent sur des actions",
    desc:      "Préparez un tableau avec 3 colonnes 'Quoi', 'Qui' et 'Échéance'. \
    Demandez à chaque participant à tour de rôle ce qu'ils souhaitent faire pour faire \
    avancer l'équipe. Écrivez la tâche, mettez vous d'accord sur une date d'échéance \
    et laissez les signer de leur nom. <br>\
    Si quelqu'un suggère une action pour l'équipe entière, cette personne doit obtenir \
    l'adhésion (et les signatures) des autres.",
    source:    source_findingMarbles + ", inspiré par <a href='http://lwscologne.wordpress.com/2012/05/08/11-treffen-der-limited-wip-society-cologne/#Retrospektiven'>cette liste</a>",
    duration:  "10-15 groupSize",
    suitable: "iteration, release, smallGroups"
};
all_activities[24] = {
    phase:     2,
    name:      "Diagramme-Causes-Effets",
    summary:   "Trouvez la source des problèmes dont les origines sont difficiles à localiser \
        et amènent à des discussions sans fin",
    desc:      "Écrivez le problème que vous souhaitez explorer sur un post-it et collez le au milieu d'un tableau blanc. \
        Découvrez en quoi c'est un problème en demandant continuellement 'Et alors ?'. \
        Découvrez les causes racines de ce problème en demandant continuellement 'Pourquoi (est-ce que cela se produit) ?'. \
        Documentez vos conclusions en ajoutant des post-its et en explicitant la relation \
        cause à effet avec des flèches. Chaque post-it peut avoir plus d'une raison et plus \
        d'une conséquence.<br>\
        Les cercles vicieux sont généralement de bons points de départ pour la prise d'actions. \
        Si vous parvenez à casser leur mauvaise influence, vous pouvez gagner énormément.",
    source:    "<a href='http://blog.crisp.se/2009/09/29/henrikkniberg/1254176460000'>Henrik Kniberg</a>",
    more:      "<a href='http://finding-marbles.com/2011/08/04/cause-effect-diagrams/'>Corinna's experiences</a>",
    duration:  "20-60 complexity",
    photo:    "<a href='http://www.plans-for-retrospectives.com/static/images/activities/25_Cause-Effect-Diagramm.jpg' rel='lightbox[activity24]' title='Contributed by Corinna Baldauf'>Voir la Photo</a>",
    suitable: "release, project, smallGroups, complex"
};
all_activities[25] = {
    phase:     2,
    name:      "Speed Dating",
    summary:   "Chaque membre de l'équipe explore un sujet en détail dans une série de discussions en tête à tête",
    desc:      "Chaque participant écrit un sujet qu'il souhaite approfondir, càd quelque chose \
    qu'il aimerait voir changer. Formez ensuite des paires et répartissez vous à travers la salle. \
    Chaque paire discute des deux sujets et réfléchit aux actions possibles - 5 minute par\
    participant (sujet) - l'un après l'autre. \
    Après 10 minutes les paires se séparent et forment de nouvelles paires. Continuez \
    jusqu'à ce que tout le monde ait discuté avec tout le monde. <br>\
    Si le groupe a un nombre impair de membres, le facilitateur devient membre d'une paire \
    mais son partenaire dispose de l'intégralité des 10 minutes sur son sujet.",
    source:    source_kalnin,
    duration:  "10 perPerson",
    suitable: "iteration, release, smallGroups"
};
all_activities[26] = {
    phase:     5,
    name:      "Biscuits Chinois de Rétrospective",
    summary:   "Amenez l'équipe manger à l'extérieur et suscitez des discussions avec des biscuits chinois de rétrospective ('retrospective cookies')",
    desc:      "Invitez l'équipe à manger à l'extérieur, de préférence Chinois si vous souhaitez \
    rester dans le thème ;)<br>\
    Distribuez des 'fortune cookies' (biscuits chinois renfermant un mot dans leur emballage) \
    et faites un tour de table en ouvrant les biscuits et en discutant leur contenu. \
    Quelques exemples de 'fortunes' :\
<ul>\
    <li>Quelle a été la chose la plus efficace que vous ayez fait durant le Sprint, et pourquoi \
    est-ce que cela a été si réussi ?</li>\
    <li>Est-ce que le burndown reflète la réalité ? Pourquoi ?</li>\
    <li>Que contribuez vous au sein de votre entreprise à la communauté de développeurs ? \
    Que pourriez vous contribuer ?</li>\
    <li>Quel a été le plus gros obstacle à l'équipe durant ce Sprint ?</li>\
</ul>\
Vous pouvez <a href='http://weisbart.com/cookies/'>commander des biscuits chinois de rétrospective chez Weisbart</a> \
ou cuisiner les vôtre, par exemple si l'Anglais n'est pas la langue natale de votre équipe.",
    source:    "<a href='http://weisbart.com/cookies/'>Adam Weisbart</a>",
    duration:  "90-120",
    suitable: "iteration, release, smallGroups"
};
all_activities[27] = {
    phase:     5,
    name:      "Faites un tour",
    summary:   "Rendez-vous dans le parc le plus proche et promenez vous en discutant",
    desc:      "Il fait beau dehors ? Alors pourquoi rester cloîtré à l'intérieur, sachant que la marche \
    oxygène le cerveau et le remplit d'idées 'sortant des sentiers battus'. \
    Sortez et effectuez une promenade dans le parc le plus proche. La discussion va naturellement \
    tourner autour du travail. C'est une pause sympathique dans la routine lorsque les choses se passent \
    relativement bien et que vous n'avez pas besoin de documentation visuelle pour faciliter la discussion. \
    Les équipes matures peuvent facilement exposer des idées et arriver à un consensus même dans une \
    configuration si informelle.",
    source:    source_findingMarbles,
    duration:  "60-90",
    suitable: "iteration, release, smallGroups, smoothSailing, mature"
};
all_activities[28] = {
    phase:     3,
    name:      "Cercles &amp; Soupe / Cercle d'influence",
    summary:   "Créez des actions basées sur le niveau de contrôle qu'a l'équipe sur leur réalisation",
    desc:      "Préparez un tableau avec 3 cercles concentriques, chacun suffisamment \
    grand pour pouvoir y coller des post-its. Nommez les 'L'équipe dirige - Action directe', \
    'L'équipe influence - Action persuasive / de recommandation' et \
    'La soupe - Action en réponse', respectivement du cercle intérieur vers extérieur. \
    ('La soupe' indique le système plus large dans lequel l'équipe est implantée.) \
    Reprenez vos idées de la phase précédente et placez les dans le cercle approprié.<br> \
    Les participants écrivent par paire des actions possibles. Encouragez les à se \
    concentrer sur les problèmes de leur cercle d'influence. Les paires affichent leurs \
    plans d'action à côté de leurs problèmes respectifs et les lisent à haute voix. \
    Décidez de quels plans essayer (par discussion, vote à la majorité, dot voting, ...)",
    source:    "<a href='http://www.futureworksconsulting.com/blog/2010/07/26/circles-and-soup/'>Diana Larsen</a> \
    qui l'a adapté de 'Les Sept Habitudes des gens efficaces' de Stephen Covey et \
    '<a href='http://www.ayeconference.com/wiki/scribble.cgi?read=CirclesOfControlInfluenceAndConcern'>CircleofInfluenceAndConcern</a>' par Jim Bullock",
    suitable: "iteration, release, project, stuck, immature"
};
all_activities[29] = {
    phase:     5,
    name:      "Feuilles de dialogue",
    summary:   "Une approche structurée de discussion",
    desc:      "Une feuille de dialogue ressemble un peu à un plateau de jeu de société. \
    Il existe <a href='http://www.softwarestrategy.co.uk/dlgsheets/available.html'>plusieurs feuilles différentes</a>. \
    Choisissez en une, imprimez la aussi grand que possible (de préférence au format A1) \
    et suivez les instructions.",
    source:    "<a href='http://www.softwarestrategy.co.uk/dlgsheets/available.html'>Allen Kelly - Software Strategy</a>",
    duration:  "90-120",
    suitable: "iteration, release, project"
};
