@extends('layouts/main')

@section('container')

@endsection
<div class="container">
    <div class="row">
        <div class="col-12 mt-4">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="/">Início</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Nova Medida</li>
                </ol>
              </nav>
        </div>
        <div class="col-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h1>Cadastrar</h1>
                </div>
                <div class="card-body">
                    <div class="container px-3 my-3">
                        <form id="contactForm" data-sb-form-api-token="API_TOKEN">

                            {{-- Data da Medição --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="dataMed" type="date" placeholder="Data da medição" data-sb-validations="required" />
                                <label for="dataMed">Data da medição</label>
                                <div class="invalid-feedback" data-sb-feedback="dataMed:required">Data da medição é obrigatório.</div>
                            </div>

                            {{-- Peso  --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="pesoKg" type="text" placeholder="Peso(Kg)" data-sb-validations="required" />
                                <label for="pesoKg">Peso(Kg)</label>
                                <div class="invalid-feedback" data-sb-feedback="pesoKg:required">Peso(Kg) é obrigatório.</div>
                            </div>

                            {{-- Altura --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="alturaCm" type="text" placeholder="Altura(cm)" data-sb-validations="required" />
                                <label for="alturaCm">Altura(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="alturaCm:required">Altura(cm) é obrigatório</div>
                            </div>

                            {{-- Peitoral --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="peitoralCm" type="text" placeholder="Peitoral(cm)" data-sb-validations="required" />
                                <label for="peitoralCm">Peitoral(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="peitoralCm:required">Peitoral(cm) é obrigatório</div>
                            </div>

                            {{-- Braço Esquerdo --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="bracoEsquerdoCm" type="text" placeholder="Braço Esquerdo(cm)" data-sb-validations="required" />
                                <label for="bracoEsquerdoCm">Braço Esquerdo(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="bracoEsquerdoCm:required">Braço Esquerdo(cm) é obrigatório</div>
                            </div>

                            {{-- Braço Direito --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="bracoDireitoCm" type="text" placeholder="Braço Direito(cm)" data-sb-validations="required" />
                                <label for="bracoDireitoCm">Braço Direito(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="bracoDireitoCm:required">Braço Direito(cm) é obrigatório</div>
                            </div>

                            {{-- Abdomen --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="abdomenCm" type="text" placeholder="Abdômen(cm)" data-sb-validations="required" />
                                <label for="abdomenCm">Abdômen(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="abdomenCm:required">Abdômen(cm) é obrigatório</div>
                            </div>

                            {{-- Cintura --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="cinturaCm" type="text" placeholder="Cintura(cm)" data-sb-validations="required" />
                                <label for="cinturaCm">Cintura(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="cinturaCm:required">Cintura(cm) é obrigatório</div>
                            </div>

                            {{-- Quadril --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="quadrilCm" type="text" placeholder="Quadril(cm)" data-sb-validations="required" />
                                <label for="quadrilCm">Quadril(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="quadrilCm:required">Quadril(cm) é obrigatório</div>
                            </div>

                            {{-- Coxa Esquerda --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="coxaEsquerdaCm" type="text" placeholder="Coxa Esquerda(cm)" data-sb-validations="required" />
                                <label for="coxaEsquerdaCm">Coxa Esquerda(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="coxaEsquerdaCm:required">Coxa Esquerda(cm) é obrigatório</div>
                            </div>

                            {{-- Coxa Direita --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="coxaDireitaCm" type="text" placeholder="Coxa Direita(cm)" data-sb-validations="required" />
                                <label for="coxaDireitaCm">Coxa Direita(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="coxaDireitaCm:required">Coxa Direita(cm) é obrigatório</div>
                            </div>

                            {{-- Panturrilha Esquerda --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="panturrilhaEsquerdaCm" type="text" placeholder="Panturrilha Esquerda(cm)" data-sb-validations="required" />
                                <label for="panturrilhaEsquerdaCm">Panturrilha Esquerda(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="panturrilhaEsquerdaCm:required">Panturrilha Esquerda(cm) é obrigatório</div>
                            </div>

                            {{-- Panturrilha Direita --}}
                            <div class="form-floating mb-3">
                                <input class="form-control" id="panturrilhaDireitaCm" type="text" placeholder="Panturrilha Direita(cm)" data-sb-validations="required" />
                                <label for="panturrilhaDireitaCm">Panturrilha Direita(cm)</label>
                                <div class="invalid-feedback" data-sb-feedback="panturrilhaDireitaCm:required">Panturrilha Direita(cm) é obrigatório</div>
                            </div>

                            <div class="d-flex">
                                <button class="btn btn-primary btn-lg flex-fill me-1" id="submitButton" type="submit">Enviar</button>
                                <button class="btn btn-secondary btn-lg flex-fill ms-1" id="reset">Limpar</button> 
                            </div>
                        </form>
                    </div>

                </div>
            </div> <!--fim do  -->
        </div> <!--fim da coluna -->
    </div> <!--fim do row -->
</div> <!--fim do cotainer -->
