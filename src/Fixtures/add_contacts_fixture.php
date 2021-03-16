<?php

class add_contacts_fixture
{
    private $conn;

    private $data =
        [
            [
                'id' => 'null',
                'name' => 'Иброхим',
                'mobile_number' =>'+992935622211',
                'home_number' =>'+992372289637',
                'email' =>'irgashev1200@gmail.com',
                'reserve_email' =>'irgashev1261@gmail.com',
            ],

            [
                'id' => 'null',
                'name' => 'Камолиддин',
                'mobile_number' =>'+992987654321',
                'home_number' =>'',
                'email' =>'kamoliddin@mail.ru',
                'reserve_email' =>'',
            ],

            [
                'id' => 'null',
                'name' => 'Мехрубон',
                'mobile_number' =>'+992963852741',
                'home_number' =>'',
                'email' =>'mehrubon@mail.ru',
                'reserve_email' =>'mehrubon_1@mail.ru',
            ],

            [
                'id' => 'null',
                'name' => 'Икром',
                'mobile_number' =>'+992951623847',
                'home_number' =>'+992372285527',
                'email' =>'ikrom@gmail.com',
                'reserve_email' =>'',
            ],

            [
                'id' => 'null',
                'name' => 'Бахром',
                'mobile_number' =>'+99222558877',
                'home_number' =>'+992372285526',
                'email' =>'bahrom@ya.ru',
                'reserve_email' =>'bahrom@gmail.com',
            ],

            [
                'id' => 'null',
                'name' => 'Мухаммад',
                'mobile_number' =>'+992985647793',
                'home_number' =>'+992372285525',
                'email' =>'muhammad@gmail.com',
                'reserve_email' =>'',
            ],

            [
                'id' => 'null',
                'name' => 'Эрадж',
                'mobile_number' =>'+992777888999',
                'home_number' =>'+992372285525',
                'email' =>'eraj@gmail.com',
                'reserve_email' =>'eraj@ya.ru',
            ],

            [
                'id' => 'null',
                'name' => 'Марям',
                'mobile_number' =>'+992102105108',
                'home_number' =>'+992372285524',
                'email' =>'maryam@gmail.com',
                'reserve_email' =>'maryam@mail.ru',
            ],

            [
                'id' => 'null',
                'name' => 'Мавзуна',
                'mobile_number' =>'+992001002003',
                'home_number' =>'+992372285523',
                'email' =>'mavzuna@gmail.com',
                'reserve_email' =>'mavzuna_1@gmail.com',
            ],

            [
                'id' => 'null',
                'name' => 'Заррина',
                'mobile_number' =>'+992888555222',
                'home_number' =>'+992372285522',
                'email' =>'zarrina@gmail.com',
                'reserve_email' =>'zarrina_1@gmail.com',
            ],

        ];

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost', 'root', 'root', 'contacts1');
    }
    public function run()
    {
        foreach ($this->data as $info)
        {
            $result = mysqli_query($this->conn, "INSERT INTO contacts VALUES (
				" . $info['id'] . ",
				'" . $info['name'] . "',
				'" . $info['mobile_number'] . "',
				'" . $info['home_number'] . "',
				'" . $info['email'] . "',
				'" . $info['reserve_email'] . "')");
            if (!$result)
            {
                print mysqli_error($this->conn) . PHP_EOL;
            }
        }
    }
}