<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GuestBooks</title>

    <!-- include libraries(jQuery, bootstrap) -->
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <script type="text/javascript" src="cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <h1>GuestBooks</h1>
            @foreach ($guestbooks as $guestbook)
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $guestbook->name }}</h3>
                        {!! $guestbook->message !!}
                    </div>
                </div>
            @endforeach
            <hr>
            <h1>Leave Your Message</h1>
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="" class="label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group mt-3">
                            <label for="" class="label">Message</label>
                            <textarea name="message" id="summernote" cols="30" rows="4" class="form-control"></textarea>
                        </div>
                        <div class="form-group mt-3">
                            <input type="submit" value="Send" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('#summernote').summernote({
            placeholder: 'Write message here',
            tabsize: 2,
            height: 120,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
</body>

</html>
