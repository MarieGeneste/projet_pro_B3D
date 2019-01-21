<?php
  session_start();
  $translate = array(
    'french' => array(
      'menu_home' => 'Accueil',
      'menu_society' => 'Société',
      'menu_products' => 'Produits',
      'menu_products_chestnut' => 'Chataignier',
      'menu_products_pine' => 'Pin',
      'menu_products_acacia' => 'Accacia',
      'menu_contact' => 'Contact',
      'society_aboutme_title' => "Présentation société",
      'society_aboutme_desc' => "Fort de 20 ans d’expérience dans la lière bois, j’ai souhaité faire un retour aux sources en m’installant dans l’ancienne scierie familiale située au plus près de la ressource forestière. Je me suis spécialisé dans la fabrication de piquets et rondins d’acacia, pins ou châtaignier. Mon outil de production souple et flexible permet de produire des piquets ou rondins fendus ou ronds de différentes dimensions. Destinés aux vignerons, paysagistes, arboriculteurs, ou tout simplement aux particuliers désireux de créer une clôture ou un aménagement de jardin, les piquets ou rondins B3D sont une valeur sûre.",
      'society_img1' => 'test1',
      'society_img2' => 'test3',
      'society_img3' => 'test3',
      'society_img4' => 'test4',
      'society_img5' => 'test5',
      'society_img6' => 'test6',
      'footer_title' => 'Contact',
      'footer_address_title' => 'Adresse',
      'footer_address' => '22 rue Hsesdca des swdew <br>19000 Tulle',
      'footer_schedule_title' => 'Horaires',
      'footer_schedule' => 'Lundi - Vendredi <br>09:00 - 12:00 / 13:00 - 17:00',
      'footer_phone_title' => 'Téléphone',
      'footer_phone' => 'fixe: +33.751.40.33.21 portable: +33.632.43.23.12',
      'footer_email_title' => 'Courreil',

      'footer_copyright' => "B3D, ". date('Y') .". Tous droits réservés.<br> Copies des documents uniquement s'il existe un lien indexé vers la source.",
      'footer_dev' => "Site développé par:",
      //----------------------
      'products_title' => "Produits",
      'products_text' => "<p>Nos piquets et rondins sont produits à partir de grumes exploitées dans un rayon de 70 km. Le pin provient de coupes d’éclaircies plantées après la tempête de 1999.</p> <p>Ces bois juvéniles utilisés généralement pour la mise en place de filets anti-grêle ou le palissage comportent une très faible proportion de bois de cœur leurs donnant une très bonne aptitude au traitement autoclave.</p> <p>Nos grumes d’acacia comportent une très faible quantité d’aubier et des cernes d’accroissement serrées conférant au bois une excellente durabilité naturelle et une très bonne résistance mécanique. L’ensemble de nos bois proviennent de coupes gérées durablement et bénéficie généralement de la certification PEFC.</p>",
      'products_prod1_title' => "Piquets chataigner",
      'products_prod1_text' => "test",
      'products_prod1_btn' => "Nos produits chataigner",

      'products_prod2_title' => "Piquets accacia",
      'products_prod2_text' => "L’ensemble de nos produits acacia sont écorcés pour apporter plus d’esthétique et de propreté aux piquets mais surtout pour éviter de transporter des parasites comme des insectes xylophages sur le site de la clientèle. Nos piquets acacia sont fendus ou planés et une pointe carrée d’une surface comprise entre 1 et 1,5 cm2 est réalisée gros bout.",
      'products_prod2_btn' => "Nos produits accacia",

      'products_prod3_title' => "Piquets pin",
      'products_prod3_text' => "Nos piquets et poteaux pins sont planés et une pointe carrée d’une surface comprise entre 1 et 1,5 cm2 est réalisée gros bout. La qualité de nos bois est conforme aux spécifications de la norme NF B 50-100-3 pour une classe d’emploi classe IV après avoir subi un traitement en autoclave suivant le procédé Bethell vide et pression 12 bars dans une station certifiée CTB B+.",
      'products_prod3_btn' => "Nos produits pin",

      'prod1_title' => "Piquets en chataîgnier",
      'prod1_text' => "test",

      'prod2_title' => "Piquets en accacia",
      'prod2_text' => "<p>L’ensemble de nos produits acacia sont écorcés pour apporter plus d’esthétique et de propreté aux piquets mais surtout pour éviter de transporter des parasites comme des insectes xylophages sur le site de la clientèle.</p> <p>Nos piquets acacia sont fendus ou planés et une pointe carrée d’une surface comprise entre 1 et 1,5 cm2 est réalisée gros bout.</p> <p>L’opération de fente permet au bois de conserver sa résistance mécanique et limiter les déformations de séchage.</p>",

      'prod3_title' => "Piquets en pin",
      'prod3_text' => "<p>Nos piquets et poteaux pins sont planés et une pointe carrée d’une surface comprise entre 1 et 1,5 cm2 est réalisée gros bout.</p><p>La qualité de nos bois est conforme aux spécifications de la norme NF B 50-100-3 pour une classe d’emploi classe IV après avoir subi un traitement en autoclave suivant le procédé Bethell vide et pression 12 bars dans une station certifiée CTB B+.</p> <p>La proportion de bois de cœur présente dans nos pins est faible ce qui permet une pénétration et une rétention de produit de préservation optimum pour longévité accrue de nos piquets et poteaux.</p>",

      'form_title' => "Formulaire de contact",

      'form_firstname_label' => "Prénom",
      'form_firstname_placeholder' => "Votre prénom",

      'form_lastname_label' => "Nom",
      'form_lastname_placeholder' => "Votre nom",

      'form_email_label' => "Adresse mail",
      'form_email_placeholder' => "Votre adresse mail",

      'form_phone_label' => "Téléphone",
      'form_phone_placeholder' => "Votre téléphone",

      'form_message_label' => "Message",
      'form_message_placeholder' => "Votre message",

      'form_required' => "C'est informations sont requises",
      'form_rgpd' => "J’ai lu et j'accepte <a href='rgpd.php'>la politique de confidentialité</a> du site",
      'form_btn' => "Envoyer",

      'form_thanks' => "Merci à vous.",
      'form_error' => "Erreur à l'envoie du formulaire",

        'rgpd_title' => "Politique de confidentialité",
        'rgpd_text' => "test",

    ),
    'english' => array(''),
  );

  $_SESSION['translate'] = $translate['french'];
  var_dump($_SESSION['translate']);
?>
