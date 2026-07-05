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

    <h1 style="text-align: center">جدول الرحلات </h1>

    <br>

    <a href =" {{ route('creat_flight') }}" class="button">اضف رحلة </a>

    <table>
        <tr>
            <th style="text-align: center">الاسم</th>
            <th style="text-align: center">الموعد </th>
            <th colspan="2" style="text-align: center ">العملية  </th>


        </tr>
        @if (@isset($data) and !@empty($data))
            @foreach ($data as $info)
                <tr>
                    <td style="text-align: center">{{ $info->name }}</td>
                    <td style="text-align: center">{{ $info->created_at }}</td>
                    <td><a href="{{ route('edit_flight', $info->id) }}" class="button" style="padding: 10px">تعديل </a>


                    </td>

                    <td> <a href="{{ route('delet_flight', $info->id)}}" class="button" style="padding: 10px; background-color: red;"> حذف </a></td>
                </tr>
            @endforeach


        @endif
    </table>
    {{-- {{$data->links()}} --}}

</body>

</html>
