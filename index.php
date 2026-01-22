
<?php
require __DIR__ . '/Assets/config/config.php';

$brand = $site["brand"];
$contact = $site["contact"];
$hero = $site["hero"];
$sections = $site["sections"];
$seo = $site["seo"];
$social = $site["social"];  

$colors = $brand["colors"];

// Helpers
function e($v){ return htmlspecialchars((string)$v, ENT_QUOTES, 'UTF-8'); }
?>
<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= e($seo["title"]) ?></title>
  <meta name="description" content="<?= e($seo["description"]) ?>">

  <link rel="icon" type="image/svg+xml" href="<?= e($brand["favicon"]) ?>">

  <!-- Bootstrap / Icons (CDN) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

  <!-- CSS -->
  <link rel="stylesheet" href="Assets/css/padrao.css">
  <link rel="stylesheet" href="Assets/css/sections/hero.css">
  <link rel="stylesheet" href="Assets/css/sections/services.css">
  <link rel="stylesheet" href="Assets/css/sections/materials.css">
  <link rel="stylesheet" href="Assets/css/sections/process.css">
  <!-- <link rel="stylesheet" href="Assets/css/sections/map.css"> -->
  <link rel="stylesheet" href="Assets/css/sections/about.css">
  <link rel="stylesheet" href="Assets/css/sections/contact.css">
  <link rel="stylesheet" href="Assets/css/sections/footer.css">

  <!-- Cores dinâmicas vindo do config -->
  <style>
    :root{
      --brand: <?= e($colors["brand"]) ?>;
      --brand-dark: <?= e($colors["brand_dark"]) ?>;
      --accent: <?= e($colors["accent"]) ?>;
      --bg-soft: <?= e($colors["bg_soft"]) ?>;
      --text: <?= e($colors["text"]) ?>;
      --muted: <?= e($colors["muted"]) ?>;
      --border: <?= e($colors["border"]) ?>;
    }
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg sticky-top bg-white border-bottom border-ff">
  <div class="container container-max py-2">
    <a class="navbar-brand d-flex align-items-center gap-2 " href="#inicio">
      <img src="<?= e($brand["logo"]) ?>" alt="<?= e($brand["name"]) ?>" height="38">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav" aria-controls="offcanvasNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
        <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
        <li class="nav-item"><a class="nav-link" href="#materiais">Materiais</a></li>
        <li class="nav-item"><a class="nav-link" href="#como-funciona">Como funciona</a></li>
        <li class="nav-item"><a class="nav-link" href="#coleta-setores">Dias da Coleta</a></li>
        <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
        <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
        <li class="nav-item">
          <button class="btn btn-ff btn-social-navbar px-4"
            data-wa-phone="<?= e($contact["phone_e164"]) ?>"
            data-wa-cta-msg="<?= e($contact["whatsapp_default_message"]) ?>">
            <i class="bi bi-whatsapp me-2"></i>
          </button>
        </li>
        <li class="nav-item">
          <a class="btn btn-ff-outline btn-social-navbar" href="<?= e($social["instagram_url"]) ?>" target="_blank" rel="noopener">
            <i class="bi bi-instagram me-2"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="btn btn-ff-outline btn-social-navbar" href="<?= e($social["facebook_url"]) ?>" target="_blank" rel="noopener">
            <i class="bi bi-facebook me-2"></i>
          </a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>

