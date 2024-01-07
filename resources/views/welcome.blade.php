@extends('layouts.app')

@section('content')
    <div class="px-2 main-sec py-4 px-sm-4">
        <div class="row text-center">
            <div class="d-flex flex-column justify-content-center align-items-center">
                <span class="fs-5 text-muted fw-bold">2023/2024</span>
                <h1 class="large-text fw-bold col-12 col-md-8" style="line-height: 1.1">
                    {{ __('Inscription Licence Professionnelle') }}</h1>
                <p class="col-11 col-lg-8">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam nihil
                    commodi praesentium voluptate facilis molestiae qui sed architecto in doloremque.</p>
                <div class="row col-12 col-sm-7  flex-wrap">
                    <div class="col-sm-6 col-12 my-2">
                        <a class="btn col-12 btn-primary rounded-pill"
                            href="{{ route('register') }}">Inscrire</a>
                    </div>
                    <div class="col-sm-6 col-12 my-2">
                        <a class="btn col-12 btn-success rounded-pill"
                            href="{{ route('login') }}">Continue</a>
                    </div>
                </div>
            </div>
        </div>

        {{--  --}}
        <div class="d-flex justify-content-center align-items-center flex-wrap mt-5">
            <div class="card gradient-card col-12 col-sm-9 shadow-lg py-4 pb-5 px-3 px-sm-5 position-relative"
                style=" overflow: hidden">
                <div class="d-flex justify-content-between ">
                    <h4 class="fw-500">{{ __('ANNONCEMENT') }} <span style="font-size: .8em"><i class="fa  fa-info-circle"
                                aria-hidden="true"></i></span></h4>
                    <span class="text-muted ">{{ __('23, Juillet 2023') }}</span>
                </div>

                <p class="mt-2 ">l'Ecole Supérieure de Technologie lance un appel à candidature pour les
                    filières licences professionnelles suivantes: <br>
                    Génie Informatique : Ingénierie des systèmes d'information et réseaux <br>
                    Maintenance Industrielle : Mécatronique <br>
                    Techniques d'Analyses et Contrôle Qualité : Métrologie, Qualité, Sécurité et environnement <br>
                    Techniques de Management : Gestion Comptable et Financière
                </p>
                <h4 class="fw-500">CONDITIONS D'ADMISSION</h4>
                <p class="col-10 ">
                    L’accès à la licence professionnelle se fait directement au semestre 5 pour les titulaires d’un DUT ou
                    équivalent ayant les prérequis nécessaires. Pour plus d'informations, consulter les descriptifs
                    spécifiques
                    à chaque filière à partir des liens dans le tableau ci-dessus.
                    La présélection des candidats se fera sur la base de critères de mérite en plus d'un test écrit.
                </p>

                <h4 class="fw-500">CANDIDATURE</h4>
                <p>
                    <b class="text-muted">1ère étape:</b> pré-inscription en ligne, avant la date de fermeture de la
                    candidature. <br>
                    <b class="text-muted">2ème étape:</b> En cas de présélection, se presenter a l'ESTS muni des documents
                    suivants:
                    Fiche de renseignements imprimée à la fin de la validation de la pré-inscription en ligne, et signée par
                    le candidat.
                    Copies des diplômes et des relevés de notes.
                </p>

                <h5 class="text-danger fw-500">Important:</h5>
                <p>Les originaux des diplômes et des relevés de notes seront exigés à l'inscription définitive.
                    Pour les candidats étrangers ayant suivi leurs études et obtenu leur diplôme de DUT ou équivalent au
                    Maroc:
                    La pré-inscription en ligne avant la date limite mentionnée ci-dessous est obligatoire. Les dossiers
                    concernant ces candidats et qui parviendront à travers l'Agence Marocaine de Coopération Internationale
                    ne seront pas traités si cette pré-inscription n'est pas effectuée.

                </p>

            </div>
        </div>

    </div>
@endsection
