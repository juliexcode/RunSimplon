@extends('layouts.app')

@section('content')



<div class="container">
    <form>
        <div class="card-main text-center">
            <h1>fiche d'intervention</h1>
        </div>
        <div class="text-center">
            <h4>Etape 1/3</h4>
        </div>
        <div class="row justify-content-center">
            <div class="col d-flex justify-content-center">
                <div class="text-center">
                    <h4>Pneu Avant Gauche</h4>
                    <div>
                        <div>

                            <div id="premier">
                                <div>
                                    <div>
                                        <div class="d-flex justify-content-end me-5">
                                            <p>Avant intervention</p>
                                        </div>
                                        <div id="pression1" class="">
                                            <div class="ms-5">
                                                <label>Pression(Bar)</label>
                                            </div>
                                            <div>
                                                <input class="ms-5" type="number">
                                            </div>
                                            <div class="mb-3">
                                                <!-- <label for="formFileSm" class="form-label">Small file input example</label> -->
                                                <input class="form-control form-control-sm mt-4 me-4" id="formFileSm" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="deuxieme">
                                    <div>
                                        <div class="">
                                            <p class="d-flex justify-content-start ms-5">Apres intervention</p>
                                        </div>
                                        <div id="pression2">
                                            <div class="me-5">
                                                <label>Pression(Bar)</label>
                                            </div>
                                            <div>
                                                <input class="me-5" type="number">
                                            </div>
                                            <div class="mb-3">
                                                <!-- <label for="formFileSm" class="form-label">Small file input example</label> -->
                                                <input class="form-control form-control-sm mt-4 ms-4" id="formFileSm" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="col d-flex justify-content-center">
                <div class="text-center">
                    <h4>Pneu Avant Droit</h4>
                    <div>
                        <div>
                            <div id="troisieme">
                                <div class="d-flex justify-content-center">
                                    <p>Avant intervention</p>
                                </div>

                                <div id="pression3">
                                    <div>
                                        <label>Pression(Bar)</label>
                                    </div>
                                    <input type="number">
                                    <div class="mb-3">
                                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div id="quatrieme">
                            <div class="">
                                <p class=" ">Apres intervention</p>
                            </div>
                            <div id="pression4">
                                <label>Pression(Bar)</label>
                                <input type="number">
                                <div class="mb-3">
                                    <input class="form-control form-control-sm" id="formFileSm" type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>



<div class="text-center">
    <h4>Etape 2/3</h4>
</div>
<div class="row justify-content-center">
    <div class="col d-flex justify-content-center">
        <div class="text-center">
            <h4>Pneus Arrière Gauche</h4>

            <div id="premier">
                <div>
                    <div>
                        <div class="d-flex justify-content-end me-5">
                            <p>Avant intervention</p>
                        </div>
                        <div id="pression1" class="">
                            <div class="ms-5">
                                <label>Pression(Bar)</label>
                            </div>
                            <div>
                                <input class="ms-5" type="number">
                            </div>
                            <div class="mb-3">
                                <!-- <label for="formFileSm" class="form-label">Small file input example</label> -->
                                <input class="form-control form-control-sm mt-4" id="formFileSm" type="file">
                            </div>
                        </div>
                    </div>
                </div>

                <div id="deuxieme">
                    <div>
                        <div class="">
                            <p class="d-flex justify-content-start ms-5">Apres intervention</p>
                        </div>
                        <div id="pression2">
                            <div class="me-5">
                                <label>Pression(Bar)</label>
                            </div>
                            <div>
                                <input class="me-5" type="number">
                            </div>
                            <div class="mb-3">
                                <!-- <label for="formFileSm" class="form-label">Small file input example</label> -->
                                <input class="form-control form-control-sm mt-4" id="formFileSm" type="file">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="col d-flex justify-content-center">
        <div class="text-center">
            <h4>Pneus Arriére Droit</h4>
            <div>
                <div id="troisieme">
                    <div class="d-flex justify-content-center">
                        <p>Avant intervention</p>

                        <div id="pression1">
                            <label>Pression(Bar)</label>
                            <input type="number">
                            <div class="mb-3">
                                <input class="form-control form-control-sm" id="formFileSm" type="file">
                            </div>
                        </div>


                    </div>
                </div>
                <div id="quatrieme">
                    <div class="">
                        <p class=" ">Apres intervention</p>
                    </div>
                    <div id="pression2">
                        <label>Pression(Bar)</label>
                        <input type="number">
                        <div class="mb-3">
                            <input class="form-control form-control-sm" id="formFileSm" type="file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="text-center">
    <h4>Etape 3/3</h4>
</div>
<h4 class="text-center">Balais essuis-glace</h4>
<div class="row">
    <div style="border: 2px solid #2B55CD; border-radius: 10px; width: 30%;">
        <div class="col">
            <div>
                <p>Balai avant conducteur</p>
            </div>
            <div>
                <input type="radio" id="contactChoice1" name="contact" value="email" checked>
                <label for="contactChoice1">Bon état</label>
                <input type="radio" id="contactChoice1" name="contact" value="email" checked>
                <label for="contactChoice1">à surveiller</label>
                <input type="radio" id="contactChoice1" name="contact" value="email" checked>
                <label for="contactChoice1">à remplacer</label>

            </div>

        </div>
    </div>
    <div style="border: 2px solid #2B55CD; border-radius: 10px; width: 30%;">
        <div class="col">
            <div>
                <p>Balai avant passager</p>
            </div>
            <div>
                <input type="radio" id="contactChoice1" name="name" value="email" checked>
                <label for="contactChoice1">Bon état</label>
                <input type="radio" id="contactChoice1" name="name" value="email" checked>
                <label for="contactChoice1">à surveiller</label>
                <input type="radio" id="contactChoice1" name="name" value="email" checked>
                <label for="contactChoice1">à remplacer</label>

            </div>
        </div>
    </div>
    <div style="border: 2px solid #2B55CD; border-radius: 10px; width: 30%;">
        <div class="col">
            <div>
                <p>Balai arrière</p>
            </div>
            <div>
                <input type="radio" id="contactChoice1" name="email" value="email" checked>
                <label for="contactChoice1">Bon état</label>
                <input type="radio" id="contactChoice1" name="email" value="email" checked>
                <label for="contactChoice1">à surveiller</label>
                <input type="radio" id="contactChoice1" name="email" value="email" checked>
                <label for="contactChoice1">à remplacer</label>

            </div>
        </div>
    </div>
    <div class="container d-flex justify-content-center mt-5">
        <p>Commentaire</p>
    </div>
    <div>

        <textarea class="container d-flex justify-content-center mt-2">

</textarea>
    </div>

    <div class="mt-4 d-flex justify-content-center">
        <a style="width: 20%; border-radius: 10px" class="btn btn-primary" href="#" role="button">Valider</a>
    </div>


    </form>
</div>

@endsection

<style>
    #premier {
        display: inline-flex;
    }

    #deuxieme {
        display: inline-flex;
    }

    #troisieme {
        display: inline-flex;
    }

    #quatrieme {
        display: inline-flex;
    }
</style>