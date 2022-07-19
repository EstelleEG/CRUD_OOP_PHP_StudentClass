<?php 
require('Database.php');

    class Student {
        
        public int $id;
        public string $nom;
        public string $prenom;
     

        public function __construct(int $id, string $nom, string $prenom) {
            $this->setId($id);
            $this->setNom($nom);
            $this->setPrenom($prenom);
        }

        public function getId(): int {
            return $this->id;
        }

        public function getNom(): string {
            return $this->nom;
        }

        public function getPrenom(): string {
            return $this->prenom;
        }


        public function setId(int $id)
        {
            $this->id = $id; 
        }

        public function setNom(string $nom)
        {
            $this->nom = $nom; 
        }

        public function setPrenom(string $prenom)
        {
            $this->prenom = $prenom; 
        }


        //ADD DATAS INSERT
        public function insert(){
            try{
                $pdo = Database::getConnection();
           
                $query = 'INSERT INTO Student (nom, prenom) 
                VALUES(:nom, :prenom)';
    
                $preparedQuery = $pdo->prepare($query);
    
                $preparedQuery->bindParam(':nom', $this->nom);
                $preparedQuery->bindParam(':prenom', $this->prenom);
                
    
                $preparedQuery->execute();
                echo "Data inserted successfully";
                header("Location: ./form.php");
            }
            catch(Exception $e){
             echo $e->getMessage();
             exit;
            }
        }


        public function fetchAll(){
            $pdo = Database::getConnection();
            $query = 'SELECT * FROM Student';
            $preparedQuery = $pdo->prepare($query);
            $preparedQuery->execute();
            return $preparedQuery->fetchAll();
            echo "Data fetched successfully";
            header("Location: ./form.php");
        }


        public function fetchOne(){
            $pdo = Database::getConnection();
            $query = 'SELECT * FROM Student WHERE id = ?';
            $preparedQuery = $pdo->prepare($query);
            $preparedQuery->execute();
            return $preparedQuery->fetchAll();
            echo "Data fetched successfully";
            header("Location: ./form.php");

        }


        //UPDATE DATAS IN THE DB
        public function update(){
            $pdo = Database::getConnection();
            //$query = "UPDATE Student SET nom = :nomUpdated WHERE nom = :nom"; //sql query
            $query = "UPDATE Student SET id = :id WHERE WHERE id = :id"; 
            $preparedQuery = $pdo->prepare($query);
            $preparedQuery->bindParam(':id', $this->id);
            $preparedQuery->bindParam(':nom',$this->nom);
            $preparedQuery->execute();
            echo "Data updated successfully";
            header("Location: ./form.php");
        }


        public function delete(){
            $pdo = Database::getConnection();
            //$query = "DELETE FROM Student WHERE nom = :nom"; 
            $query = "DELETE FROM Student WHERE id = :id"; 
            $preparedQuery = $pdo->prepare($query);
            $preparedQuery->bindParam(':id', $this->id);
            $preparedQuery->execute();
            echo "Data deleted successfully";
            //header("Location: ./form.php");
    
        }




    }