<!-- footer -->
<!-- Fim do footer -->


<!-- Modal Bodies come here -->
<!-- modal fale conosco -->

<div class="modal fade" id="faleConoscoModal" tabindex="-1" role="dialog" aria-hidden="false">
    <div class="modal-dialog modal-register">
        <div class="modal-content">
            <div class="modal-header no-border-header text-center">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="text-muted">Fale Conosco</h3>

            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nome Completo</label>
                    <input type="text" value="" placeholder="Nome Completo" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" value="" placeholder="Email" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="assuntoSelect">Assunto</label>
                    <select class="form-control" id="assuntoSelect">
                        <option>Horarios disponiveis</option>
                        <option>Dúvidas</option>
                        <option>Criticas e Sugestões</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Mensagem</label>
                    <textarea rows=5 class="form-control"></textarea>
                </div>
                <button class="btn btn-success btn-block btn-round"> Enviar </button>
            </div>

        </div>
    </div>
</div>
<!--   end modal -->

<!-- Core JS Files -->
<?php $home = get_template_directory_uri();?>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
    integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
<script src="<?=$home;?>/assets/js/bootstrap.js" type="text/javascript"></script>
<script src="<?=$home;?>/assets/js/popper.min.js" type="text/javascript"></script>
<script src="<?=$home;?>/assets/js/paper-kit.js"></script>
<?php wp_footer();?>

</body>

</html>
