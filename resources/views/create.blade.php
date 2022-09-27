<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>My bucket list!</h1>
        <h2>Create bucket list item</h2>
        <form method="post" action="">

            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" class="form-control" >
            </div>

            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="form-group">
                <label for="">prio</label>
                <input type="number" name="prio" class="form-control">
            </div>

            <input type="submit" value="Save Item" class="btn btn-primary">

        </form>
    </div>

</body>
</html>
