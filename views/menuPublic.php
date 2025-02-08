<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu2</title>

    <link rel="stylesheet" href="css/navbar3.css">

</head>
<body>
    <?php if ($_SESSION["admin"]): ?>
        
            <nav class="nav">
                <ul>
                                      
                    
                    
                    <li class="menuIns">
                        <span> Insertion</span>
                        <ul class="submenu"> 
                            <li><a  href="../../admin.php?pgAdmin=pgEt">Insertion Etudiant</a></li>
                            <li><a href="../../admin.php?pgAdmin=pgProf">Insertion professeur</a></li>
                            <li><a href="../../admin.php?pgAdmin=pgProf&pg=insertCours"> Insertion cours</a></li>
                        </ul>
                    </li>
                    
                    <li class="menuLi">
                        <span>Liste</span>
                        <ul class="submenu">
                            <li><a href="../../admin.php?pgAdmin=pgEt&pg=listeEt"> Liste des étudiants </a></li>
                            <li><a href="../../admin.php?pgAdmin=pgProf&pg=listeProf"> Liste des professeurs </a></li>
                            <li><a href="../../admin.php?pgAdmin=pgCours&pg=listeCours">Liste des cours</a></li>
                        </ul>
                    </li>
                    
                    
                        <li class="menuPub">
                            <span>Publication</span>
                            <ul class="submenu">
                                <li><a href="../../admin.php?pgPublic=messProf&pg=insMprof&id=">Publier message</a></li>
                                <li><a href="../../admin.php?pgPublic=messProf&pg=showMprof&pg1=choixCours">Publications</a></li>
                            </ul>
                        </li>
                    
                        <li class="menuPub">
                            <span>Publication</span>
                            <ul class="submenu">
                                <li><a href="../../admin.php?pgPublic=messProf&pg=showMprof&pg1=choixCours">Publications professeurs</a></li>
                            </ul>
                        </li>
                        <li class="menuMess">
                            <span>Message</span>
                                <ul class="submenu">
                                    <li><a href="sendMessageView.php">Nouveau Message</a></li>
                                    <li><a href="listReceivedMessagesView.php">Boîte de réception</a></li>
                                    <li><a href="listSentMessagesView.php">Boîte d'envoi</a></li>
                                </ul>
                        </li>
                                        


                    <li class="menuDec"><a href="../../controllers/logout.php">Deconnexion</a></li>

                </ul>
            </nav>

    <?php else:?>
            <nav class="nav">
                <ul>
                   
                    
                    <li class="menuLi">
                        <span>Liste</span>
                        <ul class="submenu">
                            <li><a href="../../admin.php?pgPublic=pgEtudiant"> Liste des étudiants </a></li>
                            <li><a href="../../admin.php?pgPublic=pgProfesseur"> Liste des professeurs </a></li>
                            <li><a href="../../admin.php?pgPublic=pgCours">Liste des cours</a></li>
                        </ul>
                    </li>

                   
                        <li class="menuPub">
                            <span>Publication</span>
                            <ul class="submenu">
                                <li><a href="../../admin.php?pgPublic=messProf&pg=insMprof&id=">Publier message</a></li>
                                <li><a href="../../admin.php?pgPublic=messProf&pg=showMprof&pg1=choixCours">Publications</a></li>
                            </ul>
                        </li>
                    
                        <li class="menuPub">
                            <span>Publication</span>
                            <ul class="submenu">
                                <li><a href="../../admin.php?pgPublic=messProf&pg=showMprof&pg1=choixCours">Publications professeurs</a></li>
                            </ul>
                        </li>
                        <li class="menuMess">
                            <span>Message</span>
                                <ul class="submenu">
                                    <li><a href="sendMessageView.php">Nouveau Message</a></li>
                                    <li><a href="listReceivedMessagesView.php">Boîte de réception</a></li>
                                    <li><a href="listSentMessagesView.php">Boîte d'envoi</a></li>
                                </ul>
                        </li>
                       
                    
                    <li class="menuDec"><a href="../../controllers/logout.php">Deconnexion</a></li>

                </ul>
            </nav>
    <?php endif;?>
</body>
</html>
<!-- © 2025 RaHaTex - Tous droits réservés. -->