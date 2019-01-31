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
      'products_prod1_text' => "<p>Moins durable dans le temps que l’acacia, le châtaignier en reste néanmoins une essence imputrescible grâce à sa présence d’acide tanique.</p><p>
      L’ensemble de nos produits châtaignier sont écorcés pour apporter plus d’esthétique et de propreté aux piquets mais surtout pour éviter de transporter des parasites sur le site de la clientèle. Nos piquets acacia sont fendus ou planés et une pointe carrée d’une surface comprise entre 1 et 1,5 cm² est réalisée gros bout.</p>",
      'products_prod1_btn' => "Nos produits chataigner",

      'products_prod2_title' => "Piquets accacia",
      'products_prod2_text' => "L’ensemble de nos produits acacia sont écorcés pour apporter plus d’esthétique et de propreté aux piquets mais surtout pour éviter de transporter des parasites comme des insectes xylophages sur le site de la clientèle. Nos piquets acacia sont fendus ou planés et une pointe carrée d’une surface comprise entre 1 et 1,5 cm2 est réalisée gros bout.",
      'products_prod2_btn' => "Nos produits accacia",

      'products_prod3_title' => "Piquets pin",
      'products_prod3_text' => "Nos piquets et poteaux pins sont planés et une pointe carrée d’une surface comprise entre 1 et 1,5 cm2 est réalisée gros bout. La qualité de nos bois est conforme aux spécifications de la norme NF B 50-100-3 pour une classe d’emploi classe IV après avoir subi un traitement en autoclave suivant le procédé Bethell vide et pression 12 bars dans une station certifiée CTB B+.",
      'products_prod3_btn' => "Nos produits pin",

      'prod1_title' => "Piquets en chataîgnier",
      'prod1_text' => "<p>Moins durable dans le temps que l’acacia, le châtaignier en reste néanmoins une essence imputrescible grâce à sa présence d’acide tanique.</p><p>
      L’ensemble de nos produits châtaignier sont écorcés pour apporter plus d’esthétique et de propreté aux piquets mais surtout pour éviter de transporter des parasites sur le site de la clientèle. Nos piquets acacia sont fendus ou planés et une pointe carrée d’une surface comprise entre 1 et 1,5 cm² est réalisée gros bout.</p><p>
      L’opération de fente permet au bois de conserver sa résistance mécanique et limiter les déformations de séchage.</p>",

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
      'rgpd_text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc luctus blandit massa nec sodales. Vestibulum vehicula quam mi, non scelerisque elit congue ut. Morbi eu risus dolor. Curabitur fermentum, erat vel fringilla auctor, est leo vulputate arcu, et accumsan lacus augue sed augue. Aenean porttitor risus vel consequat fermentum. Fusce pharetra neque bibendum mauris suscipit, et scelerisque nisl bibendum. Phasellus venenatis ac augue sit amet pharetra. Aenean dapibus lorem non elementum bibendum. Nunc accumsan diam id ligula consequat tempor. Proin viverra mauris sed augue pharetra imperdiet. Nulla sed lectus ut leo lacinia feugiat non vel orci. Maecenas felis sapien, vehicula quis metus sit amet, rutrum ullamcorper lorem. Quisque placerat rutrum odio, id laoreet elit finibus sed. Praesent laoreet consequat diam, eu hendrerit velit semper in. Fusce ipsum dui, tempus eget lacus sed, volutpat consectetur nisi. Fusce non dapibus mauris.",

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
    'products_prod1_text' => "<p>Less durable in time than acacia, chestnut remains nevertheless a rot-proof species due to its presence of tannic acid.</p><p>
