<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculate Table</title>
</head>

<body>
    <div class="container">
        <table>
            <thead>Table of {{ $result }}</thead>
            <tbody>
                @for ($i = 1; $i <= 10; $i++)
                    <tr>
                        <td>{{ $result }} * {{ $i }} = {{ $result * $i }}</td>
                    </tr>
                @endfor
            </tbody>
        </table>
        <tfoot>
            <p>&copy; Developed By Pramesh Dhakal</p>
        </tfoot>
    </div>
</body>

</html>
