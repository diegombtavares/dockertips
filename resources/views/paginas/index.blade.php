@extends('template.index')

@section('contents')

<!-- slider_area_start -->
<div class="slider_area">
        <div class="slider_active owl-carousel">
            <div class="single_slider  d-flex align-items-center slider_bg_1 overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="slider_text ">
                                <h3> Desenvolva, empacote, implante -<span>Dockerize!</h3>
                                <a href="https://docs.docker.com/" class="boxed-btn5" target="_blank">Documentação Oficial
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- welcome_clicnic_area_start -->
    <div class="welcome_clicnic_area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_thumb">
                        <div class="thumb_1">
                            <img src="img/about/1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="welcome_docmed_info">
                        <h3>Bem vindo ao
                            <span>DockerTips.</span></h3>
                        <p>Descubra o Docker com nossos guias fáceis. Aprenda a usar essa ferramenta poderosa para rodar apps isolados, facilitando desenvolvimento e implantação. Domine o Docker e turbine seus projetos!</p>
                        <ul>
                            <li><strong><i class="flaticon-verified"></i> Isolamento de Aplicações</strong></li>
                            <li><strong><i class="flaticon-verified"></i> Escalabilidade Elástica</strong></li>
                            <li><strong><i class="flaticon-verified"></i> Agilidade no Desenvolvimento e Implantação </strong></li>
                        </ul>
                        <a href="about.html" class="boxed-btn6">Saber Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- welcome_clicnic_area_end -->

@endsection