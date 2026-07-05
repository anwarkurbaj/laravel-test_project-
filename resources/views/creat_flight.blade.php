<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form action="{{route('store_flight')}}" method="POST">
        @csrf
        <label for="fname">اسم الرحلة </label><br>
        <input type="text" id="fname" name="name" value="اضف هنا "><br>
        @error('name')
        <p style="color: red;">{{$message}}</p>
        @enderror

        <input type="submit" value="اضف">
    </form>


</body>

</html>
