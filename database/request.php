<?php 

  //Pour l'équipe d'inté
  require_once('database.php'); //Chemin à changer
  require_once('../Class/User.php');



    function recupUtilisateur($mail, $password) {

      $user = new User;
      $db = dbConnect();

      $statement = $db->prepare("SELECT * FROM Users WHERE mail LIKE :mail AND password LIKE :password");
      $statement->bindParam(':mail',$mail);
      $hash = hash('sha256', $password);
      $statement->bindParam(':password', $hash);
      $statement->execute();
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      var_dump($result);
      $user->setPseudo($result[0]["pseudo"]);
      $skudskud = $user->getPseudo();
      var_dump($db);
      echo $skudskud;
    }

  //recupUtilisateur('nicoa','password');


    function addUser($usr,$pass) {

      $db = dbConnect();
      

      /*$usr->setPseudo('tedzst');
      $usr->setNom('nodzm');
      $usr->setPrenom('tedzst');
      $usr->setMail('test@tesdzdt.com');
      $usr->setDateNaissance('1999-12-27');
      $usr->setDateInscription('1983-06-01'); DEBUG
      $usr->setBio('tdzest');
      $usr->setAdmin(1);*/

      

      $statement = $db->prepare("INSERT INTO Users (id_user,pseudo,nom,prenom,mail,password,date_naissance,date_inscription,biographie,admin)
      VALUES (:id_user,:pseudo,:nom,:prenom,:mail,:password,:date_naissance,:date_inscription,:biographie,:admin)");

      $statement->bindParam(':id_user',$void);
      $statement->bindParam(':pseudo',$pseudo);
      $statement->bindParam(':nom',$nom);
      $statement->bindParam(':prenom',$prenom);
      $statement->bindParam(':mail',$mail);
      $statement->bindParam(':password',$pass);
      $statement->bindParam(':date_naissance',$dateN);
      $statement->bindParam(':date_inscription',$dateI);
      $statement->bindParam(':biographie',$bio);
      $statement->bindParam(':admin',$admin);

      $void = '';
      $pseudo = $usr->getPseudo();
      $nom = $usr->getNom();
      $prenom = $usr->getPrenom();
      $mail = $usr->getMail();
      $dateN = $usr->getDateNaissance();
      $dateI = $usr->getDateInscription();
      $bio = $usr->getBio();
      $admin = $usr->getAdmin();

      $statement->execute();



    }

  
    //addUser($usr,$password);

    function delUser($id) {
      $db = dbConnect();

      $statement = $db->prepare('DELETE FROM Users WHERE id_user = '.$id);
      $statement->execute();
    }



?>