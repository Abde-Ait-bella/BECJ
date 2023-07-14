@extends('layouts.app')
@section('content')
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link {{ Route::has('dashbord.index') ? 'active' : '' }}" id="nav-home-tab" data-bs-toggle="tab"
                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Gestion
                page d'accueil</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <div class="container mt-5">
                <div class="accordion" id="accordionPanelsStayOpenExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                aria-controls="panelsStayOpen-collapseOne">
                                Avis
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse "
                            aria-labelledby="panelsStayOpen-headingOne">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('avis.store') }}">
                                                        @csrf
                                                        <div>
                                                            @foreach ($avis as $av)
                                                                <div>
                                                                    <div class="card-header mb-3 rounded border-top">
                                                                        Commantaire
                                                                        {{ $av->id }}</div>

                                                                    <input type="hidden" name="id[]"
                                                                        value="{{ $av->id }}">
                                                                    <div class="row mb-3">
                                                                        <label for="titre"
                                                                            class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                        <div class="col-md-6">
                                                                            <input id="titre" type="text"
                                                                                class="form-control" name="titre[]" required
                                                                                value="{{ $av->titre }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="sous_titre"
                                                                            class="col-md-4 col-form-label text-md-end">Sous
                                                                            titre</label>

                                                                        <div class="col-md-6">
                                                                            <input id="sous_titre" type="text"
                                                                                class="form-control" name="sous_titre[]"
                                                                                required value="{{ $av->sous_titre }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="texte"
                                                                            class="col-md-4 col-form-label text-md-end">texte</label>


                                                                        <div class=" form-floating col-md-6">
                                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="texte[]">{{ $av->texte }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                    <button type="button"
                                                                        class="btn btn-outline-danger mb-3"
                                                                        onclick="this.parentElement.remove()">
                                                                        Suprimer
                                                                    </button>
                                                                </div>
                                                            @endforeach
                                                            <div class="card-header mb-3 rounded border-top">Ajouter
                                                                Commantaire
                                                            </div>

                                                            <div class="row mb-3">
                                                                <label for="titre"
                                                                    class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                <div class="col-md-6">
                                                                    <input id="titre" type="text"
                                                                        class="form-control" name="titre[]">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="sous_titre"
                                                                    class="col-md-4 col-form-label text-md-end">Sous
                                                                    titre</label>

                                                                <div class="col-md-6">
                                                                    <input id="sous_titre" type="text"
                                                                        class="form-control" name="sous_titre[]">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="texte"
                                                                    class="col-md-4 col-form-label text-md-end">texte</label>

                                                                <div class=" form-floating col-md-6">
                                                                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="texte[]"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-0">
                                                            <div class="col-md-6 offset-md-4">
                                                                <button type="submit" class="btn btn-outline-info">
                                                                    Modifier
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseTwo">
                                Apropos
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                            aria-labelledby="panelsStayOpen-headingTwo">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-header">Partie 1</div>
                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('apropos.store') }}"
                                                        enctype='multipart/form-data'>
                                                        @csrf
                                                        @foreach ($apropos as $pr)
                                                            <div>
                                                                <div>
                                                                    <div class="card-header mb-3 rounded border-0">
                                                                        Coordonnées
                                                                    </div>
                                                                    <div>
                                                                        <div class="row mb-3">
                                                                            <label for="telephone"
                                                                                class="col-md-4 col-form-label text-md-end">Téléphone</label>

                                                                            <div class="col-md-6">
                                                                                <input id="telephone" type="text"
                                                                                    class="form-control" name="telephone"
                                                                                    required value="{{ $pr->telephone }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="sous_titre"
                                                                                class="col-md-4 col-form-label text-md-end">Email</label>

                                                                            <div class="col-md-6">
                                                                                <input id="email" type="text"
                                                                                    class="form-control" name="email"
                                                                                    required value="{{ $pr->email }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-header mb-3 rounded border-0 ">
                                                                        Informations
                                                                        écrites</div>
                                                                    <div>
                                                                        <div class="row mb-3">
                                                                            <label for="titre"
                                                                                class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                            <div class="col-md-6">
                                                                                <input id="titre" type="text"
                                                                                    class="form-control" name="titre"
                                                                                    required value="{{ $pr->titre }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="sous_titre"
                                                                                class="col-md-4 col-form-label text-md-end">Sous
                                                                                titre</label>

                                                                            <div class="col-md-6">
                                                                                <input id="sous_titre" type="text"
                                                                                    class="form-control" name="sous_titre"
                                                                                    required
                                                                                    value="{{ $pr->sous_titre }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="texte"
                                                                                class="col-md-4 col-form-label text-md-end">Description</label>


                                                                            <div class=" form-floating col-md-6">
                                                                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description">{{ $pr->description }}</textarea>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="card-header mb-3 rounded border-0">Element
                                                                    </div>
                                                                    <div>
                                                                        <div class="row mb-3">
                                                                            <label for="titre"
                                                                                class="col-md-4 col-form-label text-md-end">Element
                                                                                1</label>

                                                                            <div class="col-md-6">
                                                                                <input id="element_1" type="text"
                                                                                    class="form-control" name="element_1"
                                                                                    required value="{{ $pr->element_1 }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="sous_titre"
                                                                                class="col-md-4 col-form-label text-md-end">Element
                                                                                2</label>

                                                                            <div class="col-md-6">
                                                                                <input id="element_2" type="text"
                                                                                    class="form-control" name="element_2"
                                                                                    required value="{{ $pr->element_2 }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="row mb-3">
                                                                            <label for="sous_titre"
                                                                                class="col-md-4 col-form-label text-md-end">Element
                                                                                3</label>

                                                                            <div class="col-md-6">
                                                                                <input id="element_3" type="text"
                                                                                    class="form-control" name="element_3"
                                                                                    required value="{{ $pr->element_3 }}">
                                                                            </div>
                                                                        </div>
                                                                        <div
                                                                            class="card-header mb-3 rounded border-top border-end border-start">
                                                                            Partie 2
                                                                        </div>
                                                                        <div>
                                                                            <div class="row mb-3">
                                                                                <label for="sous_titre"
                                                                                    class="col-md-4 col-form-label text-md-end">Annees
                                                                                    experience</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="element_3" type="text"
                                                                                        class="form-control"
                                                                                        name="annees_experience" required
                                                                                        value="{{ $pr->annees_experience }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mb-3">
                                                                                <label for="sous_titre"
                                                                                    class="col-md-4 col-form-label text-md-end">Image</label>

                                                                                <div class="col-md-6">
                                                                                    <input id="element_3" type="file"
                                                                                        class="form-control"
                                                                                        name="image" required
                                                                                        value="{{ $pr->image }}">
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="card-header mb-3 rounded border-0 ">
                                                                                Nombres 1
                                                                                <div class="row mb-3">
                                                                                    <label for="sous_titre"
                                                                                        class="col-md-4 col-form-label text-md-end">Chiffre</label>

                                                                                    <div class="col-md-6">
                                                                                        <input id="element_3"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            name="chiffre_1" required
                                                                                            value="{{ $pr->chiffre_1 }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-3">
                                                                                    <label for="sous_titre"
                                                                                        class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                                    <div class="col-md-6">
                                                                                        <input id="element_3"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            name="titre_1" required
                                                                                            value="{{ $pr->titre_1 }}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="card-header mb-3 rounded border-0 ">
                                                                                Nombres 2
                                                                                <div class="row mb-3">
                                                                                    <label for="sous_titre"
                                                                                        class="col-md-4 col-form-label text-md-end">Chiffre</label>

                                                                                    <div class="col-md-6">
                                                                                        <input id="element_3"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            name="chiffre_2" required
                                                                                            value="{{ $pr->chiffre_2 }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-3">
                                                                                    <label for="sous_titre"
                                                                                        class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                                    <div class="col-md-6">
                                                                                        <input id="element_3"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            name="titre_2" required
                                                                                            value="{{ $pr->titre_2 }}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="card-header mb-3 rounded border-0 ">
                                                                                Nombres 3
                                                                                <div class="row mb-3">
                                                                                    <label for="sous_titre"
                                                                                        class="col-md-4 col-form-label text-md-end">Chiffre</label>

                                                                                    <div class="col-md-6">
                                                                                        <input id="element_3"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            name="chiffre_3" required
                                                                                            value="{{ $pr->chiffre_3 }}">
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row mb-3">
                                                                                    <label for="sous_titre"
                                                                                        class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                                    <div class="col-md-6">
                                                                                        <input id="element_3"
                                                                                            type="text"
                                                                                            class="form-control"
                                                                                            name="titre_3" required
                                                                                            value="{{ $pr->titre_3 }}">
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                </div>
                                                <div class="row mb-0">
                                                    <div class="col-md-6 offset-md-4 mb-3">
                                                        <button type="submit" class="btn btn-outline-info">
                                                            Modifier
                                                        </button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                aria-controls="panelsStayOpen-collapseThree">
                                Services
                            </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="container">
                                    <div class="row justify-content-center">
                                        <div class="col-md-8">
                                            <div class="card">
                                                <div class="card-body">
                                                    <form method="POST" action="{{ route('services.store') }}">
                                                        @csrf
                                                        @foreach ($services as $Sr)
                                                            <div>
                                                                <div class="card-header mb-3 rounded border-top">
                                                                    Services
                                                                </div>
                                                                <input type="hidden" value="{{ $Sr->id }}"
                                                                    name="id[]">
                                                                {{-- <div class="row mb-3">

                                                                    <div class="col-md-6">
                                                                        <input id="icone" type="text"
                                                                            class="form-control" name="icone[]" required
                                                                            value="{{ $Sr->icone }}">
                                                                    </div>
                                                                </div> --}}
                                                                <div class="body-pop-up row mb-3">
                                                                    <label for="titre" class="col-md-4 col-form-label text-md-end">Icone</label>
                                                                        <div class="col-md-3">
                                                                            <input id="ICInput{{$Sr->id}}" type="text"
                                                                                class="form-control" name="icone[]" required disabled
                                                                                >
                                                                        </div>
                                                                        <div class="box col-md-3 pt-2">
                                                                            <a class="button" href="#popup1">Choisir
                                                                                icône</a>
                                                                        </div>
                                                                    <div id="popup1" class="overlay">
                                                                        <div class="popup">
                                                                            <h2></h2>
                                                                            <a class="close" href="#">&times;</a>
                                                                            <div class="content">
                                                                                <div class="pr-icons">
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('activity')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <polyline
                                                                                                        points="22 12 18 12 15 21 9 3 6 12 2 12">
                                                                                                    </polyline>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                id="HTMLL">activity</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('airplay',{{ $Sr->id}})">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <path
                                                                                                        d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1">
                                                                                                    </path>
                                                                                                    <polygon
                                                                                                        points="12 15 17 21 7 21 12 15">
                                                                                                    </polygon>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">airplay</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('alert-circle')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <circle cx="12"
                                                                                                        cy="12"
                                                                                                        r="10">
                                                                                                    </circle>
                                                                                                    <line x1="12"
                                                                                                        y1="8"
                                                                                                        x2="12"
                                                                                                        y2="12">
                                                                                                    </line>
                                                                                                    <line x1="12"
                                                                                                        y1="16"
                                                                                                        x2="12.01"
                                                                                                        y2="16">
                                                                                                    </line>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">alert-circle</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('alert-octagon')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <polygon
                                                                                                        points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2">
                                                                                                    </polygon>
                                                                                                    <line x1="12"
                                                                                                        y1="8"
                                                                                                        x2="12"
                                                                                                        y2="12">
                                                                                                    </line>
                                                                                                    <line x1="12"
                                                                                                        y1="16"
                                                                                                        x2="12.01"
                                                                                                        y2="16">
                                                                                                    </line>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">alert-octagon</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('alert-triangle')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <path
                                                                                                        d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                                                                                                    </path>
                                                                                                    <line x1="12"
                                                                                                        y1="9"
                                                                                                        x2="12"
                                                                                                        y2="13">
                                                                                                    </line>
                                                                                                    <line x1="12"
                                                                                                        y1="17"
                                                                                                        x2="12.01"
                                                                                                        y2="17">
                                                                                                    </line>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">alert-triangle</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('align-center')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <line x1="18"
                                                                                                        y1="10"
                                                                                                        x2="6"
                                                                                                        y2="10">
                                                                                                    </line>
                                                                                                    <line x1="21"
                                                                                                        y1="6"
                                                                                                        x2="3"
                                                                                                        y2="6">
                                                                                                    </line>
                                                                                                    <line x1="21"
                                                                                                        y1="14"
                                                                                                        x2="3"
                                                                                                        y2="14">
                                                                                                    </line>
                                                                                                    <line x1="18"
                                                                                                        y1="18"
                                                                                                        x2="6"
                                                                                                        y2="18">
                                                                                                    </line>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">align-center</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('align-justify')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <line x1="21"
                                                                                                        y1="10"
                                                                                                        x2="3"
                                                                                                        y2="10">
                                                                                                    </line>
                                                                                                    <line x1="21"
                                                                                                        y1="6"
                                                                                                        x2="3"
                                                                                                        y2="6">
                                                                                                    </line>
                                                                                                    <line x1="21"
                                                                                                        y1="14"
                                                                                                        x2="3"
                                                                                                        y2="14">
                                                                                                    </line>
                                                                                                    <line x1="21"
                                                                                                        y1="18"
                                                                                                        x2="3"
                                                                                                        y2="18">
                                                                                                    </line>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">align-justify</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('align-left')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <line x1="17"
                                                                                                        y1="10"
                                                                                                        x2="3"
                                                                                                        y2="10">
                                                                                                    </line>
                                                                                                    <line x1="21"
                                                                                                        y1="6"
                                                                                                        x2="3"
                                                                                                        y2="6">
                                                                                                    </line>
                                                                                                    <line x1="21"
                                                                                                        y1="14"
                                                                                                        x2="3"
                                                                                                        y2="14">
                                                                                                    </line>
                                                                                                    <line x1="17"
                                                                                                        y1="18"
                                                                                                        x2="3"
                                                                                                        y2="18">
                                                                                                    </line>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">align-left</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('anchor')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <circle cx="12"
                                                                                                        cy="5"
                                                                                                        r="3">
                                                                                                    </circle>
                                                                                                    <line x1="12"
                                                                                                        y1="22"
                                                                                                        x2="12"
                                                                                                        y2="8">
                                                                                                    </line>
                                                                                                    <path
                                                                                                        d="M5 12H2a10 10 0 0 0 20 0h-3">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">anchor</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('aperture')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <circle cx="12"
                                                                                                        cy="12"
                                                                                                        r="10">
                                                                                                    </circle>
                                                                                                    <line x1="14.31"
                                                                                                        y1="8"
                                                                                                        x2="20.05"
                                                                                                        y2="17.94">
                                                                                                    </line>
                                                                                                    <line x1="9.69"
                                                                                                        y1="8"
                                                                                                        x2="21.17"
                                                                                                        y2="8">
                                                                                                    </line>
                                                                                                    <line x1="7.38"
                                                                                                        y1="12"
                                                                                                        x2="13.12"
                                                                                                        y2="2.06">
                                                                                                    </line>
                                                                                                    <line x1="9.69"
                                                                                                        y1="16"
                                                                                                        x2="3.95"
                                                                                                        y2="6.06">
                                                                                                    </line>
                                                                                                    <line x1="14.31"
                                                                                                        y1="16"
                                                                                                        x2="2.83"
                                                                                                        y2="16">
                                                                                                    </line>
                                                                                                    <line x1="16.62"
                                                                                                        y1="12"
                                                                                                        x2="10.88"
                                                                                                        y2="21.94">
                                                                                                    </line>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">aperture</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('archive')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <polyline
                                                                                                        points="21 8 21 21 3 21 3 8">
                                                                                                    </polyline>
                                                                                                    <rect x="1"
                                                                                                        y="3"
                                                                                                        width="22"
                                                                                                        height="5">
                                                                                                    </rect>
                                                                                                    <line x1="10"
                                                                                                        y1="12"
                                                                                                        x2="14"
                                                                                                        y2="12">
                                                                                                    </line>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">archive</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('arrow-down-circle')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <circle cx="12"
                                                                                                        cy="12"
                                                                                                        r="10">
                                                                                                    </circle>
                                                                                                    <polyline
                                                                                                        points="8 12 12 16 16 12">
                                                                                                    </polyline>
                                                                                                    <line x1="12"
                                                                                                        y1="8"
                                                                                                        x2="12"
                                                                                                        y2="16">
                                                                                                    </line>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">arrow-down-circle</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('arrow-down-left')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <line x1="17"
                                                                                                        y1="7"
                                                                                                        x2="7"
                                                                                                        y2="17">
                                                                                                    </line>
                                                                                                    <polyline
                                                                                                        points="17 17 7 17 7 7">
                                                                                                    </polyline>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">arrow-down-left</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('arrow-down-right')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <line x1="7"
                                                                                                        y1="7"
                                                                                                        x2="17"
                                                                                                        y2="17">
                                                                                                    </line>
                                                                                                    <polyline
                                                                                                        points="17 7 17 17 7 17">
                                                                                                    </polyline>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">arrow-down-right</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('arrow-down')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <line x1="12"
                                                                                                        y1="5"
                                                                                                        x2="12"
                                                                                                        y2="19">
                                                                                                    </line>
                                                                                                    <polyline
                                                                                                        points="19 12 12 19 5 12">
                                                                                                    </polyline>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">arrow-down</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('arrow-left-circle')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <circle cx="12"
                                                                                                        cy="12"
                                                                                                        r="10">
                                                                                                    </circle>
                                                                                                    <polyline
                                                                                                        points="12 8 8 12 12 16">
                                                                                                    </polyline>
                                                                                                    <line x1="16"
                                                                                                        y1="12"
                                                                                                        x2="8"
                                                                                                        y2="12">
                                                                                                    </line>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">arrow-left-circle</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('arrow-left')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <line x1="19"
                                                                                                        y1="12"
                                                                                                        x2="5"
                                                                                                        y2="12">
                                                                                                    </line>
                                                                                                    <polyline
                                                                                                        points="12 19 5 12 12 5">
                                                                                                    </polyline>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">arrow-left</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('arrow-right-circle')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <circle cx="12"
                                                                                                        cy="12"
                                                                                                        r="10">
                                                                                                    </circle>
                                                                                                    <polyline
                                                                                                        points="12 16 16 12 12 8">
                                                                                                    </polyline>
                                                                                                    <line x1="8"
                                                                                                        y1="12"
                                                                                                        x2="16"
                                                                                                        y2="12">
                                                                                                    </line>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">arrow-right-circle</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('arrow-right')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <line x1="5"
                                                                                                        y1="12"
                                                                                                        x2="19"
                                                                                                        y2="12">
                                                                                                    </line>
                                                                                                    <polyline
                                                                                                        points="12 5 19 12 12 19">
                                                                                                    </polyline>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">arrow-right</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('arrow-up-circle')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <circle cx="12"
                                                                                                        cy="12"
                                                                                                        r="10">
                                                                                                    </circle>
                                                                                                    <polyline
                                                                                                        points="16 12 12 8 8 12">
                                                                                                    </polyline>
                                                                                                    <line x1="12"
                                                                                                        y1="16"
                                                                                                        x2="12"
                                                                                                        y2="8">
                                                                                                    </line>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">arrow-up-circle</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('arrow-up-left')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <line x1="17"
                                                                                                        y1="17"
                                                                                                        x2="7"
                                                                                                        y2="7">
                                                                                                    </line>
                                                                                                    <polyline
                                                                                                        points="7 17 7 7 17 7">
                                                                                                    </polyline>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">arrow-up-left</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="div-icons">
                                                                                        <div role="button" class="btn-icons" onclick="Value('arrow-up-right')">
                                                                                            <div class="icon">
                                                                                                <svg viewBox="0 0 24 24"
                                                                                                    width="32"
                                                                                                    height="32"
                                                                                                    stroke="currentColor"
                                                                                                    stroke-width="2"
                                                                                                    fill="none"
                                                                                                    stroke-linecap="round"
                                                                                                    stroke-linejoin="round"
                                                                                                    class="css-i6dzq1">
                                                                                                    <line x1="7"
                                                                                                        y1="17"
                                                                                                        x2="17"
                                                                                                        y2="7">
                                                                                                    </line>
                                                                                                    <polyline
                                                                                                        points="7 7 17 7 17 17">
                                                                                                    </polyline>
                                                                                                </svg>
                                                                                            </div>
                                                                                            <span
                                                                                                class="css-1sns0wc">arrow-up-right</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="titre"
                                                                        class="col-md-4 col-form-label text-md-end">titre</label>

                                                                    <div class="col-md-6">
                                                                        <input id="titre" type="text"
                                                                            class="form-control" name="titre[]" required
                                                                            value="{{ $Sr->titre }}">
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="row mb-3">
                                                                        <label for="description"
                                                                            class="col-md-4 col-form-label text-md-center">Description
                                                                            : </label>


                                                                        <div class="">
                                                                            <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description[]">{{ $Sr->description }}</textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <button type="button" class="btn btn-outline-danger mb-3"
                                                                    onclick="this.parentElement.remove()">
                                                                    Suprimer
                                                                </button>
                                                            </div>
                                                        @endforeach
                                                        <div>
                                                            <div>
                                                                <div class="card-header mb-3 rounded border-top">
                                                                    Services
                                                                </div>
                                                                <div>
                                                                    <div class="row mb-3">
                                                                        <label for="icone"
                                                                            class="col-md-4 col-form-label text-md-end">Icone</label>

                                                                        <div class="col-md-6">
                                                                            <input id="icone" type="text"
                                                                                class="form-control" name="icone[]"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="row mb-3">
                                                                        <label for="titre"
                                                                            class="col-md-4 col-form-label text-md-end">titre</label>

                                                                        <div class="col-md-6">
                                                                            <input id="titre" type="text"
                                                                                class="form-control" name="titre[]"
                                                                                value="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div class="row mb-3">
                                                                        <label for="description"
                                                                            class="col-md-4 col-form-label text-md-end">Description</label>


                                                                        <div class=" form-floating col-md-6">
                                                                            <textarea class="form-control" placeholder="Leave a comment here" id="description" name="description[]"></textarea>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                                <div class="row mb-0">
                                                    <div class="col-md-6 offset-md-4 mb-3">
                                                        <button type="submit" class="btn btn-outline-info">
                                                            Modifier
                                                        </button>
                                                    </div>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            @yield('dashbord-client')
        </div>
        <script type="text/javascript">
            // var text = document.getElementById('HTMLL').textContent;
            // console.log(text);
            // document.getElementById("ICInput").value = text;
            function Value(text, id) {
            alert(arguments[1]);
            document.getElementById("ICInput".arguments[1]).value = text;
        }
         </script>
    </div>
@endsection
