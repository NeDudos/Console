<?php 
$mystring = "Hello Word";

$myarray = [
                "name" => "Иван",
                "position" => "Директор",
                "employees" => [
                    [
                        "name" => "Андрей",
                        "position" => "Зам. Директора",
                        "employees" => [
                            [
                                "name" => "Максим",
                                "position" => "Дворник",
                            ],
                            [
                                "name" => "Алексей",
                                "position" => "Охранник",
                            ]
                        ],
                    ],
                ],
 ];
file_put_contents('myjson.json',$myarray);
?>