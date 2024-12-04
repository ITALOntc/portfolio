<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="styles.css" />
    
    <link
    
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        
      /* nav */
        .container-fluid{
            text-align: center;
            margin-left: 400px;
            
        }
        .form-control{
            margin-left: 30px;
            width: 500px;
        }
        p{
            margin: 0;
            padding: 0;
        }
   
        .bu{
            margin: 12px;
            margin-right: 50px;
   
        }
        .dropdown-menu{
            width: 130px;
        }
   
   .container{
     margin-top: 50px;
     max-width: 2000px;
    
     
     
   }
   .cont1{
    width: 700px;
     
     
   margin-left:500px ;
   }
   button{
       background-color: black;
       border: none;
       padding: 8px 12px;
       border-radius: 5px;
       color: #fff;
       cursor: pointer;
       margin-left: 10px;
   }
   input[type=submit],input[type=reset]{
       background-color: black;
       border: none;
       padding: 8px 12px;
       border-radius: 5px;
       color: #fff;
       cursor: pointer;
       margin-left:100px ;
       
   }
   #form-line jf-required{
     padding: 0;
     margin: 0%;
   }
    .title{
        text-align: center;
    }
       </style>
  </head>
  <body>
    
           
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark" >
      <div class="container-fluid"  >
        <a class="navbar-brand" href="#">I&G Outlet</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
       
          <form class="d-flex" width="1000px" role="search">
            <input class="form-control me-2"  type="search" placeholder="O que você procura?" aria-label="Search"  >
            <button class="btn btn-outline-primary" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
              <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>  </button>
          </form>
        
        </div>
      </div>


      
      


      <div class="dropdown">
        <a class="btn btn-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg>
        </a>
      
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Cadastrar</a></li>
          <li><a class="dropdown-item" href="#">Entrar</a></li>
          
        </ul>
      </div>
<div class="bu">
      <button type="button" class="btn btn-dark position-relative">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check-fill" viewBox="0 0 16 16">
          <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm-1.646-7.646-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708.708z"/>
        </svg>
        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
          <span class="visually-hidden">New alerts</span>
        </span>
      </button>
  </div>
      


  </nav>
  
    <nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
      
    </nav>
 
    <main>
      <div class="page-title">Seu Carrinho</div>
      <div class="content">
        <section>
          <table>
            <thead>
              <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Total</th>
                <th>-</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="product">
                    <img src="https://picsum.photos/100/120" alt="" />
                    <div class="info">
                      <div class="name">Nome do produto</div>
                      <div class="category">Categoria</div>
                    </div>
                  </div>
                </td>
                <td>R$ 120</td>
                <td>
                  <div class="qty">
                    <button><i class="bx bx-minus"></i></button>
                    <span>2</span>
                    <button><i class="bx bx-plus"></i></button>
                  </div>
                </td>
                <td>R$ 240</td>
                <td>
                  <button class="remove"><i class="bx bx-x"></i></button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="product">
                    <img src="https://picsum.photos/100/120" alt="" />
                    <div class="info">
                      <div class="name">Nome do produto</div>
                      <div class="category">Categoria</div>
                    </div>
                  </div>
                </td>
                <td>R$ 120</td>
                <td>
                  <div class="qty">
                    <button><i class="bx bx-minus"></i></button>
                    <span>2</span>
                    <button><i class="bx bx-plus"></i></button>
                  </div>
                </td>
                <td>R$ 240</td>
                <td>
                  <button class="remove"><i class="bx bx-x"></i></button>
                </td>
              </tr>
              <tr>
                <td>
                  <div class="product">
                    <img src="https://picsum.photos/100/120" alt="" />
                    <div class="info">
                      <div class="name">Nome do produto</div>
                      <div class="category">Categoria</div>
                    </div>
                  </div>
                </td>
                <td>R$ 120</td>
                <td>
                  <div class="qty">
                    <button><i class="bx bx-minus"></i></button>
                    <span>2</span>
                    <button><i class="bx bx-plus"></i></button>
                  </div>
                </td>
                <td>R$ 240</td>
                <td>
                  <button class="remove"><i class="bx bx-x"></i></button>
                </td>
              </tr>
            </tbody>
          </table>
        </section>
        <aside>
          <div class="box">
            <header>Resumo da compra</header>
            <div class="info">
              <div><span>Sub-total</span><span>R$ 418</span></div>
              <div><span>Frete</span><span>Gratuito</span></div>
              <div>
                <button>
                  Adicionar cupom de desconto
                  <i class="bx bx-right-arrow-alt"></i>
                </button>
              </div>
            </div>
            <footer>
              <span>Total</span>
              <span>R$ 418</span>
            </footer>
          </div>
          <button>Finalizar Compra</button>
        </aside>
      </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <section class="Contato" id="Contato">
		<div class="meio-contato">
			<h3>Nossas redes sociais</h3>
			<h5>Nós envie uma mensagem</h5>
			<div class="icons">
				<a href=""><img src="wpp.png" alt=""><i class='WhatsApp' ></i></a>
				<a href=""><img src="insta.png" alt=""><i class='bx bxl-instagram-alt' ></i></a>
				<a href=""><img src="face.png" alt=""><i class='bx bxl-twitter' ></i></a>
			</div>
		</div>

		<div class="meio-contato">
			<h3>Procurar</h3>
			<li><a href="#home">Inicio</a></li>
			<li><a href="#featured">Destaques</a></li>
			<li><a href="#new">Novo</a></li>
			<li><a href="#contact">Contato</a></li>
		</div>

		<div class="meio-contato">
			<h3>Nossos serviços</h3>
			<li><a href="#">Preços</a></li>
			<li><a href="#">Frete grátis</a></li>
			<li><a href="#">Cartões de presente</a></li>
		</div>

		<div class="meio-contato">
			<h3>Shopping</h3>
			<li><a href="#">Tênis</a></li>
			<li><a href="#">Roupas</a></li>
			<li><a href="#">Acéssorios</a></li>
			<li><a href="#">Ofertas</a></li>
		</div>

	</section>

	<div class="last-text">
		<p>Copyright © 2022 Todos os direitos reservados | Este modelo é feito por Tahmid Ahmed</p>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>



    
    <script src="https://unpkg.com/scrollreveal"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/script.js"></script>

  </body>
</html>