All of our chestnut products are debarked to bring more aesthetics and cleanliness to the stakes but especially to avoid carrying parasites on the site of customers. Our acacia stakes are slotted or flat and a square tip with an area between 1 and 1.5 cm² is made big end.</p>",
    'products_prod1_btn' => "Our chestnut products",

    'products_prod2_title' => "Acacia stakes",
    'products_prod2_text' => "All of our acacia products are debarked to bring more aesthetics and cleanliness to stakes but especially to avoid transporting parasites like xylophagous insects on the site of the clientele. Our acacia stakes are slotted or flat and a square tip with an area between 1 and 1.5 cm2 is made big end.",
    'products_prod2_btn' => "Our acacia products",

    'products_prod3_title' => "Pine stakes",
    'products_prod3_text' => "Our pins and poles pins are flat and a square tip of an area between 1 and 1.5 cm2 is made big end. The quality of our wood conforms to the specifications of standard NF B 50-100-3 for a class of class IV use after having undergone an autoclave treatment using the vacuum Bethell process and pressure of 12 bars in a CTB B + certified station.",
    'products_prod3_btn' => "Our pine products",

    'prod1_title' => "Chestnut stakes",
    'prod1_text' => "<p>Less durable in time than acacia, chestnut remains nevertheless a rot-proof species due to its presence of tannic acid.</p><p>
