<?php

  require('db.php');
  include("auth.php");
 ?>


<html lang="pt">

<head>

  <meta charset="utf-8">
  <title>Viatura B</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="../js/viaturab.js"></script>
  <link rel="stylesheet" href="../css/viaturab.css">


</head>

<body>


  <div class="stepwizard col-md-offset-3">
      <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
          <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>

        </div>
        <div class="stepwizard-step">
          <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>

        </div>
        <div class="stepwizard-step">
          <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>

        </div>
        <div class="stepwizard-step">
          <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>

        </div>
        <div class="stepwizard-step">
          <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>

        </div>
        <div class="stepwizard-step">
          <a href="#step-6" type="button" class="btn btn-default btn-circle" disabled="disabled">6</a>

        </div>
        <div class="stepwizard-step">
          <a href="#step-7" type="button" class="btn btn-default btn-circle" disabled="disabled">7</a>

        </div>
      </div>
    </div>

  <div class="container pt-5">
        <div class="row justify-content-sm-center">
          <div class=" col-xs-12 col-sm-12 col-md-12 col-lg-5">
            <div class="card border-info text-center ">

              <form role="form" action="../require/viaturab.php" method="post">

                <div class="row setup-content" id="step-1">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                    <div class="col-md-12">
                      <h3> Dados do Veículo</h3>
                      <hr>
                      <div class="form-group">
                        <label class="control-label">Marca</label>
                        <input maxlength="100" type="text" name="marca" id="marca" class="form-control" placeholder="Marca" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Modelo</label>
                        <input maxlength="100" type="text" name="modelo" id="modelo" class="form-control" placeholder="Modelo" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Matrícula</label>
                        <input maxlength="100" type="text" name="matricula" id="matricula"  required="required" class="form-control" placeholder="Matrícula"/>
                      </div>
                      <div class="form-group">
                        <label class="control-label">País Matrícula</label>
                        <select name="paismatricula" id="paismatricula">
                          <option disabled selected value> -- Seleccione Opção -- </option>
                          <option value="Portugal">Portugal</option>
                          <option value="Espanha">Espanha</option>
                          <option value="França">França</option>
                          <option value="Alemanha">Alemanha</option>
                          <option value="Italia">Italia</option>
                          <option value="UK">Reino Unido</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Tipo Veículo</label>
                        <select name="tipoveiculo" id="tipoveiculo">
                          <option disabled selected value> -- Selecione Opção -- </option>
                          <option value="volvo">Duas Rodas</option>
                          <option value="saab">Ligeiro</option>
                          <option value="fiat">Pesado</option>
                        </select>
                      </div>
                      <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                    </div>
                  </div>
                </div>

                <div class="row setup-content" id="step-2">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                    <div class="col-md-12">
                      <h3> Apólice</h3>
                      <hr>
                      <div class="form-group">
                        <label class="control-label">Companhia</label>
                        <select name="companhia" id="companhia" required>
                          <option disabled selected value> -- Selecione Opção -- </option>
                          <option value="AXA">AXA</option>
                          <option value="AcoreanaSeguros">Acoreana Seguros</option>
                          <option value="Allianz">Allianz</option>
                          <option value="CaravelaSeguros">Caravela Seguros</option>
                          <option value="Fidelidade">Fidelidade</option>
                          <option value="Generali">Generali</option>
                          <option value="Groupama">Groupama</option>
                          <option value="LibertySeguros">Liberty Seguros</option>
                          <option value="Lusitania">Lusitania</option>
                          <option value="Mapfre">Mapfre</option>
                          <option value="Ocidental">Ocidental</option>
                          <option value="RealVidaSeguros">Real Vida Seguros</option>
                          <option value="Tranquilidade">Tranquilidade</option>
                          <option value="VictoriaSeguros">Victoria Seguros</option>
                          <option value="Zurich">Zurich</option>
                          <option value="Victoria Seguros">Victoria Seguros</option>
                          <option value="Logo">Logo</option>
                          <option value="Nseguros">Nseguros</option>
                          <option value="OKteleseguros">OKteleseguros</option>
                          <option value="SeguroDirecto">Seguro Directo</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Número Apólice</label>
                        <input name="numeroapolice" id="numeroapolice" type="text" maxlength="8" required="required" class="form-control" placeholder="Número Apólice" />
                      </div>
                      <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                    </div>
                  </div>
                </div>

                <div class="row setup-content " id="step-3">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                    <div class="col-md-12">
                      <h3>Tomador</h3>
                      <hr>
                      <div class="form-group">
                        <label class="control-label">NIF</label>
                        <input name="nift" id="nift" type="number" class="form-control" placeholder="NIF" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Nome</label>
                        <input name="nomet" id="nomet" maxlength="100" type="text" class="form-control" placeholder="Nome" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Apelido</label>
                        <input name="apelidot" id="apelidot" maxlength="100" type="text" required="required" class="form-control" placeholder="Apelido" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Morada</label>
                        <input name="moradat" id="moradat" maxlength="100" type="text" required="required" class="form-control" placeholder="Morada" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Código Postal</label>
                        <input name="cpostt" id="cpostt" maxlength="100" type="text" required="required" class="form-control" placeholder="Código Postal" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">País</label>
                        <select name="paist" id="paist">
                          <option disabled selected value> -- Selecione Opção -- </option>
                          <option value="Portugal">Portugal</option>
                          <option value="Espanha">Espanha</option>
                          <option value="França">França</option>
                          <option value="Alemanha">Alemanha</option>
                          <option value="Italia">Italia</option>
                          <option value="UK">Reino Unido</option>
                        </select>
                        <br><br>
                        <div class="form-group">
                          <label class="control-label">Telefone</label>
                          <input name="telefonet" id="telefonet" maxlength="100" type="number" required="required" class="form-control" placeholder="Telefone" />
                        </div>
                      </div>
                      <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                    </div>
                  </div>
                </div>

                <div class="row setup-content " id="step-4">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left ">
                    <div class="col-md-12">
                      <h3>Condutor</h3>
                      <hr>
                      <div class="form-group">
                        <label class="control-label">NIF</label>
                        <input name="nifc" id="nifc" type="number" class="form-control" placeholder="NIF" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Nome Condutor</label>
                        <input name="nomec" id="nomec" maxlength="100" type="text" class="form-control" placeholder="Nome Condutor" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Apelido</label>
                        <input name="apelidoc" id="apelidoc" maxlength="100" type="text" required="required" class="form-control" placeholder="Apelido" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Morada</label>
                        <input name="moradac" id="moradac" maxlength="100" type="text" required="required" class="form-control" placeholder="Morada" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Código Postal</label>
                        <input name="cpostc" id="cpostc" maxlength="100" type="text" required="required" class="form-control" placeholder="Código Postal" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">País</label>
                        <select name="paistc" id="paistc">
                          <option disabled selected value> -- Selecione Opção -- </option>
                          <option value="Portugal">Portugal</option>
                          <option value="Espanha">Espanha</option>
                          <option value="França">França</option>
                          <option value="Alemanha">Alemanha</option>
                          <option value="Italia">Italia</option>
                          <option value="UK">Reino Unido</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Data de Nascimento</label>
                        <input name="datanasc" id="datanasc" maxlength="100" type="date" required="required" class="form-control" placeholder="Telefone" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Telefone</label>
                        <input name="telefonec" id="telefonec" maxlength="100" type="number" required="required" class="form-control" placeholder="Telefone" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">E-mail</label>
                        <input name="emailc" id="emailc" maxlength="100" type="e-mail" required="required" class="form-control" placeholder="E-mail" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Número Carta Condução</label>
                        <input name="numerocartac" id="numerocartac" maxlength="100" type="number" required="required" class="form-control" placeholder="Número Carta Condução" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Categoria</label>
                        <input name="categoriac" id="categoriac" maxlength="100" type="number" required="required" class="form-control" placeholder="Categoria" />
                      </div>
                      <div class="form-group">
                        <label class="control-label">Data de Validade</label>
                        <input name="datavc" id="datavc" maxlength="100" type="date" required="required" class="form-control" placeholder="Data de Validade" />
                      </div>
                      <button class="btn btn-primary nextBtn btn-lg pull-right " type="button">Next</button>
                    </div>
                  </div>
                </div>

                <div class="row setup-content" id="step-5">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                    <div class="col-md-12">
                      <h3>Danos</h3>
                      <hr>
                      <div class="form-group">
                        <label class="control-label">Danos</label>
                        <textarea name="danos" id="danos" name="name" rows="4" cols="35"></textarea>
                      </div>
                      <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                    </div>
                  </div>
                </div>

                <div class="row setup-content" id="step-6">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                    <div class="col-md-12">
                      <h3>Circunstâncias</h3>
                      <hr>
                      <div class="form-group" >
                        <label class="control-label">Circunstâncias</label>
                        <select name="circunstancias" id="circunstancias" required >
                          <option disabled selected value> -- Selecione Opção -- </option>
                          <option value="volvo">Estava estacionado/Parado</option>
                          <option value="saab">Saía de estacionamento / Abria uma porta</option>
                          <option value="fiat">Ia estacionar</option>
                          <option value="volvo">Saía de um parque de estacionamento, de local privado ou de um caminho particular</option>
                          <option value="saab">Entrava num parque de estacionamento, de local privado ou de um caminho particular</option>
                          <option value="fiat">Entrava numa rotunda ou praça de sentido giratório</option>
                          <option value="volvo">Embateu na traseira de outro veículo que circulava no mesmo sentido e na mesma fila</option>
                          <option value="saab">Circulava no mesmo sentido mas numa fila diferente</option>
                          <option value="fiat">Mudava de fila</option>
                          <option value="fiat">Ultrapassava</option>
                          <option value="fiat">Virava à direita</option>
                          <option value="fiat">Virava à esquerda</option>
                          <option value="fiat">Recuava</option>
                          <option value="fiat">Circulava na parte da faixa de rodagem reservada à circulação em sentido contrário</option>
                          <option value="fiat">Apresentava-se pela direita (num cruzamento ou entroncamento)</option>
                          <option value="fiat">Não respeitou um sinal de dar prioridade o um semáforo vermelho</option>
                        </select>
                        <br><br>
                        <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row setup-content" id="step-7">
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
                    <div class="col-md-12">
                      <h3> Observações</h3>
                      <hr>
                      <label class="control-label" re>Observações:(Descreva onde aconteceu o acidente)</label>
                      <textarea name="observacoes" id="observacoes"rows="4" cols="35" required></textarea>
                      <br><br>
                      <button class="btn btn-success btn-lg pull-right" value="Value" name="submit" type="submit">Guardar</button>
                    </div>
                  </div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>





</body>

</html>
