<? include "functions.php"; ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Residencial Champs Elisées</title>
    <link rel="shortcut icon" href="./favicon.ico" />
    <meta name="description" content="A natureza é o quintal da sua casa">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.min.css">
    <link rel="stylesheet" media="(min-width: 768px) and (max-width: 1200px)" href="style-tablet.min.css">
    <link rel="stylesheet" media="(min-width: 1201px)" href="style-desktop.min.css">
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    
    <section id="banner">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 text-center">
            <img src="./assets/img/logo.png" class="img-fluid">
          </div>
          <div class="col-md-6 titulo">
            <h1>
              <div>A <span class="golden-hopes cor-dourado">natureza</span> é</div>
              <div>o quintal da sua casa</div>
            </h1>
            <p class="rounded-pill btn-arthur cor-dourado"><span></span>Em Arthur Nogueira - SP</p>
          </div>
        </div>
        <div class="row">
          <div class="col text-center mt-5">
            <? echo cta("SAIBA MAIS"); ?>
          </div>
        </div>
      </div>
      <div class="folha"></div>
    </section>

    <section id="conheca">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <img src="./assets/img/familia.png" class="img-fluid familia" alt="Família">
          </div>
          <div class="col-md-6">
            <h2>Conheça o<br>Champs Élysées</h2>
            <p class="cor-dourado">um residencial que conecta você e sua família à tranquilidade da natureza.</p>
            <div class="ico-casa">Com muita área verde e uma infraestrutura inteligente para moradia e lazer.</div>
          </div> 
        </div>
        <div class="row vista-aerea">
          <div class="col-md-3">
            <img src="./assets/img/selo.png" class="img-fluid selo" alt="Sinal verde: pronto para construir">
          </div>
          <div class="col-md-9">
            <img src="./assets/img/vista-aerea.png" class="img-fluid foto" alt="Vista aérea">
          </div> 
        </div>
      </div>
      <div class="folha"></div>
    </section>

    <section id="natureza">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <hr>
            <h2>O seu residencial<br>fechado em meio à <span class="golden-hopes cor-dourado">natureza</span></h2>
          </div> 
          <div class="col-md-4 conteudo">
            <p>O Champs Élysées reúne a calmaria da natureza e a urbanização das cidades, oferecendo a você o melhor estilo de vida. Além disso, todo o território orgânico ao redor é preservado e completamente acessível.</p>
            <? echo cta("QUERO SABER MAIS"); ?>
          </div> 
        </div>
      </div>
      <div class="folha"></div>
    </section>

    <section id="mapa">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mapa">
            <img src="./assets/img/mapa.png" class="img-fluid" alt="Mapa">
          </div> 
          <div class="col-md-6 conteudo">
            <p><span class="golden-hopes cor-dourado">Tranquilidade,</span> conforto e segurança</p>
          </div> 
        </div>
      </div>
    </section>

    <section id="itens">
      <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-stretch justify-content-center align-self-stretch">
          <div class="bloco ms-2 me-2">
            <h3>Localização <br>privilegiada em <br>Artur Nogueira:</h3>
            <p>próxima a Campinas<br> e Limeira</p>
            <img src="./assets/img/ico-localizacao.png">
          </div>
          <div class="bloco ms-2 me-2">
            <h3>Infraestrutura <br>inteligente</h3>
            <p>para moradia e lazer,<br> incluindo quadra<br> esportiva</p>
            <img src="./assets/img/ico-infra.png">
          </div>
          <div class="bloco ms-2 me-2">
            <h3>Espaço:</h3>
            <p>conforto e recreação<br> para toda a família</p>
            <img src="./assets/img/ico-espaco.png">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-stretch justify-content-center align-self-stretch">
          <div class="bloco ms-2 me-2">
            <h3>Mais de <br>88.000 m2</h3>
            <p>de área verde</p>
            <img src="./assets/img/ico-natureza.png">
          </div>
          <div class="bloco ms-2 me-2">
            <h3>Segurança:</h3>
            <p>portaria e <br>monitoramento 24h</p>
            <img src="./assets/img/ico-seguranca.png">
          </div>
        </div>
      </div>
      <div class="container text-center mt-5">
      <? echo cta("QUERO SABER MAIS"); ?>
      </div>
    </section>

    <section id="contato">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6">
            <h2>Converse conosco e <br>tenha a <span class="golden-hopes cor-dourado">natureza</span><br> como o quintal da<br> sua casa</h2>
            <form action="#" id="form">
              <div class="mb-3 mt-5">
                <input type="name" class="form-control" id="nome" rows="3" placeholder="Nome*">
                </div>
                <div class="mb-3">
                <input type="email" class="form-control" id="email" placeholder="Email*">
              </div>
              <div class="mb-3">
                <input type="text" class="form-control" id="telefone" placeholder="Telefone*">
              </div>
              <h3>Você é:</h3>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="voce-e" id="voce-e-investidor">
                <label class="form-check-label" for="flexRadioDefault1">
                  Investidor
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="voce-e" id="voce-e-comprador">
                <label class="form-check-label" for="flexRadioDefault2">
                  Comprador
                </label>
              </div>
              <h3>Por onde prefere ser contatado?</h3>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="prefere-contato" id="prefere-contato-whatsapp">
                <label class="form-check-label" for="prefere-contato-whatsapp">
                  Whatsapp
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="prefere-contato" id="prefere-contato-email">
                <label class="form-check-label" for="prefere-contato-email">
                  E-mail
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="prefere-contato" id="prefere-contato-telefone">
                <label class="form-check-label" for="prefere-contato-telefone">
                  Telefone
                </label>
              </div>
              <div class="mt-2 mb-4 text-center">
                <button type="submit" class="btn btn-cta rounded-pill ps-5 pe-5">Enviar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="folha"></div>
    </section>


  </body>
</html>