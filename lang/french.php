<?php
define("accept_Login_01","Vous n'�tes pas enregistr�. <br /> Veuillez v�rifier votre certificat et confirmer l'enregistrement.");
define("accept_Login_02","Informations du certificat");
define("accept_Login_03","D�livr� �:");
define("accept_Login_04","Nom commun (CN)");
define("accept_Login_05","Num�ro de s�rie");
define("accept_Login_06","Adresse �lectronique");
define("accept_Login_07","D�livr� par:");
define("accept_Login_08","Organisation");
define("accept_Login_09","Unit� d'organisation");
define("accept_Login_10","D�livr� le");
define("accept_Login_11","Expire le");
define("accept_Login_12","Inscription avec ce certificat?<br /><br />".
                         "Seul le num�ro de s�rie du certificat sera stock�. Vous devrez fournir le nom commun du certificat (\"Common Name\") si vous souhaitez obtenir un attestation imprim�e apr�s passage du test<br />".
                         "Aucune attestation imprim�e ne peut �tre d�livr�e pour les certificats anonymes (dont le nom commun est \"CAcert WoT User\").");
define("accept_Login_13","validit�:");
define("Button_01","Cr�er une nouvelle mati�re");
define("Button_02","Retour � la table des mati�res");
define("Button_03","Retour � la liste des questions");
define("Button_04","Nouvelle question");
define("Button_05","Afficher sous forme de liste");
define("Button_06","Affichage graphique (lignes)");
define("Button_07","Affichage graphique (barres)");
define("Button_08","Meilleure r�ponse");
define("Button_09","Plus mauvaise r�ponse");
define("Button_10","Connexion r�ussie");
define("Button_11","enregistrer");
define("Button_12","enregistrer les modifications");
define("Button_13","�diter les r�ponses");
define("Button_14","Ajouter la r�ponse");
define("Button_15","Supprimer la r�ponse");
define("Button_16","�valuer le test");
define("Button_17","Informations statistiques");
define("Button_18","Informations de l'utilisateur");
define("Button_19","Statistiques du test");
define("Check_Cert_01","Votre nom doit �tre inclus dans le certificat si vous souhaitez obtenir une attestation par courrier postal ou par courrier �lectronique.<br />Vous pouvez continuer l'enregistrement, mais vous ne pouvez pas choisir les options <i>par courrier postal </i> ou <i>par courrier �lectronique.</i>.<br /> Vous pouvez �galement annuler cette inscription et vous enregistrer avec un autre certificat, dans lequel votre nom est inclus pour obtenir une attestation par courrier postal.");
define("certificateDocu_01","Si vous le souhaitez, nous pouvons vous fournir un document attestant que vous avez pass� le test d'accr�diteur. Le document sera �mis � votre nom comme indiqu� dans votre certifcat num�rique.");
define("certificateDocu_02","Non, je ne souhaite pas ce document.");
define("certificateDocu_03","Oui, envoyez-moi s'il vous plait le document en pi�ce-jointe au format pdf par courriel. Nous utiliserons l'adresse �lectronique fournie dans le certificat.");
define("certificateDocu_04","Oui, envoyez-moi s'il vous plait le document par l'interm�diaire du service postal � l'adresse suivante:");
define("certificateDocu_05","pr�nom");
define("certificateDocu_06","nom");
define("certificateDocu_07","rue");
define("certificateDocu_08","code postal");
define("certificateDocu_09","lieu");
define("certificateDocu_10","d�partement");
define("certificateDocu_11","pays");
define("certificateDocu_12","tous les champs doivent �tre rempli, si vous souhaitez le recevoir par courrier postal.");
define("Class_Answer_01","d�tails des r�ponses");
define("Class_Answer_02","r�ponses");
define("Class_Answer_03","r�ponse");
define("Class_Answer_04","Au moins 2 r�ponses � donner.");
define("Class_Answer_05","r�ponses au moins une r�ponse doit �tre marqu�e comme 'correct' et au moins 2 doivent �tre fournies.");
define("Class_Answer_06","Au moins une r�ponse doit �tre marqu�e comme 'correct'.");
define("Class_Answer_07","Dans un texte � trous, les r�ponses correctes et incorrectes doivent �tre diff�rents.");
define("Class_Answer_08","Il a au moins une bonne et une mauvaise r�ponse.");
define("Class_Answer_09","vrai");
define("Class_Answer_10","faux");
define("Class_Progress_01","nombre de questions");
define("Class_Progress_02","Trop de donn�es stock�es dans la base de donn�es. "); // geh?rt zu Lernfortschritte_angezeigt
define("Class_Progress_03","voir le dernier test");
define("Class_Progress_04","progr�s de l'apprentissage");
define("Class_Progress_05","Plus aucune donn�e disponible"); /*Bsp: Keine weiteren Infos zu : 5 Fragen */
define("Class_Progress_06","Aucune information disponible pour:");
define("Class_Progress_07","question(s)");
define("Class_Progress_08","questions r�ponses incorrecte");
define("Class_Question_01","Cliquez ici pour voir plus d'informations sur ce sujet");
define("Class_Question_02","d�sactiver la question");
define("Class_Question_03","activer la question");
define("Class_Question_04","supprimer la question");
define("Class_Question_05","questions non disponibles dans la base de donn�es");
define("Class_Question_06","d�tails sur la question");
define("Class_Quiz_01","il y a pas assez de questions � ce sujet. Veuillez choisir un autre sujet.");
define("Class_Quiz_02","test");
define("Class_Quiz_03","test d'�valuation");
define("Class_Quiz_04","Votre score total est:");
define("Class_Quiz_05","Le minimum obligatoire pour valider le test est:");
define("Class_Quiz_06","Vous avez atteint: "); /*Bsp: vous avez atteint 0 %  .... */
define("Class_Quiz_07","et par cons�quent vous");/* vous avez atteint 0 %  et donc vous n'avez pas r�ussit le test   */
define("Class_Quiz_08","avez r�ussi le test.");
define("Class_Quiz_09","n'avez pas r�ussi le test.");/*Bsp:You have reached 0 %  and so you did not pass  */
define("Class_Quiz_10_AnonymousCert", "Vous avez fait le test � l'aide d'un certificat anonyme, vous ne pouvez donc pas demander une version imprim�e ou en PDF de l'attestation de r�ussite du test.<br />");
define("Class_Quiz_11_RequestCert", "Demander une attestation de r�ussite");
/*
define("Class_Quiz_12_ExplainCert", "En raison de probl�mes de confidentialit�, nous ne recueillons pas vos donn�es personnelles ici.<br /><br />".                                  
                                    "Pour demander une attestation papier ou PDF, envoyez un courriel � <a class=\"http\" href=\"mailto:education@cacert.org?subject=Certificat pour AssurerChallenge\">education@cacert.org</a> en pr�cisant si vous souhaitez une version papier ou une version PDF. Si vous d�sirez une attestation imprim�e, veuillez inclure votre adresse postale.<br />".
                                    "Le courriel peut �tre <a class=\"http\" href=\"education.txt\">chiffr�</a> et <b>doit �tre sign� par le certificat que vous avez utilis� pour effectuer le test</b> ainsi, nous pouvons v�rifier la r�ussite du test en v�rifiant son num�ro de s�rie. ".
                                    "Jetez un oeil � la zone situ�e dans le coin sup�rieur droit ( \"connect� en tant que:\") pour v�rifier les informations sur le certificat que vous utilisez.<br />".
                                    "<br /><em>Pour un certificat imprim�, nous vous demandons pour un don de 5 euros pour l'envoi en Europe et de 10 euros pour un envoi dans le reste du monde, afin de couvrir les frais d'exp�dition.<br />".
                                    "Cliquez sur le bouton ci-dessous pour faire un don � CAcert via Paypal, la page suivante vous pr�sente les m�thodes disponibles pour faire un don <a class=\"http\" href=\"https://www.cacert.org/index.php?id=13\">https://www.cacert.org/index.php?id=13</a>.</em><br />".
                                    "<br />Nous sommes d�sol�s pour le d�sagr�ment..<br />");
*/
define("Class_Quiz_12_ExplainCert", "Due to privacy concerns we may not collect your personal data here.<br /><br />".
                                    "We currently cannot process requests for Certificates of Achievement. You may nevertheless request on by mailing to <a class=\"http\" href=\"mailto:education@cacert.org?subject=Certificate for AssurerChallenge\">education@cacert.org</a> but please expect that handling the request may need a <b>very</b> long time!<br />".
                                    "<br />We are sorry for the inconvenience.<br />");
