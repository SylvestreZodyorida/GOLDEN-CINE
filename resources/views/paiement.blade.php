@extends("layouts.master")

@section("contenu")
<br><br><br>
     <div id="" class=" our-portfolio3 section">
      <div class="container">
        <div id="action" class="row">

           <center >
           <img class="fedapay" src="{{asset('img/fedapay.png')}}" alt="">
           <center>
              <h3 class="pay_btn">Procéder au paiement de {{ $finalMontant /100}} place(s)  avec FedaPay</h3>
           </center><br><br>

            <form class="pay" method="" action="{{route('ticket_page')}}" >
                <input type="hidden" name="field" value="test">
                <input type="hidden" name="id_user" value="{{ Auth::user()->id }}">
                <input type="hidden" name="id_film" value="{{ $reservation }}">
                <input type="hidden" name="montant" value="{{ $finalMontant}}">
                    <script
                    src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
                    data-public-key="pk_live_B9XLZp_7yWmp-0s6xSsZBWjv"
                    data-button-text="Payer {{$finalMontant}} FCFA"
                    data-button-class="button-class"
                    data-transaction-amount="{{$finalMontant}}"
                    data-customer-email="{{ Auth::user()->email }}"
                    data-customer-lastname="{{ Auth::user()->name }}"
                    data-customer-firstname="{{ Auth::user()->surname }}"
                    data-transaction-description="Paiement des places pour assister au cinéma - Titre du film : "
                    data-currency-iso="XOF">
                    </script>
              </form> <br><br>
              <center>
              <h6 class="">Sécurisé par FedaPay</h6>
           </center>

           </center>
            
            <!-- <button class="pay-btn"
              data-transaction-amount="{{$finalMontant}}"
              data-transaction-description="Paiement des places pour assister au cinéma - Titre du film : "
              data-customer-email="{{ Auth::user()->email }}"
              data-customer-firstname="{{ Auth::user()->surname }}"
              data-customer-lastname="{{ Auth::user()->name }}">Payer {{$finalMontant}} FCFA</button>
              <script type="text/javascript">
                  FedaPay.init('.pay-btn', { public_key: 'pk_live_1npQIV084oROUarD1kp0xcBA' });
              </script> -->
          


        </div>
        
      </div>
    </div>

 @endsection
 