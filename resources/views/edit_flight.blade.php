
<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form action="{{route('updateflight',$data['id'])}}" method="POST">
        @csrf
        <label for="fname">اسم الرحلة </label><br>
        <input type="text" id="fname" name="name" value="{{$data['name']}}"><br>

        <input type="submit" value="تحديث">
    </form>

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>

</html>
