<!doctype html>
<html>

<body>
    <main>
        <div>
            <h2>Contact Form Message</h2>
            <h3>Message Informations:</h3>
            <ul>
                <li><b>Name:</b> {{$nameByForm}}</li>
                <li><b>Email:</b> {{$emailByForm}}</li>
                <li><b>Subject:</b> {{$subjectByForm}}</li>
            </ul>
            <h3>Message Text:</h3>
            <div><i>{{$messageByForm}}</i></div>
        </div>
    </main>
</body>

</html>
