@extends('plantilla')

@section('contenido')

<style>
    .card {
    background-color: rgba(241, 251, 254, 0.8);
    border-radius: 8px;
    border: 2px white solid;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(5, 112, 252, 0.2);
    background-color: rgba(203, 241, 252, 0.8);
 }

 .bienvenida{
    font-size: 45px;
 }

 .des{
    font-size: 20px;
 }

 
</style>

<header class="bg-primary text-white text-center p-5">
    <h1 class="bienvenida">Bienvenido a Reino Animal</h1>
    <p class="des">¡Explora el increíble mundo de los animales! 🐾🌿</p>
</header>

<!-- Sección de categorías -->
<section class="container mt-4">
    <div class="row text-center">
        <div class="col-md-3">
            <a href="vista2">
                <div class="card">
                    <img src="https://www.barakaldotiendaveterinaria.es/blog/wp-content/uploads/2021/11/tipos-de-mascotas-tener-en-casa.jpg" class="card-img-top" alt="Animales Domésticos">
                    <div class="card-body">
                        <h5 class="card-title">Animales Domésticos</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="vista3">
                <div class="card">
                    <img src="https://definicion.de/wp-content/uploads/2012/10/puma-768x439.jpg" class="card-img-top" alt="Animales Salvajes">
                    <div class="card-body">
                        <h5 class="card-title">Animales Salvajes</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="vista4">
                <div class="card">
                    <img src="https://www.ejemplos.co/wp-content/uploads/2016/09/pez-nemo-vertebrados-min-e1507319712942.jpg" class="card-img-top" alt="Animales Acuáticos">
                    <div class="card-body">
                        <h5 class="card-title">Animales Acuáticos</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="vista5">
                <div class="card">
                    <img src="https://www.ejemplos.co/wp-content/uploads/2016/10/aguila-cazando-pez-min-e1507210824817.jpg" class="card-img-top" alt="Animales Aéreos">
                    <div class="card-body">
                        <h5 class="card-title">Animales Aéreos</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center p-3 mt-4">
    <p>&copy; 2024 Reino Animal | Todos los derechos reservados.</p>
</footer>

@endsection
