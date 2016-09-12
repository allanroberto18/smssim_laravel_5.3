@extends('admin.base.template')
@section('content')
    <!-- Modal -->
    <div class="modal fade" id="confirmSingleDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Atenção</h4>
                </div>
                <div class="modal-body">
                    <p>Deseja excluir este registro?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a href="#" id="confirm" class="btn btn-danger"><i class="icon-trash"></i> Excluir</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!-- Modal -->
    <div class="modal fade" id="confirmMultipleDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Atenção</h4>
                </div>
                <div class="modal-body">
                    <p>Deseja excluir este(s) registro(s)?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <a href="#" id="confirm-multiple" class="btn btn-danger"><i class="icon-trash"></i> Excluir</a>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    @yield('header')
                </div>
                <div class="box-body">
                    @include('admin.base.message')
                    @yield('list')
                </div>
                <div class="box-footer">
                    @yield('footer')
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $(function(){
            $('.delete').click(function(){
                $("#confirm").attr("href", $(this).attr("href"));
                $("#confirmSingleDelete").modal('toggle');
                return false;
            });
            $('#confirm-multiple').click(function () {
               $('#formfield').submit();
                return false;
            });
            $('#delete-selecionados').click(function(){
                $("#confirmMultipleDelete").modal('toggle');
                return false;
            });
            $("#all").click(function () {
                $(".item").prop('checked', $(this).prop('checked'));
            });
        });
    </script>
@endsection