<?php

    /*
     * Author : GUIRADO-PATRICO Nathan
     * Date : 08/01/2020
     * Project Name : Password Stronger
     * Detail : Create a strong Random Password Data String
     */

    /* Fonction PHP : Générer un Mot de Passe Aléatoire de 6 caractères */
    function passwordStronger(int $nbr){

        $data = "123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz@#$%&*_?!;";
        return substr(str_shuffle($data), 0, $nbr);

    }

    /* Appel Fonction PHP : Générer Nouveau Mot de Passe */
    echo passwordStronger(8);