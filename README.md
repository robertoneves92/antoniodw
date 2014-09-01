NetAPP
======

# Instalação

1. Antes de tudo deve estar instalado na máquina o php e o mysql nas versões atualizadas.
2. Com o serviços web devidamente configurado (apache2), coloque os arquivos no seu diretório web("/var/www ou o que você tenha configurado").
3. Com o phpmyadmin instalado no seu servidor crie o  Banco de Dados monitoramento e dentro dele importe o arquivo "monitoramento.sql" aonde já está configurado as váriáveis de acesso do banco. OBS:"Como as senhas dos bancos de dados variam muito os arquivos que necessitarem conexão com o banco deverão ter sua senha de root aonde alterada, pois no meu cenário a senha do root era 123".
4. Com os arquivos devidamente colocados no seu diretório web os aplicativos estão prontos para uso.

# Aplicativos

Bem, no meu projeto criei algumas ferramentas web para solucionar problemas de conectividade e exibir as configurações e aplicações de rede nativas. Dentro do projeto estarão os seguintes aplicativos:
- Ferramenta ping para testar conexão de rede (Linux/Windows)
- Ferramenta ipconfig para mostrar as configurações de rede (Linux/Windows). Obs: Se você estiver utilizando a plataforma windows, no arquivo appipconfig.php você irá alterar a linha dentro do textarea onde está sendo dado um echo na variável ifconfig e substitui-la pela variável ipconfig para funcionar na sua plaforma windows.
- Ferramenta netstat irá mostrar todos os processos e quais portas estão sendo utilizadas por eles em sua máquina(Linux/Windows)
- Ferramenta traceroute Configurando a linha do shell_exec que passa o comando como parametro para tracert, a mesma funciona perfeitamente na Plataforma Windows

# Site
- Contém uma sessão de login integrada ao banco de dados "monitoramento" para logar e ter acesso aos aplicativos
- Um campo de cadastro para aonde os visitantes poderão se cadastrar para poderem usar nossos aplicativos
- uso da ferramenta bootstrap para estilização do site
- Uso de jquery e scripts para as aplicações 

