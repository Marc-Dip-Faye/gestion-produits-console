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

    // 2
    function affichageCategorieSansProduit(array $categories):void{
        foreach ($categories as  $categorie ) {
            if (empty($categorie["produits"])) {
                echo $categorie["nom"]."\n";
            }
        }
    }
    affichageCategorieSansProduit($categories);

    // 3
    function saisieChaine(string $message): string {
        return readline($message);  
    }

     function champObligatoire(string $value,string $message): bool{
    if (empty($value)) {
        echo $message."\n";
        return  false;
    }
        return true;
    }
