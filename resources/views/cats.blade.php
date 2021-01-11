<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, {{$name}}</title>
  </head>
  <body>
    <div class="container mt-3">
        <div class="row">
        <h1>Category</h1>
        <div class="col-4">
            <form>
                <div class="form-group">
                <label>Name</label>
                <input type="text" name="name"  class="form-control" placeholder="" aria-describedby="helpId">
                <small id="helpId" class="text-muted">Help text</small>
                </div>

                <input type="submit" class="btn btn-primary" value="Add">
            </form>

        </div>
        <div class="col-8">
            @forelse ($categories as $k=> $cat)
            <!-- html -->
            <div class="card m-1">
                <img class="card-img-top" src="holder.js/100x180/" alt="">
                <div class="card-body">
                    <h4 class="card-title"> {{$k}} - {!!$cat !!}</h4>
                </div>
                {{-- balde
                    comments--}}
            </div>
            @empty
            no cats
            @endforelse


        </div>


    </div>
    <hr>
    <div>
        <?php if(5>10){
            ?>
        Test
            <?php
        }?>


        @if($name =="Doaa")
            Hello {{$name}}
        @else
            Bye
        @endif

        <hr>




    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  </body>
</html>
