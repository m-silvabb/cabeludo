@extends ('layout.site')
@section('titulo','Home')
@section('conteudo')
<div class="container">
    <div class="col s12 m7">
        <h2 class="header">Alunos</h2>
        <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
            <p>Card que redireciona para os alunos</p>
            </div>
            <div class="card-action">
            <a href="{{ route('admin.alunos')}}">Clique aqui</a>
            </div>
        </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="col s12 m7">
        <h2 class="header">Cursos</h2>
        <div class="card horizontal">
        <div class="card-stacked">
            <div class="card-content">
            <p>Card que redireciona para os cursos</p>
            </div>
            <div class="card-action">
            <a href="{{ route('admin.cursos')}}">Clique aqui</a>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection