<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    
    <div class="col-md-8 m-auto p-20">
    <h3>Contact Us</h3>
        <form action="{{route('contact')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
           
                <label for="name">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="email">
            
                <label for="name">Mesage</label>
                <textarea class="form-control" name="message" id="" cols="60" rows="10" placeholder="Your Message"></textarea>

                <button type="submit" class="btn btn-primary mb-2 form-control">Submit</button>
            </div>
        </form>
    </div>
    
    
</body>
</html>