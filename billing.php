<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru" class="mdl-js">
<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>AmoCRM</title>
		<link rel="stylesheet" href = "css/style.css">
		<link rel="stylesheet" href = "css/font-awesome.min.css">
		<link rel="stylesheet" href = "css/stylename.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="tabs.js"></script>
		<script>if((self.parent&&!(self.parent===self))&&(self.parent.frames.length!=0)){self.parent.location=document.location}</script>
		<script type="text/javascript">
			$(document).ready(function(){
				var touch = $('.logo_btn') ;
				var menu = $('.info');
			 
				$(touch).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
					$(".side_menu").toggleClass('click');
				});
				
			});
			
			
			
			$(document).ready(function(){
				var touch = $('.btn_menu_settings') ;
				var menu = $('.settings');
			 
				$(touch).on('click', function(e) {
					e.preventDefault();
					menu.hide();
				});
				
			});
			
			$(document).ready(function(){
				var touch = $('.set') ;
				var menu = $('.settings');
			 
				$(touch).on('click', function(e) {
					
					menu.slideToggle();

				});
				
			});
			$(document).ready(function(){
				var touch = $('.prod');
				var menu = $('.products');
			 
				$(touch).on('click', function(e) {
					
					menu.slideToggle();

				});
				
			});
			
			$(document).ready(function(){
				var touch = $('.btn_menu_products') ;
				var menu = $('.products');
			 
				$(touch).on('click', function(e) {
					e.preventDefault();
					menu.hide();
				});
				
			});
			
			$(document).ready(function(){
				$(".side_menu ul li").click(function(e) {
				 
				  $(".side_menu ul li").removeClass('active');
				  $(this).addClass('active');
			});
			});
			
			$(document).ready(function(){
				$(".main_billing table td.suggest .block_price").click(function(e){ 
					e.preventDefault();
					$(".main_billing table td.suggest .block_price").removeClass('active');
					$(this).addClass('active');
			});
			});
			
			$(document).ready(function(){
				$(".main_billing .block_time").click(function(e){ 
					e.preventDefault();
					$(".main_billing .block_time").removeClass('active');
					$(this).addClass('active');
			});
			});
			$(document).ready(function(){
				$(".main_billing .block_time .circle").click(function(e){ 
					e.preventDefault();
					$(".main_billing .block_time .circle").css("display", "none");
					$(this).css("display", "inline-block");
			});
			});
			
			$(document).ready(function() {
				$('.minus').click(function () {
					var $input = $(this).parent().find('input');
					var count = parseInt($input.val()) - 1;
					count = count < 1 ? 1 : count;
					$input.val(count);
					$input.change();
					return false;
				});
				$('.plus').click(function () {
					var $input = $(this).parent().find('input');
					$input.val(parseInt($input.val()) + 1);
					$input.change();
					return false;
				});
        });
		</script>
		<script>	
			function srec(obj)
				{obj.res.value= 15 * obj.num1.value}
		</script>
		
