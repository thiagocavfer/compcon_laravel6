<div class="row">
    <div class="col-6">
        <div class="form-group">
            <label for="">Nome</label>
            <div class="input-group">
                {{Form::text(
                    "nome",
                    old("nome"),
                    [
                        "id" => "nome",
                        "class" => "form-control",
                        "autocomplete" => "off"
                    ])
                }}
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="form-group">
            <label for="">E-mail</label>
            <div class="input-group">
                {{Form::text(
                    "email",
                    old("email"),
                    [
                        "id" => "email",
                        "class" => "form-control",
                        "autocomplete" => "off"
                    ])
                }}
            </div>
        </div>
    </div>

    <div class="col-3">
        <div class="form-group">
            <label for="">Telefone</label>
            <div class="input-group">
                {{Form::text(
                    "telefone",
                    old("telefone"),
                    [
                        "id" => "telefone",
                        "class" => "form-control",
                        "autocomplete" => "off"
                    ])
                }}
                <small 
                    class="form-text text-muted">
                    Preenchimento opcional
                </small>
            </div>
        </div>
    </div>
</div>