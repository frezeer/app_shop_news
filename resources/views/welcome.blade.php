@extends('layouts.app')
@section('title','Bienvenido a App Shop')
@section('body-class','landing-page')
@section('content')
<div class="header header-filter" style="background-image: url('https://images.unsplash.com/photo-1423655156442-ccc11daa4e99?crop=entropy&dpr=2&fit=crop&fm=jpg&h=750&ixjsv=2.1.0&ixlib=rb-0.3.5&q=50&w=1450');">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="title">Bienvenidos a App Shop.</h1>
                <h4>Realiza pedidos en linea y te contactaremos para realizar la entrega</h4>
                <br />
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-danger btn-raised btn-lg">
                    <i class="fa fa-play"></i> ¿Como es que funciona?
                </a>
            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">
        <div class="section text-center section-landing">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="title">¿Por que comprar con nosotros ?</h2>
                    <h5 class="description">Puedes revisar nuestra relacion completa de productos , comparar precios y realizar tus pedidos cuando estes seguro.</h5>
                </div>
            </div>

            <div class="features">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-primary">
                                <i class="material-icons">chat</i>
                            </div>
                            <h4 class="info-title">Atendemos tus dudas </h4>
                            <p>Atendemos cualquier consulta que tengas via chat. no estas sólo , si no que siempre estamos atentos a tus inquietudes</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title">Pago Seguro</h4>
                            <p>Todo Pedido que realices será confirmado atravez de una llamada.
                                Si no confias en los pagos en linea puedes pagar contra entrega el valor acordado</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="material-icons">fingerprint</i>
                            </div>
                            <h4 class="info-title">Informacion Privada</h4>
                            <p>
                                los pedidos que realices solo los conoceras tu atravez de tu panel de usuario. Nadie más tiene acceso a está información asi que es importante 
                                que recuerdes el correo electronico asi como tu contraseña
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section text-center">
            <h2 class="title">Productos Disponbles</h2>

            
            <div class="team">
                <div class="row">
                    @foreach($products as $product)
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="{{ $product->featured_image_url }}" alt="Thumbnail Image" class="img-raised img-circle">
                            <h4 class="title">{{ $product->name }}<br />
                                <small class="text-muted">{{ $product->category->name }}</small>
                            </h4>
                            <p class="description">{{ $product->description }}</p>
                            <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
                            <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
                        </div>
                    </div>
                    @endforeach


                    <!-- <div class="col-md-4">
                        <div class="team-player">
                            <img src="{{ asset('img/christian.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle">
                            <h4 class="title">Christian Louboutin<br />
                                <small class="text-muted">Designer</small>
                            </h4>
                            <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                            <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="team-player">
                            <img src="{{ asset('/img/kendall.jpg') }}" alt="Thumbnail Image" class="img-raised img-circle">
                            <h4 class="title">Kendall Jenner<br />
                                <small class="text-muted">Model</small>
                            </h4>
                            <p>You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
                            <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-google-plus"></i></a>
                            <a href="#pablo" class="btn btn-simple btn-just-icon"><i class="fa fa-youtube-play"></i></a>
                            <a href="#pablo" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-twitter"></i></a>
                        </div>
                    </div> -->

                </div>
            </div>


        </div>


        <div class="section landing-section">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center title">¿Aún no te has registrado?</h2>
                    <h4 class="text-center description">
                        Registrate usando tus datos basicos y podras realizar tus pedidos atravez de nuestro carrito de compras. si aún no te decides , de todas formas , con una cuenta de usuario podras hacer todas tus consultas sin compromiso.
                    </h4>
                    <form class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Nombre</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group label-floating">
                                    <label class="control-label">Correo Electronico</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                        </div>

                        <div class="form-group label-floating">
                            <label class="control-label">En Que Podemos Ayudarte</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>

                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center">
                                <button class="btn btn-primary btn-raised">
                                    Enviar Consulta
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