</head>
	<body>
		<div class = "content">
		<div class = "nav">
			<table>
				<tr>
					<td class="logo">
						<a href="/projects.php" class = "logo_btn">
							<img src = "img/logo.png"/>
						</a>
					</td>
					<td class="search">
						<form class="main-search" action="">
						  <div class="input-group">						
								<button type="button">
									<img src = "img/icon/icon_search.png"/>
								</button>

							<input type="text" class="form-control" placeholder="Поиск">						
						  </div>
						</form>	
					</td>
					<td class="ring">
						<img src = "img/icon/icon_ring.png"/>
						<span class="badge">8</span>
					</td>
					<td class = "login">
						<a href="/">
						  Анна Павлова<img src = "img/icon/icon_triangle.png"/>					 				  
						</a>
					</td>
					<td class = "logo_user">
						<div class = "bl_logo_user">
							<img src="img/user.png" alt=""/>	
						</div>
					</td>
									
				</tr>
			</table>
		</div>
		<div class = "info">
			<ul class = "user_company">
				<li>
					<a href="/company_edit.php?id=1">
						<img src = "img/some.png"/>
						SomeS1
					</a>
				</li>
				<li>					
					<a href="/company_edit.php?id=2">
						<img src = "img/test12.png"/>
						test12
					</a>
				</li>
			</ul>
			<ul class = "companies">
				<li>
					<a href="/company.php">
						Show all companies
					</a>
				</li>
				<li>					
					<a href="/">
						Create new company
					</a>
				</li>
			</ul>
		</div>
		<div class="side_menu" style="margin-left: 0px;">
			<ul>
				<li class = "documents">
					<a href="/documents.php">
						<img src = "img/icon/icon_doc.png"/>
						Документы
					</a>
				</li>
				<li class = "prod">					
					<a href="/">
						<img src = "img/icon/icon_comp.png"/>
						Продукты и услуги
					</a>
				</li>
				<li class = "clients">					
					<a href="/">
						<img src = "img/icon/icon_user.png"/>
						Клиенты
					</a>
				</li>
				<li class = "file">					
					<a href="/">
						<img src = "img/icon/icon_mail.png"/>
						Файлы
					</a>
				</li>
				<li class = "set active">					
					<a href="/billing.php">
						<img src = "img/icon/icon_settings.png"/>
						Настройки
					</a>
				</li>
			</ul>
		</div>
		<div class="settings" style="display: block; margin-left: 15%;">
			<ul>
				<li class = "title">
					<a href="/">						
						Настройки
					</a>
					<img src = "img/icon/icon_menu.png" class = "btn_menu_settings">
					<div class = "clr"></div>
				</li>
				<li class = "active">					
					<a href="/billing.php">
						Billing
					</a>
				</li>
				<li>					
					<a href="/settings.php">
						General settings
					</a>
				</li>
				<li>					
					<a href="/">
						Proforma invoice
					</a>
				</li>
				<li>					
					<a href="/" class = "end">
						Invoice
					</a>
				</li>
			</ul>
		</div>
		
		<div class = "main_billing">
			<div class = "title">
				Billing
			</div>
			<div class = "text" style="color: #4c5e70;">
				Ваш аккаунт на пробной подписке без ограничений до 23.09.2016</br>
				Рекомендуем купить 1 пользователя:
			</div>
			<table class = "table_billing">
				<tr>
					<td class = "suggest">
						<table>
							<tr>
								
								<td class = "block_price">
									<table>
										<tr>
											<td style = "height: 74px; vertical-align: top;">
												<div class = "title">
													Base
												</div>
												<div class = "text">
													For sales teams with a small number of leads
												</div>
											</td>
										</tr>
										<tr>
											<td class = "price">
												<span>15 USD</span> /month
												<div class = "txt_small">for 1 user</div>
											</td>
										</tr>
										<tr>
											<td class = "links">
												<ul>
													<li>
														<a href="/">
															<img src = "img/icon/icon_marker.png"/>
															Add leads and contacts
														</a>
													</li>
													<li>
														<a href="/">
															<img src = "img/icon/icon_marker.png"/>
															Google Analytics and Web Site Integration
														</a>
													</li>
													<li>					
														<a href="/">
															<img src = "img/icon/icon_marker.png"/>
															Search and merge duplicates
														</a>
													</li>
													<li>					
														<a href="/">
															<img src = "img/icon/icon_marker.png"/>
															Customize sales stages and work with sales pipeline
														</a>
													</li>							
												</ul>
											</td>
										</tr>
									</table>
								</td>
								<td class = "indent"></div>
								<td class = "block_price">
									<table>
										<tr>
											<td style = "height: 74px; vertical-align: top;">
												<div class = "title">
													Advanced
												</div>
												<div class = "text">
													For sales teams with a small number of leads
												</div>
											</td>
										</tr>
										<tr>
											<td class = "price">
												<span>25 USD</span> /month
												<div class = "txt_small">for 1 user</div>
											</td>
										</tr>
										<tr>
											<td class = "links">
												<ul>
													<li>
														
													</li>
													<li>
														<a href="/">
															<img src = "img/icon/icon_marker.png"/>
															Google Analytics and Web Site Integration
														</a>
													</li>
													<li>					
														<a href="/">
															<img src = "img/icon/icon_marker.png"/>
															Search and merge duplicates
														</a>
													</li>
													<li>					
														<a href="/">
															<img src = "img/icon/icon_marker.png"/>
															Customize sales stages and work with sales pipeline
														</a>
													</li>							
												</ul>
											</td>
										</tr>
									</table>
								</td>
								<td class = "indent"></div>
								<td class = "block_price">
									<table>
										<tr>
											<td style = "height: 74px; vertical-align: top;">
												<div class = "title">
													Enterprice
												</div>
												<div class = "text">
													For sales teams with a small number of leads
												</div>
											</td>
										</tr>
										<tr>
											<td class = "price">
												<span>45 USD</span> /month
												<div class = "txt_small">for 1 user</div>
											</td>
										</tr>
										<tr>
											<td class = "links">
												<ul>
													<li>
														
													</li>
													<li>
														
													</li>
													<li>					
														<a href="/">
															<img src = "img/icon/icon_marker.png"/>
															Search and merge duplicates
														</a>
													</li>
													<li>					
														<a href="/">
															<img src = "img/icon/icon_marker.png"/>
															Customize sales stages and work with sales pipeline
														</a>
													</li>							
												</ul>
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
						
						
						<div class = "math">
							<div class = "title">Buy licenses:</div>
							<form name="form">
								15 USD/ month × <span class="minus">–</span><input type="text" value="1" name="num1" class = "num" onChange="srec(form)" size="5"/><span class="plus">+</span> = <input type="text" size=1 class = "res" value = "15" name="res"> USD/ month
							</form>
						</div>
						<table class = "time">
								<tr>
									<td class = "block_time">
										<table>
											<tr>
												<td class = "text">
													6 months
												</td>
											</tr>
											<tr>
												<td style="height: 36px; width: 36px;">
													<div class = "circle" style = "display: none;"><img src = "img/icon/icon_marker2.png"/></div>
												</td>
											</tr>								
											<tr>
												<td style="height: 34px;" class = "blue_c text ">
													
												</td>
											</tr>
											
											<tr>
												<td>
													90 USD
												</td>
											</tr>			
											
										</table>
									</td>
									<td class = "block_time">
										<table>
											<tr>
												<td class = "text">
													9 months
												</td>
											</tr>
											<tr>
												<td style="height: 36px; width: 36px;">
													<div class = "circle" style = "display: none;"><img src = "img/icon/icon_marker2.png"/></div>
												</td>
											</tr>								
											<tr>
												<td style="height: 34px;" class = "blue_c text ">
													1 month<br/>
													free
												</td>
											</tr>
											
											<tr>
												<td>
													150 USD
												</td>
											</tr>			
											
										</table>
									</td>
									<td class = "block_time active">
										<table>
											<tr>
												<td class = "text">
													1 year
												</td>
											</tr>
											<tr>
												<td style="height: 36px; width: 36px;">
													<div class = "circle"><img src = "img/icon/icon_marker2.png"/></div>
												</td>
											</tr>								
											<tr>
												<td style="height: 34px;" class = "blue_c text ">
													2 months<br/>
													free
												</td>
											</tr>
											
											<tr>
												<td>
													150 USD
												</td>
											</tr>			
											
										</table>
									</td>
									<td class = "block_time">
										<table>
											<tr>
												<td class = "text">
													2 years
												</td>
											</tr>
											<tr>
												<td style="height: 36px; width: 36px;">
													<div class = "circle" style = "display: none;"><img src = "img/icon/icon_marker2.png"/></div>
												</td>
											</tr>								
											<tr>
												<td style="height: 34px;" class = "blue_c text ">
													6 months<br/>
													free
												</td>
											</tr>
											
											<tr>
												<td>
													270 USD
												</td>
											</tr>			
											
										</table>
									</td>
								</tr>	
								
							</table>
					</td>
					<td class = "total_price">
						<table>
							<tr>
								<td class = "top_bl">
									<div class = "title">Subscription</div>
									<div class = "year">1 year</div>
									<div class = "date">(til 09.09.2017)</br>x1 licenses</div>
									<div class = "clr"></div>
								</td>
							</tr>
							<tr>
								<td class = "total"> 
									<div class = "txt">total:</div>
									<div class = "price">150 USD</div>
									<div class = "txt">2 months free</div>
									<button>Оформить заказ</button>
								</td>
							</tr>
						</table>
						
						
					</td>
				</tr>
			</table>
		</div>
		
		<div class="products" style="margin-left: 15%;">
			<ul>
				<li class = "title">
					<a href="/">						
						Продукты и услуги
					</a>
					<img src = "img/icon/icon_menu.png" class = "btn_menu_products">
					<div class = "clr"></div>
				</li>
				<li class = "active">					
					<a href="/">
						Purches order
					</a>
				</li>
				<li>					
					<a href="/">
						Order acknowledgement
					</a>
				</li>
				<li>					
					<a href="/">
						Proforma invoice
					</a>
				</li>
				<li>					
					<a href="/" class = "end">
						Invoice
					</a>
				</li>
			</ul>
		</div>
		</div>
		<div class="footer" >
			<table>
				<tr>
					<td style="width: 15%">
					</td>
					<td class="navigation">
						<ul>
							<li>
								<a href="/">
									О нас
								</a>
							</li>
							<li>
								<a href="/">
									Безопасность
								</a>
							</li>
							<li>					
								<a href="/">
									Блог
								</a>
							</li>
							<li>					
								<a href="/">
									Обратная связь
								</a>
							</li>
							<li>					
								<a href="/">
									Цены
								</a>
							</li>
							<div class = "clr"></div>							
						</ul>
					</td>
					<td class="copy">
						© 2016 копирайт. Все права защищены.
					</td>		
					
				</tr>
			</table>
			
		</div>
		
	</body></html>