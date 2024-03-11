# Coalize

## Instalação

### 1. Crie o container utilizando o comando abaixo.

	docker-compose up -d

> **Obs.:** Caso queira criar a base de dados pelo Docker coloque o arquivo dump.sql na pasta server/db/sql antes de rodar o arquivo docker-compose.

### 2. Rode o script na shell do Linux para instalar o banco de dados e criar o usuário.

	clear && \
	./coalize/protected/yiic migrate --interactive=0 && \
	./coalize/protected/yiic createuser username password email@mail.com
	
### 3. Utilize o arquivo abaixo para realizar os testes de integração no Postman.
	
	Coalize.postman_collection.json
	
>**obs.:** A função delete e update irá funcionar apenas **uma ver** pois os indices definidos são perdidos na primeira execução devido a autonumeração dos registros.

# Comandos da API Rest

## Autenticação

### A autenticação Básica pode ser realizada em qualquer requisição através do cabeçalho.

	X-USERNAME: {usuário}
	X-PASSWORD: {senha}

> Utilize codificação base64 na senha.
 
### Após a autenticação básica, utilize o bearer token no cabeçalho das requisições.

	Authentication: Bearer {token}

## Requisições

### Listar produtos

	GET /api/produtos HTTP/1.1
	Host: localhost

### Lista produtos paginado

	GET /api/produto/2 HTTP/1.1
	Host: localhost

### Exibe produto do cliente

	GET /api/produtos/cliente/3 HTTP/1.1
	Host: localhost

### Lista dados do produto

	GET /api/produtos/offset/1/limit/5 HTTP/1.1
	Host: localhost

### Cria novo produto

	POST /api/produto HTTP/1.1
	Host: localhost
	Content-Type: application/x-www-form-urlencoded
	Content-Length: 36
	
	nome={nome}&preco={preco}&cliente_id={id do cliente}

### Atualiza produto

	PUT /api/produto/2 HTTP/1.1
	Host: localhost
	Content-Type: application/json
	Content-Length: 63
	
	{"nome":"","preco":"","cliente_id":"","foto":""}

### Apaga produto

	DELETE /api/produto/22 HTTP/1.1
	Host: localhost

### Lista clientes

	GET /api/clientes HTTP/1.1
	Host: localhost

### Lista cliente paginado

	GET /api/clientes/offset/1/limit/5 HTTP/1.1
	Host: localhost

### Exibe cliente

	GET /api/cliente/1 HTTP/1.1
	Host: localhost


### Novo cliente

	POST /api/cliente HTTP/1.1
	Host: localhost
	Content-Type: application/x-www-form-urlencoded
	Content-Length: 130
	
	nome={nome}&cpf={cpf}&cep={cep}&logradouro={endereço}&numero={numero}&cidade={cidade}&estado={estado}&sexo={Masculino|Feminino|Outro}

### Atualiza cliente

	PUT /api/cliente/22 HTTP/1.1
	Host: localhost
	Content-Type: application/json
	Content-Length: 195
	
	{"id":"","nome":"","cpf":"","":"","logradouro":"","numero":"","cidade":"","estado":"","complemento":"","foto":"","sexo":""}

Apaga cliente

	DELETE /api/cliente/22 HTTP/1.1
	Host: localhost

