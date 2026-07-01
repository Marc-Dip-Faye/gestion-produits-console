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


    // Ajouter un produit à un catégorie
    // Rechercher une categorie à partir de son code

    $categorieExiste = false;
    $code = readline("Saisir le code : ");
    for($index = 0; $index < count($categories); $index++){
        if($code == $categories[$index]["code"]){
            $categorieExiste = true;
            break;
        }
    }

    if($categorieExiste){
        $listeProduit = [
            "nom" => readline("saisir le nom du produit à ajouter : "),
            "reference" => readline("saisir la reference : "),
            "prix" => (int)readline("saisir le prix : "),
            "quantite" => (int)readline("saisir la quantité : ")
        ];
        $categories[$index]["produits"][] = $listeProduit;
    }else{
        echo " désolé , la categorie n'existe pas...\n";
    }

    // 5 Ajouter une catégorie en lui affectant des produits

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

    $produits = [];
    do {
    $produit = [
            "nom" => readline("saisir le nom : "),
            "reference" => readline("saisir la reference : "),
            "prix" => (int)readline("saisir le prix : "),
            "quantite" => (int)readline("saisir la quantité : ")
            ];
    $produits[]= $produit;
    $choix = strtolower(readline(" voulez vous continuer  oui/non "));
        
    } while($choix === "oui");

    $categorie = [
        "code" => $code,
        "nom" => $nom,
        "produits" =>  $produits 
    ];

    $categories[] = $categorie;