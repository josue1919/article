@extends('layouts.admin')
@section('titulo')
Categorias
@stop
@section('contenido')
<div class="container__categories">

    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalGruop">
            <i class="fas fa-plus-circle"></i> Grupo
        </button>
        <br />
        <br />
        <table class="table shadow">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="contentParent">


            </tbody>
        </table>
    </div>




    <div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCategory">
            <i class="fas fa-plus-circle"></i> Categoria
        </button>
        <br />
        <br />
        <table class="table shadow">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Grupo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="contentCategory">


            </tbody>
        </table>
    </div>
    @section('modal')


    <!-- Modal -->
    <div class="modal fade" id="modalGruop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario grupo</h5>
                    <button type="button" id="closeGroup" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="card_style" id="groupForm">

                        <label for="nameCategory">
                            Nombre:
                        </label>
                        <input class="form-input" type="text" name="nameGroup" id="nameGroup" placeholder="Nuevo grupo" autofocus>

                        <label id="error" class="text__danger"></label>
                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-red" data-bs-dismiss="modal"><i class="fas fa-minus-circle"></i> cancelar</button>
                            <button type="submit" class="btn btn-green" id="addNewGroup"><i class="fas fa-save"></i> Guardar</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!--segundo modal de categorias-->
    <div class="modal fade" id="modalCategory" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario categorias</h5>
                    <button type="button" id="closeCategory" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="card_style" id="groupCategory">

                        <label for="nameCategory">
                            Nombre:
                        </label>
                        <input class="form-input" type="text" name="nameCategory" id="nameCategory" placeholder="Nueva categoria" autofocus>

                        <span id="errorNameCategory" class="text__danger"></span>
                        <br />
                        <label for="idcategory">Grupo:
                            <select name="parent_category_id" id="parent_category_id" class="form-input">
                                
                            </select>
                        </label>
                        <span id="errorGroupCategory" class="text__danger"></span>
                        <br />
                        <div class="modal-footer">
                            <button type="button" class="btn btn-red" data-bs-dismiss="modal"><i class="fas fa-minus-circle"></i> cancelar</button>
                            <button type="submit" class="btn btn-green" id="addNewCategory"><i class="fas fa-save"></i> Guardar</button>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    @stop

</div>



@section('script')
<!-- Axios -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="{{asset('/js/category.js')}}"></script>

@stop
@stop