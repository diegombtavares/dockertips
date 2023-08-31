@extends('template.index')

@section('contents')

    <!-- depertment_area_start  -->
    <div class="depertment_area">
        <div class="container">
            <div class="row custom_align align-items-end justify-content-between">
                <div class="col-lg-6">
                    <div class="section_title">
                        <h3>Sobre o projeto</h3>
                        <p><strong>"DockerTips" é um projeto que busca oferecer orientações concisas sobre a utilização efetiva do Docker, fornecendo insights e dicas úteis para capacitar desenvolvedores a explorar todo o potencial da containerização em suas aplicações.</strong></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="depart_ment_tab mb-30">
                        <ul class="nav" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                                    <h4>DockerTips</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
                                    <h4>Docker</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">
                                    <h4>Containers</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Astrology-tab" data-toggle="tab" href="#Astrology" role="tab" aria-controls="contact" aria-selected="false">
                                    <h4>Kubernetes</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Neuroanatomy-tab" data-toggle="tab" href="#Neuroanatomy" role="tab" aria-controls="contact" aria-selected="false">
                                    <h4>Linux</h4>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="Blood-tab" data-toggle="tab" href="#Blood" role="tab" aria-controls="contact" aria-selected="false">
                                    <h4>Terraform</h4>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="dept_main_info white-bg">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="img/department/1.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>O que é DockerTips?</h3>
                                    <p>O DockerTips é uma plataforma de documentação que oferece insights práticos sobre a dockerização de aplicativos. Explore guias concisos e claros sobre diversas aplicações relacionadas ao Docker, capacitando desenvolvedores e entusiastas a compreender e implementar com sucesso ambientes containerizados. Aprofunde-se nas melhores práticas e dicas essenciais para otimizar suas habilidades em implantações modernas.</p>
                                    <a href="/" class="boxed-btn">Saber mais</a>
                                </div>
                            </div>
                        </div>
                        <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="img/department/2.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>O que é Docker?</h3 >
                                    <p>Docker é uma plataforma para criar, distribuir e executar aplicativos em ambientes isolados chamados "containers", garantindo consistência e eficiência no desenvolvimento e implantação de software. Cada container inclui tudo que um aplicativo precisa para funcionar, simplificando a transferência entre diferentes sistemas. </p>
                                    <a href="https://www.hostinger.com.br/tutoriais/o-que-e-docker"  class="boxed-btn" target="_blank">Saber mais</a>
                                </div>
                            </div>
                        </div>
                        <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="dept_thumb">
                                <img src="img/department/3.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="dept_info">
                                <h3>O que é Container?</h3 >
                                <p>
Um contêiner Docker é uma unidade isolada que empacota um aplicativo e suas dependências, garantindo consistência e portabilidade. Ele compartilha o sistema operacional do host, porém permanece isolado de outros contêineres para segurança e eficiência no uso de recursos. Isso simplifica o desenvolvimento e implantação de aplicativos.</p>
                                <a href="https://esr.rnp.br/administracao-de-sistemas/containers-docker-como-utilizar/" class="boxed-btn" target="_blank">Saber mais</a>
                            </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="Astrology" role="tabpanel" aria-labelledby="Astrology-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="img/department/4.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>O que é Kubernetes?</h3 >
                                    <p>Kubernetes é uma plataforma de código aberto que gerencia aplicativos em contêineres, como o Docker, automatizando escalonamento e implantação. Ele otimiza clusters de servidores para alta disponibilidade e permite administração eficiente de contêineres, simplificando o processo de implementação de apps. </p>
                                    <a href="https://www.redhat.com/pt-br/topics/containers/what-is-kubernetes" class="boxed-btn" target="_blank">Saber mais</a>
                                </div>
                            </div>
                        </div>
                        <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="Neuroanatomy" role="tabpanel" aria-labelledby="Neuroanatomy-tab">
                        <!-- single_content  -->
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="dept_thumb">
                                    <img src="img/department/5.png" alt="">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="dept_info">
                                    <h3>O que é Linux?</h3>
                                    <p>Linux é um sistema operacional de código aberto construído em torno do kernel Linux. Conhecido por sua estabilidade e flexibilidade, é uma alternativa ao Windows, usado em servidores, PCs e dispositivos móveis. Suas várias distribuições, como Ubuntu e CentOS, oferecem opções personalizadas aos usuários.</p>
                                    <a href="https://4linux.com.br/o-que-e-linux/" class="boxed-btn" target="_blank">Saber mais</a>
                                </div>
                            </div>
                        </div>
                        <!-- single_content  -->
                    </div>
                    <div class="tab-pane fade" id="Blood" role="tabpanel" aria-labelledby="Blood-tab">
                    <!-- single_content  -->
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="dept_thumb">
                                <img src="img/department/6.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="dept_info">
                                <h3>O que é Terraform?</h3 >
                                <p>Terraform é uma ferramenta de infraestrutura como código que automatiza a criação e gerenciamento de recursos de infraestrutura. Desenvolvido pela HashiCorp, permite definir configurações em arquivos para implantação consistente em várias nuvens e provedores. Simplifica o gerenciamento de ambientes de TI de maneira ágil e controlada.</p>
                                <a href="https://www.gocache.com.br/dicas/o-que-e-terraform-e-quais-suas-aplicacoes/" class="boxed-btn" target="_blank">Saber mais</a>
                            </div>
                        </div>
                    </div>
                    <!-- single_content  -->
                    </div>
                  </div>
            </div>

        </div>
    </div>
    <!-- depertment_area_end  -->

@endsection