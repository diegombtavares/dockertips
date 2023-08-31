@extends('template.index')

@section('contents')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<!-- quality_area_start  -->
<div class="depertment_area">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-6">
                    <div class="section_title mb-55 text-center">
                        <h3>O que rodar no Docker?</h3>
                        <p>Você está ciente de que o Docker proporciona a capacidade de executar uma diversidade abrangente de elementos em ambientes isolados? Isso abrange uma gama de aplicações e serviços, oferecendo flexibilidade para hospedar desde aplicativos simples até sistemas complexos, tudo dentro de contêineres independentes.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="white-box">
                        <div class="single_quality">
                            <div class="icon">
                            </div>
                            <h3><strong>Banco de Dados</strong> <i class="fas fa-database"></i></h3>
                            <p>Através do Docker, é possível executar bancos de dados como MariaDB, MongoDB, MS-SQL, MySQL, PostgreSQL e Redis de maneira isolada, assegurando uniformidade entre ambientes de desenvolvimento e produção.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="white-box">
                        <div class="single_quality">
                            <div class="icon">
                            </div>
                            <h3><strong>Linguagens</strong> <i class="fas fa-code"></i></h3>
                            <p>O Docker viabiliza a execução de linguagens como Python, Java e Ruby em ambientes isolados. Isso garante consistência entre desenvolvimento e produção. Suporte a diversas linguagens é uma vantagem central do Docker.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="white-box">
                        <div class="single_quality">
                            <div class="icon">
                            </div>
                            <h3><strong>Plataformas</strong> <i class="fas fa-sitemap"></i></h3>
                            <p>É possível executar o Gitea, Nextcloud, Portainer, Prometheus e WordPress de maneira eficiente utilizando Docker, aproveitando a virtualização de contêineres para simplificar a instalação e o gerenciamento das plataformas.</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- quality_areaend  -->

@endsection