define("Class_Quiz_13_Donate5", "5 euros pour les frais d'exp�dition en Europe");
define("Class_Quiz_14_Donate10", "10 euros pour les frais hors Europe");
define("Class_Topic_01","nom");
define("Class_Topic_02","no. des questions");
define("Class_Topic_03","questions par test");
define("Class_Topic_04","exigence");
define("Class_Topic_05","�diter la rubrique");
define("Class_Topic_06","Activer la rubrique");
define("Class_Topic_07","D�sactiver la rubrique: toutes les questions de cette rubrique vont �tre d�sactiv�es �galement.");
define("Class_Topic_08","Supprimer la rubrique avec affect�e toutes les questions et r�ponses");
define("Class_Topic_09","Le pourcentage minimum qui doit �tre un nombre et ne doit pas �tre plus grand que 100.");
define("Class_Topic_10","rubrique existe d�j�.");
define("Class_Topic_11","Nombre de questions doit �tre un entier non n�gatif.");
define("Class_Topic_12","exigence");
define("Collect_Question_01","Cette question existe d�j�. ");
define("Collect_Question_02","Au moins un �cart doit �tre d�fini. Les espaces sont cr��s par [ ]. La bonne r�ponse est � l'int�rieur des crochets. Tous les supports doivent �tre ferm�s.");
define("Collect_Question_03","saisir la question");
define("Function_getContent_01","Bienvenue");
define("Function_getContent_02_Intro",'<div class="centered">Pour une courte introduction, veuillez jetez un oeil � <a href="http://wiki.cacert.org/wiki/AssurerChallenge" rel="external">le WiKi</a></div><br />');
define("Function_getTopic_01","Afficher la progression");
define("Function_getTopic_02","Afficher les statistiques");
define("Function_getTopic_03","d�marrer le test");
define("Function_reallyDel_01","effacement");
define("Function_reallyDel_02","�tes-vous certain de vouloir supprimer cette rubrique?");
define("Function_reallyDel_03","Si vous confirmez la suppression, toutes les questions et r�ponses seront supprim�es �galement.");
define("Function_reallyDel_04","�tes-vous certain de vouloir supprimer cette question?");
define("Get_Content_01","Inscription annul�e.");
define("Global_01","vous devez �tre connect� pour utiliser cette fonction");
define("Global_02","pr�c�dent");
define("Global_03","corriger");
define("Global_04","date");
define("Global_05","r�sultat");
define("Global_06","ID");
define("Global_07",'<h4 class="centered">Aucune donn�e disponible</h4>');
define("Global_08","question");
define("Global_09","sujet");
define("Global_10","pos");
define("Global_11","fr�quence");
define("Global_12","type de question");
define("Global_13","Oui");
define("Global_14","Non");
define("Global_15","r�pondu correctement dans %");
define("Global_16","Vous n'�tes pas connect� actuellement");
define("Global_17","La connexion a �chou�. Un certificat CAcert client valide est requis.");
define("Global_18","Question ID");
define("Global_19","Echec de connexion");
define("Global_20","description");
define("Index_01","Connect� en tant que:");
define("Login_01","Votre certificat n'a pas pu �tre valid�.");
define("Login_02","Votre certificat a �t� r�voqu�.");
define("Login_03_No_Org_Certs","Les certificats d'organisation ne sont pas accept�s pour le CATS car ils ne sont pas directement li�s � un compte utilisateur.");
define("Login_04_No_Server_Certs","Your certificate does not contain an Email field, you are probably using a server certificate.<br />".

define("Menue_01","Aide");
define("Menue_02","connexion");
define("Menue_03","d�connexion");
define("Menue_04","progr�s");
define("Menue_05","statistiques");
define("Menue_06","Tests");
define("Menue_07","Th�mes");
define("Menue_08","switch to EN");
define("Menue_09","zu DE wechseln");
define("Menue_10","changer vers FR"); /* ?? a rajout� certainement has certainly added */
define("Statistic_01","meilleur r�sultat pour sujet: ");
define("Statistic_02","pires r�sultats pour sujet: ");
define("Statistic_03","questions dans cette rubrique:");
define("Statistic_04","R�ussi");
define("Statistic_05","�chec");
define("Statistic_06","Infos utilisateur");
define("Statistic_07","Utilisateur");
define("Statistic_08","utilisateurs enregistr�s");
define("Statistic_09","administrateurs");
define("Statistic_10","certificats racine");
define("Statistic_11","certificat de classe I utilisateur");
define("Statistic_12","certificat de classe III utilisateur");
define("Statistic_13","param�tres de langue");
define("Statistic_14","allemand");
define("Statistic_15","anglais");
define("Statistic_16","option de livraison ");
define("Statistic_17","courrier postal");
define("Statistic_18","courriel");
define("Statistic_19","aucun");
define("Statistic_20","infos de test");
define("Statistic_21","date");
define("Statistic_22","tests termin�s");
define("Statistic_23","tests r�ussis");
define("Statistic_24","fran�ais"); /* ligne rajout� num�rotation d�caler a corrig� lors de l'int�gration Line numbering added offset corrected during the integration */
define("Title_01","CATS rubriques");
define("Title_02","CATS collecte les questions");
define("Title_03","CATS statistiques");
define("Title_04","d�marrer le test CATS");
define("Title_05","CATS D�couvrez les progr�s");
define("Title_06","CATS informations certificat");
define("Topic_01","Remarque: Vous ne pouvez pas d�clarer des r�ponses comme correcte ici, alors qu'elles ont �t� d�clar�es incorrectes ci-dessous.");
define("Topic_02","Pr�sentation des rubriques");
define("Topic_03","questions sur cette rubrique:");
?>
