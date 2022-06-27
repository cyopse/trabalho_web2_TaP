<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>You Service</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="shortcut icon" href="{{ asset('images/icone_projeto.svg') }}">
    <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/chblue.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/theme-responsive.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/dtb/jquery.dataTables.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('assets/css/toastr.min.css') }}" rel="stylesheet" media="screen">        
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery-ui.1.10.4.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/toastr.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/modernizr.js') }}"></script>
    @livewireStyles
</head>
<body>
        <header id="header" class="header-v3">
            <nav class="flat-mega-menu">
                <label for="mobile-button"> <i class="fa fa-bars"></i></label>
                <input id="mobile-button" type="checkbox">
                <ul class="collapse">
                    <li class="title">
                        <a href=""><img src=""></a>
                    </li>

                    <li>
                        <a href="/">Home</a>
                    </li>

                    <li><a href="{{route('home.service_categories')}}">Categorias</a></li>

                    <li> <a href="#">Eletrodomésticos</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="">Computadores</a></li>
                            <li><a href="">TV</a></li>
                            <li><a href="">Máquina de lavar</a></li>
                            <li><a href="">Microondas</a></li>
                            <li><a href="">Fogão</a></li>
                            <li><a href="">Geladeira</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Necessidades de Casa</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="">Lavanderia</a></li>
                            <li><a href="">Eletrica</a></li>
                            <li><a href="">Dedetização</a></li>
                            <li><a href="">Carpintaria</a></li>
                            <li><a href="">Encanamento</a></li>
                            <li><a href="">Pintura</a></li>
                            <li><a href="">Móveis &amp; Empacotadoras</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Limpeza</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="">Limpeza de Caixa D'agua</a></li>
                            <li><a href="">Limpeza de piscina</a></li>
                            <li><a href="">Limpeza Estofados</a></li>
                            <li><a href="">Diáristas</a></li>
                        </ul>
                    </li>
                    <li> <a href="#">Serviços Especiais</a>
                        <ul class="drop-down one-column hover-fade">
                            <li><a href="">Contadores</a></li>
                            <li><a href="">Álugueis</a></li>
                            <li><a href="">Automação de Residencias</a></li>
                        </ul>
                    </li>
                    @if(Route::has('login'))
                        @auth
                            @if(Auth::user()->utype==='ADM')
                                <li class="login-form"> <a href="#" title="Register">Minha Conta (Admin)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                                        <li><a href="{{route('admin.service_categories')}}">Categorias</a></li>
                                        <li><a href="{{route('admin.all_services')}}">Serviços</a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a></li>
                                    </ul>
                                </li>
                            @elseif(Auth::user()->utype==='SVP')
                                <li class="login-form"> <a href="#" title="Register">Minha Conta (Prestador)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{route('sprovider.profile')}}">Perfil</a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a></li>
                                    </ul>
                                </li>
                            @else
                                <li class="login-form"> <a href="#" title="Register">Minha Conta (Cliente)</a>
                                    <ul class="drop-down one-column hover-fade">
                                        <li><a href="{{route('cliente.dashboard')}}">Dashboard</a></li>
                                        <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a></li>
                                    </ul>
                                </li>
                            @endif
                            <form id="logout-form" method="POST" action="{{route('logout')}}" style="display: none">
                                @csrf
                            </form>
                        @else
                            <li class="login-form"> <a href="{{route('register')}}" title="Register">Cadastrar-se</a> </li>
                            <li class="login-form"> <a href="{{route('login')}}" title="Login">Entrar</a></li>
                        @endif
                    @endif
                </ul>
            </nav>
        </header>
            {{$slot}}
        <footer id="footer" class="footer-v1">
            <div class="container">
                <div class="row visible-md visible-lg">
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>Prestação de Serviços</h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="">Manutenção</a></li>
                            <li><i class="fa fa-check"></i> <a href="">Limpeza</a></li>
                            <li><i class="fa fa-check"></i> <a href="">Alugueis</a></li>
                            <li><i class="fa fa-check"></i> <a href="">Automação</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>Serviços para todos</h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="">Instalação</a></li>
                            <li><i class="fa fa-check"></i> <a href="">Desinstalação</a></li>
                            <li><i class="fa fa-check"></i> <a href="">Reparos</a></li>
                            <li><i class="fa fa-check"></i> <a href="">Contadores</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>Serviços em sua região</h3>
                        <ul>
                            <li><i class="fa fa-check"></i> <a href="">Segurança</a></li>
                            <li><i class="fa fa-check"></i> <a href="">Profissionalismo</a></li>
                            <li><i class="fa fa-check"></i> <a href="">Bons preços</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-xs-6 col-sm-6">
                        <h3>Contato</h3>
                        <ul class="contact_footer">
                            <li class="location">
                                <i class="fa fa-map-marker"></i> <a href=""> Garanhuns, Pernambuco, Brasil</a>
                            </li>
                            <li>
                                <i class="fa fa-envelope"></i> <a
                                    href="">lta1@discente.ifpe.edu.br</a>
                            </li>
                            <li>
                                <i class="fa fa-headphones"></i> <a href="">+55-(87) 9 988627683</a>
                            </li>
                        </ul>
                        <h3 style="margin-top: 10px">Segue o pai</h3>
                        <ul class="social">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#"></a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#"></a></li>
                            <li class="github"><span><i class="fa fa-instagram"></i></span><a href="#"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-down">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="nav-footer">
                                <li><a href="">Sobre Nós</a> </li>
                                <li><a href="">Fale Conosco</a></li>
                                <li><a href="">FAQ</a></li>
                                <li><a href="">Termos de Uso</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <p class="text-xs-center crtext">&copy; 2022 Lucas Teixeira. Receba pai.</p>
                        </div>
                    </div>
                </div>                
            </div>            
        </footer>
    </div>
    <script type="text/javascript" src="{{ asset('assets/js/nav/jquery.sticky.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/totop/jquery.ui.totop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/accordion/accordion.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/maps/gmap3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/fancybox/jquery.fancybox.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/carousel/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/filters/jquery.isotope.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/twitter/jquery.tweet.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/flickr/jflickrfeed.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/theme-options/theme-options.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/theme-options/jquery.cookies.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap-slider.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dtb/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dtb/jquery.table2excel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/dtb/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/select2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/validation-rule.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap3-typeahead.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 5000,
                startwidth: 1170,
                startheight: 480,
                minHeight: 250,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview1"
            });
        });
    </script>
    @stack('scripts')
    @livewireScripts
</body>
</html>
