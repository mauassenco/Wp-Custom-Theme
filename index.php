<?php get_header(); ?>

  <body>
    <main class="container-fluid px-0">
      <!-- Inicio "Vitrine" -->
      
      <section class="row showcase flex-wrap-reverse">
        <div class="col-md-6 showcase__cta">
          <h1 class="showcase__title">Reembolsos corporativos de forma simples e rápida.<span class="showcase__sub-title">Como deve ser</span>.</h1>
          <p class="showcase__paragraph">Acabe com a dor de cabeça da gestão de despesas do dia a dia da sua empresa: pagamentos, reembolsos, compras on-line e gestão do fundo fixo. Controle seus gastos escaneando notas fiscais, acompanhando aprovações, visualizando relatórios e muito mais!</p>
          <button type="button" class="btn btn-block text-uppercase">Peça já sua proposta</button>
          <p class="text-ub">Responderemos <span>em até 24h.</span></p>
        </div>
        <figure class="col-md-6 showcase__image">
          <img src="<?php bloginfo('template_url'); ?>/img/large-Header_3d_3 1.png" alt="Imagem ilustrativa de um notebook e grafico ao fundo">
        </figure>
      </section>
      
     <!-- Fim "Vitrine" -->

     <!-- Inicio "Controle de Gastos" -->
      <section class="row controle-gastos">
        <!-- Abre Modal -->
        <div class="col-md-6">
          <img  src="<?php bloginfo('template_url'); ?>/img/Captura de Tela 2019-12-19 às 18.55 1.jpg" class="controle-gastos__modal-trigger" data-toggle="modal" data-target="#controle-gastos__modal">            
          </img>
        <!-- Modal -->
          <div class="modal fade" id="controle-gastos__modal" tabindex="-1" role="dialog" aria-labelledby="controle-gastos__modalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              </div>
              <div class="modal-content">
                  <!-- iframe -->
                  <iframe src="https://www.youtube.com/embed/4oeVCWTyUpY" width="560" height="315"  frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <!-- iframe -->               
              </div>
            </div>
          </div>
        </div>
        <!-- Fim do Modal -->
        <div class="col-md-6 showcase__cta showcase__cta--controle-gastos">
          <h1 class="showcase__title showcase__title--controle-gastos">Assuma agora o <span class="showcase__sub-title showcase__sub-title--controle-gastos">controle dos gastos </span>variáveis da sua empresa</h1>
          <p class="showcase__paragraph">O BPP Corp é uma solução única para a administração de gastos corporativos que conta com uma conta digital empresarial grátis, cartões VISA pré-pagos para controle total das despesas e um aplicativo sem custos adicionais para tornar seu controle financeiro mais simples e prático! </p>
          <a href="" class="showcase__proposta text-uppercase text-decoration-none">Peça já sua proposta<span class="material-icons md-24">
            arrow_right_alt
            </span></a>          
        </div>
      </section>
      <!-- Fim "Controle de Gastos" -->

      <!-- Inicio "Organizar Reembolsos" -->
      <section class="row organizar-reembolsos">
        <div class="col-md-6 showcase__cta showcase__cta--organizar-reembolsos">
          <h1 class="showcase__title showcase__title--controle-gastos"><span class="showcase__sub-title showcase__sub-title--controle-gastos">Organizar reembolsos</span> da sua empresa nunca foi tão rápido</h1>
          <p class="showcase__paragraph"> Utilizando BPP Corp, você tem controle total sobre o budget de sua equipe podendo realizar transferências instantâneas para os cartões corporativos dos colaboradores, acompanhar gastos, receber comprovantes e visualizar relatórios que organizam seu reembolso</p>
          <a href="" class="showcase__proposta text-uppercase text-decoration-none">Peça já sua proposta<span class="material-icons md-24">
            arrow_right_alt
            </span></a>
            <button type="button" class="btn btn-block text-uppercase">Peça já sua proposta</button>         
        </div>
        <figure class="col-md-6 showcase__image showcase__image--organizar-reembolsos">
          <img src="<?php bloginfo('template_url'); ?>/img/bpp_corp_reembolso 1.png" alt="Homem olhando para o celular em sua mão">
        </figure>
      </section>
       <!-- Fim "Organizar Reembolsos" -->
       
      <!-- Inicio "Reduzir os gastos" MOBILE-->
      <section class="row reduzir-gastos reduzir-gastos--mobile">
        <div class="col-md-6 showcase__cta showcase__cta--controle-gastos showcase__cta--reduzir-gastos">
          <h1 class="showcase__title showcase__title--controle-gastos text-center">A plataforma que ajuda a <span class="showcase__sub-title showcase__sub-title--controle-gastos">reduzir os gastos</span> do dia a dia</h1>
          <p class="showcase__paragraph text-center">Simplifique a gestão das despesas, evitando a perda de tempo com comprovantes e planilhas, reduzindo custos e aumentando os resultados da sua empresa.</p>          
        </div>
        <div class="col-md-6">
          <!-- Carrossel -->
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            </ol>
   
            <div class="carousel-inner">
              <!-- Card 1 -->
              <div class="carousel-item active reduzir-gastos__card ">
                <div class="card">
                  <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/cr1.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center">Mais rapidez na gestão das suas despesas</h5>
                    <p class="card-text text-center">Para que seu negócio cresça de maneira inteligente e rápida, substitua os processos demorados de reembolsos, aprovações, criação de relatórios e etc. por uma plataforma que te oferece tudo isso de forma rápida e digital. </p>                   
                  </div>
                </div>
              </div>
              <!-- card 2 -->
              <div class="carousel-item reduzir-gastos__card ">
                <div class="card">
                  <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/cr2.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center">Os relatórios que você precisa em um único lugar</h5>
                    <p class="card-text text-center">Encontre relatórios detalhados sobre as utilizações de cada cartão corporativo cadastrado em sua equipe. Confira o saldo de cada cartão, redistribua valores, faça transferências instantâneas e não perca tempo com formulários e planilhas.  </p>                   
                  </div>
                </div>
              </div>
              <!-- card 3 -->
              <div class="carousel-item reduzir-gastos__card ">
                <div class="card">
                  <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/cr3-removebg-preview.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center">Organize todos os seus comprovantes</h5>
                    <p class="card-text text-center">Recebendo os comprovantes de gastos de seus colaboradores através da plataforma, você não precisa mais guardar comprovantes e notas fiscais em lugar nenhum. Os gastos podem ser classificados por tipo ou por projeto, da forma que você precisar. </p>                   
                  </div>
                </div>
              </div>
              <!-- Card 4 -->
              <div class="carousel-item reduzir-gastos__card ">
                <div class="card">
                  <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/cr4.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center">Apresente suas despesas com um só clique</h5>
                    <p class="card-text text-center">Enviar seus comprovantes é mais simples do que você imagina. Basta que o colaborador tire uma foto do cupom fiscal com seu smartphone através do aplicativo BPP Card. O gestor das despesas pode aprovar ou reprovar aquele gasto através do App.</p>                   
                  </div>
                </div>
              </div>
              <!-- Card 5 -->
              <div class="carousel-item reduzir-gastos__card ">
                <div class="card">
                  <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/cr5.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center">Mais rapidez na gestão das suas despesas</h5>
                    <p class="card-text text-center">Para que seu negócio cresça de maneira inteligente e rápida, substitua os processos demorados de reembolsos, aprovações, criação de relatórios e etc. por uma plataforma que te oferece tudo isso de forma rápida e digital. </p>                   
                  </div>
                </div>
              </div>
              <!-- Card 6 -->
              <div class="carousel-item reduzir-gastos__card ">
                <div class="card">
                  <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/cr6.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title text-center">Conta digital gratuita e exclusiva para sua empresa</h5>
                    <p class="card-text text-center">Oferecemos uma conta digital gratuita especialmente para gerenciar despesas.  Transfira o saldo de sua conta para os cartões de maneira instantânea, sempre livre de taxas de manutenção ou de juros. </p>                   
                  </div>
                </div>
              </div>
            
            </div>    
          </div>          
           <!-- FimCarrossel -->
        </div>        
      </section>
       <!-- Fim "Reduzir os gastos" MOBILE -->
       <!-- Inicio "Reduzir os gastos" NORMAL-->
      <section class="row reduzir-gastos reduzir-gastos--normal">
        <div class="row">
          <div class=" showcase__cta showcase__cta--reduzir-gastos">
            <h1 class="text-center showcase__title showcase__title--controle-gastos">A plataforma que ajuda a <span class="showcase__sub-title showcase__sub-title--controle-gastos">reduzir os gastos</span> do dia a dia</h1>
            <p class="showcase__paragraph showcase__paragraph--reduzir-gastos text-center">Simplifique a gestão das despesas, evitando a perda de tempo com comprovantes e planilhas, reduzindo custos e aumentando os resultados da sua empresa.</p>
            </div>
        </div>
        <div class="row mb-5">
          <!-- Card 1 -->
          <div class="col-md-4 reduzir-gastos__card ">
            <div class="card">
              <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/cr1.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center">Mais rapidez na gestão das suas despesas</h5>
                <p class="card-text text-center">Para que seu negócio cresça de maneira inteligente e rápida, substitua os processos demorados de reembolsos, aprovações, criação de relatórios e etc. por uma plataforma que te oferece tudo isso de forma rápida e digital. </p>                   
              </div>
            </div>
          </div>
          <!-- card 2 -->
          <div class="col-md-4 reduzir-gastos__card ">
            <div class="card">
              <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/cr2.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center">Os relatórios que você precisa em um único lugar</h5>
                <p class="card-text text-center">Encontre relatórios detalhados sobre as utilizações de cada cartão corporativo cadastrado em sua equipe. Confira o saldo de cada cartão, redistribua valores, faça transferências instantâneas e não perca tempo com formulários e planilhas.  </p>                   
              </div>
            </div>
          </div>
          <!-- card 3 -->
          <div class="col-md-4 reduzir-gastos__card ">
            <div class="card">
              <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/cr3-removebg-preview.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center">Organize todos os seus comprovantes</h5>
                <p class="card-text text-center">Recebendo os comprovantes de gastos de seus colaboradores através da plataforma, você não precisa mais guardar comprovantes e notas fiscais em lugar nenhum. Os gastos podem ser classificados por tipo ou por projeto, da forma que você precisar. </p>                   
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Card 4 -->
          <div class="col-md-4 reduzir-gastos__card ">
            <div class="card">
              <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/cr4.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center">Apresente suas despesas com um só clique</h5>
                <p class="card-text text-center">Enviar seus comprovantes é mais simples do que você imagina. Basta que o colaborador tire uma foto do cupom fiscal com seu smartphone através do aplicativo BPP Card. O gestor das despesas pode aprovar ou reprovar aquele gasto através do App.</p>                   
              </div>
            </div>
          </div>
          <!-- Card 5 -->
          <div class="col-md-4 reduzir-gastos__card ">
            <div class="card">
              <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/cr5.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center">Mais rapidez na gestão das suas despesas</h5>
                <p class="card-text text-center">Para que seu negócio cresça de maneira inteligente e rápida, substitua os processos demorados de reembolsos, aprovações, criação de relatórios e etc. por uma plataforma que te oferece tudo isso de forma rápida e digital. </p>                   
              </div>
            </div>
          </div>
          <!-- Card 6 -->
          <div class="col-md-4 reduzir-gastos__card ">
            <div class="card">
              <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/cr6.png" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title text-center">Conta digital gratuita e exclusiva para sua empresa</h5>
                <p class="card-text text-center">Oferecemos uma conta digital gratuita especialmente para gerenciar despesas.  Transfira o saldo de sua conta para os cartões de maneira instantânea, sempre livre de taxas de manutenção ou de juros. </p>                   
              </div>
            </div>
          </div>
        </div>
      </section>
       <!-- Fim "Reduzir os gastos" NORMAL -->

      <!-- Inicio "Vantagens Exclusivas" -->
      <section class="row vantagens-exlusivas flex-row-reverse">
        <div class="col-md-6 showcase__cta showcase__cta--vantagens-exlusivas">
          <h1 class="showcase__title showcase__title--controle-gastos">Conheça quem já conta com as <span class="showcase__sub-title showcase__sub-title--controle-gastos">vantagens excluisivas</span> do BPP Corp</h1>
          <p class="showcase__paragraph">A empresas mais bem-sucedidas do mundo, grandes e pequenas, confiam no BPP Corp para reduzir custos com organização dos gastos da suas empresas. </p>
        </div>
        <div class="col-md-6">
          <div class="row ">
            <div class="col vantagens-exlusivas__item">
              <img src="<?php bloginfo('template_url'); ?>/img/bking.png" alt="" class="mx-auto">
            </div>
            <div class="col vantagens-exlusivas__item">
              <img src="<?php bloginfo('template_url'); ?>/img/boticario.png" alt="">
            </div>
          </div>
          <div class="row">
            <div class="col vantagens-exlusivas__item">
              <img src="<?php bloginfo('template_url'); ?>/img/cshow.png" alt="">
            </div>
            <div class="col vantagens-exlusivas__item">
              <img src="<?php bloginfo('template_url'); ?>/img/pmenos.png" alt="">
            </div>
          </div>
        </div>
      </section>
       <!-- Fim  "Vantagens Exclusivas" -->

       <!-- Inicio "decida agora" -->
       <section class="row decida-agora">
         <div class="row showcase__cta showcase__cta--decida-agora">
            <h1 class="showcase__title showcase__title--controle-gastos text-center">Compare e  <span class="showcase__sub-title showcase__sub-title--controle-gastos">decida agora</span> mesmo</h1>
            <p class="showcase__paragraph text-center">Substitua o uso do dinheiro em espécie pelo BPP Corp e ganhe segurança e praticidade, evitando roubos e perdas, tendo uma plataforma única para gerir suas despesas. </p>          
         </div>
         <div class="row">                 
          <div class="col-md-6 decida-agora__card card border-0">
            <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/Group 179.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-center">Dinheiro em papel</h5>
              <ul class="list-unstyled">
                <li class="card-text text-center">Saque de dinheiro em papel para as despesas </li>                   
                <li class="card-text text-center">Várias notas fiscais em papel </li>                   
                <li class="card-text text-center">Diversas planilhas de gestão </li>                   
                <li class="card-text text-center">Problemas de contabilização dos gastos </li>                   
                <li class="card-text text-center">Não tem segurança </li>                   
              </ul>
            </div>
          </div>          
          <div class="col-md-6 decida-agora__card decida-agora__card--bpp card border-0 rounded-0">
            <img class="card-img-top mx-auto " src="<?php bloginfo('template_url'); ?>/img/GroupB.png" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title text-center">BPP Corp</h5>
              <ul class="list-unstyled">
                <li class="card-text text-center">Faça pagamentos com o BPP Corp sem precisar tirar dinheiro</li>                   
                <li class="card-text text-center">Prestação de contas sem papel, via app</li>                   
                <li class="card-text text-center">Relatórios completos em um único lugar</li>                   
                <li class="card-text text-center">Controle dos gastos com cartões pré-pago</li>                   
                <li class="card-text text-center">Segurança total do seu dinheiro</li>                   
              </ul>
            </div>
          </div>            
         </div>
       </section>
       <!-- Fim "decida agora" -->
       
       <!-- Inicio jumbotron -->
       <section class="row jumbotron text-center" style="background-image:url(<?php bloginfo('template_url'); ?>/img/Rectangle44b.png)">        
          <h1>A sua gestão financeira nunca foi tão fácil. </h1>
          <p>Conte com as soluções do BPP Corp e facilite o controle dos gastos da sua empresa agora mesmo</p>
          <button type="button" class="btn btn-block text-uppercase">Peça já sua proposta</button>      
          <p>Proposta <spam class="font-weight-bold">grátis</spam> e sem compromisso.</p>
       </section>
        <!-- Fim jumbotron -->

        <!-- Inicio Ultimos Posts -->
        <section class="row last-posts">
          <div class="col-md-12">
            <div class="row">
              <h1 class="last-posts__title">Últimos posts</h1>
            </div>
            <div class="row posts-container">

            <?php if(have_posts()) : ?>
                <?php while(have_posts()) : the_post(); ?>
              <!-- Post 1 -->              
              <div class="col-md-4 last-posts__post"> 
                <?php if(has_post_thumbnail()) : ?>
                    <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
                    <img class="img-fluid" src="<?php echo $url ?>" />
                <?php endif; ?>
                <p class="last-posts__post-title text-uppercase"><?php the_title(); ?></p>
              </div>
              <?php endwhile; ?>
              <?php else : ?>
                <p><?php __('Não há posts'); ?></p>
              <?php endif; ?>

            </div>
          </div>
          
        </section>
        <!-- Fim Ultimos Posts -->
    </main>

    <?php get_footer(); ?>

    <?php wp_footer(); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>        
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>   

  </body>
</html>