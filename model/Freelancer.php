<?php
/**
 * Created by PhpStorm.
 * User: Kevin Chege
 * Date: 19/05/2019
 * Time: 17:14
 */

class Freelancer
{
    private $conn;
    private $table = 'freelancers';

    public $id;
    public $user_id;
    public $title;
    public $about;
    public $skills;
    public $location;
    public $pricing;
    public $website;
    public $dateAdded;
    public $lastUpdated;

    /**
     * Passenger constructor.
     */
    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function addFreelancer()
    {
        try {
            $query = 'INSERT INTO ' . $this->table . '
                SET 
                user_id = :user_id,
                title = :title,
                about = :about,
                skills = :skills,
                location = :location,
                pricing = :pricing,
                website = :website
            ';
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':user_id', htmlspecialchars(strip_tags($this->user_id)));
            $stmt->bindParam(':title', htmlspecialchars(strip_tags($this->title)));
            $stmt->bindParam(':about', htmlspecialchars(strip_tags($this->about)));
            $stmt->bindParam(':skills', htmlspecialchars(strip_tags($this->skills)));
            $stmt->bindParam(':location', htmlspecialchars(strip_tags($this->location)));
            $stmt->bindParam(':pricing', htmlspecialchars(strip_tags($this->pricing)));
            $stmt->bindParam(':website', htmlspecialchars(strip_tags($this->website)));

            $stmt->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function editFreelancer()
    {
        try {
            $query = 'UPDATE ' . $this->table . '
                SET 
                user_id = :user_id,
                title = :title,
                about = :about,
                skills = :skills,
                location = :location,
                pricing = :pricing,
                website = :website
            ';
            $stmt = $this->conn->prepare($query);

            $stmt->bindParam(':user_id', htmlspecialchars(strip_tags($this->user_id)));
            $stmt->bindParam(':title', htmlspecialchars(strip_tags($this->title)));
            $stmt->bindParam(':about', htmlspecialchars(strip_tags($this->about)));
            $stmt->bindParam(':skills', htmlspecialchars(strip_tags($this->skills)));
            $stmt->bindParam(':location', htmlspecialchars(strip_tags($this->location)));
            $stmt->bindParam(':pricing', htmlspecialchars(strip_tags($this->pricing)));
            $stmt->bindParam(':website', htmlspecialchars(strip_tags($this->website)));

            $stmt->execute();
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getFreelancers()
    {
        try {
            $query = 'SELECT f.*, u.name AS name, u FROM freelancers f, registration u WHERE f.user_id = u.id';
            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getFreelancerByUserId()
    {
        try {
            $query = "SELECT f.*, CONCAT(u.first_name, ' ', u.last_name) AS name, u.email AS email FROM freelancers f, registration u WHERE f.user_id = u.id AND f.user_id=:user_id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':user_id', htmlspecialchars(strip_tags($this->user_id)));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            throw $e;
        }
    }

    public function getFreelancerById()
    {
        try {
            $query = "SELECT f.*, CONCAT(u.first_name, ' ', u.last_name) AS name FROM freelancers f, registration u WHERE f.user_id = u.id AND f.id=:id";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(':id', htmlspecialchars(strip_tags($this->id)));
            $stmt->execute();

            return $stmt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            throw $e;
        }
    }
}