<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="user-management"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Tarifs"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3"><strong> Tarifs </strong></h6>
                            </div>
                        </div>
                        <div class="me-3 my-3 text-end">
                            <a class="btn bg-gradient-dark mb-0" href="{{ route('tarifs.create') }}"><i
                                    class="material-icons text-sm">add</i>&nbsp;&nbsp;Ajouter un nouveau tarif</a>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <div class="table-responsive p-0">
                            <h1>Liste des Tarifs</h1>
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">NOM</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PRIX</th>
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DUREE (en heure) </th>
                                            <th class="text-secondary opacity-7"></th>
                                        </tr>
                                    </thead>


                                <tbody>
                                    @foreach ($tarifs as $tarif)
                                    <tr>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <p class="mb-0 text-sm">{{ $tarif->id }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{ $tarif->name }}</h6>
                                            </div>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs text-secondary mb-0">{{ $tarif->price }}</p>
                                        </td>
                                        <td class="align-middle text-center text-sm">
                                            <p class="text-xs text-secondary mb-0">{{ $tarif->duration }}</p>
                                        </td>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
