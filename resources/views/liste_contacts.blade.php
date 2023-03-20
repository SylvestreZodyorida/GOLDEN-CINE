
@extends("layouts.master")

@section("contenu")
<br><br><br><br><br><br>

<div class="container">
    <section class="pg_list_ctct">
        <div class="top">
            <h3>Résultat de la recherche
                    @if(session()->has("successDelete"))
                        <span class="msg_success">{{ session()->get('successDelete') }}</span>
                    @endif
            </h3>   
        </div>
        <table class="container table">
            <thead>
                <tr>
                    <th class="tb_cent" scope="col"># </th>
                    <th class="tb_cent"  scope="col">Nom </th>
                    <th class="tb_cent"  scope="col">Prénom </th>
                    <th  class="tb_cent" scope="col">Email </th>
                    <th  class="tb_cent" scope="col">Numero </th>
                </tr>
            </thead>
            <tbody>
                @if(isset($contacts))
                    @if(count($contacts)>0)
                        @foreach($contacts as $contact)
                        <tr>
                            <td  class="tb_cent" scope="row">{{ $loop->index + 1}} </td>
                            <td class="tb_cent" >{{ $contact->name }}</td>
                            <td class="tb_cent" >{{ $contact->surname }}</td>
                            <td class="tb_cent" >{{ $contact->email }}</td>
                            <td class="tb_cent" >{{ $contact->numero }}</td>
                            <td class="tb_cent" >
                                <a class="btn btn-warning btn-block " href="{{ route('contact.edit', ['contact'=>$contact->id]) }}">🖊</a>
                                <a class="btn btn-primary " href="#" onclick="if(confirm('Confirmer la suppression ?')){document.getElementById('form-{{$contact->id}}').submit() }"><i class="fas fa-trash"></i></a>
                            
                            </td>
                            <form id="form-{{$contact->id}}" action="{{route('contact.delete', ['contact'=>$contact->id])}}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="delete">
                            </form>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td class="tb_cent">Aucun contact  enrégistré ! 🤔</td>
                            <td class="tb_cent">Aucun contact  enrégistré ! 🤔</td>
                            <td class="tb_cent">Aucun contact  enrégistré ! 🤔</td>
                            <td class="tb_cent">Aucun contact  enrégistré ! 🤔</td>
                            <td class="tb_cent">Aucun contact  enrégistré ! 🤔</td> 
                        </tr>
                    @endif
                @endif
            </tbody>
        </table>
    </section>
</div>

