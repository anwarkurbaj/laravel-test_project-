<!DOCTYPE html>
<html>

<body>

    <h2>HTML Forms</h2>

    <form action="{{ route('countries.update', $data['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="fname">اسم الدولة </label><br>
        <input type="text" id="fname" name="name" value="{{ $data['name'] }}"><br>
        <label for="address">العنوان</label><br>
        <input type="text" id="address" name="address" value="{{ $data['address'] }}"><br>
        <input type="submit" value="تحديث">
    </form>

    <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>

</html>
