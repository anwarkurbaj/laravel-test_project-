<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form action="{{ route('countries.store') }}" method="POST">
        @csrf
        <label for="fname">اسم الدولة </label><br>
        <input type="text" id="fname" name="name" value="اضف هنا "><br>
        <label for="address">العنوان</label><br>
        <input type="text" id="address" name="address" value=""><br>

        @error('name')
        <p style="color: red;">{{$message}}</p>
        @enderror

        @error('address')
        <p style="color: red;">{{$message}}</p>
        @enderror

        <input type="submit" value="اضف">
    </form>


</body>

</html>
