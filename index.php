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

    // 3 Enregistrer une nouvelle categorie
        
    do{
        $codeValide = true;
        $code = readline("Saisir le code : ");
        if(empty($code) == false){
            for($index = 0; $index < count($categories); $index++){
                if($categories[$index]["code"] == $code){
                    $codeValide = false;
                    echo "Ce code existe déjà \n";
                }
            }
        }else{
            $codeValide = false;
            echo "Ce champ est obligatoire !!\n";
        }
    }while(!$codeValide);
   
    do{
        $nomValide = true;
        $nom = readline("Saisir le nom : ");
        if(empty($nom) == false){
            for($index = 0; $index < count($categories); $index++){
                if($categories[$index]["nom"] == $nom){
                    $nomValide = false;
                    echo "Ce nom existe déjà \n";
                }
            }
        }else{
            $nomValide = false;
            echo "Ce champ est obligatoire !!\n";
        }
    }while(!$nomValide);

    $categorie = [
        "nom" => $nom,
        "code" => $code,
        "listeProduits" => []
    ];