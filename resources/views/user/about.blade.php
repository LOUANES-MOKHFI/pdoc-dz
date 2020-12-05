@extends('layouts.app')

@section('title')
    A propos
@endsection
@section('header')
<link rel="stylesheet" href="//cdn.materialdesignicons.com/3.7.95/css/materialdesignicons.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<style type="text/css">
  .body{
    background-color:#eee;
    margin-bottom: 0px;
}
.border-5, .border-w-5 {
    border-width: 5px !important;
}
.border-white {
    border: 1px solid transparent;
    border-color: #fff !important;
}
hr.hr-primary {
    border-top-color: #CC164D!important;
}
em {
    font-style: italic;
}
.font-weight-normal {
    font-weight: 400 !important;
}
.body1{
    margin-top:20px;
color: #6c7293;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #e7eaed;
    border-radius: 0;
}

.accordion .card {
    margin-bottom: .75rem;
    box-shadow: 0px 1px 15px 1px rgba(230, 234, 236, 0.35);
    border-radius: .25rem;
}
.accordion .card .card-header {
    background-color: transparent;
    border: none;
    padding: 2rem;
}
.grid-margin {
    margin-bottom: 0.625rem;
}
.accordion .card .card-header a[aria-expanded="true"]:before {
    content: "\F374";
}
.accordion .card .card-header a:before {
    font-family: "Material Design Icons";
    position: absolute;
    right: 7px;
    top: 0;
    font-size: 18px;
    display: block;
}
.accordion .card .card-header a[aria-expanded="false"]:before {
    content: "\F415";
}
.icone{
  width: 28px;
  height: 28px;
}
</style>

@endsection
@section('content')    
    <div class="custom-breadcrumns border-bottom" style="margin-top: 70px">
      <div class="container div">
        <a href="#">Accueil</a>
        <span class="mx-3 icon-keyboard_arrow_right"></span>
        <span class="current">A propos</span>
      </div>
    </div>
    <div class="body">
<div class="container py-7">
  <h2 class="text-uppercase text-letter-spacing-xs my-0 text-dark font-weight-bold">
    A Propos
  </h2>
  <hr class="hr-primary w-15 hr-xl ml-0 mb-5">
  <div class="row mb-5">
    <div class="col-md-5 order-md-2">
      <img src="/designe/images/pdoclogo.jpg" alt="Personal Trainer 1" class="img-fluid border-white border-w-5 w-50 w-md-80 w-lg-60 rounded-circle">
    </div>
    <div class="col-md-7 flex-valign text-md-left">
      <h3 class="text-uppercase text-letter-spacing-xs mt-0 mb-1 text-dark font-weight-bold">
        PDOC-DZ
      </h3>
      <h5 class="my-0 font-weight-normal">
        <em>PLATE-FORME DOCUMENTAIRE ALGERIENNE</em>
      </h5>
      <hr class="hr-primary w-70 ml-0 ml-md-auto mr-md-0 mb-3">
        <p align="justify">&thinsp;&thinsp;&thinsp; Souvent, les étudiants, les enseignants et les chercheurs se retrouvent embarrassés par l’énorme  flux d’informations de différents  sources et supports  de recherche scientifique dans la réalisation de leur travaux de recherché : Recherche de base, Mémoire de Licence ou de Master, Thèse de Doctorat, Article scientifique, Livre, Manuscrit……etc.<br>
        &thinsp;&thinsp;&thinsp; Donc, ils  sont dispersés dans la collecte des informations, ils puisent leurs informations et documents tantôt d’une autre bibliothèque, d’un réseau social, tantôt d’un site de recherche général ou d’une base de données gratuite.
        </p>
        <p align="justify">&thinsp;&thinsp;&thinsp; Malgré cette évidence, mais dans ce cas sa mission pourrait prendre beaucoup plus de temps. Et cela influe négativement sur la progression du processus de recherche et la valorisation de ses résultats au profit des individus et des communautés.
        &thinsp;&thinsp;&thinsp;A partir de là, notre établissement a conçu  une plate-forme documentaire numérique incluant un grand nombre de pages IST disponibles sur internet en accès libre.
        Dans un seul site incluant des livres électroniques , dépôt d’articles scientifiques, services électroniques à distance, services du partage d’informations entre étudiants et enseignants, orientation des chercheurs en matière de bibliographie nécessaire  à l’enseignement et leur accompagnement à travers la plate-forme d’enseignement à distance.</p>
    </div> 
  </div>
    <div class="row mb-5">
    <div class="col-md-5 text-md-left">
      <img src="designe/images/19122018-122305-13892.png" alt="missions" class="img-fluid border-white border-w-5 w-50 w-md-80 w-lg-60 rounded-circle">
    </div>
    <div class="col-md-7 flex-valign ">
      <h3 class="text-uppercase text-letter-spacing-xs mt-0 mb-1 text-dark font-weight-bold">
        MISSIONS
      </h3>
      <hr class="hr-primary w-70 ml-0 ml-md-auto mr-md-0 mb-3">
      <p align="justify"><img src="/designe/images/true.png" class="icone"> Fournir le maximum de sources d’informations dans une seule plate-forme</p>
      <p align="justify"><img src="/designe/images/true.png" class="icone"> Valoriser les informations scientifiques et techniques disponibles via les dépôts numériques en accès libre</p>
      <p align="justify"><img src="/designe/images/true.png" class="icone"> Fournir  une plate-forme numérique pour le dépôt et la partage de la production scientifique des différents établissements</p>
      <p align="justify"><img src="/designe/images/true.png" class="icone"> Mettre les informations scientifiques et techniques à la disposition des partenaires sociaux et économiques pour une éventuelle exploitation</p>
      <p align="justify"><img src="/designe/images/true.png" class="icone"> Accompagnement des bibliothèques et comités pédagogiques  via une plate-forme d’enseignement à distance et partager la bibliographie de chaque module</p>
    </div>
  </div>
