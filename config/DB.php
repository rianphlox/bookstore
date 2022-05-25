<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    class DB {
        private $host;
        private $user;
        private $password;
        private $dbname;
        public $conn;

        public function __construct($host = 'localhost', $user = 'root', $password = '', $dbname = 'bookstore') {
            $this->host = $host;
            $this->user = $user;
            $this->password = $password;
            $this->dbname = $dbname;
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbname) or die("Failed to connect to MySQLi" . $this->conn->connect_error) ;
        }
        public function getAllBooks() {
            $sql = 'select * from bookstore';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
        }

        public function CreateUser($full_name, $email, $password) {
            if (!empty($full_name) && !empty($email) && !empty($password)) {
                // validate email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    // invalid email
                    return ['msg' => 'Please use a valid email', 'msgClass' => 'error', 'secondMsgClass' => '#fb3'];
                } else {
                    // check if user exists in database
                    $query = "SELECT id FROM users WHERE email = ?";
                    $stmt = $this->conn->prepare($query);
                    $stmt->bind_param('s' , $email);
                    $stmt->execute();
                    $stmt->bind_result($id);
                    $stmt->fetch();
                    if (!$id) {
                        // user not in database
                        $query = "INSERT INTO `users` (`full_name`, `email`, `password`) VALUES (?, ?, ?) ";
                        // $query = "INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES (NULL, 'Kylian', 'amos12@gmail.com', '1234');"
                        $stmt = $this->conn->prepare($query);
                        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                        $stmt->bind_param('sss', $full_name, $email, $hashedPassword);
                        if ($stmt->execute()) {
                            // create cart for user using email
                            // $this->CreateUserCart($email);
                            return ['msg' => 'Success!', 'msgClass' => 'success', 'secondMsgClass' => '#00c851'];
                        }
                    } else {
                        // user in database
                        return ['msg' => 'User already exists!', 'msgClass' => 'error', 'secondMsgClass' => '#fb3'];
                    }
                }
            } else {
                return ['msg' => 'Please include all fields', 'msgClass' => 'error', 'secondMsgClass' => '#fb3'];
            }
        }

        // public function $CreateUserCart($email) {

        // }

        public function LogUserIn($table='users', $email, $password) {
            if (!empty($email) && !empty($password)) {
                // validate email
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return ['msg' => 'Please use a valid email!', 'msgClass' => 'error', 'secondMsgClass' => '#fb3'];
                } else {
                    $query = "SELECT email, password FROM $table WHERE email = ? ";
                    $stmt = $this->conn->prepare($query);
                    $stmt->bind_param('s', $email);
                    $stmt->execute();
                    $stmt->bind_result($dbEmail, $hashedPassword);
                    $stmt->fetch();
                    // check if the email brought back is the same and verify the password
                    if ($dbEmail !== $email || password_verify($password , $hashedPassword) == false) {
                        // user not in database
                        return ['msg' => 'Incorrect email or password', 'msgClass' => 'error', 'secondMsgClass' => '#fb3'];
                    } else {
                        // user in db 
                        session_start();
                        $_SESSION['email'] = $email;
                        // session_destroy();
                        return ['msg' => 'Logged in!', 'msgClass' => 'success', 'secondMsgClass' => '#00c851'];
                    }
                }
            } else {
                return ['msg' => 'Please fill in all fields!', 'msgClass' => 'error', 'secondMsgClass' => '#fb3'];
            }
        }

        public function sanitize($field) {
            return htmlspecialchars(trim(stripslashes($field)));
        }


        public function addBook($bookname, $author, $price, $quantity, $category, $about) {
            $args = func_get_args();
            if (!empty($bookname) && !empty($author) && !empty($price) && !empty($category) && !empty($about)) {
                // first sanitize
                foreach($args as $arg) {
                    $arg = $this->sanitize($arg);
                }
                // check if book already exists
                $sql = "select id from bookstore where name = ?";
                $stmt = $this->conn->prepare($sql);
                $stmt->bind_param('s', $bookname);
                $stmt->execute();
                $stmt->bind_result($id);
                $stmt->fetch();
                if (!$id) {
                    $sql = "INSERT INTO bookstore (`name`, price, author, quantity, category, about) VALUES (?, ?, ?, ?, ?, ?)";
                    $stmt = $this->conn->prepare($sql);
                    $stmt->bind_param('sssiss', $bookname, $price, $author, $quantity, $category, $about);
                    if ($stmt->execute()) {
                        return ['msg' => 'New book listing Added'];
                    }
                } else {
                    return array('msg' => 'Book with that name exists! Contact support', 'msgClass' => 'error');
                }

            } else {
                return ['msg' => 'Please fill in all fields.', 'msgClass' => 'warning'];
            }
            
        }
        
    }

    
    