<!-- OFFCANVAS (mobile) -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNav" aria-labelledby="offcanvasNavLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasNavLabel">
      <a class="navbar-brand d-flex align-items-center gap-2 nav-link" href="#inicio">
        <img src="<?= e($brand["logo"]) ?>" alt="<?= e($brand["name"]) ?>" height="38">
      </a>
    </h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
  </div>
  <div class="offcanvas-body">
    <div class="d-grid gap-2">
      <a class="nav-link" href="#servicos">Serviços</a>
      <a class="nav-link" href="#materiais">Materiais</a>
      <a class="nav-link" href="#como-funciona">Como funciona</a>
      <a class="nav-link" href="#coleta-setores">Dias da Coleta</a>
      <a class="nav-link" href="#sobre">Sobre</a>
      <a class="nav-link" href="#contato">Contato</a>
      <div class="pt-2"></div>
      <button class="btn btn-ff w-100"
        data-wa-phone="<?= e($contact["phone_e164"]) ?>"
        data-wa-cta-msg="<?= e($contact["whatsapp_default_message"]) ?>">
        <i class="bi bi-whatsapp me-2"></i><?= e($hero["primary_cta"]) ?>
      </button>
      <a class="btn btn-ff-outline" href="<?= e($social["instagram_url"]) ?>" target="_blank" rel="noopener">
        <i class="bi bi-instagram me-2"></i>Instagram
      </a>
      <a class="btn btn-ff-outline" href="<?= e($social["facebook_url"]) ?>" target="_blank" rel="noopener">
        <i class="bi bi-facebook me-2"></i>Facebook
      </a>
      <!-- <a class="btn btn-ff-outline w-100" href="#servicos"><i class="bi bi-grid-3x3-gap me-2"></i><?// e($hero["secondary_cta"]) ?></a> -->
    </div>
  </div>
</div>

<!-- HERO -->
<header id="inicio" class="ff-hero">
  <div class="container container-max">
    <div class="hero-card">
      <div class="row g-0 align-items-stretch">
        <div class="col-lg-6 p-4 p-md-5">
          <!-- <div class="ff-kicker mb-2"><?= e($brand["city"]) ?></div> -->
          <h1 class="ff-title display-6 mb-3"><?= e($hero["title"]) ?></h1>
          <p class="lead text-muted-ff mb-4"><?= e($hero["subtitle"]) ?></p>

          <div class="d-flex flex-wrap gap-2 mb-4">
            <?php foreach($hero["badges"] as $b): ?>
              <span class="ff-chip"><i class="bi bi-check2-circle text-success"></i><?= e($b) ?></span>
            <?php endforeach; ?>
          </div>

          <div class="d-grid d-md-flex gap-2">
            <button class="btn btn-ff px-4 py-2"
              data-wa-phone="<?= e($contact["phone_e164"]) ?>"
              data-wa-cta-msg="<?= e($contact["whatsapp_default_message"]) ?>">
              <i class="bi bi-whatsapp me-2"></i><?= e($hero["primary_cta"]) ?>
            </button>
            <a class="btn btn-ff-outline px-4 py-2" href="<?= e($social["instagram_url"]) ?>" target="_blank" rel="noopener">
              <i class="bi bi-instagram me-2"></i>Instagram
            </a>
            <a class="btn btn-ff-outline btn-social-hero-face px-4 py-2" href="<?= e($social["facebook_url"]) ?>" target="_blank" rel="noopener">
              <i class="bi bi-facebook me-2"></i>
            </a>
            <a class="btn btn-ff-outline btn-hero-services px-4 py-2" href="#servicos">
              <i class="bi bi-arrow-down-circle me-2"></i><?= e($hero["secondary_cta"]) ?>
            </a>
          </div>

          <div class="pt-4 small text-muted-ff">
            <i class="bi bi-clock me-2"></i><?= e($contact["hours"]) ?>
          </div>
        </div>

        <div class="col-lg-6 hero-bg"></div>

      </div>
    </div>
  </div>
</header>

<!-- SERVICES -->
<section id="servicos" class="ff-section">
  <div class="container container-max">
    <div class="row align-items-end g-3 mb-4">
      <div class="col-lg-8">
        <!-- <div class="ff-kicker"><?// e($sections["services"]["title"]) ?></div> -->
        <h2 class="ff-title h1 mb-2"><?= e($sections["services"]["title"]) ?></h2>
        <p class="text-muted-ff mb-0"><?= e($sections["services"]["subtitle"]) ?></p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <button class="btn btn-ff px-4"
          data-wa-phone="<?= e($contact["phone_e164"]) ?>"
          data-wa-cta-msg="Olá! Quero informações sobre coleta seletiva e serviços.">
          <i class="bi bi-whatsapp me-2"></i>Solicitar atendimento
        </button>
      </div>
    </div>

    <div class="row g-3">
      <?php foreach($sections["services"]["items"] as $item): ?>
      <div class="col-md-6 col-lg-4">
        <div class="ff-card p-4 h-100">
          <div class="service-icon mb-3"><i class="bi <?= e($item["icon"]) ?>"></i></div>
          <h3 class="h5 fw-bold mb-2"><?= e($item["title"]) ?></h3>
          <p class="text-muted-ff mb-0"><?= e($item["text"]) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<div class="ff-divider"></div>

