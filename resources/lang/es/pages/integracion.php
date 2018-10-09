<?php

return [
    
    /*
    |--------------------------------------------------------------------------
    | Home static texts
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during routing to
    | set named routes.
    |
    */

        // Page title
    'page-title' => 'Home',
    
    // Meta data
    'metadata' => [
        'base' => [
            'title' => '',
            'description' => '',
            'keywords' => ''
        ],
        'og' => [
            'title' => '',
            'type' => '',
            'description' => '',
            'site-name' => '',
        ],
        'twitter' => [
            'title' => '',
            'description' => '',
        ]
    ],

    'menu' => [
        'about' => 'About',
        'services' => 'Services',
        'portfolio' => 'Gallery',
        'clients' => 'Clients',
        'contact' => 'Contact',

    ],

    
    'about' => [
        'title' => 'Quienes somos',
        'first-text' => '<p>Somos una empresa con la visión de crear conceptos y experiencias audiovisuales en espacios urbanos, diseñando soluciones que satisfacen las inquietudes e intereses de cada uno de nuestros clientes por medio de la integración de tecnología de punta en los campos de iluminación, audio y video.</p> 
        <p>Nuestro equipo de arquitectos y diseñadores gráficos, junto a nuestros ingenieros de iluminación, diseñadores de audio y programadores de video, diseñan experiencias integrales basadas en colores, sonidos, video mapping, así como cualquier recurso tecnológico necesario para dar un giro de 180 grados a ese espacio arquitectónico que aún no refleja la visión y proyección de su producto o empresa.</p>',
        'second-text' => '<p>La experiencia de más de 10 años de nuestra filial hermana ZEIS PRODUCCIONES en el mercado de eventos musicales y corporativos, nos garantiza total conocimiento de las más recientes técnicas de sonorización, así como mantenernos en la vanguardia con equipos de video e iluminación de última generación usados por los artistas más importantes del mundo, técnicas y tecnología que hoy en día podemos llevar a sus instalaciones, convirtiendo su espacio arquitectónico en punto de referencia focal dentro del acelerado movimiento de nuestra gran metrópoli.</p>',
        'third-text' => '<p>We invite you to be part of this experience, and let us take your event to the next level.</p>
          <p class="text-center textBig">We are <span class="textUpper">zeis productions.</span></p>',
    ],

    'services' => [
        'title' => 'Servicios',
        's1' => [
            'title' => 'Concepto',
            'text' => 'Con base en las necesidades de nuestros clientes creamos un concepto integral, realizando un estudio minucioso del espacio a intervenir, así como las características esenciales de la imagen corporativa que distingue cada cliente, y el producto que desea destacar.<br><br>Teniendo a la mano estos elementos, creamos un perfil corporativo que comprende colores, imágenes y clips de sonido, con los cuales se procede al diseño de la intervención arquitectónica.',
            'img' => 'assets/www/images/integracion/servicios/concepto.png'
        ],
        's2' => [
            'title' => 'Diseño',
            'text' => 'Teniendo el perfil corporativo y el espacio urbano, diseñamos propuestas de intervención arquitectónica que eleven la calidad espacial y sensorial del lugar en cuestión, dando al transeúnte que recorre el sitio, información visual y auditiva referente al tema que nuestros clientes desean dar a conocer, dejando una huella indeleble que hace referencia a las características e imagen de su empresa.<br><br>Usamos renders y recorridos virtuales computarizados para que la idea y el concepto que hemos diseñado sea de fácil entendimiento e interpretación',
            'img' => 'assets/www/images/integracion/servicios/diseno.png'
        ],
        's3' => [
            'title' => 'Sonorización y diseño de sistemas de audio',
            'text' => 'Contamos con las mejores marcas de bocinas, microfonía, reproductores digitales y sistemas de amplificación para exteriores e interiores, así como la experiencia en ingeniería de sonido necesaria para diseñar la distribución exacta de los sistemas de reproducción sonoro más adecuados según sus necesidades.',
            'img' => 'assets/www/images/integracion/servicios/audio.png'
        ],
        's4' => [
            'title' => 'Iluminación de fachadas y espacios arquitectónicos',
            'text' => 'Con el uso de la iluminación LED, somos capaces de dar color y textura a cualquier espacio urbano con bajo consumo eléctrico, de igual manera podemos crear diseños que realcen las facciones de una determinada fachada, así como programar patrones de color que aparezcan en diferentes velocidades y posiciones, todo esto con sistemas de control DMX de última tecnología',
            'img' => 'assets/www/images/integracion/servicios/iluminacion.png'
        ],
        's5' => [
            'title' => 'Pantallas LED y sistemas de proyección',
            'text' => 'El uso de pantallas LED ha crecido de forma exponencial en pocos años, haciendo de su uso una herramienta fundamental en lo que a transmitir una información se refiere, desde vallas publicitarias interactivas hasta sistemas que reproducen señales de televisión o cable de gran formato.<br><br>Contamos con pantallas de LED para exteriores de gran calidad y resolución, así como la capacidad de crear contenido de video adaptado a sus necesidades.<br><br>De igual manera con el uso de proyectores de gran formato podemos darle un tratamiento diferente a cualquier espacio mediante la tecnología de video mapping.',
            'img' => 'assets/www/images/integracion/servicios/video.png'
        ],
        's6' => [
            'title' => 'Instalación y servicio técnico',
            'text' => 'Nuestros técnicos especializados llevan el diseño creado a la realidad con todo el cuidado y precisión necesarias para que la intervención sea lo menos notoria posible, pero logre plenamente el fin para el cual fue diseñada.<br><br>De igual forma ofrecemos servicio técnico especializado para subsanar cualquier desperfecto o cambio en la programación del equipo que requiera el cliente, en el menor tiempo y con la seguridad de que existirán las menores molestias posibles.',
            'img' => 'assets/www/images/integracion/servicios/servicio.png'
        ]
    ],

    'portfolio' => [
        'title' => 'Gallery',
    ],

    'brands' => [
        'title' => 'Brands',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.'
    ],

    'clients' => [
        'title' => 'Clients',
        'title_company' => '+ Companies +',
        'title_festival' => '+ Festivals +',
        'title_artist' => '+ Groups and Artists +'
    ],

    'contact' => [
        'title' => 'Contáctanos',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.',
        'text_form' => 'Déjanos un mensaje',
        'info' => [
            'cdmx' => [
                'user' => 'Ismael Zermeño<br>Director General',
                'phone' => '<a href="tel:+0445541853312" target="_blank">+044 55 41 85 33 12</a><br><a href="tel:+525522100646" target="_blank">+52 55 22 10 06 46</a><br><a href="tel:+525555276711" target="_blank">+52 55 55 27 67 11</a>',
                'email' => '<a href="mailto:ismael@zeisproducciones.com">ismael@zeisproducciones.com</a><br><a href="mailto:contacto@zeisproducciones.com">contacto@zeisproducciones.com</a>',
            ]
        ],
        'name_form' => 'Nombre',
        'email_form' => 'Correo electrónico',
        'message_form' => 'Mensaje',
        'btn_form' => 'Enviar',
        'follow_text' => 'Síguenos',
        'mail_respond_hello' => 'Hola',
        'mail_respond_contact' => 'Contacto',
        'mail_respond_message' => 'Gracias por contactarnos!<br>Hemos recibido tu mensaje, pronto nos comunicaremos contigo.',
        'mail_respond_error' => 'Ha ocurrido un error inesperado. Por favor, intente de nuevo',
    ]
    
];