# Projeto C10

O Ciência é 10! é uma iniciativa da CAPES que integra o programa Ciência na Escola, do MEC, MCTIC e CNPq. Trata-se de um curso de especialização para professores graduados que estão atuando no sistema público de ensino e dando aulas de ciências nos anos finais do Ensino Fundamental, ou seja, do 6º ao 9º ano. É realizado na modalidade ensino a distância (EAD), com garantia da CAPES e certificação do MEC, junto com as Instituições Públicas de Ensino parceiras.

O Ciência é 10! é um dos diversos cursos da Universidade Aberta do Brasil (UAB), um sistema gerido pela CAPES para integrar e articular as universidades públicas com os governos municipais, estaduais e federal, a fim de facilitar o acesso dos professores do Ensino Básico de todo o País a uma formação continuada e de qualidade.

Site do projeto:  [https://c10.capes.gov.br/](https://c10.capes.gov.br/)

Neste repositório temos a imagem do curso Ciência é 10, pronto para uso. Abaixo temos dois roteiros para instalação: usando o docker-compose o usando os comandos manuais do docker.

# Opção 1: Instalando usando o Docker Compose

## Pré-requitisos:

 - Docker Engine ([https://docs.docker.com/install/](https://docs.docker.com/install/)) instalado
 - Docker Compose ([https://docs.docker.com/compose/](https://docs.docker.com/compose/)) instalado

## Etapas:

 1. Crie um diretório chamado C10 e entre nele
    mkdir c10
    cd c10
 2. Baixar o arquivo docker-compose.yml modelo :
    wget https://github.com/CAPES/c10/raw/master/docker-compose.yml
 3. Editar o arquivo do docker-compose.yml e alterar a variável DBPASS para uma nova senha única
 4. Usar o docker-compose para inicializar a imagem:
    docker-compose up -d

# Opção 2: Sem usar o Docker Compose

## Pré-requitisos:

 - Docker Engine ([https://docs.docker.com/install/](https://docs.docker.com/install/)) instalado

## Etapas:
1. Criando os volumes a serem utilizados para persistir os dados:
   docker volume create c10_moodledata
   docker volume create c10_dbdata
   docker volume create c10_logs
2. Inicializando o container, altere SenhaDoBanco para uma nova senha única:
   docker run -it --name C10 -v c10_moodledata:/var/moodledata -v c10_dbdata:/var/lib/postgresql/10/main -v c10_logs:/var/log -p 80:80 capes/c10
   docker run -it --name C10 -e DBPASS=SenhaDoBanco -v c10_moodledata:/var/moodledata -v c10_dbdata:/var/lib/postgresql/10/main -v c10_logs:/var/log -p  
80:80 capes/c10
3. Inicializando o container em background:
   docker run -itd --name C10 -v c10_moodledata:/var/moodledata -v c10_dbdata:/var/lib/postgresql/10/main -v c10_logs:/var/log -p 80:80 capes/c10
   docker run -itd --name C10 -e DBPASS=SenhaDoBanco -v c10_moodledata:/var/moodledata -v c10_dbdata:/var/lib/postgresql/10/main -v c10_logs:/var/log -p

# Testando o C10

Acesse a local:  [http://localhost](http://localhost/)
   Nome de usuário: admin
   Senha: @Mudar2018
