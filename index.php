<?php
    $categories = [
        [
            "nom" => "Alimentaire",
            "code" => "2465",
            "listeProduits" => [
                [
                    "nom" => "Lait",
                    "reference" => "A23L",
                    "quantite" => 20,
                    "prix" => 3200
                ],
                [
                    "nom" => "Sucre",
                    "reference" => "A4CS",
                    "quantite" => 60,
                    "prix" => 7000
                ]
            ],  
        ],
        [
            "nom" => "Cosmetique",
            "code" => "4190",
            "listeProduits" => []
        ]
    ];

    // 2 Afficher les categorie qui n'ont pas de produits
    for($index = 0; $index < count($categories); $index++){
        if(count($categories[$index]["listeProduits"]) == 0){
            echo $categories[$index]["nom"]."\n";
        }
    }