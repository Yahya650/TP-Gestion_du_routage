<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="http://127.0.0.1:8000/test" method="get"> {{-- here you can add url or name request --}}
        {{-- <form action="{{ Route('test.index') }}" method="get"> --}} {{-- like this --}}

        <input type="hidden" name="_method" value="PUT"> {{-- you can use also blade by this key => @method('PUT') --}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- you can use also blade by this key => @csrf --}}
        @csrf {{-- here you can add token like csrf token not seported by form html --}}
        @method('PUT') {{-- here you can add method like PATCH or DELETE not seported by form html --}}

        <input type="submit" value="Submit">
    </form>
</body>

</html>
