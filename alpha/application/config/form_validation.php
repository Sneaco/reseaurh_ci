<?php
$config = array(
        'site/ajouter_membre' => array(
                array(
                        'field' => 'nom',
                        'label' => 'nom',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'prenom',
                        'label' => 'prénom',
                        'rules' => 'trim|required'
                ),
                array(
                        'field' => 'age',
                        'label' => 'âge',
                        'rules' => 'trim|required|numeric'
                )
        )
);