</div>
</div>
<div class="body1">
<div class="container">
      <div class="text-center">
          <h3>SERVICES PDOC</h3>
      </div>
          <div class="row">
            <div class="col-12 col-md-6">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="faq-block card-body">
                      <div class="container-fluid py-2">
                      </div>
                      <div id="accordion-1" class="accordion">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                RESSOURCES DOCUMENTAIRES
                              </a>
                            </h5>
                          </div>
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion-1">
                            <div class="card-body">
                              <p class="mb-0" align="justify">Les différentes bases de données scientifiques et techniques, moteurs de recherche, outils de recherche, dictionnaires, encyclopédies et bibliographies…..etc. disponibles gratuitement sur Internet.</p><p>
                            </p></div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                RESSOURCES AO 

                              </a>
                            </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion-1">
                            <div class="card-body">
                              <p class="mb-0" align="justify">
                          Les différents dépôts numériques des établissements d’enseignement supérieur et autres qui inclue principalement sa production scientifique et sa mise à disposition gratuite.
                          <br>
                         &thinsp;&thinsp;&thinsp; On y trouve: les thèses de Doctorat, Mémoires de Licence et de Master, Articles et Communications scientifiques, Livres imprimés etc.</p><p>
                            </p></div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                BASES DE DD EN TEST
                              </a>
                            </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion-1">
                            <div class="card-body">
                              <p class="mb-0" align="justify">
Les différentes bases de données  payantes et disponibles en période de test  afin d’y accéder et exploiter  après avoir reçu l’autorisation de l’éditeur. Cette période diffère d’un éditeur à un autre: 01 mois,  02 mois ou 03 mois ju’squà 06 mois .<br>
&thinsp;&thinsp;&thinsp;L’objectif est de savoir le taux d’exploitation d’une base de données par la communauté des usagers à travers des données statistiques fournies par l’éditeur à des fins d’acquisition.</p><p>
                            </p></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12 grid-margin grid-margin-md-0">
                  <div class="card">
                    <div class="faq-block card-body">
                      <div class="container-fluid py-2">
                      </div>
                      <div id="accordion-4" class="accordion">
                        <div class="card">
                          <div class="card-header" id="headingOne-4">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" data-target="#collapseOne-4" aria-expanded="true" aria-controls="collapseOne-4">
                                LIVRES
                              </a>
                            </h5>
                          </div>
                          <div id="collapseOne-4" class="collapse show" aria-labelledby="headingOne-4" data-parent="#accordion-4">
                            <div class="card-body">
                              <p class="mb-0" align="justify">
