<?php

    function navigation($caminho)
    {
        echo "<body class=\"fixed-nav sticky-footer bg-dark sidenav-toggled\" id=\"page-top\">
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" id=\"mainNav\">
        <a class=\"navbar-brand\" href=\"".$caminho."index.html\">Intranet</a>
        <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav navbar-sidenav\" id=\"exampleAccordion\">
  
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Painel\">
              <a class=\"nav-link\" href=\"".$caminho."index.html\">
              
                <i class=\"fa fa-fw fa-dashboard\"></i>
                
                <span class=\"nav-link-text\"></span>
              </a>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Usuários\">
              <a class=\"nav-link\" href=\"".$caminho."pages/users.php\">
                <i class=\"fa fa-fw fa-users\"></i>
                <span class=\"nav-link-text\"></span>
              </a>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Eventos\">
              <a class=\"nav-link\" href=\"".$caminho."tables.html\">
                <i class=\"fa fa-fw fa-calendar\"></i>
                <span class=\"nav-link-text\"></span>
              </a>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Mural de recados\">
              <a class=\"nav-link\" data-toggle=\"collapse\" href=\"".$caminho."#collapseComponents\" data-parent=\"#exampleAccordion\">
                <i class=\"fa fa-fw fa-comments\"></i>
                <span class=\"nav-link-text\"></span>
              </a>
            </li>
            <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Ramais\">
              <a class=\"nav-link\" data-toggle=\"collapse\" href=\"".$caminho."#collapseExamplePages\" data-parent=\"#exampleAccordion\">
                <i class=\"fa fa-fw fa-phone\"></i>
                <span class=\"nav-link-text\"></span>
              </a>
            </li>
            
          </ul>
          
         <ul class=\"navbar-nav sidenav-toggler\">
            <li class=\"nav-item\">
              <a class=\"nav-link text-center\" id=\"sidenavToggler\">
                <i class=\"fa fa-fw fa-angle-left\"></i>
              </a>
            </li>
          </ul>
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle mr-lg-2\" id=\"messagesDropdown\" href=\"".$caminho."#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fa fa-fw fa-gear\"></i>
              </a>
              <div class=\"dropdown-menu\" aria-labelledby=\"messagesDropdown\">
                <a class=\"dropdown-item\" href=\"".$caminho."#\">
                <i class=\"fa fa-fw fa-clock-o\"></i><strong> Atualizações</strong>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"".$caminho."#\">
                <i class=\"fa fa-fw fa-users\"></i><strong> Usuários</strong>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"".$caminho."#\">
                <i class=\"fa fa-fw fa-calendar\"></i><strong> Eventos</strong>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"".$caminho."#\">
                <i class=\"fa fa-fw fa-comments\"></i><strong> Recados</strong>
                </a>
                <div class=\"dropdown-divider\"></div>
                <a class=\"dropdown-item\" href=\"".$caminho."#\">
                <i class=\"fa fa-fw fa-cutlery\"></i><strong> Cardápio</strong>
                </a>
            </li>
            <li class=\"nav-item dropdown\">
              <a class=\"nav-link dropdown-toggle mr-lg-2\" id=\"alertsDropdown\" href=\"".$caminho."#\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fa fa-fw fa-user\"></i>
              </a>
              <div class=\"dropdown-menu\" aria-labelledby=\"alertsDropdown\">
              <a class=\"dropdown-item\" href=\"".$caminho."#\">
              <i class=\"fa fa-fw fa-user\"></i><strong> Minha conta</strong>
              </a>
              <div class=\"dropdown-divider\"></div>
              <a class=\"dropdown-item\" href=\"".$caminho."#\">
              <i class=\"fa fa-fw fa-sign-out\"></i><strong> Sair</strong>
              </a>
              </div>
            </li>
            <!--Barra de pesquisar-->
            <!--<li class=\"nav-item\">
              <form class=\"form-inline my-2 my-lg-0 mr-lg-2\">
                <div class=\"input-group\">
                  <input class=\"form-control\" type=\"text\" placeholder=\"Pesquisar ...\">
                  <span class=\"input-group-append\">
                    <button class=\"btn btn-primary\" type=\"button\">
                      <i class=\"fa fa-search\"></i>
                    </button>
                  </span>
                </div>
              </form>
            </li>-->
            <!--Fim barra de pesquisar-->
            <!--Opção sair-->
            <!--<li class=\"nav-item\">
              <a class=\"nav-link\" data-toggle=\"modal\" data-target=\"#exampleModal\">
                <i class=\"fa fa-fw fa-sign-out\"></i>Sair</a>
            </li>-->
          </ul>
        </div>
      </nav>";
    }

?>