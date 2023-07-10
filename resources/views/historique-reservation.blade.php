@extends("layouts.master")

@section("contenu")
<br><br><br>
     
     <div id="" class="our-portfolio section">
      <div class="container-fluid">
        
        <div id="action" class="row">
          <div class="">
              <div class="col-md-13 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Toutes vos réservations</h4>
                    {{$id_reserv_id}}

                    <div class="table-responsive">
                      <table class="table">
                          <thead>
                            <tr>
                              <th> # </th>
                              <th> Titre du film </th>
                              <th> Horaire de projection</th>
                              <th> Places réservées</th>
                              <th> Date de réservation</th>
                              <th> Validation </th>
                            </tr>
                          </thead>
                          <tbody>
                      @if(isset($reservations))
                          @foreach($reservations as $reservation)
                                <tr>
                                  <td> {{ $reservation->id }} </td>
                                  <td> {{ $reservation->titre }} </td>
                                  <td> {{ $reservation->horaire }} </td>
                                  <td> {{ $reservation->nb_place_res }} </td>
                                  <td> {{ $reservation->created_at}} </td>
                                  @if($mdy <= $new_date_proo)
                                    
                                    <td class="tb_cent" >
                                      <a class="btn btn-primary " href="#" onclick="if(confirm('Voulez-vous vraiment annuler la réservation  ?')){document.getElementById('form-{{$reservation->id}}').submit() }">Annuler</a>
                                    </td>

                                  @elseif($mdy > $new_date_proo)
                                      <td>  Non confirmé</td>
                                      <td class="tb_cent" >
                                        <a class="btn btn-primary " href="#" style="cursor:not-allowed" disabled>Annuler</a>
                                      </td>
                                      
                                  @endif
                                  
                                  
                                </tr>
                                  <form id="form-{{$reservation->id}}" action="{{route('reservation-ann', ['reservation'=>$reservation->id])}}" method="post">
                                      @csrf
                                      <input type="hidden" name="_method" value="delete">
                                  </form>
                          @endforeach
                        
                        @endif

                              
                        </tbody>
                      </table>
                          
                    </div>
                  </div>
                </div>
              </div>
              
            </div>

        </div>
        
      </div>
    </div>

 @endsection
 