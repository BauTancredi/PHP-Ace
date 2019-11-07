<?php
 
class User {
  protected $fullname;
  protected $email;
  protected $password;
  protected $avatar;
  public static $USERS_FILE_PATH = "data/users.json";

 
  public function __construct($fullname, $email, $password, $avatar) {
    $this->fullname = $fullname;
    $this->email = $email;
    $this->password = $password;
    $this->avatar = $avatar;
  }

  public static function save($user){
    $users = User::getAllUsers();
    $users[] = $user;
    User::saveAllUsers($users);
  }

  public static function getAllUsers() {
    $content = file_get_contents(User::$USERS_FILE_PATH);
    $allUsersAsArray = json_decode($content, true);
    $users = [];
    foreach ($allUsersAsArray as $userArr) {
      $users[] = User::fromArray($userArr);
    }
    return $users;
  }
 
  public static function saveAllUsers($users) {
    $usersAsArray = [];
    foreach ($users as $user) {
      $usersAsArray[] = $user->toArray();
    }
    file_put_contents(User::$USERS_FILE_PATH, json_encode($usersAsArray));
  }

  public function toArray() {
    return [
      "fullname" => $this->fullname,
      "email" => $this->email,
      "password" => $this->password,
      "avatar" => $this->avatar,
    ];
  }
 
  public static function fromArray($userArr) {
    return new User($userArr["fullname"], $userArr["email"], $userArr["password"], $userArr["avatar"]);
  }

  public function getFullname() {
    return $this->fullname;
  }
 
  public function getEmail() {
    return $this->email;
  }
 
  public function getPassword() {
    return $this->password;
  }
 
  public function getAvatar() {
    return $this->avatar;
  }
}
