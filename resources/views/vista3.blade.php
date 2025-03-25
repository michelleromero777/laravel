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
        <h1 class="text-center">ANIMALES SALVAJES</h1>
    </div>
<div class="container mt-5">

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/002_The_lion_king_Snyggve_in_the_Serengeti_National_Park_Photo_by_Giles_Laurent.jpg/1200px-002_The_lion_king_Snyggve_in_the_Serengeti_National_Park_Photo_by_Giles_Laurent.jpg" class="card-img-top" alt="Platillo 1">
                <div class="card-body">
                    <h5 class="card-title">León (Panthera leo)</h5>
                    <p class="card-text">
                    <strong>✅ Descripción:</strong> El león es conocido como el "rey de la selva". Es un felino grande y musculoso que vive en manadas. Los machos tienen una característica melena.
                    <br><strong>✅ Alimentación:</strong> Carnívoro (se alimenta de cebras, antílopes y otros animales).
                    <br><strong>✅ Hábitat:</strong> Sabana y praderas de África.
                    <br><strong>✅ Esperanza de vida:</strong> 10-14 años en libertad, hasta 20 en cautiverio.
                    <br><strong>✅ Dato Curioso:</strong> Los leones pueden dormir hasta 20 horas al día para conservar energía.
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSi6NxjsfcHu3Uv-igtvioWkqaabDAbp2cgyg&s" class="card-img-top" alt="Platillo 2">
                <div class="card-body">
                    <h5 class="card-title">Anaconda (Eunectes murinus)</h5>
                    <p class="card-text">
                    <strong>✅ Descripción:</strong>  La anaconda es una de las serpientes más grandes y pesadas del mundo. No es venenosa, sino que mata a sus presas por constricción.
                    <br><strong>✅ Alimentación:</strong> Carnívora (peces, aves, roedores, caimanes).
                    <br><strong>✅ Hábitat:</strong> Ríos y selvas tropicales de América del Sur.
                    <br><strong>✅ Esperanza de vida:</strong> 10-30 años.
                    <br><strong>✅ Dato Curioso:</strong> Puede permanecer sumergido en el agua hasta 10 minutos sin salir a la superficie.
                    </p>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRI2o4J_UF_vO6IPz3i5HD2xNBsv69ftSVo8w&s" class="card-img-top" alt="Platillo 3">
                <div class="card-body">
                    <h5 class="card-title">Águila Harpía (Harpia harpyja)</h5>
                    <p class="card-text">
                    <strong>✅ Descripción:</strong> Es una de las águilas más grandes y poderosas del mundo, con garras enormes que usa para cazar monos y perezosos.
                    <br><strong>✅ Alimentación:</strong> Carnívora (mamíferos arbóreos, aves y reptiles).
                    <br><strong>✅ Hábitat:</strong> Selvas tropicales de América Central y del Sur.
                    <br><strong>✅ Esperanza de vida:</strong> 25-35 años.
                    <br><strong>✅ Dato Curioso:</strong> Sus garras pueden ser más grandes que las de un oso pardo, permitiéndole levantar presas de hasta 7 kg.

                </div>
            </div>
        </div>

    </div>
</div>

@endsection