<!-- MATERIALS -->
<section id="materiais" class="ff-section bg-soft">
  <div class="container container-max">
    <div class="row align-items-end g-3 mb-4">
      <div class="col-12">
        <!-- <div class="ff-kicker"><?// e($sections["materials"]["title"]) ?></div> -->
        <h2 class="ff-title h1 mb-2"><?= e($sections["materials"]["title"]) ?></h2>
        <p class="text-muted-ff mb-0"><?= e($sections["materials"]["subtitle"]) ?></p>
      </div>
    </div>

    <div class="row g-3">
      <?php foreach($sections["materials"]["columns"] as $col): ?>
      <div class="col-md-6 col-lg-3">
        <div class="ff-card p-4 h-100">
          <div class="d-flex align-items-center gap-2 mb-2">
            <i class="bi bi-check2-circle text-success"></i>
            <h3 class="h6 fw-bold mb-0"><?= e($col["title"]) ?></h3>
          </div>
          <ul class="list-unstyled material-list mb-0">
            <?php foreach($col["items"] as $it): ?>
              <li class="text-muted-ff"><?= e($it) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <div class="row align-items-end g-3 mb-4 mt-1">
      <div class="col-lg-8">
        <!-- <div class="ff-kicker"><?// e($sections["materials"]["title"]) ?></div> -->
        <p class="text-muted-ff mb-0"><?= e($sections["materials"]["txtQuestion"]) ?></p>
      </div>
      <div class="col-lg-4 text-lg-end text-center">
        <button class="btn btn-ff-outline px-4"
          data-wa-phone="<?= e($contact["phone_e164"]) ?>"
          data-wa-cta-msg="Olá! Tenho dúvidas sobre quais materiais vocês aceitam.">
          <i class="bi bi-question-circle me-2"></i>Tirar dúvida
        </button>
      </div>
    </div>
  </div>
</section>

<!-- PROCESS -->
<section id="como-funciona" class="ff-section">
  <div class="container container-max">
    <!-- <div class="ff-kicker"><?// e($sections["process"]["title"]) ?></div> -->
    <h2 class="ff-title h1 mb-2"><?= e($sections["process"]["title"]) ?></h2>
    <p class="text-muted-ff mb-4"><?= e($sections["process"]["subtitle"]) ?></p>

    <div class="row g-3">
      <?php foreach($sections["process"]["steps"] as $s): ?>
      <div class="col-md-6 col-lg-3">
        <div class="ff-card p-4 h-100">
          <div class="step-icon mb-3"><i class="bi <?= e($s["icon"]) ?>"></i></div>
          <h3 class="h6 fw-bold mb-2"><?= e($s["title"]) ?></h3>
          <p class="text-muted-ff mb-0"><?= e($s["text"]) ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- SCHEDULE -->
