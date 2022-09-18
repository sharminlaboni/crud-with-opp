<?php
namespace pondit\b7\Model;
class Student{
    public $servername = "localhost";
    public $username = "root";
    public $password = "";
    public $dbname = "my_db";
    public $pdo;
    function __construct(){
    try{
        $this->pdo = new \PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
        echo" connected sucessfully";
    }
    catch(\PDOException $e){
    echo "Connection failed:" . $e->getMessage();
    }

    } 
    function get_all() {
      $stmt = $this->pdo->prepare("SELECT * FROM users");
      $stmt->execute();
      $result = $stmt->fetchAll(\PDO::FETCH_ASSOC);
      return $result;
  }


  public function storedata($data){
$name = $data['name'];
$address = $data['address'];
$email = $data['email'];
$phone = $data['phone'];
$sql = "INSERT INTO users (name, address, email, phone) VALUES (:name, :address,:email, :phone)";
$stmt = $this->pdo->prepare($sql);
  } 

  public function show($getid)
  {  
    $id =$getid;
    $sql = $this->pdo->query("SELECT*FROM users WHERE id = $id");
    $user =$sql->fetch();
      return $user;   
  }
  public function update($data, $id)
  { 
    $id = $_GET['id'];
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$data=[
'id' => $id,
'name'=> $name,
'address'=>$address,
'email' =>$email,
'phone'=>$phone];

    $sql = "UPDATE users SET name ='$name', address = '$address', email ='$email', phone ='$phone' WHERE id=$id ";
$stmt = $this->pdo->prepare($sql);
$stmt->execute($data);
  } 

  

  public function delete($id)
  {
  
  
    $sql = $this->pdo->prepare("DELETE FROM users WHERE id = '$id'");
    $sql->execute();
      }

  


}

?>