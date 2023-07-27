@extends('layouts.app')
@section('content')
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active btn-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button"
                role="tab" aria-controls="home" aria-selected="true">Avis</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link btn-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                role="tab" aria-controls="profile" aria-selected="false">Apropos</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link btn-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button"
                role="tab" aria-controls="contact" aria-selected="false">Services</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="accordion-body  pt-4">
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
                                                    <div class="card-header mb-3 rounded border-top mt-3 mb-4">
                                                        Commantaire
                                                        {{ $av->id }}</div>

                                                    <input type="hidden" name="id[]" value="{{ $av->id }}">
                                                    <button class="multiplication_sign" href=""
                                                        onclick="this.parentElement.remove()">&#215;</button>
                                                    <div class="row mb-3">
                                                        <label for="titre"
                                                            class="col-md-4 col-form-label text-md-end">Titre</label>

                                                        <div class="col-md-6">
                                                            <input id="titre" type="text" class="form-control"
                                                                name="titre[]" required value="{{ $av->titre }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="sous_titre"
                                                            class="col-md-4 col-form-label text-md-end">Sous
                                                            titre</label>

                                                        <div class="col-md-6">
                                                            <input id="sous_titre" type="text" class="form-control"
                                                                name="sous_titre[]" required value="{{ $av->sous_titre }}">
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="texte"
                                                            class="col-md-4 col-form-label text-md-end">texte</label>


                                                        <div class=" form-floating col-md-6">
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="texte[]">{{ $av->texte }}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                            <div class="card-header mb-3 rounded border-top mt-4 mb-4">Ajouter
                                                Commantaire
                                            </div>

                                            <div class="row mb-3">
                                                <label for="titre"
                                                    class="col-md-4 col-form-label text-md-end">Titre</label>

                                                <div class="col-md-6">
                                                    <input id="titre" type="text" class="form-control"
                                                        name="titre[]">
                                                </div>
                                            </div>
                                            <div class="row mb-3">
                                                <label for="sous_titre" class="col-md-4 col-form-label text-md-end">Sous
                                                    titre</label>

                                                <div class="col-md-6">
                                                    <input id="sous_titre" type="text" class="form-control"
                                                        name="sous_titre[]">
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
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="accordion-body mt-4">
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
                                                    <div class="card-header mb-3 rounded border-0 sous-title mt-3 mb-4">
                                                        Coordonnées
                                                    </div>
                                                    <div>
                                                        <div class="row mb-3 mt-3">
                                                            <label for="telephone"
                                                                class="col-md-4 col-form-label text-md-end">Téléphone</label>

                                                            <div class="col-md-6">
                                                                <input id="telephone" type="text" class="form-control"
                                                                    name="telephone" required
                                                                    value="{{ $pr->telephone }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="sous_titre"
                                                                class="col-md-4 col-form-label text-md-end">Email</label>

                                                            <div class="col-md-6">
                                                                <input id="email" type="text" class="form-control"
                                                                    name="email" required value="{{ $pr->email }}">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-header mb-3 rounded border-0 sous-title mt-4 mb-4">
                                                        Informations
                                                        écrites</div>
                                                    <div>
                                                        <div class="row mb-3">
                                                            <label for="titre"
                                                                class="col-md-4 col-form-label text-md-end">Titre</label>

                                                            <div class="col-md-6">
                                                                <input id="titre" type="text" class="form-control"
                                                                    name="titre" required value="{{ $pr->titre }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="sous_titre"
                                                                class="col-md-4 col-form-label text-md-end">Sous
                                                                titre</label>

                                                            <div class="col-md-6">
                                                                <input id="sous_titre" type="text"
                                                                    class="form-control" name="sous_titre" required
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
                                                    <div class="card-header mb-3 rounded border-0 sous-title mt-4">Element
                                                    </div>
                                                    <div>
                                                        <div class="row mb-3">
                                                            <label for="titre"
                                                                class="col-md-4 col-form-label text-md-end">Element
                                                                1</label>

                                                            <div class="col-md-6">
                                                                <input id="element_1" type="text" class="form-control"
                                                                    name="element_1" required
                                                                    value="{{ $pr->element_1 }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="sous_titre"
                                                                class="col-md-4 col-form-label text-md-end mb-4">Element
                                                                2</label>

                                                            <div class="col-md-6">
                                                                <input id="element_2" type="text" class="form-control"
                                                                    name="element_2" required
                                                                    value="{{ $pr->element_2 }}">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="sous_titre"
                                                                class="col-md-4 col-form-label text-md-end">Element
                                                                3</label>

                                                            <div class="col-md-6">
                                                                <input id="element_3" type="text" class="form-control"
                                                                    name="element_3" required
                                                                    value="{{ $pr->element_3 }}">
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
                                                                        class="form-control" name="annees_experience"
                                                                        required value="{{ $pr->annees_experience }}">
                                                                </div>
                                                            </div>
                                                            <div class="row mb-3">
                                                                <label for="sous_titre"
                                                                    class="col-md-4 col-form-label text-md-end">Image</label>

                                                                <div class="col-md-6">
                                                                    <input id="element_3" type="file"
                                                                        class="form-control" name="image" required
                                                                        value="{{ $pr->image }}">
                                                                </div>
                                                            </div>
                                                            <div class="card-header nomber mb-3 rounded border-0 ">
                                                                Nombres 1
                                                                <div class="row mb-3">
                                                                    <label for="sous_titre"
                                                                        class="col-md-4 col-form-label text-md-end">Chiffre</label>

                                                                    <div class="col-md-6">
                                                                        <input id="element_3" type="text"
                                                                            class="form-control" name="chiffre_1" required
                                                                            value="{{ $pr->chiffre_1 }}">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="sous_titre"
                                                                        class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                    <div class="col-md-6">
                                                                        <input id="element_3" type="text"
                                                                            class="form-control" name="titre_1" required
                                                                            value="{{ $pr->titre_1 }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-header nomber mb-3 rounded border-0 ">
                                                                Nombres 2
                                                                <div class="row mb-3">
                                                                    <label for="sous_titre"
                                                                        class="col-md-4 col-form-label text-md-end">Chiffre</label>

                                                                    <div class="col-md-6">
                                                                        <input id="element_3" type="text"
                                                                            class="form-control" name="chiffre_2" required
                                                                            value="{{ $pr->chiffre_2 }}">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="sous_titre"
                                                                        class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                    <div class="col-md-6">
                                                                        <input id="element_3" type="text"
                                                                            class="form-control" name="titre_2" required
                                                                            value="{{ $pr->titre_2 }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="card-header nomber mb-3 rounded border-0 ">
                                                                Nombres 3
                                                                <div class="row mb-3">
                                                                    <label for="sous_titre"
                                                                        class="col-md-4 col-form-label text-md-end">Chiffre</label>

                                                                    <div class="col-md-6">
                                                                        <input id="element_3" type="text"
                                                                            class="form-control" name="chiffre_3" required
                                                                            value="{{ $pr->chiffre_3 }}">
                                                                    </div>
                                                                </div>
                                                                <div class="row mb-3">
                                                                    <label for="sous_titre"
                                                                        class="col-md-4 col-form-label text-md-end">Titre</label>

                                                                    <div class="col-md-6">
                                                                        <input id="element_3" type="text"
                                                                            class="form-control" name="titre_3" required
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
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="accordion-body mt-4">
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
                                                <button class="multiplication_sign" href=""
                                                    onclick="this.parentElement.remove()">&#215;</button>
                                                <input type="hidden" value="{{ $Sr->id }}" name="id[]">
                                                <div class="body-pop-up row mb-3">
                                                    <label for="titre"
                                                        class="col-md-4 col-form-label text-md-end">Icone</label>
                                                    <div class="col-md-3">
                                                        <input type="text" class="form-control icon-input"
                                                            name="icone[]" required readonly>
                                                    </div>
                                                    <div class="box col-lg-4 col-sm-3 col-md-3 pt-2">
                                                        <a class="button" href="#popup1">Choisir
                                                            icône</a>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <label for="titre"
                                                        class="col-md-4 col-form-label text-md-end">titre</label>

                                                    <div class="col-md-6">
                                                        <input id="titre" type="text" class="form-control"
                                                            name="titre[]" required value="{{ $Sr->titre }}">
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
                                            </div>
                                        @endforeach
                                        <div>
                                            <div>
                                                <div class="card-header mb-3 rounded border-top">
                                                    Ajouter Service
                                                </div>
                                                <div>
                                                    <div class="body-pop-up row mb-3">
                                                        <label for="titre"
                                                            class="col-md-4 col-form-label text-md-end">Icone</label>
                                                        <div class="col-md-3">
                                                            <input type="text" class="form-control icon-input"
                                                                name="icone[]" required readonly>
                                                        </div>
                                                        <div class="box col-md-3 pt-2">
                                                            <a class="button" href="#popup1">Choisir
                                                                icône</a>
                                                        </div>
                                                    </div>
                                                    <div class="row mb-3">
                                                        <label for="titre"
                                                            class="col-md-4 col-form-label text-md-end">titre</label>

                                                        <div class="col-md-6">
                                                            <input id="titre" type="text" class="form-control"
                                                                name="titre[]" value="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="row mb-3">
                                                        <label for="description"
                                                            class="col-md-4 col-form-label text-md-end">Description</label>


                                                        <div class=" col-md-6">
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
    <div id="iconsContainer">
        @php
            $folderPath = public_path('DataSvg');
            $files = scandir($folderPath);
        @endphp

        <div id="popup1" class="overlay">
            <div class="popup">
                <div class="content">
                    <div class="pr-icons">
                        @foreach ($files as $file)
                            @if (pathinfo($file, PATHINFO_EXTENSION) === 'svg')
                                <div role="button" class="div-icons">
                                    <div class="btn-icons">
                                        <div class="icon">
                                            {{-- <img src="{{ asset('DataSvg/' . $file) }}" alt="Icon"> --}}
                                            <i data-feather="{{ pathinfo($file, PATHINFO_FILENAME) }}"></i>
                                        </div>
                                        <span class="css-1sns0wc">{{ pathinfo($file, PATHINFO_FILENAME) }}</span>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        feather.replace()
    </script>
    <script src="{{ asset('assets/js/dashbord.js') }}"></script>
@endsection