<section id="coleta-setores" class="ff-section bg-soft">
  <div class="container container-max">
    <!-- <div class="ff-kicker">Coleta Seletiva</div> -->
    <h2 class="ff-title h1 mb-2"><?= e($sections["schedule"]["title"]) ?></h2>
    <p class="text-muted-ff mb-4"><?= e($sections["schedule"]["subtitle"]) ?></p>

    <div class="row g-3">
      <?php foreach($sections["schedule"]["days"] as $day): ?>
        <div class="col-md-6 col-lg-4">
          <div class="ff-card p-4 h-100">
            <div class="d-flex align-items-center gap-2 mb-2">
              <i class="bi bi-calendar-check text-success"></i>
              <strong><?= e($day["day"]) ?></strong>
            </div>
            <div class="text-muted-ff small mb-2"><?= e($day["sector"]) ?></div>

            <ul class="small ps-3 mb-0">
              <?php foreach($day["neighborhoods"] as $n): ?>
                <li><?= e($n) ?></li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="text-center pt-4">
      <button class="btn btn-ff px-4"
        data-wa-phone="<?= e($contact["phone_e164"]) ?>"
        data-wa-cta-msg="Olá! Gostaria de confirmar o dia da coleta seletiva no meu bairro.">
        <i class="bi bi-whatsapp me-2"></i>Confirmar meu bairro
      </button>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section id="sobre" class="ff-section bg-soft">
  <div class="container container-max">
    <div class="row g-4 align-items-center">
      <div class="col-lg-6">
        <!-- <div class="ff-kicker">Sobre</div> -->
        <h2 class="ff-title h1 mb-3"><?= e($sections["about"]["title"]) ?></h2>
        <p class="text-muted-ff mb-4"><?= e($sections["about"]["text"]) ?></p>

        <div class="row g-3">
          <?php foreach($sections["about"]["highlights"] as $h): ?>
          <div class="col-md-6">
            <div class="ff-card p-3 h-100">
              <div class="d-flex gap-3">
                <div class="service-icon" style="width:44px;height:44px"><i class="bi <?= e($h["icon"]) ?>"></i></div>
                <div>
                  <div class="fw-bold"><?= e($h["title"]) ?></div>
                  <div class="text-muted-ff small"><?= e($h["text"]) ?></div>
                </div>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- <div class="pt-4">
          <button class="btn btn-ff px-4"
            data-wa-phone="<?// e($contact["phone_e164"]) ?>"
            data-wa-cta-msg="Olá! Quero agendar uma coleta / parceria com a FFReciclagem.">
            <i class="bi bi-whatsapp me-2"></i>Falar com a equipe
          </button>
        </div> -->
      </div>

      <div class="col-lg-6">
        <div class="about-media">
          <img src="<?= e($sections["about"]["image"]) ?>" alt="Equipe e parceria">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="ff-section">
  <div class="container container-max">
    <!-- <div class="ff-kicker">FAQ</div> -->
    <h2 class="ff-title h1 mb-3"><?= e($sections["faq"]["title"]) ?></h2>

    <div class="accordion" id="faqAccordion">
      <?php foreach($sections["faq"]["items"] as $idx => $qa): ?>
      <div class="accordion-item border-ff rounded-ff mb-2 overflow-hidden">
        <h2 class="accordion-header" id="faqH<?= $idx ?>">
          <button class="accordion-button <?= $idx ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#faqC<?= $idx ?>" aria-expanded="<?= $idx ? 'false' : 'true' ?>" aria-controls="faqC<?= $idx ?>">
            <?= e($qa["q"]) ?>
          </button>
        </h2>
        <div id="faqC<?= $idx ?>" class="accordion-collapse collapse <?= $idx ? '' : 'show' ?>" aria-labelledby="faqH<?= $idx ?>" data-bs-parent="#faqAccordion">
          <div class="accordion-body text-muted-ff">
            <?= e($qa["a"]) ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contato" class="ff-section bg-soft">
  <div class="container container-max">
    <div class="row g-4">
      <div class="col-lg-5">
        <!-- <div class="ff-kicker">Contato</div> -->
        <h2 class="ff-title h1 mb-2">Vamos conversar?</h2>
        <p class="text-muted-ff mb-4"><?= e($brand["tagline"]) ?></p>

        <div class="d-flex flex-wrap gap-2 mb-3">
          <a class="ff-mini-link" href="tel:<?= e($contact["phone_e164"]) ?>"><i class="bi bi-telephone"></i><?= e($contact["phone_display"]) ?></a>
          <a class="ff-mini-link" href="mailto:<?= e($contact["email"]) ?>"><i class="bi bi-envelope"></i><?= e($contact["email"]) ?></a>
        </div>

        <div class="ff-card p-4">
          <div class="d-flex align-items-start gap-3">
            <div class="service-icon" style="width:44px;height:44px"><i class="bi bi-clock"></i></div>
            <div>
              <div class="fw-bold">Horário</div>
              <div class="text-muted-ff"><?= e($contact["hours"]) ?></div>
            </div>
          </div>
          <div class="ff-divider my-3"></div>
          <div class="d-flex align-items-start gap-3">
            <div class="service-icon" style="width:44px;height:44px"><i class="bi bi-geo-alt"></i></div>
            <div>
              <div class="fw-bold">Endereço</div>
              <div class="text-muted-ff"><?= e($contact["address"]) ?></div>
            </div>
          </div>
          <?php if(!empty($contact["maps_url"])): ?>
            <div class="pt-3">
              <a class="btn btn-ff-outline w-100" target="_blank" rel="noopener" href="<?= e($contact["maps_url"]) ?>">
                <i class="bi bi-map me-2"></i>Abrir no mapa
              </a>
            </div>
          <?php endif; ?>
        </div>

        <div class="ff-card p-3 mt-3">
          <div class="small text-muted-ff mb-2">Acompanhe a FF nas redes sociais</div>
            <div class="d-grid d-sm-flex gap-2">
              <a class="btn btn-social btn-ig" href="..." target="_blank" rel="noopener">
                <i class="bi bi-instagram me-2"></i>Instagram
              </a>
              <a class="btn btn-social btn-fb" href="..." target="_blank" rel="noopener">
                <i class="bi bi-facebook me-2"></i>Facebook
              </a>
            </div>
          </div>
        </div>

      <div class="col-lg-7">
        <div class="ff-contact-card p-4 p-md-5">
          <h3 class="h5 fw-bold mb-1">Peça coleta ou tire dúvidas</h3>
          <p class="text-muted-ff mb-4">Ao enviar, você será direcionado para o WhatsApp com a mensagem já preenchida. Não é necessário cadastro nem envio de dados pelo site.</p>

          <form data-wa-form
            data-wa-phone="<?= e($contact["phone_e164"]) ?>"
            data-wa-default-message="<?= e($contact["whatsapp_default_message"]) ?>">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label">Nome</label>
                <input class="form-control" name="name" placeholder="Seu nome">
              </div>
              <div class="col-md-6">
                <label class="form-label">E-mail</label>
                <input class="form-control" name="email" type="email" placeholder="seuemail@exemplo.com">
              </div>
              <div class="col-md-6">
                <label class="form-label">Telefone</label>
                <input class="form-control" name="phone" placeholder="(xx) xxxxx-xxxx">
              </div>
              <div class="col-md-12">
                <label class="form-label">Mensagem</label>
                <textarea class="form-control" name="message" rows="4" placeholder="Conte o que você precisa (tipo de material, volume, endereço, etc.)" required></textarea>
              </div>
              <div class="col-md-12 d-grid d-md-flex gap-2">
                <button class="btn btn-ff px-4" type="submit">
                  <i class="bi bi-whatsapp me-2"></i>Enviar no WhatsApp
                </button>
                <button class="btn btn-ff-outline px-4" type="reset">
                  <i class="bi bi-x-circle me-2"></i>Limpar
                </button>
              </div>
            </div>
          </form>

          <div class="pt-4 small text-muted-ff">
            <i class="bi bi-info-circle me-2"></i>Se preferir, mande mensagem direto: <strong><?= e($contact["phone_display"]) ?></strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="ff-footer">
  <div class="container container-max">
    <div class="footer-inner footer-center-logo">

      <div class="footer-left">
        © <span data-current-year></span> · FFReciclagem · Todos os direitos reservados.
      </div>

      <div class="footer-logo">
        <img src="Assets/img/logo.png" alt="FFReciclagem" height="28">
      </div>

      <div class="footer-right">
        Desenvolvido por
        <a href="https://vfweb.cloud" target="_blank" rel="noopener">vfweb.cloud</a>
        ·
        <a href="mailto:contato@vfweb.cloud" class="text-white">contato@vfweb.cloud</a>
      </div>

    </div>
  </div>
</footer>




<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script src="Assets/js/padrao.js"></script>
<script src="Assets/js/sections/hero.js"></script>
<script src="Assets/js/sections/services.js"></script>
<!-- <script src="Assets/js/sections/map.js"></script> -->
<script src="Assets/js/sections/contact.js"></script>

</body>
</html>