All of our chestnut products are debarked to bring more aesthetics and cleanliness to the stakes but especially to avoid carrying parasites on the site of customers. Our acacia stakes are slotted or flat and a square tip with an area between 1 and 1.5 cm² is made big end.</p><p>
The slot operation allows the wood to retain its mechanical strength and limit drying deformations.</p>",

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
    'rgpd_text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc luctus blandit massa nec sodales. Vestibulum vehicula quam mi, non scelerisque elit congue ut. Morbi eu risus dolor. Curabitur fermentum, erat vel fringilla auctor, est leo vulputate arcu, et accumsan lacus augue sed augue. Aenean porttitor risus vel consequat fermentum. Fusce pharetra neque bibendum mauris suscipit, et scelerisque nisl bibendum. Phasellus venenatis ac augue sit amet pharetra. Aenean dapibus lorem non elementum bibendum. Nunc accumsan diam id ligula consequat tempor. Proin viverra mauris sed augue pharetra imperdiet. Nulla sed lectus ut leo lacinia feugiat non vel orci. Maecenas felis sapien, vehicula quis metus sit amet, rutrum ullamcorper lorem. Quisque placerat rutrum odio, id laoreet elit finibus sed. Praesent laoreet consequat diam, eu hendrerit velit semper in. Fusce ipsum dui, tempus eget lacus sed, volutpat consectetur nisi. Fusce non dapibus mauris.",

    ),

    'spanish' => array(

      'menu_home' => 'Bienvenida',
      'menu_society' => 'Empresa',
      'menu_products' => 'Productos',
      'menu_products_chestnut' => 'Castaña',
      'menu_products_pine' => 'Pino',
      'menu_products_acacia' => 'Acacia',
      'menu_contact' => 'Contactar',
      'society_aboutme_title' => "Presentación de la empresa",
      'society_aboutme_desc' => "Con 20 años de experiencia en el bosque, quería volver a lo básico al instalarme en el antiguo aserradero familiar ubicado más cerca del recurso forestal. Me especialicé en la fabricación de piquetes y troncos de acacia, pinos o castaños. Mi herramienta de producción flexible y flexible hace posible producir estacas o troncos redondeados o redondos de diferentes dimensiones. Diseñados para cultivadores, jardineros, arboricultores o solo para personas que desean crear una cerca o un jardín, estacas o troncos B3D son una apuesta segura.",
      'society_img1' => 'test1',
      'society_img2' => 'test3',
      'society_img3' => 'test3',
      'society_img4' => 'test4',
      'society_img5' => 'test5',
      'society_img6' => 'test6',
      'footer_title' => 'Contactar',
      'footer_address_title' => 'Dirección',
      'footer_address' => '22 Hsesdca calle de swdew - <br>19000 Tulle',
      'footer_schedule_title' => 'Horario',
      'footer_schedule' => 'Lunes - Viernes <br>09:00 - 12:00 / 13:00 - 17:00',
      'footer_phone_title' => 'Teléfono',
      'footer_phone' => 'fijo: +33.751.40.33.21 móvil: +33.632.43.23.12',
      'footer_email_title' => 'E-mail',

      'footer_copyright' => "B3D, ". date('Y') .". Todos los derechos reservados.<br> Copias de documentos solo si hay un enlace indexado a la fuente.",
      'footer_dev' => "Sitio web desarrollado por:",
      //----------------------
      'products_title' => "Productos",
      'products_text' => "<p>Nuestras estacas y troncos se producen a partir de troncos operados en un radio de 70 km. El pino proviene de los tramos plantados después de la tormenta de 1999.</p> <p>Estas maderas juveniles generalmente utilizadas para el establecimiento de redes contra el granizo o enrejados tienen una proporción muy baja de duramen, lo que les da una muy buena capacidad para el tratamiento en autoclave.</p> <p>Nuestros troncos de acacia contienen una cantidad muy pequeña de albura y anillos de crecimiento apretados que le dan a la madera una excelente durabilidad natural y una muy buena resistencia mecánica. Toda nuestra madera proviene de cortes gestionados de forma sostenible y generalmente se beneficia de la certificación PEFC.</p>",
      'products_prod1_title' => "Estacas de chataigner",
      'products_prod1_text' => "<p>Menos duradera en el tiempo que la acacia, la castaña sigue siendo una especie a prueba de podredumbre debido a su presencia de ácido tánico.</p><p>
      Todos nuestros productos de castaño están marcados para aportar más estética y limpieza a las estacas, pero especialmente para evitar el transporte de parásitos en el sitio de los clientes. Nuestras estacas de acacia son ranuradas o planas y una punta cuadrada con un área entre 1 y 1,5 cm² se hace grande.</p>",
      'products_prod1_btn' => "Nuestros productos chataigner",

      'products_prod2_title' => "Estacas de acacia",
      'products_prod2_text' => "Todos nuestros productos de acacia están marcados para aportar más estética y limpieza a las estacas, pero especialmente para evitar el transporte de parásitos como insectos xilófagos en el sitio de la clientela. Nuestras estacas de acacia son ranuradas o planas y una punta cuadrada con un área de entre 1 y 1,5 cm2 se hace de extremo grande.",
      'products_prod2_btn' => "Nuestros productos de acacia",

      'products_prod3_title' => "Estacas de pino",
      'products_prod3_text' => "Nuestros pines y polos son planos y una punta cuadrada de un área entre 1 y 1,5 cm2 se hace grande. La calidad de nuestra madera cumple con las especificaciones de la norma NF B 50-100-3 para una clase de uso IV después de haber sido sometida a un tratamiento de autoclave utilizando el proceso de vacío Bethell y una presión de 12 bares en una estación certificada por CTB B +.",
      'products_prod3_btn' => "Nuestros productos de pino",

      'prod1_title' => "Clavijas de castaño",
      'prod1_text' => "<p>Menos duradera en el tiempo que la acacia, la castaña sigue siendo una especie a prueba de podredumbre debido a su presencia de ácido tánico.</p><p>
      Todos nuestros productos de castaño están marcados para aportar más estética y limpieza a las estacas, pero especialmente para evitar el transporte de parásitos en el sitio de los clientes. Nuestras estacas de acacia son ranuradas o planas y una punta cuadrada con un área entre 1 y 1,5 cm² se hace grande.</p><p>
      La operación de la ranura permite que la madera retenga su resistencia mecánica y limite las deformaciones de secado.</p>",

      'prod2_title' => "Estacas de acacia",
      'prod2_text' => "<p>Todos nuestros productos de acacia están marcados para aportar más estética y limpieza a las estacas, pero especialmente para evitar el transporte de parásitos como insectos xilófagos en el sitio de la clientela.</p> <p>Nuestras estacas de acacia son ranuradas o planas y una punta cuadrada con un área de entre 1 y 1,5 cm2 se hace de extremo grande.</p> <p>La operación de la ranura permite que la madera retenga su resistencia mecánica y limite las deformaciones de secado.</p>",

      'prod3_title' => "Estacas de pino",
      'prod3_text' => "<p>Nuestros pines y polos son planos y una punta cuadrada de un área entre 1 y 1,5 cm2 se hace grande.</p><p>La calidad de nuestra madera cumple con las especificaciones de la norma NF B 50-100-3 para una clase de uso IV después de haber sido sometida a un tratamiento de autoclave utilizando el proceso de vacío Bethell y una presión de 12 bares en una estación certificada por CTB B +.</p> <p>La proporción de duramen presente en nuestros pinos es baja, lo que permite la penetración y retención del conservante óptimo para aumentar la longevidad de nuestras estacas y postes.</p>",

      'form_title' => "Formulario de contacto",

      'form_firstname_label' => "Primer nombre",
      'form_firstname_placeholder' => "Vuestro nombre",

      'form_lastname_label' => "Apellido",
      'form_lastname_placeholder' => "Vuestro apellido",

      'form_email_label' => "Dirección de correo electrónico",
      'form_email_placeholder' => "Vuestro direccion de correo electronico",

      'form_phone_label' => "Teléfono",
      'form_phone_placeholder' => "Vuestro telefono",

      'form_message_label' => "Mensaje",
      'form_message_placeholder' => "Vuestro mensaje",

      'form_required' => "Esta es información requerida",
      'form_rgpd' => "He leído y acepto <a href='rgpd.php'> la política de privacidad </a> del sitio",
      'form_btn' => "Enviar a",

      'form_thanks' => "Gracias a usted.",
      'form_error' => "Error al enviar el formulario",

      'rgpd_title' => "Política de confidencialidad",
      'rgpd_text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc luctus blandit massa nec sodales. Vestibulum vehicula quam mi, non scelerisque elit congue ut. Morbi eu risus dolor. Curabitur fermentum, erat vel fringilla auctor, est leo vulputate arcu, et accumsan lacus augue sed augue. Aenean porttitor risus vel consequat fermentum. Fusce pharetra neque bibendum mauris suscipit, et scelerisque nisl bibendum. Phasellus venenatis ac augue sit amet pharetra. Aenean dapibus lorem non elementum bibendum. Nunc accumsan diam id ligula consequat tempor. Proin viverra mauris sed augue pharetra imperdiet. Nulla sed lectus ut leo lacinia feugiat non vel orci. Maecenas felis sapien, vehicula quis metus sit amet, rutrum ullamcorper lorem. Quisque placerat rutrum odio, id laoreet elit finibus sed. Praesent laoreet consequat diam, eu hendrerit velit semper in. Fusce ipsum dui, tempus eget lacus sed, volutpat consectetur nisi. Fusce non dapibus mauris.",

    ),

    'germany' => array(
      'menu_home' => 'Willkommen',
      'menu_society' => 'Unternehmen',
      'menu_products' => 'Produkte',
      'menu_products_chestnut' => 'Kastanie',
      'menu_products_pine' => 'Kiefer',
      'menu_products_acacia' => 'Akazie',
      'menu_contact' => 'Kontakt',
      'society_aboutme_title' => "Präsentation des Unternehmens",
      'society_aboutme_desc' => "Mit 20 Jahren Erfahrung in den Wäldern wollte ich in das alte Familiensägewerk zurückkehren, das sich näher an der Waldressource befindet. Ich habe mich auf die Herstellung von Streikposten und Protokollen aus Akazien, Kiefern oder Kastanien spezialisiert. Mein flexibles und flexibles Produktionswerkzeug ermöglicht das Herstellen von Pfählen oder Rund- oder Rundholz mit unterschiedlichen Abmessungen. Entworfen für Züchter, Landschaftsgärtner, Baumzüchter oder nur für Einzelpersonen, die einen Zaun oder einen Garten anlegen möchten. Pfähle oder Baumstämme B3D sind eine sichere Wahl.",
      'society_img1' => 'test1',
      'society_img2' => 'test3',
      'society_img3' => 'test3',
      'society_img4' => 'test4',
      'society_img5' => 'test5',
      'society_img6' => 'test6',
      'footer_title' => 'Kontakt',
      'footer_address_title' => 'Adresse',
      'footer_address' => '22 Hsesdca Straße von Swdew - <br>19000 Tüll',
      'footer_schedule_title' => 'Zeitplan',
      'footer_schedule' => 'Montag bis Freitag <br>09:00 - 12:00 / 13:00 - 17:00',
      'footer_phone_title' => 'Telefon',
      'footer_phone' => 'behoben: +33.751.40.33.21 mobil: +33.632.43.23.12',
      'footer_email_title' => 'E-Mail',

      'footer_copyright' => "B3D, ". date('Y') .". Alle Rechte vorbehalten.<br> Kopien von Dokumenten nur, wenn ein Link zur Quelle vorhanden ist.",
      'footer_dev' => "Website entwickelt von:",
      //----------------------
      'products_title' => "Produkte",
      'products_text' => "<p>Unsere Einsätze und Protokolle werden aus Rundholz hergestellt, das im Umkreis von 70 km betrieben wird. Die Kiefer stammt von Threshholds, die nach dem Sturm von 1999 gepflanzt wurden.</p> <p>Diese Jugendhölzer, die im Allgemeinen für die Einrichtung von Hagelschutznetzen oder für das Trellising verwendet werden, haben einen sehr geringen Kernholzanteil, wodurch sie sehr gut autoklaviert werden können.</p> <p>Unsere Akazienstämme enthalten nur eine geringe Menge Splintholz und enge Wachstumsringe, was dem Holz eine hervorragende natürliche Haltbarkeit und sehr gute mechanische Festigkeit verleiht. Alle unsere Hölzer stammen aus nachhaltig bewirtschafteten Schnitten und profitieren generell von der PEFC-Zertifizierung.</p>",
      'products_prod1_title' => "Kastanienpfähle",
      'products_prod1_text' => "<p>Mit der Zeit weniger haltbar als Akazien, bleibt die Kastanie aufgrund ihrer Anwesenheit von Gerbsäure dennoch eine verrottungssichere Art.</p><p>
      Alle unsere Kastanienprodukte werden entrindet, um den Pfählen mehr Ästhetik und Sauberkeit zu bieten, vor allem aber das Tragen von Parasiten auf dem Gelände der Kunden zu vermeiden. Unsere Akazienpfähle sind geschlitzt oder flach und eine eckige Spitze mit einer Fläche zwischen 1 und 1,5 cm² ist ein großes Ende.</p>",
      'products_prod1_btn' => "Unsere produkte chataigner",

      'products_prod2_title' => "Akazienpfähle",
      'products_prod2_text' => "Alle unsere Akazienprodukte werden entrindet, um mehr Ästhetik und Sauberkeit zu erreichen, insbesondere jedoch den Transport von Parasiten wie xylophagous Insekten auf dem Gelände der Kundschaft zu vermeiden. Unsere Akazienpfähle sind geschlitzt oder flach und eine eckige Spitze mit einer Fläche zwischen 1 und 1,5 cm2 ist ein großes Ende.",
      'products_prod2_btn' => "Unsere Akazienprodukte",

      'products_prod3_title' => "Unsere Kiefernprodukte",
      'products_prod3_text' => "Unsere Stifte und Stifte sind flach und eine quadratische Spitze mit einer Fläche zwischen 1 und 1,5 cm2 ist ein großes Ende. Die Qualität unseres Holzes entspricht den Anforderungen der Norm NF B 50-100-3 für eine Klasse IV-Klasse, nachdem es einer Autoklavenbehandlung gemäß dem Bethell-Prozess Vakuum und Druck von 12 bar in einer CTB B + -zertifizierten Station unterzogen wurde.",
      'products_prod3_btn' => "Unsere Kiefernprodukte",

      'prod1_title' => "Kastanienheringe",
      'prod1_text' => "<p>Mit der Zeit weniger haltbar als Akazien, bleibt die Kastanie aufgrund ihrer Anwesenheit von Gerbsäure dennoch eine verrottungssichere Art.</p><p>
      Alle unsere Kastanienprodukte werden entrindet, um den Pfählen mehr Ästhetik und Sauberkeit zu bieten, vor allem aber das Tragen von Parasiten auf dem Gelände der Kunden zu vermeiden. Unsere Akazienpfähle sind geschlitzt oder flach und eine eckige Spitze mit einer Fläche zwischen 1 und 1,5 cm² ist ein großes Ende.</p><p>
      Durch den Schlitzbetrieb behält das Holz seine mechanische Festigkeit und begrenzt die Verformungen beim Trocknen.</p>",

      'prod2_title' => "Akazienpfähle",
      'prod2_text' => "<p>Alle unsere Akazienprodukte werden entrindet, um mehr Ästhetik und Sauberkeit zu erreichen, insbesondere jedoch den Transport von Parasiten wie xylophagous Insekten auf dem Gelände der Kundschaft zu vermeiden.</p> <p>Unsere Akazienpfähle sind geschlitzt oder flach und eine eckige Spitze mit einer Fläche zwischen 1 und 1,5 cm2 ist ein großes Ende.</p> <p>Durch den Schlitzbetrieb behält das Holz seine mechanische Festigkeit und begrenzt die Verformungen beim Trocknen.</p>",

      'prod3_title' => "Kieferpfähle",
      'prod3_text' => "<p>Unsere Stifte und Stifte sind flach und eine quadratische Spitze mit einer Fläche zwischen 1 und 1,5 cm2 ist ein großes Ende.</p><p>Die Qualität unseres Holzes entspricht den Anforderungen der Norm NF B 50-100-3 für eine Klasse IV-Verwendung, nachdem es einer Autoklavenbehandlung im Vakuum-Bethell-Verfahren und einem Druck von 12 bar in einer CTB B + -zertifizierten Station unterzogen wurde.</p> <p>Der Anteil an Kernholz in unseren Kiefern ist gering, so dass ein optimales Konservierungsmittel für eine höhere Lebensdauer unserer Pfähle und Stöcke durchdrungen und erhalten werden kann.</p>",

      'form_title' => "Kontaktformular",

      'form_firstname_label' => "Vorname",
      'form_firstname_placeholder' => "Ihre vorname",

      'form_lastname_label' => "Name",
      'form_lastname_placeholder' => "Ihre Name",

      'form_email_label' => "E-Mail-Adresse",
      'form_email_placeholder' => "Ihre E-Mail Adresse",

      'form_phone_label' => "Telefon",
      'form_phone_placeholder' => "Ihre Telefon",

      'form_message_label' => "Nachricht",
      'form_message_placeholder' => "Ihre Nachricht",

      'form_required' => "Dies sind erforderliche Informationen",
      'form_rgpd' => "Ich habe die <a href='rgpd.php'> Datenschutzerklärung </a> der Website gelesen und bin damit einverstanden",
      'form_btn' => "Senden",

      'form_thanks' => "Danke",
      'form_error' => "Fehler beim Senden des Formulars",

      'rgpd_title' => "Datenschutzrichtlinie",
      'rgpd_text' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc luctus blandit massa nec sodales. Vestibulum vehicula quam mi, non scelerisque elit congue ut. Morbi eu risus dolor. Curabitur fermentum, erat vel fringilla auctor, est leo vulputate arcu, et accumsan lacus augue sed augue. Aenean porttitor risus vel consequat fermentum. Fusce pharetra neque bibendum mauris suscipit, et scelerisque nisl bibendum. Phasellus venenatis ac augue sit amet pharetra. Aenean dapibus lorem non elementum bibendum. Nunc accumsan diam id ligula consequat tempor. Proin viverra mauris sed augue pharetra imperdiet. Nulla sed lectus ut leo lacinia feugiat non vel orci. Maecenas felis sapien, vehicula quis metus sit amet, rutrum ullamcorper lorem. Quisque placerat rutrum odio, id laoreet elit finibus sed. Praesent laoreet consequat diam, eu hendrerit velit semper in. Fusce ipsum dui, tempus eget lacus sed, volutpat consectetur nisi. Fusce non dapibus mauris.",

    ),

  );

  if(!empty($_SESSION['lang'])) {
    $translate['translate'] = $_SESSION['lang'];
  }

  if(empty($_SESSION['lang']) && (!isset($_GET['lang']))){
    $_SESSION['translate'] = $translate['french'];
    $_SESSION['lang'] = 'Français';
  }

  if($_GET['lang'] == 'french') {
    $_SESSION['translate'] = $translate['french'];
    $_SESSION['lang'] = 'Français';
  }
  if($_GET['lang'] == 'english') {
    $_SESSION['translate'] = $translate['english'];
    $_SESSION['lang'] = 'English';
  }
  if($_GET['lang'] == 'spanish') {
    $_SESSION['translate'] = $translate['spanish'];
    $_SESSION['lang'] = 'Espagnol';
  }
  if($_GET['lang'] == 'germany') {
    $_SESSION['translate'] = $translate['germany'];
    $_SESSION['lang'] = 'Deutsch';
  }
?>
