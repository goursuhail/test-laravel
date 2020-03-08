@if($errors->any())

    @foreach($errors->all() as $error)

    {{ $error }}

    @endforeach

    @endif





<form action="{{ route('contactstore') }}" method="post">

    {{ csrf_field() }}    <!-- cross site request forgery  -->
    <label for="Email">Email: </label>
    <input type="text" name="email">
    <input type="submit">

</form>