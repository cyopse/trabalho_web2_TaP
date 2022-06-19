<div>
<style>
    nav svg{
        height: 20px;
    }
    nav .hidden{
        display: block !important;
    }
</style>
<div class="section-title-01">
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Todos os serviços</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Todos os serviços</li>
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
                        <div class="col-md-12 profile1">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Todos os Serviços
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('admin.add_service')}}" class="btn btn-info pull-right">
                                                Adicionar Novo
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                @if(Session::has('message'))
                                    <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                @endif
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Imagem</th>
                                            <th>Nome</th>
                                            <th>Preço</th>
                                            <th>Status</th>
                                            <th>Destaque</th>
                                            <th>Categoria</th>
                                            <th>Criado em</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($services as $service)
                                        <tr>
                                            <td>{{$service->id}}</td>
                                            <td><img src="{{asset('images/services/thumbnails')}}/{{$service->thumbnail}}" width="60"></td>
                                            <td>{{$service->name}}</td>
                                            <td>R$: {{$service->price}}</td>
                                            <td>
                                                @if($service->status)
                                                    Ativo
                                                @else
                                                    Inativo
                                                @endif
                                            </td>
                                            <td>
                                                @if($service->featured)
                                                    Sim
                                                @else
                                                    Não
                                                @endif
                                            </td>
                                            <td>{{$service->category->name}}</td>
                                            <td>{{$service->created_at}}</td>
                                            <td>
                                                <a href="{{route('admin.edit_service',['service_slug'=>$service->slug])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                                <a href="#" onclick="confirm('Tem certeza que deseja deletar o serviço?') || event.stopImmediatePropagation()" wire:click.prevent="deleteService({{$service->id}})" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$services->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
