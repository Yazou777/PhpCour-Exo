<?php
    mail('dave.loper@afpa.com',
         'Confirmation d inscription',
         'Bienvenue sur Jarditou ! Tu peux y acheter des tomates cerises pour lapéro et une brouette pour les transporter. Sors vite ton American Express !',
         array('From' => 'contact@jarditou.com',
                'Reply-To' => 'commercial@jarditou.com',
                'X-Mailer' => 'PHP/' . phpversion() 
                )
        );
        ?>