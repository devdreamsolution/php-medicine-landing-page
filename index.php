<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	<section class="wizard-section">
		<div class="row no-gutters">
			<div class="col-lg-2 col-md-2 offset"></div>
			<div class="col-lg-8 col-md-8">
				<div class="form-wizard">
					<form action="" method="post" role="form">
						<div>
							<a href="index.html"><img class="logo" src="images/logo.png" height="90px;" alt=""></a>
						</div>
						
						<div class="form-wizard-header">
							<ul class="list-unstyled form-wizard-steps clearfix">
								<li class="active"><span>1</span></li>
								<li><span>2</span></li>
								<li><span>3</span></li>
								<li><span>4</span></li>
							</ul>
						</div>
						<fieldset class="wizard-fieldset">
							<h5 class="stage">ETAPA I</h5>
							<h1 class="pt-2">Os melhores planos médicos do Brasil para sua empresa</h1>
							<h5 class="pt-3 pb-2">Para encontrarmos o melhor plano precisamos de algumas informações, é muito rápido.</h5>
							<div class="form-group" index="0">
								<input type="text" class="form-control wizard-required" id="name" name="name">
								<label for="name" class="wizard-form-text-label">Nome para contato*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group wizard-show" index="1">
								<input type="email" class="form-control wizard-required wizard-email" id="email" name="email">
								<label for="email" class="wizard-form-text-label">Seu e-mail é*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group wizard-show" index="2">
								<input type="text" class="form-control wizard-required" id="phone" name="phone">
								<label for="phone" class="wizard-form-text-label">Seu celular/whatsApp*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group wizard-show" index="3">
								<input type="text" class="form-control wizard-required" id="cnpj" name="cnpj">
								<label for="cnpj" class="wizard-form-text-label">Seu CNPJ*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group wizard-show" index="4">
								<select class="form-control wizard-required" id="occupation" name="occupation">
									<option value=""></option>
									<option value="1">Sócio, CEO</option>
									<option value="2">Diretor</option>
									<option value="3">Gestor de RH</option>
									<option value="4">Gerente financeiro</option>
									<option value="5">Gerente comercial</option>
									<option value="6">Executivo</option>
									<option value="7">Outro</option>
								</select>
								<label for="occupation" class="wizard-form-text-label">Função*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
						</fieldset>	
						<fieldset class="wizard-fieldset show">
							<h5 class="stage">ETAPA II</h5>
							<h1 class="pt-2">Os melhores planos médicos do Brasil para sua empresa</h1>
							<h5 class="pt-3 pb-2">Vamos fazer sua cotação, é muito rápido.</h5>
							<div class="form-group wizard-show" index="5">
								Tem plano médico?
								<div class="wizard-form-radio pl-3">
									<input name="radio_plan" id="option_yes" value="yes" type="radio">
									<label for="option_yes">Sim</label>
								</div>
								<div class="wizard-form-radio">
									<input name="radio_plan" id="option_no" value="no" type="radio">
									<label for="option_no">Não</label>
								</div>
							</div>
							<div class="form-group wizard-show" index="6">
								<input type="text" class="form-control wizard-required" id="plan" name="plan">
								<label for="plan" class="wizard-form-text-label">Qual plano?*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group wizard-show" index="7">
								<select class="form-control wizard-required" id="state" name="state">
									<option value=""></option>
									<option value="1">Acre</option>
									<option value="2">Alagoas</option>
									<option value="3">Amapá</option>
									<option value="4">Amazonas</option>
									<option value="5">Bahia</option>
									<option value="6">Ceará</option>
									<option value="7">Distrito Federal</option>
									<option value="8">Espírito Santo</option>
									<option value="9">Goiás</option>
									<option value="10">Maranhão</option>
									<option value="11">Mato Grosso</option>
									<option value="12">Mato Grosso do Sul</option>
									<option value="13">Minas Gerais</option>
									<option value="14">Pará</option>
									<option value="15">Paraíba</option>
									<option value="16">Paraná</option>
									<option value="17">Pernambuco</option>
									<option value="18">Piauí</option>
									<option value="19">Rio de Janeiro</option>
									<option value="20">Rio Grande do Norte</option>
									<option value="21">Rio Grande do Sul</option>
									<option value="22">Rondônia</option>
									<option value="23">Roraima</option>
									<option value="24">Santa Catarina</option>
									<option value="25">São Paulo</option>
									<option value="26">Sergipe</option>
									<option value="27">Tocantins</option>
								</select>
								<label for="state" class="wizard-form-text-label">Sua empresa está em qual estado?*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group wizard-show" index="8">
								<select class="form-control wizard-required" id="plan_num" name="plan_num">
									<option value=""></option>
									<option value="1">De 03 a 29</option>
									<option value="2">De 30 a 99</option>
									<option value="3">Acima de 100</option>
								</select>
								<label for="plan_num" class="wizard-form-text-label">Quantos beneficiários tem no seu plano?*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="form-group wizard-show" index="9">
								Por faixa etária*
								<table id="table_count" class="table table-bordered text-center">
									<tr>
										<td width="50%"><input type="number" value="0" min="0" max="100" step="1" onchange="count_calc();"/></td>
										<td>00 a 18</td>
									</tr>
									<tr>
										<td><input type="number" value="0" min="0" max="100" step="1" onchange="count_calc();"/></td>
										<td>19 a 23</td>
									</tr>
									<tr>
										<td><input type="number" value="0" min="0" max="100" step="1" onchange="count_calc();"/></td>
										<td>24 a 28</td>
									</tr>
									<tr>
										<td><input type="number" value="0" min="0" max="100" step="1" onchange="count_calc();"/></td>
										<td>29 a 33</td>
									</tr>
									<tr>
										<td><input type="number" value="0" min="0" max="100" step="1" onchange="count_calc();"/></td>
										<td>34 a 38</td>
									</tr>
									<tr>
										<td><input type="number" value="0" min="0" max="100" step="1" onchange="count_calc();"/></td>
										<td>39 a 43</td>
									</tr>
									<tr>
										<td><input type="number" value="0" min="0" max="100" step="1" onchange="count_calc();"/></td>
										<td>44 a 48</td>
									</tr>
									<tr>
										<td><input type="number" value="0" min="0" max="100" step="1" onchange="count_calc();"/></td>
										<td>49 a 53</td>
									</tr>
									<tr>
										<td><input type="number" value="0" min="0" max="100" step="1" onchange="count_calc();"/></td>
										<td>54 a 58</td>
									</tr>
								</table>
							</div>
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
						</fieldset>	
						<fieldset class="wizard-fieldset">
							<h5 class="stage">ETAPA II</h5>
							<h1 class="pt-2">De acrodo com seu perfil separamos os melhores planos para você</h1>
							<div class="text-right">
								<button class="btn btn-primary" onclick="#">Refazer simulação</button>
							</div>
							<div class="row">
								<div class="col-md-4 form-group">
									Porte da empresa
									<input type="text" class="form-control" id="company_size" readonly>
								</div>
								<div class="col-md-4 form-group">
									Quantidade de beneficiários
									<input type="text" class="form-control" id="beneficary_num" readonly>
								</div>
								<div class="col-md-4 form-group">
									Estado
									<input type="text" class="form-control" id="estado" readonly>
								</div>
							</div>

							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<a href="javascript:;" class="form-wizard-next-btn float-right">Next</a>
							</div>
						</fieldset>
						<fieldset class="wizard-fieldset">
							<h5>Payment Information</h5>
							<div class="form-group">
								Payment Type
								<div class="wizard-form-radio">
									<input name="radio-name" id="mastercard" type="radio">
									<label for="mastercard">Master Card</label>
								</div>
								<div class="wizard-form-radio">
									<input name="radio-name" id="visacard" type="radio">
									<label for="visacard">Visa Card</label>
								</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control wizard-required" id="honame">
								<label for="honame" class="wizard-form-text-label">Holder Name*</label>
								<div class="wizard-form-error"></div>
							</div>
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control wizard-required" id="cardname">
										<label for="cardname" class="wizard-form-text-label">Card Number*</label>
										<div class="wizard-form-error"></div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<div class="form-group">
										<input type="text" class="form-control wizard-required" id="cvc">
										<label for="cvc" class="wizard-form-text-label">CVC*</label>
										<div class="wizard-form-error"></div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">Expiry Date</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="form-group">
										<select class="form-control">
											<option value="">Date</option>
											<option value="">1</option>
											<option value="">2</option>
											<option value="">3</option>
											<option value="">4</option>
											<option value="">5</option>
											<option value="">6</option>
											<option value="">7</option>
											<option value="">8</option>
											<option value="">9</option>
											<option value="">10</option>
											<option value="">11</option>
											<option value="">12</option>
											<option value="">13</option>
											<option value="">14</option>
											<option value="">15</option>
											<option value="">16</option>
											<option value="">17</option>
											<option value="">18</option>
											<option value="">19</option>
											<option value="">20</option>
											<option value="">21</option>
											<option value="">22</option>
											<option value="">23</option>
											<option value="">24</option>
											<option value="">25</option>
											<option value="">26</option>
											<option value="">27</option>
											<option value="">28</option>
											<option value="">29</option>
											<option value="">30</option>
											<option value="">31</option>
										</select>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="form-group">
										<select class="form-control">
											<option value="">Month</option>
											<option value="">jan</option>
											<option value="">Feb</option>
											<option value="">March</option>
											<option value="">April</option>
											<option value="">May</option>
											<option value="">June</option>
											<option value="">Jully</option>
											<option value="">August</option>
											<option value="">Sept</option>
											<option value="">Oct</option>
											<option value="">Nov</option>
											<option value="">Dec</option>	
										</select>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4">
									<div class="form-group">
										<select class="form-control">
											<option value="">Years</option>
											<option value="">2019</option>
											<option value="">2020</option>
											<option value="">2021</option>
											<option value="">2022</option>
											<option value="">2023</option>
											<option value="">2024</option>
											<option value="">2025</option>
											<option value="">2026</option>
											<option value="">2027</option>
											<option value="">2028</option>
											<option value="">2029</option>
											<option value="">2030</option>
											<option value="">2031</option>
											<option value="">2032</option>
											<option value="">2033</option>
											<option value="">2034</option>
											<option value="">2035</option>
											<option value="">2036</option>
											<option value="">2037</option>
											<option value="">2038</option>
											<option value="">2039</option>
											<option value="">2040</option>	
										</select>
									</div>
								</div>
							</div>
							<div class="form-group clearfix">
								<a href="javascript:;" class="form-wizard-previous-btn float-left">Previous</a>
								<a href="javascript:;" class="form-wizard-submit float-right">Submit</a>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery-1.2.6.pack.js" type="text/javascript"></script>
	<script src="js/jquery.maskedinput-1.1.4.pack.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$.noConflict();
			$("#cnpj").mask("99.999.999/9999-99");
			$("#phone").mask("(999) 99999-9999");

		});
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/bootstrap-input-spinner.js"></script>
	<script>
		$("input[type='number']").inputSpinner()
	</script>

	<!-- Flyzoo script v3 -->
	<script type="text/javascript">
		(function () {
		window._FlyzooApplicationId="5e8c9aa0bb547e2324968e1b5e8c9a62bb547e2324968e15";
		var fz = document.createElement('script'); fz.type = 'text/javascript'; fz.async = true;
		fz.src = 'js/flyzoo.start.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(fz, s);
		})();
	</script>
</body>
</html>