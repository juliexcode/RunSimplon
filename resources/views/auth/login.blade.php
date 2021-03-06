 <style>
     body {
         background-color: #2B55CD;
     }

     .card-header {
         text-align: center;
         font-size: 48px;
     }

     #ins {
         margin-left: 200px;
         margin-top: 20px;
     }

     @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');

     #btncon {
         margin: 0;
         padding: 0;
         display: flex;
         height: 100vh;
         align-items: center;
         justify-content: center;
         background: #2B55CD;
     }

     #btncon {
         position: relative;
         display: inline-flex;
         width: 180px;
         height: 55px;
         margin: 0 15px;
         perspective: 1000px;
     }

     #btncon {
         font-size: 19px;
         letter-spacing: 1px;
         transform-style: preserve-3d;
         transform: translateZ(-25px);
         transition: transform .25s;
         font-family: 'Montserrat', sans-serif;
     }

     #btncon:before,
     #btncon:after {
         position: absolute;
         content: "Se connecter";
         height: 55px;
         width: 180px;
         display: flex;
         align-items: center;
         justify-content: center;
         /* border: 5px solid black; */
         box-sizing: border-box;
         border-radius: 5px;
         background: #2B55CD;
     }

     #btncon:before {
         color: #fff;
         background: #2B55CD;
         transform: rotateY(0deg) translateZ(25px);
     }

     #btncon:after {
         color: #000;
         transform: rotateX(90deg) translateZ(25px);
     }

     #btncon:hover {
         transform: translateZ(-25px) rotateX(-90deg);
     }
 </style>


 @extends('layouts.app')

 @section('content')
 <div style=" background-color: #2B55CD; padding-top:30px">
     <div class="container ">
         <div class="row justify-content-center ">
             <div class="col-md-8">
                 <div class="card rounded-3 border-2 border-primary">



                     <div>
                         <h3 style="font-family: 'Gluten', cursive; text-align:center; color:#2B55CD; margin-top:20px">Bienvenue !</h3>
                     </div>
                     <div style="width: 50%; height: 2px; margin-left:auto;margin-right:auto;margin-bottom:20; border: 2px solid #2B55CD;"></div>


                     <div class="card-body">
                         <form method="POST" action="{{ route('login') }}">
                             @csrf

                             <div class="row mb-3">
                                 <label for="email" class="col-md-4 col-form-label text-md-end">ADRESSE EMAIL:</label>



                                 <div class="col-md-6">
                                     <input id="email" type="email" class="form-control border-2 border-primary rounded mb-3" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                 </div>
                             </div>

                             <div class="row mb-3">

                                 <label for="password" class="col-md-4 col-form-label text-md-end">MOT DE PASSE</label>


                                 <div class="col-md-6">
                                     <input id="password" type="password" class="form-control border-2 border-primary rounded mb-3" name="password" required autocomplete="current-password">


                                 </div>
                             </div>



                             <div class="row mb-0">
                                 <div class="col-md-8 offset-md-4">
                                     <button id="btncon" type="submit" class="btn btn-primary ">

                                         Se connecter
                                     </button>

                                 </div>
                             </div>
                         </form>
                     </div>

                 </div>
             </div>
         </div>
         <div style="height: 50px;">

         </div>
     </div>
     @endsection