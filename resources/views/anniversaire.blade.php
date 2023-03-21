@extends("layouts.master")

@section("contenu")
<br><br><br><br><br><br>
<div class="container actualites">
    <div class="row">
        <div class="wrapper col-md-5 ">
            <header>
                <p class="current-date"></p>
                <div class="icons">
                <span id="prev" class="material-symbols-rounded">prec</span>
                <span id="next" class="material-symbols-rounded">suiv</span>
                </div>
            </header>
            <div class="calendar">
                <ul class="weeks">
                <li>D</li>
                <li>L</li>
                <li>M</li>
                <li>M</li>
                <li>J</li>
                <li>V</li>
                <li>S</li>
                </ul>
                <ul class="days"></ul>
            </div>
        </div>
        <div class="notification col-md-7 ">
                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Notifications 🔔 </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Contacts 📱</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Messages 📤</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class=" tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                        <div class="row content_parent container">
                            <div class=" col-lg-6 ">
                                    
                                <div class="today">
                                    Hier / Aujourd'hui
                                </div>
                                @if(count($contacts )>0)
                                    <div class="content_title">
                                        @foreach($contacts as $contact)
                                            @if($mdy ==  $contact->date_naiss)
                                                <p>
                                                    🔔 C'est l'aniversaire de <span>{{$contact->name}}</span> aujourd'hui 
                                                </p>
                                            @endif      
                                        @endforeach
                                    </div>
                                @else
                                    <div class="content_title">
                                        <p>
                                            Aucun de vos contact ne fête son aniversaire aujourd'hui 
                                        </p>
                                    </div> 
                                @endif
                            </div>    

                            <div class=" col-lg-6">
                                <div class="today">
                                    Demain
                                </div>
                                @if(count($contacts1 )>0)
                                    <div class="content_title">
                                        @foreach($contacts1 as $contact)
                                            @if($finalDate == $contact->date_naiss)
                                                <p>
                                                    🔔 C'est  l'aniversaire de <span>{{$contact->name}}</span>  demain
                                                </p>
                                            @endif
                                        @endforeach
                                        @if($finalDate != $contact->date_naiss)
                                            <p>
                                                🔔 Aucun de vos contact ne fêtera son aniversaire  demain
                                            </p>
                                        @endif
                                    </div>
                                @else
                                    <div class="content_title">
                                        <p>
                                            🔔 Vous n'avez enrégistré aucun contact  
                                        </p>
                                    </div> 
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade container" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                        @if(count($contacts1 )>0)
                            <div class="content_title">
                                @foreach($contacts1 as $contact)
                                    @if($mdy < $contact->date_naiss)
                                        <p>
                                            🔥 <span>{{$contact->name ." ". $contact->surname}}</span> fêtera son aniversaire  le   {{(new DateTime($contact->date_naiss))->format("d F Y")}}
                                        </p>
                                    @endif
                                @endforeach
                            </div>
                        @else
                            <div class="content_title">
                                <p>
                                    🔔 Vous n'avez enrégistré aucun contact  
                                </p>
                            </div> 
                        @endif
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                        3
                    </div>
                </div>

        </div>
    </div>
</div>
