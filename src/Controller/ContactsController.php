<?php

include_once __DIR__ . "/../Model/Contacts.php";

class ContactsController
{
    private $conn;

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', 'root', 'contacts1');
    }

    public function create()
    {
        include_once __DIR__ . "/../../views/contacts/form.php";
    }

    public function read()
    {
        $limit = intval($_GET['limit'] ?? Contacts::NUMBER_CONTACTS_PER_PAGE);
        $offset = (intval($_GET['page'] ?? 1) - 1) * $limit;
        $offset = $offset < 0 ? 0 : $offset;
        $query = '';
        if (isset($_GET['search'])) {
            $searchQ = $_GET['search'];

            $query =  " `name` LIKE '%$searchQ%' or
                `mobile_number` LIKE '%$searchQ%' or
                `home_number` LIKE '%$searchQ%' or
                `email` LIKE '%$searchQ%' or
                `reserve_email` LIKE '%$searchQ%'";
        }
        $all = (new Contacts())->all($limit, $offset, $query);
        include_once __DIR__ . "/../../views/contacts/list.php";
    }

    public function update()
    {
        $id = (int) $_GET['id'];

        if (empty($id)) die('Undefined ID');

        $one = (new Contacts())->getById($id);

        if (empty($one)) die('Contact not found');

        include_once __DIR__ . "/../../views/contacts/form.php";
    }

    public function delete()
    {
        $id = (int) $_GET['id'];
        (new Contacts())->deleteById($id);

        return $this->read();
    }

    public function save()
    {
        if (!empty($_POST))
        {
            $contacts = new Contacts(
                intval($_POST['id']),
                $_POST['name'],
                ($_POST['mobile_number']),
                ($_POST['home_number']),
                $_POST['email'],
                $_POST['reserve_email']
        );
            $contacts->save();
        }
        return $this->read();
    }
}