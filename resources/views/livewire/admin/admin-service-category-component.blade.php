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
                <h1>Categorias dos Serviços</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Login</li>
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
                                            Todas as Categorias
                                        </div>
                                        <div class="col-md-6">
                                            <a href="{{route('admin.add_service_category')}}" class="btn btn-info pull-right">
                                                Adicionar Nova
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
                                            <th>Referencia</th>
                                            <th>Destaque</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($scategories as $scategory)
                                        <tr>
                                            <td>{{$scategory->id}}</td>
                                            <td><img src="{{asset('images/categories')}}/{{$scategory->image}}" width="60"></td>
                                            <td>{{$scategory->name}}</td>
                                            <td>{{$scategory->slug}}</td>
                                            <td>
                                                @if($scategory->featured)
                                                    Sim
                                                @else
                                                    Não
                                                @endif
                                            </td>
                                            <td>
                                            <a href="{{route('admin.services_by_category',['category_slug'=>$scategory->slug])}}" style="margin-right: 10px;"><i class="fa fa-list fa-2x text-info"></i></a>
                                                <a href="{{route('admin.edit_service_category',['category_id'=>$scategory->id])}}"><i class="fa fa-edit fa-2x text-info"></i></a>
                                                <a href="#" onclick="confirm('Tem certeza que deseja deletar a categoria?')  || event.stopImmediatePropagation()" wire:click.prevent="deleteServiceCategory({{$scategory->id}})" style="margin-left:10px;"><i class="fa fa-times fa-2x text-danger"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{$scategories->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
