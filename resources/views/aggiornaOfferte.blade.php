@extends('layouts.skel')

@section('content')
    <div class="container">
        <div class="ins-off ins-off-inputdialog">
            <h2>Aggiorna Offerte</h2>
            <br>
            <form class="form-insertFAQ" action={{url('/aggiornaOfferte/'.$dati['id'])}} method="POST">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="form-left">
                        <fieldset title="Aggiorna dati offerta">
                            <label for="nome">Aggiorna il nome:</label>
                            <input type="text" id="nome" name="nome" value="{{$dati['nome']}}" required>

                            <label for="oggetto">Aggiorna l'oggetto:</label>
                            <input type="text" id="oggetto" name="oggetto" value="{{$dati['oggetto']}}" required>

                            <label for="modalitaFruizione">Modalità di fruizione:</label>
                            <input type="text" id="modalitaFruizione" name="modalitaFruizione" value="{{$dati['modalitaFruizione']}}" required>
                        </fieldset>
                    </div>

                    <div class="form-right">
                        <fieldset title="Inserisci dati offerta">
                            <label for="luogoFruizione">Luogo di fruizione:</label>
                            <input type="text" id="luogoFruizione" name="luogoFruizione" value="{{$dati['luogoFruizione']}}" required>

                            <label for="dataOraScadenza">Data e ora di scadenza:</label>
                            <input type="date" id="dataOraScadenza" name="dataOraScadenza" value="{{$dati['dataOraScadenza']}}" required>

                            <fieldset title="Carica immagini in formato .png o .jpeg">
                                <label for="logo">Carica l'immagine dell'offerta:</label>
                                <input type="file" id="logo" name="logo"
                                       accept="image/png, image/jpeg" value="{{$dati['immagine']}}" required>
                            </fieldset>
                        </fieldset>
                    </div>
                </div>

                <button class="btn" type="submit">Aggiorna l'offerta</button>
            </form>
            <div class="panel-buttons">
                <a class="btn btn-back" href="{{ route('modificaOfferte') }}">Torna indietro</a>
            </div>
        </div>
    </div>
@endsection
