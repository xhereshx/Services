@extends('layouts.head')
@section('content')
<div class="mt-5 ml-5 mr-5">
    
    <h1 class="d-flex justify-content-center">Kontaktní Formulář</h1>
   
    
        <form name="form" method="POST" action="/Kontakt/result">
            @csrf
      
        <div >
            <div class="row">
    <div class="col"><b>Jméno:</b>
      <input type="text" class="form-control" name="name" placeholder="Křestní jméno" required>
    </div>
    <div class="col"><b>Příjmení:</b>
      <input type="text" class="form-control" placeholder="Příjmení" name="surname"  required>
    </div>
   
  </div>
   <div class="form-group">
    <label for="exampleFormControlTextarea1"><b>Poznámka:</b></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment" required  placeholder="Poznámka"></textarea>
  </div>
    
         
            
           
        </div>
        <br/>
        
        <div class="">
        <input type="submit" value="Odeslat" class="btn btn-primary"></div>
    </form></div>
@endsection
   


