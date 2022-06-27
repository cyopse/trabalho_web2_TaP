<div>
<div class="section-title-01">
        <div class="opacy_bg_02">
            <div class="container">
                <h1>Editar Perfil</h1>
                <div class="crumbs">
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li>/</li>
                        <li>Editar Perfil</li>
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
                                        <div class="col-md-12">
                                            @if(Session::has('message'))
                                                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                            @endif
                                            <form class="form-horizontal" wire:submit.prevent="updateProfile">
                                                <div class="form-group">
                                                    <label for="newimage" class="control-label col-md-3">Imagem de Perfil: </label>
                                                    <div class="col-md-9">
                                                        <input type="file" class="form-control-file" name="newimage" wire:model="newimage">
                                                        @if($newimage)
                                                            <img src="{{$newimage->temporaryUrl()}}" width="220">
                                                        @elseif($image)
                                                            <img src="{{asset('images/sproviders')}}/{{$image}}" width="220">
                                                        @else
                                                            <img src="{{asset('images/sproviders/profiledummynaruto.jpg')}}" width="220">
                                                        @endif
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="newimage" class="control-label col-md-3">Sobre: </label>
                                                    <div class="col-md-9">
                                                        <textarea class="form-control" name="about" wire:model="about"></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="city" class="control-label col-md-3">Cidade: </label>
                                                    <div class="col-md-9">
                                                    <input type="text" class="form-control" name="city" wire:model="city">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="service_category_id" class="control-label col-md-3">Categoria do Serviço: </label>
                                                    <div class="col-md-9">
                                                        <select class="form-control" name="service_category_id" wire:model="service_category_id">
                                                            @foreach($scategories as $scategory)
                                                                <option value="{{$scategory->id}}">{{$scategory->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="service_locations" class="control-label col-md-3">Localização dos Serviços: </label>
                                                    <div class="col-md-9">
                                                        <input type="text" class="form-control" name="service_locations" wire:model="service_locations">
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-success pull-right">Editar Perfil</button>
                                            </form>
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
