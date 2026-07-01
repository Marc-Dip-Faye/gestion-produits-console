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

    // 4

    function rechercheCategorieParCle(array $categories, string $key, string $value): int|bool {
        foreach ($categories as $index  => $categorie ) {
            if (($categorie[$key]) === $value) {
                return $index ;
            }
        } 
        return false;
    }

    function saisieChampObligatoireEtUnique(array $categories,string $smsSaisie, string $smsError,string $key): string{
    $valueIsValid = true;
    do {   
            $value = saisieChaine($smsSaisie);
            $valueIsValid = champObligatoire($value,$smsError);
            if($valueIsValid){     
                $valueIsValid =rechercheCategorieParCle($categories,$key,$value);
            }
        } while (!$valueIsValid);
        return $value;
    }

    // 5

    function enregistrerCategorie(): void{
    global $categories;
    $code = saisieChampObligatoireEtUnique($categories,"Entrez le code :", "champs obligatoire : ", "code");
    $nom = saisieChampObligatoireEtUnique($categories,"Entrez le nom :", "champs obligatoire : ", "nom");

    $categorie  =   [
            "code" => $code,
            "nom" => $nom,
            "produits" => []
         ];

    $categories[] = $categorie;
 }