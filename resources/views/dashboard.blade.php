<x-app-layout>
    <div class="container py-4">
        <div class="row">
            <div class="col-12">
                <div class="card shadow">
                    <div class="card-header bg-dark text-white">
                        <h5 class="mb-0">Panel de Usuario</h5>
                    </div>
                    <div class="card-body">
                        <p class="mb-0">
                            Bienvenido, <strong>{{ Auth::user()->name }}</strong>.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>