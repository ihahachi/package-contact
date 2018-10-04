<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
</head>

<body>
<h1>Contact Page </h1>
    <form action="{{ route('contact') }}" method="post">
    @csrf

    <div class="form-group">
        <label for="Name">Name:</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" class="form-control" name="email">
    </div>

    <div class="form-group">
        <label for="message">Message:</label>
        <textarea type="text" class="form-control" name="message"></textarea>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    </form>
</body>
</html>