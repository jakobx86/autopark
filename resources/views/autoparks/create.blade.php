@extends('layout')
@section('content')
<h1>Создать Автопарк</h1>
    {!! Form::open(['route'=>'autoparks.store'])!!}
    {{ csrf_field() }}
        <div class="autopark-wraper">        
        <div class="autopark-label-block">
            <label for="autopark-name">Название</label>
            <label for="autopark-address">Адрес</label>
            <label for="autopark-cheadule">График работы</label>            
        </div>
        <div class="autopark-input_block">
            <input type="text" name="autopark-name">
            <input type="text" name="autopark-address">
            <input type="text" name="autopark-scheadule">
        </div>
        </div>
        <h1 class="big_title">Машины</h1>
        <hr>
        <div class="cars-wraper">
            <div class="cars-form" action="">
                <div class="buttons-block">
                    <div class="buttons-inner-block">
                        <input type="button" value="-" class="menus buttons">
                        <input type="button"value="+" class="plus buttons" >
                        <input type="submit" value="Сохранить" class="save-button buttons">
                    </div>                    
                </div>
                <div class="car-number">
                    <label for="carnumber">Номер машины</label>
                    <input type="text" name="carnumber[]" >                    
                </div>
                <div class="driver-name">
                    <label for="drivername">Имя водителя</label>
                    <input type="text" name="drivername[]">                    
                </div>
    </div>
        </div>
        {!! Form::close()!!}
@endsection('content')