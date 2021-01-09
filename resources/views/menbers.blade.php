<h1>these are all the the the menbers</h1>
@foreach ($contact_details as $contact)
<div>menber name:{{$contact->name}}</div>
<div>menber email:{{$contact->email}}</div>
<div>menber service:{{$contact->service}}</div>
<div>menber description:{{$contact->description}}</div>
<div>menber phone_number:{{$contact->phone_number}}</div>
<div><a href="/edit/{{$contact->id}}">Edit</a></div>
<form action="/contacts/{{$contact->id}}" method="post">
    @method('DELETE')
    @csrf
    <button type="submit">delete </button>


</form>


    
@endforeach
