<html>

    <body>
        <p>
            Hello! <br /><br />
            You received a new message from: <strong>{{ $data['name'] }}</strong> - {{ $data['email'] }}
            <br />
            <br />
            Message: {{ $data['message'] }}
        </p>
    </body>

</html>
