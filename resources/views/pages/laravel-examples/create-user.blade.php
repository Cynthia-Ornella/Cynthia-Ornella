<x-layout bodyClass="g-sidenav-show  bg-gray-200">

    <x-navbars.sidebar activePage="user-management"></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="User Management"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card my-4">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                <h6 class="text-white mx-3"><strong> Ajouter un nouvel utilisateur </strong></h6>
                            </div>
                        </div>
                        <div class="card-body px-0 pb-2">
                            <form action="{{ route('user.store') }}" method="POST">
                                @csrf
                                <div class="card-body p-3">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Nom</label>
                                        <input type="text" id= "name" name="name" class="form-control border border-2 p-2" required>
                                    </div>
                                    
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label">Email</label>
                                        <input type="email" class="form-control border border-2 p-2" id="email" name="email" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="role">Role</label>
                                        <input type="text" class="form-control border border-2 p-2" id="role" name="role">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="password">Mot de passe</label>
                                        <input type="password" class="form-control border border-2 p-2" id="password" name="password" required>
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="password_confirmation">Confirmer le mot de passe</label>
                                        <input type="password" class="form-control border border-2 p-2" id="password_confirmation" name="password_confirmation" required>
                                    </div>
                                    <button type="submit" class="btn bg-gradient-dark mb-0">Ajouter</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <x-footers.auth></x-footers.auth>
        </div>
    </main>
    <x-plugins></x-plugins>

</x-layout>
