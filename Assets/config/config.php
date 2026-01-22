
<?php
/**
 * FFReciclagem — Config do Site
 * Ajuste aqui: cores, textos, contatos, imagens e links.
 */

$site = [
  "brand" => [
    "name" => "FFReciclagem",
    "tagline" => "Coleta seletiva, compra e venda de recicláveis e orientação ambiental.",
    "city" => "Guararapes • SP",
    // Cores (ajuste conforme seu modelo de referência)
    "colors" => [
      "brand" => "#1E7A3A",       // verde principal
      "brand_dark" => "#0F3D1E",  // verde escuro
      "accent" => "#F2B705",      // amarelo/dourado (detalhes/CTAs)
      "bg_soft" => "#F6FBF7",
      "text" => "#1F2933",
      "muted" => "#667085",
      "border" => "#E7EEE9",
    ],
    "logo" => "Assets/img/logo.png",
    "logo_footer" => "Assets/img/logo_txt.png",
    "favicon" => "Assets/img/logo.png",
  ],

  "contact" => [
    "phone_display" => "(18) 99115-4845",
    "phone_e164" => "5518991154845",
    "email" => "contato@ffreciclagem.com.br",
    "email_alt" => "fabiano@ffreciclagem.com.br",
    "address" => "Av. Tiradentes, 80 - Guararapes, SP, 16700-000",
    "hours" => "Segunda a Sexta — 07:00 às 17:00",
    "instagram" => "",
    "maps_url" => "https://maps.app.goo.gl/ichs34oEZmowScZGA",
    "whatsapp_default_message" => "Olá! Gostaria de solicitar coleta e informações sobre materiais recicláveis.",
  ],

  "social" => [
    "instagram_url" => "https://www.instagram.com/f.fernandesr/",
    "facebook_url" => "https://www.facebook.com/f.fernandes.fernandes.2025#"
  ],

  "hero" => [
    "title" => "Coleta seletiva com responsabilidade",
    "subtitle" => "Atendemos Guararapes e região com coleta e destinação correta de recicláveis.",
    "primary_cta" => "Chamar no WhatsApp",
    "secondary_cta" => "Ver serviços",
    "image" => "Assets/img/img_1.jpg",
    "badges" => [
      "Atendimento local e ágil",
      "Compra e venda de recicláveis",
      "Educação ambiental",
    ],
  ],

  "sections" => [
    "services" => [
      "title" => "Serviços",
      "subtitle" => "Soluções simples e eficientes para coleta e destinação de materiais recicláveis.",
      "items" => [
        [
          "icon" => "bi-truck",
          "title" => "Coleta e transporte",
          "text" => "Agendamento e retirada de recicláveis, com orientação de separação para facilitar o processo."
        ],
        [
          "icon" => "bi-recycle",
          "title" => "Triagem e destinação",
          "text" => "Separação dos materiais por tipo e encaminhamento para reciclagem com responsabilidade."
        ],
        [
          "icon" => "bi-mortarboard",
          "title" => "Orientação ambiental",
          "text" => "Conteúdos e ações educativas para escolas, empresas e comunidade sobre impacto e reciclagem."
        ],
      ],
    ],

    "materials" => [
      "title" => "Materiais aceitos",
      "subtitle" => "A lista pode variar conforme o material e o volume.",
      "txtQuestion" => "Tem dúvida sobre algum material? Fale com a gente no WhatsApp e receba orientação rápida.",
      "columns" => [
        [
          "title" => "Papel e papelão",
          "items" => ["Caixas", "Jornais e revistas", "Folhas e aparas", "Papelão ondulado"]
        ],
        [
          "title" => "Plásticos",
          "items" => ["Garrafas PET", "Embalagens plásticas", "Sacolas", "Tampas e potes"]
        ],
        [
          "title" => "Metais e alumínio",
          "items" => ["Latas de alumínio", "Sucatas metálicas", "Fios e cabos (sob consulta)", "Peças metálicas"]
        ],
        [
          "title" => "Outros",
          "items" => ["Vidros (sob consulta)", "Eletrônicos (sob consulta)", "Resíduos industriais (sob avaliação)", "Grandes volumes (agendamento)"]
        ],
      ],
    ],

    "process" => [
      "title" => "Agendamento para coleta",
      "subtitle" => "Para itens grandes, volumes elevados e coletas em empresas ou indústrias.",
      "steps" => [
        [
          "icon" => "bi-whatsapp",
          "title" => "1) Contato pelo WhatsApp",
          "text" => "Você informa o tipo de material, volume aproximado e local da coleta."
        ],
        [
          "icon" => "bi-clipboard-check",
          "title" => "2) Avaliação do material",
          "text" => "Analisamos se o material é reciclável, o volume e a melhor forma de retirada."
        ],
        [
          "icon" => "bi-calendar-check",
          "title" => "3) Agendamento da coleta",
          "text" => "Definimos o melhor dia e horário para a retirada do material."
        ],
        [
          "icon" => "bi-truck",
          "title" => "4) Coleta e destinação correta",
          "text" => "Realizamos a coleta e encaminhamos os materiais para reciclagem."
        ],
      ],
    ],

    "schedule" => [
      "title" => "Setores e dias da semana",
      "subtitle" => "A coleta passa diariamente nos bairros de Guararapes, conforme o setor.",
      "days" => [
        [
          "day" => "Segunda-feira",
          "sector" => "Setor I",
          "neighborhoods" => [
            "Jardim Industrial",
            "Jardim Aeroporto",
            "Vila Independência",
            "Jardim Vila Nova",
            "Rancho Grande",
            "Jardim Tiradentes",
            "Jardim Brasil"
          ]
        ],
        [
          "day" => "Terça-feira",
          "sector" => "Setor II",
          "neighborhoods" => [
            "Cohab I",
            "Cohab II",
            "Conjunto Francisco Antonioni",
            "Conjunto Habitacional Gps III",
            "Clínica de Almeida",
            "Residencial Qualitas"
          ]
        ],
        [
          "day" => "Quarta-feira",
          "sector" => "Setor III",
          "neighborhoods" => [
            "Centro",
            "São Judas I e II",
            "Jardim Palmeiras",
            "Frutal"
          ]
        ],
        [
          "day" => "Quinta-feira",
          "sector" => "Setor IV",
          "neighborhoods" => [
            "Jardim Pioneiro",
            "Jardim Acapulco",
            "Jardim Estádio",
            "Vila Medeiros",
            "Jardim Europa",
            "Jardim Santa Maria",
            "Jardim São Paulo",
            "Jardim Itália"
          ]
        ],
        [
          "day" => "Sexta-feira",
          "sector" => "Setor V",
          "neighborhoods" => [
            "Jardim Copacabana",
            "Jardim Nova América",
            "Jardim Cinquentenário",
            "Residencial Guaraville",
            "Jardim Dom Orione",
            "Portal das Palmeiras",
            "Jardim N. S. Aparecida",
            "Jardim Continental",
            "Jardim Alvorada",
            "Cohab II",
            "Jardim Satélite I e II",
            "Porta do Sol"
          ]
        ]
      ]
    ],

    "about" => [
      "title" => "Sobre a FFReciclagem",
      "text" => "Somos uma empresa familiar focada em reciclagem e coleta seletiva. Nosso objetivo é facilitar a separação de recicláveis, orientar a comunidade e dar a destinação correta aos materiais, com compromisso com o meio ambiente e com a cidade.",
      "highlights" => [
        ["icon" => "bi-shield-check", "title" => "Compromisso", "text" => "Trabalhamos com responsabilidade e transparência."],
        ["icon" => "bi-people", "title" => "Parcerias", "text" => "Atendimento para residências, comércios, empresas e escolas."],
        ["icon" => "bi-geo-alt", "title" => "Região", "text" => "Atuação em Guararapes e arredores."],
      ],
      "image" => "Assets/img/img_2.jpg",
    ],

    "faq" => [
      "title" => "Dúvidas frequentes",
      "items" => [
        ["q" => "Vocês fazem coleta em residência?", "a" => "Sim. A coleta seletiva passa todos os dias nas ruas de Guararapes, conforme o setor e o dia da semana. Caso tenha dúvida sobre o seu bairro ou sobre algum material específico, é só chamar a gente no WhatsApp."],
        ["q" => "Precisa estar tudo separado?", "a" => "Ajuda bastante! Mas se não der, a gente orienta e faz a triagem. O ideal é separar por tipo (papel, plástico, metal, etc.)."],
        ["q" => "Vocês compram materiais?", "a" => "Compramos alguns tipos de recicláveis conforme o mercado e a qualidade do material. Consulte pelo WhatsApp."],
        ["q" => "Atendem empresas e condomínios?", "a" => "Sim! Podemos organizar rotinas de coleta e orientar a separação, conforme a necessidade do local."],
      ],
    ],
  ],

  "seo" => [
    "title" => "FFReciclagem — Coleta seletiva em Guararapes SP",
    "description" => "Coleta seletiva, reciclagem, compra e venda de materiais recicláveis e orientação ambiental em Guararapes SP.",
  ],
];
