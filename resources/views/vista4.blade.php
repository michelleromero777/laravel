
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
        <h1 class="text-center">ANIMALES ACUATICOS</h1>
    </div>
<div class="container mt-5">

    <div class="row">

        <div class="col-md-4">
            <div class="card">
                <img src="https://cdn0.expertoanimal.com/es/razas/4/3/9/delfin-nariz-de-botella_934_0_orig.jpg" class="card-img-top" alt="Platillo 1">
                <div class="card-body">
                    <h5 class="card-title">Delfín Nariz de Botella (Tursiops truncatus)</h5>
                    <p class="card-text">
                    <strong>✅ Descripción:</strong> Es uno decomunican con sonidos yEs uno de los mamíferos marinos más inteligentes y sociables. Se comunican con sonidos y saltan fuera del agua con gran agilidad.
                    <br><strong>✅ Alimentación:</strong> Carnívoro (peces, calamares y crustáceos).
                    <br><strong>✅ Hábitat:</strong> Océanos y mares tropicales y templados de todo el mundo.
                    <br><strong>✅ Esperanza de vida:</strong> 20-50 años.
                    <br><strong>✅ Dato Curioso:</strong> Los delfines pueden reconocerse en un espejo y tienen un "silbido firma" que actúa como su nombre.
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://static.nationalgeographic.es/files/styles/image_3200/public/290.600x450.webp?w=1600&h=900" class="card-img-top" alt="Platillo 2">
                <div class="card-body">
                    <h5 class="card-title">Tiburón Blanco (Carcharodon carcharias)</h5>
                    <p class="card-text">
                    <strong>✅ Descripción:</strong> Es uno de los depredadores más grandes y temidos del océano. Tiene una excelente visión y un olfato altamente desarrollado.
                    <br><strong>✅ Alimentación:</strong>  Carnívoro (peces, focas, tortugas, cetáceos pequeños).
                    <br><strong>✅ Hábitat:</strong>  Océanos templados y fríos de todo el mundo.
                    <br><strong>✅ Esperanza de vida:</strong> 30-70 años
                    <br><strong>✅ Dato Curioso:</strong> Puede detectar una gota de sangre en el agua a varios kilómetros de distancia.
                    </p>

                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://c.files.bbci.co.uk/11F73/production/_120878537_4cfca0d7-2b27-474f-93b7-4c31269c5cdf.jpg" class="card-img-top" alt="Platillo 3">
                <div class="card-body">
                    <h5 class="card-title">Pulpo Común (Octopus vulgaris))</h5>
                    <p class="card-text">
                    <strong>✅ Descripción:</strong> Es un molusco con ocho tentáculos dotados de ventosas y una gran inteligencia. Puede camuflarse rápidamente y resolver problemas complejos.
                    <br><strong>✅ Alimentación:</strong> Carnívoro (peces, crustáceos y moluscos).
                    <br><strong>✅ Hábitat:</strong> Fondos marinos y arrecifes de coral en aguas templadas y tropicales.
                    <br><strong>✅ Esperanza de vida:</strong> 1-2 años.
                    <br><strong>✅ Dato Curioso:</strong> Tiene tres corazones y su sangre es de color azul debido a la hemocianina.

                </div>
            </div>
        </div>

    </div>
</div>
@endsection