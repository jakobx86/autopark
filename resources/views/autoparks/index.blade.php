@extends('layout')
@section('content')
<a class="create-button buttons" href="{{route('autoparks.create')}}">Добавить автопарк</a>
       <table class="autoparks">
           <thead>
           <tr>
               <th>Название</th>
               <th>Адрес</th>
               <th>График работы</th>
               <th>Действия</th>
           </tr>
        </thead>
        <tbody>
           <tr>
               <td>Название</td>
               <td>Название</td>
               <td>Название</td>
               <td>
                   <a href="">Редактировать</a>
                   <a href="">Удалить</a> 
                   <a href="">Просмотр</a>                 
               </td>
           </tr>
        </tbody>
       </table>
@endsection('content')