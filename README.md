\
# FFReciclagem — Landing Page (PHP + Config)

## Estrutura
FFReciclagem/
  Assets/
    config/config.php
    css/
      padrao.css
      sections/*.css
    js/
      padrao.js
      sections/*.js
    img/*.svg
  index.php

## Como rodar local
- Coloque a pasta em um servidor PHP (WAMP/XAMPP) ou:
  - PHP embutido: `php -S localhost:8000` (dentro da pasta FFReciclagem)
- Acesse: http://localhost:8000

## Onde editar
- Textos/contatos/cores/imagens: `Assets/config/config.php`
- Estilos base: `Assets/css/padrao.css`
- Estilos por seção: `Assets/css/sections/*`
- JS base (form->WhatsApp / ano): `Assets/js/padrao.js`

## Próximos upgrades (se quiser)
- Página “Notícias” / Blog
- Seção “Parcerias” (empresas/condomínios)
- Galeria e antes/depois da triagem
- Integração de formulário real (PHP mail / SMTP)
