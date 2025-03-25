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

 h5{
    text-decoration: underline;
    text-align: center;
 }

 img {
    width: 100%;        
    height: 200px;      
    object-fit: cover;  
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}
 
</style>

<div class="container mt-5">
        <h1 class="text-center">ANIMALES DOMESTICOS</h1>
    </div>
<div class="container mt-5">

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <img src="https://www.muyinteresante.com/wp-content/uploads/sites/5/2024/06/04/665f0461a9ae0.jpeg" class="card-img-top" alt="Platillo 1">
                <div class="card-body">
                    <h5 class="card-title">Perro (Canis lupus familiaris)</h5>
                    <p class="card-text">
                    <strong>✅ Descripción:</strong> El perro es considerado el mejor amigo del hombre. Es un animal leal, inteligente y sociable, con una gran variedad de razas y tamaños.
                    <br><strong>✅ Alimentación:</strong> Omnívoro (equilibrado comercial, carne, verduras en moderación).
                    <br><strong>✅ Cuidados:</strong> Necesitan ejercicio diario, vacunas, desparasitación y alimentación equilibrada.
                    <br><strong>✅ Esperanza de vida:</strong> 10-15 años (varía según la raza).
                    <br><strong>✅ Dato Curioso:</strong> Los perros pueden reconocer hasta 250 palabras y gestos humanos.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://media.ambito.com/p/e31ec80599101794839617073dc319e7/adjuntos/239/imagenes/040/456/0040456806/gatos-portadajpg.jpg" class="card-img-top" alt="Platillo 2">
                <div class="card-body">
                    <h5 class="card-title">Gato (Felis catus)</h5>
                    <p class="card-text">
                    <strong>✅ Descripción:</strong> Los gatos son animales independientes, pero cariñosos con sus dueños. Son excelentes cazadores y tienen un gran sentido del equilibrio.
                    <br><strong>✅ Alimentación:</strong> Carnívoro (alimento seco/húmedo, carne cocida, pescado en moderación).
                    <br><strong>✅ Cuidados:</strong> Limpieza de su arenero, revisión veterinarias, vacunación y cepillado del pelaje.
                    <br><strong>✅ Esperanza de vida:</strong> 12-18 años (algunos gatos domésticos llegan a más de 20 años).
                    <br><strong>✅ Dato Curioso:</strong> Un gato puede girar sus orejas hasta 180 grados y tiene 32 músculos en cada oreja.
                    </p>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://www.muyinteresante.com/wp-content/uploads/sites/5/2022/10/12/6346cea17b2aa.jpeg" class="card-img-top" alt="Platillo 3">
                <div class="card-body">
                    <h5 class="card-title">Loro (Psittacidae)</h5>
                    <p class="card-text">
                    <strong>✅ Descripción:</strong> Los loros son aves inteligentes y sociables, conocidas por su capacidad de imitar sonidos y palabras humanas.
                    <br><strong>✅ Alimentación:</strong> Semillas, frutas, verduras y alimento especializado.
                    <br><strong>✅ Cuidados:</strong> Necesitan una jaula espaciosa, estimulación mental y atención frecuente.
                    <br><strong>✅ Esperanza de vida:</strong> 20-80 años (dependiendo de la especie).
                    <br><strong>✅ Dato Curioso:</strong> Algunos loros pueden aprender hasta 100 palabras y usarlas en contexto.

                </div>
            </div>
        </div>

    </div>
</div>

@endsection