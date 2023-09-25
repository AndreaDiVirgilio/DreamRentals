<x-layout>
    <x-slot name="title"> Best Movie Blog </x-slot>
    <video class="video-bg " src="case.mp4" autoplay muted loop></video>
    <x-header/>

  <div class="container-fluid contenitore my-5">
    <div class="row ">
      <h2 class="text-center border-bottom pt-2">{{__('ui.ultimeAggiunte')}}</h2>
    </div>

    <div class="row my-5  justify-content-around ">

      @foreach($products as $product)

        <div class="col-12 col-md-6 col-lg-3 pb-5 ">

        <x-card :Product='$product'></x-card>

        </div>

      @endforeach

    </div>

  </div>



  <section class="sezione-abbellimento">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 style="font-weight: bold;">Benvenuti nel Nostro Mondo</h2>
               <p>Posizione Geografica: La posizione geografica di una regione può avere un impatto significativo sul mercato immobiliare. Le regioni costiere, per esempio, possono avere una domanda elevata per le proprietà vicine al mare, mentre le regioni montuose potrebbero essere attraenti per chi cerca una casa in una zona tranquilla e panoramica.
<br>
              Prezzo delle Proprietà: Le regioni possono differire notevolmente per quanto riguarda i prezzi delle proprietà immobiliari. Le regioni urbane o le metropoli tendono ad avere prezzi più elevati rispetto alle regioni rurali o meno popolate. Questo può essere determinato dalla domanda e dall'offerta locali, dalla disponibilità di servizi e dalle opportunità di lavoro.

</p>
            </div>
            <div class="col-md-6">
                <img class="fade-inImg watch palazzo" src="https://cdn.discordapp.com/attachments/1120659852709085269/1155858106245451786/fomstock-4ojhpgKpS68-unsplash.jpg" alt="">
            </div>
        </div>
    </div>
</section>









<!-- INIZIO GRID -->
<h3 class="text-center mt-5" style="font-weight: bold; font-size:35px;">Scopri la tua casa da sogno</h3>
<header style="position: relative; z-index:99;" class='contenitoreM my-5'>
    <div class="galleria">
      <figure class="galleria__elemento galleria__elemento--1">
      </figure>

      <figure class="galleria__elemento galleria__elemento--2">
      </figure>

      <figure class="galleria__elemento galleria__elemento--3">
      </figure>

      <figure class="galleria__elemento galleria__elemento--4">
      </figure>

      <figure class="galleria__elemento galleria__elemento--5">
      </figure>

      <figure class="galleria__elemento galleria__elemento--6">
      </figure>

    </div>

  </div>

  </header>


  <!-- FINE GRID -->






<!-- PRESENTAZIONE -->

<div class="panel1">
  <div class="container-Presentazione">
    <div class="row ">
      <div class="col-12">
        <p class="watch intro fade-in" >We Are</p>
        <h1 class="dream" style="color:orange" class="watch fade-in title-bg">Dream Rentals</h1>
        <p class="watch intro fade-in" >Luxury real estate site</p>

        <div class="h-text">
          <div class="h-animate">
            <span class="text first-text">We Are&nbsp;</span>
            <span class="text sec-text"></span>
          </div>
        </div>


        <img src="/casa.gif" alt="" class="gif-image fade-inImg watch">

      </div>
    </div>
  </div>
</div>









</x-layout>




