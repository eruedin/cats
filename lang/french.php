<?php
define("accept_Login_01","Vous n'êtes pas enregistré. <br /> Veuillez vérifier les informations de votre certificat et confirmer l'enregistrement.");
define("accept_Login_02","Informations du certificat");
define("accept_Login_03","Délivré à:");
define("accept_Login_04","Nom commun (CN)");
define("accept_Login_05","Numéro de série");
define("accept_Login_06","Adresse électronique");
define("accept_Login_07","Délivré par:");
define("accept_Login_08","Organisation");
define("accept_Login_09","Unité d'organisation");
define("accept_Login_10","Délivré le");
define("accept_Login_11","Expire le");
define("accept_Login_12","Inscription avec ce certificat?<br /><br />".
                         "Seul le numéro de série du certificat sera stocké. Vous devrez fournir le nom commun du certificat (\"Common Name\") si vous souhaitez obtenir une attestation imprimée après réussite du test<br />".
                         "Aucune attestation imprimée ne peut être délivrée pour les certificats anonymes (dont le nom commun est \"CAcert WoT User\").");
define("accept_Login_13","Validité:");
define("Button_01","Créer un nouveau sujet");
define("Button_02","Retour à la gestion des sujets");
define("Button_03","Retour à la gestion des questions");
define("Button_04","Nouvelle question");
define("Button_05","Afficher sous forme de liste");
define("Button_06","Affichage graphique (lignes)");
define("Button_07","Affichage graphique (barres)");
define("Button_08","Meilleure réponse");
define("Button_09","Plus mauvaise réponse");
define("Button_10","Connexion réussie");
define("Button_11","enregistrer");
define("Button_12","enregistrer les modifications");
define("Button_13","Modifier les réponses");
define("Button_14","Ajouter la réponse");
define("Button_15","Supprimer la réponse");
define("Button_16","Évaluer le test");
define("Button_17","Informations statistiques");
define("Button_18","Informations de l'utilisateur");
define("Button_19","Statistiques du test");
define("Check_Cert_01","Votre nom doit être inclus dans le certificat si vous souhaitez obtenir une attestation par courrier postal ou par courrier électronique.<br />Vous pouvez continuer l'enregistrement, mais vous ne pouvez pas choisir les options <i>par courrier postal </i> ou <i>par courrier électronique.</i>.<br /> Vous pouvez également annuler cette inscription et vous enregistrer avec un autre certificat, dans lequel votre nom est inclus pour obtenir une attestation par courrier postal.");
define("certificateDocu_01","Si vous le souhaitez, nous pouvons vous fournir un document attestant que vous avez réussi le test d'accréditeur. Le document sera émis à votre nom comme indiqué dans votre certifcat numérique.");
define("certificateDocu_02","Non, je ne souhaite pas ce document.");
define("certificateDocu_03","Oui, envoyez-moi s'il vous plait le document en pièce-jointe au format pdf par courriel. Nous utiliserons l'adresse électronique fournie dans le certificat.");
define("certificateDocu_04","Oui, envoyez-moi s'il vous plait le document par l'intermédiaire du service postal à l'adresse suivante:");
define("certificateDocu_05","prénom");
define("certificateDocu_06","nom");
define("certificateDocu_07","rue");
define("certificateDocu_08","code postal");
define("certificateDocu_09","localité");
define("certificateDocu_10","département");
define("certificateDocu_11","pays");
define("certificateDocu_12","tous les champs doivent être rempli, si vous souhaitez le recevoir par courrier postal.");
define("Class_Answer_01","détails des réponses");
define("Class_Answer_02","réponses");
define("Class_Answer_03","réponse");
define("Class_Answer_04","Au moins 2 réponses à donner.");
define("Class_Answer_05","Au moins une réponse doit être marquée comme 'correct' et au moins 2 réponses doivent être fournies.");
define("Class_Answer_06","Au moins une réponse doit être marquée comme 'correct'.");
define("Class_Answer_07","Dans un texte à trous, les réponses correctes et incorrectes doivent être différentes.");
define("Class_Answer_08","Il doit y avoir au moins une bonne et une mauvaise réponse.");
define("Class_Answer_09","vrai");
define("Class_Answer_10","faux");
define("Class_Progress_01","nombre de questions");
define("Class_Progress_02","Trop de données stockées dans la base de données. "); // geh?rt zu Lernfortschritte_angezeigt
define("Class_Progress_03","voir le dernier test");
define("Class_Progress_04","progrès de l'apprentissage");
define("Class_Progress_05","Plus aucune donnée disponible"); /*Bsp: Keine weiteren Infos zu : 5 Fragen */
define("Class_Progress_06","Plus d'information disponible pour:");
define("Class_Progress_07","question(s)");
define("Class_Progress_08","questions avec réponses incorrectes");
define("Class_Question_01","Cliquez ici pour voir plus d'informations sur ce sujet");
define("Class_Question_02","désactiver la question");
define("Class_Question_03","activer la question");
define("Class_Question_04","supprimer la question");
define("Class_Question_05","questions non disponibles dans la base de données");
define("Class_Question_06","détails sur la question");
define("Class_Quiz_01","il y a pas assez de questions à ce sujet. Veuillez choisir un autre sujet.");
define("Class_Quiz_02","test");
define("Class_Quiz_03","test d'évaluation");
define("Class_Quiz_04","Votre score total est:");
define("Class_Quiz_05","Le minimum requis pour valider le test est:");
define("Class_Quiz_06","Vous avez atteint: "); /*Bsp: vous avez atteint 0 %  .... */
define("Class_Quiz_07","et par conséquent vous");/* vous avez atteint 0 %  et donc vous n'avez pas réussit le test   */
define("Class_Quiz_08","avez réussi le test.");
define("Class_Quiz_09","n'avez pas réussi le test.");/*Bsp:You have reached 0 %  and so you did not pass  */
define("Class_Quiz_10_AnonymousCert", "Vous avez fait le test à l'aide d'un certificat anonyme, vous ne pouvez donc pas demander une version imprimée ou en PDF de l'attestation de réussite du test.<br />");
define("Class_Quiz_11_RequestCert", "Demander une attestation de réussite");
/*
define("Class_Quiz_12_ExplainCert", "Par soucis du respect de la vie privée, nous ne recueillons pas vos données personnelles ici.<br /><br />".                                  
                                    "Pour demander une attestation papier ou PDF, envoyez un courriel à <a class=\"http\" href=\"mailto:education@cacert.org?subject=Certificat pour AssurerChallenge\">education@cacert.org</a> en précisant si vous souhaitez une version papier ou une version PDF. Si vous désirez une attestation imprimée, veuillez inclure votre adresse postale.<br />".
                                    "Le courriel peut être <a class=\"http\" href=\"education.txt\">chiffré</a> et <b>doit être signé par le certificat que vous avez utilisé pour effectuer le test</b> ainsi, nous pouvons vérifier la réussite du test en vérifiant son numéro de série. ".
                                    "Jetez un oeil à la zone située dans le coin supérieur droit ( \"connecté en tant que:\") pour vérifier les informations sur le certificat que vous utilisez.<br />".
                                    "<br /><em>Pour un certificat imprimé, nous vous demandons un don de 5 euros pour l'envoi en Europe et de 10 euros pour un envoi dans le reste du monde, afin de couvrir les frais d'expédition.<br />".
                                    "Cliquez sur le bouton ci-dessous pour faire un don à CAcert via Paypal, la page suivante vous présente les méthodes disponibles pour faire un don <a class=\"http\" href=\"https://www.cacert.org/index.php?id=13\">https://www.cacert.org/index.php?id=13</a>.</em><br />".
                                    "<br />Nous sommes désolés pour le désagrément..<br />");
*/
define("Class_Quiz_12_ExplainCert", "Due to privacy concerns we may not collect your personal data here.<br /><br />".
                                    "We currently cannot process requests for Certificates of Achievement. You may nevertheless request on by mailing to <a class=\"http\" href=\"mailto:education@cacert.org?subject=Certificate for AssurerChallenge\">education@cacert.org</a> but please expect that handling the request may need a <b>very</b> long time!<br />".
                                    "<br />We are sorry for the inconvenience.<br />");
