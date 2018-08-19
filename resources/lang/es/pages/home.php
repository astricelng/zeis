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
        'about' => 'Quiénes Somos',
        'services' => 'Servicios',
        'portfolio' => 'Galería',
        'clients' => 'Clientes',
        'brands' => 'Marcas',
        'events' => 'Eventos',
        'contact' => 'Contacto',

    ],
    
    'about' => [
        'title' => '+ Quiénes somos +',
        'first-text' => '<p>Con más de 10 años en el medio del entretenimiento, somos una empresa orgullosamente mexicana que ofrece soluciones profesionales a las necesidades que puedan presentarse en cualquier tipo de evento, concierto, o corporativo, bien sea de instrumentos musicales, audio profesional o renta de sobretarimas.</p> 
        <p>No solo rentamos backline, ofrecemos un servicio, un servicio avalado por años de conocimiento y respeto al trabajo, servicio que con pasión y disciplina nos ha posicionado como la empresa número uno en renta de backline en la república mexicana, dando cuenta de la integridad y sencillez que nos caracteriza como empresa.</p>',
        'second-text' => '<p>Nuestra red de transporte y logística especializada nos ayuda a cubrir los 32 estados de la república, y la variedad y calidad de los clientes y marcas que nos respaldan dan cuenta de ello.</p>
        <p class="orange">Estamos en proceso de expansión, nuestras nuevas oficinas en Cancún están listas para ofrecer soluciones corporativas a eventos de pequeño y mediano afore, nuestro radio de acción pretende cubrir las necesidades de la zona hotelera ofreciendo backline, equipo para dj y audio profesional integral para conferencias o celebraciones.</p>',
        'third-text' => '<p>Conoce la calidad de nuestro servicio y déjanos llevar tu evento a un nivel mayor.</p>
          <p class="text-center textBig">Somos <span class="textUpper">zeis producciones.</span></p>',
    ],

    'services' => [
        'title' => '+ Servicios +',
        's1' => [
            'title' => '+ Backline +',
            'text' => 'El backline comprende todo aquello que usamos en un escenario al momento de llevarse a cabo una presentación, bien sea concierto, o cualquier tipo de evento, somos especialistas en instrumentos musicales, tenemos la mayor variedad y cantidad de equipo instrumental para tus presentaciones, y además de esto, contamos también con audio profesional para complementar todas tus necesidades, desde microfonía, cableado y consolas, como las últimamente muy usadas MIDAS M32 y PRO1.'
        ],
        's2' => [
            'title' => '+ Sets de dj +',
            'text' => 'El estar presentes en los eventos de música electrónica más grandes de México nos ha dado muchísimo conocimiento en esta área, tenemos una división encargada solo de atender todo lo que implica el universo de los DJ, desde cabinas para DJ y distintos soportes para laptops hasta mezcladores y reproductores de cd de las marcas más reconocidas, así como los controladores REMIX 1000 y el DDJ RZX, a los cuales podemos sumar sistemas de monitoreo y refuerzo sonoro para brindar el equipo completo necesario para cualquier ocasión.'
        ],
        's3' => [
            'title' => '+ Sobretarimas +',
            'text' => 'Contamos con módulos de sobre tarima ajustables a cualquiera de tus necesidades, sistemas de alta resistencia y estabilidad adaptables a diferentes alturas y con la posibilidad de implementar ruedas con frenos, lo cual es imprescindible para cualquier festival musical o evento que requiera movimientos en escenario.'
        ],
        's4' => [
            'title' => 'Mudanzas',
            'text' => 'Déjalo en manos de un experto, veras que te sorprenderá el precio y el servicio. Trabajamos para que tu disfrutes los show y eventos. Servicio en toda la republica.'
        ]
    ],

    'portfolio' => [
        'title' => '+ Galería +',
    ],

    'brands' => [
        'title' => '+ Marcas +',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.'
    ],

    'clients' => [
        'title' => '+ Clientes +',
        'title_company' => '+ Empresas +',
        'title_festival' => '+ Festivales +',
        'title_artist' => '+ Artistas y Agrupaciones +'
    ],

    'contact' => [
        'title' => '+ Contact Us +',
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diamcommodo nibh ante facilisis.',
        'text_form' => 'Leave us a message',
        'info' => [
            'mexico' => [
                'cdmx' => [
                    'address' => 'Aquiles Serdán 113 Col. Ángel Zimbrón <br>Del. Azcapotzalco C.P. 02099 CDMX México',
                    'phone' => '<a href="tel:+525522100646" target="_blank">+52 55 22 10 06 46</a><br><a href="tel:+5255276711" target="_blank">+52 55 27 67 11</a>',
                    'email' => '<a href="mailto:contacto@zeisproducciones.com">contacto@zeisproducciones.com</a><br><a href="mailto:zeisproducciones@gmail.com">zeisproducciones@gmail.com</a>',
                ],
                'cancun' => [
                    'address' => 'Calle Grocella nº 38, Zona Urbana,<br> Cancun, C.P. 77509',
                    'phone' => '<a href="tel:+5215521450351" target="_blank">+52 155 21 45 03 51</a>',
                    'email' => '<a href="mailto:cancun@zeisproducciones.com">cancun@zeisproducciones.com</a>',
                ]
            ],
            'usa' => [
                'texas' => [
                    'address' => '14410 investment ave., <br>Laredo TX 78045',
                    'phone' => '<b>Gabriel Peña:</b><br><a href="tel:9568983101" target="_blank">(956) 898-3101</a><br><a href="tel:9568983102" target="_blank">(956)898-3102</a>',
                    'email' => '<a href="mailto:contacto@zeisproducciones.com">contacto@zeisproducciones.com<a/>',
                ]
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