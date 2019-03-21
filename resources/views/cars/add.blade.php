@extends('layouts.home_details')

@section('content')
        <div class="row">
            <div class="col-md-4">
            </div>   
            <div class="col-md-4">
              <div class="card">
                <div class="card-header">
                 Dodawanie samochodu
                </div>
                @if($errors->any())
                @foreach($errors->all() as $error)
                <div class="btn btn-danger" style="width: 100%; margin-top: 10px; margin-bottom: 10px;">{{ $error }}</div>
                @endforeach
            @endif
                <div class="card-body">
                    <form action="{{route('cars.save')}}" method="post">
                        <div class="form-group">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="text" name="marka" class="form-control" placeholder="Podaj markę samochodu">
                        </div>
                        <div class="form-group">
                        <input type="text" name="nr_rej" class="form-control" placeholder="Podaj nr rejestracyjny">
                        </div>
                        <div class="form-group">
                        <input type="text" name="model" class="form-control" placeholder="Model samochodu">
                        </div>
                        <div class="form-group">
                            <select name="rodzaj" class="form-control">
                                <option value="osobowy" class="default">Osobowy</option>
                                <option value="dostawczy">Dostawczy</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Zabezpieczenia</label>
                            <div>
                            <input type="checkbox" id="inlineCheckbox1" name="zabezpieczenia[]" value="imobilaiser"> imobilaiser
                            <input type="checkbox" id="inlineCheckbox2" name="zabezpieczenia[]" value="autoalarm"> autoalarm
                            <input type="checkbox" id="inlineCheckbox3" name="zabezpieczenia[]" value="blokada"> blokada
                            </div>
                        </div>    
                        <div class="form-group">
                        <input type="text" name="liczba_miejsc" class="form-control" placeholder="Liczba miejsc">
                        </div>
                        <div class="form-group">
                        <input type="text" name="nr_vin" class="form-control" placeholder="Podaj nr vin">
                        </div>
                        <div class="form-group">
                        <input type="text" name="pojemnosc" class="form-control" placeholder="Podaj pojemność">
                        </div>
                        <div class="form-group">
                        <input type="text" name="rok_prod" class="form-control" placeholder="Podaj rok produkcji">
                        </div>
                        <div class="form-group">
                        <input type="text" name="rok_zakupu" class="form-control" placeholder="Podaj rok zakupu">
                        </div>
                        <div class="form-group">
                        <label>Data pierwszej rejestracji</label>
                        <input type="date" name="data_pierw_rejestracji" class="form-control" placeholder="Podaj datę pierwszej rejestracji">
                        </div>
                        <div class="form-group">
                        <label>Data przeglądu technicznego</label>
                        <input type="date" name="data_przegladu_tech" class="form-control" placeholder="Podaj datę przeglądu technicznego">
                        </div>
                        <div class="form-group">
                        <label>Data przeglądu okresowego</label>
                        <input type="date" name="data_przegladu_okres" class="form-control" placeholder="Podaj datę przeglądu okresowego">
                        </div>
                        <div class="form-group">
                        <input type="text" name="norma_letnia" class="form-control" placeholder="Norma letnia ...">
                        </div>
                        <div class="form-group">
                        <input type="text" name="norma_zimowa" class="form-control" placeholder="Norma zimowa ...">
                        </div>
                        <div class="form-group">
                            <label>Miejsce użytkowania</label>
                            <select name="place_id">
                                @foreach($places as $place)
                                    {
                                        <option value="{{$place->id}}">{{$place->short}}</option>
                                    }
                                @endforeach
                            </select>
                        </div>
                         

                        <div class="form-group">
                        <button class="btn btn-primary">Zapisz</button>
                        {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
                        </div>
                    </form>
                </div>
              </div>
            </div>  
            <div class="col-md-4">

            </div> 
        </div>

@endsection    