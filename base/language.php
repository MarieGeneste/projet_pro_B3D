<?php
  session_start();
  $translate = array(
    'french' => array(
      'menu_home' => 'Accueil',
      'menu_society' => 'Société',
      'menu_products' => 'Produits',
      'menu_products_chestnut' => 'Châtaignier',
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
    'english' => array(

    'menu_home' => 'Home',
    'menu_society' => 'Society',
    'menu_products' => 'Products',
    'menu_products_chestnut' => 'Chestnut',
    'menu_products_pine' => 'Pine',
    'menu_products_acacia' => 'Acacia',
    'menu_contact' => 'Contact',
    'society_aboutme_title' => "Company presentation",
    'society_aboutme_desc' => "With 20 years of experience in the woods, I wanted to go back to basics by settling in the old family sawmill located closer to the forest resource. I specialized in the manufacture of pickets and logs of acacia, pines or chestnut. My flexible and flexible production tool makes it possible to produce stakes or rounded or round logs of different dimensions. Designed for growers, landscapers, arboriculturists, or just for individuals wanting to create a fence or a garden, stakes or logs B3D are a safe bet.",
    'society_img1' => 'test1',
    'society_img2' => 'test3',
    'society_img3' => 'test3',
    'society_img4' => 'test4',
    'society_img5' => 'test5',
    'society_img6' => 'test6',
    'footer_title' => 'Contact',
    'footer_address_title' => 'Address',
    'footer_address' => '22 Hsesdca street of swdew -<br>19000 Tulle',
    'footer_schedule_title' => 'Schedule',
    'footer_schedule' => 'Monday - Friday <br>09:00 - 12:00 / 13:00 - 17:00',
    'footer_phone_title' => 'Phone',
    'footer_phone' => 'fixed: +33.751.40.33.21 mobile: +33.632.43.23.12',
    'footer_email_title' => 'Email',

    'footer_copyright' => "B3D, ". date('Y') .". All rights reserved.<br> Copies of documents only if there is a link indexed to the source.",
    'footer_dev' => "Website developed by:",
    //----------------------
    'products_title' => "Products",
    'products_text' => "<p>Our stakes and logs are produced from logs operated within a radius of 70 km. The pine comes from threshholds planted after the 1999 storm.</p> <p>These juvenile woods generally used for the establishment of anti-hail nets or trellising have a very low proportion of heartwood giving them a very good ability to autoclave treatment.</p> <p>Our acacia logs contain a very small amount of sapwood and tight growth rings giving the wood excellent natural durability and very good mechanical strength. All of our wood comes from sustainably managed cuts and generally benefits from PEFC certification.</p>",
    'products_prod1_title' => "Chestnut stakes",
    'products_prod1_text' => "test",
    'products_prod1_btn' => "Our chestnut products",

    'products_prod2_title' => "Acacia stakes",
    'products_prod2_text' => "All of our acacia products are debarked to bring more aesthetics and cleanliness to stakes but especially to avoid transporting parasites like xylophagous insects on the site of the clientele. Our acacia stakes are slotted or flat and a square tip with an area between 1 and 1.5 cm2 is made big end.",
    'products_prod2_btn' => "Our acacia products",

    'products_prod3_title' => "Pine stakes",
    'products_prod3_text' => "Our pins and poles pins are flat and a square tip of an area between 1 and 1.5 cm2 is made big end. The quality of our wood conforms to the specifications of standard NF B 50-100-3 for a class of class IV use after having undergone an autoclave treatment using the vacuum Bethell process and pressure of 12 bars in a CTB B + certified station.",
    'products_prod3_btn' => "Our pine products",

    'prod1_title' => "Chestnut stakes",
    'prod1_text' => "test",

    'prod2_title' => "Acacia stakes",
    'prod2_text' => "<p>All of our acacia products are debarked to bring more aesthetics and cleanliness to stakes but especially to avoid transporting parasites like xylophagous insects on the site of the clientele.</p> <p>Our acacia stakes are slotted or flat and a square tip with an area between 1 and 1.5 cm2 is made big end.</p> <p>The slot operation allows the wood to retain its mechanical strength and limit drying deformations.</p>",

    'prod3_title' => "Pine stakes",
    'prod3_text' => "<p>Our pins and poles pins are flat and a square tip of an area between 1 and 1.5 cm2 is made big end.</p><p>The quality of our wood conforms to the specifications of standard NF B 50-100-3 for a class of class IV use after having undergone an autoclave treatment using the vacuum Bethell process and pressure of 12 bars in a CTB B + certified station.</p> <p>The proportion of heartwood present in our pines is low which allows penetration and retention of optimum preservative for increased longevity of our stakes and poles.</p>",

    'form_title' => "Contact form",

    'form_firstname_label' => "First name",
    'form_firstname_placeholder' => "Your first name",

    'form_lastname_label' => "Last name",
    'form_lastname_placeholder' => "Your last name",

    'form_email_label' => "Email",
    'form_email_placeholder' => "Your email",

    'form_phone_label' => "Phone",
    'form_phone_placeholder' => "Your phone",

    'form_message_label' => "Message",
    'form_message_placeholder' => "Your message",

    'form_required' => "This is required information",
    'form_rgpd' => "I have read and accept  <a href='rgpd.php'>the site's privacy policy</a>",
    'form_btn' => "Send",

    'form_thanks' => "Thank you.",
    'form_error' => "Error sending the form",

    'rgpd_title' => "Privacy policy",
    'rgpd_text' => "test",

    ),
  );

  $_SESSION['translate'] = $translate['french'];
  var_dump($_SESSION['translate']);
?>
