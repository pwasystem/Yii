1. Crie o container utilizando o comando abaixo

	docker-compose down && cls && docker-compose up -d --force-recreate --build php nginx db

2. Rode o script na shell do Linux para insrtalar o banco de dados e criar o usuário

	clear && \
	./coalize/protected/yiic migrate --interactive=0 && \
	./coalize/protected/yiic createuser username password email@mail.com
	
3. Utilize o arquivo abaixo para realizar os testes de integração no Postman
	
	Coalize.postman_collection.json
	
obs.: A função delete e update irá funcionar apenas uma ver pois os indices definidos são perdidos após a primeira execução.

Comandos da API Rest

Listar produtos

GET /api/produtos HTTP/1.1
Host: localhost
X-USERNAME: test1
X-PASSWORD: dGVzdDE
Cookie: PHPSESSID=700147f83121f00a59ed955e54c151bb

Lista produtos paginado

GET /api/produto/2 HTTP/1.1
Host: localhost
X-USERNAME: test1
X-PASSWORD: dGVzdDE
Cookie: PHPSESSID=700147f83121f00a59ed955e54c151bb

Exibe produto do cliente

GET /api/produtos/cliente/3 HTTP/1.1
Host: localhost
X-USERNAME: test1
X-PASSWORD: dGVzdDE
Cookie: PHPSESSID=700147f83121f00a59ed955e54c151bb

Lista dados do produto

GET /api/produtos/offset/1/limit/5 HTTP/1.1
Host: localhost
X-USERNAME: test1
X-PASSWORD: dGVzdDE
Cookie: PHPSESSID=700147f83121f00a59ed955e54c151bb

Cria novo produto

POST /api/produto HTTP/1.1
Host: localhost
X-USERNAME: test1
X-PASSWORD: dGVzdDE
Content-Type: application/x-www-form-urlencoded
Cookie: PHPSESSID=700147f83121f00a59ed955e54c151bb
Content-Length: 36

nome=Prato&preco=12.99&cliente_id=1

Atualiza produto
PUT /api/produto/2 HTTP/1.1
Host: localhost
X-USERNAME: test1
X-PASSWORD: dGVzdDE
Content-Type: application/json
Cookie: PHPSESSID=700147f83121f00a59ed955e54c151bb
Content-Length: 63

{"nome":"Caneca","preco":"12.00","cliente_id":"22","foto":null}

Apaga produto

DELETE /api/produto/22 HTTP/1.1
Host: localhost
X-USERNAME: test1
X-PASSWORD: dGVzdDE
Cookie: PHPSESSID=700147f83121f00a59ed955e54c151bb

Lista clientes

GET /api/clientes HTTP/1.1
Host: localhost
X-USERNAME: test1
X-PASSWORD: dGVzdDE
Cookie: PHPSESSID=700147f83121f00a59ed955e54c151bb

Lista cliente paginado

GET /api/clientes/offset/1/limit/5 HTTP/1.1
Host: localhost
X-USERNAME: test1
X-PASSWORD: dGVzdDE
Cookie: PHPSESSID=700147f83121f00a59ed955e54c151bb

Exibe cliente

GET /api/cliente/1 HTTP/1.1
Host: localhost
X-USERNAME: test1
X-PASSWORD: dGVzdDE
Cookie: PHPSESSID=700147f83121f00a59ed955e54c151bb

Novo cliente

POST /api/cliente HTTP/1.1
Host: localhost
X-USERNAME: test1
X-PASSWORD: dGVzdDE
Content-Type: application/x-www-form-urlencoded
Cookie: PHPSESSID=700147f83121f00a59ed955e54c151bb
Content-Length: 130

nome=Joelson&cpf=12312312387&cep=14801076&logradouro=avenida%20trevosa&numero=12&cidade=Transilv%C3%A2nia&estado=cp&sexo=Masculino

Atualiza cliente

PUT /api/cliente/22 HTTP/1.1
Host: localhost
X-USERNAME: test1
X-PASSWORD: dGVzdDE
Content-Type: application/json
Cookie: PHPSESSID=700147f83121f00a59ed955e54c151bb
Content-Length: 195

{"id":"22","nome":"Joelmo felício","cpf":"12312312387","cep":"14811000","logradouro":"logradouro10","numero":"101","cidade":"cidade10","estado":"sp","complemento":"","foto":"","sexo":"Masculino"}

Apaga cliente

DELETE /api/cliente/22 HTTP/1.1
Host: localhost
X-USERNAME: test1
X-PASSWORD: dGVzdDE
Cookie: PHPSESSID=700147f83121f00a59ed955e54c151bb