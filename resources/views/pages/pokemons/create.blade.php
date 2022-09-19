<div class="h-200"
    style="background-image:url(/img/backfround1.webp); background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;">

    @extends('layouts.index')

    @section('content')
        {{-- <div class="container my-5"> --}}
        <div class="container my-5">

                <form action="/createjoueur" method="post" enctype="multipart/form-data" >
                    @csrf

                    <div class="row  ">
                        <div class="pb-3">
                            <input class="form-control text-light" style="background: transparent;border:none;" type="text" name="nom" placeholder="Nom">
                        </div>
                        <div class="pb-3">
                            <input class="form-control text-light" style="background: transparent;border:none;"type="text" name="prenom" placeholder="Prenom">
                        </div>
                        <div class="pb-3">
                            <input class="form-control text-light" style="background: transparent;border:none;"type="text" name="age" placeholder="age">
                        </div>
                        <div class="pb-3">
                            <input class="form-control text-light" style="background: transparent;border:none;"type="text" name="role" placeholder="role">
                        </div>
                    </div>
                    <div class="pb-3">
                        <input class="form-control text-light" style="background: transparent;border:none;"type="text" name="telephone" placeholder="Telephone">
                    </div>
                    <div class="pb-3">
                        <input class="form-control text-light" style="background: transparent;border:none;"type="text" name="continent" placeholder="continent">
                    </div>
                    <div class="pb-3">
                        <input class="form-control text-light" style="background: transparent;border:none;"name="email" placeholder="email ">
                    </div>
                    <div class="pb-3">
                        <input class="form-control text-light" style="background: transparent;border:none;"name="genre" placeholder="genre   ">
                    </div>
                    <div class="pb-3">
                        <input class="form-control text-light" style="background: transparent;border:none;"name="pays" placeholder="pays de joueur   ">
                    </div>
                    <div class="pb-3">
                        {{-- <input class="form-control text-light" style="background: transparent;border:none;"type="text" class="btn btn-yellow" name='nomdeclub'   placeholder="nomdeclub   "> --}}
                        <select name="nomdeclub" id="">
                            <option placeholder="JetteVolly">JetteVolly</option>
                            <option placeholder="MolenVolly">MolenVolly</option>
                            <option placeholder="BruxellesVolly">BruxellesVolly</option>
                            <option placeholder="IxellesVolly">IxellesVolly</option>
                        </select>
                    </div>
                    <div class="pb-3">
                        <input class="form-control text-light" style="background: transparent;border:none;"type="text" class="btn btn-yellow" name='ville' placeholder="ville   ">
                    </div>
                    <div class="pb-3">
                        <input class="form-control text-light" style="background: transparent;border:none;"type="text" class="btn btn-yellow" name='pays'
                            placeholder="pays de jeux   ">
                    </div>
                    <div class="pb-3">
                        <input class="form-control text-light" style="background: transparent;border:none;"type="text" class="btn btn-yellow" name='maxdejoueurparrole'
                            placeholder="12   ">
                    </div>
                    <div class="pb-3">
                        <input class="form-control text-light" style="background: transparent;border:none;"type="file" class="btn btn-yellow" name='photo'
                            placeholder="photo   ">
                    </div>
                    <div class="pb-3">
                        <button type="submit" class="btn btn-light">Ajouter</button>
                    </div>

            </div>
            </form>

        </div>
    </div>
@endsection
