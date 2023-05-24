@extends('layouts.skel')

@section('content')
    <div class="wrapper">
        <div class="form-box form-box-inputdialog">
            <h2>Aggiorna Azienda</h2>
            <br>
            {{ Form::open(array('url' => '/aggiornaAziende/'.$dati['id'], 'class' => 'contact-form', 'enctype' => 'multipart/form-data', 'method' => 'PUT')) }}
            <div class="form-row">
                <div class="form-left">
                    {{ Form::label('nome', 'Nome', ['class' => 'label-input']) }}
                    {{ Form::text('nome', $dati['nome'], ['class' => 'input', 'id' => 'nome', 'required' => 'required']) }}
                    @if ($errors->first('nome'))
                        <ul class="errors">
                            @foreach ($errors->get('nome') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {{ Form::label('descrizione', 'Descrizione', ['class' => 'label-input']) }}
                    {{ Form::textarea('descrizione', $dati['descrizione'], ['class' => 'input', 'id' => 'descrizione', 'required' => 'required']) }}
                    @if ($errors->first('descrizione'))
                        <ul class="errors">
                            @foreach ($errors->get('descrizione') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {{ Form::label('ragioneSociale', 'Ragione Sociale', ['class' => 'label-input']) }}
                    {{ Form::text('ragioneSociale', $dati['ragioneSociale'], ['class' => 'input', 'id' => 'ragioneSociale', 'required' => 'required']) }}
                    @if ($errors->first('ragioneSociale'))
                        <ul class="errors">
                            @foreach ($errors->get('ragioneSociale') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>

                <div class="form-right">
                    {{ Form::label('tipologia', 'Tipologia', ['class' => 'label-input']) }}
                    {{ Form::text('tipologia', $dati['tipologia'], ['class' => 'input', 'id' => 'tipologia', 'required' => 'required']) }}
                    @if ($errors->first('tipologia'))
                        <ul class="errors">
                            @foreach ($errors->get('tipologia') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif

                    {{ Form::label('logo','Logo di questa azienda' ) }}
                    <p><em>Logo attualmete selezionato:</em></p>
                    <img src="data:image/png/jpg/webp/jpeg/bin;base64,{{ base64_encode($dati['logo']) }}" class="form-image-input-preview" alt="Logo Azienda">
                    {{ Form::file('logo') }}
                    @if ($errors->first('logo'))
                        <ul class="errors">
                            @foreach ($errors->get('logo') as $message)
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
            {{ Form::submit('Aggiorna questa Azienda', ['class' => 'btn'])}}
            {{ Form::close() }}

            <div class="panel-buttons">
                <a class="btn btn-back" href="{{ route('gestioneAziende') }}">Torna indietro</a>
            </div>
        </div>
    </div>
@endsection

