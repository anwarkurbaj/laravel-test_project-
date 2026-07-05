<!DOCTYPE html>
<html>

<head>
    <style>
        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }

        .button {
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            float: right;
            background-color: #04AA6D
        }
    </style>
</head>

<body>

    <h1 style="text-align: center">جدول الدول </h1>

    <br>

    <a href =" {{ route('countries.create') }}" class="button">اضف دولة </a>

    <table>
        <tr>
            <th style="text-align: center">الاسم</th>
            <th style="text-align: center">الموعد </th>
            <th style="text-align: center">العنوان </th>
            <th colspan="2" style="text-align: center ">العملية </th>


        </tr>
        @if (@isset($data) and !@empty($data))
            @foreach ($data as $info)
                <tr>
                    <td style="text-align: center">{{ $info->name }}</td>
                    <td style="text-align: center">{{ $info->created_at }}</td>



                    <td style="text-align: center">{{ $info->address }}</td>

                    <td><a href="{{ route('countries.edit', $info->id) }}" class="button" style="padding: 10px">تعديل
                        </a>


                    </td>
                    <td>
                        <form action="{{ route('countries.destroy', $info->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button" style="padding: 10px; background-color: red;"
                                onclick="event.preventDefault(); if (confirm('هل انت متأكد من رغبتك في حذف هذه الدولة؟')) { this.closest('form').submit(); }">
                                حذف
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach


        @endif
    </table>
    {{-- {{$data->links()}} --}}

</body>

</html>
