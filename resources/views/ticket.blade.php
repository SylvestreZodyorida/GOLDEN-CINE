@extends("layouts.master")

@section("contenu")
<br><br><br>
     
     <div id="" class="our-portfolio3 section ">
      <div class="container">
        <div id="action" class="row">
          <center>
            @if($transaction_status != 'pending')
            <button id="downloadBtn">Télécharger (.httml)</button><br>
            <span class="recomm">ou faites une capture du ticket en cliquant <a href="#" id="capture-link" onclick="captureScreenshot()">ici</a> pour conserver le ticket</span>

            <div id=ticket class="ticket" >

                <div id='tick' class="">
                    <img class="" src="{{ asset($img_film->image )}}">
                    <span>{{$img_film->titre}}</span><br><br>

                    <div class="row">
                        <div class="col-md-8 div">
                            {{Auth::user()->name}} 
                            {{Auth::user()->surname}}

                        </div>
                        <div class="col-md-4">
                            <span>
                            {{$montant / 100}} place(s) ! 
                            </span>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-12 div">
                        Le  {{$horaire->date_pro}} 
                        A  {{$horaire->heure_pro}}

                        </div>
                        
                    </div>

                    </div>
                </div>

            @else

            <h3 class="info_tick">Vous n'avez pas effetué de paiment ! </h3>
            <a href="{{route('after')}}">Retour à la page de sélection de film </a>
            @endif
          </center>

        </div>
        
      </div>
    </div>

    <script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>


    <script>
        function captureScreenshot() {
            var element = document.getElementById('tick'); // Remplacez 'elementId' par l'ID de l'élément à capturer

            html2canvas(element).then(function(canvas) {
                // Convertit le canvas en une image
                var screenshot = canvas.toDataURL("image/png");

                // Crée un lien de téléchargement pour l'image
                var link = document.createElement('a');
                link.href = screenshot;
                link.download = 'capture.png';
                link.click();
            });
            }




        window.addEventListener('DOMContentLoaded', function() {
        var downloadBtn = document.getElementById('downloadBtn');
        downloadBtn.addEventListener('click', downloadTicket);
        });

        function downloadTicket() {
        var ticketContent = document.getElementById('ticket').outerHTML;
        var blob = new Blob([ticketContent], { type: 'text/html;charset=utf-8' });
        saveAs(blob, 'ticket.html');
        }







        window.addEventListener('DOMContentLoaded', generateQRCode);

        function generateQRCode() {
        var qr = new QRious({
            element: document.getElementById('qrcode'),
            value: generateRandomValue(),
            size: 200
        });
        }

        function generateRandomValue() {
        var text = '';
        var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

        for (var i = 0; i < 10; i++) {
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        }

        return text;
        }

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>


 @endsection
 