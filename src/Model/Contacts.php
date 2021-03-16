<?php


class Contacts
{
    const NUMBER_CONTACTS_PER_PAGE = 7;

    public $id;
    public $name;
    public $mobileNumber;
    public $homeNumber;
    public $email;
    public $reserveEmail;

    private $conn;

    public function __construct(
        $id = null,
        $name = null,
        $mobileNumber = null,
        $homeNumber = null,
        $email = null,
        $reserveEmail = null)
    {
        $this->conn = mysqli_connect('localhost', 'root', 'root', 'contacts1');

        $this->id = $id;
        $this->name = $name;
        $this->mobileNumber = $mobileNumber;
        $this->homeNumber = $homeNumber;
        $this->email = $email;
        $this->reserveEmail = $reserveEmail;
    }

    public function save()
    {
            if ($this->id > 0) {
                $query = "UPDATE `contacts` set 
                    `name` = '" . $this->name . "', 
                    `mobile_number` = '" . $this->mobileNumber . "', 
                    `home_number` = '" . $this->homeNumber . "', 
                    `email` = '" . $this->email . "', 
                    `reserve_email` = '". $this->reserveEmail . "' where id=" . $this->id . " ";
            }
            else {
                $query = "INSERT INTO `contacts` (
                    `id`, 
                    `name`, 
                    `mobile_number`, 
                    `home_number`, 
                    `email`, 
                    `reserve_email`) VALUES (
                        null,
                        '" . $this->name . "', 
                        '" . $this->mobileNumber . "', 
                        '" . $this->homeNumber . "', 
                        '" . $this->email . "', 
                        '" . $this->reserveEmail . "'
                    )";
            }
            $error = mysqli_error($this->conn);
            mysqli_query($this->conn, $query) or die(mysqli_error($this->conn));
    }

    public function all($limit = self::NUMBER_CONTACTS_PER_PAGE, $offset = 0, $conditions)
    {
        $query = "SELECT * from contacts";
        if ($conditions) {
            $query .= " WHERE $conditions";
        }
        $query .= " ORDER by `name` limit $offset, $limit";
        $result = mysqli_query($this->conn, $query );
        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function getById($id)
    {
        $result = mysqli_query($this->conn, "select * from contacts where id = $id");
        $one = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return reset($one);
    }

    public function deleteById($id)
    {
        mysqli_query($this->conn, "delete from contacts where id = $id");
    }
}