Des livres électroniques de différentes spécialités répondant aux besoins de recherche et d’enseignement accessible gratuitement sur Internet. Notre rôle est de les collecter , les classer , et les arranger d’une manière scientifique pour en faciliter l’accès , valoriser les efforts des auteurs pour plus de visibilité et aussi vulgariser les différents livres  rédigés par les enseignants et les publier afin de constituer une base de données pour les auteurs algériens.</p><p>
                            </p></div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo-4">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" data-target="#collapseTwo-4" aria-expanded="false" aria-controls="collapseTwo-4">
                               PARTAGER MES DOCUMENTS
                              </a>
                            </h5>
                          </div>
                          <div id="collapseTwo-4" class="collapse" aria-labelledby="headingTwo-4" data-parent="#accordion-4">
                            <div class="card-body">
                              <p class="mb-0" align="justify">La participation  des  différents acteurs du domaine de recherche scientifique  en matière  produits de recherche : Thèses de Doctorat, Mémoires de Licence et de Master, Articles et Communications scientifiques, Livres imprimés, vidéos instructifs …….etc  via le dépôt dans l’espace conçu à cet effet. </p><p>
                            </p></div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree-4">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" data-target="#collapseThree-4" aria-expanded="false" aria-controls="collapseThree-4">
                                CATALOGUES DES BIBLIOTHEQUES
                              </a>
                            </h5>
                          </div>
                          <div id="collapseThree-4" class="collapse" aria-labelledby="headingThree-4" data-parent="#accordion-4">
                            <div class="card-body">
                              <p class="mb-0" align="justify">Les catalogues des bibliothèques pour la recherche bibliographique à distance: localiser le site des ressources, prêt entre bibliothèques, orientation des politiques d’acquisition des livres.</p><p>
                            </p></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> <!-- sub col -->
            <div class="col-12 col-md-6">
              <div class="row">
                <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="faq-block card-body">
                      <div class="container-fluid py-2">
                      </div>
                      <div id="accordion-3" class="accordion">
                        <div class="card">
                          <div class="card-header" id="headingOne-3">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" data-target="#collapseOne-3" aria-expanded="true" aria-controls="collapseOne-3">
                               BIBLIOGRAPHIE DES MODULES
                              </a>
                            </h5>
                          </div>
                          <div id="collapseOne-3" class="collapse show" aria-labelledby="headingOne-3" data-parent="#accordion-3">
                            <div class="card-body">
                              <p class="mb-0" align="justify">Les titres des ouvrages nécessaires à chaque module enseigné à l’université : l’enseignant rédige les titres de livres dont l’étudiant  a besoin, celui-ci  l’examine à distance et pourrait l’exploiter via  l’opération du prêt de la bibliothèque et comme outil d’orientation de l’opération d’acquisition.</p><p>
                            </p></div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo-3">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" data-target="#collapseTwo-3" aria-expanded="false" aria-controls="collapseTwo-3">
                               ESPACE E-LEARNING
                              </a>
                            </h5>
                          </div>
                          <div id="collapseTwo-3" class="collapse" aria-labelledby="headingTwo-3" data-parent="#accordion-3">
                            <div class="card-body">
                              <p class="mb-0" align="justify">L’enseignant y dépose ses cours TD et conférences. Mais la nouveauté ici  c’est la disponibilité des différents types d’examens précédents pour que l’étudiant puisse s’y adapter.</p><p>
                            </p></div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree-3">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" data-target="#collapseThree-3" aria-expanded="false" aria-controls="collapseThree-3">
                               DEMANDER UN LIVRE
                              </a>
                            </h5>
                          </div>
                          <div id="collapseThree-3" class="collapse" aria-labelledby="headingThree-3" data-parent="#accordion-3">
                            <div class="card-body">
                              <p class="mb-0" align="justify">Souvent, le chercheur se retrouve obliger d’acheter quelques ouvrages afin de finaliser sa recherché quel que soit sa forme.  Ce service  n’est pas gratuit : lorsque la demande est envoyée, la réponse lui sera rendue avec  un devis.
                              <br>
                              &thinsp;&thinsp;&thinsp;Rappelons que le livre pourrait être en format numérique ou imprimée.</p><p>
                            </p></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="faq-block card-body">
                      <div class="container-fluid py-2">
                      </div>
                      <div id="accordion-2" class="accordion">
                        <div class="card">
                          <div class="card-header" id="headingOne-2">
                            <h5 class="mb-0">
                              <a data-toggle="collapse" data-target="#collapseOne-2" aria-expanded="true" aria-controls="collapseOne-2">
                                DEMANDER UN ARTICLE
                              </a>
                            </h5>
                          </div>
                          <div id="collapseOne-2" class="collapse show" aria-labelledby="headingOne-2" data-parent="#accordion-2">
                            <div class="card-body">
                              <p class="mb-0" align="justify">
                            Dans la plus part des cas, le chercheur fait face au problème téléchargement de quelques articles scientifiques.<br>
                            &thinsp;&thinsp;&thinsp;En réponse à sa demande, nous mettons à la disposition du chercheur l’article scientifique. Ce service  n’est pas gratuit : lorsque la demande est envoyée, la réponse lui sera rendue avec  un devis.</p><p>
                            </p></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           </div><!-- parent row -->
        </div>
    </div>
@endsection
@section('footer')

@endsection