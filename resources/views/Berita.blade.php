<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Tubes ABP</title>
    
    <style>
        .profile{
                border-radius: 50%;
                margin-right: 20px;
        }
        .tab button {
            background-color: inherit;
            float: center;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            border-right: 1px black;
        }


        .tab button:hover {
            background-color: rgb(190, 146, 0);
        }

        .navbar-custom {
            background-color: rgb(255, 115, 0);
        }
/* Create an active/current tablink class */
        .tab button.active {
            background-color: rgb(83, 50, 50);
            border: 1px black;
        }
        
    </style>
  </head>

  <body>
    <section>
        <section>
            <nav class="navbar navbar-light bg-warning">
                <div class="container-fluid">
                        <a class="navbar-brand"> <img src="{{asset('img/Go-Wis.png')}}" class="profile" alt= "width="50" height="50">Go-Wis</a>
                        <div class="tab">
                            <button class="tablinks" onclick="openTab(event, 'Beranda')">Beranda</button>
                            <button class="tablinks" onclick="openTab(event, 'Paket')">Paket Wisata</button>
                            <button class="tablinks" onclick="openTab(event, 'Sewa')">Sewa Kendaraan</button>
                            <button class="tablinks" onclick="openTab(event, 'Melihat')">Melihat Wisata</button>
                            <button class="tablinks" onclick="openTab(event, 'Berita')">Berita</button>
                        </div>
                    <form class="d-flex">
                        <button class="btn" type="submit" style="color: rgb(0, 0, 0);">Log Out</button>
                    </form>
                </div>
            </nav>
        </section>

    </section>

    <nav class="navbar navbar-custom">
        <div class="container " style="width: auto">
            <b style="color: rgb(0, 0, 0)" >Travel Blog</b>
        </div>
    </nav>

    <section>
        <h2 class="mt-5"></h2>
        <div class="card-group">
            <div class="mx-5" class="card" style="width: 15rem;">
                <img src={{asset('img/Go-Wis.png')}} class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut aliquid beatae optio aperiam nostrum alias blanditiis in sequi. Dolore natus quae cumque quis nihil ab iusto fugiat repudiandae dolores amet.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
    
            <div class="mx-5" class="card" style="width: 15rem;">
                <img src="aset/Go-Wis.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="mx-5" class="card" style="width: 15rem;">
                <img src="aset/Go-Wis.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="mx-5" class="card" style="width: 15rem;">
                <img src="aset/Go-Wis.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <div class="mx-5" class="card" style="width: 15rem;">
                <img src="aset/Go-Wis.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="mx-5" class="card" style="width: 15rem;">
                <img src="aset/Go-Wis.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="mx-5" class="card" style="width: 15rem;">
                <img src="aset/Go-Wis.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>

            <div class="mx-5" class="card" style="width: 15rem;">
                <img src="aset/Go-Wis.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        
    </section>

    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>