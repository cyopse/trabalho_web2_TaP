<div>
<div class="section-title-01">
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Perfil</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Perfil</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <section class="content-central">
        <div class="content_info">
            <div class="paddings-mini">
                <div class="container">
                    <div class="row portfolioContainer">
                        <div class="col-md-8 col-md-offset-2 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Perfil
                                        </div>
                                        <div class="col-md-6">
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            @if($sprovider->image)
                                                <img src="{{asset('images/sproviders')}}/{{$sprovider->image}}" width="100%">
                                            @else
                                                <img src="{{asset('images/sproviders/profiledummynaruto.jpg')}}" width="100%">
                                            @endif
                                        </div>
                                        <div class="col-md-8">
                                            <h3>Nome: {{Auth::user()->name}}</h3>
                                            <p>{{$sprovider->about}}</p>
                                            <p><b>Email: </b>{{Auth::user()->email}}</p>
                                            <p><b>Telefone: </b>{{Auth::user()->phone}}</p>
                                            <p><b>Cidade: </b>{{$sprovider->city}}</p>
                                            <p><b>Categoria do Serviço: </b>
                                                @if($sprovider->service_category_id)
                                                    {{$sprovider->category->name}}
                                                @endif
                                            </p>
                                            <p><b>Localização do Serviço: </b>{{$sprovider->service_locations}}</p>
                                            <a href="{{route('sprovider.edit_profile')}}" class="btn btn-info pull-right">Editar Perfil</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
