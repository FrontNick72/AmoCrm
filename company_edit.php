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
				var touch = $('.set') ;
				var menu = $('.settings');
			 
				$(touch).on('click', function(e) {
					
					menu.slideToggle();

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
		</script>
		
</head>
	<body>
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
					<a href="/">
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
					<a href="/">
						<img src = "img/icon/icon_settings.png"/>
						Настройки
					</a>
				</li>
			</ul>
		</div>
		
		<div class="settings" style="margin-left: 15%;">
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
		
		<div class = "main_company_edit">
			<table class = "top">
				<tr>
					<td class = "title">
						<div class = "hello">Update company: test 12</div>
					</td>					
				</tr>
			</table>
			<form>
				<table class = "form">
					<tr>
						<td class = "title">
							Company name:
						</td>
						<td class = "indent">
						
						</td>	
						<td class = "title">
							Registration number:
						</td>	
						<td class = "indent">
							
						</td>	
						<td class = "title">
							Legal status:
						</td>	
					</tr>
					<tr>
						<td class = "input">
							<input class="form-control" type="text" value = "test 12" />
						</td>
						<td class = "indent">
						
						</td>	
						<td class = "input">
							<input class="form-control" type="text" value = "8965484365489" />
						</td>	
						<td class = "indent">
							
						</td>	
						<td class = "input">
							<select class="form-control" name="status"> 
								<option value="0">CAT</option>
								<option selected="selected" value="1">VAT</option>
								<option value="2">PAT</option> </select>
							</select>
						</td>	
					</tr>
				</table>
		
		
				<table class = "form" enctype="multipart/form-data">
					<tr>
						<td class = "title">
							Tax number:
						</td>
						<td class = "indent">
						
						</td>	
						<td class = "title">
							Address:
						</td>	
						<td class = "indent">
							
						</td>	
						<td class = "title">
							ZIP Code:
						</td>	
					</tr>
					<tr>
						<td class = "input">
							<input class="form-control" type="text" value = "LV100000151510051" />
						</td>
						<td class = "indent">
						
						</td>	
						<td class = "input">
							<input class="form-control" type="text" value = "VIBORGASTAN" />
						</td>	
						<td class = "indent">
							
						</td>	
						<td class = "input">
							<input class="form-control" type="text" value = "21361" />
						</td>	
					</tr>
				</table>
				<div class = "title">Логотип:</div>
				<div class = "photo">
					<img src = "img/photo.png"/>
				</div>
				<div class = "inform">
					<button type="file" class = "file">Выбрать файл</button><div class = "clr"></div>
					<span>Максимальный размер логотипа, который храним-500px по любой из сторон</span>
				</div>
				<div class = "clr"></div>
				<button class = "save">Сохранить</button><div class = "clr"></div>
			</form>
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