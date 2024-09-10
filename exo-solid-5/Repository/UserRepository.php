<?php

require_once 'RepositoryInterface.php';
require_once 'User.php';

class UserRepository implements RepositoryInterface
{
    private ?DatabaseInterface $database ;

    public function __construct(DatabaseInterface $database) 
    {
        $this->database = $database;
    }

    public function getUser(string $userEmail) : User
    {
        
        $usersArray = $this->database->fetchAll();

        foreach ($usersArray as $user) {
            if ($user['email'] === $userEmail) {
                return new User($user['full_name'], $user['email']);
            }
        }
    }

    public function getUsers() : array
    {
        $users =[];
        $results = $this->database->fetchAll();

        foreach($results as $user){
            $users[] = new User($user['full_name'], $user['email']);
        }

        return $users;
    }
}