define("Class_Quiz_13_Donate5", "5 euros pour les frais d'expédition en Europe");
define("Class_Quiz_14_Donate10", "10 euros pour les frais hors Europe");
define("Class_Topic_01","nom");
define("Class_Topic_02","no. des questions");
define("Class_Topic_03","questions par test");
define("Class_Topic_04","exigence");
define("Class_Topic_05","Éditer la rubrique");
define("Class_Topic_06","Activer la rubrique");
define("Class_Topic_07","Désactiver la rubrique: toutes les questions de cette rubrique vont être désactivées également.");
define("Class_Topic_08","Supprimer la rubrique avec affectée toutes les questions et réponses");
define("Class_Topic_09","Le pourcentage minimum qui doit être un nombre et ne doit pas être plus grand que 100.");
define("Class_Topic_10","rubrique existe déjà.");
define("Class_Topic_11","Nombre de questions doit être un entier non négatif.");
define("Class_Topic_12","exigence");
define("Collect_Question_01","Cette question existe déjà. ");
define("Collect_Question_02","Au moins un écart doit être défini. Les espaces sont créés par [ ]. La bonne réponse est à l'intérieur des crochets. Tous les supports doivent être fermés.");
define("Collect_Question_03","saisir la question");
define("Function_getContent_01","Bienvenue");
define("Function_getContent_02_Intro",'<div class="centered">Pour une courte introduction, veuillez jetez un oeil à <a href="http://wiki.cacert.org/wiki/AssurerChallenge" rel="external">le WiKi</a></div><br />');
define("Function_getTopic_01","Afficher la progression");
define("Function_getTopic_02","Afficher les statistiques");
define("Function_getTopic_03","démarrer le test");
define("Function_reallyDel_01","effacement");
define("Function_reallyDel_02","Êtes-vous certain de vouloir supprimer cette rubrique?");
define("Function_reallyDel_03","Si vous confirmez la suppression, toutes les questions et réponses seront supprimées également.");
define("Function_reallyDel_04","Êtes-vous certain de vouloir supprimer cette question?");
define("Get_Content_01","Inscription annulée.");
define("Global_01","vous devez être connecté pour utiliser cette fonction");
define("Global_02","précédent");
define("Global_03","corriger");
define("Global_04","date");
define("Global_05","résultat");
define("Global_06","ID");
define("Global_07",'<h4 class="centered">Aucune donnée disponible</h4>');
define("Global_08","question");
define("Global_09","sujet");
define("Global_10","pos");
define("Global_11","fréquence");
define("Global_12","type de question");
define("Global_13","Oui");
define("Global_14","Non");
define("Global_15","répondu correctement dans %");
define("Global_16","Vous n'êtes pas connecté actuellement");
define("Global_17","La connexion a échoué. Un certificat CAcert client valide est requis.");
define("Global_18","Question ID");
define("Global_19","Echec de connexion");
define("Global_20","description");
define("Index_01","Connecté en tant que:");
define("Login_01","Votre certificat n'a pas pu être validé.");
define("Login_02","Votre certificat a été révoqué.");
define("Login_03_No_Org_Certs","Les certificats d'organisation ne sont pas acceptés pour le CATS car ils peuvent être difficilement liés à un compte utilisateur.");
define("Login_04_No_Server_Certs","Your certificate does not contain an Email field, you are probably using a server certificate.<br />".

define("Menue_01","Aide");
define("Menue_02","connexion");
define("Menue_03","déconnexion");
define("Menue_04","progrès");
define("Menue_05","statistiques");
define("Menue_06","Tests");
define("Menue_07","Sujets");
define("Menue_08","switch to EN");
define("Menue_09","zu DE wechseln");
define("Menue_10","changer vers FR"); /* ?? a rajouté certainement has certainly added */
define("Statistic_01","meilleur résultat pour le sujet: ");
define("Statistic_02","plus mauvais résultats pour le sujet: ");
define("Statistic_03","questions dans cette rubrique:");
define("Statistic_04","Réussi");
define("Statistic_05","Échec");
define("Statistic_06","Infos utilisateur");
define("Statistic_07","Utilisateur");
define("Statistic_08","utilisateurs enregistrés");
define("Statistic_09","administrateurs");
define("Statistic_10","certificats racine");
define("Statistic_11","certificat de classe I utilisateur");
define("Statistic_12","certificat de classe III utilisateur");
define("Statistic_13","paramètres de langue");
define("Statistic_14","allemand");
define("Statistic_15","anglais");
define("Statistic_16","option de livraison ");
define("Statistic_17","courrier postal");
define("Statistic_18","courriel");
define("Statistic_19","aucun");
define("Statistic_20","infos de test");
define("Statistic_21","date");
define("Statistic_22","tests terminés");
define("Statistic_23","tests réussis");
define("Statistic_24","français"); /* ligne rajouté numérotation décaler a corrigé lors de l'intégration Line numbering added offset corrected during the integration */
define("Title_01","Sujet CATS");
define("Title_02","CATS collecte les questions");
define("Title_03","CATS statistiques");
define("Title_04","Démarrer le test CATS");
define("Title_05","Progrès d'apprentissage CATS");
define("Title_06","CATS informations certificat");
define("Topic_01","Remarque: Vous ne pouvez pas déclarer des réponses comme correctes ici, alors qu'elles ont été déclarées incorrectes ci-dessous.");
define("Topic_02","Vue d'ensemble des sujets");
define("Topic_03","Questions sur ce sujet:");
?>
