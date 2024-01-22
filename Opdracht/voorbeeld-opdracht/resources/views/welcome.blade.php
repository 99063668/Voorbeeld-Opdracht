<div>
    {{-- Form --}}
    <form action="store" method="post">
        @csrf
        <label for="textfield">Vul hier je woonplaats in:</label>
        <input type="text" id="textfield" name="residence" required>
        <br>
        <input type="submit" value="Submit">
    </form>

    {{-- Result --}}
    @if(isset($data) && count($data) > 0)
        <p>Bewoners van {{ $data[0]->name }}:</p>

        @foreach($data as $resident)
            @foreach($resident->residents as $user)
                <p>{{$user->firstname}} {{$user->lastname}}</p>
            @endforeach
        @endforeach
    @elseif(request()->isMethod('post'))
        <p>Er zijn geen bewoners uit {{ $residence }} gevonden.</p>
    @endif
</div>
