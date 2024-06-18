<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage="user-management"></x-navbars.sidebar>
        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <x-navbars.navs.auth titlePage="Paiement"></x-navbars.navs.auth>
            <!-- End Navbar -->
                <div class="container-fluid px-2 px-md-4">
                <div class="page-header min-height-100 border-radius-xl mt-4">
                    <span class="mask  bg-gradient-primary  opacity-6"></span>
                </div>

                    <div class="card card-body mx-3 mx-md-4 mt-n6">
                        <div class="card card-plain h-100">
                            <div class="card-body p-3">
                            <div class="container mt-5">
                            <h2>Page de Paiement</h2>

                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('payment.store') }}" method="POST">
                                @csrf
                                
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label for="phone_number" class="form-label">Numéro de téléphone</label>
                                    <input type="text" class="form-control border border-2 p-2" id="phone_number" name="phone_number" placeholder="+228xxxxxxxx" required >
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="tarif" class="form-label">Choix du tarif</label>
                                    <select class="form-control border border-2 p-2" id="tarif" name="tarif" required>
                                        <option value="100">100F - 3H</option>
                                        <option value="200">200F - 24H</option>
                                        <option value="500">500F - 7J</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">Payer</button>
                            </form>
                        </div>

                            </div>
                        </div>

                        
        <script src="{{ asset('js/app.js') }}"></script>
        <x-footers.auth></x-footers.auth>
        </main>
    <x-plugins></x-plugins>

</x-layout>
